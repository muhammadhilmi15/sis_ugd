-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 01:18 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ugd`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_igd`
--

CREATE TABLE IF NOT EXISTS `berita_igd` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `desksripsi` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_igd`
--

INSERT INTO `berita_igd` (`id`, `judul`, `desksripsi`, `isi`, `foto`) VALUES
(1, 'Dokter IGD', 'Kumpulan Dokter IGD', 'Kumpulan Dokter IGD', '1.png'),
(2, 'Gedung IGD', 'Gedung Instalasi Gawat Darurat ini buka 24 jam', 'Gedung IGD', '2.png'),
(3, 'Kegiatan Instalasi Gawat Darurat', 'Perawatan Terhadap Pasien IGD', 'Perawatan Terhadap Pasien IGD', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE IF NOT EXISTS `tbl_dokter` (
  `ID_DOKTER` int(10) NOT NULL,
  `NM_DOKTER` varchar(45) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `ALAMAT` varchar(45) DEFAULT NULL,
  `NO_HP` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE IF NOT EXISTS `tbl_obat` (
  `ID__OBAT` int(10) NOT NULL,
  `NM_OBAT` varchar(45) DEFAULT NULL,
  `CARA_PEMAKAIAN` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `ID_PASIEN` int(11) NOT NULL,
  `NM_PASIEN` varchar(50) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(25) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(45) DEFAULT NULL,
  `NO_HP` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`ID_PASIEN`, `NM_PASIEN`, `GENDER`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `ALAMAT`, `NO_HP`) VALUES
(1, 'nindy agustina', 'P', 'Lamongan', '1996-08-01', 'Malang', '085608070217'),
(2, 'nindy agustina', 'P', 'lamongan', '2005-07-15', 'Malang', '085608070217');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` tinytext,
  `LEVEL` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rawat`
--

CREATE TABLE IF NOT EXISTS `tbl_rawat` (
  `ID_RAWAT` int(10) NOT NULL,
  `ID_DOKTER` int(10) DEFAULT NULL,
  `ID_PASIEN` int(10) DEFAULT NULL,
  `DIAGNOSA` text NOT NULL,
  `TGL_MASUK` varchar(50) DEFAULT NULL,
  `TGL_KELUAR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_igd`
--
ALTER TABLE `berita_igd`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
 ADD PRIMARY KEY (`ID_DOKTER`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
 ADD PRIMARY KEY (`ID__OBAT`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
 ADD PRIMARY KEY (`ID_PASIEN`);

--
-- Indexes for table `tbl_rawat`
--
ALTER TABLE `tbl_rawat`
 ADD PRIMARY KEY (`ID_RAWAT`), ADD KEY `FK_tbl_rawat_tbl_dokter` (`ID_DOKTER`), ADD KEY `FK_tbl_rawat_tbl_pasien` (`ID_PASIEN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_rawat`
--
ALTER TABLE `tbl_rawat`
ADD CONSTRAINT `FK_tbl_rawat_tbl_dokter` FOREIGN KEY (`ID_DOKTER`) REFERENCES `tbl_dokter` (`ID_DOKTER`),
ADD CONSTRAINT `FK_tbl_rawat_tbl_pasien` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tbl_pasien` (`ID_PASIEN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
