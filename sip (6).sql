-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 07:21 PM
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
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(255) NOT NULL,
  `id_perwalian` int(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `id_perwalian`, `catatan`, `tanggal`) VALUES
(11, 48, 'test', 'Jumat, 03 Juni 2022 17:55'),
(12, 48, 's;klkdfkmsldfmsldmf', 'Jumat, 03 Juni 2022 17:59'),
(13, 48, 'dssds', 'Jumat, 03 Juni 2022 ');

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
(1, 'Gabriel Indra Widi Tamtama, S.Kom., M.Kom.', '0502049501', 'qwqeweqw', '45645'),
(3, 'Yetli Oslan, S.Kom., M.T', '0503017001', 'sdfsdf', '089660278156'),
(5, 'Katon Wijana', '503017009', 'katon@staff.ukdw.ac.id', '089660278135'),
(6, 'Umi Proboyekti S.Kom., MLIS', '503017010', 'othiee@staff.ukdw.ac.id', '08562871779'),
(7, 'Wimmie Han', '1234567', NULL, NULL),
(8, 'dono', '1', '1', '1');

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
(26, '503017001', '2020', '2022-05-03', '21:15', 'https://meet.google.com/bru-kapy-kpc'),
(28, '502049501', '2021', '2022-05-10', '00:04', 'https://meet.google.com/bru-kapy-kpc'),
(29, '123456789', '2018', '2022-05-09', '16:22', 'https://meet.google.com/bru-kapy-kpc'),
(30, '503017009', '2022', '2022-05-25', '12:00', 'https://meet.google.com/bru-kapy-kpc'),
(31, '503017010', '2013', '2022-05-10', '10:30', 'https://meet.google.com/bru-kapy-kpc');

-- --------------------------------------------------------

--
-- Table structure for table `krs_prediksi`
--

