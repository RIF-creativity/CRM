<?php
session_start();
if (isset($_POST['submit'])) {
    require 'function.php';
    $username = $_POST['username'];
    $password = $_POST['password'];


    $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        //cek sandi
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION["login"] = $row['id'];
            if ($row['akses'] == 1) {
                $location = 'pages/dashboard.php';
            } else {
                $location = 'shop/';
            }
            echo "<body onload=\"
                    Swal.fire({
                        title: 'Login Berhasil',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href=  '" . $location . "';
                    });\">
                </body>";
        }
    } else {
        echo "<body onload=\"
                    Swal.fire({
                        title: 'Login gagal',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });\">
                </body>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="sweetalert/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="text-center bg-light">
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="post">
                    <img class="mb-3" src="Db/img/logo.png" alt="" width="100%">

                    <div class="form-floating">
                        <input name="username" type="username" class="form-control" id="floatingInput" placeholder="name@example.com" fdprocessedid="8137xg" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating pt-1 mb-3">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" fdprocessedid="mj0mpk" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Login</button>
                    <p class="pt-2 text-start"><a href="register/">belum punya akun</a></p>
                    <p class="mt-2 mb-3 text-muted">© 2023</p>
                </form>
            </div>
        </div>
    </div>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>