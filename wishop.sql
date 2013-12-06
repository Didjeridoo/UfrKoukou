create database if not exists wishop
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
USE wishop;

DROP TABLE IF EXISTS PRODUCT;

CREATE TABLE PRODUCT(
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