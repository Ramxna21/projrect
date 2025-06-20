<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid_model extends CI_Model {

    private $table = 'murid';

    public function get_all() {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get($this->table)->result();
    }

    public function get_all_with_formulir() {
        $this->db->select('m.*, f.nama_lengkap, f.jenis_kelamin, f.tempat_lahir, f.tanggal_lahir');
        $this->db->from($this->table . ' m');
        $this->db->join('formulir_siswa f', 'm.formulir_id = f.id');
        $this->db->order_by('m.created_at', 'DESC');
        return $this->db->get()->result();
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }

    public function get_by_id_with_formulir($id) {
        $this->db->select('m.*, f.*');
        $this->db->from($this->table . ' m');
        $this->db->join('formulir_siswa f', 'm.formulir_id = f.id');
        $this->db->where('m.id', $id);
        return $this->db->get()->row();
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

    public function count_by_status($status) {
        $this->db->where('status', $status);
        return $this->db->count_all_results($this->table);
    }
}