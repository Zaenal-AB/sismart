<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
    document.location.href = 'login.php';
         </script>";
    exit;
}

// membatasi halaman sesuai user login
if ($_SESSION["level"] == 3 and $_SESSION["level"] == 2) {
    echo "<script>
    alert ('Anda tidak punya akses');
    document.location.href = 'login.php';
         </script>";
    exit;
}

$title = 'Input Disiplin';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';


//Menampilkan Data Keterlambatan
$data_keterlambatan = select("SELECT * FROM data_keterlambatan ORDER BY `data_keterlambatan`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa ORDER BY `data_siswa`.`nama` ASC");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_keterlambatan WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_keterlambatan`.`id` DESC");

//jika tombok tambah keterlambatan, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_keterlambatan($_POST) > 0) {
        echo "<script>
        document.location.href = 'keterlambatan.php';
        </script>";
    } else {
        echo "<script> alert('Catatan keterlambatan Gagal Ditambahkan')
        document.location.href = 'keterlambatan.php';
        </script>";
    }
}


//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_keterlambatan($_POST) > 0) {
        echo "<script>
        document.location.href = 'disiplin.php';
        </script>";
    } else {
        echo "<script> alert('Data Keterlambatan Gagal diubah')
        document.location.href = 'disiplin.php';

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
                    <h1>Disiplin Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Input Disiplin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6 mx-auto">
                    <!-- general form elements -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Input Disiplin Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <select data-live-search="true" type="text" class="form-control selectpicker" id="nama" name="nama" required>
                                        <option value="">-- Pilih Siswa --</option>
                                        <?php foreach ($data_siswa as $siswa) : ?>
                                            <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="alasan">Alasan Terlambat</label>
                                    <select type="text" class="form-control" id="alasan" name="alasan" required>
                                        <option value="">-- Pilih Alasan Terlambat --</option>
                                        <option value="Kesiangan">Kesiangan</option>
                                        <option value="Kondisi Cuaca">Kondisi Cuaca</option>
                                        <option value="Kemacetan Lalu Lintas">Kemacetan Lalu Lintas</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tindakan">Tindakan</label>
                                    <select type="text" class="form-control" id="tindakan" name="tindakan" required>
                                        <option value="">-- Pilih Tindakan --</option>
                                        <option value="Memungungut sampah non organik">Tindakan 1</option>
                                        <option value="Memungut 20 sampah non organik">Tindakan 2</option>
                                        <option value="Tilawah 1 halaman dalam waktu 5 menit">Tindakan 3</option>
                                        <option value="Tilawah 2 halaman dalam waktu 8 menit">Tindakan 4</option>
                                        <option value="Tilawah 3 halaman dan membersihkan toilet">Tindakan 5</option>
                                    </select>
                                </div>
                                <small style="color: red;">

                                    Keterangan Tindakan: <br>
                                    Pelanggaran 1 : Memungungut sampah non organik <br>
                                    Pelanggaran 2 : Memungut 20 sampah non organik <br>
                                    Pelanggaran 3 : Tilawah 1 halaman dalam waktu 5 menit <br>
                                    Pelanggaran 4 : Tilawah 2 halaman dalam waktu 8 menit <br>
                                    Pelanggaran 5 : Tilawah 3 halaman dan membersihkan toilet
                                </small>
                                <div class="modal-footer">
                                    <a href="keterlambatan.php" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" name="tambah" class="btn btn-primary">Tambah C. Keterlambatan</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>




<?php
include __DIR__ . '/../layout/footer2.php';

?>