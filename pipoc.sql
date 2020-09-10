-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 04:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pipoc`
--
CREATE DATABASE IF NOT EXISTS `pipoc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pipoc`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`, `Role`) VALUES
(1, 'syafiq', 'admin', 'user'),
(2, 'admin', 'admin', 'admin'),
(3, 'user2', 'admin', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visitor21`
--

CREATE TABLE `visitor21` (
  `id` int(11) NOT NULL,
  `BarCode` varchar(200) NOT NULL,
  `RegDate` date NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `InSector` varchar(200) NOT NULL,
  `Country` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor21`
--

INSERT INTO `visitor21` (`id`, `BarCode`, `RegDate`, `Fname`, `InSector`, `Country`, `Email`, `Role`) VALUES
(2, 'PP21 00002', '2020-09-08', 'Test Admin', 'Eco', 'Malaysia', 'testAdmin@gmail.com', 'visitor'),
(3, 'PP21 00003', '2020-09-07', 'Test Syafiq', 'Pro Tech', 'Malaysia', 'testSyafiq@gmail.com', 'visitor'),
(5, 'PP21 00008', '2020-09-09', 'Test Admin Update', 'Mkt', 'Malaysia', 'testAdmin@gmail.com', 'visitor'),
(6, 'PP21 00010', '2020-09-09', 'Test Update', 'Bio-E', 'Myanmar', 'update@gmail.com', 'visitor'),
(7, 'PP21 00011', '2020-09-08', 'Test', 'Biotec', 'Pakistan', 'test@gmail.com', 'visitor'),
(8, 'PP21 00012', '2020-09-07', 'Test 2', 'Biotec', 'India', 'test2@gmail.com', 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `visitor21`
--
ALTER TABLE `visitor21`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `BarCode` (`BarCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor21`
--
ALTER TABLE `visitor21`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
