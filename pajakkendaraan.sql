-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Des 2020 pada 03.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajakkendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Akun`
--

CREATE TABLE `Akun` (
  `Nama` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Akun`
--

INSERT INTO `Akun` (`Nama`, `Password`) VALUES
('bubu', '098eb8ba2cc924fad0ec05acd869a4eb'),
('budi', '00dfc53ee86af02e742515cdcf075ed3'),
('doyok', '642eb94cfa69874a1e184c7123bc241f'),
('ega', '20c1a26a55039b30866c9d0aa51953ca'),
('fathur', '20c1a26a55039b30866c9d0aa51953ca'),
('fino', '20c1a26a55039b30866c9d0aa51953ca'),
('Serafino', '670b14728ad9902aecba32e22fa4f6bd'),
('ucup', '20c1a26a55039b30866c9d0aa51953ca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Kendaraan`
--

CREATE TABLE `Kendaraan` (
  `Id_Kendaraan` varchar(20) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `Jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Kendaraan`
--

INSERT INTO `Kendaraan` (`Id_Kendaraan`, `NIK`, `Jenis`) VALUES
('1', '0001', 'Mobil'),
('2', '0001', 'Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pemilik`
--

CREATE TABLE `Pemilik` (
  `NIK` varchar(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `TTL` varchar(40) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Pemilik`
--

INSERT INTO `Pemilik` (`NIK`, `Nama`, `TTL`, `Alamat`) VALUES
('0001', 'fino', 'Jakarta, 5 Oktober 2000', 'Kotawisata '),
('0007', 'bubu', 'jakut 9 agustus', 'jakut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `STNK`
--

CREATE TABLE `STNK` (
  `Id_STNK` varchar(20) NOT NULL,
  `Id_Kendaraan` varchar(20) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `Tanggal_Penetapan` varchar(30) NOT NULL,
  `Jumlah_Pajak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `STNK`
--

INSERT INTO `STNK` (`Id_STNK`, `Id_Kendaraan`, `Merk`, `Warna`, `Tanggal_Penetapan`, `Jumlah_Pajak`) VALUES
('1000', '1', 'Honda', 'Hitam', '', 'Rp 20.000.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Akun`
--
ALTER TABLE `Akun`
  ADD PRIMARY KEY (`Nama`);

--
-- Indeks untuk tabel `Kendaraan`
--
ALTER TABLE `Kendaraan`
  ADD PRIMARY KEY (`Id_Kendaraan`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `Pemilik`
--
ALTER TABLE `Pemilik`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `Nama_fk` (`Nama`);

--
-- Indeks untuk tabel `STNK`
--
ALTER TABLE `STNK`
  ADD PRIMARY KEY (`Id_STNK`),
  ADD KEY `Id_Kendaraan` (`Id_Kendaraan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `Kendaraan`
--
ALTER TABLE `Kendaraan`
  ADD CONSTRAINT `NIK` FOREIGN KEY (`NIK`) REFERENCES `Pemilik` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `Pemilik`
--
ALTER TABLE `Pemilik`
  ADD CONSTRAINT `Nama_fk` FOREIGN KEY (`Nama`) REFERENCES `Akun` (`Nama`);

--
-- Ketidakleluasaan untuk tabel `STNK`
--
ALTER TABLE `STNK`
  ADD CONSTRAINT `Id_Kendaraan` FOREIGN KEY (`Id_Kendaraan`) REFERENCES `Kendaraan` (`Id_Kendaraan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
