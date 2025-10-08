<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Berita - SMA Negeri Nusantara"; include 'includes/head.php'; ?>
</head>

<body class="font-sans bg-gray-50 text-gray-800">

    <?php include 'includes/navbar.php'; ?>

    <!-- KONTEN UTAMA -->
    <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

        <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Daftar Berita Sekolah</h2>

        <!-- Grid Berita -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <?php
                // Simulasi daftar berita (nanti bisa diambil dari database)
                $berita = [
                    [
                    'id' => 1,
                    'judul' => 'Lomba Sains Nasional 2025: Siswa Raih Medali Emas',
                    'tanggal' => '20 September 2025',
                    'gambar' => 'admin/berita/uploads/berita-1.png',
                    'deskripsi' => 'Siswa berprestasi dari sekolah kita berhasil meraih medali emas dalam ajang Lomba Sains Nasional tingkat SMA di Jakarta.'
                    ],
                    [
                    'id' => 2,
                    'judul' => 'Seminar Nasional Guru Inovatif diikuti 50 Sekolah',
                    'tanggal' => '15 September 2025',
                    'gambar' => 'admin/berita/uploads/berita-2.png',
                    'deskripsi' => 'Guru-guru dari berbagai sekolah mengikuti seminar nasional dengan topik pembelajaran berbasis teknologi.'
                    ],
                    [
                    'id' => 3,
                    'judul' => 'Kegiatan Donor Darah Bersama PMI di Sekolah',
                    'tanggal' => '10 September 2025',
                    'gambar' => 'admin/berita/uploads/berita-3.png',
                    'deskripsi' => 'Dalam rangka memperingati Hari Kesehatan Nasional, sekolah bekerja sama dengan PMI mengadakan kegiatan donor darah.'
                    ]
                ];

                foreach ($berita as $b): ?>
                <div class="flex flex-col group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="<?= $b['gambar']; ?>" alt="<?= $b['judul']; ?>"
                            class="w-full h-48 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-90">
                    </div>
                    <div class="mt-4 flex flex-col justify-between flex-1">
                        <h4 class="text-gray-900 font-semibold text-base leading-tight"><?= $b['judul']; ?></h4>
                        <p class="text-sm text-gray-500 mt-1">📅 <?= $b['tanggal']; ?></p>
                        <p class="text-gray-600 text-sm mt-2 mb-4 line-clamp-3"><?= $b['deskripsi']; ?></p>
                        <a href="berita-detail.php?id=<?= $b['id']; ?>" 
                        class="text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                        Baca Selengkapnya <span class="ml-1">→</span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tombol Kembali -->
        <div class="text-center mt-12">
            <a href="home.php"
                class="mt-5 sm:mt-6 px-5 py-2 sm:px-6 sm:py-3 bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition">
                ← Kembali ke Beranda
            </a>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>