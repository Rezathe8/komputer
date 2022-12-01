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
        $username = htmlspecialchars($this->input->post('username', true));
        $password = $this->input->post('password', true);

        $user = $this->UserModel->cekData(['username' => $username])->row_array();

        //jika ada
        if ($user) {
            //jika aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    foreach ($user as $a) {
                        $data = [
                            'image' => $user['image'],
                            'username' => $user['username'],
                            'role_id' => $user['role_id'],
                            'id' => $user['id'],
                            'nama' => $user['nama'],
                        ];
                    }
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
        $this->form_validation->set_rules('username', 'Username', 'min_length[6]|is_unique[user]', [
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
        $data['judul'] = 'Profil Saya';
        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        foreach ($user as $a) {
            $data = [
                'image' => $user['image'],
                'user' => $user['username'],
                'email' => $user['email'],
                'name' => $user['nama'],
                'alamat' => $user['alamat'],
                'hp' => $user['hp'],
                'role_id' => $user['role_id'],
            ];
        }

        if ($this->session->userdata('role_id') == 1) {
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('member/index', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/footer', $data);
        } else {
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('member/index', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/footer', $data);
        }
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Profil Saya';
        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        foreach ($user as $a) {
            $data = [
                'image' => $user['image'],
                'username' => $user['username'],
                'email' => $user['email'],
                'name' => $user['nama'],
                'alamat' => $user['alamat'],
                'hp' => $user['hp'],
            ];
        }

        $username = $this->session->userdata('username');
        $nama = $this->input->post('name', true);
        $alamat = $this->input->post('alamat', true);
        $hp = $this->input->post('hp', true);
        $email = $this->input->post('email', true);
        //jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path'] = './assets/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '1000';
            $config['file_name'] = 'pro' . time();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $gambar_lama = $data['user']['image'];
                if ($gambar_lama != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                }
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            }
        }
        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('hp', $hp);
        $this->db->set('email', $email);
        $this->db->where('username', $username);
        $this->db->update('user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
        redirect('member/myprofil');
    }

    public function ubahPassword()
    {
        $data['judul'] = 'Profil Saya';

        $password = $this->input->post('password', true);

        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        if (password_verify($password, $user['password'])) {
            foreach ($user as $a) {
                $data = [
                    'password' => $user['password'],

                ];
            }
            $password = $this->input->post('password', true);
            $password1 = $this->input->post('password1', true);
            if (password_verify($password, $password1)) {
                $this->db->set('password', $password);
                $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Password Berhasil Dirubah </div>');
                redirect('member/myprofil');
            } else {
                $this->form_validation->set_rules('password1', 'Password', 'matches[password2]', [
                    'matcher' => 'Password Tidak Sama!!',
                ]);
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Salah </div>');
            redirect('member/myprofil');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }
}
