<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $config['upload_path']   = __DIR__ . '/../../storage/product/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 10000;
        $config['max_width']      = 2048;
        $config['max_height']      = 2048;

        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->load->model('product_model');
    }

    /**
     *
     */
    public function index()
    {
        $uid = $this->session->userdata(Product_model::$UID);
        $data = $this->product_model->get($uid);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/product/index', array('data' => $data));
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

        if ($this->upload->do_upload(Product_model::$PHOTO)) {
            $input = $this->input->post();
            $input[Product_model::$UID] = $this->session->userdata(Product_model::$UID);
            $input[Product_model::$PID] = $this->createNewPID($input[Product_model::$CATEGORY]);
            $input[Product_model::$PHOTO] = $this->upload->data('file_name');

            $this->product_model->insert($input);
            redirect('produk');
        } else {
            $this->session->flashdata('form_error', 'File yang diapload terlalu bessar.');
            redirect('produk/add');
        }
    }

    public function manage()
    {
        $uid = $this->session->userdata(Product_model::$UID);
        $data = $this->product_model->get($uid);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/product/manage', array('data' => $data));
        $this->load->view('admin/template/footer');
    }

    /**
     * @param $uid
     */
    public function edit($pid)
    {
        $data = $this->product_model->get_pid($pid);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/product/edit', array('data' => $data));
        $this->load->view('admin/template/footer');
    }

    /**
     * Method ini digunakan untuk mengupdate data product.
     */
    public function update()
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

        $input = $this->input->post();
        $input[Product_model::$UID] = $this->session->userdata(Product_model::$UID);
        $this->product_model->update($input, $input[Product_model::$PID]);

        redirect('produk');
    }

    /**
     * Method ini digunakan untuk mengupload dan mengupdate
     * data photo dari product.
     */
    public function update_photo()
    {
        $input = $this->input->post();
        $pid = $input[Product_model::$PID];

        if ($this->upload->do_upload(Product_model::$PHOTO)) {
            $input[Product_model::$PHOTO] = $this->upload->data('file_name');
            $this->product_model->update($input, $pid);

            redirect('produk');
        } else {
            $this->session->flashdata('form_error', 'File yang diapload terlalu bessar.');
            redirect('produk/edit/'. $pid);
        }
    }

    /**
     * @param $uid
     */
    public function delete($uid)
    {
        die($uid);
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