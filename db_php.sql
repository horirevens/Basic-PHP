-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2013 at 01:03 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updater` varchar(30) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `description`, `creator`, `created_at`, `updater`, `updated_at`) VALUES
('AL001', 'Juventus', 'Pesta scudetto Juventus 31', 'Admin', '2013-07-15 02:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gerindra_dpc`
--

CREATE TABLE IF NOT EXISTS `gerindra_dpc` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kota` varchar(20) NOT NULL,
  `jml_kecamatan` int(5) NOT NULL,
  `nama_walikota` varchar(40) NOT NULL,
  `nama_wakil` varchar(40) NOT NULL,
  `nama_dprd` varchar(40) NOT NULL,
  `partai_walikota` varchar(20) NOT NULL,
  `partai_wakil` varchar(20) NOT NULL,
  `partai_dprd` varchar(20) NOT NULL,
  `thn_pilkada` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gerindra_dpc`
--

INSERT INTO `gerindra_dpc` (`id`, `kota`, `jml_kecamatan`, `nama_walikota`, `nama_wakil`, `nama_dprd`, `partai_walikota`, `partai_wakil`, `partai_dprd`, `thn_pilkada`) VALUES
(1, 'KEDIRI', 26, 'HORI REVENS', 'YOGI TRISMAYANA', 'CINDY AIIRA', 'GERINDRA', 'GERINDRA', 'GERINDRA', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `gerindra_pac`
--

CREATE TABLE IF NOT EXISTS `gerindra_pac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(20) NOT NULL,
  `jml_desa` int(11) NOT NULL,
  `jml_kelurahan` int(11) NOT NULL,
  `jml_ranting` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `gerindra_pac`
--

INSERT INTO `gerindra_pac` (`id`, `kecamatan`, `jml_desa`, `jml_kelurahan`, `jml_ranting`) VALUES
(2, 'Pagu', 13, 0, 13),
(3, 'Gampengrejo', 11, 0, 11),
(4, 'Papar', 17, 0, 17),
(5, 'Gurah', 21, 0, 16),
(6, 'Ngasem', 12, 0, 12),
(7, 'Kayen Kidul', 12, 0, 10),
(8, 'Purwoasri', 23, 0, 18),
(9, 'Plemahan', 17, 0, 8),
(10, 'Pare', 10, 0, 7),
(11, 'Kunjang', 12, 0, 10),
(12, 'Badas', 8, 0, 7),
(13, 'Kepung', 10, 0, 1),
(14, 'Kandangan', 12, 0, 1),
(15, 'Puncu', 8, 0, 2),
(16, 'Wates', 18, 0, 9),
(17, 'Ngancar', 10, 0, 0),
(18, 'Plosoklaten', 15, 0, 0),
(19, 'Kras', 16, 0, 7),
(20, 'Ngadiluwih', 16, 0, 0),
(21, 'Kandat', 12, 0, 4),
(22, 'Ringinrejo', 11, 0, 11),
(23, 'Tarokan', 10, 0, 10),
(24, 'Grogol', 9, 0, 6),
(25, 'Banyakan', 9, 0, 9),
(26, 'Semen', 12, 0, 11),
(27, 'Mojo', 20, 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `gerindra_pengurus`
--

CREATE TABLE IF NOT EXISTS `gerindra_pengurus` (
  `no_ktp` varchar(20) NOT NULL,
  `no_kta` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('KETUA','WAKIL KETUA','SEKRETARIS','WAKIL SEKRETARIS','BENDAHARA','WAKIL BENDAHARA') NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jml_anggota` int(5) NOT NULL,
  `no_pemilih` varchar(20) NOT NULL,
  `jenis` enum('PAC','RANTING','DPC') NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gerindra_pengurus`
--

INSERT INTO `gerindra_pengurus` (`no_ktp`, `no_kta`, `nama`, `jabatan`, `tempat`, `tgl_lahir`, `alamat`, `kota`, `kecamatan`, `desa`, `no_telp`, `no_hp`, `email`, `jml_anggota`, `no_pemilih`, `jenis`, `datetime`) VALUES
('3506011008650007', '28216180212100665000004', 'Sukono, SE', 'KETUA', 'Kediri', '1965-06-10', 'Jl. Argo Wilis RT.3/RW.8', 'Kediri', 'Semen', 'Semen', '', '085790706392', '', 4, '', 'DPC', '2013-07-24 12:01:25'),
('3506020509760002', '28216180117050976000002', 'Abdul Rizaq, S.Ag', 'SEKRETARIS', 'Kediri', '1976-09-05', 'Dsn. Sukoanyar RT. 5/ RW. 1', 'Kediri', 'Mojo', 'Sukoanyar', '', '081335993599', '', 2, '', 'DPC', '2013-07-24 12:27:57'),
('3506020910630001', '28216180102091063000005', 'H. Bashori', 'WAKIL KETUA', 'Kediri', '1963-10-09', 'Dsn. Ngadi RT.2/RW.3', 'Kediri', 'Mojo', 'Ngadi', '', '', '', 4, '', 'DPC', '2013-07-24 12:20:27'),
('3506025401730002', '35216180117140173001588', 'Dewi Aminah, S.Ag', 'WAKIL KETUA', 'Kediri', '1973-03-07', 'Dsn. Tempusari RT.5/RW.1', 'Kediri', 'Mojo', 'Sukoanyar', '', '', '', 3, '', 'DPC', '2013-07-24 12:25:38'),
('3506030703730003', '28216180501070373000010', 'Witoyo', 'WAKIL KETUA', 'Grobogan', '1973-03-07', 'Jemekan Timur RT.10/RW.3', 'Kediri', 'Ringinrejo', 'Jemekan', '', '085730028672', '', 2, '', 'DPC', '2013-07-24 12:23:25'),
('3506060405550005', '28216180713405650019161', 'Edi Santoso', 'WAKIL KETUA', 'Kediri', '1955-05-04', 'Dsn. Takenuwung RT.45/RW.12', 'Kediri', 'Wates', 'Sumberagung', '', '', '', 4, '', 'DPC', '2013-07-24 12:18:39'),
('3506062409600002', '28216180702409690000008', 'Antonius Edi Purwanto', 'WAKIL KETUA', 'Kediri', '1969-09-24', 'Dsn. Tawang RT.1/RW.1', 'Kediri', 'Wates', 'Tawang', '', '', '', 2, '', 'DPC', '2013-07-24 12:16:36'),
('3506110403550002', '28216182010040355000048', 'Sutrisno', 'WAKIL KETUA', 'Kediri', '1955-03-04', 'Dsn. Sitimerto RT. 1/RW. 1', 'Kediri', 'Pagu', 'Sitimerto', '', '', '', 4, '', 'PAC', '2013-07-24 14:18:50'),
('3506112002650002', '28216182010200265000017', 'Rusdianto', 'KETUA', 'Kediri', '1965-02-20', 'Dsn. Sitimerto RT. 2/RW. 1', 'Kediri', 'Pagu', 'Sitimerto', '', '', '', 3, '', 'DPC', '2013-07-24 14:11:42'),
('3506112106700003', '28216182001210670001543', 'Didit Presijanto', 'WAKIL KETUA', 'Kediri', '1970-06-21', 'Bulupasar RT. 1/RW. 2', 'Kediri', 'Pagu', 'Bulupasar', '', '', '', 3, '', 'PAC', '2013-07-24 14:15:15'),
('3506113012720002', '28216182510301272000049', 'Sri Mumpuni', 'WAKIL KETUA', 'Kediri', '1972-12-30', 'Dsn. Sitimerto RT. 2/RW. 1', 'Kediri', 'Pagu', 'Sitimerto', '', '', '', 3, '', 'PAC', '2013-07-24 14:22:03'),
('3506114501710004', '28216182010050171000047', 'Siti Alfiyah', 'BENDAHARA', 'Kediri', '1971-01-05', 'Jl. Merto RT. 1/RW. 1', 'Kediri', 'Pagu', 'Sitimerto', '', '', '', 3, '', 'PAC', '2013-07-24 14:28:05'),
('3506115001800006', '28216182003100180000050', 'Sunarni', 'WAKIL BENDAHARA', 'Kediri', '1980-01-10', 'Dsn. Kambingan RT. 3/RW. 2', 'Kediri', 'Pagu', 'Kambingan', '', '', '', 3, '', 'PAC', '2013-07-24 14:31:11'),
('3506115303600004', '28216182010130780001602', 'Hj. Tuti Harini', 'WAKIL BENDAHARA', 'Kediri', '1980-07-13', 'Dsn. Sitimerto RT. 2/RW. 2', 'Kediri', 'Pagu', 'Sitimerto', '', '', '', 3, '', 'DPC', '2013-07-24 14:10:11'),
('3506116307700004', '28216182201123077000051', 'Sri Yuliani', 'BENDAHARA', 'Kediri', '1970-07-23', 'Kauman RT. 3/RW. 2', 'Kediri', 'Pagu', 'Pagu', '', '', '', 3, '', 'PAC', '2013-07-24 14:34:05'),
('3506121502680004', '28216182206150268000029', 'John Palako', 'WAKIL SEKRETARIS', 'Kediri', '1968-02-15', 'Jl. Airlangga RT. 1/RW. 3', 'Kediri', 'Gampengrejo', 'Sukorejo', '', '', '', 3, '', 'DPC', '2013-07-24 12:35:37'),
('3506206108720002', '28216182503210872001603', 'Eni Supriati, SE', 'WAKIL SEKRETARIS', 'Kediri', '1972-08-21', 'Dsn. Josaren RT. 2/RW. 1', 'Kediri', 'Tarokan', 'Kalirong', '', '081359662208', '', 2, '', 'DPC', '2013-07-24 12:29:16'),
('3506212525730004', '25216181605250573000006', 'Anwar Zainudin, S.Pd', 'WAKIL KETUA', 'Kediri', '1973-05-15', 'Balong Jeruk RT.3/RW.1', 'Kediri', 'Kunjang', 'Balong Jeruk', '', '081259276732', '', 2, '', 'DPC', '2013-07-24 12:12:26'),
('3506215027000001', '28216182103150270001719', 'Suraji', 'WAKIL BENDAHARA', 'Kediri', '1970-02-15', 'Dsn. Bolo RT. 2/RW. 1', 'Kediri', 'Kayen Kidul', 'Senden', '', '081359401630', '', 2, '', 'DPC', '2013-07-24 12:41:26'),
('3506222301730004', '38216182307230173000001', 'Arief Junaidi', 'KETUA', 'Kediri', '1973-01-23', 'Dsn. Jabon Tengah RT.2/RW.4', 'Kediri', 'Banyakan', 'Jabon', '', '081359075444', '', 2, '', 'DPC', '2013-07-24 11:57:52'),
('3506246005530001', '28216182102200553001587', 'Sukarmini', 'WAKIL KETUA', 'Kediri', '1953-05-20', 'Dsn. Bangsongan', 'Kediri', 'Kayen Kidul', 'Bangsongan', '', '', '', 4, '', 'DPC', '2013-07-24 12:14:49'),
('3506254502700001', '28216182205050270000003', 'Siti Nuriyah, S.Pd', 'BENDAHARA', 'Kediri', '1970-02-05', 'Dsn. Paron II RT. 15/RW. 6', 'Kediri', 'Gampengrejo', 'Paron', '', '081259384690', '', 3, '', 'DPC', '2013-07-24 12:38:07'),
('3571016003840001', '28216160108200384002202', 'Nias Damayanti', 'WAKIL KETUA', 'Kediri', '1984-03-20', 'Perum Mojoroto Indah Blok F RT.43/RW.11', 'Kediri', 'Mojoroto', 'Mojoroto', '', '', '', 2, '', 'DPC', '2013-07-24 12:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `gerindra_ranting`
--

CREATE TABLE IF NOT EXISTS `gerindra_ranting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desa` varchar(20) NOT NULL,
  `jml_rw` int(11) NOT NULL,
  `jml_anak_ranting` int(11) NOT NULL,
  `jml_tps` int(11) NOT NULL,
  `jml_dps` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gerindra_ranting`
--

INSERT INTO `gerindra_ranting` (`id`, `desa`, `jml_rw`, `jml_anak_ranting`, `jml_tps`, `jml_dps`) VALUES
(1, 'KALIOMBO', 6, 3, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` varchar(10) NOT NULL,
  `album_id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uploader` varchar(30) NOT NULL,
  `uploaded_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `album_id` (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `album_id`, `name`, `uploader`, `uploaded_at`) VALUES
('PH001', 'AL001', 'juventus2.jpg', 'Admin', '2013-07-16 07:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `dob` date NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  `creator` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updater` varchar(30) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `gender`, `dob`, `active`, `creator`, `created_at`, `updater`, `updated_at`) VALUES
('US001', 'Hori Revens', 'Perum Bumi Asri E-06 Kaliombo - Kediri', 'M', '1991-09-18', '1', 'Admin', '2013-07-10 09:00:00', '', '0000-00-00 00:00:00'),
('US002', 'Cindy Aiira', 'Ds. Sumberejo Kec. Kandat Kab. Kediri', 'F', '1990-11-20', '1', 'Admin', '2013-07-10 12:21:05', 'Admin', '2013-07-10 21:53:00'),
('US003', 'Mariyem', 'Kediri', 'F', '2013-07-10', '1', 'Admin', '2013-07-10 22:49:16', 'Admin', '2013-07-10 23:04:15'),
('US004', 'Jono', 'Kediri', 'M', '2013-07-08', '1', 'Admin', '2013-07-10 23:35:20', '', '0000-00-00 00:00:00'),
('US005', 'Someone', '', 'M', '0000-00-00', '1', 'Admin', '2013-07-15 12:42:26', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', '2013-07-10 08:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
