<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('nama');
    if ($user_session) {
        redirect();
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('nama');
    if (!$user_session) {
        redirect('auth');
    }
}

function check_cust_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('nama');
    if (!$user_session) {
        redirect('ulogin');
    }
}

function cek_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->id_user != 'super admin') {
        redirect('dashboard');
    }
}
