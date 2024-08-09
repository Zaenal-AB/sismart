<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
    alert('Silahkan Anda Login Dahulu');
    document.location.href = '../login.php';
         </script>";
    exit;
}

// membatasi halaman sesuai user login
if ($_SESSION["level"] == 1) {
    echo "<script>
    alert ('Anda tidak punya akses');
    document.location.href = '../login.php';
         </script>";
    exit;
}

$title = 'Data Tilawah';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Pelaksanaan Tancap</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tancap</li>
                    </ol>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-header">

                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Laporan Pelaksanaan Tancap</h3>
                            <?php endif; ?>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahTilawah">Tambah Catatan</button>
                            <?php endif; ?>
                            <!-- post text -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">No</th>
                                        <th class="text-center align-middle">Nama Siswa</th>
                                        <th class="text-center align-middle">Kelas</th>
                                        <th class="text-center align-middle">Analisis Awal Masalah</th>
                                        <th class="text-center align-middle">Waktu Pelaksanaan</th>
                                        <th class="text-center align-middle">Hasil Klarifikasi & Pendalaman </th>
                                        <th class="text-center align-middle">Dokumentasi </th>
                                        <th class="text-center align-middle">Ket</th>
                                        <th class="text-center align-middle">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center align-middle">1</th>
                                        <th>Abidin</th>
                                        <th>VII-A</th>
                                        <th>Sering Ngopi di Kantin</th>
                                        <th>1 September 2024</th>
                                        <th>InsyaaAllah Aman</th>
                                        <th> <img src="img/1.jpg" width="100px" alt="photo"> </th>
                                        <th>Butuh RTL</th>
                                        <th>
                                            <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahPrestasi"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusPrestasi"><i class="fa-solid fa-trash"></i></button>

                                        </th>
                                    </tr>
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