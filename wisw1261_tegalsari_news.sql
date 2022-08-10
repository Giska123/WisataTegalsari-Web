-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2021 at 05:54 PM
-- Server version: 10.2.39-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisw1261_tegalsari_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(4, 'tegalsari1', 'admintegalsari1');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(40) NOT NULL,
  `sumber` varchar(128) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `judul`, `slug`, `tanggal`, `gambar`, `sumber`, `status_berita`, `isi`) VALUES
(1, 'Bapak Emil Dardak', 'bapak-emil-dardak', '2021-07-05', 'emil.jpeg', 'Yayasan Kyai Ageng Muhammad Besari', 'publish', 'wakil gubernur jawa timur bapak Emil Dardak mengunjungi Wisata Tegalsari'),
(2, 'Masjid Tegalsari Ponorogo', 'masjid-tegalsari-ponorogo', '2021-07-08', 'ta51.jpg', 'Yayasan Kyai Ageng Muhammad Besari', 'publish', 'Masjid Tegalsari terbaru setelah renovasi'),
(3, 'Kunjungan delegasi maroko ke tegalsari, ponorogo', 'kunjungan-delegasi-maroko-ke-tegalsari-ponorogo', '2021-05-30', 'maroko.jpg', 'Yayasan Kyai Ageng Muhammad Besari', 'publish', 'Sehubungan dengan kerjasama bantuan yang akan dijalin dengan pemerintah Kab. Ponorogo mengenai tempat-tempat religi yang bersejarah, Maroko mengirimkan delegasi negaranya ke situs-situs wisata sejarah dan budaya yang terdapat di Ponorogo'),
(4, 'Syiir UJud-ujudan Masjid Tegalsari', 'syiir-ujud-ujudan-masjid-tegalsari', '2021-08-02', 'syiir.jpeg', 'Yayasan Kyai Ageng Muhammad Besari', 'publish', 'Demikian sepenggal  lalaran yang dikenal dengan Syi\'iran Ujud-ujudan, yakni sebuah warisan leluhur yang dibaca dengan cengkok Jawa lokal yang khas dari Desa Tegalsari, Kecamatan Jetis, Kabupaten Ponorogo. Syiir Ujud-ujudan ini dipercaya kuat oleh masyarakat Tegalsari sebagai warisan otentik dari Kiai Ageng Muhammad Besari, pendiri Pesantren Gebang Tinatar Tegalsari pada tahun 1600-an. Syiir yang dilantunkan dengan tembang Jawa itu tergolong langka. Tidak semua masjid membacakan tembang yang biasa disebut ujud-ujudan tersebut. Syiir Ujud-ujudan ini rutin dibaca setiap hari Jumat setelah shalat Subuh. Isi dan makna Ujud-ujudan `merupakan bentuk ungkapan pujian kepada Allah SWT dan mengagungkan serta mengisahkan sejarah hidup Nabi Muhammad SAW dengan mengharap kemuliaan dan syafaat beliau di akhir zaman tersebut. Selain untuk mengenang Kiai Ageng Muhammad Besari saat masih hidup, Syiir ini juga memberikan dampak bagi warga dalam pengalaman religiusnya. Para warga di desa Tegalsari juga berupaya agar syiir peninggalan Kiai Ageng Muhammad Besari ini tidak punah dan hilang begitu saja, salah satunya dengan membekali dan memberikan waktu kepada generasi muda untuk ikut serta dalam kegiatan pembacaan syiir ini.');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `daftar_id` int(11) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_instansi` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jumlah` varchar(10) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`daftar_id`, `tgl_daftar`, `nama_instansi`, `alamat`, `tanggal`, `jumlah`, `tujuan`, `kontak`, `status`) VALUES
(6, '2021-08-24 09:52:20', 'Mala', 'Kediri', '2021-08-28', '15', 'wisata', '0865431224', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`daftar_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `daftar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
