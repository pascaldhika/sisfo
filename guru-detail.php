<?php
require_once 'admin/helper/auth.php';
require_once 'admin/helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM guru WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php $page_title = "Detail Guru";
    include 'includes/head.php'; ?>

    <!-- Tambahkan CSS DataTables & Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="font-sans bg-gray-50 text-gray-800">

    <?php include 'includes/navbar.php'; ?>

    <!-- KONTEN UTAMA -->
    <main class="pt-28 pb-16 px-4 max-w-7xl mx-auto">

        <section class="max-w-4xl mx-auto mt-10 px-4">
            <h2 class="text-2xl font-bold text-center mb-10 text-blue-900">Detail Data Guru</h2>
            <div class="table-responsive">
                <table class="table table-hover w-200">
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_array($query)) :
                        ?>
                        <tr>
                            <td colspan="2" class="text-center">
                            <img src="admin/guru/uploads/<?= $data['foto']; ?>" 
                                alt="<?= $data['nama']; ?>" 
                                class="rounded shadow-sm d-block mx-auto"
                                style="width:200px; height:200px; object-fit:cover;">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>NUPTK</td>
                            <td>: <?= $data['nuptk'] ?></td>
                        </tr>
                        <tr>
                            <td>NRG</td>
                            <td>: <?= $data['nrg'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>: <?= $data['status'] ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>: <?= $data['jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Pangkat Golongan</td>
                            <td>: <?= $data['pangkat'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>: <?= $data['pendidikan'] ?></td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>: <?= $data['mata_pelajaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: <?= $data['agama'] ?></td>
                        </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-sm btn-info" href="data-guru.php">Kembali</a>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>