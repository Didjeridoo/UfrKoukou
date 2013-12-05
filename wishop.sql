-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 05 Décembre 2013 à 23:48
-- Version du serveur: 5.6.11
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `wishop`
--
CREATE DATABASE IF NOT EXISTS `wishop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wishop`;

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `color` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `color`
--

INSERT INTO `color` (`color`) VALUES
('noir');

-- --------------------------------------------------------

--
-- Structure de la table `draw`
--

CREATE TABLE IF NOT EXISTS `draw` (
  `draw` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`draw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`gender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gender`
--

INSERT INTO `gender` (`gender`) VALUES
('homme');

-- --------------------------------------------------------

--
-- Structure de la table `look`
--

CREATE TABLE IF NOT EXISTS `look` (
  `look` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`look`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `model` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`model`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `neck`
--

CREATE TABLE IF NOT EXISTS `neck` (
  `neck` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`neck`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pants`
--

CREATE TABLE IF NOT EXISTS `pants` (
  `pants` int(11) NOT NULL DEFAULT '0',
  `look` varchar(15) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `pattern` varchar(15) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  PRIMARY KEY (`pants`),
  KEY `look` (`look`,`size`,`pattern`,`product`),
  KEY `size` (`size`),
  KEY `pattern` (`pattern`),
  KEY `product` (`product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pattern`
--

CREATE TABLE IF NOT EXISTS `pattern` (
  `pattern` varchar(15) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `draw` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`pattern`),
  KEY `color` (`color`),
  KEY `draw` (`draw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`idproduct`),
  KEY `gender` (`gender`,`color`,`type`),
  KEY `color` (`color`),
  KEY `type` (`type`),
  KEY `gender_2` (`gender`,`color`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `shoes` int(11) NOT NULL DEFAULT '0',
  `size` int(11) DEFAULT NULL,
  `pattern` varchar(15) DEFAULT NULL,
  `model` varchar(15) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  PRIMARY KEY (`shoes`),
  KEY `size` (`size`),
  KEY `pattern` (`pattern`),
  KEY `model` (`model`),
  KEY `product` (`product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `size` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sleeve`
--

CREATE TABLE IF NOT EXISTS `sleeve` (
  `sleeve` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`sleeve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tshirt`
--

CREATE TABLE IF NOT EXISTS `tshirt` (
  `tshirt` int(11) NOT NULL DEFAULT '0',
  `sleeve` varchar(15) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `neck` varchar(15) DEFAULT NULL,
  `pattern` varchar(15) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  PRIMARY KEY (`tshirt`),
  KEY `fk_Caracteristiques_Manche1` (`sleeve`),
  KEY `size` (`size`),
  KEY `neck` (`neck`),
  KEY `pattern` (`pattern`),
  KEY `product` (`product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`type`) VALUES
('tshirt');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `pants`
--
ALTER TABLE `pants`
  ADD CONSTRAINT `pants_ibfk_2` FOREIGN KEY (`size`) REFERENCES `size` (`size`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Caracteristiques_Manche10` FOREIGN KEY (`look`) REFERENCES `look` (`look`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Pantalon_Produit1` FOREIGN KEY (`product`) REFERENCES `product` (`idproduct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pants_ibfk_1` FOREIGN KEY (`pattern`) REFERENCES `pattern` (`pattern`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pattern`
--
ALTER TABLE `pattern`
  ADD CONSTRAINT `fk_Motif_Couleur1` FOREIGN KEY (`color`) REFERENCES `color` (`color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Motif_Dessin1` FOREIGN KEY (`draw`) REFERENCES `draw` (`draw`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_Requete_Couleur1` FOREIGN KEY (`color`) REFERENCES `color` (`color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Produit_type1` FOREIGN KEY (`type`) REFERENCES `type` (`type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Requete_Sexe` FOREIGN KEY (`gender`) REFERENCES `gender` (`gender`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_4` FOREIGN KEY (`product`) REFERENCES `product` (`idproduct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`size`) REFERENCES `size` (`size`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoes_ibfk_2` FOREIGN KEY (`pattern`) REFERENCES `pattern` (`pattern`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoes_ibfk_3` FOREIGN KEY (`model`) REFERENCES `model` (`model`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tshirt`
--
ALTER TABLE `tshirt`
  ADD CONSTRAINT `wishop???pattern` FOREIGN KEY (`pattern`) REFERENCES `pattern` (`pattern`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Caracteristiques_col1` FOREIGN KEY (`neck`) REFERENCES `neck` (`neck`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Caracteristiques_Manche1` FOREIGN KEY (`sleeve`) REFERENCES `sleeve` (`sleeve`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Caracteristiques_Taille1` FOREIGN KEY (`size`) REFERENCES `size` (`size`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Tshirt_Produit1` FOREIGN KEY (`product`) REFERENCES `product` (`idproduct`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
