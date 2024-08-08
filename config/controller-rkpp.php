<?php

// =========================== RKPP 7A ==================== //

//fungsi mengubah DATA KELAS
function ubah_data_7a1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7a1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7a1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7a1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============

//fungsi mengubah DATA KELAS
function ubah_data_7a2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7a2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7a2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7a2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============
//fungsi mengubah DATA KELAS
function ubah_data_7a3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7a3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7a3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7a3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============
//fungsi mengubah DATA KELAS
function ubah_data_7a4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7a4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7a4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7a4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============
function ubah_data_7b1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7b1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7b1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7b1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============
function ubah_data_7b2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7b2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7b2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7b2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============
function ubah_data_7b3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7b3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7b3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7b3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============
function ubah_data_7b4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $kelas      = htmlspecialchars($post['kelas']);
    $semester   = htmlspecialchars($post['semester']);
    $pekan      = htmlspecialchars($post['pekan']);
    $periode    = htmlspecialchars($post['periode']);
    $tanggal    = htmlspecialchars($post['tanggal']);
    $nama_waka  = htmlspecialchars($post['nama_waka']);
    $nama_walas = htmlspecialchars($post['nama_walas']);
    // $ttd_waka   = htmlspecialchars($post['ttd_waka']);
    // $ttd_walas  = htmlspecialchars($post['ttd_walas']);


    $query      = "UPDATE data_7b4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7b4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7b4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ============