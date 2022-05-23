<?php
defined('BASEPATH') or exit('No Direct script access allowed');

require_once APPPATH . "third_party/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

class Kenaikan_pangkat extends CI_Controller    
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

    public function ajukan($id)
    {
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data = [
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
            'stts_knk_pkt' => "1"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
        $this->session->set_flashdata('message', 'Diubah');
        redirect('pegawai/profil_pegawai/detail/'.$id);
    }

    public function tms($id)
    {
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data = [
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
            'stts_knk_pkt' => "0"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
        $this->session->set_flashdata('message', 'Diubah');
        redirect('pegawai/profil_pegawai/detail/'.$id);
    }

    public function btl($id)
    {
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data = [
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
            'stts_knk_pkt' => "0"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
        $this->session->set_flashdata('message', 'Diubah');
        redirect('pegawai/profil_pegawai/detail/'.$id);
    }

    public function pak($id){
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
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id)
        ];
        // $dump = $this->model_pak->tampil_by_id_pegawai($id);
        // var_dump($dump);

        $detail = $this->model_pegawai->tampil_by_id($id);
        $this->load->view('pegawai/pak', $data);
        
        $paper_size = 'Legal';
        $orientation = 'portrait';

        $html =  $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        
        
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Penetapan_Angka_Kredit_".$detail->nip.".pdf", array('Attachment ' => 0 ));

        $pegawai = $this->model_pegawai->tampil_by_id($id);

        $data = [
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
            'stts_knk_pkt' => "0"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
        redirect('pegawai/profil_pegawai/detail/'.$id);

    }
}
