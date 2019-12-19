-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2019 at 09:02 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Email`, `Phone_no`, `Password`, `Status`) VALUES
('1', '1', 1, '1', 0),
('Gaurav Yadav', 'yadavgaurav@gmail.com', 123456, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `PhoneNo` int(11) NOT NULL,
  `dish` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`PhoneNo`, `dish`, `address`, `value`) VALUES
(1, '13,14,15,16,', 'punit ka ghar', 1380),
(123, '15,16,', '123', 680),
(1, '16,', '12345', 400);

-- --------------------------------------------------------

--
-- Table structure for table `reservetab`
--

CREATE TABLE `reservetab` (
  `Name` varchar(20) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `No_Of_Person` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Phone_no`);

--
-- Indexes for table `reservetab`
--
ALTER TABLE `reservetab`
  ADD PRIMARY KEY (`Phone_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
