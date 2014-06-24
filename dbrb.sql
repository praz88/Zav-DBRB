-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2014 at 08:45 PM
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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `donatorName` varchar(50) DEFAULT NULL,
  `donatorEmail` varchar(100) NOT NULL,
  `donatorMobile` varchar(100) NOT NULL,
  `holder` varchar(50) DEFAULT NULL,
  `adminName` varchar(100) NOT NULL,
  `requesterName` varchar(50) DEFAULT 'Not yet requested',
  `requesterEmail` varchar(100) NOT NULL,
  `requesterMobile` varchar(100) NOT NULL,
  `requestDate` datetime DEFAULT NULL,
  `donateDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `stream` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `donatorName`, `donatorEmail`, `donatorMobile`, `holder`, `adminName`, `requesterName`, `requesterEmail`, `requesterMobile`, `requestDate`, `donateDate`, `status`, `stream`) VALUES
(8, 'Learn PHP', '0596005601', 'someone', 'someone@gmail.com', '+9199927273', '', '', 'Not yet requested', '', '', NULL, '', 'Available', 'PUC and CET'),
(9, 'HP', '9785353031703', 'Me', 'M', '', '', '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Requested', 'Commerce and Management'),
(10, 'xfgdfg', 'ddfg', 'dsgfdg', 'xdfhgdfm', 'lkmvclkm', NULL, '', 'Not yet requested', '', '', NULL, '', 'Requested', 'Commerce and Management'),
(11, 'Game of thrones', '9780553386790', 'Rahul', 'rahulkhanna@gmail.com', '999388343254', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Requested', 'Engineering'),
(12, 'Learn PHP', '0596005601', 'PHP expert', 'php@google.com', '232435436', NULL, '', 'Not yet requested', '', '', NULL, '', 'Available', 'Non academic'),
(13, 'Learn HTML', '1449319270', 'html guy', 'html@yahoo.com', '54359365665', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Requested', 'PUC and CET'),
(14, 'Learn coding', '8090466184', 'Aster', 'sdasd@sfsd.com', '3435365456456', NULL, '', 'Not yet requested', '', '', NULL, '', 'Requested', 'School'),
(15, '', '', '', '', '', NULL, '', 'Not yet requested', '', '', NULL, '', 'Available', ''),
(16, '', '', '', '', '', NULL, '', 'Not yet requested', '', '', NULL, '', 'Available', ''),
(17, 'uouo', 'youou', 'ououou', 'uouou', 'uouou', NULL, '', 'Not yet requested', '', '', NULL, '', 'Available', ''),
(18, NULL, NULL, NULL, '', '', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Available', ''),
(19, NULL, NULL, NULL, '', '', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Available', ''),
(20, NULL, NULL, NULL, '', '', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Requested', ''),
(21, NULL, NULL, NULL, '', '', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Requested', ''),
(22, NULL, NULL, NULL, '', '', NULL, '', 'hihihi', 'hihihi@fdf.com', 'sdjggdfg', NULL, '', 'Requested', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
