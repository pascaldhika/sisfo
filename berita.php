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

            <!-- Berita 1 -->
            <div class="bg-white shadow hover:shadow-lg transition rounded-lg overflow-hidden flex flex-col group">
                <div class="relative overflow-hidden">
                    <img src="images/berita-1.png" alt="Berita 1"
                        class="w-full h-52 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-90">
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="text-gray-900 font-semibold text-lg leading-tight mb-1">
                        Lomba Sains Nasional 2025: Siswa Kita Raih Medali Emas
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">📅 20 September 2025</p>
                    <p class="text-gray-600 text-sm flex-1">
                        Siswa berprestasi dari sekolah kita berhasil meraih medali emas dalam ajang Lomba Sains Nasional tingkat SMA yang diselenggarakan di Jakarta.
                    </p>
                    <a href="berita1.html"
                        class="mt-4 text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                        BACA SELENGKAPNYA <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="bg-white shadow hover:shadow-lg transition rounded-lg overflow-hidden flex flex-col group">
                <div class="relative overflow-hidden">
                    <img src="images/berita-2.png" alt="Berita 2"
                        class="w-full h-52 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-90">
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="text-gray-900 font-semibold text-lg leading-tight mb-1">
                        Seminar Nasional Guru Inovatif diikuti 50 Sekolah
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">📅 15 September 2025</p>
                    <p class="text-gray-600 text-sm flex-1">
                        Guru-guru dari berbagai sekolah mengikuti seminar nasional dengan topik pembelajaran berbasis teknologi dan kreativitas siswa.
                    </p>
                    <a href="berita2.html"
                        class="mt-4 text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                        BACA SELENGKAPNYA <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="bg-white shadow hover:shadow-lg transition rounded-lg overflow-hidden flex flex-col group">
                <div class="relative overflow-hidden">
                    <img src="images/berita-3.png" alt="Berita 3"
                        class="w-full h-52 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-90">
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="text-gray-900 font-semibold text-lg leading-tight mb-1">
                        Kegiatan Donor Darah Bersama PMI di Sekolah
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">📅 10 September 2025</p>
                    <p class="text-gray-600 text-sm flex-1">
                        Dalam rangka memperingati Hari Kesehatan Nasional, sekolah bekerja sama dengan PMI mengadakan kegiatan donor darah bagi guru dan siswa.
                    </p>
                    <a href="berita3.html"
                        class="mt-4 text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                        BACA SELENGKAPNYA <span class="ml-1">→</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Tombol Kembali -->
        <div class="text-center mt-12">
            <a href="home.php"
                class="bg-blue-700 text-white px-6 py-2 rounded-md hover:bg-blue-800 transition">
                ← Kembali ke Beranda
            </a>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>