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

 Date: 07/08/2022 20:28:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
-- Table structure for m_member
-- ----------------------------
DROP TABLE IF EXISTS `m_member`;
CREATE TABLE `m_member`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `usia` int(11) NULL DEFAULT NULL,
  `jenkel` int(11) NULL DEFAULT NULL,
  `telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tinggi_badan` int(11) NULL DEFAULT NULL,
  `berat_badan` int(11) NULL DEFAULT NULL,
  `lemak_tubuh` int(11) NULL DEFAULT NULL,
  `kadar_air` int(11) NULL DEFAULT NULL,
  `rating_fisik` int(11) NULL DEFAULT NULL,
  `masa_otot` int(11) NULL DEFAULT NULL,
  `bmi` int(11) NULL DEFAULT NULL,
  `kalori` int(11) NULL DEFAULT NULL,
  `usia_sel` int(11) NULL DEFAULT NULL,
  `masa_tulang` int(11) NULL DEFAULT NULL,
  `lemak_perut` int(11) NULL DEFAULT NULL,
  `tgl_daftar` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_member
-- ----------------------------
INSERT INTO `m_member` VALUES (2, '202207240000001', 'Okki S', 'Bekasi', 22, 1, '989786', 190, 60, 50, 50, 2, 50, 50, 1500, 2, 50, 5, '2022-07-24 00:00:00');
INSERT INTO `m_member` VALUES (3, '202207250000002', 'Okki', 'Bekasi', 22, 1, '89786234', 180, 25, 25, 50, 3, 50, 30, 1500, 2, 25, 5, '2022-07-25 00:00:00');

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
-- Table structure for t_calculates
-- ----------------------------
DROP TABLE IF EXISTS `t_calculates`;
CREATE TABLE `t_calculates`  (
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
-- Records of t_calculates
-- ----------------------------
INSERT INTO `t_calculates` VALUES (3, 1, '2022-07-15 09:08:46', 38, 2, 35, 2, 3, 2, 3, 5, 30);
INSERT INTO `t_calculates` VALUES (4, 3, '2022-07-16 12:56:35', 21, 4, 3, 8, 60, 1, NULL, 3, NULL);

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

SET FOREIGN_KEY_CHECKS = 1;
