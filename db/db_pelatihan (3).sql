-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 07:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelatihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` varchar(20) NOT NULL,
  `lokasi` text NOT NULL,
  `pemateri` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id_pelatihan`, `gambar`, `judul`, `deskripsi`, `tanggal`, `jam`, `lokasi`, `pemateri`) VALUES
(39, '65091ec271447_ComputerWorkshopPoster.webp', 'Pelatihan Graphic Design', '  Membantu Masyarakat untuk mengerti Design  ', '2023-10-28', '00:28', '      BPSDMP Kominfo Surabaya    ', 'Saya Sendiri'),
(41, '6509209dc4c9f_LogoMieGacoan.png', 'Pelatihan Dasar Komputer', 'Memperkenalkan bagian bagian komputer pada masyarakat umum', '2023-10-02', '08:27', ' Ngoro ', 'Gweh'),
(46, '651af90b7d3f8_poster-online-training-2020-desain-web-baru.jpg', 'Pelatihan Web Design', ' Mari Membuat web kita sendiri ', '2023-10-20', '00:30', ' Ngoro ', 'Kwak Jichang S.kom'),
(47, '65225ea4e5041_lU2OloYyXrv1vmlHEOJH0UuC3ndk65yTGmBLMCJ9.webp', 'Pelatihan Ampuh Mahir Nuklir', ' kmkmm ', '2023-11-03', '14:52', ' Gedangan ', 'Kwak Jichang'),
(48, '66baf3e4c2917_ekonomi.png', 'Pelatihan Web design', 'Belajar Bersama membangun website mandiri', '2024-08-27', '17:00', 'BPSDMP Kominfo Surabaya', 'Kwak Jichang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kelamin` enum('pria','wanita') NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `id_pelatihan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `foto`, `nama`, `nama_lengkap`, `hp`, `alamat`, `kelamin`, `email`, `password`, `role`, `id_pelatihan`) VALUES
(11, '65094e1ea381a_MV5BYmRmMDE1ZDMtYjFiMy00YTUzLTljNjUtNjFjMTQzZTIzMzZiXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_.jpg', 'admin', 'admin', '08214191112', '  Ngoro', 'wanita', 'andrecool@gmail.com', 'admin', 'admin', 46),
(16, '65135fb60614c_Screenshot 2023-09-27 054758.png', 'hasan', 'Hasan Cilung', '08214191112', 'Bangil, Pasuruan', 'pria', 'hasancclun@gmail.com', '12345678', '', 41),
(17, '651417ba55968_photo_6185868928178304622_y.jpg', 'riska', 'riska madya puspitasari', '08214191112', 'Gedangan', 'wanita', 'riska69@gmail.com', '123456', '', NULL),
(18, '651d16272d979_IMG_7041.jpg', 'bijer', 'Mohammad Indra Prayugah', '0822222222', 'Mojosari', 'pria', 'cakdiboy@gmail.com', '12345678', 'user', NULL),
(19, '6522600d4702d_WhatsApp Image 2023-10-04 at 08.34.48.jpg', 'anya', 'Anya Forger', '0514878787', 'Rungkut', 'wanita', 'anyaff@gmail.com', '147258369', 'user', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pelatihan` (`id_pelatihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_pelatihan`) REFERENCES `tb_pelatihan` (`id_pelatihan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
