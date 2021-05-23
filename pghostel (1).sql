-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pghostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cno` int(3) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `regno` varchar(10) NOT NULL,
  `charges` int(10) NOT NULL,
  `pending` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`regno`, `charges`, `pending`) VALUES
('4nm18cs073', 60000, 23000),
('4nm18cs080', 60000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `regno` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `phonenum` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`regno`, `fname`, `lname`, `address`, `emailid`, `phonenum`) VALUES
('4nm18cs073', '', NULL, NULL, NULL, NULL),
('4nm18cs080', 'George L', 'Dsouza', '1-7(2),Krupalaya \r\nDsliva COmp\r\nKana', 'georgeldkana@gmail.com', 9449822585);

-- --------------------------------------------------------

--
-- Table structure for table `isalotted`
--

CREATE TABLE `isalotted` (
  `regno` varchar(10) NOT NULL,
  `roomno` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isalotted`
--

INSERT INTO `isalotted` (`regno`, `roomno`) VALUES
('4nm18cs073', 101),
('4nm18cs080', 101);

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `regno` varchar(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `branch` varchar(3) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phoneno` bigint(10) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`regno`, `fname`, `lname`, `dob`, `branch`, `sem`, `address`, `phoneno`, `emailid`, `password`) VALUES
('4nm18cs073', ' Venkatesh', 'Bhat', NULL, NULL, NULL, 'afasf', 9019533135, 'venkt@gmail.com', '4nm18cs073'),
('4nm18cs080', 'Leeshan', 'Dsouza', NULL, NULL, NULL, '1-7(2) Krupalaya\r\ni dont tell you', 9449822585, 'leeshandsouza@gmail.com', '4nm18cs080');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomno` int(3) NOT NULL,
  `vacancy` int(1) NOT NULL DEFAULT 1,
  `phoneno` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomno`, `vacancy`, `phoneno`) VALUES
(101, 1, 1889);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cno`),
  ADD KEY `regnocomp` (`regno`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`regno`,`fname`);

--
-- Indexes for table `isalotted`
--
ALTER TABLE `isalotted`
  ADD PRIMARY KEY (`regno`,`roomno`),
  ADD KEY `roomno` (`roomno`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cno` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `regnocomp` FOREIGN KEY (`regno`) REFERENCES `resident` (`regno`);

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `regnofes` FOREIGN KEY (`regno`) REFERENCES `resident` (`regno`);

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `regno` FOREIGN KEY (`regno`) REFERENCES `resident` (`regno`) ON UPDATE CASCADE;

--
-- Constraints for table `isalotted`
--
ALTER TABLE `isalotted`
  ADD CONSTRAINT `regnoroom` FOREIGN KEY (`regno`) REFERENCES `resident` (`regno`),
  ADD CONSTRAINT `roomno` FOREIGN KEY (`roomno`) REFERENCES `room` (`roomno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
