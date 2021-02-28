<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_order');
		$this->load->model('M_pelanggan');
		$this->load->model('M_return');
	}

	public function index()
	{

		$data = [
			'no' => 1,
			'active' => 'home',
			'newOrder' => $this->M_order->info($info = 'pending')->num_rows(),
			'success' => $this->M_order->info($info = 'success')->num_rows(),
			'order' => $this->M_order->info($info = 'pending')->result_array(),
			'customers' => $this->M_pelanggan->info()->num_rows(),
			'return' => $this->M_return->get()->num_rows()
		];
		$this->layout->load('backend/index', 'backend/menu/home-view', $data);
	}
}
