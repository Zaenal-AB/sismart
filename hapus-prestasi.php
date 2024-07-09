<?php

include 'config/app.php';

//menerima id prestasi yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_prestasi($id) > 0) {
    echo "<script>
        alert('Data Prestasi Berhasil Dihapus');
        document.location.href = 'data-penghargaan.php';
        </script>";
} else {
    echo "<script>
        alert('Data Prestasi Gagal Dihapus');
        document.location.href = 'data-penghargaan.php';
        </script>";
}
