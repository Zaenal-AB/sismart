<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
    alert('Silahkan Anda Login Dahulu');
    document.location.href = 'login.php';
         </script>";
    exit;
}

$title = 'Data Keterlambatan';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//Menampilkan Data Keterlambatan
$data_keterlambatan = select("SELECT * FROM data_keterlambatan ORDER BY `data_keterlambatan`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa ORDER BY `data_siswa`.`nama` ASC");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_keterlambatan WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_keterlambatan`.`id` DESC");

//jika tombok tambah keterlambatan, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_keterlambatan($_POST) > 0) {
        echo "<script>
        document.location.href = 'keterlambatan.php';
        </script>";
    } else {
        echo "<script> alert('Catatan keterlambatan Gagal Ditambahkan')
        document.location.href = 'keterlambatan.php';
        </script>";
    }
}


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Catatan Keterlambatan Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Keterlambatan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <?php if ($_SESSION['level'] == 1) : ?>
                                <h3 class="card-title">Tabel Keterlambatan Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Keterlambatan Siswa </h3>
                            <?php endif; ?>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                    <a href="tambah-keterlambatan.php"><button class="btn btn-primary mb-1"><i class="fa-solid fa-circle-plus"></i> Tambah</button>
                                    </a>
                                <?php endif; ?>

                            </div>

                            <table id="example1" class="table table-bordered table-striped select2bs4 select2">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kedatangan</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Alasan Terlambat</th>
                                        <th class="text-center">Tindakan</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th class="text-center">Aksi </th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- Menampilkan seluruh data  -->
                                    <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_keterlambatan as $keterlambatan) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center" id="tanggal1"><?= date('d/m/Y | H:i', strtotime($keterlambatan['tanggal'])); ?></td>
                                                <td><?= $keterlambatan['nama']; ?></td>
                                                <td class="text-center"><?= $keterlambatan['alasan']; ?></td>
                                                <td><?= $keterlambatan['tindakan']; ?></td>
                                                <td class="text-center">
                                                    <!-- <a href="ubah-keterlambatan.php?id=<?= $Keterlambatan['id']; ?>" class="btn btn-success">Ubah</a> -->
                                                    <a href="hapus-keterlambatan.php?id=<?= $keterlambatan['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Keterlambatan Akan DiHapus?') ">Hapus</a>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $keterlambatan) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center"><?= date('d/m/Y | H:i', strtotime($keterlambatan['tanggal'])); ?></td>
                                                <td><?= $keterlambatan['nama']; ?></td>
                                                <td class="text-center"><?= $keterlambatan['alasan']; ?></td>
                                                <td><?= $keterlambatan['tindakan']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include __DIR__ . '/../layout/footer2.php';
?>