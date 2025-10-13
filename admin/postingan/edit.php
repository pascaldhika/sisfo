<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM postingan WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Postingan</h1>
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
                  <td>Nama Postingan</td>
                  <td><input class="form-control" type="text" name="nama" required value="<?= $row['nama'] ?>"></td>
                </tr>

                <tr>
                  <td>Isi</td>
                  <td colspan="3">
                    <textarea class="form-control" name="isi" id="isi" required><?= $row['isi'] ?></textarea>
                    <p>* Cara Embed Postingan Instagram:</p>
                    <ul>
                      <li>Buka postingan Instagram sekolahmu di browser</li>
                      <li>Klik tanda ⋯ (tiga titik) di kanan atas postingan</li>
                      <li>Pilih Embed (Sematkan) → Hilangkan centang pada Caption → lalu Copy Embed Code</li>
                    </ul>
                  </td>
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