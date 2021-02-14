-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 08:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_ccm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` char(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `ktp` char(20) NOT NULL,
  `nama` char(30) NOT NULL,
  `gender` int(1) NOT NULL,
  `darah` int(1) NOT NULL,
  `ttl` char(30) NOT NULL,
  `alamat` char(100) NOT NULL,
  `kota` char(30) NOT NULL,
  `provinsi` char(50) NOT NULL,
  `kategori_lomba` int(1) NOT NULL,
  `hp` char(12) NOT NULL,
  `komunitas` char(30) DEFAULT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `ktp`, `nama`, `gender`, `darah`, `ttl`, `alamat`, `kota`, `provinsi`, `kategori_lomba`, `hp`, `komunitas`, `tgl`) VALUES
(26, '124341', '12', 1, 2, '01/02/1990', '2', '2', '2', 2, '2', '2', '0000-00-00 00:00:00'),
(27, '1', '1', 1, 2, '01/01/1990', '1', '1', '1', 1, '1', '', '2018-01-25 17:03:35'),
(28, '1', '1', 1, 2, '01/01/1990', '1', '1', '1', 1, '1', '', '2018-01-25 17:07:39'),
(29, '5', '5', 1, 2, '01/01/1990', '5', '555', '5', 2, '5', '5', '2018-01-25 18:02:54'),
(30, 'a', 'a', 1, 1, '01/01/1990', 'a', 'a', 'a', 2, 'a', 'a', '2018-01-25 18:08:33'),
(31, 'd', 'd', 2, 1, '01/01/1990', 'd', 'd', 'd', 1, 'd', 'd', '2018-01-25 18:16:43'),
(32, 'a', 'a', 2, 1, '01/01/1990', 'a', 'a', 'a', 2, 'a', 'a', '2018-01-25 18:19:30'),
(33, 'erw', 'e', 1, 1, '01/01/1990', 'e', 'e', 'e', 3, 'e', 'e', '2018-01-25 18:43:04'),
(34, '1', '2', 2, 3, '01/01/1996', 'g', 'g', 'g', 2, 'gd', 'g', '2018-01-25 20:07:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
