<?php

class Model_suami_istri extends CI_Model
{
    public function tampil_by_id($id)
    {
        return $this->db->get_where('suami_istri', ['id_suami_istri' => $id])->row();
    }

    public function tambah_suami_istri($data)
    {
        $this->db->insert('suami_istri', $data);
    }

    public function edit_suami_istri($data)
    {
        $this->db->where('id_suami_istri', $this->input->post('id_suami_istri'));
        $this->db->update('suami_istri', $data);
    }

    public function hapus_suami_istri($id)
    {
        $this->db->delete('suami_istri', ['id_suami_istri' => $id]);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('suami_istri', ['id_pegawai' => $id])->result();
    }
}
