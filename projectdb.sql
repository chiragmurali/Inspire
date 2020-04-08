-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 11:22 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chirag`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstu`
--

CREATE TABLE IF NOT EXISTS `addstu` (
  `name` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `fees` int(11) NOT NULL,
  `phno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstu`
--

INSERT INTO `addstu` (`name`, `qualification`, `fees`, `phno`) VALUES
('rishab', 'BE', 2000, 2147483647),
('chinmay', 'BE', 2000, 566782);

-- --------------------------------------------------------

--
-- Table structure for table `admininp`
--

CREATE TABLE IF NOT EXISTS `admininp` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininp`
--

INSERT INTO `admininp` (`Name`, `Password`) VALUES
('chirag', 'chirag123'),
('rohan', 'rohan123');

-- --------------------------------------------------------

--
-- Table structure for table `comparing`
--

CREATE TABLE IF NOT EXISTS `comparing` (
  `name` varchar(10) NOT NULL,
  `usn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comparing`
--

INSERT INTO `comparing` (`name`, `usn`) VALUES
('matt', '4nn16is028'),
('craig', '4nn16is024'),
('brad', '4nn16is034');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `slno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`slno`, `name`, `usn`) VALUES
(1, 'chirag', '4nn16is007'),
(2, 'rohan', '4nn16is038'),
(3, 'srujan', '4nn16is043');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `name` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(10) NOT NULL,
  `phno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `qualification`, `salary`, `subject`, `email`, `address`, `phno`) VALUES
('ravi', 'MTech', 5000, 'Unix Systems', 'ravi@yahoo.com', 'bangalore', 456789),
('pankaj', 'MSC', 4000, 'Web Dev', 'pankaj@gmail.com', 'mysore', 455673),
('prem', 'MTech', 4000, 'Unix Systems', 'premkumar@reddit.com', 'ramnagar', 42056777);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `Password`, `Email_id`) VALUES
('chirag', '1234', 'chirag@chirag.com'),
('rohan', 'free', 'ronz@ronz.com'),
('alok', 'alok', 'alok@alok.com');

-- --------------------------------------------------------

--
-- Table structure for table `studs`
--

CREATE TABLE IF NOT EXISTS `studs` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studs`
--

INSERT INTO `studs` (`fname`, `lname`) VALUES
('matt', 'bradley'),
('craig', 'dawson'),
('matt', 'bellamy');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `day` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `teacher` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `time`, `subject`, `teacher`) VALUES
('Monday', '9:00-10:00', 'Unix Systems', 'Ravi'),
('Monday', '10:00-11:00', 'IOT', 'Raj'),
('Monday', '11:00-12:00', 'Unix System', 'Prem'),
('Monday', '12:00-1:00', 'IOT', 'Raj'),
('Tuesday', '9:00-10:00', 'Web Dev', 'pankaj'),
('Tuesday', '10:00-11:00', 'Unix Systems', 'ravi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
