-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:26 PM
-- Server version: 5.7.11-log
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbsassessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_test`
--

CREATE TABLE `data_test` (
  `id` int(11) NOT NULL DEFAULT '0',
  `att` tinyint(1) NOT NULL,
  `kog` tinyint(1) NOT NULL,
  `psi` tinyint(1) NOT NULL,
  `afe` tinyint(1) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_test`
--

INSERT INTO `data_test` (`id`, `att`, `kog`, `psi`, `afe`, `status`) VALUES
(190063, 1, 1, 1, 0, '1'),
(190064, 1, 1, 1, 0, '1'),
(190065, 1, 1, 1, 0, '1'),
(190066, 1, 0, 1, 0, '0'),
(190067, 1, 1, 1, 0, '1'),
(190068, 1, 1, 0, 0, '1'),
(190069, 1, 1, 1, 1, '1'),
(190070, 1, 0, 1, 0, '0'),
(190071, 1, 1, 0, 0, '0'),
(190072, 1, 0, 1, 0, '0'),
(190073, 1, 0, 1, 0, '1'),
(190074, 1, 1, 0, 0, '0'),
(190075, 1, 1, 1, 0, '1'),
(190076, 1, 0, 1, 0, '0'),
(190077, 1, 0, 0, 0, '0'),
(190062, 1, 1, 1, 0, '0'),
(190063, 1, 1, 1, 0, '1'),
(190064, 1, 1, 1, 0, '1'),
(190065, 1, 1, 1, 0, '1'),
(190066, 1, 0, 1, 0, '0'),
(190067, 1, 1, 1, 0, '1'),
(190068, 1, 1, 0, 0, '1'),
(190069, 1, 1, 1, 1, '1'),
(190070, 1, 0, 1, 0, '0'),
(190071, 1, 1, 0, 0, '0'),
(190072, 1, 0, 1, 0, '0'),
(190073, 1, 0, 1, 0, '1'),
(190074, 1, 1, 0, 0, '0'),
(190075, 1, 1, 1, 0, '1'),
(190076, 1, 0, 1, 0, '0'),
(190077, 1, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `att` tinyint(1) NOT NULL,
  `kog` tinyint(1) NOT NULL,
  `psi` tinyint(1) NOT NULL,
  `afe` tinyint(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `att`, `kog`, `psi`, `afe`, `status`) VALUES
(190001, 1, 1, 1, 0, '1'),
(190002, 1, 1, 1, 0, '1'),
(190003, 1, 1, 1, 1, '1'),
(190004, 0, 1, 0, 0, '0'),
(190005, 1, 1, 0, 0, '0'),
(190006, 1, 1, 1, 0, '1'),
(190007, 1, 1, 1, 1, '1'),
(190008, 1, 1, 1, 0, '1'),
(190009, 1, 1, 1, 1, '1'),
(190010, 1, 1, 1, 1, '1'),
(190011, 1, 1, 1, 0, '1'),
(190012, 1, 1, 0, 0, '0'),
(190013, 1, 1, 1, 0, '1'),
(190014, 1, 1, 0, 0, '0'),
(190015, 1, 1, 1, 1, '1'),
(190016, 1, 1, 1, 0, '1'),
(190017, 1, 1, 1, 1, '1'),
(190018, 1, 1, 1, 0, '1'),
(190019, 1, 1, 1, 0, '1'),
(190020, 1, 1, 1, 0, '1'),
(190021, 1, 1, 0, 0, '1'),
(190022, 1, 1, 0, 0, '1'),
(190023, 1, 1, 1, 0, '0'),
(190024, 0, 1, 0, 0, '0'),
(190025, 1, 1, 1, 0, '1'),
(190026, 1, 1, 1, 0, '1'),
(190027, 1, 1, 1, 0, '1'),
(190028, 1, 1, 1, 0, '1'),
(190029, 1, 1, 0, 0, '0'),
(190030, 1, 1, 1, 0, '1'),
(190031, 1, 1, 0, 1, '1'),
(190032, 1, 1, 1, 0, '1'),
(190033, 1, 1, 0, 0, '0'),
(190034, 1, 1, 0, 0, '0'),
(190035, 0, 0, 0, 0, '0'),
(190036, 1, 1, 1, 0, '1'),
(190037, 1, 1, 0, 0, '0'),
(190038, 1, 1, 1, 0, '1'),
(190039, 1, 1, 1, 0, '0'),
(190040, 1, 1, 1, 0, '1'),
(190041, 1, 1, 1, 0, '1'),
(190042, 1, 1, 0, 0, '0'),
(190043, 1, 1, 1, 0, '1'),
(190044, 1, 1, 1, 0, '1'),
(190045, 1, 1, 0, 0, '0'),
(190046, 1, 1, 1, 0, '1'),
(190047, 1, 1, 1, 0, '1'),
(190048, 1, 1, 0, 0, '1'),
(190049, 1, 1, 1, 0, '1'),
(190050, 1, 0, 0, 0, '0'),
(190051, 0, 0, 0, 0, '0'),
(190052, 1, 1, 1, 1, '1'),
(190053, 1, 1, 1, 0, '1'),
(190054, 1, 1, 1, 0, '0'),
(190055, 1, 1, 1, 0, '1'),
(190056, 1, 1, 1, 0, '0'),
(190057, 1, 1, 0, 0, '0'),
(190058, 1, 0, 0, 0, '0'),
(190059, 0, 0, 0, 0, '0'),
(190060, 1, 1, 0, 0, '0'),
(190061, 1, 1, 0, 1, '1'),
(190062, 1, 1, 1, 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190078;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
