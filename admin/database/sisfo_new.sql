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

 Date: 13/10/2025 22:13:55
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
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nuptk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nrg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pangkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_pelajaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO `guru` VALUES (2, '197710262010011012', 'Amir Hadi, S.Pd', '5358755656110013', 'P543068', 'PNS', 'Guru Kelas 4', 'III.d', 'S1', 'Guru Kelas', 'Laki-laki', 'Islam', '68ecefc98d467.png');
INSERT INTO `guru` VALUES (3, '198711062010012022', 'Andheny Purwasih, S.Pd', '2438765666300053', '-', 'PNS', 'Guru Kelas 5', 'III/c', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '68ecf03b03279.png');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `wali_kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'Kelas 1A', 'Guru Kelas', 'Amir Hadi, S.Pd');
INSERT INTO `kelas` VALUES (2, 'Kelas 1B', 'Guru Kelas', 'Andheny Purwasih, S.Pd');

-- ----------------------------
-- Table structure for postingan
-- ----------------------------
DROP TABLE IF EXISTS `postingan`;
CREATE TABLE `postingan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of postingan
-- ----------------------------
INSERT INTO `postingan` VALUES (1, 'Kisah Kampung Mojokencot, Desa Tersepi di Indonesia hingga tak Ada di Google Maps', '<blockquote class=\"instagram-media\" data-instgrm-permalink=\"https://www.instagram.com/p/DPtjYmCEp7t/?utm_source=ig_embed&amp;utm_campaign=loading\" data-instgrm-version=\"14\" style=\" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);\"><div style=\"padding:16px;\"> <a href=\"https://www.instagram.com/p/DPtjYmCEp7t/?utm_source=ig_embed&amp;utm_campaign=loading\" style=\" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;\" target=\"_blank\"> <div style=\" display: flex; flex-direction: row; align-items: center;\"> <div style=\"background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;\"></div> <div style=\"display: flex; flex-direction: column; flex-grow: 1; justify-content: center;\"> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;\"></div> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;\"></div></div></div><div style=\"padding: 19% 0;\"></div> <div style=\"display:block; height:50px; margin:0 auto 12px; width:50px;\"><svg width=\"50px\" height=\"50px\" viewBox=\"0 0 60 60\" version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-511.000000, -20.000000)\" fill=\"#000000\"><g><path d=\"M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631\"></path></g></g></g></svg></div><div style=\"padding-top: 8px;\"> <div style=\" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;\">View this post on Instagram</div></div><div style=\"padding: 12.5% 0;\"></div> <div style=\"display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;\"><div> <div style=\"background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);\"></div> <div style=\"background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;\"></div> <div style=\"background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);\"></div></div><div style=\"margin-left: 8px;\"> <div style=\" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;\"></div> <div style=\" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)\"></div></div><div style=\"margin-left: auto;\"> <div style=\" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);\"></div> <div style=\" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);\"></div> <div style=\" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);\"></div></div></div> <div style=\"display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;\"> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;\"></div> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;\"></div></div></a><p style=\" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;\"><a href=\"https://www.instagram.com/p/DPtjYmCEp7t/?utm_source=ig_embed&amp;utm_campaign=loading\" style=\" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;\" target=\"_blank\">A post shared by Good News From Indonesia (@gnfi)</a></p></div></blockquote>\r\n<script async src=\"//www.instagram.com/embed.js\"></script>');
INSERT INTO `postingan` VALUES (3, 'TK yang Ideal menurut dr. Aisah Dahlan', '<blockquote class=\"instagram-media\" data-instgrm-permalink=\"https://www.instagram.com/reel/DN0NmcVWuo9/?utm_source=ig_embed&amp;utm_campaign=loading\" data-instgrm-version=\"14\" style=\" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);\"><div style=\"padding:16px;\"> <a href=\"https://www.instagram.com/reel/DN0NmcVWuo9/?utm_source=ig_embed&amp;utm_campaign=loading\" style=\" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;\" target=\"_blank\"> <div style=\" display: flex; flex-direction: row; align-items: center;\"> <div style=\"background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;\"></div> <div style=\"display: flex; flex-direction: column; flex-grow: 1; justify-content: center;\"> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;\"></div> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;\"></div></div></div><div style=\"padding: 19% 0;\"></div> <div style=\"display:block; height:50px; margin:0 auto 12px; width:50px;\"><svg width=\"50px\" height=\"50px\" viewBox=\"0 0 60 60\" version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-511.000000, -20.000000)\" fill=\"#000000\"><g><path d=\"M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631\"></path></g></g></g></svg></div><div style=\"padding-top: 8px;\"> <div style=\" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;\">View this post on Instagram</div></div><div style=\"padding: 12.5% 0;\"></div> <div style=\"display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;\"><div> <div style=\"background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);\"></div> <div style=\"background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;\"></div> <div style=\"background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);\"></div></div><div style=\"margin-left: 8px;\"> <div style=\" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;\"></div> <div style=\" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)\"></div></div><div style=\"margin-left: auto;\"> <div style=\" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);\"></div> <div style=\" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);\"></div> <div style=\" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);\"></div></div></div> <div style=\"display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;\"> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;\"></div> <div style=\" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;\"></div></div></a><p style=\" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;\"><a href=\"https://www.instagram.com/reel/DN0NmcVWuo9/?utm_source=ig_embed&amp;utm_campaign=loading\" style=\" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;\" target=\"_blank\">A post shared by Sekolah Islam Unggulan Jogja (@sekolahbias)</a></p></div></blockquote>\r\n<script async src=\"//www.instagram.com/embed.js\"></script>');

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
  `isi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `visi_misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pendaftaran` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tata_tertib` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `struktur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profil
-- ----------------------------
INSERT INTO `profil` VALUES (1, 'Ini adalah isi dari Profil sekolah di SMA N 1 Nusantara, Indonesia', '68ed128dbda9d.jpg', '<p>Dalam mengelola sekolah terdapat kerangka pelaksanaan pendidikan yang dirumuskan dalam sebuah wawasan yang menjadi sumber arahan bagi sekolah yang didasarkan pada landasan yuridis berupa undang-undang pendidikan dan peraturan pemerintah, khususnya tujuan pendidikan nasional , akan tetapi sesuai dengan kebutuhan anak dan masyarakat yang dilayani. Beranjak dari hal itu maka disusunlah visi, misi dan tujuan SD Negeri 2 Jambu untuk memenuhi kebutuhan tersebut.&nbsp;</p><p>&nbsp;</p><p><strong>Berikut Visi, Misi dan Tujuan SD Negeri 2 Jambu:</strong></p><p><strong>Visi Sekolah :</strong></p><p>Mewujudkan pendidikan yang berkualitas, berakhlak mulia yang dilandasi iman dan taqwa kepada Tuhan Yang Maha Esa, seiring dengan perkembangan ilmu dan teknologi.</p><p><strong>Misi Sekolah :</strong></p><p>1. Meningkatkan sumber daya manusia melalui peningkatan mutu pendidikan yang berkualitas.</p><p>2. Mengembangkan pembinaan secara optimal melalui pendidikan akhlak budi pekerti.</p><p>3. Meningkatkan pembinaan bakat dan keterampilan melalui kegiatan ekstrakurikuler.</p><p>4. Menumbuhkembangkan kerjasama antara sekolah dengan lingkungan masyarakat.</p><p><strong>Tujuan Sekolah :</strong></p><p>1. Terwujudnya akhlak dan perilaku peserta didik yang mulia, beriman dan bertaqwa terhadap Allah SWT.</p><p>2. Terbentuknya peserta didik yang siap menghadapi perkembangan teknologi dalam era globalisasi.</p><p>3. Terbentuknya peserta didik yang mampu menerapkan nilai-nilai IPTEK dan budaya.</p><p>4. Mempersiapkan peserta didik agar mampu melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>', '<figure class=\"image\"><img style=\"aspect-ratio:480/270;\" src=\"https://www.sdnduajambu.sch.id/upload/imagecache/637002213-480x270.jpg\" width=\"480\" height=\"270\"></figure><p>Pendaftaran Murid Baru [PMB] SD Negeri 2 Jambu resmi dibuka, sekolah juga membuka pelaksanaan PMB tahun ajaran 2025/2026 secara online, ini dilakukan demi memudahkan proses pendaftaran dan akses informasi. Untuk mendukung PMB secara online maka disiapkan sebuah layanan online untuk sistem penerimaan murid baru/ SPMB online, aplikasi ini dikembangkan dengan berbasiskan <i>web interface&nbsp;</i>dan menggunakan<i>&nbsp;sistem cloud computing&nbsp;</i>[Komputasi awan] yang berguna untuk proses pendaftaran yang lebih mudah dan cepat, serta transparan, akurat dan akuntabel secara online.</p><p>Adapun alur pendaftaran ini bisa dilakukan dengan mengikuti langkah berikut:</p><p>1. Calon siswa baru menyiapkan berkas persyaratan Lihat di Syarat Pendaftaran</p><p>2. Calon siswa baru kemudian mengakses laman SPMB online [www.sdnduajambu.sch.id/spmb]</p><p>3. Calon siswa baru melakukan pengajuan akun dengan mengisi formulir secara online berupa [Nama Lengkap, NIK, Alamat, Nomor HP, Email, dan Password]</p><p>4. Sistem melakukan verifikasi pengajuan akun tersebut dan akan tampil halaman baru untuk login ke formulir pendaftaran.</p><p>5. Calon siswa baru login dengan mengisikan [NIK dan Password] yang dibuat pada alur ke-3</p><p>6. Calon siswa baru mengisikan identitas diri dengan memilih menu&nbsp;Formulir Pendaftaran</p><p>7. Calon siswa baru mengunggah dokumen persyaratan pada menu&nbsp;Upload Dokumen</p><p>8. Calon siswa baru mencetak tanda bukti pendaftaran pada menu&nbsp;Print Form Pendaftaran</p><p>Jika sudah melakukan semua alur proses pendaftaran diatas maka calon siswa baru tinggal mengecek pada menu Pengumuman&nbsp;mengenai status pendaftaran, diterima atau masih ada berkas yang kurang lengkap.</p><p><a href=\"http://sdnduajambu.sch.id/spmb\"><strong>Klik Disini</strong></a><strong> </strong>untuk akses PPDB online SD Negeri 2 Jambu.&nbsp;</p><p>&nbsp;</p><p>Jika ada hal yang belum dipahami silahkan hubungi kami di nomor kontak&nbsp;0852 4972 7400, Terimakasih</p>', '<figure class=\"image\"><img style=\"aspect-ratio:702/468;\" src=\"https://globalprestasi.sch.id/wp-content/uploads/2024/06/contoh-tata-tertib-sekolah.jpg\" width=\"702\" height=\"468\"></figure><p>Tata tertib sekolah adalah sekumpulan peraturan sekolah yang dibuat guna menjaga kedisiplinan, keamanan, dan lingkungan belajar yang kondusif. Sesuai dengan kebijakan sekolah, berikut adalah 15 contoh tata tertib sekolah yang perlu dipatuhi oleh seluruh siswa:</p><ol><li><strong>Kehadiran dan Keterlambatan</strong>: Peraturan sekolah yang harus dipatuhi siswa adalah hadir tepat waktu setiap hari sekolah dan mengikuti jam pelajaran sesuai jadwal yang ditentukan.</li><li><strong>Pakaian Seragam Sekolah:</strong> Siswa diwajibkan memakai seragam sekolah sesuai dengan aturan yang ditetapkan.</li><li><strong>Kesopanan dan Hormat</strong>: Siswa diwajibkan berbicara dengan sopan dan hormat kepada guru, staf, dan sesama siswa.</li><li><strong>Menghormati Hak Privasi</strong>: Siswa diharapkan untuk menghormati privasi teman-teman mereka dan tidak melakukan tindakan yang mengganggu privasi orang lain, seperti mengambil barang milik orang lain tanpa izin.</li><li><strong>Aturan Tidak Merokok:</strong> Siswa dilarang merokok di area sekolah.</li><li><strong>Kebersihan:</strong> Siswa wajib menjaga kebersihan lingkungan sekolah, termasuk area kelas, kantin, dan toilet.</li><li><strong>Penggunaan Gadget</strong>: Siswa diharapkan menggunakan gadget sesuai aturan yang ditetapkan oleh sekolah, seperti mematikannya selama jam pelajaran.</li><li><strong>Tidak Merokok atau Mengonsumsi Narkoba</strong>: Siswa tidak diizinkan merokok atau menggunakan narkoba di dalam sekolah maupun di luar sekolah.</li><li><strong>Mengikuti Aturan Tidak Merusak</strong>: Siswa wajib mengikuti peraturan yang berlaku dengan tidak merusak fasilitas sekolah, seperti menggores dinding atau merusak peralatan yang ada .</li><li><strong>Tidak Bertengkar atau Bullying:</strong> Sekolah melarang keras perilaku bullying dan kekerasan yang terjadi antar siswa.</li><li><strong>Mengikuti Prosedur Keamanan: </strong>Siswa perlu mengikuti prosedur keamanan.</li><li><strong>Tidak Membawa Senjata Tajam atau Benda Berbahaya: </strong>Sekolah melarang siswa membawa senjata atau benda berbahaya lainnya ke dalam lingkungan sekolah.</li><li><strong>Ketertiban saat Istirahat:</strong> Siswa diharapkan dapat mengikuti aturan-aturan yang ditetapkan saat makan di kantin atau area makan.</li><li><strong>Melakukan Tugas dan Pekerjaan dengan Baik: </strong>Siswa wajib menyelesaikan tugas-tugas dan pekerjaan sekolahnya dengan baik sesuai dengan tenggat waktu yang ditetapkan.</li><li><strong>Tidak Melakukan Kecurangan atau Plagiarisme</strong>: Tidak melakukan kecurangan saat ujian atau tugas, serta tidak melakukan plagiat dalam penulisan karya tulis.</li></ol>', '68ed149ca2228.jpg');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nisn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (2, 'Reva Restyana', '3157479547', '1215', 'Perempuan', '2015-02-09', 'Islam', 'JL. MANGGALA', 'Barito Utara', '73813', 'Kelas 1A');
INSERT INTO `siswa` VALUES (3, 'Shema Anggraeni', '3157129811', '1249', 'Perempuan', '2015-09-05', 'Islam', 'JL.MANGGALA', 'Karanganyar', '12345', 'Kelas 1B');

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
