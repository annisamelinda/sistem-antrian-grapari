-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Okt 2018 pada 03.25
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian_grapari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `nomor_antrian` int(5) NOT NULL,
  `nomor_register` varchar(20) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `jam_order` varchar(8) DEFAULT NULL,
  `jam_diproses` varchar(8) DEFAULT NULL,
  `jam_selesai` varchar(8) NOT NULL,
  `durasi` varchar(30) DEFAULT NULL,
  `no_loket` int(11) DEFAULT NULL,
  `jenis_pelayanan` varchar(30) DEFAULT NULL,
  `status_antrian` varchar(15) DEFAULT NULL,
  `id_customer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`nomor_antrian`, `nomor_register`, `tanggal_order`, `jam_order`, `jam_diproses`, `jam_selesai`, `durasi`, `no_loket`, `jenis_pelayanan`, `status_antrian`, `id_customer`) VALUES
(1, 'CL19-Cum121', '2018-10-19', '08:21:02', '08:21:21', '08:21:29', '0 jam, 0 menit', 1, 'deaktivasi_kartu', 'selesai', 'Cum121');

--
-- Trigger `antrian`
--
DELIMITER $$
CREATE TRIGGER `riwayat_antrian` AFTER DELETE ON `antrian` FOR EACH ROW BEGIN
  INSERT INTO riwayat_antrian
        (       nomor_antrian,
                tanggal_order,
                jam_order,
                jam_selesai,
                no_loket,
                status_antrian,
                id_customer
        )
  VALUES
        (       OLD.nomor_antrian,
                OLD.tanggal_order,
                OLD.jam_order,
                OLD.jam_selesai,
                OLD.no_loket,
                OLD.status_antrian,
                OLD.id_customer
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_telp`) VALUES
('C01', 'Irwan', '089899871'),
('C02', 'Maran', '0898786767'),
('C03', 'caca', '09090'),
('C12212', '12121212', '112121212'),
('C12434', '121212', '0989343434'),
('C212', 'opo', '09090121212'),
('C21899', '121212121', '0890889899'),
('C22121', '1212122', '121212121'),
('C22212', '1212122', '121212'),
('C22221', '1212122', '08712121221'),
('C54212', '74545454', '12121212'),
('C898', 'oke', '09898898'),
('C898989212', '089898989', '12121212'),
('Ca212', 'irwa', '123121212'),
('Ca667', 'irwa', '0867676667'),
('Caafa131', 'fafaafa', '123212131'),
('Caafa821', 'fafaafa', '02189891821'),
('Cah121', 'Arafah', '08543212121'),
('Cah434', 'bocah', '0989343434'),
('Cah778', 'farah', '08787778'),
('Cal342', 'Kemal', '0876534342'),
('Can111', 'Ojan', '089898912111'),
('Can121', 'irwan', '042612121'),
('Can122', 'irwan', '0876612122'),
('Can212', 'maman', '123121212'),
('Can312', 'irwan', '0891281312'),
('Can323', 'Ojan', '08723232323'),
('Can345', 'irawan', '0822332345'),
('Can434', 'Marwan', '083434343434'),
('Can712', 'irwan', '0897878712'),
('Can811', 'irwan', '089889811'),
('Can989', 'farhan', '9889898989'),
('Canah878', 'Irwan Syah', '0897978787878'),
('Car212', 'anwar', '0817212121212'),
('Car343', 'Anwar', '087374343'),
('Car821', 'mawar', '9898991821'),
('Cas112', 'zmnas', '081277612112'),
('Cas212', 'asasas', '12121212'),
('Cba444', 'coba', '021234444'),
('Cbuja212', 'Ibu Eja', '07342121212'),
('Cbulo121', 'Abu Marlo', '0812422121'),
('Cda211', 'Melinda', '2432121211'),
('Cda212', 'adasda', '1212121212'),
('Cda344', 'melinda', '0811223344'),
('Cdi121', 'jodi', '0823352121'),
('Cdi782', 'Dodi', '08621218782'),
('Cee333', 'adddeee', '44444333'),
('Cew192', 'iiwew', '089898192'),
('Cfa212', 'fafaafa', '121212121212'),
('Cfa323', 'fafaafa', '2323232323'),
('Cfa324', 'fafaafa', '1212324324243'),
('Chan212', 'farhan', '089891212'),
('Chan213', 'farhan', '123213213213'),
('Cia111', 'Aulia', '084734122111'),
('Cia222', 'zaskia', '08111888222'),
('Cia882', 'aprilia', '081119928882'),
('Cif132', 'arif', '0812132132'),
('Cif432', 'arif', '08112120432'),
('Cin322', 'arin', '0811332233322'),
('Cin343', 'Martin', '08873434343'),
('Cin555', 'arin', '0811223344555'),
('Cinda212', 'Melinda', '089812121212'),
('Cinda332', 'Melinda', '09878232332'),
('Cinda878', 'Melinda', '088997878'),
('Cio811', 'io', '0787888811'),
('Cira121', 'safira', '0878712121'),
('Cisa496', 'annisa', '08112068496'),
('Cja889', 'kajdjja', '989989889'),
('Cjo332', 'ojo', '08276372332'),
('Cka455', 'janualika', '0812334455'),
('Cka676', 'Friska', '0886767676'),
('Cki122', 'Iki', '012121312122'),
('Cli878', 'rafli', '089987878'),
('Cmm121', 'oomm', '09912812121'),
('Cng212', 'abang', '0898121212'),
('Cngni121', 'Bang Joni', '0812612121'),
('Coy142', 'Asoy', '0847212142'),
('Cpa121', 'opa', '1231212121'),
('Cpi911', 'Kopi', '0876999911'),
('Cr212', 'amar', '08917281212'),
('Cra455', 'almira', '0811122334455'),
('Cran Taufik212', 'Mahran Taufik', '0989891212'),
('Crn212', 'Urn', '1212121212'),
('Csa212', 'asasasasasa', '1212121212'),
('Csa344', 'annisa', '081111223344'),
('Csa496', 'annisa', '08112068496'),
('Csada496', 'annisa melinda', '08112068496'),
('Csamd765', 'annisa md', '0897778777765'),
('Csas212', 'asasas', '121312121212'),
('Csas242', 'asasas', '124234234242'),
('Csas989', 'asasas', '08989989'),
('Csd121', 'jasdasd', '021921212121'),
('Csf121', 'fasfsf', '121212121'),
('CSiak434', 'Si Kocak', '08912383434'),
('Cta999', 'janualita', '08112228999'),
('Ctap gan212', 'mantap gan', '087871212'),
('Cul121', 'Fahrul', '089172812121'),
('Cum121', 'Arum', '0998192121'),
('Cvi345', 'devi', '0811223345'),
('Cwa212', 'irwa', '121212'),
('Cwa419', 'naswa', '0812333419'),
('Cwa887', 'irwa', '08979897887'),
('Cww171', 'Popowww', '0816278171');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loket`
--

CREATE TABLE `loket` (
  `no_loket` int(11) NOT NULL,
  `nama_loket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loket`
--

INSERT INTO `loket` (`no_loket`, `nama_loket`) VALUES
(1, 'Loket 1'),
(2, 'Loket 2'),
(3, 'Loket 3'),
(4, 'Loket 4'),
(5, 'Loket 5'),
(6, 'Loket 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_loket`
--

