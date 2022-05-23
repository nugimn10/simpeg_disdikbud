<?php

class Mutasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 'Pegawai') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }

    public function index($id)
    {
        
        $data = [
            'title' => 'Halaman Detail Pegawai',
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'id_pegawai' => $this->db->get_where('user', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'suami_istri' => $this->model_suami_istri->tampil_by_id_pegawai($id),
            'orangtua' => $this->model_orangtua->tampil_by_id_pegawai($id),
            'bahasa' => $this->model_bahasa->tampil_by_id_pegawai($id),
            'sekolah' => $this->model_sekolah->tampil_by_id_pegawai($id),
            'jabatan' => $this->model_jabatan->tampil_by_id_pegawai($id),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'berkas' => $this->model_master_berkas->tampil_semua(),
            'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id),
            'master_eselon' => $this->model_master_eselon->tampil_semua(),
            'master_jabatan' => $this->model_master_jabatan->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-pegawai');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/kepegawaian/mutasi', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah($id)
    {
        $this->form_validation->set_rules('jenis_mutasi', 'Jenis Mutasi', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Data Mutasi',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-pegawai');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pegawai/kepegawaian/mutasi');
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
            redirect('pegawai/beranda');
        }
    }
}
