<?php

class M_login extends CI_model
{
    public function proses_login($email, $pass)
    {
        $password = ($pass);
        $email = $this->db->where('email', $email);
        $pass = $this->db->where('password', $password);
        $query = $this->db->get('tb_login');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id'        => $row->id,
                    'nama'      => $row->nama,
                    'email'     => $row->email,
                    'password'  => $row->password
                );
                $this->session->set_userdata($sess);
            }
            redirect('admins/settings');
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Login Gagal, Silahkan Periksa Username dan Password !</div>');
            redirect('admin');
        }
    }
}

    



                
                
