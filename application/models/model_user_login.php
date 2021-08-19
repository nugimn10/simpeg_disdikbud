<?php

class Model_user_login extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('user');
    }

    public function tampil_semua()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function tampil_by_id($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row();
    }

    public function tambah_user($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_user($data)
    {
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    public function hapus_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function ubah_password($data)
    {
        $this->db->set('password', 'current_password');
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('user', $data);
    }
}
