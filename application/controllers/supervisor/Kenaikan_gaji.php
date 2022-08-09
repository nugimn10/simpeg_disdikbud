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
            'pegawai1' => $this->model_pegawai->tampil_berdasarkan_jabatan(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/kenaikan_gaji', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function periksa($id)
    {
        $data = [
            'title' => 'Halaman Detail Pegawai',
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'ak' => $this->model_ak->tampil_semua(),
            'pak' => $this->model_pak->tampil_by_id_pegawai($id),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/berkas_kgb', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function selesai($id)
    {
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data1 = [
            'stts_knk_gj' => "2"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data1);

        $nmr_surat = $this->input->post('nmr_surat');
        $t_berlaku = $this->input->post('t_berlaku');
        $gp_lama = $this->input->post('gp_lama');
        $gp_baru = $this->input->post('gp_baru');
        $no_ds_gplama = $this->input->post('no_ds_gplama');
        $nm_kadis = $this->input->post('nm_kadis');
        $nip_kadis = $this->input->post('nip_kadis');
        $pnkt = $this->input->post('pnkt');
        $data2 = [
            'pegawai_id' => $pegawai->id_pegawai,
            'nmr_surat' => $nmr_surat,
            'gj_lama' => $gp_lama,
            'gj_baru' => $gp_baru,
            'tgl_berlaku' => $t_berlaku,
            'nmr_dasar_gj' => $no_ds_gplama,
            'nm_kadis' => $nm_kadis,
            'nip_kadis' => $nip_kadis,
            'pnkt' => $pnkt
        ];

        $this->db->insert('surat_kgb', $data2);

        $this->session->set_flashdata('message', 'selesai');
        redirect('supervisor/kenaikan_gaji/');

    }
}