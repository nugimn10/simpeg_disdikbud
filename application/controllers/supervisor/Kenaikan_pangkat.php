<?php

class Kenaikan_pangkat extends CI_Controller
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
            'title' => 'Halaman Kenaikan Pangkat',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
            'pegawai1' => $this->model_pegawai->tampil_berdasarkan_jabatan(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-supervisor');
        $this->load->view('templates/topbar', $data);
        $this->load->view('supervisor/kenaikan_pangkat', $data);
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
        $this->load->view('supervisor/berkas_kp', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function teruskan($id)
    {
        $kelengkapan = $this->db->get_where('kelengkapan', ['pegawai_id' => $id])->result_array();
            $angkakredit = $this->model_ak->tampil_semua();
            
            $akReady = $this->db->get_where('pak', ['pegawai_id' => $id])->result_array();;

            // var_dump($akReady);
            $pegawai = $this->model_pegawai->tampil_by_id($id);
            
            if ($akReady != null) {
                for ($i=0; $i < count($akReady) ; $i++) { 
                    if ($this->input->post("akb".$akReady[$i]['id_pak']) != '') {
                        $bulkpak [] = array(
                            'id_pak' => $akReady[$i]['id_pak'],
                            'pegawai_id' => $akReady[$i]['pegawai_id'],
                            'unsur' => $this->input->post("unsur".$akReady[$i]['id_pak']),
                            'angka_lama' =>$this->input->post("akl".$akReady[$i]['id_pak']),
                            'angka_baru' => $this->input->post("akb".$akReady[$i]['id_pak']),
                        );
                        
                    }
                }

                $linksCount = count($bulkpak);
                if($linksCount) {
                    // $this->db->where('id_kelengkapan', $kelengkapan['id_kelengkapan']);
                    $this->db->update_batch('pak', $bulkpak, 'id_pak');
                }   
        
            } else {
                for ($i=0; $i < count($angkakredit) ; $i++) { 
                    $bulkpak[] = array(
                        'pegawai_id' => $pegawai->id_pegawai,
                        'unsur' =>  $this->input->post("unsur".$angkakredit[$i]->id_ak),
                        'angka_lama' => $this->input->post("akl".$angkakredit[$i]->id_ak),
                        'angka_baru' => $this->input->post("akb".$angkakredit[$i]->id_ak),
                    );
            }
                $this->db->insert_batch('pak', $bulkpak);   

        }

        
        $catatan = $this->input->post('notes');

        if ($this->input->post('teruskan') == 'y')
        {

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
                'stts_knk_pkt' => "2",
                'catatan' => $catatan
            ];
            
            $this->db->where('id_pegawai', $id);
            $this->db->update('pegawai', $data1);
            
            
            $this->session->set_flashdata('message', 'dikirim ke Verifikator');
            redirect('supervisor/kenaikan_pangkat/');
        }

        else if ($this->input->post('btl') == 'y')
        {
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
                'stts_knk_pkt' => "4",
                'catatan' => $catatan
            ];
            
            $this->db->where('id_pegawai', $id);
            $this->db->update('pegawai', $data1);
            
            
            $this->session->set_flashdata('message', 'dikirim ke pegawai untuk di perbaiki');
        }

        else
        {
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
                'stts_knk_pkt' => "9",
                'catatan' => $catatan
            ];
            
            $this->db->where('id_pegawai', $id);
            $this->db->update('pegawai', $data1);
            
            
            $this->session->set_flashdata('message', 'dikirim ke pegawai untuk di perbaiki');
        }

        
        redirect('supervisor/kenaikan_pangkat/');

        
    }
    
    public function tolak($id)
    {
        $kelengkapan = $this->db->get_where('kelengkapan', ['pegawai_id' => $id])->result_array();
        $angkakredit = $this->model_ak->tampil_semua();
        
        $akReady = $this->db->get_where('pak', ['pegawai_id' => $id])->result_array();;

        $pegawai = $this->model_pegawai->tampil_by_id($id);
        
        if ($akReady != null) {
            for ($i=0; $i < count($akReady) ; $i++) { 
                if ($this->input->post("akb".$akReady[$i]['id_pak']) != '') {
                    $bulkpak [] = array(
                        'id_pak' => $akReady[$i]['id_pak'],
                        'pegawai_id' => $akReady[$i]['pegawai_id'],
                        'unsur' => $this->input->post("unsur".$akReady[$i]['id_pak']),
                        'angka_lama' =>$this->input->post("akl".$akReady[$i]['id_pak']),
                        'angka_baru' => $this->input->post("akb".$akReady[$i]['id_pak']),
                    );
                    
                }
            }

            $linksCount = count($bulkpak);
            if($linksCount) {
                // $this->db->where('id_kelengkapan', $kelengkapan['id_kelengkapan']);
                $this->db->update_batch('pak', $bulkpak, 'id_pak');
            }   
    
        } else {
            for ($i=0; $i < count($angkakredit) ; $i++) { 
                $bulkpak[] = array(
                    'pegawai_id' => $pegawai->id_pegawai,
                    'unsur' =>  $this->input->post("unsur".$angkakredit[$i]->id_ak),
                    'angka_lama' => $this->input->post("akl".$angkakredit[$i]->id_ak),
                    'angka_baru' => $this->input->post("akb".$angkakredit[$i]->id_ak),
                );
        }
            $this->db->insert_batch('pak', $bulkpak);   

    }


        $catatan = $this->input->post('notes');

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
            'stts_knk_pkt' => "9",
            'catatan' => $catatan
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data1);
        
        
        $this->session->set_flashdata('message', 'dikirim ke pegawai untuk di perbaiki');
        redirect('supervisor/kenaikan_pangkat/');
    }

    public function btl($id)
    {
        $kelengkapan = $this->db->get_where('kelengkapan', ['pegawai_id' => $id])->result_array();
        $angkakredit = $this->model_ak->tampil_semua();
        
        $akReady = $this->db->get_where('pak', ['pegawai_id' => $id])->result_array();;

        // var_dump($akReady);
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        
    //     if ($akReady != null) {
    //         for ($i=0; $i < count($akReady) ; $i++) { 
    //             if ($this->input->post("akb".$akReady[$i]['id_pak']) != '') {
    //                 $bulkpak [] = array(
    //                     'id_pak' => $akReady[$i]['id_pak'],
    //                     'pegawai_id' => $akReady[$i]['pegawai_id'],
    //                     'unsur' => $this->input->post("unsur".$akReady[$i]['id_pak']),
    //                     'angka_lama' =>$this->input->post("akl".$akReady[$i]['id_pak']),
    //                     'angka_baru' => $this->input->post("akb".$akReady[$i]['id_pak']),
    //                 );
                    
    //             }
    //         }

    //         $linksCount = count($bulkpak);
    //         if($linksCount) {
    //             // $this->db->where('id_kelengkapan', $kelengkapan['id_kelengkapan']);
    //             $this->db->update_batch('pak', $bulkpak, 'id_pak');
    //         }   
    
    //     } else {
    //         for ($i=0; $i < count($angkakredit) ; $i++) { 
    //             $bulkpak[] = array(
    //                 'pegawai_id' => $pegawai->id_pegawai,
    //                 'unsur' =>  $this->input->post("unsur".$angkakredit[$i]->id_ak),
    //                 'angka_lama' => $this->input->post("akl".$angkakredit[$i]->id_ak),
    //                 'angka_baru' => $this->input->post("akb".$angkakredit[$i]->id_ak),
    //             );
    //     }
    //         $this->db->insert_batch('pak', $bulkpak);   

    // }
        
        $catatan = $this->input->post('notes');

        echo $catatan;
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
            'stts_knk_pkt' => "4",
            'catatan' => $catatan
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data1);
        
        
        $this->session->set_flashdata('message', 'dikirim ke pegawai untuk di perbaiki');
        redirect('supervisor/kenaikan_pangkat/');
    }

    public function download($id)
    {
        $data = $this->db->get_where('kelengkapan',['id_kelengkapan'=>$id])->row();
        force_download('./upload/'.$data->dokumen, null);
    }
    
    public function selesai($id)
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
            'stts_knk_pkt' => "5"
        ];
        
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data1);

        $nmr_surat = $this->input->post('nmr_surat');
        $ms_penilaian_awal = $this->input->post('ms_penilaian_awal');
        $ms_penilaian_akhir = $this->input->post('ms_penilaian_akhir');
        $date = $this->input->post('ms_penilaian_akhir');
        $nm_kadis = $this->input->post('nm_kadis');
        $nip_kadis = $this->input->post('nip_kadis');
        $pnkt = $this->input->post('pnkt');
        $data2 = [
            'pegawai_id' => $pegawai->id_pegawai,
            'nmr_surat' => $nmr_surat,
            'ms_penilaian_awal' => $ms_penilaian_awal,
            'ms_penilaian_akhir' => $ms_penilaian_akhir,
            'tgl_surat' => $date,
            'nm_kadis' => $nm_kadis,
            'nip_kadis' => $nip_kadis,
            'pnkt' => $pnkt
        ];


        $this->db->insert('surat_pak', $data2);

        $this->session->set_flashdata('message', 'selesai');
        redirect('supervisor/kenaikan_pangkat/');

    }
}