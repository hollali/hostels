-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 09:18 AM
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
-- Database: `upsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--
-- Error reading structure for table upsa.booking: #1932 - Table &#039;upsa.booking&#039; doesn&#039;t exist in engine
-- Error reading data for table upsa.booking: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `upsa`.`booking`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `idNum` varchar(10) NOT NULL,
  `halls` enum('OA','NM','L','YA') NOT NULL,
  `mop` enum('bank','creditcard','mobile') NOT NULL,
  `amount` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `crud`
--

TRUNCATE TABLE `crud`;
--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `username`, `surname`, `idNum`, `halls`, `mop`, `amount`) VALUES
(2, 'Kelvin', 'hollali', '12345678', 'NM', 'creditcard', '2500'),
(3, 'david', 'mee', '0987654321', 'NM', 'mobile', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `stuId` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `hostel`
--

TRUNCATE TABLE `hostel`;
--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `firstname`, `surname`, `stuId`, `mobile`, `email`, `password`, `gender`) VALUES
(1, 'hollali', 'kelvin', 'upsa1234577', '0244632677', 'dheztinykartel@gmail.com', '123456789', 'Male'),
(3, 'Glory', 'hollali', 'upsa1234577', '0244632677', 'dheztinykartel@gmail.com', '0987654321', 'Female'),
(4, 'kofi', 'mee', 'upsa1234577', '0244632677', 'dheztinykartel@gmail.com', '12345678', 'Male'),
(5, 'kelvin', 'hollali', 'upsa1234577', '0244632677', 'dheztinykartel@gmail.com', '12345678', 'Male'),
(6, 'sammy', 'dave', 'upsa1234577', '0506635218', 'sdavieswoode@gmail.com', '12345678', 'Male'),
(7, 'kelvin', 'qwe', 'upsa1234577', '0244632677', 'dheztinykartel@gmail.com', '123456', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
