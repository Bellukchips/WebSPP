-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2019 pada 06.28
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aspp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `imports`
--

CREATE TABLE `imports` (
  `nis` int(10) NOT NULL DEFAULT 0,
  `nama` varchar(100) DEFAULT NULL,
  `id_kelass` varchar(11) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imports`
--

INSERT INTO `imports` (`nis`, `nama`, `id_kelass`, `tahun_ajaran`) VALUES
(12563, 'AENUN MUTOHAROH', 'ITXIIRPL1', '2016/2017'),
(12565, 'AYU DIAZ PUTRI', 'ITXIIRPL1', '2016/2017'),
(12566, 'DINA JULIA NUR ZAHROH', 'ITXIIRPL1', '2016/2017'),
(12567, 'DINAR AYU PUTRI', 'ITXIIRPL1', '2016/2017'),
(12568, 'DINDA AYU LESTARI', 'ITXIIRPL1', '2016/2017'),
(12569, 'DWI UTARI', 'ITXIIRPL1', '2016/2017'),
(12570, 'EKA LUSIANA', 'ITXIIRPL1', '2016/2017'),
(12571, 'ETI KARLINAH', 'ITXIIRPL1', '2016/2017'),
(12572, 'HANA NUR ISNAENI', 'ITXIIRPL1', '2016/2017'),
(12573, 'INDAH AYU LESTARI', 'ITXIIRPL1', '2016/2017'),
(12574, 'IRAWATI', 'ITXIIRPL1', '2016/2017'),
(12575, 'KHILYATUN NADA', 'ITXIIRPL1', '2016/2017'),
(12576, 'LAELA SAFIRA', 'ITXIIRPL1', '2016/2017'),
(12577, 'M.RIFANSYAH', 'ITXIIRPL1', '2016/2017'),
(12578, 'MEI ANDINI AYUNINGTYAS', 'ITXIIRPL1', '2016/2017'),
(12579, 'MUH. LUKMAN AKBAR P', 'ITXIIRPL1', '2016/2017'),
(12580, 'MUHAMAD MARIFATUL IZAM', 'ITXIIRPL1', '2016/2017'),
(12581, 'NABILA I MALU DINA AL HAQQI', 'ITXIIRPL1', '2016/2017'),
(12582, 'NABILA YOFANKA', 'ITXIIRPL1', '2016/2017'),
(12583, 'NIA YULIA NINGSIH', 'ITXIIRPL1', '2016/2017'),
(12584, 'NURUL AZHAR', 'ITXIIRPL1', '2016/2017'),
(12585, 'RETNO KARTIKA NINGRUM', 'ITXIIRPL1', '2016/2017'),
(12586, 'RIZKI HAMZAH HIZAZI', 'ITXIIRPL1', '2016/2017'),
(12587, 'SAYIDATUN NAFISAH', 'ITXIIRPL1', '2016/2017'),
(12588, 'SITI NUR YANAH', 'ITXIIRPL1', '2016/2017'),
(12589, 'VIA SRI MULYANI', 'ITXIIRPL1', '2016/2017'),
(12590, 'VINA IDAMATUS SILMI', 'ITXIIRPL1', '2016/2017'),
(12591, 'WIWIN MULYA ASIH', 'ITXIIRPL1', '2016/2017'),
(12592, 'ZAKIYAH ALFIYANI', 'ITXIIRPL1', '2016/2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_siswa` int(10) DEFAULT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelass` varchar(20) NOT NULL,
  `nominal` varchar(30) DEFAULT NULL,
  `id_bulann` int(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tahun` int(10) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `nama_petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_siswa`, `nama_siswa`, `kelass`, `nominal`, `id_bulann`, `tanggal`, `tahun`, `status`, `nama_petugas`) VALUES
(12579, 'MUH. LUKMAN AKBAR P', 'XII RPL 1 ', '150.000', 1, '2018-11-23', 2018, 'Lunas', 'Admin'),
(12586, 'RIZKI HAMZAH HIZAZI', 'XII RPL 1 ', '150.000', 1, '2018-11-25', 2018, 'Lunas', 'Admin'),
(12579, 'MUH. LUKMAN AKBAR P', 'XII RPL 1 ', '150.000', 2, '2018-11-26', 2018, 'Lunas', 'HAMZAH'),
(12579, 'MUH. LUKMAN AKBAR P', 'XII RPL 1 ', '150.000', 3, '2018-11-26', 2018, 'Lunas', 'HAMZAH'),
(12579, 'MUH. LUKMAN AKBAR P', 'XII RPL 1 ', '150.000', 4, '2018-11-26', 2018, 'Lunas', 'Admin'),
(12579, 'MUH. LUKMAN AKBAR P', 'XII RPL 1 ', '150.000', 6, '2019-02-06', 2019, 'Lunas', 'Admin'),
(12579, 'MUH. LUKMAN AKBAR P', 'XII RPL 1 ', '150.000', 7, '2019-02-06', 2019, 'Lunas', 'Admin'),
(12589, 'VIA SRI MULYANI', 'XII RPL 1 ', '150.000', 1, '2019-10-16', 2019, 'Lunas', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_bulan`
--

CREATE TABLE `t_bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_bulan`
--

INSERT INTO `t_bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` varchar(12) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `set_nominal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `kelas`, `set_nominal`) VALUES
('1212312', 'X TKJ 3', ''),
('BXIBDP2', 'XI AP 2', '300.000'),
('ITXIIRPL1', 'XII RPL 1 ', '150.000'),
('ITXIIRPL2', 'XII RPL 2', '200.000'),
('ITXIITKJ1', 'XII TKJ 1', '200.000'),
('ITXIRPL1', 'XI RPL 1 ', '100.000'),
('ITXITKJ1', 'XI TKJ 1', '20000'),
('ITXMM1', 'X MM 1 ', '200.0000'),
('ITXMM2', 'X MM 2', '100.000'),
('ITXRPL1', 'X RPL 1 ', '300.000'),
('ITXRPL2', 'X RPL 2', '100.000'),
('ITXTKJ1', 'X TKJ 1', '200.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(40) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `level`, `id`) VALUES
('Admin', 'muhamadlukman', 'masuk123', 'admin', 9),
('HAMZAH', 'hamzah123', '123', 'petugas', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelass` (`id_kelass`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kelas` (`kelass`),
  ADD KEY `id_bulann` (`id_bulann`);

--
-- Indeks untuk tabel `t_bulan`
--
ALTER TABLE `t_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indeks untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `imports`
--
ALTER TABLE `imports`
  ADD CONSTRAINT `imports_ibfk_1` FOREIGN KEY (`id_kelass`) REFERENCES `t_kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_2` FOREIGN KEY (`id_bulann`) REFERENCES `t_bulan` (`id_bulan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spp_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `imports` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
