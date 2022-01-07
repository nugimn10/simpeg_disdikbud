<?php

class Izin_pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 'Supervisor') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }

    public function izin()
    {
        $data = [
            'title' => 'Halaman Data Izin Pegawai',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'izin' => $this->model_pegawai->tampil_semua_izin(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/izin', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }
    public function konfirmasi($id)
    {
        $id_izin = $this->input->post('id_izin');
        $perihal = $this->input->post('perihal');
        $keterangan = $this->input->post('keterangan');
        $dari_tgl = $this->input->post('dari_tgl');
        $sampai_tgl = $this->input->post('sampai_tgl');
        $date = date('Y-m-d');

        $data = [
            // 'id_izin'           => $id_izin,
            'pegawai_id'        => $id,
            'perihal'           => $perihal,
            'keterangan'        => $keterangan,
            'dari_tgl'          => $dari_tgl,
            'sampai_tgl'        => $sampai_tgl,
            'tgl_dibuat'        => $date,
            'stts'              =>  "1",
        ];

        var_dump($data);
        $this->db->where('id_izin', $this->input->post('id_izin'));
        $this->db->update('izin',$data);
        $this->session->set_flashdata('message', 'Di periksa');
        redirect('supervisor/izin_pegawai/izin/');
    }

}