<?php

class Model_kelengkapan extends CI_Model
{
    public function tambah_kelengkapan($data)
    {
        $this->db->insert('kelengkapan', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('kelengkapan', ['pegawai_id' => $id])->result();
    }
    public function tampil_by_id($id)
    {
        return $this->db->get_where('kelengkapan', ['id_kelengkapan' => $id])->row();
    }

    public function edit_kelengkapan($where,$data)
    {
        $this->db->where($where);
        $this->db->update('kelengkapan', $data);
    }

    public function tampil_berkas_by_id_pegawai($id)
    {
        $db = $this->db->select('pegawai_id')
                       ->get_where('kelengkapan', ['pegawai_id' => $id])->result();
        return $db;
    }

    public function hapus_kelengkapan($where, $table)
    {
        
        $this->db->where($where);
        $this->db->delete($table);
    }
}