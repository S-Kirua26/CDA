#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS CDA;
CREATE DATABASE IF NOT EXISTS `CDA` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `CDA`;



DROP TABLE IF EXISTS `ville`;


#------------------------------------------------------------
# Table: Ville
#------------------------------------------------------------

CREATE TABLE Ville(
        `idVille`    Int  Auto_increment  NOT NULL PRIMARY KEY ,
        `nomVille`  Varchar (50) NOT NULL ,
        `numeroDepartement` Int (2) NOT NULL,
        `codePostal` Int (5) NOT NULL,
        `dateMAJ` date NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


INSERT INTO `ville`(`idVille`, `nomVille`, `numeroDepartement`,`codePostal`,`dateMAJ`) VALUES (NULL,"Dunkerque",59,59140,'2021-09-01');
INSERT INTO `ville`(`idVille`, `nomVille`, `numeroDepartement`,`codePostal`,`dateMAJ`) VALUES (NULL,"Loon-Plage",59,59279,'2021-09-01');
INSERT INTO `ville`(`idVille`, `nomVille`, `numeroDepartement`,`codePostal`,`dateMAJ`) VALUES (NULL,"Gravelines",59,59153,'2021-09-01');
INSERT INTO `ville`(`idVille`, `nomVille`, `numeroDepartement`,`codePostal`,`dateMAJ`) VALUES (NULL,"Malo",59,59373,'2021-09-01');

