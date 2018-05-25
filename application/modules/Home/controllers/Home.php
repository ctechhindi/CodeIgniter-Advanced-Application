<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('My_Controller')) {
    require_once FCPATH.'application/core/My_Controller.php';
}

class Home extends My_Controller
{
    public function index() {
        $data['title'] = "Welcome to Home Page";
        $this->load->view("header", $data);
        $this->load->view("menu");
        $this->load->view("home");
        $this->load->view("footer");
    }
}
