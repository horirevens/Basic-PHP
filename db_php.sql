-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2013 at 11:18 PM
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
('US003', 'Mariyem', 'Kediri', 'F', '2013-07-10', '1', 'Admin', '2013-07-10 22:49:16', 'Admin', '2013-07-10 23:04:15');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
