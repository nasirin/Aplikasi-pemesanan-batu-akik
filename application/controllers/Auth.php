<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        check_already_login();
        $this->load->view('backend/menu/auth/login');
        // $this->layout->load('backend/index', 'backend/menu/auth/login');
    }

    public function login()
    {
        $post = $this->input->post(null, true);
        
        $query = $this->M_auth->get($post)->row_array();
        // var_dump($query);
        // die;


        if ($query) {
            if ($query['statusUser'] == 'Aktif') {
                $data = [
                    'id' => $query['idUser'],
                    'nama' => $query['namaUser'],
                    'level' => $query['level']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('error', 'Account is not active!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $params = array('nama', 'level');
        $this->session->unset_userdata($params);
        redirect('auth');
    }

    public function profil($id)
    {
        $data = [
            'active' => 'user',
            'user' => $this->M_auth->profil($id)->row_array()
        ];

        $this->layout->load('backend/index', 'backend/menu/auth/profil', $data);
    }
}
