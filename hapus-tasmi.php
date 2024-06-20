<?php

include 'config/app.php';

//menerima id tasmi yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_tasmi($id) > 0) {
    echo "<script>
        alert('Data Tasmi Berhasil Dihapus');
        document.location.href = 'data-tasmi.php';
        </script>";
} else {
    echo "<script>
        alert('Data Tasmi Gagal Dihapus');
        document.location.href = 'data-tasmi.php';
        </script>";
}
