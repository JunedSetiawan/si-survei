-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 06.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_form`
--

CREATE TABLE `tb_form` (
  `id_form` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `soal1` varchar(50) NOT NULL,
  `soal2` varchar(50) NOT NULL,
  `soal3` varchar(50) NOT NULL,
  `soal4` varchar(50) NOT NULL,
  `soal5` varchar(50) NOT NULL,
  `soal6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_form`
--

INSERT INTO `tb_form` (`id_form`, `tanggal`, `gender`, `pendidikan`, `pekerjaan`, `soal1`, `soal2`, `soal3`, `soal4`, `soal5`, `soal6`) VALUES
(86, '2021-03-01', 'Laki-Laki', 'SMA', 'KARYAWAN SWASTA', 'Ya, Mudah dan Cepat', 'Kurang Kompeten', 'Tidak Sesuai', 'Tidak Ada', 'Belum Memadai', 'Sudah Diterapkan'),
(87, '2021-03-06', 'Laki-Laki', 'SMA', 'KARYAWAN SWASTA', 'Ya, Mudah dan Cepat', 'Kurang Kompeten', 'Tidak Sesuai', 'Tidak Ada', 'Belum Memadai', 'Sudah Diterapkan'),
(88, '2021-02-28', 'Laki-Laki', 'SMA', 'KARYAWAN SWASTA', 'Ya, Mudah dan Cepat', 'Kurang Kompeten', 'Tidak Sesuai', 'Tidak Ada', 'Belum Memadai', 'Sudah Diterapkan'),
(90, '2021-03-01', 'Laki-Laki', 'SMA', 'KARYAWAN SWASTA', 'Ya, Mudah dan Cepat', 'Kurang Kompeten', 'Tidak Sesuai', 'Tidak Ada', 'Belum Memadai', 'Sudah Diterapkan'),
(91, '2021-03-01', 'Perempuan', 'S1', 'LAINNYA', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Tidak Ada', 'Sudah Memadai', 'Belum Diterapkan'),
(92, '2021-03-01', 'Perempuan', 'S1', 'LAINNYA', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Tidak Ada', 'Sudah Memadai', 'Belum Diterapkan'),
(93, '2021-03-03', 'Perempuan', 'Diploma', 'PNS', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Tidak Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(94, '2021-03-04', 'Laki-Laki', 'SMP', 'TNI/POLRI', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Tidak Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(95, '2021-03-09', 'Laki-Laki', 'S3', 'WIRASWASTA', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Tidak Ada', 'Sudah Memadai', 'Belum Diterapkan'),
(96, '2021-03-23', 'Laki-Laki', 'SD', 'TNI/POLRI', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(97, '2021-03-23', 'Perempuan', 'S3', 'TNI/POLRI', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(98, '2021-03-23', 'Laki-Laki', 'S2', 'PNS', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(99, '2021-03-23', 'Laki-Laki', 'Diploma', 'TNI/POLRI', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(100, '2021-03-23', 'Perempuan', 'SMA', 'PNS', 'Tidak, Sulit dan Lambat', 'Kurang Kompeten', 'Tidak Sesuai', 'Tidak Ada', 'Belum Memadai', 'Belum Diterapkan'),
(101, '2021-05-21', 'Laki-Laki', 'S3', 'LAINNYA', 'Ya, Mudah dan Cepat', 'Kompeten', 'Tidak Sesuai', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(102, '2021-06-08', 'Perempuan', 'Lainnya', 'TNI/POLRI', 'Tidak, Sulit dan Lambat', 'Kompeten', 'Sesuai / Gratis', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan'),
(103, '2021-06-08', 'Laki-Laki', 'S3', 'TNI/POLRI', 'Ya, Mudah dan Cepat', 'Kompeten', 'Sesuai / Gratis', 'Ada', 'Sudah Memadai', 'Sudah Diterapkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(3, 'Panji Putra', 'panji', 'panji', 'Admin'),
(4, 'Juned Setiawan', 'juned', 'jnd', 'Admin'),
(5, 'Pandhu Aji', 'pandu', 'pandu', 'Admin'),
(6, 'Nuwaf Fajar', 'fajar', 'nuwaf', 'Admin'),
(7, 'Muhammad Adam Nugroho', 'adam', '1111', 'Admin'),
(14, 'putra', 'pnj', 'pnj', 'Admin'),
(15, 'Devi Yulia Nur Afida', 'depi', 'depi', 'Admin'),
(16, '141241', '23523', '214235', 'Admin'),
(17, '..', '..', '..', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'KABUPATEN PONOROGO', 'Layanan Masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_form` int(11) NOT NULL,
  `query1` varchar(100) NOT NULL,
  `query2` varchar(100) NOT NULL,
  `query3` varchar(120) NOT NULL,
  `query4` varchar(100) NOT NULL,
  `query5` varchar(100) NOT NULL,
  `query6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_form`, `query1`, `query2`, `query3`, `query4`, `query5`, `query6`) VALUES
(0, 'Menurut pendapat anda, apakah pelayanan yang diberikan mudah dan cepat?', 'Bagaimana kompetensi dan kemampuan petugas pelayanan?', 'Jika ada retribusi, apakah sudah sesuai dengan ketentuan yang berlaku? (Pilih Sesuai/Gratis jika tidak ada retribusi)', 'Apakah ada pungutan yang tidak sesuai ketentuan (Pungli)?', 'Apakah sarana dan prasarana pelayanan sudah memadai?', 'Apakah sudah diterapkan protokol kesehatan dalam pemberian pelayanan?');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_form`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
