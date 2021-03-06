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

 Date: 17/07/2022 11:04:43
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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_jabatan
-- ----------------------------
INSERT INTO `m_jabatan` VALUES (1, 'Admin');

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_karyawan
-- ----------------------------
INSERT INTO `m_karyawan` VALUES (1, '667577', 'Dodo', NULL, 'bekasi', 'dodo@mail.com', 1, '1', '76756', '120', NULL);
INSERT INTO `m_karyawan` VALUES (2, '45434', 'Jojo', NULL, 'Bekasi', 'akagymgalaxy@gmail.com', 1, '1', '90289343', '22', NULL);

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
  `rating_fisik` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bmi` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_member
-- ----------------------------
INSERT INTO `m_member` VALUES (1, '2022-07-16', '202206260000001', 'Adi Karyadi', '1', '2342344', 'Bekasi', '30', '23', '54', '23', '65', '56', '63', '45', '54', '45', '5', 44);
INSERT INTO `m_member` VALUES (2, '2022-07-15', '202207040000002', 'yyaa', '1', '68458345', 'bekasi', '22', '12', '33', '33', '66', '4', '4', '54', '54', '66', '7', NULL);
INSERT INTO `m_member` VALUES (3, '2022-07-16', '202207160000003', 'hha', '1', 'S4677', 'AQ', '29', '175', '60', '21', '60', '38', '1678', '34', '7.8', '3', '1', 22);

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES (1, 'admin', 'YQ==', '5', 1);
INSERT INTO `m_user` VALUES (2, 'dodo', 'YQ==', 'bekasi', 1);

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
-- Table structure for t_calculate
-- ----------------------------
DROP TABLE IF EXISTS `t_calculate`;
CREATE TABLE `t_calculate`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NULL DEFAULT NULL,
  `date_submit` datetime NULL DEFAULT NULL,
  `fat` int(11) NULL DEFAULT NULL,
  `vfr` int(11) NULL DEFAULT NULL,
  `masa_otot` int(11) NULL DEFAULT NULL,
  `masa_tulang` int(11) NULL DEFAULT NULL,
  `kadar_air` int(11) NULL DEFAULT NULL,
  `kalori` int(11) NULL DEFAULT NULL,
  `usia_sel` int(11) NULL DEFAULT NULL,
  `lemak_perut` int(11) NULL DEFAULT NULL,
  `bmi` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_calculate
-- ----------------------------
INSERT INTO `t_calculate` VALUES (3, 1, '2022-07-15 09:08:46', 38, 2, 35, 2, 3, 2, 3, 5, 30);
INSERT INTO `t_calculate` VALUES (4, 3, '2022-07-16 12:56:35', 21, 4, 3, 8, 60, 1, NULL, 3, NULL);

-- ----------------------------
-- Table structure for t_perhitungan
-- ----------------------------
DROP TABLE IF EXISTS `t_perhitungan`;
CREATE TABLE `t_perhitungan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NULL DEFAULT NULL,
  `date_submit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_bmi` int(11) NULL DEFAULT NULL,
  `bmi_value` int(11) NULL DEFAULT NULL,
  `bmi_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_bone` int(11) NULL DEFAULT NULL,
  `bone_value` int(11) NULL DEFAULT NULL,
  `bone_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_calori` int(11) NULL DEFAULT NULL,
  `jenkel_calori_value` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `calori_value` int(11) NULL DEFAULT NULL,
  `calori_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_fat` int(11) NULL DEFAULT NULL,
  `fat_value` int(11) NULL DEFAULT NULL,
  `fat_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_muscle` int(11) NULL DEFAULT NULL,
  `muscle_value` int(11) NULL DEFAULT NULL,
  `muscle_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_vfr` int(11) NULL DEFAULT NULL,
  `vfr_value` int(11) NULL DEFAULT NULL,
  `vfr_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_water` int(11) NULL DEFAULT NULL,
  `water_value` int(11) NULL DEFAULT NULL,
  `water_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenkel_water_value` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_perhitungan
-- ----------------------------
INSERT INTO `t_perhitungan` VALUES (1, 1, '2022-07-04 07:50:31', 99, 11, 'dd', 1, 0, '', 1, '', 0, '', 1, 0, '', 1, 0, '', 3, 0, '', 1, 0, '', '');
INSERT INTO `t_perhitungan` VALUES (2, 2, '2022-07-04 12:53:57', 1, 0, '', 2, 0, '', 2, '', 0, '', 3, 0, '', 1, 0, '', 4, 0, '', 1, 0, '', '');

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
