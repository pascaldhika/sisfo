<?php
session_start();
require_once '../helper/connection.php';

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$wali_kelas = $_POST['wali_kelas'];

$query = mysqli_query($connection, "insert into kelas(nama, jurusan, wali_kelas) value('$nama', '$jurusan', '$wali_kelas')");
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
