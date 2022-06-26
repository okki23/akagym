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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_karyawan`
--

LOCK TABLES `m_karyawan` WRITE;
/*!40000 ALTER TABLE `m_karyawan` DISABLE KEYS */;
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
  `tgl_daftar` date DEFAULT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `telp` text,
  `alamat` text,
  `usia` varchar(10) DEFAULT NULL,
  `tinggi` varchar(10) DEFAULT NULL,
  `berat_badan` varchar(10) DEFAULT NULL,
  `lemak_tubuh` varchar(10) DEFAULT NULL,
  `kadar_air` varchar(10) DEFAULT NULL,
  `masa_otot` varchar(10) DEFAULT NULL,
  `kalori` varchar(10) DEFAULT NULL,
  `usia_sel` varchar(10) DEFAULT NULL,
  `masa_tulang` varchar(10) DEFAULT NULL,
  `lemak_perut` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_member`
--

LOCK TABLES `m_member` WRITE;
/*!40000 ALTER TABLE `m_member` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user`
--

LOCK TABLES `m_user` WRITE;
/*!40000 ALTER TABLE `m_user` DISABLE KEYS */;
INSERT INTO `m_user` VALUES (1,'admin','YQ==','5',1);
/*!40000 ALTER TABLE `m_user` ENABLE KEYS */;
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

-- Dump completed on 2022-06-26  9:38:32
