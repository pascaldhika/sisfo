<?php
session_start();

function isLogin()
{
  if (!isset($_SESSION['login'])) {
    header('Location: ../index.php');
  }
}

function limitText($text, $limit = 120, $suffix = '...')
{
  $text = strip_tags($text); // hapus HTML tag
  if (strlen($text) <= $limit) return $text;
  return substr($text, 0, $limit) . $suffix;
}

function tanggal_indo($tanggal)
{
  $bulan = [
    1 => 'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  ];
  $tgl = explode('-', $tanggal);
  // Format input: YYYY-MM-DD
  return (int)$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' ' . $tgl[0];
}
