<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('subject', 'subject', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $settings = $this->db->get('tb_settings')->row_array();
            $dokumentasi = $this->db->get('tb_dokumentasi')->result();

            $data = array(
                'title' => 'Portfolio',
                'isi' => 'page/home',
                'settings' => $settings,
                'dokumentasi' => $dokumentasi,
            );
            $this->load->view('page/layout', $data, FALSE);
        }
    }

    public function dokumentasi($id)
    {
        $settings = $this->db->get('tb_settings')->row_array();
        $dokumentasi = $this->db->get('tb_dokumentasi', 6)->result();

        $data = array(
            'title' => 'My Project',
            'isi' => 'page/dokumentasi/detail',
            'settings' => $settings,
            'dokumentasi' => $dokumentasi,
        );
        $this->load->view('page/layout', $data, FALSE);
    }
}