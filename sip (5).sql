-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 11:21 AM
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(100) NOT NULL,
  `nama_dosen` varchar(225) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `nidn`, `email`, `no_hp`) VALUES
(1, 'Gabriel Indra Widi Tamtama, S.Kom., M.Kom.', '9348345', 'sdjfsdkfb', '45645'),
(2, 'Drs. Wimmie Handiwidjojo, MIT', '11111111', 'sdfdsf', '345'),
(3, 'Yetli Oslan, S.Kom., M.T', '222222222', 'sdfsdf', '54645'),
(4, 'Drs. Jong Jek Siang, M.Sc.', '444444444', 'dsfsdf', '45654');

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
(19, '9348345', '2001', '2022-04-12', '19:17', 'https://meet.google.com/yuu-kxhs-txa');

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
(32, '9348345', '72180225', NULL);

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
  `ipk` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `roles`, `nim`, `ipk`, `angkatan`, `krs_prediksi`, `status_perwalian`, `nidn`, `pj_angkatan`, `status_jp`, `no_hp`, `profile`) VALUES
(3, 'admin', 'admin@staff.ukdw.ac.id', 'admin', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Gabriel Indra Widi Tamtama, S.Kom., M.Kom.', 'sdjfsdkfb', 'test', '2', NULL, NULL, NULL, NULL, NULL, 9348345, '2001', 1, '45645', 'profile.jpg'),
(41, 'dito', 'ditoadriel@gmail.com', 'dito', '1', '72180225', '6', '2001', NULL, NULL, NULL, NULL, NULL, '056549', 'profile.jpg'),
(42, 'Drs. Jong Jek Siang, M.Sc.', 'dsfsdf', 'test', '2', NULL, NULL, NULL, NULL, NULL, 444444444, '2018', NULL, '45654', 'profile1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_perwalian`
--
ALTER TABLE `jadwal_perwalian`
  MODIFY `id_jadwal` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id_perwalian` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
