<?php

include 'config/app.php';

//menerima id murojaah yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_murojaah($id) > 0) {
    echo "<script>
        document.location.href = 'data-murojaah.php';
        </script>";
} else {
    echo "<script>
        alert('Data Murojaah Gagal Dihapus');
        document.location.href = 'data-murojaah.php';
        </script>";
}