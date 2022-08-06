-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: db_akagym
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `bmi_setting`
--

DROP TABLE IF EXISTS `bmi_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bmi_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bmi_setting`
--

LOCK TABLES `bmi_setting` WRITE;
/*!40000 ALTER TABLE `bmi_setting` DISABLE KEYS */;
INSERT INTO `bmi_setting` VALUES (1,20,25,'A'),(2,26,30,'B'),(3,31,35,'C'),(4,36,40,'D'),(5,41,45,'E');
/*!40000 ALTER TABLE `bmi_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bone_setting`
--

DROP TABLE IF EXISTS `bone_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bone_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bone_setting`
--

LOCK TABLES `bone_setting` WRITE;
/*!40000 ALTER TABLE `bone_setting` DISABLE KEYS */;
INSERT INTO `bone_setting` VALUES (1,'Good'),(2,'Pass');
/*!40000 ALTER TABLE `bone_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calori_setting`
--

DROP TABLE IF EXISTS `calori_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calori_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(255) DEFAULT NULL,
  `min` varchar(255) DEFAULT NULL,
  `max` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calori_setting`
--

LOCK TABLES `calori_setting` WRITE;
/*!40000 ALTER TABLE `calori_setting` DISABLE KEYS */;
INSERT INTO `calori_setting` VALUES (1,'2','1200','1500','Good'),(2,'1','1500','1800','Good');
/*!40000 ALTER TABLE `calori_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fat_setting`
--

DROP TABLE IF EXISTS `fat_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fat_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fat_setting`
--

LOCK TABLES `fat_setting` WRITE;
/*!40000 ALTER TABLE `fat_setting` DISABLE KEYS */;
INSERT INTO `fat_setting` VALUES (1,20,25,'A'),(2,26,30,'B'),(3,31,35,'C'),(4,36,40,'D'),(5,41,45,'E');
/*!40000 ALTER TABLE `fat_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_jabatan`
--

DROP TABLE IF EXISTS `m_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_jabatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_jabatan`
--

LOCK TABLES `m_jabatan` WRITE;
/*!40000 ALTER TABLE `m_jabatan` DISABLE KEYS */;
INSERT INTO `m_jabatan` VALUES (1,'Admin');
/*!40000 ALTER TABLE `m_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_karyawan`
--

DROP TABLE IF EXISTS `m_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telp` text,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `id_jabatan` int(10) DEFAULT NULL,
  `jenkel` varchar(100) DEFAULT NULL,
  `no_hp` text,
  `tinggi_badan` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_karyawan`
--

LOCK TABLES `m_karyawan` WRITE;
/*!40000 ALTER TABLE `m_karyawan` DISABLE KEYS */;
INSERT INTO `m_karyawan` VALUES (1,'667577','Dodo',NULL,'bekasi','dodo@mail.com',1,'1','76756','120',NULL),(2,'45434','Jojo',NULL,'Bekasi','akagymgalaxy@gmail.com',1,'1','90289343','22',NULL);
/*!40000 ALTER TABLE `m_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_measure`
--

DROP TABLE IF EXISTS `m_measure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_measure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_measure`
--

LOCK TABLES `m_measure` WRITE;
/*!40000 ALTER TABLE `m_measure` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_measure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_member`
--

DROP TABLE IF EXISTS `m_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `usia` int(11) DEFAULT NULL,
  `jenkel` int(11) DEFAULT NULL,
  `telp` text,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `lemak_tubuh` int(11) DEFAULT NULL,
  `kadar_air` int(11) DEFAULT NULL,
  `rating_fisik` int(11) DEFAULT NULL,
  `masa_otot` int(11) DEFAULT NULL,
  `bmi` int(11) DEFAULT NULL,
  `kalori` int(11) DEFAULT NULL,
  `usia_sel` int(11) DEFAULT NULL,
  `masa_tulang` int(11) DEFAULT NULL,
  `lemak_perut` int(11) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_member`
--

LOCK TABLES `m_member` WRITE;
/*!40000 ALTER TABLE `m_member` DISABLE KEYS */;
INSERT INTO `m_member` VALUES (2,'202207240000001','Okki S','Bekasi',22,1,'989786',190,60,50,50,2,50,50,2,2,50,5,'2022-07-24 00:00:00');
/*!40000 ALTER TABLE `m_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_user`
--

DROP TABLE IF EXISTS `m_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user`
--

LOCK TABLES `m_user` WRITE;
/*!40000 ALTER TABLE `m_user` DISABLE KEYS */;
INSERT INTO `m_user` VALUES (1,'admin','YQ==','5',1),(2,'dodo','YQ==','bekasi',1);
/*!40000 ALTER TABLE `m_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `muscle_setting`
--

DROP TABLE IF EXISTS `muscle_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `muscle_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `muscle_setting`
--

LOCK TABLES `muscle_setting` WRITE;
/*!40000 ALTER TABLE `muscle_setting` DISABLE KEYS */;
INSERT INTO `muscle_setting` VALUES (1,20,25,'A'),(2,26,30,'B'),(3,31,35,'C'),(4,36,40,'D'),(5,41,45,'E');
/*!40000 ALTER TABLE `muscle_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_calculates`
--

DROP TABLE IF EXISTS `t_calculates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_calculates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `date_submit` datetime DEFAULT NULL,
  `fat` int(11) DEFAULT NULL,
  `vfr` int(11) DEFAULT NULL,
  `masa_otot` int(11) DEFAULT NULL,
  `masa_tulang` int(11) DEFAULT NULL,
  `kadar_air` int(11) DEFAULT NULL,
  `kalori` int(11) DEFAULT NULL,
  `usia_sel` int(11) DEFAULT NULL,
  `lemak_perut` int(11) DEFAULT NULL,
  `bmi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_calculates`
--

LOCK TABLES `t_calculates` WRITE;
/*!40000 ALTER TABLE `t_calculates` DISABLE KEYS */;
INSERT INTO `t_calculates` VALUES (3,1,'2022-07-15 09:08:46',38,2,35,2,3,2,3,5,30),(4,3,'2022-07-16 12:56:35',21,4,3,8,60,1,NULL,3,NULL);
/*!40000 ALTER TABLE `t_calculates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_perhitungan`
--

DROP TABLE IF EXISTS `t_perhitungan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_perhitungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `date_submit` varchar(100) DEFAULT NULL,
  `id_bmi` int(11) DEFAULT NULL,
  `bmi_value` int(11) DEFAULT NULL,
  `bmi_reason` varchar(255) DEFAULT NULL,
  `id_bone` int(11) DEFAULT NULL,
  `bone_value` int(11) DEFAULT NULL,
  `bone_reason` varchar(255) DEFAULT NULL,
  `id_calori` int(11) DEFAULT NULL,
  `jenkel_calori_value` varchar(255) DEFAULT NULL,
  `calori_value` int(11) DEFAULT NULL,
  `calori_reason` varchar(255) DEFAULT NULL,
  `id_fat` int(11) DEFAULT NULL,
  `fat_value` int(11) DEFAULT NULL,
  `fat_reason` varchar(255) DEFAULT NULL,
  `id_muscle` int(11) DEFAULT NULL,
  `muscle_value` int(11) DEFAULT NULL,
  `muscle_reason` varchar(255) DEFAULT NULL,
  `id_vfr` int(11) DEFAULT NULL,
  `vfr_value` int(11) DEFAULT NULL,
  `vfr_reason` varchar(255) DEFAULT NULL,
  `id_water` int(11) DEFAULT NULL,
  `water_value` int(11) DEFAULT NULL,
  `water_reason` varchar(255) DEFAULT NULL,
  `jenkel_water_value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_perhitungan`
--

LOCK TABLES `t_perhitungan` WRITE;
/*!40000 ALTER TABLE `t_perhitungan` DISABLE KEYS */;
INSERT INTO `t_perhitungan` VALUES (1,1,'2022-07-04 07:50:31',99,11,'dd',1,0,'',1,'',0,'',1,0,'',1,0,'',3,0,'',1,0,'',''),(2,2,'2022-07-04 12:53:57',1,0,'',2,0,'',2,'',0,'',3,0,'',1,0,'',4,0,'',1,0,'','');
/*!40000 ALTER TABLE `t_perhitungan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vfr_setting`
--

DROP TABLE IF EXISTS `vfr_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vfr_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vfr_setting`
--

LOCK TABLES `vfr_setting` WRITE;
/*!40000 ALTER TABLE `vfr_setting` DISABLE KEYS */;
INSERT INTO `vfr_setting` VALUES (1,20,25,'A'),(2,26,30,'B'),(3,31,35,'C'),(4,36,40,'D'),(5,41,45,'E');
/*!40000 ALTER TABLE `vfr_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `water_setting`
--

DROP TABLE IF EXISTS `water_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `water_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(255) DEFAULT NULL,
  `min` varchar(255) DEFAULT NULL,
  `max` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `water_setting`
--

LOCK TABLES `water_setting` WRITE;
/*!40000 ALTER TABLE `water_setting` DISABLE KEYS */;
INSERT INTO `water_setting` VALUES (1,'2','1200','1500','Good'),(2,'1','1500','1800','Good');
/*!40000 ALTER TABLE `water_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_akagym'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-24 13:45:19
