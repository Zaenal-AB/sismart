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


// membatasi halaman sesuai user login
if ($_SESSION["level"] == 1 or $_SESSION["level"] == 2 ) {
    echo "<script>
    alert ('Anda tidak punya akses');
    document.location.href = 'login.php';
         </script>";
    exit;
}

$title = 'Dashboard';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//Menampilkan Data rkpp
$rkpp_7a = select("SELECT * FROM rkpp_7a");


//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubahrkpp'])) {
    if (ubah_rkpp($_POST) > 0) {
        echo "<script> 
        document.location.href = 'data-rkpp.php';
        </script>";
    } else {
        echo "<script> alert('Data RKPP Gagal diubah')
        document.location.href = 'data-rkpp.php';

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
                    <h3>RKPP</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">RKPP</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <!-- <h5 class="mb-2">Tabs in Cards</h5> -->

        <div class="row">
            <div class="col-12">
                <!-- Custom Tabs -->
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3">Kelas</h3>
                        <ul class="nav nav-pills mr-auto p-2">
                            <li class="nav-item"><a class="nav-link active" href="#viia" data-toggle="tab">7-A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#viib" data-toggle="tab">7-B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#viic" data-toggle="tab">7-C</a></li>
                            <li class="nav-item"><a class="nav-link" href="#viid" data-toggle="tab">7-D</a></li>
                            <li class="nav-item"><a class="nav-link" href="#viiia" data-toggle="tab">8-A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#viiib" data-toggle="tab">8-B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ixa" data-toggle="tab">9-A</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ixb" data-toggle="tab">9-B</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ixc" data-toggle="tab">9-C</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ixd" data-toggle="tab">9-D</a></li>

                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="viia">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas VII-A</h3>
                                                <a href="pdf-rkpp.php" target="_blank"> <button type="button" class="btn btn-danger float-sm-right">Cetak PDF</button> </a>

                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        $current_hari = "";
                                                        $rowspan_count = 6; // Jumlah baris per hari

                                                        foreach ($rkpp_7a as $key => $row) {
                                                            echo '<tr class="text-center">';
                                                            if ($key % $rowspan_count == 0) {
                                                                echo '<td rowspan="' . $rowspan_count . '">' . $no++ . '</td>';
                                                                echo '<td rowspan="' . $rowspan_count . '">' . $row['hari'] . '</td>';
                                                            }
                                                            echo '<td>' . $row['mapel'] . '</td>';
                                                            echo '<td><span class="btn btn-success btn-sm">' . $row['rp'] . '</span></td>';
                                                            echo '<td><span class="btn btn-primary btn-sm">' . $row['ts'] . '</span></td>';
                                                            echo '<td><button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahData' . $row['id'] . '"><i class="fas fa-edit"></i></button></td>';
                                                        }

                                                        ?>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="viib">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="viic">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="viid">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="viiia">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="viiib">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="ixa">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="ixb">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-B</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="ixc">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-C</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="ixd">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Tabel Rencana Kegiatan Pembelajaran Pekanan (RKPP) Kelas IX-D</h3>
                                            </div>
                                            <div class="card-body">
                                                <table id="example3" class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td rowspan="6">1</td>
                                                            <td rowspan="6">Senin</td>
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Tugas Rantai Makan</span></td>
                                                            <td rowspan="6">
                                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td>Matematika</td>
                                                            <td><span class="btn btn-success btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                            <td><span class="btn btn-primary btn-sm">Mendiskripsikan Rantai Makan</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-success mt-3 float-sm-right" data-toggle="modal" data-target="#validasi">Validasi Kurikulum</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- ./card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->

    </section>

</div>

<?php  ?>

<!-- Modal Ubah 7A  -->
<?php foreach ($rkpp_7a as $key => $row) : ?>
    <div class="modal fade" id="UbahData<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit RKPP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <label for="mapel">Mata Pelajaran</label>
                        <select type="text" class="form-control" id="mapel" name="mapel" required>
                            <?php $mapel = $row['mapel']; ?>
                            <option value="Al-Qur'an" <?= $mapel == "Al-Qur'an" ? 'selected' : null ?>>Al-Qur'an</option>
                            <option value="Pendidikan Agama Islam" <?= $mapel == 'Pendidikan Agama Islam' ? 'selected' : null ?>>Pendidikan Agama Islam</option>
                            <option value="Matematika" <?= $mapel == 'Matematika' ? 'selected' : null ?>>Matematika</option>
                            <option value="Ilmu Pengetahuan Alam (IPA)" <?= $mapel == 'Ilmu Pengetahuan Alam (IPA)' ? 'selected' : null ?>>Ilmu Pengetahuan Alam (IPA)</option>
                            <option value="Ilmu Pengetahuan Sosial (IPS)" <?= $mapel == 'Ilmu Pengetahuan Sosial (IPS)' ? 'selected' : null ?>>Ilmu Pengetahuan Sosial (IPS)</option>
                            <option value="Bahasa Indonesia" <?= $mapel == 'Bahasa Indonesia' ? 'selected' : null ?>>Bahasa Indonesia</option>
                            <option value="Bahasa Inggris" <?= $mapel == 'Bahasa Inggris' ? 'selected' : null ?>>Bahasa Inggris</option>
                            <option value="BPI" <?= $mapel == 'BPI' ? 'selected' : null ?>>BPI</option>
                            <option value="PPKn" <?= $mapel == 'PPKn' ? 'selected' : null ?>>PPKn</option>
                            <option value="Informatika" <?= $mapel == 'Informatika' ? 'selected' : null ?>>Informatika</option>
                            <option value="PJOK" <?= $mapel == 'PJOK' ? 'selected' : null ?>>PJOK</option>
                            <option value="Bahasa Arab (Muatan Lokal)" <?= $mapel == 'Bahasa Arab (Muatan Lokal)' ? 'selected' : null ?>>Bahasa Arab (Muatan Lokal)</option>
                            <option value="Bimbingan Konseling (BK)" <?= $mapel == 'Bimbingan Konseling (BK)' ? 'selected' : null ?>>Bimbingan Konseling (BK)</option>
                            <option value="P5" <?= $mapel == 'P5' ? 'selected' : null ?>>P5</option>
                            <option value="Pemantapan SKL JSIT" <?= $mapel == 'Pemantapan SKL JSIT' ? 'selected' : null ?>>Pemantapan SKL JSIT</option>
                            <option value="Upacara / Upgrading Bahasa / Senam JSIT" <?= $mapel == 'Upacara / Upgrading Bahasa / Senam JSIT' ? 'selected' : null ?>>Upacara / Upgrading Bahasa / Senam JSIT</option>
                        </select>

                        <label for="rp">Rencana Pembelajaran</label>
                        <textarea maxlength="99" class="form-control" placeholder="Rencana Pembelajaran..." id="rp" name="rp" style="height: 100px"><?= $row['rp']; ?></textarea>

                        <label for="ts">Tugas Siswa Dirumah</label>
                        <textarea maxlength="99" class="form-control" placeholder="Tugas Siswa..." id="ts" name="ts" style="height: 100px"><?= $row['ts']; ?></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubahrkpp" class="btn btn-primary">Edit RKPP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<?php
include __DIR__ . '/../layout/footer2.php';
?>