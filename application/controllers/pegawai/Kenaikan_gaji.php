<?php
defined('BASEPATH') or exit('No Direct script access allowed');

require_once APPPATH . "third_party/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

class Kenaikan_gaji extends CI_Controller    
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

    public function kgb($id)
    {
        $data = [
            'title' => 'Halaman Kenaikan Gaji Berkala',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'master_kgb' => $this->model_master_kgb->tampil_semua(),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'kgb' => $this->model_kgb->tampil_by_id_pegawai($id),
            'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
            'jabatan' => $this->model_jabatan->tampil_by_id_pegawai($id)
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-pegawai');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/kgb', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function usulan($id)
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

    public function ajukan($id)
    {
        $pegawai = $this->model_pegawai->tampil_by_id($id);
        $kgb = $this->model_kgb->tampil_by_id_pegawai($id);
        $data = [
            'stts_knk_gj' => "1"
        ];
        
        $data2 = [
            'pegawai_id' => $id,
            'catatan' => "",
            'status' => "1",
            'last_update' =>  date("Y-m-d")
        ];
        if ($kgb == null) {
            $this->model_kgb->tambah_kgb($data2);    
        } else {    
            $this->db->where('pegawai_id', $id);
            $this->db->update('kgb', $data2);
        }
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);

        $this->session->set_flashdata('message', 'Diajukan ke supervisor');
        redirect('pegawai/kenaikan_gaji/kgb/'.$id);
    }

     public function upload_dokumen($id, $master_kgb_id)
    {
        $bks = $this->model_master_kgb->tampil_by_id($master_kgb_id);
        $pgw = $this->model_pegawai->tampil_by_id($id);
        $cek_kelengkapan = $this->db->get_where('kelengkapan', ['pegawai_id' => $id, 'berkas_id' => $master_kgb_id])->row();    

        $new_name = $bks->nb.'_'.$pgw->nip;
        $config['file_name'] = $new_name;
        $berkas = $_FILES['berkas'.$master_kgb_id];

            if ($berkas = '') { } else {
    
                $config['upload_path'] = './upload/kgb';
                $config['allowed_types'] = 'pdf';

                
                $this->load->library('upload', $config);
                $this->upload->overwrite = true;
                if (!$this->upload->do_upload('berkas'.$master_kgb_id)) {
                    echo "Upload Gagal";
                    die();
                } else {
                    $berkas = $this->upload->data('file_name');
                }
            }
       if($cek_kelengkapan != null){ 
            $id_kelengkapan= $cek_kelengkapan->id_kelengkapan;
            $where = ['id_kelengkapan' => $id_kelengkapan];
            $data = [
                'berkas_id' => $cek_kelengkapan->berkas_id,
                'nd' => $cek_kelengkapan->nd,
                'dokumen' => $cek_kelengkapan->dokumen,
                'pegawai_id' => $cek_kelengkapan->pegawai_id,
                'status' => '0'
            ];
            $this->model_kelengkapan->edit_kelengkapan($where,$data);
            
            echo json_encode(true);
            die();
        }else {
            
            $data = [
                'berkas_id' => $master_kgb_id,
                'nd' => $bks->nb,
                'dokumen' => $berkas,
                'pegawai_id' => $id,
                'status' => '0'
            ];
            $this->model_kelengkapan->tambah_kelengkapan($data);
            echo json_encode(true);
            die();
        };
        echo json_encode(true);

    }

    public function hapus_dokumen($id)
    {
        $this->load->helper("file");
        $where = ['id_kelengkapan' => $id];
        
        $kelengkapan_file = $this->model_kelengkapan->tampil_by_id($id);
        $path_to_file = base_url('/uploads/'.$kelengkapan_file->dokumen);
        
        if(!delete_files($path_to_file)) {
            delete_files($path_to_file);
            $this->model_kelengkapan->hapus_kelengkapan($where, 'kelengkapan');
            
            echo JSON_encode('');;
        }
        else {
            echo 'errors occured;';
        }
    }

}
