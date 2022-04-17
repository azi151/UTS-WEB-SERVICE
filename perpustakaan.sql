-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 07:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(25) NOT NULL,
  `nama_anggota` varchar(25) NOT NULL,
  `JK` varchar(2) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `JK`, `jurusan`, `alamat`) VALUES
(252022, 'Lia', 'P', 'SI', 'Solo'),
(262022, 'Pinta', 'P', 'Dakwah', 'Tempel'),
(272022, 'Zain', 'L', 'PAI', 'Sleman'),
(282022, 'Kahfa', 'L', 'Olahraga', 'Magelang');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `tahun_terbit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(151201, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka ', 2005),
(161201, 'Teluk Alaska', 'Eka Aryani', 'Cococnut Books', 2019),
(171201, 'Dear Nathan', 'Erisca Febriani', 'Best Media', 2016),
(181201, 'Assalamualaikum Calon Imam', 'Ima Madaniah', 'Coconut Books', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(25) NOT NULL,
  `nama_karyawan` varchar(25) NOT NULL,
  `JK` varchar(2) NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `JK`, `no_hp`, `alamat`) VALUES
(200422, 'Sindy', 'P', '045215479658', 'Sleman'),
(200522, 'Bayu', 'L', '045695742569', 'Tempel'),
(200622, 'Siska', 'P', '047841526538', 'Wonosari'),
(200722, 'Syifa', 'P', '046875658498', 'Bantul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282023;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181202;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200723;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
