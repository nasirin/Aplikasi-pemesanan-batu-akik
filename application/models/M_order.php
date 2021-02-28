<?php

class M_order extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return  $this->db->from('pesanan')
                ->join('produk', 'produk.idProduk = pesanan.idProduk', 'left')
                ->join('pelanggan', 'pelanggan.idPelanggan = pesanan.idPel', 'left')
                ->where('idPesanan', $id)
                ->get();
        } else {
            return $this->db->from('pesanan')
                ->join('produk', 'produk.idProduk = pesanan.idProduk', 'left')
                ->join('pelanggan', 'pelanggan.idPelanggan = pesanan.idPel', 'left')
                ->get();
        }
    }

    public function info($info)
    {
        return $this->db->from('pesanan')
            ->join('pelanggan', 'pelanggan.idPelanggan = pesanan.idPel')
            ->join('produk', 'produk.idProduk = pesanan.idProduk')
            ->where('statusPesanan', $info)
            ->get();
    }

    public function get_pes($id)
    {
        return $this->db->from('pesanan')
            ->join('pelanggan', 'pelanggan.idPelanggan = pesanan.idPel')
            ->join('produk', 'produk.idProduk = pesanan.idProduk')
            ->where('pesanan.statusPesanan !=', 'cancel')
            ->where('pelanggan.idPelanggan', $id)
            ->get();
    }

    public function invoice()
    {
        $nip = $this->db->query("SELECT MAX(RIGHT(idPesanan,3)) AS id FROM pesanan");
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
        $harga = $isi['qty'] * $isi['harga'];
        if ($harga >= 1000000) {
            $ongkir = 0;
            $potongan = 0;
        } else {
            $ongkir = 50000;
            $potongan = 50000 * 5 / 100;
        }
        $data = [
            'idPesanan' => $this->invoice(),
            'idPel' => $this->session->userdata('idUser'),
            'idProduk' => $post['idProduk'],
            'ukuranCincin' => $isi['ukuran'],
            'qtyPesanan' => $isi['qty'],
            'warna' => $isi['warna'],
            'statusPesanan' => 'pending',
            'ongkir' => $ongkir,
            'potonganOngkir' => $potongan,
        ];

        $this->db->insert('pesanan', $data);
    }

    public function ubah($post, $id)
    {
        $data = [
            'ketPesanan' => $post['keterangan'],
            'statusPesanan' => 'process',
            'updatedAt' => date('dmy'),
        ];

        $this->db->where('idPesanan', $id)
            ->update('pesanan', $data);
    }

    public function selesai($id)
    {
        $data = [
            'statusPesanan' => 'success',
            'updatedAt' => date('dmy'),
        ];

        $this->db->where('idPesanan', $id)
            ->update('pesanan', $data);
    }

    public function diterima($id)
    {
        $data = [
            'statusPesanan' => 'diterima',
            'updatedAt' => date('dmy'),
        ];

        $this->db->where('idPesanan', $id)
            ->update('pesanan', $data);
    }

    public function hapus($id)
    {
        $data = [
            'statusPesanan' => 'cancel',
            'updatedAt' => date('dmy')
        ];

        $this->db->where('idPesanan', $id)
            ->update('pesanan', $data);
    }

    public function returnApprove($id)
    {
        $data = [
            'statusPesanan' => 'return',
            'updatedAt' => date('dmy'),
        ];

        $this->db->where('idPesanan', $id)
            ->update('pesanan', $data);
    }

    public function printToDay()
    {
        return $this->db->from('pesanan')
            ->join('pelanggan', 'pelanggan.idPelanggan = pesanan.idPel')
            ->join('produk', 'produk.idProduk = pesanan.idProduk')
            ->where('pesanan.createdAt', date('ymd'))
            ->get();
    }

    public function byTgl($post)
    {
        return $this->db->from('pesanan')
            ->join('pelanggan', 'pelanggan.idPelanggan = pesanan.idPel')
            ->join('produk', 'produk.idProduk = pesanan.idProduk')
            ->where('pesanan.createdAt >=', $post['mulai'])
            ->where('pesanan.createdAt <=', $post['sampai'])
            ->get();
    }
}
