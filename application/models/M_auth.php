<?php

class M_auth extends CI_Model
{
    public function get($post)
    {
        return $this->db->from('user')
            ->where('email_user', $post['email'])
            ->where('pass_user', $post['pass'])
            ->get();
    }

    public function cek($id)
    {
        return $this->db->from('user')
            ->where('id_user', $id)
            ->get();
    }

    public function profil($id)
    {
        return $this->db->from('user')
            ->where('id_user', $id)
            ->get();
    }
}
