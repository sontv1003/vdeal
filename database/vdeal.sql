-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-06-10 16:56:08
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table vdeal.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `is_admin` int(1) DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table vdeal.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`, `is_admin`, `status`) VALUES
	(1, 'admin', '242392a507024486ce69be232e870b13', 'Son Tran', 'transontt@gmail.com', 1, 1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table vdeal.areawises
CREATE TABLE IF NOT EXISTS `areawises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text,
  `sort_order` int(5) unsigned DEFAULT '0',
  `status` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table vdeal.areawises: ~10 rows (approximately)
/*!40000 ALTER TABLE `areawises` DISABLE KEYS */;
INSERT INTO `areawises` (`id`, `name`, `description`, `sort_order`, `status`) VALUES
	(1, 'Mylapore', NULL, 0, 1),
	(2, 'Thiruvanmiyur', NULL, 1, 1),
	(3, 'Velachery', NULL, 2, 1),
	(4, 'Adyar', NULL, 3, 1),
	(5, 'Guindy', NULL, 4, 1),
	(6, 'Nugambakkam', NULL, 5, 1),
	(7, 'Anna nagar', NULL, 6, 1),
	(8, 'Porur', NULL, 7, 1),
	(9, 'Madipakkam', NULL, 8, 1),
	(10, 'Tambaram', NULL, 9, 1);
/*!40000 ALTER TABLE `areawises` ENABLE KEYS */;


-- Dumping structure for table vdeal.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text,
  `sort_order` int(11) DEFAULT '0',
  `is_static_page` int(1) DEFAULT '0',
  `status` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table vdeal.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `description`, `sort_order`, `is_static_page`, `status`) VALUES
	(1, 'Realestate', NULL, 1, 0, 1),
	(2, 'Apartment', NULL, 2, 0, 1),
	(3, 'Completed', NULL, 3, 0, 1),
	(4, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque leo orci, adipiscing sit amet tincidunt porta, ultrices consequat dolor. Aenean vulputate, nibh eu molestie eleifend, justo purus vestibulum magna, sit amet pharetra elit elit venenatis metus. Pellentesque blandit ipsum a magna placerat laoreet. In posuere felis eget tortor tincidunt quis vulputate arcu suscipit. Mauris consequat tristique enim, a auctor neque cursus non. Quisque quam risus, scelerisque a tempus nec, sodales a quam. Aenean ut metus ut felis varius ullamcorper id non enim. Proin nec augue nibh, vel convallis erat. Sed id mi ut ipsum rhoncus convallis. Etiam volutpat ullamcorper massa, in porta ante ultrices porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum id sem felis. Vivamus porttitor ante in urna sodales tempor. Mauris in justo vitae ligula rutrum mollis. Cras bibendum malesuada mi, non facilisis sapien consectetur at.', 0, 1, 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table vdeal.news_letters
CREATE TABLE IF NOT EXISTS `news_letters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `status` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table vdeal.news_letters: ~0 rows (approximately)
/*!40000 ALTER TABLE `news_letters` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_letters` ENABLE KEYS */;


-- Dumping structure for table vdeal.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `summary` text,
  `description` text,
  `status` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_projects_categories` (`cat_id`),
  KEY `FK_projects_areawises` (`area_id`),
  CONSTRAINT `FK_projects_areawises` FOREIGN KEY (`area_id`) REFERENCES `areawises` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_projects_categories` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table vdeal.projects: ~5 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `cat_id`, `area_id`, `name`, `picture`, `summary`, `description`, `status`) VALUES
	(2, 1, 6, 'dsgsdgs  sgsdgsg s', '1.jpg', 'Proin egestas, neque sit amet fringilla vehicula, elit orci iaculis orci, et var amet consequat justo.', 'Proin egestas, neque sit amet fringilla vehicula, elit orci iaculis orci, et varius mi lacus dictum orci. In dictum laoreet augue non cursus. Curabitur at tortor sed tellus volutpat fermentum non vitae odio. Nam tempus neque nec eros dictum consequat. Nulla facilisi. Nulla magna tellus, eleifend eget varius id, euismod ut metus. Fusce tincidunt viverra aliquet. Nam facilisis bibendum magna quis laoreet. Pellentesque sit amet consequat justo.', 1),
	(3, 1, 3, 'ss s dgsgds gsd', '2.jpg', 't orci iaculis orci, et var amet consequat justo.', 'Proin egestas, neque sit amet fringilla vehicula, elit orci iaculis orci, et varius mi lacus dictum orci. In dictum laoreet augue non cursus. Curabitur at tortor sed tellus volutpat fermentum non vitae odio. Nam tempus neque nec eros dictum consequat. Nulla facilisi. Nulla magna tellus, eleifend eget varius id, euismod ut metus. Fusce tincidunt viverra aliquet. Nam facilisis bibendum magna quis laoreet. Pellentesque sit amet consequat justo.', 1),
	(5, 2, 9, 't orci iaculis orci, et var amet consequat justo.', '3.jpg', 't orci iaculis orci, et var amet consequat justo.', 'Proin egestas, neque sit amet fringilla vehicula, elit orci iaculis orci, et varius mi lacus dictum orci. In dictum laoreet augue non cursus. Curabitur at tortor sed tellus volutpat fermentum non vitae odio. Nam tempus neque nec eros dictum consequat. Nulla facilisi. Nulla magna tellus, eleifend eget varius id, euismod ut metus. Fusce tincidunt viverra aliquet. Nam facilisis bibendum magna quis laoreet. Pellentesque sit amet consequat justo.', 1),
	(6, 1, 9, 't orci iaculis orci, et var amet consequat justo.', '4.jpg', 't orci iaculis orci, et var amet consequat justo.', 'Proin egestas, neque sit amet fringilla vehicula, elit orci iaculis orci, et varius mi lacus dictum orci. In dictum laoreet augue non cursus. Curabitur at tortor sed tellus volutpat fermentum non vitae odio. Nam tempus neque nec eros dictum consequat. Nulla facilisi. Nulla magna tellus, eleifend eget varius id, euismod ut metus. Fusce tincidunt viverra aliquet. Nam facilisis bibendum magna quis laoreet. Pellentesque sit amet consequat justo.', 1),
	(7, 3, 9, 't orci iaculis orci, et var amet consequat justo.', '', 't orci iaculis orci, et var amet consequat justo.', 'Proin egestas, neque sit amet fringilla vehicula, elit orci iaculis orci, et varius mi lacus dictum orci. In dictum laoreet augue non cursus. Curabitur at tortor sed tellus volutpat fermentum non vitae odio. Nam tempus neque nec eros dictum consequat. Nulla facilisi. Nulla magna tellus, eleifend eget varius id, euismod ut metus. Fusce tincidunt viverra aliquet. Nam facilisis bibendum magna quis laoreet. Pellentesque sit amet consequat justo.', 1);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
