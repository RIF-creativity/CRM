<<<<<<< HEAD
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "crm");
$result = mysqli_query($conn, "SELECT * FROM user");
$row = mysqli_fetch_assoc($result);


?>
=======
<?php include '../components/navbar.php'; ?>
<?php include '../components/sidebar.php'; ?>



>>>>>>> ff4b382fda4a1320b44ed3f5b66288ac99f66449
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Riwayat Transaksi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard CRM</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../app.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>
  <style>
    text detail pelanggan .detail-pelanggan-title {
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
      background-color: #cfe2ff;
    }

    .table thead tr {
      border-bottom: 2px solid #c4d7f4;
    }

    .table tbody tr {
      border-bottom: 2px solid #c4d7f4;
    }
  </style>
</head>

<body>
<<<<<<< HEAD
  <?php include '../components/navbar.php'; ?>
  <?php include '../components/sidebar.php'; ?>

=======
  <!-- navbar
    <header class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">CRM</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="openSidebar()">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header> 

    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <button class="btn btn-light close-button" onclick="closeSidebar()">&times;</button>
                </li>
                <li class="nav-item profile-picture">
                    <i class="far fa-user-circle fa-5x"></i>
                </li>
                <li class="nav-item profile-name">
                    <h5>Nama</h5>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-box-open"></i> Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i> Pelanggan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-money-bill-wave"></i> Transaksi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-tags"></i> Promo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-envelope"></i> Pesan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-line"></i> Aktivitas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-heart"></i> Loyalitas Pelanggan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user-cog"></i> Admin
                    </a>
                </li>
            </ul>
        </div>
    </nav> -->
  <!-- sidebar -->
>>>>>>> ff4b382fda4a1320b44ed3f5b66288ac99f66449
  <div class="container">
    <div class="row detail-pelanggan-title">
      <div class="h2">Detail Pelanggan</div>
    </div>
    <div class="row">
      <div class="row">
        <div class="col">
          <i class="fas fa-user-circle fa-2x"></i>
        </div>
        <div class="col col-details">
<<<<<<< HEAD
          <div class="row">Nama : <?= $row['nama']; ?></div>
=======
          <div class="row">Nama :.....</div>
>>>>>>> ff4b382fda4a1320b44ed3f5b66288ac99f66449
          <div class="row">Loyalitas :......</div>
          <div class="row">Alamat :......</div>
          <div class="row">Jumlah Transaksi :.....</div>
          <div class="row">Total Transaksi :.....</div>
          <div class="row">Produk Favorit :......</div>

        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <p>Riwayat Transaksi</p>
          <div class="table-container">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">
                    <center>No</center>
                  </th>
                  <th scope="col">
                    <center>Kode Transaksi</center>
                  </th>
                  <th scope="col">
                    <center>Tanggal</center>
                  </th>
                  <th scope="col">
                    <center>Harga</center>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <center>1</center>
                  </th>
                  <td>
                    <center>32389</center>
                  </td>
                  <td>
                    <center>08-11-2023</center>
                  </td>
                  <td>
                    <center>Rp. 50.000,00</center>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <center>2</center>
                  </th>
                  <td>
                    <center>32389</center>
                  </td>
                  <td>
                    <center>08-11-2023</center>
                  </td>
                  <td>
                    <center>Rp. 50.000,00</center>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <center>3</center>
                  </th>
                  <td>
                    <center>32389</center>
                  </td>
                  <td>
                    <center>08-11-2023</center>
                  </td>
                  <td>
                    <center>Rp. 50.000,00</center>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <center>4</center>
                  </th>
                  <td>
                    <center>32389</center>
                  </td>
                  <td>
                    <center>08-11-2023</center>
                  </td>
                  <td>
                    <center>Rp. 50.000,00</center>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <center>5</center>
                  </th>
                  <td>
                    <center>32389</center>
                  </td>
                  <td>
                    <center>08-11-2023</center>
                  </td>
                  <td>
                    <center>Rp. 50.000,00</center>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <center>6</center>
                  </th>
                  <td>
                    <center>32389</center>
                  </td>
                  <td>
                    <center>08-11-2023</center>
                  </td>
                  <td>
                    <center>Rp. 50.000,00</center>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
  <script src="../app.js"></script>
</body>

</html>