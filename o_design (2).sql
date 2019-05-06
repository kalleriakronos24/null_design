-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 09:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `o_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` varchar(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kategori`) VALUES
('1238712983', 'Vector'),
('189273', 'Wallpaper'),
('981237', 'Logo');

-- --------------------------------------------------------

--
-- Table structure for table `order_ed`
--

CREATE TABLE `order_ed` (
  `order_id` varchar(10) NOT NULL,
  `id_sub` varchar(50) NOT NULL,
  `dimensi` varchar(20) NOT NULL,
  `tgl_diorder` varchar(20) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `ccv/cvv` varchar(20) NOT NULL,
  `total_biaya` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id_tempt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `comment`, `tanggal`, `username`, `id_tempt`) VALUES
('012930123', 'Gao GAo', 'May 05, 2019', 'u/Guest', '5056158802'),
('1231238273', 'Jago kali desainnya anjirrr', '04 May 2019', 'u/Guest', '5056158802'),
('2437744', 'OP OP JAOG', 'May 05, 2019', 'u/Babik', '5056158802'),
('3638916', 'AWOKAOWKOAWKOAKW', 'May 05, 2019', 'u/Guest', '5056158802'),
('5346984', 'wtf god', 'May 05, 2019', 'u/Guest', '6028841135'),
('7663574', 'wtf god', 'May 05, 2019', 'u/Guest', '6028841135'),
('7726745', 'wewqeqweqewqe', 'May 05, 2019', 'u/Guest', '5056158802');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub` varchar(20) NOT NULL,
  `nama_sub` varchar(20) NOT NULL,
  `id_kat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub`, `nama_sub`, `id_kat`) VALUES
('123901283', 'Vector Face', '1238712983'),
('129831293', 'Desktop Wallpaper', '189273'),
('192319283', 'Facebook Wallpaper', '189273'),
('192831', 'Logo Usaha', '981237'),
('9218391', 'Logo Team', '981237');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id_tempt` varchar(100) NOT NULL,
  `nama_temp` varchar(20) NOT NULL,
  `img_tempt` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `tgl_tmp` varchar(20) NOT NULL,
  `harga` int(14) NOT NULL,
  `tags` text NOT NULL,
  `rezv_id` varchar(50) NOT NULL,
  `media` varchar(40) NOT NULL,
  `id_sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id_tempt`, `nama_temp`, `img_tempt`, `description`, `tgl_tmp`, `harga`, `tags`, `rezv_id`, `media`, `id_sub`) VALUES
('0726605870', 'gambar wibu', '5ccd96236acc4.png', 'Hanya Sebatas Gambar Biasa cuma bagi para wibu gambar ini tidak biasa', '04 May 2019', 20000, '#GBF #Futanari #Erune', 'R-129382', 'Adobe Photoshop 2019', '129831293'),
('0949467078', 'omega lul', '5ccebb37c3080.png', '120391023NoDescription', '05 May 2019', 20000, '#lmao #lmao_1', 'R-847717', 'Paint', '123901283'),
('5056158802', 'fetish gambar 2d', '5cce879f407e8.png', 'No Description', '05 May 2019', 60000, '#GBF #Futanari #Erune', 'R-9283912', 'Paint', '123901283'),
('6028841135', 'pika lul', '5ccebb0188b68.png', 'awokaowkoaw no description', '05 May 2019', 40000, '#hot #hot_trend', 'R-592193', 'Adobe Photoshop 2001', '123901283'),
('7236562965', 'test', '5cceec9aa9851.png', 'Okawokaowkaowk wtf Hot', '05 May 2019', 9000000, '#trend2019', 'R-60668', 'Paint', '129831293'),
('7870008812', 'nemesis', '5ccfc85470901.png', 'No Description', '06 May 2019', 6787654, '#no_tags', 'R-711669', 'Paint', '192319283');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone_num` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `city`, `phone_num`) VALUES
('', 'Mada Nugraha', 'pusamania94', 'emailme@gmail.com', 'LMao Samarinda', '-190230293'),
('9123098', 'Mada Nugraha', '123123', '', 'Samarinda', '0812398129');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `order_ed`
--
ALTER TABLE `order_ed`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `id_sub` (`id_sub`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`),
  ADD KEY `usr_id` (`username`),
  ADD KEY `id_tempt` (`id_tempt`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id_tempt`),
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_ed`
--
ALTER TABLE `order_ed`
  ADD CONSTRAINT `order_ed_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `sub_kategori` (`id_sub`),
  ADD CONSTRAINT `order_ed_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_tempt`) REFERENCES `template` (`id_tempt`);

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `kategori` (`id_kat`);

--
-- Constraints for table `template`
--
ALTER TABLE `template`
  ADD CONSTRAINT `template_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `sub_kategori` (`id_sub`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
