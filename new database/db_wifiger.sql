-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Bulan Mei 2021 pada 10.26
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wifiger`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `jumlah_deposit` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(64) DEFAULT NULL,
  `no_telepon` varchar(45) DEFAULT NULL,
  `no_ktp` varchar(45) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `no_telepon`, `no_ktp`, `alamat`, `created_at`, `created_by`, `updated_at`, `updated_by`, `note`) VALUES
(2, 'Eka', '081291919191', '08129191919', 'Desa Jarak', '2021-04-28 00:00:00', NULL, '2021-04-28 15:57:01', NULL, NULL),
(3, 'Eka', '081291919191', '120293844747', 'Desa Jarak', '2021-04-28 15:10:32', NULL, NULL, NULL, NULL),
(4, 'Eka', '081291919191', '08129191919', 'Desa Wates', '2021-04-28 15:12:41', NULL, NULL, NULL, NULL),
(5, 'Eka', '081291919191', '081291919191', 'Desa Wates', '2021-04-28 15:13:24', NULL, NULL, NULL, NULL),
(6, 'Farhan', '081291919191', '11111111111', 'Desa Kuningan', '2021-04-28 15:16:54', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasangan`
--

CREATE TABLE `pemasangan` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `alamat_pemasangan` varchar(255) DEFAULT NULL,
  `tarif` varchar(20) DEFAULT NULL,
  `tanggal_pemasangan` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_pemasangan` int(11) NOT NULL,
  `id_tagihan` int(11) NOT NULL,
  `bayar` varchar(20) DEFAULT NULL,
  `tanggal_bayar` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int(11) NOT NULL,
  `id_pemasangan` int(11) NOT NULL,
  `tanggal_tagihan` datetime DEFAULT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasangan`
--

CREATE TABLE `tb_pemasangan` (
  `id_pemasangan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `status_pelanggan` int(11) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `alamat_pemasangan` text NOT NULL,
  `tgl_pemasangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemasangan`
--

INSERT INTO `tb_pemasangan` (`id_pemasangan`, `nama_pelanggan`, `no_tlp`, `no_ktp`, `status_pelanggan`, `alamat_pelanggan`, `harga`, `bayar`, `alamat_pemasangan`, `tgl_pemasangan`) VALUES
(7, 'baru', '123', '123', 1, 'baru', 'Rp. 2.000', 'Rp. 100.000', 'baru', '25 Mei 2021'),
(8, 'Farhan', '081291919191', '11111111111', 2, 'Desa Kuningan', 'Rp. 123', 'Rp. 123', 'ini adalah alamat', '25 Mei 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`, `created_by`, `updated_at`, `updated_by`, `notes`) VALUES
(1, 'admin', '$2y$10$6XBnc4jKSe92/pc5Ma0ibuI/L6ZPVQOz4pAxtZQElx.0/fw6vm6mi', '2021-04-28 06:40:02', NULL, '2021-04-28 00:00:00', NULL, NULL),
(2, 'administrator', '$2y$10$.ZMiFWn1y8/En27KASn3..OpVJA9vzOeisG.FP/epIFHB2b5Gs.jq', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(3, 'operator', '$2y$10$Tg.5IqgST8Mkj78hTW42Iuqz0BmuDh5fjrgTbmSAobilR77u7mvTK', '2021-04-28 14:53:47', NULL, '2021-04-28 00:00:00', NULL, NULL),
(4, 'vizucode', '$2y$10$9W.RsZjSoystEv6KqqSMx.sZH9VOzeYKx68l3Uw0m.6bzFHOctddW', '0000-00-00 00:00:00', NULL, '2021-04-28 00:00:00', NULL, NULL),
(5, 'javawebmedia', '$2y$10$6cNaaiHCMnHfPU6noiOY6ezRS4HoQImD6PNgGi7h9DNg/PaGs0c76', '2021-04-28 00:00:00', NULL, '2021-04-28 00:00:00', NULL, NULL),
(6, 'Kajurana', '$2y$10$Bq2RRptekEiRVd.6Yb6GiOoatpeeIKHCQ2YmWZYPjncpcLtPkk/0G', '2021-04-28 00:00:00', NULL, '2021-04-28 00:00:00', NULL, NULL),
(7, 'alan', '$2y$10$AQ6uUEZbUQ3xRxl3/l3E2u0RNdFl83nrEA8ChuhPoWErwU8USgaIG', '2021-04-28 00:00:00', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasangan`
--
ALTER TABLE `pemasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemasangan`
--
ALTER TABLE `tb_pemasangan`
  ADD PRIMARY KEY (`id_pemasangan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemasangan`
--
ALTER TABLE `pemasangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemasangan`
--
ALTER TABLE `tb_pemasangan`
  MODIFY `id_pemasangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
