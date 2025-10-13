<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
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
                <td>NUPTK</td>
                <td><input class="form-control" type="text" name="nuptk" required></td>
              </tr>

              <tr>
                <td>NRG</td>
                <td><input class="form-control" type="text" name="nrg" required></td>
              </tr>

              <tr>
                <td>Status</td>
                <td>
                  <select class="form-control" name="status" required>
                    <option value="">--Pilih Status--</option>
                    <option value="PNS">PNS</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Jabatan</td>
                <td><input class="form-control" type="text" name="jabatan" required></td>
              </tr>

              <tr>
                <td>Pangkat Golongan</td>
                <td><input class="form-control" type="text" name="pangkat" required></td>
              </tr>

              <tr>
                <td>Pendidikan</td>
                <td>
                  <select class="form-control" name="pendidikan" required>
                    <option value="">--Pilih Pendidikan--</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Mata Pelajaran</td>
                <td><input class="form-control" type="text" name="mata_pelajaran" required></td>
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
                <td>Foto</td>
                <td><input class="form-control" type="file" name="foto" accept="image/*" required></td>
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