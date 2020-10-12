-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2019 pada 09.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbitase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rulebook`
--

CREATE TABLE `rulebook` (
  `id_rb` int(11) NOT NULL,
  `bisnis_view` varchar(255) NOT NULL,
  `bisnis_dw` varchar(255) NOT NULL,
  `vlog_view` varchar(255) NOT NULL,
  `vlog_dw` varchar(255) NOT NULL,
  `gtalent_view` varchar(255) NOT NULL,
  `gtalent_dw` varchar(255) NOT NULL,
  `badminton_view` varchar(255) NOT NULL,
  `badminton_dw` varchar(255) NOT NULL,
  `pubg_view` varchar(255) NOT NULL,
  `pubg_dw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rulebook`
--

INSERT INTO `rulebook` (`id_rb`, `bisnis_view`, `bisnis_dw`, `vlog_view`, `vlog_dw`, `gtalent_view`, `gtalent_dw`, `badminton_view`, `badminton_dw`, `pubg_view`, `pubg_dw`) VALUES
(1, 'https://drive.google.com/file/d/1-5VnS9blIHHFjXHTLeF2nEUcBlcihApc/preview', 'https://drive.google.com/uc?authuser=0&id=1-5VnS9blIHHFjXHTLeF2nEUcBlcihApc&export=download', 'https://drive.google.com/file/d/1Du-tRDrJ4vvt9mgCGNLK6uw68f-KAtxb/preview', 'https://drive.google.com/a/ittelkom-pwt.ac.id/uc?authuser=1&id=1Du-tRDrJ4vvt9mgCGNLK6uw68f-KAtxb&export=download', 'https://drive.google.com/file/d/1dtvL7BRXzg14Uccr-7LtZ0Faz0BtK230/preview', 'https://drive.google.com/uc?authuser=0&id=1dtvL7BRXzg14Uccr-7LtZ0Faz0BtK230&export=download', 'https://drive.google.com/file/d/1hDRJ1qCusFWxmQ2PJy4LsUyeLdglmJgR/preview', 'https://drive.google.com/uc?authuser=0&id=1hDRJ1qCusFWxmQ2PJy4LsUyeLdglmJgR&export=download', 'https://drive.google.com/file/d/1hssUtehCgWqC8tsjxMpEu3p1AwyVDesS/preview', 'https://drive.google.com/uc?authuser=0&id=1hssUtehCgWqC8tsjxMpEu3p1AwyVDesS&export=download');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rulebook`
--
ALTER TABLE `rulebook`
  ADD PRIMARY KEY (`id_rb`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rulebook`
--
ALTER TABLE `rulebook`
  MODIFY `id_rb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
