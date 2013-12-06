-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 06 Décembre 2013 à 02:35
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.19

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
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(24) NOT NULL,
  `type` varchar(50) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `manche` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `col` varchar(50) DEFAULT NULL,
  `motif` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `coupe` varchar(50) DEFAULT NULL,
  `modele` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `souhait`
--

CREATE TABLE IF NOT EXISTS `souhait` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `type` varchar(50) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `manche` varchar(50) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL,
  `col` varchar(50) DEFAULT NULL,
  `motif` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `coupe` varchar(50) DEFAULT NULL,
  `modele` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_product`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(24) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(512) DEFAULT NULL,
  `age` int(10) unsigned DEFAULT NULL,
  `firstname` varchar(16) DEFAULT NULL,
  `lastname` varchar(24) DEFAULT NULL,
  `activity` tinyint(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `souhait`
--
ALTER TABLE `souhait`
  ADD CONSTRAINT `souhait_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
