-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 09:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpolsek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_polisi`
--

CREATE TABLE IF NOT EXISTS `tbl_polisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `pangkat` varchar(30) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `status_kasus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_polisi`
--

INSERT INTO `tbl_polisi` (`id`, `nrp`, `nama_lengkap`, `pangkat`, `jabatan`, `alamat`, `status_kasus`) VALUES
(1, '80040860', 'EKO BUDIANTO', 'Bripka', 'Kanit Intel', 'Pulau Raja Pekan', 'Selesai'),
(2, '89030022', 'MUSAHIR SH', 'BRIPTU', 'Kanit Intel', 'Aek Loba', 'Belum Selesai'),
(3, '80010129', 'DODY TRIONO', 'IPTU', 'Kanit Intel', 'Pulau Rakyat', 'Selesai'),
(4, '85064882', 'DANDI', 'BRIGADIR', 'Kanit Intel', 'Pulau Raja', 'Belum Selesai'),
(5, '86050774', 'HENDRO WICAKSONO', 'BRIGADIR', 'Kanit Intel', 'Sei Piring', 'Selesai'),
(6, '81061283', 'SLAMET SH', 'BRIGADIR', 'Kanit Intel', 'Aek Kuasan', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahanan`
--

CREATE TABLE IF NOT EXISTS `tbl_tahanan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nrp` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `lama_tahanan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Dumping data for table `tbl_tahanan`
--

INSERT INTO `tbl_tahanan` (`id`, `nrp`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `tgl_masuk`, `tgl_keluar`, `lama_tahanan`) VALUES
(1, '80040860', 'KURDIN AMDA', 'Laki-laki', 'Aek Loba Pekan', '2020-01-31', '2020-02-15', '15 hari'),
(2, '89030022', 'DANANG IRWAN', 'Laki-laki', 'Bandar Pulau', '2020-02-05', '2020-03-05', '30 Hari'),
(3, '80010129', 'URDIN', 'Laki-laki', 'Persatuan', '2020-02-20', '2020-03-07', '10 Hari'),
(4, '85064882', 'JIDUN ISLA', 'Laki-laki', 'Padang Mahondang', '2020-02-20', '2020-02-10', '20 Hari'),
(5, '86050774', 'YAHYA TUYA', 'Laki-laki', 'Aek Loba', '2020-02-20', '2020-03-07', '21 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama`, `email`, `level`, `keterangan`) VALUES
('admin', '31d0c77b767b875068ccbf49be0a8118', 'Nurul Elsa Putri', 'putrielsa2803@gmail.com', 1, 'Staf Intel'),
('admin2', '6dde2025b86839a47d1ab15b5bbb8689', 'indah yulia sari sitorus', 'sitorusindah@gmail.com', 1, 'Staf Umum'),
('admin3', 'fcddbc2c28cfc9df7063b5d658108b8b', 'sri devi dali ansa', 'sridevi@gmail.com', 1, 'Staf Intel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
