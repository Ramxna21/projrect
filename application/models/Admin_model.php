<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('admin');
        
        if ($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get('admin')->row();
    }
}