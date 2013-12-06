create database if not exists wishop
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
USE wishop;

DROP TABLE IF EXISTS PRODUCT;

CREATE TABLE IF NOT EXISTS PRODUCT(
	id_product integer auto_increment,
	type varchar(50),
	genre varchar(50),
	couleur varchar(50),
	manche varchar(50),
	taille varchar(50),
	col varchar(50),
	motif varchar(50),
	marque varchar(50),
	coupe varchar(50),
	modele varchar(50),
	CONSTRAINT pk_construct PRIMARY KEY (id_product)
);

CREATE TABLE IF NOT EXISTS user (
  `username` varchar(24) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(512) DEFAULT NULL,
  `age` int(10) unsigned DEFAULT NULL,
  `firstname` varchar(16) DEFAULT NULL,
  `lastname` varchar(24) DEFAULT NULL,
  `activity` tinyint(1) NOT NULL,
  PRIMARY KEY (`username`)
);