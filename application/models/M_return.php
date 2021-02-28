<?php

class M_return extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('pesananreturn')
                ->join('produk', 'produk.idProduk = pesananreturn.idProduk', 'left')
                ->join('pesanan', 'pesanan.idPesanan = pesananreturn.idPesanan', 'left')
                ->join('pelanggan', 'pelanggan.idPelanggan = pesananreturn.idPel', 'left')
                ->where('idReturn', $id)
                ->get();
        } else {
            return $this->db->from('pesananreturn')
                ->join('produk', 'produk.idProduk = pesananreturn.idProduk', 'left')
                ->join('pesanan', 'pesanan.idPesanan = pesananreturn.idPesanan', 'left')
                ->join('pelanggan', 'pelanggan.idPelanggan = pesananreturn.idPel', 'left')
                ->get();
        }
    }

    public function getByIdPesanan($id)
    {
        return $this->db->from('pesananreturn')
            ->join('produk', 'produk.idProduk = pesananreturn.idProduk', 'left')
            ->join('pesanan', 'pesanan.idPesanan = pesananreturn.idPesanan', 'left')
            ->join('pelanggan', 'pelanggan.idPelanggan = pesananreturn.idPel', 'left')
            ->where('pesananreturn.idPesanan', $id)
            ->get();
    }

    public function tambah($post, $id)
    {
        $data = [
            'idProduk' => $post['produk'],
            'idPel' => $this->session->userdata('idUser'),
            'idPesanan' => $id,
            'qtyReturn' => $post['qty'],
            'alasanReturn' => $post['alasan'],
            'statusReturn' => 'submission', //pengajuan awal

        ];
        $this->db->insert('pesananreturn', $data);
    }

    public function approve($id)
    {
        $data = [
            'statusReturn' => 'approve',
            'updatedAt' => date('dmy'),
        ];
        $this->db->where('idReturn', $id)
            ->update('pesananreturn', $data);
    }

    public function reject($id)
    {
        $data = [
            'statusReturn' => 'rejected',
            'updatedAt' => date('dmy'),
        ];
        $this->db->where('idReturn', $id)
            ->update('pesananreturn', $data);
    }
}
