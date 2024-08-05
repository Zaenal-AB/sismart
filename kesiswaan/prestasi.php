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

$title = 'Prestasi Siswa';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//Menampilkan Data Prestasi
$data_prestasi = select("SELECT * FROM data_prestasi ORDER BY `data_prestasi`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_prestasi WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_prestasi`.`id` DESC");

//jika tombok tambah prestasi, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_prestasi($_POST) > 0) {
        echo "<script> alert('Catatan Prestasi Berhasil Ditambahkan')
        document.location.href = 'prestasi.php';
        </script>";
    } else {
        echo "<script> alert('Catatan Prestasi Gagal Ditambahkan')
        document.location.href = 'prestasi.php';
        </script>";
    }
}


//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_prestasi($_POST) > 0) {
        echo "<script> alert('Data Prestasi Berhasil Diubah')
        document.location.href = 'prestasi.php';
        </script>";
    } else {
        echo "<script> alert('Data Prestasi Gagal diubah')
        document.location.href = 'prestasi.php';

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
                    <h1>Catatan Prestasi Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Penghargaan</li>
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
                                <h3 class="card-title">Tabel Prestasi Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Prestasi Siswa </h3>
                            <?php endif; ?>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahPrestasi"><i class="fa-solid fa-circle-plus"></i> Tambah</button>
                                <?php endif; ?>
                            </div>

                            <table id="example2" class="table table-bordered table-striped select2bs4 select2">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Prestasi</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th class="text-center">Aksi </th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- Menampilkan seluruh data  -->
                                    <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_prestasi as $prestasi) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center" id="tanggal1"><?= date('d/m/Y | H:i', strtotime($prestasi['tanggal'])); ?></td>
                                                <td><?= $prestasi['nama']; ?></td>
                                                <td class="text-center"><?= $prestasi['prestasi']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahPrestasi<?= $prestasi['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusPrestasi<?= $prestasi['id']; ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $prestasi) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center"><?= date('d/m/Y | H:i', strtotime($prestasi['tanggal'])); ?></td>
                                                <td><?= $prestasi['nama']; ?></td>
                                                <td class="text-center"><?= $prestasi['Prestasi']; ?></td>
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


<!-- Modal Tambah Prestasi -->
<div class="modal fade" id="TambahPrestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="nama">Nama Siswa</label>
                    <select data-live-search="true" type="text" class="form-control selectpicker" id="nama" name="nama" required>
                        <option value="">-- Pilih Siswa --</option>
                        <?php foreach ($data_siswa as $siswa) : ?>
                            <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="catatan">Prestasi</label>
                    <textarea class="form-control" placeholder="Prestasi Siswa..." id="catatan" name="prestasi" style="height: 120px"></textarea>

                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Prestasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Hapus prestasi -->
<?php foreach ($data_prestasi as $prestasi) : ?>
    <div class="modal fade" id="HapusPrestasi<?= $prestasi['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan Prestasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data Prestasi <?= $prestasi['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="prestasi-hapus.php?id=<?= $prestasi['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Modal Ubah prestasi  -->
<?php foreach ($data_prestasi as $prestasi) : ?>
    <div class="modal fade" id="UbahPrestasi<?= $prestasi['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Prestasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $prestasi['id'] ?>">

                        <label for="nama">Nama Siswa</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1 selectpicker" id="nama" name="nama" value="<?= $prestasi['nama']; ?>" required>
                            <option value="<?= $prestasi['nama']; ?>"><?= $prestasi['nama']; ?></option>
                            <?php foreach ($data_siswa as $siswa) : ?>
                                <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="ubahprestasi">Prestasi</label>
                        <textarea class="form-control" placeholder="Ubah prestasi Siswa..." id="ubahprestasi" name="prestasi" style="height: 120px"><?= $prestasi['prestasi']; ?></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah prestasi</button>
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