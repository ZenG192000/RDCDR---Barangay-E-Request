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
  `slot_number` int(11) DEFAULT NULL,
  `PlacedAt` int(11) DEFAULT NULL,
  `NameOfAnnouncement` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Picture` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Is_Deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`AnnounceID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `announcementstbl` */

insert  into `announcementstbl`(`AnnounceID`,`slot_number`,`PlacedAt`,`NameOfAnnouncement`,`Date`,`Picture`,`Description`,`Is_Deleted`) values 
(1,2,NULL,'WHAT\'S NEW?','2023-12-13','Whats_new_pic_announcement2.jpg','2023 barangay, Sangguniang Kabataan elections.',0),
(2,1,NULL,'WHERE?','2023-12-13','Where_pic_announcement1.png','(BSKE) Occur at Real De Cacarong Primary School.',0),
(3,3,NULL,'FREE ANNUAL MEDICAL CHECK-UP','2023-12-13','Others_pic_announcement1.jpg','Pagbibigay ng taunang medical check-up na libre.',0);

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
  `DateofClaimed` date DEFAULT NULL,
  `PaymentMethod` text DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Reciept` text DEFAULT NULL,
  `Is_Paid` text DEFAULT NULL,
  `Is_Deleted` int(1) DEFAULT 0,
  `Is_Claimed` int(1) DEFAULT 0,
  PRIMARY KEY (`DocumentID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `documenttbl` */

insert  into `documenttbl`(`DocumentID`,`TypeofDocument`,`Fullname`,`Age`,`DateofBirth`,`PlaceofBirth`,`Address`,`IssueFor`,`IssueDay`,`IssueMonthYear`,`PunongBarangay`,`YearOfResident`,`Status`,`TransactionNo`,`DateRequested`,`DateofClaming`,`DateofClaimed`,`PaymentMethod`,`Amount`,`Reciept`,`Is_Paid`,`Is_Deleted`,`Is_Claimed`) values 
(2,'BARANGAY CLEARANCE','Test T. Tester',NULL,NULL,NULL,'Ph1 , Ph1',NULL,'13th','December 2023',NULL,NULL,'Approved',NULL,'2023-12-07 05:49:57','2023-12-15 00:00:00',NULL,'Cash',200,NULL,'Yes',0,1),
(4,'BARANGAY CLEARANCE','Test T. Tester',NULL,NULL,NULL,'Ph1 , Ph1',NULL,'9th','December 2023',NULL,NULL,'Approved',NULL,'2023-12-07 06:48:01','2023-12-13 00:00:00',NULL,'GCash',200,'Gcash_Receipt1.jpg','Yes',0,1),
(5,'BARANGAY CLEARANCE','Test T. Tester',NULL,NULL,NULL,'Ph1 , Ph1',NULL,'15th','December 2023',NULL,NULL,'Approved',NULL,'2023-12-15 04:18:26','2023-12-18 00:00:00','2023-12-16','Cash',200,NULL,'Yes',0,1),
(6,'BARANGAY INDIGENCY','Test T. Tester',23,NULL,NULL,NULL,'Medical','15th','December 2023',NULL,NULL,'Approved',NULL,'2023-12-16 06:28:57','2023-12-20 00:00:00',NULL,'Cash',200,NULL,'Yes',0,0),
(7,'CERTIFICATE OF GOOD MORAL CHARACTER','Test T. Tester',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Pending',NULL,'2023-12-16 06:33:18',NULL,NULL,'Cash',200,NULL,'Yes',0,0),
(8,'CERTIFICATION OF RESIDENCY','Test T. Tester',NULL,'4/6/2000','Cacarong Bata','Ph1 , Ph1',NULL,NULL,NULL,NULL,2,'Pending',NULL,'2023-12-16 06:42:10',NULL,NULL,'Cash',200,NULL,'Yes',0,0);

/*Table structure for table `officialstbl` */

DROP TABLE IF EXISTS `officialstbl`;

CREATE TABLE `officialstbl` (
  `OfficialID` int(11) NOT NULL AUTO_INCREMENT,
  `slot_number` int(11) DEFAULT NULL,
  `Nickname` varchar(225) DEFAULT NULL,
  `Surname` varchar(225) DEFAULT NULL,
  `Firstname` varchar(225) DEFAULT NULL,
  `Middlename` varchar(225) DEFAULT NULL,
  `Position` varchar(225) DEFAULT NULL,
  `Photo` varchar(225) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `Is_Deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`OfficialID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `officialstbl` */

insert  into `officialstbl`(`OfficialID`,`slot_number`,`Nickname`,`Surname`,`Firstname`,`Middlename`,`Position`,`Photo`,`DateCreated`,`Is_Deleted`) values 
(1,1,'AHL','Juan Angeles','Alejandro','Serpa','Chairman','Alejandro_Serpa_Juan_Angeles.png','2023-12-14 02:20:36',0),
(2,2,'REY','Gonzales','Reynaldo','','Secretary','Reynaldo_Gonzales.png','2023-12-14 02:41:29',0),
(3,3,'ATO','Miranda','Ronaldo','Capalad','Kagawad','Ronaldo_Capalad_Miranda.png','2023-12-15 02:44:44',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `residenttbl` */

insert  into `residenttbl`(`ResidentID`,`ResidentNo`,`Surname`,`Firstname`,`Middlename`,`DateOfBirth`,`Age`,`CivilStatus`,`Gender`,`Address`,`IDPhoto`,`ValidID`,`PictureOfSignature`,`StepVerifyNo`,`Is_Edited`,`DateCreated`,`Is_Deleted`) values 
(1,'RDC_RES_202301','Tester','test','test','4/6/2000',23,'Single','Male','Ph1 , Ph1, Real De Cacarong, Pandi, Bulacan, 3014','ser.jpg','ePhilID (Paper)','ser.jpg',0,NULL,'2023-12-07 08:18:48',0);

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
(2,'Tester','Test','Test','almonte.joven19@gmail.com','1be694338bcb681dd0f696dde83a97c9','04/15/1999',24,'Male',NULL,'Melody_Visande.png','Resident',NULL,NULL,NULL,NULL,'verified',NULL,'2023-12-19 02:55:21','Tester','2023-11-19 03:34:25',0,NULL,0,NULL,'0dece8ba45cfad9ab545864be9cf1882','NULL','2023-12-12 17:21:49'),
(3,'Tester','Staff','Staff','testerstaff@gmail.com','5910ce944afa71d501bd97c8f22df081','6/3/2000',23,'Male',NULL,'default.png','Staff',NULL,NULL,NULL,NULL,'verified',NULL,NULL,NULL,'2023-11-30 02:41:28',0,NULL,0,NULL,'0da91ed77c7f3572b1db5ec7797edc38',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