CREATE TABLE `krs_prediksi` (
  `id_krs` int(11) NOT NULL,
  `angkatan` varchar(255) DEFAULT NULL,
  `krs_prediksi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs_prediksi`
--

INSERT INTO `krs_prediksi` (`id_krs`, `angkatan`, `krs_prediksi`) VALUES
(17, '2020', 'pendadaran_zoom_16_17_0620223.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(255) NOT NULL,
  `nim` int(255) DEFAULT NULL,
  `kode_mk` varchar(255) DEFAULT NULL,
  `nama_mk` varchar(255) DEFAULT NULL,
  `absensi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matakuliah`, `nim`, `kode_mk`, `nama_mk`, `absensi`) VALUES
(1, 72200376, 'SI111', 'Program Dasar Java', '80'),
(2, 72200376, 'SI222', 'Interaksi Manusia dan Komputer', '90'),
(3, 72200376, 'SI333', 'Pemrograman Berbasis Mobile', '90'),
(4, 72200376, 'SI0000', 'Front End', '66'),
(5, 72200364, 'SI0001 ', 'Algoritma Struktur Data', '22'),
(6, 72200364, 'SI0002', 'Matematika Sistem Informasi', '88'),
(7, 72200364, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(8, 72200364, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(9, 72200364, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(10, 72200365, 'SI111', 'Program Dasar Java', '80'),
(11, 72200365, 'SI222', 'Interaksi Manusia dan Komputer', '90'),
(12, 72200365, 'SI333', 'Pemrograman Berbasis Mobile', '90'),
(13, 72200365, 'SI0000', 'Front End', '66'),
(14, 72200365, 'SI0001 ', 'Algoritma Struktur Data', '22'),
(15, 72200365, 'SI0002', 'Matematika Sistem Informasi', '88'),
(16, 72200365, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(17, 72200365, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(18, 72200365, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(19, 72200365, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(20, 72200365, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(21, 72200377, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(22, 72200377, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(23, 72200377, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(24, 72200377, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(25, 72200377, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(26, 72200381, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(27, 72200381, 'SI0001 ', 'Algoritma Struktur Data', '22'),
(28, 72200381, 'SI0002', 'Matematika Sistem Informasi', '88'),
(29, 72200381, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(30, 72200381, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(31, 72200384, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(32, 72200384, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(33, 72200384, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(34, 72200384, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(35, 72200384, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(36, 72200388, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(37, 72200388, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(38, 72200388, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(39, 72200388, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(40, 72200388, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(41, 72200391, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(42, 72200391, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(43, 72200391, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(44, 72200391, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(45, 72200391, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(46, 72200397, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(47, 72200397, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(48, 72200397, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(49, 72200397, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(50, 72200397, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(51, 72200408, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(52, 72200408, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(53, 72200408, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(54, 72200408, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(55, 72200408, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(56, 72200415, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(57, 72200415, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(58, 72200415, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(59, 72200415, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(60, 72200415, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(61, 72200429, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(62, 72200429, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(63, 72200429, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(64, 72200429, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(65, 72200429, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(66, 72200435, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(67, 72200435, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(68, 72200435, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(69, 72200435, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(70, 72200435, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(71, 72200437, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(72, 72200437, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(73, 72200437, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(74, 72200437, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(75, 72200437, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(76, 72210448, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(77, 72210448, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(78, 72210448, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(79, 72210448, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(80, 72210448, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(81, 72210453, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(82, 72210453, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(83, 72210453, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(84, 72210453, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(85, 72210453, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(86, 72210454, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(87, 72210454, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(88, 72210454, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(89, 72210454, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(90, 72210454, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(91, 72210456, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(92, 72210456, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(93, 72210456, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(94, 72210456, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(95, 72210456, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(96, 72210457, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(97, 72210457, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(98, 72210457, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(99, 72210457, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(100, 72210457, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(101, 72210462, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(102, 72210462, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(103, 72210462, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(104, 72210462, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(105, 72210462, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(106, 72210464, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(107, 72210464, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(108, 72210464, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(109, 72210464, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(110, 72210464, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(111, 72210465, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(112, 72210465, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(113, 72210465, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(114, 72210465, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(115, 72210465, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(116, 72210468, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(117, 72210468, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(118, 72210468, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(119, 72210468, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(120, 72210468, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(121, 72200367, 'SI111', 'Program Dasar Java', '80'),
(122, 72200367, 'SI222', 'Interaksi Manusia dan Komputer', '90'),
(123, 72200367, 'SI333', 'Pemrograman Berbasis Mobile', '90'),
(124, 72200367, 'SI0000', 'Front End', '66'),
(125, 72200367, 'SI0001 ', 'Algoritma Struktur Data', '22'),
(126, 72200999, 'SI0003', 'Pengantar Sistem Informasi', '55'),
(127, 72200999, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(128, 72200999, 'SI0005', 'Rekayasa Perangkat Lunak', '88'),
(129, 72200999, 'SI0004', 'Pemrograman Berbasis Web', '99'),
(130, 72200999, 'SI0005', 'Rekayasa Perangkat Lunak', '88');

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
(33, '503017001', '72200364', NULL),
(34, '503017001', '72200365', 'Temui saya tanggal 26 Mei 2022 pukul 10.00 WIB di Kampus'),
(35, '503017001', '72200367', NULL),
(36, '503017001', '72200376', NULL),
(37, '503017001', '72200377', NULL),
(38, '503017001', '72200381', NULL),
(39, '503017001', '72200384', NULL),
(40, '503017001', '72200388', NULL),
(41, '503017001', '72200391', NULL),
(42, '503017001', '72200397', NULL),
(43, '503017001', '72200408', NULL),
(44, '503017001', '72200415', NULL),
(45, '503017001', '72200429', NULL),
(46, '503017001', '72200435', NULL),
(47, '503017001', '72200437', NULL),
(48, '502049501', '72210448', NULL),
(49, '502049501', '72210453', NULL),
(50, '502049501', '72210454', NULL),
(51, '502049501', '72210456', NULL),
(52, '502049501', '72210457', NULL),
(53, '502049501', '72210462', NULL),
(54, '502049501', '72210464', NULL),
(55, '502049501', '72210465', NULL),
(56, '502049501', '72210468', NULL),
(57, '502049501', '72210469', NULL),
(58, '502049501', '72210470', NULL),
(59, '502049501', '72210472', NULL),
(60, '502049501', '72210475', NULL),
(61, '502049501', '72210476', NULL),
(62, '502049501', '72210477', NULL),
(65, '502049501', '722104765', 'Harap lebih baik lagi'),
(66, '503017001', '2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesanan` int(10) NOT NULL,
  `id_perwalian` varchar(10) DEFAULT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesanan`, `id_perwalian`, `id_user`, `pesan`, `time`) VALUES
(7, '48', '76', 'dsfln', NULL),
(8, '48', '76', 'dsfdsfj', NULL),
(9, '51', '76', 'chuackssss kauuu', NULL),
(10, '51', '63', 'test too', NULL),
(11, '48', '76', 'oyy', NULL);

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
  `profile` varchar(255) DEFAULT NULL,
  `status_akun` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `roles`, `nim`, `ipk`, `angkatan`, `krs_prediksi`, `status_perwalian`, `nidn`, `pj_angkatan`, `status_jp`, `no_hp`, `profile`, `status_akun`) VALUES
(3, 'admin', 'admin@staff.ukdw.ac.id', 'admin', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Johanes Vincent Raga', 'johanes@si.ukdw.ac.id', 'johanes', '1', '72200364', '3,90', '2020', '2020_1.xlsx', NULL, NULL, NULL, NULL, '082393145965', '72200364.jpg', NULL),
(46, 'Seprionaldi', 'seprio@si.ukdw.ac.id', 'seprio', '1', '72200365', '2,53', '2020', '2020_2.xlsx', NULL, NULL, NULL, NULL, '083871576645', '722003641.jpg', NULL),
(47, 'Rio Rian Rivanka', 'r3@si.ukdw.ac.id', 'rio', '1', '72200367', '2,07', '2020', '2020_3.xlsx', NULL, NULL, NULL, NULL, '083180151857', '722003642.jpg', NULL),
(48, 'Jessica Ivana Wijayanto', 'jes@si.ukdw.ac.id', 'jessica', '1', '72200376', '4,00', '2020', '2020_4.xlsx', NULL, NULL, NULL, NULL, '083845556515', '72200376.jpg', NULL),
(49, 'Chara Kezia Stefani', 'char@si.ukdw.ac.id', 'char', '1', '72200377', '1,09', '2020', '2020_5.xlsx', NULL, NULL, NULL, NULL, '082331432694', '72200377.jpg', NULL),
(50, 'Fionika Arinda Yuliana', 'fioni@si.ukdw.ac.id', 'fioni', '1', '72200381', '2,65', '2020', '2020_6.xlsx', NULL, NULL, NULL, NULL, '083183137040', '72200381.jpg', NULL),
(51, 'Matthew Bill Raharjo', 'matt@si.ukdw.ac.id', 'matt', '1', '72200384', '3,40', '2020', '2020_1_(2).xlsx', NULL, NULL, NULL, NULL, '083841212088', '72200384.jpg', NULL),
(52, 'Joshe Forgaritenzo', 'joshe@si.ukdw.ac.id', 'joshe', '1', '72200388', '2,75', '2020', NULL, NULL, NULL, NULL, NULL, '085227777728', '72200388.jpg', NULL),
(53, 'Gilbert Christyano Day', 'gil@si.ukdw.ac.id', 'gilbert', '1', '72200391', '3,20', '2020', NULL, NULL, NULL, NULL, NULL, '085242488489', '72200391.jpg', NULL),
(54, 'Verena Ananda Christy', 'ver@si.ukdw.ac.id', 'verena', '1', '72200397', '2,45', '2020', NULL, NULL, NULL, NULL, NULL, '085315709194', '72200397.jpg', NULL),
(55, 'Nathaniel Pratomohadi Nugroho', 'nat@si.ukdw.ac.id', 'nat', '1', '72200408', '2,50', '2020', NULL, NULL, NULL, NULL, NULL, '085340702626', '72200408.jpg', NULL),
(56, 'Naftalia Keisya Griselda Runtuwene', 'naftalia@si.ukdw.ac.id', 'naftalia', '1', '72200415', '2,00', '2020', NULL, NULL, NULL, NULL, NULL, '085399953277', '72200415.jpg', NULL),
(57, 'Selvi Ayu Melianda Sarumaha', 'selvi@si.ukdw.ac.id', 'selvi', '1', '72200429', '3,50', '2020', NULL, NULL, NULL, NULL, NULL, '085712825874', '72200429.jpg', '1'),
(58, 'Irene Amelia', 'irene@si.ukdw.ac.id', 'irene', '1', '72200435', '4,00', '2020', NULL, NULL, NULL, NULL, NULL, '085847849617', '72200435.jpg', NULL),
(59, 'Monica Gracethea', 'monica@si.ukdw.ac.id', 'monica', '1', '72200437', '2,35', '2020', NULL, NULL, NULL, NULL, NULL, '087711091843', '72200437.jpg', NULL),
(60, 'Kelvin Lie', 'kelvin@si.ukdw.ac.id', 'kelvin', '1', '72210448', '3,00', '2021', '2021_1.xlsx', NULL, NULL, NULL, NULL, '087865479684', '72210448.jpg', '1'),
(61, 'Clairine Nita Agustine', 'clay@si.ukdw.ac.id', 'clay', '1', '72210453', '2,75', '2021', '2021_2.xlsx', NULL, NULL, NULL, NULL, '087897814652', '72210453.jpg', NULL),
(62, 'Valentino Raviendra Christando', 'valen@si.ukdw.ac.id', 'valen', '1', '72210454', '1,50', '2021', '2021_3.xlsx', NULL, NULL, NULL, NULL, '089614765771', '72210454.jpg', NULL),
(63, 'Nikolaus Pastika Bara Satyaradi', 'nik@si.ukdw.ac.id', 'nik', '1', '72210456', '3,45', '2021', NULL, NULL, NULL, NULL, NULL, '089696768161', '72210456.jpg', '1'),
(64, 'Verel Krisna Wibowo', 'verel@si.ukdw.ac.id', 'verel', '1', '72210457', '3,50', '2021', NULL, NULL, NULL, NULL, NULL, '081218113613', '72210457.jpg', NULL),
(65, 'Itasa Harani', 'itasa@si.ukdw.ac.id', 'itasa', '1', '72210462', '3,25', '2021', NULL, NULL, NULL, NULL, NULL, '081221976511', '72210462.jpg', NULL),
(66, 'Jerry Marcelino Nugroho', 'jer@si.ukdw.ac.id', 'jerry', '1', '72210464', '1,75', '2021', NULL, NULL, NULL, NULL, NULL, '085329097347', '72210464.jpg', NULL),
(67, 'Stefanus Audy Advent Kristy', 'stef@si.ukdw.ac.id', 'stef', '1', '72210465', '2,70', '2021', NULL, NULL, NULL, NULL, NULL, '085340702626', '722104641.jpg', NULL),
(68, 'Zellyne Octaviani', 'zelly@si.ukdw.ac.id', 'zelly', '1', '72210468', '4,00', '2021', NULL, NULL, NULL, NULL, NULL, '083870239357', '72210468.jpg', NULL),
(69, 'Tasha Prijanto Putri', 'tasha@si.ukdw.ac.id', 'tasha', '1', '72210469', '2,30', '2021', NULL, NULL, NULL, NULL, NULL, '085351105678', '72210469.jpg', NULL),
(70, 'Christian Denny Christanto', 'christian@si.ukdw.ac.id', 'christian', '1', '72210470', '2,50', '2021', NULL, NULL, NULL, NULL, NULL, '083133057625', '72210470.jpg', NULL),
(71, 'Jane Patricia Putri', 'jane@si.ukdw.ac.id', 'jane', '1', '72210472', '3,50', '2021', NULL, NULL, NULL, NULL, NULL, '081271509262', '72210472.jpg', NULL),
(72, 'Adelia Christine Silaban', 'adelia@si.ukdw.ac.id', 'adelia', '1', '72210475', '2,40', '2021', NULL, NULL, NULL, NULL, NULL, '083815234710', '72210475.jpg', NULL),
(73, 'Era Riece Swany Angelica', 'era@si.ukdw.ac.id', 'era', '1', '72210476', '1,50', '2021', NULL, NULL, NULL, NULL, NULL, '085337244477', '722104751.jpg', NULL),
(74, 'Bryan Nicholas Winata', 'bry@si.ukdw.ac.id', 'bry', '1', '72210477', '4,00', '2021', NULL, NULL, NULL, NULL, NULL, '081321115502', '72210477.jpg', '1'),
(75, 'Yetli Oslan, S.Kom., M.T', 'yetliii@staff.ukdw.ac.id', 'yetli', '2', NULL, '2,10', NULL, NULL, NULL, 503017001, '2020', 1, '089660278165', '5_-Yetli-Oslan12.png', NULL),
(76, 'Gabriel Indra Widi Tamtama, S.Kom., M.Kom.', 'indraaa@staff.ukdw.ac.id', 'indra', '2', NULL, '4,00', NULL, NULL, NULL, 502049501, '2021', 1, '45645', 'pak_indra2.png', NULL),
(81, 'Katon Wijana', 'katon@staff.ukdw.ac.id', 'katon', '2', NULL, '1,75', NULL, NULL, NULL, 503017009, '2022', 1, '089660278135', 'katon.jpg', NULL),
(83, 'Umi Proboyekti S.Kom., MLIS', 'othiee@staff.ukdw.ac.id', 'umi', '2', NULL, '2,60', NULL, NULL, NULL, 503017010, '2013', 1, '089288675354', 'bu_umi.png', NULL),
(84, 'keren kezia', 'lerenkezia12@gmail.com', 'yeyen', '1', '72200999', '2,50', '2020', NULL, NULL, NULL, NULL, NULL, '081328862329', '72180222.jpg', NULL),
(85, 'dono', 'dono@gmail.com', 'dono', '2', NULL, NULL, NULL, NULL, NULL, 1, '2003', 1, '1', 'activity_drawio.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

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
-- Indexes for table `krs_prediksi`
--
ALTER TABLE `krs_prediksi`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`id_perwalian`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal_perwalian`
--
ALTER TABLE `jadwal_perwalian`
  MODIFY `id_jadwal` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `krs_prediksi`
--
ALTER TABLE `krs_prediksi`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id_perwalian` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
