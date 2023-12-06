<?php
session_start();
include '../function.php';
$username = $_SESSION["username"];
$email = $_SESSION["mail"];
$password = $_SESSION["password"];
$otp = $_SESSION["otp"];

if (isset($_POST['submit'])) {
    $password = password_hash($password, PASSWORD_DEFAULT);

    //INSERT DATABASE
    mysqli_query($conn, "INSERT INTO login VALUES('','$username','$email','$password','2')");
    mysqli_affected_rows($conn);

    if (mysqli_affected_rows($conn) == true) {
        echo "<body onload=\"
                    Swal.fire({
                        title: 'Pendaftaran Berhasil',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href=  '../login.php';
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
                    <h1 class="text-dark">Masukan Kode OTP</h1>
                    <div class="form-floating">
                        <input name="otp" maxlength="6" type="number" class="form-control" id="floatingInput" placeholder="sumanto" fdprocessedid="8137xg" required>
                        <label for="floatingInput">otp</label>
                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" name="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>