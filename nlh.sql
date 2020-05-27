/*
SQLyog Enterprise - MySQL GUI v8.02 RC
MySQL - 5.5.5-10.3.16-MariaDB : Database - covid19
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`covid19` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `covid19`;

/*Table structure for table `cases` */

DROP TABLE IF EXISTS `cases`;

CREATE TABLE `cases` (
  `State` varchar(1000) DEFAULT NULL,
  `Total Cases` varchar(1000) DEFAULT NULL,
  `Active Cases` varchar(1000) DEFAULT NULL,
  `Recovered` varchar(1000) DEFAULT NULL,
  `Deaths` varchar(1000) DEFAULT NULL,
  `Cases` varchar(1000) DEFAULT NULL,
  `Numbers` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cases` */

insert  into `cases`(`State`,`Total Cases`,`Active Cases`,`Recovered`,`Deaths`,`Cases`,`Numbers`) values ('Maharashtra','56948','37133','17918','1897','Recovered','3000'),('Tamil nadu','18545','8500','9909','136','Active','49000'),('Gujarat','15205','6718','7549','938','Deaths','190'),('Delhi','14465','7223','6954','288',NULL,NULL),('Rajasthan','7476','3144','4165','167',NULL,NULL),('Madhya Pradesh','6859','2988','3571','300',NULL,NULL),('Uttar Pradesh','6497','2668','3660','169',NULL,NULL),('West Bengal','3816','2125','1414','278',NULL,NULL),('Andhra Pradesh','2983','909','2017','57',NULL,NULL),('Bihar','2870','2124','733','13',NULL,NULL),('Karnataka','2282','1514','722','44',NULL,NULL),('Punjab','2081','128','1913','40',NULL,NULL),('Telangana','1920','700','1164','56',NULL,NULL),('Jammu and kashmir','1668','836','809','23',NULL,NULL),('Odisha','1517','861','649','7',NULL,NULL),('Haryana','1229','410','803','16',NULL,NULL),('Kerala','964','426','532','6',NULL,NULL),('Assam','598','528','63','4',NULL,NULL),('Jharkhanad','405','253','148','4',NULL,NULL),('Uttarakhand','400','329','64','4',NULL,NULL),('Chattisgarh','306','235','71','0',NULL,NULL),('Chandigarh','278','87','187','4',NULL,NULL),('Himachal Pradesh','233','163','63','4',NULL,NULL),('Tripura','198','33','165','0',NULL,NULL),('Goa','67','48','19','0',NULL,NULL),('Ladakh','53','10','43','0',NULL,NULL),('Puducherry','49','32','17','0',NULL,NULL),('Manipur','39','35','4','0',NULL,NULL),('Andaman and Nicobar Islands','33','0','33','0',NULL,NULL),('Meghalaya','15','2','12','1',NULL,NULL),('Nagaland','4','4','0','0',NULL,NULL),('Dadra and nagar','2','1','1','0',NULL,NULL),('Arunachal Pradesh','2','1','1','0',NULL,NULL),('Mizoram','1','0','1','0',NULL,NULL),('Sikkim','1','1','0','0',NULL,NULL);

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `Cities` varchar(1000) DEFAULT NULL,
  `Cases` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cities` */

insert  into `cities`(`Cities`,`Cases`) values ('Mumbai','12000'),('Chennai','10000'),('Pune','5000');

/*Table structure for table `months` */

DROP TABLE IF EXISTS `months`;

CREATE TABLE `months` (
  `Month` varchar(1000) DEFAULT NULL,
  `Active Cases` varchar(1000) DEFAULT NULL,
  `Recovered` varchar(1000) DEFAULT NULL,
  `Deaths` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `months` */

insert  into `months`(`Month`,`Active Cases`,`Recovered`,`Deaths`) values ('January','1','0','0'),('February','100','20','2'),('March','1000','100','50'),('April','40000','5000','300'),('May','60000','20000','800');

/*Table structure for table `overall` */

DROP TABLE IF EXISTS `overall`;

CREATE TABLE `overall` (
  `Country` varchar(1000) DEFAULT NULL,
  `Active Cases` varchar(1000) DEFAULT NULL,
  `Recovered` varchar(1000) DEFAULT NULL,
  `Deaths` varchar(1000) DEFAULT NULL,
  `Total Cases` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `overall` */

insert  into `overall`(`Country`,`Active Cases`,`Recovered`,`Deaths`,`Total Cases`) values ('India','85786','67711','4534','158042');

/*Table structure for table `total` */

DROP TABLE IF EXISTS `total`;

CREATE TABLE `total` (
  `Cases` varchar(10000) DEFAULT NULL,
  `Numbers` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `total` */

insert  into `total`(`Cases`,`Numbers`) values ('Active Cases','85786'),('Recovered','67711'),('Deaths','4534');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
