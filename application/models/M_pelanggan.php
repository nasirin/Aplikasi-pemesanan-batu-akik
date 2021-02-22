<?php
class M_pelanggan extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('pelanggan')
                ->where('id_pel', $id)
                ->get();
        } else {
            return $this->db->get('pelanggan');
        }
    }

    public function info()
    {
        return $this->db->get('pelanggan');
    }

    public function daftar($post)
    {
        $data = [
            'namaPelanggan' => $post['nama'],
            'emailPelanggan' => $post['email'],
            'passPelanggan' => $post['pass'],
            'notelpPelanggan' => $post['notelp'],
            'alamatPelanggan' => $post['alamat'],
        ];
        $this->db->insert('pelanggan', $data);
    }

    public function login($post)
    {
        return $this->db->from('pelanggan')
            ->where('emailPelanggan', $post['email'])
            ->where('passPelanggan', $post['pass'])
            ->get();
    }
}
