<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_info')) {

            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view('users/index');
    }
}

?>