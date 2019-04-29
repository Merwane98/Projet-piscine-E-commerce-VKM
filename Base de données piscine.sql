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

Insert into Admin (Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, AdresseMail, MotdePasse) values 
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
AnneeParution varchar(255) NOT NULL,
Edition varchar(255) NOT NULL
);

Insert into Livre (ID, Titre, Auteur, AnneeParution, Edition) values (1, "J'accuse", "Emile Zola", "1898", "Gallimard");
Insert into Livre (ID, Titre, Auteur, AnneeParution, Edition) values (2, "Le crime de l'Orient-Express", "Agatha Christie", "1975", "Lgf");
Insert into Livre (ID, Titre, Auteur, AnneeParution, Edition) values (3, "L'art de la guerre", "Sun Tzu", "2017", "Flammarion");
Insert into Livre (ID, Titre, Auteur, AnneeParution, Edition) values (4, "Le chien des Baskerville", "Arthur Conan Doyle", "2013", "Larousse");
Insert into Livre (ID, Titre, Auteur, AnneeParution, Edition) values (5, "Les misérables", "Victor Hugo", "2008", "Hachette jeunesse");


CREATE TABLE Musique(
ID int(11) NOT NULL PRIMARY KEY,
Titre varchar(255) NOT NULL,
Compositeur varchar(255) NOT NULL,
Album varchar(255) NOT NULL,
Annee varchar(255) NOT NULL
);

Insert into Musique(ID, Titre, Compositeur, Album) values (1, "Au DD", "PNL", "Deux Fères", "2019");
Insert into Musique(ID, Titre, Compositeur, Album) values (2, "Medicament", "Niska", "Single", "2019");
Insert into Musique(ID, Titre, Compositeur, Album) values (3, "Allumez le feu", "Johnny Halliday", "Ce que je sais", "1998");
Insert into Musique(ID, Titre, Compositeur, Album) values (4, "Ne me quitte pas", "Jacques Bre", "Quitter", "1959");
Insert into Musique(ID, Titre, Compositeur, Album) values (5, "Alexandrie Alexandra", "Claude François", "Magnolias for Ever", "1977");


CREATE TABLE Vetement(
ID int(11) NOT NULL PRIMARY KEY,
Nom varchar(255) NOT NULL,
Couleur varchar(255) NOT NULL,
Type varchar(255) NOT NULL,
Taille int(11) NOT NULL
);

Insert into Vetement(ID, Nom, Couleur, Type, Taille) values (1, "T-shirt superman", "Blanc", "Haut", "M");
Insert into Vetement(ID, Nom, Couleur, Type, Taille) values (2, "Jean bleu", "bleu", "Bas", "40");
Insert into Vetement(ID, Nom, Couleur, Type, Taille) values (3, "Manteau Long", "Camel", "Haut", "M");
Insert into Vetement(ID, Nom, Couleur, Type, Taille) values (4, "Chaussures de ville", "Noir", "Bas", "43");
Insert into Vetement(ID, Nom, Couleur, Type, Taille) values (1, "Sweat à capuche", "Gris", "Haut", "M");

CREATE TABLE SportLoisir(
ID int(11) NOT NULL PRIMARY KEY,
Nom varchar(255) NOT NULL,
Couleur varchar(255) NOT NULL,
Marque varchar(255) NOT NULL
);

Insert into SportLoisir(ID, Nom, Couleur,Type) values (1,"Ballon de Foot", "Blanc", "Nike");
Insert into SportLoisir(ID, Nom, Couleur,Type) values (1,"Raquette de tennis", "Noir", "Babolat");
Insert into SportLoisir(ID, Nom, Couleur,Type) values (1,"Ballon de Basket", "Marron", "Spalding");
Insert into SportLoisir(ID, Nom, Couleur,Type) values (1,"Gourde", "Noir", "Domyos");
Insert into SportLoisir(ID, Nom, Couleur,Type) values (1,"Brassard", "Blanc", "Adidas");