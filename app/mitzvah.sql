-- MySQL dump 10.11
--
-- Host: localhost    Database: mitzvah
-- ------------------------------------------------------
-- Server version	5.0.32-Debian_7etch6

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
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE `donations` (
  `id` int(11) NOT NULL auto_increment,
  `donation_name` varchar(128) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `reason` text NOT NULL,
  `items` text NOT NULL,
  `person_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

LOCK TABLES `donations` WRITE;
/*!40000 ALTER TABLE `donations` DISABLE KEYS */;
/*!40000 ALTER TABLE `donations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL COMMENT 'Pointer to Parent event',
  `lft` int(11) NOT NULL COMMENT 'Left Tree Behavior',
  `rght` int(11) NOT NULL COMMENT 'Right Tree Behavior',
  `event_name` varchar(48) NOT NULL,
  `description` text NOT NULL,
  `max_people` int(11) NOT NULL,
  `enrolled` int(6) NOT NULL,
  `location` varchar(64) NOT NULL,
  `agency` varchar(48) NOT NULL,
  `time` varchar(16) NOT NULL,
  `restrictions` text NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,0,0,0,'Mitzvah Day 2010','Master Event for Mitzvah Day 2010',-1,0,'Temple Beth Israel','Mitzvah-Day.org','','','2010-02-13 14:28:39',NULL),(2,1,0,0,'Blankets for Children','Making blankets for children in need (20 blankets)',30,0,'TBI','Comforts for Children','10:00 - 12:00','middle school and up','2010-02-13 14:28:39','2010-02-17 09:51:04'),(3,1,0,0,'Gardening at Mt. Pisgah','Gardening at the Native Plant Nursery transplanting, weeding, Etc.',12,0,'Buford Park/Mt. Pisgah','Friends of Buford Park','10:30 - 1:30','middle school and up','2010-02-13 14:28:39',NULL),(4,1,0,0,'Park Enhancement at Mt. Pisgah','Removal of invasive plants',12,0,'Buford Park/Mt. Pisgah','Friends of Buford Park','10:30 - 1:30','middle school and up','2010-02-13 14:28:39','2010-02-19 23:31:46'),(5,1,0,0,'Seniors Sing-a-long','Singing at Nursing Home',5,0,'South Hills','South Hills','10:00 - 11:00','all ages','2010-02-13 14:28:39',NULL),(6,1,0,0,'Spring Cleaning Deep cleaning (Kitchen)','First Place Family Center',8,0,'First Place Family Center','First Place Family Center','10:00 - 1:00','middle school and up','2010-02-13 14:28:39',NULL),(7,1,0,0,'Toiletry Kits for women and children','Assemble items needed by women and children who are receiving help from WomenSpace and deliver',7,0,'TBI','Womenspace','10:00 - 11:30','all ages','2010-02-13 14:28:39',NULL),(8,1,0,0,'Kitchen kits for  women','Assemble kitchen kits for women leaving the WomenSpace safe house',5,0,'TBI','WomenSpace','10:00 - 11:30','All ages','2010-02-13 14:28:39',NULL),(9,1,0,0,'Jewish Social Services','Each person or team will visit 1- 2 homes',5,0,'At Homes','Jewish Family Services','10:00 - 1:00','Middle School and Up','2010-02-13 14:28:39',NULL),(10,1,0,0,'Spruce up childrens Home','Sprucing up toddlers playroom and toys and outside gardening',5,0,'Mutual Home','Catholic Community Services','10:30 - 1:00','Middle School and Up','2010-02-13 14:28:39',NULL),(11,1,0,0,'Spruce up food box center','Inside and outside maintenance in food box room',7,0,'Location TDB','Catholic Community Services','10:30 - 1:00','Middle School and up','2010-02-13 14:28:39',NULL),(12,1,0,0,'Bus Washing and play area clean up','Wash the busses and clean outdoor play area',7,0,'Relief Nursery','Relief Nursery','10:30 - 12:30','All ages','2010-02-13 14:28:39',NULL),(13,1,0,0,'Grounds Spruce up','Spruce up grounds at Greenhill',-1,0,'GreenHill','GreenHill Humane Society','10:30 - 1:00','All ages','2010-02-13 14:28:39',NULL),(14,1,0,0,'Nursing Home beautification','Plant planter boxes at nursing home 26 boxes',5,0,'Good Samaritan Home','Good Sam','10:00 - 12:30','Middle School and up','2010-02-13 14:28:39',NULL),(15,1,0,0,'Blankets For Children','Make blankets',0,0,'Talmud Torah','Blankets for Children','Talmud Torah','All Ages','2010-02-13 14:28:39',NULL),(16,1,0,0,'Letters for Womenspace','Write letters to include in WomenSpace kits',0,0,'Shalhevet, TBI','WomenSpace','Shalhevet','High School','2010-02-13 14:28:39',NULL),(17,1,0,0,'Starter boxes','Starter Boxes for First Place families (One per TT Class)',0,0,'Talmud Torah, TBI','First Place','Talmud Torah','Talmud Torah','2010-02-13 14:28:39',NULL),(18,1,0,0,'Breakfast Team','Setup and Cleanup Breakfast for Mitzvah Day Volunteers',10,0,'Temple Beth Israel','Got-Mitzvah?','7:30 - 10:30','Middle School and Up','2010-02-13 14:28:39',NULL),(19,1,0,0,'Mitzvah Day Registration','Help during Mitzvah Day Registration',0,0,'Temple Beth Israel','Got-Mitzvah?','7:30 - 10:30','Middle School and Up','2010-02-13 14:28:39',NULL);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `group_name` varchar(64) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Mitzvah Day Organizers','2010-02-13 14:28:39',NULL);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups_events`
