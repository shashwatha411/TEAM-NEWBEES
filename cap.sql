-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 10:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` varchar(10) NOT NULL,
  `Admin_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_pass`) VALUES
('JAINA2001', '1234'),
('priyanka26', '1234'),
('shashwatha', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `C_ID` int(5) NOT NULL,
  `C_name` varchar(20) NOT NULL,
  `C_rank` int(3) NOT NULL,
  `C_city` varchar(10) NOT NULL,
  `C_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`C_ID`, `C_name`, `C_rank`, `C_city`, `C_contact`) VALUES
(101, 'VNIT NAGPUR', 27, 'NAGPUR', 182424740),
(102, 'NIT ROURKELA', 16, 'ROURKELA', 1066124620),
(103, 'NITK SURATHKAL', 13, 'SURATHKAL', 712222624);

-- --------------------------------------------------------

--
-- Table structure for table `cutoff`
--

CREATE TABLE `cutoff` (
  `C_ID` int(5) NOT NULL,
  `course` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `cutoff` int(12) NOT NULL,
  `fees` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutoff`
--

INSERT INTO `cutoff` (`C_ID`, `course`, `year`, `cutoff`, `fees`) VALUES
(101, 'Chemical', 2020, 26802, 40000),
(101, 'Civil', 2020, 27159, 40000),
(101, 'Computer S', 2020, 4708, 45000),
(101, 'ECE', 2020, 13164, 30000),
(102, 'Civil', 2020, 21004, 35000),
(102, 'Chemical', 2020, 19650, 40000),
(102, 'Computer S', 2020, 3296, 45000),
(102, 'ECE', 2020, 5097, 45000),
(103, 'Civil', 2020, 18602, 32000),
(103, 'Chemical', 2020, 13407, 40000),
(103, 'Computer S', 2020, 1324, 40000),
(103, 'ECE', 2020, 4151, 40000),
(101, 'Chemical', 2019, 24020, 32000),
(101, 'Civil', 2019, 23282, 43000),
(101, 'Computer S', 2019, 5289, 43000),
(101, 'ECE', 2019, 12902, 42000),
(102, 'Civil', 2019, 17939, 40000),
(102, 'Chemical', 2019, 18067, 39000),
(102, 'Computer S', 2019, 4115, 45000),
(102, 'ECE', 2019, 5674, 40000),
(103, 'Civil', 2019, 17125, 40000),
(103, 'Chemical', 2019, 13820, 45000),
(103, 'Computer S', 2019, 2156, 40000),
(103, 'ECE', 2019, 5112, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_ID` int(5) NOT NULL,
  `S_name` varchar(20) NOT NULL,
  `S_marks` int(2) NOT NULL,
  `S_age` int(2) NOT NULL,
  `S_email` varchar(20) NOT NULL,
  `S_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_ID`, `S_name`, `S_marks`, `S_age`, `S_email`, `S_phone`) VALUES
(1201, 'Jatin Shah', 8609, 18, 'jatin.shah@mail.com', 1112224455),
(1202, 'Parin Modi', 12093, 18, 'parin.modi@mail.com', 1122333444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
