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
