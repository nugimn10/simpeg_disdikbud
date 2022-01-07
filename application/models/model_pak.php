<?php

class Model_pak extends CI_Model
{
    public function tambah_pak($data)
    {
        $this->db->insert('pak', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->order_by('id_pak', 'asc')->get_where('pak', ['pegawai_id' => $id])->result();
    }
    public function tampil_by_id($id)
    {
        return $this->db->get_where('pak', ['id_pak' => $id])->row();
    }

    public function edit_pak($where,$data)
    {
        $this->db->where($where);
        $this->db->update('pak', $data);
    }

    public function tampil_berkas_by_id_pegawai($id)
    {
        $db = $this->db->select('pegawai_id')
                       ->get_where('pak', ['pegawai_id' => $id])->result();
        return $db;
    }

    public function hapus_pak($where, $table)
    {
        
        $this->db->where($where);
        $this->db->delete($table);
    }
}