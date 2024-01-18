<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('auth/login');
        
    }

    public function proses_login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $this->m_login->proses_login($email, $pass);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
}

/* End of file Admin.php */
