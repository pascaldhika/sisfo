<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM berita WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Berita</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post" enctype="multipart/form-data">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Judul Berita</td>
                  <td><input class="form-control" type="text" name="judul" required value="<?= $row['judul'] ?>"></td>
                </tr>

                <tr>
                  <td>Tanggal</td>
                  <td><input class="form-control" type="date" name="tanggal" required value="<?= $row['tanggal'] ?>"></td>
                </tr>

                <tr>
                  <td>Keterangan</td>
                  <td colspan="3"><textarea class="form-control" name="keterangan" id="keterangan" required><?= $row['keterangan'] ?></textarea></td>
                </tr>

                <tr>
                  <td>Foto (kosongkan jika tidak diubah)</td>
                  <td><input class="form-control" type="file" name="foto" accept="image/*"></td>
                </tr>

                <tr>
                  <td><img src="uploads/<?= $row['foto'] ?>" alt="logo" width="300"></td>
                </tr>
                
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>