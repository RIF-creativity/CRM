<?php
$conn = mysqli_connect("localhost", "root", "", "crm"); //koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* text detail pelanggan */
         .detail-pelanggan-title {
            margin-bottom: 10px;
        }

        .detail-pelanggan-title .h2 {
            font-size: 30px;
        }

        /* container utama */
        .container {
            width: 850px;
        }

        /* icon profile */
        .fa-2x {
            color: #d581a2;
            font-size: 11em;
            margin-left: 25px;
        }

        /* details form */
        .col-details {
        margin-left: -150px;
        }

        .col-details .row {
            font-size: 16px;
        }

        /* text riwayat transaksi */
        p {
            font-size: 18px;
            margin-top: 15px;
            margin-left: 30px;
            margin-bottom: 5px;
        }

        /* table */
        .table-container {
            margin-left: 30px;
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
    </style>
</head>
<body>
    <div class="container">
            <!-- pengambilan data dari table user -->
        <?php
        $userId = 6;
        $userQuery = "SELECT * FROM user WHERE id = $userId";
        $userResult = mysqli_query($conn, $userQuery);
        $userData = mysqli_fetch_assoc($userResult);
        ?>
        <div class="row detail-pelanggan-title">
            <div class="h2">Detail Pelanggan</div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col">
                    <i class="fas fa-user-circle fa-2x"></i>
                </div>
                <div class="col col-details">
                    <!-- pengambilan data dari table transaksi per kolomnya -->
                    <div class="row">Nama: <?php echo $userData['nama']; ?></div>
                    <div class="row">Level: <?php echo $userData['level']; ?></div>
                    <div class="row">Preferensi: <?php echo $userData['preferensi']; ?></div>
                    <div class="row">Alamat: <?php echo $userData['alamat']; ?></div>
                    <div class="row">Email: <?php echo $userData['email']; ?></div>
                    <div class="row">No. WA: <?php echo $userData['no_wa']; ?></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p>Riwayat Transaksi</p>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><center>No</center></th>
                                    <th scope="col"><center>Kode Transaksi</center></th>
                                    <th scope="col"><center>Tanggal</center></th>
                                    <th scope="col"><center>Harga</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- pengambilan data dari table transaksi -->
                            <?php
                                $query = "SELECT * FROM transaksi";
                                $result = mysqli_query($conn, $query);

                                // pengambilan data dari table transaksi dengan looping
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<th scope='row'><center>{$count}</center></th>";
                                    echo "<td><center>{$row['pembeli']}</center></td>";
                                    echo "<td><center>{$row['tanggal']}</center></td>";
                                    echo "<td><center>Rp. " . number_format($row['total_beli'], 2, ',', '.') . "</center></td>";
                                    echo "</tr>";
                                    $count++;
                                }

                                mysqli_close($conn);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>