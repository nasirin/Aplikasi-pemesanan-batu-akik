<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('M_user');
    }

    public function index()
    {
        $data = [
            'active' => 'user',
            'no' => 1,
            'user' => $this->M_user->get()
        ];
        $this->layout->load('backend/index', 'backend/menu/user/user-view', $data);
    }

    public function tambah()
    {
        $data = [
            'active' => 'user'
        ];

        $this->layout->load('backend/index', 'backend/menu/user/user-tambah', $data);
    }

    public function simpan()
    {
        $post = $this->input->post(null, true);
        // var_dump($post);
        // die;
        $this->M_user->simpan($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('user');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal disimpan');
            redirect('user-tambah');
        }
    }

    public function edit($id)
    {
        // $user = $this->M_user->get($id)->row_array();
        // var_dump($user);
        // die;

        $data = [
            'active' => 'user',
            'user' => $this->M_user->get($id)->row_array()
        ];

        $this->layout->load('backend/index', 'backend/menu/user/user-edit', $data);
    }

    public function ubah($id)
    {
        $post = $this->input->post(null, true);

        $this->M_user->ubah($id, $post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('user');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal diubah');
            redirect('user-edit/' . $id);
        }
    }

    public function detail($id)
    {
        $data = [
            'active' => 'user',
            'user' => $this->M_user->get($id)->row_array()
        ];

        $this->layout->load('backend/index', 'backend/menu/user/user-detail', $data);
    }

    public function hapus($id)
    {
        $this->db->from('user')
            ->where('id_user', $id)
            ->delete('user');

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect('user');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal dihapus');
            redirect('user');
        }
    }
}
