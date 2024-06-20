<?php

include 'config/app.php';

//menerima id akun yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_guru($id) > 0) {
    echo "<script>
        alert('Data guru Berhasil Dihapus');
        document.location.href = 'data-guru.php';
        </script>";
} else {
    echo "<script>
        alert('Data Guru Gagal Dihapus');
        document.location.href = 'data-guru.php';
        </script>";
}
