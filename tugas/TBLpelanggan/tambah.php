<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
if (isset($_POST["submit"])) {
    $user = $_POST["nama"];
    $conn = mysqli_connect("localhost", "root", "", "crm");
    mysqli_query($conn,  "INSERT INTO user values ('', 'user','nama', 'level', 'preferensi', 'alamat', 'gambar', 'email', 'no_wa')");
    mysqli_query($conn,  "INSERT INTO transaksi values ('', 'transaksi','pembeli', 'tanggal', 'total_beli', 'status')");
}
}

?>

<body>
    <form method= "post"

        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
        <button name="submit" type="kirim"></button>
        <label for="nama">level</label>
        <input type="text" name="level" id="level">
        <button name="submit" type="kirim"></button>
        <label for="nama">preferensi</label>
        <input type="text" name="preferensi" id="preferensi">
        <button name="submit" type="kirim"></button>
        <label for="nama">alamat</label>
        <input type="text" name="alamat" id="alamat">
        <button name="submit" type="kirim"></button>
        <label for="nama">gambar</label>
        <input type="text" name="gambar" id="gambar">
        <button name="submit" type="kirim"></button>
        <label for="nama">email</label>
        <input type="text" name="email" id="email">
        <button name="submit" type="kirim"></button>
        <label for="nama">no_wa</label>
        <input type="text" name="no_wa" id="no_wa">
        <button name="submit" type="kirim"></button>   
    </form>  
    <label for="nama">pembeli</label>
        <input type="text" name="pembeli" id="pembeli">
        <button name="submit" type="kirim"></button>
        <label for="nama">tanggal</label>
        <input type="text" name="tanggal" id="tanggal">
        <button name="submit" type="kirim"></button>
        <label for="nama">total_beli</label>
        <input type="text" name="total_beli" id="total_beli">
        <button name="submit" type="kirim"></button>
        <label for="nama">status</label>
        <input type="text" name="status" id="status">
        <button name="submit" type="kirim"></button> 
</body>

</html>

