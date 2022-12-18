-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(20) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `j_id` int(11) NOT NULL,
  `j_lokasi_ujian` varchar(100) NOT NULL,
  `j_tanggal_ujian` date NOT NULL,
  `j_waktu_ujian` time NOT NULL,
  `j_kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_nik` varchar(100) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_nama_lengkap` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_no_kk` varchar(20) NOT NULL,
  `u_no_telp` varchar(20) NOT NULL,
  `u_tempat_lahir` varchar(100) NOT NULL,
  `u_tanggal_lahir` date NOT NULL,
  `u_alamat` varchar(100) DEFAULT NULL,
  `u_jenis_kelamin` char(1) DEFAULT NULL,
  `u_kualifikasi_pendidikan` varchar(100) DEFAULT NULL,
  `u_instansi` varchar(100) DEFAULT NULL,
  `u_departemen` varchar(100) DEFAULT NULL,
  `u_formasi_jabatan` varchar(100) DEFAULT NULL,
  `u_pas_foto` mediumblob DEFAULT NULL,
  `u_foto_ktp` mediumblob DEFAULT NULL,
  `u_foto_kk` mediumblob DEFAULT NULL,
  `u_ijazah` mediumblob DEFAULT NULL,
  `u_transkrip_nilai` mediumblob DEFAULT NULL,
  `u_kartu_pendaftaran` mediumblob DEFAULT NULL,
  `u_status_pendaftaran` varchar(20) DEFAULT NULL,
  `u_status_ujian` varchar(20) DEFAULT NULL,
  `u_nomor_registrasi` int(11) DEFAULT NULL,
  `jadwal_ujian_j_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `user_FK_1` (`jadwal_ujian_j_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_FK_1` FOREIGN KEY (`jadwal_ujian_j_id`) REFERENCES `jadwal_ujian` (`j_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;