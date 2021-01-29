-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 04:29 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsong`
--

-- --------------------------------------------------------

--
-- Table structure for table `joblogin`
--

CREATE TABLE `joblogin` (
  `job_id` int(12) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `job_email` varchar(50) NOT NULL,
  `job_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joblogin`
--

INSERT INTO `joblogin` (`job_id`, `job_name`, `job_email`, `job_pass`) VALUES
(1, 'Dileep Kumar Patel', 'pateldileep51@gmail.com', 'DTGpalamu03#');

-- --------------------------------------------------------

--
-- Table structure for table `jobprofile`
--

CREATE TABLE `jobprofile` (
  `job_id` int(12) NOT NULL,
  `job_email` varchar(50) NOT NULL,
  `job_detail` text NOT NULL,
  `order_date` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `job_website` varchar(50) NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `upload_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobprofile`
--

INSERT INTO `jobprofile` (`job_id`, `job_email`, `job_detail`, `order_date`, `department`, `start_date`, `end_date`, `job_website`, `doc_name`, `upload_date`) VALUES
(2, 'pateldileep51@gmail.com', 'Notice for one day recruitment camp on date â€“ 04.02.2021 by District Employment Exchange, Palamu.', '12-02-2021', 'Exchange, Office Palamu', '12-10-2021', '02-01-2022', 'www.palamu.nic.in', '1611932891.pdf', '2021-01-29 07:08:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joblogin`
--
ALTER TABLE `joblogin`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobprofile`
--
ALTER TABLE `jobprofile`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joblogin`
--
ALTER TABLE `joblogin`
  MODIFY `job_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobprofile`
--
ALTER TABLE `jobprofile`
  MODIFY `job_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
