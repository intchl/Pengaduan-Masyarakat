-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 08:25 AM
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
-- Database: `db_yakin`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` enum('masyarakat','.','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `username`, `password`, `telp`, `alamat`, `level`) VALUES
(1, '000011112222666', 'Intan Rahmi Chalik', 'intchl', '202cb962ac59075b964b07152d234b70', '081283948576', 'Jl. Giam III No.1', 'masyarakat'),
(2, '0099009900990099', 'Febrian Mahendra', 'briandapu', '202cb962ac59075b964b07152d234b70', '089898767788', 'JL. Sembilang No.13', 'masyarakat'),
(3, '1234321234566765', 'Luhtfi Adistya', 'lutfhii', '202cb962ac59075b964b07152d234b70', '088789876789', 'Jl. Patrisari No.15', 'masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tmpt_kejadian` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `video` text NOT NULL,
  `status` enum('proses','selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `tmpt_kejadian`, `foto`, `video`, `status`) VALUES
(1, '2023-03-31', '000011112222666', 'Telah terjadi perampokan berupa uang sebesar Rp 15.000.000-,. Uang ini diambil pelaku dari tangan korban ketika korban sedang lengah setelah menarik uang melalui BRILink di sekitar tempat kejadian. Pelaku kabur ke arah Jl. Sudirman', 'Jalan Sembilang No.105, sebelah Toko Roti Rotte', 'kasus-kriminal-di-bekasi-melonjak-75-persen-pada-2022-HKx0Ocpy6J.jpg', 'videoplayback (1).mp4', 'selesai'),
(2, '2023-04-04', '000011112222666', 'Telah terjadi pemjambretan di Jalan Pramuka tepatnya di sebelah Indomaret. Kejadian ini terjadi ketika korban sedang tidak fokus menjaga barang bawaannya. Pelaku datang dari arah sembilang dengan laju kemudian menarik tas korban sampai korban terseret sekitar 5 meter. Pelaku Berhasil kabur', 'Jl. Pramuka No.12 Sebelah Indomaret', 'htehset.jpg', 'videoplayback (2).mp4', 'selesai'),
(3, '2023-04-20', '000011112222666', 'Terjadi tabrakan antara minibus Avanza dengan motor Vario ungu. diketauhi bahwa minibus datang melaju dari arah sudirman kemudian menabrak motor vario yang hendak menyebrang masuk ke masjid.', 'Jalan Paus di seberang masjid', 'IMG-20230502-WA0068-350x250.jpg', 'videoplayback (3).mp4', 'selesai'),
(4, '2023-05-16', '000011112222666', 'Terjadi penjambretan handphone iPhone 7 di Jalan Yos Sudarso sebrang teras kayu resto. Hal ini terjadi ketika pelaku dengan laju dari arah Jl. Riau memepet korban dan menodong korban untuk menyerahkan Handphone miliknya. Pelaku berhasil melarikan diri ke arah Jl. Umban Sari', 'Jl. Yos Sudarso sebelah Teras Kayu Resto', 'tersangka-pelaku-kekerasan-yang-menewaskan-anak-pj-gubernur-qflo.webp', 'videoplayback (4).mp4', 'selesai'),
(5, '2023-06-01', '000011112222666', 'Terjadi tabrakan antara motor vario merah dengan pcx hitam. kejadian ini terjadi ketika vario merah mengerem mendadak untuk menghindari kucing yang sedang menyebrang. pcx hitam menabrak vario merah dari belakang yang menyebabkan pengemudi vario merah terpental kedepan dan luka luka di bagian kaki dan tangan.', 'Jl. Umban Sari di depan Kampus PCR', 'potret-para-pelaku-penyerangan-doa-nikah-di-solo-yang-dibekuk-polisi_43.jpeg', 'videoplayback (7).mp4', 'selesai'),
(6, '2023-04-27', '000011112222666', 'Telah terjadi pembegalan sepeda motor di dekat simpang yos sudarso. pelaku datang menyerang korban dari arah sudirman. info saat ini korban mengalami kerugian 1 Sepeda motor merk Honda Vario.', 'Jl. Yos Sudarso No.115', 'NAPI-ASIMILASI.jpg', 'videoplayback (7).mp4', 'selesai'),
(7, '2023-04-30', '000011112222666', 'Telah terjadi tindak kriminal maling di  masjid Nurul Huda. barang hilang yaitu kotak infak masjid. pelaku belum diketahui karena cctv masjid sedang rusak. kejadian ini terjadi pada malam hari setelah solat isya.', 'Jl. Pramuka No.13', 'IMG_20220713_132242-min.jpg', 'videoplayback (9).mp4', 'proses'),
(8, '2023-05-03', '1234321234566765', 'Telah terjadi perampokan di jalan Sembilang tepatnya di Indomaret. Pelaku merampok 1 unit kasir dan kemudian membawanya kabur. kejadian ini terjadi ketika tempat sedang sepi.', 'JL. Sembilang', 'images.jfif', 'videoplayback (10).mp4', 'selesai'),
(9, '2023-06-01', '1234321234566765', 'terjadi kasus pembunuhan di pekarangan rumah makan. diduga pelaku cemburu tehadap pemilik rumah makan yang sering berbicara dengan pelanggan nya. saksi mata melihat pelaku melakukan aksinya di malam hari', 'umban sari jl.taman sari', '414dbedbb7db6b0d8211e659c3386049.jpg', 'videoplayback (12).mp4', 'proses'),
(10, '2023-05-30', '1234321234566765', 'terjadi kasus pemerkosaan terhadap anak sd yang berumur 7 tahun. di duga pelaku mengonsumsi obat candu yang mengakibatkan hilang akal sehat. pelaku saat ini sedang dalam pencarian polisi', 'jl patria sari', 'images (1).jfif', 'Kondisi Remaja Perempuan Korban Pemerkosaan 10 Orang Termasuk Guru, Kades, Hingga Polisi.mp4', 'selesai'),
(11, '2023-05-03', '1234321234566765', 'terjadi kasus pencurian motor di daerah sekitar warung. di duga pelaku berjumlah dua orang. melakukan aksinya saat malam hari tepat jam 4 lewat ', 'jl.inti sari', '20-ft-gulung-38-pelaku-kriminal-1.jpg', 'videoplayback (13).mp4', 'proses'),
(12, '2023-06-22', '1234321234566765', 'terjadi kasus penculikkan di depan kost. pelaku di duga seorang wanita setengah baya', 'jl.taman sari depan kost', 'img-20210202-wa0053.jpg', 'videoplayback (14).mp4', 'proses'),
(13, '2023-06-18', '1234321234566765', 'terjadi kemacetan di jalan raya akibat kecelakaan. di duga pelaku ugal-ugalan saat berkendara', 'JL. Sembilang', '20-ft-gulung-38-pelaku-kriminal-1.jpg', 'videoplayback (16).mp4', 'proses'),
(14, '2023-05-11', '1234321234566765', 'terjadi kasus perampokkan di di bank BRI. pelaku menggunakan senjata mainan untuk mengitimidasi pegawai bank BRI. saat ini pelaku sedang dalam pencarian polisi', 'jl.umban sari', 'IMG-20230529-WA0036-640x288.jpg', 'videoplayback (17).mp4', 'proses'),
(15, '2023-06-16', '0099009900990099', 'terlihat di CCTV seseorang yang sedang melakukan transaksi narkoba di belakang gedung hotel. di duga pelaku mengedarkan narkoba berjenis sabu. saat ini polisi sedang melakukan penyelidikkan di daerah sekitar', 'JL. JEND. SUDIRMAN', 'images (5).jfif', 'videoplayback (5).mp4', 'selesai'),
(16, '2023-06-23', '0099009900990099', 'terjadi baku hantam antara anggota partai PDI dengan Partai perindo. di duga salah satu aggota partai PDI menuduh jika ketua partai Prindo melakukan korupsi', 'JL. JEND. SUDIRMAN', 'htehset.jpg', 'SEMPAT DITAHAN KINI Polisi BEBASKAN Penahanan Istri, KASUS KDRT di Depok_ Istri Malah Jadi Tersangka.mp4', 'selesai'),
(17, '2023-05-25', '0099009900990099', 'Telah terjadi pembunuhan satu keluarga di duga ada selisih paham antara pelaku dan korban', 'Jl.Sukajadi', 'images (4).jfif', 'videoplayback (17).mp4', 'selesai'),
(18, '2023-06-06', '0099009900990099', 'Polisi grebek rumah pengedar narkoba yang sudah lama dicari oleh anggota kepolisian ', 'Jl.Sutomo', 'img-20210202-wa0053.jpg', 'Polisi di Sidrap, Sulsel, Dikepung Warga Usai Tangkap Pengedar Narkoba.mp4', 'selesai'),
(19, '2023-05-11', '0099009900990099', 'Telah ditemukan mayat seorang wanita akibat dugaan mutilasi ', 'Jl.Teluk Leok', 'tersangka-pelaku-kekerasan-yang-menewaskan-anak-pj-gubernur-qflo.webp', 'videoplayback (12).mp4', 'proses'),
(20, '2023-05-24', '0099009900990099', 'Polisi berhasil tangkap pelaku pemerkosaan kepada 2 orang wanita', 'Jl.Mekar Sari ', '414dbedbb7db6b0d8211e659c3386049.jpg', 'Kondisi Remaja Perempuan Korban Pemerkosaan 10 Orang Termasuk Guru, Kades, Hingga Polisi.mp4', 'selesai'),
(21, '2023-06-04', '0099009900990099', 'Polisi berhasil tangkap pelaku tawuran antar pelajar', 'Jl.Bangau', '20-ft-gulung-38-pelaku-kriminal-1.jpg', 'videoplayback (3).mp4', 'proses'),
(22, '2023-04-12', '0099009900990099', 'Warga tangkap pelaku penjual ayam tiren sebanyak 200 ekor ayam', 'Jl.Citra Sari', 'img-20210401-wa0213.jpg', 'videoplayback (17).mp4', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Intan Rahmi Chalik', 'admin', '202cb962ac59075b964b07152d234b70', '088767657898', 'admin'),
(2, 'Kevin Marcellino', 'petugas', '202cb962ac59075b964b07152d234b70', '081253647584', 'petugas'),
(3, 'Eko Wahyu', 'petugas1', '202cb962ac59075b964b07152d234b70', '081234234565', 'petugas'),
(4, 'Ade Suriani', 'petugas2', '202cb962ac59075b964b07152d234b70', '082314567654', 'petugas'),
(5, 'Parintan Manurung', 'petugas3', '202cb962ac59075b964b07152d234b70', '081273647584', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `nama_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `nama_petugas`) VALUES
(1, 5, '2023-04-11', 'Baik kami sudah melalukan investigasi atas laporan ini.', 'Ade Suriani'),
(2, 4, '2023-05-17', 'Baik kami akan melakukan pemeriksaan lebih lanjut', 'Ade Suriani'),
(3, 3, '2023-05-10', 'Baik kami akan melakukan pemeriksaan lebih lanjut', 'Ade Suriani'),
(4, 20, '2023-06-05', 'Baik kami akan segera menyelesaikan secara tuntas kasus ini', 'Kevin Marcellino'),
(5, 22, '2023-06-04', 'Laporan diterima, kami akan menindak lanjuti laporan Anda', 'Kevin Marcellino'),
(6, 10, '2023-06-02', 'Baik untuk kasus ini akan kami tindak lanjuti sampai tuntas', 'Kevin Marcellino'),
(7, 1, '2023-06-16', 'Laporan saudara kami terima, Kami akan menindak lanjuti tentang kasus ini', 'Eko Wahyu'),
(8, 2, '2023-06-01', 'Baik kami akan memproses kasus ini sampai tuntas', 'Eko Wahyu'),
(9, 8, '2023-06-01', 'Laporan saudara kami terima, kami akan menindak lanjuti kasus ini hiingga tuntas', 'Eko Wahyu'),
(10, 15, '2023-06-01', 'Laporan saudara kami terima, untuk kasus ini akan kami tindak lanjuti hingga tuntas', 'Eko Wahyu'),
(11, 18, '2023-06-01', 'Baik kami akan menindak lanjuti kasus ini hingga tuntas', 'Eko Wahyu'),
(12, 6, '2023-06-05', 'Laporan saudara kami terima, kami akan segera menindak lanjuti kasus ini hingga tuntas', 'Parintan Manurung'),
(13, 16, '2023-06-01', 'Baik kami akan menguak hingga tuntas tentang kasus ini', 'Parintan Manurung'),
(14, 17, '2023-06-03', 'Laporan saudara kami terima, untuk kasus ini akan kami selesaikan hingga tuntas', 'Parintan Manurung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
