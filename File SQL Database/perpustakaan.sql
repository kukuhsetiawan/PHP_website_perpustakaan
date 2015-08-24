/*
SQLyog Ultimate v10.42 
MySQL - 5.5.32 : Database - perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`perpustakaan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `perpustakaan`;

/*Table structure for table `daftar` */

DROP TABLE IF EXISTS `daftar`;

CREATE TABLE `daftar` (
  `kdDaftar` varchar(10) NOT NULL,
  `kdAnggota` varchar(10) DEFAULT NULL,
  `kdPetugas` varchar(10) DEFAULT NULL,
  `tglDaftar` date DEFAULT NULL,
  PRIMARY KEY (`kdDaftar`),
  KEY `kdAnggota` (`kdAnggota`),
  KEY `kdPetugas` (`kdPetugas`),
  CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`kdAnggota`) REFERENCES `t_anggota` (`kdAnggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `daftar_ibfk_2` FOREIGN KEY (`kdPetugas`) REFERENCES `t_petugas` (`kdPetugas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daftar` */

insert  into `daftar`(`kdDaftar`,`kdAnggota`,`kdPetugas`,`tglDaftar`) values ('PEN001','A001','P001','2014-02-16');

/*Table structure for table `pinjam` */

DROP TABLE IF EXISTS `pinjam`;

CREATE TABLE `pinjam` (
  `kdPinjam` varchar(10) NOT NULL,
  `kdPetugas` varchar(10) DEFAULT NULL,
  `kdBuku` varchar(10) DEFAULT NULL,
  `kdAnggota` varchar(10) DEFAULT NULL,
  `tglPinjam` date DEFAULT NULL,
  PRIMARY KEY (`kdPinjam`),
  KEY `kdPetugas` (`kdPetugas`),
  KEY `kdBuku` (`kdBuku`),
  KEY `kdAnggota` (`kdAnggota`),
  CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`kdPetugas`) REFERENCES `t_petugas` (`kdPetugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`kdBuku`) REFERENCES `t_buku` (`kdBuku`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pinjam_ibfk_3` FOREIGN KEY (`kdAnggota`) REFERENCES `t_anggota` (`kdAnggota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pinjam` */

insert  into `pinjam`(`kdPinjam`,`kdPetugas`,`kdBuku`,`kdAnggota`,`tglPinjam`) values ('PEM001','P001','B001','A001','2014-01-08'),('PEM002','P001','B002','A002','2014-01-07');

/*Table structure for table `t_anggota` */

DROP TABLE IF EXISTS `t_anggota`;

CREATE TABLE `t_anggota` (
  `kdAnggota` varchar(10) NOT NULL,
  `namaAnggota` varchar(40) DEFAULT NULL,
  `alamatAnggota` varchar(40) DEFAULT NULL,
  `teleponAnggota` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kdAnggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_anggota` */

insert  into `t_anggota`(`kdAnggota`,`namaAnggota`,`alamatAnggota`,`teleponAnggota`) values ('A001','Bejo','Kudus','081265786467'),('A002','Sri Wahyuni','Pati','085641672923'),('K10','budiman','dago','085641354687');

/*Table structure for table `t_buku` */

DROP TABLE IF EXISTS `t_buku`;

CREATE TABLE `t_buku` (
  `kdBuku` varchar(10) NOT NULL,
  `namaBuku` varchar(80) DEFAULT NULL,
  `pengarang` varchar(20) DEFAULT NULL,
  `penerbit` varchar(20) DEFAULT NULL,
  `jumlahBuku` int(10) DEFAULT NULL,
  PRIMARY KEY (`kdBuku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_buku` */

insert  into `t_buku`(`kdBuku`,`namaBuku`,`pengarang`,`penerbit`,`jumlahBuku`) values ('B001','Algoritma dan Pemrograman C','setiono','Informatika',7),('B002','Arsitektur Komputer','Suparman','Jakarta Graha ',13),('B003','Basis Data Joss ','Kukuh','Informatika',6),('B004','buku cerita','Kukuh','gramedia',7);

/*Table structure for table `t_petugas` */

DROP TABLE IF EXISTS `t_petugas`;

CREATE TABLE `t_petugas` (
  `kdPetugas` varchar(10) NOT NULL,
  `namaPetugas` varchar(40) DEFAULT NULL,
  `alamatPetugas` varchar(40) DEFAULT NULL,
  `teleponPetugas` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kdPetugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_petugas` */

insert  into `t_petugas`(`kdPetugas`,`namaPetugas`,`alamatPetugas`,`teleponPetugas`) values ('P001','kukuh','Pati','085641523180'),('P002','novi','garut','085640734857');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
