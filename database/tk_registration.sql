-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2025 at 11:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `created_at`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', '2025-06-20 10:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_siswa`
--

CREATE TABLE `formulir_siswa` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_akte` varchar(50) DEFAULT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `tinggal_dengan` varchar(20) DEFAULT NULL,
  `transportasi` varchar(20) DEFAULT NULL,
  `anak_ke` int DEFAULT NULL,
  `kip_pkh` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(20) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `penghasilan_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(20) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `penghasilan_ibu` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(20) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `penghasilan_wali` varchar(50) DEFAULT NULL,
  `tinggi_badan` int DEFAULT NULL,
  `berat_badan` int DEFAULT NULL,
  `lingkar_kepala` int DEFAULT NULL,
  `jarak_ke_sekolah` decimal(5,2) DEFAULT NULL,
  `waktu_tempuh` int DEFAULT NULL,
  `jumlah_saudara` int DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `cita_cita` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int NOT NULL,
  `formulir_id` int DEFAULT NULL,
  `pertanyaan_id` int NOT NULL,
  `nilai_tersimpan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int NOT NULL,
  `formulir_id` int NOT NULL,
  `nomor_induk` varchar(20) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `status` enum('aktif','tidak_aktif') DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int NOT NULL,
  `isi_pertanyaan` varchar(255) NOT NULL,
  `jenis_jawaban_pertanyaan` varchar(50) NOT NULL,
  `group_pertanyaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `isi_pertanyaan`, `jenis_jawaban_pertanyaan`, `group_pertanyaan`) VALUES
(1, 'Nama lengkap', 'text', 'pesertadidik'),
(2, 'Jenis kelamin', 'text', 'pesertadidik'),
(3, 'Nomor Induk Siswa Nasional (NISN)', 'text', 'pesertadidik'),
(4, 'Nomor Induk Kependudukan (NIK)', 'text', 'pesertadidik'),
(5, 'Nomor Kartu Keluarga (KK)', 'text', 'pesertadidik'),
(6, 'Tempat Lahir', 'text', 'pesertadidik'),
(7, 'Tanggal Lahir', 'date', 'pesertadidik'),
(8, 'No. Registrasi Akte Kelahiran', 'text', 'pesertadidik'),
(9, 'Agama', 'text', 'pesertadidik'),
(10, 'Alamat Rumah', 'text', 'pesertadidik'),
(11, 'Desa / Kelurahan', 'text', 'pesertadidik'),
(12, 'Kecamatan', 'text', 'pesertadidik'),
(13, 'Kabupaten', 'text', 'pesertadidik'),
(14, 'Provinsi', 'text', 'pesertadidik'),
(15, 'Kode Pos', 'text', 'pesertadidik'),
(16, 'Tempat Tinggal / Tinggal Dengan siapa', 'text', 'pesertadidik'),
(17, 'Mode Transportasi', 'text', 'pesertadidik'),
(18, 'Anak Keberapa', 'text', 'pesertadidik'),
(19, 'Apakah Punya KIP / PKH', 'text', 'pesertadidik'),
(20, 'No. Handphone', 'text', 'pesertadidik'),
(21, 'Nama Ayah', 'text', 'ayahpeserta'),
(22, 'Nomor Induk Kependudukan (NIK)', 'text', 'ayahpeserta'),
(23, 'Tahun Lahir', 'date', 'ayahpeserta'),
(24, 'Pendidikan', 'text', 'ayahpeserta'),
(25, 'Pekerjaan Ayah', 'text', 'ayahpeserta'),
(26, 'Penghasilan Ayah (tulis nominal)', 'text', 'ayahpeserta'),
(27, 'Nama Ibu', 'text', 'ibupeserta'),
(28, 'Nomor Induk Kependudukan (NIK)', 'text', 'ibupeserta'),
(29, 'Tahun Lahir', 'date', 'ibupeserta'),
(30, 'Pendidikan', 'text', 'ibupeserta'),
(31, 'Pekerjaan Ibu', 'text', 'ibupeserta'),
(32, 'Penghasilan Ibu (tulis nominal)', 'text', 'ibupeserta'),
(33, 'Nama', 'text', 'walipeserta'),
(34, 'Nomor Induk Kependudukan (NIK)', 'text', 'walipeserta'),
(35, 'Tahun Lahir', 'date', 'walipeserta'),
(36, 'Pendidikan', 'text', 'walipeserta'),
(37, 'Pekerjaan Wali', 'text', 'walipeserta'),
(38, 'Penghasilan Wali (tulis nominal)', 'text', 'walipeserta'),
(39, 'Tinggi Badan (cm)', 'text', 'periodikpeserta'),
(40, 'Berat Badan (kg)', 'text', 'periodikpeserta'),
(41, 'Lingkar Kepala (cm)', 'text', 'periodikpeserta'),
(42, 'Jarak Rumah Ke Sekolah (km)', 'text', 'periodikpeserta'),
(43, 'Waktu Tempuh Ke Sekolah', 'text', 'periodikpeserta'),
(44, 'Jumlah Saudara Kandung (lihat di: KK)', 'text', 'periodikpeserta'),
(45, 'Hobi', 'text', 'periodikpeserta'),
(46, 'Cita-cita', 'text', 'periodikpeserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `formulir_siswa`
--
ALTER TABLE `formulir_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_induk` (`nomor_induk`),
  ADD KEY `formulir_id` (`formulir_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir_siswa`
--
ALTER TABLE `formulir_siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id_pertanyaan`);

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`formulir_id`) REFERENCES `formulir_siswa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
