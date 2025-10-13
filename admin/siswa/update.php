<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];
$kelas = $_POST['kelas'];

$query = mysqli_query($connection, "UPDATE siswa SET nama = '$nama', nisn = '$nisn', nis = '$nis', nrg = '$nrg', jenis_kelamin = '$jenis_kelamin', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat = '$alamat', kota = '$kota', kode_pos = '$kode_pos', kelas = '$kelas' WHERE id = '$id'");

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
