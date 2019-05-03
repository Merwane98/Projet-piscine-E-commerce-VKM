CREATE TABLE Acheteur(
Type varchar(255),
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL PRIMARY KEY,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
Paiement varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL,
MotdePasse varchar(255) NOT NULL
);


CREATE TABLE Vendeur(
Type varchar(255),
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL PRIMARY KEY,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL,
MotdePasse varchar(255) NOT NULL,
Photo varchar(1000) NOT NULL,
Fondecran varchar(1000) NOT NULL
);

CREATE TABLE Article(
ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
Type varchar(255) NOT NULL,
Titre varchar(255) NOT NULL,
Description text NOT NULL,
Quantité int(11) NOT NULL,
Prix varchar(255) NOT NULL,
URLimage varchar(1000) NOT NULL,
Vendeur varchar(255) NOT NULL
);

Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livre", "J accuse", "Emile ZOla, 1898, Gallimard", 6, "5,95€", "http://www.folio-lesite.fr/gallimard/download/imagehd/9782072713781", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livre", "Le crime de l Orient-Express", "Agatha Christie, 1975, Lgf", 3, "3,25€", "https://www.media-rdc.com/medias/b22179a8fb3d3b1d88f3f58067883300/p_580x580/76974770-14913938.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livre", "L art de la guerre", "Sun Tzu, 2017, Flammarion", 12, "6,90€", "https://static.fnac-static.com/multimedia/Images/FR/NR/fe/cc/03/249086/1540-1/tsp20150929154129/L-art-de-la-guerre.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livre", "Le chien des Baskerville", "Arthur Conan Doyle, 2013, Larousse", 7, "4,50€", "https://www.laprocure.com/cache/couvertures/9788366116023.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livre", "Les misérables", "Victor Hugo, 2008, Hachette Jeunesse", 5, "8,00€", "https://media.cultura.com/media/catalog/product/cache/1/image/500x500/0dc2d03fe217f8c83829496872af24a0/l/e/les-miserables-9782010008993_0.jpg?t=1509577615", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musique", "Au DD", "PNL, Deux Fères, 2019", 20, "1,90€", "https://images.genius.com/c79ebb7e8dff82dc9c064508ec43f18b.600x600x1.png", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musique", "Medicament", "Niska, Single, 2019", 20, "1,90€", "https://www.newzikstreet.com/wp-content/uploads/2019/04/niska-booba-medicament-son-600x600.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musique", "Allumez le feu", "Johnny Halliday, Ce que je sais, 1998", 10, "1,90€", "https://i.ytimg.com/vi/9eN1DVEBatA/hqdefault.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musique", "Ne me quitte pas", "Jacques Brel, Quitter, 1959", 15, "1,90€", "https://img.discogs.com/ks4JGsVw6uGZ1HgttR73UOc3EMI=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1183087-1291570478.jpeg.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musique", "Alexandrie Alexandra", "Claude François, Magnolias for Ever, 1977", 30, "1,90€", "https://images-na.ssl-images-amazon.com/images/I/A1db988xYoL._SY355_.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetement", "T-shirt superman", "Blanc, Haut, M", 11, "5,95€", "https://images-na.ssl-images-amazon.com/images/I/61rlryPr4ML._UX385_.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetement", "Jean bleu", "Bleu, Bas, 40", 40, "24,95€", "https://lp2.hm.com/hmgoepprod?set=source[/bb/a6/bba6a64503292335331611669890ac9d6b5c61d1.jpg],origin[dam],category[ladies_jeans_skinny_skinnyhigh],type[DESCRIPTIVESTILLLIFE],res[s],hmver[1]&call=url[file:/product/main]", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetement", "Manteau Long", "Camel, Haut, M", 20, "72,99€", "https://images-eu.ssl-images-amazon.com/images/I/41EBwNp17qL._AC_US218_.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetement", "Chaussures de ville", "Noir, Bas, 43", 14, "55€", "https://static.kiabi.com/images/chaussures-de-ville-noir-homme-tk462_1_zc1.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetement", "Sweat à capuche", "Gris, Haut, M", 25, "20€", "http://www.halle-vetement.com/114-232-large/sweat-capuche-gris-pour-hommes.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisir", "Ballon de Foot", "Blanc, Nike", 10, "20€", "https://i2.cdscdn.com/pdt2/1/1/7/1/700x700/sc1911117/rw/nike-ballon-de-football-tiempo-team-training-t5.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisir", "Raquette de tennis", "Noir, Babolat", 5, "80€", "https://images-na.ssl-images-amazon.com/images/I/41P7%2B-HBW2L._SY355_.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisir", "Ballon de Basket", "Marron, Spalding", 10, "25€", "https://www.decathlon.fr/media/839/8390741/big_298557.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisir", "Gourde", "Noir, Quechua", 24, "6,99€", "https://www.decathlon.fr/media/835/8359128/big_1154714.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisir", "Brassard", "Blanc, Adidas", 3, "3,99€", "https://www.sportit.com/ir/87613/f/f/459/0/0/1524499942127/polsino-tennis-large-bianco-1.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livreN", "Pere noel et les rennes", "Auteur : Jesus, 2019", 3, "3,99€", "https://static.fnac-static.com/multimedia/Images/FR/NR/43/9d/7c/8166723/1540-1/tsp20160928132835/Le-voyage-du-pere-Noel.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livreN", "La véritable histoire de Noël", "Auteur : Marko Leino, Éditeur : MICHEL LAFON (13/11/2014),", 7, "6,99€", "https://www.babelio.com/couv/cvt_La-veritable-histoire-de-Nol_1264.png", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musiqueN", "Songs for Christmas", "Compilation de Sufjan Stevens, 2006", 10, "12,99€", "https://media.senscritique.com/media/000003102247/160/Songs_for_Christmas_Compilation.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musiqueN", "Elvis’ Christmas Album", "Album de Elvis Presley	 Pop, rock, rock 'n' roll	 Labels : RCA Victor  15 octobre 1957", 15, "13,99€", "https://media.senscritique.com/media/000004859041/160/Elvis_Christmas_Album.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetementN", "Femme Robe Noel", "FeelinGirl", 3, "29,99€", "https://m.media-amazon.com/images/I/61p8--uwyuL._AC_UL640_QL65_.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetementN", "Kit vêtement Noël pour chien", "Vendu et expédié par BINLI", 3, "11,99€", "https://i2.cdscdn.com/pdt2/0/0/4/1/300x300/auc2009206214004/rw/kit-vetement-noel-pour-chien-petitebella-wapiti-tr.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirN", "1 Paire Boucles d'oreilles de Noel", "Vendu et expédié par EYELE", 23, "0,99€", "https://i2.cdscdn.com/pdt2/3/9/0/1/300x300/sod2009232093390/rw/1-paire-boucles-d-oreilles-de-noel-loisirs-simple.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirN", "Baker Ross Décorations de Noël", "Vendu et expédié par KTL France", 17, "1,99€", "https://i2.cdscdn.com/pdt2/1/9/2/1/300x300/bak7139573531192/rw/baker-ross-decorations-de-noel-pour-fenetres-a-dec.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirN", "Guirlande Fée 4m 40 LED Boule Neige Pompon", "Vendu par TEMPSA et expédié par ECE AMAZON", 3, "3,99€", "https://i2.cdscdn.com/pdt2/1/1/4/1/300x300/auc6168862133114/rw/guirlande-fee-4m-40-led-boule-neige-pompon-fete-no.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livreSV", "Saint Valentin, mon amour !", "Auteur : Jean Christophe, Vendu et expédié par Librairie Decitre", 17, "5,99€", "https://i2.cdscdn.com/pdt2/6/6/9/1/300x300/auc9791020904669/rw/livre-saint-valentin-mon-amour.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livreSV", "je hais la Saint Valentin", "Auteur : Marko Leino, Vendu et expédié par Librairie", 7, "6,50€", "https://i2.cdscdn.com/pdt2/7/3/2/1/300x300/har9782280385732/rw/livre-je-hais-la-saint-valentin.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musiqueSV", "mes premières chansons ; spécial chansons ", "Compilation de Jena Claude, 2006,Vendu et expédié par Librairie bookiner", 12, "12,99€", "https://i2.cdscdn.com/pdt2/6/7/4/1/300x300/auc9782016268674/rw/livre-mes-premieres-chansons-special-chansons.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musiqueSV", "100 CHANSONS D'AMOUR DE LEGENDE", "Album de Lewis, Vendu et expédié par MINIPRI	 ,Amour	 ", 17, "13,99€", "https://i2.cdscdn.com/pdt2/4/2/5/1/300x300/3596972220425/rw/100-chansons-d-amour-de-legende.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetementSV", "Vêtements Amour", "Vendu et expédié par moapmoa", 8, "29,99€", "https://i2.cdscdn.com/pdt2/5/6/9/1/300x300/mp20524569/rw/mere-et-fille-vetements-amour-imprimer-manches-cou.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirSV", "Rose Plaqué Or 24K", "Vendu par cdboost et expédié par Cdiscount", 45, "6,99€", "https://i2.cdscdn.com/pdt2/1/2/1/1/300x300/auc6131415906121/rw/rose-plaque-or-24k-rose-eternelle-romantique-de-i.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirSV", "1 paire alliage Couple Keychain porte-clé", "Vendu et expédié par BebeElectronique", 27, "10,99€", "https://i2.cdscdn.com/pdt2/2/5/6/1/300x300/ace2009793656256/rw/1-paire-alliage-couple-keychain-porte-cle-amour-c.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livrePM", "Maman raconte ton histoire", "Auteur : Wartberg Verlag, 2015", 11, "12,90€", "https://static.fnac-static.com/multimedia/Images/FR/NR/00/29/66/6695168/1540-1/tsp20170328112446/Maman-raconte-ton-histoire.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("livrePM", "Le cahier Super papa", "Auteur : First, 2018", 14, "7,99€", "https://static.fnac-static.com/multimedia/Images/FR/NR/87/72/90/9466503/1540-1/tsp20180518160625/Le-cahier-Super-papa.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musiquePM", "La chanson de la fête des mères", "Marion maison de disque, 2017", 20, "1,99€", "https://tous-mes-voeux.com/media/cartes/images/19-16-chanson-fete-des-meres_234_1_1464345318-la-chanson-de-la-fete-des-meres.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("musiquePM", "Musique de la fête des pères", "Patrick Charles, 2018", 5, "0,99€", "https://www.partitionsdechansons.com/blog/images_big/la-fete-des-peres-en-chansons.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetementPM", "T-shirt Super Papa", "T-shirt Homme - Super Papa", 29, "19,00€", "https://cdn2.cocorico.store/1993-large_default/tshirt-homme-super-papa.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("vetementPM", "T-shirt Maman Ours", "100% coton semi-peigné ringspun", 19, "20,00€", "https://leroidutshirt.fr/26354-thickbox_default/tshirt-maman-ours.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirPM", "VTT Homme", "VTT ROCKRIDER ST 540 est mixte", 43, "459€", "https://www.decathlon.fr/media/850/8500756/big_1638912.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("sportloisirPM", "Leggings Femme", "Femme DOMYOS Fitness Cardio", 22, "3,99€", "https://www.decathlon.fr/media/840/8405286/big_1561334.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("VF", "J accuse", "Emile ZOla, 1898, Gallimard", 6, "5,95€", "http://www.folio-lesite.fr/gallimard/download/imagehd/9782072713781", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("VF", "Ballon de Basket", "Marron, Spalding", 10, "25€", "https://www.decathlon.fr/media/839/8390741/big_298557.jpg", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("VF", "Au DD", "PNL, Deux Fères, 2019", 20, "1,90€", "https://images.genius.com/c79ebb7e8dff82dc9c064508ec43f18b.600x600x1.png", "EceAmazon");
Insert into Article (Type, Titre, Description, Quantité, Prix, URLimage, Vendeur) values ("VF", "T-shirt Maman Ours", "100% coton semi-peigné ringspun", 19, "20,00€", "https://leroidutshirt.fr/26354-thickbox_default/tshirt-maman-ours.jpg", "EceAmazon");


CREATE TABLE panier(
ID int(11) PRIMARY KEY NOT NULL,
Titre varchar(255) NOT NULL,
URLimage varchar(1000) NOT NULL,
Description text NOT NULL,
Quantité int(11) NOT NULL,
Prix varchar(255) NOT NULL,
Acheteur varchar(255) NOT NULL
);

CREATE TABLE noel(
ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
Type varchar(255) NOT NULL,
Titre varchar(255) NOT NULL,
Description text NOT NULL,
Quantité int(11) NOT NULL,
Prix varchar(255) NOT NULL,
URLimage varchar(1000) NOT NULL,
Vendeur varchar(255) NOT NULL
);