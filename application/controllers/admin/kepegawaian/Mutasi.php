<?php

class Mutasi extends CI_Controller
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
            'title' => 'Halaman Data Mutasi',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kepegawaian/mutasi', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('jenis_mutasi', 'Jenis Mutasi', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Data Mutasi',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kepegawaian/mutasi');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {

            $data = [
                'id_pegawai'        => $this->input->post('id_pegawai'),
                'jenis_mutasi'  => $this->input->post('jenis_mutasi'),
                'no_sk_mts' => $this->input->post('no_sk_mts'),
                'tgl_mts' => $this->input->post('tgl_mts')
            ];

            $this->model_mutasi->tambah_mutasi($data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/dashboard');
        }
    }
}
