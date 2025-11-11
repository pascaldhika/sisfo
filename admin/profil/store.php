<?php
session_start();
require_once '../helper/connection.php';

$isi = $_POST['isi'];
$visi_misi = $_POST['visi_misi'];
$pendaftaran = $_POST['pendaftaran'];


// Ambil data file
$nama_file = $_FILES['foto']['name'];
$tmp_file  = $_FILES['foto']['tmp_name'];
$ukuran    = $_FILES['foto']['size'];
$error     = $_FILES['foto']['error'];

$nama_file2 = $_FILES['struktur']['name'];
$tmp_file2  = $_FILES['struktur']['tmp_name'];
$ukuran2    = $_FILES['struktur']['size'];
$error2     = $_FILES['struktur']['error'];

// Folder tujuan menyimpan file
$folder = "uploads/";

// Cek folder, buat jika belum ada
if (!is_dir($folder)) {
  mkdir($folder, 0777, true);
}

// Ekstensi file yang diizinkan
$allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
$ext = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
$ext2 = strtolower(pathinfo($nama_file2, PATHINFO_EXTENSION));

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

if ($error2 === 0) {
  if (in_array($ext2, $allowed_ext)) {
    if ($ukuran2 < 2 * 1024 * 1024) { // max 2MB
      $nama_file_baru2 = uniqid() . '.' . $ext2;
      $path = $folder . $nama_file_baru2;
      move_uploaded_file($tmp_file2, $path);
    }
  }
}

$query = mysqli_query($connection, "UPDATE profil SET isi = '$isi', visi_misi = '$visi_misi', pendaftaran = '$pendaftaran'");
if (isset($nama_file_baru)) {
  $query2 = mysqli_query($connection, "UPDATE profil SET foto = '$nama_file_baru'");
}

if (isset($nama_file_baru2)) {
  $query3 = mysqli_query($connection, "UPDATE profil SET struktur = '$nama_file_baru2'");
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
