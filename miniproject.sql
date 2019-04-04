-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 08:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `areaofint`
--

CREATE TABLE `areaofint` (
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areaofint`
--

INSERT INTO `areaofint` (`type`) VALUES
('Java'),
('Python'),
('Web tech(php)'),
('Web tech(python)'),
('Web tech(jsp)'),
('IOT');

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
(1906000, '0', '0', '0', '0', '0'),
(1906017, '161500168', '161500156', '161500165', '161500154', '4'),
(1906018, '161500171', '161500173', '161500172', '161500177', '4'),
(1906019, '161500184', '161500122', '161500455', '161500456', '4'),
(1906020, '161500176', '161500174', '161500170', '161500175', '4'),
(1906021, '161500287', '161500123', NULL, NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `sender` decimal(9,0) NOT NULL,
  `receiver` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`sender`, `receiver`) VALUES
('161500287', '161500184');

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
('161500122', 'Bharat', 'A', 'Web', 'aaa', 1906019),
('161500123', 'Bharat', 'D', 'Web', '123', 1906021),
('161500154', 'Dheeraj', 'C', 'java', '789123', 1906017),
('161500156', 'Ayush Arya', 'A', 'java', '789123', 1906017),
('161500165', 'Bharat Badmera', 'A', 'java', '456789', 1906017),
('161500168', 'Baldev', 'B', 'java', '789123', 1906017),
('161500169', 'Basil', 'C', 'java', '789123', NULL),
('161500170', 'aa', 'A', 'type1', 'abx', 1906020),
('161500171', 'bb', 'B', 'type1', 'aaaaaa', 1906018),
('161500172', 'cc', 'C', 'type1', 'aaaaaa', 1906018),
('161500173', 'dd', 'D', 'type1', '456123', 1906018),
('161500174', 'ee', 'E', 'type1', 'aaaaaa', 1906020),
('161500175', 'ff', 'F', 'type1', 'aaaaaa', 1906020),
('161500176', 'gg', 'G', 'type1', 'aaaaaa', 1906020),
('161500177', 'gh', 'D', 'type1', 'aaaaaa', 1906018),
('161500178', 'hh', 'H', 'type1', 'aaaaaa', NULL),
('161500179', 'ii', 'I', 'type1', 'aaaaaa', NULL),
('161500180', 'jj', 'J', 'type1', 'aaaaaa', NULL),
('161500181', 'kk', 'A', 'type1', 'aaaaaa', NULL),
('161500182', 'll', 'B', 'type1', 'aaaaaa', NULL),
('161500184', 'ayush arya', 'E', 'Web', '123', 1906019),
('161500185', NULL, NULL, NULL, '161500185', NULL),
('161500188', '', '', NULL, '456123', NULL),
('161500198', 'ayush arya', 'A', 'type4', '789456', NULL),
('161500199', 'Ayush Arya', 'A', '', '123', NULL),
('161500287', 'karan', 'A', 'Web', 'abc', 1906021),
('161500289', 'Sachin', NULL, NULL, '456123', NULL),
('161500455', 'aas', 'C', 'Web', '123', 1906019),
('161500456', 'as', 'G', 'Web', 'abc', 1906019);

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
  MODIFY `gid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1906022;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
