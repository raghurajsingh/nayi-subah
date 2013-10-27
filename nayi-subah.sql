-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2013 at 07:58 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nayi-subah`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `ApplicantID` int(11) NOT NULL AUTO_INCREMENT,
  `ApplicantName` varchar(50) NOT NULL,
  `FacilitatorID` int(11) NOT NULL,
  `Forms` text,
  PRIMARY KEY (`ApplicantID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`ApplicantID`, `ApplicantName`, `FacilitatorID`, `Forms`) VALUES
(1, 'Raghuraj Singh', 1, '1,2,3'),
(2, 'Kanishk', 1, NULL),
(3, 'Kanishk2', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE IF NOT EXISTS `basic_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `landmark` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `post_office` varchar(50) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `sub_district` varchar(20) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `pincode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `age`, `dob`, `house_no`, `street`, `landmark`, `area`, `city`, `post_office`, `district`, `sub_district`, `state`, `email`, `mobile`, `pincode`) VALUES
(1, 'Raghuraj', 'Singh', 'Gurjar', 'male', '24', '1990/05/20', '776', 'chirag delhi', 'jain mandir', 'jain mandir', 'New delhi', 'chirag delhi', 'new delhi', 'new delhi', 'new delhi', 'raghuraj.morena@gmail.com', '9555857712', '110017');

-- --------------------------------------------------------

--
-- Table structure for table `facilitator`
--

CREATE TABLE IF NOT EXISTS `facilitator` (
  `FacilitatorID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Forms` text,
  PRIMARY KEY (`FacilitatorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `facilitator`
--

INSERT INTO `facilitator` (`FacilitatorID`, `Name`, `Email`, `Forms`) VALUES
(1, 'Kanishk', 'kanishk.dudeja@gmail.com', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
