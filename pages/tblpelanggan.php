<?php
$page = 'tblpelanggan';
include '../components/header.php';
include '../email/index.php';
$U = mysqli_query($conn, "SELECT * FROM user"); //koneksi ke tabel
$CU = mysqli_query($conn, "SELECT COUNT(nama) as total FROM user");

if (isset($_GET['CP'])) {
    $data = $_GET['CP'];
    $U = mysqli_query($conn, "SELECT * FROM user where nama LIKE '%$data%' or id LIKE '%$data%'");
}
$jumlah = mysqli_fetch_assoc($CU);

if (isset($_POST['kirim_email'])) {
    $email = $_POST['email'];
    $penerima = $_POST['penerima'];
    $pengirim = 'rif-creativity@gmail.com';
    $judul = $_POST['judul'];
    $pesan = $_POST['pesan'];
    if (Email($email, $pengirim, $penerima, $judul, $pesan) > 0) {
        echo
        "<script>
            window.location='tblpelanggan.php?msg=1';
        </script>
        ";
    }
}

if (isset($_GET['msg'])) {
    echo "<body onload=\"
                    Swal.fire({
                        title: 'Email terkirim',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });\">
                </body>";
}
?>

<div class="container-fluid bg-white text-dark text-start p-5">
    <div class="row">
        <div class="col-sm-6 col-md-8">
            <h1>Pelanggan <span class="text-muted fs-6">jumlah : <?= $jumlah['total']; ?> akun</span></h1>
            <div>
                <form method="get">
                    <div class=" form-group d-flex flex-row-reverse">
                        <div class="input-group w-50 me-3">
                            <input type="text" class="form-control" id="search" placeholder="cari pelanggan" name="CP">
                            <button class=" input-group-text" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <button class="input-group-text me-2">
                            <i class="fa-solid fa-users"></i>
                        </button>
                    </div>
                </form>

            </div>
            <div class=" table-container" style="max-height: 68vh;">
                <table class="table">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">
                                <center>No</center>
                            </th>
                            <th scope="col">
                                <center>Nama</center>
                            </th>
                            <th scope="col">
                                <center>Alamat</center>
                            </th>
                            <th scope="col">
                                <center>Royalitas</center>
                            </th>
                            <th scope="col">
                                <center>Menu</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($U as $row) : ?>
                            <tr>
                                <th scope="row">
                                    <center><?= $i; ?></center>
                                </th>
                                <td>
                                    <center><?= $row['nama']; ?></center>
                                </td>
                                <td>
                                    <center><?= $row['alamat']; ?></center>
                                </td>
                                <td>
                                    <center><?= $row['level']; ?></center>
                                </td>
                                <td>
                                    <center>
                                        <p class="d-inline-flex gap-1">
                                            <a href="https://wa.me/083896059029" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#email<?= $i; ?>" aria-expanded="false" aria-controls="email<?= $i; ?>">
                                                <i class="fa-solid fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample<?= $i; ?>" aria-expanded="false" aria-controls="multiCollapseExample<?= $i; ?>">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </p>
                                    </center>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <!--tolong desaint bagin ini -->
            <?php
            $i = 1;
            foreach ($U as $row) : ?>
                <!--kirim email-->
                <div class="collapse multi-collapse" id="email<?= $i; ?>">
                    <div class="card card-body">
                        <form method="post">
                            <label for="penerima">penerima</label>
                            <input type="text" name="penerima" id="penerima" value="<?= $row['nama']; ?>" readonly><br>
                            <label for="email">email</label>
                            <input type="text" name="email" id="email" value="<?= $row['email']; ?>" readonly><br>
                            <label for="judul">judul</label>
                            <input type="text" name="judul" id="judul"><br>
                            <label for="pesan">pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="10"></textarea><br>
                            <button type="submit" name="kirim_email">kirim</button>
                        </form>
                    </div>
                </div>

                <!--detail pelanggan -->
                <div class="collapse multi-collapse" id="multiCollapseExample<?= $i; ?>">
                    <div class="card card-body">
                        <?= $row['id']; ?>
                        <img src="../Db/img/<?= $row['gambar']; ?>" alt="">

                        <?= $row['nama']; ?>
                        <?= $row['level']; ?>
                        <?= $row['preferensi']; ?>
                        <?= $row['alamat']; ?>
                        <?= $row['email']; ?>
                        <?= $row['no_wa']; ?>
                        <?= $row['point']; ?>
                    </div>
                </div>
            <?php
                $i++;
            endforeach; ?>
        </div>
        <!-- sampai sini aja -->
    </div>
</div>
<?php include '../components/footer.php' ?>