<?php

session_start();


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


<?php
include __DIR__ . '/../layout/footer2.php';
?>