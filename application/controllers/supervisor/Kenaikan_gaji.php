<?php

class Kenaikan_gaji extends CI_Controller
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

    public function index()
    {
        $data = [
            'title' => 'Halaman Kenaikan Gaji Berkala',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/kenaikan_gaji', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }
}