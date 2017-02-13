create DATABASE GestionStock;
use GestionStock;

create TABLE client (
	code varchar(20) PRIMARY KEY,
	nom varchar(50),
	societe varchar(30),
	adresse varchar(100),
	ville varchar(30)
);

create TABLE fournisseur (
	code varchar(20) PRIMARY KEY,
	nom varchar(50),
	societe varchar(30),
	adresse varchar(100),
	pays varchar(30),
	ville varchar(30)
);

create TABLE article (
	code varchar(20) PRIMARY KEY,
	designation varchar(100),
	stock int,
	famille varchar(30)
);

create TABLE livraison (
	num varchar(20) PRIMARY KEY,
	datel date,
	code varchar(20) ,
	designation varchar(100),
	quantite int
);

create TABLE reception (
	num varchar(20) PRIMARY KEY,
	datel date,
	code varchar(20),
	designation varchar(100),
	quantite int
);