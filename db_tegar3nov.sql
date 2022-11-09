-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 07:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tegar3nov`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ganjil`
--

CREATE TABLE `data_ganjil` (
  `id` int(4) NOT NULL,
  `NIK` int(9) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `AGAMA` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDHA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ganjil`
--

INSERT INTO `data_ganjil` (`id`, `NIK`, `NAMA`, `AGAMA`) VALUES
(1, 452426, 'jono', 'ISLAM'),
(2, 5677, 'yono', 'ISLAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_ganjil`
--
ALTER TABLE `data_ganjil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_ganjil`
--
ALTER TABLE `data_ganjil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
