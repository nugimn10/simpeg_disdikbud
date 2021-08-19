<?php

class Pangkat extends CI_Controller
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
            'title' => 'Halaman Data Pangkat',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
            'master_golongan' => $this->model_master_golongan->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kepegawaian/pangkat');
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_master_golongan', 'Golongan', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Data Pangkat',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kepegawaian/pangkat');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {

            $data = [
                'id_pegawai'        => $this->input->post('id_pegawai'),
                'id_master_golongan'  => $this->input->post('id_master_golongan'),
                'pangkat'         => $this->input->post('pangkat'),
                'tmt_pkt'        => $this->input->post('tmt_pkt'),
                'pjb_pgs_pkt'     => $this->input->post('pjb_pgs_pkt'),
                'no_sk_pkt'    => $this->input->post('no_sk_pkt'),
                'tgl_sk_pkt'    => $this->input->post('tgl_sk_pkt')
            ];

            $this->model_pangkat->tambah_pangkat($data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/dashboard');
        }
    }
}
