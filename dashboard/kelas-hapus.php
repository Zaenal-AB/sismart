<?php

include __DIR__ . '/../config/app.php';

//menerima id akun yang dipilih pengguna

$id = (int)$_GET['id'];

if (delete_kelas($id) > 0) {
    echo "<script>
        document.location.href = 'setting.php';
        </script>";
} else {
    echo "<script>
        document.location.href = 'setting.php';
        </script>";
}
