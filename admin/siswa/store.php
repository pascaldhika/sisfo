<?php
session_start();
require_once '../helper/connection.php';

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

$query = mysqli_query($connection, "INSERT INTO siswa (nama, nisn, nis, jenis_kelamin, tgl_lahir, agama, alamat, kota, kode_pos, kelas) value
                  ('$nama', '$nisn', '$nis', '$jenis_kelamin','$tgl_lahir', '$agama', '$alamat', '$kota', '$kode_pos', '$kelas')");
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
