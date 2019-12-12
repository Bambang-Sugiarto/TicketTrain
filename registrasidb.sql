-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 11:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerasi`
--

CREATE TABLE `registerasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerasi`
--

INSERT INTO `registerasi` (`id`, `nama`, `email`, `password`, `jeniskelamin`, `alamat`, `tanggallahir`, `tempatlahir`, `nohp`) VALUES
(10, 'Bambang Sugiarto', 'bambangsugiarto200316@gmail.com', '12345', 'P ', 'Kertayasa RT 04/01', '2019-04-15', 'Tegal', '0812345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerasi`
--
ALTER TABLE `registerasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerasi`
--
ALTER TABLE `registerasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
