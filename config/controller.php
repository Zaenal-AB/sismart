<?php

function select($query)
{
    //panggil koneksi database
    global $conn;

    //eksekusi query
    $result = mysqli_query($conn, $query);
    $row = [];

    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
}


// ================ BAGIAN DATA AKUN SISWA ========================= //

//fungsi menambahkan akun
function create_siswa($post)
{
    global $conn;

    $nama       = htmlspecialchars($post['nama']);
    $jk         = htmlspecialchars($post['jk']);
    $ttl        = htmlspecialchars($post['ttl']);
    $nis        = htmlspecialchars($post['nis']);
    $username   = htmlspecialchars($post['username']);
    $password   = htmlspecialchars($post['password']);
    $level      = htmlspecialchars($post['level']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    $query      = "INSERT INTO data_siswa VALUES (null,'$nama', '$jk', '$ttl', '$nis', '$username', '$password', '$level')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



//fungsi menghapus akun
function delete_siswa($id)
{
    global $conn;

    $query = "DELETE FROM data_siswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi meng-ubah akun
function ubah_siswa($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $jk         = htmlspecialchars($post['jk']);
    $ttl        = htmlspecialchars($post['ttl']);
    $nis        = htmlspecialchars($post['nis']);
    $username   = htmlspecialchars($post['username']);
    $password   = htmlspecialchars($post['password']);
    $level      = htmlspecialchars($post['level']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query      = "UPDATE data_siswa SET nama='$nama', jk='$jk', ttl='$ttl', nis='$nis', username='$username',password='$password', level='$level' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



// ================ BAGIAN DATA TAHSIN ========================= //

//fungsi menambahkan tahsin
function create_tahsin($post)
{
    global $conn;

    $nama           = htmlspecialchars($post['nama']);
    $kelas          = htmlspecialchars($post['kelas']);
    $catatan        = htmlspecialchars($post['catatan']);
    $keterangan     = htmlspecialchars($post['keterangan']);
    $guru           = htmlspecialchars($post['guru']);

    $query      = "INSERT INTO data_tahsin VALUES (null, null, '$nama', '$kelas', '$catatan', '$keterangan', '$guru')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi menghapus tahsin
function delete_tahsin($id)
{
    global $conn;

    $query = "DELETE FROM data_tahsin WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi meng-ubah tahsin
function ubah_tahsin($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $kelas      = htmlspecialchars($post['kelas']);
    $catatan    = htmlspecialchars($post['catatan']);
    $keterangan = htmlspecialchars($post['keterangan']);


    $query      = "UPDATE data_tahsin SET nama='$nama', kelas='$kelas', catatan='$catatan', keterangan='$keterangan'WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// ================ BAGIAN DATA ZIYADAH ========================= //

//fungsi menambahkan ziyadah
function create_ziyadah($post)
{
    global $conn;

    $nama           = htmlspecialchars($post['nama']);
    $kelas          = htmlspecialchars($post['kelas']);
    $surat          = htmlspecialchars($post['surat']);
    $ayat          = htmlspecialchars($post['ayat']);
    $catatan        = htmlspecialchars($post['catatan']);
    $keterangan     = htmlspecialchars($post['keterangan']);

    $query      = "INSERT INTO data_ziyadah VALUES (null, null, '$nama', '$kelas','$surat','$ayat','$catatan', '$keterangan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi menghapus ziyadah
function delete_ziyadah($id)
{
    global $conn;

    $query = "DELETE FROM data_ziyadah WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi meng-ubah ziyadah
function ubah_ziyadah($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $kelas      = htmlspecialchars($post['kelas']);
    $surat      = htmlspecialchars($post['surat']);
    $ayat       = htmlspecialchars($post['ayat']);
    $catatan    = htmlspecialchars($post['catatan']);
    $keterangan = htmlspecialchars($post['keterangan']);


    $query      = "UPDATE data_ziyadah SET nama='$nama', kelas='$kelas', surat='$surat',ayat='$ayat', catatan='$catatan', keterangan='$keterangan' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// ================ BAGIAN DATA TASMI ========================= //

//fungsi menambahkan TASMI
function create_tasmi($post)
{
    global $conn;

    $nama           = htmlspecialchars($post['nama']);
    $kelas          = htmlspecialchars($post['kelas']);
    $kelas          = htmlspecialchars($post['kelas']);
    $juz            = htmlspecialchars($post['juz']);
    $predikat       = htmlspecialchars($post['predikat']);
    $pentasmi       = htmlspecialchars($post['pentasmi']);


    $query      = "INSERT INTO data_tasmi VALUES (null, null, '$nama', '$kelas','$juz','$predikat','$pentasmi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi menghapus TASMI
function delete_tasmi($id)
{
    global $conn;

    $query = "DELETE FROM data_tasmi WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi meng-ubah ziyadah
function ubah_tasmi($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $kelas      = htmlspecialchars($post['kelas']);
    $juz            = htmlspecialchars($post['juz']);
    $predikat       = htmlspecialchars($post['predikat']);
    $pentasmi       = htmlspecialchars($post['pentasmi']);



    $query      = "UPDATE data_tasmi SET nama='$nama', kelas='$kelas', juz='$juz', predikat='$predikat', pentasmi='$pentasmi' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// ================ BAGIAN DATA GURU ========================= //

//fungsi menambahkan akun
function create_guru($post)
{
    global $conn;

    $nama       = htmlspecialchars($post['nama']);
    $username   = htmlspecialchars($post['username']);
    $password   = htmlspecialchars($post['password']);
    $level      = htmlspecialchars($post['level']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    $query      = "INSERT INTO data_guru VALUES (null,'$nama', '$username', '$password', '$level')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



//fungsi menghapus akun
function delete_guru($id)
{
    global $conn;

    $query = "DELETE FROM data_guru WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi meng-ubah akun
function ubah_guru($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $username   = htmlspecialchars($post['username']);
    $password   = htmlspecialchars($post['password']);
    $level      = htmlspecialchars($post['level']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query      = "UPDATE data_guru SET nama='$nama', username='$username',password='$password', level='$level' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// ================ BAGIAN DATA AKUN ========================= //

//fungsi menambahkan akun
function create_akun($post)
{
    global $conn;

    $nama       = htmlspecialchars($post['nama']);
    $nis        = htmlspecialchars($post['nis']);
    $username   = htmlspecialchars($post['username']);
    $password   = htmlspecialchars($post['password']);
    $level      = htmlspecialchars($post['level']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    $query      = "INSERT INTO data_akun VALUES (null,'$nama', '$nis', '$username', '$password', '$level')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



//fungsi menghapus akun
function delete_akun($id)
{
    global $conn;

    $query = "DELETE FROM data_akun WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi meng-ubah akun
function ubah_akun($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $nis        = htmlspecialchars($post['nis']);
    $username   = htmlspecialchars($post['username']);
    $password   = htmlspecialchars($post['password']);
    $level      = htmlspecialchars($post['level']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query      = "UPDATE data_akun SET nama='$nama', nis='$nis', username='$username',password='$password', level='$level' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// ================ BAGIAN DATA KETERLAMBATAN ========================= //

//fungsi menambahkan keterlambatan
function create_keterlambatan($post)
{
    global $conn;

    $nama           = htmlspecialchars($post['nama']);
    $alasan         = htmlspecialchars($post['alasan']);
    $tindakan       = htmlspecialchars($post['tindakan']);

    $query      = "INSERT INTO data_keterlambatan VALUES (null, null, '$nama', '$alasan', '$tindakan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi menghapus keterlambatan
function delete_keterlambatan($id)
{
    global $conn;

    $query = "DELETE FROM data_keterlambatan WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi meng-ubah keterlambatan
function ubah_keterlambatan($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $alasan     = htmlspecialchars($post['alasan']);
    $tindakan   = htmlspecialchars($post['tindakan']);


    $query      = "UPDATE data_keterlambatan SET nama='$nama', alasan='$alasan', tindakan='$tindakan' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// ================ BAGIAN DATA PRESTASI ========================= //

//fungsi menambahkan prestasi
function create_prestasi($post)
{
    global $conn;

    $nama               = htmlspecialchars($post['nama']);
    $prestasi           = htmlspecialchars($post['prestasi']);

    $query      = "INSERT INTO data_prestasi VALUES (null, null, '$nama', '$prestasi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//fungsi menghapus prestasi
function delete_prestasi($id)
{
    global $conn;

    $query = "DELETE FROM data_prestasi WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


//fungsi meng-ubah prestasi
function ubah_prestasi($post)
{
    global $conn;

    $id         = htmlspecialchars($post['id']);
    $nama       = htmlspecialchars($post['nama']);
    $prestasi   = htmlspecialchars($post['prestasi']);


    $query      = "UPDATE data_prestasi SET nama='$nama', prestasi='$prestasi' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
