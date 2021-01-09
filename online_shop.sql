-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 02:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `user_admin`, `pass_admin`) VALUES
(1, 'ardha', 'ardha27', '9a22fdb17ad926f7f2d5064e85760aea'),
(2, 'tegar', 'tegar23', '9a22fdb17ad926f7f2d5064e85760aea');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `gambar_barang` varchar(200) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `id_kategori` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `gambar_barang`, `harga_barang`, `id_kategori`) VALUES
(6, 'Cireng', 'cireng.jpg', 10000, 11),
(7, 'Es Kopi Susu', 'es kopi susu.jpg', 11000, 10),
(8, 'Es Teh', 'es teh.jpg', 10000, 10),
(9, 'Kentang Goreng', 'kentang goreng.jpg', 10000, 11),
(10, 'Mie Ayam', 'mie ayam.jpg', 12500, 9),
(11, 'Pisang Goreng', 'pisang goreng.jpg', 10000, 11),
(12, 'Risol Mayo', 'risol mayo.jpg', 10000, 11),
(13, 'Spaghetti', 'spaghetti.jpg', 18000, 9),
(14, 'Thai Tea', 'thai tea.jpg', 12000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_customer` varchar(40) NOT NULL,
  `alamat_customer` text NOT NULL,
  `telp_customer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`, `telp_customer`) VALUES
(40, 'Ardha', 'Singaraja', '123123123'),
(41, 'Ardha', 'singaraja', '12344432'),
(42, 'Tegar', 'Singaraja', '21312431'),
(43, 'Ardha', 'Surabaya', '2132141341'),
(44, 'Budi', 'Bandung', '12312341'),
(45, 'Panji', 'Gianyar', '2356563254'),
(46, 'cosmos', 'Lombok', '2356563254'),
(47, 'rangga', 'Bandung', '2132141341');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(9, 'Makanan'),
(10, 'Minuman'),
(11, 'Cemilan');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(5) NOT NULL,
  `tgl_penjualan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty_penjualan` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tgl_penjualan`, `qty_penjualan`, `id_barang`, `id_customer`) VALUES
(17, '2021-01-04 04:28:53', 2, 13, 40),
(18, '2021-01-04 04:46:31', 2, 12, 41),
(19, '2021-01-05 02:55:25', 2, 9, 42),
(20, '2021-01-05 03:07:23', 2, 10, 43),
(21, '2021-01-05 04:28:58', 2, 8, 44),
(22, '2021-01-05 14:14:18', 5, 11, 45),
(23, '2021-01-08 03:36:39', 2, 10, 46),
(24, '2021-01-08 13:13:18', 2, 7, 47);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `user_user` varchar(15) NOT NULL,
  `pass_user` varchar(100) NOT NULL,
  `role` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `user_user`, `pass_user`, `role`) VALUES
(1, 'rizki', 'rizki', '9592638716b04b52fe6e041429822a79', 1),
(2, 'dava', 'dava', '9fa0a70dda901fa08bc5d4f37ecbb719', 1),
(3, 'widhi', 'widhi', '$2y$10$HUqzsXuB0Ma/xyyPdf79weDq1', 1),
(4, 'yudi', 'yudi', '$2y$10$cwFZ3qpOdhM6Q9BqESFbnuHi9QjAEmc8F2a7YPkp/g6etP91fIVHy', 1),
(5, 'kevin', 'kevin', '$2y$10$.JgpwbHRgUoqIuZjQT4mkeXwLRlc6E0a/ZBLXnlKhXDQyGOzcAUZy', 1),
(6, 'ardha', 'ardha', '$2y$10$1gtSqPKChD18KNI.6vbLjOtqu7bcbcrKYTOBh/p/.GC5i2a2laGh6', 2),
(7, 'cosmos', 'cosmos', '$2y$10$APQUS4yMH9rslGW6UQI6NOJgZI2KJtWADmBK2yrN4e6wgrbtLqELO', 1),
(8, 'carlo', 'carlo', '$2y$10$blpnHNhkjBpACY84ot/6kuh1DxUebPeL1GrBBGlYW2r/fuQ43Vjx2', 1),
(9, 'arthaka', 'arthaka', '$2y$10$.Od4TGmjwCDHL7Pi0nY.Fe3LN5gMRw6tchGUSWHRUNkPmJg63nvNO', 1),
(10, 'rangga', 'rangga', '$2y$10$tji40JYfZV4mn50Af4ixnu11/baS76UIP6t8UYVcrjpH/GfyvJlqS', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
