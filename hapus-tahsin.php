<?php

include 'config/app.php';

//menerima id tahsin yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_tahsin($id) > 0) {
    echo "<script>
        document.location.href = 'data-tahsin.php';
        </script>";
} else {
    echo "<script>
        alert('Data Tahsin Gagal Dihapus');
        document.location.href = 'data-tahsin.php';
        </script>";
}
