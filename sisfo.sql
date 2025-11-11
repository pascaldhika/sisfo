/*
 Navicat Premium Dump SQL

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : sisfo

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 11/11/2025 14:14:35
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
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of agenda
-- ----------------------------
INSERT INTO `agenda` VALUES (12, 'Hari Pertama Sekolah, MPLS Penuh Ceria di SD Muhammadiyah Malawili   Tahun Pelajaran 2025/2026', '2025-07-11', 'Sekolah Dasar di SD Muhammadiyah Malawili. Dengan semangat dan senyum ceria, ia mengikuti kegiatan MPLS (Masa Pengenalan Lingkungan Sekolah)', '690b0a1d5b37b.jpg');
INSERT INTO `agenda` VALUES (13, 'Halalbihalal 1446 H Warga Muhammadiyah Kabupaten Sorong bersama Bupati Sorong', '2025-04-12', 'Halalbihalal ini sebagai ajang silaturahmi, saling memaafkan, dan memperkuat ukhuwah serta semangat dakwah kita bersama!', '690b0fdf3574d.jpg');
INSERT INTO `agenda` VALUES (14, 'Membentuk generasi muda Muhammadiyah yang berilmu berakhlak mulia dan bermanfaat', '2025-03-06', 'Pesantren Ramadhan di Sekolah ini bertujuan untuk meningkatkan pemahaman dan praktik keagamaan siswa, Kegiatan berlangsung selama 6 hari berturut-turut', '690b10e866a87.jpg');

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
INSERT INTO `berita` VALUES (5, 'SD Muhammadiyah Malawili', '2025-10-28', '📅 28 Oktober 2025\r\n🇮🇩 Hari Sumpah Pemuda\r\n🕌 SD Muhammadiyah Malawili\r\n\r\n\"Bersatu, Bangkit, dan Tumbuh untuk Indonesia!\"\r\n\r\nAlhamdulillah, hari ini keluarga besar SD Muhammadiyah Malawili turut memperingati Hari Sumpah Pemuda — momen bersejarah saat para p', '6900ee325a482.jpg');
INSERT INTO `berita` VALUES (6, 'SD Muhammadiyah Malawili', '2025-10-26', 'Penampilan Tari Nusantara dari Anak anak  SD Muhammadiyah Malawili  dalam acara pembukaan\r\nKonsolidasi Organisasi Pimpinan Daerah Aisyiyah Kabupaten Sorong\r\nAhad, 26 Oktober 2025', '6900eebed0a9a.jpg');
INSERT INTO `berita` VALUES (7, 'SD Muhammadiyah Malawili', '2025-09-22', 'Narasi ANBK Hari Pertama \r\n\r\nSD Muhammadiyah Malawili pada hari Senin, 22 September 2025, melaksanakan Asesmen Nasional Berbasis Komputer (ANBK) hari pertama dengan penuh semangat.\r\n\r\nPeserta didik hadir tepat waktu dan mengikuti kegiatan dengan tertib se', '6900efc7e90ce.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO `guru` VALUES (4, '196512011987101002', 'Paino,S.Pd.', '0533743647200023', '-', 'PNS', 'Kepala Sekolah', '-', 'S1', 'Guru Kelas', 'Laki-laki', 'Islam', '6900e81fc7723.jpg');
INSERT INTO `guru` VALUES (5, '-', 'AYU RAHMAWATI, S.Pd.', '5746778679230052', '-', 'Guru Honor', 'Guru Kelas IIIB', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e82b6aca1.jpg');
INSERT INTO `guru` VALUES (6, '199712032023212013', 'IKHWATUL MUJAHADAH, S. Pd.,Gr.', '3535775676230013', '-', 'Guru Honor', 'Guru kelas IIB', '-', 'S2', 'Guru Kelas', 'Perempuan', 'Islam', '6900e84e8c0bc.jpg');
INSERT INTO `guru` VALUES (7, '-', 'Ayu Indah Sulistiyani, S. Pd.', '7653770671230340', '-', 'Guru Honor', 'Guru Kelas 1B', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6904462bd1b4f.jpg');
INSERT INTO `guru` VALUES (8, '199712212024212034', 'DESI FITRIA HASRAT, S.Pd.', '1553775676230053', '-', 'Guru Honor', 'Guru Kelas VIA', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e8b5ef9af.jpg');
INSERT INTO `guru` VALUES (10, '-', 'INTAN PERMATA SARI, S.TP., S.Pd.', '1355774675230173', '-', 'Guru Honor', 'Guru Kelas IVB', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e87f3bc68.jpg');
INSERT INTO `guru` VALUES (11, '-', 'MIRA IRIANI, S. Pd.', '7137767668230370', '-', 'Guru Honor', 'Guru Kelas VIB', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '690448798be93.jpg');
INSERT INTO `guru` VALUES (12, '-', 'MITRA RAHMA SARI, S. Pd.', '-', '-', 'Guru Honor', 'Guru Kelas VB', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e95119aa7.jpg');
INSERT INTO `guru` VALUES (13, '198911042017082001', 'Novi Mega Lestari, S. Pd., Gr.', '2436767668230043', '-', 'Guru Honor', 'Guru Kelas VA', '-', 'S2', 'Guru Kelas', 'Perempuan', 'Islam', '6900e8c485504.jpg');
INSERT INTO `guru` VALUES (14, '-', 'NUR PREHATIN FITRIAH, S,Pd.', '1749776677230210', '-', 'Guru Honor', 'Guru Mata Pelajaran B. Arab', '-', 'S1', 'Bahasa Arab', 'Perempuan', 'Islam', '6900e8e74fd70.jpg');
INSERT INTO `guru` VALUES (16, '-', 'NURUL YASINI, S.Pd.', '6558768669230263', '-', 'Guru Honor', 'Guru Kelas IIA', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e8f5d6fe5.jpg');
INSERT INTO `guru` VALUES (18, '-', 'RISMAWATI, S. Pd. ', '9150777678230013', '-', 'Guru Honor', 'Guru Kelas IVA', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e9101c07e.jpg');
INSERT INTO `guru` VALUES (19, '-', 'Tri Bangun Utami, S.Pd., Gr.', '8845770671230370', '-', 'PNS', 'Guru Kelas IA', '-', 'S2', 'Guru Kelas', 'Perempuan', 'Islam', '6900e91d9ae1c.jpg');
INSERT INTO `guru` VALUES (20, '-', 'YUNITA RIZKY AGATI, S.Pd.', '7952778679230090', '-', 'Guru Honor', 'Guru Mata Pelajaran Agama Islam', '-', 'S1', 'Agama Islma', 'Perempuan', 'Islam', '6900e92bb0c4f.jpg');
INSERT INTO `guru` VALUES (21, '-', 'Zahrotul Fitriyyah, S.Pd.', '-', '-', 'Guru Honor', 'Guru Kelas IIA', '-', 'S1', 'Guru Kelas', 'Perempuan', 'Islam', '6900e93890467.jpg');
INSERT INTO `guru` VALUES (22, '-', 'RATMIATUN, S.Pd.', '3035757660300013', '-', 'Guru Honor', 'Guru Mata Pelajaran PJOK', '-', 'S1', 'PJOK', 'Perempuan', 'Islam', '690447ad855ad.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'Kelas 1A', 'Guru Kelas', 'Amir Hadi, S.Pd');
INSERT INTO `kelas` VALUES (2, 'Kelas 1B', 'Guru Kelas', 'Andheny Purwasih, S.Pd');
INSERT INTO `kelas` VALUES (3, 'Kelas 1C', 'Kelas Tambahan', 'AYU RAHMAWATI, S.Pd.');

-- ----------------------------
-- Table structure for postingan
-- ----------------------------
DROP TABLE IF EXISTS `postingan`;
CREATE TABLE `postingan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of postingan
-- ----------------------------
INSERT INTO `postingan` VALUES (1, 'Kisah Kampung Mojokencot, Desa Tersepi di Indonesia hingga tak Ada di Google Maps', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Ftriutamy.ridhonya%2Fvideos%2F632781712668925%2F%3Fidorvanity%3D525707368270051&show_text=false&width=267&t=0\" width=\"267\" height=\"476\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>');
INSERT INTO `postingan` VALUES (3, 'TK yang Ideal menurut dr. Aisah Dahlan', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Ftriutamy.ridhonya%2Fvideos%2F9370034896444169%2F%3Fidorvanity%3D525707368270051&show_text=false&width=267&t=0\" width=\"267\" height=\"476\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>');

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
INSERT INTO `prestasi` VALUES (5, 'Juara 3 Olimpiade IPAS MI/SD Tingkat Kabupaten Sorong', 'Alhamdulillah, \r\nAnanda Cahaya Ramadhani perwakilan dari,\r\nSD Muhammadiyah Malawili', '69030b486510a.jpg');
INSERT INTO `prestasi` VALUES (6, 'Juara 1 Olimpiade Literas', 'Alhamdulillah, \r\nAnanda Asyifa Farzami perwakilan dari,\r\nSD Muhammadiyah Malawili', '69030cf138b4f.jpg');

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
  `struktur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of profil
-- ----------------------------
INSERT INTO `profil` VALUES (1, '\"HEBAT, MUDA, JUARA\"', '68fb012bbdadd.jpg', '<p>Dalam mengelola sekolah terdapat kerangka pelaksanaan pendidikan yang dirumuskan dalam sebuah wawasan yang menjadi sumber arahan bagi sekolah yang didasarkan pada landasan yuridis berupa undang-undang pendidikan dan peraturan pemerintah, khususnya tujuan pendidikan nasional , akan tetapi sesuai dengan kebutuhan anak dan masyarakat yang dilayani. Beranjak dari hal itu maka disusunlah visi, misi dan tujuan SD Muhammadiyah Malawili untuk memenuhi kebutuhan tersebut.&nbsp;</p><p>&nbsp;</p><p><strong>Berikut Visi, Misi dan Tujuan SD Muhammadiyah Malawili :</strong></p><p><strong>Visi Sekolah :</strong></p><p>UNGGUL DALAM ILMU, CERDAS, SEHAT DAN BERAKHLAK MULIA&nbsp;</p><p><strong>Misi Sekolah :</strong></p><p>1. MENUNTASKAN KEMAMPUAN MEMBACA, MENULIS DAN BERHITUNG DI KELAS III</p><p>2. MELAKSANAKAN PENGAMALAN AL-ISLAM DAN KEMUHAMMADIYAHAN DALAM KEHIDUPAN SEHARI-HARI</p><p>3. MENGUATKAN KARAKTER PESERTA DIDIK DENGAN PEMBIASAAN DAN KETELADANAN&nbsp;</p><p>4. MENGEMBANGKAN POTENSI, MINAT, DAN BAKAT PESERTA DIDIK</p><p>5. MENCIPTAKAN LINGKUNGAN SEKOLAH AGAMIS, NYAMAN, TERTIB, DISIPLIN, DAN SEHAT</p>', '<figure class=\"image\"><img style=\"aspect-ratio:480/270;\" src=\"https://www.sdnduajambu.sch.id/upload/imagecache/637002213-480x270.jpg\" width=\"480\" height=\"270\"></figure><p>Pendaftaran Murid Baru [PMB] SD Muhammadiyah Malawili resmi dibuka, sekolah juga membuka pelaksanaan PMB tahun ajaran 2025/2026 secara online, ini dilakukan demi memudahkan proses pendaftaran dan akses informasi. Untuk mendukung PMB secara online maka disiapkan sebuah layanan online untuk sistem penerimaan murid baru/ SPMB online, aplikasi ini dikembangkan dengan berbasiskan <i>web interface&nbsp;</i>dan menggunakan<i>&nbsp;sistem cloud computing&nbsp;</i>[Komputasi awan] yang berguna untuk proses pendaftaran yang lebih mudah dan cepat, serta transparan, akurat dan akuntabel secara online.</p><p>Adapun alur pendaftaran ini bisa dilakukan dengan mengikuti langkah berikut:</p><p>1. Calon siswa baru menyiapkan berkas persyaratan Lihat di Syarat Pendaftaran</p><p>2. Calon siswa baru kemudian mengakses laman SPMB online [www.sdnduajambu.sch.id/spmb]</p><p>3. Calon siswa baru melakukan pengajuan akun dengan mengisi formulir secara online berupa [Nama Lengkap, NIK, Alamat, Nomor HP, Email, dan Password]</p><p>4. Sistem melakukan verifikasi pengajuan akun tersebut dan akan tampil halaman baru untuk login ke formulir pendaftaran.</p><p>5. Calon siswa baru login dengan mengisikan [NIK dan Password] yang dibuat pada alur ke-3</p><p>6. Calon siswa baru mengisikan identitas diri dengan memilih menu&nbsp;Formulir Pendaftaran</p><p>7. Calon siswa baru mengunggah dokumen persyaratan pada menu&nbsp;Upload Dokumen</p><p>8. Calon siswa baru mencetak tanda bukti pendaftaran pada menu&nbsp;Print Form Pendaftaran</p><p>Jika sudah melakukan semua alur proses pendaftaran diatas maka calon siswa baru tinggal mengecek pada menu Pengumuman&nbsp;mengenai status pendaftaran, diterima atau masih ada berkas yang kurang lengkap.</p><p><a href=\"https://www.facebook.com/groups/525707368270051/?ref=share&amp;mibextid=KtfwRi\"><strong>Klik Disini</strong></a><strong> </strong>untuk akses PPDB online SD MUHAMMADIYAH MALAWILI</p><p>&nbsp;</p><p>Jika ada hal yang belum dipahami silahkan hubungi kami di nomor kontak&nbsp;+62 852-4484-0600, Terimakasih</p>', '69002d6aba3c7.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (2, 'Reva Restyana', '3157479547', '1215', 'Perempuan', '2015-02-09', 'Islam', 'JL. MANGGALA', 'Barito Utara', '73813', 'Kelas 1A');
INSERT INTO `siswa` VALUES (3, 'Shema Anggraeni', '3157129811', '1249', 'Perempuan', '2015-09-05', 'Islam', 'JL.MANGGALA', 'Karanganyar', '12345', 'Kelas 1B');
INSERT INTO `siswa` VALUES (4, 'RIVEL TELUSA', '2015597486', '1234567', 'Perempuan', '2003-07-24', 'Budha', 'JALAN SENDIRI', 'INDOMARCO', '125678', 'Kelas 1A');

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (4, 'sekolah', 'syarif', '$2y$10$OdyydFR55Z89pdtSZJOzcuwmpOYDTP7u.Z8wXr8gBtXTaxCUL94Gm', 'admin', '68e6768f84bb5.png');
INSERT INTO `user` VALUES (5, 'user1', 'User Satu', '$2y$10$m/TSt.zGRLohQCxJONXeae8WRhvCEaLtfgMWUpNDQqoYTRiYVJ3sO', 'user', '68e6777521b7b.png');

SET FOREIGN_KEY_CHECKS = 1;
