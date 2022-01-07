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
    public function tampil_izin_by_id($id)
    {
        return $this->db->get_where('izin', ['pegawai_id' => $id])->row();
    }

    public function tampil_semua_izin()
    {

        $this->db->select('*');
        $this->db->from('izin');
        $this->db->join('pegawai','izin.pegawai_id=pegawai.id_pegawai');
        $this->db->order_by('tgl_dibuat','asc');
        $query = $this->db->get();
        return $query->result();

        // $query = $this->db->get('izin');
        // return $query->result();
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

    public function tampil_kgb($tgl_kngj)
    {
        // $this->db->where('id_pegawai', $id);
        $this->db->get_where('pegawai', ['tgl_knk_pkt' => $tgl_kngj]);
    }
}
