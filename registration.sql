-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 01:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `atte`
--

CREATE TABLE `atte` (
  `stid` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `h1` varchar(10) NOT NULL,
  `h2` varchar(10) NOT NULL,
  `h3` varchar(10) NOT NULL,
  `h4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atte`
--

INSERT INTO `atte` (`stid`, `name`, `batch`, `date`, `h1`, `h2`, `h3`, `h4`) VALUES
(200, 'Anju', 'jsd2', '2020-01-17', 'x', 'x', 'x', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `joiningdate` date NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `batch` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facid`, `name`, `designation`, `mobile`, `email`, `joiningdate`, `qualification`, `gender`, `dob`, `batch`, `address`, `password`) VALUES
(100, 'Amitha G', 'Trainer', 8809876545, 'amitha.g@oa.com', '2019-08-01', 'MCA', 'female', '1993-01-01', 'jsd2', 'Kollam', 'amitha');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `name` varchar(10) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Applied'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Applied'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `name`, `batch`, `fromdate`, `todate`, `reason`, `status`) VALUES
(6, 'Anju', 'jsd2', '2020-01-01', '2020-01-03', 'exam', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `stid` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `assno` int(11) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`stid`, `name`, `batch`, `assno`, `sub1`, `sub2`, `sub3`) VALUES
(200, 'Anju', 'jsd2', 1, 15, 45, 25);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stid` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `admissionno` int(11) NOT NULL,
  `admissiondate` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stid`, `name`, `mobile`, `email`, `dob`, `gender`, `batch`, `admissionno`, `admissiondate`, `address`, `password`) VALUES
(200, 'Anju', 7034311056, 'anjuk@gmail.com', '1995-06-04', 'female', 'jsd2', 40, '2019-09-25', 'Kottayam', 'anju'),
(201, 'Anu', 906111056, 'anu@gmail.com', '1998-09-03', 'female', 'jsd2', 41, '2019-09-25', 'Kottayam', 'anju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
