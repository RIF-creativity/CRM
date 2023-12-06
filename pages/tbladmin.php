<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../app.css">
</head>

<body>
    <?php
    include("../components/navbar.php");
    include("../components/sidebar.php");
    ?>
    <div class="container mt-4">
        <div class="row">
            <h1>Admin <span class="p">jumlah</span></h1>
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
                    <div class="col-md-2">
                        <button class="btn btn-success" id="addAdminBtn">Tambah Admin</button>
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
                                    <center>Jabatan</center>
                                </th>
                                <th scope="col">
                                    <center>Password</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <center>1</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <center>2</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <center>3</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <center>4</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <center>5</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <center>6</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <center>7</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <!-- Add more admin rows as needed -->
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