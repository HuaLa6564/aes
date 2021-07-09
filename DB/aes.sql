-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 07:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aes`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `no` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `kwsp` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `my_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`no`, `emp_id`, `name`, `ic`, `gender`, `email`, `phoneNo`, `kwsp`, `salary`, `dept`, `my_image`) VALUES
(1, '621536', 'Cik Kiah Binti Ah Long', '53487235487', 'Female', 'kiah_havoc@gmail.com', '+60128769842', '834rhewirh', '3500', 'HR', ''),
(13, '238712', 'Halimah Binti Daud', '2378647832', 'Female', 'limah123@yahoo.com', '+601238239', '8736e8bHJB', '4000', 'OP', ''),
(14, '763263', 'David Malinkundang', '826787262137', 'Male', 'david_hensem@gmail.com', '+6012936893', '2173871', '3600', 'FN', ''),
(15, '098734', 'Pretty Aira Rabiah Binti Merlin', '628726379328', 'Female', 'aira_merlin@yahoo.com', '+601572657', '376792', '6000', 'IT', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
