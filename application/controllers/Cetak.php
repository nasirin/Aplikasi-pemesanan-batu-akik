<?php

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_order');
        $this->load->model('M_konfirmasi');
    }

    public function cetak_invoice($id)
    {
        // $pesanan = $this->M_order->get($id)->row_array();
        $data = [
            'pesanan' => $this->M_order->get($id)->row_array(),
            'pembayaran' => $this->M_konfirmasi->get($id)->row_array()
        ];

        $this->load->view('frontend/menu/invoice', $data);
    }
}
