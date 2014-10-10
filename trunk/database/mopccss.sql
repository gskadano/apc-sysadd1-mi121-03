SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mopccss` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mopccss` ;

-- -----------------------------------------------------
-- Table `mopccss`.`person`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`person` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `p_fname` VARCHAR(45) NOT NULL,
  `p_middlename` VARCHAR(45) NULL DEFAULT NULL,
  `p_lname` VARCHAR(45) NOT NULL,
  `p_dateOfBirth` DATE NOT NULL,
  `p_placeOfBirth` VARCHAR(45) NULL DEFAULT NULL,
  `p_address` VARCHAR(100) NULL DEFAULT NULL,
  `p_dateOfDeath` DATE NULL DEFAULT NULL,
  `p_gender` VARCHAR(45) NOT NULL,
  `p_father` VARCHAR(100) NULL,
  `p_mother` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8;


-- -----------------------------------------------------
-- Table `mopccss`.`church`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`church` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ch_name` VARCHAR(45) NULL DEFAULT NULL,
  `ch_address` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4;


-- -----------------------------------------------------
-- Table `mopccss`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `emp_username` VARCHAR(45) NOT NULL,
  `emp_password` VARCHAR(45) NOT NULL,
  `emp_usertype` VARCHAR(45) NOT NULL,
  `emp_fname` VARCHAR(45) NOT NULL,
  `emp_lname` VARCHAR(45) NOT NULL,
  `emp_hireDate` DATE NULL DEFAULT NULL,
  `emp_retireDate` DATE NULL DEFAULT NULL,
  `emp_chapAssign` VARCHAR(45) NULL DEFAULT NULL,
  `church_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Employee_church1_idx` (`church_id` ASC),
  CONSTRAINT `fk_Employee_church1`
    FOREIGN KEY (`church_id`)
    REFERENCES `mopccss`.`church` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`baptismal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`baptismal` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `bap_bapDate` DATE NOT NULL,
  `bap_priest` VARCHAR(45) NULL DEFAULT NULL,
  `bap_church` VARCHAR(45) NULL DEFAULT NULL,
  `bap_churchAdd` VARCHAR(100) NULL DEFAULT NULL,
  `Employee_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_baptismal_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_baptismal_client1_idx` (`person_id` ASC),
  CONSTRAINT `fk_baptismal_client1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mopccss`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`bap_godparent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`bap_godparent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `baptismal_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_bapGodParent_baptismal1_idx` (`baptismal_id` ASC),
  INDEX `fk_bapGodParent_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_bapGodParent_baptismal1`
    FOREIGN KEY (`baptismal_id`)
    REFERENCES `mopccss`.`baptismal` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bapGodParent_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`confirmation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`confirmation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `conf_confDate` DATE NOT NULL,
  `conf_bapChurch` VARCHAR(45) NULL DEFAULT NULL,
  `conf_bapAdd` VARCHAR(100) NULL DEFAULT NULL,
  `conf_church` VARCHAR(45) NULL DEFAULT NULL,
  `conf_priest` VARCHAR(45) NULL DEFAULT NULL,
  `Employee_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_confirmation_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_confirmation_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_confirmation_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mopccss`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`conf_godparent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`conf_godparent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `confirmation_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_confGodParent_confirmation1_idx` (`confirmation_id` ASC),
  INDEX `fk_confGodParent_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_confGodParent_confirmation1`
    FOREIGN KEY (`confirmation_id`)
    REFERENCES `mopccss`.`confirmation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confGodParent_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`marriage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`marriage` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `mar_marDate` DATE NULL DEFAULT NULL,
  `mar_priest` VARCHAR(45) NULL DEFAULT NULL,
  `Employee_id` INT(11) NOT NULL,
  `bride_id` INT(11) NOT NULL,
  `groom_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marriage_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_marriage_person1_idx` (`bride_id` ASC),
  INDEX `fk_marriage_person2_idx` (`groom_id` ASC),
  CONSTRAINT `fk_marriage_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mopccss`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person1`
    FOREIGN KEY (`bride_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person2`
    FOREIGN KEY (`groom_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`mar_godparent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`mar_godparent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `marriage_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marGodParent_marriage1_idx` (`marriage_id` ASC),
  INDEX `fk_marGodParent_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_marGodParent_marriage1`
    FOREIGN KEY (`marriage_id`)
    REFERENCES `mopccss`.`marriage` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marGodParent_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`position`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`position` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `rank` VARCHAR(45) NULL DEFAULT NULL,
  `afpServiceNum` INT(11) NULL DEFAULT NULL,
  `branchOfService` VARCHAR(45) NULL DEFAULT NULL,
  `unitAddress` VARCHAR(45) NULL DEFAULT NULL,
  `positioncol` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_position_client_idx` (`client_id` ASC),
  CONSTRAINT `fk_position_client`
    FOREIGN KEY (`client_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mopccss`.`priest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`priest` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pfname` VARCHAR(45) NOT NULL,
  `plname` VARCHAR(45) NOT NULL,
  `church_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_priest_church1_idx` (`church_id` ASC),
  CONSTRAINT `fk_priest_church1`
    FOREIGN KEY (`church_id`)
    REFERENCES `mopccss`.`church` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`person`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`person` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `p_fname` VARCHAR(45) NOT NULL,
  `p_middlename` VARCHAR(45) NULL DEFAULT NULL,
  `p_lname` VARCHAR(45) NOT NULL,
  `p_dateOfBirth` DATE NOT NULL,
  `p_placeOfBirth` VARCHAR(45) NULL DEFAULT NULL,
  `p_address` VARCHAR(100) NULL DEFAULT NULL,
  `p_dateOfDeath` DATE NULL DEFAULT NULL,
  `p_gender` VARCHAR(45) NOT NULL,
  `father_id` INT(11) NOT NULL,
  `mother_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_person_person1_idx` (`father_id` ASC),
  INDEX `fk_person_person2_idx` (`mother_id` ASC),
  CONSTRAINT `fk_person_person1`
    FOREIGN KEY (`father_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_person_person2`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8;


-- -----------------------------------------------------
-- Table `mydb`.`church`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`church` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ch_name` VARCHAR(45) NULL DEFAULT NULL,
  `ch_address` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4;


