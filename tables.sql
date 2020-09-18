/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - plantilla
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`plantilla` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `plantilla`;

/*Table structure for table `sys_icons` */

DROP TABLE IF EXISTS `sys_icons`;

CREATE TABLE `sys_icons` (
  `id_icon` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_icon`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_icons` */

insert  into `sys_icons`(`id_icon`,`name`) values 
(1,'active-40\r'),
(2,'air-baloon\r'),
(3,'album-2\r'),
(4,'align-center\r'),
(5,'align-left-2\r'),
(6,'ambulance\r'),
(7,'app\r'),
(8,'archive-2\r'),
(9,'atom\r'),
(10,'badge\r'),
(11,'bag-17\r'),
(12,'basket\r'),
(13,'bell-55\r'),
(14,'bold-down\r'),
(15,'bold-left\r'),
(16,'bold-right\r'),
(17,'bold-up\r'),
(18,'bold\r'),
(19,'book-bookmark\r'),
(20,'books\r'),
(21,'box-2\r'),
(22,'briefcase-24\r'),
(23,'building\r'),
(24,'bulb-61\r'),
(25,'bullet-list-67\r'),
(26,'bus-front-12\r'),
(27,'button-pause\r'),
(28,'button-play\r'),
(29,'button-power\r'),
(30,'calendar-grid-58\r'),
(31,'camera-compact\r'),
(32,'caps-small\r'),
(33,'cart\r'),
(34,'chart-bar-32\r'),
(35,'chart-pie-35\r'),
(36,'chat-round\r'),
(37,'check-bold\r'),
(38,'circle-08\r'),
(39,'cloud-download-95\r'),
(40,'cloud-upload-96\r'),
(41,'compass-04\r'),
(42,'controller\r'),
(43,'credit-card\r'),
(44,'curved-next\r'),
(45,'delivery-fast\r'),
(46,'diamond\r'),
(47,'email-83\r'),
(48,'fat-add\r'),
(49,'fat-delete\r'),
(50,'fat-remove\r'),
(51,'favourite-28\r'),
(52,'folder-17\r'),
(53,'glasses-2\r'),
(54,'hat-3\r'),
(55,'headphones\r'),
(56,'html5\r'),
(57,'istanbul\r'),
(58,'circle-08\r'),
(59,'key-25\r'),
(60,'laptop\r'),
(61,'like-2\r'),
(62,'lock-circle-open\r'),
(63,'map-big\r'),
(64,'mobile-button\r'),
(65,'money-coins\r'),
(66,'note-03\r'),
(67,'notification-70\r'),
(68,'palette\r'),
(69,'paper-diploma\r'),
(70,'pin-3\r'),
(71,'planet\r'),
(72,'ruler-pencil\r'),
(73,'satisfied\r'),
(74,'scissors\r'),
(75,'send\r'),
(76,'settings-gear-65\r'),
(77,'settings\r'),
(78,'single-02\r'),
(79,'single-copy-04\r'),
(80,'sound-wave\r'),
(81,'spaceship\r'),
(82,'square-pin\r'),
(83,'support-16\r'),
(84,'tablet-button\r'),
(85,'tag\r'),
(86,'tie-bow\r'),
(87,'time-alarm\r'),
(88,'trophy\r'),
(89,'tv-2\r'),
(90,'umbrella-13\r'),
(91,'user-run\r'),
(92,'vector\r'),
(93,'watch-time\r'),
(94,'world\r'),
(95,'zoom-split-in\r'),
(96,'collection\r'),
(97,'image\r'),
(98,'shop\r'),
(99,'ungroup\r'),
(100,'world-2\r'),
(101,'ui-04');

/*Table structure for table `sys_menu` */

DROP TABLE IF EXISTS `sys_menu`;

CREATE TABLE `sys_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `url` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` int(50) DEFAULT NULL,
  `root` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `last_update` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `FK_menu_status` (`status`) USING BTREE,
  KEY `FK_menu_tipo_menu` (`type`) USING BTREE,
  CONSTRAINT `sys_menu_ibfk_1` FOREIGN KEY (`status`) REFERENCES `sys_status` (`id_status`),
  CONSTRAINT `sys_menu_ibfk_2` FOREIGN KEY (`type`) REFERENCES `sys_type_menu` (`id_type_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_menu` */

insert  into `sys_menu`(`id_menu`,`title`,`type`,`url`,`icon`,`root`,`status`,`last_update`,`modified_by`) values 
(1,'Administracion General',3,'Admin',1,1,1,'2020-09-07 13:25:50',1),
(2,'Menu',2,'Admin/C_Menu',63,1,1,'2020-09-07 13:26:52',1),
(18,'Usuarios',2,'Admin/C_Users',38,1,1,'2020-09-09 09:03:56',1),
(22,'Roles Usuario',2,'Admin/C_Users/Rol_Users',2,1,1,'2020-09-17 17:09:07',8),
(25,'Prueba',2,'Prueba/C_Prueba',12,25,1,'2020-09-18 14:14:45',NULL);

/*Table structure for table `sys_roles` */

DROP TABLE IF EXISTS `sys_roles`;

CREATE TABLE `sys_roles` (
  `id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `last_update` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_roles`),
  KEY `FK_roles_status` (`status`),
  CONSTRAINT `FK_roles_status` FOREIGN KEY (`status`) REFERENCES `sys_status` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_roles` */

insert  into `sys_roles`(`id_roles`,`description`,`status`,`last_update`,`modified_by`) values 
(1,'Web Developer',1,'2020-09-04 17:23:01',1),
(2,'Standar',1,'2020-09-08 14:08:03',1),
(7,'Prueba',2,NULL,8);

/*Table structure for table `sys_roles_menu` */

DROP TABLE IF EXISTS `sys_roles_menu`;

CREATE TABLE `sys_roles_menu` (
  `id_roles_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_roles` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_roles_menu`),
  UNIQUE KEY `id_roles_id_menu` (`id_roles`,`id_menu`) USING BTREE,
  KEY `FK_roles_menu_menu` (`id_menu`) USING BTREE,
  CONSTRAINT `sys_roles_menu_ibfk_2` FOREIGN KEY (`id_roles`) REFERENCES `sys_roles` (`id_roles`),
  CONSTRAINT `sys_roles_menu_ibfk_3` FOREIGN KEY (`id_menu`) REFERENCES `sys_menu` (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_roles_menu` */

insert  into `sys_roles_menu`(`id_roles_menu`,`id_roles`,`id_menu`) values 
(1,1,1),
(57,1,2),
(59,1,18),
(72,1,22),
(69,1,25),
(70,2,25);

/*Table structure for table `sys_status` */

DROP TABLE IF EXISTS `sys_status`;

CREATE TABLE `sys_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_status` */

insert  into `sys_status`(`id_status`,`description`) values 
(1,'ACTIVO'),
(2,'INACTIVO');

/*Table structure for table `sys_type_menu` */

DROP TABLE IF EXISTS `sys_type_menu`;

CREATE TABLE `sys_type_menu` (
  `id_type_menu` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_type_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_type_menu` */

insert  into `sys_type_menu`(`id_type_menu`,`description`) values 
(1,'Raiz - Menu principal sin submenu'),
(2,'Nivel - Submenu'),
(3,'Raiz Con Nivel - Menu principal con submenu'),
(4,'Nivel Con Nivel - Submenu con Submenus');

/*Table structure for table `sys_users` */

DROP TABLE IF EXISTS `sys_users`;

CREATE TABLE `sys_users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `user` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_profile` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `last_entry` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`),
  KEY `id_status` (`id_status`),
  KEY `rol` (`rol`),
  CONSTRAINT `sys_users_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `sys_status` (`id_status`),
  CONSTRAINT `sys_users_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `sys_roles` (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `sys_users` */

insert  into `sys_users`(`id_users`,`name`,`user`,`password`,`img_profile`,`rol`,`id_status`,`last_entry`) values 
(1,'Ivan Contreras','Ivanc','d72d187df41e10ea7d9fcdc7f5909205','EYj3o92UcAA5x-D.jfif',1,1,'2020-09-17 17:05:38'),
(8,'admin','admin','1cb9816ba134a8d56403a79ccda403eb','c3dcd9804e19a6ed296548a2796a140d.jpg',1,1,'2020-09-18 16:38:52');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
