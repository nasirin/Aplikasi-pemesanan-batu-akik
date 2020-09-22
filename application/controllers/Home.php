<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
	}
	
	public function index()
	{

		$data = [
			'active' => 'home'
		];
		$this->layout->load('backend/index', 'backend/menu/home-view', $data);
	}
}
