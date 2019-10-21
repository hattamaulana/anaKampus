<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('product_model');
    }

    /**
     *
     */
    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/product/add');
        $this->load->view('admin/template/footer');
    }

    /**
     *
     */
    public function add()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/product/add');
        $this->load->view('admin/template/footer');
    }

    /**
     * Method ini digunakan untuk menambahkan data
     * atau action dari form tambah data produk.
     */
    public function insert()
    {
        $this->form_validation->set_rules(Product_model::$NAME, 'Nama', 'required');
        $this->form_validation->set_rules(Product_model::$CATEGORY, 'Kategori', 'required');
        $this->form_validation->set_rules(Product_model::$PRICE, 'Harga', 'required');
        $this->form_validation->set_rules(Product_model::$DESCRIPTION, 'Deskripsi', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/left-sidebar');
            $this->load->view('admin/product/add');
            $this->load->view('admin/template/footer');
            return;
        }

        $config['upload_path']   = __DIR__. '/../../Storage/Product/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 100;
        $config['max_width']     = 1024;
        $config['max_height']    = 1024;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload(Product_model::$PHOTO)) {
            $input = $this->input->post();
            $input[Product_model::$UID] = $this->session->userdata(Product_model::$UID);
            $input[Product_model::$PID] = $this->createNewPID($input[Product_model::$CATEGORY]);
            $input[Product_model::$PHOTO] = $this->upload->data('full_path');

            $this->product_model->insert($input);
            redirect('produk');
        } else {
            $this->session->flashdata('form_error', 'File yang diapload terlalu bessar.');
            redirect('produk/add');
        }
    }

    /**
     * Method ini digunakan untuk membuat ID yang unik
     * untuk PID.
     *
     * @param $cat: string
     * @return string
     */
    private function createNewPID($cat) {
        $uid = $this->session->userdata(Product_model::$UID);

        return strtoupper(substr($cat, 0, 1))
            . substr($uid, 1, 3)
            . substr($uid, 8, 11)
            . date('u')
            . substr($cat, strlen($cat)-1, strlen($cat));
    }
}