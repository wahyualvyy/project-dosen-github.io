-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2023 pada 04.38
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_siswa` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `id_siswa`, `tanggal`, `id_status`) VALUES
(116, '221080200150', '2023-11-02', 'H'),
(117, '018221321', '2023-11-02', 'I'),
(118, '08123213', '2023-11-02', 'S'),
(119, '01812321', '2023-11-02', 'A'),
(120, '8271', '2023-11-02', 'S'),
(121, '8787457871', '2023-11-02', 'H'),
(122, '221080200150', '2023-11-23', 'H'),
(123, '018221321', '2023-11-23', 'I'),
(124, '08123213', '2023-11-23', 'S'),
(125, '8271', '2023-11-23', 'A'),
(126, '221080200150', '2023-11-18', 'H'),
(127, '018221321', '2023-11-18', 'A'),
(128, '08123213', '2023-11-18', 'I'),
(129, '221080200150', '2023-11-07', 'H'),
(130, '221080200150', '2023-12-29', 'H'),
(131, '018221321', '2023-12-29', 'H'),
(132, '08123213', '2023-12-29', 'H'),
(133, '8271', '2023-12-29', 'H'),
(141, '221080200150', '2023-12-27', 'H'),
(142, '018221321', '2023-12-27', 'I'),
(143, '08123213', '2023-12-27', 'S'),
(144, '8271', '2023-12-27', 'S'),
(145, '221080', '2023-12-27', 'I'),
(146, '123', '2023-12-27', 'H'),
(148, '018221321', '2023-12-27', 'I'),
(149, '08123213', '2023-12-27', 'S'),
(150, '8271', '2023-12-27', 'S'),
(151, '221080', '2023-12-27', 'I'),
(152, '123', '2023-12-27', 'H');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`, `nis`, `telepon`) VALUES
(1, 'jawir', '3a', '221080200150', '081232213'),
(2, 'alvy', '3b', '018221321', '08123213'),
(3, 'veleri', '3b', '08123213', '128313'),
(5, 'zizoh', '3b', '8271', '0823'),
(21, 'sandy', '3c', '221080', '08123445566'),
(22, 'ziyaad', '3a', '123', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` varchar(1) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
('A', 'alpha'),
('H', 'hadir'),
('I', 'ijin'),
('S', 'sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telepon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `password`, `level`, `email`, `telepon`) VALUES
(1, 'atok', '123', 'admin', '123@email.com', '01230123'),
(2, 'jawir', '123', 'user', 'jawir@email.com', '081232103'),
(3, 'sambo', '123', '123', 'sambo@email.com', '0123123'),
(4, 'budi', '123', 'guru', 'budi@email.com', '0182312321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
