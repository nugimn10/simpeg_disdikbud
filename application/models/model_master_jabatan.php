<?php

class Model_master_jabatan extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('master_jabatan');
        return $query->result();
    }

    public function tambah_master_jabatan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_master_jabatan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_master_jabatan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_master_jabatan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
