<?php 

class M_upload extends CI_Model {

    public function update_foto($id_dokumentasi, $data) 
    {
        $this->db->where('id_dokumentasi', $id_dokumentasi);
        $this->db->update('tb_dokumentasi', $data);
    }
}