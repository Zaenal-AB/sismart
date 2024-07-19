<?php

include 'config/app.php';

//menerima id ziyadah yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_ziyadah($id) > 0) {
    echo "<script>
        document.location.href = 'data-ziyadah.php';
        </script>";
} else {
    echo "<script>
        alert('Data Ziyadah Gagal Dihapus');
        document.location.href = 'data-ziyadah.php';
        </script>";
}
