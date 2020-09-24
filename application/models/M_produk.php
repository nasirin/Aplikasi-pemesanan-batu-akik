<?php

class M_produk extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('produk')
                ->where('id_produk', $id)
                ->get();
        } else {
            return $this->db->from('produk')
                ->get();
        }
    }

    public function simpan($post)
    {
        $data = [
            'nama_produk' => $post['nama'],
            'harga_produk' => $post['harga'],
            'img_produk' => $post['gambar'],
            'desc_produk' => $post['desc'],
            'jenis_batu' => $post['jenis'],
            'berat_batu' => $post['berat'],
            'created_produk' => date('ymd'),
        ];

        $this->db->insert('produk', $data);
    }

    public function ubah($post, $id)
    {
        $data = [
            'nama_produk' => $post['nama'],
            'harga_produk' => $post['harga'],
            'desc_produk' => $post['desc'],
            'img_produk' => $post['gambar'],
            'updated_produk' => date('ymd'),
        ];

        $this->db->where('id_produk', $id)->update('produk', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_produk', $id)->delete('produk');
    }
}
