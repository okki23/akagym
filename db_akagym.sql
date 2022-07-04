/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : db_akagym

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 04/07/2022 08:14:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bmi_setting
-- ----------------------------
DROP TABLE IF EXISTS `bmi_setting`;
CREATE TABLE `bmi_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) NULL DEFAULT NULL,
  `max` int(11) NULL DEFAULT NULL,
  `reason` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bmi_setting
-- ----------------------------
INSERT INTO `bmi_setting` VALUES (1, 20, 25, 'A');
INSERT INTO `bmi_setting` VALUES (2, 26, 30, 'B');
INSERT INTO `bmi_setting` VALUES (3, 31, 35, 'C');
INSERT INTO `bmi_setting` VALUES (4, 36, 40, 'D');
INSERT INTO `bmi_setting` VALUES (5, 41, 45, 'E');

-- ----------------------------
-- Table structure for bone_setting
-- ----------------------------
DROP TABLE IF EXISTS `bone_setting`;
CREATE TABLE `bone_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bone_setting
-- ----------------------------
INSERT INTO `bone_setting` VALUES (1, 'Good');
INSERT INTO `bone_setting` VALUES (2, 'Pass');

-- ----------------------------
-- Table structure for calori_setting
-- ----------------------------
DROP TABLE IF EXISTS `calori_setting`;
CREATE TABLE `calori_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `min` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `max` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of calori_setting
-- ----------------------------
INSERT INTO `calori_setting` VALUES (1, '2', '1200', '1500', 'Good');
INSERT INTO `calori_setting` VALUES (2, '1', '1500', '1800', 'Good');

-- ----------------------------
-- Table structure for fat_setting
-- ----------------------------
DROP TABLE IF EXISTS `fat_setting`;
CREATE TABLE `fat_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) NULL DEFAULT NULL,
  `max` int(11) NULL DEFAULT NULL,
  `reason` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fat_setting
-- ----------------------------
INSERT INTO `fat_setting` VALUES (1, 20, 25, 'A');
INSERT INTO `fat_setting` VALUES (2, 26, 30, 'B');
INSERT INTO `fat_setting` VALUES (3, 31, 35, 'C');
INSERT INTO `fat_setting` VALUES (4, 36, 40, 'D');
INSERT INTO `fat_setting` VALUES (5, 41, 45, 'E');

-- ----------------------------
-- Table structure for m_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `m_jabatan`;
CREATE TABLE `m_jabatan`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_jabatan
-- ----------------------------

-- ----------------------------
-- Table structure for m_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `m_karyawan`;
CREATE TABLE `m_karyawan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jabatan` int(10) NULL DEFAULT NULL,
  `jenkel` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tinggi_badan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_karyawan
-- ----------------------------

-- ----------------------------
-- Table structure for m_measure
-- ----------------------------
DROP TABLE IF EXISTS `m_measure`;
CREATE TABLE `m_measure`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_measure
-- ----------------------------

-- ----------------------------
-- Table structure for m_member
-- ----------------------------
DROP TABLE IF EXISTS `m_member`;
CREATE TABLE `m_member`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_daftar` date NULL DEFAULT NULL,
  `no_reg` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenkel` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `usia` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tinggi` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berat_badan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lemak_tubuh` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kadar_air` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `masa_otot` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kalori` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `usia_sel` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `masa_tulang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lemak_perut` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_member
-- ----------------------------
INSERT INTO `m_member` VALUES (1, '2022-06-26', '202206260000001', 'Adi Karyadi', '1', '2342344', 'Bekasi', '22', '23', '54', '23', '65', '56', '63', '45', '54', '45');

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_pegawai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES (1, 'admin', 'YQ==', '5', 1);

-- ----------------------------
-- Table structure for muscle_setting
-- ----------------------------
DROP TABLE IF EXISTS `muscle_setting`;
CREATE TABLE `muscle_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) NULL DEFAULT NULL,
  `max` int(11) NULL DEFAULT NULL,
  `reason` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of muscle_setting
-- ----------------------------
INSERT INTO `muscle_setting` VALUES (1, 20, 25, 'A');
INSERT INTO `muscle_setting` VALUES (2, 26, 30, 'B');
INSERT INTO `muscle_setting` VALUES (3, 31, 35, 'C');
INSERT INTO `muscle_setting` VALUES (4, 36, 40, 'D');
INSERT INTO `muscle_setting` VALUES (5, 41, 45, 'E');

-- ----------------------------
-- Table structure for vfr_setting
-- ----------------------------
DROP TABLE IF EXISTS `vfr_setting`;
CREATE TABLE `vfr_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min` int(11) NULL DEFAULT NULL,
  `max` int(11) NULL DEFAULT NULL,
  `reason` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vfr_setting
-- ----------------------------
INSERT INTO `vfr_setting` VALUES (1, 20, 25, 'A');
INSERT INTO `vfr_setting` VALUES (2, 26, 30, 'B');
INSERT INTO `vfr_setting` VALUES (3, 31, 35, 'C');
INSERT INTO `vfr_setting` VALUES (4, 36, 40, 'D');
INSERT INTO `vfr_setting` VALUES (5, 41, 45, 'E');

-- ----------------------------
-- Table structure for water_setting
-- ----------------------------
DROP TABLE IF EXISTS `water_setting`;
CREATE TABLE `water_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `min` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `max` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of water_setting
-- ----------------------------
INSERT INTO `water_setting` VALUES (1, '2', '1200', '1500', 'Good');
INSERT INTO `water_setting` VALUES (2, '1', '1500', '1800', 'Good');

SET FOREIGN_KEY_CHECKS = 1;
