#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------

CREATE TABLE CLIENT(
        idClient Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (50) NOT NULL ,
        email    Varchar (50) NOT NULL ,
        pwd      Varchar (50) NOT NULL
	,CONSTRAINT CLIENT_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMANDE
#------------------------------------------------------------

CREATE TABLE COMMANDE(
        idCommande   Int  Auto_increment  NOT NULL ,
        numero       Varchar (50) NOT NULL ,
        dateCommande Date NOT NULL ,
        idClient     Int NOT NULL
	,CONSTRAINT COMMANDE_PK PRIMARY KEY (idCommande)

	,CONSTRAINT COMMANDE_CLIENT_FK FOREIGN KEY (idClient) REFERENCES CLIENT(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CATEGORIE
#------------------------------------------------------------

CREATE TABLE CATEGORIE(
        idCategorie Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL
	,CONSTRAINT CATEGORIE_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUIT
#------------------------------------------------------------

CREATE TABLE PRODUIT(
        idProduit   Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        ref         Varchar (50) NOT NULL ,
        prix        Float NOT NULL ,
        idCategorie Int
	,CONSTRAINT PRODUIT_PK PRIMARY KEY (idProduit)

	,CONSTRAINT PRODUIT_CATEGORIE_FK FOREIGN KEY (idCategorie) REFERENCES CATEGORIE(idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LIGNECOMMANDE
#------------------------------------------------------------

CREATE TABLE LIGNECOMMANDE(
        idLigneCommande Int Auto_increment NOT NULL ,
        idProduit  Int NOT NULL ,
        idCommande Int NOT NULL ,
        quantite   Int NOT NULL
	,CONSTRAINT LIGNECOMMANDE_PK PRIMARY KEY (idLigneCommande)

	,CONSTRAINT LIGNECOMMANDE_PRODUIT_FK FOREIGN KEY (idProduit) REFERENCES PRODUIT(idProduit)
	,CONSTRAINT LIGNECOMMANDE_COMMANDE0_FK FOREIGN KEY (idCommande) REFERENCES COMMANDE(idCommande)
)ENGINE=InnoDB;

