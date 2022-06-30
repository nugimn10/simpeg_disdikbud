<?php

class Data_pegawai extends CI_Controller
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
            'title' => 'Halaman Data Pegawai',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pegawai' => $this->model_pegawai->tampil_semua(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_pegawai', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Tambah Data Pegawai',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_pegawai');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {
            $nip        = $this->input->post('nip');
            $nik        = $this->input->post('nik');
            $nuptk      = $this->input->post('nuptk');
            $nm_pegawai = $this->input->post('nm_pegawai');
            $jk         = $this->input->post('jk');
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
            // $foto = $_FILES['foto'];
            // if ($foto = '') { } else {
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
                'nuptk'        => $nuptk,
                'nm_pegawai' => $nm_pegawai,
                'jk'         => $jk,
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

            $this->model_pegawai->tambah_pegawai($data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/data_pegawai');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Edit Data Pegawai',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'pegawai' => $this->model_pegawai->tampil_by_id($id),
                'jenkel' => ['Laki-laki', 'Perempuan'],
                'agama' => ['Islam', 'Katolik', 'Kristen Protestan', 'Hindu', 'Buddha', 'Kong Hu Cu'],
                'gol_darah' => ['-', 'A', 'AB', 'B', 'O'],
                'stts_pnkh' => ['Menikah', 'Belum Menikah', 'Cerai'],
                'stts_kpgw' => ['PNS', 'Non PNS', 'PPPK']
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_pegawai', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {
            $nip        = $this->input->post('nip');
            $nik        = $this->input->post('nik');
            $nuptk      = $this->input->post('nuptk');
            $nm_pegawai = $this->input->post('nm_pegawai');
            $jk         = $this->input->post('jk');
            $noserdik   = $this->input->post('noserdik');
            $nokarpeg   = $this->input->post('nokarpeg');
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
                'nokarpeg'   => $nokarpeg,
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
            redirect('admin/data_pegawai');
        }
    }

    public function hapus($id)
    {
        $this->model_pegawai->hapus_pegawai($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/data_pegawai');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Halaman Detail Pegawai',
            'detail' => $this->model_pegawai->tampil_by_id($id),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'suami_istri' => $this->model_suami_istri->tampil_by_id_pegawai($id),
            'anak' => $this->model_anak->tampil_by_id_pegawai($id),
            'orangtua' => $this->model_orangtua->tampil_by_id_pegawai($id),
            'bahasa' => $this->model_bahasa->tampil_by_id_pegawai($id),
            'sekolah' => $this->model_sekolah->tampil_by_id_pegawai($id),
            'jabatan' => $this->model_jabatan->tampil_by_id_pegawai($id),
            'me' => $this->model_master_eselon->tampil_semua(),
            'mj' => $this->model_master_jabatan->tampil_semua(),
            'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id),
            'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
            'berkas' => $this->model_master_berkas->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_pegawai', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }
}
