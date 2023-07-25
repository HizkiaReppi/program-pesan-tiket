-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 06:55 AM
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
-- Database: `db_pesantiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_pemesanan`
--

CREATE TABLE `t_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_identitas` int(12) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `tempat_wisata` varchar(100) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(11) NOT NULL,
  `pengunjung_anak` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pemesanan`
--

INSERT INTO `t_pemesanan` (`id_pemesanan`, `nama_lengkap`, `no_identitas`, `no_hp`, `tempat_wisata`, `tgl_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(1, 'Hizkia Reppi', 2147483647, 2147483647, 'BukitKasihKanonang', '2024-05-05', 4, 2, 50000, 250000),
(2, 'Hizkia Reppi', 2147483647, 2147483647, 'BukitKasihKanonang', '2024-05-05', 4, 2, 50000, 250000),
(3, 'Hizkia Reppi', 23, 3, 'MuseumNegeriManado', '2023-03-02', 4, 2, 100000, 500000),
(4, 'Hizkia Reppi', 5, 2147483647, 'MuseumNegeriManado', '2000-03-02', 3, 4, 100000, 500000),
(5, 'Hizkia Reppi', 2, 2147483647, 'TamanLautBunaken', '2222-02-02', 4, 2, 150000, 750000),
(6, 'Hizkia Reppi', 2, 2147483647, 'TamanLautBunaken', '2222-02-02', 4, 2, 150000, 750000),
(7, 'Hizkia Reppi', 44, 4, 'TamanLautBunaken', '3333-03-31', 4, 3, 150000, 825000),
(8, 'Hizkia Reppi', 44, 4, 'TamanLautBunaken', '3333-03-31', 4, 3, 150000, 825000),
(9, 'Hizkia Reppi', 44, 4, 'TamanLautBunaken', '3333-03-31', 4, 3, 150000, 825000),
(10, 'Hizkia Reppi', 1, 2147483647, 'BukitKasihKanonang', '2022-09-08', 1, 1, 50000, 75000),
(11, 'Hizkia Reppi', 2, 3, 'TamanLautBunaken', '2022-09-09', 2, 2, 0, 0),
(12, 's', 3, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 50000, 250000),
(13, 'Hizkia Reppi', 1, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(14, 'Hizkia Reppi', 1, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(15, 'Hizkia Reppi', 2, 2, 'MuseumNegeriManado', '2222-02-22', 4, 2, 20000, 100000),
(16, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(17, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(18, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(19, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(20, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(21, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(22, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(23, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(24, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(25, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(26, 'Hizkia Reppi', 23, 3, 'BukitKasihKanonang', '2222-02-22', 4, 2, 25000, 125000),
(27, 's', 44, 4, 'BukitKasihKanonang', '3232-03-22', 4, 2, 25000, 125000),
(28, 'a', 2, 3, 'BukitKasihKanonang', '1111-11-11', 2, 2, 25000, 75000),
(29, 'f', 5, 5, 'BukitKasihKanonang', '4567-03-12', 4, 2, 25000, 125000),
(30, 'Hizkia Reppi', 4, 4, 'BukitKasihKanonang', '2222-02-22', 3, 2, 25000, 100000),
(31, 's', 1, 2147483647, 'BukitKasihKanonang', '2222-02-22', 2, 2, 25000, 75000),
(32, 'Hizkia', 2147483647, 2147483647, 'MuseumNegeriManado', '2022-09-08', 2, 5, 20000, 90000),
(33, 'Hizkia Jefren Reppi', 2147483647, 2147483647, 'Bukit Kasih Kanonang', '2022-09-10', 2, 2, 25000, 75000),
(34, 'Hizkia Reppi', 2147483647, 2147483647, 'Bukit Kasih Kanonang', '2022-09-17', 1, 1, 25000, 37500);

-- --------------------------------------------------------

--
-- Table structure for table `t_tempatwisata`
--

CREATE TABLE `t_tempatwisata` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `foto_tempat` varchar(100) NOT NULL,
  `video_tempat` varchar(100) NOT NULL,
  `harga_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tempatwisata`
--

INSERT INTO `t_tempatwisata` (`id`, `nama_tempat`, `deskripsi`, `lokasi`, `foto_tempat`, `video_tempat`, `harga_tiket`) VALUES
(1, 'Bukit Kasih Kanonang', 'Bukit Kasih adalah salah satu tempat pariwisata di Provinsi Sulawesi Utara. Di Bukit Kasih ini terdapat monumen. Bukit Kasih ini merupakan bukit belerang yang masih alami. Di tempat ini perasaan kasih wisatawan akan digugah.', 'Kawangkoan, Tomohon, Sulawesi Utara, Indonesia', 'Bukit-Kasih-Kanonang.jpg', 'https://www.youtube.com/embed/Cru1zOhlbeE', 25000),
(2, 'Museum Negeri Manado', 'Museum Negeri Manado terletak di sulawesi utara tepatnya di kota manado. Museum ini menyimpan berbagai warisan budaya leluhur dan budaya kearifan lokal leluhur dari pra sejarah hingga zaman modern hingga saat ini.', 'Jalan W.R. Supratman No. 72, Kota Manado', 'Museum-Negeri-Manado.jpg', 'https://www.youtube.com/embed/1vnOQSLl03o', 20000),
(3, 'Taman Nasional Bunaken', 'Taman Nasional Bunaken adalah taman laut yang terletak di Sulawesi Utara, Indonesia. Taman ini terletak di Segitiga Terumbu Karang yang menjadi habitat bagi 390 spesies terumbu karang dan juga berbagai spesies ikan, moluska, reptil, dan mamalia laut.', 'Perairan laut Bunaken, Wori, Sulawesi Utara', 'Taman-Laut-Bunaken.jpg', 'https://www.youtube.com/embed/xBz-mxWD-fw', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `t_tempatwisata`
--
ALTER TABLE `t_tempatwisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `t_tempatwisata`
--
ALTER TABLE `t_tempatwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
