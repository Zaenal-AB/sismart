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

$title = 'Data Tilawah';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Tilawah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tilawah</li>
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
                                <h3 class="card-title">Tabel Mutabaah Tilawah Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Mutabaah Tilawah Siswa </h3>
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
                                        <th rowspan="2" class="text-center align-middle">No</th>
                                        <th rowspan="2" class="text-center align-middle">Tanggal</th>
                                        <th rowspan="2" class="text-center align-middle">Nama</th>
                                        <th rowspan="2" class="text-center align-middle">Kelas</th>
                                        <th colspan="2" class="text-center align-middle">Tilawah</th>
                                        <th rowspan="2" class="text-center align-middle">Catatan </th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th rowspan="2" class="text-center align-middle">aksi</th>
                                        <?php endif; ?>

                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle">Surat</th>
                                        <th class="text-center align-middle">Halaman</th>
                                    </tr>
                                </thead>
                                <tbody>

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