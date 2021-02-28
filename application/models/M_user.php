<?php

class M_user extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('user')
                ->where('idUser', $id)
                ->get();
        } else {
            return $this->db->get('user');
        }
    }

    public function simpan($post)
    {
        $data = [
            'level' => $post['level'],
            'namaUser' => $post['nama'],
            'emailUser' => $post['email'],
            'passUser' => $post['pass'],
            'notelpUser' => $post['notelp'],
            'alamatUser' => $post['alamat'],
            'statusUser' => $post['status'],
            'createdUser' => date('ymd'),
        ];
        $this->db->insert('user', $data);
    }

    public function ubah($id, $post)
    {
        $data = [
            'level' => $post['level'],
            'namaUser' => $post['nama'],
            'emailUser' => $post['email'],
            'passUser' => $post['pass'],
            'notelpUser' => $post['notelp'],
            'alamatUser' => $post['alamat'],
            'statusUser' => $post['status'],
            'updatedUser' => date('ymd'),
        ];
        $this->db->where('idUser', $id)
            ->update('user', $data);
    }
}
