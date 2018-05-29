<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('My_Controller')) {
    require_once FCPATH.'application/core/My_Controller.php';
}

class Users extends My_Controller
{
    public function __construct() {
        parent::__construct();
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
    }
    
    /**
     * Register User
     */
    public function register()
    {
        $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|is_unique[users.email]|valid_email',[
            'is_unique' => "This %s already exists please enter another email"
        ]);
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|is_unique[users.username]|max_length[50]',[
            'is_unique' => "This %s already exists please enter another username"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('agree', 'Agree to terms and conditions', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->set_layout->_home([
                'pageTitle'   => 'Welcome to Home Page',
                'pageContant' => 'register',
            ]);
        }
        else
        {
            echo 'formsuccess';
        }
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
}
