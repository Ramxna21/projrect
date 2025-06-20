<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index() {
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin/dashboard');
        }
        $this->load->view('admin/login');
    }

    public function login() {
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin/dashboard');
        }

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $admin = $this->Admin_model->login($username, $password);

            if ($admin) {
                $session_data = array(
                    'admin_id' => $admin->id,
                    'admin_username' => $admin->username,
                    'admin_name' => $admin->name,
                    'admin_logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah!');
                redirect('admin/auth');
            }
        } else {
            $this->load->view('admin/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata(array(
            'admin_id',
            'admin_username', 
            'admin_name',
            'admin_logged_in'
        ));
        $this->session->set_flashdata('success', 'Berhasil logout!');
        redirect('admin/auth');
    }
}