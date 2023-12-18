-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2023 pada 15.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_produk`, `jumlah`) VALUES
(0, 1, 1),
(5, 2, 1),
(6, 1, 1),
(6, 2, 1),
(6, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(4) NOT NULL,
  `id_transaksi` int(4) NOT NULL,
  `produk` int(50) NOT NULL,
  `jumlah` int(8) NOT NULL,
  `harga` int(15) NOT NULL,
  `pembeli` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `produk`, `jumlah`, `harga`, `pembeli`) VALUES
(920, 9874, 4, 5, 250000, 6),
(921, 2546, 3, 4, 1000000, 7),
(922, 9546, 1, 3, 150000, 8),
(923, 5196, 4, 5, 250000, 9),
(924, 9808, 3, 4, 1000000, 7),
(925, 3449, 3, 3, 750000, 8),
(926, 4790, 1, 3, 150000, 9),
(927, 2652, 3, 1, 250000, 6),
(928, 3294, 1, 3, 150000, 9),
(929, 5011, 2, 2, 240000, 7),
(930, 8015, 4, 1, 50000, 6),
(931, 4143, 3, 2, 500000, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `akses`) VALUES
(5, 'admin', 'kumahaathnya@gmail.com', '$2y$10$PcxCc57x0MlG7TeJK432dujfm2kCOTnLX34Nqz2Fhvwd4hiS5Zrf2', 1),
(6, 'rifki', 'rifki.hamdani.ix.4@gmail.com', '$2y$10$bEb70tOd19.gTn76nKa5p.6EMgdcgdJQROKEMB7CBzVXjB.iMdn6m', 2),
(21, 'evejones1', 'michael@example.com', '$2y$10$S6oytsPgiiZ0zkFG0CZ4POqMQMJrGj5Shqa3Hon9tOEM2hNDezmi2', 2),
(22, 'oliviawilson2', 'sophia@example.com', '$2y$10$4.grumry4DehAjnbN.va4usr9gRRNNiFeprMHge0E.UEtjtNEV78m', 2),
(23, 'sophiamoore3', 'sophia@example.com', '$2y$10$4YuYPEqJMLmBNNAv6y4XsOL/cRcKsaBYpsrZZgBG0J6.1mkjodkie', 2),
(24, 'janesmith4', 'grace@example.com', '$2y$10$fN/JX.qxFEbt7uOJgFpeV.5qcdGMpZwbxJWRQnTqRuDGARWP9M.9e', 2),
(25, 'johndoe5', 'john@example.com', '$2y$10$sD6bNYE254otvWzd/BFfWO8R286nuyYniIP0w./0FQUl.Dqw2umXK', 2),
(26, 'bobwilliams6', 'michael@example.com', '$2y$10$I6hCPAHZfqtu8IeMGV5F4uVBtuixvasKIDarMQ6QysCkuSDbiwB7i', 2),
(27, 'evejones7', 'bob@example.com', '$2y$10$wYXRlxvUZThdIpkBDY3H8e0LuDfyBJvmY09a2IIEw5Le6lP.9kcYq', 2),
(28, 'michaelmiller8', 'michael@example.com', '$2y$10$03.MkjcwKTcpdoWYumwlBOaTwnCA9vphS.sMKXPd85yocueRLGfpC', 2),
(29, 'gracedavis9', 'bob@example.com', '$2y$10$qMRkNjuGpx7ZoyBbXSJywOiGESXaDUdbjWMjXotMGS91sBEaWXMOy', 2),
(30, 'gracedavis10', 'jane@example.com', '$2y$10$EQPgCq5KkJ04STzpqiaeCuXVLrdNeveRbVBob96MHtfWUQA0m2MBq', 2),
(31, 'michaelmiller1', 'grace@example.com', '$2y$10$BB3NkwiN7Y3RRoeU4uQ5j.qljINeqcZQB2JdXt972c8f7/OxAJy8W', 2),
(32, 'alicejohnson2', 'sophia@example.com', '$2y$10$Mcreeimz7x3J8ppAd59y4OR..eAXIoI/PpBzmHMXsXiNE1SsXvtSi', 2),
(33, 'gracedavis3', 'michael@example.com', '$2y$10$HpRb4IlxxyTc0nE1kecA4uPEHFYWAArT96TwYgyGypFGskzGW27JC', 2),
(34, 'gracedavis4', 'alice@example.com', '$2y$10$YKgElOSuMsly8EIAubRi2O1.cB1JXfmb5Lp6hrjAoOwq8N9JNZ6wy', 2),
(35, 'sophiamoore5', 'grace@example.com', '$2y$10$AoUl/HQO4iYdZRyvERqmqe1Wvgavl/wbDtcmIXCxnvxDqSRcRNFwK', 2),
(36, 'alicejohnson6', 'bob@example.com', '$2y$10$2PQ4ExjZmzMJWKNfS1i5Uebtv1R39moIkLBKM5FJba.oC8sXTHgN.', 2),
(37, 'alicejohnson7', 'charlie@example.com', '$2y$10$ECkBvA/54IBIZOD81bFUjeUcw5rT9X1AT8sPCSPRYIvbK6fP/8Mke', 2),
(38, 'janesmith8', 'sophia@example.com', '$2y$10$sQoWOvinOVnrkn2Jusfvk.BYW3gbms3YzxvlsETXA6kBF039Mnvq6', 2),
(39, 'janesmith9', 'grace@example.com', '$2y$10$eiLAI9y8U3A.9l29Ruh7CuOy..YgR.rgmHHqryallnu.3lOhXW/qW', 2),
(40, 'bobwilliams10', 'sophia@example.com', '$2y$10$o3Ix.IL2pVE8E80xa2j8PuE8tjpXKOg7AWXTMxlpS7rdeVACxa1xe', 2),
(41, 'bobwilliams11', 'michael@example.com', '$2y$10$KzBKaU9LeGXEdTFkPsjBqehSN2xFkagBJSlOA3.KdSyUXNkgTEm6y', 2),
(42, 'charliebrown12', 'bob@example.com', '$2y$10$mn/f0h5goQfbCIsNSZfd4e7E1rShwDlcUBt07jgx0Gd8Y.c2Tbg0W', 2),
(43, 'gracedavis13', 'alice@example.com', '$2y$10$jNQAM0nbIxybLlXRran/vOaDO.1MlUxTi9QzYbcGQUa0s9hLfFeda', 2),
(44, 'charliebrown14', 'sophia@example.com', '$2y$10$pUKkkgzp5RF8kSmLtwQ91ey8ZHp.SgYLlt3v.8N4kNOi.9w1DmnVm', 2),
(45, 'evejones15', 'sophia@example.com', '$2y$10$uUwqPeSPrpgwiDULvqj9YeKzirLQOf1vEPiO9pPQvYE0SaEGbj6MW', 2),
(46, 'gracedavis16', 'sophia@example.com', '$2y$10$5OOFEORv4owAwRtRcRQMyOcm3q0K9rEoaIMHBikYqNrUa5ibMXIja', 2),
(47, 'sophiamoore17', 'olivia@example.com', '$2y$10$NGGQYJGwvIDCIWTXENZIGuZS73WGoHVpWeU.BUIXyLozehDIgu50O', 2),
(48, 'bobwilliams18', 'john@example.com', '$2y$10$F6hUF0b4u/fsPC9eGpE1HOqzo8dJt5mm/NVY9ujFUJtBF7xYnmdbS', 2),
(49, 'bobwilliams19', 'jane@example.com', '$2y$10$yEzojJyMZtDOs2k16xWIjuGAV3Etr3K8UOfwd5KoHGB1hRd8OMBTW', 2),
(50, 'oliviawilson20', 'michael@example.com', '$2y$10$PTiKXwTBmC9TS7gKwdKI..Dwef68oYhn3KPtD/zr.76SuGsiXmzgi', 2),
(51, 'sophiamoore21', 'alice@example.com', '$2y$10$KNkRCJXu3fsI9yOQhs0OreSAeoZqy5IbgubQbz0jRFyBDIUikpo6a', 2),
(52, 'oliviawilson22', 'eve@example.com', '$2y$10$mh5trNjeWT6E0HsClYFL6uo01LJFgfKIdsDNfYlLgt4bS1WHcOLTe', 2),
(53, 'sophiamoore23', 'grace@example.com', '$2y$10$brK4oRKGVda85aCcl7D3wuYvbFkg9c1ch68Dnwp94LdDVD2bWY1eW', 2),
(54, 'michaelmiller24', 'jane@example.com', '$2y$10$Go9Cau9DLX95ryfE7UaD6.wlSwms/f5P8coOg4o2c4DPOxJ0ok/S.', 2),
(55, 'oliviawilson25', 'grace@example.com', '$2y$10$RT/t4LlY2N5hgSyYkPa1n.HNqoO3fwTb6qrMZDSOGDZwQntFJDXlK', 2),
(56, 'michaelmiller26', 'eve@example.com', '$2y$10$i.G0MZBlzuOhAyeGHYvFkObpvVtG3b8q7fltZ06ZicO7dVnEqlNOu', 2),
(57, 'bobwilliams27', 'bob@example.com', '$2y$10$chkAzMLfSuDhQYW5rcAVQOYZmP3sv9H2J9XH3ta0CwT9XY2GuzULi', 2),
(58, 'charliebrown28', 'sophia@example.com', '$2y$10$9MSg4oMd96z2n1UQvEG5bO4vzXLhsqzGC15gl2fLiXR3qjUEfFB6u', 2),
(59, 'oliviawilson29', 'michael@example.com', '$2y$10$urknTSSrIu.e0TZCTEQi1.XMQswu3o6EAy0bkQISUW/zTNQqeiB.C', 2),
(60, 'alicejohnson30', 'charlie@example.com', '$2y$10$k5fL5V88oHsaaEAsPT54M.IlXL7rxm3hGHvhabZu3LJ1Rgr3vmNQO', 2),
(61, 'sophiamoore31', 'grace@example.com', '$2y$10$wx6Y9/n9VFtRvy3ewfCvlucI0QJAlCTObOVCiKXooRfXliNE2B9.2', 2),
(62, 'evejones32', 'sophia@example.com', '$2y$10$U1W2CsICvW6yy6fg4e00ReW1AYd7tz5mBPdwX239GsFOEtgKmkXW.', 2),
(63, 'michaelmiller33', 'olivia@example.com', '$2y$10$1RSK3KGwVKbBzpqxuWyyXutlRQ6H5ovSLH4BZnHBrMhnOh42jCpLi', 2),
(64, 'charliebrown34', 'alice@example.com', '$2y$10$X3Si28Hs618PT33PoUKPjeXp2.Slh6nIPXg8z.wtGhva4unQ/DZra', 2),
(65, 'sophiamoore35', 'john@example.com', '$2y$10$7PjMqlu6tC1938VMLWIOYudl1rtH9almGpkYXflwTxRerqvVPa9qy', 2),
(66, 'janesmith36', 'charlie@example.com', '$2y$10$57Dp2.TYl/..IDbuwZ3ftOQSr4V0gt87eyJPoAy9.hvHyTlXxbX5u', 2),
(67, 'janesmith37', 'jane@example.com', '$2y$10$GzlHD2U0aNQv1EmgoMEpk.I4TRm707MaTGb.c7M4CnHzS7sqI1iyK', 2),
(68, 'charliebrown38', 'olivia@example.com', '$2y$10$gGfm8vgVgcH7lnt/566lvu8l8CcJh5jOF7nCpIDhM3ebDwXgOCUhq', 2),
(69, 'charliebrown39', 'michael@example.com', '$2y$10$DrJz9Wfq4C3.qxKvaXL.fOxhT98VJIJjBqjvvOKvalyWkG.55X1Um', 2),
(70, 'charliebrown40', 'sophia@example.com', '$2y$10$FCQ97h/sx89SE8tVt1CO6O3hGHzDyHkZnK0qXU8l7rGP/W/rghtEG', 2),
(71, 'evejones41', 'eve@example.com', '$2y$10$UDP9cwX9E7yHdX7EVOjsUeNTJW/ob1225G9Q0.T1oqQgJGRIODjG6', 2),
(72, 'bobwilliams42', 'grace@example.com', '$2y$10$VBtk6NTDLHv3NjCKN92ze.97CU2rFk5yLdDVb1CC0OyBNpiYzILAu', 2),
(73, 'michaelmiller43', 'alice@example.com', '$2y$10$/5F/1t45EfNR8Xu/8Q1G5OwMrfzdD3lu4HYFXNIfGk3GK0OcnVG8G', 2),
(74, 'alicejohnson44', 'charlie@example.com', '$2y$10$fraVT5rNke8o/8OvNLHMRO27kZAhTeZmlt98Elvk2HzOtnSzZ9NyO', 2),
(75, 'oliviawilson45', 'olivia@example.com', '$2y$10$GmOp3W7lHP5fZU76Va.QVO8EUqjoPearjrCRT3eW/GuiXjynobFFO', 2),
(76, 'charliebrown46', 'grace@example.com', '$2y$10$a/8MnM8pm/Nis/7UUNBmgugI2mqwDe1fpOv3WL6KWfWZkj7oQX7ie', 2),
(77, 'janesmith47', 'bob@example.com', '$2y$10$uiVBQFphJewzRGkLh2590OLqacvqWDrQ2UWKVy5eu99sg5z6scPHK', 2),
(78, 'charliebrown48', 'alice@example.com', '$2y$10$xJcg3kVFVuJJAJ7m1b1KlOlF2fZ1J4RBqN3v3Gx.91WX0Y16JRf5C', 2),
(79, 'evejones49', 'eve@example.com', '$2y$10$WrvMeaIh8Rt87B.OeRN4j.xgI8rLo.gYUwdWnizHZreL6GLBvr5Ym', 2),
(80, 'gracedavis50', 'grace@example.com', '$2y$10$IoxEoBuQQUigTqkL6N1MReOjRnaY2wQfvhQ/O4ltfSWoFRAs6yLaG', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `link` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `judul`, `penerima`, `link`, `tanggal`, `status`) VALUES
(1, 'test', '6', 'http://localhost:8080/CRM23/pages/dashboard.php#', '2023-12-01', '1'),
(2, 'test 2', '7', 'tblpelanggan.php', '0000-00-00', '1'),
(3, 'test 3', '7', 'tblpelanggan.php', '2023-12-06', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `judul`, `jenis`, `pengirim`, `penerima`, `isi`, `tanggal`, `feedback`) VALUES
(1, 'target desember', 'target', '5', '5', '2000', '2023-12-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id` int(11) NOT NULL,
  `level` varchar(30) NOT NULL,
  `reward` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `varian` varchar(255) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `kategori`, `harga`, `deskripsi`, `varian`, `jumlah`, `gambar`) VALUES
