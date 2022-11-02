-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 03:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citrakomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `akses` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `telepon`, `username`, `password`, `email`, `akses`) VALUES
(1, 'Ahmad', '083129218791', 'Admin', '01c92d3c5e470cbc71b8a461b0ecff53', 'admin@citracomputer.co.id', 'admin'),
(4, 'Muhammad', '083119265604', 'staff', '01c92d3c5e470cbc71b8a461b0ecff53', 'staff@citracomputer.co.id', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(16) NOT NULL,
  `foto` varchar(32) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `jenis`, `keterangan`, `harga`, `foto`, `tanggal`) VALUES
('1e0lao4lljuz', 'Thermal Paper Roll', 'barang', '', '', '1e0lao4lljuz.jpg', '2016-09-13 11:02:35'),
('2076z25iqgrg', 'ID Card Ribbon Printer', 'barang', '', '', '2076z25iqgrg.jpg', '2016-09-13 11:05:00'),
('2fqe22s0qxm7', 'HVS Single Paper Roll', 'barang', '', '', '2fqe22s0qxm7.jpg', '2016-09-13 11:02:07'),
('37dtybf5k7e2', 'Pembuatan Website', 'jasa', '<p>Pembuatan Website untuk:</p><ul><li>Perusahaan</li><li>Travel</li><li>UKM</li><li>Sekolah</li><li>Hotel</li><li>dll</li></ul>', '', '37dtybf5k7e2.jpg', '2016-09-13 11:30:50'),
('3n68gt46mdxy', 'Paket CCTV C', 'paket', '', '', '3n68gt46mdxy.jpg', '2016-09-14 02:29:42'),
('3wet25b44189', 'Cash Drawe Secure Box', 'barang', '', '', '3wet25b44189.jpg', '2016-09-13 11:12:57'),
('5wyua3t8rgp', 'Paket CCTV B', 'paket', '', '', '5wyua3t8rgp.jpg', '2016-09-14 02:29:29'),
('5ylg2j611cs5', 'Barcode Printer Postek C168', 'barang', '', '', '5ylg2j611cs5.jpg', '2016-09-13 11:16:05'),
('6nzxid5jljt9', 'Continous Form', 'barang', '<p>1ply / 2ply / 3ply Model Faktur / Wartel</p>', '', '6nzxid5jljt9.jpg', '2016-09-13 11:10:05'),
('6sh70yhg79kv', 'Promo Honda Scoopy', 'promo', '', '', '6sh70yhg79kv.jpg', '2016-09-14 02:04:48'),
('6x1wlvlg0cba', 'Jasa Pemasangan CCTV', 'jasa', '<p>Pemasangan Kamrea CCTV, indoor dan outdoor</p>', '', '6x1wlvlg0cba.jpg', '2016-09-13 11:26:14'),
('6y5l4g1ciwor', 'Paket CCTV A', 'paket', '', '', '6y5l4g1ciwor.jpg', '2016-09-14 02:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `tagline` varchar(128) NOT NULL,
  `telepon1` varchar(45) NOT NULL,
  `telepon2` varchar(45) NOT NULL,
  `email` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `peta` text NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `judul`, `tagline`, `telepon1`, `telepon2`, `email`, `alamat`, `peta`, `tentang`) VALUES
(1, 'Citra Computer', 'Jl. Kumpulan Kode ', '083129218791', '083119265604', 'citracomputer@gmail.com', 'Jl. Kumpulan Kode ', '', '<h2>Tentang Kami</h2>\r\n<p style="text-align: justify;">Citra Computer merupakan sebuah perusahaan yang bergerak di bidang IT (Komputerisasi). Khusus menyediakan komputer kasir dan aplikasi perangkat lunak atau software&nbsp;untuk restaurant, hotel, minimarket, grosir, petshop, bengkel, salon, butik, apotek, dan accessories lainnya. Memiliki garansi resmi produk dan memiliki support teknisi purna jual/after marketing yang terpercaya.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
