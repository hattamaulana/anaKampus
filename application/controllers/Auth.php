<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
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
        // Form Validation
        $this->form_validation->set_rules(
            'email', 'Email', 'required|valid_email|callback_email_exist', array(
                'required' => 'Mohon Maaf Form harus diisi.',
                'valid_email' => 'Mohon Maaf Email harus valid.',)
        );
        $this->form_validation->set_rules(
            'password', 'Password', 'required|min_length[8]', array(
                'required' => 'Mohon Maaf Form harus diisi.',
                'min_length' => 'Minimal Karakter harus sebanyak 8 Karakter.', )
        );

        if ($this->form_validation->run() === false) {
            $this->load->view('user/template/header');
            $this->load->view('user/auth/signIn');
            $this->load->view('user/template/footer');
        } else {
            $input = $this->input->post();
            $result = $this->auth_model->login($input);

            if (password_verify($input[Auth_model::$PASSWORD], $result[0]->password)) {
                $this->session->set_userdata(Auth_model::$UID, $result[0]->uid);
                $this->session->set_userdata(Auth_model::$EMAIL, $result[0]->email);

                if (substr($result[0]->uid, 0, 1) == 'S') {
                    redirect('admin', 'refresh');
                } else {
                    redirect('user', 'refresh');
                }
            } else {
                $this->session->set_flashdata('login', 'Password Salah, Silahkan ulangi lagi.');
                redirect('auth/signIn', 'refresh');
            }
        }
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
        // Form Validation
        $this->form_validation->set_rules(
            Auth_model::$NAME, 'Nama', 'required', array(
                'required' => 'Mohon Maaf Form harus diisi.'));
        $this->form_validation->set_rules(
            Auth_model::$EMAIL, 'Email', 'required|valid_email|callback_email_found', array(
            'required' => 'Mohon Maaf Form harus diisi.',
            'valid_email' => 'Mohon Maaf Email harus valid.',));
        $this->form_validation->set_rules(
            Auth_model::$PASSWORD, 'Password', 'required|min_length[8]', array(
                'required' => 'Mohon Maaf Form harus diisi.',
                'min_length' => 'Minimal Karakter harus sebanyak 8 Karakter.', ));

        if ($this->form_validation->run() === false) {
            $this->load->view('user/template/header');
            $this->load->view('user/auth/signUp');
            $this->load->view('user/template/footer');
        } else {
            $input = $this->input->post();
            $input[Auth_model::$UID] = self::create_uid($input);
            $input[Auth_model::$PASSWORD] = password_hash($input[Auth_model::$PASSWORD], PASSWORD_BCRYPT);

            if ($this->auth_model->register($input)) {
                $this->session->set_userdata(Auth_model::$UID, $input[Auth_model::$UID]);
                $this->session->set_userdata(Auth_model::$EMAIL, $input[Auth_model::$EMAIL]);

                if (substr($input[Auth_model::$UID] , 0, 1) == 'S') {
                    redirect('admin', 'refresh');
                } else {
                    redirect('user', 'refresh');
                }
            }
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

    public function email_exist($email)
    {
        $data = $this->auth_model->email_exist($email);

        if (count($data) === 0){
            $this->form_validation->set_message('email_exist', 'Email Belum Terdaftar');
            return false;
        } else {
            return true;
        }
    }

    public function email_found($email)
    {
        $data = $this->auth_model->email_exist($email);

        if (count($data) > 0){
            $this->form_validation->set_message('email_found', 'Email sudah pernah didaftarkan.');
            return false;
        } else {
            return true;
        }
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
