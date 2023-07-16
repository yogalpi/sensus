-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 19.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6
=======
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2023 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
>>>>>>> origin/main

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
<<<<<<< HEAD
-- Struktur dari tabel `hasil`
=======
-- Table structure for table `hasil`
>>>>>>> origin/main
--

CREATE TABLE `hasil` (
  `nik` varchar(16) NOT NULL,
  `jenis_tanaman` varchar(10) NOT NULL,
<<<<<<< HEAD
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`nik`, `jenis_tanaman`, `hasil`) VALUES
('3326150412020001', 'cabai', 20),
('3326150412020001', 'padi', 50),
('3326150412020001', 'singkong', 90),
('3326151210050005', 'jagung', 120),
('3326151210050005', 'semangka', 75);
=======
  `lama_tanam` int(2) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`nik`, `jenis_tanaman`, `lama_tanam`, `hasil`) VALUES
('3326150412020001', 'cabai', 0, 20),
('3326150412020001', 'padi', 0, 50),
('3326150412020001', 'singkong', 0, 90),
('3326151210050005', 'jagung', 0, 120),
('3326151210050005', 'semangka', 0, 75);
>>>>>>> origin/main

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `petani`
=======
-- Table structure for table `petani`
>>>>>>> origin/main
--

CREATE TABLE `petani` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `luas_lahan` int(11) NOT NULL
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petani`
=======
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petani`
>>>>>>> origin/main
--

INSERT INTO `petani` (`id`, `nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `luas_lahan`) VALUES
(1, '3326150412020001', 'Muhammad Said Alkhudri', 'Laki-laki', '2023-06-27', 230),
(3, '3326151210050005', 'Mas Ellon', 'Perempuan', '2023-07-15', 190);

<<<<<<< HEAD
=======
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

>>>>>>> origin/main
--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indeks untuk tabel `hasil`
=======
-- Indexes for table `hasil`
>>>>>>> origin/main
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`nik`,`jenis_tanaman`);

--
<<<<<<< HEAD
-- Indeks untuk tabel `petani`
=======
-- Indexes for table `petani`
>>>>>>> origin/main
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id`,`nik`),
  ADD UNIQUE KEY `nik` (`nik`);

--
<<<<<<< HEAD
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petani`
=======
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`jenis_tanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petani`
>>>>>>> origin/main
--
ALTER TABLE `petani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
