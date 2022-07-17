<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('view_login');
    }


    function aksi()
    {
        $admin_login = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() != false) {
            $data = $this->m_login->login_admin($admin_login['email'], $admin_login['password']);
            if ($data) {
                $this->load->library('session');
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('nama', $data['nama']);
                redirect('C_ruangan');
            } else {
                $data['notif'] = 'Login Gagal, Password/Username Salah';
                $this->load->view('view_login', $data);
            }
        } else {
            $data['notif'] = validation_errors();
            $this->load->view('view_login', $data);
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}