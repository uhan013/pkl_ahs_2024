-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 01:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya`
--

CREATE TABLE `tbl_biaya` (
  `id_biaya` int(4) NOT NULL,
  `kendaraan` varchar(10) NOT NULL,
  `tarif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_biaya`, `kendaraan`, `tarif`) VALUES
(1, 'motor', '2000'),
(2, 'mobil', '5000'),
(3, 'truk', '10000'),
(4, 'bis', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id_kendaraan` int(4) NOT NULL,
  `jenis_kendaraan` varchar(10) DEFAULT NULL,
  `nomor_plat` varchar(10) DEFAULT NULL,
  `waktu_masuk` datetime DEFAULT NULL,
  `waktu_keluar` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `kode_parkir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id_kendaraan`, `jenis_kendaraan`, `nomor_plat`, `waktu_masuk`, `waktu_keluar`, `status`, `kode_parkir`) VALUES
(4, 'truk', 'AA 13', '2024-02-01 10:06:45', '2024-02-01 12:47:32', 'keluar', 'AA 132402011006'),
(9, 'motor', 'AA 13', '2024-02-01 08:26:51', '2024-02-01 12:36:29', 'parkir', 'AA 132402011126'),
(10, 'truk', 'AA 12', '2024-02-01 07:47:42', '2024-02-01 12:37:53', 'parkir', 'AA 122402011147'),
(11, 'motor', 'AA 13', '2024-02-01 06:47:50', '2024-02-01 12:22:34', 'parkir', 'AA 132402011147'),
(13, 'bis', 'AB 1234 YE', '2024-02-01 11:56:22', '2024-02-01 12:46:03', 'parkir', 'AB 1234 YE011156');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(4) NOT NULL,
  `kode_parkir_transaksi` varchar(10) DEFAULT NULL,
  `id_kendaraan_transaksi` int(4) DEFAULT NULL,
  `jam_parkir` int(4) NOT NULL,
  `biaya_parkir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  MODIFY `id_biaya` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `id_kendaraan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
