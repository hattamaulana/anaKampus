<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('auth_model');
        $this->load->model('address_model');
        $this->load->model('seller_model');

        if (!$this->session->has_userdata('uid') && substr($this->session->userdata('uid'), 0, 1) != 'S') {
            redirect('auth/signIn', 'refresh');
        }
    }

    /**
     * Method ini digunakan untuk melakukan
     * update data dari interface @function edit.
     */
    public function update()
    {
        $config['upload_path']   = __DIR__. '/../../Storage/Profile/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 100;
        $config['max_width']     = 1024;
        $config['max_height']    = 1024;

        $this->load->library('upload', $config);
        if (! $this->upload->do_upload(Seller_model::$LOGO_URI) && isset($this->input->post()[Seller_model::$LOGO_URI])) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/template/header');
            $this->load->view('admin/template/left-sidebar');
            $this->load->view('admin/edit', $error);
            $this->load->view('admin/template/footer');
        } else {
            $data = array('upload_data' => $this->upload->data());

            $input = $this->input->post();
            $input_auth = array(
                Auth_model::$NAME => $input[Auth_model::$NAME],
                Auth_model::$EMAIL => $input[Auth_model::$EMAIL],);
            $input_admin = array(
                Seller_model::$UID => $this->session->userdata(Auth_model::$UID),
                Seller_model::$LOGO_URI => $this->upload->data('full_path'),
                Seller_model::$NAME => $input[Seller_model::$NAME],
                Seller_model::$PHONE_NUMBER => $input[Seller_model::$PHONE_NUMBER],
                Seller_model::$DESCRIPTION => $input[Seller_model::$DESCRIPTION], );
            $input_address = array(
                Seller_model::$UID => $this->session->userdata(Auth_model::$UID),
                Address_model::$STREET => $input[Address_model::$STREET],
                Address_model::$ZIPCODE => $input[Address_model::$ZIPCODE],
                Address_model::$CITY => $input[Address_model::$CITY],
                Address_model::$PROVINCE => $input[Address_model::$PROVINCE],
                Address_model::$ADDRESS => $input[Address_model::$ADDRESS],);

            if ($this->seller_model->data_exist($this->session->userdata('uid'))) {
                $this->seller_model->add($input_admin);
                $this->address_model->add($input_address);
            } else {
                $this->seller_model->update($input_admin, $this->session->userdata('uid'));
                $this->address_model->update($input_address, $this->session->userdata('uid'));
            }

            $this->auth_model->update($input_auth, $this->session->userdata('uid'));
            redirect('admin', 'refresh');
        }
    }

    /**
     * Method ini digunakan untuk menampilkan
     * interface untuk edit profil.
     */
    public function edit()
    {
        $seller = $this->seller_model->get($this->session->userdata(Auth_model::$UID));
        $address = $this->address_model->get($this->session->userdata(Auth_model::$UID));
        $auth = $this->auth_model->get($this->session->userdata(Auth_model::$UID));
        $data = array_merge($auth);

        if (is_array($seller)) $data = array_merge($data, $seller);
        if (is_array($address)) $data = array_merge($data, $address);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/edit', $data);
        $this->load->view('admin/template/footer');
    }

    /**
     * Method ini merupakan tampilkan yang pertama
     * kali di load setelah login.
     */
    public function index()
    {
        $seller = $this->seller_model->get($this->session->userdata(Auth_model::$UID));
        $address = $this->address_model->get($this->session->userdata(Auth_model::$UID));
        $auth = $this->auth_model->get($this->session->userdata(Auth_model::$UID));
        $data = array_merge($auth);

        if (is_array($seller)) $data = array_merge($data, $seller);
        if (is_array($address)) $data = array_merge($data, $address);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/footer');
    }
}