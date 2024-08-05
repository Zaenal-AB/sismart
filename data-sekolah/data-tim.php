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
if ($_SESSION["level"] == 1 or $_SESSION["level"] == 2 ) {
    echo "<script>
    alert ('Anda tidak punya akses');
    document.location.href = 'login.php';
         </script>";
    exit;
}

$title = 'Data Waka';
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
                    <h1>Data Tim SMPIT Anak Sholeh Mataram</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="#">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="far fa-copy"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"><b>Hasil Rapat Tim</b></span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Siswa</span>
                            <span class="info-box-number">208</span>
                        </div>
                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a href="kelas.php">

                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Rombongan Kelas</span>
                                <span class="info-box-number">10</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a href="#">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Setting</span>
                                <span class="info-box-number"></span>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>

        </div>
    </section>
</div>


<?php
include __DIR__ . '/../layout/footer2.php';
?>