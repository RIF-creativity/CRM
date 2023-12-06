<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "crm");
if (!isset($_SESSION["login"])) {
    echo "<body onload=\"
                Swal.fire({
                    icon : 'warning',
                    title: 'Upss...!!!! <br>sesi login anda telah berakhir',
                    text:'harap login kembali',
                    confirmButtonText: 'OK',
                    timer: 2000
                }).then(() => {
                         window.location.href='../login.php';
                    });\">
            </body>";
}
if (isset($_SESSION["login"])) {
    $id = $_SESSION["login"];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM SI-XXI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
    <link href="../sweetalert/dist/sweetalert2.all.min.js" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../app.css">
</head>

<body>
    <?php
    include "../components/navbar.php";
    include "../components/sidebar.php";
    ?>