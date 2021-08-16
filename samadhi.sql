-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2021 at 06:06 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `initial_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `bod` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `initial_name`, `full_name`, `bod`, `gender`, `image`) VALUES
(2, 'M. Hesandi', 'Hesandi Yanulya', '2020-05-06', 'female', '');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

DROP TABLE IF EXISTS `donar`;
CREATE TABLE IF NOT EXISTS `donar` (
  `donarId` int(11) NOT NULL AUTO_INCREMENT,
  `donar_name` varchar(255) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  PRIMARY KEY (`donarId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`donarId`, `donar_name`, `c_number`, `address`, `Date`, `type`, `amount`, `item`) VALUES
(1, 'Thinul', 717137060, 'aaaaaaaaaaaaaaaaaaaaaa', '2021-07-14', 'Cash', 50000, ''),
(2, 'Yanulya', 718164632, 'sssssssssssssssss', '2017-08-08', 'Cash', 20000, ''),
(3, 'Rupa', 717137060, 'No.36/8, Sun', '2021-08-01', 'Cash', 5000, ''),
(5, 'Gamini', 718164632, 'No.60', '2021-08-02', 'Cash', 30000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

DROP TABLE IF EXISTS `labor`;
CREATE TABLE IF NOT EXISTS `labor` (
  `laborid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `initial_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bod` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `company` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`laborid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`laborid`, `first_name`, `last_name`, `initial_name`, `bod`, `gender`, `c_number`, `address`, `company`) VALUES
(1, 'Hasa', 'wani', 'T.H.W', '1999-06-30', 'female', 718164632, 'eeeeeeeeeeee', 'sunshine'),
(2, 'Nilu', 'W', 'N. W.', '2001-06-16', 'female', 717137060, 'hhhhhhhhhhhhhhhhhh', 'sunshine');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `initial_name` varchar(255) NOT NULL,
  `bod` varchar(255) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `post` varchar(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `first_name`, `last_name`, `initial_name`, `bod`, `nic`, `gender`, `c_number`, `address`, `email`, `post`, `image`) VALUES
(1, 'sashini', 'Wanigasekara', 'S. G. ', '1998-05-19', '986402993v', 'female', 718164632, 'aaaaa', 'aaa@gmail.com', 'admin', ''),
(2, 'sashini', 'wanigasekara', 'S.G.Wanigasekarra', '2021-08-03', '963215874521', 'female', 147896523, 'aaaaaaaaaaaa', 'sashgwani222@gmail.com', 'Principle', ''),
(4, 'Hasara', 'wanigasekara', 'T. H. K. W.', '2021-05-20', '963215874521', 'female', 147896523, 'yyyyyyyyyyyy', 'sashgwani222@gmail.com', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `c_number` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `c_number`, `address`, `password`) VALUES
(1, 'sa', 'www', 's. g.', 718164632, 'aaaaaaaaa', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
