-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 07:25 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `sem_one_notes`
--

CREATE TABLE `sem_one_notes` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_one_notes`
--

INSERT INTO `sem_one_notes` (`id`, `file`, `description`) VALUES
(7, 'admin_session.php', 'sjhvcsa'),
(8, 'admin_session.php', 'sjhvcsa'),
(9, 'admin_session.php', 'sjhvcsa'),
(10, 'admin_session.php', 'sjhvcsa'),
(11, 'admin_session.php', 'sjhvcsa'),
(12, 'admin_session.php', 'sjhvcsa'),
(13, 'admin_session.php', 'sjhvcsa'),
(14, 'admin_session.php', 'sjhvcsa'),
(15, 'admin_session.php', 'sjhvcsa'),
(16, 'admin_session.php', 'sjhvcsa'),
(17, 'homepage.php', 'cgzcgz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sem_one_notes`
--
ALTER TABLE `sem_one_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sem_one_notes`
--
ALTER TABLE `sem_one_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
