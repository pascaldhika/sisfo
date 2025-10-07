<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM fasilitas");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Fasilitas</h1>
    <?php if ($_SESSION['login']['role'] == 'admin'){ ?>
      <a href="./create.php" class="btn btn-primary">Tambah Data</a>
    <?php } ?>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama Fasilitas</th>
                  <th>Keterangan</th>
                  <th>Foto</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no_urut = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $no_urut ?></td>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
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
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>