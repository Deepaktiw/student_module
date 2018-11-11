-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 05:34 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(100) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` varchar(100) NOT NULL,
  `name_of_inst` varchar(100) NOT NULL,
  `percentage` decimal(10,0) NOT NULL,
  `year` int(11) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  PRIMARY KEY (`q_id`),
  KEY `f_id` (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`q_id`, `qualification`, `name_of_inst`, `percentage`, `year`, `f_id`) VALUES
(1, 'Graduation', 'tyui ghjk hjk', '98', 2017, 'test'),
(2, 'Post Graduation', 'qwertyu fghjk vbnm', '76', 2001, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` varchar(200) NOT NULL,
  `dept_name` varchar(2000) DEFAULT NULL,
  `h_date` date DEFAULT NULL,
  `r_date` date DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `f_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`dept_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--


-- --------------------------------------------------------

--
-- Table structure for table `new_faculty`
--

CREATE TABLE IF NOT EXISTS `new_faculty` (
  `f_id` varchar(100) NOT NULL,
  `f_password` varchar(20) DEFAULT NULL,
  `admin_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`f_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_faculty`
--

INSERT INTO `new_faculty` (`f_id`, `f_password`, `admin_id`) VALUES
('mobile', 'qwerty', NULL),
('shoe', 'test', NULL),
('test', 'testing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE IF NOT EXISTS `personal_details` (
  `pd_id` varchar(100) NOT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `aadhar_no` int(11) DEFAULT NULL,
  `salary` varchar(200) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email_id` varchar(1000) DEFAULT NULL,
  `marital_status` varchar(200) DEFAULT NULL,
  `address` varchar(3000) DEFAULT NULL,
  `ph_no` varchar(100) DEFAULT NULL,
  `blood_group` varchar(100) DEFAULT NULL,
  `f_id` varchar(100) DEFAULT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`pd_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`pd_id`, `pan_no`, `aadhar_no`, `salary`, `name`, `dob`, `email_id`, `marital_status`, `address`, `ph_no`, `blood_group`, `f_id`, `image`) VALUES
('16384', NULL, NULL, '532523', 'Bata', '2017-01-01', 'fsmbbj@gjs.com', 'Single', 'kjsdgjk', '543634', 'O negative', 'shoe', ''),
('81771', NULL, NULL, '5325225', 'nsdf sfkdjn', '2003-03-27', 'slkn@jkdfd.com', 'Widowed', 'kjfsn fdkjsnf jkfnds', '5235235235', 'O positive', 'test', 'Building_with_mind.png');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE IF NOT EXISTS `professional` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `event_type` varchar(20) NOT NULL,
  `activity_type` varchar(20) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `duration` decimal(10,0) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `file` varchar(100) NOT NULL,
  `f_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`p_id`, `event_type`, `activity_type`, `event_name`, `venue`, `date`, `duration`, `description`, `file`, `f_id`) VALUES
