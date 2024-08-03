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
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';


//Menampilkan Data Ziyadah
$data_tasmi = select("SELECT * FROM data_tasmi ORDER BY `data_tasmi`.`id` DESC");
//Menampilkan Data Siswa
$data_siswa = select("SELECT * FROM data_siswa ORDER BY `data_siswa`.`nama` ASC");
//Menampilkan Data Kelas
$data_kelas = select("SELECT * FROM data_kelas ORDER BY `data_kelas`.`kelas` ASC");
//Menampilkan Data Juz
$data_juz = select("SELECT * FROM data_juz");
//Menampilkan Data Pentasmi
$data_pentasmi = select("SELECT * FROM data_pentasmi");

//tampil data sebagian 
$data_bylogin = select("SELECT * FROM data_tasmi WHERE nama = '{$_SESSION['nama']}' ORDER BY `data_tasmi`.`id` DESC");
$data_byguru = select("SELECT * FROM data_tasmi WHERE pentasmi = '{$_SESSION['nama']}' ORDER BY `data_tasmi`.`id` DESC");


//jika tombok tambah Tasmi, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_tasmi($_POST) > 0) {
        echo "<script>
        document.location.href = 'tasmi.php';
        </script>";
    } else {
        echo "<script>
        alert('Catatan Tasmi Gagal Ditambahkan')
        document.location.href = 'tasmi.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_tasmi($_POST) > 0) {
        echo "<script> 
        document.location.href = 'tasmi.php';
        </script>";
    } else {
        echo "<script> alert('Data Tasmi Gagal diubah')
        document.location.href = 'tasmi.php';

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
                    <h1>Data Tasmi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tasmi</li>
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
                                <h3 class="card-title">Tabel Mutabaah Tasmi Ananda <?= $_SESSION['nama']; ?></h3>
                            <?php endif; ?>
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <h3 class="card-title">Tabel Mutabaah Tasmi Siswa </h3>
                            <?php endif; ?>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahTasmi">Tambah Catatan</button>
                            <?php endif; ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">No</th>
                                        <th class="text-center align-middle">Tanggal</th>
                                        <th class="text-center align-middle">Nama</th>
                                        <th class="text-center align-middle">Kelas</th>
                                        <th class="text-center align-middle">Juz</th>
                                        <th class="text-center align-middle">Predikat</th>
                                        <th class="text-center align-middle">Pentasmi</th>
                                        <?php if ($_SESSION['level'] == 2 or $_SESSION['level'] == 3) : ?>
                                            <th class="text-center align-middle">Aksi</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- menampilkan seluruh data -->
                                    <?php if ($_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_tasmi as $tasmi) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($tasmi['tanggal'])); ?></td>
                                                <td class="align-middle"><?= $tasmi['nama']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['kelas']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['juz']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['predikat']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['pentasmi']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahTasmi<?= $tasmi['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusTasmi<?= $tasmi['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <!-- Menampilkan seluruh sebagian/siswa  -->
                                    <?php elseif ($_SESSION['level'] == 2) : ?>
                                        <?php
                                        // Variabel penghitung
                                        $counter = 0;

                                        // Maksimal data yang ditampilkan
                                        $max_data = 20;

                                        foreach ($data_byguru as $tasmi) :
                                            // Memeriksa apakah batas sudah tercapai
                                            if ($counter >= $max_data) {
                                                break;
                                            }
                                        ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($tasmi['tanggal'])); ?></td>
                                                <td class="align-middle"><?= $tasmi['nama']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['kelas']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['juz']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['predikat']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['pentasmi']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahTasmi<?= $tasmi['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusTasmi<?= $tasmi['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php
                                            // Meningkatkan penghitung
                                            $counter++;
                                        endforeach;
                                        ?>

                                    <?php else : ?>
                                        <?php foreach ($data_bylogin as $tasmi) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $no++; ?></td>
                                                <td class="text-center align-middle"><?= date('d/m/Y | H:i', strtotime($tasmi['tanggal'])); ?></td>
                                                <td class="align-middle"><?= $tasmi['nama']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['kelas']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['juz']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['predikat']; ?></td>
                                                <td class="text-center align-middle"><?= $tasmi['pentasmi']; ?></td>
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


<!-- Modal Tambah Tasmi -->
<div class="modal fade" id="TambahTasmi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Tasmi</h5>
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

                    <div class="row">
                        <div class="col">
                            <label for="juz">Juz</label>
                            <select data-live-search="true" type="text" class="form-control" id="juz" name="juz" required>
                                <option value="">-- Pilih Juz --</option>
                                <?php foreach ($data_juz as $juz) : ?>
                                    <option value="<?= $juz['juz']; ?>"><?= $juz['juz']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="predikat">Predikat</label>
                            <select type="text" class="form-control" id="predikat" name="predikat" required>
                                <option value="">-- Pilih Predikat --</option>
                                <option value="Mumtaz">Mumtaz</option>
                                <option value="Jayyid Jiddan">Jayyid Jiddan</option>
                                <option value="Jayyid">Jayyid</option>
                                <option value="Tidak Lulus">Tidak Lulus</option>
                            </select>
                        </div>
                    </div>

                    <label for="pentasmi">Pentasmi</label>
                    <select data-live-search="true" type="text" class="form-control" id="pentasmi" name="pentasmi" required>
                        <option value="">-- Pilih Pentasmi --</option>
                        <?php foreach ($data_pentasmi as $pentasmi) : ?>
                            <option value="<?= $pentasmi['pentasmi']; ?>"><?= $pentasmi['pentasmi']; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah C. Tasmi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus tasmi -->
<?php foreach ($data_tasmi as $tasmi) : ?>
    <div class="modal fade" id="HapusTasmi<?= $tasmi['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Catatan tasmi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data tasmi <?= $tasmi['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="tasmi-hapus.php?id=<?= $tasmi['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Ubah tasmi  -->
<!-- <?php foreach ($data_tasmi as $tasmi) : ?>
    <div class="modal fade" id="UbahTasmi<?= $tasmi['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tasmi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">

                        <input type="hidden" name="id" value="<?= $tasmi['id'] ?>">

                        <label for="nama">Nama Siswa</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1 selectpicker" id="nama" name="nama" value="<?= $tasmi['nama']; ?>" required>
                            <option value="<?= $tasmi['nama']; ?>"><?= $tasmi['nama']; ?></option>
                            <?php foreach ($data_siswa as $siswa) : ?>
                                <option value="<?= $siswa['nama']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label for="kelas">Kelas</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1" id="kelas" name="kelas" value="<?= $tasmi['kelas']; ?>" required>
                            <option value="<?= $tasmi['kelas']; ?>"><?= $tasmi['kelas']; ?></option>
                            <?php foreach ($data_kelas as $kelas) : ?>
                                <option value="<?= $kelas['kelas']; ?>"><?= $kelas['kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <div class="row">
                            <div class="col">
                                <label for="juz">Juz</label>
                                <select data-live-search="true" type="text" class="form-control  mb-1" id="juz" name="juz" value="<?= $tasmi['juz']; ?>" required>
                                    <option value="<?= $tasmi['juz']; ?>"><?= $tasmi['juz']; ?></option>
                                    <?php foreach ($data_juz as $juz) : ?>
                                        <option value="<?= $juz['juz']; ?>"><?= $juz['juz']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="predikat">Predikat</label>
                                <select data-live-search="true" type="text" class="form-control  mb-1" id="predikat" name="predikat" value="<?= $tasmi['predikat']; ?>" required>
                                    <option value="<?= $tasmi['predikat']; ?>"><?= $tasmi['predikat']; ?></option>
                                    <option value="Mumtaz">Mumtaz</option>
                                    <option value="Jayyid Jiddan">Jayyid Jiddan</option>
                                    <option value="Jayyid">Jayyid</option>
                                    <option value="Tidak Lulus">Tidak Lulus</option>
                                </select>
                            </div>
                        </div>

                        <label for="pentasmi">Pentasmi</label>
                        <select data-live-search="true" type="text" class="form-control  mb-1" id="pentasmi" name="pentasmi" value="<?= $tasmi['pentasmi']; ?>" required>
                            <option value="<?= $tasmi['pentasmi']; ?>"><?= $tasmi['pentasmi']; ?></option>
                            <?php foreach ($data_pentasmi as $pentasmi) : ?>
                                <option value="<?= $pentasmi['pentasmi']; ?>"><?= $pentasmi['pentasmi']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah C. Tasmi</button>
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