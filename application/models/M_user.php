<?php

class M_user extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('user')
                ->where('id_user', $id)
                ->get();
        } else {
            return $this->db->get('user');
        }
    }

    public function simpan($post)
    {
        $data = [
            'level' => $post['level'],
            'nama_user' => $post['nama'],
            'email_user' => $post['email'],
            'pass_user' => $post['pass'],
            'notelp_user' => $post['notelp'],
            'alamat_user' => $post['alamat'],
            'status_user' => $post['status'],
            'created_user' => date('ymd'),
        ];
        $this->db->insert('user', $data);
    }

    public function ubah($id, $post)
    {
        $data = [
            'level' => $post['level'],
            'nama_user' => $post['nama'],
            'email_user' => $post['email'],
            'pass_user' => $post['pass'],
            'notelp_user' => $post['notelp'],
            'alamat_user' => $post['alamat'],
            'status_user' => $post['status'],
            'updated_user' => date('ymd'),
        ];
        $this->db->where('id_user', $id)
            ->update('user', $data);
    }
}
