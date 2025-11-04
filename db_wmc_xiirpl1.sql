-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2025 at 04:47 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wmc_xiirpl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dealer`
--

CREATE TABLE `tb_dealer` (
  `id_dealer` int(11) NOT NULL,
  `nama_dealer` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventori`
--

CREATE TABLE `tb_inventori` (
  `id_inventori` int(11) NOT NULL,
  `id_sepeda` int(11) NOT NULL,
  `id_dealer` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `ket_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `ket_kategori`) VALUES
(1, 'Sepeda Anak', 'Sepeda yg cocok untuk digunakan anak usia 5-8 tahun'),
(2, 'Sepeda BMX', 'Sepeda yang cocok untuk freestyle'),
(3, 'Sepeda Gunung', 'Sepeda yang cocok untuk digunakan di area perbukitan atau berbatuan, mampu menerjang track ekstreem sekalipun');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Abdul Jabbar', 'dettline', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Ilyas', 'Ily', 'c3284d0f94606de1fd2af172aba15bf3', 'admin'),
(3, 'Rafi', 'Raf', '14ff80c3516f33f7a3652bcc4772fb4c', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sepeda`
--

CREATE TABLE `tb_sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `tipe_sepeda` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sepeda`
--

INSERT INTO `tb_sepeda` (`id_sepeda`, `tipe_sepeda`, `harga`, `gambar`, `keterangan`, `id_kategori`) VALUES
(1, 'WMC Jasmine I', 400000, 'jasminewmc.jpg', 'Sepeda pertama dari wimcycle mengusut tema bunga melati dengan keindahannya', 1),
(2, 'WMC Jasmine II', 450000, 'jasmine2.jpg', 'Speda generasi ke dua dari pengembangan Jasmine', 1),
(4, 'Thor Jungle', 3200000, 'thorjungle.jpg', 'Sepeda ringan yang mampu mengajak kalian tiba di puncak gunung. Speda ini mampu beradaptasi di medan kering atau basah', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dealer`
--
ALTER TABLE `tb_dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `tb_inventori`
--
ALTER TABLE `tb_inventori`
  ADD PRIMARY KEY (`id_inventori`),
  ADD KEY `id_sepeda` (`id_sepeda`),
  ADD KEY `id_dealer` (`id_dealer`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD PRIMARY KEY (`id_sepeda`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dealer`
--
ALTER TABLE `tb_dealer`
  MODIFY `id_dealer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_inventori`
--
ALTER TABLE `tb_inventori`
  MODIFY `id_inventori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_inventori`
--
ALTER TABLE `tb_inventori`
  ADD CONSTRAINT `tb_inventori_ibfk_1` FOREIGN KEY (`id_sepeda`) REFERENCES `tb_sepeda` (`id_sepeda`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_inventori_ibfk_2` FOREIGN KEY (`id_dealer`) REFERENCES `tb_dealer` (`id_dealer`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD CONSTRAINT `tb_sepeda_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
