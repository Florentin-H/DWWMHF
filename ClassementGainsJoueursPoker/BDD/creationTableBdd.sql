#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: JOUEURS
#------------------------------------------------------------

CREATE TABLE JOUEURS(
        idjoueurs Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL,
        prenom         Varchar (50) NOT NULL,
        pseudo         Varchar (50) NOT NULL,
        gains         Float NOT NULL,
        histoire         Varchar (50) NOT NULL
	,CONSTRAINT joueurs_PK PRIMARY KEY (idjoueurs)
)ENGINE=InnoDB;




