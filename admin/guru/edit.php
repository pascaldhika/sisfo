<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM guru WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Guru</h1>
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
                  <td>NIP</td>
                  <td><input class="form-control" type="text" name="nip" required value="<?= $row['nip'] ?>"></td>
                </tr>

                <tr>
                  <td>Nama</td>
                  <td><input class="form-control" type="text" name="nama" required value="<?= $row['nama'] ?>"></td>
                </tr>

                <tr>
                  <td>NUPTK</td>
                  <td><input class="form-control" type="text" name="nuptk" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required value="<?= $row['nuptk'] ?>"></td>
                </tr>

                <tr>
                  <td>Status</td>
                  <td>
                    <select class="form-control" name="status" required>
                      <option value="">--Pilih Status--</option>
                      <option value="PNS" <?= $row['status'] == 'PNS' ? 'selected' : '' ?>>PNS</option>
                      <option value="Guru Honor" <?= $row['status'] == 'Guru Honor' ? 'selected' : '' ?>>Guru Honor</option>
                     
                      </select>
                  </td>
                </tr>

                <tr>
                  <td>Jabatan</td>
                  <td><input class="form-control" type="text" name="jabatan" required value="<?= $row['jabatan'] ?>"></td>
                </tr>

                <tr>
                  <td>Pendidikan</td>
                  <td>
                    <select class="form-control" name="pendidikan" required>
                      <option value="">--Pilih Pendidikan--</option>
                      <option value="D3" <?= $row['pendidikan'] == 'D3' ? 'selected' : '' ?>>D3</option>
                      <option value="S1" <?= $row['pendidikan'] == 'S1' ? 'selected' : '' ?>>S1</option>
                      <option value="S2" <?= $row['pendidikan'] == 'S2' ? 'selected' : '' ?>>S2</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td>Mata Pelajaran</td>
                  <td><input class="form-control" type="text" name="mata_pelajaran" required value="<?= $row['mata_pelajaran'] ?>"></td>
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
                  <td>Foto (kosongkan jika tidak diubah)</td>
                  <td><input class="form-control" type="file" name="foto" accept="image/*"></td>
                </tr>

                <tr>
                  <td><img src="uploads/<?= $row['foto'] ?>" alt="Logo" width="300"></td>
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