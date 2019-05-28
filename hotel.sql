# MySQL-Front 5.1  (Build 4.13)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: hotel
# ------------------------------------------------------
# Server version 5.5.16

#
# Source for table city
#

DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `CITYId` int(11) NOT NULL AUTO_INCREMENT,
  `CITYNAME` varchar(25) DEFAULT NULL,
  `COID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CITYId`),
  KEY `COID` (`COID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table city
#

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table country
#

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `CId` int(11) NOT NULL AUTO_INCREMENT,
  `CONAME` varchar(20) DEFAULT NULL,
  `NATIONALTY` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table country
#

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table employees
#

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EFNAME` varchar(20) DEFAULT NULL,
  `ELNAME` varchar(20) DEFAULT NULL,
  `EADDRESS` varchar(20) DEFAULT NULL,
  `EGENDER` bit(1) DEFAULT NULL,
  `ENATIONALID` varchar(14) DEFAULT NULL,
  `EPHONE` varchar(10) DEFAULT NULL,
  `EMOBILE` varchar(11) DEFAULT NULL,
  `SALARY` varchar(20) DEFAULT NULL,
  `EDATEOFBIRTH` varchar(25) DEFAULT NULL,
  `EACTIVATION` bit(1) DEFAULT NULL,
  `E_mail` varchar(50) DEFAULT NULL,
  `admin` bit(1) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table employees
#

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'ahmed','awny','qutor',b'0','29502141600537','0402766367','01021498867','2000','14-02-1955',b'1','aawny8957@gmail.com',b'1','123456');
INSERT INTO `employees` VALUES (2,'AHMED','mohamed','TANTA',b'0','29504141600527','0402766657','01009363862',NULL,'1934-9-28',NULL,NULL,NULL,NULL);
INSERT INTO `employees` VALUES (3,'ali','mohamed','TANTA',b'0','29502141605535','0402766337','01021598867','5000','1937-7-18',b'0','a@yahoo.com',b'0','2222');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table pay
#

DROP TABLE IF EXISTS `pay`;
CREATE TABLE `pay` (
  `PAYId` int(11) NOT NULL AUTO_INCREMENT,
  `VALUES` varchar(25) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `PAYTYPE` varchar(10) DEFAULT NULL,
  `PAYKIND` bit(1) DEFAULT NULL,
  PRIMARY KEY (`PAYId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table pay
#

LOCK TABLES `pay` WRITE;
/*!40000 ALTER TABLE `pay` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table resrvation
#

DROP TABLE IF EXISTS `resrvation`;
CREATE TABLE `resrvation` (
  `RESRId` int(11) NOT NULL AUTO_INCREMENT,
  `ROOMID` int(11) DEFAULT NULL,
  `EMID` int(11) DEFAULT NULL,
  `VISITORID` int(11) DEFAULT NULL,
  `CHECKIN` date DEFAULT NULL,
  `CHECKOUT` date DEFAULT NULL,
  `RESERVKIND` int(11) DEFAULT NULL,
  PRIMARY KEY (`RESRId`),
  KEY `EMID` (`EMID`),
  KEY `ROOMID` (`ROOMID`),
  KEY `VISITORID` (`VISITORID`),
  KEY `RESERVKIND` (`RESERVKIND`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table resrvation
#

LOCK TABLES `resrvation` WRITE;
/*!40000 ALTER TABLE `resrvation` DISABLE KEYS */;
/*!40000 ALTER TABLE `resrvation` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table rooms
#

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `RId` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` int(2) DEFAULT NULL,
  `PRICE` varchar(20) DEFAULT NULL,
  `number` varchar(25) DEFAULT NULL,
  `ractivation` bit(1) DEFAULT NULL,
  PRIMARY KEY (`RId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Dumping data for table rooms
#

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,0,NULL,'102',b'0');
INSERT INTO `rooms` VALUES (2,NULL,NULL,'101',b'0');
INSERT INTO `rooms` VALUES (3,1,'200','104',b'1');
INSERT INTO `rooms` VALUES (4,1,'200','105',b'0');
INSERT INTO `rooms` VALUES (5,1,'500','106',b'1');
INSERT INTO `rooms` VALUES (6,0,'300','107',b'1');
INSERT INTO `rooms` VALUES (7,1,'700','108',b'0');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table visitor
#

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE `visitor` (
  `VId` int(11) NOT NULL AUTO_INCREMENT,
  `VFNAME` varchar(20) DEFAULT NULL,
  `VLNAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSPORTID` varchar(20) DEFAULT NULL,
  `VMOBILE` varchar(11) DEFAULT NULL,
  `VPHONE` varchar(10) DEFAULT NULL,
  `NATIONALID` varchar(15) DEFAULT NULL,
  `CITYID` int(11) DEFAULT NULL,
  PRIMARY KEY (`VId`),
  KEY `CITYID` (`CITYID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table visitor
#

LOCK TABLES `visitor` WRITE;
/*!40000 ALTER TABLE `visitor` DISABLE KEYS */;
/*!40000 ALTER TABLE `visitor` ENABLE KEYS */;
UNLOCK TABLES;

#
#  Foreign keys for table city
#

ALTER TABLE `city`
ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`COID`) REFERENCES `country` (`CId`);

#
#  Foreign keys for table resrvation
#

ALTER TABLE `resrvation`
ADD CONSTRAINT `resrvation_ibfk_1` FOREIGN KEY (`EMID`) REFERENCES `employees` (`Id`),
ADD CONSTRAINT `resrvation_ibfk_2` FOREIGN KEY (`ROOMID`) REFERENCES `rooms` (`RId`),
ADD CONSTRAINT `resrvation_ibfk_3` FOREIGN KEY (`VISITORID`) REFERENCES `visitor` (`VId`),
ADD CONSTRAINT `resrvation_ibfk_4` FOREIGN KEY (`RESERVKIND`) REFERENCES `pay` (`PAYId`);

#
#  Foreign keys for table visitor
#

ALTER TABLE `visitor`
ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`CITYID`) REFERENCES `city` (`CITYId`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
