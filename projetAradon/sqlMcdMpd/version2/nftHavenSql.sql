# script cree le : Mon Jan 16 14:57:06 CET 2023 -   syntaxe MySQL ;

# use  nftHaven ;

DROP TABLE IF EXISTS Utilisateur ;
CREATE TABLE Utilisateur (idUtilisateur int AUTO_INCREMENT NOT NULL,
pseudo VARCHAR(25),
adresseMail VARCHAR(255),
password VARCHAR(255),
adresse VARCHAR(255),
dateOfBirth DATE,
profilPicture VARCHAR(50),
dateCreationProfil TIMESTAMP,
PRIMARY KEY (idUtilisateur) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Collection ;
CREATE TABLE Collection (idCollection int AUTO_INCREMENT NOT NULL,
imageCollection VARCHAR(50),
titreCollection VARCHAR(50),
PRIMARY KEY (idCollection) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Nft ;
CREATE TABLE Nft (idNft int AUTO_INCREMENT NOT NULL,
nomNft VARCHAR(50),
imagesNft VARCHAR(50),
background VARCHAR(50),
hat VARCHAR(50),
accessoireMain VARCHAR(50),
pull VARCHAR(50),
collier VARCHAR(50),
accessoireDos VARCHAR(50),
idUtilisateur INT,
idCollection INT,
PRIMARY KEY (idNft) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS creer ;
CREATE TABLE creer (idUtilisateur int AUTO_INCREMENT NOT NULL,
idCollection INT NOT NULL,
PRIMARY KEY (idUtilisateur,
 idCollection) ) ENGINE=InnoDB;

ALTER TABLE Nft ADD CONSTRAINT FK_Nft_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur);

ALTER TABLE Nft ADD CONSTRAINT FK_Nft_idCollection FOREIGN KEY (idCollection) REFERENCES Collection (idCollection);
ALTER TABLE creer ADD CONSTRAINT FK_creer_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur);
ALTER TABLE creer ADD CONSTRAINT FK_creer_idCollection FOREIGN KEY (idCollection) REFERENCES Collection (idCollection);
