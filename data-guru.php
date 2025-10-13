<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$query = mysqli_query($connection, "SELECT * FROM guru");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <?php $page_title = "Guru";
  include 'includes/head.php'; ?>
</head>

<body class="font-sans bg-gray-50 text-gray-800">

  <?php include 'includes/navbar.php'; ?>

  <!-- KONTEN UTAMA -->
  <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

    <section class="max-w-4xl mx-auto mt-10 px-4">
      <div class="table-responsive">
        <table class="table table-hover table-striped w-100" id="table-1">
          <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Foto</th>
              <th style="width: 150">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no_urut = 1;
            while ($data = mysqli_fetch_array($query)) :
            ?>

              <tr>
                <td><?= $no_urut ?></td>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['nip'] ?></td>
                <td><a href="uploads/<?= $data['foto'] ?>" target="_blank"><?= $data['foto'] ?></a></td>
                <td>
                  <?php if ($_SESSION['login']['role'] == 'admin'){ ?>
                    <a class="btn btn-sm btn-info" href="edit.php?id=<?= $data['id'] ?>">
                      <i class="fas fa-edit fa-fw"></i>
                    </a>
                    <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?id=<?= $data['id'] ?>">
                      <i class="fas fa-trash fa-fw"></i>
                    </a>
                  <?php } ?>
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

  <script src="admin/assets/js/page/modules-datatables.js"></script>

</body>

</html>