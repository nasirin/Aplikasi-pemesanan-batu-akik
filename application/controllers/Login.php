<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');
    }
    public function index()
    {
        $data = [
            'active' => 'login'
        ];
        $this->layout->load('frontend/index', 'frontend/menu/profil/login-view', $data);
    }

    public function profil($id)
    {
        $data = [
            'active' => 'login',
            'pel' => $this->M_pelanggan->get($id)->row_array()
        ];
        $this->layout->load('frontend/index', 'frontend/menu/profil/profil-view', $data);
    }

    public function register()
    {
        $data = [
            'active' => 'login'
        ];
        $this->layout->load('frontend/index', 'frontend/menu/profil/register-view', $data);
    }

    public function signup()
    {
        $post = $this->input->post(null, true);
        $this->M_pelanggan->daftar($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Silahkan Login');
            redirect('ulogin');
        }
    }

    public function signin()
    {
        $post = $this->input->post(null, true);
        $query = $this->M_pelanggan->login($post)->row_array();

        if ($query) {
            $data = [
                'idUser' => $query['idPelanggan'],
                'nama' => $query['namaPelanggan']
            ];
            $this->session->set_userdata($data);
            redirect();
        }
    }

    public function signout()
    {
        $params = array('idUser', 'nama');
        $this->session->unset_userdata($params);
        redirect();
    }
}
