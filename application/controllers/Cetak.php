<?php

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_order');
        $this->load->model('M_konfirmasi');
        $this->load->model('M_pelanggan');
        $this->load->library('Pdf');
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


    function cetak_penjualan()
    {
        // mencari total
        $harga = $this->M_order->get()->result_array();
        foreach ($harga as $subtotal) {
            $total_harga[] = $subtotal['harga_produk'];
        }
        $total = array_sum($total_harga);
        // end mencari total

        $data = [
            'no' => 1,
            'order' => $this->M_order->get()->result_array(),
            'total' => $total
        ];
        $this->load->view('backend/menu/cetak/cetak_penjualan', $data);
    }

    function cetak_pelanggan()
    {
        $data = [
            'no' => 1,
            'pelanggan' => $this->M_pelanggan->get()->result_array(),
        ];
        $this->load->view('backend/menu/cetak/cetak_pelanggan', $data);
    }
}
