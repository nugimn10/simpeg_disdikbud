<?php

class Model_ak extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('angka_kredit');
        return $query->result();
    }

    public function tampil_by_id($ak_id)
    {
        return $this->db->get_where('angka_kredit', ['id_ak' => $ak_id])->row();
    }

    public function tambah_master_angka($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_master_ak($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_master_ak($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_master_ak($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

