<<<<<<< HEAD
<?php
include '../components/header.php';
$penjualan = 0;
$result = mysqli_query($conn, "SELECT jumlah FROM detail_transaksi");
foreach ($result as $row) {
    $j = $row['jumlah'];
    $penjualan = $penjualan + intval($j);
}
$result = mysqli_query($conn, "SELECT isi FROM pesan where penerima LIKE '%$id%' and jenis = 'target'");
$target = mysqli_fetch_assoc($result);
?>
<div class="container w-100">
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col">
                    <div class="box pelanggan-box">
                        <i class="fas fa-user"></i> Pelanggan
                        <p>90</p>
                    </div>
                </div>
                <div class="col">
                    <div class="box deal-box">
                        <i class="fas fa-handshake"></i> Deal
                        <p>90</p>
                    </div>
                </div>
                <div class="col">
                    <div class="box loss-box">
                        <i class="fas fa-exclamation-triangle"></i> Loss
                        <p>90</p>
                    </div>
                </div>
                <div class="col">
                    <div class="box winrate-box">
                        <i class="fas fa-chart-line"></i> Winrate
                        <p>3.5</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box total-penjualan-box">
                        <i class="fas fa-shopping-cart"></i> Total Penjualan
                        <p><?= $penjualan; ?></p>
                        <a>produk</a>
                    </div>
                </div>
                <div class="col">
                    <div class="pie-chart-container">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="target-box">
                        <div class="target-container text-center">
                            <p>target</p>
                        </div>
                        <div class="text-center">
                            <h2>
                                <?= $target['isi']; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="target-box">
                        <div class="target-container">
                            <p>profit</p>
                        </div>
                    </div>
                </div>

                <div class="col tugas-box">
                    <div class="tugas-container">
                        <i class="fas fa-tasks"></i> Tugas
                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="row">
                <div class="line-chart-container">
                    <canvas id="myLineChart"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <center>#</center>
                                </th>
                                <th>
                                    <center>Nama</center>
                                </th>
                                <th>
                                    <center>Email</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <center>1</center>
                                </td>
                                <td>
                                    <center>John</center>
                                </td>
                                <td>
                                    <center>john@example.com</center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
=======
<?php include '../components/navbar.php'; ?>
<?php include '../components/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
    <link rel="stylesheet" type="text/css" href="../app.css">
</head>

<body>
    <div class="container w-100">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="box pelanggan-box">
                            <i class="fas fa-user"></i> Pelanggan
                            <p>90</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box deal-box">
                            <i class="fas fa-handshake"></i> Deal
                            <p>90</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box loss-box">
                            <i class="fas fa-exclamation-triangle"></i> Loss
                            <p>90</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box winrate-box">
                            <i class="fas fa-chart-line"></i> Winrate
                            <p>3.5</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box total-penjualan-box">
                            <i class="fas fa-shopping-cart"></i> Total Penjualan
                            <p>90</p>
                            <a>produk</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pie-chart-container">
                            <canvas id="myPieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="target-box">
                            <div class="container target-container">
                                <i class="fas fa-bullseye"></i> Target
                            </div>
                        </div>
                        <div class="profit-box">
                            <div class="container profit-container">
                                <i class="fas fa-dollar-sign"></i> Profit
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tugas-box">
                            <div class="container tugas-container">
                                <i class="fas fa-tasks"></i> Tugas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row-md-6">
                    <div class="line-chart-container">
                        <canvas id="myLineChart"></canvas>
                    </div>
                </div>
                <div class="row-md-6">
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <center>#</center>
                                    </th>
                                    <th>
                                        <center>Nama</center>
                                    </th>
                                    <th>
                                        <center>Email</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                                <tr class="table">
                                    <td>
                                        <center>1</center>
                                    </td>
                                    <td>
                                        <center>John</center>
                                    </td>
                                    <td>
                                        <center>john@example.com</center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
>>>>>>> ff4b382fda4a1320b44ed3f5b66288ac99f66449
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
<?php include '../components/footer.php'; ?>
=======
    <script src="../app.js"></script>
</body>

</html>
>>>>>>> ff4b382fda4a1320b44ed3f5b66288ac99f66449
