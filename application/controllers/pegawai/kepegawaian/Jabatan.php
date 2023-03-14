<?php

class Jabatan extends CI_Controller
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

    public function index($id)
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
            'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id),
            'master_eselon' => $this->model_master_eselon->tampil_semua(),
            'master_jabatan' => $this->model_master_jabatan->tampil_semua(),
            'master_golongan' => $this->model_master_golongan->tampil_semua()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-pegawai');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/kepegawaian/jabatan');
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }
    
    public function edit($id, $jabatan_id)
    {
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

            $this->form_validation->set_rules('jenis_jbt', 'Jenis Jabatan', 'required');

            if ($this->form_validation->run() == false) {
                $data = [
                    'title' => 'Halaman Data Jabatan',
                    'detail' => $this->model_pegawai->tampil_by_id($id),
                    'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                    'id_pegawai' => $this->db->get_where('user', ['id_pegawai' => $this->session->userdata('id_pegawai')])->row_array(),
                    'suami_istri' => $this->model_suami_istri->tampil_by_id_pegawai($id),
                    'orangtua' => $this->model_orangtua->tampil_by_id_pegawai($id),
                    'bahasa' => $this->model_bahasa->tampil_by_id_pegawai($id),
                    'sekolah' => $this->model_sekolah->tampil_by_id_pegawai($id),
                    'jabatan' => $this->model_jabatan->tampil_by_id($jabatan_id),
                    'kelengkapan' => $this->model_kelengkapan->tampil_by_id_pegawai($id),
                    'berkas' => $this->model_master_berkas->tampil_semua(),
                    'pangkat' => $this->model_pangkat->tampil_by_id_pegawai($id),
                    'mutasi' => $this->model_mutasi->tampil_by_id_pegawai($id),
                    'master_eselon' => $this->model_master_eselon->tampil_semua(),
                    'master_jabatan' => $this->model_master_jabatan->tampil_semua(),
                    'master_golongan' => $this->model_master_golongan->tampil_semua()
                ];

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar-pegawai');
                $this->load->view('templates/topbar', $data);
                $this->load->view('pegawai/kepegawaian/edit_jabatan');
                $this->load->view('templates/footer');
                $this->load->view('templates/javascript');
            } else {
            $data = [
                // 'id_jabatan'        => $this->input->post('id_jabatan'),
                'id_pegawai'        => $this->input->post('id_pegawai'),
                'id_master_eselon'  => $this->input->post('id_master_eselon'),
                'id_master_jabatan' => $this->input->post('id_master_jabatan'),
                'jenis_jbt'         => $this->input->post('jenis_jbt'),
                'no_sk_jbt'         => $this->input->post('no_sk_jbt'),
                'tgl_sk_jbt'        => $this->input->post('tgl_sk_jbt'),
                'awal_masa_jbt'     => $this->input->post('awal_masa_jbt'),
                'akhir_masa_jbt'    => $this->input->post('akhir_masa_jbt')
            ];

            $this->model_jabatan->edit_jabatan($data);
            $this->session->set_flashdata('message', 'Diubah');
            redirect('pegawai/profil_pegawai/detail/'.$id);
        }
    }


    public function tambah($id) 
    {
        $this->form_validation->set_rules('jenis_jbt', 'Jenis Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Data Jabatan',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-pegawai');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pegawai/kepegawaian/jabatan');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {

            $data = [
                'id_pegawai'        => $this->input->post('id_pegawai'),
                'id_master_eselon'  => $this->input->post('id_master_eselon'),
                'id_master_jabatan' => $this->input->post('id_master_jabatan'),
                'jenis_jbt'         => $this->input->post('jenis_jbt'),
                'no_sk_jbt'         => $this->input->post('no_sk_jbt'),
                'tgl_sk_jbt'        => $this->input->post('tgl_sk_jbt'),
                'awal_masa_jbt'     => $this->input->post('awal_masa_jbt'),
                'akhir_masa_jbt'    => $this->input->post('akhir_masa_jbt')
            ];

            $this->model_jabatan->tambah_jabatan($data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('pegawai/profil_pegawai/detail/'.$id);
        }
    }
    
     public function hapus($id, $jabatan_id)
    {
        $where = ['id_jabatan' => $jabatan_id];
        $this->model_jabatan->hapus_jabatan($where, 'jabatan');
        redirect('pegawai/profil_pegawai/detail/'.$id);
    }
}
