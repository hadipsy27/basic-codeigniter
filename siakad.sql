-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 10:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nim` int(9) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(121) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(21) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`, `foto`) VALUES
(1, 'hadi prasetyo', 2016150036, '2019-07-02', 'Teknik Informatika', 'Dusun 6 Sribhawono', 'hadipsy27@gmail.com', '08237372xxxx', '0'),
(7, 'lina angel', 1010101, '2019-12-28', 'Teknik Informatika', 'Sribhawono', 'lianaja@gmail.com', '09876543212', '0'),
(8, 'aa', 1212, '2019-07-25', 'Sistem Informasi', 'asasa', 'email@amail.com', '123120090', '0'),
(9, 'bb', 5555, '2019-07-20', 'Teknik Informatika', 'bbbb', 'bbb@bb.com', '777777', 'error_goreng.JPG'),
(10, 'kucing', 909090, '2019-07-27', 'Teknik Informatika', 'bbbb', 'chosakushintya@gmail', '08237372xxxx', 'uninstall_Laragon.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
