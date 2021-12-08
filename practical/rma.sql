-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 09:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rma`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `name`, `email`, `role`, `date`) VALUES
(1, 'dinesh', 'dineshk40@gmail.com', 'student', '2021-12-08 13:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sno` int(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `Maths` int(5) NOT NULL,
  `Science` int(5) NOT NULL,
  `English` int(5) NOT NULL,
  `Computer Science` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sno`, `rollno`, `dob`, `Maths`, `Science`, `English`, `Computer Science`, `date`) VALUES
(1, '2020csc1057', '2021-12-01', 77, 89, 88, 78, '2021-12-08 13:52:58'),
(2, '2020csc1041', '2021-12-17', 56, 78, 76, 77, '2021-12-08 13:52:58'),
(3, '3', '2021-12-21', 56, 66, 76, 95, '2021-12-08 13:52:58'),
(4, '4', '2021-12-31', 45, 87, 66, 76, '2021-12-08 13:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Sno` int(16) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Sno`, `name`, `rollno`, `email`, `dob`, `date`) VALUES
(1, 'dinesh', '2020csc1057', 'dineshk40@gmail.com', '2021-10-08', '2021-12-08 11:28:11'),
(2, 'deepak', '2020csc1044', 'deepak@gmail.com', '2021-12-09', '2021-12-08 11:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `sno` int(16) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`sno`, `name`, `email`, `date`) VALUES
(1, 'sakeena shahid', 'sakeena@gmail.com', '2021-12-08 11:35:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `Roll No.` (`rollno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Sno` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `sno` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
