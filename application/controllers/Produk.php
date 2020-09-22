<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');

        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 1048;
        $config['file_name'] = 'Prod-' . date('mY') . '-' . substr(md5(rand()), 0, 10);
        $config['upload_path'] = './assets/img/produk';
        $this->load->library('upload', $config);
    }

    public function index()
    {
        $data = [
            'active' => 'produk',
            'no' => 1,
            'produk' => $this->M_produk->get()->result_array()
        ];
        $this->layout->load('backend/index', 'backend/menu/produk/produk-view', $data);
    }

    public function tambah()
    {
        $data = [
            'active' => 'produk',
        ];
        $this->layout->load('backend/index', 'backend/menu/produk/produk-tambah', $data);
    }

    public function ubah($id)
    {
        $data = [
            'active' => 'produk',
            'produk' => $this->M_produk->get($id)->row_array()
        ];
        $this->layout->load('backend/index', 'backend/menu/produk/produk-edit', $data);
    }

    public function simpan()
    {
        $post = $this->input->post(null, true);

        if (@$_FILES['gambar']['name'] != null) {
            if ($this->upload->do_upload('gambar')) {
                $post['gambar'] = $this->upload->data('file_name');
                $this->M_produk->simpan($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data successfully added');
                    redirect('produk');
                }
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('produk');
            }
        }
    }

    public function ganti($id)
    {
        $post = $this->input->post(null, true);

        // var_dump($post);
        // die;

        if (@$_FILES['gambar']['name'] != null) {
            if ($this->upload->do_upload('gambar')) {

                $img = $this->M_produk->get($id)->row(); //replace gambar
                if ($img->img_produk != null) {
                    $target_file = './assets/img/produk/' . $img->img_produk;
                    unlink($target_file);
                }

                $post['gambar'] = $this->upload->data('file_name');
                $this->M_produk->ubah($post, $id);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data successfully added');
                    redirect('produk');
                } else {
                    $this->session->set_flashdata('error', 'Data Failded updated');
                    redirect('produk');
                }
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('produk');
            }
        }else{
            $post['gambar'] = null;
            $this->M_produk->ubah($post,$id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success','Data successfully changes');
                redirect('produk');
            }else{
                $this->session->set_flashdata('success','Data still available, nothing changed');
                redirect('produk');
            }
        }
    }

    public function hapus($id)
    {
        $kar = $this->M_produk->get($id)->row();
		if ($kar->img_produk != null) {
			$target_file = './assets/img/produk/'.$kar->img_produk;
			unlink($target_file);
		}
		
		$this->M_produk->hapus($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success','Data berhasil di hapus');
			redirect('produk');
		}
    }

    public function detail($id)
    {
        $data = [
            'active' => 'produk',
            'produk' => $this->M_produk->get($id)->row_array()
        ];
        $this->layout->load('backend/index', 'backend/menu/produk/produk-detail', $data);
    }
}
