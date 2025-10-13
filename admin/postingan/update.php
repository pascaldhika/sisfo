<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$isi = $_POST['isi'];

$query = mysqli_query($connection, "UPDATE postingan SET nama = '$nama', isi = '$isi' WHERE id = '$id'");

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
