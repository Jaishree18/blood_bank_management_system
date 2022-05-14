-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2022 at 07:23 AM
-- Server version: 10.6.7-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/* this is the latest exported sql database (14-05-2022)  */





/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL,
  `city_code` varchar(100) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `description` varchar(120) DEFAULT NULL,
  `donor_fk` int(100) DEFAULT NULL,
  `requester_fk` int(100) DEFAULT NULL,
  `state_fk` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_code`, `city_name`, `description`, `donor_fk`, `requester_fk`, `state_fk`) VALUES
(3, '782561', 'Bengaluru', 'Thiahriya town shop', NULL, NULL, 36),
(7, '782561', 'Kharsia', 'In Chattisgarh', NULL, NULL, 39),
(8, '400074', 'Chennai', 'southern city', NULL, NULL, 43),
(9, '400071', 'Mumbai', 'dream city', NULL, NULL, 41),
(11, '400798', 'Hyderabadd', 'IT hub', NULL, NULL, 45);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `body_weight` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `blood_group` varchar(40) DEFAULT NULL,
  `blood_units_reqd` int(255) NOT NULL DEFAULT 0,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `username_fk` varchar(100) NOT NULL,
  `status` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `name`, `father_name`, `gender`, `dob`, `body_weight`, `email`, `blood_group`, `blood_units_reqd`, `state`, `city`, `address`, `pincode`, `phone`, `username_fk`, `status`) VALUES
(24, 'Gunjan Bhawsinghka', 'Anil', 'female', '2000-12-09', '60', 'bhawsinghka17@gmail.com', 'B+', 1, 'Maharashtra', 'Navi Mumbai', 'Neel Galaxy CHS,B-103,Sector 8', '410206', '9819982527', 'super admin', 0),
(25, 'Vanshika', 'Pradeep', 'female', '2001-09-08', '60', 'vanshika@gmail.com', 'A+', 2, 'Maharashtra', 'Navi Mumbai', 'Ulhasnagar,Mumbai', '410078', '7965678965', 'gunjan ', 0),
(40, 'Rita', 'Rajesh', 'female', '1990-03-28', '60', 'rita@gmail.com', 'A-', 10, 'Tamil Nadu', 'Chennai', 'Chennai', '798657', '8987676567', 'gunjan ', 0),
(41, 'Nikhil', 'Raj', 'male', '1999-03-09', '65', 'nikhil@gmail.com', 'B-', 9, 'Maharashtra', 'Mumbai', 'Ulhasnagar, Mumbai', '421002', '9878765675', 'gunjan ', 0),
(42, 'Khushboo', 'Raj', 'female', '2002-07-25', '59', 'khushboo@gmail.com', 'AB+', 11, 'Maharashtra', 'Mumbai', 'Ulhasnagar, Mumbai', '421002', '9678656785', 'gunjan ', 1),
(43, 'Leesha', 'Hero', 'female', '2004-04-22', '40', 'leesha@gmail.com', 'O+', 5, 'Maharashtra', 'Mumbai', 'Mumbai', '400097', '7067898765', 'gunjan ', 1),
(44, 'Piyush', 'Jai', 'male', '2003-02-23', '46', 'piyush@gmail.com', 'AB-', 6, 'Maharashtra', 'Mumbai', 'Ulhasnagar, Mumbai', '400074', '8965780987', 'gunjan ', 0),
(45, 'Kashish', 'Hari', 'female', '1972-05-20', '56', 'kashish@gmail.com', 'O-', 8, 'Maharashtra', 'Mumbai', 'Ulhasnagae, Mumbai', '421002', '9897897678', 'gunjan ', 0),
(46, 'Jaishree', 'Rajesh', 'female', '2000-04-03', '55', 'jaishree@gmail.com', 'AB+', 9, 'Maharashtra', 'Mumbai', 'Chembur, Mumbai', '400074', '9087898765', 'super admin', 1),
(47, 'Sonam', 'Anil', 'female', '1900-06-13', '55', 'sonam@gmail.com', 'B-', 6, 'Maharashtra', 'Mumbai', 'Mumbai', '410206', '9888467109', 'gunjan ', 0),
(48, 'Matt', 'Peter', 'male', '1888-07-09', '60', 'matt@gmail.com', 'A+', 6, 'Maharashtra', 'Mumbai', 'Chembur,Mumbai', '400076', '9887036725', 'super admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(100) NOT NULL,
  `name` varchar(190) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `username`, `password`, `email`, `phone`, `address`, `usertype`) VALUES
(1, 'admin', 'super admin', 'admin', 'admincool@gmail.com', '8711625663', 'Banglore', 'admin'),
(15, 'Tina', 'tinarajpal', 'tina', 'tina@gmail.com', '2147483692', 'Chembur', 'user'),
(16, 'Gunjan Bhawsinghka', 'gunjan ', 'gunjan', 'gunjan@gmail.com', '5666904591', 'Neel Plaza', 'user'),
(17, 'Vanshika Bhavnani', 'vanshika', 'vanshika', 'vanshika@gmail.com', '8999786740', 'Ulhasnagar', 'user'),
(20, 'Monica', 'monica', 'monica', 'monica@gmail.com', '3333344440', 'Eastern Highway', 'user'),
(23, 'Chandler Bing', 'chandler', 'chandler', 'chandler@gmail.com', '7990008998', 'Eastern Highway', 'user'),
(33, 'Jaishree Golani', 'Jaishree', 'jaishree', 'jaishree@gmail.com', '8989767890', 'Chembur, Mumbai\r\n', 'admin'),
(38, 'Peter', 'Peter', 'peter', 'peter@gmail.com', '7897656543', 'Bandra, Mumbai', 'user'),
(39, 'Akshay ', 'akshay', 'akshay', 'akshay@gmail.com', '8871936748', 'Chembur,Mumbai', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `requester_id` int(100) NOT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `blood_group` varchar(100) DEFAULT NULL,
  `unit_blood` varchar(100) DEFAULT NULL,
  `hospital_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contact_person` varchar(120) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `member_fk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`requester_id`, `patient_name`, `gender`, `blood_group`, `unit_blood`, `hospital_name`, `date`, `contact_person`, `address`, `email`, `contact_no`, `reason`, `member_fk`) VALUES
