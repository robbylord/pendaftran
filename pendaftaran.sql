-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2019 at 12:52 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `no_pendaftaran` int(11) NOT NULL auto_increment,
  `member` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `status` enum('Belum Menikah','Menikah','Pernah Menikah') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  PRIMARY KEY  (`no_pendaftaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`no_pendaftaran`, `member`, `nama_lengkap`, `jk`, `status`, `tempat_lahir`, `tanggal_lahir`, `no_identitas`, `alamat`, `kota`, `propinsi`, `kodepos`, `pekerjaan`, `telepon`) VALUES
(56, 'Makasar', 'ayu', 'Wanita', 'Belum Menikah', 'palembang', '6 Oktober 1996', '1671074610960008', 'jln gotong royong', 'palembang', 'SULAWESI SELATAN', 30154, 'fresh graduate', '08989634754'),
(61, 'Biasa', 'M Robby Badilla', 'Pria', 'Belum Menikah', 'Palembang', '21 Agustus 1996', '16710721089600111', 'Jl Kebun bunga', 'Palembang', 'SUMATERA SELATAN', 30152, 'Fresh Graduate', '08960707xxxx');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL auto_increment,
  `email` varchar(50) character set latin1 NOT NULL,
  `username` varchar(50) character set latin1 NOT NULL,
  `password` varchar(10) character set latin1 NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `username`, `password`, `jenis_kelamin`) VALUES
(28, 'ayuoktariasari@gmail.com', 'ayu', '1234', 'Perempuan'),
(27, 'robbylord7@gmail.com', 'robby', 'robby', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_member`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `tipe`) VALUES
(1, 'Biasa'),
(2, 'Luar_Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `t_provinsi`
--

CREATE TABLE IF NOT EXISTS `t_provinsi` (
  `id_prov` int(10) default NULL,
  `nama` varchar(100) default NULL,
  KEY `id_prov` (`id_prov`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_provinsi`
--

INSERT INTO `t_provinsi` (`id_prov`, `nama`) VALUES
(1, 'DKI JAKARTA'),
(2, 'JAWA BARAT'),
(3, 'JAWA TENGAH'),
(4, 'D I YOGYAKARTA'),
(5, 'JAWA TIMUR'),
(6, 'ACEH DARUSSALAM'),
(7, 'SUMATERA UTARA'),
(8, 'SUMATERA BARAT'),
(9, 'RIAU'),
(10, 'JAMBI'),
(11, 'SUMATERA SELATAN'),
(12, 'LAMPUNG'),
(13, 'KALIMANTAN BARAT'),
(14, 'KALIMANTAN TENGAH'),
(15, 'KALIMANTAN SELATAN'),
(16, 'KALIMANTAN TIMUR'),
(17, 'SULAWESI UTARA'),
(18, 'SULAWESI TENGAH'),
(19, 'SULAWESI SELATAN'),
(20, 'SULAWESI TENGGARA'),
(21, 'MALUKU'),
(22, 'BALI'),
(23, 'NUSA TENGGARA BARAT'),
(24, 'NUSA TENGGARA TIMUR'),
(25, 'PAPUA'),
(26, 'BENGKULU'),
(27, 'MALUKU UTARA'),
(28, 'BANTEN'),
(29, 'BANGKA BELITUNG'),
(30, 'GORONTALO'),
(31, 'KEPULAUAN RIAU'),
(32, 'IRIAN JAYA BARAT'),
(33, 'SULAWESI BARAT');
