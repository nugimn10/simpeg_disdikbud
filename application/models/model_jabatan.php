<?php

class Model_jabatan extends CI_Model
{
    public function tambah_jabatan($data)
    {
        $this->db->insert('jabatan', $data);
    }

    public function tampil_by_id_pegawai($id)
    {
        return $this->db->get_where('jabatan', ['id_pegawai' => $id])->result();

        // $this->db->select('master_eselon.eselon, master_jabatan.nm_jabatan, jabata
        // n.jenis_jbt, jabatan.no_sk_jbt, jabatan.tgl_sk_jbt, jabatan.awal_masa_jbt, jabat
        // an.akhir_masa_jbt');
        // $this->db->from('jabatan');
        // $this->db->join('master_jabatan, master_eselon', 'jabatan.
        // id_master_jabatan = master_jabatan.id_master_jabatan and jabatan.id_master_eselo
        // n = master_eselon.id_master_eselon');
        // $this->db->where('jabatan.id_pegawai', $id);

        // $query = 'SELECT master_eselon.eselon, master_jabatan.nm_jabatan, jabatan.jenis_jbt, jabatan.no_sk_jbt, jabatan.tgl_sk_jbt, jabatan.awal_masa_jbt, jabatan.akhir_masa_jbt FROM jabatan JOIN master_eselon, master_jabatan ON jabatan.id_master_jabatan = master_jabatan.id_master_jabatan AND jabatan.id_master_eselon = master_eselon.id_master_eselon';

        // $this->db->where('id_pegawai', $id);
        // return $query;
    }
}
