<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM berita ORDER BY id DESC");
?>

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
            while ($data = mysqli_fetch_array($result)) :
            ?>
                <div class="flex flex-col group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="admin/berita/uploads/<?= $data['foto'] ?>" alt="<?= $data['judul']; ?>"
                            class="w-full h-48 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-90">
                    </div>
                    <div class="mt-4 flex flex-col justify-between flex-1">
                        <h4 class="text-gray-900 font-semibold text-base leading-tight"><?= $data['judul']; ?></h4>
                        <p class="text-sm text-gray-500 mt-1">📅 <?= tanggal_indo($data['tanggal']); ?></p>
                        <p class="text-gray-600 text-sm mt-2 mb-4 line-clamp-3"><?= limitText($data['keterangan'], 120); ?></p>
                        <a href="berita-detail.php?id=<?= $data['id']; ?>" 
                        class="text-blue-900 text-sm font-semibold hover:text-blue-700 inline-flex items-center">
                        Baca Selengkapnya <span class="ml-1">→</span>
                        </a>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
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

    <script src="js/script.js"></script>

</body>

</html>