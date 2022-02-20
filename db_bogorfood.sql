-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2022 pada 12.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bogorfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dapur_bujalu`
--

CREATE TABLE `tbl_dapur_bujalu` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dapur_bujalu`
--

INSERT INTO `tbl_dapur_bujalu` (`id_produk`, `kode_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga_produk`, `stok_produk`, `tanggal_upload`) VALUES
(4, 'PO001', 'Brownies Manies', '???????? dibeli qaqa... BROWNIES MANIES ukuran loyang 20×20 ya bunda bunda???? dari dapur bujalu [bu jalu] buat menambah keniqmatan makanan yang hQQ.  BROWNIES ini sudah menjadi highlight produk dapoer bujalu lhoo ???? sebagai produk terlaris✅, Produk berkualitas✅, 100% Bahan berkualitas juga looo!!! CAP MAKNYOSS BUNDA!!!  ????Variasi toping: - Almond - Chooco cip - Keju - Toping custom bisa disesuaikan ????????', 'bujalu_brownies.png', 65000, 10, '2021-06-12'),
(5, 'PO002', 'Bawang Goreng', 'kriuk!!! kriuk!!! kriuk!!! nyesss banget ???????? dibeli qaqa... BAWANG GORENG dapoer bujalu [bu jalu] buat menambah keniqmatan makanan yang hQQ.  BAWANG GORENG ini sudah menjadi highlight produk dapoer bujalu lhoo ???? sebagai produk terlaris✅, produk berkualitas✅, ????% berbahan bawang brebes aseli. CAP MAKNYOSS BUNDA!!!  BAWANG GORENG ini terlahir dari pemikiran orang yang ingin merasakan kelezatan sempurna saat makan bund????????. Gak cuman itu doang, produk ini makanable banget... mau sama soto, semur, mie instan pun jadi kok, semua makanan include✔️✔️✔️. Bikin makanan jadi lebih nikmat dengan rasa gurih, asin yang pas, dan kriuknya itulooo. Sekali makan ketagihan deeh, mau lagi teross. Yuk CUSSS mama, bunda dibeli produk kami ????  ♥️♥️ Ada beberapa pilihan ukuran produk bund : [besar] 225 gr ~ 50k [kecil] 125 gr ~ 30k mari dipilihh ????????', 'bujalu_bawanggoreng.png', 30000, 10, '2021-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_desira`
--

CREATE TABLE `tbl_desira` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_desira`
--

INSERT INTO `tbl_desira` (`id_produk`, `kode_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga_produk`, `stok_produk`, `tanggal_upload`) VALUES
(1, 'PO001', 'Telur Gabus Keju', 'Telur gabus keju gurih dan renyah 200gr(25k) 500gr(45k)', 'telurgabuskeju.jpg', 25000, 200, '2021-05-01'),
(2, 'PO002', 'Stik Keju', 'Stik keju teman cemilan yang lezat 200 gr (15k) 500 gr (30k)', 'stikkeju.jpg', 15000, 120, '2021-05-01'),
(4, 'PO003', 'Kue Bawang', 'Kue bawang teman cemilan ter enak 200gr (15k) 500gr (30k)', 'kuebawang.jpg', 15000, 200, '2021-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto_admin` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `nama`, `foto_admin`, `username`, `password`) VALUES
(1, 'lugas', 'logobogorfood.png', 'lugas', '809bdf3f15b4c34fb3410ad0d2f8319b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_olaten`
--

CREATE TABLE `tbl_olaten` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_olaten`
--

INSERT INTO `tbl_olaten` (`id_produk`, `kode_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga_produk`, `stok_produk`, `tanggal_upload`) VALUES
(1, 'TO001', 'Bawang Goreng', 'Bawang goreng dengan bawang 100% bawang asli', 'produkolaten2.jpg', 15000, 50, '2021-04-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rangginang_tuti`
--

CREATE TABLE `tbl_rangginang_tuti` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rangginang_tuti`
--

INSERT INTO `tbl_rangginang_tuti` (`id_produk`, `kode_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga_produk`, `stok_produk`, `tanggal_upload`) VALUES
(1, 'PO001', 'Rangginang Rasa Terasi', 'Rangginang dengan 100% ketan asli dan rasa terasi yang nikmat', 'rangginang.png', 20000, 100, '2021-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tauty_cake`
--

CREATE TABLE `tbl_tauty_cake` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tauty_cake`
--

INSERT INTO `tbl_tauty_cake` (`id_produk`, `kode_produk`, `nama_produk`, `deskripsi_produk`, `foto_produk`, `harga_produk`, `stok_produk`, `tanggal_upload`) VALUES
(1, 'PO001', 'Akar Kelapa Wijen Snack Jadul', 'Rasanya Manis Renyah uk 200 gr harga 25 rb harga reseller 20 RB', 'tauty_akarkelapawijen.png', 25000, 10, '2021-06-12'),
(2, 'PO002', 'Kue Muso', 'Memiliki 2 rasa yaitu coklat pisang & pisang keju', 'tauty_kuemuso.png', 35000, 10, '2021-06-12'),
(3, 'PO003', 'Keripik Jadoel', 'Ukuran 200gr Gurih dan lezat', 'tauty_keripikjadoel.png', 20000, 10, '2021-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tobokito`
--

CREATE TABLE `tbl_tobokito` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` double NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dapur_bujalu`
--
ALTER TABLE `tbl_dapur_bujalu`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_desira`
--
ALTER TABLE `tbl_desira`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `tbl_olaten`
--
ALTER TABLE `tbl_olaten`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_rangginang_tuti`
--
ALTER TABLE `tbl_rangginang_tuti`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_tauty_cake`
--
ALTER TABLE `tbl_tauty_cake`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_tobokito`
--
ALTER TABLE `tbl_tobokito`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dapur_bujalu`
--
ALTER TABLE `tbl_dapur_bujalu`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_desira`
--
ALTER TABLE `tbl_desira`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_olaten`
--
ALTER TABLE `tbl_olaten`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_rangginang_tuti`
--
ALTER TABLE `tbl_rangginang_tuti`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_tauty_cake`
--
ALTER TABLE `tbl_tauty_cake`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_tobokito`
--
ALTER TABLE `tbl_tobokito`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
