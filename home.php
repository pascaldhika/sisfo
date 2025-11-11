<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$berita = mysqli_query($connection, "SELECT * FROM berita ORDER BY id DESC LIMIT 3");
$agenda = mysqli_query($connection, "SELECT * FROM agenda ORDER BY id DESC LIMIT 4");
$prestasi = mysqli_query($connection, "SELECT * FROM prestasi ORDER BY id DESC LIMIT 5");
$profil = mysqli_query($connection, "SELECT * FROM profil LIMIT 1");
$postingan = mysqli_query($connection, "SELECT * FROM postingan ORDER BY id DESC LIMIT 4");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Beranda"; include 'includes/head.php'; ?>
</head>

<body class="font-sans bg-gray-50 text-gray-800 relative">

    <?php include 'includes/navbar.php'; ?>

    <main class="pt-0">

        <!-- HERO / BERANDA -->
        <?php
        while ($row = mysqli_fetch_array($profil)) {
        ?>
            <section id="beranda"
                class="relative w-full h-[450px] sm:h-[600px] flex items-center justify-center -mt-px"
                data-aos="fade-up">

                <!-- Gambar Latar -->
                <img src="admin/profil/uploads/<?= $row['foto'] ?>" alt="Berita Utama"
                    class="absolute inset-0 w-full h-full object-cover">

                <!-- Lapisan Gelap -->
                <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/70"></div>

                <!-- Teks Utama -->
                <div class="relative text-center text-white px-4 sm:px-6">
                    <h2 class="text-3xl sm:text-5xl font-bold mb-3 drop-shadow-lg">
                        SD MUHAMMADIYAH MALAWILI
                    </h2>
                    <p class="max-w-3x2 mx-auto text-base sm:text-lg text-gray-100">
                        <?= $row['isi'] ?>
                    </p>
                    <!-- <button class="mt-5 sm:mt-6 px-5 py-2 sm:px-6 sm:py-3 bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition">
                        Baca Selengkapnya
                    </button> -->
                </div>
            </section>
        <?php } ?>

        <!-- BARIS PERTAMA: SAMBUTAN + AGENDA + BANNER -->
        <section class="max-w-7xl mx-auto mt-10 px-4 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Sambutan Kepala Sekolah -->
            <div class="bg-white shadow overflow-hidden aspect-[3/4] flex flex-col">
                <h3 class="text-lg font-semibold text-white bg-green-600 px-6 py-3 w-full">
                    Sambutan Kepala Sekolah
                </h3>
                <div class="p-5 flex flex-col items-center text-center space-y-3">
                    <img src="images/Kepsek.jpg" alt="Kepala Sekolah" class="w-48 h-48 rounded-full object-cover">
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Selamat datang di website resmi sekolah kami. Mari bersama-sama membangun generasi unggul, berkarakter, dan berprestasi.
                    </p>
                </div>
            </div>

            <!-- Agenda Terbaru -->
            <div class="bg-white shadow overflow-hidden aspect-[3/4] flex flex-col">
                <h3 class="text-lg font-semibold text-white bg-blue-900 px-6 py-3">
                    Agenda Terbaru
                </h3>

                <div class="p-5 flex-1 overflow-y-auto">
                    <ul class="space-y-4">
                        <?php
                        while ($data = mysqli_fetch_array($agenda)) :
                        ?>
                            <li class="flex items-center space-x-3 border-b border-gray-200 pb-3">
                                <img src="admin/agenda/uploads/<?= $data['foto']; ?>" alt="<?= $data['judul']; ?>" class="w-14 h-14 object-cover flex-shrink-0">
                                <a href="agenda-detail.php?id=<?= $data['id']; ?>" class="text-gray-800 text-sm font-medium leading-tight hover:text-blue-700"><?= $data['judul']; ?></a>
                            </li>
                        <?php
                        endwhile;
                        ?>
                    </ul>
                </div>

                <div class="px-5 pb-5">
                    <a href="agenda.php" class="text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                        Baca Selengkapnya <span class="ml-1">→</span>
                    </a>
                </div>
            </div>


            <!-- Banner Promosi dengan Slider -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl aspect-[3/4] relative">
                <!-- Slider Container -->
                <div class="relative w-full h-full overflow-hidden" id="bannerSlider">
                    <img src="images/benner-1.jpg" class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000 slide active">
                    <img src="images/benner-1.jpg" class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000 slide active">
                    <img src="images/benner-1.jpg" class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000 slide active">
                   
                    <!-- Tombol Navigasi -->
                    <button id="prevBtn" class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-2 rounded-full transition">
                        &#10094; <!-- Panah kiri -->
                    </button>
                    <button id="nextBtn" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-2 rounded-full transition">
                        &#10095; <!-- Panah kanan -->
                    </button>

                    <!-- Indikator Bulat -->
                    <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 flex space-x-2">
                        <span class="dot w-3 h-3 rounded-full bg-white/60"></span>
                        <span class="dot w-3 h-3 rounded-full bg-white/60"></span>
                        <span class="dot w-3 h-3 rounded-full bg-white/60"></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- BERITA TERBARU -->
        <section class="max-w-7xl mx-auto mt-10 px-4" id="berita">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Berita Terbaru</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                while ($data = mysqli_fetch_array($berita)) :
                ?>
                    <!-- Item 1 -->
                    <div class="bg-white shadow hover:shadow-md transition overflow-hidden">
                        <img src="admin/berita/uploads/<?= $data['foto']; ?>" alt="<?= $data['judul']; ?>" class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                        <div class="p-4">
                            <p class="text-sm text-gray-500 mb-2">📅 <?= tanggal_indo($data['tanggal']); ?></p>
                            <h4 class="font-semibold text-lg mb-2 hover:text-blue-600 cursor-pointer"><a href="berita-detail.php?id=<?= $data['id']; ?>"><?= $data['judul']; ?></a></h4>
                            <p class="text-gray-600 text-sm mb-3"><?= limitText($data['keterangan'], 120); ?></p>
                            <a href="berita-detail.php?id=<?= $data['id']; ?>" class="text-blue-600 font-medium hover:underline">Baca Selengkapnya →</a>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            </div>

            <!-- Tombol Selengkapnya -->
            <div class="text-center mt-6">
                <a href="berita.php" 
                class="mt-5 sm:mt-6 px-5 py-2 sm:px-6 sm:py-3 bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition">
                Lihat Semua Berita
                </a>
            </div>
        </section>


        <!-- Prestasi Terbaru -->
        <section class="max-w-7xl mx-auto mt-10 px-4">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Prestasi Terbaru</h2>

            <div class="bg-white shadow p-6 space-y-4">
                <?php
                while ($data = mysqli_fetch_array($prestasi)) :
                ?>
                    <!-- Item Prestasi -->
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-4 border-b pb-4 group overflow-hidden">
                        <div class="relative overflow-hidden w-full md:w-40 h-32">
                            <img src="admin/prestasi/uploads/<?= $data['foto']; ?>" alt="<?= $data['nama']; ?>"
                                class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-90">
                        </div>
                        <div>
                            <h4 class="text-gray-900 font-semibold text-base leading-tight mb-1">
                                <?= $data['nama']; ?>
                            </h4>
                            <p class="text-gray-600 text-sm mb-2">
                                <?= limitText($data['keterangan'], 120); ?>
                            </p>
                            <!-- <a href="prestasi1.html" class="text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <span class="ml-1">→</span>
                            </a> -->
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            </div>

            <!-- Tombol Selengkapnya -->
            <!-- <div class="text-center mt-6">
                <a href="prestasi.php" 
                class="mt-5 sm:mt-6 px-5 py-2 sm:px-6 sm:py-3 bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition">
                Lihat Semua Prestasi
                </a>
            </div> -->
        </section>


        <!-- VIDEO KEGIATAN -->
        <section class="max-w-7xl mx-auto mt-10 px-4" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Video Kegiatan</h2>
            <iframe src="https://www.facebook.com/plugins/video.php?height=317&href=https%3A%2F%2Fwww.facebook.com%2Ftriutamy.ridhonya%2Fvideos%2F828310156366410%2F%3Fidorvanity%3D525707368270051&show_text=false&width=560&t=0"
            <iframe class="w-full block rounded-none h-80 sm:h-[450px]"
                title="Video kegiatan sekolah"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </section>


        <!-- INSTAGRAM -->
        <section class="max-w-7xl mx-auto mt-10 px-4" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Postingan Facebook Sekolah</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 justify-items-center">
                <?php
                while ($data = mysqli_fetch_array($postingan)) :
                ?>
                    <?= $data['isi']; ?>
                <?php
                endwhile;
                ?>
            </div>

        </section>


        <!-- MAPS -->
        <section class="max-w-7xl mx-auto mt-10 px-4" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Maps Sekolah</h2>
            <div class="bg-white p-2 rounded-2xl shadow-lg overflow-hidden">
                <iframe class="w-full h-64 sm:h-72 rounded-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2862.082991333604!2d131.3197065!3d-0.9623567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5bff29cdba793f%3A0x362ed133958704b1!2sSD%20MUHAMMADIYAH%20MALAWILI!5e1!3m2!1sid!2sid!4v1761669742890!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Tombol scroll ke atas -->
    <button id="toTopBtn" class="fixed bottom-6 right-6 bg-yellow-400 text-blue-900 font-bold p-3 rounded-full shadow-lg hover:bg-yellow-300 transition hidden">
        ↑
    </button>

    <!-- Script Resmi Instagram -->
    <script async src="//www.instagram.com/embed.js"></script>

    <script src="js/script.js"></script>

</body>

</html>