-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Tushar Ahmed', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequestinfo`
--

CREATE TABLE `bloodrequestinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `bloodgroup` varchar(250) NOT NULL,
  `bloodamount` int(11) NOT NULL,
  `patientlocation` varchar(250) NOT NULL,
  `patientdistrict` varchar(250) NOT NULL,
  `donationdate` date NOT NULL,
  `moremessage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodrequestinfo`
--

INSERT INTO `bloodrequestinfo` (`id`, `name`, `phonenumber`, `bloodgroup`, `bloodamount`, `patientlocation`, `patientdistrict`, `donationdate`, `moremessage`) VALUES
(1, 'Tushar Ahmed', '01627560336', 'O positive(+)', 2, 'square hospital, prantopath', 'Dhaka', '2019-07-29', 'Argent needed Place contact me!'),
(2, 'Masud Rana', '01726456735', 'B positive(+)', 2, 'square hospital, prantopath', 'Dhaka', '2019-07-31', 'Urgently needed blood. So, contact me!'),
(3, 'tushar ahmed', '01627560336', 'O positive(+)', 2, '', '', '0000-00-00', ''),
(4, 'Mehedi Hasan', '01726456735', 'B negative(-)', 1, 'square hospital, prantopath', 'Bramonbaria', '2019-07-31', 'Urgently needed. place contract me '),
(5, 'Arman hossani', '01726456735', 'B positive(+)', 1, 'Labid hospital, kolabagan', 'Dhaka', '2019-08-02', 'Urgently needed blood!'),
(6, 'Mehedi Hasan', '01726456735', 'B negative(-)', 1, 'Labid hospital, kolabagan', 'Cumilla', '2019-08-24', 'Urgently needed!'),
(7, 'komol ', '01726456735', 'A positive(+)', 1, 'square hospital, prantopath', 'Mymansing', '2019-09-05', 'Urgently needed A+ blood');

-- --------------------------------------------------------

--
-- Table structure for table `donorinfo`
--

CREATE TABLE `donorinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phonenumber` varchar(250) NOT NULL,
  `bloodgroup` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `bloodamount` int(11) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorinfo`
--

INSERT INTO `donorinfo` (`id`, `name`, `phonenumber`, `bloodgroup`, `email`, `address`, `bloodamount`, `password`) VALUES
(1, 'tushar', '01627560336', 'O positive(+)', 'tusharahmed16135@gmail.com', 'cumilla', 2, ''),
(2, 'Mehedi Hasan', '01627456323', 'A positive(+)', 'mehedi23@gmail.com', 'cumilla', 2, ''),
(3, 'Ashik', '01837564773', 'B positive(+)', 'ashik3@gmail.com', 'Dhaka', 1, ''),
(4, 'pranto', '01526345623', 'A negative(-)', 'pranto25@gmail.com', 'chittagong', 1, ''),
(5, 'Masud Rana', '08978653521', 'B negative(-)', 'masud@gmail.com', 'Rongpur', 2, ''),
(6, 'ali', '01627560336', 'B positive(+)', 'ali@gmail.com', 'Nator', 1, ''),
(7, 'alam', '01726456735', 'A negative(-)', 'alam@gmail.com', 'Rongpur', 1, ''),
(8, 'alam', '01627560336', 'A negative(-)', 'alam@gmail.com', 'chittagong', 2, ''),
(9, 'sagor', '01726456735', 'A negative(-)', 'sagor@gmail.com', 'chittagong', 1, ''),
(10, 'salek', '01627456323', 'A positive(+)', 'salek@gmail.com', 'Dhaka', 2, ''),
(11, 'sujib', '01526345623', 'A positive(+)', 'sujib@gmail.com', 'Dhaka', 1, ''),
(12, 'arman', '01627456323', 'B negative(-)', 'arman@gmail.com', 'Rongpur', 1, ''),
(13, 'alif', '01726456735', 'A positive(+)', 'alif@gmail.com', 'Nator', 2, ''),
(14, 'aksh', '01726456735', 'B negative(-)', 'ashik3@gmail.com', 'cumilla', 2, ''),
(15, 'Mehedi Hasan', '01837564773', 'B positive(+)', 'mehedi23@gmail.com', 'chittagong', 1, ''),
(16, 'tushar ahmed', '01726456735', 'B positive(+)', 'tusharahmed16135@gmail.com', 'chittagong', 1, ''),
(17, 'akbar', '01526345623', 'AB negative(-)', 'akbar@gmail.com', 'chittagong', 1, ''),
(18, 'nurul', '01627456323', 'AB positive(+)', 'nurul@gmail.com', 'Dhaka', 2, ''),
(19, 'Toiob ', '01627560336', 'O negative(-)', 'toiob34@gmail.com', 'cumilla', 1, ''),
(20, 'Tushar Khan', '01627560336', 'O positive(+)', 'tusharahmed16135@gmail.com', 'Muradnagare, Cumilla', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'Arman', '01726456735', 'A positive(+)', 'arman@gmail.com', 'Dhanmondi, Dhaka', 2, '202cb962ac59075b964b07152d234b70'),
(22, 'mridula', '01627560336', 'A negative(-)', 'mridula@gmail.com', 'Dhanmondi, Dhaka', 1, '202cb962ac59075b964b07152d234b70'),
(23, 'Sanjida', '01726456735', 'O positive(+)', 'akter35-2218@diu.edu.bd', 'Dhanmondi, Dhaka', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'komol', '01627456323', 'B negative(-)', 'komol@gmail.com', 'Dhanmondi, Dhaka', 3, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `registrationinfo`
--

CREATE TABLE `registrationinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationinfo`
--

INSERT INTO `registrationinfo` (`id`, `name`, `email`, `phone`, `password`, `address`) VALUES
(1, 'Tushar Ahmed', 'tusharahmed16135@gmail.com', '01627560336', '81dc9bdb52d04dc20036dbd8313ed055', 'Cumilla'),
(2, 'Rabbi', 'Rabbi@gamil.com', '01627560336', '81dc9bdb52d04dc20036dbd8313ed055', 'Cumilla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodrequestinfo`
--
ALTER TABLE `bloodrequestinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorinfo`
--
ALTER TABLE `donorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationinfo`
--
ALTER TABLE `registrationinfo`
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
-- AUTO_INCREMENT for table `bloodrequestinfo`
--
ALTER TABLE `bloodrequestinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donorinfo`
--
ALTER TABLE `donorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registrationinfo`
--
ALTER TABLE `registrationinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
