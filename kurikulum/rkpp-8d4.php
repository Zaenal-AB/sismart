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


// membatasi halaman sesuai user login
if ($_SESSION["level"] == 1 or $_SESSION["level"] == 2) {
    echo "<script>
    alert ('Anda tidak punya akses');
    document.location.href = '../login.php';
         </script>";
    exit;
}

$title = 'Dashboard';
include __DIR__ . '/../config/app.php';
include __DIR__ . '/../layout/header2.php';

//Menampilkan Data rkpp
$rkpp_8d4 = select("SELECT * FROM rkpp_8d4");
$main_data = select("SELECT * FROM data_8d4");


//UBAH DATA KELAS
if (isset($_POST['UbahMain'])) {
    if (ubah_data_8d4($_POST) > 0) {
        echo "<script> 
        document.location.href = 'rkpp-8d4.php';
        </script>";
    } else {
        echo "<script> alert('Data RKPP Gagal diubah')
        document.location.href = 'rkpp-8d4.php';

        </script>";
    }
}
//UBAH DATA INTI RKPP
if (isset($_POST['ubahrkpp'])) {
    if (ubah_rkpp_8d4($_POST) > 0) {
        echo "<script> 
        document.location.href = 'rkpp-8d4.php';
        </script>";
    } else {
        echo "<script> alert('Data RKPP Gagal diubah')
        document.location.href = 'rkpp-8d4.php';

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
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="row">
            <div class="col-12">
                <!-- Custom Tabs -->
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="viia">
                                <!-- START TABEL -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">RKPP Kelas VIII-D Pekan Ke-4</h3>
                                                <a href="cetak/rkpp-8d4.php" target="_blank" class="btn btn-danger float-sm-right">Cetak PDF VIII-D</a>
                                                <button type="button" class="btn btn-primary mr-3 float-sm-right " data-toggle="modal" data-target="#UbahMain"><i class="fas fa-edit"></i>Data Kelas</button>

                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th style="width: 1px;">No</th>
                                                            <th style="width: 25px;">Hari</th>
                                                            <th style="width: 50px;">Mata Pelajaran</th>
                                                            <th>Rencana Pembelajaran</th>
                                                            <th>Tugas Siswa Dirumah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        $current_hari = "";
                                                        $rowspan_count = 6; // Jumlah baris per hari

                                                        foreach ($rkpp_8d4 as $key => $row) {
                                                            echo '<tr class="text-center">';
                                                            if ($key % $rowspan_count == 0) {
                                                                echo '<td rowspan="' . $rowspan_count . '">' . $no++ . '</td>';
                                                                echo '<td rowspan="' . $rowspan_count . '">' . $row['hari'] . '</td>';
                                                            }
                                                            echo '<td>' . $row['mapel'] . '</td>';
                                                            echo '<td><span class="btn btn-success btn-sm">' . $row['rp'] . '</span></td>';
                                                            echo '<td><span class="btn btn-primary btn-sm">' . $row['ts'] . '</span></td>';
                                                            echo '<td><button type="button" class="btn btn-success mb-1 btn-sm" data-toggle="modal" data-target="#UbahData' . $row['id'] . '"><i class="fas fa-edit"></i></button></td>';
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>
                                                <a href="rkpp-8d4.php" class="btn btn-primary float-sm-right m-2">Pekan IV</a>
                                                <a href="rkpp-8d3.php" class="btn btn-secondary float-sm-right m-2">Pekan III</a>
                                                <a href="rkpp-8d2.php" class="btn btn-secondary float-sm-right m-2">Pekan II</a>
                                                <a href="rkpp-8d1.php" class="btn btn-secondary float-sm-right m-2">Pekan I</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php  ?>

<!-- Modal Ubah Main  -->
<?php foreach ($main_data as $main) : ?>
    <div class="modal fade" id="UbahMain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $main['id']; ?>">

                        <div class="row">
                            <div class="col">
                                <label for="kelas">Kelas: </label>
                                <input type="text" placeholder="VII-A" class="form-control" id="kelas" name="kelas" value="<?= $main['kelas']; ?>" required>
                            </div>
                            <div class="col">
                                <label for="semester">Semester/Tahun:</label>
                                <input type="text" placeholder="I/2024" class="form-control" id="semester" name="semester" value="<?= $main['semester']; ?>" required>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="pekan">Pekan Ke:</label>
                                <input type="text" placeholder="1" class="form-control" id="pekan" name="pekan" value="<?= $main['pekan']; ?>" required>
                            </div>
                            <div class="col">
                                <label for="periode">periode:</label>
                                <input type="text" placeholder="1 - 31 Agustus 2024" class="form-control" id="periode" name="periode" value="<?= $main['periode']; ?>" required>
                            </div>
                        </div>


                        <label for="tanggal">Tanggal Pengesahan:</label>
                        <input type="text" placeholder="Mataram, 1 Agustus 2024" class="form-control" id="tanggal" name="tanggal" value="<?= $main['tanggal']; ?>" required>

                        <label for="nama_waka">Nama Wakakur:</label>
                        <input type="text" placeholder="Siti Rohul Isnaini, S.Pd" class="form-control" id="nama_waka" name="nama_waka" value="<?= $main['nama_waka']; ?>" required>

                        <label for="nama_walas">Nama Walas</label>
                        <input type="text" placeholder="M. Zakaria, S.Pd" class="form-control" id="nama_walas" name="nama_walas" value="<?= $main['nama_walas']; ?>" required>
<!-- 
                        <label for="ttd_waka">TTD Wakakur</label>
                        <input type="file" class="form-control" id="ttd_waka" name="ttd_waka" value="" required>

                        <label for="ttd_walas">TTD Walas</label>
                        <input type="file" class="form-control" id="ttd_walas" name="ttd_walas" value="" required> -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="UbahMain" class="btn btn-primary">Edit Data Kelas</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Modal Ubah INTI RKPP  -->
<?php foreach ($rkpp_8d4 as $key => $row) : ?>
    <div class="modal fade" id="UbahData<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit RKPP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <label for="mapel">Mata Pelajaran</label>
                        <select type="text" class="form-control" id="mapel" name="mapel" required>
                            <?php $mapel = $row['mapel']; ?>
                            <option value="Al-Qur'an" <?= $mapel == "Al-Qur'an" ? 'selected' : null ?>>Al-Qur'an</option>
                            <option value="Pendidikan Agama Islam" <?= $mapel == 'Pendidikan Agama Islam' ? 'selected' : null ?>>Pendidikan Agama Islam</option>
                            <option value="Matematika" <?= $mapel == 'Matematika' ? 'selected' : null ?>>Matematika</option>
                            <option value="Ilmu Pengetahuan Alam (IPA)" <?= $mapel == 'Ilmu Pengetahuan Alam (IPA)' ? 'selected' : null ?>>Ilmu Pengetahuan Alam (IPA)</option>
                            <option value="Ilmu Pengetahuan Sosial (IPS)" <?= $mapel == 'Ilmu Pengetahuan Sosial (IPS)' ? 'selected' : null ?>>Ilmu Pengetahuan Sosial (IPS)</option>
                            <option value="Bahasa Indonesia" <?= $mapel == 'Bahasa Indonesia' ? 'selected' : null ?>>Bahasa Indonesia</option>
                            <option value="Bahasa Inggris" <?= $mapel == 'Bahasa Inggris' ? 'selected' : null ?>>Bahasa Inggris</option>
                            <option value="BPI" <?= $mapel == 'BPI' ? 'selected' : null ?>>BPI</option>
                            <option value="PPKn" <?= $mapel == 'PPKn' ? 'selected' : null ?>>PPKn</option>
                            <option value="Informatika" <?= $mapel == 'Informatika' ? 'selected' : null ?>>Informatika</option>
                            <option value="PJOK" <?= $mapel == 'PJOK' ? 'selected' : null ?>>PJOK</option>
                            <option value="Bahasa Arab (Muatan Lokal)" <?= $mapel == 'Bahasa Arab (Muatan Lokal)' ? 'selected' : null ?>>Bahasa Arab (Muatan Lokal)</option>
                            <option value="Bimbingan Konseling (BK)" <?= $mapel == 'Bimbingan Konseling (BK)' ? 'selected' : null ?>>Bimbingan Konseling (BK)</option>
                            <option value="P5" <?= $mapel == 'P5' ? 'selected' : null ?>>P5</option>
                            <option value="Pemantapan SKL JSIT" <?= $mapel == 'Pemantapan SKL JSIT' ? 'selected' : null ?>>Pemantapan SKL JSIT</option>
                            <option value="Upacara / Upgrading Bahasa / Senam JSIT" <?= $mapel == 'Upacara / Upgrading Bahasa / Senam JSIT' ? 'selected' : null ?>>Upacara / Upgrading Bahasa / Senam JSIT</option>
                        </select>

                        <label for="rp">Rencana Pembelajaran</label>
                        <textarea maxlength="99" class="form-control" placeholder="Rencana Pembelajaran..." id="rp" name="rp" style="height: 100px"><?= $row['rp']; ?></textarea>

                        <label for="ts">Tugas Siswa Dirumah</label>
                        <textarea maxlength="99" class="form-control" placeholder="Tugas Siswa..." id="ts" name="ts" style="height: 100px"><?= $row['ts']; ?></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubahrkpp" class="btn btn-primary">Edit RKPP</button>
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