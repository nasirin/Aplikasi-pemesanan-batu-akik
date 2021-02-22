<?php


class M_konfirmasi extends CI_Model
{
    public function get($id)
    {
        return $this->db->from('konfirmasi')
            ->where('idPesanan', $id)
            ->get();
    }
    public function simpan($post, $id)
    {
        $data = [
            'idPel' => $this->session->userdata('idUser'),
            'idPesanan' => $id,
            'gambar' => $post['bukti'],
        ];

        $this->db->insert('konfirmasi', $data);
    }
}
