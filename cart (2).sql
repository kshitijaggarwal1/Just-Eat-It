-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2019 at 07:04 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone_no` int(12) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `user_Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Email`, `Phone_no`, `Password`, `user_Id`) VALUES
('Gaurav', 'gaurav@gmail.com', 11111, '11111', 1),
('Anish', 'anish@mail.com', 22222, '22222', 2),
('kshitij', 'kshtij@mail.com', 33333, '33333', 3),
('nikhil', 'nikhil@mail.com', 44444, '44444', 4),
('tanmay', 'tanmat@gmail.com', 55555, '55555', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `Order_no` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `Order` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`Order_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservetab`
--

DROP TABLE IF EXISTS `reservetab`;
CREATE TABLE IF NOT EXISTS `reservetab` (
  `Name` varchar(20) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `No_Of_Person` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Phone_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
