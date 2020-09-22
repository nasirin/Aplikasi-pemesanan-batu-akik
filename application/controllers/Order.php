<?php

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }
    
    public function index()
    {
        $data = [
            'active' => 'order'
        ];
        $this->layout->load('backend/index', 'backend/menu/order/order-view', $data);
    }

    public function tambah()
    {
        $data = [
            'active' => 'order'
        ];

        $this->layout->load('backend/index', 'backend/menu/order/order-tambah', $data);
    }
}
