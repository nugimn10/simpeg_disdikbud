<?php

class Model_pangkat extends CI_Model
{
    public function tambah_pangkat($data)
    {
        $this->db->insert('pangkat', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('pangkat', ['id_pegawai' => $id])->result();
    }
}
