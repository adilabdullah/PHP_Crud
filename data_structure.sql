/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - dbms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbms`;

/*Table structure for table `adil` */

DROP TABLE IF EXISTS `adil`;

CREATE TABLE `adil` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(35) DEFAULT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `occupation` varchar(35) DEFAULT NULL,
  `gender` varchar(35) DEFAULT NULL,
  `cnic` int(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`sno`,`cnic`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `adil` */

insert  into `adil`(`sno`,`firstname`,`lastname`,`age`,`email`,`password`,`occupation`,`gender`,`cnic`,`country`,`dob`) values (7,'anees','hasan',35,'aneessd@hotmail.com','anees','Professional','male',332545545,'Maldieves','1990-08-17'),(8,'bilal','abdullah',24,'bilalpilot@yahoo.com','bilal','Bussiness','male',2147483647,'USA','1990-09-02'),(9,'hussain','raza',32,'husi990@yahoo.com','hussain','','',2147483647,'pakistan','1991-12-25'),(10,'qadir','ali',22,'qadir@gmail.com','qadir','Job','male',454364367,'Srilanka/','1990-12-09'),(11,'kaleem ','raza',37,'kaleem@hotmail.com','kaleem','professional','male',325346656,'USA','1992-12-09'),(15,'ali','abbas',22,'ali12@yahoo.com','ali122','Bussiness','male',2147483647,'pakistan','1987-11-12');

/*Table structure for table `first_php` */

DROP TABLE IF EXISTS `first_php`;

CREATE TABLE `first_php` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) DEFAULT NULL,
  `cell` varchar(15) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `website` varchar(35) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `cnic` varchar(25) DEFAULT NULL,
  `religion` varchar(25) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `first_php` */

insert  into `first_php`(`sno`,`name`,`cell`,`email`,`website`,`age`,`cnic`,`religion`,`gender`) values (1,'adil','03132770440','adil_abdullah@hotmail.com','http://www.alhamdprinters.com',0,'4210175414555','Islam','male'),(3,'emma watson','03323366369','emma.watson@gmail.com','http://emma.com',24,'4328574938273','Christian','female'),(4,'ali','03212443483','ali12@gmail.com','http://alibaba.com',25,'432453535','Islam','male'),(5,'aniya','0231347583','aniya3003@yahoo.com','http://www.aniya101.net.pk',21,'2937462833','Parsi','female'),(6,'sania','03332234584','saniaali@gmail.com','http://www.sania.com',20,'9382038475934','Islam','female'),(7,'mukesh','83758382','mukesh823@yahoo.com','http://mhe.com.in',45,'8328494323','Hindu','male'),(8,'alam','7399489','alammunir@yahoo.com','http://www.alam.ok',34,'34859394','Islam','male');

/*Table structure for table `medicine` */

DROP TABLE IF EXISTS `medicine`;

CREATE TABLE `medicine` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `code` int(10) NOT NULL,
  `brand` varchar(150) NOT NULL,
  `class` varchar(150) DEFAULT NULL,
  `generic` varchar(200) DEFAULT NULL,
  `purpose` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `packing` varchar(100) DEFAULT NULL,
  `manufacturer` varchar(120) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`code`,`brand`),
  KEY `sno` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `medicine` */

insert  into `medicine`(`sno`,`code`,`brand`,`class`,`generic`,`purpose`,`type`,`packing`,`manufacturer`,`price`) values (1,1144,'nivotel','Class 4','h20','infection','Capsule','Packet','barret hudgson',300),(2,1455,'erwer','Class 3','fdsf','dfdsg','Tablet','Sachet','tgtrg',234),(6,1482,'aspirin','Class 2','nh2so4','flu','\'Tablet','Packet','wyeth',11),(5,1748,'Calpol','Class 2','Hn2so4','for fever','\'Tablet','Packet','pfizer',28),(4,2295,'disprene','Class 2','Al2so6','for pain','\'Tablet','Packet','GSK',4),(3,3430,'panadol','Class 1','Ch2So4','For fever','Tablet','Packet','GSK',15);

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `code` int(10) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `company` varchar(125) DEFAULT NULL,
  `company_code` int(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`code`,`company_code`),
  KEY `sno` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `person` */

insert  into `person`(`sno`,`code`,`first_name`,`last_name`,`email`,`occupation`,`about`,`company`,`company_code`,`password`) values (6,112,NULL,NULL,NULL,NULL,NULL,NULL,5447,NULL),(22,116,'anas','abdullah','anas12@hotmail.com','student','\'enthusiastic','anas medicos',791,'123456'),(20,1335,'abdul','wali','wali12@yahoo.com','bussiness','a good bussiness man ','alco pharma',2533,'123456'),(21,1943,'anwer','saeed','anwer_saeed@yahoo.com','business','an enterpreuner','an distributor',1340,'123456'),(13,2361,'azad','htrhr','rthth@yahoo.com','ggre','efwe','efwef',9232,'123456'),(4,2555,'aqil','anjum','aql12@yahoo.com','student','itself','aqil drugs',5314,'1234'),(12,3162,'abbas','dsf','dsf@yahoo.com','sfdsf','dfsd','sdfds',9515,'123456'),(9,3727,'asad','tahir','asad@gmail.com','bussiness','nothing','asad',1743,'asad'),(3,3737,'amin','muhammad','amin@homail.com','bussiness','nothing to do','amin medicals store',5204,'qwerty'),(23,3881,NULL,NULL,NULL,NULL,NULL,NULL,1452,NULL),(1,4079,'','abdullah','adil.officer@gmail.com','student','nothing itself','adil',131,'123456'),(8,5415,NULL,NULL,NULL,NULL,NULL,NULL,1480,NULL),(16,5634,NULL,NULL,'anil@hotmail.com',NULL,NULL,NULL,4206,'123456'),(2,6157,'bilal','abdullah','bilal_pilot@yahoo.com','business','itself','aroma',738,'12345'),(7,6425,NULL,NULL,NULL,NULL,NULL,NULL,812,NULL),(24,6829,'aneeq','rehman','aneequok@gmail.com','student','\'given tention to other','aneeq sons',6845,'aneeq'),(14,6933,'aqaz','sadsadas','dsfds@yahoo.com','bussiness','gsdfs','gfsfds',4625,'123456'),(15,7300,'ammar','anil','anil@hotmail.com','bussiness','selfish','anil sons',4209,'123456'),(19,7408,'aehyt','fdsfds','sdfdf@gmail.com','adasd','sdasd','sdasd',3719,'654321'),(18,7748,'aehyt','fdsfds','sdfdf@gmail.com','adasd','sdasd','sdasd',9848,'654321'),(17,8051,NULL,NULL,'adil.officer@gmail.com',NULL,NULL,NULL,7697,'123456'),(11,8281,'ali','sadsd','dfsd@yahoo.com','asd','adsdf','dsfsdf',2682,'123456'),(10,8820,'dsfdf','fdsf','fdds@gmail.com','sdfdsf','fdsf','sdfdsf',8568,'123456'),(5,8970,'aneeq','rehman','aneequok@gmail.com','student','giving tention to others','aneeq ltd',3591,'123456');

/*Table structure for table `person_info` */

DROP TABLE IF EXISTS `person_info`;

CREATE TABLE `person_info` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `father` varchar(25) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `cnic` int(25) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cell` int(25) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`sno`,`cnic`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `person_info` */

