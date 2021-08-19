<?php

class Model_mutasi extends CI_Model
{
    public function tambah_mutasi($data)
    {
        $this->db->insert('mutasi', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('mutasi', ['id_pegawai' => $id])->result();
    }
}
