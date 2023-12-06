-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 11.30
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
(6, 2, 3),
(6, 3, 2),
(6, 4, 1),
(0, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(4) NOT NULL,
  `produk` int(50) NOT NULL,
  `jumlah` int(8) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `akses`) VALUES
(5, 'admin', 'kumahaathnya@gmail.c', '$2y$10$PcxCc57x0MlG7TeJK432dujfm2kCOTnLX34Nqz2Fhvwd4hiS5Zrf2', 1),
(6, 'rifki', 'rifki.hamdani.ix.4@g', '$2y$10$bEb70tOd19.gTn76nKa5p.6EMgdcgdJQROKEMB7CBzVXjB.iMdn6m', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `link` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id` int(11) NOT NULL,
  `level` int(2) NOT NULL,
  `reward` varchar(50) NOT NULL,
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
(1, 'kaos', 'pakaian', 50000, 'Kaos ini adalah pilihan yang sempurna untuk gaya santai dan nyaman sehari-hari. Terbuat dari bahan katun berkualitas tinggi yang lembut dan ringan di kulit, kaos ini memberikan kenyamanan optimal dalam setiap kegiatan Anda. Desainnya yang stylish dan fleksibel cocok untuk berbagai kesempatan, mulai dari aktivitas santai hingga acara sosial. Tersedia dalam berbagai pilihan warna dan ukuran, kaos ini adalah tambahan yang sempurna untuk koleksi pakaian Anda.', 'merah hitam putih', 100, 'kaos.jpg'),
(2, 'tas stylish', 'tas', 120000, 'Tas ini adalah aksen fashion yang sempurna untuk melengkapi penampilan Anda dengan gaya yang elegan dan modern. Dirancang dengan detail yang menawan dan bahan berkualitas tinggi, tas ini tidak hanya menambah sentuhan gaya pada setiap outfit, tetapi juga sangat fungsional. Didesain dengan kompartemen yang cerdas untuk menyimpan barang-barang Anda dengan rapi dan nyaman diakses. Dari acara resmi hingga kegiatan sehari-hari, tas ini adalah pernyataan gaya yang berkelas.', '', 50, 'tas.jpg'),
(3, 'eager sepatu gunung', 'sepatu', 250000, 'Sepatu gunung ini adalah kunci untuk pengalaman petualangan luar ruangan yang luar biasa. Dirancang dengan teknologi terkini dan bahan tahan air yang berkualitas tinggi, sepatu ini memberikan perlindungan optimal terhadap berbagai medan dan cuaca ekstrem. Dibuat dengan sol yang kokoh dan grip yang kuat, sepatu ini menawarkan stabilitas dan traksi yang dibutuhkan untuk mendaki gunung dengan percaya diri. Didesain ergonomis dengan bantalan yang nyaman untuk kaki, sehingga membuat perjalanan Anda lebih nyaman. Dengan sepatu gunung ini, hadapi setiap tantangan alam dengan keyakinan dan kenyamanan.', '28 29 30 31 32', 100, 'sepatu.jpg'),
(4, 'kaos stylish', 'pakaian', 50000, 'Kaos ini adalah pilihan yang sempurna untuk gaya santai dan nyaman sehari-hari. Terbuat dari bahan katun berkualitas tinggi yang lembut dan ringan di kulit, kaos ini memberikan kenyamanan optimal dalam setiap kegiatan Anda. Desainnya yang stylish dan fleksibel cocok untuk berbagai kesempatan, mulai dari aktivitas santai hingga acara sosial. Tersedia dalam berbagai pilihan warna dan ukuran, kaos ini adalah tambahan yang sempurna untuk koleksi pakaian Anda.', 'merah hitam putih', 100, 'kaos.jpg');

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
  `no_wa` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `level`, `preferensi`, `alamat`, `gambar`, `email`, `no_wa`) VALUES
(6, 'rifki hamdani', 1, 'pakaian', 'Gg.kasturi 1 , kiara condong , bandung', '', '', 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
