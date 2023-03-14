<?php

class Kenaikan_pangkat extends CI_Controller
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
            'title' => 'Halaman Kenaikan Pangkat',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
            'pegawai1' => $this->model_pegawai->tampil_berdasarkan_jabatan(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kenaikan_pangkat', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function kembali($id, $tahap)
    {
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data1 = [
            'nip'        => $pegawai->nip,
            'nik'        => $pegawai->nik,
            'nuptk'      => $pegawai->nuptk,
            'nm_pegawai' => $pegawai->nm_pegawai,
            'jk'         => $pegawai->jk,
            'uk'         => $pegawai->uk,
            'noserdik'   => $pegawai->noserdik,
            'kec'        => $pegawai->kec,
            'tpt_lhr'    => $pegawai->tpt_lhr,
            'tgl_lhr'    => $pegawai->tgl_lhr,
            'agama'      => $pegawai->agama,
            'gol_darah'   => $pegawai->gol_darah,
            'stts_pnkh'   => $pegawai->stts_pnkh,
            'stts_kpgw'   => $pegawai->stts_kpgw,
            'no_hp'      => $pegawai->no_hp,
            'email'      => $pegawai->email,
            'alamat'     => $pegawai->alamat,
            'tgl_msk'    => $pegawai->tgl_msk,
            'tgl_knk_pkt' => $pegawai->tgl_knk_pkt,
            'tgl_knk_gj'  => $pegawai->tgl_knk_gj,
            'status' => $pegawai->status,
            'stts_knk_pkt' => $tahap
        ];

        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data1);

        $this->session->set_flashdata('message', 'Berhasil Di Kembalikan');
        redirect('admin/kenaikan_pangkat/');
    }
}