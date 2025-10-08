/*
 Navicat Premium Dump SQL

 Source Server         : localhost-mysql
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : sisfo

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 08/10/2025 21:44:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of agenda
-- ----------------------------
INSERT INTO `agenda` VALUES (7, 'Pelatihan Kedisiplinan dan Kepemimpinan Siswa (Latdis 2025)', '2025-10-01', 'Tanggal Pelaksanaan: 14–16 Oktober 2025\r\nTempat: Aula dan Lapangan SMAN 3 Mandiri\r\nDeskripsi:\r\nDalam rangka membentuk karakter tangguh dan bertanggung jawab, OSIS SMAN 3 Mandiri akan mengadakan Latihan Dasar Kepemimpinan Siswa (Latdis) 2025. Kegiatan ini ', '68e673ed66e5a.png');
INSERT INTO `agenda` VALUES (8, 'Peringatan Hari Sumpah Pemuda ke-97', '2025-10-28', 'Tanggal Pelaksanaan: 28 Oktober 2025\r\nTempat: Lapangan Utama SMP Negeri 5 Mutiara\r\nDeskripsi:\r\nSMP Negeri 5 Mutiara akan mengadakan Upacara Peringatan Hari Sumpah Pemuda yang diikuti seluruh warga sekolah. Setelah upacara, acara dilanjutkan dengan lomba p', '68e674117a01a.png');
INSERT INTO `agenda` VALUES (9, 'Seminar Parenting: “Mendampingi Anak di Era Digital”', '2025-10-16', 'Tanggal Pelaksanaan: 19 Oktober 2025\r\nTempat: Ruang Serbaguna SD Harapan Bunda\r\nDeskripsi:\r\nSD Harapan Bunda mengundang para orang tua siswa untuk mengikuti Seminar Parenting dengan tema “Mendampingi Anak di Era Digital”.\r\nKegiatan ini menghadirkan psikol', '68e67423bac0d.png');
INSERT INTO `agenda` VALUES (10, 'Lomba Kebersihan Kelas dan Taman Sekolah', '2025-10-21', 'Tanggal Pelaksanaan: 20–25 Oktober 2025\r\nTempat: Seluruh area sekolah – SMK Negeri 1 Karya\r\nDeskripsi:\r\nSebagai bagian dari program Sekolah Adiwiyata, SMK Negeri 1 Karya akan mengadakan Lomba Kebersihan Kelas dan Taman Sekolah.\r\nPenilaian meliputi kebersi', '68e674360d03b.png');
INSERT INTO `agenda` VALUES (11, 'Pentas Seni Akhir Semester “Suara Pelajar 2025”', '2025-11-07', 'Tanggal Pelaksanaan: 12 Desember 2025\r\nTempat: Gedung Kesenian SMA Bina Utama\r\nDeskripsi:\r\nSMA Bina Utama akan menggelar acara tahunan Pentas Seni “Suara Pelajar 2025”, menampilkan bakat siswa dalam bidang musik, tari, drama, dan puisi.\r\nSelain sebagai aj', '68e674482aca2.png');

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (5, 'SMAN 1 Cendekia Luncurkan Program “Sekolah Hijau Berkelanjutan”', '2025-10-01', 'SMAN 1 Cendekia resmi meluncurkan program “Sekolah Hijau Berkelanjutan” sebagai langkah nyata mendukung pendidikan lingkungan hidup. Program ini mencakup kegiatan penghijauan, pengelolaan sampah organik dan anorganik, serta penggunaan energi ramah lingkun', '68e6718116149.png');
INSERT INTO `berita` VALUES (6, 'SD Harapan Bangsa Gelar Festival Literasi Nasional 2025', '2025-10-02', 'SD Harapan Bangsa kembali menggelar Festival Literasi Nasional yang diikuti oleh 30 sekolah dasar dari berbagai daerah. Acara ini bertujuan menumbuhkan minat baca dan menulis sejak usia dini melalui lomba menulis cerita pendek, membaca puisi, dan mendonge', '68e6719a28e3e.png');
INSERT INTO `berita` VALUES (7, 'SMP Pertiwi Raih Juara 1 Olimpiade Sains Provinsi Jawa Barat', '2025-10-04', 'SMP Pertiwi mencatat prestasi membanggakan dengan meraih Juara 1 Olimpiade Sains Provinsi Jawa Barat 2025. Tim sains sekolah berhasil unggul dalam kategori fisika dan biologi, mengalahkan lebih dari 100 peserta dari berbagai kabupaten/kota.\r\nMenurut pembi', '68e671a97abbd.png');
INSERT INTO `berita` VALUES (8, 'SMA Nusantara Adakan Career Day: Mengenal Dunia Kerja Sejak Dini', '2025-10-08', 'SMA Nusantara mengadakan kegiatan tahunan Career Day 2025 dengan tema “Menatap Masa Depan dengan Percaya Diri”. Kegiatan ini menghadirkan berbagai universitas dan perusahaan nasional untuk memberikan wawasan karier bagi para siswa kelas XII.\r\nAcara dibuka', '68e671b9a5894.png');
INSERT INTO `berita` VALUES (9, 'TK Ceria Meluncurkan Kelas Kreatif “Belajar Lewat Bermain”', '2025-10-07', 'TK Ceria meluncurkan program baru bertajuk “Kelas Kreatif: Belajar Lewat Bermain” yang mengintegrasikan kegiatan belajar dengan permainan edukatif. Program ini dirancang agar anak-anak dapat mengembangkan kemampuan motorik, sosial, dan kognitif secara sei', '68e671c94d960.png');

-- ----------------------------
-- Table structure for fasilitas
-- ----------------------------
DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE `fasilitas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fasilitas
-- ----------------------------
INSERT INTO `fasilitas` VALUES (1, 'Kantin Sekolah', 'Menyediakan berbagai macam makanan dan minuman', '68e6766d27e85.jpg');

-- ----------------------------
-- Table structure for prestasi
-- ----------------------------
DROP TABLE IF EXISTS `prestasi`;
CREATE TABLE `prestasi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of prestasi
-- ----------------------------
INSERT INTO `prestasi` VALUES (5, 'Juara 1 Lomba Futsal', 'Juara 1 Lomba Futsal', '68e6749ab6814.png');
INSERT INTO `prestasi` VALUES (6, 'Juara 2 Olimpiade Matematika', 'Juara 2 Olimpiade Matematika', '68e674b6e09c4.png');

-- ----------------------------
-- Table structure for profil
-- ----------------------------
DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profil
-- ----------------------------
INSERT INTO `profil` VALUES (1, 'Ini adalah isi dari Profil sekolah di SMA N 1 Nusantara, Indonesia', '68e6756196fd3.jpg');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (4, 'admin', 'Admin', '$2y$10$OdyydFR55Z89pdtSZJOzcuwmpOYDTP7u.Z8wXr8gBtXTaxCUL94Gm', 'admin', '68e6768f84bb5.png');
INSERT INTO `user` VALUES (5, 'user1', 'User Satu', '$2y$10$m/TSt.zGRLohQCxJONXeae8WRhvCEaLtfgMWUpNDQqoYTRiYVJ3sO', 'user', '68e6777521b7b.png');

SET FOREIGN_KEY_CHECKS = 1;
