<?php

class Pengembalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('M_return');
        $this->load->model('M_order');
    }

    public function index()
    {
        $data = [
            'active' => 'return',
            'no' => 1,
            'return' => $this->M_return->get()->result_array(),
        ];
        $this->layout->load('backend/index', 'backend/menu/return/return-view', $data);
    }

    public function pengajuan($id)
    {
        $cek = $this->M_return->getByIdPesanan($id)->row_array();
        // var_dump($cek);
        // die;

        if (!empty($cek['idPesanan'])) {
            if ($cek['statusReturn'] == 'rejected') {
                $this->session->set_flashdata('error', 'Proses Pengembalian Di TOLAK Silahkan Hubungi 0822231312');
                redirect('shop-cart');
            } else {
                $this->session->set_flashdata('error', 'Pengembalian Anda Sedang Kami Proses, Silahkan Tunggu');
                redirect('shop-cart');
            }
        } else {
            $data = [
                'active' => 'cart',
                'return' => $this->M_order->get($id)->row_array(),
            ];
            $this->layout->load('frontend/index', 'frontend/menu/return/return-view', $data);
        }
    }

    public function tambah($id)
    {
        $post = $this->input->post(null, true);

        $cek = $this->M_order->get($id)->row_array();

        $this->form_validation->set_rules('qty', 'Qty', 'required');
        $this->form_validation->set_rules('alasan', 'Alasan', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Qty dan Alasan Tidak Boleh Kosong');
            redirect('pengajuan/' . $post['id']);
        }

        if ($cek['qtyPesanan'] < $post['qty']) {
            $this->session->set_flashdata('error', 'Qty Terlalu Besar');
            redirect('pengajuan/' . $post['id']);
        }

        $this->M_return->tambah($post, $id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Please wait for your return process, we will process it. thank you for your patience.');
            redirect('shop-cart');
        }
    }

    public function approve($id)
    {
        $this->M_return->approve($id);
        $this->M_order->returnApprove($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Product returns are approved');
            redirect('return');
        }
    }

    public function reject($id)
    {
        $this->M_return->reject($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Product returns are refused');
            redirect('return');
        }
    }
}
