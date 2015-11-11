-- MySQL dump 10.14  Distrib 5.5.40-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dbDinkbit
-- ------------------------------------------------------
-- Server version	5.5.40-MariaDB

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` int(11) NOT NULL DEFAULT '1',
  `enterprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ofPhone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Luis Ubaldo','Godínez','26276055','gflu2000@hotmail.com',0,'Rcq','23421322','Hola k hace','2015-11-04 14:53:26','2015-11-04 14:53:26'),(2,'Luis Ubaldo','Godinez','5526276055','ubgodinez@gmail.com',1,'Ricolino SA de CV','5523456789','Hola K ase de nuevo','2015-11-05 15:05:07','2015-11-05 15:05:07'),(3,'Luis Ubaldo','Godinez','5526276055','ubgodinez@gmail.com',1,'Ricolino SA de CV','5523456789','Hola K ase de nuevo','2015-11-05 15:06:31','2015-11-05 15:06:31'),(4,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:11:58','2015-11-11 21:11:58'),(5,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:42:30','2015-11-11 21:42:30'),(6,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:43:14','2015-11-11 21:43:14'),(7,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:53:49','2015-11-11 21:53:49'),(8,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:54:31','2015-11-11 21:54:31'),(9,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:55:22','2015-11-11 21:55:22'),(10,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:56:07','2015-11-11 21:56:07'),(11,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:57:24','2015-11-11 21:57:24'),(12,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:57:38','2015-11-11 21:57:38'),(13,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 21:59:10','2015-11-11 21:59:10'),(14,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:00:55','2015-11-11 22:00:55'),(15,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:02:07','2015-11-11 22:02:07'),(16,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:03:33','2015-11-11 22:03:33'),(17,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:04:13','2015-11-11 22:04:13'),(18,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:04:59','2015-11-11 22:04:59'),(19,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:05:39','2015-11-11 22:05:39'),(20,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:08:45','2015-11-11 22:08:45'),(21,'Ariadna','Reyes','5526276055','ariadna402452@gmail.com',1,'Empresa','5556678934','Hola k hace','2015-11-11 22:09:15','2015-11-11 22:09:15'),(22,'Juanito','Lopez','5546372289','gflu2000@yahoo.com.mx',1,'Algo','5567342312','Hola k Mensaje','2015-11-11 22:37:27','2015-11-11 22:37:27');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_11_03_033415_create-clients-table',1),('2015_11_03_035706_create-subjects-table',2),('2015_11_03_043450_create-references-table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `references`
--

DROP TABLE IF EXISTS `references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` decimal(4,2) NOT NULL,
  `months` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `references`
--

LOCK TABLES `references` WRITE;
/*!40000 ALTER TABLE `references` DISABLE KEYS */;
INSERT INTO `references` VALUES (1,'Tasa Interes Anual',83.35,8,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Tasa Interes Anual',82.86,10,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Tasa Interes Anual',82.35,12,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `references` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numSubject` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,1,'empresa','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,2,'personal','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-11 11:05:06
