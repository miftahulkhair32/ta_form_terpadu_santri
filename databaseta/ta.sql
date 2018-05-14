-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14 Mei 2018 pada 19.35
-- Versi Server: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `artikel` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `nama`, `bulan`, `judul`, `artikel`) VALUES
(1, 'zakky mantab', 'April', 'test', '7e50687bf0d49c9aba610caffeaa0b7d.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `observasi`
--

CREATE TABLE `observasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `miftahul` int(11) DEFAULT NULL,
  `dian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `observasi`
--

INSERT INTO `observasi` (`id`, `nama`, `bulan`, `miftahul`, `dian`) VALUES
(1, 'zakky mantab', 'Februari', 48, NULL),
(2, 'zakky mantab', 'April', 46, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partisipasi`
--

CREATE TABLE `partisipasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `hadir1` int(11) DEFAULT NULL,
  `lambat1` int(11) DEFAULT NULL,
  `tidak1` int(11) DEFAULT NULL,
  `kurang1` int(11) DEFAULT NULL,
  `hadir2` int(11) DEFAULT NULL,
  `lambat2` int(11) DEFAULT NULL,
  `tidak2` int(11) DEFAULT NULL,
  `kurang2` int(11) DEFAULT NULL,
  `hadir3` int(11) DEFAULT NULL,
  `lambat3` int(11) DEFAULT NULL,
  `tidak3` int(11) DEFAULT NULL,
  `kurang3` int(11) DEFAULT NULL,
  `hadir4` int(11) DEFAULT NULL,
  `lambat4` int(11) DEFAULT NULL,
  `tidak4` int(11) DEFAULT NULL,
  `kurang4` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partisipasi`
--

INSERT INTO `partisipasi` (`id`, `nama`, `bulan`, `hadir1`, `lambat1`, `tidak1`, `kurang1`, `hadir2`, `lambat2`, `tidak2`, `kurang2`, `hadir3`, `lambat3`, `tidak3`, `kurang3`, `hadir4`, `lambat4`, `tidak4`, `kurang4`, `total`, `keterangan`) VALUES
(1, 'zakky mantab', 'April', 90, 80, 0, -20, 91, 10, 0, -19, 98, 0, 0, -12, 97, 0, 0, -13, 376, 'selak test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `pelanggaran` longtext,
  `keterangan` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `nama`, `bulan`, `total`, `pelanggaran`, `keterangan`) VALUES
(1, 'zakky mantab', 'April', 550, '   Tidak sholat fardhu dengan sengaja         Mengganggu ketertiban umum        Mendownload video/mp3 musik tidak islami                                 ', 'wow banget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencapaian`
--

CREATE TABLE `pencapaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pencapaian`
--

INSERT INTO `pencapaian` (`id`, `nama`, `bulan`, `total`) VALUES
(1, 'zakky mantab', 'April', 300);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahfizh`
--

CREATE TABLE `tahfizh` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulan` varchar(45) NOT NULL,
  `halaman` varchar(45) NOT NULL,
  `tgl1` date NOT NULL,
  `salah1` int(11) NOT NULL,
  `lancar1` int(11) NOT NULL,
  `makna1` int(11) NOT NULL,
  `tgl2` date DEFAULT NULL,
  `salah2` int(11) DEFAULT NULL,
  `lancar2` int(11) DEFAULT NULL,
  `makna2` int(11) DEFAULT NULL,
  `tgl3` date DEFAULT NULL,
  `salah3` int(11) DEFAULT NULL,
  `lancar3` int(11) DEFAULT NULL,
  `makna3` int(11) DEFAULT NULL,
  `tgl4` date DEFAULT NULL,
  `salah4` int(11) DEFAULT NULL,
  `lancar4` int(11) DEFAULT NULL,
  `makna4` int(11) DEFAULT NULL,
  `tgl5` date DEFAULT NULL,
  `salah5` int(11) DEFAULT NULL,
  `lancar5` int(11) DEFAULT NULL,
  `makna5` int(11) DEFAULT NULL,
  `tgl6` date DEFAULT NULL,
  `salah6` int(11) DEFAULT NULL,
  `lancar6` int(11) DEFAULT NULL,
  `makna6` int(11) DEFAULT NULL,
  `tgl7` date DEFAULT NULL,
  `salah7` int(11) DEFAULT NULL,
  `lancar7` int(11) DEFAULT NULL,
  `makna7` int(11) DEFAULT NULL,
  `tgl8` date DEFAULT NULL,
  `salah8` int(11) DEFAULT NULL,
  `lancar8` int(11) DEFAULT NULL,
  `makna8` int(11) DEFAULT NULL,
  `tgl9` date DEFAULT NULL,
  `salah9` int(11) DEFAULT NULL,
  `lancar9` int(11) DEFAULT NULL,
  `makna9` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahfizh`
--

INSERT INTO `tahfizh` (`id`, `nama`, `bulan`, `halaman`, `tgl1`, `salah1`, `lancar1`, `makna1`, `tgl2`, `salah2`, `lancar2`, `makna2`, `tgl3`, `salah3`, `lancar3`, `makna3`, `tgl4`, `salah4`, `lancar4`, `makna4`, `tgl5`, `salah5`, `lancar5`, `makna5`, `tgl6`, `salah6`, `lancar6`, `makna6`, `tgl7`, `salah7`, `lancar7`, `makna7`, `tgl8`, `salah8`, `lancar8`, `makna8`, `tgl9`, `salah9`, `lancar9`, `makna9`, `total`) VALUES
(1, 'zakky mantab', 'April', '53', '2018-05-18', 678, 35, 5, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, 718);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('santri','menejemen') NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `username`, `email`, `daerah`, `password`, `status`, `foto`) VALUES
(1, NULL, 'miftahul khair', 'miftahul', 'miftahul.khair.k.r@gmail.com', 'kalbar', '$2y$10$pfbYkyBtYiYa0j27zDlCaupna3aX5eHxIOIwUJBjsbNEgZMpdAF7m', 'menejemen', 'mifta.jpg'),
(2, NULL, 'ardiyansah', 'dian', 'dian.bugas@gmail.com', 'wajok', '$2y$05$NsjG3oPENov5i8t/AszxkeUwAM07G99v5aOe3aW0uEJPf7gqdIZN.', 'menejemen', '559128.jpg'),
(3, 34524214, 'zakky mantab', 'zakky', 'zak.k@petik.or.id', 'cilodong2', '$2y$05$wI0lCM5f68qVtK6w7EGOh.RvEYP5jzqEVgAh1WaAXSWykvPltUCrS', 'santri', '5591281.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_artikel_user1_idx` (`nama`);

--
-- Indexes for table `observasi`
--
ALTER TABLE `observasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_observasi_user1_idx` (`nama`);

--
-- Indexes for table `partisipasi`
--
ALTER TABLE `partisipasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_partisipasi_user1_idx` (`nama`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_pelanggaran_user_idx` (`nama`);

--
-- Indexes for table `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_pencapaian_user1` (`nama`);

--
-- Indexes for table `tahfizh`
--
ALTER TABLE `tahfizh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tafizh_user1_idx` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nim_UNIQUE` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `observasi`
--
ALTER TABLE `observasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partisipasi`
--
ALTER TABLE `partisipasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pencapaian`
--
ALTER TABLE `pencapaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tahfizh`
--
ALTER TABLE `tahfizh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_artikel_user1` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `observasi`
--
ALTER TABLE `observasi`
  ADD CONSTRAINT `fk_observasi_user1` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `partisipasi`
--
ALTER TABLE `partisipasi`
  ADD CONSTRAINT `fk_partisipasi_user1` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `fk_pelanggaran_user` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD CONSTRAINT `fk_pencapaian_user1` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tahfizh`
--
ALTER TABLE `tahfizh`
  ADD CONSTRAINT `fk_tafizh_user1` FOREIGN KEY (`nama`) REFERENCES `user` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
