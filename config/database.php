<?php

$conn = mysqli_connect('localhost', 'u966478672_sismart', 'Zaenal!7', 'u966478672_sismart');
// $conn = mysqli_connect('localhost', 'root', '', 'sismart');

// check connetion
// if ($conn) {
//     echo "koneksi berhasil";
// } else {
//     echo "koneksi gagal";
// }

// Atur timezone untuk sesi ini
$conn->query("SET time_zone = '+08:00'");