insert  into `person_info`(`sno`,`name`,`father`,`sex`,`age`,`cnic`,`email`,`address`,`cell`,`dob`) values (1,'[object HTMLInputElement]','[object HTMLInputElement]','[object HT',0,0,'[object HTMLInputElement]','[object HTMLInputElement]',0,'0000-00-00'),(2,'[object HTMLInputElement]','[object HTMLInputElement]','[object HT',0,0,'[object HTMLInputElement]','[object HTMLInputElement]',0,'0000-00-00'),(3,'akmal','allaudin','on',23,2147483647,'akmal123@yahoo.com','lahore',93859493,'1991-12-31'),(4,'','','',0,0,'','',0,'0000-00-00'),(5,'[object HTMLInputElement]','[object HTMLInputElement]','[object HT',0,0,'[object HTMLInputElement]','[object HTMLInputElement]',0,'0000-00-00'),(6,'','','',0,0,'','',0,'0000-00-00'),(7,'saif','malik','male',43,263873643,'saif122@gmail.cm','karachi',2848343,'1991-02-03'),(8,'wahab','rafiq','male',34,2147483647,'wahab.rafiq@gmail.com','karachi',973492837,'1991-12-09'),(9,'anas','farid','male',19,2147483647,'anasfarid11@yahoo.com','karachi',29374728,'1990-12-04');

/*Table structure for table `urdu_book` */

DROP TABLE IF EXISTS `urdu_book`;

CREATE TABLE `urdu_book` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `marks` int(10) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `urdu_book` */

insert  into `urdu_book`(`sno`,`name`,`marks`) values (3,'saad',12),(4,'uzair',11),(5,'kamran',45),(7,'aqib',78),(8,'faris',34),(11,'afaq',76),(12,'sajid',76),(13,'kamran',78),(15,'anas',89),(16,'kashan',56),(17,'kamran',45),(18,'asad',99),(19,'aneeq',98);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` int(8) NOT NULL AUTO_INCREMENT,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `displayName` varchar(55) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
