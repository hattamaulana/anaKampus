<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->has_userdata('uid') && substr($this->session->userdata('uid'), 0, 1) != 'S') {
            redirect('auth/signIn', 'refresh');
        }
    }

    /**
     * Method ini merupakan tampilkan yang pertama
     * kali di load setelah login.
     */
    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/left-sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }
}