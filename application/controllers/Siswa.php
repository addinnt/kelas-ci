<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');

        if ($this->session->userdata('level') != 'admin') {
            redirect('login', 'refresh');
        }
    }


    public function index()
    {
        $data['title'] = 'List siswa';
        $data['siswa'] = $this->siswa_model->getallsiswa();

        if ($this->input->post('keyword')) {
            $result = $this->siswa_model->cariDataSiswa();

            $data['siswa'] = $result;
        }

        $this->load->view('template/header',$data);
        $this->load->view('siswa/index',$data);
        $this->load->view('template/footer');

    }
    public function tambah(){
        $data['title']="FORM MENAMBAH DATA SISWA";
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('nim','Nim','required|numeric');
        $this->form_validation->set_rules('alamat','alamat','required');
        if($this->form_validation->run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('siswa/tambah',$data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('flash-data-siswa', 'Di tambahkan');
            $this->siswa_model->tambahDataSw();
            redirect('siswa','refresh');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['siswa'] = $this->siswa_model->getMahasiswaById($id);

        $this->load->view('template/header',$data);
        $this->load->view('siswa/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        //$this->load->library('form_validation');
        $data['title']="FORM EDIT DATA MAHASISWA";
        $data['siswa'] = $this->siswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('nim','Nim','required|numeric');
        $this->form_validation->set_rules('alamat','Alamat','required');

        if($this->form_validation->run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('siswa/edit',$data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('flash-data-siswa', 'Di Edit');
            $this->siswa_model->update();
            redirect('siswa','refresh');  
        }
    }

    public function hapus($id)
    {
        $this->siswa_model->hapus($id);
        $this->session->set_flashdata('flash_data', 'Di hapus');
        redirect('siswa', 'refresh');
    }
}

/* End of file Controllername.php */
?>