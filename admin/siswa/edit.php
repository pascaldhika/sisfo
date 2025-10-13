<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$kelas = mysqli_query($connection, "SELECT * FROM kelas");
$query = mysqli_query($connection, "SELECT * FROM siswa WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Siswa</h1>
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
                  <td>Nama</td>
                  <td><input class="form-control" type="text" name="nama" required value="<?= $row['nama'] ?>"></td>
                </tr>

                <tr>
                  <td>NISN</td>
                  <td><input class="form-control" type="text" name="nisn" required value="<?= $row['nisn'] ?>"></td>
                </tr>

                <tr>
                  <td>NIS</td>
                  <td><input class="form-control" type="text" name="nis" required value="<?= $row['nis'] ?>"></td>
                </tr>

                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <select class="form-control" name="jenis_kelamin" required>
                      <option value="">--Pilih Jenis Kelamin--</option>
                      <option value="Laki-laki" <?= $row['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                      <option value="Perempuan" <?= $row['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td>Tanggal Lahir</td>
                  <td><input class="form-control" type="date" name="tgl_lahir" required value="<?= $row['tgl_lahir'] ?>"></td>
                </tr>

                <tr>
                  <td>Agama</td>
                  <td>
                    <select class="form-control" name="agama" required>
                      <option value="">--Pilih Agama--</option>
                      <option value="Islam" <?= $row['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                      <option value="Kristen" <?= $row['agama'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                      <option value="Katolik" <?= $row['agama'] == 'Katolik' ? 'selected' : '' ?>>Katolik</option>
                      <option value="Hindu" <?= $row['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                      <option value="Budha" <?= $row['agama'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td>Alamat</td>
                  <td><textarea class="form-control" type="text" name="alamat" required><?= $row['alamat'] ?></textarea></td>
                </tr>

                <tr>
                  <td>Kota</td>
                  <td><input class="form-control" type="text" name="kota" required value="<?= $row['kota'] ?>"></td>
                </tr>

                <tr>
                  <td>Kode Pos</td>
                  <td><input class="form-control" type="text" name="kode_pos" required value="<?= $row['kode_pos'] ?>"></td>
                </tr>

                <tr>
                  <td>Kelas</td>
                  <td>
                    <select class="form-control" name="kelas" required>
                      <option value="">--Pilih Kelas--</option>
                      <?php
                      while ($wk = mysqli_fetch_array($kelas)) {
                      ?>
                        <option value="<?= $wk['nama'] ?>" <?= $wk['nama'] == $row['kelas'] ? 'selected' : '' ?>><?= $wk['nama'] ?></option>
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