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

$title = 'Data Murojaah';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//Menampilkan Data Murojaah
$data_murojaah = select("SELECT * FROM data_murojaah ORDER BY `data_murojaah`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa ORDER BY `data_siswa`.`nama` ASC");
//Menampilkan Data Kelas
$data_kelas = select("SELECT * FROM data_kelas ORDER BY `data_kelas`.`kelas` ASC");
//Menampilkan Data Juz
$data_juz = select("SELECT * FROM data_juz");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_murojaah WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_murojaah`.`id` DESC");
$data_byguru = select("SELECT * FROM data_murojaah WHERE guru = '{$_SESSION['nama']}' ORDER BY `data_murojaah`.`id` DESC");


//jika tombok tambah murojaah, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_murojaah($_POST) > 0) {
        echo "<script> 
        document.location.href = 'murojaah.php';
        </script>";
    } else {
        echo "<script> alert('Catatan Murojaah Gagal Ditambahkan')
        document.location.href = 'murojaah.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_murojaah($_POST) > 0) {
        echo "<script>
        document.location.href = 'murojaah.php';
        </script>";
    } else {
        echo "<script> alert('Data Murojaah Gagal diubah')
        document.location.href = 'murojaah.php';

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
                    <h1>Data Murojaah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Murojaah</li>
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
                                <h3 class="card-title">Tabel Mutabaah Murojaah Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Mutabaah Murojaah Siswa </h3>
                            <?php endif; ?>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#Tambahmurojaah">Tambah Catatan</button>
                            <?php endif; ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">No</th>
                                        <th class="text-center align-middle">Tanggal</th>
                                        <th class="text-center align-middle">Nama</th>
                                        <th class="text-center align-middle">Kelas</th>
                                        <th class="text-center align-middle">Juz</th>
                                        <th class="text-center align-middle">Catatan</th>
                                        <th class="text-center align-middle">Pembimbing</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th class="text-center align-middle">Aksi</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- menampilkan seluruh data -->
                                    <?php if ($_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_murojaah as $murojaah) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($murojaah['tanggal'])); ?></td>
                                                <td class="align-middle"><?= $murojaah['nama']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['kelas']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['juz']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['predikat']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['guru']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#Ubahmurojaah<?= $murojaah['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#Hapusmurojaah<?= $murojaah['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <!-- Menampilkan seluruh sebagian/siswa  -->
                                    <?php elseif ($_SESSION['level'] == 2) : ?>
                                        <?php
                                        foreach ($data_byguru as $murojaah) :
                                        ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($murojaah['tanggal'])); ?></td>
                                                <td class="align-middle"><?= $murojaah['nama']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['kelas']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['juz']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['predikat']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['guru']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#Ubahmurojaah<?= $murojaah['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#Hapusmurojaah<?= $murojaah['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $murojaah) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($murojaah['tanggal'])); ?></td>
                                                <td class="align-middle"><?= $murojaah['nama']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['kelas']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['juz']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['predikat']; ?></td>
                                                <td class="text-center align-middle"><?= $murojaah['guru']; ?></td>
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


<!-- Modal Tambah murojaah -->
<div class="modal fade" id="Tambahmurojaah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Murojaah</h5>
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

                    <label for="juz">Juz</label>
                    <select data-live-search="true" type="text" class="form-control selectpicker" id="juz" name="juz" required>
                        <option value="">-- Pilih Juz --</option>
                        <?php foreach ($data_juz as $juz) : ?>
                            <option value="<?= $juz['juz']; ?>"><?= $juz['juz']; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="predikat">Catatan Murojaah</label>
                    <textarea class="form-control" placeholder="Catatan murojaah disini..." id="predikat" name="predikat" style="height: 120px"></textarea>

                    <input type="hidden" name="guru" value="<?= ($_SESSION['nama']) ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah C. murojaah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus murojaah -->
<?php foreach ($data_murojaah as $murojaah) : ?>
    <div class="modal fade" id="Hapusmurojaah<?= $murojaah['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan murojaah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data murojaah <?= $murojaah['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="murojaah-hapus.php?id=<?= $murojaah['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Ubah murojaah  -->
<!-- <?php foreach ($data_murojaah as $murojaah) : ?>
    <div class="modal fade" id="Ubahmurojaah<?= $murojaah['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Murojaah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">

                        <input type="hidden" name="id" value="<?= $murojaah['id'] ?>">

                        <label for="nama">Nama Siswa</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1 selectpicker" id="nama" name="nama" value="<?= $murojaah['nama']; ?>" required>
                            <option value="<?= $murojaah['nama']; ?>"><?= $murojaah['nama']; ?></option>
                            <?php foreach ($data_siswa as $siswa) : ?>
                                <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="kelas">Kelas</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1" id="kelas" name="kelas" value="<?= $murojaah['kelas']; ?>" required>
                            <option value="<?= $murojaah['kelas']; ?>"><?= $murojaah['kelas']; ?></option>
                            <?php foreach ($data_kelas as $kelas) : ?>
                                <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="juz">Juz</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1 selectpicker" id="juz" name="juz" value="<?= $murojaah['juz']; ?>" required>
                            <option value="<?= $murojaah['juz']; ?>"><?= $murojaah['juz']; ?></option>
                            <?php foreach ($data_juz as $juz) : ?>
                                <option value="<?= $juz['juz']; ?>"><?= $juz['juz']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="predikat">Catatan Murojaah</label>
                        <textarea class="form-control" placeholder="Catatan murojaah disini..." id="predikat" name="predikat" style="height: 200px"><?= $murojaah['predikat']; ?></textarea>


                        <input type="hidden" name="guru" value="<?= ($_SESSION['nama']) ?>">


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah C. murojaah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?> -->


<?php
include __DIR__ . '/../layout/footer2.php';
?>