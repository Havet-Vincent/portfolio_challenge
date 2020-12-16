-- MySQL dump 10.13  Distrib 8.0.21, for osx10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: PHP_PORTFOLIO_PROJECT
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP DATABASE IF EXISTS PHP_PORTFOLIO_PROJECT;
CREATE DATABASE PHP_PORTFOLIO_PROJECT;
USE PHP_PORTFOLIO_PROJECT;


--
-- Table structure for table `EXPERIENCES`
--

DROP TABLE IF EXISTS `EXPERIENCES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `EXPERIENCES` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USER_ID` int NOT NULL,
  `TITLE` varchar(30) NOT NULL,
  `COMPANY` varchar(20) NOT NULL,
  `DESCRIPTION` longtext,
  `START_DATE` date NOT NULL,
  `END_DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `EXPERIENCES_USER_ID_fk` (`USER_ID`),
  CONSTRAINT `EXPERIENCES_USER_ID_fk` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EXPERIENCES`
--

LOCK TABLES `EXPERIENCES` WRITE;
/*!40000 ALTER TABLE `EXPERIENCES` DISABLE KEYS */;
INSERT INTO `EXPERIENCES` (`ID`, `USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES (1,1,'Développeur Front',"O\'Clock",'Application SPA First (2 front - 2 back) en 4 sprints.','2020-04-03','2020-05-05');
INSERT INTO `EXPERIENCES` (`ID`, `USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES (2,1,'Développeur Back',"O\'Clock",'Application API RESTfull (3 back - 2 front) en 4 sprints.','2019-11-17','2019-12-19');
INSERT INTO `EXPERIENCES` (`ID`, `USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES (3,1,'Technicien Informatique','Dupont/Dow','Déploiement de Windows 7 vers Windows 10.','2019-05-16','2019-07-10');
INSERT INTO `EXPERIENCES` (`ID`, `USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES (4,1,'Technicien Micro IT','Sodatec/Cités','Déploiement, Maintenance, Installation de caisses, serveurs, switchs et périphériques. Maintenance Moneyline( bornes IRIS, ADD).','2017-11-05','2018-12-21');
/*!40000 ALTER TABLE `EXPERIENCES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FORMATIONS`
--

DROP TABLE IF EXISTS `FORMATIONS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FORMATIONS` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USER_ID` int NOT NULL,
  `TITLE` varchar(20) NOT NULL,
  `SCHOOL` varchar(20) NOT NULL,
  `GRADUATE` varchar(20) DEFAULT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date DEFAULT NULL,
  `DESCRIPTION` longtext,
  PRIMARY KEY (`ID`),
  KEY `FORMATIONS_USER_ID_fk` (`USER_ID`),
  CONSTRAINT `FORMATIONS_USER_ID_fk` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FORMATIONS`
--

LOCK TABLES `FORMATIONS` WRITE;
/*!40000 ALTER TABLE `FORMATIONS` DISABLE KEYS */;
INSERT INTO `FORMATIONS` (`ID`, `USER_ID`, `TITLE`, `SCHOOL`, `GRADUATE`, `START_DATE`, `END_DATE`, `DESCRIPTION`) VALUES (1,1,'Développeur Web et Web Mobile','OClock','Niveau V','2020-03-03','2020-04-02','Spécialisation React.');
INSERT INTO `FORMATIONS` (`ID`, `USER_ID`, `TITLE`, `SCHOOL`, `GRADUATE`, `START_DATE`, `END_DATE`, `DESCRIPTION`) VALUES (2,1,'Développeur Web et Web Mobile','OClock','Niveau V','2019-07-15','2020-11-17','Spécialisation Symfony.');
INSERT INTO `FORMATIONS` (`ID`, `USER_ID`, `TITLE`, `SCHOOL`, `GRADUATE`, `START_DATE`, `END_DATE`, `DESCRIPTION`) VALUES (3,1,'Développeur Web et Web Mobile','OClock','Niveau V','2019-07-15','2020-11-17','Socle HTML, CSS, PHP, JavaScript.');
INSERT INTO `FORMATIONS` (`ID`, `USER_ID`, `TITLE`, `SCHOOL`, `GRADUATE`, `START_DATE`, `END_DATE`, `DESCRIPTION`) VALUES (4,1,'Technicien Informatique','AFPA','Niveau V','2020-03-03','2020-04-02','Technicien Supérieur Gestionnaire de ressources informatiques.');
/*!40000 ALTER TABLE `FORMATIONS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PORTFOLIO`
--

DROP TABLE IF EXISTS `PORTFOLIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PORTFOLIO` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USER_ID` int NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `DESCRIPTION` longtext,
  `URL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PORTFOLIO_USER_ID_fk` (`USER_ID`),
  CONSTRAINT `PORTFOLIO_USER_ID_fk` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PORTFOLIO`
--

LOCK TABLES `PORTFOLIO` WRITE;
/*!40000 ALTER TABLE `PORTFOLIO` DISABLE KEYS */;
INSERT INTO `PORTFOLIO` (`ID`, `USER_ID`, `TITLE`, `CREATION_DATE`, `DESCRIPTION`, `URL`) VALUES (1,1,"o\'Local",'2020-05-05',"o\'Local a pour objectif de mettre à disposition des consommateurs un moyen de connaître les commerçants de proximité proposant des produits issus de producteurs locaux.",'https://github.com/Havet-Vincent/OLocal');
INSERT INTO `PORTFOLIO` (`ID`, `USER_ID`, `TITLE`, `CREATION_DATE`, `DESCRIPTION`, `URL`) VALUES (2,1,"Z\'Artisan",'2019-12-19','Site de mise en relation des particuliers avec des professionnels locaux et avec possibilité de les noter.','https://github.com/Havet-Vincent/zartisanV2');
INSERT INTO `PORTFOLIO` (`ID`, `USER_ID`, `TITLE`, `CREATION_DATE`, `DESCRIPTION`, `URL`) VALUES (3,1,'Pokedex','2019-10-13',' Dictionnaire de tous les pokémons.','https://github.com/Havet-Vincent/pokedex');

/*!40000 ALTER TABLE `PORTFOLIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PORTFOLIO_TAGS`
--

DROP TABLE IF EXISTS `PORTFOLIO_TAGS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PORTFOLIO_TAGS` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PORTFOLIO_ID` int NOT NULL,
  `TAG` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PORTFOLIO_TAGS_PORTFOLIO_ID_fk` (`PORTFOLIO_ID`),
  CONSTRAINT `PORTFOLIO_TAGS_PORTFOLIO_ID_fk` FOREIGN KEY (`PORTFOLIO_ID`) REFERENCES `PORTFOLIO` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PORTFOLIO_TAGS`
--

LOCK TABLES `PORTFOLIO_TAGS` WRITE;
/*!40000 ALTER TABLE `PORTFOLIO_TAGS` DISABLE KEYS */;
INSERT INTO `PORTFOLIO_TAGS` (`ID`, `PORTFOLIO_ID`, `TAG`) VALUES (1,1,'React'),(2,2,'Symfony'),(3,3,'PHP');
/*!40000 ALTER TABLE `PORTFOLIO_TAGS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `USER` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LAST_NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `BIRTH_DATE` date NOT NULL,
  `DESCRIPTION` longtext,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_USERNAME_uindex` (`USERNAME`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER` (`ID`, `LAST_NAME`, `USERNAME`, `FIRST_NAME`, `BIRTH_DATE`, `DESCRIPTION`) VALUES (1,'Havet','Vincent','Vincent','1961-02-21',"Développeur web reconverti depuis Mai 2020 suite à ma formation à l\'école O\'clock en téléprésentiel, j\'ai eu un socle de 700 heures sur HTML5, CSS3, PHP, JAVASCRIPT.
Tous les jours nous avions un challenge à effectuer soit en solo ou en collaboration (pair programming, discord,slack, trello).
Ensuite j\'ai suivi deux spécialisations : une sur Symfony et une sur ReactJs comprenant chacune un projet from scratch (Cahier des Charges, MVP, MCD, Wireframes, Users Stories ...) d'une durée d'un mois par équipe en 4 sprints.

Je suis impatient d\'intégrer une structure dynamique pour mettre en pratique mes nouvelles connaissances et toutes celles à venir.");
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-20 13:04:42
