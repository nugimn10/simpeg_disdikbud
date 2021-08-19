<?php

class Registrasi extends CI_Controller
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

    public function daftar()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Daftar Akun Simpeg'
            ];

                $this->load->view('templates/header', $data);
                // $this->load->view('templates/sidebar-admin');
                $this->load->view('templates/topbar-default');

                $this->load->view('auth/cari');
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
    
                $data1 = [
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
                ];
                

                $nama = $this->input->post('nama');
                $id_pegawai = $this->input->post('id_pegawai');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $no_hp = $this->input->post('no_hp');
                $level = $this->input->post('level');

                $data2 = [
                    'nama'      => $nama,
                    'id_pegawai'      => $id_pegawai,
                    'username'  => $username,
                    'email'  => $email,
                    'password'  => $password,
                    'no_hp'     => $no_hp,
                    'level'   => $level
                ];
                
           
                $this->model_pegawai->tambah_pegawai($data1);

                $this->model_user_login->tambah_user($data2, 'user');
                $this->session->set_flashdata('message', 'Ditambahkan');
                $this->session->set_flashdata('message', 'Ditambahkan');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Akun Berhasil Di buat, Silahkan login.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('auth/login');
            }
    }
}
