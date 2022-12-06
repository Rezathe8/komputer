<?php


class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        $data = [
            'judul' => "Dashboard",
        ];

        if ($this->session->userdata('username')) {

            $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

            $data = [
                'judul' => "Dashboard",
                'user' => $user['username'],
                'image' => $user['image']
            ];

            if ($this->session->userdata('role_id') == 1) {
                $this->load->view('templates/templates-user/header', $data);
                $this->load->view('content');
                $this->load->view('templates/admin/sidebar');
                $this->load->view('templates/templates-user/modal');
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/templates-user/header', $data);
                $this->load->view('content');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/templates-user/modal');
                $this->load->view('templates/footer');
            }
        } else {
            $data['user'] = 'Guest';

            $this->load->view('templates/header', $data);
            $this->load->view('content');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/footer');
        }
    }
}
