SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mopccss` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mopccss` ;

-- -----------------------------------------------------
-- Table `ERD_MOP`.`church`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`church` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ch_name` VARCHAR(45) NULL,
  `ch_address` VARCHAR(100) NULL,
  `ch_priest` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `emp_username` VARCHAR(45) NOT NULL,
  `emp_password` VARCHAR(45) NOT NULL,
  `emp_usertype` VARCHAR(45) NOT NULL,
  `emp_fname` VARCHAR(45) NOT NULL,
  `emp_lname` VARCHAR(45) NOT NULL,
  `emp_hireDate` DATE NULL,
  `emp_retireDate` DATE NULL,
  `emp_chapAssign` VARCHAR(45) NULL,
  `church_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Employee_church1_idx` (`church_id` ASC),
  CONSTRAINT `fk_Employee_church1`
    FOREIGN KEY (`church_id`)
    REFERENCES `mopccss`.`church` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`person`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`person` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `p_fname` VARCHAR(45) NOT NULL,
  `p_middlename` VARCHAR(45) NULL,
  `p_lname` VARCHAR(45) NOT NULL,
  `p_dateOfBirth` DATE NOT NULL,
  `p_placeOfBirth` VARCHAR(45) NULL,
  `p_address` VARCHAR(100) NULL,
  `p_dateOfDeath` DATE NULL,
  `p_gender` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`position`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`position` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rank` VARCHAR(45) NULL,
  `afpServiceNum` INT(11) NULL,
  `branchOfService` VARCHAR(45) NULL,
  `unitAddress` VARCHAR(45) NULL,
  `positioncol` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_position_client_idx` (`client_id` ASC),
  CONSTRAINT `fk_position_client`
    FOREIGN KEY (`client_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`marriage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`marriage` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mar_marDate` DATE NULL,
  `mar_priest` VARCHAR(45) NULL,
  `Employee_id` INT NOT NULL,
  `bride_id` INT NOT NULL,
  `groom_id` INT NOT NULL,
  `father_id` INT NOT NULL,
  `mother_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_marriage_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_marriage_person1_idx` (`bride_id` ASC),
  INDEX `fk_marriage_person2_idx` (`groom_id` ASC),
  INDEX `fk_marriage_person3_idx` (`father_id` ASC),
  INDEX `fk_marriage_person4_idx` (`mother_id` ASC),
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
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person3`
    FOREIGN KEY (`father_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marriage_person4`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`confirmation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`confirmation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `conf_confDate` DATE NOT NULL,
  `conf_bapChurch` VARCHAR(45) NULL,
  `conf_bapAdd` VARCHAR(100) NULL,
  `conf_church` VARCHAR(45) NULL,
  `conf_priest` VARCHAR(45) NULL,
  `Employee_id` INT NOT NULL,
  `person_id` INT NOT NULL,
  `father_id` INT NOT NULL,
  `mother_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_confirmation_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_confirmation_person1_idx` (`person_id` ASC),
  INDEX `fk_confirmation_person2_idx` (`father_id` ASC),
  INDEX `fk_confirmation_person3_idx` (`mother_id` ASC),
  CONSTRAINT `fk_confirmation_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mopccss`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person2`
    FOREIGN KEY (`father_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_confirmation_person3`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`baptismal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`baptismal` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `bap_bapDate` DATE NOT NULL,
  `bap_priest` VARCHAR(45) NULL,
  `bap_church` VARCHAR(45) NULL,
  `bap_churchAdd` VARCHAR(100) NULL,
  `Employee_id` INT NOT NULL,
  `person_id` INT NOT NULL,
  `father_id` INT NOT NULL,
  `mother_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_baptismal_Employee1_idx` (`Employee_id` ASC),
  INDEX `fk_baptismal_client1_idx` (`person_id` ASC),
  INDEX `fk_baptismal_person1_idx` (`father_id` ASC),
  INDEX `fk_baptismal_person2_idx` (`mother_id` ASC),
  CONSTRAINT `fk_baptismal_Employee1`
    FOREIGN KEY (`Employee_id`)
    REFERENCES `mopccss`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_client1`
    FOREIGN KEY (`person_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_person1`
    FOREIGN KEY (`father_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_baptismal_person2`
    FOREIGN KEY (`mother_id`)
    REFERENCES `mopccss`.`person` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`bap_GodParent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`bap_GodParent` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `baptismal_id` INT NOT NULL,
  `person_id` INT NOT NULL,
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
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`conf_GodParent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`conf_GodParent` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `confirmation_id` INT NOT NULL,
  `person_id` INT NOT NULL,
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
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ERD_MOP`.`mar_GodParent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mopccss`.`mar_GodParent` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marriage_id` INT NOT NULL,
  `person_id` INT NOT NULL,
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
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
