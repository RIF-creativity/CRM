
<?php
//koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "crm");
function ($id, $produk) {
    global $conn;
    mysqli_query($conn, "INSERT INTO cart VALUES ('$id','$produk')");
};
