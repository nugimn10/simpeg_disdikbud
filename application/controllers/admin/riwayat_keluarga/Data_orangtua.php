<?php

class Data_orangtua extends CI_Controller
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
      'title' => 'Halaman Data Riwayat Keluarga',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'pegawai' => $this->model_pegawai->tampil_semua()
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar-admin');
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/riwayat_keluarga/data_orangtua', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/javascript');
  }

  public function tambah()
  {
    $this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Halaman Data Orangtua',
        'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
      ];

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar-admin');
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/riwayat_keluarga/data_orangtua');
      $this->load->view('templates/footer');
      $this->load->view('templates/javascript');
    } else {

      $data = [
        'id_pegawai'         => $this->input->post('id_pegawai'),
        'nik'  => $this->input->post('nik'),
        'nama'          => $this->input->post('nama'),
        'tpt_lhr'     => $this->input->post('tpt_lhr'),
        'tgl_lhr'     => $this->input->post('tgl_lhr'),
        'pddk'       => $this->input->post('pddk'),
        'pkrj'   => $this->input->post('pkrj'),
        'stts_hub'   => $this->input->post('stts_hub')
      ];

      $this->model_orangtua->tambah_orangtua($data);
      $this->session->set_flashdata('message', 'Ditambahkan');
      redirect('admin/dashboard');
    }
  }
}
