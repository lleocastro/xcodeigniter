<?php

/*
 ===========================================================================
 = Initialize The Auto Loader
 ===========================================================================
 =
 = Composer provides a convenient, automatically generated class loader
 = for your application.
 =
 */
require_once (dirname(__DIR__) . '/loaders/composer.php');

/*
 ===========================================================================
 = Initialize The Application
 ===========================================================================
 =
 = Load all services, files and modules to initialize the ecosystem.
 =
 */
require_once (dirname(__DIR__) . '/loaders/xcodeigniter.php');

// Is ok.
return true;