<?php

class Kelengkapan extends CI_Controller
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
    $this->load->view('admin/riwayat_pendidikan/kelengkapan', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/javascript');
  }

  // public function tambah()
  // {
  //   $this->form_validation->set_rules('tingkat', 'Tingkat', 'required');

  //   if ($this->form_validation->run() == false) {
  //     $data = [
  //       'title' => 'Halaman Data Sekolah',
  //       'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
  //     ];

  //     $this->load->view('templates/header', $data);
  //     $this->load->view('templates/sidebar-admin');
  //     $this->load->view('templates/topbar', $data);
  //     $this->load->view('admin/riwayat_pendidikan/data_kelengkapan');
  //     $this->load->view('templates/footer');
  //     $this->load->view('templates/javascript');
  //   } else {

  //     $data = [
  //       'id_pegawai'         => $this->input->post('id_pegawai'),
  //       'tingkat'  => $this->input->post('tingkat'),
  //       'nm_skl_uv'          => $this->input->post('nm_skl_uv'),
  //       'lokasi'     => $this->input->post('lokasi'),
  //       'jurusan'     => $this->input->post('jurusan'),
  //       'no_ijz'       => $this->input->post('no_ijz'),
  //       'tgl_ijz'   => $this->input->post('tgl_ijz'),
  //       'nm_ks_rk'   => $this->input->post('nm_ks_rk')
  //     ];

  //     $this->model_sekolah->tambah_sekolah($data);
  //     $this->session->set_flashdata('message', 'Ditambahkan');
  //     redirect('admin/dashboard');
  //   }
  // }
}
