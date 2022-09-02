-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 03:59 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(22) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `hasil_diagnosa` varchar(100) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `id_berobat` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'SitiMarya', 'SuryadiH', 'Siti Maryati M', '42', 'Sumber Rejo', ''),
(2, 'Mayasari', 'MayaHerlan', 'Mayasari', '29', 'Pinang Jaya', ''),
(3, 'MeliVina', 'MeliAhmad', 'Meli Rovina', '35', 'Sumber Rejo', ''),
(4, 'Merimario', 'MeriMeri', 'Meri', '28', 'Griya Elok', ''),
(5, 'HidayahJaya', 'NurSanjaya', 'Nurhidayah', '29', 'Kemiling', '0822811920'),
(6, 'ApriliaCandra', 'Apcandra', 'Aprilia', '36', 'Jl. Kutilang', '089612347944'),
(7, 'YuliDavid', 'MunikaDavid', 'Munika Yuli', '36', 'BKP Kemiling', '085274930933'),
(8, 'EtiAditia', 'Etietidijalan', 'Eti', '26', 'Jl. Pinang Raya', '082375953886'),
(9, 'AriYeni', 'FebriWibowo', 'Febri Yeni', '33', 'Jl.Angsana 18 BR', '08982461982'),
(10, 'FeriMaryanto', 'Ferialin', 'Feri', '', 'Jl. Merak', '081367333349'),
(11, 'Mutiedo', 'Mutelvano', 'Mutia', '', 'Gunter', '081369181125'),
(12, 'Virian', 'ViriAyan', 'Vira', '', 'Jl.Marga', '082385277857');

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
  ADD PRIMARY KEY (`id_pasien`);

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
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
