/*
SQLyog Professional v12.4.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - rdcdr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rdcdr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `rdcdr`;

/*Table structure for table `announcementstbl` */

DROP TABLE IF EXISTS `announcementstbl`;

CREATE TABLE `announcementstbl` (
  `AnnounceID` int(11) NOT NULL AUTO_INCREMENT,
  `NameOfAnnouncement` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Picture` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  PRIMARY KEY (`AnnounceID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `announcementstbl` */

/*Table structure for table `documenttbl` */

DROP TABLE IF EXISTS `documenttbl`;

CREATE TABLE `documenttbl` (
  `DocumentID` int(11) NOT NULL AUTO_INCREMENT,
  `TypeofDocument` text DEFAULT NULL,
  `Fullname` text DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `DateofBirth` text DEFAULT NULL,
  `PlaceofBirth` text DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `IssueFor` text DEFAULT NULL,
  `IssueDay` text DEFAULT NULL,
  `IssueMonthYear` text DEFAULT NULL,
  `PunongBarangay` text DEFAULT NULL,
  `YearOfResident` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `TransactionNo` text DEFAULT NULL,
  `DateRequested` datetime DEFAULT NULL,
  `DateofClaming` datetime DEFAULT NULL,
  `DateofClailmed` date DEFAULT NULL,
  `PaymentMethod` text DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Is_Deleted` int(1) DEFAULT 0,
  `Is_Clailmed` int(1) DEFAULT 0,
  PRIMARY KEY (`DocumentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `documenttbl` */

/*Table structure for table `residenttbl` */

DROP TABLE IF EXISTS `residenttbl`;

CREATE TABLE `residenttbl` (
  `ResidentID` int(11) NOT NULL AUTO_INCREMENT,
  `ResidentNo` text DEFAULT NULL,
  `Surname` text DEFAULT NULL,
  `Firstname` text DEFAULT NULL,
  `Middlename` text DEFAULT NULL,
  `DateOfBirth` text DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `CivilStatus` text DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `IDPhoto` text DEFAULT NULL,
  `ValidID` text DEFAULT NULL,
  `PictureOfSignature` text DEFAULT NULL,
  `StepVerifyNo` int(1) DEFAULT 1,
  `Is_Edited` datetime DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `Is_Deleted` int(1) DEFAULT 0,
  PRIMARY KEY (`ResidentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `residenttbl` */

/*Table structure for table `userstbl` */

DROP TABLE IF EXISTS `userstbl`;

CREATE TABLE `userstbl` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Surname` text DEFAULT NULL,
  `Firstname` text DEFAULT NULL,
  `Middlename` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Birthday` text DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Pimage` text DEFAULT NULL,
  `AccessType` text DEFAULT NULL,
  `Contact` int(15) DEFAULT NULL,
  `IDPhoto` text DEFAULT NULL,
  `SelfiePhoto` text DEFAULT NULL,
  `SignaturePhoto` text DEFAULT NULL,
  `StatusEmail` text DEFAULT NULL,
  `StatusContact` text DEFAULT NULL,
  `DateEdited` datetime DEFAULT NULL,
  `EditedBy` text DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `is_Deleted` int(1) DEFAULT 0,
  `Attempts` int(1) DEFAULT NULL,
  `verify_detail` int(1) DEFAULT 0,
  `TimeAttempt` datetime DEFAULT NULL,
  `Verification_token` text DEFAULT NULL,
  `forgot_token` text DEFAULT NULL,
  `forgot_token_expiration_time` datetime DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email` (`Email`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `userstbl` */

insert  into `userstbl`(`UserID`,`Surname`,`Firstname`,`Middlename`,`Email`,`Password`,`Birthday`,`Age`,`Gender`,`Address`,`Pimage`,`AccessType`,`Contact`,`IDPhoto`,`SelfiePhoto`,`SignaturePhoto`,`StatusEmail`,`StatusContact`,`DateEdited`,`EditedBy`,`DateCreated`,`is_Deleted`,`Attempts`,`verify_detail`,`TimeAttempt`,`Verification_token`,`forgot_token`,`forgot_token_expiration_time`) values 
(1,'Silvio','Carlos Miquel','','carlosmiguel@gmail.com','4b50d63a64924e48f2cdba679ba9bc85','15/9/2002',21,'Male',NULL,'default.png\r\n','Admin',NULL,NULL,NULL,NULL,'verified',NULL,NULL,NULL,'2023-10-26 05:13:04',0,NULL,0,NULL,'b11854b08ff4031e131efd8b36c73cf2',NULL,NULL),
(2,'Tester','test','test','tester123@gmail.com','7a685e4e0506f3d8f28de128b525ae55','4/6/2000',23,'Male',NULL,'default.png','Resident',NULL,NULL,NULL,NULL,'verified',NULL,NULL,NULL,'2023-11-19 03:34:25',0,NULL,0,NULL,'0dece8ba45cfad9ab545864be9cf1882',NULL,NULL),
(3,'Tester','Staff','Staff','testerstaff@gmail.com','5910ce944afa71d501bd97c8f22df081','6/3/2000',23,'Male',NULL,'default.png','Staff',NULL,NULL,NULL,NULL,'verified',NULL,NULL,NULL,'2023-11-30 02:41:28',0,NULL,0,NULL,'0da91ed77c7f3572b1db5ec7797edc38',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
