-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2017 at 02:16 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_depan` varchar(52) NOT NULL,
  `nama_belakang` varchar(52) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(52) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_depan`, `nama_belakang`, `email`, `password`, `date`) VALUES
(7, 'Admin', '', 'admin@mail.com', 'password', '2017-04-02 18:07:58'),
(24, 'Admin', 'Pertama', 'admin1@mail.com', '1234', '2017-04-02 21:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `data_ekstrakulikuler`
--

CREATE TABLE `data_ekstrakulikuler` (
  `id_siswa` int(10) NOT NULL,
  `id_ekstrakulikuler` int(10) NOT NULL,
  `tahun_mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ekstrakulikuler`
--

INSERT INTO `data_ekstrakulikuler` (`id_siswa`, `id_ekstrakulikuler`, `tahun_mulai`) VALUES
(1, 1, '2017-04-01 23:15:53'),
(1, 9, '2017-04-02 17:46:23'),
(2, 1, '2017-04-01 23:17:52'),
(2, 9, '2017-04-02 19:35:21'),
(4, 2, '2017-04-02 03:03:08'),
(4, 3, '2017-04-02 18:04:06'),
(4, 12, '2017-04-02 20:20:58'),
(5, 5, '2017-04-02 17:23:10'),
(6, 3, '2017-04-02 17:23:06'),
(7, 13, '2017-04-02 20:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id_ekstrakulikuler` int(10) NOT NULL,
  `nama_ekstrakulikuler` varchar(52) NOT NULL,
  `keterangan` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id_ekstrakulikuler`, `nama_ekstrakulikuler`, `keterangan`, `date`) VALUES
(1, 'Futsal', 'Futsal adalah olahraga bermain bola dengan lapangan yang lebih kecil.', '2017-04-01 22:14:58'),
(2, 'Paskibra', 'Baris-bebaris', '2017-04-01 23:05:07'),
(3, 'Basket', 'Olahrga Bola Tangan', '2017-04-01 23:05:17'),
(5, 'Bulu Tangkis', 'Wajib bawa raket.', '2017-04-02 17:35:10'),
(6, 'PMR', 'Palang Merah Remaja', '2017-04-02 17:35:25'),
(8, 'Pramuka', 'Praja Muda Karana', '2017-04-02 17:38:20'),
(9, 'Cyber Community', 'Seputar Teknologi', '2017-04-02 17:38:38'),
(10, 'English Club', '', '2017-04-02 17:38:58'),
(11, 'Taekwondo', 'Bela Diri', '2017-04-02 17:39:09'),
(12, 'Silat', 'Bela Diri', '2017-04-02 17:39:16'),
(13, 'Voli', 'Olahraga', '2017-04-02 17:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama_depan` varchar(52) NOT NULL,
  `nama_belakang` varchar(52) DEFAULT NULL,
  `email` varchar(52) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_depan`, `nama_belakang`, `email`, `no_hp`, `alamat`, `jenis_kelamin`, `date`) VALUES
(1, 'Yogi ', 'Damara', 'yogi@mail.com', '08571234123', 'Jln Harapan, Kota Bumi, Tangerang', 'Laki-Laki', '2017-04-02 19:43:36'),
(2, 'Arya', 'Nugroho', 'arya@mail.com', '08129887609', 'Jln Cinta, Harapan Indah, Ciledug', 'Laki-Laki', '2017-04-01 21:49:19'),
(4, 'Rahma', 'Djawa', 'rahma@mail.com', '0812131213', 'Jln Kuproy, Ciledug', 'Laki-Laki', '2017-04-01 19:46:29'),
(5, 'Firman', 'Mujahidin', 'firman@mail.com', '33333333', 'Jln Pimen, Puri Kembangan', 'Laki-Laki', '2017-04-02 21:26:14'),
(6, 'Samuel', 'Edwardi', 'sam@mail.com', '99990000', 'Jln Cinta Bertepuk Sebelah Tangan', 'Laki-Laki', '2017-04-02 17:20:39'),
(7, 'Inggit', 'Garnasih', 'inggit@mail.com', '9191918282', 'Jln Pahlawan, Jakarta', 'Perempuan', '2017-04-02 17:45:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_ekstrakulikuler`
--
ALTER TABLE `data_ekstrakulikuler`
  ADD PRIMARY KEY (`id_siswa`,`id_ekstrakulikuler`),
  ADD KEY `id_ekstrakulikuler` (`id_ekstrakulikuler`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekstrakulikuler`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id_ekstrakulikuler` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_ekstrakulikuler`
--
ALTER TABLE `data_ekstrakulikuler`
  ADD CONSTRAINT `data_ekstrakulikuler_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `data_ekstrakulikuler_ibfk_2` FOREIGN KEY (`id_ekstrakulikuler`) REFERENCES `ekstrakulikuler` (`id_ekstrakulikuler`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
