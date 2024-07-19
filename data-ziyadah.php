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

$title = 'Data Ziyadah';
include 'config/app.php';
include 'layout/header.php';


//Menampilkan Data Ziyadah
$data_ziyadah = select("SELECT * FROM data_ziyadah ORDER BY `data_ziyadah`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa ORDER BY `data_siswa`.`nama` ASC");
//Menampilkan Data Kelas
$data_kelas = select("SELECT * FROM data_kelas ORDER BY `data_kelas`.`kelas` ASC");
//Menampilkan Data Juz
$data_surat = select("SELECT * FROM data_surat");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_ziyadah WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_ziyadah`.`id` DESC");
$data_byguru = select("SELECT * FROM data_ziyadah WHERE guru = '{$_SESSION['nama']}' ORDER BY `data_ziyadah`.`id` DESC");



//jika tombok tambah ziyadah, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_ziyadah($_POST) > 0) {
        echo "<script> alert('Catatan Ziyadah Berhasil Ditambahkan')
        document.location.href = 'data-ziyadah.php';
        </script>";
    } else {
        echo "<script> alert('Catatan Ziyadah Gagal Ditambahkan')
        document.location.href = 'data-ziyadah.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_ziyadah($_POST) > 0) {
        echo "<script> 
        document.location.href = 'data-ziyadah.php';
        </script>";
    } else {
        echo "<script> alert('Data Ziyadah Gagal diubah')
        document.location.href = 'data-ziyadah.php';

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
                    <h1>Data Ziyadah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Ziyadah</li>
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
                                <h3 class="card-title">Tabel Mutabaah Ziyadah Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Mutabaah Ziyadah Siswa </h3>
                            <?php endif; ?>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahZiyadah">Tambah Catatan</button>
                            <?php endif; ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center align-middle">No</th>
                                        <th rowspan="2" class="text-center align-middle">Tanggal</th>
                                        <th rowspan="2" class="text-center align-middle">Nama</th>
                                        <th rowspan="2" class="text-center align-middle">Kelas</th>
                                        <th colspan="2" class="text-center align-middle">Ziyadah</th>
                                        <th rowspan="2" class="text-center align-middle">Catatan </th>
                                        <th rowspan="2" class="text-center align-middle">Ket</th>
                                        <th rowspan="2" class="text-center align-middle">Pembimbing</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th rowspan="2" class="text-center align-middle">aksi</th>
                                        <?php endif; ?>

                                    </tr>
                                    <tr>
                                        <th class="text-center align-middle">Surat</th>
                                        <th class="text-center align-middle">ayat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- menampilkan seluruh data -->
                                    <?php if ($_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_ziyadah as $ziyadah) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($ziyadah['tanggal'])); ?></td>
                                                <td class="text-center"><?= $ziyadah['nama']; ?></td>
                                                <td class="text-center"><?= $ziyadah['kelas']; ?></td>
                                                <td class="text-center"><?= $ziyadah['surat']; ?></td>
                                                <td class="text-center"><?= $ziyadah['ayat']; ?></td>
                                                <td><?= $ziyadah['catatan']; ?></td>
                                                <td class="text-center"><?= $ziyadah['keterangan']; ?></td>
                                                <td class="text-center"><?= $ziyadah['guru']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahZiyadah<?= $ziyadah['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusZiyadah<?= $ziyadah['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                        <!-- Menampilkan seluruh sebagian/siswa  -->
                                    <?php elseif ($_SESSION['level'] == 2) : ?>
                                        <?php foreach ($data_byguru as $ziyadah) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($ziyadah['tanggal'])); ?></td>
                                                <td class="text-center"><?= $ziyadah['nama']; ?></td>
                                                <td class="text-center"><?= $ziyadah['kelas']; ?></td>
                                                <td class="text-center"><?= $ziyadah['surat']; ?></td>
                                                <td class="text-center"><?= $ziyadah['ayat']; ?></td>
                                                <td><?= $ziyadah['catatan']; ?></td>
                                                <td class="text-center"><?= $ziyadah['keterangan']; ?></td>
                                                <td class="text-center"><?= $ziyadah['guru']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahZiyadah<?= $ziyadah['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusZiyadah<?= $ziyadah['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $ziyadah) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($ziyadah['tanggal'])); ?></td>
                                                <td class="text-center"><?= $ziyadah['nama']; ?></td>
                                                <td class="text-center"><?= $ziyadah['kelas']; ?></td>
                                                <td class="text-center"><?= $ziyadah['surat']; ?></td>
                                                <td class="text-center"><?= $ziyadah['ayat']; ?></td>
                                                <td><?= $ziyadah['catatan']; ?></td>
                                                <td class="text-center"><?= $ziyadah['keterangan']; ?></td>
                                                <td class="text-center"><?= $ziyadah['guru']; ?></td>
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


<!-- Modal Tambah Ziyadah -->
<div class="modal fade" id="TambahZiyadah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Ziyadah</h5>
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

                    <div class="row">
                        <div class="col">
                            <label for="kelas">Kelas</label>
                            <select data-live-search="true" type="text" class="form-control" id="kelas" name="kelas" required>
                                <option value="">-- Pilih Kelas --</option>
                                <?php foreach ($data_kelas as $kelas) : ?>
                                    <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="keterangan">Keterangan</label>
                            <select type="text" class="form-control" id="keterangan" name="keterangan" required>
                                <option value="">-- Pilih Keterangan --</option>
                                <option value="Setor">Setor</option>
                                <option value="Tidak Setor">Tidak Setor</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="surat">Surat</label>
                            <select data-live-search="true" type="text" class="form-control" id="surat" name="surat" required>
                                <option value="">-- Pilih Surat --</option>
                                <?php foreach ($data_surat as $surat) : ?>
                                    <option value="<?= $surat['surat']; ?>"><?= $surat['surat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="ayat">Ayat</label>
                            <input data-live-search="true" type="text" class="form-control" id="ayat" name="ayat"></input>
                        </div>
                    </div>
                    <label for="catatan">Catatan Ziyadah</label>
                    <textarea class="form-control" placeholder="Catatan ziyadah disini..." id="catatan" name="catatan" style="height: 200px"></textarea>

                    <input type="hidden" name="guru" value="<?= ($_SESSION['nama']) ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah C. Ziyadah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus ziyadah -->
<?php foreach ($data_ziyadah as $ziyadah) : ?>
    <div class="modal fade" id="HapusZiyadah<?= $ziyadah['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan Ziyadah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data Ziyadah <?= $ziyadah['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="hapus-ziyadah.php?id=<?= $ziyadah['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Ubah ziyadah  -->
<?php foreach ($data_ziyadah as $ziyadah) : ?>
    <div class="modal fade" id="UbahZiyadah<?= $ziyadah['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit ziyadah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">

                        <input type="hidden" name="id" value="<?= $ziyadah['id'] ?>">

                        <label for="nama">Nama Siswa</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1" id="nama" name="nama" value="<?= $ziyadah['nama']; ?>" required>
                            <option value="<?= $ziyadah['nama']; ?>"><?= $ziyadah['nama']; ?></option>
                            <?php foreach ($data_siswa as $siswa) : ?>
                                <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <div class="row">
                            <div class="col">
                                <label for="kelas">Kelas</label>
                                <select data-live-search="true" type="text" class="form-control  mb-1" id="kelas" name="kelas" value="<?= $ziyadah['kelas']; ?>" required>
                                    <option value="<?= $ziyadah['kelas']; ?>"><?= $ziyadah['kelas']; ?></option>
                                    <?php foreach ($data_kelas as $kelas) : ?>
                                        <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="keterangan">Keterangan</label>
                                <select type="text" class="form-control" id="keterangan" name="keterangan" required>
                                    <?php $keterangan = $ziyadah['keterangan']; ?>
                                    <option value="Setor" <?= $keterangan == 'Setor' ? 'selected' : null ?>>Setor</option>
                                    <option value="Tidak Setor" <?= $keterangan == 'Tidak Setor' ? 'selected' : null ?>>Tidak Setor</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="surat">Surat</label>
                                <select data-live-search="true" type="text" class="form-control  mb-1" id="surat" name="surat" value="<?= $ziyadah['surat']; ?>" required>
                                    <option value="<?= $ziyadah['surat']; ?>"><?= $ziyadah['surat']; ?></option>
                                    <?php foreach ($data_surat as $surat) : ?>
                                        <option value="<?= $surat['surat']; ?>"><?= $surat['surat']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="ayat">Ayat</label>
                                <input data-live-search="true" value="<?= $ziyadah['ayat']; ?>" placeholder="contoh: 01-13" type="text" class="form-control" id="ayat" name="ayat"></input>
                            </div>
                        </div>
                        <label for="catatan">Catatan Ziyadah</label>
                        <textarea class="form-control" placeholder="Catatan ziyadah disini..." id="catatan" name="catatan" style="height: 100px"><?= $ziyadah['catatan']; ?></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah C. Ziyadah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<?php
include 'layout/footer.php';
?>