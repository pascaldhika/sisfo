<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Agenda - SMA Negeri Nusantara"; include 'includes/head.php'; ?>
</head>

<?php
// Simulasi data berita (nanti bisa diambil dari database)
$agenda = [
  1 => [
    'judul' => 'Lomba Sains Nasional 2025: Siswa Raih Medali Emas',
    'tanggal' => '20 September 2025',
    'gambar' => 'admin/agenda/uploads/agenda-1.png',
    'konten' => 'SMA Negeri Contoh kembali menorehkan prestasi gemilang pada ajang Lomba Sains Nasional 2025. 
    Salah satu siswa, Andi Wijaya, berhasil meraih medali emas pada bidang Fisika. 
    Kepala Sekolah menyampaikan rasa bangga atas pencapaian tersebut dan berharap prestasi ini bisa menjadi motivasi bagi siswa lain.'
  ],
  2 => [
    'judul' => 'Seminar Nasional Guru Inovatif diikuti 50 Sekolah',
    'tanggal' => '15 September 2025',
    'gambar' => 'admin/agenda/uploads/agenda-2.png',
    'konten' => 'Kegiatan Seminar Nasional Guru Inovatif diadakan di Aula SMA Negeri Contoh dan diikuti oleh 50 sekolah se-Provinsi. 
    Acara ini menghadirkan narasumber dari Universitas Pendidikan Indonesia yang membahas tentang inovasi metode pembelajaran berbasis teknologi.'
  ],
  3 => [
    'judul' => 'Kegiatan Donor Darah Bersama PMI di Sekolah',
    'tanggal' => '10 September 2025',
    'gambar' => 'admin/agenda/uploads/agenda-3.png',
    'konten' => 'Dalam rangka memperingati Hari Kesehatan Nasional, sekolah bekerja sama dengan PMI mengadakan kegiatan donor darah. 
    Kegiatan ini diikuti oleh guru, siswa, dan masyarakat sekitar. 
    PMI mengapresiasi inisiatif sekolah dalam mendukung program kemanusiaan.'
  ]
];

// Ambil ID dari URL
$id = $_GET['id'] ?? null;
$data = $agenda[$id] ?? null;
?>

<body class="font-sans bg-gray-50 text-gray-800">

    <?php include 'includes/navbar.php'; ?>

    <!-- KONTEN UTAMA -->
    <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

        <section class="max-w-4xl mx-auto mt-10 px-4">
            <?php if ($data): ?>
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900"><?= $data['judul']; ?></h2>
            <img src="<?= $data['gambar']; ?>" alt="<?= $data['judul']; ?>" class="w-full h-72 object-cover mt-4 mb-6">
            <p class="text-gray-500 text-sm mb-2">📅 <?= $data['tanggal']; ?></p>
            <p class="text-gray-700 leading-relaxed mb-8"><?= nl2br($data['konten']); ?></p>
            <a href="agenda.php" class="mt-5 sm:mt-6 px-5 py-2 sm:px-6 sm:py-3 bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition">
                ← Kembali ke Daftar Agenda
            </a>
            <?php else: ?>
            <p class="text-center text-gray-600 mt-20">Agenda tidak ditemukan.</p>
            <?php endif; ?>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>