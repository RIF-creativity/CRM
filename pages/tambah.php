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
    mysqli_query($conn, "INSERT INTO user values ('','$user','','','','','','')");
}

?>

<body>
    <form method="post">
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
        <button name="submit" type="submit">kirim</button>
    </form>
</body>

</html>