(11, 'Anil', 'male', 'ab+', '10', 'City hospital', '2022-04-01', 'Prathamesh', 'Bandra, Mumbai', 'anil@gmail.com', '8978765654', 'Accident', 'gunjan '),
(12, 'Amit', 'male', 'o+', '15', 'MGM', '2022-05-04', 'Paresh', 'Belapur, Mumbai', 'amit@gmail.com', '7876565489', 'Enormous blood loss', 'gunjan '),
(13, 'Tina', 'female', 'ab+', '8', 'City hospital', '2022-05-05', 'Raju', 'Belapur, Mumbai', 'tina@gmail.com', '9890987678', 'Surgery', 'tinarajpal'),
(14, 'Salman', 'male', 'ab+', '5', 'MGM', '1900-09-08', 'Salman', 'Chembur,Mumbai', 'salman@gmail.com', '2443590856', 'Accident', 'gunjan ');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(100) NOT NULL,
  `state_code` varchar(100) DEFAULT NULL,
  `state_name` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_code`, `state_name`, `description`) VALUES
(36, '782561', 'Karnataka', 'Hill station'),
(38, '700017', 'Bangladesh', 'Beautiful place'),
(39, '432561', 'Chattisgarh', 'Very hot'),
(41, '410206', 'Maharashtra', 'Metropolitan city'),
(43, '78656', 'Tamil Nadu', 'Southern india'),
(45, '652289', 'Telanga', 'IT hub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `requester_fk` (`requester_fk`),
  ADD KEY `state_fk` (`state_fk`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`,`username_fk`),
  ADD KEY `member` (`username_fk`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`,`username`);

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
  ADD PRIMARY KEY (`requester_id`),
  ADD KEY `member_fk` (`member_fk`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `requester`
--
ALTER TABLE `requester`
  MODIFY `requester_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`donor_fk`) REFERENCES `donor` (`donor_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `city_ibfk_2` FOREIGN KEY (`requester_fk`) REFERENCES `requester` (`requester_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `city_ibfk_3` FOREIGN KEY (`state_fk`) REFERENCES `state` (`state_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
