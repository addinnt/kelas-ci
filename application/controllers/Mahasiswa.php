<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller 
{
    public function __construct()
    {
        //digunakan untuk menjalankan fungsi construct pada class parent::__controller
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');

        if ($this->session->userdata('level') != 'admin') {
            redirect('login', 'refresh');
        }
    }

    public function user()
    {
        $data['title'] = 'Halaman User';

        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/user');
        $this->load->view('template/footer');
    }

    public function index()
    {
        $this->load->model('mahasiswa_model');
        //$this->load->database();
        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getAllMahasiswa();

        if ($this->input->post('keyword')) {
            $result = $this->mahasiswa_model->cariDataMahasiswa();

            $data['mahasiswa'] = $result;
        }

        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        //$this->load->library('form_validation');
        $data['title']="FORM MENAMBAH DATA MAHASISWA";

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('nim','Nim','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/tambah',$data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('flash-data', 'Di Tambahkan');
            $this->mahasiswa_model->tambahDataMhs();
            redirect('mahasiswa','refresh');  
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);

        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        //$this->load->library('form_validation');
        $data['title']="FORM EDIT DATA MAHASISWA";
        $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('nim','Nim','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/edit',$data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('flash-data', 'Di Edit');
            $this->mahasiswa_model->update();
            redirect('mahasiswa','refresh'); 
        }
    }

    public function hapus($id)
    {
        $this->mahasiswa_model->hapusdatamhs($id);
        $this->session->set_flashdata('flash_data', 'Di hapus');
        redirect('mahasiswa', 'refresh');
    }
}

/* End of file Home.php */
?>