#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS cdabalair; 
CREATE DATABASE cdabalair; 
USE cdabalair;

#------------------------------------------------------------
# Table: Villes
#------------------------------------------------------------

CREATE TABLE Villes(
        idVille     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomVille    Varchar (200) NOT NULL ,
        numDept Varchar (5) NOT NULL ,
        codePostal      Varchar (10) NOT NULL,
        updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
)ENGINE=InnoDB;

