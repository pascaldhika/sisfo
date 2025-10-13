<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM siswa WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php $page_title = "Detail Siswa";
    include 'includes/head.php'; ?>

    <!-- Tambahkan CSS DataTables & Bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="font-sans bg-gray-50 text-gray-800">

    <?php include 'includes/navbar.php'; ?>

    <!-- KONTEN UTAMA -->
    <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

        <section class="max-w-4xl mx-auto mt-10 px-4">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Detail Data Peserta Didik</h2>
            <div class="table-responsive">
                <table class="table table-hover w-100" id="table-1">
                    <thead style="display: none;">
                        <tr>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_array($query)) :
                        ?>
                        <tr>
                            <td>Nama</td>
                            <td>: <?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>: <?= $data['nisn'] ?></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>: <?= $data['nis'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: <?= $data['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: <?= $data['agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>: <?= $data['kota'] ?></td>
                        </tr>
                        <tr>
                            <td>Kodepos</td>
                            <td>: <?= $data['kode_pos'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>: <?= $data['kelas'] ?></td>
                        </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-sm btn-info" href="data-siswa.php">Kembali</a>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Tambahkan Script jQuery dan DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#table-1').DataTable({
            paging: false,
            searching: false,
            info: false,
            lengthChange: false,
            ordering: false,
            responsive: false,
            language: {
                zeroRecords: "Data tidak ditemukan",
            }
        });
        });
    </script>

</body>

</html>