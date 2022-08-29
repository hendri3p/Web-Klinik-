-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 04:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `riwayat_penyakit` varchar(100) NOT NULL,
  `jenis_perawatan` varchar(20) NOT NULL,
  `tgl_berobat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `username`, `nama_user`, `keluhan`, `riwayat_penyakit`, `jenis_perawatan`, `tgl_berobat`) VALUES
(1, 'user 2', 'Chanzu', 'Tidak', 'Ada', 'Imunisasi', '2022-01-01'),
(2, 'muttaqin', 'Muttaqin', 'Ada', 'Tidak', 'Imunisasi', '2022-01-01'),
(3, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(4, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(5, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(6, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(7, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(8, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(9, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(10, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(11, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(12, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(13, 'muttaqin', 'Muttaqin Chanzu', 'o', 'o', 'Imunisasi', '2022-01-01'),
(14, 'user 2', 'Muttaqin Chanzu', 'asd', 'asd', 'Bersalin', '2022-08-28'),
(15, 'user 2', 'Chanzu', 'ababaa', 'bararababss', 'Bersalin', '2022-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(22) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `hasil_diagnosa` varchar(100) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `id_berobat` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `obat`, `hasil_diagnosa`, `pembayaran`, `id_berobat`, `username`) VALUES
(1, 'Kartu_Pasien4.png', 'bahhhh', 'Bpjs', 1, 'user 2'),
(2, '', '', '', 2, 'muttaqin'),
(3, '', '', '', 3, 'muttaqin'),
(4, '', '', '', 4, 'muttaqin'),
(5, '', '', '', 5, 'muttaqin'),
(6, '', '', '', 6, 'muttaqin'),
(7, '', '', '', 7, 'muttaqin'),
(8, '', '', '', 8, 'muttaqin'),
(9, '', '', '', 9, 'muttaqin'),
(10, '', '', '', 10, 'muttaqin'),
(11, 'Logo_Bidan_Nyimas-21.png', 'KTL', 'Bpjs', 11, 'muttaqin'),
(12, 'Logo_Bidan_Nyimas-2.png', 'KTL', 'Bpjs', 12, 'muttaqin'),
(13, 'Logo_Bidan_Nyimas-removebg-preview.png', 'bahhhh', 'Bpjs', 13, 'muttaqin'),
(14, 'Logo_Bidan_Nyimas-removebg-preview1.png', 'bahhhh', 'Bpjs', 14, 'user 2'),
(15, '', '', '', 0, 'user 2');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `username`, `password`, `nama_user`, `umur`, `alamat`, `no_telp`) VALUES
(1, 'tesuser', '$2y$10$94Y.SNlf4', 'tes user', '22', 'Bandar Lampung', '082213589750'),
(2, 'user 2', 'user2', 'user2', '22', 'Sukarame', '082213589750'),
(5, 'muttaqin', '123456', 'Muhammad Muttaqin', '23', 'Kemiling', '089626613284'),
(6, 'Hen3p', 'password', 'Hendri', '99', 'Kemiling', '0921083803'),
(7, 'username', 'password', 'Nama', '88', 'Kemiling', '0921083803'),
(8, 'username2', 'password', 'Nama2', '22', 'Kemiling', '0921083803'),
(9, 'ygbhjnmk', 'njm', 'nama3', '99', 'jnm', '9898');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'adminadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
