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

//Menampilkan Data Kelas
$data_kelas = select("SELECT * FROM data_kelas ORDER BY `data_kelas`.`kelas` ASC");

//jika tombok tambah kelas, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_kelas($_POST) > 0) {
        echo "<script>
        document.location.href = 'kelas.php';
        </script>";
    } else {
        echo "<script> alert('Siswa Gagal Ditambahkan')
        document.location.href = 'kelas.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_kelas($_POST) > 0) {
        echo "<script>
        document.location.href = 'kelas.php';
        </script>";
    } else {
        echo "<script> alert('Data Siswa Gagal diubah')
      ;
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
                                <span class="info-box-text">kelas</span>
                                <span class="info-box-number"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kelas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_kelas as $kelas) : ?>
                                        <tr class="text-center">
                                            <td><?= $no++; ?></td>
                                            <td><?= $kelas['kelas']; ?></td>
                                            <td><span class="btn btn-success btn-sm"><?= $kelas['js']; ?> siswa</span></td>
                                            <td>
                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKelas<?= $kelas['id']; ?>"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusKelas<?= $kelas['id']; ?>"><i class="fas fa-minus"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#TambahKelas">Tambah</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal Tambah -->
    <div class="modal fade" id="TambahKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>

                        <label for="js">Jumlah Siswa</label>
                        <input type="number" class="form-control" id="js" name="js" required>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Kelas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <?php foreach ($data_kelas as $kelas) : ?>
        <div class="modal fade" id="HapusKelas<?= $kelas['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Ingin Menghapus Data Kelas Berikut ? </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <a href="kelas-hapus.php?id=<?= $kelas['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal Ubah  -->
    <?php foreach ($data_kelas as $kelas) : ?>
        <div class="modal fade" id="UbahKelas<?= $kelas['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $kelas['id'] ?>">

                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $kelas['kelas']; ?>" required>

                            <label for="js">Jumlah Siswa</label>
                            <input type="text" class="form-control" id="js" name="js" value="<?= $kelas['js']; ?>" required>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" name="ubah" class="btn btn-primary">Ubah Kelas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


</div>

<?php
include __DIR__ . '/../layout/footer2.php';
?>