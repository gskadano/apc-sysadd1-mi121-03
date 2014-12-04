-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2014 at 07:44 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mopccss`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptismal`
--

CREATE TABLE IF NOT EXISTS `baptismal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bap_bapDate` date NOT NULL,
  `bap_priest` varchar(45) DEFAULT NULL,
  `bap_church` varchar(45) DEFAULT NULL,
  `bap_churchAdd` varchar(100) DEFAULT NULL,
  `Employee_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `bap_bkno` varchar(45) NOT NULL,
  `bap_series` varchar(45) NOT NULL,
  `bap_pageno` varchar(45) NOT NULL,
  `bap_lineno` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_baptismal_Employee1_idx` (`Employee_id`),
  KEY `fk_baptismal_client1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `baptismal`
--

INSERT INTO `baptismal` (`id`, `bap_bapDate`, `bap_priest`, `bap_church`, `bap_churchAdd`, `Employee_id`, `person_id`, `bap_bkno`, `bap_series`, `bap_pageno`, `bap_lineno`) VALUES
(14, '1995-11-10', 'Fr. Harley Flores', 'Shrine of Saint Therese of the Child Jesus', 'Pasay City', 1, 23, '009', '1995', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bap_godparent`
--

CREATE TABLE IF NOT EXISTS `bap_godparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baptismal_id` int(11) NOT NULL,
  `bap_godparentname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bapGodParent_baptismal1_idx` (`baptismal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bap_godparent`
--

INSERT INTO `bap_godparent` (`id`, `baptismal_id`, `bap_godparentname`) VALUES
(23, 14, 'Mark Joshua Ronquillo');

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

CREATE TABLE IF NOT EXISTS `church` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(45) DEFAULT NULL,
  `ch_address` varchar(100) DEFAULT NULL,
  `ch_pic` longblob NOT NULL,
  `fileType` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `church`
--

INSERT INTO `church` (`id`, `ch_name`, `ch_address`, `ch_pic`, `fileType`) VALUES
(1, 'Shrine of Saint Therese of the Child Jesus', 'Pasay City', '', 'jpeg/png');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE IF NOT EXISTS `confirmation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conf_confDate` date NOT NULL,
  `conf_bapChurch` varchar(45) DEFAULT NULL,
  `conf_bapAdd` varchar(100) DEFAULT NULL,
  `conf_church` varchar(45) DEFAULT NULL,
  `conf_priest` varchar(45) DEFAULT NULL,
  `Employee_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `conf_bkno` varchar(45) NOT NULL,
  `conf_series` varchar(45) NOT NULL,
  `conf_lineno` varchar(45) NOT NULL,
  `conf_pageno` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_confirmation_Employee1_idx` (`Employee_id`),
  KEY `fk_confirmation_person1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `conf_confDate`, `conf_bapChurch`, `conf_bapAdd`, `conf_church`, `conf_priest`, `Employee_id`, `person_id`, `conf_bkno`, `conf_series`, `conf_lineno`, `conf_pageno`) VALUES
(6, '2009-12-11', '', '', 'Shrine of Saint Therese of the Child Jesus', 'Fr. Harley Flores', 1, 23, '010', '1996', '3', '6');

-- --------------------------------------------------------

--
-- Table structure for table `conf_godparent`
--

CREATE TABLE IF NOT EXISTS `conf_godparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `confirmation_id` int(11) NOT NULL,
  `conf_godparentname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_confGodParent_confirmation1_idx` (`confirmation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `conf_godparent`
--

INSERT INTO `conf_godparent` (`id`, `confirmation_id`, `conf_godparentname`) VALUES
(6, 6, 'Meynard Denoyo');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_username` varchar(45) NOT NULL,
  `emp_password` varchar(255) NOT NULL,
  `emp_usertype` varchar(45) NOT NULL,
  `emp_fname` varchar(45) NOT NULL,
  `emp_lname` varchar(45) NOT NULL,
  `emp_email` varchar(45) NOT NULL,
  `emp_hireDate` date DEFAULT NULL,
  `emp_retireDate` date DEFAULT NULL,
  `emp_chapAssign` varchar(45) DEFAULT NULL,
  `church_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Employee_church1_idx` (`church_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_username`, `emp_password`, `emp_usertype`, `emp_fname`, `emp_lname`, `emp_email`, `emp_hireDate`, `emp_retireDate`, `emp_chapAssign`, `church_id`) VALUES
(1, 'gskadano', 'f48c9fe366f3c3f58ea9b18eb9724f1f01c6ab9390fb3c045d8e6690e1ee4761', 'Admin', 'Gene Anthony', 'Kadano', 'gskadano@gmail.com', '2012-12-04', NULL, 'MOP Chancery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jqcalendar`
--

CREATE TABLE IF NOT EXISTS `jqcalendar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `Location` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `StartTime` datetime DEFAULT NULL,
  `EndTime` datetime DEFAULT NULL,
  `IsAllDayEvent` smallint(6) NOT NULL,
  `Color` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `RecurringRule` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `dateTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logs_employee1_idx` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `employee_id`, `description`, `dateTime`) VALUES
(84, 1, 'Created a person: <a href=/mopccss/index.php?r=person/view&id=23>Andes, Mark Anthony </a>', '2014-12-04 06:36:20'),
(85, 1, 'Priest info created successfully: <a href=/mopccss/index.php?r=priest/view&id=5>Fr. Harley Flores</a>', '2014-12-04 06:39:26'),
(86, 1, 'Created baptismal certificate : Baptismal of <a href=/mopccss/index.php?r=baptismal/view&id=14>Andes, Mark Anthony </a>', '2014-12-04 06:41:23'),
(87, 1, 'Created confirmation certificate : Confirmation of <a href=/mopccss/index.php?r=confirmation/view&id=6>Andes, Mark Anthony </a>', '2014-12-04 06:56:27'),
(88, 1, 'Created a person: <a href=/mopccss/index.php?r=person/view&id=24>Ferrer, Christine Joy </a>', '2014-12-04 06:58:59'),
(89, 1, 'Created marriage certificate : Marriage of <a href=/mopccss/index.php?r=marriage/view&id=7>Ferrer, Christine Joy </a> and <a href=/mopccss/index.php?r=marriage/view&id=7>Andes, Mark Anthony </a>', '2014-12-04 07:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE IF NOT EXISTS `marriage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mar_marDate` date DEFAULT NULL,
  `mar_priest` varchar(45) DEFAULT NULL,
  `Employee_id` int(11) NOT NULL,
  `bride_id` int(11) NOT NULL,
  `groom_id` int(11) NOT NULL,
  `mar_bkno` varchar(45) NOT NULL,
  `mar_series` varchar(45) NOT NULL,
  `mar_pageno` varchar(45) NOT NULL,
  `mar_lineno` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_marriage_Employee1_idx` (`Employee_id`),
  KEY `fk_marriage_person1_idx` (`bride_id`),
  KEY `fk_marriage_person2_idx` (`groom_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `mar_marDate`, `mar_priest`, `Employee_id`, `bride_id`, `groom_id`, `mar_bkno`, `mar_series`, `mar_pageno`, `mar_lineno`) VALUES
(7, '2014-12-18', 'Fr. Harley Flores', 1, 24, 23, '012', '1996', '5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mar_godparent`
--

CREATE TABLE IF NOT EXISTS `mar_godparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marriage_id` int(11) NOT NULL,
  `mar_godparentname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_marGodParent_marriage1_idx` (`marriage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mar_godparent`
--

INSERT INTO `mar_godparent` (`id`, `marriage_id`, `mar_godparentname`) VALUES
(8, 7, 'Kathleen Trasmonte'),
(10, 7, 'John Emmanuel Tero');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_fname` varchar(45) NOT NULL,
  `p_middlename` varchar(45) DEFAULT NULL,
  `p_lname` varchar(45) NOT NULL,
  `p_dateOfBirth` date NOT NULL,
  `p_placeOfBirth` varchar(45) DEFAULT NULL,
  `p_address` varchar(100) DEFAULT NULL,
  `p_dateOfDeath` date DEFAULT NULL,
  `p_gender` varchar(45) NOT NULL,
  `p_father` varchar(100) NOT NULL,
  `p_mother` varchar(100) NOT NULL,
  `ccertificate` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `p_fname`, `p_middlename`, `p_lname`, `p_dateOfBirth`, `p_placeOfBirth`, `p_address`, `p_dateOfDeath`, `p_gender`, `p_father`, `p_mother`, `ccertificate`) VALUES
(23, 'Mark Anthony', '', 'Andes', '1995-10-20', '', '', '0000-00-00', 'Male', 'Antonio Andes Sr.', 'Miriam Andes', ''),
(24, 'Christine Joy', '', 'Ferrer', '1996-11-18', '', '', '0000-00-00', 'Female', 'Willie Ferrer', 'Ernestine Ferrer', '');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(45) DEFAULT NULL,
  `afpSerialNum` varchar(50) DEFAULT NULL,
  `branchOfService` varchar(45) DEFAULT NULL,
  `unitAddress` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_position_client_idx` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `priest`
--

CREATE TABLE IF NOT EXISTS `priest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pfname` varchar(45) NOT NULL,
  `plname` varchar(45) NOT NULL,
  `pmname` varchar(45) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `placeOfBirth` varchar(45) DEFAULT NULL,
  `crasm_no` varchar(45) NOT NULL,
  `exp_date` date NOT NULL,
  `pr_father` varchar(45) DEFAULT NULL,
  `pr_mother` varchar(45) DEFAULT NULL,
  `ordainedAsPriest` date DEFAULT NULL,
  `placeOfOrdination` varchar(45) DEFAULT NULL,
  `ordainingBishop` varchar(45) DEFAULT NULL,
  `church_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_priest_church1_idx` (`church_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `priest`
--

INSERT INTO `priest` (`id`, `pfname`, `plname`, `pmname`, `dateOfBirth`, `placeOfBirth`, `crasm_no`, `exp_date`, `pr_father`, `pr_mother`, `ordainedAsPriest`, `placeOfOrdination`, `ordainingBishop`, `church_id`) VALUES
(5, 'Harley', 'Flores', 'Cruz', '1994-01-01', '', '2012-asfd23DVF-2014', '2014-12-11', '', '', '2011-12-08', '', '', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baptismal`
--
ALTER TABLE `baptismal`
  ADD CONSTRAINT `fk_baptismal_client1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_baptismal_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bap_godparent`
--
ALTER TABLE `bap_godparent`
  ADD CONSTRAINT `fk_bapGodParent_baptismal1` FOREIGN KEY (`baptismal_id`) REFERENCES `baptismal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD CONSTRAINT `fk_confirmation_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_confirmation_person1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `conf_godparent`
--
ALTER TABLE `conf_godparent`
  ADD CONSTRAINT `fk_confGodParent_confirmation1` FOREIGN KEY (`confirmation_id`) REFERENCES `confirmation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_Employee_church1` FOREIGN KEY (`church_id`) REFERENCES `church` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `marriage`
--
ALTER TABLE `marriage`
  ADD CONSTRAINT `fk_marriage_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marriage_person1` FOREIGN KEY (`bride_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marriage_person2` FOREIGN KEY (`groom_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mar_godparent`
--
ALTER TABLE `mar_godparent`
  ADD CONSTRAINT `fk_marGodParent_marriage1` FOREIGN KEY (`marriage_id`) REFERENCES `marriage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `fk_position_client` FOREIGN KEY (`client_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `priest`
--
ALTER TABLE `priest`
  ADD CONSTRAINT `fk_priest_church1` FOREIGN KEY (`church_id`) REFERENCES `church` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
