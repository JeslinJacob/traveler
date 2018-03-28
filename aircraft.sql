-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 09:12 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aircraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircraftdetails`
--

CREATE TABLE IF NOT EXISTS `aircraftdetails` (
  `aid` int(15) NOT NULL AUTO_INCREMENT,
  `atype` varchar(20) NOT NULL,
  `identificationnumber` varchar(20) NOT NULL,
  `engintype` varchar(20) NOT NULL,
  `capacity` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aircraftdetails`
--

INSERT INTO `aircraftdetails` (`aid`, `atype`, `identificationnumber`, `engintype`, `capacity`) VALUES
(2, 'shgdha', 'kl65465', 'mn2145', '520'),
(3, 'shgdha', 'kl65465', 'mn2145', '520');

-- --------------------------------------------------------

--
-- Table structure for table `bookindetails`
--

CREATE TABLE IF NOT EXISTS `bookindetails` (
  `bid` int(15) NOT NULL AUTO_INCREMENT,
  `paid` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `takeoff` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `goods` varchar(15) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE IF NOT EXISTS `doctordetails` (
  `did` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `speciality` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`did`, `name`, `location`, `speciality`, `mob`, `email`, `username`, `password`) VALUES
(2, 'isac', 'india', 'head', '123456789', 'jeslinjacobofficial@gmail.com', 'isac', 'isac');

-- --------------------------------------------------------

--
-- Table structure for table `flightbooking`
--

CREATE TABLE IF NOT EXISTS `flightbooking` (
  `fid` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `reportingtime` varchar(20) NOT NULL,
  `takeoff` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `goods` varchar(20) NOT NULL,
  `pemail` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `flightbooking`
--

INSERT INTO `flightbooking` (`fid`, `name`, `date`, `reportingtime`, `takeoff`, `arrival`, `goods`, `pemail`) VALUES
(4, 'airindia', '12-10-2020', '12', '1', '10-12-2020', '30', 'anugeorge5712@gmail.com'),
(5, 'gvhgvhg', '4-2', '5', '8', '9', '15', 'jacob@gmail'),
(6, 'airasia', '12-4', '12', '7', '10-8', '20', 'jacob@gmail'),
(7, 'airindia', '12-1-2016', '4', '7', '10-8', '15', 'jacob@gmail'),
(8, 'airinia', '10-12', '12', '7', '12-1', '12', 'mini@gmail.com'),
(9, 'airasia', '10-1-2018', '5.30', '9', '6-3-2019', '30', 'kavitha@gmail.com'),
(10, 'shbhjb', 'jshjk', 'sjhj', 'shj', 'jshjkh', 'sh', 'anugeorge5712@gmail.com'),
(11, 'ef', 'ree', 'ewrfeae', 'refae', 'rfrr', 'erwer', 'anugeorge5712@gmail.com'),
(12, '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', ''),
(14, 'manaan', '12', '12', '11', '11', '11', 'mini@gmail.com'),
(15, 'manaan', '12.2.2019', '12am', '1am', '13.2..2019', '11kg', 'mini@gmail.com'),
(16, 'manaan', '12.2.2019', '12am', '1am', '13.2..2019', '11kg', 'mini@gmail.com'),
(17, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'mini@gmail.com'),
(18, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'jeslinjacob1995@gmail.com'),
(19, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'mini@gmail.com'),
(20, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'gulnznazirfath18@gmail.com'),
(21, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'gulnazirfath18@gmail.com'),
(22, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'jeslinjacob1995@gmail.com'),
(23, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '12kg', 'mini@gmail.com'),
(24, 'air india', '12.2.2019', '12am', '1am', '13.2.2019', '11kg', 'mini@gmail.com'),
(25, 'ad', '12.2.2019', '12am', '1am', '11', '12kg', 'mini@gmail.com'),
(26, 'air india', '12.2.2019', '12', '1am', '13.2..2019', '11kg', 'mini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginid` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE IF NOT EXISTS `patientdetails` (
  `paid` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mcondition` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`paid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`paid`, `name`, `address`, `mob`, `email`, `mcondition`, `username`, `password`) VALUES
(3, 'jacob', 'dgdfg', '1234567890', 'jacob@gmail', 'good', 'jeslin', 'jacob'),
(4, 'anu', 'vattappilly', '121215646489', 'anugeorge5712@gmail.com', 'very goood', 'anu', 'anu'),
(10, 'ganga', 'abc', '123456', 'ganga@gmail.com', 'mental', 'ganga', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pilotdetails`
--

CREATE TABLE IF NOT EXISTS `pilotdetails` (
  `plid` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `hours` varchar(20) NOT NULL,
  `certification` varchar(20) NOT NULL,
  `noofaircraft` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`plid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pilotdetails`
--

INSERT INTO `pilotdetails` (`plid`, `name`, `hours`, `certification`, `noofaircraft`, `username`, `password`) VALUES
(1, 'luice George', '3200022', 'sfsdf', '2351234531', 'luice', 'luice'),
(2, 'luice', '32', 'hbhj', '235', 'luice', 'luice'),
(4, 'anu George', 'klmmm', 'bca', '123456789', 'anu', 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `userdeatils`
--

CREATE TABLE IF NOT EXISTS `userdeatils` (
  `uid` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  `pemail` varchar(30) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `userdeatils`
--

INSERT INTO `userdeatils` (`uid`, `name`, `address`, `mob`, `uemail`, `pemail`, `relation`, `status`, `username`, `password`) VALUES
(44, 'sonu', 'malayil', '1234567890', 'jeslinjacob1995@gmail.com', 'anugeorge5712@gmail.com', 'father', '1', 'sonu', 'sonu'),
(45, 'jomy', 'vattappilly', '65489456', 'jomy@gmail.com', 'mini@gmail.com', 'son', '1', 'jomy', 'jomy'),
(46, 'jose v.m', 'vattappillil', '9400', 'jose@gmail.com', 'kavitha@gmail.com', 'wife', '1', 'jose', 'jose'),
(47, 'jeslin jacob', '', '1234567890', 'jeslinjacob1995@gmail.com', 'anugeorge5712@gmail.com', 'sister', '1', 'jeslin', '123'),
(51, 'chandran', 'jak house', '1234567890', 'chaandran @gmail.com', 'anugeorge5712@gmail.com', 'sister', '1', 'jeslin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
