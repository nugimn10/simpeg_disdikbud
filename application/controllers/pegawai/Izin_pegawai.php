<?php

class Izin_pegawai extends CI_Controller
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

    public function izin($id)
    {
        $data = [
            'title' => 'Halaman Data Pegawai',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'izin' => $this->model_pegawai->tampil_izin_by_id($id),
            'detail' => $this->model_pegawai->tampil_by_id($id),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-pegawai');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/izin', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }
    public function buat_izin($id)
    {
        $perihal = $this->input->post('perihal');
        $keterangan = $this->input->post('keterangan');
        $dari_tgl = $this->input->post('dari_tgl');
        $sampai_tgl = $this->input->post('sampai_tgl');
        $date = date('Y-m-d');
        $data = [
            'pegawai_id'        => $id,
            'perihal'           => $perihal,
            'keterangan'        => $keterangan,
            'dari_tgl'          => $dari_tgl,
            'sampai_tgl'         => $sampai_tgl,
            'tgl_dibuat'    =>  $date,
            'stts' => "0",
        ];

        $this->db->insert('izin',$data);
        $this->session->set_flashdata('message', 'Ditambahkan');
        redirect('pegawai/izin_pegawai/izin/'.$id);
    }

    public function cetak_surat_izin($id){
        $this->load->library('dompdf_gen');

        $data = [
            'title' => 'Halaman Cetak PAK',
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'ak' => $this->model_ak->tampil_semua(),
            'pak' => $this->model_pak->tampil_by_id_pegawai($id),
            'sekolah' => $this->model_sekolah->tampil_by_id_pegawai($id),
            'jabatan' => $this->model_jabatan->tampil_by_id_pegawai($id),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'berkas' => $this->model_master_berkas->tampil_semua(),
            'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
            'surat_pak' => $this->db->get_where('surat_pak',['pegawai_id' => $id])->row(),
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id),
            'izin' => $this->model_pegawai->tampil_izin_by_id($id),
        ];
        $detail = $this->model_pegawai->tampil_by_id($id);
        $this->load->view('pegawai/surat_izin', $data);
        
        $paper_size = 'A4';
        $orientation = 'landscape';

        $html =  $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Surat_izin".$detail->nip.".pdf", array('Attachment ' => 0 ));

    }

}