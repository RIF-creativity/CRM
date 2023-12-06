<?php
// Koneksi ke database menggunakan PDO
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "crm"; // Ganti dengan nama database Anda
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Bot CRM</title>
</head>

<body>
    <div class="container-sm container-fluid text-center mt-4 w-25 bg-primary-subtle p-5 rounded">
        <h2>selamat datang di bot pengisian data</h2>
        <div class="input-group justify-content-between mt-3">
            <a href="?action=mulai">
                <button id="mulaiButton" class="btn btn-success">Mulai</button>
            </a>
            <a href="?action=stop">
                <button id="stopButton" class="btn btn-danger">Stop</button>
            </a>
        </div>
    </div>


    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'mulai') {
            $counter = 0;
            while (true) {
                $counter++;
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // Set mode exception untuk error
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Misalkan kita ingin mengambil nilai kolom 'nama' dari tabel 'tabel_sumber'
                    $sqlSelect = "SELECT user.id,produk.id_produk,produk.harga,produk.jumlah FROM user,produk  where produk.jumlah <>0 ORDER BY RAND() LIMIT 1";
                    $stmtSelect = $conn->prepare($sqlSelect);
                    $stmtSelect->execute();

                    // Ambil nilai dari hasil query
                    $result = $stmtSelect->fetch(PDO::FETCH_ASSOC);
                    $nama = $result['id']; // Nilai yang diambil dari tabel_sumber
                    $produk = $result['id_produk']; // Nilai yang diambil dari tabel_sumber
                    $harga = $result['harga']; // Nilai yang diambil dari tabel_sumber
                    $j = $result['jumlah']; // Nilai yang diambil dari tabel_sumber

                    //variabel
                    $jumlah = rand(1, 5);
                    $j -= $jumlah;
                    $tharga = intval($harga) * $jumlah;
                    $tanggal = date("Y-m-d");
                    $id = rand(1000, 9999);
                    // Gunakan nilai yang diambil untuk memasukkan data ke dalam tabel tujuan
                    $sqlInsert = "INSERT INTO transaksi VALUES (:id,:pembeli,:tanggal,:total,'terkirim')";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $stmtInsert->bindParam(':id', $id);
                    $stmtInsert->bindParam(':pembeli', $nama);
                    $stmtInsert->bindParam(':tanggal', $tanggal);
                    $stmtInsert->bindParam(':total', $tharga);
                    $stmtInsert->execute();

                    $sqlInsert = "INSERT INTO detail_transaksi VALUES ('',:id,:produk,:jumlah,:harga,:pembeli)";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $stmtInsert->bindParam(':id', $id);
                    $stmtInsert->bindParam(':pembeli', $nama);
                    $stmtInsert->bindParam(':produk', $produk);
                    $stmtInsert->bindParam(':harga', $tharga);
                    $stmtInsert->bindParam(':jumlah', $jumlah);
                    $stmtInsert->execute();

                    $sqlInsert = "UPDATE produk SET jumlah = :jumlah WHERE id_produk = :id";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $stmtInsert->bindParam(':jumlah', $j);
                    $stmtInsert->bindParam(':id', $produk);
                    $stmtInsert->execute();
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

                // Tutup koneksi
                $conn = null;
                flush();
                sleep(10); // Tunda 1 detik
            }
            echo $counter . " Data dimasukan";
            exit(); // Keluar dari skrip PHP setelah menghentikan perulangan
        } elseif ($_GET['action'] == 'stop') {
            // Lakukan apa pun yang diperlukan saat tombol "Stop" ditekan
            echo "bot dihentikan";
            exit(); // Keluar dari skrip PHP setelah menghentikan perulangan
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>