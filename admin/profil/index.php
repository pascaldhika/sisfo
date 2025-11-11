<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$query = mysqli_query($connection, "SELECT * FROM profil LIMIT 1");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Data Menu Profil</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="post" enctype="multipart/form-data">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <table cellpadding="8" class="w-100">
                
                <tr>
                  <td>Isi Profil</td>
                  <td><textarea class="form-control" name="isi" id="isi" required><?= $row['isi'] ?></textarea></td>
                </tr>

                <tr>
                  <td>Foto Header</td>
                  <td><input class="form-control" type="file" name="foto" accept="image/*"><small> (kosongkan jika tidak diubah)</small></td>
                </tr>

                <tr>
                  <td></td>
                  <td><img src="uploads/<?= $row['foto'] ?>" alt="Logo" width="300"></td>
                </tr>

                <tr>
                  <td>Visi, Misi dan Tujuan Sekolah</td>
                  <td><textarea class="form-control" name="visi_misi" id="visi_misi"><?= $row['visi_misi'] ?></textarea></td>
                </tr>

                <tr>
                  <td>Informasi Pendafaran</td>
                  <td><textarea class="form-control" name="pendaftaran" id="pendaftaran"><?= $row['pendaftaran'] ?></textarea></td>
                </tr>

              

                <tr>
                  <td>Struktur Organisasi</td>
                  <td><input class="form-control" type="file" name="struktur" accept="image/*"><small> (kosongkan jika tidak diubah)</small></td>
                </tr>

                <tr>
                  <td></td>
                  <td><img src="uploads/<?= $row['struktur'] ?>" alt="Logo" width="300"></td>
                </tr>
                
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Simpan">
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

<script>
  ClassicEditor
    .create(document.querySelector('#visi_misi'), {
      toolbar: [
        'heading', '|', 'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList',
        '|', 'blockQuote', 'insertTable', 'undo', 'redo'
      ],
    })
    .catch(error => console.error(error));

  ClassicEditor
    .create(document.querySelector('#pendaftaran'), {
      toolbar: [
        'heading', '|', 'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList',
        '|', 'blockQuote', 'insertTable', 'undo', 'redo'
      ],
    })
    .catch(error => console.error(error));

 
</script>