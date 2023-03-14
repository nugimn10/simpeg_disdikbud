<?php

class Model_sekolah extends CI_Model
{
    public function tambah_sekolah($data)
    {
        $this->db->insert('sekolah', $data);
    }
    
    public function tampil_by_id($id)
    {
        return $this->db->get_where('sekolah', ['id_sekolah' => $id])->row();
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->order_by('tgl_ijz','desc')->get_where('sekolah', ['id_pegawai' => $id])->result();
    }
    
    public function edit_sekolah($data)
    {
        $this->db->where('id_sekolah', $this->input->post('id_sekolah'));
        $this->db->update('sekolah', $data);
    }

    public function hapus_sekolah($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
