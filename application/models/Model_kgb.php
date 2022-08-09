<?php

class Model_kgb extends CI_Model
{
    public function tambah_kgb($data)
    {
        $this->db->insert('kgb', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->order_by('id_kgb', 'asc')->get_where('kgb', ['pegawai_id' => $id])->result();
    }
    public function tampil_by_id($id)
    {
        return $this->db->get_where('kgb', ['id_kgb' => $id])->row();
    }

    public function edit_kgb($where,$data)
    {
        $this->db->where($where);
        $this->db->update('kgb', $data);
    }

    public function tampil_berkas_by_id_pegawai($id)
    {
        $db = $this->db->select('pegawai_id')
                       ->get_where('kgb', ['pegawai_id' => $id])->result();
        return $db;
    }

    public function hapus_kgb($where, $table)
    {
        
        $this->db->where($where);
        $this->db->delete($table);
    }
}