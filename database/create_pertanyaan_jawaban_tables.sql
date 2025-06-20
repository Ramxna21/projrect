-- Table to store questions
CREATE TABLE IF NOT EXISTS pertanyaan (
    id_pertanyaan INT AUTO_INCREMENT PRIMARY KEY,
    isi_pertanyaan VARCHAR(255) NOT NULL,
    jenis_jawaban_pertanyaan VARCHAR(50) NOT NULL,
    group_pertanyaan VARCHAR(50) NOT NULL
);

-- Table to store answers
CREATE TABLE IF NOT EXISTS jawaban (
    id INT AUTO_INCREMENT PRIMARY KEY,
    formulir_id INT DEFAULT NULL,
    pertanyaan_id INT NOT NULL,
    nilai_tersimpan TEXT,
    FOREIGN KEY (pertanyaan_id) REFERENCES pertanyaan(id_pertanyaan)
);

-- Sample data for pertanyaan table
INSERT INTO pertanyaan (isi_pertanyaan, jenis_jawaban_pertanyaan, group_pertanyaan) VALUES
('Nama lengkap', 'text', 'pesertadidik'),
('Jenis kelamin', 'text', 'pesertadidik'),
('Nomor Induk Siswa Nasional (NISN)', 'text', 'pesertadidik'),
('Nomor Induk Kependudukan (NIK)', 'text', 'pesertadidik'),
('Nomor Kartu Keluarga (KK)', 'text', 'pesertadidik'),
('Tempat Lahir', 'text', 'pesertadidik'),
('Tanggal Lahir', 'date', 'pesertadidik'),
('No. Registrasi Akte Kelahiran', 'text', 'pesertadidik'),
('Agama', 'text', 'pesertadidik'),
('Alamat Rumah', 'text', 'pesertadidik'),
('Desa / Kelurahan', 'text', 'pesertadidik'),
('Kecamatan', 'text', 'pesertadidik'),
('Kabupaten', 'text', 'pesertadidik'),
('Provinsi', 'text', 'pesertadidik'),
('Kode Pos', 'text', 'pesertadidik'),
('Tempat Tinggal / Tinggal Dengan siapa', 'text', 'pesertadidik'),
('Mode Transportasi', 'text', 'pesertadidik'),
('Anak Keberapa', 'text', 'pesertadidik'),
('Apakah Punya KIP / PKH', 'text', 'pesertadidik'),
('No. Handphone', 'text', 'pesertadidik'),

('Nama Ayah', 'text', 'ayahpeserta'),
('Nomor Induk Kependudukan (NIK)', 'text', 'ayahpeserta'),
('Tahun Lahir', 'date', 'ayahpeserta'),
('Pendidikan', 'text', 'ayahpeserta'),
('Pekerjaan Ayah', 'text', 'ayahpeserta'),
('Penghasilan Ayah (tulis nominal)', 'text', 'ayahpeserta'),

('Nama Ibu', 'text', 'ibupeserta'),
('Nomor Induk Kependudukan (NIK)', 'text', 'ibupeserta'),
('Tahun Lahir', 'date', 'ibupeserta'),
('Pendidikan', 'text', 'ibupeserta'),
('Pekerjaan Ibu', 'text', 'ibupeserta'),
('Penghasilan Ibu (tulis nominal)', 'text', 'ibupeserta'),

('Nama', 'text', 'walipeserta'),
('Nomor Induk Kependudukan (NIK)', 'text', 'walipeserta'),
('Tahun Lahir', 'date', 'walipeserta'),
('Pendidikan', 'text', 'walipeserta'),
('Pekerjaan Wali', 'text', 'walipeserta'),
('Penghasilan Wali (tulis nominal)', 'text', 'walipeserta'),

('Tinggi Badan (cm)', 'text', 'periodikpeserta'),
('Berat Badan (kg)', 'text', 'periodikpeserta'),
('Lingkar Kepala (cm)', 'text', 'periodikpeserta'),
('Jarak Rumah Ke Sekolah (km)', 'text', 'periodikpeserta'),
('Waktu Tempuh Ke Sekolah', 'text', 'periodikpeserta'),
('Jumlah Saudara Kandung (lihat di: KK)', 'text', 'periodikpeserta'),
('Hobi', 'text', 'periodikpeserta'),
('Cita-cita', 'text', 'periodikpeserta');
