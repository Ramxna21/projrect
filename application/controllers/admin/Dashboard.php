<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_login();
        $this->load->model('Formulir_model');
    }

    private function check_login() {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/auth');
        }
    }

    public function index() {
        $data['total_formulir'] = $this->Formulir_model->count_all();
        $data['formulir_hari_ini'] = $this->Formulir_model->count_today();
        $data['formulir_bulan_ini'] = $this->Formulir_model->count_this_month();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }
}