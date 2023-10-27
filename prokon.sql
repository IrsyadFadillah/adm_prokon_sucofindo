-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 04.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prokon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensus`
--

CREATE TABLE `sensus` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int(255) NOT NULL,
  `usia` int(10) NOT NULL,
  `agama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_keluarga` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longtitude` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komoditas` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biota` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_usaha` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kusuka` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pemilik` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_areal` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_pemeliharaan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepadatan_pemeliharaan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknologi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produksi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distribusi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pakan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_pakan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_suplai` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pakan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_benih` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_benih` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_benih` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_tk` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_modal` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_kredit` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipal` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tandon` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `greenbelt` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak_pantai` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_air` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_izin` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_nib` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skala_usaha` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asuransi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bantuan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghargaan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dukungan_pemda` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dukungan_pusat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyuluh` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_petugas` int(16) NOT NULL,
  `waktu_sensus` datetime NOT NULL,
  `perubahan_terakhir` datetime NOT NULL,
  `upt` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verif` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0=Not Verified, 1= Verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sensus`
--

INSERT INTO `sensus` (`id`, `nama`, `nik`, `usia`, `agama`, `gender`, `pendidikan`, `jml_keluarga`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `latitude`, `longtitude`, `komoditas`, `kelompok`, `biota`, `jenis_usaha`, `status_kusuka`, `status_pemilik`, `luas_areal`, `media_pemeliharaan`, `kepadatan_pemeliharaan`, `teknologi`, `produksi`, `distribusi`, `harga_jual`, `jenis_pakan`, `jml_pakan`, `sumber_suplai`, `harga_pakan`, `sumber_benih`, `jml_benih`, `harga_benih`, `jml_tk`, `modal`, `sumber_modal`, `sumber_kredit`, `ipal`, `tandon`, `greenbelt`, `jarak_pantai`, `sumber_air`, `status_izin`, `status_nib`, `skala_usaha`, `asuransi`, `bantuan`, `penghargaan`, `dukungan_pemda`, `dukungan_pusat`, `nama_penyuluh`, `sertifikat`, `foto`, `nama_petugas`, `nik_petugas`, `waktu_sensus`, `perubahan_terakhir`, `upt`, `verif`) VALUES
(24, 'Sulthan', 2147483647, 6, 'Kristen', 'Laki-laki', 'S2', '233', '', 'KUNGKILAN', 'SOSOH BUAY RAYAP', 'KABUPATEN OGAN KOMERING ULU', 'SUMATERA SELATAN', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6470ccd173b3f.png', 'KJahjfyfyfkuyfufyufkyuf', 210, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 1),
(43, '', 0, 0, '', 'Laki-laki', '', '', '', 'HILIMOASIO DUA', 'IDANO GAWO', 'KABUPATEN NIAS', 'SUMATERA UTARA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6482f86b5c124.jpg', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verif_code` text NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `verif_code`, `is_verified`) VALUES
(12, 'admin', '123', '', '', 0),
(13, 'irsyad', '$2y$10$F1R0Nh5XbHLdaQ7VRsmYpO26FCWVuq5Kx.wJSiEEhrURNMXOB0.k.', 'irsyadfadillah@upi.edu', '55c0e629e819ff0d5f55874a5a49d87d', 1),
(14, 'Irsfadill', '$2y$10$0.70SL6EXvbZ3mnvmadtrO7tM9y9csnxiw1NEWLhp.ZGF553c6852', 'irsfadill11@gmail.com', 'd83ceb06b5ce761547f6a26109cd992e', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sensus`
--
ALTER TABLE `sensus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sensus`
--
ALTER TABLE `sensus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
