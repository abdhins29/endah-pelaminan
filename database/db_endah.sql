-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2019 pada 15.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_endah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpaket`
--

CREATE TABLE `detailpaket` (
  `id_detail` varchar(5) NOT NULL,
  `id_paket` varchar(5) NOT NULL,
  `gonjong` varchar(5) NOT NULL,
  `tenda` varchar(10) NOT NULL,
  `orgen` varchar(5) NOT NULL,
  `pentas` varchar(10) NOT NULL,
  `pelaminan` varchar(20) NOT NULL,
  `tabia` varchar(15) NOT NULL,
  `taman` varchar(15) NOT NULL,
  `khusus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailpaket`
--

INSERT INTO `detailpaket` (`id_detail`, `id_paket`, `gonjong`, `tenda`, `orgen`, `pentas`, `pelaminan`, `tabia`, `taman`, `khusus`) VALUES
('DT001', 'PK001', '1', '4X6=3 Buah', '1', '4 Meter', 'Besi/Biasa', 'Didalam Rumah', '-', 5000000),
('DT002', 'PK002', '1', '4X6=4 Buah', '1', '4 Meter', 'Ukiran', 'Didalam Rumah', 'Pakai', 5000000),
('DT003', 'PK003', '1', '5X6=4 Buah', '1', '5 Meter', 'Ukiran', 'Didalam Rumah', 'Pakai', 5000000),
('DT004', 'PK004', '1', '6X6=4 Buah', '1', '6 Meter', 'Ukiran', 'Didalam Rumah', 'Pakai', 5000000),
('DT005', 'PK005', '1', '8X6=4 Buah', '1', '6 Meter', 'Ukiran Besar', 'Didalam Rumah', 'Pakai', 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` varchar(5) NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `id_pesan` varchar(5) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `tanggal_konfirmasi`, `id_pesan`, `gambar`, `tanggal_bayar`) VALUES
('KN001', '2019-06-26', 'PS002', 'ab-1.png', '2019-06-28'),
('KN002', '2019-06-26', 'PS001', 'ab-2.png', '2019-06-28'),
('KN003', '2019-06-27', 'PS003', 'ab-3.png', '2019-06-29'),
('KN004', '2019-06-27', 'PS004', 'ab-4.png', '2019-06-27'),
('KN005', '2019-06-27', 'PS005', 'add-srvc-1.png', '2019-06-28'),
('KN006', '2019-06-27', 'PS006', 'add-srvc-2.png', '2019-06-29'),
('KN007', '2019-06-27', 'PS007', 'add-srvc-3.png', '2019-06-29'),
('KN008', '2019-06-27', 'PS008', 'add-srvc-4.png', '2019-06-28'),
('KN009', '2019-06-27', 'PS009', 'add-srvc-5.png', '2019-07-01'),
('KN010', '2019-06-27', 'PS010', 'add-srvc-6.png', '2019-06-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` varchar(5) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `jumlah`, `status`) VALUES
('PK001', 'PAKET 1', 8500000, 2, 'Tersedia'),
('PK002', 'PAKET 2', 10000000, 3, 'Tersedia'),
('PK003', 'PAKET 3', 13000000, 1, 'Tersedia'),
('PK004', 'PAKET 4', 15000000, 1, 'Tersedia'),
('PK005', 'PAKET 5', 20000000, 0, 'Tidak Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jeniskelamin`, `alamat`, `notelp`, `email`) VALUES
('PL001', 'Dwiky Marfa', 'Laki-laki', 'Komp. Perum. Pondok Citra', '081267892345', 'dwiky@gmail.com'),
('PL002', 'Ryrin Nadyla', 'Perempuan', 'Komp. Perumahan Mutiara Putih', '08123748329', 'ryrin@gmail.com'),
('PL003', 'Rizki Fajar', 'Laki-laki', 'Komp. Cendana Anak Air', '089771234567', 'rizki@rocketmail.com'),
('PL004', 'Tria Ningsih', 'Perempuan', 'Padang', '089512345678', 'achi@yahoo.co.id'),
('PL005', 'Riski Randa', 'Laki-laki', 'Pesisir Selatan', '081356781234', 'cebols2@gigimail.com'),
('PL006', 'Veny Yonita', 'Perempuan', 'Padang', '087892137348', 'veny@gmail.com'),
('PL007', 'Novrian Eka', 'Laki-laki', 'Riau', '085632372323', 'rian@gmail.com'),
('PL008', 'Elsya Framadia', 'Perempuan', 'Padang', '081223276374', 'elsya@rocketmail.com'),
('PL009', 'Deratu Faraz', 'Perempuan', 'Padang', '081236734638', 'faraz@gmail.com'),
('PL010', 'Suci Rahmi', 'Perempuan', 'Lubuk Basung', '082376374238', 'suci@gmail.com'),
('PL011', 'Ardhi Putra', 'Laki-laki', 'Padang', '098235678890', 'ardhi@yahoo.co.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelunasan`
--

CREATE TABLE `pelunasan` (
  `nofaktur` varchar(5) NOT NULL,
  `tanggal_faktur` date NOT NULL,
  `id_pesan` varchar(5) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `dp` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelunasan`
--

INSERT INTO `pelunasan` (`nofaktur`, `tanggal_faktur`, `id_pesan`, `total_biaya`, `dp`, `sisa_bayar`, `keterangan`) VALUES
('FK001', '2019-06-26', 'PS002', 10000000, 1000000, 9000000, 'LUNAS'),
('FK002', '2019-06-26', 'PS001', 13500000, 1350000, 12150000, 'LUNAS'),
('FK003', '2019-06-27', 'PS003', 18000000, 1800000, 16200000, 'LUNAS'),
('FK004', '2019-06-27', 'PS004', 8500000, 850000, 7650000, 'LUNAS'),
('FK005', '2019-06-27', 'PS005', 15000000, 1500000, 13500000, 'LUNAS'),
('FK006', '2019-06-27', 'PS006', 13000000, 1300000, 11700000, 'LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` varchar(5) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id_pelanggan` varchar(5) NOT NULL,
  `tanggal_pesta` date NOT NULL,
  `tanggal_pemasangan` date NOT NULL,
  `id_paket` varchar(5) NOT NULL,
  `khusus` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `dp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `tanggal_pesan`, `id_pelanggan`, `tanggal_pesta`, `tanggal_pemasangan`, `id_paket`, `khusus`, `total_biaya`, `dp`) VALUES
('PS001', '2019-06-25', 'PL001', '2019-07-06', '2019-07-02', 'PK001', 5000000, 13500000, 1350000),
('PS002', '2019-06-26', 'PL002', '2019-07-06', '2019-07-02', 'PK002', 0, 10000000, 1000000),
('PS003', '2019-06-26', 'PL003', '2019-07-13', '2019-07-09', 'PK003', 5000000, 18000000, 1800000),
('PS004', '2019-06-27', 'PL004', '2019-07-06', '2019-07-02', 'PK001', 0, 8500000, 850000),
('PS005', '2019-06-27', 'PL005', '2019-07-13', '2019-07-09', 'PK002', 5000000, 15000000, 1500000),
('PS006', '2019-06-27', 'PL006', '2019-07-20', '2019-07-16', 'PK003', 0, 13000000, 1300000),
('PS007', '2019-06-27', 'PL007', '2019-07-20', '2019-07-16', 'PK004', 5000000, 20000000, 2000000),
('PS008', '2019-06-27', 'PL008', '2019-07-27', '2019-07-23', 'PK005', 0, 20000000, 2000000),
('PS009', '2019-06-27', 'PL009', '2019-07-13', '2019-07-09', 'PK002', 5000000, 15000000, 1500000),
('PS010', '2019-06-27', 'PL010', '2019-07-13', '2019-07-09', 'PK002', 0, 10000000, 1000000),
('PS011', '2019-06-27', 'PL011', '2019-07-27', '2019-07-23', 'PK005', 0, 20000000, 2000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detailpaket`
--
ALTER TABLE `detailpaket`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pelunasan`
--
ALTER TABLE `pelunasan`
  ADD PRIMARY KEY (`nofaktur`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
