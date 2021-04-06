-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `password`) VALUES
(1, 'Narendra Modi', 'ndmodi@gmail.com', 'nmodi@2025');

-- --------------------------------------------------------

--
-- Table structure for table `appoint1`
--

CREATE TABLE `appoint1` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dname` varchar(50) NOT NULL,
  `fees` int(11) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint1`
--

INSERT INTO `appoint1` (`id`, `Name`, `email`, `date`, `time`, `dname`, `fees`, `mobile`) VALUES
(36, 'Trent bolt', 'amit@gmail.com', '2020-11-16', '00:20:20', 'Dr.Santosh  Rode', 200, '7448097278');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Education` varchar(50) NOT NULL,
  `special` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `Name`, `email`, `password`, `Education`, `special`, `mobile`) VALUES
(1, 'Dr.Pramod lingshe', 'pmlingshe22gmail.com', 'pmlingshe@21', 'MBBS', 'cardiology', '7658093245'),
(2, 'Dr.Monika Klaje', 'monika3@gmail.com', '', 'MBCS', 'Heart specialist', '9145278567'),
(10, 'Dr.Monali  Jade', 'monali78@gmail.com', 'mnhati#432', 'MBCS', 'Heart specialist', '9011899962'),
(11, 'Dr.Santosh  Rode', 'srode19@gmail.com', 'Santosh@123', 'MBBS', 'Eye spcialist', '9845247118');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `Name`, `email`, `password`, `age`, `mobile`) VALUES
(2, 'Trent bolt', 'gauravkalje8@gmail.com', 'mh14dv8479', 19, '9812345627'),
(3, 'Chris gale', 'tbolt@gmail.com', 'gale@431', 89, '9145278567'),
(4, 'GAURAV   KALJE', 'gauravkalje8@gmail.com', 'gbkalje#321', 67, '8723571121'),
(5, 'Ajay Thite', 'ajthite@gmail.com', 'pass@321', 17, '9832461412'),
(11, 'Chris gale', 'gbkalje@mitaoe.ac.in', 'Chris@4321', 56, '7448097278');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoint1`
--
ALTER TABLE `appoint1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoint1`
--
ALTER TABLE `appoint1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
