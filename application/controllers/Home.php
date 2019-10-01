<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('level') != 'admin') {
            redirect('login', 'refresh');
        }
    }

    public function index($frname='',$lsname='')
    {
        $data['title']='Home';
        $data['frname']=$frname;
        $data['lsname']=$lsname;
        
        $this->load->view('template/header',$data);
        $this->load->view('Home/index');
        $this->load->view('template/footer');
        
    }

    public function belajar()
    {
        $data['title']='Home';
        $this->load->view('template/header');
        //echo"selamat datang di halaman home";
        $this->load->view('belajar/index');
        $this->load->view('template/footer');
        
    }

    public function belajar2()
	{
        $data['title']='Home';
        $this->load->view('template/header');
        //echo"selamat datang di halaman home";
        $this->load->view('belajar2/index');
        $this->load->view('template/footer');
        
    }
}
/* End of file Home.php */
?>
