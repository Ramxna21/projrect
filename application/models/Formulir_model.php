<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir_model extends CI_Model {

    private $table = 'formulir_siswa';

    public function get_all() {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function count_all() {
        return $this->db->count_all($this->table);
    }

    public function count_today() {
        $this->db->where('DATE(created_at)', date('Y-m-d'));
        return $this->db->count_all_results($this->table);
    }

    public function count_this_month() {
        $this->db->where('MONTH(created_at)', date('m'));
        $this->db->where('YEAR(created_at)', date('Y'));
        return $this->db->count_all_results($this->table);
    }

    public function get_available_for_murid($exclude_formulir_id = null) {
        $this->db->select('f.*');
        $this->db->from($this->table . ' f');
        $this->db->join('murid m', 'f.id = m.formulir_id', 'left');
        $this->db->where('m.formulir_id IS NULL');
        
        if ($exclude_formulir_id) {
            $this->db->or_where('f.id', $exclude_formulir_id);
        }
        
        $this->db->order_by('f.created_at', 'DESC');
        return $this->db->get()->result();
    }
}