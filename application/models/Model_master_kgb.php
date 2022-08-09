<?php

class Model_master_kgb extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('master_kgb');
        return $query->result();
    }

    public function tampil_by_id($master_kgb_id)
    {
        return $this->db->get_where('master_kgb', ['id_master_kgb' => $master_kgb_id])->row();
    }

    public function tampil_by_tgl($tgl_mulai)
    {
        return $this->db->get_where('master_kgb', ['tgl_mulai' => $tgl_mulai])->row();
    }

    public function tambah_master_kgb($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_master_kgb($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_master_kgb($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_master_kgb($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

