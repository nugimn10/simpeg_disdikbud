<?php

class Model_orangtua extends CI_Model
{
    public function tambah_orangtua($data)
    {
        $this->db->insert('orangtua', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('orangtua', ['id_pegawai' => $id])->result();
    }
}
