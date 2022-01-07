<?php

class Jabatan extends CI_Controller
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
            'title' => 'Halaman Data Jabatan',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
            'master_eselon' => $this->model_master_eselon->tampil_semua(),
            'master_jabatan' => $this->model_master_jabatan->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/kepegawaian/jabatan');
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('jenis_jbt', 'Jenis Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Data Jabatan',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-supervisor');
            $this->load->view('templates/topbar', $data);
            $this->load->view('supervisor/kepegawaian/jabatan');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {

            $data = [
                'id_pegawai'        => $this->input->post('id_pegawai'),
                'id_master_eselon'  => $this->input->post('id_master_eselon'),
                'id_master_jabatan' => $this->input->post('id_master_jabatan'),
                'jenis_jbt'         => $this->input->post('jenis_jbt'),
                'no_sk_jbt'         => $this->input->post('no_sk_jbt'),
                'tgl_sk_jbt'        => $this->input->post('tgl_sk_jbt'),
                'awal_masa_jbt'     => $this->input->post('awal_masa_jbt'),
                'akhir_masa_jbt'    => $this->input->post('akhir_masa_jbt')
            ];

            $this->model_jabatan->tambah_jabatan($data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('supervisor/beranda');
        }
    }
}
