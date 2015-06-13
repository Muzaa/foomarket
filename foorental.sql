-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2015 at 01:12 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foorental`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Rate` int(11) NOT NULL,
  `Deposit` int(11) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`iid`, `userid`, `Description`, `Rate`, `Deposit`, `latitude`, `longitude`) VALUES
(1, 1, 'Hammer', 5, 0, '3.065919', '101.605088'),
(2, 1, 'Drill', 10, 50, '3.065919', '101.605088'),
(3, 1, 'Ladder', 15, 50, '3.065919', '101.605088'),
(4, 3, 'Knife', 5, 0, '3.066774', '101.604528'),
(5, 3, 'Drill', 10, 200, '3.066774', '101.604528'),
(6, 3, 'Screw Driver', 2, 0, '3.066774', '101.604528');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(20) NOT NULL AUTO_INCREMENT,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `read` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `sellid` varchar(5) NOT NULL,
  `star` int(1) NOT NULL,
  `review` text NOT NULL,
  `buyer` varchar(25) NOT NULL,
  `seller` varchar(25) NOT NULL,
  PRIMARY KEY (`sellid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL,
  `Description` varchar(255) NOT NULL,
  `InventoryID` int(11) NOT NULL,
  `Owner` int(11) NOT NULL,
  `Renter` int(11) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Photoproof` blob NOT NULL,
  `Comment` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rid`, `Date`, `Description`, `InventoryID`, `Owner`, `Renter`, `Duration`, `Photoproof`, `Comment`) VALUES
(1, '2015-06-13 00:00:00', 'Rent for 1 day', 1, 1, 2, '1', '', '-'),
(2, '2015-06-13 00:00:00', 'test desc', 4, 3, 2, '3', '', 'test ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `Name`, `Phone`, `Email`, `password`) VALUES
(1, 'Dicky', '0125947168', 'dicky@mncsb.com', '1234'),
(2, 'Muza', '1234566', 'muza@mncsb.com', '1234'),
(3, 'John', '12345', 'john', '1234');
