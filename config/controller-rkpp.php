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

// ================= BATAS KELAS ==================================================== //

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

// ================= BATAS KELAS ==================================================== //

function ubah_data_7c1($post)
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

    $query      = "UPDATE data_7c1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7c1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7c1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7c2($post)
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

    $query      = "UPDATE data_7c2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7c2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7c2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7c3($post)
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

    $query      = "UPDATE data_7c3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7c3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7c3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7c4($post)
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

    $query      = "UPDATE data_7c4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7c4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7c4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7d1($post)
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

    $query      = "UPDATE data_7d1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7d1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7d1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7d2($post)
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

    $query      = "UPDATE data_7d2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7d2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7d2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7d3($post)
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

    $query      = "UPDATE data_7d3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7d3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7d3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_7d4($post)
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

    $query      = "UPDATE data_7d4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_7d4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_7d4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8a1($post)
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

    $query      = "UPDATE data_8a1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8a1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8a1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8a2($post)
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

    $query      = "UPDATE data_8a2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8a2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8a2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8a3($post)
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

    $query      = "UPDATE data_8a3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8a3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8a3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8a4($post)
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

    $query      = "UPDATE data_8a4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8a4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8a4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8b1($post)
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

    $query      = "UPDATE data_8b1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8b1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8b1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8b2($post)
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

    $query      = "UPDATE data_8b2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8b2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8b2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8b3($post)
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

    $query      = "UPDATE data_8b3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8b3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8b3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8b4($post)
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

    $query      = "UPDATE data_8b4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8b4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8b4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8c1($post)
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

    $query      = "UPDATE data_8c1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8c1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8c1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8c2($post)
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

    $query      = "UPDATE data_8c2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8c2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8c2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8c3($post)
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

    $query      = "UPDATE data_8c3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8c3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8c3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8c4($post)
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

    $query      = "UPDATE data_8c4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8c4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8c4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8d1($post)
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

    $query      = "UPDATE data_8d1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8d1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8d1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8d2($post)
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

    $query      = "UPDATE data_8d2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8d2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8d2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8d3($post)
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

    $query      = "UPDATE data_8d3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8d3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8d3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_8d4($post)
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

    $query      = "UPDATE data_8d4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_8d4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_8d4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9a1($post)
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

    $query      = "UPDATE data_9a1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9a1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9a1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9a2($post)
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

    $query      = "UPDATE data_9a2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9a2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9a2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9a3($post)
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

    $query      = "UPDATE data_9a3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9a3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9a3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9a4($post)
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

    $query      = "UPDATE data_9a4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9a4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9a4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9b1($post)
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

    $query      = "UPDATE data_9b1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9b1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9b1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9b2($post)
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

    $query      = "UPDATE data_9b2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9b2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9b2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9b3($post)
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

    $query      = "UPDATE data_9b3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9b3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9b3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9b4($post)
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

    $query      = "UPDATE data_9b4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9b4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9b4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9c1($post)
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

    $query      = "UPDATE data_9c1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9c1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9c1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9c2($post)
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

    $query      = "UPDATE data_9c2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9c2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9c2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9c3($post)
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

    $query      = "UPDATE data_9c3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9c3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9c3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9c4($post)
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

    $query      = "UPDATE data_9c4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9c4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9c4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9d1($post)
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

    $query      = "UPDATE data_9d1 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9d1($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9d1 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9d2($post)
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

    $query      = "UPDATE data_9d2 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9d2($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9d2 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9d3($post)
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

    $query      = "UPDATE data_9d3 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9d3($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9d3 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  

function ubah_data_9d4($post)
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

    $query      = "UPDATE data_9d4 SET kelas='$kelas', semester='$semester',
    pekan='$pekan', periode='$periode', tanggal='$tanggal', nama_waka='$nama_waka',
    nama_walas='$nama_walas'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi mengubah DATA RKPP
function ubah_rkpp_9d4($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $mapel      = htmlspecialchars($post['mapel']);
    $rp         = htmlspecialchars($post['rp']);
    $ts         = htmlspecialchars($post['ts']);


    $query      = "UPDATE rkpp_9d4 SET mapel='$mapel', rp='$rp', ts='$ts'  WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ===============  