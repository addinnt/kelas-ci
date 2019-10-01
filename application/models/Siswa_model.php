<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword');

        $this->db->like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('nim', $keyword);
        return $this->db->get('siswa')->result_array();
    }

    public function getallsiswa()
    {
            return $this->db->get('siswa')->result_array();
    }
    public function tambahDataSw(){
        $data= array(
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "alamat" => $this->input->post('alamat', true)
        );
        $this->db->insert('siswa', $data);
        
        redirect('siswa','refresh');   
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }

    public function update() 
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('siswa', array('id' => $id));
    }
}
/* End of file Controllername.php */
?>
