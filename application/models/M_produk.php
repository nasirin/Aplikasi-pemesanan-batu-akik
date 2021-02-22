<?php

class M_produk extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('produk')
                ->where('idProduk', $id)
                ->get();
        } else {
            return $this->db->from('produk')
                ->get();
        }
    }

    public function simpan($post)
    {
        $data = [
            'namaProduk' => $post['nama'],
            'hargaProduk' => $post['harga'],
            'imgProduk' => $post['gambar'],
            'descProduk' => $post['desc'],
            'jenisBatu' => $post['jenis'],
            'beratBatu' => $post['berat'],            
        ];

        $this->db->insert('produk', $data);
    }

    public function ubah($post, $id)
    {
        $data = [
            'namaProduk' => $post['nama'],
            'hargaProduk' => $post['harga'],
            'descProduk' => $post['desc'],
            'imgProduk' => $post['gambar'],
            'updatedAt' => date('ymd'),
        ];

        $this->db->where('idProduk', $id)->update('produk', $data);
    }

    public function hapus($id)
    {
        $this->db->where('idProduk', $id)->delete('produk');
    }
}
