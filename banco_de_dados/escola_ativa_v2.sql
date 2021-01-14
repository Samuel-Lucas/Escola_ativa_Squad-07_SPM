CREATE DATABASE  IF NOT EXISTS `projeto_sd7` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_sd7`;
-- MySQL dump 10.16  Distrib 10.1.39-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: projeto_sd7
-- ------------------------------------------------------
-- Server version	10.1.39-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anoletivo`
--

DROP TABLE IF EXISTS `anoletivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anoletivo` (
  `id_letivo` int(11) NOT NULL AUTO_INCREMENT,
  `anoletivo` varchar(10) NOT NULL,
  `ensino` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_letivo`),
  KEY `ensino` (`ensino`),
  CONSTRAINT `anoletivo_ibfk_1` FOREIGN KEY (`ensino`) REFERENCES `ensino` (`id_ensino`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anoletivo`
--

LOCK TABLES `anoletivo` WRITE;
/*!40000 ALTER TABLE `anoletivo` DISABLE KEYS */;
INSERT INTO `anoletivo` VALUES (1,'1',1),(2,'2',1),(3,'3',1),(4,'4',1),(5,'5',1),(6,'6',1),(7,'7',1),(8,'8',1),(9,'9',1),(10,'1',2),(11,'2',2),(12,'3',2),(13,'4',2),(14,'5',2),(15,'6',2),(16,'7',2),(17,'8',2),(18,'9',2),(19,'1',3),(20,'2',3),(21,'3',3),(22,'4',3),(23,'5',3),(24,'6',3),(25,'7',3),(26,'8',3),(27,'9',3),(28,'1',4),(29,'2',4),(30,'3',4),(31,'4',4),(32,'5',4),(33,'6',4),(34,'7',4),(35,'8',4),(36,'9',4),(37,'1',5),(38,'2',5),(39,'3',5),(40,'4',5),(41,'5',5),(42,'6',5),(43,'7',5),(44,'8',5),(45,'9',5);
/*!40000 ALTER TABLE `anoletivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atividades`
--

DROP TABLE IF EXISTS `atividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atividades` (
  `id_atividade` int(11) NOT NULL AUTO_INCREMENT,
  `disciplina` varchar(50) NOT NULL,
  `metodologia` varchar(30) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `links` varchar(100) NOT NULL,
  `termo` int(11) NOT NULL,
  `autor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_atividade`),
  KEY `autor` (`autor`),
  CONSTRAINT `atividades_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atividades`
--

LOCK TABLES `atividades` WRITE;
/*!40000 ALTER TABLE `atividades` DISABLE KEYS */;
INSERT INTO `atividades` VALUES (1,'CiÃªncias Humanas','Sala invertida','Jogos de matemÃ¡tica','fdakljfdajkfadjkfdajklfdakjlkfjldakljfda...','ww.ref.com.br',1,1),(2,'Linguagens','MÃ£o na massa','aulas','kÃ§dfjkfdsjfjfdsjdsffdsfdsfsd','ww.ref.com.br',1,1),(6,'CiÃªncias Humanas','Tecnologias criativas','Outra tarefa 2','Aprenda a aprender tarefas 2','vÃ¡rias fontes 2',1,3);
/*!40000 ALTER TABLE `atividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ensino`
--

DROP TABLE IF EXISTS `ensino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ensino` (
  `id_ensino` int(11) NOT NULL AUTO_INCREMENT,
  `area_estudo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ensino`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ensino`
--

LOCK TABLES `ensino` WRITE;
/*!40000 ALTER TABLE `ensino` DISABLE KEYS */;
INSERT INTO `ensino` VALUES (1,'Linguagens'),(2,'Matemática'),(3,'Ciências da Natureza'),(4,'Ciências Humanas'),(5,'Ensino Religioso');
/*!40000 ALTER TABLE `ensino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `genero` varchar(12) DEFAULT NULL,
  `perfil` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Lucas','Moreira','masculino','coordenador','lucas@hotmail.com','e10adc3949ba59abbe56e057f20f883e'),(2,'sofia','','feminino','coordenador','sofia@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(3,'Samuel','Lucas','masculino','professor','samuel@hotmail.com','e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-14 11:27:05
