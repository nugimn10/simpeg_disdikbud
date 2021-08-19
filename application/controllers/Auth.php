<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Halaman Login';

        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password wajib diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/form_login');
            $this->load->view('templates/javascript');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('level', $auth->level);
                switch ($auth->level) {
                    case 'Administrator':
                        redirect('admin/dashboard');
                        break;
                    case 'Verifikator':
                        redirect('verifikator/beranda');
                        break;
                    case 'Pegawai':
                        redirect('pegawai/beranda');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Anda Berhasil Logout !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('auth/login');
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

                $this->load->view('auth/daftar');
                $this->load->view('templates/footer');
                $this->load->view('templates/javascript');
            } else {
                $nip        = $this->input->post('nip');
                $nik        = $this->input->post('nik');
                $nuptk      = $this->input->post('nuptk');
                $nm_pegawai = $this->input->post('nm_pegawai');
                $jk         = $this->input->post('jk');
                $uk         = $this->input->post('uk');
                $stts_pnkh  = $this->input->post('stts_pnkh');
                $stts_kpgw  = $this->input->post('stts_kpgw');
                $no_hp      = $this->input->post('no_hp');
                $email      = $this->input->post('email');
                $alamat     = $this->input->post('alamat');
                $status     = '0';
    
                $data1 = [
                    'nip'        => $nip,
                    'nik'        => $nik,
                    'nuptk'        => $nuptk,
                    'nm_pegawai' => $nm_pegawai,
                    'jk'         => $jk,
                    'uk'         => $uk,
                    'stts_pnkh'   => $stts_pnkh,
                    'stts_kpgw'   => $stts_kpgw,
                    'no_hp'      => $no_hp,
                    'email'      => $email,
                    'alamat'     => $alamat,
                    'status'     => $status
                ];
                
                
           
                // $this->model_pegawai->tambah_pegawai($data1);
                $this->db->insert('pegawai', $data1);

                
                $this->session->set_flashdata('message', 'Ditambahkan');
                $this->session->set_flashdata('message', 'Ditambahkan');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Akun Berhasil Di buat, Silahkan Aktivasi Terlebih Dahulu.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('auth/cari');
            }
    }

    public function cari()
    {
        
        $data2['title'] = 'Daftar Pegawai';
        // $this->load->view('templates/header', $data2);
        // // $this->load->view('templates/sidebar-admin');
        // $this->load->view('templates/topbar-default');

        // $this->load->view('auth/daftar');
        // $this->load->view('templates/footer');
        // $this->load->view('templates/javascript');

        $key = $this->input->post('nip');
        $data['pegawai'] = $this->model_pegawai->cari_pegawai($key);
        $this->load->view('templates/header',$data2);
        
        $this->load->view('templates/topbar-default');
        $this->load->view('auth/cari',$data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function aktivasi($id)
    {
        
        $data2['title'] = 'Daftar Pegawai';
        
        $pegawai = $this->model_pegawai->tampil_by_id($id);

        // $idpgw = "SELECT id_pegawai FROM pegawai WHERE id_pegawai ='$id'";

            $data1 = [
                'nip'        => $pegawai->nip,
                'nik'        => $pegawai->nik,
                'nuptk'        => $pegawai->nuptk,
                'nm_pegawai' => $pegawai->nm_pegawai,
                'jk'         => $pegawai->jk,
                'stts_pnkh'   => $pegawai->stts_pnkh,
                'stts_kpgw'   => $pegawai->stts_kpgw,
                'no_hp'      => $pegawai->no_hp,
                'email'      => $pegawai->email,
                'alamat'     => $pegawai->alamat,
                'status'     => "1"
            ];

            $this->db->where('id_pegawai', $id);
            $this->db->update('pegawai', $data1);

            $nama = $pegawai->nm_pegawai;
            $id_pegawai = $id;
            $username = $pegawai->nip;
            $email = $pegawai->email;
            $password = $pegawai->nik;
            $no_hp = $pegawai->no_hp;
            $level = 'pegawai';

            $data2 = [
                'nama'      => $nama,
                'id_pegawai'      => $id_pegawai,
                'username'  => $username,
                'email'  => $email,
                'password'  => $password,
                'no_hp'     => $no_hp,
                'level'   => $level 
            ];
            

            $this->model_user_login->tambah_user($data2, 'user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Akun telah di aktifkan, anda dapat login mengukanan nip & nik sebagai username dan password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('auth/cari');
    }
}
