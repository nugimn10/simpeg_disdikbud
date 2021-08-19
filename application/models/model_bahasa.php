<?php

class Model_bahasa extends CI_Model
{
    public function tambah_bahasa($data)
    {
        $this->db->insert('bahasa', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('bahasa', ['id_pegawai' => $id])->result();
    }
}
