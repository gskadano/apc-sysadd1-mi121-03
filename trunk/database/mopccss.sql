-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2014 at 09:37 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
  `father_id` int(11) NOT NULL,
  `mother_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_baptismal_Employee1_idx` (`Employee_id`),
  KEY `fk_baptismal_client1_idx` (`person_id`),
  KEY `fk_baptismal_person1_idx` (`father_id`),
  KEY `fk_baptismal_person2_idx` (`mother_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `baptismal`
--

INSERT INTO `baptismal` (`id`, `bap_bapDate`, `bap_priest`, `bap_church`, `bap_churchAdd`, `Employee_id`, `person_id`, `father_id`, `mother_id`) VALUES
(1, '2014-08-06', 'Father William Dionisio', 'Saint Ignatius', 'Quezon City', 18, 5, 1, 6),
(2, '2014-08-12', 'Father William Dionisio', 'Saint Ignatius', 'Quezon City', 18, 2, 4, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bap_godparent`
--

INSERT INTO `bap_godparent` (`id`, `baptismal_id`, `person_id`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

CREATE TABLE IF NOT EXISTS `church` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(45) DEFAULT NULL,
  `ch_address` varchar(100) DEFAULT NULL,
  `ch_priest` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `church`
--

INSERT INTO `church` (`id`, `ch_name`, `ch_address`, `ch_priest`) VALUES
(2, 'Saint Ignatius', 'Quezon City', 'Father William Dionisio'),
(3, 'St. Alphionsius', 'Magallanes, Makati City', 'Fr. Joel Nava');

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
  `father_id` int(11) NOT NULL,
  `mother_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_confirmation_Employee1_idx` (`Employee_id`),
  KEY `fk_confirmation_person1_idx` (`person_id`),
  KEY `fk_confirmation_person2_idx` (`father_id`),
  KEY `fk_confirmation_person3_idx` (`mother_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `conf_confDate`, `conf_bapChurch`, `conf_bapAdd`, `conf_church`, `conf_priest`, `Employee_id`, `person_id`, `father_id`, `mother_id`) VALUES
(2, '2014-08-15', 'St. Therese of the Child Jesus', 'Pasay City', 'Mary Help of Christians Parish', 'Father Harley Flores', 18, 1, 4, 3),
(3, '2014-08-19', 'St. Therese of the Child Jesus', 'Pasay City', 'Saint Ignatius', 'Father William Dionisio', 18, 4, 1, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `conf_godparent`
--

INSERT INTO `conf_godparent` (`id`, `confirmation_id`, `person_id`) VALUES
(1, 2, 5),
(2, 3, 1),
(13, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_username` varchar(45) NOT NULL,
  `emp_password` varchar(45) NOT NULL,
  `emp_usertype` varchar(45) NOT NULL,
  `emp_fname` varchar(45) NOT NULL,
  `emp_lname` varchar(45) NOT NULL,
  `emp_hireDate` date DEFAULT NULL,
  `emp_retireDate` date DEFAULT NULL,
  `emp_chapAssign` varchar(45) DEFAULT NULL,
  `church_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Employee_church1_idx` (`church_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_username`, `emp_password`, `emp_usertype`, `emp_fname`, `emp_lname`, `emp_hireDate`, `emp_retireDate`, `emp_chapAssign`, `church_id`) VALUES
(18, 'hssantos', '123', 'admin', 'John Michael', 'Santos', '2014-08-25', '2034-11-30', 'MOP Chancery', 2),
(19, 'mdronquillo', '123', 'admin', 'Mark Joshua', 'Ronquillo', '2014-08-18', '2033-08-19', 'MOP Chancery', 2);

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
  `father_id` int(11) NOT NULL,
  `mother_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_marriage_Employee1_idx` (`Employee_id`),
  KEY `fk_marriage_person1_idx` (`bride_id`),
  KEY `fk_marriage_person2_idx` (`groom_id`),
  KEY `fk_marriage_person3_idx` (`father_id`),
  KEY `fk_marriage_person4_idx` (`mother_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `mar_marDate`, `mar_priest`, `Employee_id`, `bride_id`, `groom_id`, `father_id`, `mother_id`) VALUES
(1, '0000-00-00', 'Father William Dionisio', 18, 3, 4, 2, 5),
(2, '2014-08-12', 'Fr. Joel Nava', 19, 5, 1, 2, 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mar_godparent`
--

INSERT INTO `mar_godparent` (`id`, `marriage_id`, `person_id`) VALUES
(1, 1, 4),
(2, 1, 5);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `p_fname`, `p_middlename`, `p_lname`, `p_dateOfBirth`, `p_placeOfBirth`, `p_address`, `p_dateOfDeath`, `p_gender`) VALUES
(1, 'John Emmanuel', 'Juarez', 'Tero', '1996-04-22', 'Manila City', 'Better Living Subdivision, Paranaque City', '0000-00-00', 'Male'),
(2, 'Gene Anthony', 'Sabiniano', 'Kadano', '1996-01-20', 'Quezon City', 'Camp Aguinaldo, Quezon City', '0000-00-00', 'Male'),
(3, 'Christine Joy', 'Aggabao', 'Ferrer', '1995-11-18', 'Laguna City', 'Balibago Sta.Rosa, Laguna', '0000-00-00', 'Female'),
(4, 'Mark Anthony', 'Suezo', 'Andes', '1995-10-20', 'Makati City', 'Palar, Makati City', '0000-00-00', 'Male'),
(5, 'Adrianne', 'Joseph', 'Montalban', '1995-06-09', 'Pasay City', 'Villamor Air Base, Pasay City', '0000-00-00', 'Female'),
(6, 'Jerica', 'Natividad', 'Flores', '1996-04-28', 'Makati City', 'Makati City', '0000-00-00', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(45) DEFAULT NULL,
  `afpServiceNum` int(11) DEFAULT NULL,
  `branchOfService` varchar(45) DEFAULT NULL,
  `unitAddress` varchar(45) DEFAULT NULL,
  `positioncol` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_position_client_idx` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `rank`, `afpServiceNum`, `branchOfService`, `unitAddress`, `positioncol`, `client_id`) VALUES
(3, '', NULL, '', '', '', 3),
(4, 'Technical Sergeant', 123, 'AFP', 'test', 'test', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baptismal`
--
ALTER TABLE `baptismal`
  ADD CONSTRAINT `fk_baptismal_client1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_baptismal_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_baptismal_person1` FOREIGN KEY (`father_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_baptismal_person2` FOREIGN KEY (`mother_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_confirmation_person1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_confirmation_person2` FOREIGN KEY (`father_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_confirmation_person3` FOREIGN KEY (`mother_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `marriage`
--
ALTER TABLE `marriage`
  ADD CONSTRAINT `fk_marriage_Employee1` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marriage_person1` FOREIGN KEY (`bride_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marriage_person2` FOREIGN KEY (`groom_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marriage_person3` FOREIGN KEY (`father_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marriage_person4` FOREIGN KEY (`mother_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
