<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_SESSION['login']['id'];
$result = mysqli_query($connection, "SELECT * FROM user WHERE id='$id'");
$user = mysqli_fetch_assoc($result);
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body text-center">
            <img src="../user/uploads/<?= $user['foto'] ?>" 
                class="rounded-circle mb-3" width="120" height="120" 
                style="object-fit: cover;">
            <h4><?= $user['nama'] ?></h4>
            <p class="text-muted mb-1">@<?= $user['username'] ?></p>
            <span class="badge bg-success"><?= $user['role'] ?></span>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>