-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 07:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `childinfo`
--

CREATE TABLE `childinfo` (
  `aadhar` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `weight` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `place` text NOT NULL,
  `gender` text NOT NULL,
  `doh` date NOT NULL,
  `dor` date NOT NULL,
  `complication` text NOT NULL,
  `tob` time NOT NULL,
  `birthweight` int(255) NOT NULL,
  `breastfeeding` date NOT NULL,
  `hrn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childinfo`
--

INSERT INTO `childinfo` (`aadhar`, `name`, `dob`, `weight`, `height`, `place`, `gender`, `doh`, `dor`, `complication`, `tob`, `birthweight`, `breastfeeding`, `hrn`) VALUES
('123456789123', 'Aayushi ', '2020-03-22', 10, 37, 'Kalyan,Maharashtra ', 'Female', '2020-03-21', '2020-03-23', 'NA', '11:31:00', 3, '2020-03-22', 10009),
('243567849485', 'Harsh Yadav', '2022-04-06', 5, 5, 'Mumbai,Maharashtra', 'male', '2022-04-06', '2022-04-06', 'NA', '21:10:58', 5, '2022-04-06', 12),
('476881956628', 'Om Madat', '2020-11-20', 10, 60, 'Thane,Maharshtra', 'male', '2020-11-19', '2020-11-23', 'no', '12:33:00', 3, '2020-11-20', 123),
('554555455545', 'Vansh Pahuja', '2022-03-07', 5, 5, 'Mumbai,Maharshtra', 'male', '2022-03-07', '2022-03-07', 'no', '17:15:00', 5, '2022-03-07', 512),
('702199781912', 'vansh pahuja', '2022-04-16', 12, 32, 'Mumbai, Maharashtra', 'Male', '2022-04-16', '2022-04-16', 'no', '20:30:00', 3, '2022-04-16', 123),
('702199782812', 'Vansh Pahuja', '2022-04-07', 6, 18, 'Mumbai, Maharashtra', 'Male', '2022-04-06', '2022-04-08', 'no', '03:34:00', 4, '2022-04-08', 123),
('825544902712', 'Figo Cardozo', '2022-03-20', 5, 50, 'Ambernath,Maharashtra', 'male', '2022-03-20', '2022-03-20', 'no', '12:09:00', 5, '2022-03-20', 123),
('915279449500', 'Aayushi Salunkhe', '2002-05-24', 40, 140, 'mumbai, maharashtra ', 'female', '2022-04-01', '2022-04-06', 'no', '00:12:00', 3, '2022-04-01', 12345678),
('984727483982', 'Aayush Shribato ', '2019-04-01', 11, 35, 'Thane,Maharashtra', 'Male', '2019-04-01', '2019-04-01', 'NA', '10:56:59', 4, '2019-04-01', 100003),
('996706295412', 'Vansh', '2022-04-07', 6, 34, 'Mumbai , Maharashtra', 'male', '2022-04-07', '2022-04-07', 'no', '11:57:00', 5, '2022-04-07', 123);

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `aadhar` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`aadhar`, `password`) VALUES
(1001, 'Doc@1001'),
(1002, 'Doc@1002'),
(1003, 'Doc@1003'),
(1004, 'Doc@1004'),
(1005, 'Doc@1005');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `aadhar`, `password`) VALUES
(18, '554555455545', 'Vansh123'),
(19, '825544902712', 'Figo123'),
(20, '476881956628', 'Om123'),
(21, '243567849485', 'Harsh123'),
(22, '984727483982', 'Aayush123'),
(23, '123456789123', 'Aayushi123'),
(25, '915279449500', 'abcd@1234'),
(26, '996706295412', 'om'),
(27, '702199782812', 'temp'),
(28, '702199782912', 'vansh'),
(29, '702799782612', 'Vansh');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Sr.no` int(11) NOT NULL,
  `aadhar` varchar(256) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `opd` text NOT NULL DEFAULT 'No',
  `bcg` text NOT NULL DEFAULT 'No',
  `hb` text NOT NULL DEFAULT 'No',
  `op1` text NOT NULL DEFAULT 'No',
  `p1` text NOT NULL DEFAULT 'No',
  `ipv1` text NOT NULL DEFAULT 'No',
  `op2` text NOT NULL DEFAULT 'No',
  `p2` text NOT NULL DEFAULT 'No',
  `op3` text NOT NULL DEFAULT 'No',
  `p3` text NOT NULL DEFAULT 'No',
  `ipv2` text NOT NULL DEFAULT 'No',
  `g1` text NOT NULL DEFAULT 'No',
  `v1` text NOT NULL DEFAULT 'No',
  `je1` text NOT NULL DEFAULT 'No',
  `m` text NOT NULL DEFAULT 'No',
  `v2` text NOT NULL DEFAULT 'No',
  `je2` text NOT NULL DEFAULT 'No',
  `opb` text NOT NULL DEFAULT 'No',
  `dpt1` text NOT NULL DEFAULT 'No',
  `dpt2` text NOT NULL DEFAULT 'No',
  `tt1` text NOT NULL DEFAULT 'No',
  `tt2` text NOT NULL DEFAULT 'No',
  `a3` text NOT NULL DEFAULT 'No',
  `a4` text NOT NULL DEFAULT 'No',
  `a5` text NOT NULL DEFAULT 'No',
  `a6` text NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Sr.no`, `aadhar`, `date`, `opd`, `bcg`, `hb`, `op1`, `p1`, `ipv1`, `op2`, `p2`, `op3`, `p3`, `ipv2`, `g1`, `v1`, `je1`, `m`, `v2`, `je2`, `opb`, `dpt1`, `dpt2`, `tt1`, `tt2`, `a3`, `a4`, `a5`, `a6`) VALUES
(7, '243567849485', '2022-03-07', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'non', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(58, '476881956628', '2022-03-20', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no'),
(59, '825544902712', '2022-04-06', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(60, '123456789123', '2022-04-06', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes'),
(61, '554555455545', '2022-04-01', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'No', 'No', 'No', 'No', 'No', 'No'),
(62, '984727483982', '2022-04-07', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'No', 'No', 'No', 'No', 'No', 'No'),
(63, '915279449500', '2022-04-01', 'Yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, '996706295412', '2022-04-07', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, '702199782812', '2022-04-09', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, '702199782912', '2022-04-16', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, '825544902712', '2022-05-09', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childinfo`
--
ALTER TABLE `childinfo`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`Sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
