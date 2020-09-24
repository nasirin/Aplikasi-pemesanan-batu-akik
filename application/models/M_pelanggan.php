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

    public function daftar($post)
    {
        $data = [
            'nama_pel' => $post['nama'],
            'email_pel' => $post['email'],
            'pass_pel' => $post['pass'],
            'notelp_pel' => $post['notelp'],
            'alamat_pel' => $post['alamat'],
            'created_pel' => date('dmy'),
        ];
        $this->db->insert('pelanggan', $data);
    }

    public function login($post)
    {
        return $this->db->from('pelanggan')
            ->where('email_pel', $post['email'])
            ->where('pass_pel', $post['pass'])
            ->get();
    }
}
