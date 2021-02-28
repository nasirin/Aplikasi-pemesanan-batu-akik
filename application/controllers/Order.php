<?php

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_cust_not_login();
        $this->load->model('M_order');
        $this->load->model('M_produk');
        $this->load->model('M_konfirmasi');

        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 1048;
        $config['file_name'] = 'INV-' . date('mY') . '-' . substr(md5(rand()), 0, 10);
        $config['upload_path'] = './assets/img/bukti';
        $this->load->library('upload', $config);
    }

    public function index()
    {
        $data = [
            'active' => 'order',
            'pesanan' => $this->M_order->get()->result_array(),
            'no' => 1
        ];
        $this->layout->load('backend/index', 'backend/menu/order/order-view', $data);
    }

    public function tambah()
    {
        $data = [
            'active' => 'order'
        ];

        $this->layout->load('backend/index', 'backend/menu/order/order-tambah', $data);
    }

    public function simpan($id)
    {
        $post = $this->M_produk->get($id)->row_array();
        $isi = $this->input->post(null, true);        

        $this->M_order->simpan($post, $isi);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Terimakasih, silahkan lakukan pembayaran untuk pesanan anda :)');
            redirect('shop-cart');
        }
    }

    public function hapus($id)
    {
        $this->M_order->hapus($id);
        if ($this->db->affected_rows() > 0) {
            redirect('shop-cart');
        }
    }

    public function confirm($id)
    {
        $post = $this->input->post(null, true);

        if (@$_FILES['bukti']['name'] != null) {
            if ($this->upload->do_upload('bukti')) {
                $post['bukti'] = $this->upload->data('file_name');
                $this->M_konfirmasi->simpan($post, $id);
                $this->M_order->ubah($post, $id);
                if ($this->db->affected_rows() > 0) {
                    $data = [
                        'active' => 'shop',
                        'flashdata' => $this->session->set_flashdata('success', 'Thank you. Your order has been received..'),
                    ];
                    $this->layout->load('frontend/index', 'frontend/menu/shop/shop-confirm', $data);
                }
            } else {
                redirect();
            }
        } else {
            $this->session->set_flashdata('error', 'Silahkan masukan bukti pembayaran');
            redirect('shop-checkout/' . $id);
        }
    }

    public function selesai($id)
    {
        $this->M_order->selesai($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Order Already Done');
            redirect('pesanan');
        }
    }

    public function diterima($id)
    {
        $this->M_order->diterima($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Order Already Done');
            redirect('shop-cart');
        }
    }

    public function detail($id)
    {
        $data = [
            'active' => 'order',
            'detail' => $this->M_order->get($id)->row_array(),
            'pembayaran' => $this->M_konfirmasi->get($id)->row_array()
        ];

        $this->layout->load('backend/invoice', 'backend/menu/order/order-detail', $data);
    }
}
