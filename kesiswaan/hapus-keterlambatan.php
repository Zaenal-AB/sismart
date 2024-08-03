<?php

include __DIR__ . '/../config/app.php';

//menerima id keterlambatan yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_keterlambatan($id) > 0) {
    echo "<script>
        document.location.href = 'keterlambatan.php';
        </script>";
} else {
    echo "<script>
        alert('Data Keterlambatan Gagal Dihapus');
        document.location.href = 'keterlambatan.php';
        </script>";
}