CREATE TABLE `pelayanan_loket` (
  `NIK` varchar(30) DEFAULT NULL,
  `no_loket` int(11) NOT NULL,
  `access_time` varchar(50) DEFAULT NULL,
  `status_loket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan_loket`
--

INSERT INTO `pelayanan_loket` (`NIK`, `no_loket`, `access_time`, `status_loket`) VALUES
('13121212', 1, '2018-10-19 08:16', 1),
('13121212', 2, '2018-10-17 22:44', 0),
('8182881', 3, '2018-10-16 08:30', 0),
('9876', 4, '2018-10-16 08:30', 0),
('145652', 5, '2018-10-17 08:37', 0),
('13121212', 6, '2018-10-15 07:57', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `NIK` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`NIK`, `nama`) VALUES
('13121212', 'Marwan'),
('145652', 'ojo'),
('8182881', 'Arman'),
('9876', 'Amar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_antrian`
--

CREATE TABLE `riwayat_antrian` (
  `no` int(5) NOT NULL,
  `nomor_antrian` int(5) NOT NULL,
  `tanggal_order` date NOT NULL,
  `jam_order` varchar(8) NOT NULL,
  `jam_selesai` varchar(8) NOT NULL,
  `no_loket` int(11) NOT NULL,
  `jenis_pelayanan` varchar(30) NOT NULL,
  `status_antrian` varchar(15) NOT NULL,
  `id_customer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_antrian`
--

INSERT INTO `riwayat_antrian` (`no`, `nomor_antrian`, `tanggal_order`, `jam_order`, `jam_selesai`, `no_loket`, `jenis_pelayanan`, `status_antrian`, `id_customer`) VALUES
(1, 1, '2018-10-09', '12', '14', 2, '', 'menunggu', 'C02'),
(2, 2, '2018-10-10', '14', '19', 2, '', 'menunggu', 'C01'),
(3, 1, '2018-10-18', '14', '17', 1, '', 'menunggu', 'C03'),
(4, 5, '2018-10-07', '07:08:41', '', 1, '', 'menunggu', 'Chan213'),
(5, 4, '2018-10-07', '07:02:23', '', 1, '', 'menunggu', 'Chan212'),
(6, 3, '2018-10-07', '07:00:12', '', 1, '', 'menunggu', 'Cah778'),
(7, 2, '2018-10-08', '17:41:33', '', 2, '', 'menunggu', 'C212'),
(8, 1, '2018-10-08', '17:40:27', '', 1, '', 'menunggu', 'C898989212'),
(9, 3, '2018-10-08', '17:46:03', '', 3, '', 'menunggu', 'Car821'),
(10, 4, '2018-10-08', '18:06:56', '', 4, '', 'menunggu', 'C898'),
(11, 5, '2018-10-08', '18:07:14', '', 5, '', 'menunggu', 'Ctap gan212'),
(12, 6, '2018-10-07', '18:19:58', '', 6, '', 'menunggu', 'Car212'),
(13, 7, '2018-10-07', '18:20:14', '', 1, '', 'menunggu', 'Cira121'),
(14, 1, '2018-10-07', '18:27:32', '', 1, '', 'menunggu', 'Ca212'),
(15, 1, '2018-10-07', '18:31:03', '', 1, '', 'menunggu', 'Caafa131'),
(16, 1, '2018-10-07', '18:32:36', '', 1, '', 'menunggu', 'Csas212'),
(17, 2, '2018-10-07', '18:33:28', '', 2, '', 'menunggu', 'Cr212'),
(18, 3, '2018-10-07', '18:34:05', '', 3, '', 'menunggu', 'Cran Taufik212'),
(19, 4, '2018-10-07', '18:42:47', '', 4, '', 'menunggu', 'Cng212'),
(20, 1, '2018-10-08', '18:53:29', '', 1, '', 'menunggu', 'C22221'),
(21, 2, '2018-10-08', '18:55:52', '', 2, '', 'menunggu', 'Csa212'),
(22, 3, '2018-10-08', '18:57:40', '', 3, '', 'menunggu', 'Cda212'),
(23, 4, '2018-10-08', '18:58:05', '', 4, '', 'menunggu', 'Can989'),
(24, 5, '2018-10-08', '19:00:56', '', 5, '', 'menunggu', 'Cwa212'),
(25, 6, '2018-10-08', '19:01:25', '', 6, '', 'menunggu', 'C22212'),
(26, 7, '2018-10-08', '19:07:36', '', 1, '', 'menunggu', 'C22121'),
(27, 8, '2018-10-08', '19:13:50', '', 2, '', 'menunggu', 'Cwa887'),
(28, 9, '2018-10-08', '19:15:15', '', 3, '', 'menunggu', 'Cfa212'),
(29, 10, '2018-10-08', '19:18:35', '', 4, '', 'menunggu', 'Cas212'),
(30, 11, '2018-10-08', '19:19:31', '', 5, '', 'menunggu', 'C12212'),
(31, 12, '2018-10-08', '19:23:47', '', 6, '', 'menunggu', 'Cja889'),
(32, 13, '2018-10-08', '19:25:09', '', 1, '', 'menunggu', 'Cda211'),
(33, 14, '2018-10-08', '19:26:55', '', 2, '', 'menunggu', 'Canah878'),
(34, 1, '2018-10-09', '03:14:28', '', 1, '', 'menunggu', 'Csd121'),
(35, 2, '2018-10-09', '03:19:36', '', 2, '', 'menunggu', 'C54212'),
(36, 3, '2018-10-09', '03:22:02', '', 3, '', 'menunggu', 'Csa496'),
(37, 4, '2018-10-09', '03:23:15', '', 4, '', 'menunggu', 'Cba444'),
(38, 5, '2018-10-09', '03:25:50', '', 5, '', 'menunggu', 'Csf121'),
(39, 6, '2018-10-09', '03:30:08', '', 6, '', 'menunggu', 'Cfa323'),
(40, 7, '2018-10-09', '03:32:46', '', 1, '', 'menunggu', 'Cif432'),
(41, 8, '2018-10-09', '03:33:24', '', 2, '', 'menunggu', 'C21899'),
(42, 9, '2018-10-09', '14:08:30', '', 3, '', 'menunggu', 'Can434'),
(43, 10, '2018-10-09', '19:11:02', '', 4, '', 'menunggu', 'Cjo332'),
(44, 1, '2018-10-25', '12', '14', 1, '', 'menunggu', 'C01'),
(45, 2, '2018-10-10', '23:30:12', '', 2, '', 'menunggu', 'Cpa121'),
(46, 1, '2018-10-10', '23:35:33', '', 1, '', 'menunggu', 'Crn212'),
(47, 1, '2018-10-11', '22:33:29', '', 1, '', 'selesai', 'Cal342'),
(48, 2, '2018-10-11', '22:37:46', '', 2, '', 'selesai', 'Csamd765'),
(49, 3, '2018-10-11', '22:50:27', '', 3, '', 'menunggu', 'Cin343'),
(50, 4, '2018-10-11', '22:54:01', '', 4, '', 'selesai', 'Cdi782'),
(51, 5, '2018-10-11', '22:56:47', '', 5, '', 'selesai', 'Cdi121'),
(52, 6, '2018-10-11', '23:02:50', '', 6, '', 'menunggu', 'Cki122'),
(53, 7, '2018-10-11', '23:03:05', '', 1, '', 'menunggu', 'Cah434'),
(54, 8, '2018-10-11', '23:04:01', '', 2, '', 'menunggu', 'C12434'),
(55, 9, '2018-10-11', '23:10:57', '', 3, '', 'menunggu', 'CSiak434'),
(56, 10, '2018-10-11', '23:18:26', '', 4, '', 'selesai', 'Cee333'),
(57, 11, '2018-10-15', '08:09:05', '', 5, '', 'menunggu', 'Cww171'),
(58, 1, '2018-10-15', '08:12:06', '', 1, '', 'selesai', 'Cka676'),
(59, 2, '2018-10-15', '08:17:26', '', 2, '', 'menunggu', 'Csada496'),
(60, 3, '2018-10-15', '21:29:31', '', 3, '', 'menunggu', 'Cbuja212'),
(61, 4, '2018-10-15', '21:29:43', '', 4, '', 'menunggu', 'Cia111'),
(62, 5, '2018-10-15', '21:29:55', '', 5, '', 'menunggu', 'Cah121'),
(63, 6, '2018-10-15', '21:30:08', '', 6, '', 'menunggu', 'Cngni121'),
(64, 7, '2018-10-15', '21:30:20', '', 1, '', 'selesai', 'Cbulo121'),
(65, 8, '2018-10-15', '23:00:47', '', 2, '', 'menunggu', 'Can323'),
(66, 9, '2018-10-15', '23:01:06', '', 3, '', 'menunggu', 'Car343'),
(67, 10, '2018-10-15', '23:01:17', '', 4, '', 'menunggu', 'Coy142'),
(68, 11, '2018-10-15', '23:01:28', '', 5, '', 'menunggu', 'Cmm121'),
(69, 12, '2018-10-15', '23:02:09', '', 6, '', 'menunggu', 'Cpi911'),
(70, 13, '2018-10-15', '23:02:20', '', 1, '', 'selesai', 'Cio811'),
(71, 14, '2018-10-16', '08:22:40', '', 2, '', 'menunggu', 'Csa344'),
(72, 15, '2018-10-16', '08:23:09', '', 3, '', 'menunggu', 'Cda344'),
(73, 16, '2018-10-16', '08:25:45', '', 4, '', 'selesai', 'Cvi345'),
(74, 17, '2018-10-16', '08:25:59', '', 5, '', 'menunggu', 'Cif132'),
(75, 18, '2018-10-16', '08:26:12', '', 6, '', 'menunggu', 'Can345'),
(76, 19, '2018-10-16', '08:26:30', '', 1, '', 'menunggu', 'Cwa419'),
(77, 20, '2018-10-16', '08:26:48', '', 2, '', 'menunggu', 'Cia882'),
(78, 21, '2018-10-16', '08:27:05', '', 3, '', 'menunggu', 'Cia222'),
(79, 22, '2018-10-16', '08:27:24', '', 4, '', 'selesai', 'Cta999'),
(80, 23, '2018-10-16', '08:27:39', '', 5, '', 'menunggu', 'Cra455'),
(81, 24, '2018-10-16', '08:27:57', '', 6, '', 'menunggu', 'Cka455'),
(82, 1, '2018-10-17', '22:10:12', '08:19:45', 1, '', 'selesai', 'Can111'),
(83, 2, '2018-10-17', '08:25:26', '', 2, '', 'selesai', 'Cfa324'),
(84, 3, '2018-10-17', '08:26:03', '', 3, '', 'menunggu', 'Cul121'),
(85, 4, '2018-10-17', '08:30:05', '', 4, '', 'menunggu', 'Cin555'),
(86, 5, '2018-10-17', '08:37:15', '', 5, '', 'menunggu', 'Cin322');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_loket`
--

CREATE TABLE `riwayat_loket` (
  `no_loket` int(11) NOT NULL,
  `antrian_terakhir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_loket`
--

INSERT INTO `riwayat_loket` (`no_loket`, `antrian_terakhir`) VALUES
(1, NULL),
(2, NULL),
(3, NULL),
(4, NULL),
(5, NULL),
(6, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supervisor`
--

CREATE TABLE `supervisor` (
  `NIK` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`nomor_antrian`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `no_loket` (`no_loket`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`no_loket`);

--
-- Indeks untuk tabel `pelayanan_loket`
--
ALTER TABLE `pelayanan_loket`
  ADD PRIMARY KEY (`no_loket`),
  ADD KEY `no_loket` (`no_loket`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `riwayat_antrian`
--
ALTER TABLE `riwayat_antrian`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `riwayat_loket`
--
ALTER TABLE `riwayat_loket`
  ADD KEY `no_loket` (`no_loket`);

--
-- Indeks untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `nomor_antrian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `loket`
--
ALTER TABLE `loket`
  MODIFY `no_loket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_antrian`
--
ALTER TABLE `riwayat_antrian`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_no_no_loket` FOREIGN KEY (`no_loket`) REFERENCES `loket` (`no_loket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pelayanan_loket`
--
ALTER TABLE `pelayanan_loket`
  ADD CONSTRAINT `fk_no_loket` FOREIGN KEY (`no_loket`) REFERENCES `loket` (`no_loket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `riwayat_loket`
--
ALTER TABLE `riwayat_loket`
  ADD CONSTRAINT `fk_id_riwayat_loket` FOREIGN KEY (`no_loket`) REFERENCES `loket` (`no_loket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
