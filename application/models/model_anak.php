<?php

class Model_anak extends CI_Model
{
    public function tambah_anak($data)
    {
        $this->db->insert('anak', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('anak', ['id_pegawai' => $id])->result();
    }
}
