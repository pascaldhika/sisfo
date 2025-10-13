<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$query = mysqli_query($connection, "SELECT * FROM guru");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Data Guru";
  include 'includes/head.php'; ?>
</head>

<body class="font-sans bg-gray-50 text-gray-800">

  <?php include 'includes/navbar.php'; ?>

  <!-- KONTEN UTAMA -->
  <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

    <section class="max-w-4xl mx-auto mt-10 px-4">
      <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Data Guru</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <?php
          while ($data = mysqli_fetch_array($query)) :
          ?>
            <!-- Item 1 -->
            <div class="bg-white shadow hover:shadow-md transition overflow-hidden">
                <img src="admin/guru/uploads/<?= $data['foto']; ?>" alt="<?= $data['nama']; ?>" class="w-full h-100 object-cover hover:scale-105 transition duration-300">
                <div class="p-4 text-center">
                  <p class="font-semibold text-lg mb-2 hover:text-blue-600 cursor-pointer"><a href="guru-detail.php?id=<?= $data['id']; ?>"><?= $data['nama']; ?><br>NIP: <?= $data['nip']; ?></a></p>
                </div>
            </div>
          <?php
          endwhile;
          ?>
      </div>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

</body>

</html>