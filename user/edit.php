<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM user WHERE id='$id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data User</h1>
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
                  <td>Username</td>
                  <td><input class="form-control" type="text" name="username" required value="<?= $row['username'] ?>" disabled></td>
                </tr>

                <tr>
                  <td>Nama User</td>
                  <td><input class="form-control" type="text" name="nama" required value="<?= $row['nama'] ?>"></td>
                </tr>

                <tr>
                  <td>Password (kosongkan jika tidak diubah)</td>
                  <td><input class="form-control" type="password" name="password"></td>
                </tr>

                <tr>
                  <td>Role</td>
                  <td>
                    <select class="form-control" name="role" id="role" required>
                      <option value="">--Pilih Role--</option>
                      <option value="admin" <?= $row['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                      <option value="user" <?= $row['role'] == 'user' ? 'selected' : '' ?>>User</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td>Foto (kosongkan jika tidak diubah)</td>
                  <td><input class="form-control" type="file" name="foto" accept="image/*"></td>
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