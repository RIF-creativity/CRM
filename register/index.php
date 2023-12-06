<?php
session_start();
include '../email/index.php';


if (isset($_POST['submit'])) {
    global $conn;
    $_SESSION["username"] = strtolower(stripslashes($_POST['username']));
    $_SESSION["mail"] = strtolower(stripslashes($_POST['email']));
    $_SESSION["password"] = $_POST['password'];

    //kirim otp via email
    $otp = rand(100000, 999999);
    //lengkapi variable berikut
    $email = $_SESSION["mail"];
    $pengirim = 'rif-creativity@gmail.com';
    $penerima = $_SESSION["username"];
    $judul = $otp . 'adalah Kode Verifikasi akun EMA kamu';
    $pesan = 'Hai ! <br>Tinggal selangkah lagi untuk mengaktifkan akun mu.<br>Masukan Kode ' . $otp . ' untuk memverifikasi pendaftaran kamu.<br>Harap jangan menyebarkan kode kepada siapapun';
    $_SESSION["otp"] = $otp;
    if (Email($email, $pengirim, $penerima, $judul, $pesan) > 0) {
        echo
        "<script>
            window.location='otp.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../sweetalert/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="text-center bg-light">
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="post">
                    <img class="mb-3" src="../database/logo.png" alt="" width="72" height="72">
                    <h1 class="text-dark">Register</h1>
                    <div class="form-floating">
                        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="sumanto" fdprocessedid="8137xg" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating pt-1">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" fdprocessedid="8137xg" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating pt-1">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" fdprocessedid="mj0mpk" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" name="submit">submit</button>
                    <p class="mt-2 mb-3 text-muted">© 2023</p>
                </form>
            </div>
        </div>
    </div>
    <script src="../sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>