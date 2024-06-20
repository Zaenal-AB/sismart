<?php

include 'config/app.php';

//menerima id akun yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_akun($id) > 0) {
    echo "<script>
        alert('Data Akun Berhasil Dihapus');
        document.location.href = 'data-akun.php';
        </script>";
} else {
    echo "<script>
        alert('Data Akun Gagal Dihapus');
        document.location.href = 'data-akun.php';
        </script>";
}
