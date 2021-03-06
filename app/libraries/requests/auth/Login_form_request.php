<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_form_request
{
    /**
     * Reference to CodeIgniter instance.
     *
     * @var object
     */
    protected $CI;

    /**
     * Create a new request instance and load necessary resources.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('form_validation');
    }

    /**
     * Validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'Email' => [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required|valid_email|min_length[7]|max_length[100]'
            ],
            'Password' => [
                'field' => 'password',
                'label' => 'senha',
                'rules' => 'required|min_length[6]'
            ]
        ];
    }

    /**
     * @return bool
     */
    public function run()
    {
        $this->CI->form_validation->set_rules($this->rules());
        return ($this->CI->form_validation->run() !== false) ? true : false;
    }

    /**
     * @return array
     */
    public function fails()
    {
        return get_validation_errors_in_array();
    }

}
