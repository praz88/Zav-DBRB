-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2014 at 06:22 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbrb`
--
CREATE DATABASE IF NOT EXISTS `dbrb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbrb`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titleAndAuthor` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `donorName` varchar(50) DEFAULT NULL,
  `donorEmail` varchar(100) DEFAULT NULL,
  `donorMobile` varchar(100) DEFAULT NULL,
  `holder` varchar(50) DEFAULT NULL,
  `adminName` varchar(100) DEFAULT NULL,
  `requesterName` varchar(50) DEFAULT NULL,
  `requesterEmail` varchar(100) DEFAULT NULL,
  `requesterMobile` varchar(100) DEFAULT NULL,
  `requestDate` datetime DEFAULT NULL,
  `donateDate` datetime DEFAULT NULL,
  `transactionCompletedOn` datetime DEFAULT NULL,
  `reasonForRequesting` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `stream` varchar(100) DEFAULT NULL,
  `donorAddress` varchar(100) DEFAULT NULL,
  `requesterAddress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titleAndAuthor`, `isbn`, `donorName`, `donorEmail`, `donorMobile`, `holder`, `adminName`, `requesterName`, `requesterEmail`, `requesterMobile`, `requestDate`, `donateDate`, `transactionCompletedOn`, `reasonForRequesting`, `status`, `stream`, `donorAddress`, `requesterAddress`) VALUES
(8, 'sdfsdf', '0596005601', 'Praz', 'sfdrg@dfg.com', '1234567890', NULL, 'praz', 'kjhjhkj', 'praz@sdfsfd.com', '324234', '2014-07-03 00:47:23', '2014-07-03 00:44:59', '2014-07-03 00:48:12', 'ddgdfsg', 'Donated', 'School', '#49, 5th block', 'sdfsdfsdf'),
(9, 'sdfsdf', '1234567890123', 'dxfhdgh', 'knsdkjflns@admnfks.com', '1234567890', NULL, 'praz', 'kvkxj', 'pradfsdfsdf@ghf', '324234', '2014-07-03 00:51:37', NULL, NULL, 'ddgdfsg', 'Requested', 'PUC and CET', '5th block', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(5, 'praz', 'aaee89f159b43ec2338b59a3886e66c4f6bcc1b2', '2014-06-29 17:52:21', '2014-06-29 17:52:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
