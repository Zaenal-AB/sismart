<?php

include __DIR__ . '/../config/app.php';

//menerima id tasmi yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_tasmi($id) > 0) {
    echo "<script>
        document.location.href = 'tasmi.php';
        </script>";
} else {
    echo "<script>
        alert('Data Tasmi Gagal Dihapus');
        document.location.href = 'tasmi.php';
        </script>";
}
