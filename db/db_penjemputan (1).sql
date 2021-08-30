-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 12:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjemputan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datasiswa`
--

CREATE TABLE `tb_datasiswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datasiswa`
--

INSERT INTO `tb_datasiswa` (`id`, `nis`, `nama_siswa`, `kelas`, `tgl_lahir`, `jk`, `alamat`) VALUES
(7, '1920.10.074', 'Abil Aliansyah', '5', '1998-10-26', 'Laki-laki', 'lumbung ciamis'),
(8, '1920.10.075', 'Aditya Pratama', '1', '2012-08-01', 'Laki-laki', 'Desa kawali'),
(9, '1920.10.083', 'Cintiya Ranti Anggeraeni', '1', '2019-08-02', 'perempuan', 'Desa kawali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datawalisiswa`
--

CREATE TABLE `tb_datawalisiswa` (
  `id` int(11) NOT NULL,
  `nama_walisiswa` varchar(255) NOT NULL,
  `hubungan_wali` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `Imei` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datawalisiswa`
--

INSERT INTO `tb_datawalisiswa` (`id`, `nama_walisiswa`, `hubungan_wali`, `jk`, `Imei`) VALUES
(4, 'Aan Mulyana', 'orangtua', 'Laki-laki', '5678910'),
(5, 'ella maella', 'orangtua', 'perempuan', '8677908690');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hubunganwali`
--

CREATE TABLE `tb_hubunganwali` (
  `id` int(11) NOT NULL,
  `hubungan_wali` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hubunganwali`
--

INSERT INTO `tb_hubunganwali` (`id`, `hubungan_wali`) VALUES
(1, 'orangtua'),
(2, 'tetangga'),
(3, 'kaka');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjemputan`
--

CREATE TABLE `tb_penjemputan` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nama_walisiswa` varchar(255) NOT NULL,
  `jamtgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjemputan`
--

INSERT INTO `tb_penjemputan` (`id`, `kode`, `nama_siswa`, `nama_walisiswa`, `jamtgl`) VALUES
(3, 'Penjemputan_Senin', 'Abil Aliansyah', 'Aan Mulyana', '2021-08-03 00:00:00'),
(4, 'penjemputan_Selasa', 'Aditya Pratama', 'ella maella', '2021-08-05 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qr`
--

CREATE TABLE `tb_qr` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_qr`
--

INSERT INTO `tb_qr` (`id`, `kode`) VALUES
(1, 'penjemputan_Selasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_datawalisiswa`
--
ALTER TABLE `tb_datawalisiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hubunganwali`
--
ALTER TABLE `tb_hubunganwali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penjemputan`
--
ALTER TABLE `tb_penjemputan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_qr`
--
ALTER TABLE `tb_qr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_datawalisiswa`
--
ALTER TABLE `tb_datawalisiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_hubunganwali`
--
ALTER TABLE `tb_hubunganwali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penjemputan`
--
ALTER TABLE `tb_penjemputan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
