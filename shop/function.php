<?php
//koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "crm");

// function query($query){
//     global $conn;
//     $result = mysqli_query($conn,$query);
//     $rows = [];
//     while($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;

//     }

//     return $rows;
// }

function tambah($data){
    global $conn;

    $pembeli = htmlspecialchars($data["nama"]);
    $email =  htmlspecialchars($data["email"]);
    $nohandphone =  htmlspecialchars($data["phoneNumber"]);  
    $total_harga =  htmlspecialchars($data["total"]);    
    $tanggal = date("Y-m-d");

    $query = "INSERT INTO transaksi VALUES
        ('','$pembeli','$tanggal','$nohandphone','$email','$total_harga')
        ";
//cek adakah perubahan
    mysqli_query($conn,$query);
//kembalikan nilai function ini dan kirim ke halaman tambah data
return mysqli_affected_rows($conn);
}




function ($id, $produk) {
    global $conn;
    mysqli_query($conn, "INSERT INTO cart VALUES ('$id','$produk')");
};

