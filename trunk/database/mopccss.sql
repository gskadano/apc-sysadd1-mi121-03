-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 04:39 AM
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
  PRIMARY KEY (`id`),
  KEY `fk_baptismal_Employee1_idx` (`Employee_id`),
  KEY `fk_baptismal_client1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `baptismal`
--

INSERT INTO `baptismal` (`id`, `bap_bapDate`, `bap_priest`, `bap_church`, `bap_churchAdd`, `Employee_id`, `person_id`) VALUES
(1, '2014-11-14', 'Fr. Harley Flores', 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon City', 3, 5),
(2, '2014-11-14', 'Fr. Harley Flores', 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon City', 1, 2),
(3, '2014-11-29', 'Fr. Harley Flores', 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon City', 1, 4),
(4, '2014-11-19', 'Fr. Harley Flores', 'Shrine of Saint Therese of the Child Jesus', 'Camp Aguinaldo, Quezon City', 1, 1),
(5, '2014-11-22', 'Fr. Harley Flores', 'Shrine of Saint Therese of the Child Jesus', 'Camp Aguinaldo, Quezon City', 3, 3),
(6, '1999-11-02', 'Fr. Harley Flores', 'Shrine of Saint Therese of the Child Jesus', 'Pasay city', 1, 9),
(7, '2000-12-01', 'Fr. Harley Flores', 'Shrine of Saint Therese of the Child Jesus', 'Pasay city', 1, 11),
(8, '1997-08-21', 'Fr. Harley Flores', 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon City', 1, 12),
(9, '2014-11-07', 'Fr. Harley Flores', 'Shrine of Saint Therese of the Child Jesus', 'Pasay city', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `bap_godparent`
--

CREATE TABLE IF NOT EXISTS `bap_godparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baptismal_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bapGodParent_baptismal1_idx` (`baptismal_id`),
  KEY `fk_bapGodParent_person1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `bap_godparent`
--

INSERT INTO `bap_godparent` (`id`, `baptismal_id`, `person_id`) VALUES
(1, 1, 3),
(2, 2, 5),
(3, 3, 5),
(4, 4, 4),
(5, 5, 5),
(6, 5, 2),
(7, 6, 5),
(8, 7, 2),
(9, 8, 3),
(10, 9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

CREATE TABLE IF NOT EXISTS `church` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(45) DEFAULT NULL,
  `ch_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `church`
--

INSERT INTO `church` (`id`, `ch_name`, `ch_address`) VALUES
(1, 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon City'),
(2, 'Shrine of Saint Therese of the Child Jesus', 'Pasay city'),
(3, 'Saint Ignatious Chapel', 'Cubao, Quezon city');

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
  PRIMARY KEY (`id`),
  KEY `fk_confirmation_Employee1_idx` (`Employee_id`),
  KEY `fk_confirmation_person1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `conf_confDate`, `conf_bapChurch`, `conf_bapAdd`, `conf_church`, `conf_priest`, `Employee_id`, `person_id`) VALUES
