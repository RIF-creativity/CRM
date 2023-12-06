<?php
$conn = mysqli_connect("localhost", "root", "", "crm"); //koneksi ke database
$result = mysqli_query($conn, "SELECT * FROM user"); //koneksi ke tabel
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../app.css">
</head>

<body>
    <?php include '../components/navbar.php'; ?>
    <?php include '../components/sidebar.php'; ?>
    <label for="nama">nama</label>
    <!-- $_POST['nama'] -->
    <input type="text" name="nama" id="nama">
    <div class="container mt-4">
        <div class="row">
            <h1>Pelanggan <span class="p">jumlah</span></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="col-md-7">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="search" placeholder="">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <form class="form-inline">
                            <div class="form-group">
                                <select class="form-control" id="filter">
                                    <option value="">Filter</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <center>Nomor</center>
                                </th>
                                <th scope="col">
                                    <center>Nama</center>
                                </th>
                                <th scope="col">
                                    <center>Alamat</center>
                                </th>
                                <th scope="col">
                                    <center>Royalitas</center>
                                </th>
                                <th scope="col">
                                    <center>Menu</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) : ?>
                                <tr>
                                    <th scope="row">
                                        <center><?= $row['id']; ?></center>
                                    </th>
                                    <td>
                                        <center><?= $row['nama']; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row['alamat']; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row['level']; ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="https://wa.me/083896059029" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                                            <a href="edit_customer.php?id=2" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="view_customer.php?id=2" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>