(1, 'kaos', 'pakaian', 50000, 'Kaos ini adalah pilihan yang sempurna untuk gaya santai dan nyaman sehari-hari. Terbuat dari bahan katun berkualitas tinggi yang lembut dan ringan di kulit, kaos ini memberikan kenyamanan optimal dalam setiap kegiatan Anda. Desainnya yang stylish dan fleksibel cocok untuk berbagai kesempatan, mulai dari aktivitas santai hingga acara sosial. Tersedia dalam berbagai pilihan warna dan ukuran, kaos ini adalah tambahan yang sempurna untuk koleksi pakaian Anda.', 'merah hitam putih', 91, 'kaos.jpg'),
(2, 'tas stylish', 'tas', 120000, 'Tas ini adalah aksen fashion yang sempurna untuk melengkapi penampilan Anda dengan gaya yang elegan dan modern. Dirancang dengan detail yang menawan dan bahan berkualitas tinggi, tas ini tidak hanya menambah sentuhan gaya pada setiap outfit, tetapi juga sangat fungsional. Didesain dengan kompartemen yang cerdas untuk menyimpan barang-barang Anda dengan rapi dan nyaman diakses. Dari acara resmi hingga kegiatan sehari-hari, tas ini adalah pernyataan gaya yang berkelas.', '', 48, 'tas.jpg'),
(3, 'eager sepatu gunung', 'sepatu', 250000, 'Sepatu gunung ini adalah kunci untuk pengalaman petualangan luar ruangan yang luar biasa. Dirancang dengan teknologi terkini dan bahan tahan air yang berkualitas tinggi, sepatu ini memberikan perlindungan optimal terhadap berbagai medan dan cuaca ekstrem. Dibuat dengan sol yang kokoh dan grip yang kuat, sepatu ini menawarkan stabilitas dan traksi yang dibutuhkan untuk mendaki gunung dengan percaya diri. Didesain ergonomis dengan bantalan yang nyaman untuk kaki, sehingga membuat perjalanan Anda lebih nyaman. Dengan sepatu gunung ini, hadapi setiap tantangan alam dengan keyakinan dan kenyamanan.', '28 29 30 31 32', 86, 'sepatu.jpg'),
(4, 'kaos stylish', 'pakaian', 50000, 'Kaos ini adalah pilihan yang sempurna untuk gaya santai dan nyaman sehari-hari. Terbuat dari bahan katun berkualitas tinggi yang lembut dan ringan di kulit, kaos ini memberikan kenyamanan optimal dalam setiap kegiatan Anda. Desainnya yang stylish dan fleksibel cocok untuk berbagai kesempatan, mulai dari aktivitas santai hingga acara sosial. Tersedia dalam berbagai pilihan warna dan ukuran, kaos ini adalah tambahan yang sempurna untuk koleksi pakaian Anda.', 'merah hitam putih', 89, 'kaos.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id` int(6) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `reward` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `pembeli` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `total_beli` int(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `pembeli`, `tanggal`, `total_beli`, `status`) VALUES
(2546, 7, '2023-12-03', 1000000, 'terkirim'),
(2652, 6, '2023-12-03', 250000, 'terkirim'),
(3294, 9, '2023-12-03', 150000, 'terkirim'),
(3449, 8, '2023-12-03', 750000, 'terkirim'),
(4143, 7, '2023-12-03', 500000, 'terkirim'),
(4790, 9, '2023-12-03', 150000, 'terkirim'),
(5011, 7, '2023-12-03', 240000, 'terkirim'),
(5196, 9, '2023-12-03', 250000, 'terkirim'),
(8015, 6, '2023-12-03', 50000, 'terkirim'),
(9546, 8, '2023-12-03', 150000, 'terkirim'),
(9808, 7, '2023-12-03', 1000000, 'terkirim'),
(9874, 6, '2023-12-03', 250000, 'terkirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` int(1) NOT NULL,
  `preferensi` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `level`, `preferensi`, `alamat`, `gambar`, `email`, `no_wa`, `point`) VALUES
(6, 'rifki hamdani', 1, 'pakaian', 'Gg.kasturi 1 , kiara condong , bandung', 'default_user.png', 'kumahaathnya@gmail.com', '083896059029', 1000),
(21, 'Eve Jones', 1, 'pakaian', 'kamana wae bisa1', 'default_user.png', 'michael@example.com', '083896059029', 6634),
(22, 'Olivia Wilson', 1, 'sepatu', 'kamana wae bisa2', 'default_user.png', 'sophia@example.com', '083896059029', 5886),
(23, 'Sophia Moore', 1, 'sepatu', 'kamana wae bisa3', 'default_user.png', 'sophia@example.com', '083896059029', 2824),
(24, 'Jane Smith', 1, 'tas', 'kamana wae bisa4', 'default_user.png', 'grace@example.com', '083896059029', 1991),
(25, 'John Doe', 1, 'tas', 'kamana wae bisa5', 'default_user.png', 'john@example.com', '083896059029', 5423),
(26, 'Bob Williams', 1, 'tas', 'kamana wae bisa6', 'default_user.png', 'michael@example.com', '083896059029', 8049),
(27, 'Eve Jones', 1, 'sepatu', 'kamana wae bisa7', 'default_user.png', 'bob@example.com', '083896059029', 3684),
(28, 'Michael Miller', 1, 'tas', 'kamana wae bisa8', 'default_user.png', 'michael@example.com', '083896059029', 1642),
(29, 'Grace Davis', 1, 'sepatu', 'kamana wae bisa9', 'default_user.png', 'bob@example.com', '083896059029', 1650),
(30, 'Grace Davis', 1, 'tas', 'kamana wae bisa10', 'default_user.png', 'jane@example.com', '083896059029', 1982),
(31, 'Michael Miller', 1, 'tas', 'kamana wae bisa1', 'default_user.png', 'grace@example.com', '083896059029', 8825),
(32, 'Alice Johnson', 1, 'pakaian', 'kamana wae bisa2', 'default_user.png', 'sophia@example.com', '083896059029', 9265),
(33, 'Grace Davis', 1, 'tas', 'kamana wae bisa3', 'default_user.png', 'michael@example.com', '083896059029', 3607),
(34, 'Grace Davis', 1, 'tas', 'kamana wae bisa4', 'default_user.png', 'alice@example.com', '083896059029', 7319),
(35, 'Sophia Moore', 1, 'pakaian', 'kamana wae bisa5', 'default_user.png', 'grace@example.com', '083896059029', 8069),
(36, 'Alice Johnson', 1, 'sepatu', 'kamana wae bisa6', 'default_user.png', 'bob@example.com', '083896059029', 4736),
(37, 'Alice Johnson', 1, 'sepatu', 'kamana wae bisa7', 'default_user.png', 'charlie@example.com', '083896059029', 8134),
(38, 'Jane Smith', 1, 'tas', 'kamana wae bisa8', 'default_user.png', 'sophia@example.com', '083896059029', 2970),
(39, 'Jane Smith', 1, 'tas', 'kamana wae bisa9', 'default_user.png', 'grace@example.com', '083896059029', 1027),
(40, 'Bob Williams', 1, 'pakaian', 'kamana wae bisa10', 'default_user.png', 'sophia@example.com', '083896059029', 4764),
(41, 'Bob Williams', 1, 'tas', 'kamana wae bisa11', 'default_user.png', 'michael@example.com', '083896059029', 299),
(42, 'Charlie Brown', 1, 'tas', 'kamana wae bisa12', 'default_user.png', 'bob@example.com', '083896059029', 438),
(43, 'Grace Davis', 1, 'tas', 'kamana wae bisa13', 'default_user.png', 'alice@example.com', '083896059029', 9832),
(44, 'Charlie Brown', 1, 'sepatu', 'kamana wae bisa14', 'default_user.png', 'sophia@example.com', '083896059029', 387),
(45, 'Eve Jones', 1, 'sepatu', 'kamana wae bisa15', 'default_user.png', 'sophia@example.com', '083896059029', 4579),
(46, 'Grace Davis', 1, 'sepatu', 'kamana wae bisa16', 'default_user.png', 'sophia@example.com', '083896059029', 5722),
(47, 'Sophia Moore', 1, 'tas', 'kamana wae bisa17', 'default_user.png', 'olivia@example.com', '083896059029', 9554),
(48, 'Bob Williams', 1, 'tas', 'kamana wae bisa18', 'default_user.png', 'john@example.com', '083896059029', 1841),
(49, 'Bob Williams', 1, 'tas', 'kamana wae bisa19', 'default_user.png', 'jane@example.com', '083896059029', 8154),
(50, 'Olivia Wilson', 1, 'sepatu', 'kamana wae bisa20', 'default_user.png', 'michael@example.com', '083896059029', 5920),
(51, 'Sophia Moore', 1, 'pakaian', 'kamana wae bisa21', 'default_user.png', 'alice@example.com', '083896059029', 3766),
(52, 'Olivia Wilson', 1, 'sepatu', 'kamana wae bisa22', 'default_user.png', 'eve@example.com', '083896059029', 1023),
(53, 'Sophia Moore', 1, 'sepatu', 'kamana wae bisa23', 'default_user.png', 'grace@example.com', '083896059029', 7066),
(54, 'Michael Miller', 1, 'sepatu', 'kamana wae bisa24', 'default_user.png', 'jane@example.com', '083896059029', 2601),
(55, 'Olivia Wilson', 1, 'tas', 'kamana wae bisa25', 'default_user.png', 'grace@example.com', '083896059029', 3664),
(56, 'Michael Miller', 1, 'tas', 'kamana wae bisa26', 'default_user.png', 'eve@example.com', '083896059029', 3499),
(57, 'Bob Williams', 1, 'tas', 'kamana wae bisa27', 'default_user.png', 'bob@example.com', '083896059029', 7850),
(58, 'Charlie Brown', 1, 'sepatu', 'kamana wae bisa28', 'default_user.png', 'sophia@example.com', '083896059029', 7167),
(59, 'Olivia Wilson', 1, 'sepatu', 'kamana wae bisa29', 'default_user.png', 'michael@example.com', '083896059029', 809),
(60, 'Alice Johnson', 1, 'sepatu', 'kamana wae bisa30', 'default_user.png', 'charlie@example.com', '083896059029', 4001),
(61, 'Sophia Moore', 1, 'sepatu', 'kamana wae bisa31', 'default_user.png', 'grace@example.com', '083896059029', 9332),
(62, 'Eve Jones', 1, 'sepatu', 'kamana wae bisa32', 'default_user.png', 'sophia@example.com', '083896059029', 6447),
(63, 'Michael Miller', 1, 'sepatu', 'kamana wae bisa33', 'default_user.png', 'olivia@example.com', '083896059029', 1547),
(64, 'Charlie Brown', 1, 'pakaian', 'kamana wae bisa34', 'default_user.png', 'alice@example.com', '083896059029', 4943),
(65, 'Sophia Moore', 1, 'pakaian', 'kamana wae bisa35', 'default_user.png', 'john@example.com', '083896059029', 1679),
(66, 'Jane Smith', 1, 'tas', 'kamana wae bisa36', 'default_user.png', 'charlie@example.com', '083896059029', 3718),
(67, 'Jane Smith', 1, 'pakaian', 'kamana wae bisa37', 'default_user.png', 'jane@example.com', '083896059029', 8150),
(68, 'Charlie Brown', 1, 'sepatu', 'kamana wae bisa38', 'default_user.png', 'olivia@example.com', '083896059029', 1477),
(69, 'Charlie Brown', 1, 'tas', 'kamana wae bisa39', 'default_user.png', 'michael@example.com', '083896059029', 8672),
(70, 'Charlie Brown', 1, 'tas', 'kamana wae bisa40', 'default_user.png', 'sophia@example.com', '083896059029', 6330),
(71, 'Eve Jones', 1, 'pakaian', 'kamana wae bisa41', 'default_user.png', 'eve@example.com', '083896059029', 2662),
(72, 'Bob Williams', 1, 'tas', 'kamana wae bisa42', 'default_user.png', 'grace@example.com', '083896059029', 7457),
(73, 'Michael Miller', 1, 'sepatu', 'kamana wae bisa43', 'default_user.png', 'alice@example.com', '083896059029', 3633),
(74, 'Alice Johnson', 1, 'pakaian', 'kamana wae bisa44', 'default_user.png', 'charlie@example.com', '083896059029', 7065),
(75, 'Olivia Wilson', 1, 'sepatu', 'kamana wae bisa45', 'default_user.png', 'olivia@example.com', '083896059029', 5921),
(76, 'Charlie Brown', 1, 'tas', 'kamana wae bisa46', 'default_user.png', 'grace@example.com', '083896059029', 6943),
(77, 'Jane Smith', 1, 'sepatu', 'kamana wae bisa47', 'default_user.png', 'bob@example.com', '083896059029', 3302),
(78, 'Charlie Brown', 1, 'tas', 'kamana wae bisa48', 'default_user.png', 'alice@example.com', '083896059029', 4830),
(79, 'Eve Jones', 1, 'sepatu', 'kamana wae bisa49', 'default_user.png', 'eve@example.com', '083896059029', 4356),
(80, 'Grace Davis', 1, 'sepatu', 'kamana wae bisa50', 'default_user.png', 'grace@example.com', '083896059029', 4860);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=932;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pos`
--
ALTER TABLE `pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
