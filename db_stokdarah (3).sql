-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 06:38 PM
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
-- Database: `db_stokdarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama_admin`, `email`, `password`) VALUES
(1, 'Peri_Bunga', 'peribunga@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'Peri_Darah', 'peridarah@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c'),
(3, 'Peri_Awan', 'periawan@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(6, 'Peri_Hewan', 'peri@gmail.com', '1679091c5a880faf6fb5e6087eb1b2dc');

-- --------------------------------------------------------

--
-- Table structure for table `data_darah_keluar`
--

CREATE TABLE `data_darah_keluar` (
  `id_keluar` int(10) NOT NULL,
  `id_stok` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_darah_keluar`
--

INSERT INTO `data_darah_keluar` (`id_keluar`, `id_stok`, `tanggal`, `penerima`, `qty`) VALUES
(42, 38, '2023-06-06', 'PMI ', 150),
(47, 38, '2024-07-03', 'PMI pemalang', 300);

-- --------------------------------------------------------

--
-- Table structure for table `data_darah_masuk`
--

CREATE TABLE `data_darah_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_stok` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `pendonor` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_darah_masuk`
--

INSERT INTO `data_darah_masuk` (`id_masuk`, `id_stok`, `tanggal`, `pendonor`, `qty`) VALUES
(32, 35, '2023-06-12', 'PMI', 1000),
(35, 38, '2023-06-20', 'PMI', 10000),
(36, 38, '2023-06-07', 'PMI', 200);

-- --------------------------------------------------------

--
-- Table structure for table `detail_stok_darah`
--

CREATE TABLE `detail_stok_darah` (
  `id_detailstok` int(11) NOT NULL,
  `id_stok` int(11) NOT NULL,
  `kadaluarsa` varchar(50) NOT NULL,
  `suhu` varchar(50) NOT NULL,
  `keterangan_stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_stok_darah`
--

INSERT INTO `detail_stok_darah` (`id_detailstok`, `id_stok`, `kadaluarsa`, `suhu`, `keterangan_stok`) VALUES
(23, 35, '35 hari', '30 °C', 'Plasma yang berasal dari orang yang sudah sembuh (konvalesen) dari suatu penyakit');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_detail_darah`
--

CREATE TABLE `informasi_detail_darah` (
  `id_darah` int(10) NOT NULL,
  `id_stok` int(11) NOT NULL,
  `goldar` varchar(50) NOT NULL,
  `rhesus` varchar(50) NOT NULL,
  `produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_detail_darah`
--

INSERT INTO `informasi_detail_darah` (`id_darah`, `id_stok`, `goldar`, `rhesus`, `produk`) VALUES
(63, 40, 'B', '+', 'WE');

-- --------------------------------------------------------

--
-- Table structure for table `stok_darah`
--

CREATE TABLE `stok_darah` (
  `id_stok` int(10) NOT NULL,
  `darah` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok_darah`
--

INSERT INTO `stok_darah` (`id_stok`, `darah`, `keterangan`, `stok`) VALUES
(35, 'A001', 'Tersedia', '1000'),
(38, 'B001', 'Tersedia', '8550'),
(40, 'B002', 'Tersedia', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `data_darah_keluar`
--
ALTER TABLE `data_darah_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_stok` (`id_stok`);

--
-- Indexes for table `data_darah_masuk`
--
ALTER TABLE `data_darah_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_stok` (`id_stok`);

--
-- Indexes for table `detail_stok_darah`
--
ALTER TABLE `detail_stok_darah`
  ADD PRIMARY KEY (`id_detailstok`),
  ADD KEY `id_stok` (`id_stok`);

--
-- Indexes for table `informasi_detail_darah`
--
ALTER TABLE `informasi_detail_darah`
  ADD PRIMARY KEY (`id_darah`),
  ADD KEY `id_stok` (`id_stok`);

--
-- Indexes for table `stok_darah`
--
ALTER TABLE `stok_darah`
  ADD PRIMARY KEY (`id_stok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_darah_keluar`
--
ALTER TABLE `data_darah_keluar`
  MODIFY `id_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `data_darah_masuk`
--
ALTER TABLE `data_darah_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `detail_stok_darah`
--
ALTER TABLE `detail_stok_darah`
  MODIFY `id_detailstok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `informasi_detail_darah`
--
ALTER TABLE `informasi_detail_darah`
  MODIFY `id_darah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `stok_darah`
--
ALTER TABLE `stok_darah`
  MODIFY `id_stok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_darah_keluar`
--
ALTER TABLE `data_darah_keluar`
  ADD CONSTRAINT `data_darah_keluar_ibfk_1` FOREIGN KEY (`id_stok`) REFERENCES `stok_darah` (`id_stok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_darah_masuk`
--
ALTER TABLE `data_darah_masuk`
  ADD CONSTRAINT `data_darah_masuk_ibfk_1` FOREIGN KEY (`id_stok`) REFERENCES `stok_darah` (`id_stok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_stok_darah`
--
ALTER TABLE `detail_stok_darah`
  ADD CONSTRAINT `detail_stok_darah_ibfk_1` FOREIGN KEY (`id_stok`) REFERENCES `stok_darah` (`id_stok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi_detail_darah`
--
ALTER TABLE `informasi_detail_darah`
  ADD CONSTRAINT `informasi_detail_darah_ibfk_1` FOREIGN KEY (`id_stok`) REFERENCES `stok_darah` (`id_stok`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
