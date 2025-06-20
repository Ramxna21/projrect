<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Formulir_model');
        $this->load->model('Pertanyaan_model');
    }

    public function index() {
        // For new form, formulir_id is null
        $formulir_id = null;

        $data = [
            'pesertadidik' => $this->Pertanyaan_model->get_questions_with_answers('pesertadidik', $formulir_id),
            'ayahpeserta' => $this->Pertanyaan_model->get_questions_with_answers('ayahpeserta', $formulir_id),
            'ibupeserta' => $this->Pertanyaan_model->get_questions_with_answers('ibupeserta', $formulir_id),
            'walipeserta' => $this->Pertanyaan_model->get_questions_with_answers('walipeserta', $formulir_id),
            'periodikpeserta' => $this->Pertanyaan_model->get_questions_with_answers('periodikpeserta', $formulir_id)
        ];
        $this->load->view('public/header');
        $this->load->view('public/home', $data);
        $this->load->view('public/footer');
    }

    public function daftar() {
        $this->load->view('public/header');
        $this->load->view('public/formulir_pendaftaran');
        $this->load->view('public/footer');
    }

    public function submit_formulir() {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('kk', 'No. KK', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('public/header');
            $this->load->view('public/formulir_pendaftaran');
            $this->load->view('public/footer');
        } else {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'nisn' => $this->input->post('nisn'),
                'nik' => $this->input->post('nik'),
                'kk' => $this->input->post('kk'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'no_akte' => $this->input->post('no_akte'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'desa' => $this->input->post('desa'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten' => $this->input->post('kabupaten'),
                'provinsi' => $this->input->post('provinsi'),
                'kode_pos' => $this->input->post('kode_pos'),
                'tinggal_dengan' => $this->input->post('tinggal_dengan'),
                'transportasi' => $this->input->post('transportasi'),
                'anak_ke' => $this->input->post('anak_ke'),
                'kip_pkh' => $this->input->post('kip_pkh'),
                'no_hp' => $this->input->post('no_hp'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'lahir_ayah' => $this->input->post('lahir_ayah'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'lahir_ibu' => $this->input->post('lahir_ibu'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
                'nama_wali' => $this->input->post('nama_wali'),
                'nik_wali' => $this->input->post('nik_wali'),
                'lahir_wali' => $this->input->post('lahir_wali'),
                'pendidikan_wali' => $this->input->post('pendidikan_wali'),
                'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
                'penghasilan_wali' => $this->input->post('penghasilan_wali'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'berat_badan' => $this->input->post('berat_badan'),
                'lingkar_kepala' => $this->input->post('lingkar_kepala'),
                'jarak_ke_sekolah' => $this->input->post('jarak_ke_sekolah'),
                'waktu_tempuh' => $this->input->post('waktu_tempuh'),
                'jumlah_saudara' => $this->input->post('jumlah_saudara'),
                'hobi' => $this->input->post('hobi'),
                'cita_cita' => $this->input->post('cita_cita'),
                'created_at' => date('Y-m-d H:i:s')
            );

            if ($this->Formulir_model->insert($data)) {
                $this->session->set_flashdata('success', 'Formulir berhasil dikirim!');
                redirect('home/sukses');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengirim formulir!');
                redirect('home/daftar');
            }
        }
    }

    public function sukses() {
        $this->load->view('public/header');
        $this->load->view('public/sukses');
        $this->load->view('public/footer');
    }
}