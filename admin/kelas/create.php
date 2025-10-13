<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$wali_kelas = mysqli_query($connection, "SELECT * FROM guru");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Kelas</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Nama Kelas</td>
                <td><input class="form-control" type="text" name="nama" required></td>
              </tr>

              <tr>
                <td>Jurusan</td>
                <td>
                  <select class="form-control" name="jurusan" required>
                    <option value="">--Pilih Jurusan--</option>
                    <option value="Guru Kelas">Guru Kelas</option>
                    <option value="Kelas Tambahan">Kelas Tambahan</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Wali Kelas</td>
                <td>
                  <select class="form-control" name="wali_kelas" required>
                    <option value="">--Pilih Wali Kelas--</option>
                    <?php
                    while ($row = mysqli_fetch_array($wali_kelas)) {
                    ?>
                      <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>
              
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>