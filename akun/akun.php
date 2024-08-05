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

$title = 'Data Akun';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//tampil seluruh data 
$data_akun = select("SELECT * FROM data_akun ORDER BY `data_akun`.`password` DESC");

//tampil data sebagian 
$id_akun = $_SESSION['id'];
$data_bylogin = select("SELECT * FROM data_akun WHERE id = $id_akun");

//jika tombok tambah akun, jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_akun($_POST) > 0) {
        echo "<script> alert('Akun Berhasil Ditambahkan')
        document.location.href = 'akun.php';
        </script>";
    } else {
        echo "<script> alert('Akun Gagal Ditambahkan')
        document.location.href = 'akun.php';
        </script>";
    }
}

//UBAH DATA di tekan, jalan script berikut 
if (isset($_POST['ubah'])) {
    if (ubah_akun($_POST) > 0) {
        echo "<script> alert('Akun Berhasil Ubah')
        document.location.href = 'akun.php';
        </script>";
    } else {
        echo "<script> alert('Data Akun Gagal Ubah')
        document.location.href = 'akun.php';
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
                    <h1>DATA AKUN </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dasboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Akun </li>
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
                            <h3 class="card-title">Tabel Data Akun Tim</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if ($_SESSION['level'] == 3) : ?>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#TambahAkun">Tambah Akun</button>
                            <?php endif; ?>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">nis</th>
                                        <th class="text-center">username</th>
                                        <th class="text-center">password</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <!-- menapilkan seluruh data akun, punya admin  -->
                                    <?php if ($_SESSION['level'] == 3) : ?>
                                        <?php foreach ($data_akun as $akun) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td><?= $akun['nama']; ?></td>
                                                <td class="text-center"><?= $akun['nis']; ?></td>
                                                <td class="text-center"><?= $akun['username']; ?></td>
                                                <td class="text-center"><?= $akun['password']; ?></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahAkun<?= $akun['id']; ?>">Ubah</button>
                                                    <button type="button" class="btn btn-danger mb-1 btn-sm" data-toggle="modal" data-target="#HapusAkun<?= $akun['id']; ?>">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <!-- tampilkan data berdasarkan user login -->
                                        <?php foreach ($data_bylogin as $akun) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td><?= $akun['nama']; ?></td>
                                                <td class="text-center"><?= $akun['nis']; ?></td>
                                                <td class="text-center"><?= $akun['username']; ?></td>
                                                <td class="text-center">Ter-Enkripsi</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahAkun<?= $akun['id']; ?>">Ubah</button>
                                                </td>
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
    <!-- /MAIN CONTENT -->
</div>

<!-- Modal Tambah Akun -->
<div class="modal fade" id="TambahAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>

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
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Akun -->
<?php foreach ($data_akun as $akun) : ?>
    <div class="modal fade" id="HapusAkun<?= $akun['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus Data <?= $akun['nama']; ?> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <a href="akun-hapus.php?id=<?= $akun['id']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Ubah Akun  -->
<?php foreach ($data_akun as $akun) : ?>
    <div class="modal fade" id="UbahAkun<?= $akun['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $akun['id'] ?>">
                        <!-- <label for="nama">Nama</label> -->
                        <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $akun['nama']; ?>" required>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="nis">NIS</label>
                                <input type="text" class="form-control" id="nis" name="nis" value="<?= $akun['nis']; ?>" required>
                            </div>
                            <div class="col">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $akun['username']; ?>" required>
                            </div>
                        </div>


                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required>

                        <?php if ($_SESSION['level'] == 3) : ?>
                            <label for="level">Level</label>
                            <select type="text" class="form-control" id="level" name="level" required>
                                <?php $level = $akun['level']; ?>
                                <option value="1" <?= $level == '1' ? 'selected' : null ?>>Siswa</option>
                                <option value="2" <?= $level == '2' ? 'selected' : null ?>>Guru</option>
                                <option value="3" <?= $level == '3' ? 'selected' : null ?>>Admin</option>
                            </select>
                        <?php else : ?>
                            <input type="hidden" name="level" value="<?= $akun['level']; ?>">
                        <?php endif; ?>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah Akun</button>
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