(3, 'Seminar', 'Attended', 'ertyu', ' rtyui', '2018-01-01', '8', 'tryui fhgjkj hgj', '', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE IF NOT EXISTS `research` (
  `r_id` int(100) NOT NULL AUTO_INCREMENT,
  `author` varchar(20) DEFAULT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `page_no` int(11) DEFAULT NULL,
  `publication` varchar(5000) DEFAULT NULL,
  `isbn` varchar(1000) DEFAULT NULL,
  `type_of_paper` varchar(200) DEFAULT NULL,
  `f_id` varchar(100) DEFAULT NULL,
  `file` varchar(200) CHARACTER SET latin1 NOT NULL,
  `uid` varchar(50) NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`r_id`, `author`, `title`, `issue_date`, `page_no`, `publication`, `isbn`, `type_of_paper`, `f_id`, `file`, `uid`) VALUES
(2, 'cdsff', 'sdfgsdf', '2018-04-06', 1, 'sdVtyui', '13262523', 'DSBhash', 'test', '', 'asdagsarhsa'),
(9, '', 'KSDN', '0000-00-00', 1333, '', '', '', 'test', '', ''),
(10, 'rtyuio', 'tyuio', '2020-01-01', 90, 'cfgvhbjnk', 'liyu', 'kjnllkj', 'test', '', 'hgfghjkl'),
(11, 'ycgvhb', 'xtrcyvub', '2018-01-02', 45, 'cgvhjb', 'txchgv', 'cvh', 'test', '', 'vhj'),
(12, '', ',MD', '0000-00-00', 155, '', '', '', 'test', '', ''),
(13, '', 'ds', '0000-00-00', 12333, '', '', '', 'test', '', ''),
(26, '', '', '0000-00-00', 123, '', '', '', 'test', '', ''),
(27, '', 'trheh', '0000-00-00', 1334, '', '', '', 'test', '', ''),
(29, 'rxcytvubu', 'xrcytvubu', '2013-01-01', 87, 'exrcytvuyb', 'rcytvubu', 'trxcvb', 'shoe', '', 'ytcvjyb'),
(30, 'tvyb', 'xcvb', '2015-01-01', 420, 'zrextcfgv', 'hxtcfgv', 'hbcfhgv', 'shoe', '', 'jfchgv'),
(31, 'kjdfn', 'dflmsnd', '2025-12-31', 124, 'FNSKJFN', 'KJFNDKJ', 'NKJXNV', 'mobile', '', 'JKNSDKJ'),
(32, 'kjnsk', 'fsfsljnjk', '2017-11-04', 543, 'HKJH', 'KH', 'KJ', 'mobile', '', 'KJH'),
(33, 'ojho', 'kdnfs', '2018-04-05', 24, ',vns,j', 'lkjxnkvj', 'njkds', 'shoe', '', 'gikdsj'),
(40, 'jsdhljk', 'kshclk', '2223-12-21', 213, 's,jhckj', ',cbsj', 'haskjh', 'test', 'CAD.png', 'kcjhc'),
(41, 'jkdsfc', 'sv', '2223-12-21', 214, 's,jhckj', ',cbsj', 'haskjh', 'test', 'Building with mind.png', 'kcjhc'),
(42, 'ksdln', '.dgmds', '2013-01-01', 42, 'sdnkl', 'jfds', 'lfsdj', 'test', 'dbms_lab1.pdf', 'ldsjf'),
(43, 'jhsdkj', 'jhdsfj', '2018-12-01', 12, 'shdfkj', 'hdkjshf', 'jhkwdfh', 'test', 'Gopal Sharma - Resume - Gopal Sharma.pdf', '2345'),
(44, 'dkjfsh', 'sdknflj', '2017-01-01', 2314, 'sjfhkj', 'hskj', 'jfskjh', 'test', 'Gopal Sharma - Resume - Gopal Sharma.pdf', 'hsjkf'),
(45, 'ret', 'rettf', '2010-10-01', 53, 'erdfg', 'sdf', 'qsdf', 'test', 'Resume_Shivam_Gupta.pdf', '4567'),
(46, 'mxbc', 'xsjk', '2017-12-01', 1111, 's,hc', 'skdj', 'cskj', 'test', 'Hydraulic Bridge.png', 'jskh'),
(47, 'hvsk', 'sddjkh', '2017-12-01', 134, 'sj', 'kjvshk', 'hvdskj', 'test', 'Gopal_Sharma_-_Resume_-_Gopal_Sharma.pdf', 'jks'),
(48, 'vsjk', 'sdkvjdjhgk', '2014-12-05', 1345678, 'sdmkhkj', 'vsdhjkch', 'dgqksgag', 'test', 'Gopal_Sharma_-_Resume_-_Gopal_Sharma.pdf', 'gvhjg'),
(49, 'hjcsak', 'kaskhkj', '2027-01-30', 13, 's.mn', 'ljvskjb', 'jbvskjb', 'test', 'Gopal_Sharma_-_Resume_-_Gopal_Sharma.pdf', 'kjbvsk'),
(50, 'kjs', 'hsvc hxbc bskjc', '2013-06-01', 132, 's.nkj', 'scjk', 'sdbhj sckjsh schks', 'test', 'Hydraulic_Bridge.png', 'skjhcks'),
(51, '', 'KCD', '0000-00-00', 166, '', '', '', 'test', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE IF NOT EXISTS `teaching` (
  `t_id` varchar(100) NOT NULL,
  `subject_taught` varchar(20) DEFAULT NULL,
  `curr_teaching` varchar(1000) DEFAULT NULL,
  `experience` varchar(5000) DEFAULT NULL,
  `expertise` varchar(5000) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  `phd_guide` varchar(1000) NOT NULL,
  `f_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`t_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`t_id`, `subject_taught`, `curr_teaching`, `experience`, `expertise`, `designation`, `phd_guide`, `f_id`) VALUES
('', 'qwerty hjkl polk', 'wertyu poikj', '90', 'wretyu polkk', 'poikl bhiuy', 'qwerty phyo', 'test');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `new_faculty` (`f_id`);

--
-- Constraints for table `new_faculty`
--
ALTER TABLE `new_faculty`
  ADD CONSTRAINT `new_faculty_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD CONSTRAINT `personal_details_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `new_faculty` (`f_id`);

--
-- Constraints for table `professional`
--
ALTER TABLE `professional`
  ADD CONSTRAINT `professional_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `new_faculty` (`f_id`);

--
-- Constraints for table `research`
--
ALTER TABLE `research`
  ADD CONSTRAINT `research_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `new_faculty` (`f_id`);

--
-- Constraints for table `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `teaching_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `new_faculty` (`f_id`);
