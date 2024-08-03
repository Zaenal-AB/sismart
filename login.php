<?php

session_start();

// membatasi halaman sudah login
if (isset($_SESSION['login'])) {
    header('Location: dashboard.php');
    exit();
}


include(__DIR__ . '/config/app.php');

//mengecek apakah tombol login di tekan
if (isset($_POST['login'])) {
    //mengambil data dari form login
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //check username
    $result = mysqli_query($conn, "SELECT * FROM data_akun WHERE username = '$username'");

    // jika ada username
    if (mysqli_num_rows($result) == 1) {
        //check password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            //set session
            $_SESSION['login']    = true;
            $_SESSION['id']       = $row['id'];
            $_SESSION['nama']     = $row['nama'];
            $_SESSION['nis']      = $row['nis'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['level']    = $row['level'];
            header("Location: dashboard/dashboard.php");
            exit;
        }
    }
    $error = true;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="assets/css/style-login.css" />
    <title>Form Login</title>
</head>

<body>
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe">
                <div class="featured-image mb-3">
                    <img src="assets/img/1.png" class="img-fluid" style="width: 250px" />
                </div>
                <p class="text-white fs-2" style="
              font-family: 'Courier New', Courier, monospace;
              font-weight: 600;
            ">
                    Aplikasi Versi 1.0
                </p>
                <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace">SMPIT Anak Sholeh Mataram menuju sekolah digital</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <main class="col-md-6 right-box form-signin">
                <form class="row align-items-center" action="" method="POST">
                    <div class="header-text mb-4">
                        <h2>Manajemen Data Sekolah</h2>
                        <p>SMPIT Anak Sholeh Mataram.</p>
                    </div>
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger text-center">
                            <b>Username/password anda salah</b>
                        </div>
                    <?php endif; ?>

                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required />
                    </div>

                    <div class="input-group mb-1">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required />
                    </div>

                    <div class="input-group mb-1 mt-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="login">Login</button>
                    </div>

                    <div class="input-group mb-5">
                        <div class="text w-100 fs-6">
                            <p class="mt-5 mb-3 text-body-secondary">&copy; SMPIT Anak Sholeh Mataram <?= date('Y'); ?> </p>
                        </div>
                    </div>
                    <!-- <div class="row">
            <small></a></small>
          </div> -->
                </form>

            </main>
        </div>
    </div>
</body>

</html>