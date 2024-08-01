<?php

include __DIR__ . '/../config/app.php';

//menerima id murojaah yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_murojaah($id) > 0) {
    echo "<script>
        document.location.href = 'murojaah.php';
        </script>";
} else {
    echo "<script>
        alert('Data Murojaah Gagal Dihapus');
        document.location.href = 'murojaah.php';
        </script>";
}
