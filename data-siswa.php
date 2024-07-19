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

$title = 'Data Siswa';
include 'config/app.php';
include 'layout/header.php';

//tampil seluruh data 
$data_siswa = select("SELECT * FROM data_siswa ORDER BY data_siswa ASC");

//jika tombok tambah siswa, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_siswa($_POST) > 0) {
        echo "<script> alert('Siswa Berhasil Ditambahkan')
        document.location.href = 'data-siswa.php';
        </script>";
    } else {
        echo "<script> alert('Siswa Gagal Ditambahkan')
        document.location.href = 'data-siswa.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_siswa($_POST) > 0) {
        echo "<script> alert('Data Siswa Berhasil Diubah')
        document.location.href = 'data-siswa.php';
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
                    <h1>DATA SISWA </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dasboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Siswa </li>
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
                            <h3 class="card-title">Tabel Data Siswa </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahSiswa">Tambah Siswa</button>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">L/P</th>
                                        <th class="text-center">Tempat & Tanggal lahir</th>
                                        <th class="text-center">NIS</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_siswa as $siswa) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $siswa['nama']; ?></td>
                                            <td class="text-center"><?= $siswa['jk']; ?></td>
                                            <td class="text-center"><?= $siswa['ttl']; ?></td>
                                            <td class="text-center"><?= $siswa['nis']; ?></td>
                                            <td class="text-center"><?= $siswa['username']; ?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahSiswa<?= $siswa['id']; ?>">Ubah</button>
                                                <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusSiswa<?= $siswa['id']; ?>">Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /MAIN CONTENT -->
</div>

<!-- Modal Tambah Siswa -->
<div class="modal fade" id="TambahSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>

                    <div class="row mt-2">
                        <div class="col">
                            <label for="jk">Jenis Kelamin</label>
                            <select type="text" class="form-control" id="jk" name="jk" required>
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">

                            <label for="ttl">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" id="ttl" name="ttl" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" required>
                        </div>
                        <div class="col">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>


                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" required>

                    <label for="level">Level</label>
                    <select type="text" class="form-control" id="level" name="level" required>
                        <option value="">-- Pilih Level --</option>
                        <option value="1">Siswa</option>
                        <option value="2">Guru</option>
                        <option value="3">Admin</option>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Siswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Siswa -->
<?php foreach ($data_siswa as $siswa) : ?>
    <div class="modal fade" id="HapusSiswa<?= $siswa['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data <?= $siswa['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="hapus-siswa.php?id=<?= $siswa['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Ubah Siswa  -->
<?php foreach ($data_siswa as $siswa) : ?>
    <div class="modal fade" id="UbahSiswa<?= $siswa['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" required>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="jk">Jenis Kelamin</label>
                                <select type="text" class="form-control" id="jk" name="jk" required>
                                    <?php $level = $siswa['jk']; ?>
                                    <option value="Laki-Laki" <?= $level == 'Laki-Laki' ? 'selected' : null ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= $level == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="col">

                                <label for="ttl">Tempat, Tanggal Lahir</label>
                                <input type="text" class="form-control" id="ttl" name="ttl" value="<?= $siswa['ttl']; ?>" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label for="nis">NIS</label>
                                <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis']; ?>" required>
                            </div>
                            <div class="col">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $siswa['username']; ?>" required>
                            </div>
                        </div>


                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required>

                        <label for="level">Level</label>
                        <select type="text" class="form-control" id="level" name="level" required>
                            <?php $level = $siswa['level']; ?>
                            <option value="1" <?= $level == '1' ? 'selected' : null ?>>Siswa</option>
                            <option value="2" <?= $level == '2' ? 'selected' : null ?>>Guru</option>
                            <option value="3" <?= $level == '3' ? 'selected' : null ?>>Admin</option>
                        </select>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah Siswa</button>
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