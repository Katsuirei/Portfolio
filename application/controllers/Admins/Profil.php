<?php

class Profil extends CI_Controller
{

    public function index()
    {
        $isi['judul']   = 'Profil Saya';
        $this->load->view('v_profil', $isi);
    }
}