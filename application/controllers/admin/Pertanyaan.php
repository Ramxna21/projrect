<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_login();
        $this->load->model('Pertanyaan_model');
    }

    private function check_login() {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/auth');
        }
    }

    public function index() {
        $data['pertanyaan'] = $this->Pertanyaan_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pertanyaan/index', $data);
        $this->load->view('admin/footer');
    }

    public function add() {
        if ($this->input->post()) {
            $insert_data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban'),
                'urutan' => $this->input->post('urutan'),
                'status' => $this->input->post('status')
            );

            if ($this->Pertanyaan_model->insert($insert_data)) {
                $this->session->set_flashdata('success', 'Pertanyaan berhasil ditambahkan!');
                redirect('admin/pertanyaan');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan pertanyaan!');
            }
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pertanyaan/add');
        $this->load->view('admin/footer');
    }

    public function edit($id) {
        $data['pertanyaan'] = $this->Pertanyaan_model->get_by_id($id);
        
        if (!$data['pertanyaan']) {
            show_404();
        }

        if ($this->input->post()) {
            $update_data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban'),
                'urutan' => $this->input->post('urutan'),
                'status' => $this->input->post('status')
            );

            if ($this->Pertanyaan_model->update($id, $update_data)) {
                $this->session->set_flashdata('success', 'Pertanyaan berhasil diupdate!');
                redirect('admin/pertanyaan');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate pertanyaan!');
            }
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pertanyaan/edit', $data);
        $this->load->view('admin/footer');
    }

    public function delete($id) {
        if ($this->Pertanyaan_model->delete($id)) {
            $this->session->set_flashdata('success', 'Pertanyaan berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus pertanyaan!');
        }
        redirect('admin/pertanyaan');
    }
}