(1, '2014-11-21', '', '', 'Saint Ignatious Cathedral', 'Harley', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `conf_godparent`
--

CREATE TABLE IF NOT EXISTS `conf_godparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `confirmation_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_confGodParent_confirmation1_idx` (`confirmation_id`),
  KEY `fk_confGodParent_person1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `conf_godparent`
--

INSERT INTO `conf_godparent` (`id`, `confirmation_id`, `person_id`) VALUES
(1, 1, 3);

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
  `emp_hireDate` date DEFAULT NULL,
  `emp_retireDate` date DEFAULT NULL,
  `emp_chapAssign` varchar(45) DEFAULT NULL,
  `church_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Employee_church1_idx` (`church_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_username`, `emp_password`, `emp_usertype`, `emp_fname`, `emp_lname`, `emp_hireDate`, `emp_retireDate`, `emp_chapAssign`, `church_id`) VALUES
(1, 'gskadano', 'f48c9fe366f3c3f58ea9b18eb9724f1f01c6ab9390fb3c045d8e6690e1ee4761', 'Admin', 'Gene Anthony', 'Kadano', '2014-07-09', NULL, 'MOP Chancery', 1),
(2, 'hssantos', 'a4c6b15502f68768488cd48f496a1ac24e69a11b2786f556e0da023059d7f9bb', 'Doctor', 'John Michael', 'Santos', '2014-05-01', '0000-00-00', 'MOP Chancery', 1),
(3, 'mdronquillo', '75f3735825c0b6565a8afa3252277e3de30093611a2254e2efa8d2ad5be366ad', 'Regular', 'Mark Joshua', 'Ronquillo', '2013-01-31', '0000-00-00', 'MOP Chancery', 1);

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

--
-- Dumping data for table `jqcalendar`
--

INSERT INTO `jqcalendar` (`Id`, `Subject`, `Location`, `Description`, `StartTime`, `EndTime`, `IsAllDayEvent`, `Color`, `RecurringRule`) VALUES
(1, 'Meeting with the governor', 'Quezon City Hall', 'Bring extra rice!', '2014-11-11 00:00:00', '2014-11-14 00:00:00', 1, '2', NULL),
(2, 'Pass project proposal!', NULL, NULL, '2014-11-13 00:00:00', '2014-11-13 00:00:00', 1, NULL, NULL),
(3, '3 days boot camp', 'Camp Aguinaldo', 'Bring all necessary equipments!', '2014-11-08 01:00:00', '2014-11-10 13:30:00', 0, '0', NULL),
(4, 'sample', 'Kadano''s restobar', 'remark pa more', '2014-11-07 20:00:00', '2014-11-07 20:00:00', 0, '14', NULL),
(6, 'Buy something useful!', 'SM Mega Mall', '', '2014-11-09 00:00:00', '2014-11-10 00:00:00', 1, '21', NULL),
(7, 'Create PDF !!!', 'APC', '', '2014-11-11 00:00:00', '2014-11-12 00:00:00', 1, '17', NULL),
(9, 'LOGS!!!', 'APC', '', '2014-11-10 00:00:00', '2014-11-12 00:00:00', 1, '17', NULL),
(10, 'Mass at St. Ignatius', 'Camp Aguinaldo', '', '2014-11-15 03:30:00', '2014-11-15 04:30:00', 0, '-1', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `employee_id`, `description`, `dateTime`) VALUES
(1, 1, 'Created baptismal certificate', '2014-11-07 20:46:59'),
(2, 3, 'Created baptismal certificate', '2014-11-10 02:10:10'),
(3, 1, 'Created baptismal certificate', '2014-11-11 21:45:16'),
(4, 3, 'Added church on the list', '2014-11-12 00:08:02'),
(5, 3, 'Added Saint Ignatious Chapel on the church list', '2014-11-12 00:09:41'),
(6, 3, 'Updated Saint Ignatious Chapel information', '2014-11-12 00:10:13'),
(7, 3, 'Added Fr. Jose Rizal on the priest list', '2014-11-12 00:14:03'),
(8, 3, 'Updated Fr. Jose Rizal information', '2014-11-12 00:14:45'),
(9, 1, 'Created Confirmation certificate', '2014-11-12 21:51:23'),
(10, 1, 'Updated baptismal certificate of Kadano, Gene Anthony ', '2014-11-12 21:57:36'),
(11, 1, 'Updated baptismal certificate of Kadano, Gene Anthony ', '2014-11-12 21:57:46'),
(12, 1, 'Created marriage certificate', '2014-11-12 22:02:50'),
(13, 3, 'Updated baptismal certificate of Montalban, Adrianne ', '2014-11-12 23:59:22'),
(14, 1, 'Created baptismal certificate', '2014-11-13 00:47:08'),
(15, 3, 'Created baptismal certificate', '2014-11-13 00:55:18'),
(16, 1, 'Created baptismal certificate', '2014-11-13 02:51:31'),
(17, 1, 'Updated baptismal certificate of Tero, John Emmanuel ', '2014-11-13 03:06:27'),
(18, 1, 'Created baptismal certificate', '2014-11-13 03:32:14'),
(19, 1, 'Created baptismal certificate', '2014-11-13 03:33:17'),
(20, 1, 'Created baptismal certificate', '2014-11-13 04:24:08');

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
  PRIMARY KEY (`id`),
  KEY `fk_marriage_Employee1_idx` (`Employee_id`),
  KEY `fk_marriage_person1_idx` (`bride_id`),
  KEY `fk_marriage_person2_idx` (`groom_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `mar_marDate`, `mar_priest`, `Employee_id`, `bride_id`, `groom_id`) VALUES
(1, '2014-11-07', 'Harley', 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mar_godparent`
--

CREATE TABLE IF NOT EXISTS `mar_godparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marriage_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_marGodParent_marriage1_idx` (`marriage_id`),
  KEY `fk_marGodParent_person1_idx` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mar_godparent`
--

INSERT INTO `mar_godparent` (`id`, `marriage_id`, `person_id`) VALUES
(1, 1, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `p_fname`, `p_middlename`, `p_lname`, `p_dateOfBirth`, `p_placeOfBirth`, `p_address`, `p_dateOfDeath`, `p_gender`, `p_father`, `p_mother`, `ccertificate`) VALUES
(1, 'Gene Anthony', '', 'Kadano', '1996-01-20', '', '', '0000-00-00', 'Male', 'Eugenio Kadano', 'Roselilie kadano', ''),
(2, 'John Emmanuel', '', 'Tero', '1996-04-16', 'Paranaque City', 'Paranaque City', '0000-00-00', 'Male', 'Blast Tero', 'Josie Tero', ''),
(3, 'Mark Anthony', '', 'Andes', '1995-10-20', '', '', '0000-00-00', 'Male', 'Antonio Andes Sr.', 'Miriam Andes', ''),
(4, 'Christine Joy', '', 'Ferrer', '1996-11-18', '', '', '0000-00-00', 'Female', 'Willie Ferrer', 'Ernestine Ferrer', ''),
(5, 'Adrianne', '', 'Montalban', '1995-06-09', '', '', '0000-00-00', 'Female', 'Arnulfo Montalban', 'Ping Montalban', ''),
(9, 'Kathleen Rose', '', 'Kadano', '1999-10-16', '', '', '0000-00-00', 'Female', 'Eugenio Kadano', 'Roselilie kadano', ''),
(11, 'John Patrick', '', 'Kadano', '2000-11-25', '', '', '0000-00-00', 'Male', 'Eugenio Kadano', 'Roselilie kadano', ''),
(12, 'Ryane Paul', '', 'Kadano', '1997-08-08', '', '', '0000-00-00', 'Male', 'Eugenio Kadano', 'Roselilie kadano', ''),
(18, 'Jerica', '', 'Flores', '1996-07-23', '', '', '0000-00-00', 'Female', 'Roel Flores', 'Emily Flores', 'Baptismal');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `priest`
--

INSERT INTO `priest` (`id`, `pfname`, `plname`, `pmname`, `dateOfBirth`, `placeOfBirth`, `crasm_no`, `exp_date`, `pr_father`, `pr_mother`, `ordainedAsPriest`, `placeOfOrdination`, `ordainingBishop`, `church_id`) VALUES
(1, 'Harley', 'Flores', 'Fernando', '1994-01-01', '', '2014-asfgbfvNYVBNIIdfdf-2016', '2016-09-01', '', '', '0000-00-00', '', '', 1),
(2, 'Jose', 'Rizal', 'Protacio', '1994-01-01', 'Laguna City', '2014-asfgbfvNYVBNIIdfdf-2016', '2016-11-09', '', '', '1998-11-20', '', 'Bishop Leopordo Tumulak', 3);

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
  ADD CONSTRAINT `fk_bapGodParent_baptismal1` FOREIGN KEY (`baptismal_id`) REFERENCES `baptismal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bapGodParent_person1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_confGodParent_confirmation1` FOREIGN KEY (`confirmation_id`) REFERENCES `confirmation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_confGodParent_person1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_marGodParent_marriage1` FOREIGN KEY (`marriage_id`) REFERENCES `marriage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marGodParent_person1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
