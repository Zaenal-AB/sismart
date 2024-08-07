<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- icon -->
    <link rel="icon" href="assets/img/logo-circle-web.png" type="image/png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admin/dist/css/adminlte.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Select CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.14/css/bootstrap-select.min.css" rel="stylesheet">



</head>

<?php
date_default_timezone_set('Asia/Makassar');
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://smpitanshol.com/index.html" class="nav-link">Sistem Informasi SMPIT Anak Sholeh Mataram (SiSmart)</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                    <!-- </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="assets/admin/index3.html" class="brand-link">
                <img src="assets/img/logo-smpit.jpg" alt="Logo SMPIT" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SiSMART</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- <div class="image">
                        <img src="assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> -->
                    <div class="info">
                        <a href="#" class="d-block">Ahlan <b><?= $_SESSION['nama']; ?></b></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-house"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-header">Al-Qur'an</li>
                        <li class="nav-item">
                            <a href="data-tilawah.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-book-open-reader"></i>
                                <p> Tilawah </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data-tahsin.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-book-open-reader"></i>
                                <p> Tahsin </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data-ziyadah.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-file-circle-plus"></i>
                                <p> Ziyadah </p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="data-murojaah.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-clipboard-list"></i>
                                <p>Murojaah</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="data-tasmi.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-clipboard-list"></i>
                                <p>Tasmi'</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="laporan.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-clipboard-list"></i>
                                <p>Checklist</p>
                            </a>
                        </li> -->
                        <!-- / END SIDEBAR AL QUR'AN -->

                        <!-- START KURIKULUM -->
                        <li class="nav-header">Kurikulum</li>
                        <li class="nav-item">
                            <a href="data-rkpp.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-house"></i>
                                <p>RKPP</p>
                            </a>
                        </li>
                      
                        <!-- END KURIKULUM -->

                        <!-- START SIDEBAR REWARD & PUNISHMENT -->

                        <li class="nav-header">Penghargaan & Pembinaan</li>
                        <li class="nav-item">
                            <a href="data-penghargaan.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-award"></i>
                                <p>Prestasi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shapes"></i>
                                <p> Pembinaan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="data-keterlambatan.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p>Keterlambatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data-point-siswa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekap Point Siswa</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- / END REWARD AND PUNISHMENT -->

                        <li class="nav-header">Akun</li>
                        <li class="nav-item">
                            <a href="data-akun.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-user-gear"></i>
                                <p> Pengaturan Akun</p>
                            </a>
                        </li>

                        <br>
                        <br>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon far fa-solid fa-right-from-bracket"></i>
                                <p>Logout</p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>