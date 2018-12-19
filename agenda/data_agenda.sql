-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2011 at 03:11 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbagenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_agenda`
--

CREATE TABLE IF NOT EXISTS `data_agenda` (
  `tgl_agenda` varchar(11) NOT NULL,
  `agenda` varchar(150) NOT NULL,
  PRIMARY KEY (`tgl_agenda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_agenda`
--

INSERT INTO `data_agenda` (`tgl_agenda`, `agenda`) VALUES
('2-08-2011', '<li>Hari Pembuatan Program Kalender Agenda My Dream of Web</li>'),
('17-08-2011', '<li>Hari Kemerdekaan RI ke-66</li>'),
('5-03-2012', '<li>Hari Ulang Tahunku</li>'),
('25-05-2012', '<li>Hari Ulang Tahun Daffa</li>'),
('1-01-2012', '<li>Tahun Baru 2012</li>'),
('30-08-2011', '<li>Idul Fitri 1432 H</li><li>Cuti Bersama</li><li>Lebaran</li>'),
('31-08-2011', '<li>Idul Fitri 1432 H</li><li>Cuti Bersama</li><li>Lebaran</li>'),
('6-11-2011', '<li>Idul Adha 1432 H</li>'),
('1-08-2011', '<li>Hari Pertama Bulan Ramadhan 1432 H</li>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
