<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['data'] = array();

        $this->load->view('user/template/header');
        $this->load->view('user/index', $data);
        $this->load->view('user/template/footer');
    }
}
