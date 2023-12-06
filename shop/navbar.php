<?php
require '../function.php';
session_start();
$home = '';
$cr = 'text-primary';
$shop = '';
$transaksi = '';
switch ($page) {
    case 'home':
        $home = 'active';
        break;
    case 'shop':
        $shop = 'active';
        break;
    case 'transaksi':
        $transaksi = 'active';
        break;
    case 'cart':
        $cr = 'btn-primary text-light';
        break;
}
if (isset($_SESSION["login"])) {
    $id = $_SESSION["login"];
    $result = mysqli_query($conn, "SELECT * FROM login WHERE id = '$id'");
    $result2 = mysqli_query($conn, "SELECT * FROM cart WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $user = $row["username"];
    $cart = mysqli_num_rows($result2);
}

if (isset($_GET["d"])) {
    $dlt = $_GET["d"];
    mysqli_query($conn, "DELETE FROM cart where id = '$id' and id_produk = '$dlt'");
    header("Location: cart.php");
}
if (isset($_POST["cart"])) {
    $id_produk = $_POST["cart"];
    $re = mysqli_query($conn, "SELECT * FROM cart where id = '$id' and id_produk = '$id_produk' ");
    if (mysqli_num_rows($re) === 0) {
        mysqli_query($conn, "INSERT INTO cart values('$id','$id_produk',1)");
    } else {
        foreach ($re as $row) {
            $jumlah = $row["jumlah"];
            $jumlah += 1;
        }
        mysqli_query($conn, "UPDATE cart set jumlah = '$jumlah' where id = '$id' and id_produk = '$id_produk'");
        echo $jumlah;
    }
    echo "
        <script>
            // Membuat fungsi untuk melakukan reload tanpa menghilangkan parameter GET
            function refreshWithoutLosingParams() {
                var params = new URLSearchParams(window.location.search);
                var currentURL = window.location.pathname + '?' + params.toString();
                window.location.href = currentURL;
            }

            // Memanggil fungsi refreshWithoutLosingParams() pada saat halaman dimuat
            window.onload = function() {
                refreshWithoutLosingParams();
            };
        </script>
    ";
}

if (isset($_GET['value'])) {
    $value = $_GET['value'];
    $produk = mysqli_query($conn, "SELECT * FROM produk where nama LIKE '%$value%' or kategori LIKE '%$value%'");
    if (mysqli_num_rows($produk) === 0) {
        header("Location: eror.php");
    }
} else {
    $produk = mysqli_query($conn, "SELECT * FROM produk");
}
if (isset($_GET["dt"])) {
    $dt = $_GET["dt"];
    $detail = mysqli_query($conn, "SELECT * FROM produk where id_produk = '$dt'");
    $rowd = mysqli_fetch_assoc($detail);
    $K_produk = $rowd["kategori"];
    $T_produk = mysqli_query($conn, "SELECT * FROM produk where kategori = '$K_produk'");
}
$kategori = mysqli_query($conn, "SELECT * FROM produk group by kategori");

?>
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">IM</span>Shop</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form method="get" action="shop.php">
                <div class="input-group">
                    <input type="text" name="value" class="form-control" placeholder="Search for products">
                    <button type="submit" value="submit" class="input-group-text bg-transparent text-primary">
                        <div class="input-group-append">
                            <i class="fa fa-search"></i>
                        </div>
                    </button>
                </div>
            </form>
        </div>
        <?php if (isset($_SESSION["login"])) : ?>
            <div class="col-lg-3 col-6 text-right ">
                <a href="cart.php" class="btn border <?= $cr; ?>">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge"><?= $cart; ?></span>
                </a>
            </div>
        <?php else : ?>
            <a onclick="alert('akses ditolak \n mohon login terlebih dahulu');" class="btn border text-primary">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge">0</span>
            </a>
        <?php endif; ?>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 position-absolute bg-white" style="height: 410px">
                    <?php foreach ($kategori as $row) : ?>
                        <a href="shop.php?value=<?= $row['kategori']; ?>" class="nav-item nav-link"><?= $row['kategori']; ?></a>
                    <?php endforeach; ?>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">IM</span>Shop</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?= $home; ?> ">Home</a>
                        <a href="shop.php" class="nav-item nav-link <?= $shop; ?>">Shop</a>
                        <a href="transaksi.php" class="nav-item nav-link <?= $transaksi; ?>">Transaksi</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <?php if (isset($user)) : ?>
                            <a href="" class="nav-item nav-link "><?= $user; ?></a>
                            <a href="../logout.php" class="nav-item nav-link ">logout</a>
                        <?php else : ?>
                            <a href="../login.php" class="nav-item nav-link">Login</a>
                            <a href="../register/index.php" class="nav-item nav-link">Register</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>
<!-- Navbar End -->