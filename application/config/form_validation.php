<?php

$config = array(
    'users/register' => [
        array(
            'field' => 'fullname',
            'label' => 'Full Name',
            'rules' => 'trim|required|max_length[50]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|max_length[50]|callback_email_check|valid_email',
            'errors' => array(
                'is_unique' => "This %s already exists please enter another email",
            ),
        ),
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|alpha_numeric|is_unique[users.username]|max_length[50]',
            'errors' => array(
                'is_unique' => "This %s already exists please enter another username"
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Password Confirmation',
            'rules' => 'trim|required|matches[password]'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'trim|required|max_length[10]|min_length[10]'
        ),
        array(
            'field' => 'agree',
            'label' => 'Agree to terms and conditions',
            'rules' => 'trim|required'
        ),
    ],
);