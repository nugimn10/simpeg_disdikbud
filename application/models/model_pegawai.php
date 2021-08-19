<?php

class Model_pegawai extends CI_Model
{
    public function tampil_semua()
    {
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function cari_pegawai($key)
    {
        $this->db->like("nip",$key);
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function tampil_by_id($id)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $id])->row();
    }

    public function tambah_pegawai($data)
    {
        $this->db->insert('pegawai', $data);
    }

    public function edit_pegawai($data)
    {
        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function hapus_pegawai($id)
    {
        // $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai', ['id_pegawai' => $id]);
    }
}
