<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM agenda WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Agenda - SMA Negeri Nusantara";
  include 'includes/head.php'; ?>
</head>

<body class="font-sans bg-gray-50 text-gray-800">

  <?php include 'includes/navbar.php'; ?>

  <!-- KONTEN UTAMA -->
  <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

    <section class="max-w-4xl mx-auto mt-10 px-4">
      <?php
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <h2 class="text-2xl font-bold text-center mb-10 text-blue-900"><?= $row['judul']; ?></h2>
        <img src="admin/agenda/uploads/<?= $row['foto'] ?>" alt="<?= $row['judul']; ?>" class="w-full h-72 object-cover mt-4 mb-6">
        <p class="text-gray-500 text-sm mb-2">📅 <?= tanggal_indo($row['tanggal']); ?></p>
        <p class="text-gray-700 leading-relaxed mb-8"><?= nl2br($row['keterangan']); ?></p>
        <a href="agenda.php" class="mt-5 sm:mt-6 px-5 py-2 sm:px-6 sm:py-3 bg-yellow-400 text-blue-900 font-semibold hover:bg-yellow-300 transition">
          ← Kembali ke Daftar Agenda
        </a>
      <?php } ?>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>