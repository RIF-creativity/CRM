<?php
$page = 'dashboard';
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../components/footer.php'; ?>