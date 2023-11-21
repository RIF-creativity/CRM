<!DOCTYPE html>
<body>
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
                    <a class="nav-link" href="../../../tblproduk.php">
                        <i class="fas fa-box-open"></i> Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../tblpelanggan.php">
                        <i class="fas fa-users"></i> Pelanggan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../tbltransaksi.php">
                        <i class="fas fa-money-bill-wave"></i> Transaksi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-tags"></i> Promo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../tblpesan.php">
                        <i class="fas fa-envelope"></i> Pesan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../../tblaktivitas.php">
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
    </nav>
    <script>
        //Skrip untuk membuka dan menutup Sidebar
        function openSidebar() {
            document.getElementById("sidebar").style.right = "0";
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.right = "100%";
        }
    </script>
</body>
</html>
