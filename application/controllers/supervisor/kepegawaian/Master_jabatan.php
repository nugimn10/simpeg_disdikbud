<?php

class Master_jabatan extends CI_Controller
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
            'title' => 'Halaman Data Master Jabatan',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'master_jabatan' => $this->model_master_jabatan->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/kepegawaian/master_jabatan', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $nm_jabatan = $this->input->post('nm_jabatan');

        $data = [
            'nm_jabatan' => $nm_jabatan
        ];

        $this->model_master_jabatan->tambah_master_jabatan($data, 'master_jabatan');
        redirect('supervisor/kepegawaian/master_jabatan');
    }

    public function edit($id)
    {
        $where = ['id_master_jabatan' => $id];

        $data = [
            'title' => 'Halaman Edit Data Master Jabatan',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'master_jabatan' => $this->model_master_jabatan->edit_master_jabatan($where, 'master_jabatan')->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/kepegawaian/edit_master_jabatan', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function update()
    {
        $id = $this->input->post('id_master_jabatan');
        $nm_jabatan = $this->input->post('nm_jabatan');

        $data = [
            'nm_jabatan' => $nm_jabatan
        ];

        $where = ['id_master_jabatan' => $id];

        $this->model_master_jabatan->update_master_jabatan($where, $data, 'master_jabatan');
        redirect('supervisor/kepegawaian/master_jabatan');
    }

    public function hapus($id)
    {
        $where = ['id_master_jabatan' => $id];
        $this->model_master_jabatan->hapus_master_jabatan($where, 'master_jabatan');
        redirect('supervisor/kepegawaian/master_jabatan');
    }
}
