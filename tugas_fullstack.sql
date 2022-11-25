-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2022 pada 18.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_fullstack`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `telepon`, `username`, `password`, `email`, `akses`) VALUES
(1, 'Ahmad', '083129218791', 'Admin', '01c92d3c5e470cbc71b8a461b0ecff53', 'admin@citracomputer.co.id', 'admin'),
(4, 'Muhammad', '083119265604', 'staff', '01c92d3c5e470cbc71b8a461b0ecff53', 'staff@citracomputer.co.id', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `jenis`, `keterangan`, `harga`, `foto`, `tanggal`) VALUES
('27rbts5v701r', 'BURGER TOFU', 'barang', '<p>Jika Anda sedang mengurangi konsumsi daging sapi bukan berarti tak bisa makan yang lezat. Burger dari tahu plus daging ayam ini sangat gurih dan enak. Bisa disantap dengan nasi tetapi enak juga diselipkan dalam roti plus mayones dan saus tomat. Mau coba?</p><p>Bahan:</p><p>300 g tahu putih yang bagus</p><p>100 g daging ayam cincang</p><p>1 sdm tepung terigu</p><p>1 kuning telur</p><p>2 sdm mentega</p><p>Bumbu:</p><p>1 batang daun bawang, iris halus</p><p>1 sdm bawang merah goreng, haluskan</p><p>&frac12; sdt pala bubuk</p><p>&frac12; sdt merica bubuk</p><p>1 sdm kecap asin</p><p>1 sdm saus BBQ</p><p>1 sdt garam</p><p>Cara membuat:</p><p>&bull; Tiriskan tahu hingga kering lalu haluskan.</p><p>&bull; Campur tahu halus dengan daging ayam, tepung terigu, dan Bumbu. Aduk hingga rata.</p><p>&bull; Bagi adonan menjadi 4 bagian. Bentuk masing-masing menjadi bundar pipih.</p><p>&bull; Panaskan mentega hingga leleh. Goreng burger hingga cokelat kekuningan kedua sisinya. Angkat dan tiriskan. Sajikan hangat.&nbsp;&nbsp;</p>', '', '27rbts5v701r.jpg', '2022-11-25 16:36:15'),
('2z8eqgi38do4', 'Kopi Almond', 'paket', '<p>Bahan :</p><p>800 ml air</p><p>2 sdm kopi instan</p><p>200 ml susu evaporasi 125 ml sirop gula</p><p>2 tetes esens almond</p><p>4 sdm krim kocok (whipped cream) 2 sdm almond iris, sangrai</p><p>Cara membuat :</p><p>&bull; Didihkan air di dalam panci, angkat. Seduh kopi dengan air mendidih, aduk sampai larut.</p><p>&bull; Masukkan susu dan sirop, teteskan esens almond. Aduk rata.</p><p>&bull; Tuang minuman ke dalam 4 gelas saji. Tambahkan krim kocok dan taburi almond&nbsp;</p>', '', '2z8eqgi38do4.jpg', '2022-11-25 16:49:56'),
('3b6r7vpvr4sp', 'Es Kurma Susu', 'jasa', '<p>Bahan I :</p><p>- 200 ml susu</p><p>- 100 gr air</p><p>- 2 sdm susu kental manis</p><p>- 200 gr es krim rasa vanilla</p><p>- 75 gr sari kurma ( jus kurma )</p><p>Bahan II:</p><p>- 70 gr kurma, potong memanjang</p><p>- 2 sdm air jeruk lemon</p><p>&nbsp;</p><p>Cara membuat :</p><p>1. Campurkan bahan II dan diamkan selama 15 mnt.</p><p>2. Haluskan seluruh bahan I hingga halus dengan menggunakan blender.</p><p>3. Tuang kedalam gelas, beri es krim diatasnya.</p><p>4. Taburkan bahan II di atas es krim dan sajikan.</p>', '', '3b6r7vpvr4sp.jpg', '2022-11-25 16:57:45'),
('3zhvu995so8j', 'Es Krim Vanilla Buah', 'jasa', '<p>Bahan-bahan :</p><p>12 buah stawberry 6 buah anggur hijau</p><p>&nbsp;</p><p>1 buah pisang ambon besar, masukkan ke freezer 30 menit 1/2 gelas es krim vanilla</p><p>&nbsp;</p><p>1/2 buah mangga 2 sdt gula</p><p>&nbsp;</p><p>1/2 gelas es batu</p><p>&nbsp;</p><p>Cara pembuatan :</p><p>1.&nbsp; Blender 8 buah strawberry,es batu, tambahkan 2 sdt gula.</p><p>&nbsp;</p><p>2.&nbsp; Blender terpisah 1 buah pisang hingga halus, campur dengan es krim vanilla.</p><p>&nbsp;</p><p>3.&nbsp; Potong2 dadu kecil mangga, iris 4 buah stawberry dan anggur hijau ukuran 1/2 cm.</p><p>&nbsp;</p><p>4.&nbsp; Siapkan gelas tuang 1/2 gelas strawberry blender (pd no 1).</p><p>&nbsp;</p><p>5.&nbsp; Tuang lg 1/2 gelas es krim pisang blender (pd no 2).</p><p>&nbsp;</p><p>6.&nbsp; Tambahkan potongan mangga, strawberry dan anggur.</p><p>&nbsp;</p><p>7.&nbsp; Siap disajikan.</p>', '', '3zhvu995so8j.jpg', '2022-11-25 16:52:03'),
('4ps4sv6ji7lm', 'Susu Cokelat Madu Jahe', 'paket', '<p>Bahan :</p><p>75 gram jahe</p><p>air matang untuk melarutkan jahe dan cokelat 2 kuning telur ayam kampung</p><p>4 sdm madu</p><p>120 gr gula pasir</p><p>4 sdm cokelat bubuk 600 ml susu cair</p><p>Cara membuat :</p><p>&bull; Kupas jahe, cuci bersih, kemudian parut halus. Campur dengan 8 sdm air matang, aduk, lalu peras dan ambil airnya. Sisihkan.</p><p>&bull; Taruh kuning telur dalam wadah, masukkan madu, gula pasir, dan air jahe. Kocok dengan mikser selama 1-2 menit sampai warnanya pucat.</p><p>&bull; Larutkan cokelat bubuk dalam 100 ml air matang, kemudian masukkan ke dalam panci bersama susu cair.</p><p>&bull; Jerangkan di atas api, masak hingga panas dan susu hampir mendidih, angkat. Tuang cokelat susu ke dalam adonan telur, aduk-aduk hingga tercampur.</p><p>Tuang minuman ke dalam gelas saji. Hidangkan selagi panas.</p><p>&nbsp;</p>', '', '4ps4sv6ji7lm.jpg', '2022-11-25 16:48:58'),
('5hq2x0uv6zcb', 'TUMIS TAHU SAYURAN', 'barang', '<p>Tahu ternyata mudah diolah dan dipadu aneka bahan dan bumbu. Seperti tahu goreng yang ditumis dengan sayuran komplet ini. Kuahnya sedikit banyak hingga bumbu bisa meresap ke dalam tahu. Asyik banget buat lauk santap siang!</p><p>Bahan: 2 sdm minyak sayur 2 siung bawang putih, cincang halus 3 butir bawang merah, cincang halus 100 g daging sapi untuk sukiyaki/daging has sapi iris tipis 150 g wortel, potong 3 cm, belah tipis 2 batang daun bawang, potong 3 cm 250 g tahu goreng, potong-potong 150 ml kaldu/air 1 sdm kecap manis 1 sdm saus tomat 1 sdm kecap Inggris &frac12; sdt merica bubuk 1 sdt garam 1 sdt cabai merah bubuk</p><p>Cara membuat: &bull; Tumis bawang putih dan bawang merah hingga layu dan harum. &bull; Masukkan daging sapi selembar demi selembar sambil aduk hingga kaku dan berubah warna. &bull; Masukkan sayuran, aduk hingga layu. &bull; Tambahkan tahu dan air, aduk rata. &bull; Bubuhi bumbu, aduk hingga mendidih dan masak hingga kuah agak menyusut dan bumbu meresap. Angkat. &bull; Taburi cabai merah bubuk. Sajikan hangat.&nbsp;</p>', '', '5hq2x0uv6zcb.jpg', '2022-11-25 16:38:03'),
('6g48ib63v78q', 'SUP BUNTUT KEMBANG TAHU', 'promo', '<p>Bahan: - 1 buah lidah sapi, rebus bersama garam - merica - 2 butir cengkeh - &frac12; sendok teh bubuk biji pala sampai empuk, potong setebal 1 cm - mentega untuk menumis</p><p>Saus: 5 butir bawang merah 2 siung bawang putih 2 cabai merah tanpa biji&nbsp;1 ruas ahe 1 ruas kunyit 1 ruas lengkuas 2 lembar daun jeruk &frac12; blok maggi blok rasa daging* 300 cc santan (&frac12; butir kelapa) garam dan merica secukupnya</p><p>Cara Membuat: 1. Tumis irisan lidah di mentega 2. Kini buat sausnya. Haluskan bawang merah, bawang putih, cabai merah, jahe kunyit, lengkuas. tumis hingga harum. Tambahkan daun jeruk. Aduk sebentar 3. Tuangkan santan, garam, merica, dan maggi blok. Masak sambil diaduk hingga mendidih. 4. Sajikan lidah dengan saus tadi, kentang goreng dan aneka sayuran rebus.</p>', '', '6g48ib63v78q.jpg', '2022-11-25 16:46:34'),
('6o6g63ufqk7a', 'HOT PLATE TOFU UDANG', 'barang', '<p>Membuat hot plate bergaya resto ternyata tidak sulit. Isinya pun bisa Anda sesuaikan dengan selera. Coba saja paduan udang dan tofu ini, dengan bumbu sedikit pedas, rasanya sangat lezat.</p><p>Bahan: 1 sdm minyak sayur &frac12; sdt minyak wijen 2 siung bawang putih, cincang halus 100 g udang kupas ukuran sedang 1 sdm saus tiram 1 sdm saus cabai bawang 1 sdm kecap asin &frac12; sdt merica bubuk 1 sdt garam 200 ml air 2 batang bokchoy, potong-potong 250 g tahu sutera, potong-potong &frac12; sdt tepung maizena, larutkan dengan sedikit air</p><p>Cara membuat: &bull; Panaskan minyak, tumis bawang putih hingga kuning. &bull; Masukkan udang kupas, aduk hingga berubah warna. &bull; Tambahkan bumbu dan air, didihkan. &bull; Masukkan bokchoy dan tahu, didihkan kembali. &bull; Tuangi larutan maizena, aduk hingga kental. Angkat. &bull; Panaskan hot plate di atas api sedang hingga panas benar. Angkat. &bull; Tuangkan tofu dan udang tumis ke atas hot plate. &bull; Sajikan segera.&nbsp;</p>', '', '6o6g63ufqk7a.jpg', '2022-11-25 16:39:34'),
('7e9drca9505z', 'STEAK TOFU', 'barang', '<p>Tofu alias tahu juga enak diolah menjadi steak. Tentu saja harus tahu sutera yang bagus mutunya. Cukup direndam bumbu dan dimatangkan perlahan. Rasa gurih tahu dan pekatnya bumbu membuat steak ini tak kalah enak dengan steak daging.</p><p>Bahan: 4 potong @ 100 gram tahu sutera, tiriskan 2 sdm mentega 2 batang daun bawang, iris tipis Bumbu, aduk rata: 1 sdm saus LP/BBQ 1 sdm saus hoisin 2 sdm kecap Jepang 1 siung bawang putih, parut &frac12; sdt merica bubuk 1 sdt air jeruk nipis 1 sdt garam</p><p>Cara membuat: &bull; Lumuri potongan tahu dengan Bumbu hingga rata. Diamkan selama 30 menit &bull; Panaskan mentega di wajan datar hingga leleh. Masukkan tahu sepotong demi sepotong berikut perendamnya. &bull; Kecilkan api, masak hingga satu sisinya kecokelatan. Balik, masak hingga sisi yang lain kecokelatan. Angkat. &bull; Taruh di piring saji. Taburi daun bawang. Sajikan hangat.</p>', '', '7e9drca9505z.jpg', '2022-11-25 16:45:11'),
('q9ry3sqy3xr', 'Ice Chocolate Blended', 'paket', '<p>Bahan :</p><p>2 gelas susu cair</p><p>1 mangkuk strawberry 2 sendok sirup coklat</p><p>2 sekop es krim vanilla/coklat tergantung selera es batu secukupnya</p><p>1 sendok coklat bubuk</p><p>Cara Membuat :</p><p>1. Campurkan semua bahan ke dalam blender kecuali coklat bubuk, es krim vanilla/ coklat dan sedikit strawberry.</p><p>2. Tuang ke dalam gelas saji. Beri 1 sekop es krim lalu taburkan coklat bubuk di atasnya.</p><p>3. Tambahkan potongan strawberry untuk mempercantik minuman.</p><p>&nbsp;</p>', '', 'q9ry3sqy3xr.jpg', '2022-11-25 16:50:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
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
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `judul`, `tagline`, `telepon1`, `telepon2`, `email`, `alamat`, `peta`, `tentang`) VALUES
(1, 'Bisa Resep', 'Semua ada resepnya', '083129218791', '083119265604', 'bisaresep@gmail.com', 'Jl. Petogogan I No.41 RT.1/RW.12, Pulo Kec. Kby. Baru Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.3443512903194!2d106.79450502980355!3d-6.252892300167561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1734b923f87%3A0xc6f572007f034137!2sJl.%20Petogogan%20I%20No.41%2C%20RT.1%2FRW.12%2C%20Pulo%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012140!5e0!3m2!1sid!2sid!4v1668267572271!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '<h2>Tentang Kami</h2>\r\n<p style=\"text-align: justify;\">Bisa Resep merupakan sebuah perusahaan yang bergerak di bidang IT (Komputerisasi). Khusus menyediakan komputer kasir dan aplikasi perangkat lunak atau software&nbsp;untuk restaurant, hotel, minimarket, grosir, petshop, bengkel, salon, butik, apotek, dan accessories lainnya. Memiliki garansi resmi produk dan memiliki support teknisi purna jual/after marketing yang terpercaya.</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