--

DROP TABLE IF EXISTS `groups_events`;
CREATE TABLE `groups_events` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups_events`
--

LOCK TABLES `groups_events` WRITE;
/*!40000 ALTER TABLE `groups_events` DISABLE KEYS */;
INSERT INTO `groups_events` VALUES (1,1,1);
/*!40000 ALTER TABLE `groups_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL COMMENT 'Id of Parent or Mitzvah Leader',
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `email` varchar(48) NOT NULL,
  `tshirt` int(11) NOT NULL,
  `password` varchar(36) NOT NULL,
  `last_donation` datetime default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES (1,0,0,0,'Margot','Helphand',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(2,0,0,0,'Justine','Lovinger',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(3,0,0,0,'Barbara','Friedson',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(4,0,0,0,'Amy','Steckel',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(5,0,0,0,'Esther','Jacobson',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(6,0,0,0,'Rich','Glauber',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(7,0,0,0,'Tom','Broeker',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(8,0,0,0,'Barry','Nobel',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(9,0,0,0,'Judy','Goldstein',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(10,0,0,0,'Carole','Stein',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(11,0,0,0,'Deb','Weinman',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(12,0,0,0,'Bernie','Maegan',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(13,0,0,0,'Al','Bennett',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(14,0,0,0,'Ellen','Todras',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(15,0,0,0,'Liz','Phelps',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(16,0,0,0,'Bruce','Kreitzberg',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(17,0,0,0,'Yedida','',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(18,0,0,0,'Bob','Rubenstein',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL),(19,0,0,0,'Oriana','',0,'','',0,'',NULL,'2010-02-13 14:28:39',NULL);
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people_events`
--

DROP TABLE IF EXISTS `people_events`;
CREATE TABLE `people_events` (
  `id` int(11) NOT NULL auto_increment,
  `person_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `role` varchar(16) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people_events`
--

LOCK TABLES `people_events` WRITE;
/*!40000 ALTER TABLE `people_events` DISABLE KEYS */;
INSERT INTO `people_events` VALUES (1,1,1,''),(2,2,1,''),(4,4,3,''),(5,5,4,''),(6,6,5,''),(7,7,5,''),(8,8,6,''),(9,9,7,''),(10,10,8,''),(11,11,9,''),(12,12,9,''),(13,13,10,''),(14,14,11,''),(15,15,12,''),(16,16,13,''),(17,17,14,''),(18,17,15,''),(19,17,16,''),(20,18,17,''),(21,19,18,'');
/*!40000 ALTER TABLE `people_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people_groups`
--

DROP TABLE IF EXISTS `people_groups`;
CREATE TABLE `people_groups` (
  `id` int(11) NOT NULL auto_increment,
  `person_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people_groups`
--

LOCK TABLES `people_groups` WRITE;
/*!40000 ALTER TABLE `people_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `people_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people_notes`
--

DROP TABLE IF EXISTS `people_notes`;
CREATE TABLE `people_notes` (
  `id` int(11) NOT NULL auto_increment,
  `person_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-03-03 16:33:34
