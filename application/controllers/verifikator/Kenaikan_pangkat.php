<?php

class Kenaikan_pangkat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 'Verifikator') {
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
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-verifikator');
        $this->load->view('templates/topbar', $data);
        $this->load->view('verifikator/kenaikan_pangkat', $data);
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
            'ak' => $this->model_pak->tampil_by_id_pegawai($id),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-verifikator');
        $this->load->view('templates/topbar', $data);
        $this->load->view('verifikator/berkas_kp', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function teruskan($id)
    {
        $kelengkapan = $this->db->get_where('kelengkapan', ['pegawai_id' => $id])->result_array();;
        $angkakredit = $this->db->get_where('pak', ['pegawai_id' => $id])->result_array();;
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        // $data [] = array();
       
        for ($i=0; $i < count($kelengkapan) ; $i++) {  $data [] = array(
                    'id_kelengkapan' => $kelengkapan[$i]['id_kelengkapan'],
                    'berkas_id' => $kelengkapan[$i]['berkas_id'],
                    'nd' => $kelengkapan[$i]['nd'],
                    'dokumen' =>$kelengkapan[$i]['dokumen'],
                    'nilai' => "0",
                    'pegawai_id' => $kelengkapan[$i]['pegawai_id'],
                    'status' => "3",
                );
        }
        $linksCount = count($data);
        
        // print_r($data);
        // // print_r($data);
        if($linksCount) {
            // $this->db->where('id_kelengkapan', $kelengkapan['id_kelengkapan']);
            $this->db->update_batch('kelengkapan', $data, 'id_kelengkapan');
        }        

        // $bulkpak [] = array();
        for ($i=0; $i < count($angkakredit) ; $i++) { 
            if ($this->input->post("akb".$angkakredit[$i]['id_pak']) != '') {
                $bulkpak [] = array(
                    'id_pak' => $angkakredit[$i]['id_pak'],
                    'pegawai_id' => $angkakredit[$i]['pegawai_id'],
                    'unsur' => $this->input->post("unsur".$angkakredit[$i]['id_pak']),
                    'angka_lama' =>$this->input->post("akl".$angkakredit[$i]['id_pak']),
                    'angka_baru' => $this->input->post("akb".$angkakredit[$i]['id_pak']),
                );
                
            }
        }
        // print_r($bulkpak);

        $linksCount = count($bulkpak);
        if($linksCount) {
            // $this->db->where('id_kelengkapan', $kelengkapan['id_kelengkapan']);
            $this->db->update_batch('pak', $bulkpak, 'id_pak');
        }   

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
            'stts_knk_pkt' => "3"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data1);
        
        
        $this->session->set_flashdata('message', 'dikirim ke supervisor');
        redirect('verifikator/data_pegawai/');
    }

    public function download($id)
    {
        $data = $this->db->get_where('kelengkapan',['id_kelengkapan'=>$id])->row();
        force_download('./upload/'.$data->dokumen, null);
    }
    
}