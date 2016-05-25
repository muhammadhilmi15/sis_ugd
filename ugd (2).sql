-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 09:17 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita_igd`
--

CREATE TABLE `tbl_berita_igd` (
  `ID` int(11) NOT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `DESKRIPSI` varchar(50) NOT NULL,
  `ISI` varchar(50) NOT NULL,
  `FOTO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita_igd`
--

INSERT INTO `tbl_berita_igd` (`ID`, `JUDUL`, `DESKRIPSI`, `ISI`, `FOTO`) VALUES
(1, 'Dokter IGD', 'Kumpulan Dokter IGD', 'Kumpulan Dokter IGD', '1.png'),
(2, 'Gedung IGD', 'Gedung Instalasi Gawat Darurat ini buka 24 jam', 'Gedung IGD', '2.png'),
(3, 'Kegiatan Instalasi Gawat Darurat', 'Perawatan Terhadap Pasien IGD', 'Perawatan Terhadap Pasien IGD', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosa`
--

CREATE TABLE `tbl_diagnosa` (
  `id_diagnosa` int(10) NOT NULL,
  `nama_diagnosa` varchar(50) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diagnosa`
--

INSERT INTO `tbl_diagnosa` (`id_diagnosa`, `nama_diagnosa`, `keterangan`) VALUES
(1, 'Diabetes', 'Penyakit ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `ID_DOKTER` int(10) NOT NULL,
  `NM_DOKTER` varchar(45) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `ALAMAT` varchar(45) DEFAULT NULL,
  `NO_HP` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`ID_DOKTER`, `NM_DOKTER`, `GENDER`, `ALAMAT`, `NO_HP`) VALUES
(1, 'Hilmi', 'L', 'Sumbersari', '09982913123'),
(2, 'Nindi', 'P', 'Kalijaga', '089662254718'),
(3, 'Riza', 'P', 'Gajayana', '08929213132');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_obat` int(10) NOT NULL,
  `NM_OBAT` varchar(45) DEFAULT NULL,
  `CARA_PEMAKAIAN` varchar(45) DEFAULT NULL,
  `STOK` int(10) DEFAULT NULL,
  `id_diagnosa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id_obat`, `NM_OBAT`, `CARA_PEMAKAIAN`, `STOK`, `id_diagnosa`) VALUES
(1, 'Paramex', 'Minum 3 x 1', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `ID_PASIEN` int(11) NOT NULL,
  `NM_PASIEN` varchar(50) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(25) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(45) DEFAULT NULL,
  `NO_HP` varchar(12) DEFAULT NULL,
  `ID_RAWAT` int(10) DEFAULT NULL,
  `ID_DOKTER` int(10) DEFAULT NULL,
  `ID_DIAGNOSA` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`ID_PASIEN`, `NM_PASIEN`, `GENDER`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `ALAMAT`, `NO_HP`, `ID_RAWAT`, `ID_DOKTER`, `ID_DIAGNOSA`) VALUES
