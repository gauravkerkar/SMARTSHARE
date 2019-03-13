-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 07:20 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartshare`
--
CREATE DATABASE IF NOT EXISTS `smartshare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smartshare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1001, 'smartshareadmin', 'smartshareadmin098');

-- --------------------------------------------------------

--
-- Table structure for table `sem_one_notes`
--

CREATE TABLE `sem_one_notes` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_one_notes`
--

INSERT INTO `sem_one_notes` (`id`, `file`, `description`) VALUES
(1, 'navigation.php', 'Software Engineering notes Unit 1.'),
(2, 'navigation.php', 'Software Engineering notes Unit 1.'),
(3, 'requestProcess.pdf', 'fdg');

-- --------------------------------------------------------

--
-- Table structure for table `sem_one_notice`
--

CREATE TABLE `sem_one_notice` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem_one_que`
--

CREATE TABLE `sem_one_que` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem_one_timetbl`
--

CREATE TABLE `sem_one_timetbl` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `en_no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` char(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`en_no`, `name`, `email`, `phone_no`, `password`) VALUES
(160113001, 'Jay', 'jaylad265@gmail.com', '7775066987', 'jaylad265'),
(160113005, 'Sriraj', 'srirajdesai29@gmail.com', '7038065552', '921329'),
(170113501, 'Gaurav', 'gauravkerkar1999@gmail.com', '8796504213', 'gaurav'),
(170113506, 'Vaman', 'nmvekp09@gmail.com', '8796054132', 'vaman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_one_notes`
--
ALTER TABLE `sem_one_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_one_notice`
--
ALTER TABLE `sem_one_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_one_que`
--
ALTER TABLE `sem_one_que`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_one_timetbl`
--
ALTER TABLE `sem_one_timetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`en_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sem_one_notes`
--
ALTER TABLE `sem_one_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem_one_notice`
--
ALTER TABLE `sem_one_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sem_one_que`
--
ALTER TABLE `sem_one_que`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sem_one_timetbl`
--
ALTER TABLE `sem_one_timetbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
