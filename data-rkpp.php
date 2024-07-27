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
if ($_SESSION["level"] == 1) {
    echo "<script>
    alert ('Anda tidak punya akses');
    document.location.href = 'login.php';
         </script>";
    exit;
}

$title = 'Dashboard';
include 'config/app.php';
include 'layout/header.php';

//Menampilkan Data rkpp
$rkpp_7a = select("SELECT * FROM rkpp_7a");


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
                                                        <?php
                                                        $no = 1;
                                                        $current_hari = "";
                                                        $rowspan_count = 6; // Jumlah baris per hari

                                                        foreach ($rkpp_7a as $key => $row) {
                                                            echo '<tr class="text-center">';
                                                            if ($key % $rowspan_count == 0) {
                                                                echo '<td rowspan="' . $rowspan_count . '">' . $no . '</td>';
                                                                echo '<td rowspan="' . $rowspan_count . '">' . $row['hari'] . '</td>';
                                                            }
                                                            echo '<td>' . $row['mapel'] . '</td>';
                                                            echo '<td><span class="btn btn-success btn-sm">' . $row['rp'] . '</span></td>';
                                                            echo '<td><span class="btn btn-primary btn-sm">' . $row['ts'] . '</span></td>';
                                                            if ($key % $rowspan_count == 0) {
                                                                echo '<td rowspan="' . $rowspan_count . '"><button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas"><i class="fas fa-edit"></i></button></td>';
                                                            }
                                                            echo '</tr>';
                                                            if ($key % $rowspan_count == $rowspan_count - 1) {
                                                                $no++;
                                                            }
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


<?php
include 'layout/footer.php';
?>