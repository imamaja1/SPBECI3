-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2020 pada 20.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'SPBE', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `kode_permintaan` int(11) NOT NULL,
  `no_spa` varchar(35) NOT NULL,
  `tgl_spa` date NOT NULL,
  `stock` tinyint(4) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `tgl` datetime NOT NULL,
  `kode_spbe` int(11) NOT NULL,
  `status_terminal` enum('1','2','3') NOT NULL,
  `status_patra_niaga` enum('1','2','3') NOT NULL,
  `kode_skid_tank` int(11) NOT NULL,
  `tgl_berangkat_tujuan` datetime NOT NULL,
  `tgl_sampai_tujuan` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `tgl_sampai_kembali` datetime NOT NULL,
  `status_permintaan` enum('1','2') NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil1`
--

CREATE TABLE `profil1` (
  `id_profil` enum('1','2') NOT NULL,
  `nama_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil1`
--

INSERT INTO `profil1` (`id_profil`, `nama_profil`) VALUES
('1', 'icon-student.png'),
('2', 'icon-student1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil2`
--

CREATE TABLE `profil2` (
  `kode_spbe` int(11) NOT NULL,
  `nama_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil2`
--

INSERT INTO `profil2` (`kode_spbe`, `nama_profil`) VALUES
(1, 'default-avatar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_patra_niaga`
--

CREATE TABLE `t_patra_niaga` (
  `kode_patra_niaga` int(11) NOT NULL,
  `nama_patra_niaga` varchar(30) NOT NULL,
  `alamat_patra_niaga` text NOT NULL,
  `telepon_patra_niaga` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_profil` enum('2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_patra_niaga`
--

INSERT INTO `t_patra_niaga` (`kode_patra_niaga`, `nama_patra_niaga`, `alamat_patra_niaga`, `telepon_patra_niaga`, `username`, `password`, `id_profil`) VALUES
(7, 'Patra Niaga', 'Sekotong Bar', '085678543267', 'patra', '8789742383143593942ca732a0933974', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_skid_tank`
--

CREATE TABLE `t_skid_tank` (
  `kode_skid_tank` int(11) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `kapasitas` tinyint(4) NOT NULL,
  `odometer` int(7) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_spbe`
--

CREATE TABLE `t_spbe` (
  `kode_spbe` int(3) NOT NULL,
  `nama_spbe` varchar(30) NOT NULL,
  `alamat_spbe` text NOT NULL,
  `telepon_spbe` varchar(13) NOT NULL,
  `kapasitas_tt` tinyint(3) NOT NULL,
  `dot` tinyint(3) NOT NULL,
  `limit` int(5) NOT NULL,
  `jarak` tinyint(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_supir`
--

CREATE TABLE `t_supir` (
  `kode_supir` int(11) NOT NULL,
  `nama_supir` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_sim` varchar(20) NOT NULL,
  `tahun_berlaku` date NOT NULL,
  `nopol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_terminal_lpg`
--

CREATE TABLE `t_terminal_lpg` (
  `kode_terminal` int(11) NOT NULL,
  `nama_terminal` varchar(30) NOT NULL,
  `telepon_terminal` varchar(15) NOT NULL,
  `alamat_terminal` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_profil` enum('1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_terminal_lpg`
--

INSERT INTO `t_terminal_lpg` (`kode_terminal`, `nama_terminal`, `telepon_terminal`, `alamat_terminal`, `username`, `password`, `id_profil`) VALUES
(1, 'Terminal Sekotong Besar', '09889898', 'asdaasdasd', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`kode_permintaan`);

--
-- Indeks untuk tabel `t_patra_niaga`
--
ALTER TABLE `t_patra_niaga`
  ADD PRIMARY KEY (`kode_patra_niaga`);

--
-- Indeks untuk tabel `t_skid_tank`
--
ALTER TABLE `t_skid_tank`
  ADD PRIMARY KEY (`kode_skid_tank`),
  ADD UNIQUE KEY `nopol` (`nopol`);

--
-- Indeks untuk tabel `t_spbe`
--
ALTER TABLE `t_spbe`
  ADD PRIMARY KEY (`kode_spbe`);

--
-- Indeks untuk tabel `t_supir`
--
ALTER TABLE `t_supir`
  ADD PRIMARY KEY (`kode_supir`);

--
-- Indeks untuk tabel `t_terminal_lpg`
--
ALTER TABLE `t_terminal_lpg`
  ADD PRIMARY KEY (`kode_terminal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `kode_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_patra_niaga`
--
ALTER TABLE `t_patra_niaga`
  MODIFY `kode_patra_niaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_skid_tank`
--
ALTER TABLE `t_skid_tank`
  MODIFY `kode_skid_tank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_spbe`
--
ALTER TABLE `t_spbe`
  MODIFY `kode_spbe` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_supir`
--
ALTER TABLE `t_supir`
  MODIFY `kode_supir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_terminal_lpg`
--
ALTER TABLE `t_terminal_lpg`
  MODIFY `kode_terminal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
