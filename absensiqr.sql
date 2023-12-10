-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 17.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensiqr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(50) NOT NULL,
  `nis` int(5) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `nis`, `tanggal`, `keterangan`, `status`) VALUES
(1, 212210134, '2023-12-02', 'hati', 'Sakit'),
(2, 212210003, '2023-12-03', 'au', 'Izin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sebagai` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `sebagai`) VALUES
(1, 'adhi', '123', 'adhi', 'admin'),
(2, 'aji', '000', 'aji', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `jam_masuk` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id`, `nis`, `jam_masuk`, `tanggal`) VALUES
(1, 212210003, '6:29:21 PM', '2023-12-03'),
(2, 212210003, '7:26:59 PM', '2023-12-10'),
(3, 212210004, '10:34:51 PM', '2023-12-10'),
(4, 212210010, '10:38:36 PM', '2023-12-10'),
(5, 212210046, '10:51:31 PM', '2023-12-10'),
(6, 212210055, '10:57:41 PM', '2023-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pulang`
--

CREATE TABLE `pulang` (
  `id` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `jam_pulang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pulang`
--

INSERT INTO `pulang` (`id`, `nis`, `jam_pulang`, `tanggal`) VALUES
(1, 212210003, '6:30:13 PM', '2023-12-03'),
(2, 212210003, '7:33:26 PM', '2023-12-10'),
(3, 212210004, '10:35:07 PM', '2023-12-10'),
(4, 212210010, '10:39:03 PM', '2023-12-10'),
(5, 212210046, '10:53:29 PM', '2023-12-10'),
(6, 212210055, '10:58:00 PM', '2023-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tempat_l` varchar(50) NOT NULL,
  `tanggal_l` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `jurusan`, `tempat_l`, `tanggal_l`, `jenis_kelamin`, `alamat`, `img`) VALUES
(212210003, 'ADHI PRAMANA SETIAWAN', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Jakarta', '2006-10-22', 'Laki-Laki', 'Depok', '899-br-adhi.png'),
(212210004, 'ADI RIZKI SETIAWAN', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Jakarta', '2005-12-15', 'Laki-Laki', 'Depok', '430-br-adi_rizki.png'),
(212210010, 'AGIST AFRIZAL', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2005-08-12', 'Laki-Laki', 'Bogor', '411-br-agist.png'),
(212210017, 'AIDIRA WAHYUNINGTYAS', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-08-13', 'Perempuan', 'Bogor', '917-br-aidira.png'),
(212210033, 'ARJUN HERIYANTO', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Jakarta', '2006-06-03', 'Laki-Laki', 'Depok', '927-br-arjun.png'),
(212210038, 'BAGUS SAJIWO', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-07-29', 'Laki-Laki', 'Bogor', '771-br-bagus.png'),
(212210039, 'BETTA NISRINAA GHARINTRI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bekasi', '2005-08-16', 'Perempuan', 'Depok', '892-br-betta.png'),
(212210046, 'DEDE HERMANSYAH', 'XII RPL 1', 'Rekayasa Perangkat Lunak', '', '', 'Laki-Laki', 'Depok', '452-br-dede.png'),
(212210055, 'DIKI PURNAMA', 'XII RPL 1', 'Rekayasa Perangkat Lunak', '', '', 'Laki-Laki', 'Depok', '963-br-diki.png'),
(212210066, 'ELSA FITRIANI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2005-08-14', 'Perempuan', 'Bogor', '604-br-elsa.png'),
(212210084, 'FIRGAWAN HABIB RUDIANTO', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Ciamis', '2006-02-07', 'Laki-Laki', 'Bogor', '598-br-Firgawan.png'),
(212210132, 'MUHAMAD ALIKA', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2006-03-28', 'Laki-Laki', 'Depok', '822-br-alika.png'),
(212210134, 'MUHAMAD ARDIANSYAH ', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Serang', '2006-05-02', 'Laki-Laki', 'Depok', '875-br-ardi_m1.png'),
(212210139, 'MUHAMAD ILHAM WAHYUDI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2006-01-28', 'Laki-Laki', 'Depok', '754-br-ilham.png'),
(212210141, 'MUHAMAD NOVAL ABIYU', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-02-04', 'Laki-Laki', 'Bogor', '981-br-noval.png'),
(212210146, 'RIVAL', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2006-08-15', 'Laki-Laki', 'Depok', '726-br-rival.png'),
(212210149, 'MUHAMMAD ARDIANSYAH', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Tengah Simalangga', '2006-06-11', 'Laki-Laki', 'Depok', '675-br-ardi_m2.png'),
(212210154, 'MUHAMMAD FATIH HIDAYAT', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Jakarta', '2006-04-27', 'Laki-Laki', 'Depok', '775-br-fatih.png'),
(212210156, 'MUHAMMAD HAFIZ SEPTIANSYAH', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2006-09-16', 'Laki-Laki', 'Depok', '580-br-apis.png'),
(212210162, 'MUHAMMAD ROYAN ROBBI MAGHARA', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-06-26', 'Laki-Laki', 'Bogor', '64-br-royan.png'),
(212210165, 'MUHAMMAD ZIDHAN ARIFIN', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bekasi', '2006-11-13', 'Laki-Laki', 'Depok', '879-br-zidan.png'),
(212210178, 'NANDA RIZKI PADILAH', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2006-01-28', 'Laki-Laki', 'Depok', '400-br-padil.png'),
(212210205, 'RAHMATULLOH NASYA DWI PRATAMA', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2005-11-13', 'Laki-Laki', 'Depok', '971-br-rahmat.png'),
(212210216, 'RIFANDI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Depok', '2005-05-25', 'Laki-Laki', 'Depok', '332-br-rifandi.png'),
(212210259, 'VIRNA RESITA DEWI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-04-07', 'Perempuan', 'Bogor', '250-br-virna.png'),
(212210261, 'WAYLEND YUTANI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-04-07', 'Laki-Laki', 'Bogor', '431-br-welen.png'),
(212210274, 'ZULFADLI', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-02-04', 'Laki-Laki', 'Bogor', '812-br-zulfadli.png'),
(212210275, 'MUHAMMAD TAUFIQ RIZQIAN', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Bogor', '2006-03-06', 'Laki-Laki', 'Bogor', '630-br-opik.png'),
(212210288, 'ADITYA NUR  RAMADHAN', 'XII RPL 1', 'Rekayasa Perangkat Lunak', 'Tegal', '2005-10-08', 'Laki-Laki', 'Depok', '215-br-adit.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `pulang`
--
ALTER TABLE `pulang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pulang`
--
ALTER TABLE `pulang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212210289;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Ketidakleluasaan untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Ketidakleluasaan untuk tabel `pulang`
--
ALTER TABLE `pulang`
  ADD CONSTRAINT `pulang_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
