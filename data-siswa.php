<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$query = mysqli_query($connection, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Data Peserta Didik";
  include 'includes/head.php'; ?>

  <!-- Tambahkan CSS DataTables & Bootstrap -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body class="font-sans bg-gray-50 text-gray-800">

  <?php include 'includes/navbar.php'; ?>

  <!-- KONTEN UTAMA -->
  <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

    <section class="max-w-4xl mx-auto mt-10 px-4">
      <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Data Peserta Didik</h2>
      <div class="table-responsive">
        <table class="table table-hover w-100" id="table-1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th style="width: 150px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no_urut = 1;
            while ($data = mysqli_fetch_array($query)) :
            ?>
              <tr>
                <td><?= $no_urut ?></td>
                <td><?= $data['nama'] ?></td>
                <td>
                  <a class="btn btn-sm btn-info" href="siswa-detail.php?id=<?= $data['id'] ?>">Detail</a>
                </td>
              </tr>
            <?php
            $no_urut++;
            endwhile;
            ?>
          </tbody>
        </table>
      </div>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

  <!-- Tambahkan Script jQuery dan DataTables -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#table-1').DataTable({
        responsive: true,
        pageLength: 10,
        lengthChange: true,
        language: {
          search: "Cari:",
          lengthMenu: "Tampilkan _MENU_ data",
          info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
          infoEmpty: "Tidak ada data tersedia",
          zeroRecords: "Data tidak ditemukan",
          paginate: {
            first: "Awal",
            last: "Akhir",
            next: "›",
            previous: "‹"
          }
        }
      });
    });
  </script>

</body>

</html>