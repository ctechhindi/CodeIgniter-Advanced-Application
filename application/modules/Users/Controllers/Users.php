<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('My_Controller')) {
    require_once FCPATH.'application/core/My_Controller.php';
}

class Users extends My_Controller
{
    public function __construct() {
	    parent::__construct();
    }
    

    /**
     * Login User
     */
    public function login()
    {
        $this->set_layout->_home([
            'pageTitle'   => 'Welcome to Home Page',
            'pageContant' => 'login',
        ]);
    }

    /**
     * Register User
     */
    public function register()
    {
        $this->set_layout->_home([
            'pageTitle'   => 'Welcome to Home Page',
            'pageContant' => 'register',
        ]);
    }
}
