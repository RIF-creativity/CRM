<?php
session_start();
//Rute default yang diarahkan ke dashbord page
if (isset($_SESSION['login'])) {
    header("Location: pages/admin/dashboard.php");
    exit(); // Terminate script execution after the redirect
}else{
    header("Location:../index.php");   
}
exit;
?>
