<?php

class Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
        $this->load->model('M_order');
        $this->load->model('M_return');
    }

    public function index()
    {
        $data = [
            'active' => 'shop',
            'produk' => $this->M_produk->get()->result_array()
        ];
        $this->layout->load('frontend/index', 'frontend/menu/shop/shop-view', $data);
    }

    public function detail($id)
    {
        $data = [
            'active' => 'shop',
            'produk' => $this->M_produk->get($id)->row_array()
        ];
        $this->layout->load('frontend/index', 'frontend/menu/shop/produk-detail', $data);
    }

    public function checkout($id)
    {
        $data = [
            'active' => 'shop',
            'pesanan' => $this->M_order->get($id)->row_array()
        ];
        $this->layout->load('frontend/index', 'frontend/menu/shop/shop-checkout', $data);
    }

    public function cart()
    {
        $id = $this->session->userdata('idUser');
        $return = $this->M_return->get()->result_array();
        foreach ($return as $data) {
            $kembali = $data;
        }

        // var_dump($kembali);
        // die;

        $data = [
            'active' => 'cart',
            'pesanan' => $this->M_order->get_pes($id)->result_array(),
            'return' => $kembali
        ];
        $this->layout->load('frontend/index', 'frontend/menu/shop/shop-cart', $data);
    }
}
