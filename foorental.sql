-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2015 at 07:47 AM
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
  `Description` text NOT NULL,
  `Rate` int(11) NOT NULL,
  `Deposit` int(11) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inventory`
--


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

INSERT INTO `rating` (`sellid`, `star`, `review`, `buyer`, `seller`) VALUES
('1', 4, 'Delicious,superb..', 'dicky@mncsb.com', 'shafiq@mncsb.com'),
('2', 5, 'cannot find around the city.Only at dicky''s house ..ori and cheap..', 'dicky@mncsb.com', 'shafiq@mncsb.com'),
('3', 1, 'Very hot..I couldnt eat this sh***.Such waste of money!!!', 'dicky@mncsb.com', 'shafiq@mncsb.com'),
('4', 5, 'choc indulgence my favourite. glad i''m near to the house\r\n', 'dicky@mncsb.com', 'shafiq@mncsb.com'),
('5', 4, 'Finally,taste one last night..after waited for so long..great!!', 'dicky@mncsb.com', 'shafiq@mncsb.com');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Photoproof` blob NOT NULL,
  `Comment` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rental`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `Name`, `Phone`, `Email`, `password`) VALUES
(1, '', '', '', '');
