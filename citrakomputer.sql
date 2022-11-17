-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 08:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrakomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `akses` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `telepon`, `username`, `password`, `email`, `akses`) VALUES
(1, 'Ahmad', '083129218791', 'Admin', '01c92d3c5e470cbc71b8a461b0ecff53', 'admin@citracomputer.co.id', 'admin'),
(2, 'budi', '082261661817', 'budi', 'budi', 'susucoklat341@gmail.com', 'admin'),
(4, 'Muhammad', '083119265604', 'staff', '01c92d3c5e470cbc71b8a461b0ecff53', 'staff@citracomputer.co.id', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(16) NOT NULL,
  `foto` varchar(32) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
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
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8 NOT NULL,
  `resep_makanan` varchar(999) CHARACTER SET utf8 NOT NULL,
  `resep_minuman` varchar(999) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `judul`, `resep_makanan`, `resep_minuman`) VALUES
(1, 'Ikan teri goreng tepung', 'Bahan:\r\n- 250 gr ikan teri segar\r\n- 150 gr tepung instan\r\nCara membuat:\r\n1. Cuci bersih ikan teri, bilas sebanyak 3 kali, kemudian tiriskan.\r\n2. Siapkan baskom, taruh ikan teri di dalam baskom kemudian tuang sedikit demi sedikit tepung instan lalu aduk rata, diamkan 5 menit, setelah terserap beri tepung lagi aduk kembali sampai habis.\r\n3. Setelah terserap sempurna sampai tidak ada butir tepung kering dan tanpa menambahkan air, goreng ikan dalam minyak panas dengan api kecil hingga matang dan kering.\r\n4. Sajikan.', ''),
(2, 'Tumis kubis', 'Bahan:\n- 6 lembar kubis\n- 6 bawang merah, iris\n- 3 bawang putih, iris\n- 8 cabai rawit, iris halus\n- 2 daun salam\n- 2 cm lengkuas, geprek\n- 1 sdm ebi\n- 200 ml air\n- 1 sdt kaldu ayam, jamur, dan garam\n- 1 sdt gula pasir\nCara membuat:\n1. Tumis bumbu iris.\n2. Masukkan daun salam, lengkuas, kubis, air, dan bumbu lain.\n3. Masak hingga meresap. Cek rasa, sajikan hangat.', '');

-- --------------------------------------------------------

--
-- Table structure for table `resep_minuman`
--

CREATE TABLE `resep_minuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(355) CHARACTER SET utf8 NOT NULL,
  `resep_minuman` varchar(999) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep_minuman`
--

INSERT INTO `resep_minuman` (`id`, `judul`, `resep_minuman`) VALUES
(1, '', ''),
(2, 'es lemon tea', 'Bahan-bahan:\r\nEs batu\r\nMadu/ gula\r\nAir es\r\nLemon\r\nTeh merk favorit Anda\r\nCara membuat:\r\nSeduh teh dalam air panas  hingga mencapai tingkat kekentalan yang Anda inginkan. Setelah itu, Anda bisa menyisihkannya terlebih dahulu.\r\nTuang teh ke dalam gelas dan masukan gula.\r\nTambahkan es dan perasan air lemon. Anda sudah bisa menyajikannya dalam keadaan dingin agar lebih nikmat.');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
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
(1, 'Citra Computer', 'Jl. Kumpulan Kode ', '083129218791', '083119265604', 'citracomputer@gmail.com', 'Jl. Kumpulan Kode ', '', '<h2>Tentang Kami</h2>\r\n<p style=\"text-align: justify;\">Citra Computer merupakan sebuah perusahaan yang bergerak di bidang IT (Komputerisasi). Khusus menyediakan komputer kasir dan aplikasi perangkat lunak atau software&nbsp;untuk restaurant, hotel, minimarket, grosir, petshop, bengkel, salon, butik, apotek, dan accessories lainnya. Memiliki garansi resmi produk dan memiliki support teknisi purna jual/after marketing yang terpercaya.</p>');

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
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep_minuman`
--
ALTER TABLE `resep_minuman`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resep_minuman`
--
ALTER TABLE `resep_minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
