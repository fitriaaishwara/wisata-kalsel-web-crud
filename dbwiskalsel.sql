-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 06:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwiskalsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftartransaksi`
--

CREATE TABLE `daftartransaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_identitas` bigint(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jml` int(10) NOT NULL,
  `jml_anak` int(10) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `total_harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftartransaksi`
--

INSERT INTO `daftartransaksi` (`id`, `nama`, `no_identitas`, `no_hp`, `tanggal`, `jml`, `jml_anak`, `nama_wisata`, `total_harga`) VALUES
(58, 'arya', 23, '081345241482', '2022-06-23', 3, 1, 'Kebun Raya Banua', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `daftarwisata`
--

CREATE TABLE `daftarwisata` (
  `idw` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarwisata`
--

INSERT INTO `daftarwisata` (`idw`, `nama_wisata`, `gambar`, `deskripsi`, `youtube`, `harga`) VALUES
(13, 'Kebun Raya Banua', '915-Taman-Labirin-Banua-Kebun-Raya-Banua.jpg', 'Jika umumnya kebun raya akan mengingatkan Anda dengan kota Bogor, maka jangan salah karena Banjarbaru juga memiliki kebun raya yang bernama Taman Labirin banua (Kebun Raya Banua). Objek wisata ini terletak di kawasan Palam, Cempaka, dan merupakan salah satu destinasi wisata yang patut Anda kunjungi. di sini Anda bisa menjumpai berbagai taman, seperti taman labirin, taman buah, dan taman bunga.', 'https://youtube.com/embed/693Wrhpa7SQ', '25000'),
(14, 'Bukit Langara', '140-Bukit-Langara.jpg', 'Satu lagi bukit yang tak kalah indah dari Bukit Rimpi, yaitu Bukit Langara. Untuk dapat mencapai puncak dari bukit satu ini, Anda harus menempuh perjalanan kurang lebih 30 menit di atas jalan setapak berbatu. Setelah sampai di puncak, Anda seketika akan disuguhkan pemandangan alam Banjarmasin yang begitu memukau, perpaduan antara tebing batu dan aliran sungai begitu apik untuk diabadikan.', 'https://youtube.com/embed/WOPvWPPEqno', '15000'),
(15, 'Taman Wisata Alam Pulau Bakut', '773-Taman-Wisata-Alam-Pulau-Bakut.jpg', 'Selain Pulau Kembang dan Pulau Kaget, di Banjarmasin juga terdapat pulau lainnya yakni Pulau Bakut. Pulau kecil yang terletak di bawah Jembatan Barito ini memiliki luas kurang lebih 18 hektar, yang di dalamnya termasuk dengan taman wisata alam. Taman wisata tersebut dihuni oleh cukup banyak hewan, serta tumbuhan yang adaptif terhadap pasang surut air sungai.', 'https://youtube.com/embed/krv3NUKfBKg', '25000'),
(19, 'hihuhu', '46-Aesthetic-02-Wallpaper-by-JhainC-on-DeviantArt.jpg', 'haii', 'https://www.youtube.com/embed/Nk3v7Ak9jxc', '50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftartransaksi`
--
ALTER TABLE `daftartransaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarwisata`
--
ALTER TABLE `daftarwisata`
  ADD PRIMARY KEY (`idw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftartransaksi`
--
ALTER TABLE `daftartransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `daftarwisata`
--
ALTER TABLE `daftarwisata`
  MODIFY `idw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
