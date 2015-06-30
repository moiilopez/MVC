-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema lpwii
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lpwii
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lpwii` DEFAULT CHARACTER SET utf8 ;
USE `lpwii` ;

-- -----------------------------------------------------
-- Table `lpwii`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lpwii`.`categoria` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lpwii`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lpwii`.`cidade` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(50) NULL DEFAULT NULL,
  `ESTADO` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lpwii`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lpwii`.`cliente` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` VARCHAR(100) NULL DEFAULT NULL,
  `EMAIL` VARCHAR(100) NULL DEFAULT NULL,
  `SENHA` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lpwii`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lpwii`.`produto` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  `DESCRICAO` VARCHAR(100) NOT NULL,
  `PRECO` INT(11) NOT NULL,
  `CUSTO` INT(10) NULL DEFAULT NULL,
  `QUANTIDADE` VARCHAR(100) NULL DEFAULT NULL,
  `CATEGORIA` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  INDEX `IDCATEGORIA_idx` (`CATEGORIA` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lpwii`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lpwii`.`usuario` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` VARCHAR(100) NOT NULL,
  `SENHA` VARCHAR(100) NOT NULL,
  `EMAIL` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

