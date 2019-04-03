-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 08:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupset`
--

CREATE TABLE `groupset` (
  `gid` int(9) NOT NULL,
  `user_1` decimal(9,0) DEFAULT NULL,
  `user_2` decimal(9,0) DEFAULT NULL,
  `user_3` decimal(9,0) DEFAULT NULL,
  `user_4` decimal(9,0) DEFAULT NULL,
  `count` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupset`
--

INSERT INTO `groupset` (`gid`, `user_1`, `user_2`, `user_3`, `user_4`, `count`) VALUES
(1906000, '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `sender` decimal(9,0) NOT NULL,
  `receiver` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `uniroll` decimal(9,0) NOT NULL,
  `name` text,
  `sec` varchar(1) DEFAULT NULL,
  `areaofint` text,
  `password` varchar(15) NOT NULL,
  `gid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`uniroll`, `name`, `sec`, `areaofint`, `password`, `gid`) VALUES
('161500170', 'aa', 'A', 'type1', 'aaaaaa', NULL),
('161500171', 'bb', 'B', 'type1', 'aaaaaa', NULL),
('161500172', 'cc', 'C', 'type1', 'aaaaaa', NULL),
('161500173', 'dd', 'D', 'type1', 'aaaaaa', NULL),
('161500174', 'ee', 'E', 'type1', 'aaaaaa', NULL),
('161500175', 'ff', 'F', 'type1', 'aaaaaa', NULL),
('161500176', 'gg', 'G', 'type1', 'aaaaaa', NULL),
('161500177', 'gh', 'D', 'type1', 'aaaaaa', NULL),
('161500178', 'hh', 'H', 'type1', 'aaaaaa', NULL),
('161500179', 'ii', 'I', 'type1', 'aaaaaa', NULL),
('161500180', 'jj', 'J', 'type1', 'aaaaaa', NULL),
('161500181', 'kk', 'A', 'type1', 'aaaaaa', NULL),
('161500182', 'll', 'B', 'type1', 'aaaaaa', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupset`
--
ALTER TABLE `groupset`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uniroll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupset`
--
ALTER TABLE `groupset`
  MODIFY `gid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1906017;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
