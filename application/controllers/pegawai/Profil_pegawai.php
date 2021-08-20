<?php

class Profil_pegawai extends CI_Controller
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

    public function detail($id)
    {
        $data = [
            'title' => 'Halaman Detail Pegawai',
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'id_pegawai' => $this->db->get_where('user', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
            'suami_istri' => $this->model_suami_istri->tampil_by_id_pegawai($id),
            'orangtua' => $this->model_orangtua->tampil_by_id_pegawai($id),
            'bahasa' => $this->model_bahasa->tampil_by_id_pegawai($id),
            'sekolah' => $this->model_sekolah->tampil_by_id_pegawai($id),
            'jabatan' => $this->model_jabatan->tampil_by_id_pegawai($id),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'berkas' => $this->model_master_berkas->tampil_semua(),
            'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id)
        ];


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-pegawai', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/profil_pegawai', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function upload_dokumen($id, $berkas_id)
    {
        $bks = $this->model_master_berkas->tampil_by_id($berkas_id);
        $pgw = $this->model_pegawai->tampil_by_id($id);
        $cek_kelengkapan = $this->db->get_where('kelengkapan', ['pegawai_id' => $id, 'berkas_id' => $berkas_id])->row();    

        $new_name = $bks->nb.'_'.$pgw->nip;
        $config['file_name'] = $new_name;
        $berkas = $_FILES['berkas'.$berkas_id];

            if ($berkas = '') { } else {
    
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'pdf';

                
                $this->load->library('upload', $config);
                $this->upload->overwrite = true;
                if (!$this->upload->do_upload('berkas'.$berkas_id)) {
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
                'berkas_id' => $berkas_id,
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
            $this->model_kelengkapan->hapus_kelengkapan($where, 'kelengkapan');
            
            echo JSON_encode('');;
        }
        else {
            echo 'errors occured;';
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman update Data Pegawai',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'pegawai' => $this->model_pegawai->tampil_by_id($id),
                'jenkel' => ['Laki-laki', 'Perempuan'],
                'agama' => ['Islam', 'Katolik', 'Kristen Protestan', 'Hindu', 'Buddha', 'Kong Hu Cu'],
                'gol_darah' => ['-', 'A', 'AB', 'B', 'O'],
                'stts_pnkh' => ['Menikah', 'Belum Menikah', 'Cerai'],
                'stts_kpgw' => ['PNS', 'Pegawai Swasta', 'Honorer']
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-pegawai', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pegawai/edit_pegawai', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {
            $nip        = $this->input->post('nip');
            $nik        = $this->input->post('nik');
            $nuptk      = $this->input->post('nuptk');
            $nm_pegawai = $this->input->post('nm_pegawai');
            $jk         = $this->input->post('jk');
            $noserdik   = $this->input->post('noserdik');
            $uk         = $this->input->post('uk');
            $kec        = $this->input->post('kec');
            $tpt_lhr    = $this->input->post('tpt_lhr');
            $tgl_lhr    = $this->input->post('tgl_lhr');
            $agama      = $this->input->post('agama');
            $gol_darah  = $this->input->post('gol_darah');
            $stts_pnkh  = $this->input->post('stts_pnkh');
            $stts_kpgw  = $this->input->post('stts_kpgw');
            $no_hp      = $this->input->post('no_hp');
            $email      = $this->input->post('email');
            $alamat     = $this->input->post('alamat');
            $tgl_msk    = $this->input->post('tgl_msk');
            $tgl_knk_pkt = $this->input->post('tgl_knk_pkt');
            $tgl_knk_gj = $this->input->post('tgl_knk_gj');

            // $foto_lama = $this->input->post('foto_lama');

            // $foto = $_FILES['foto'];
            // if ($foto = '') {
            //     $foto = $foto_lama;
            // } else {

            //     if (file_exists('./upload/' . $foto_lama)) {
            //         unlink('./upload/' . $foto_lama);
            //     }


            //     $config['upload_path'] = './upload';
            //     $config['allowed_types'] = 'jpg|png|gif';

            //     $this->load->library('upload', $config);
            //     if (!$this->upload->do_upload('foto')) {
            //         echo "Upload Gagal";
            //         die();
            //     } else {
            //         $foto = $this->upload->data('file_name');
            //     }
            // }

            $data = [
                'nip'        => $nip,
                'nik'        => $nik,
                'nuptk'      => $nuptk,
                'nm_pegawai' => $nm_pegawai,
                'jk'         => $jk,
                'uk'         => $uk,
                'noserdik'   => $noserdik,
                'kec'        => $kec,
                'tpt_lhr'    => $tpt_lhr,
                'tgl_lhr'    => $tgl_lhr,
                'agama'      => $agama,
                'gol_darah'   => $gol_darah,
                'stts_pnkh'   => $stts_pnkh,
                'stts_kpgw'   => $stts_kpgw,
                'no_hp'      => $no_hp,
                'email'      => $email,
                'alamat'     => $alamat,
                'tgl_msk'    => $tgl_msk,
                'tgl_knk_pkt' => $tgl_knk_pkt,
                'tgl_knk_gj'  => $tgl_knk_gj
                // 'foto'       => $foto
            ];

            $this->model_pegawai->edit_pegawai($data);
            $this->session->set_flashdata('message', 'Diubah');
            redirect('pegawai/profil_pegawai/detail/'.$id);
        }
    }
}
