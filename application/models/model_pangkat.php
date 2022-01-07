<?php

class Model_pangkat extends CI_Model
{
    public function tambah_pangkat($data)
    {
        $this->db->insert('pangkat', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        $this->db->select('*');
        $this->db->from('pangkat');
        $this->db->join('master_golongan','pangkat.id_master_golongan=master_golongan.id_master_golongan');
        $this->db->where(['pangkat.id_pegawai' => $id]);
        $this->db->order_by('tmt_pkt','desc');
        $query = $this->db->get();
        return $query->result();
        // return $this->db->get_where('pangkat', ['id_pegawai' => $id])->result();
    }
}
