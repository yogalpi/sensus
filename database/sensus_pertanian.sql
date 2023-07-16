-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2023 at 12:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensus_pertanian`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `nik` varchar(16) NOT NULL,
  `jenis_tanaman` varchar(10) NOT NULL,
  `lama_tanam` int(2) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`nik`, `jenis_tanaman`, `lama_tanam`, `hasil`) VALUES
('12', 'jagung', 3, 20),
('12', 'padi', 3, 10),
('14', 'cabai', 3, 0),
('14', 'padi', 3, 0),
('14', 'semangka', 3, 0),
('34', 'cabai', 3, 323),
('34', 'padi', 3, 122),
('45', 'jagung', 3, 80),
('45', 'semangka', 3, 55),
('45', 'singkong', 6, 90),
('54', 'cabai', 3, 70),
('54', 'semangka', 3, 90),
('70', 'jagung', 3, 50),
('70', 'singkong', 6, 45),
('76', 'jagung', 3, 60),
('76', 'singkong', 6, 95);

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `luas_lahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id`, `nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `luas_lahan`) VALUES
(12, '14', 'q', 'Laki-laki', '2023-06-27', 40),
(35, '12', 'Owi', 'Laki-laki', '2023-07-11', 12),
(37, '54', 'q', 'Laki-laki', '2023-07-12', 45),
(38, '70', 'r', 'Perempuan', '2023-06-28', 60),
(39, '45', 't', 'Laki-laki', '2023-07-11', 45),
(45, '34', 'g', 'Laki-laki', '2023-07-19', 455),
(46, '76', 'must ellon', 'Laki-laki', '2023-06-28', 450);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `jenis_tanaman` varchar(10) NOT NULL,
  `lama_tanam` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`jenis_tanaman`, `lama_tanam`) VALUES
('cabai', 3),
('jagung', 3),
('padi', 3),
('semangka', 3),
('singkong', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`nik`,`jenis_tanaman`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id`,`nik`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`jenis_tanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
