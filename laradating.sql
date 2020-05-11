-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: laradating
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `countries_country_name_unique` (`country_name`),
  UNIQUE KEY `countries_country_code_unique` (`country_code`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','AF','2020-05-08 04:08:01','2020-05-08 04:08:01'),(2,'Albania','AL','2020-05-08 04:08:12','2020-05-08 04:08:12'),(3,'Algeria','DZ','2020-05-08 04:08:38','2020-05-08 04:08:38'),(4,'American Samoa','AS','2020-05-08 04:08:56','2020-05-08 04:08:56'),(5,'Andorra','AD','2020-05-08 04:09:09','2020-05-08 04:09:09'),(6,'Angola','AO','2020-05-08 04:09:22','2020-05-08 04:09:22'),(7,'Anguilla','AI','2020-05-08 04:09:36','2020-05-08 04:09:36'),(8,'Antarctica','AQ','2020-05-08 04:09:50','2020-05-08 04:09:50'),(9,'Antigua and Barbuda','AG','2020-05-08 08:32:01','2020-05-08 08:32:01'),(10,'Argentina','AR','2020-05-08 08:32:14','2020-05-08 08:32:14'),(11,'Armenia','AM','2020-05-08 08:32:32','2020-05-08 08:32:32'),(12,'Aruba','AW','2020-05-08 08:32:44','2020-05-08 08:32:44'),(13,'Australia','AU','2020-05-08 08:32:54','2020-05-08 08:32:54'),(14,'Austria','AT','2020-05-08 08:33:05','2020-05-08 08:33:05'),(15,'Azerbaijan','AZ','2020-05-08 08:33:15','2020-05-08 08:33:15'),(16,'Bahamas (the)','BS','2020-05-08 08:33:31','2020-05-08 08:33:31'),(17,'Bahrain','BH','2020-05-08 08:33:47','2020-05-08 08:33:47'),(18,'Bangladesh','BD','2020-05-08 08:34:00','2020-05-08 08:34:00'),(19,'Barbados','BB','2020-05-08 08:34:11','2020-05-08 08:34:11'),(20,'Belarus','BY','2020-05-08 08:34:25','2020-05-08 08:34:25'),(21,'Belgium','BE','2020-05-08 08:34:40','2020-05-08 08:34:40'),(22,'Belize','BZ','2020-05-08 08:34:53','2020-05-08 08:34:53'),(23,'Benin','BJ','2020-05-08 08:35:03','2020-05-08 08:35:03'),(24,'Bermuda','BM','2020-05-08 08:35:17','2020-05-08 08:35:17'),(25,'Bhutan','BT','2020-05-08 08:35:28','2020-05-08 08:35:28'),(26,'Bolivia (Plurinational State of)','BO','2020-05-08 08:35:41','2020-05-08 08:35:41'),(27,'Bonaire, Sint Eustatius and Saba','BQ','2020-05-08 08:35:57','2020-05-08 08:35:57'),(28,'Bosnia and Herzegovina','BA','2020-05-08 08:36:12','2020-05-08 08:36:12'),(29,'Botswana','BW','2020-05-08 08:36:26','2020-05-08 08:36:26'),(30,'Bouvet Island','BV','2020-05-08 08:36:41','2020-05-08 08:36:41'),(31,'Brazil','BR','2020-05-08 08:36:57','2020-05-08 08:36:57'),(32,'British Indian Ocean Territory (the)','IO','2020-05-08 08:39:03','2020-05-08 08:39:03'),(33,'Brunei Darussalam','BN','2020-05-08 08:40:31','2020-05-08 08:40:31'),(34,'Bulgaria','BG','2020-05-08 08:40:45','2020-05-08 08:40:45'),(35,'Burkina Faso','BF','2020-05-08 08:40:58','2020-05-08 08:40:58'),(36,'Burundi','BI','2020-05-08 08:41:14','2020-05-08 08:41:14'),(37,'Cabo Verde','CV','2020-05-08 08:42:13','2020-05-08 08:42:13'),(38,'Cambodia','KH','2020-05-08 08:42:27','2020-05-08 08:42:27'),(39,'Cameroon','CM','2020-05-08 08:42:41','2020-05-08 08:42:41'),(40,'Canada','CA','2020-05-08 08:42:51','2020-05-08 08:42:51'),(41,'Cayman Islands (the)','KY','2020-05-08 08:43:04','2020-05-08 08:43:04'),(42,'Central African Republic (the)','CF','2020-05-08 08:43:20','2020-05-08 08:43:20'),(43,'Chad','TD','2020-05-08 08:43:33','2020-05-08 08:43:33'),(44,'Chile','CL','2020-05-08 08:43:46','2020-05-08 08:43:46'),(45,'China','CN','2020-05-08 08:43:58','2020-05-08 08:43:58'),(46,'Christmas Island','CX','2020-05-08 08:44:12','2020-05-08 08:44:12'),(47,'Cocos (Keeling) Islands (the)','CC','2020-05-08 08:44:23','2020-05-08 08:44:23'),(48,'Colombia','CO','2020-05-08 08:44:39','2020-05-08 08:44:39'),(49,'Comoros (the)','KM','2020-05-08 08:44:50','2020-05-08 08:44:50'),(50,'Congo (the Democratic Republic of the)','CD','2020-05-08 08:45:03','2020-05-08 08:45:03'),(51,'Congo (the)','CG','2020-05-08 08:46:29','2020-05-08 08:46:29'),(52,'Cook Islands (the)','CK','2020-05-08 08:46:45','2020-05-08 08:46:45'),(53,'Costa Rica','CR','2020-05-08 08:46:59','2020-05-08 08:46:59'),(54,'Croatia','HR','2020-05-08 08:47:11','2020-05-08 08:47:11'),(55,'Cuba','CU','2020-05-08 08:47:22','2020-05-08 08:47:22'),(56,'Curaçao','CW','2020-05-08 08:47:36','2020-05-08 08:47:36'),(57,'Cyprus','CY','2020-05-08 08:47:55','2020-05-08 08:47:55'),(58,'Czechia','CZ','2020-05-08 08:48:07','2020-05-08 08:48:07'),(59,'Côte d\'Ivoire','CI','2020-05-08 08:48:22','2020-05-08 08:48:22'),(60,'Denmark','DK','2020-05-08 08:48:33','2020-05-08 08:48:33'),(61,'Djibouti','DJ','2020-05-08 08:48:46','2020-05-08 08:48:46'),(62,'Dominica','DM','2020-05-08 08:49:01','2020-05-08 08:49:01'),(63,'Dominican Republic (the)','DO','2020-05-08 08:49:15','2020-05-08 08:49:15'),(64,'Ecuador','EC','2020-05-08 08:49:26','2020-05-08 08:49:26'),(65,'Egypt','EG','2020-05-08 08:49:42','2020-05-08 08:49:42'),(66,'El Salvador','SV','2020-05-08 08:49:59','2020-05-08 08:49:59'),(67,'Equatorial Guinea','GQ','2020-05-08 08:50:15','2020-05-08 08:50:15'),(68,'Eritrea','ER','2020-05-08 08:50:32','2020-05-08 08:50:32'),(69,'Estonia','EE','2020-05-08 08:50:49','2020-05-08 08:50:49'),(70,'Eswatini','SZ','2020-05-08 08:51:05','2020-05-08 08:51:05'),(71,'Ethiopia','ET','2020-05-08 08:51:20','2020-05-08 08:51:20'),(72,'Falkland Islands (the) [Malvinas]','FK','2020-05-08 08:51:35','2020-05-08 08:51:35'),(73,'Faroe Islands (the)','FO','2020-05-08 08:51:51','2020-05-08 08:51:51'),(74,'Fiji','FJ','2020-05-08 08:52:03','2020-05-08 08:52:03'),(75,'Finland','FI','2020-05-08 08:52:12','2020-05-08 08:52:12'),(76,'France','FR','2020-05-08 08:52:26','2020-05-08 08:52:26'),(77,'French Guiana','GF','2020-05-08 08:52:41','2020-05-08 08:52:41'),(78,'French Polynesia','PF','2020-05-08 08:52:55','2020-05-08 08:52:55'),(79,'French Southern Territories (the)','TF','2020-05-08 08:53:07','2020-05-08 08:53:07'),(80,'Gabon','GA','2020-05-08 08:53:20','2020-05-08 08:53:20'),(81,'Gambia (the)','GM','2020-05-08 08:53:37','2020-05-08 08:53:37'),(82,'Georgia','GE','2020-05-08 08:53:47','2020-05-08 08:53:47'),(83,'Germany','DE','2020-05-08 08:54:01','2020-05-08 08:54:01'),(84,'Ghana','GH','2020-05-08 08:54:11','2020-05-08 08:54:11'),(85,'Gibraltar','GI','2020-05-08 08:54:25','2020-05-08 08:54:25'),(86,'Greece','GR','2020-05-08 08:54:38','2020-05-08 08:54:38'),(87,'Greenland','GL','2020-05-08 08:54:51','2020-05-08 08:54:51'),(88,'Grenada','GD','2020-05-08 08:55:04','2020-05-08 08:55:04'),(89,'Guadeloupe','GP','2020-05-08 08:55:20','2020-05-08 08:55:20'),(90,'Guam','GU','2020-05-08 08:55:33','2020-05-08 08:55:33'),(91,'Guatemala','GT','2020-05-08 08:55:46','2020-05-08 08:55:46'),(92,'Guernsey','GG','2020-05-08 08:55:59','2020-05-08 08:55:59'),(93,'Guinea','GN','2020-05-08 08:56:15','2020-05-08 08:56:15'),(94,'Guinea-Bissau','GW','2020-05-08 08:56:25','2020-05-08 08:56:25'),(95,'Guyana','GY','2020-05-08 08:56:35','2020-05-08 08:56:35'),(96,'Haiti','HT','2020-05-08 08:56:47','2020-05-08 08:56:47'),(97,'Heard Island and McDonald Islands','HM','2020-05-08 08:57:04','2020-05-08 08:57:04'),(98,'Holy See (the)','VA','2020-05-08 08:57:17','2020-05-08 08:57:17'),(99,'Honduras','HN','2020-05-08 08:57:29','2020-05-08 08:57:29'),(100,'Hong Kong','HK','2020-05-08 08:57:41','2020-05-08 08:57:41'),(101,'Hungary','HU','2020-05-08 08:57:52','2020-05-08 08:57:52'),(102,'Iceland','IS','2020-05-08 08:58:05','2020-05-08 08:58:05'),(103,'India','IN','2020-05-08 08:58:19','2020-05-08 08:58:19'),(104,'Indonesia','ID','2020-05-08 08:58:34','2020-05-08 08:58:34'),(105,'Iran (Islamic Republic of)','IR','2020-05-08 08:58:47','2020-05-08 08:58:47'),(106,'Iraq','IQ','2020-05-08 08:59:00','2020-05-08 08:59:00'),(107,'Ireland','IE','2020-05-08 08:59:12','2020-05-08 08:59:12'),(108,'Isle of Man','IM','2020-05-08 08:59:27','2020-05-08 08:59:27'),(109,'Israel','IL','2020-05-08 08:59:40','2020-05-08 08:59:40'),(110,'Italy','IT','2020-05-08 08:59:51','2020-05-08 08:59:51'),(111,'Jamaica','JM','2020-05-08 09:00:02','2020-05-08 09:00:02'),(112,'Japan','JP','2020-05-08 09:00:27','2020-05-08 09:00:27'),(113,'Jersey','JE','2020-05-08 09:00:41','2020-05-08 09:00:41'),(114,'Jordan','JO','2020-05-08 09:00:59','2020-05-08 09:00:59'),(115,'Kazakhstan','KZ','2020-05-08 09:01:14','2020-05-08 09:01:14'),(116,'Kenya','KE','2020-05-08 09:01:27','2020-05-08 09:01:27'),(117,'Kiribati','KI','2020-05-08 09:01:39','2020-05-08 09:01:39'),(118,'Korea (the Democratic People\'s Republic of)','KP','2020-05-08 09:01:50','2020-05-08 09:01:50'),(119,'Korea (the Republic of)','KR','2020-05-08 09:02:02','2020-05-08 09:02:02'),(120,'Kuwait','KW','2020-05-08 09:02:13','2020-05-08 09:02:13'),(121,'Kyrgyzstan','KG','2020-05-08 09:02:27','2020-05-08 09:02:27'),(122,'Lao People\'s Democratic Republic (the)','LA','2020-05-08 09:02:45','2020-05-08 09:02:45'),(123,'Latvia','LV','2020-05-08 09:03:01','2020-05-08 09:03:01'),(124,'Lebanon','LB','2020-05-08 09:03:12','2020-05-08 09:03:12'),(125,'Lesotho','LS','2020-05-08 09:03:28','2020-05-08 09:03:28'),(126,'Liberia','LR','2020-05-08 09:03:44','2020-05-08 09:03:44'),(127,'Libya','LY','2020-05-08 09:03:54','2020-05-08 09:03:54'),(128,'Liechtenstein','LI','2020-05-08 09:04:05','2020-05-08 09:04:05'),(129,'Lithuania','LT','2020-05-08 09:04:21','2020-05-08 09:04:21'),(130,'Luxembourg','LU','2020-05-08 09:04:32','2020-05-08 09:04:32'),(131,'Macao','MO','2020-05-08 09:28:36','2020-05-08 09:28:36'),(132,'Madagascar','MG','2020-05-08 09:28:57','2020-05-08 09:28:57'),(133,'Malawi','MW','2020-05-08 09:29:12','2020-05-08 09:29:12'),(134,'Malaysia','MY','2020-05-08 09:29:27','2020-05-08 09:29:27'),(135,'Maldives','MV','2020-05-08 09:29:48','2020-05-08 09:29:48'),(136,'Mali','ML','2020-05-08 09:30:03','2020-05-08 09:30:03'),(137,'Malta','MT','2020-05-08 09:30:15','2020-05-08 09:30:15'),(138,'Marshall Islands (the)','MH','2020-05-08 09:30:27','2020-05-08 09:30:27'),(139,'Martinique','MQ','2020-05-08 09:30:40','2020-05-08 09:30:40'),(140,'Mauritania','MR','2020-05-08 09:30:57','2020-05-08 09:30:57'),(141,'Mauritius','MU','2020-05-08 09:31:10','2020-05-08 09:31:10'),(142,'Mayotte','YT','2020-05-08 09:31:28','2020-05-08 09:31:28'),(143,'Mexico','MX','2020-05-08 09:31:43','2020-05-08 09:31:43'),(144,'Micronesia (Federated States of)','FM','2020-05-08 09:31:54','2020-05-08 09:31:54'),(145,'Moldova (the Republic of)','MD','2020-05-08 09:32:07','2020-05-08 09:32:07'),(146,'Monaco','MC','2020-05-08 09:32:23','2020-05-08 09:32:23'),(147,'Mongolia','MN','2020-05-08 09:32:36','2020-05-08 09:32:36'),(148,'Montenegro','ME','2020-05-08 09:32:49','2020-05-08 09:32:49'),(149,'Montserrat','MS','2020-05-08 09:33:03','2020-05-08 09:33:03'),(150,'Morocco','MA','2020-05-08 09:33:14','2020-05-08 09:33:14'),(151,'Mozambique','MZ','2020-05-08 09:33:28','2020-05-08 09:33:28'),(152,'Myanmar','MM','2020-05-08 09:33:41','2020-05-08 09:33:41'),(153,'Namibia','NA','2020-05-08 09:33:50','2020-05-08 09:33:50'),(154,'Nauru','NR','2020-05-08 09:34:02','2020-05-08 09:34:02'),(155,'Nepal','NP','2020-05-08 09:34:13','2020-05-08 09:34:13'),(156,'Netherlands (the)','NL','2020-05-08 09:34:26','2020-05-08 09:34:26'),(157,'New Caledonia','NC','2020-05-08 09:34:39','2020-05-08 09:34:39'),(158,'New Zealand','NZ','2020-05-08 09:34:49','2020-05-08 09:34:49'),(159,'Nicaragua','NI','2020-05-08 09:34:59','2020-05-08 09:34:59'),(160,'Niger (the)','NE','2020-05-08 09:35:10','2020-05-08 09:35:10'),(161,'Nigeria','NG','2020-05-08 09:35:23','2020-05-08 09:35:23'),(162,'Niue','NU','2020-05-08 09:35:36','2020-05-08 09:35:36'),(163,'Norfolk Island','NF','2020-05-08 09:35:48','2020-05-08 09:35:48'),(164,'Northern Mariana Islands (the)','MP','2020-05-08 09:36:02','2020-05-08 09:36:02'),(165,'Norway','NO','2020-05-08 09:36:18','2020-05-08 09:36:18'),(166,'Oman','OM','2020-05-08 09:36:35','2020-05-08 09:36:35'),(167,'Pakistan','PK','2020-05-08 09:36:48','2020-05-08 09:36:48'),(168,'Palau','PW','2020-05-08 09:37:01','2020-05-08 09:37:01'),(169,'Palestine, State of','PS','2020-05-08 09:37:20','2020-05-08 09:37:20'),(170,'Panama','PA','2020-05-08 09:37:34','2020-05-08 09:37:34'),(171,'Papua New Guinea','PG','2020-05-08 09:37:49','2020-05-08 09:37:49'),(172,'Paraguay','PY','2020-05-08 09:38:04','2020-05-08 09:38:04'),(173,'Peru','PE','2020-05-08 09:38:18','2020-05-08 09:38:18'),(174,'Philippines (the)','PH','2020-05-08 09:42:07','2020-05-08 09:42:07'),(175,'Pitcairn','PN','2020-05-08 09:42:27','2020-05-08 09:42:27'),(176,'Poland','PL','2020-05-08 09:42:39','2020-05-08 09:42:39'),(177,'Portugal','PT','2020-05-08 09:42:51','2020-05-08 09:42:51'),(178,'Puerto Rico','PR','2020-05-08 09:43:12','2020-05-08 09:43:12'),(179,'Qatar','QA','2020-05-08 09:43:29','2020-05-08 09:43:29'),(180,'Republic of North Macedonia','MK','2020-05-08 09:43:41','2020-05-08 09:43:41'),(181,'Romania','RO','2020-05-08 09:43:53','2020-05-08 09:43:53'),(182,'Russian Federation (the)','RU','2020-05-08 09:44:06','2020-05-08 09:44:06'),(183,'Rwanda','RW','2020-05-08 09:44:21','2020-05-08 09:44:21'),(184,'Réunion','RE','2020-05-08 09:44:31','2020-05-08 09:44:31'),(185,'Saint Barthélemy','BL','2020-05-08 09:44:47','2020-05-08 09:44:47'),(186,'Saint Helena, Ascension and Tristan da Cunha','SH','2020-05-08 09:44:59','2020-05-08 09:44:59'),(187,'Saint Kitts and Nevis','KN','2020-05-08 09:45:09','2020-05-08 09:45:09'),(188,'Saint Lucia','LC','2020-05-08 09:45:20','2020-05-08 09:45:20'),(189,'Saint Martin (French part)','MF','2020-05-08 09:45:29','2020-05-08 09:45:29'),(190,'Saint Pierre and Miquelon','PM','2020-05-08 09:45:39','2020-05-08 09:45:39'),(191,'Saint Vincent and the Grenadines','VC','2020-05-08 09:45:52','2020-05-08 09:45:52'),(192,'Samoa','WS','2020-05-08 09:46:05','2020-05-08 09:46:05'),(193,'San Marino','SM','2020-05-08 09:46:16','2020-05-08 09:46:16'),(194,'Sao Tome and Principe','ST','2020-05-08 09:46:28','2020-05-08 09:46:28'),(195,'Saudi Arabia','SA','2020-05-08 09:46:39','2020-05-08 09:46:39'),(196,'Senegal','SN','2020-05-08 09:46:52','2020-05-08 09:46:52'),(197,'Serbia','RS','2020-05-08 09:47:07','2020-05-08 09:47:07'),(198,'Seychelles','SC','2020-05-08 09:47:18','2020-05-08 09:47:18'),(199,'Sierra Leone','SL','2020-05-08 09:47:27','2020-05-08 09:47:27'),(200,'Singapore','SG','2020-05-08 09:47:38','2020-05-08 09:47:38'),(201,'Sint Maarten (Dutch part)','SX','2020-05-08 09:47:51','2020-05-08 09:47:51'),(202,'Slovakia','SK','2020-05-08 09:48:00','2020-05-08 09:48:00'),(203,'Slovenia','SI','2020-05-08 09:48:11','2020-05-08 09:48:11'),(204,'Solomon Islands','SB','2020-05-08 09:48:22','2020-05-08 09:48:22'),(205,'Somalia','SO','2020-05-08 10:01:20','2020-05-08 10:01:20'),(206,'South Africa','ZA','2020-05-08 10:01:32','2020-05-08 10:01:32'),(207,'South Georgia and the South Sandwich Islands','GS','2020-05-08 10:01:45','2020-05-08 10:01:45'),(208,'South Sudan','SS','2020-05-08 10:01:58','2020-05-08 10:01:58'),(209,'Spain','ES','2020-05-08 10:02:09','2020-05-08 10:02:09'),(210,'Sri Lanka','LK','2020-05-08 10:02:18','2020-05-08 10:02:18'),(211,'Sudan (the)','SD','2020-05-08 10:02:27','2020-05-08 10:02:27'),(212,'Suriname','SR','2020-05-08 10:02:37','2020-05-08 10:02:37'),(213,'Svalbard and Jan Mayen','SJ','2020-05-08 10:02:49','2020-05-08 10:02:49'),(214,'Sweden','SE','2020-05-08 10:02:58','2020-05-08 10:02:58'),(215,'Switzerland','CH','2020-05-08 10:03:10','2020-05-08 10:03:10'),(216,'Syrian Arab Republic','SY','2020-05-08 10:03:22','2020-05-08 10:03:22'),(217,'Taiwan (Province of China)','TW','2020-05-08 10:03:35','2020-05-08 10:03:35'),(218,'Tajikistan','TJ','2020-05-08 10:03:45','2020-05-08 10:03:45'),(219,'Tanzania, United Republic of','TZ','2020-05-08 10:03:57','2020-05-08 10:03:57'),(220,'Thailand','TH','2020-05-08 10:04:08','2020-05-08 10:04:08'),(221,'Timor-Leste','TL','2020-05-08 10:04:17','2020-05-08 10:04:17'),(222,'Togo','TG','2020-05-08 10:04:29','2020-05-08 10:04:29'),(223,'Tokelau','TK','2020-05-08 10:04:42','2020-05-08 10:04:42'),(224,'Tonga','TO','2020-05-08 10:04:54','2020-05-08 10:04:54'),(225,'Trinidad and Tobago','TT','2020-05-08 10:05:06','2020-05-08 10:05:06'),(226,'Tunisia','TN','2020-05-08 10:05:16','2020-05-08 10:05:16'),(227,'Turkey','TR','2020-05-08 10:05:26','2020-05-08 10:05:26'),(228,'Turkmenistan','TM','2020-05-08 10:05:40','2020-05-08 10:05:40'),(229,'Turks and Caicos Islands (the)','TC','2020-05-08 10:05:53','2020-05-08 10:05:53'),(230,'Tuvalu','TV','2020-05-08 10:06:07','2020-05-08 10:06:07'),(231,'Uganda','UG','2020-05-08 10:06:20','2020-05-08 10:06:20'),(232,'Ukraine','UA','2020-05-08 10:06:30','2020-05-08 10:06:30'),(233,'United Arab Emirates (the)','AE','2020-05-08 10:06:41','2020-05-08 10:06:41'),(234,'United Kingdom of Great Britain and Northern Ireland (the)','GB','2020-05-08 10:06:53','2020-05-08 10:06:53'),(235,'United States Minor Outlying Islands (the)','UM','2020-05-08 10:07:08','2020-05-08 10:07:08'),(236,'United States of America (the)','US','2020-05-08 10:07:20','2020-05-08 10:07:20'),(237,'Uruguay','UY','2020-05-08 10:07:33','2020-05-08 10:07:33'),(238,'Uzbekistan','UZ','2020-05-08 10:07:45','2020-05-08 10:07:45'),(239,'Vanuatu','VU','2020-05-08 10:07:58','2020-05-08 10:07:58'),(240,'Venezuela (Bolivarian Republic of)','VE','2020-05-08 10:08:13','2020-05-08 10:08:13'),(241,'Viet Nam','VN','2020-05-08 10:08:26','2020-05-08 10:08:26'),(242,'Virgin Islands (British)','VG','2020-05-08 10:08:41','2020-05-08 10:08:41'),(243,'Virgin Islands (U.S.)','VI','2020-05-08 10:08:54','2020-05-08 10:08:54'),(244,'Wallis and Futuna','WF','2020-05-08 10:09:10','2020-05-08 10:09:10'),(245,'Western Sahara','EH','2020-05-08 10:09:32','2020-05-08 10:09:32'),(246,'Yemen','YE','2020-05-08 10:09:50','2020-05-08 10:09:50'),(247,'Zambia','ZM','2020-05-08 10:10:05','2020-05-08 10:10:05'),(248,'Zimbabwe','ZW','2020-05-08 10:10:20','2020-05-08 10:10:20'),(249,'Åland Islands','AX','2020-05-08 10:10:34','2020-05-08 10:10:34');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'{}',1),(2,1,'name','text','Name',1,1,1,1,1,1,'{}',4),(3,1,'email','text','Email',1,1,1,1,1,1,'{}',5),(4,1,'password','password','Password',1,0,0,1,1,0,'{}',11),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'{}',18),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',20),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',22),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'{}',2),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',24),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',25),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',26),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',0,1,1,1,1,1,'{}',23),(22,1,'email_verified_at','timestamp','Email Verified At',0,1,1,1,1,1,'{}',21),(23,1,'fullname','text','Fullname',1,1,1,1,1,1,'{}',3),(24,1,'gender','select_dropdown','Gender',1,1,1,1,1,1,'{\"default\":\"\",\"options\":{\"0\":\"Male\",\"1:\":\"Female\"}}',6),(26,1,'birth_date','date','Birth Date',0,1,1,1,1,1,'{}',8),(27,1,'country_id','text','Country Id',1,1,1,1,1,1,'{}',9),(28,1,'parent_id','text','Parent Id',1,1,1,1,1,1,'{}',12),(29,1,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0\":\"Inactive\",\"1\":\"Active\"}}',14),(30,1,'description','text_area','Description',0,1,1,1,1,1,'{}',15),(31,1,'hobby','text','Hobby',0,1,1,1,1,1,'{}',16),(33,1,'is_robot','select_dropdown','Is Robot',1,1,1,1,1,1,'{\"default\":\"\",\"options\":{\"0\":\"No\",\"1\":\"Yes\"}}',17),(35,1,'user_belongsto_country_relationship','relationship','Country',0,1,1,1,1,1,'{\"model\":\"App\\\\Country\",\"table\":\"countries\",\"type\":\"belongsTo\",\"column\":\"country_id\",\"key\":\"id\",\"label\":\"country_name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(36,1,'user_belongsto_user_relationship','relationship','Of Subadmin',0,1,1,1,1,0,'{\"scope\":\"subadmin\",\"model\":\"TCG\\\\Voyager\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',13),(38,1,'account_type','select_dropdown','Account Type',1,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0\":\"Free\",\"1\":\"Gold\",\"2\":\"Platinum\",\"3\":\"VIP\",\"4\":\"Unlimited VIP\"}}',19),(39,1,'marital_status','select_dropdown','Marital Status',1,1,1,1,1,1,'{\"default\":\"\",\"options\":{\"0\":\"Single\",\"1:\":\"In a relationship\"}}',7),(40,4,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(41,4,'country_name','text','Country Name',1,1,1,1,1,1,'{}',2),(42,4,'country_code','text','Country Code',1,1,1,1,1,1,'{}',3),(43,6,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(44,6,'username','text','Username',1,1,1,1,1,1,'{}',2),(45,6,'country_id','text','Country Id',1,1,1,1,1,1,'{}',3),(46,6,'region','text','Region',0,1,1,1,1,1,'{}',5),(47,6,'city','text','City',0,1,1,1,1,1,'{}',6),(48,6,'age','text','Age',0,1,1,1,1,1,'{}',7),(49,6,'site','text','Site',0,1,1,1,1,1,'{}',8),(50,6,'skype','text','SkypeID',0,1,1,1,1,1,'{}',9),(51,6,'comment','text_area','Comment',0,1,1,1,1,1,'{}',10),(52,6,'parent_id','text','Parent Id',1,1,1,1,1,1,'{}',11),(53,6,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',13),(54,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',14),(55,6,'recruited_user_belongsto_country_relationship','relationship','Country',0,1,1,1,1,0,'{\"model\":\"App\\\\Country\",\"table\":\"countries\",\"type\":\"belongsTo\",\"column\":\"country_id\",\"key\":\"id\",\"label\":\"country_name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',4),(56,6,'recruited_user_belongsto_user_relationship','relationship','Of Subadmin',0,1,1,1,1,0,'{\"scope\":\"subadmin\",\"model\":\"TCG\\\\Voyager\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',12);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2020-05-07 14:59:57','2020-05-11 03:16:24'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2020-05-07 14:59:57','2020-05-07 14:59:57'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2020-05-07 14:59:57','2020-05-07 14:59:57'),(4,'countries','countries','Country','Countries',NULL,'App\\Country',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2020-05-08 03:58:07','2020-05-08 03:58:07'),(6,'recruited_users','recruited-users','Recruited User','Recruited Users','voyager-group','App\\RecruitedUser',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2020-05-11 08:55:00','2020-05-11 09:11:53');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marital_statuses`
--

DROP TABLE IF EXISTS `marital_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marital_statuses` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marital_statuses`
--

LOCK TABLES `marital_statuses` WRITE;
/*!40000 ALTER TABLE `marital_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `marital_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2020-05-07 14:59:57','2020-05-07 14:59:57','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,11,'2020-05-07 14:59:57','2020-05-11 09:06:21','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,2,'2020-05-07 14:59:57','2020-05-11 09:48:55','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,10,'2020-05-07 14:59:57','2020-05-11 09:48:55','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,12,'2020-05-07 14:59:57','2020-05-11 09:06:21',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2020-05-07 14:59:57','2020-05-08 03:36:29','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2020-05-07 14:59:57','2020-05-08 03:36:29','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2020-05-07 14:59:57','2020-05-08 03:36:29','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2020-05-07 14:59:57','2020-05-08 03:36:29','voyager.bread.index',NULL),(10,1,'System','','_self','voyager-settings','#000000',12,1,'2020-05-07 14:59:57','2020-05-11 02:34:58','voyager.settings.index','null'),(11,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2020-05-07 14:59:58','2020-05-08 03:36:29','voyager.hooks',NULL),(12,1,'Settings','','_self','voyager-settings','#000000',NULL,13,'2020-05-08 03:36:16','2020-05-11 09:06:21',NULL,''),(13,1,'Countries','','_self','voyager-dashboard','#000000',12,2,'2020-05-08 03:58:07','2020-05-11 02:26:15','voyager.countries.index','null'),(14,1,'Registered Users','/admin/registeredusers','_self','voyager-people','#000000',NULL,3,'2020-05-11 02:47:08','2020-05-11 09:48:55',NULL,''),(15,1,'Canceled Accounts','/admin/canceledaccounts','_self','voyager-skull','#000000',NULL,5,'2020-05-11 08:24:51','2020-05-11 09:48:55',NULL,''),(16,1,'Payments','/admin/payments','_self','voyager-credit-card','#000000',NULL,6,'2020-05-11 08:29:02','2020-05-11 09:48:55',NULL,''),(17,1,'Upgrades','/admin/upgrades','_self','voyager-medal-rank-star','#000000',NULL,7,'2020-05-11 08:31:51','2020-05-11 09:48:55',NULL,''),(18,1,'Photos','/admin/photos','_self','voyager-photos','#000000',NULL,8,'2020-05-11 08:33:12','2020-05-11 09:48:55',NULL,''),(19,1,'Payment Blocks','/admin/paymentblocks','_self','voyager-x','#000000',NULL,9,'2020-05-11 08:35:17','2020-05-11 09:48:55',NULL,''),(20,1,'Recruited Members','','_self','voyager-group','#000000',NULL,4,'2020-05-11 08:55:00','2020-05-11 09:50:11','voyager.recruited-users.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2020-05-07 14:59:57','2020-05-07 14:59:57');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2016_01_01_000000_add_voyager_user_fields',1),(3,'2016_01_01_000000_create_data_types_table',1),(4,'2016_01_01_000000_create_pages_table',1),(5,'2016_01_01_000000_create_posts_table',1),(6,'2016_02_15_204651_create_categories_table',1),(7,'2016_05_19_173453_create_menu_table',1),(8,'2016_10_21_190000_create_roles_table',1),(9,'2016_10_21_190000_create_settings_table',1),(10,'2016_11_30_135954_create_permission_table',1),(11,'2016_11_30_141208_create_permission_role_table',1),(12,'2016_12_26_201236_data_types__add__server_side',1),(13,'2017_01_13_000000_add_route_to_menu_items_table',1),(14,'2017_01_14_005015_create_translations_table',1),(15,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(16,'2017_03_06_000000_add_controller_to_data_types_table',1),(17,'2017_04_11_000000_alter_post_nullable_fields_table',1),(18,'2017_04_21_000000_add_order_to_data_rows_table',1),(19,'2017_07_05_210000_add_policyname_to_data_types_table',1),(20,'2017_08_05_000000_add_group_to_settings_table',1),(21,'2017_11_26_013050_add_user_role_relationship',1),(22,'2017_11_26_015000_create_user_roles_table',1),(23,'2018_03_11_000000_add_user_settings',1),(24,'2018_03_14_000000_add_details_to_data_types_table',1),(25,'2018_03_16_000000_make_settings_value_nullable',1),(26,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,3),(2,1),(2,3),(3,1),(3,3),(4,1),(4,3),(5,1),(5,3),(6,1),(6,3),(7,1),(7,3),(8,1),(8,3),(9,1),(9,3),(10,1),(10,3),(11,1),(11,3),(12,1),(12,3),(13,1),(13,3),(14,1),(14,3),(15,1),(15,3),(16,1),(16,3),(17,1),(17,3),(18,1),(18,3),(19,1),(19,3),(20,1),(20,3),(21,1),(21,3),(22,1),(22,3),(23,1),(23,3),(24,1),(24,3),(25,1),(25,3),(26,1),(26,3),(27,1),(27,3),(28,1),(28,3),(29,1),(29,3),(30,1),(30,3),(31,1),(31,3),(32,1),(32,3),(33,1),(33,3),(34,1),(34,3),(35,1),(35,3),(36,1),(36,3);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2020-05-07 14:59:58','2020-05-07 14:59:58'),(2,'browse_bread',NULL,'2020-05-07 14:59:58','2020-05-07 14:59:58'),(3,'browse_database',NULL,'2020-05-07 14:59:58','2020-05-07 14:59:58'),(4,'browse_media',NULL,'2020-05-07 14:59:58','2020-05-07 14:59:58'),(5,'browse_compass',NULL,'2020-05-07 14:59:58','2020-05-07 14:59:58'),(6,'browse_menus','menus','2020-05-07 14:59:58','2020-05-07 14:59:58'),(7,'read_menus','menus','2020-05-07 14:59:58','2020-05-07 14:59:58'),(8,'edit_menus','menus','2020-05-07 14:59:58','2020-05-07 14:59:58'),(9,'add_menus','menus','2020-05-07 14:59:58','2020-05-07 14:59:58'),(10,'delete_menus','menus','2020-05-07 14:59:58','2020-05-07 14:59:58'),(11,'browse_roles','roles','2020-05-07 14:59:58','2020-05-07 14:59:58'),(12,'read_roles','roles','2020-05-07 14:59:58','2020-05-07 14:59:58'),(13,'edit_roles','roles','2020-05-07 14:59:58','2020-05-07 14:59:58'),(14,'add_roles','roles','2020-05-07 14:59:58','2020-05-07 14:59:58'),(15,'delete_roles','roles','2020-05-07 14:59:58','2020-05-07 14:59:58'),(16,'browse_users','users','2020-05-07 14:59:58','2020-05-07 14:59:58'),(17,'read_users','users','2020-05-07 14:59:58','2020-05-07 14:59:58'),(18,'edit_users','users','2020-05-07 14:59:58','2020-05-07 14:59:58'),(19,'add_users','users','2020-05-07 14:59:58','2020-05-07 14:59:58'),(20,'delete_users','users','2020-05-07 14:59:58','2020-05-07 14:59:58'),(21,'browse_settings','settings','2020-05-07 14:59:58','2020-05-07 14:59:58'),(22,'read_settings','settings','2020-05-07 14:59:58','2020-05-07 14:59:58'),(23,'edit_settings','settings','2020-05-07 14:59:58','2020-05-07 14:59:58'),(24,'add_settings','settings','2020-05-07 14:59:58','2020-05-07 14:59:58'),(25,'delete_settings','settings','2020-05-07 14:59:58','2020-05-07 14:59:58'),(26,'browse_hooks',NULL,'2020-05-07 14:59:58','2020-05-07 14:59:58'),(27,'browse_countries','countries','2020-05-08 03:58:07','2020-05-08 03:58:07'),(28,'read_countries','countries','2020-05-08 03:58:07','2020-05-08 03:58:07'),(29,'edit_countries','countries','2020-05-08 03:58:07','2020-05-08 03:58:07'),(30,'add_countries','countries','2020-05-08 03:58:07','2020-05-08 03:58:07'),(31,'delete_countries','countries','2020-05-08 03:58:07','2020-05-08 03:58:07'),(32,'browse_recruited_users','recruited_users','2020-05-11 08:55:00','2020-05-11 08:55:00'),(33,'read_recruited_users','recruited_users','2020-05-11 08:55:00','2020-05-11 08:55:00'),(34,'edit_recruited_users','recruited_users','2020-05-11 08:55:00','2020-05-11 08:55:00'),(35,'add_recruited_users','recruited_users','2020-05-11 08:55:00','2020-05-11 08:55:00'),(36,'delete_recruited_users','recruited_users','2020-05-11 08:55:00','2020-05-11 08:55:00');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruited_users`
--

DROP TABLE IF EXISTS `recruited_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruited_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `parent_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `recruited_user_username_unique` (`username`),
  KEY `recruited_user_country_id_index` (`country_id`),
  KEY `recruited_user_parent_id_index` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruited_users`
--

LOCK TABLES `recruited_users` WRITE;
/*!40000 ALTER TABLE `recruited_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `recruited_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2020-05-07 14:59:57','2020-05-07 14:59:57'),(2,'user','Normal User','2020-05-07 14:59:57','2020-05-07 14:59:57'),(3,'subadmin','Sub Administrator','2020-05-07 18:58:04','2020-05-07 18:58:04');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `marital_status` smallint(6) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `country_id` bigint(20) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` bigint(20) NOT NULL,
  `is_robot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `users_country_id_index` (`country_id`),
  KEY `users_parent_id_index` (`parent_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','admin@admin.com','users/default.png',NULL,'$2y$10$.rjePgnuMPq8D4fzdNh6uOhYGKAEwN8MxDRTzPEARfPVoriEjgilC',NULL,NULL,'2020-05-07 15:01:43','2020-05-07 15:01:43','',0,0,NULL,0,0,0,NULL,NULL,0,0),(2,3,'ali','alish.250991@gmail.com','users/default.png','2020-05-11 05:17:00','$2y$10$LqDp8mqInMM1rwqYyaRlLu3UwryTHA3jM.8U5Ss1AQ/.VdlYfywuW',NULL,NULL,'2020-05-11 09:18:02','2020-05-11 09:18:02','Alisher',0,0,'2020-05-11',218,1,1,NULL,NULL,0,0),(3,2,'Alex','cantemiralexandru@gmail.com','users/May2020/KAay13kLLHv4QLZF0Mey.png',NULL,'$2y$10$pYzTu/qdCLynvcvtzt/EmusbjYyuDuamGAT1bXx4URXF7UwwKjCDq',NULL,NULL,'2020-05-11 09:57:18','2020-05-11 10:09:04','Alex Cantemir',0,0,'1990-02-02',234,2,1,'Testing','Gym',0,0);
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

-- Dump completed on 2020-05-11 15:02:18
