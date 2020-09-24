<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
	}

	public function index()
	{
		$data = [
			'active' => 'home',
			'produk' => $this->M_produk->get()->result_array() //panggil produk terakhir dengan limit 8
		];
		$this->layout->load('frontend/index', 'frontend/menu/home-view', $data);
	}
}
