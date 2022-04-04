-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 01:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_perwalian`
--

CREATE TABLE `jadwal_perwalian` (
  `id_jadwal` int(225) NOT NULL,
  `angkatan` varchar(225) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `jam` varchar(225) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_perwalian`
--

INSERT INTO `jadwal_perwalian` (`id_jadwal`, `angkatan`, `tanggal`, `jam`, `link`) VALUES
(1, '2018', '2022-03-15', '16:29', 'https://meet.google.com/yuu-kxhs-txa'),
(2, '2019', '2022-03-25', '17:02', 'https://meet.google.com/yddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `perwalian`
--

CREATE TABLE `perwalian` (
  `id_perwalian` int(225) NOT NULL,
  `nidn` varchar(225) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perwalian`
--

INSERT INTO `perwalian` (`id_perwalian`, `nidn`, `nim`, `catatan`) VALUES
(14, '435435435', '72180222', NULL),
(15, '435435435', '72180225', NULL),
(16, '45456456', '72180299', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `nim` varchar(225) DEFAULT NULL,
  `angkatan` varchar(255) DEFAULT NULL,
  `krs_prediksi` varchar(255) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `nidn` int(225) DEFAULT NULL,
  `no_hp` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `roles`, `nim`, `angkatan`, `krs_prediksi`, `status`, `nidn`, `no_hp`) VALUES
(1, 'yeyen', 'yeyen@si.ukdw.ac.id', 'yeyen', '1', '72180222', '2018', NULL, NULL, NULL, '984576456'),
(2, 'dosen', 'dosen@staff.ukdw.ac.id', 'dosen', '2', NULL, NULL, NULL, NULL, 435435435, '0846465545'),
(3, 'admin', 'admin@staff.ukdw.ac.id', 'admin', '3', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'dito', 'dito@gmail', 'dito', '1', '72180225', '2018', NULL, NULL, NULL, NULL),
(5, 'yose', 'yose@gmail', 'yose', '1', '72180299', '2019', NULL, NULL, NULL, NULL),
(8, 'wimi', 'wimi@staff', 'wimi', '2', NULL, NULL, NULL, NULL, 45456456, '23543345345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_perwalian`
--
ALTER TABLE `jadwal_perwalian`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`id_perwalian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_perwalian`
--
ALTER TABLE `jadwal_perwalian`
  MODIFY `id_jadwal` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id_perwalian` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
