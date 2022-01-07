<?php

class Bahasa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('level') != 'Administrator') {
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
      'title' => 'Halaman Data Riwayat Pendidikan',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'pegawai' => $this->model_pegawai->tampil_semua()
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar-admin');
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/riwayat_pendidikan/bahasa', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/javascript');
  }

  public function tambah()
  {
    $this->form_validation->set_rules('bahasa', 'Bahasa', 'required');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Halaman Data Bahasa',
        'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
      ];

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar-admin');
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/riwayat_pendidikan/bahasa');
      $this->load->view('templates/footer');
      $this->load->view('templates/javascript');
    } else {

      $data = [
        'id_pegawai'  => $this->input->post('id_pegawai'),
        'bahasa'      => $this->input->post('bahasa'),
        'kmp_bcr'     => $this->input->post('kmp_bcr')
      ];

      $this->model_bahasa->tambah_bahasa($data);
      $this->session->set_flashdata('message', 'Ditambahkan');
      redirect('admin/dashboard');
    }
  }
}
