<?php

class M_return extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('pesanan_return')
                ->join('produk', 'produk.id_produk = pesanan_return.id_produk', 'left')
                ->join('pesanan', 'pesanan.id_pesanan = pesanan_return.id_pesanan', 'left')
                ->join('pelanggan', 'pelanggan.id_pel = pesanan_return.id_pelanggan', 'left')
                ->where('id_return', $id)
                ->get();
        } else {
            return $this->db->from('pesanan_return')
                ->join('produk', 'produk.id_produk = pesanan_return.id_produk', 'left')
                ->join('pesanan', 'pesanan.id_pesanan = pesanan_return.id_pesanan', 'left')
                ->join('pelanggan', 'pelanggan.id_pel = pesanan_return.id_pelanggan', 'left')
                ->get();
        }
    }

    public function tambah($post, $id)
    {
        $data = [
            'id_produk' => $post['produk'],
            'id_pelanggan' => $this->session->userdata('idUser'),
            'id_pesanan' => $id,
            'qty_return' => $post['qty'],
            'alasan_return' => $post['alasan'],
            'status_return' => 'submission', //pengajuan awal
            'created_return' => date('dmy'),
        ];
        $this->db->insert('pesanan_return', $data);
    }

    public function approve($id)
    {
        $data = [
            'status_return' => 'approve',
            'updated_return' => date('dmy'),
        ];
        $this->db->where('id_return', $id)
            ->update('pesanan_return', $data);
    }

    public function reject($id)
    {
        $data = [
            'status_return' => 'rejected',
            'updated_return' => date('dmy'),
        ];
        $this->db->where('id_return', $id)
            ->update('pesanan_return', $data);
    }
}
