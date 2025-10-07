<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$role = $_POST['role'];

// Ambil data file
$nama_file = $_FILES['foto']['name'];
$tmp_file  = $_FILES['foto']['tmp_name'];
$ukuran    = $_FILES['foto']['size'];
$error     = $_FILES['foto']['error'];

// Folder tujuan menyimpan file
$folder = "uploads/";

// Cek folder, buat jika belum ada
if (!is_dir($folder)) {
  mkdir($folder, 0777, true);
}

// Ekstensi file yang diizinkan
$allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
$ext = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

// Validasi file
if ($error === 0) {
  if (in_array($ext, $allowed_ext)) {
    if ($ukuran < 2 * 1024 * 1024) { // max 2MB
      $nama_file_baru = uniqid() . '.' . $ext;
      $path = $folder . $nama_file_baru;
      move_uploaded_file($tmp_file, $path);
    }
  }
}

if (!empty($_POST['password'])) {
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $query = mysqli_query($connection, "UPDATE user SET nama = '$nama', password = '$password', role = '$role', foto = '$nama_file_baru' WHERE id = '$id'");
} else{
  $query = mysqli_query($connection, "UPDATE user SET nama = '$nama', role = '$role', foto = '$nama_file_baru' WHERE id = '$id'");
}

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
