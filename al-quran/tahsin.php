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

$title = 'Data Tahsin';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//Menampilkan Data Tahsin
$data_tahsin = select("SELECT * FROM data_tahsin ORDER BY `data_tahsin`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa ORDER BY `data_siswa`.`nama` ASC");
//Menampilkan Data Kelas
$data_kelas = select("SELECT * FROM data_kelas ORDER BY `data_kelas`.`kelas` ASC");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_tahsin WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_tahsin`.`id` DESC");
$data_byguru = select("SELECT * FROM data_tahsin WHERE guru = '{$_SESSION['nama']}' ORDER BY `data_tahsin`.`id` DESC");

//jika tombok tambah tahsin, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_tahsin($_POST) > 0) {
        echo "<script>
        document.location.href = 'tahsin.php';
        </script>";
    } else {
        echo "<script>
        alert('Catatan Tahsin Gagal Ditambahkan')
        document.location.href = 'tahsin.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_tahsin($_POST) > 0) {
        echo "<script> 
        document.location.href = 'tahsin.php';
        </script>";
    } else {
        echo "<script> alert('Data Tahsin Gagal diubah')
        document.location.href = 'tahsin.php';

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
                    <h1>Data Tahsin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tahsin</li>
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
                                <h3 class="card-title">Tabel Mutabaah Tahsin Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Mutabaah Tahsin Siswa </h3>
                            <?php endif; ?>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if ($_SESSION['level'] == 1) : ?>
                                <p>
                                    Tabel berikut berisi informasi siswa yang mengikuti program tahsin. Program tahsin adalah program pembelajaran Al-Qur'an yang berfokus pada peningkatan kemampuan membaca Al-Qur'an dengan tajwid yang benar.
                                </p>
                            <?php endif; ?>

                            <div class="row">
                                <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahTahsin"><i class="fa-solid fa-circle-plus"></i> Tambah Data Tahsin</button>
                                <?php endif; ?>
                            </div>

                            <table id="example1" class="table table-bordered table-striped select2bs4 select2">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">Catatan Tahsin</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Pembimbing</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th class="text-center">Aksi </th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- Menampilkan seluruh data  -->
                                    <?php if ($_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_tahsin as $tahsin) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center" id="tanggal1"><?= date('d/m/Y | H:i', strtotime($tahsin['tanggal'])); ?></td>
                                                <td><?= $tahsin['nama']; ?></td>
                                                <td class="text-center"><?= $tahsin['kelas']; ?></td>
                                                <td><?= $tahsin['catatan']; ?></td>
                                                <td class="text-center"><?= $tahsin['keterangan']; ?></td>
                                                <td class="text-center"><?= $tahsin['guru']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahTahsin<?= $tahsin['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusTahsin<?= $tahsin['id']; ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <!-- Menampilkan seluruh sebagian/siswa  -->
                                    <?php elseif ($_SESSION['level'] == 2) : ?>
                                        <?php
                                        foreach ($data_byguru as $tahsin) :
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center" id="tanggal1"><?= date('d/m/Y | H:i', strtotime($tahsin['tanggal'])); ?></td>
                                                <td><?= $tahsin['nama']; ?></td>
                                                <td class="text-center"><?= $tahsin['kelas']; ?></td>
                                                <td><?= $tahsin['catatan']; ?></td>
                                                <td class="text-center"><?= $tahsin['keterangan']; ?></td>
                                                <td class="text-center"><?= $tahsin['guru']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahTahsin<?= $tahsin['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusTahsin<?= $tahsin['id']; ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach;
                                        ?>

                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $tahsin) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center"><?= date('d/m/Y | H:i', strtotime($tahsin['tanggal'])); ?></td>
                                                <td><?= $tahsin['nama']; ?></td>
                                                <td class="text-center"><?= $tahsin['kelas']; ?></td>
                                                <td><?= $tahsin['catatan']; ?></td>
                                                <td class="text-center"><?= $tahsin['keterangan']; ?></td>
                                                <td class="text-center"><?= $tahsin['guru']; ?></td>
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

<!-- Modal Tambah Tahsin -->
<div class="modal fade" id="TambahTahsin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Tahsin</h5>
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

                    <label for="kelas">Kelas</label>
                    <select data-live-search="true" type="text" class="form-control" id="kelas" name="kelas" required>
                        <option value="">-- Pilih Kelas --</option>
                        <?php foreach ($data_kelas as $kelas) : ?>
                            <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="catatan">Catatan Tahisn</label>
                    <textarea class="form-control" placeholder="Catatan tahsin disini..." id="catatan" name="catatan" style="height: 200px"></textarea>

                    <label for="keterangan">Keterangan</label>
                    <select type="text" class="form-control" id="keterangan" name="keterangan" required>
                        <option value="">-- Pilih Keterangan --</option>
                        <option value="Setor">Setor</option>
                        <option value="Tidak Setor">Tidak Setor</option>
                    </select>

                    <input type="hidden" name="guru" value="<?= ($_SESSION['nama']) ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah C. Tahsin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Tahsin -->
<?php foreach ($data_tahsin as $tahsin) : ?>
    <div class="modal fade" id="HapusTahsin<?= $tahsin['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan Tahsin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data Tahsin <?= $tahsin['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="tahsin-hapus.php?id=<?= $tahsin['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>




<?php
include __DIR__ . '/../layout/footer2.php';
?>