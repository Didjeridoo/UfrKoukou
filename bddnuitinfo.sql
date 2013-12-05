SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`gender`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`gender` (
  `gender` TEXT NOT NULL,
  PRIMARY KEY (`gender`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`color`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`color` (
  `color` TEXT NOT NULL,
  PRIMARY KEY (`color`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`type` (
  `type` TEXT NOT NULL,
  PRIMARY KEY (`type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`product` (
  `idproduct` INT NOT NULL,
  `gender` TEXT NOT NULL,
  `color` INT NOT NULL,
  `type` TEXT NOT NULL,
  PRIMARY KEY (`idproduct`),
  INDEX `fk_Requete_Sexe_idx` (`gender` ASC),
  INDEX `fk_Requete_Couleur1_idx` (`color` ASC),
  INDEX `fk_Produit_type1_idx` (`type` ASC),
  CONSTRAINT `fk_Requete_Sexe`
    FOREIGN KEY (`gender`)
    REFERENCES `mydb`.`gender` (`gender`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Requete_Couleur1`
    FOREIGN KEY (`color`)
    REFERENCES `mydb`.`color` (`color`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produit_type1`
    FOREIGN KEY (`type`)
    REFERENCES `mydb`.`type` (`type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`neck`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`neck` (
  `neck` TEXT NOT NULL,
  PRIMARY KEY (`neck`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sleeve`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sleeve` (
  `sleeve` TEXT NOT NULL,
  PRIMARY KEY (`sleeve`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`size`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`size` (
  `size` INT NOT NULL,
  PRIMARY KEY (`size`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`draw`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`draw` (
  `draw` TEXT NOT NULL,
  PRIMARY KEY (`draw`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pattern`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pattern` (
  `pattern` INT NOT NULL,
  `color` TEXT NOT NULL,
  `draw` TEXT NOT NULL,
  INDEX `fk_Motif_Couleur1_idx` (`color` ASC),
  INDEX `fk_Motif_Dessin1_idx` (`draw` ASC),
  CONSTRAINT `fk_Motif_Couleur1`
    FOREIGN KEY (`color`)
    REFERENCES `mydb`.`color` (`color`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Motif_Dessin1`
    FOREIGN KEY (`draw`)
    REFERENCES `mydb`.`draw` (`draw`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tshirt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tshirt` (
  `tshirt` INT NOT NULL,
  `sleeve` TEXT NOT NULL,
  `size` TEXT NOT NULL,
  `neck` TEXT NOT NULL,
  `pattern` INT NOT NULL,
  `product` INT NOT NULL,
  PRIMARY KEY (`tshirt`),
  INDEX `fk_Caracteristiques_Manche1_idx` (`sleeve` ASC),
  INDEX `fk_Caracteristiques_Taille1_idx` (`size` ASC),
  INDEX `fk_Caracteristiques_col1_idx` (`neck` ASC),
  INDEX `fk_Tshirt_Motif1_idx` (`pattern` ASC),
  INDEX `fk_Tshirt_Produit1_idx` (`product` ASC),
  CONSTRAINT `fk_Caracteristiques_Manche1`
    FOREIGN KEY (`sleeve`)
    REFERENCES `mydb`.`sleeve` (`sleeve`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Caracteristiques_Taille1`
    FOREIGN KEY (`size`)
    REFERENCES `mydb`.`size` (`size`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Caracteristiques_col1`
    FOREIGN KEY (`neck`)
    REFERENCES `mydb`.`neck` (`neck`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tshirt_Motif1`
    FOREIGN KEY (`pattern`)
    REFERENCES `mydb`.`pattern` (`pattern`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tshirt_Produit1`
    FOREIGN KEY (`product`)
    REFERENCES `mydb`.`product` (`idproduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`look`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`look` (
  `look` TEXT NOT NULL,
  PRIMARY KEY (`look`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`size`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`size` (
  `size` INT NOT NULL,
  PRIMARY KEY (`size`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pants`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pants` (
  `pants` INT NOT NULL,
  `look` TEXT NOT NULL,
  `size` TEXT NOT NULL,
  `pattern` INT NOT NULL,
  `product` INT NOT NULL,
  PRIMARY KEY (`pants`),
  INDEX `fk_Caracteristiques_Manche1_idx` (`look` ASC),
  INDEX `fk_Caracteristiques_Taille1_idx` (`size` ASC),
  INDEX `fk_Pantalon_Motif1_idx` (`pattern` ASC),
  INDEX `fk_Pantalon_Produit1_idx` (`product` ASC),
  CONSTRAINT `fk_Caracteristiques_Manche10`
    FOREIGN KEY (`look`)
    REFERENCES `mydb`.`look` (`look`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Caracteristiques_Taille10`
    FOREIGN KEY (`size`)
    REFERENCES `mydb`.`size` (`size`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pantalon_Motif1`
    FOREIGN KEY (`pattern`)
    REFERENCES `mydb`.`pattern` (`pattern`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pantalon_Produit1`
    FOREIGN KEY (`product`)
    REFERENCES `mydb`.`product` (`idproduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`size`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`size` (
  `size` INT NOT NULL,
  PRIMARY KEY (`size`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`model`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`model` (
  `model` TEXT NOT NULL,
  PRIMARY KEY (`model`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`shoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`shoes` (
  `shoes` INT NOT NULL,
  `size` INT NOT NULL,
  `pattern` INT NOT NULL,
  `model` TEXT NOT NULL,
  `product` INT NOT NULL,
  PRIMARY KEY (`shoes`),
  INDEX `fk_Chaussure_Pointure1_idx` (`size` ASC),
  INDEX `fk_Chaussure_Motif1_idx` (`pattern` ASC),
  INDEX `fk_Chaussure_Model1_idx` (`model` ASC),
  INDEX `fk_Chaussure_Produit1_idx` (`product` ASC),
  CONSTRAINT `fk_Chaussure_Pointure1`
    FOREIGN KEY (`size`)
    REFERENCES `mydb`.`size` (`size`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chaussure_Motif1`
    FOREIGN KEY (`pattern`)
    REFERENCES `mydb`.`pattern` (`pattern`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chaussure_Model1`
    FOREIGN KEY (`model`)
    REFERENCES `mydb`.`model` (`model`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chaussure_Produit1`
    FOREIGN KEY (`product`)
    REFERENCES `mydb`.`product` (`idproduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
