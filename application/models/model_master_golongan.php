<?php

class Model_master_golongan extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('master_golongan');
        return $query->result();
    }
}
