<?php


class M_konfirmasi extends CI_Model
{
    public function get($id)
    {
        return $this->db->from('konfirmasi')
            ->where('id_pesanan', $id)
            ->get();
    }
    public function simpan($post, $id)
    {
        $data = [
            'id_pelanggan' => $this->session->userdata('idUser'),
            'id_pesanan' => $id,
            'gambar_pesanan' => $post['bukti'],
            'created_konfirmasi' => date('ymd'),
        ];

        $this->db->insert('konfirmasi', $data);
    }
}
