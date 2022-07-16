-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 05:16 AM
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
-- Database: `epuisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `IDhakim` int(11) NOT NULL,
  `namaHakim` varchar(35) NOT NULL,
  `noTelHakim` varchar(12) NOT NULL,
  `kataLaluanH` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `IDPenilaian` int(11) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `markahPenuh` int(11) DEFAULT NULL,
  `IDhakim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `NoKP` varchar(12) DEFAULT NULL,
  `IDPenilaian` int(11) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `markah` int(11) NOT NULL,
  `skor` int(11) NOT NULL,
  `peratus` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `NoKP` varchar(12) NOT NULL,
  `namaPeserta` varchar(50) NOT NULL,
  `kataLaluan` varchar(8) NOT NULL,
  `noTelPeserta` varchar(12) NOT NULL,
  `markah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hakim`
--
ALTER TABLE `hakim`
  ADD PRIMARY KEY (`IDhakim`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`IDPenilaian`),
  ADD KEY `IDhakim` (`IDhakim`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD KEY `NOKP` (`NoKP`),
  ADD KEY `IDnilai` (`IDPenilaian`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NoKP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hakim`
--
ALTER TABLE `hakim`
  MODIFY `IDhakim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `IDPenilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_hakim` FOREIGN KEY (`IDhakim`) REFERENCES `hakim` (`IDhakim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `penilaian_pertandingan` FOREIGN KEY (`IDPenilaian`) REFERENCES `penilaian` (`IDPenilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_pertandingan` FOREIGN KEY (`NoKP`) REFERENCES `peserta` (`NoKP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