-- -----------------------------------------------------
-- Table `mydb`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `emp_username` VARCHAR(45) NOT NULL,
  `emp_password` VARCHAR(45) NOT NULL,
  `emp_usertype` VARCHAR(45) NOT NULL,
  `emp_fname` VARCHAR(45) NOT NULL,
  `emp_lname` VARCHAR(45) NOT NULL,
  `emp_hireDate` DATE NULL DEFAULT NULL,
  `emp_retireDate` DATE NULL DEFAULT NULL,
  `emp_chapAssign` VARCHAR(45) NULL DEFAULT NULL,
  `church_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Employee_church1_idx` (`church_id` ASC),
  CONSTRAINT `fk_Employee_church1`
    FOREIGN KEY (`church_id`)
    REFERENCES `mydb`.`church` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`baptismal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`baptismal` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `bap_bapDate` DATE NOT NULL,
  `bap_priest` VARCHAR(45) NULL DEFAULT NULL,
  `bap_church` VARCHAR(45) NULL DEFAULT NULL,
  `bap_churchAdd` VARCHAR(100) NULL DEFAULT NULL,
  `Employee_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  `father_id` INT(11) NOT NULL,
  `mother_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_baptismal_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_baptismal_client1_idx` (`person_id` ASC),
  INDEX `fk_baptismal_person1_idx` (`father_id` ASC),
  INDEX `fk_baptismal_person2_idx` (`mother_id` ASC),
  CONSTRAINT `fk_baptismal_client1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mydb`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_person1`
    FOREIGN KEY (`father_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_person2`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`bap_godparent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`bap_godparent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `baptismal_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_bapGodParent_baptismal1_idx` (`baptismal_id` ASC),
  INDEX `fk_bapGodParent_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_bapGodParent_baptismal1`
    FOREIGN KEY (`baptismal_id`)
    REFERENCES `mydb`.`baptismal` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bapGodParent_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`confirmation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`confirmation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `conf_confDate` DATE NOT NULL,
  `conf_bapChurch` VARCHAR(45) NULL DEFAULT NULL,
  `conf_bapAdd` VARCHAR(100) NULL DEFAULT NULL,
  `conf_church` VARCHAR(45) NULL DEFAULT NULL,
  `conf_priest` VARCHAR(45) NULL DEFAULT NULL,
  `Employee_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  `father_id` INT(11) NOT NULL,
  `mother_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_confirmation_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_confirmation_person1_idx` (`person_id` ASC),
  INDEX `fk_confirmation_person2_idx` (`father_id` ASC),
  INDEX `fk_confirmation_person3_idx` (`mother_id` ASC),
  CONSTRAINT `fk_confirmation_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mydb`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person2`
    FOREIGN KEY (`father_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person3`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`conf_godparent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`conf_godparent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `confirmation_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_confGodParent_confirmation1_idx` (`confirmation_id` ASC),
  INDEX `fk_confGodParent_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_confGodParent_confirmation1`
    FOREIGN KEY (`confirmation_id`)
    REFERENCES `mydb`.`confirmation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confGodParent_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`marriage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`marriage` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `mar_marDate` DATE NULL DEFAULT NULL,
  `mar_priest` VARCHAR(45) NULL DEFAULT NULL,
  `Employee_id` INT(11) NOT NULL,
  `bride_id` INT(11) NOT NULL,
  `groom_id` INT(11) NOT NULL,
  `father_id` INT(11) NOT NULL,
  `mother_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marriage_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_marriage_person1_idx` (`bride_id` ASC),
  INDEX `fk_marriage_person2_idx` (`groom_id` ASC),
  INDEX `fk_marriage_person3_idx` (`father_id` ASC),
  INDEX `fk_marriage_person4_idx` (`mother_id` ASC),
  CONSTRAINT `fk_marriage_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mydb`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person1`
    FOREIGN KEY (`bride_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person2`
    FOREIGN KEY (`groom_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person3`
    FOREIGN KEY (`father_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person4`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`mar_godparent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`mar_godparent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `marriage_id` INT(11) NOT NULL,
  `person_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marGodParent_marriage1_idx` (`marriage_id` ASC),
  INDEX `fk_marGodParent_person1_idx` (`person_id` ASC),
  CONSTRAINT `fk_marGodParent_marriage1`
    FOREIGN KEY (`marriage_id`)
    REFERENCES `mydb`.`marriage` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marGodParent_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`position`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`position` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `rank` VARCHAR(45) NULL DEFAULT NULL,
  `afpServiceNum` INT(11) NULL DEFAULT NULL,
  `branchOfService` VARCHAR(45) NULL DEFAULT NULL,
  `unitAddress` VARCHAR(45) NULL DEFAULT NULL,
  `positioncol` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_position_client_idx` (`client_id` ASC),
  CONSTRAINT `fk_position_client`
    FOREIGN KEY (`client_id`)
    REFERENCES `mydb`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`priest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`priest` (
  `id` INT NOT NULL,
  `pfname` VARCHAR(45) NOT NULL,
  `plname` VARCHAR(45) NOT NULL,
  `church_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_priest_church1_idx` (`church_id` ASC),
  CONSTRAINT `fk_priest_church1`
    FOREIGN KEY (`church_id`)
    REFERENCES `mydb`.`church` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
