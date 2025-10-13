<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$wali_kelas = $_POST['wali_kelas'];

$query = mysqli_query($connection, "UPDATE kelas SET nama = '$nama', jurusan = '$jurusan', wali_kelas = '$wali_kelas' WHERE id = '$id'");

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
