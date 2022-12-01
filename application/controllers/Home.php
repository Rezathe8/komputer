<?php


class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = [
            'judul' => "Dashboard",

        ];

        if ($this->session->userdata('username')) {
            $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

            $data['user'] = $user['username'];

            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('content');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/footer');
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
