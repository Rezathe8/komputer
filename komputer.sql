-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 16.40
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `alamat`, `hp`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(31, 'percobaan', 'coba@coba.com', 'rezathe8', 'jalan percobaan', 'nomor percobaan', 'pro1670340777.jpg', '$2y$10$JJQsBwMRe3s1mcxAYWpZ6u/7Wvd5Kxi0GAS5V89KPxPBrr0gT3ACC', 2, 1, 1669826387),
(34, 'percobaan', 'coba@coba.com', 'percobaanke1', 'jalan percobaan ke 1', 'nomor percobaan', 'default.jpg', '$2y$10$B3ccE/ZDPiF/TdisYKZUSO.vJWMmOhM2yy.sp8weZO73j59WCHV8a', 2, 1, 1669837664),
(35, 'rezaadmin', 'coba@coba.com', 'rezaadmin', 'Jalan admin', '08888888888', 'pro1670339866.jpg', '$2y$10$oCCafmZ8api0vbe4SVgPhOGFFcSkdmKbiSNMNfc/HELGE8guaK9CG', 1, 1, 1669891239);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
