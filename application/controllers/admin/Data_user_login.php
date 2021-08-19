<?php

class Data_user_login extends CI_Controller
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
            'title' => 'Halaman Data User Login',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'user_login' => $this->model_user_login->tampil_data()->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_user_login', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Edit Data User Login',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'pegawai' => $this->model_pegawai->tampil_semua()
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_user_login');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {

            $nama = $this->input->post('nama');
            $id_pegawai = $this->input->post('id_pegawai');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $no_hp = $this->input->post('no_hp');
            $level = $this->input->post('level');

            $data = [
                'nama'      => $nama,
                'id_pegawai'      => $id_pegawai,
                'username'  => $username,
                'email'  => $email,
                'password'  => $password,
                'no_hp'     => $no_hp,
                'level'   => $level
            ];

            $this->model_user_login->tambah_user($data, 'user');
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/data_user_login');
        }
        // $nama = $this->input->post('nama');
        // $id_pegawai = $this->input->post('id_pegawai');
        // $username = $this->input->post('username');
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');
        // $no_hp = $this->input->post('no_hp');
        // $level = $this->input->post('level');

        // $data = [
        //     'nama'      => $nama,
        //     'id_pegawai'      => $id_pegawai,
        //     'username'  => $username,
        //     'email'  => $email,
        //     'password'  => $password,
        //     'no_hp'     => $no_hp,
        //     'level'   => $level
        // ];

        // $this->model_user_login->tambah_user($data, 'user');
        // $this->session->set_flashdata('message', 'Ditambahkan');
        // redirect('admin/data_user_login');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Halaman Edit Data User Login',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'user_login' => $this->model_user_login->tampil_by_id($id),
                'level' => ['Administrator', 'Pegawai', 'Tim Penilai']

            ];

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_user_login', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        } else {

            $nama = $this->input->post('nama');
            $id_pegawai = $this->input->post('id_pegawai');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $no_hp = $this->input->post('no_hp');
            $level = $this->input->post('level');

            $data = [
                'nama'      => $nama,
                'id_pegawai'      => $id_pegawai,
                'username'  => $username,
                'email'  => $email,
                'password'  => $password,
                'no_hp'     => $no_hp,
                'level'   => $level
            ];

            $this->model_user_login->edit_user($data);
            $this->session->set_flashdata('message', 'Diubah');
            redirect('admin/data_user_login');
        }
    }

    public function hapus($id)
    {
        $where = ['id_user' => $id];
        $this->model_user_login->hapus_user($where, 'user');
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/data_user_login');
    }

    public function ubah_password()
    {
        $data = [
            'title' => 'Ubah Password',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];

        // $data['title'] = 'Change Password';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-admin');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/ubah_password', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');

            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            // $this->load->view('user/changepassword', $data);
            // $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('admin/data_user_login/ubah_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same as current password</div>');
                    redirect('admin/data_user_login/ubah_password');
                } else {
                    // $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->model_user_login->ubah_password($new_password);

                    // $this->db->set('password', $password_hash);
                    // $this->db->where('email', $this->session->userdata('email'));
                    // $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password changed!</div>');
                    redirect('admin/data_user_login/ubah_password');
                }
            }
        }
    }
}
