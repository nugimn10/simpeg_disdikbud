<?php

class Model_master_berkas extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('master_berkas');
        return $query->result();
    }

    public function tampil_by_id($berkas_id)
    {
        return $this->db->get_where('master_berkas', ['id_berkas' => $berkas_id])->row();
    }

    public function tampil_by_tgl($tgl_mulai)
    {
        return $this->db->get_where('master_berkas', ['tgl_mulai' => $tgl_mulai])->row();
    }

    public function tambah_master_berkas($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_master_berkas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_master_berkas($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_master_berkas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

