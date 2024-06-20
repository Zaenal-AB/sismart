<?php

include 'config/app.php';

//menerima id akun yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_siswa($id) > 0) {
    echo "<script>
        alert('Data Siswa Berhasil Dihapus');
        document.location.href = 'data-siswa.php';
        </script>";
} else {
    echo "<script>
        alert('Data Siswa Gagal Dihapus');
        document.location.href = 'data-siswa.php';
        </script>";
}
