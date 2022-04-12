-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 12:49 AM
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
  `nidn` varchar(255) DEFAULT NULL,
  `angkatan` varchar(225) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `jam` varchar(225) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_perwalian`
--

INSERT INTO `jadwal_perwalian` (`id_jadwal`, `nidn`, `angkatan`, `tanggal`, `jam`, `link`) VALUES
(13, '435435435', '2018', '2022-03-27', '03:13', 'https://meet.google.com/yuu-kxhs-txa'),
(15, '123456789', '2019', '2022-05-03', '03:56', 'https://meet.google.com/yuu-kxhs-txa'),
(16, '657657657', '2020', '2022-04-20', '03:56', 'https://meet.google.com/yuu-kxhs-txa');

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
(25, '435435435', '72180222', NULL),
(26, '657657657', '72180225', NULL),
(27, '123456789', '7210212', NULL);

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
  `status_perwalian` int(2) DEFAULT NULL,
  `nidn` int(225) DEFAULT NULL,
  `pj_angkatan` varchar(255) DEFAULT NULL,
  `status_jp` int(2) DEFAULT NULL,
  `no_hp` varchar(225) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `roles`, `nim`, `angkatan`, `krs_prediksi`, `status_perwalian`, `nidn`, `pj_angkatan`, `status_jp`, `no_hp`, `profile`) VALUES
(2, 'dosen', 'dosen@staff.ukdw.ac.id', 'dosen', '2', NULL, NULL, NULL, NULL, 435435435, '2018', 1, NULL, '12_-Wimmie5.png'),
(3, 'admin', 'admin@staff.ukdw.ac.id', 'admin', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'bu yetli', 'yetli@staff.ukdw.ac.id', 'yetli', '2', NULL, NULL, NULL, NULL, 123456789, '2020', 1, 'uyuyuyuyu', '5_-Yetli-Oslan9.png'),
(19, 'Argo', 'admin@si.ukdw.ac.id', 'argo', '2', NULL, NULL, NULL, NULL, 657657657, '2019', 1, '34456456', '5_-Yetli-Oslan10.png'),
(33, 'yeyen', 'yeyen@si.ukdw.ac.id', 'yeyen', '1', '72180222', '2018', NULL, NULL, NULL, NULL, NULL, '9084357', NULL),
(34, 'dito', 'ditoadriel@gmail.com', 'dito', '1', '72180225', '2019', NULL, NULL, NULL, NULL, NULL, '43543543', NULL),
(35, 'ruendi', 'ruendi@gmail', 'ruendi', '1', '7210212', '2020', NULL, NULL, NULL, NULL, NULL, '456456456', NULL);

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
  MODIFY `id_jadwal` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id_perwalian` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
