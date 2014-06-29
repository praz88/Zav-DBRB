-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2014 at 03:41 PM
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
  `donorEmail` varchar(100) NOT NULL,
  `donorMobile` varchar(100) NOT NULL,
  `holder` varchar(50) DEFAULT NULL,
  `adminName` varchar(100) NOT NULL,
  `requesterName` varchar(50) DEFAULT 'Not yet requested',
  `requesterEmail` varchar(100) NOT NULL,
  `requesterMobile` varchar(100) NOT NULL,
  `requestDate` datetime DEFAULT NULL,
  `donateDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `stream` varchar(100) NOT NULL,
  `donorAddress` varchar(100) NOT NULL,
  `requesterAddress` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
