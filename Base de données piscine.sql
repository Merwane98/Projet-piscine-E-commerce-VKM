CREATE TABLE Admin(
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL PRIMARY KEY,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL,
MotdePasse varchar(255) NOT NULL
);

Isert into Admin (Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, AdresseMail, MotdePasse) values 
("Monsieur", "Easter", "Admin", '1970-10-10', "0753902216", "30 avenue des Champs Elysées", "75008", "Paris", "admin.easter@hotmail.fr", "eceamazon");

CREATE TABLE Acheteur(
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL PRIMARY KEY,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL,
MotdePasse varchar(255) NOT NULL
);


CREATE TABLE Vendeur(
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL PRIMARY KEY,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL,
MotdePasse varchar(255) NOT NULL
);

CREATE TABLE Livre(
ID int(11) NOT NULL PRIMARY KEY,
Titre varchar(255) NOT NULL,
Auteur varchar(255) NOT NULL,
AnnéeParution varchar(255) NOT NULL,
Edition varchar(255) NOT NULL
);

CREATE TABLE Musique(
ID int(11) NOT NULL PRIMARY KEY,
Titre varchar(255) NOT NULL,
Compositeur varchar(255) NOT NULL,
Album varchar(255) NOT NULL
);

CREATE TABLE Vetement(
ID int(11) NOT NULL PRIMARY KEY,
Nom varchar(255) NOT NULL,
Couleur varchar(255) NOT NULL,
Type varchar(255) NOT NULL,
Taille int(11) NOT NULL
);

CREATE TABLE SportLoisir(
ID int(11) NOT NULL PRIMARY KEY,
Nom varchar(255) NOT NULL,
Couleur varchar(255) NOT NULL,
Type varchar(255) NOT NULL,
Taille varchar(255) NOT NULL
);

