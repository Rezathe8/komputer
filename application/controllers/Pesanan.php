<?php


class Pesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function rakitan()
    {
        $user = $this->UserModel->cekData(['username' => $this->session->userdata('username')])->row_array();

        $data = [
            'user' => 'Guest',
            'judul' => 'Rakitan Saya',
            'image' => "default.jpg"
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('rakitan/rakitan');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/footer');
    }

    public function exportToPdf()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->session->userdata('nama');
        $data['judul'] = "Cetak Rakitan Saya";
        $data['useraktif'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id_user')])->result();
        $data['items'] = $this->db->query("select*from booking bo, booking_detail d, buku bu where d.id_booking=bo.id_booking and d.id_buku=bu.id and bo.id_user='$id_user'")->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/komputer/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('booking/bukti-pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("bukti-booking-$id_user.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

}