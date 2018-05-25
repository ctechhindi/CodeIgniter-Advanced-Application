<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('My_Controller')) {
    require_once FCPATH.'application/core/My_Controller.php';
}

class Home extends My_Controller
{
    public function index() {
        $this->load->view("home");
    }
}
