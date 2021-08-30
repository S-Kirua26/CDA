#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS 'cdagheeraert';
CREATE DATABASE IF NOT EXISTS `cdagheeraert` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cdagheeraert`;



DROP TABLE IF EXISTS `animations`;


#------------------------------------------------------------
# Table: Villes
#------------------------------------------------------------

CREATE TABLE Villes(
        idVille    Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomVille   Varchar (50) NOT NULL ,
        codePostal Int NOT NULL,
        idDepartement varchar(3)
)ENGINE=InnoDB, CHARSET = UTF8;


