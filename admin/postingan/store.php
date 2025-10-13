<?php
session_start();
require_once '../helper/connection.php';

$nama = $_POST['nama'];
$isi = $_POST['isi'];

$query = mysqli_query($connection, "insert into postingan(nama, isi) value('$nama', '$isi')");
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
