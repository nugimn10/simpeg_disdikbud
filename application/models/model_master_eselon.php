<?php

class Model_master_eselon extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('master_eselon');
        return $query->result();
    }
}
