# script creer le : Mon Jan 16 14:39:43 CET 2023 -   syntaxe MySQL ;

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
imageNft VARCHAR(50),
proprietaire VARCHAR(50),
PRIMARY KEY (idNft) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS posseder ;
CREATE TABLE posseder (idNft int AUTO_INCREMENT NOT NULL,
idUtilisateur INT NOT NULL,
PRIMARY KEY (idNft,
 idUtilisateur) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS creer ;
CREATE TABLE creer (idUtilisateur int AUTO_INCREMENT NOT NULL,
idCollection INT NOT NULL,
PRIMARY KEY (idUtilisateur,
 idCollection) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS lier ;
CREATE TABLE lier (idCollection int AUTO_INCREMENT NOT NULL,
idNft INT NOT NULL,
PRIMARY KEY (idCollection,
 idNft) ) ENGINE=InnoDB;

ALTER TABLE posseder ADD CONSTRAINT FK_posseder_idNft FOREIGN KEY (idNft) REFERENCES Nft (idNft);

ALTER TABLE posseder ADD CONSTRAINT FK_posseder_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur);
ALTER TABLE creer ADD CONSTRAINT FK_creer_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (idUtilisateur);
ALTER TABLE creer ADD CONSTRAINT FK_creer_idCollection FOREIGN KEY (idCollection) REFERENCES Collection (idCollection);
ALTER TABLE lier ADD CONSTRAINT FK_lier_idCollection FOREIGN KEY (idCollection) REFERENCES Collection (idCollection);
ALTER TABLE lier ADD CONSTRAINT FK_lier_idNft FOREIGN KEY (idNft) REFERENCES Nft (idNft);
