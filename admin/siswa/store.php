<?php
session_start();
require_once '../helper/connection.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$nuptk = $_POST['nuptk'];
$nrg = $_POST['nrg'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$pangkat = $_POST['pangkat'];
$pendidikan = $_POST['pendidikan'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

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

$query = mysqli_query($connection, "INSERT INTO guru (nip, nama, nuptk, nrg, status, jabatan, pangkat, pendidikan, mata_pelajaran, jenis_kelamin, agama, foto) value
                  ('$nip', '$nama', '$nuptk', '$nrg','$status', '$jabatan', '$pangkat', '$pendidikan', '$mata_pelajaran', '$jenis_kelamin', '$agama', '$nama_file_baru')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
