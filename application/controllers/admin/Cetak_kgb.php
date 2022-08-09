<?php

class Cetak_kgb extends CI_Controller
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
            'pegawai' => $this->model_pegawai->tampil_semua(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/cetak_kgb', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function kgb($id){
        $this->load->library('Dompdf_gen');

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
            'master_golongan' => $this->model_master_golongan->tampil_semua(),
            'surat_kgb' => $this->db->get_where('surat_kgb',['pegawai_id' => $id])->row(),
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id)
        ];
        
        // $dump = $this->model_pak->tampil_by_id_pegawai($id);
        // var_dump($dump);

        $detail = $this->model_pegawai->tampil_by_id($id);
        $this->load->view('pegawai/surat_kgb', $data);
        
        $paper_size = 'Legal';
        $orientation = 'portrait';
        $this->dompdf->set_option('isRemoteEnabled', TRUE);
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        
        
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Kenaikan_Gaji_Berkala_".$detail->nip.".pdf", array('Attachment ' => 0 ));

        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data = [
            'stts_knk_gj' => "3"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
        // redirect('admin/cetak_pak/');
    }
    
}