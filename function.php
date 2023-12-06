<<<<<<< HEAD
<?php
//koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "crm");
function ($id, $produk) {
    global $conn;
    mysqli_query($conn, "INSERT INTO cart VALUES ('$id','$produk')");
};
=======
<?php 
//koneksi ke data base
$conn = mysqli_connect("localhost","root","","crm");
>>>>>>> ff4b382fda4a1320b44ed3f5b66288ac99f66449