(1, 'nindy agustina', 'P', 'Lamongan', '1996-08-01', 'Malang', '085608070217', 1, 1, 1),
(2, 'nindy agustina', 'P', 'lamongan', '2005-07-15', 'Malang', '085608070217', NULL, NULL, NULL),
(3, 'Hilmi', 'L', 'Makassar', '1996-11-15', 'Jln. Sumbersari', '089662254718', NULL, NULL, NULL),
(4, 'Faris', 'L', 'Kediri', '1996-01-14', 'Joyogrand', '089221312312', NULL, NULL, NULL),
(5, 'Ahmad', 'L', 'Malang', '1996-02-01', 'Malang', '089912313213', NULL, NULL, NULL),
(6, 'Riza', 'P', 'Jombang', '1997-04-04', 'Malang', '0991231313', NULL, NULL, NULL),
(7, 'Burhan', 'L', 'Makassar', '1996-04-02', 'Malang', '0090123131', NULL, NULL, NULL),
(8, 'Achmad', 'L', 'Lamongan', '1995-03-05', 'asdadas', '090080808890', NULL, NULL, NULL),
(9, 'Admin', 'L', 'Makassar', '1997-05-03', 'Mnajsndasd', '089221312312', NULL, NULL, NULL),
(10, 'Burhan', 'L', 'Malang', '1996-08-05', 'Maskdad', '0980129312', NULL, NULL, NULL),
(11, 'Bil', 'L', 'Malang', '1996-07-18', 'Sumbersari', '08929112122', NULL, NULL, NULL),
(12, 'Fian', 'L', 'Magelang', '1996-05-06', 'Kalijaga', '082123123123', NULL, NULL, NULL),
(13, 'Dika', 'L', 'Madura', '1996-04-06', 'Sumbersari', '02312388821', NULL, NULL, NULL),
(14, 'Insan', 'P', 'Malang', '1995-05-09', 'Sumbersari', '0892123123', NULL, NULL, NULL),
(15, 'Rina', 'P', 'Makassar', '1993-04-05', 'Kalijaga', '08926551231', NULL, NULL, NULL),
(16, 'Coba', 'P', 'Kediri', '1992-04-04', 'Jln. Sumbersari', '0991231313', NULL, NULL, NULL),
(17, 'Dewi', 'P', 'Solo', '1996-04-04', 'Coba', '08212312313', NULL, NULL, NULL),
(18, 'Reza', 'L', 'Malang', '1997-04-08', 'Joyogrand', '08213123', NULL, NULL, NULL),
(19, 'Grace', 'P', 'Palu', '1996-03-07', 'Rawi', '089721312313', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` tinytext,
  `LEVEL` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`USERNAME`, `PASSWORD`, `LEVEL`) VALUES
('dokter1', 'dokter1', '1'),
('admin1', 'admin1', '2'),
('apoteker1', 'apoteker1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rawat`
--

CREATE TABLE `tbl_rawat` (
  `ID_RAWAT` int(10) NOT NULL,
  `Nama_Perawatan` varchar(50) DEFAULT NULL,
  `ID_DOKTER` int(10) DEFAULT NULL,
  `ID_PASIEN` int(10) DEFAULT NULL,
  `ID_DIAGNOSA` int(10) DEFAULT NULL,
  `TGL_MASUK` date DEFAULT NULL,
  `TGL_KELUAR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rawat`
--

INSERT INTO `tbl_rawat` (`ID_RAWAT`, `Nama_Perawatan`, `ID_DOKTER`, `ID_PASIEN`, `ID_DIAGNOSA`, `TGL_MASUK`, `TGL_KELUAR`) VALUES
(1, 'INAP', 1, 7, 1, '2016-05-26', '2016-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `ID_OBAT` int(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `ID_OBAT`, `status`, `jumlah`) VALUES
(1, 1, 'OBAT_KELUAR', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`ID_DOKTER`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `fk_diagnosa1` (`id_diagnosa`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`ID_PASIEN`),
  ADD KEY `fk_rawat` (`ID_RAWAT`),
  ADD KEY `fk_dokter2` (`ID_DOKTER`),
  ADD KEY `fk_diagnosa2` (`ID_DIAGNOSA`);

--
-- Indexes for table `tbl_rawat`
--
ALTER TABLE `tbl_rawat`
  ADD PRIMARY KEY (`ID_RAWAT`),
  ADD KEY `FK_tbl_rawat_tbl_dokter` (`ID_DOKTER`),
  ADD KEY `FK_tbl_rawat_tbl_pasien` (`ID_PASIEN`),
  ADD KEY `fk_diagnosa` (`ID_DIAGNOSA`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_obat2` (`ID_OBAT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `ID_DOKTER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD CONSTRAINT `fk_diagnosa1` FOREIGN KEY (`id_diagnosa`) REFERENCES `tbl_diagnosa` (`id_diagnosa`);

--
-- Constraints for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD CONSTRAINT `fk_diagnosa2` FOREIGN KEY (`ID_DIAGNOSA`) REFERENCES `tbl_diagnosa` (`id_diagnosa`),
  ADD CONSTRAINT `fk_dokter2` FOREIGN KEY (`ID_DOKTER`) REFERENCES `tbl_dokter` (`ID_DOKTER`),
  ADD CONSTRAINT `fk_rawat` FOREIGN KEY (`ID_RAWAT`) REFERENCES `tbl_rawat` (`ID_RAWAT`);

--
-- Constraints for table `tbl_rawat`
--
ALTER TABLE `tbl_rawat`
  ADD CONSTRAINT `FK_tbl_rawat_tbl_dokter` FOREIGN KEY (`ID_DOKTER`) REFERENCES `tbl_dokter` (`ID_DOKTER`),
  ADD CONSTRAINT `FK_tbl_rawat_tbl_pasien` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tbl_pasien` (`ID_PASIEN`),
  ADD CONSTRAINT `fk_diagnosa` FOREIGN KEY (`ID_DIAGNOSA`) REFERENCES `tbl_diagnosa` (`id_diagnosa`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `fk_obat2` FOREIGN KEY (`ID_OBAT`) REFERENCES `tbl_obat` (`id_obat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
