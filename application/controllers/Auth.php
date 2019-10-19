<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('auth_model');
    }

    /**
     * Method ini digunakan untuk proses user keluar dari sistem.
     * Proses ini akan menghancurkan session yang ada.
     */
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('user', 'refresh');
    }

    /**
     * Method ini digunakan untuk melakukan proses login
     * pada user admin atau user biasa.
     */
    public function login()
    {
        $input = $this->input->post();

        $this->auth_model->login($input);
    }

    /**
     * Methd ini digunakan untuk menampilkan tampilan
     * kepada user untuk melakukan proses login.
     */
	public function signIn()
	{
        $this->load->view('user/template/header');
        $this->load->view('user/auth/signIn');
        $this->load->view('user/template/footer');
    }

    /**
     * Method ini digunakan untuk melakukan pendaftaran
     * user admin atau biasa. Dimana UID dari user digenerate
     * dari fungsi @function create_uid
     */
    public function register()
    {
        $input = $this->input->post();
        $input[Auth_model::$UID] = self::create_uid($input);
        $input[Auth_model::$PASSWORD] = password_hash($input[Auth_model::$PASSWORD], PASSWORD_BCRYPT);

        if ($this->auth_model->register($input)) {
            $this->session->set_flashdata(Auth_model::$UID, $input[Auth_model::$UID]);
            $this->session->set_flashdata(Auth_model::$EMAIL, $input[Auth_model::$EMAIL]);
            redirect('user', 'refresh');
        } else {
            $this->load->view('user/template/header');
            $this->load->view('user/auth/signUp');
            $this->load->view('user/template/footer');
        }
    }

    /**
     * Methd ini digunakan untuk menampilkan tampilan
     * kepada user untuk melakukan proses register.
     */
    public function signUp()
	{
		$this->load->view('user/template/header');
        $this->load->view('user/auth/signUp');
        $this->load->view('user/template/footer');
    }

    /**
     * Method ini digunakan untuk membuat sebuah ID
     * yang unik berdasarkan tanggal pendaftaran dan role yang dipilih.
     *
     * @param $param array
     * @return String
     */
    private function create_uid($param) {
        $param = (isset($param[Auth_model::$UID])) ? 'SELLER' : 'BUYER';

        return strtoupper(substr($param, 0, 1))
            . date('y') . date('W')
            . date('d'). date('H'). date('i');
    }
}
