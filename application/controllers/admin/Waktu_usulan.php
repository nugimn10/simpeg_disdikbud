<?php

class Waktu_usulan extends CI_Controller
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
            'title' => 'Halaman Cetak Penilaian Angka Kredit',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'master_berkas' => $this->model_master_berkas->tampil_semua(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/waktu_usulan', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tgl_usulan($id){

        $id=1;
        $tgl_usulan = $this->model_master_berkas->tampil_by_id($id);

        
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $data = [
            'id_berkas'     => $tgl_usulan->id_berkas,
            'nb'            => $tgl_usulan->nb,
            'fn'            => $tgl_usulan->fn,
            'last_update'   => $tgl_usulan->last_update,
            'tgl_mulai'     => $tgl_mulai,
            'tgl_selesai'   => $tgl_selesai
        ];

        // var_dump($data);
        $this->db->where('id_berkas', $id);
        $this->db->update('master_berkas', $data);
        redirect('admin/waktu_usulan/');
    }
    
}