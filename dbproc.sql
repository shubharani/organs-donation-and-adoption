-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2017 at 02:38 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbproc`
--

-- --------------------------------------------------------

--
-- Table structure for table `fb`
--

CREATE TABLE IF NOT EXISTS `fb` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Comments` varchar(250) NOT NULL,
  `ContactNumber` bigint(15) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb`
--

INSERT INTO `fb` (`Name`, `Email`, `Comments`, `ContactNumber`) VALUES
('arif', 'arifpasha1395@gmail.com', 'ur project is not good', 1234567891),
('shubha', 'shubhalokesh95@gmail.com', 'nice', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `hdi`
--

CREATE TABLE IF NOT EXISTS `hdi` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `Age` int(5) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `MobileNumber1` bigint(15) NOT NULL,
  `MobileNumber2` bigint(15) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `Disease` varchar(30) NOT NULL,
  `Registered Date` date NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdi`
--

INSERT INTO `hdi` (`Firstname`, `Lastname`, `loginid`, `Age`, `DateOfBirth`, `Gender`, `Address`, `MobileNumber1`, `MobileNumber2`, `BloodGroup`, `Disease`, `Registered Date`) VALUES
('Arif', 'pasha', '1gc15is002', 20, '1998-04-12', 'male', 'banglore', 1234567129, 0, '0+', 'null', '2017-11-28'),
('shubha', 'rani', '1GC16CS405', 20, '1997-07-02', 'female', 'mandya', 1234567890, 0, '0+', 'no', '2017-09-28'),
('pallavi', 'h r', '1GG15CS028', 21, '1998-03-07', 'female', 'banglore', 1233329388, 0, 'A+', '', '2017-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `hni`
--

CREATE TABLE IF NOT EXISTS `hni` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `Age` int(5) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `MobileNumber1` bigint(15) NOT NULL,
  `MobileNumber2` bigint(15) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `Disease` varchar(30) NOT NULL,
  `Registered Date` date NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hni`
--

INSERT INTO `hni` (`Firstname`, `Lastname`, `loginid`, `Age`, `DateOfBirth`, `Gender`, `Address`, `MobileNumber1`, `MobileNumber2`, `BloodGroup`, `Disease`, `Registered Date`) VALUES
('shubha', 'rani', '1gc16cs405', 20, '1997-07-02', 'female', 'mandya', 1234567890, 0, '0+', 'no', '2017-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `hs`
--

CREATE TABLE IF NOT EXISTS `hs` (
  `HospitalName` varchar(30) NOT NULL,
  `DoctorName` varchar(30) NOT NULL,
  `Loginid` varchar(15) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `RequiedBloodGroup` varchar(10) NOT NULL,
  `RegisteredDate` date NOT NULL,
  PRIMARY KEY (`Loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hs`
--

INSERT INTO `hs` (`HospitalName`, `DoctorName`, `Loginid`, `Password`, `Address`, `MobileNumber`, `RequiedBloodGroup`, `RegisteredDate`) VALUES
('jss', 'mahesh', '1gc16cs405', '00000000', 'mysore', 1234213431, '0+', '2017-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `loginid` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirmpassword` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Contactnumber` bigint(15) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Firstname`, `Lastname`, `loginid`, `Password`, `Confirmpassword`, `Email`, `Address`, `Contactnumber`) VALUES
('aliya', 'farheen', '1gc15ec006', '9591116824', '9591116824', 'aliyafarheen@gmail.com', 'banglore', 1234509872),
('Arif', 'pasha', '1gc15is002', '9902101388', '9902101388', 'arifpasha1395@gmail.com', 'banglore', 1234567812),
('hajira', 'afreen', '1gc15is005', '8123015323', '8123015323', 'hajira@gmail.com', 'madur', 8123812391),
('shubha', 'rani', '1gc16cs405', '00000000', '00000000', 'shubhalokesh95@gmail.com', 'd', 3214),
('zaiba', 'bakhtiyar', '1gc16cs409', 'zaiba123', 'zaiba123', 'zaiba123@gmail.com', 'ramanagara', 9987654324),
('rani', 'cl', '1gc16cs444', '12345678', '12345678', 'shubha95@gmail,com', 'mandya', 8272111211),
('pallavi', 'h r', '1GG15CS028', '12341234', '12341234', 'PALLU12@GMAIL.COM', 'BANGLORE', 8272111211);
