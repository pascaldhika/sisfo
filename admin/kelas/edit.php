<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$wali_kelas = mysqli_query($connection, "SELECT * FROM guru");
$query = mysqli_query($connection, "SELECT * FROM kelas WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Kelas</h1>
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
                  <td>Nama Kelas</td>
                  <td><input class="form-control" type="text" name="nama" required value="<?= $row['nama'] ?>"></td>
                </tr>

                <tr>
                  <td>Jurusan</td>
                  <td>
                    <select class="form-control" name="jurusan" required>
                      <option value="">--Pilih Jurusan--</option>
                      <option value="Guru Kelas" <?= $row['jurusan'] == 'Guru Kelas' ? 'selected' : '' ?>>Guru Kelas</option>
                      <option value="Kelas Tambahan" <?= $row['jurusan'] == 'Kelas Tambahan' ? 'selected' : '' ?>>Kelas Tambahan</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td>Wali Kelas</td>
                  <td>
                    <select class="form-control" name="wali_kelas" required>
                      <option value="">--Pilih Wali Kelas--</option>
                      <?php
                      while ($wk = mysqli_fetch_array($wali_kelas)) {
                      ?>
                        <option value="<?= $wk['nama'] ?>" <?= $wk['nama'] == $row['wali_kelas'] ? 'selected' : '' ?>><?= $wk['nama'] ?></option>
                      <?php } ?>
                    </select>
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