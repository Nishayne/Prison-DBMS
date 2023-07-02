-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prisonpro`
--
CREATE DATABASE IF NOT EXISTS `prisonpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prisonpro`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--

INSERT INTO `admin_tbl` (`Admin_Name`, `Admin_Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `National_id` int(11) NOT NULL,
  `Telephone` int(12) NOT NULL,
  `From_prison` varchar(12) NOT NULL,
  `To_prison` varchar(12) NOT NULL,
  `Dateoftransfer` date NOT NULL,
  PRIMARY KEY (`National_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `officerdetails`
--

CREATE TABLE IF NOT EXISTS `officerdetails` (
  `id` int(12) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateofbirth` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `telephone` int(25) NOT NULL,
  `education` varchar(25) NOT NULL,
  `experience` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL DEFAULT '0',
  `Full_Name` varchar(23) NOT NULL,
  `DOB` date NOT NULL,
  `datein` varchar(12) NOT NULL,
  `dateout` varchar(12) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `County` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `Marital` varchar(20) NOT NULL,
  `Offence` varchar(90) NOT NULL,
  `Sentence` varchar(13) NOT NULL,
  `File_num` varchar(12) NOT NULL,
  `prison` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

/*CREATE TABLE IF NOT EXISTS `transfer` (
  `National_id` int(16) NOT NULL,
  `File_num` varchar(16) NOT NULL,
  `From_prison` varchar(17) NOT NULL,
  `To_prison` varchar(18) NOT NULL,
  `Dateoftransfer` date NOT NULL,
  PRIMARY KEY (`National_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Station_Name` varchar(20) NOT NULL,
  `VerificationProof` varchar(100) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(12) NOT NULL COMMENT 'national id',
  `fullname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateofvisit` varchar(25) NOT NULL,
  `timein` varchar(24) NOT NULL,
  `timeout` varchar(23) NOT NULL,
  `relationship` varchar(25) NOT NULL,
  `telephone` int(13) NOT NULL,
  `prisoner` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
