<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model 
{
    public function login($username, $password)
    {
        # die(var_dump($username). " ". var_dump($password));
        $this->db->select('username,password,level');
        $this->db->from('user');

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
} /* End of file Controllername.php */ ?>
