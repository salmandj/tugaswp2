-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2018 pada 21.07
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `email`, `gambar`, `status`) VALUES
(1, 'Bariman Susiyanto', '12345', 'barimans18@gmail.com', 'bari2.JPG', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gaji` int(50) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`nip`, `nama`, `gambar`, `alamat`, `gaji`, `departemen`, `sex`, `status`, `no_telp`) VALUES
('PEG-0001', 'Bariman Susiyanto', 'bari2.JPG', 'Jl. Ibrahim Adjie, No.11 Bandung', 7800000, 'Information Technology', 'Laki-Laki', 'Tetap', '081572106474'),
('PEG-0002', 'Sandi Triana', 'Sandi Triana.JPG', 'JL. Srigunting Raya No.1 Bandung', 2750000, 'Produksi', 'Laki-Laki', 'Kontrak', '087654765489'),
('PEG-0003', 'Obit Firdaus', 'Obit Firdaus.JPG', 'JL. A H Nasution No. 14 Bandung', 3850000, 'Jaminan Kualitas', 'Laki-Laki', 'Tetap', '085635667442'),
('PEG-0004', 'Alun Nuraini', 'Alun Nurani.JPG', 'JL. Cisaranten Kulon Bandung', 2100000, 'Keuangan', 'Perempuan', 'Kontrak', '089876543211'),
('PEG-0005', 'Ayu Nurjamillah', 'Ayu Nurjamilah.JPG', 'JL. Bojongloa No.69 Bandung', 2500000, 'Keuangan', 'Perempuan', 'Kontrak', '086675342688'),
('PEG-0006', 'Rizki Fauzi', 'Rizky Fauzi.JPG', 'JL. Babakan Ciparay No. 212 Bandung', 2650000, 'Information Technology', 'Laki-Laki', 'Kontrak', '085645323761'),
('PEG-0007', 'Moch. Aldy', 'Moch. Aldy.JPG', 'JL. Batununggal No.3 Bandung', 2600000, 'Kepersonaliaan', 'Laki-Laki', 'Tetap', '088656439822'),
('PEG-0008', 'Fitri Suciati', 'Fitri Suciati.JPG', 'JL. Holis No.210/191 A Bandung', 2350000, 'Supply Chain Management ', 'Perempuan', 'Kontrak', '087656454522'),
('PEG-0009', 'Siti Nurlatifah', 'Siti Nurlatifah.JPG', 'JL. Taman Sari No.49 Bandung', 2750000, 'Marketing dan Customer Service', 'Perempuan', 'Kontrak', '089543435266'),
('PEG-0010', 'Panji D. Giantoro', 'Panji Dhenis Giantoro.JPG', 'JL. Venus No. 6 Bandung', 2900000, 'Marketing dan Customer Service', 'Laki-Laki', 'Tetap', '089787564512'),
('PEG-0011', 'Adi Subangkit', 'adi subangkit.jpg', 'Jl. KH. Wahid Hasyim No. 258 Bandung', 1850000, 'Kepersonaliaan', 'Laki-Laki', 'Kontrak', '087898643524'),
('PEG-0012', 'Alfrida Limbong', 'Alfrida Limbong Allo.JPG', 'JL. Cijawura Hilir No. 64 Bandung', 1650000, 'Marketing dan Customer Service', 'Perempuan', 'Kontrak', '089676454523'),
('PEG-0013', 'Chyntia Dewi', 'chyntia dewi.JPG', 'JL. Sukasenang No.11 Bandung', 2200000, 'Jaminan Kualitas', 'Perempuan', 'Tetap', '085327634349'),
('PEG-0014', 'Dinda Khaeruni', 'Dinda Khaerani.JPG', 'JL. Purabaya No.1 Bandung', 2300000, 'Keuangan', 'Perempuan', 'Kontrak', '085676558732'),
('PEG-0015', 'Danu Beta', 'Danoe Beta Prakoso.JPG', 'JL. Talaga Bodas No.35 Bandung', 2100000, 'Produksi', 'Laki-Laki', 'Kontrak', '087567535399');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nip`);

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
