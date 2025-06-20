-- Database: tk_registration

CREATE DATABASE IF NOT EXISTS tk_registration;
USE tk_registration;

-- Table: admin
CREATE TABLE admin (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(255) NOT NULL,
    name varchar(100) NOT NULL,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY username (username)
);

-- Insert default admin
INSERT INTO admin (username, password, name) VALUES 
('admin', MD5('admin123'), 'Administrator');

-- Table: formulir_siswa
CREATE TABLE formulir_siswa (
    id int(11) NOT NULL AUTO_INCREMENT,
    nama_lengkap varchar(100) NOT NULL,
    jenis_kelamin enum('L','P') NOT NULL,
    nisn varchar(20) DEFAULT NULL,
    nik varchar(20) NOT NULL,
    kk varchar(20) NOT NULL,
    tempat_lahir varchar(50) NOT NULL,
    tanggal_lahir date NOT NULL,
    no_akte varchar(50) DEFAULT NULL,
    agama varchar(20) NOT NULL,
    alamat text NOT NULL,
    desa varchar(50) DEFAULT NULL,
    kecamatan varchar(50) DEFAULT NULL,
    kabupaten varchar(50) DEFAULT NULL,
    provinsi varchar(50) DEFAULT NULL,
    kode_pos varchar(10) DEFAULT NULL,
    tinggal_dengan varchar(20) DEFAULT NULL,
    transportasi varchar(20) DEFAULT NULL,
    anak_ke int(3) DEFAULT NULL,
    kip_pkh varchar(50) DEFAULT NULL,
    no_hp varchar(15) NOT NULL,
    nama_ayah varchar(100) NOT NULL,
    nik_ayah varchar(20) DEFAULT NULL,
    lahir_ayah date DEFAULT NULL,
    pendidikan_ayah varchar(20) DEFAULT NULL,
    pekerjaan_ayah varchar(50) DEFAULT NULL,
    penghasilan_ayah varchar(50) DEFAULT NULL,
    nama_ibu varchar(100) NOT NULL,
    nik_ibu varchar(20) DEFAULT NULL,
    lahir_ibu date DEFAULT NULL,
    pendidikan_ibu varchar(20) DEFAULT NULL,
    pekerjaan_ibu varchar(50) DEFAULT NULL,
    penghasilan_ibu varchar(50) DEFAULT NULL,
    nama_wali varchar(100) DEFAULT NULL,
    nik_wali varchar(20) DEFAULT NULL,
    lahir_wali date DEFAULT NULL,
    pendidikan_wali varchar(20) DEFAULT NULL,
    pekerjaan_wali varchar(50) DEFAULT NULL,
    penghasilan_wali varchar(50) DEFAULT NULL,
    tinggi_badan int(3) DEFAULT NULL,
    berat_badan int(3) DEFAULT NULL,
    lingkar_kepala int(3) DEFAULT NULL,
    jarak_ke_sekolah decimal(5,2) DEFAULT NULL,
    waktu_tempuh int(3) DEFAULT NULL,
    jumlah_saudara int(2) DEFAULT NULL,
    hobi varchar(100) DEFAULT NULL,
    cita_cita varchar(100) DEFAULT NULL,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

-- Table: murid (for accepted students)
CREATE TABLE murid (
    id int(11) NOT NULL AUTO_INCREMENT,
    formulir_id int(11) NOT NULL,
    nomor_induk varchar(20) NOT NULL,
    kelas varchar(10) DEFAULT NULL,
    tahun_ajaran varchar(10) NOT NULL,
    status enum('aktif','tidak_aktif') DEFAULT 'aktif',
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY nomor_induk (nomor_induk),
    FOREIGN KEY (formulir_id) REFERENCES formulir_siswa(id) ON DELETE CASCADE
);

-- Table: pertanyaan (for FAQ or questions management)
CREATE TABLE pertanyaan (
    id int(11) NOT NULL AUTO_INCREMENT,
    pertanyaan text NOT NULL,
    jawaban text NOT NULL,
    urutan int(3) DEFAULT 0,
    status enum('aktif','tidak_aktif') DEFAULT 'aktif',
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

-- Insert sample questions
INSERT INTO pertanyaan (pertanyaan, jawaban, urutan) VALUES 
('Berapa usia minimal untuk mendaftar TK?', 'Usia minimal untuk mendaftar TK adalah 4 tahun.', 1),
('Apa saja dokumen yang diperlukan untuk pendaftaran?', 'Dokumen yang diperlukan: Fotocopy Akte Kelahiran, Fotocopy Kartu Keluarga, Fotocopy KTP Orang Tua, dan Pas Foto 3x4.', 2),
('Kapan jadwal pendaftaran dibuka?', 'Pendaftaran dibuka dalam 2 gelombang: Gelombang 1 (Januari-Maret) dan Gelombang 2 (April-Juni).', 3);