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

$title = 'Data Keterlambatan';
include 'config/app.php';
include 'layout/header.php';

//Menampilkan Data Keterlambatan
$data_keterlambatan = select("SELECT * FROM data_keterlambatan ORDER BY `data_keterlambatan`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_keterlambatan WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_keterlambatan`.`id` DESC");


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Catatan Keterlambatan Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Keterlambatan</li>
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
                                <h3 class="card-title">Tabel Keterlambatan Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Keterlambatan Siswa </h3>
                            <?php endif; ?>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahKeterlambatan"><i class="fa-solid fa-circle-plus"></i> Tambah</button>
                                <?php endif; ?>

                                <div class="col">
                                    <form action="" method="post" class="form-inline">
                                        <input type="date" name="tgl_mulai" class="form-control ml-3">
                                        <input type="date" name="tgl_akhir" class="form-control ml-3">
                                        <button type="submit" name="filter_tgl" class="btn btn-info ml-3">Filter</button>

                                    </form>
                                </div>

                            </div>

                            <table id="example1" class="table table-bordered table-striped select2bs4 select2">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kedatangan</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Alasan Terlambat</th>
                                        <th class="text-center">Tindakan</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th class="text-center">Aksi </th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- Menampilkan seluruh data  -->
                                    <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_keterlambatan as $keterlambatan) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center" id="tanggal1"><?= date('d/m/Y | H:i', strtotime($keterlambatan['tanggal'])); ?></td>
                                                <td><?= $keterlambatan['nama']; ?></td>
                                                <td class="text-center"><?= $keterlambatan['alasan']; ?></td>
                                                <td><?= $keterlambatan['tindakan']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahKeterlambatan<?= $keterlambatan['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusKeterlambatan<?= $keterlambatan['id']; ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $keterlambatan) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center"><?= date('d/m/Y | H:i', strtotime($keterlambatan['tanggal'])); ?></td>
                                                <td><?= $keterlambatan['nama']; ?></td>
                                                <td class="text-center"><?= $keterlambatan['alasan']; ?></td>
                                                <td><?= $keterlambatan['tindakan']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- Modal Tambah Keterlambatan -->
<div class="modal fade" id="TambahKeterlambatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Keterlambatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="nama">Nama Siswa</label>
                    <select data-live-search="true" type="text" class="form-control" id="nama" name="nama" required>
                        <option value="">-- Pilih Siswa --</option>
                        <?php foreach ($data_siswa as $siswa) : ?>
                            <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="catatan">Alasan Terlambat</label>
                    <textarea class="form-control" placeholder="Alasan Keterlambatan disini..." id="catatan" name="alasan" style="height: 120px"></textarea>

                    <label for="catatan">Tindakan</label>
                    <textarea class="form-control" placeholder="Catatan Hukuman Keterlambatan disini..." id="catatan" name="tindakan" style="height: 120px"></textarea>


                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah C. Keterlambatan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>