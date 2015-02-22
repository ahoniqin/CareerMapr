CREATE DATABASE  IF NOT EXISTS `hackathon` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hackathon`;
-- MySQL dump 10.13  Distrib 5.6.17, for osx10.6 (i386)
--
-- Host: localhost    Database: hackathon
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `CostOfLiving`
--

DROP TABLE IF EXISTS `CostOfLiving`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CostOfLiving` (
  `isProvince` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `Rent` varchar(45) DEFAULT NULL,
  `Groceries` varchar(45) DEFAULT NULL,
  `Entertainment` varchar(45) DEFAULT NULL,
  `Total` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CostOfLiving`
--

LOCK TABLES `CostOfLiving` WRITE;
/*!40000 ALTER TABLE `CostOfLiving` DISABLE KEYS */;
INSERT INTO `CostOfLiving` VALUES ('1','Newfoundland and Labrador','9534','6496','6005','57605',1),('1','Prince Edward Island','11107','6720','4854','56896',2),('1','Nova Scotia','11524','6682','5548','60867',3),('1','New Brunswick','10627','6691','6111','61212',4),('1','Quebec','11316','7215','5513','60125',5),('1','Ontario','15560','7284','6906','76577',6),('1','Manitoba','12203','6520','6483','66608',7),('1','Saskatchewan','12440','6344','6932','69377',8),('1','Alberta','16153','7778','8371','84976',9),('1','British Columbia','16336','7570','7439','73571',10),('1','Yukon','13897','7496','7165','69856',11),('1','Northwest Territories','17848','9509','7859','82966',12),('1','Nunavut','12824','14815','10955','84439',13),('0','St.John\'s, Newfoundland and Labrador','13487','6946','6781','71715',14),('0','Charlottetown and Summerside, Prince Edward I','11818','6497','5245','58522',15),('0','Halifax, Nova Scotia','13567','7157','6301','69550',16),('0','Saint John, New Brunswick','11405','6893','8735','71049',17),('0','Québec, Quebec','10127','7369','6167','64053',18),('0','Montréal, Quebec','12458','7310','5537','63822',19),('0','Ottawa-Gatineau, Ontario part, Ontario/Quebec','14932','7800','7999','78463',20),('0','Toronto, Ontario','17185','7904','7365','83847',21),('0','Winnipeg, Manitoba','12793','6526','6563','67997',22),('0','Regina, Saskatchewan','12857','6605','7005','67961',23),('0','Saskatoon, Saskatchewan','15238','6830','7520','77404',24),('0','Calgary, Alberta','17364','8554','8977','95187',25),('0','Edmonton, Alberta','16620','7398','8092','80527',26),('0','Vancouver, British Columbia','17449','7920','7658','76870',27),('0','Victoria, British Columbia','16991','8414','11499','84515',28),('0','Whitehorse, Yukon','14870','7830','7620','74064',29),('0','Yellowknife, Northwest Territories','23235','9440','9420','101966',30);
/*!40000 ALTER TABLE `CostOfLiving` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-22 11:23:55
