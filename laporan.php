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

$title = 'Data Tasmi';
include 'config/app.php';
include 'layout/header.php';


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Checklist Hafalan Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Checklist</li>
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
                        <!-- /.card-header -->
                        <!-- Main row -->
                        <div class="row">
                            <!-- CHECKLIST PROGRES SURAT HAFALAN -->
                            <section class="col-lg-6 connectedSortable">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="ion ion-clipboard mr-1"></i>
                                            <?php if ($_SESSION['level'] == 1) : ?>
                                                <h3 class="card-title">Checklist Progres Ananda <?= $_SESSION['nama']; ?></h3>
                                            <?php endif; ?>
                                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                                <h3 class="card-title">Laporan Progres Siswa</h3>
                                            <?php endif; ?>


                                        </h3>

                                        <div class="card-tools">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul class="todo-list" data-widget="todo-list">
                                            <li>
                                                <!-- drag handle -->
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <!-- checkbox -->
                                                <div class="icheck-success d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo1" id="checkboxSuccess3">
                                                    <label for="todoCheck1"></label>
                                                </div>
                                                <!-- todo text -->
                                                <span class="text">Surat Maryam</span>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </section>

                            <!-- CHECKLIST PROGRES JUZ HAFALAN -->
                            <section class="col-lg-6 connectedSortable">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="ion ion-clipboard mr-1"></i>
                                            <h3 class="card-title">Checklist Progres Juz Hafalan Siswa</h3>
                                        </h3>

                                        <div class="card-tools">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul class="todo-list" data-widget="todo-list">
                                            <li>
                                                <!-- drag handle -->
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <!-- checkbox -->
                                                <div class="icheck-success d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo1" id="checkboxSuccess3">
                                                    <label for="todoCheck1"></label>
                                                </div>
                                                <!-- todo text -->
                                                <span class="text">Juz 1</span>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>



<?php
include 'layout/footer.php';
?>