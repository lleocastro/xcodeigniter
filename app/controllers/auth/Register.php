<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    /**
     * Where to redirect users after register.
     *
     * @var string
     */
    protected $redirect_to = 'login';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auth->who_see('noauth', '/home');
    }

    /**
     * Show the form for logging in application.
     *
     * @return HttpResponse
     */
    public function index()
    {
        return $this->load->view('auth/sign-up');
    }

    /**
     * Register the user with their credentials.
     *
     * @return HttpResponse
     */
    public function store()
    {
        $callback = $this->auth->register();

        if ($callback !== null) {
            return $this->load->view('auth/sign-up', [
                'errors' => $callback->errors()
            ]);
        }

        redirect($this->redirect_to);
    }

}
