-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2021 pada 08.13
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_edukasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `footer` varchar(50) NOT NULL,
  `ttd` varchar(50) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `deskripsi`, `image`, `judul`, `footer`, `ttd`, `atas_nama`, `kategori`, `tanggal`) VALUES
(1, 'Website adalah sebuah kumpulan halaman pada suatu domain di internet  yang dibuat dengan tujuan tertentu dan saling berhubungan serta dapat diakses secara luas melalui halaman depan (home page) menggunakan sebuah browser menggunakan URL website.', 'https://i.ytimg.com/vi/vP8oYn8O890/maxresdefault.jpg', 'Pengenalan Web #1', 'https://www.niagahoster.co.id', 'Bandung, 7 Desember 2020', 'Robby Ramadhan Anshory', 'Boostrap 4', '2021-02-02'),
(6, 'Every good developer is concerned with saving every second in their development process. Being efficient means faster deployment - the sooner and more often we deploy, the faster our end users get a better product. Therefore spending a few hours or days on planning the process and strategy can save us not only a few minutes, but many hours.  I personally have been working with this framework for the last 4 years on 90% of my projects. In this article, I would like to share with you a few tips which can help you to speedup your application development without missing some of Bootstrapâ€™s awesome capabilities.', 'https://getbootstrap.com/docs/5.0/assets/img/bootstrap-icons@2x.png', 'Judul judull', 'www.tutorialrepublic.com', '', 'del', 'sttb', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'del', 'adeladel', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
