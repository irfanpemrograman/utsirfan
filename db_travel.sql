-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 06:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `gender` int(1) NOT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `gender`, `hp`, `email`, `username`, `password`, `level`) VALUES
(1, 'admin saja', 1, '0987776', 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_pulang` date DEFAULT NULL,
  `batas_pendaftaran` date DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `fasilitas` text,
  `persyaratan` text,
  `kapal` varchar(100) DEFAULT NULL,
  `penginapan` varchar(100) DEFAULT NULL,
  `durasi` varchar(50) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `lainnya` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `tgl_berangkat`, `tgl_pulang`, `batas_pendaftaran`, `kuota`, `fasilitas`, `persyaratan`, `kapal`, `penginapan`, `durasi`, `biaya`, `lainnya`) VALUES
(1, 'Paket Karimun', '2020-04-09', '2020-04-30', '2020-04-08', 200, 'Tidak ada fasilitas', 'foto kopi saja', 'Kapal Muria', 'Jaya Home Stay', '5 hari', 500000, 'Tidak ada lagi yang perlu ditulisakan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_wisatawan` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisatawan`
--

CREATE TABLE `wisatawan` (
  `id_wisatawan` int(11) NOT NULL,
  `nama_wisatawan` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL,
  `ttl` date DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisatawan`
--

INSERT INTO `wisatawan` (`id_wisatawan`, `nama_wisatawan`, `nik`, `gender`, `ttl`, `hp`, `email`, `alamat`, `username`, `password`) VALUES
(1, 'Uchiha Itachi', '08469286781', 1, '2018-10-09', '97346822', 'uchiha@gmail.com', 'wanusobo', 'uchiha', 'uchiha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `wisatawan`
--
ALTER TABLE `wisatawan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisatawan`
--
ALTER TABLE `wisatawan`
  MODIFY `id_wisatawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
