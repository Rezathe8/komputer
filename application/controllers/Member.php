<?php

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_login();
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->UserModel->cekData(['username' => $username])->row_array();

        //jika ada
        if ($user) {
            //jika aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'id_user' => $user['id_user'],
                        'nama' => $user['nama'],
                    ];

                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password Salah</div>');
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">User Tidak Aktif</div>');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">User Tidak Ada</div>');
            redirect('home');
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|min_length[6]|is_unique[user]', [
            'is_unique' => 'Username Sudah Terdaftar!',
            'min_length' => 'Username Terlalu Pendek!'
        ]);

        $email = $this->input->post('email', true);
        $data = [
            'nama' => $this->input->post('name', true),
            'email' => $email,
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role_id' => 2,
            'is_active' => 1,
            'tanggal_input' => time()
        ];
        $this->UserModel->simpanData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Akun Anda sudah dibuat.</div>');

        redirect(base_url());
    }

    public function myProfil()
    {
    }

    public function ubahProfil()
    {
    }

    public function logout()
    {
    }
}
