<?php include 'layout/navbar.php'; ?>
<?php include 'layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>
<div class="container">
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
                            <th><center>#</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Email</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                        <tr class="table">
                            <td><center>1</center></td>
                            <td><center>John</center></td>
                            <td><center>john@example.com</center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
    //Skrip untuk Diagram Line
    var ctx = document.getElementById('myLineChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
            datasets: [{
                label: 'Data 1',
                data: [5, 15, 10, 25, 20, 30],
                borderColor: 'rgba(122, 190, 131, 1)',
                fill: false
            },
            {
                label: 'Data 2',
                data: [10, 20, 15, 30, 25, 35],
                borderColor: 'rgba(54, 162, 235, 1)',
                fill: false
            },
            {
                label: 'Data 3',
                data: [15, 25, 20, 35, 30, 40],
                borderColor: 'rgba(169, 167, 181, 1)',
                fill: false
            }],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    
    //Skrip untuk Diagram Pie
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Loss', 'Deal', 'Pending'],
            datasets: [{
                data: [30, 40, 30],
                backgroundColor: [
                    'rgba(255, 86, 51, 255)',
                    'rgba(52, 255, 86, 255)',
                    'rgba(86, 51, 255, 255)',
                ],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'right',
                    onClick: function(e) {
                        e.stopPropagation();
                    }
                },
                datalabels: {
                    color: '#fff',
                    formatter: (value, ctx) => {
                        let label = ctx.chart.data.labels[ctx.dataIndex];
                        return label + ": " + value + "%";
                    }
                }
            }
        }
    });
</script>
</body>
</html>