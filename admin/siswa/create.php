<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kelas = mysqli_query($connection, "SELECT * FROM kelas");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Siswa</h1>
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
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" required></td>
              </tr>

              <tr>
                <td>NISN</td>
                <td><input class="form-control" type="text" name="nisn" required></td>
              </tr>

              <tr>
                <td>NIS</td>
                <td><input class="form-control" type="text" name="nis" required></td>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <td>
                  <select class="form-control" name="jenis_kelamin" required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <td><input class="form-control" type="date" name="tgl_lahir" required></td>
              </tr>

              <tr>
                <td>Agama</td>
                <td>
                  <select class="form-control" name="agama" required>
                    <option value="">--Pilih Agama--</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" type="text" name="alamat" required></textarea></td>
              </tr>

              <tr>
                <td>Kota</td>
                <td><input class="form-control" type="text" name="kota" required></td>
              </tr>

              <tr>
                <td>Kode Pos</td>
                <td><input class="form-control" type="text" name="kode_pos" required></td>
              </tr>

              <tr>
                <td>Kelas</td>
                <td>
                  <select class="form-control" name="kelas" required>
                    <option value="">--Pilih Kelas--</option>
                    <?php
                    while ($row = mysqli_fetch_array($kelas)) {
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