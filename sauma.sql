-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2021 pada 09.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sauma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `idKonfirmasi` int(11) NOT NULL,
  `idPesanan` varchar(20) NOT NULL,
  `idPel` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`idKonfirmasi`, `idPesanan`, `idPel`, `gambar`, `createdAt`) VALUES
(8, 'INV-0221-001', 1, 'INV-022021-3276d8a2ac.jpg', '2021-02-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `namaPelanggan` varchar(30) NOT NULL,
  `emailPelanggan` varchar(30) NOT NULL,
  `passPelanggan` varchar(20) NOT NULL,
  `notelpPelanggan` varchar(20) NOT NULL,
  `alamatPelanggan` varchar(100) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `namaPelanggan`, `emailPelanggan`, `passPelanggan`, `notelpPelanggan`, `alamatPelanggan`, `createdAt`, `updatedAt`) VALUES
(1, 'pelanggan 1', 'pelangan1@gmail.com', 'pelanggan1', '1321312312', 'fsfasdfasf', '2021-02-22', NULL),
(2, 'pelanggan 2', 'pelanggan2@gmail.com', 'pelanggan2', '2147483647', 'solo', '2021-02-27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` varchar(20) NOT NULL,
  `idPel` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `ukuranCincin` int(11) NOT NULL,
  `qtyPesanan` int(11) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `statusPesanan` enum('pending','success','cancel','process','diterima','return') NOT NULL,
  `ketPesanan` varchar(100) DEFAULT NULL,
  `ongkir` int(16) NOT NULL,
  `potonganOngkir` int(16) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `idPel`, `idProduk`, `ukuranCincin`, `qtyPesanan`, `warna`, `statusPesanan`, `ketPesanan`, `ongkir`, `potonganOngkir`, `createdAt`, `updatedAt`) VALUES
('INV-0221-001', 1, 10, 1, 1, 'warna 1', 'process', 'dasfasfa', 50000, 2500, '2021-02-01', '2028-02-21'),
('INV-0221-002', 1, 9, 12, 2, 'warna 1', 'pending', NULL, 0, 0, '2021-02-28', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesananreturn`
--

CREATE TABLE `pesananreturn` (
  `idReturn` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `idPel` int(11) NOT NULL,
  `idPesanan` varchar(20) NOT NULL,
  `qtyReturn` int(11) NOT NULL,
  `alasanReturn` varchar(255) NOT NULL,
  `statusReturn` varchar(20) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(30) NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `imgProduk` varchar(50) NOT NULL,
  `descProduk` text NOT NULL,
  `jenisBatu` varchar(20) NOT NULL,
  `warnaBatu` varchar(20) NOT NULL,
  `beratBatu` int(11) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `hargaProduk`, `imgProduk`, `descProduk`, `jenisBatu`, `warnaBatu`, `beratBatu`, `createdAt`, `updatedAt`) VALUES
(9, 'produk 1', 1000000, 'Prod-022021-196b49de59.jpg', 'desc 1', 'jenis 1', '', 321, '2021-02-27', '2021-02-28'),
(10, 'produk 2', 500000, 'Prod-022021-3f1b851e8e.jpg', 'desc 2', 'jenis 2', '', 654, '2021-02-27', '2021-02-28'),
(11, 'produk 3', 700000, 'Prod-022021-46d66b9207.jpg', 'desc 3\r\n', 'jenis 3', '', 987, '2021-02-27', '2021-02-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL,
  `namaUser` varchar(30) NOT NULL,
  `emailUser` varchar(50) NOT NULL,
  `passUser` varchar(50) NOT NULL,
  `notelpUser` varchar(16) NOT NULL,
  `alamatUser` varchar(100) NOT NULL,
  `statusUser` enum('Aktif','Non Aktif') NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `level`, `namaUser`, `emailUser`, `passUser`, `notelpUser`, `alamatUser`, `statusUser`, `createdAt`, `updatedAt`) VALUES
(1, 'Super Admin', 'Super Admin', 'superadmin@gmail.com', 'superadmin', '21123123', '', 'Aktif', '2021-02-22', NULL),
(2, 'Admin', 'Admin', 'admin@gmail.com', 'admin', '123123', '', 'Aktif', '2021-02-22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`idKonfirmasi`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`);

--
-- Indeks untuk tabel `pesananreturn`
--
ALTER TABLE `pesananreturn`
  ADD PRIMARY KEY (`idReturn`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `idKonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesananreturn`
--
ALTER TABLE `pesananreturn`
  MODIFY `idReturn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
