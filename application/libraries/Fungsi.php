<?php

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('M_auth');
        // $this->ci->load->model('M_karyawan','kar');  
    }

    function user_login()
    {
        $user_id = $this->ci->session->userdata('id');
        $user_data = $this->ci->M_auth->cek($user_id)->row();
        return $user_data;
    }
}
