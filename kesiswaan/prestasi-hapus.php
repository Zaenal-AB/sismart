<?php

include __DIR__ . '/../config/app.php';

//menerima id prestasi yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_prestasi($id) > 0) {
    echo "<script>
        document.location.href = 'prestasi.php';
        </script>";
} else {
    echo "<script>
        alert('Data Prestasi Gagal Dihapus');
        document.location.href = 'prestasi.php';
        </script>";
}
