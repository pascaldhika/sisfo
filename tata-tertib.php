<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$query = mysqli_query($connection, "SELECT * FROM profil LIMIT 1");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Tata Tertib Sekolah";
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
        <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Tata Tertib Sekolah</h2>
        <p><?= $row['tata_tertib']; ?></p>
      <?php } ?>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>