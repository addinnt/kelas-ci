<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
    
    public function index()
    {
        $data['title'] = 'Login';

        $this->load->view('template/header_login',$data);
        $this->load->view('login/index');
        $this->load->view('template/footer');
    }

    public function prosess_login()
    {
        $username = $this->input->post('uname1');
        $password = $this->input->post('pwd1');

        $cek_login = $this->login_model->login($username, $password);

        if ($cek_login) {
            foreach ($cek_login as $value) {
                $this->session->set_userdata('user', $value->username);
                $this->session->set_userdata('level', $value->level);

                if ($this->session->userdata('level') == 'admin') {
                    redirect('home');
                } elseif ($this->session->userdata('level') == 'user') {
                    redirect('user');
                }
            }
        } else {
            $data['title'] = 'Login';
            $data['pesan'] = 'Username atau Password Tidak Sesuai';

            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer');
        }
    }
}