-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2020 at 10:18 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `click4health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `doc_id` int(10) NOT NULL,
  `pat_id` int(10) NOT NULL,
  `p_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `p_cno` varchar(29) COLLATE utf8_bin NOT NULL,
  `msg` text COLLATE utf8_bin NOT NULL,
  `book_date` varchar(25) COLLATE utf8_bin NOT NULL,
  `ondate` varchar(25) COLLATE utf8_bin NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '2',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `doc_id`, `pat_id`, `p_name`, `p_cno`, `msg`, `book_date`, `ondate`, `status`) VALUES
(8, 7, 4, 'ram', '9251260198', 'direct msg ', '24-03-17', '2017-04-20', '1'),
(9, 8, 1, 'rrr', '123', '', '30-03-17', '2017-03-29', '1'),
(10, 7, 1, 'ram', '9251260198', '', '13-02-19', '2019-02-21', '1'),
(11, 9, 1, 'ram', '9251260198', 'hello', '25-09-19', '2019-09-27', '1'),
(12, 7, 1, 'ram', '9251260198', 'dfgdfgdf', '09-09-20', '2020-09-25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `dr_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `contact` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `specialization` varchar(100) COLLATE utf8_bin NOT NULL,
  `experience` varchar(100) COLLATE utf8_bin NOT NULL,
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  `academic` varchar(100) COLLATE utf8_bin NOT NULL,
  `photo` varchar(200) COLLATE utf8_bin NOT NULL,
  `timing` varchar(50) COLLATE utf8_bin NOT NULL,
  `fee` varchar(100) COLLATE utf8_bin NOT NULL,
  `description_detail` text COLLATE utf8_bin NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`dr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `first_name`, `last_name`, `user_name`, `password`, `contact`, `email`, `address`, `specialization`, `experience`, `city`, `type`, `academic`, `photo`, `timing`, `fee`, `description_detail`, `status`, `rating`) VALUES
(1, 'sdflkj', 'lkjlk', 'nk', 'nk', 'diskdisk', 'nk@gmail.com', 'time', 'Gynecologist', 'dfsdf', 'Udaipur', 'doctor', 'MD', 'Android-new.jpg', '10:00 AM to 5:PM', '1250', 'this is a testing content for doctor this is a testing content for doctor this is a testing content for doctor this is a testing content for doctor this is a testing content for doctor this is a testing content for doctor ', 1, 5),
(2, 'dk', 'dk', 'dk', 'dk', '12', 'dk@mgail.com', 'aslkd', 'Gynecologist', '10', 'Udaipur', 'doctor', '', 'd3.jpg ', '', '', '', 0, 4),
(3, 'Dr Sirish Nelivigi', ' Nelivigi', 'ss', 'ss', '9251260198', 'ss@gmail.com', '120 street 58 malabar hill					  ', 'Ophthalmology', '10', 'Udaipur', 'doctor', 'MBBS ', 'd3.jpg	', '09:00 to 17:00', '1000', 'this is detail about doctor profile sdf siofusd foisduf soifus ofisu fosiuf soifus ofisudf osiuf soifus ofisu fosiuf soifu soifsu foisdu fosifu soifus dofius foisudf osiduf soifu sdoifusdf', 0, 5),
(4, 'Dr Sirish Nelivigi', ' Nelivigi', 'ss', 'ss', '9898258625', 'nknaagar@gmail.com', '182 bheruji colony\r\nnear railway crossing\r\nkhempura', 'Ophthalmology', '10', 'Udaipur', 'doctor', 'MBBS ', 'd3.jpg ', '08:00 to 17:30', '1000', '', 1, 0),
(5, 'asdas', 'asda', 'asd', 'asd', 'asda', 'asdas@gmail.com', '		asdasd								  ', 'asdasd', 'asdasd', 'asdasd', 'doctor', 'asdasd', 'd3.jpg', '08:09 to 18:54', '1000', '', 0, 0),
(6, 'asdas', 'asda', 'asd', 'asdasd', 'asda', 'asdas@gmail.com', '		asdasd								  ', 'asdasd', 'asdasd', 'asdasd', 'doctor', 'asdasd', 'd3.jpg', '08:09 to 18:54', '1000', '		wdasdasdsa								  ', 0, 0),
(7, 'asd', 'asda', 'khan', 'khan', '9898258625', 'khan@gmail.com', 'khan										  ', 'General Physician', '10', 'Hiran Magri', 'doctor', 'MBBS ', 'maxresdefault (1).jpg', '12:00 to 16:00', '1500', 'khan is khan 									  ', 0, 5),
(8, 'zzz', 'zzz', 'zzz', 'zzz', '789', 'zzz@gmail.com', 'zzz										  ', 'Gynecologist', '10', 'Surajpole', 'doctor', 'MD', 'maxresdefault.jpg', '10:00 to 17:00', '1500', 'i m doctor										  ', 0, 0),
(9, 'raghu', 'veer', 'raghu', 'veer', '123', '123@gmail.com', '123										  ', 'General Physician', '10', 'Hiran Magri', 'doctor', 'mbbs', 'certification-in-tally-ace-500x500.jpg', '12:59 to 12:59', '100', '	testing									  ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `contact` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `dob` varchar(100) COLLATE utf8_bin NOT NULL,
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `patient_name`, `user_name`, `password`, `contact`, `email`, `address`, `dob`, `city`, `type`) VALUES
(1, 'ram', 'ram', 'ram', '9251260198', 'rasdsfssm@gmail.com', 'jodhpur', '2017-02-07', 'rajas', 'patient'),
(2, 'nk', 'nk', 'nk', '129320948', 'nknaagar@gmail.com', '182 bheruji colony, near railway crossing, khempura', '2017-02-21', 'udaipur', 'patient'),
(3, 'r', 'r', 'r', 'r', 'r@gmail.com', 'r', '2017-12-31', 'r', 'patient'),
(4, 'rrr', 'rrr', 'rrr', '123', 'rrr@gmail.com', 'rrr', '2017-03-30', 'kota', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` int(11) DEFAULT NULL,
  `user_id` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `dr_id` int(11) NOT NULL,
  `review` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `rate`, `user_id`, `dr_id`, `review`) VALUES
(1, 5, '1', 1, ''),
(2, 5, '2', 1, ''),
(3, 3, '2', 2, ''),
(4, 5, '1', 2, ''),
(5, 5, '1', 3, ''),
(6, 3, '3', 1, 'Hello He is Very nice'),
(7, 5, '', 1, ''),
(8, 5, '1', 7, 'khan is very good ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
