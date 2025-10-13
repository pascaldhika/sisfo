<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Postingan</h1>
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
                <td>Nama Postingan</td>
                <td><input class="form-control" type="text" name="nama" required></td>
              </tr>

              <tr>
                <td>Isi</td>
                <td colspan="3">
                  <textarea class="form-control" name="isi" id="isi" required></textarea>
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