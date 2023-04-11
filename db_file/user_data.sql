-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 04:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user data`
--

CREATE TABLE `user data` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Aadhar` bigint(12) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` enum('Group','Voter') NOT NULL,
  `Status` int(1) NOT NULL,
  `Votes` int(100) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user data`
--

INSERT INTO `user data` (`Id`, `Name`, `Mobile`, `Aadhar`, `Address`, `Password`, `Role`, `Status`, `Votes`, `Photo`) VALUES
(1, 'All India Trinamool Congress', 6290470170, 329377495420, 'Kolkata', '123', 'Group', 0, 0, 'tmc.png'),
(2, 'Bharatiya Janata Party', 9331722036, 328954298756, 'Delhi', '123', 'Group', 0, 1, 'bjp.png'),
(3, 'Sanskar Shaw', 6290470170, 329377495420, 'Athpur', '123', 'Voter', 1, 0, 'IMG-20230107-WA0000.jpg'),
(4, 'Communist Party Of India Marxist', 8100391270, 234567891223, 'Delhi', '123', 'Group', 0, 0, 'icpim.png'),
(5, 'All India National Congress', 9232749999, 123456789012, 'Delhi', '123', 'Group', 0, 0, 'congress.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user data`
--
ALTER TABLE `user data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user data`
--
ALTER TABLE `user data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
