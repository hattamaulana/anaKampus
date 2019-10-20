<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
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