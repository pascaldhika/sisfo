<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$fasilitas = mysqli_query($connection, "SELECT COUNT(*) FROM fasilitas");
$berita = mysqli_query($connection, "SELECT COUNT(*) FROM berita");
$agenda = mysqli_query($connection, "SELECT COUNT(*) FROM agenda");
$prestasi = mysqli_query($connection, "SELECT COUNT(*) FROM prestasi");
$prestasi = mysqli_query($connection, "SELECT COUNT(*) FROM prestasi");

$total_fasilitas = mysqli_fetch_array($fasilitas)[0];
$total_berita = mysqli_fetch_array($berita)[0];
$total_agenda = mysqli_fetch_array($agenda)[0];
$total_prestasi = mysqli_fetch_array($prestasi)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Fasilitas</h4>
            </div>
            <div class="card-body">
              <?= $total_fasilitas ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Berita</h4>
            </div>
            <div class="card-body">
              <?= $total_berita ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Agenda</h4>
            </div>
            <div class="card-body">
              <?= $total_agenda ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Prestasi</h4>
            </div>
            <div class="card-body">
              <?= $total_prestasi ?>
            </div>
          </div>
        </div>
      </div>
    </