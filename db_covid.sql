-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 03:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(10) NOT NULL,
  `dokter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `dokter`) VALUES
(1, 'Dokter Umum'),
(2, 'Dokter Spesialis');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(20) NOT NULL,
  `hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `hasil`) VALUES
(1, 'Positif Covid 19'),
(2, 'Negatif Covid 19');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(30) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `username`, `password`, `telp`) VALUES
(1, 'Hanif', 'hanif', 'hanif', '082560347420'),
(1243, 'aku', 'admin', 'admin', '09867'),
(444, 'bbb', 'bbb', 'bbb', '000'),
(161003, 'Mozarella', 'ojja', 'ojja', '085230769000'),
(10016100, 'Mojarella', 'moja', 'moja', '000876423'),
(161003, 'Memoreza', 'moza', 'moza', '0852307898');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `id_hasil` int(20) NOT NULL,
  `tgl_tes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`nama`, `alamat`, `usia`, `id_hasil`, `tgl_tes`) VALUES
('Satmika Antargata Ozora', 'Banyuwangi', '35 Tahun', 1, '23-04-2020 '),
('Hanung Bramantyo', 'Jl. Pegunungan Himalayan', '40 Tahun', 1, '23-04-2020 '),
('Mahesa', 'Jl. Kaliagung 12', '17 Tahun', 2, '23-04-2020 '),
('Naisya Najmi', 'Kecamatan Bebeksari', '55 Tahun', 2, '23-04-2020 '),
('Memoreza', 'Jl. Banyumas 16', '16 Tahun', 2, '23-04-2020 ');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id_periksa` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `id_dokter` int(10) NOT NULL,
  `catatan` text NOT NULL,
  `tgl_periksa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id_periksa`, `nama`, `usia`, `id_dokter`, `catatan`, `tgl_periksa`) VALUES
('010203', 'Hanindya', '35 Tahun', 1, 'Perut maag', '23-04-2020 '),
('020304', 'Mahesa', '17 Tahun', 2, 'Sakit Flu', '23-04-2020 '),
('10016100', 'Mojarella', '16 Tahun', 2, 'Sakit flu dan mual', '23-04-2020 '),
('161003', 'Memoreza', '16 Tahun', 1, 'Sakit Demam ', '23-04-2020 '),
('9078667', 'Jahila', '35 Tahun', 1, 'Cek gula darah', '23-04-2020 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD KEY `id_hasil` (`id_hasil`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `pelayanan_ibfk_1` FOREIGN KEY (`id_hasil`) REFERENCES `hasil` (`id_hasil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
