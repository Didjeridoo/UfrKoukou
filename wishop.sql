create database if not exists wishop
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci; 
USE wishop;

DROP TABLE IF EXISTS PRODUCT;

CREATE TABLE PRODUCT(
	id_product integer auto_increment,
	type varchar,
	genre varchar,
	couleur varchar,
	manche varchar,
	taille varchar,
	col varchar,
	motif varchar,
	marque varchar,
	coupe varchar,
	modele varchar,
	CONSTRAINT pk_construct PRIMARY KEY (id_product)
);