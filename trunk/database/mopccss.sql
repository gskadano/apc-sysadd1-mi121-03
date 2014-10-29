-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2014 at 08:57 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `baptismal`
--

INSERT INTO `baptismal` (`id`, `bap_bapDate`, `bap_priest`, `bap_church`, `bap_churchAdd`, `Employee_id`, `person_id`) VALUES
(8, '2014-10-31', 'Harley', 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon city', 1, 31);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bap_godparent`
--

INSERT INTO `bap_godparent` (`id`, `baptismal_id`, `person_id`) VALUES
(11, 8, 25);

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

CREATE TABLE IF NOT EXISTS `church` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(45) DEFAULT NULL,
  `ch_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `church`
--

INSERT INTO `church` (`id`, `ch_name`, `ch_address`) VALUES
(1, 'Saint Ignatious Cathedral', 'Camp Aguinaldo, Quezon city'),
(6, 'Shrine of Saint Therese of the Child Jesus', 'Pasay City');

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
(1, '2014-10-31', 'Saint Francis Cathedral', 'Cubao, Quezon City', 'Shrine of Saint Therese of the Child Jesus', 'Harley', 1, 26);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_username`, `emp_password`, `emp_usertype`, `emp_fname`, `emp_lname`, `emp_hireDate`, `emp_retireDate`, `emp_chapAssign`, `church_id`) VALUES
(1, 'gskadano', 'f48c9fe366f3c3f58ea9b18eb9724f1f01c6ab9390fb3c045d8e6690e1ee4761', 'Admin', 'Gene Anthony', 'Kadano', '2014-09-01', NULL, 'MOP ', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `mar_marDate`, `mar_priest`, `Employee_id`, `bride_id`, `groom_id`) VALUES
(2, '2014-10-31', 'Harley', 1, 29, 27);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mar_godparent`
--

INSERT INTO `mar_godparent` (`id`, `marriage_id`, `person_id`) VALUES
(2, 2, 28),
(3, 2, 26);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `p_fname`, `p_middlename`, `p_lname`, `p_dateOfBirth`, `p_placeOfBirth`, `p_address`, `p_dateOfDeath`, `p_gender`, `p_father`, `p_mother`) VALUES
(25, 'Gene Anthony', 'Sabiniano', 'Kadano', '1996-01-20', 'Quezon City', 'Camp Aguinaldo, Quezon City', '0000-00-00', 'Male', 'Eugenio Kadano', 'Roselilie kadano'),
(26, 'John Emmanuel', 'J', 'Tero', '1996-04-16', 'Paranaque City', 'Paranaque City', '0000-00-00', 'Male', 'Blast Tero', 'Josie Tero'),
(27, 'Mark Anthony', 'Suezo', 'Andes', '1995-10-20', 'Taguig City', 'Taguig City', '0000-00-00', 'Male', 'Antonio Andes Sr.', 'Miriam Andes'),
(28, 'John Michael', 'Santo', 'Santos', '1996-08-13', 'Baclaran', 'Baclaran', '0000-00-00', 'Male', 'Isagani Santo', 'Ceferina Santos'),
(29, 'Christine Joy', 'Aggabao', 'Ferrer', '1995-11-18', 'Laguna City', 'Laguna City', '0000-00-00', 'Female', 'Joel Ferrer', 'Ernestine Ferrer'),
(30, 'Adrianne', 'Joseph', 'Montalban', '1995-06-09', 'Pasay City', 'Pasay City', '0000-00-00', 'Female', 'Arnulfo Montalban', 'Ping Montalban'),
(31, 'Jerica', '', 'Flores', '1996-12-18', 'Makati City', 'Makati City', '0000-00-00', 'Female', 'Roel Flores', 'Emily Flores');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `rank`, `afpSerialNum`, `branchOfService`, `unitAddress`, `client_id`) VALUES
(1, 'Technical Sergeant', '673400871', 'Air Force', 'Villamore Air Base', 26);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `priest`
--

INSERT INTO `priest` (`id`, `pfname`, `plname`, `pmname`, `dateOfBirth`, `placeOfBirth`, `crasm_no`, `exp_date`, `pr_father`, `pr_mother`, `ordainedAsPriest`, `placeOfOrdination`, `ordainingBishop`, `church_id`) VALUES
(6, 'Harley', 'Flores', 'B', '1994-01-27', 'Quezon City', '2014-asfgbfvNYVBNIIdfdf-2016', '2016-07-13', '', '', '1994-10-19', 'Saint Ignatious Cathedral', 'Bishop Leopordo Tumulak', 1);

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
