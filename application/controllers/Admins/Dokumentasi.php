<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Dokumentasi Project',
            'isi' => 'admin/dokumentasi/home'
        );

        $this->load->view('admin/layout', $data, FALSE);
        
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Tambah Dokumentasi Project',
                'isi' => 'admin/dokumentasi/tambah'
            );
            $this->load->view('admin/layout', $data, FALSE);
        } else {
            $nama_wisata = $this->input->post('nama_wisata');
            $deskripsi = $this->input->post('deskripsi');


            $config['upload_path'] = 'vendor/dokumentasi';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '99999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('thumbnail')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('pesan', "<script>alert('$error')</script>");
                redirect(base_url('admins/dokumentasi/tambah'));
            } else {
                $data = array(
                    'thumbnail' => $this->upload->data('file_name'),
                    'nama_wisata' => $nama_wisata,
                    'deskripsi' => $deskripsi,
                );

                $this->db->insert('tb_dokumentasi', $data);
                $this->session->set_flashdata('pesan', '<script>alert("Success Post Dokumentasi")</script>');
                redirect(base_url('admins/dokumentasi'));
            }
        }
    }

    public function edit($id)
    {
         $this->form_validation->set_rules('nama_wisata', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Dokumentasi',
                'isi' => 'admin/dokumentasi/edit',
                'id' => $id
            );

            $this->load->view('admin/layout', $data, FALSE);
        } else {
            $nama_wisata = $this->input->post('nama_wisata');
            $deskripsi = $this->input->post('deskripsi');

            $config['upload_path'] = 'vendor/dokumentasi/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '9999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('thumbnail')) {
                $data = array(
                    'nama_wisata' => $nama_wisata,
                    'deskripsi' => $deskripsi,
                );

                $this->db->where('id_dokumentasi', $id);
                $this->db->update('tb_dokumentasi', $data);
                $this->session->set_flashdata('pesan', '<script>alert("Berhasil update")</script>');
                redirect(base_url('admins/dokumentasi'));
            } else {
                $data = array(
                    'thumbnail' => $this->upload->data('file_name'),
                    'nama_wisata' => $nama_wisata,
                    'deskripsi' => $deskripsi,
                );

                $this->db->where('id_dokumentasi', $id);
                $this->db->update('tb_dokumentasi', $data);
                $this->session->set_flashdata('pesan', '<script>alert("Berhasil update")</script>');
                redirect(base_url('admins/dokumentasi'));
            }
        }
    }

    public function update()
    {
        
		$id_dokumentasi = $this->input->post('id_dokumentasi');
		$nama_wisata = $this->input->post('nama_wisata');
		$deskripsi = $this->input->post('deskripsi');

    
            $data = array(
                'id_dokumentasi' => $this->input->post('id_dokumentasi'),
                'thumbnail' => $this->input->post('thumbnail'),
                'nama_wisata' => $this->input->post('nama_wisata'),
                'deskripsi' => $this->input->post('deskripsi'),
                'views' => $this->input->post('views')
            );

            $this->load->model('m_upload');
            $query = $this->m_upload->update_foto($id_dokumentasi, $data);
            if ($query = true) {
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil update")</script>');
            redirect(base_url('admins/dokumentasi'));
            }
        
        
    }

    public function proses_update_foto() 
    {
        $config['upload_path'] = 'vendor/dokumentasi/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 99999; 
        $this->load->library('upload', $config);
    
    if (!$this->upload->do_upload('thumbnail')) {
		$id_dokumentasi = $this->input->post('id_dokumentasi');

        $data = array(
            'id_dokumentasi' => $this->input->post('id_dokumentasi'),
            'thumbnail' => $this->input->post('thumbnail'),
            'nama_wisata' => $this->input->post('nama_wisata'),
            'deskripsi' => $this->input->post('deskripsi'),
            'views' => $this->input->post('views')
        );

        $this->load->model('m_upload');
        $query = $this->m_upload->update_foto($id_dokumentasi, $data);
        if ($query = true) {
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil update")</script>');
        redirect(base_url('admins/dokumentasi'));
        }
    } else {
        $data = array('thumbnail' => $this->upload->data());
        // Proses data foto yang diunggah, misalnya, menyimpan informasi ke database.
        $thumbnail = $data['thumbnail']['file_name'];

        // Update foto di database
        $this->load->model('m_upload');
        $this->m_upload->update_foto($id_dokumentasi, $thumbnail);
    }
}


    public function hapus($id)
    {
        $this->db->where('id_dokumentasi', $id);
        $this->db->delete('tb_dokumentasi');
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil hapus data")</script>');
        redirect(base_url('admins/dokumentasi'));
    }
}

/* End of file Dokumentasi.php */
