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
$data_guru = select("SELECT * FROM data_guru");

//jika tombok tambah siswa, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_guru($_POST) > 0) {
        echo "<script> alert('guru Berhasil Ditambahkan')
        document.location.href = 'data-guru.php';
        </script>";
    } else {
        echo "<script> alert('guru Gagal Ditambahkan')
        document.location.href = 'data-guru.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_guru($_POST) > 0) {
        echo "<script> alert('Data guru Berhasil Diubah')
        document.location.href = 'data-guru.php';
        </script>";
    } else {
        echo "<script> alert('Data guru Gagal diubah')
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
                    <h1>DATA GURU </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dasboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Guru </li>
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
                            <h3 class="card-title">Tabel Data Guru </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahGuru">Tambah Guru</button>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_guru as $guru) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $guru['nama']; ?></td>
                                            <td class="text-center"><?= $guru['username']; ?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahGuru<?= $guru['id']; ?>">Ubah</button>
                                                <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusGuru<?= $guru['id']; ?>">Hapus</button>
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

<!-- Modal Tambah Guru -->
<div class="modal fade" id="TambahGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>

                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>

                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" required>

                    <label for="level">Level</label>
                    <select type="text" class="form-control" id="level" name="level" required>
                        <option value="">-- Pilih Level --</option>
                        <option value="1">guru</option>
                        <option value="2">Guru</option>
                        <option value="3">Admin</option>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah guru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Guru -->
<?php foreach ($data_guru as $guru) : ?>
    <div class="modal fade" id="HapusGuru<?= $guru['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data <?= $guru['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="hapus-guru.php?id=<?= $guru['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Ubah guru  -->
<?php foreach ($data_guru as $guru) : ?>
    <div class="modal fade" id="UbahGuru<?= $guru['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $guru['id'] ?>">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama']; ?>" required>

                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $guru['username']; ?>" required>

                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required>

                        <label for="level">Level</label>
                        <select type="text" class="form-control" id="level" name="level" required>
                            <?php $level = $guru['level']; ?>
                            <option value="1" <?= $level == '1' ? 'selected' : null ?>>Siswa</option>
                            <option value="2" <?= $level == '2' ? 'selected' : null ?>>Guru</option>
                            <option value="3" <?= $level == '3' ? 'selected' : null ?>>Admin</option>
                        </select>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah Guru</button>
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