<?php

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('M_pelanggan');
    }

    public function index()
    {
        $data = [
            'active' => 'pelanggan',
            'no' => 1,
            'pelanggan' => $this->M_pelanggan->get()->result_array()
        ];

        $this->layout->load('backend/index', 'backend/menu/pelanggan/pelanggan-view', $data);
    }

    public function detail($id)
    {
        $data = [
            'active' => 'pelanggan',
            'no' => 1,
            'pelanggan' => $this->M_pelanggan->get($id)->row_array()
        ];
        $this->layout->load('backend/index', 'backend/menu/pelanggan/pelanggan-detail', $data);
    }
}
