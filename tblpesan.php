<?php include 'admin/pages/admin/layout/navbar.php'; ?>
<?php include 'admin/pages/admin/layout/sidebar.php'; ?>

<?php 
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin/css/style.css">
    <style>
        .container {
            width: 850px;
        }
        .table-container {
            max-height: 300px;
            overflow-y: scroll;
        }
        .table {
            background-color: #cfe2ff
        }
        .table thead tr {
            border-bottom: 2px solid #c4d7f4
        }
        .table tbody tr {
            border-bottom: 2px solid #c4d7f4
        }
        #search {
            height: 35px;
        }
        #filter {
            height: 35px;
        }
        h1 {
            font-size: 40px;
        }
        .p {
            font-size: 18px;
            color: #999;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <h1>Pesan <span class="p">jumlah</span></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control" id="categoryFilter">
                            <option value="">Semua Kategori</option>
                            <option value="belum-dibaca">Belum Dibaca</option>
                            <option value="sistem">Sistem</option>
                            <option value="feedback">Feedback</option>
                            <option value="masalah">Masalah</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-md-12 mt-3">
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
                                <th scope="col"><center>Nomor</center></th>
                                <th scope="col"><center>Judul</center></th>
                                <th scope="col"><center>Penerima</center></th>
                                <th scope="col"><center>Kategori</center></th>
                                <th scope="col"><center>Menu</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><center>1</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><center>2</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><center>3</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><center>4</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><center>5</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><center>6</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><center>7</center></th>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center></center></td>
                                <td>
                                    <center>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </center>
                                </td>
                            </tr>
                            <!-- Add more message rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add an event listener to the category filter
            $('#categoryFilter').change(function () {
                filterTable();
            });
    
            // Add an event listener to the search input
            $('#search').keyup(function () {
                filterTable();
            });
    
            function filterTable() {
                var categoryFilter = $('#categoryFilter').val().toLowerCase();
                var searchTerm = $('#search').val().toLowerCase();
    
                // Loop through each row in the table
                $('tbody tr').each(function () {
                    var rowCategory = $(this).find('td:eq(2)').text().toLowerCase(); // Assuming category is in the third column
    
                    // Check if the row matches the filter and search criteria
                    if ((categoryFilter === '' || rowCategory === categoryFilter) &&
                        ($(this).text().toLowerCase().indexOf(searchTerm) !== -1)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>
    
</body>
</html>