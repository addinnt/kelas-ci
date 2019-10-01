<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 'user') {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman User';

        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/user');
        $this->load->view('template/footer');
    }
}