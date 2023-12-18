<?php
$conn = mysqli_connect("localhost", "root", "", "crm");
// Fungsi untuk mengenkripsi password menggunakan metode bawaan PHP (password_hash())
function encryptPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

// Daftar nama yang lebih banyak untuk variasi
$names = ['John Doe', 'Jane Smith', 'Alice Johnson', 'Bob Williams', 'Eve Jones', 'Charlie Brown', 'Grace Davis', 'Michael Miller', 'Olivia Wilson', 'Sophia Moore'];
$emails = ['john@example.com', 'jane@example.com', 'alice@example.com', 'bob@example.com', 'eve@example.com', 'charlie@example.com', 'grace@example.com', 'michael@example.com', 'olivia@example.com', 'sophia@example.com'];

// Fungsi untuk mendapatkan data preferensi dan point secara random
function getRandomPreference()
{
    $preferences = ['pakaian', 'tas', 'sepatu'];
    return $preferences[array_rand($preferences)];
}

function getRandomPoint()
{
    return rand(0, 10000);
}

if (isset($_POST['tambah'])) {
    $j = $_POST['jumlah'];
    // Query untuk memasukkan 100 data dummy ke dalam tabel login dan user
    for ($i = 1; $i <= $j; $i++) {
        $name = $names[array_rand($names)]; // Nama diambil secara acak
        $email = $emails[array_rand($emails)]; // Email diambil secara acak
        $username = str_replace(' ', '', strtolower($name)) . $i; // Username diambil dari nama
        $password = encryptPassword('password' . $i); // Menggunakan fungsi untuk mengenkripsi password
        $akses = 2; // Akses diisi dengan angka 1
        $preferensi = getRandomPreference(); // Mendapatkan preferensi secara acak
        $alamat = "kamana wae bisa" . $i; // Isi alamat sesuai kebutuhan
        $no_wa = "083896059029"; // Isi nomor WhatsApp sesuai kebutuhan
        $point = getRandomPoint(); // Mendapatkan point secara acak

        // Query untuk tabel login
        $sqlLogin = "INSERT INTO login (id, username, email, password, akses) VALUES (NULL, '$username', '$email', '$password', '$akses')";
        $conn->query($sqlLogin);

        // Mengambil ID terakhir yang di-generate oleh AUTO_INCREMENT
        $lastInsertedId = $conn->insert_id;

        // Query untuk tabel user dengan menggunakan ID dari tabel login
        $sqlUser = "INSERT INTO user (id, nama, level, preferensi, alamat, gambar, email, no_wa, point) VALUES ('$lastInsertedId', '$name', '1', '$preferensi', '$alamat', 'default_user.png', '$email', '$no_wa', '$point')";
        $conn->query($sqlUser);
    }

    echo $j . " dummy data berhasil dimasukkan ke dalam tabel.";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bot tambah user</title>
</head>

<body>
    <h1>SELAMAT DATANG</h1>
    <p>di mesin penambah user</p>
    <div>
        <form method="post">
            <label for="jumlah">jumlah</label>
            <input type="number" name="jumlah" id="jumlah">
            <button name="tambah">tambah</button>
        </form>
    </div>

</body>

</html>