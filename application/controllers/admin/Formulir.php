<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_login();
        $this->load->model('Formulir_model');
        $this->load->model('Pertanyaan_model');
    }

    public function action_create_formulir_siswa() {
        if (!$this->input->post()) {
            redirect('home');
            return;
        }

        $data_formulir = [
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Insert new formulir record
        if (!$this->Formulir_model->insert($data_formulir)) {
            $this->session->set_flashdata('error', 'Gagal menyimpan formulir!');
            redirect('home');
            return;
        }

        $formulir_id = $this->db->insert_id();

        // Save answers
        $questions_groups = ['pesertadidik', 'ayahpeserta', 'ibupeserta', 'walipeserta', 'periodikpeserta'];

        foreach ($questions_groups as $group) {
            $questions = $this->Pertanyaan_model->get_questions_by_group($group);
            foreach ($questions as $question) {
                $answer_value = $this->input->post($question->id_pertanyaan);
                if ($answer_value !== null) {
                    $answer_data = [
                        'formulir_id' => $formulir_id,
                        'pertanyaan_id' => $question->id_pertanyaan,
                        'nilai_tersimpan' => $answer_value
                    ];
                    $this->db->insert('jawaban', $answer_data);
                }
            }
        }

        $this->session->set_flashdata('success', 'Formulir berhasil dikirim!');
        redirect('home/sukses');
    }

    private function check_login() {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/auth');
        }
    }

    public function index() {
        $data['formulir'] = $this->Formulir_model->get_all();
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/formulir/index', $data);
        $this->load->view('admin/footer');
    }

    public function view($id) {
        $data['formulir'] = $this->Formulir_model->get_by_id($id);
        
        if (!$data['formulir']) {
            show_404();
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/formulir/view', $data);
        $this->load->view('admin/footer');
    }

    public function edit($id) {
        $data['formulir'] = $this->Formulir_model->get_by_id($id);
        
        if (!$data['formulir']) {
            show_404();
        }

        if ($this->input->post()) {
            $update_data = array(
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
                'updated_at' => date('Y-m-d H:i:s')
            );

            if ($this->Formulir_model->update($id, $update_data)) {
                $this->session->set_flashdata('success', 'Data berhasil diupdate!');
                redirect('admin/formulir');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengupdate data!');
            }
        }
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/formulir/edit', $data);
        $this->load->view('admin/footer');
    }

    public function delete($id) {
        if ($this->Formulir_model->delete($id)) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data!');
        }
        redirect('admin/formulir');
    }
}