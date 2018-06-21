CREATE DATABASE  IF NOT EXISTS `car_rental` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `car_rental`;
-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: car_rental
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) NOT NULL,
  `aposition` varchar(20) NOT NULL,
  `aidnum` varchar(20) NOT NULL,
  `ausername` varchar(45) NOT NULL,
  PRIMARY KEY (`aid`,`ausername`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (0,'未确认','未确认','未确认','未确认'),(1,'杨钧淮1','CEO','532526199710290012','yjhad'),(2,'测试','测试','123456789012345678','test'),(3,'杨钧淮2','CTO','123456789012345678','yjh'),(4,'潘越','杨钧淮的弟弟','123456789123456789','BOSS');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_login` (
  `ausername` varchar(20) NOT NULL,
  `apassword` varchar(20) NOT NULL,
  PRIMARY KEY (`ausername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_login`
--

LOCK TABLES `admin_login` WRITE;
/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
INSERT INTO `admin_login` VALUES ('BOSS','123456'),('test','112233'),('yjh','112233'),('yjhad','123456');
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `cplant` varchar(20) NOT NULL,
  `cbrand` varchar(20) NOT NULL,
  `cmodel` varchar(20) NOT NULL,
  `ccolor` varchar(20) DEFAULT NULL,
  `cvolume` varchar(20) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `coil` varchar(20) DEFAULT NULL,
  `cstate` int(11) NOT NULL,
  `crent` int(11) NOT NULL,
  `cnote` varchar(100) DEFAULT NULL,
  `cstatus` varchar(45) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (1,'鄂A-11111','奔驰','S400','灰色','3.0','2018-04-12','95号',10,500,'','0'),(9,'鄂A-88888','奔驰','S400','黑色','3.0','2017-02-09','95号',10,1000,'','0'),(10,'鄂A-88889','奔驰','S400','白色','','2017-02-10','95号',8,1000,'','0'),(11,'鄂A-AAAAA','奔驰','S300','灰色','3.5','2018-02-10','95号',10,600,'','0'),(12,'鄂A-ASD43','大众','桑塔纳','黑色','2.0','2018-02-07','92号',10,200,'维修xx','0'),(13,'鄂A-ASDF3','别克','君越','白色','1.5','2018-01-10','92号',10,90,'','0'),(14,'鄂A-11112','奔驰','S400','灰色','3.0','2018-05-10','95号',10,500,'','0');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_rent`
--

DROP TABLE IF EXISTS `car_rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_rent` (
  `contractid` int(5) NOT NULL AUTO_INCREMENT,
  `cid` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `aid` int(5) DEFAULT NULL,
  `deposit` int(11) DEFAULT NULL,
  `money_b` int(11) DEFAULT NULL,
  `money_a` int(11) DEFAULT NULL,
  `setout` date DEFAULT NULL,
  `setin` date DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `deposit_back` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `plan_day` int(11) NOT NULL,
  `real_day` int(11) DEFAULT NULL,
  `cplandate` date DEFAULT NULL,
  PRIMARY KEY (`contractid`),
  KEY `car_rent_ibfk_1` (`cid`),
  KEY `car_rent_ibfk_2` (`uid`),
  KEY `car_rent_ibfk_3` (`aid`),
  CONSTRAINT `car_rent_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `car` (`cid`),
  CONSTRAINT `car_rent_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
  CONSTRAINT `car_rent_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_rent`
--

LOCK TABLES `car_rent` WRITE;
/*!40000 ALTER TABLE `car_rent` DISABLE KEYS */;
INSERT INTO `car_rent` VALUES (6,10,1,3,2000,600,2700,'2018-06-19','2018-06-22',1,1800,300,'',2,2,3,'2018-06-19'),(7,9,1,3,2000,800,2700,'2018-06-19','2018-06-22',0,2000,300,'',2,5,3,'2018-06-19'),(8,1,3,3,2000,500,2160,'2018-06-19','2018-06-21',5,1000,0,'维修保险杠',2,2,2,'2018-06-19'),(9,12,2,3,2000,400,180,'2018-06-19','2018-06-20',6,800,0,'修',2,6,1,'2018-06-19'),(10,13,2,3,2000,500,81,'2018-06-19','2018-06-19',9,200,0,'',2,5,1,'2018-06-19'),(11,12,2,3,2000,NULL,180,'2018-06-19','2018-06-20',4,1200,0,'',2,5,1,'2018-06-14'),(12,11,2,3,2000,NULL,1800,'2018-06-19','2018-06-21',6,800,0,'',2,3,2,'2018-06-19'),(13,9,5,3,2000,NULL,3000,'2018-06-19','2018-06-22',2,1600,0,'',2,7,3,'2018-06-19'),(14,13,2,3,2000,270,567,'2018-06-14','2018-06-21',0,2000,0,'',2,3,7,'2018-06-19'),(15,1,2,3,2000,1200,2160,'2018-06-19','2018-06-21',3,1400,0,'',2,1,2,'2018-06-19'),(16,12,3,3,2000,600,540,'2018-06-19','2018-06-22',5,1000,0,'维修xx',2,3,3,'2018-06-19');
/*!40000 ALTER TABLE `car_rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `date_table`
--

DROP TABLE IF EXISTS `date_table`;
/*!50001 DROP VIEW IF EXISTS `date_table`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `date_table` AS SELECT 
 1 AS `dates`,
 1 AS `rent_in`,
 1 AS `deposit_in`,
 1 AS `all_in`,
 1 AS `fixed_out`,
 1 AS `profit`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `date_table_one`
--

DROP TABLE IF EXISTS `date_table_one`;
/*!50001 DROP VIEW IF EXISTS `date_table_one`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `date_table_one` AS SELECT 
 1 AS `dates`,
 1 AS `rent_in`,
 1 AS `deposit_in`,
 1 AS `all_in`,
 1 AS `fixed_out`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `fixed_car`
--

DROP TABLE IF EXISTS `fixed_car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fixed_car` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `cid` int(5) NOT NULL,
  `fdate` date NOT NULL,
  `fmoney` int(11) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `fixed_car_ibfk_1` (`cid`),
  CONSTRAINT `fixed_car_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `car` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fixed_car`
--

LOCK TABLES `fixed_car` WRITE;
/*!40000 ALTER TABLE `fixed_car` DISABLE KEYS */;
INSERT INTO `fixed_car` VALUES (1,13,'2018-06-19',1000),(2,1,'2018-06-14',2000),(3,10,'2018-05-15',500),(4,1,'2018-06-19',500),(5,12,'2018-06-19',500),(6,13,'2018-06-21',200),(7,1,'2018-06-18',200),(8,9,'2017-06-18',200),(9,11,'2015-06-18',200),(10,12,'2018-06-18',200),(11,12,'2018-06-22',300);
/*!40000 ALTER TABLE `fixed_car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `month_table`
--

DROP TABLE IF EXISTS `month_table`;
/*!50001 DROP VIEW IF EXISTS `month_table`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `month_table` AS SELECT 
 1 AS `dates`,
 1 AS `rent_in`,
 1 AS `deposit_in`,
 1 AS `all_in`,
 1 AS `fixed_out`,
 1 AS `profit`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `quarter_table`
--

DROP TABLE IF EXISTS `quarter_table`;
/*!50001 DROP VIEW IF EXISTS `quarter_table`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `quarter_table` AS SELECT 
 1 AS `years`,
 1 AS `dates`,
 1 AS `rent_in`,
 1 AS `deposit_in`,
 1 AS `all_in`,
 1 AS `fixed_out`,
 1 AS `profit`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `sum_table`
--

DROP TABLE IF EXISTS `sum_table`;
/*!50001 DROP VIEW IF EXISTS `sum_table`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `sum_table` AS SELECT 
 1 AS `rent_in`,
 1 AS `deposit_in`,
 1 AS `all_in`,
 1 AS `fixed_out`,
 1 AS `profit`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `uidnum` varchar(20) NOT NULL,
  `utel` varchar(20) NOT NULL,
  `ulicese` varchar(15) NOT NULL,
  `uage` int(11) DEFAULT NULL,
  `isvip` varchar(2) NOT NULL,
  `ucredit` int(11) DEFAULT '50',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'yjh','杨钧淮','532526199710290011','15924611029','JSZ123456789',21,'y',80),(2,'hjynb','胡晋源','123456789012345678','13811118888','1234567890jz',20,'y',-110),(3,'fndnb','付内东','123456789012345678','15999998888','123456789012',19,'y',20),(4,'rgyn','rgy','420000100000002733','15855558888','111111111111',19,'n',50),(5,'fndd','fnd','231645788563457849','15423687564','123456789098',18,'y',50),(6,'hhh','yih','125496321452369874','15824596662','159632547896',28,'n',50);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_login`
--

DROP TABLE IF EXISTS `users_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_login` (
  `username` varchar(30) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_login`
--

LOCK TABLES `users_login` WRITE;
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` VALUES ('fndnb','112233'),('hjynb','112233'),('yjh','123456'),('your dad','123456'),('your father','poppop'),('yourgrandfather','zxczxc');
/*!40000 ALTER TABLE `users_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `year_table`
--

DROP TABLE IF EXISTS `year_table`;
/*!50001 DROP VIEW IF EXISTS `year_table`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `year_table` AS SELECT 
 1 AS `dates`,
 1 AS `rent_in`,
 1 AS `deposit_in`,
 1 AS `all_in`,
 1 AS `fixed_out`,
 1 AS `profit`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'car_rental'
--

--
-- Dumping routines for database 'car_rental'
--

--
-- Final view structure for view `date_table`
--

/*!50001 DROP VIEW IF EXISTS `date_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `date_table` AS select `date_table_one`.`dates` AS `dates`,sum(`date_table_one`.`rent_in`) AS `rent_in`,sum(`date_table_one`.`deposit_in`) AS `deposit_in`,sum(`date_table_one`.`all_in`) AS `all_in`,sum(`date_table_one`.`fixed_out`) AS `fixed_out`,sum((`date_table_one`.`all_in` - `date_table_one`.`fixed_out`)) AS `profit` from `date_table_one` group by `date_table_one`.`dates` order by `date_table_one`.`dates` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `date_table_one`
--

/*!50001 DROP VIEW IF EXISTS `date_table_one`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `date_table_one` AS select `car_rent`.`setin` AS `dates`,sum(`car_rent`.`money_a`) AS `rent_in`,sum((`car_rent`.`deposit` - `car_rent`.`deposit_back`)) AS `deposit_in`,sum(((`car_rent`.`money_a` + `car_rent`.`deposit`) - `car_rent`.`deposit_back`)) AS `all_in`,0 AS `fixed_out` from `car_rent` group by `car_rent`.`setin` union select `fixed_car`.`fdate` AS `fdate`,0 AS `0`,0 AS `0`,0 AS `0`,sum(`fixed_car`.`fmoney`) AS `sum(fmoney)` from `fixed_car` group by `fixed_car`.`fdate` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `month_table`
--

/*!50001 DROP VIEW IF EXISTS `month_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `month_table` AS select date_format(`date_table`.`dates`,'%Y-%m') AS `dates`,sum(`date_table`.`rent_in`) AS `rent_in`,sum(`date_table`.`deposit_in`) AS `deposit_in`,sum(`date_table`.`all_in`) AS `all_in`,sum(`date_table`.`fixed_out`) AS `fixed_out`,sum(`date_table`.`profit`) AS `profit` from `date_table` group by date_format(`date_table`.`dates`,'%Y-%m') order by date_format(`date_table`.`dates`,'%Y-%m') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `quarter_table`
--

/*!50001 DROP VIEW IF EXISTS `quarter_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `quarter_table` AS select year(`date_table`.`dates`) AS `years`,quarter(`date_table`.`dates`) AS `dates`,sum(`date_table`.`rent_in`) AS `rent_in`,sum(`date_table`.`deposit_in`) AS `deposit_in`,sum(`date_table`.`all_in`) AS `all_in`,sum(`date_table`.`fixed_out`) AS `fixed_out`,sum(`date_table`.`profit`) AS `profit` from `date_table` group by quarter(`date_table`.`dates`),year(`date_table`.`dates`) order by quarter(`date_table`.`dates`),year(`date_table`.`dates`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `sum_table`
--

/*!50001 DROP VIEW IF EXISTS `sum_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `sum_table` AS select sum(`date_table`.`rent_in`) AS `rent_in`,sum(`date_table`.`deposit_in`) AS `deposit_in`,sum(`date_table`.`all_in`) AS `all_in`,sum(`date_table`.`fixed_out`) AS `fixed_out`,sum(`date_table`.`profit`) AS `profit` from `date_table` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `year_table`
--

/*!50001 DROP VIEW IF EXISTS `year_table`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `year_table` AS select year(`date_table`.`dates`) AS `dates`,sum(`date_table`.`rent_in`) AS `rent_in`,sum(`date_table`.`deposit_in`) AS `deposit_in`,sum(`date_table`.`all_in`) AS `all_in`,sum(`date_table`.`fixed_out`) AS `fixed_out`,sum(`date_table`.`profit`) AS `profit` from `date_table` group by year(`date_table`.`dates`) order by year(`date_table`.`dates`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-22  1:44:27
