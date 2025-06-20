<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_login();
        $this->load->model('Murid_model');
        $this->load->model('Formulir_model');
    }

    private function check_login() {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/auth');
        }
    }

    public function index() {
        $data['murid'] = $this->Murid_model->get_all_with_formulir();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/murid/index', $data);
        $this->load->view('admin/footer');
    }

    public function add() {
        $data['formulir_available'] = $this->Formulir_model->get_available_for_murid();

        if ($this->input->post()) {
            $insert_data = array(
                'formulir_id' => $this->input->post('formulir_id'),
                'nomor_induk' => $this->input->post('nomor_induk'),
                'kelas' => $this->input->post('kelas'),
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'status' => $this->input->post('status')
            );

            if ($this->Murid_model->insert($insert_data)) {
                $this->session->set_flashdata('success', 'Data murid berhasil ditambahkan!');
                redirect('admin/murid');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan data murid!');
            }
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/murid/add', $data);
        $this->load->view('admin/footer');
    }

    public function edit($id) {
        $data['murid'] = $this->Murid_model->get_by_id($id);
        $data['formulir_available'] = $this->Formulir_model->get_available_for_murid($data['murid']->formulir_id);
        
        if (!$data['murid']) {
            show_404();
        }

        if ($this->input->post()) {
            $update_data = array(
                'formulir_id' => $this->input->post('formulir_id'),
                'nomor_induk' => $this->input->post('nomor_induk'),
                'kelas' => $this->input->post('kelas'),
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'status' => $this->input->post('status')
            );

            if ($this->Murid_model->update($id, $update_data)) {
                $this->session->set_flashdata('success', 'Data murid berhasil diupdate!');
                redirect('admin/murid');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data murid!');
            }
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/murid/edit', $data);
        $this->load->view('admin/footer');
    }

    public function delete($id) {
        if ($this->Murid_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data murid berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data murid!');
        }
        redirect('admin/murid');
    }

    public function view($id) {
        $data['murid'] = $this->Murid_model->get_by_id_with_formulir($id);
        
        if (!$data['murid']) {
            show_404();
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/murid/view', $data);
        $this->load->view('admin/footer');
    }
}