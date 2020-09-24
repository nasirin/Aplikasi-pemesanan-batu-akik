<?php

class M_order extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return  $this->db->from('pesanan')
                ->join('produk', 'produk.id_produk = pesanan.id_produk','left')
                ->join('pelanggan', 'pelanggan.id_pel = pesanan.id_pelanggan','left')
                ->where('id_pesanan', $id)
                ->get();
        } else {
            return $this->db->from('pesanan')
                ->get();
        }
    }

    public function get_pes($id)
    {
        return $this->db->from('pesanan')
            ->join('pelanggan', 'pelanggan.id_pel = pesanan.id_pelanggan')
            ->join('produk', 'produk.id_produk = pesanan.id_produk')
            ->where('id_pelanggan', $id)
            ->get();
    }

    public function invoice()
    {
        $nip = $this->db->query("SELECT MAX(RIGHT(id_pesanan,3)) AS id FROM pesanan");
        $kd = "";
        if ($nip->num_rows() > 0) {
            foreach ($nip->result() as $k) {
                $tmp = ((int)$k->id) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return "INV" . '-' . date('my') . '-' . $kd;
    }

    public function simpan($post, $isi)
    {
        $data = [
            'id_pesanan' => $this->invoice(),
            'id_pelanggan' => $this->session->userdata('idUser'),
            'id_produk' => $post['id_produk'],
            'ukuran_cincin' => $isi['ukuran'],
            'qty_pesanan' => $isi['qty'],
            'ket_pesanan' => $isi['ket'],
            'status_pesanan' => 'pending',
            'created_pesanan' => date('dmy'),
        ];

        $this->db->insert('pesanan', $data);
    }

    public function ubah($post, $id)
    {
        $data = [
            'ket_pesanan' => $post['keterangan'],
            'status_pesanan' => 'process',
            'updated_pesanan' => date('dmy'),
        ];

        $this->db->where('id_pesanan', $id)
            ->update('pesanan', $data);
    }

    public function hapus($id)
    {
        $this->db->from('pesanan')
            ->where('id_pesanan', $id)
            ->delete('pesanan');
    }
}
