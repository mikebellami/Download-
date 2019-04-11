-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2018 at 12:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leap_hk`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(255) NOT NULL,
  `reg_no` int(10) NOT NULL,
  `mat_no` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(155) NOT NULL,
  `dept` varchar(155) NOT NULL,
  `category` int(4) NOT NULL,
  `recovery` varchar(255) NOT NULL,
  `act_code` varchar(255) NOT NULL,
  `act_status` int(4) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `reg_no`, `mat_no`, `password`, `email`, `dept`, `category`, `recovery`, `act_code`, `act_status`, `date_registered`, `date_updated`) VALUES
(8, 1300890, '13BD002644', '$2a$10$876f74618e0c366328902eI6F.83oPmIrvE74lPNN6nt9gnl5AClO', 'adeojo.emmanuel@Lmu.edu.ng', 'computer science', 1, '', 'FUfG5dhDACCzPVU4J38o', 1, '2018-09-30 09:10:20', '2018-09-30 10:15:51'),
(10, 140890, '14CD003438', '$2a$10$dae2ddb9685df7a4efc66OQOHBl3kzaEz0H.Yue/kT77fwrlqGZwu', 'etukudo.deborah@lmu.edu.ng', 'computer science', 1, '', 'izfpJEC5Vpn7qIqtTDAO', 0, '2018-09-30 11:19:19', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD UNIQUE KEY `mat_no` (`mat_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
