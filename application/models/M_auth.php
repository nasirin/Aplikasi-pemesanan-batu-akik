<?php

class M_auth extends CI_Model
{
    public function get($post)
    {
        return $this->db->from('user')
            ->where('emailUser', $post['email'])
            ->where('passUser', $post['pass'])
            ->get();
    }

    public function cek($id)
    {
        return $this->db->from('user')
            ->where('idUser', $id)
            ->get();
    }

    public function profil($id)
    {
        return $this->db->from('user')
            ->where('idUser', $id)
            ->get();
    }
}
