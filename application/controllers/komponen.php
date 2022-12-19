<?php


class Komponen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function prosesor()
    {
        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        $data = [
            'user' => 'Guest',
            'judul' => 'Rakitan Saya',
            'image' => "default.jpg"
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('komponen/prosesor');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/footer');
    }
    public function motherboard()
    {
        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        $data = [
            'user' => 'Guest',
            'judul' => 'Rakitan Saya',
            'image' => "default.jpg"
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('komponen/motherboard');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/footer');
    }

}