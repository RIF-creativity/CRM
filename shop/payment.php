<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IM-Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 50px;
    }

    #countdown {
      font-size: 36px;
      color: #333;
    }
  </style>
</head>

<body>
    <!-- Navbar Start -->
    <?php
    $page = 'transaksi';
    include 'navbar.php'; ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">SILAHKAN LAKUKAN PEMBAYARAN</h1>
            <div id="countdown"></div>
            <h1 class="font-weight-semi-bold text-uppercase mb-3">VITRUAL ACCOUNT IM-SHOP</h1>
            <h1 class="font-weight-semi-bold text-uppercase mb-3 center">0891231239123</h1>
            <li>
                <h1>Langkah Pembayaran:</h1>
                <ol>Masuk Ke M-banking Bank Anda</ol>
                <ul>Masuk Ke menu Pembayaran</ul>
                <ul>Masuk ke Virtual account</ul>
                <ul>Masukan kode tersebut lalu Tekasn OK </ul>
                <ul>Masukan Pin Anda</ul>
                <ul>Simpan Bukti Pembayaran</ul>

            </li>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function getTimeRemaining(endTime) {
      const totalSeconds = Math.floor((endTime - Date.now()) / 1000);
      const hours = Math.floor(totalSeconds / 3600);
      const minutes = Math.floor((totalSeconds % 3600) / 60);
      const seconds = totalSeconds % 60;
      return {
        totalSeconds,
        hours,
        minutes,
        seconds
      };
    }

    // Fungsi untuk menampilkan countdown pada halaman
    function updateCountdown() {
      const targetDate = new Date();
      targetDate.setDate(targetDate.getDate() + 1); // Waktu target adalah 24 jam dari waktu sekarang
      targetDate.setHours(0, 0, 0, 0); // Atur jam, menit, detik, dan milidetik menjadi 0

      const timeRemaining = getTimeRemaining(targetDate);
      const countdownElement = document.getElementById('countdown');
      countdownElement.innerHTML = `Sisa waktu: ${timeRemaining.hours} jam, ${timeRemaining.minutes} menit, ${timeRemaining.seconds} detik`;

      if (timeRemaining.totalSeconds <= 0) {
        clearInterval(countdownInterval);
        countdownElement.innerHTML = "Waktu telah habis!";
      }
    }

    // Panggil fungsi updateCountdown setiap detik
    const countdownInterval = setInterval(updateCountdown, 1000);

    // Panggil fungsi updateCountdown sekali pada awalnya untuk menghindari jeda 1 detik pada tampilan awal
    updateCountdown();
    </script>
</body>

</html>