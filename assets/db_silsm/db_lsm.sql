-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2014 at 04:20 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` char(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
('A001', 'Fernalia', 'fernaliahalim', '12345'),
('A002', 'Selyz Darani Harahap', 'selyz.harahap', 'selyz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpenempatan`
--

CREATE TABLE IF NOT EXISTS `tbl_detailpenempatan` (
  `id_detailpenempatan` char(4) NOT NULL,
  `id_penempatan` char(4) NOT NULL,
  `id_pengajar` char(4) NOT NULL,
  PRIMARY KEY (`id_detailpenempatan`),
  KEY `id_penempatan` (`id_penempatan`),
  KEY `id_pengajar` (`id_pengajar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detailpenempatan`
--

INSERT INTO `tbl_detailpenempatan` (`id_detailpenempatan`, `id_penempatan`, `id_pengajar`) VALUES
('K001', 'L001', 'P001'),
('K002', 'L001', 'P002'),
('K003', 'L001', 'P003'),
('K004', 'L001', 'P004'),
('K005', 'L001', 'P005'),
('K006', '', 'P006'),
('K007', '', 'P007'),
('K008', '', 'P007'),
('K009', 'L002', 'P007');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailsponsor`
--

CREATE TABLE IF NOT EXISTS `tbl_detailsponsor` (
  `id_detailsponsor` char(4) NOT NULL,
  `id_sponsor` char(4) NOT NULL,
  `id_penempatan` char(4) NOT NULL,
  PRIMARY KEY (`id_detailsponsor`),
  KEY `id_sponsor` (`id_sponsor`),
  KEY `id_penempatan` (`id_penempatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detailsponsor`
--

INSERT INTO `tbl_detailsponsor` (`id_detailsponsor`, `id_sponsor`, `id_penempatan`) VALUES
('D001', 'S001', 'L001'),
('D002', 'S002', ''),
('D003', 'S003', 'L004');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE IF NOT EXISTS `tbl_hasil` (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengajar` char(4) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hasil`),
  KEY `id_pengajar` (`id_pengajar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`id_hasil`, `id_pengajar`, `nilai`) VALUES
(13, 'P007', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontakkami`
--

CREATE TABLE IF NOT EXISTS `tbl_kontakkami` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontakkami`
--

INSERT INTO `tbl_kontakkami` (`nama`, `email`, `pesan`) VALUES
('Fernalia', 'fernalia.h@gmail.com', 'Hai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penempatan`
--

CREATE TABLE IF NOT EXISTS `tbl_penempatan` (
  `id_penempatan` char(4) NOT NULL,
  `lokasi` varchar(25) NOT NULL,
  PRIMARY KEY (`id_penempatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penempatan`
--

INSERT INTO `tbl_penempatan` (`id_penempatan`, `lokasi`) VALUES
('L001', 'Aceh Utara'),
('L002', 'Kab. Bengkalis'),
('L003', 'Kab. Musi Banyuasin'),
('L004', 'Kab. Muara Enim'),
('L005', 'Kab. Tulang Bawang Barat'),
('L006', 'Kab. Lebak'),
('L007', 'Kab. Bimo					\r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajar`
--

CREATE TABLE IF NOT EXISTS `tbl_pengajar` (
  `id_pengajar` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `ttl` date NOT NULL,
  `jenkel` char(1) NOT NULL,
  `foto` blob NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `strata` char(2) NOT NULL,
  `ipk` float NOT NULL,
  `tugas_akhir` varchar(100) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id_pengajar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengajar`
--

INSERT INTO `tbl_pengajar` (`id_pengajar`, `nama`, `username`, `password`, `ttl`, `jenkel`, `foto`, `nomor_hp`, `alamat`, `universitas`, `fakultas`, `jurusan`, `strata`, `ipk`, `tugas_akhir`, `status`) VALUES
('P001', 'Fernalia', 'fernalia', '110894', '1994-08-11', 'P', '', '089943245600', 'Sukabumi', 'Institut Pertanian Bogor', 'Diploma', 'Manajemen Informatika', 'D3', 3.91, 'Android', 'Calon'),
('P002', 'Selyz Darani Harahap', 'selyz.harahap', 'selyz', '1994-05-01', 'P', '', '085777777111', 'Sukabumi', 'Institut Pertanian Bogor', 'Diploma', 'Manajemen Informatika', 'D3', 3.8, 'Sistem Informasi', 'Calon'),
('P003', 'dika', 'dika', 'dika', '1994-08-11', 'L', '', '08986165847', 'cimahi', 'ipb', 'komputer', 'informatika', 'd3', 4, 'tampan', 'Pengajar'),
('P004', 'Nisful Lailatul Nikmah', 'nila.nisful', 'nilanila', '1994-08-11', 'P', '', '085777777111', 'Ponorogo', 'Institut Pertanian Bogor', 'Diploma', 'Manajemen Informatika', 'D3', 3.8, 'Algoritma Dasar', 'Calon'),
('P005', 'nila nisful nikmah', 'nila', '1234', '1994-08-11', 'P', '', '085790329655', 'bogor', 'ipb', 'diploma', 'informatika', 'D3', 3.91, 'Website', 'Calon'),
('P006', 'Dea Abdilah', 'deabdilah', '1234', '1994-06-24', 'L', '', '089943245600', 'Subang Jawabarat', 'Universitas Bandung', 'Ilmu Komputer', 'Manajemen Informatika', 'S1', 4, 'bdhsfa', 'Calon'),
('P007', 'Andika Wiryawan', 'andikajelek', 'andika', '1994-08-05', 'L', '', '089999999999', 'Cimahi', 'Institut Pertanian Bogor', 'Diploma', 'Manajemen Informatika', 'D3', 3.78, 'Sistem Informasi', 'Calon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sponsor`
--

CREATE TABLE IF NOT EXISTS `tbl_sponsor` (
  `id_sponsor` char(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `jenis_sponsor` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sponsor`
--

INSERT INTO `tbl_sponsor` (`id_sponsor`, `nama`, `alamat`, `no_telepon`, `jenis_sponsor`) VALUES
('S001', 'Garuda Indonesia', 'Bogor Utara', '0251-100111', 'Dana'),
('S002', 'Indofood', 'Jakarta', '021-4567454', 'Bahan Pokok'),
('S003', 'PT.Lion Star', 'Jakarta Timur', '021-4567000', 'Barang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tes`
--

CREATE TABLE IF NOT EXISTS `tbl_tes` (
  `id_tes` varchar(4) NOT NULL,
  `nomer` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `jawaban` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tes`
--

INSERT INTO `tbl_tes` (`id_tes`, `nomer`, `soal`, `a`, `b`, `c`, `d`, `jawaban`) VALUES
('T001', 1, 'Kumpulan dari kata adalah?', 'Karakter', 'Kalimat', 'Paragraf', 'Wacana', 'b'),
('T001', 2, 'Abad ke-8 di Cina, Korea, dan Jepang telah dikenal cara mencetak dengan blok kayu disebut dengan?', 'woodcut', 'wood', 'cuting', 'cut wood', 'a'),
('T001', 3, 'Siapa penemu sistem cetak menggunakan huruf tunggal yang diukirkan pada kayu?', 'Newton', 'Johanes Gutenberg', 'Hokusai', 'Graham Bell', 'b'),
('T001', 4, 'Cara pembuatan klise diantaranya adalah?', 'Manual', 'Reprografi', 'Digital', 'Semuanya benar', 'd'),
('T001', 5, 'Klise halftoones disebut juga dengan?', 'Klise Negatif', 'Klise Garis Bawah', 'Klise Nada Lengkap', 'Klise Kombinasi Garis dan Raster', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tes2`
--

CREATE TABLE IF NOT EXISTS `tbl_tes2` (
  `id_tes` varchar(4) NOT NULL,
  `nama_tes` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tes`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tes2`
--

INSERT INTO `tbl_tes2` (`id_tes`, `nama_tes`) VALUES
('T001', 'Tes Online Gaul');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
