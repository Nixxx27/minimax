-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 07:20 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `sss_num` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `phic_no` varchar(255) NOT NULL,
  `hdmf_no` varchar(255) NOT NULL,
  `tax_status` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `emp_name`, `department`, `sss_num`, `tin`, `phic_no`, `hdmf_no`, `tax_status`, `bank`) VALUES
(1, '110111', 'nikko zabala', 'IT', '1234567', '8888', '1234888', '222', 'S', 'PNB'),
(2, '110112', 'Johnny Deep', 'Accounting', '1234978', '8833', '12673', '9867', 'ME', 'BDO'),
(3, '123', 'abcd', 'canteen', '12344', '2233', '221w', '2234', 'S', 'PNB');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `payroll_period` varchar(255) NOT NULL,
  `pay_run` varchar(255) NOT NULL,
  `basic_rate` varchar(255) NOT NULL,
  `daily_rate` varchar(255) NOT NULL,
  `hourly_rate` varchar(255) NOT NULL,
  `absences` varchar(255) NOT NULL,
  `lates` varchar(255) NOT NULL,
  `undertime` varchar(255) NOT NULL,
  `sl` varchar(255) NOT NULL,
  `vl` varchar(255) NOT NULL,
  `spl` varchar(255) NOT NULL,
  `bl` varchar(255) NOT NULL,
  `pl` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `emp_id`, `payroll_period`, `pay_run`, `basic_rate`, `daily_rate`, `hourly_rate`, `absences`, `lates`, `undertime`, `sl`, `vl`, `spl`, `bl`, `pl`, `salary`) VALUES
(1, '110111', 'April 1-15', 'April 1,2017', '20000', '', '', '2', '4', '2', '1', '1', '', '', '', 8000),
(2, '110111', 'April 16-30', 'April 16,2017', '20000', '', '', '2', '2', '3', '1', '1', '', '', '', 7500),
(3, '110112', 'April 16-30', 'April 16,2017', '18000', '', '', '2', '1', '1', '4', '4', '', '', '', 6900),
(4, '123', 'April 1-15', 'April 11,2017', '16000', '', '', '2', '2', '2', '3', '3', '', '', '', 5600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
