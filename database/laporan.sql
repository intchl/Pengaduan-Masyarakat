-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 01:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
(8781921, 'jonoeverybody', 'jonsky', '123', '08767121234'),
(9979132, 'alip', 'alipudin', '123', '908913210'),
(81388813, 'Muhammad Reza Aditya', 'rejakartans', '123', '085772867820'),
(97788123, 'johanes', 'johan', '123', '081382829789'),
(98712382, 'fahri', 'ipqy', '1234', '0878771321'),
(123456789, 'Intan', 'intchl', '1234', '082384475457');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(3, '2023-01-11', 81239821, 'nyobaa ngelaporr', 'hc.jpg', 'selesai'),
(4, '2023-01-31', 89128331, 'nyoba ngelapor lagi boosss', 'suntuk.jpg', 'selesai'),
(5, '2023-01-17', 87671329, 'laporan baruuuuu', 'login.svg', 'selesai'),
(6, '2023-01-23', 9878121, 'ngelaporr lagii nih boss', 'img-buat-laporan.svg', 'selesai'),
(7, '2023-01-31', 9878113, 'hallo saya mao curhat dongg tapii... boongg', 'img-dashboard-user.svg', 'selesai'),
(8, '2023-02-15', 98971831, 'laporr 86!', 'tanggapan.svg', 'selesai'),
(9, '2023-03-14', 98781321, 'laporr lagii nihh bosss', 'error-404-monochrome.svg', 'proses'),
(10, '2023-04-13', 98090191, 'percobaan laporan terakhir', 'santay.svg', 'selesai'),
(11, '2023-04-20', 98781321, 'laporr lagii nihh bosss', 'error-404-monochrome.svg', 'selesai'),
(12, '2023-01-10', 98781321, 'laporr lagii nihh bosss', 'error-404-monochrome.svg', 'selesai'),
(13, '2023-05-11', 123456789, 'test kirim laporan', 'tulis.svg', 'proses'),
(14, '2023-05-11', 123456789, 'test kirim laporan', 'tulis.svg', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'firman aulia', 'firmanpoenya', '202cb962ac59075b964b07152d234b70', '123456789012', 'petugas'),
(2, 'rizki akbar', 'qibar', '202cb962ac59075b964b07152d234b70', '0879761221', 'petugas'),
(3, 'taufan', 'opan', '202cb962ac59075b964b07152d234b70', '988781221', 'petugas'),
(7, 'intan', 'intan', 'e10adc3949ba59abbe56e057f20f883e', '121313', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 3, '2021-01-21', 'yaelah nyoba doang kampret', 2),
(2, 5, '2021-01-21', 'anjayy laporann baruuu', 2),
(3, 3, '2021-01-21', 'okeee mamangg', 1),
(9, 8, '2021-01-21', 'Siappp 86!', 3),
(10, 9, '2021-01-21', 'okeee boss slowww', 2),
(11, 10, '2021-01-23', 'okee boss tanggapan terakhirr nihh', 2),
(12, 3, '0000-00-00', 'wew', 1),
(13, 11, '2023-05-03', 'ssssssssssss', 1),
(14, 11, '0000-00-00', 'ssssss', 2),
(15, 12, '2023-05-10', 'ssssssss', 3),
(20, 4, '2023-05-09', '', 1),
(21, 5, '0000-00-00', '', 2),
(25, 4, '0000-00-00', 'dadad', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_pengaduan` (`id_pengaduan`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `nik` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456790;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
