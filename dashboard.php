<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
    document.location.href = 'login.php';
         </script>";
    exit;
}

$title = 'Dashboard';
include 'layout/header.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Guru & Karyawan</span>
                            <span class="info-box-number">
                                30
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
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
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Rombongan Kelas</span>
                            <span class="info-box-number">10</span>
                        </div>
                    </div>
                </div>
                <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>

                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="setting.php">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Setting</span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </section>


    <!-- chat start -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title">Pengumuman</h3>

                    <div class="card-tools">
                        <span title="3 New Messages" class="badge badge-primary">3</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fas fa-comments"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Ustadz H. Fitrah Saputra</span>
                                <span class="direct-chat-timestamp float-right">19 Juli 2024 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="assets/img/logo-smpit.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Selamat datang di Sistem Informasi Siswa SMART (SiSMART)
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Ustadz Zaenal Abidin</span>
                                <span class="direct-chat-timestamp float-left">19 Juli 2024 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="assets/img/logo-smpit.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Tes cek sound
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Ustadz Muzanni</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="assets/img/logo-smpit.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Tes dari Tim Qur'an
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->


                    </div>
                    <!--/.direct-chat-messages-->

                </div>
                <?php if ($_SESSION['level'] == 3) : ?>
                    <div class="card-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-primary">Send</button>
                                </span>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>

            </div>
            <!--/.direct-chat -->
        </section>
        <!-- /.Left col -->
    <!-- chat end -->

</div>

<?php
include 'layout/footer.php';
?>