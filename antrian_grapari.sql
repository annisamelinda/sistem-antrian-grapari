-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Okt 2018 pada 03.59
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
  `id_customer` varchar(20) NOT NULL,
  `NIK` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`nomor_antrian`, `nomor_register`, `tanggal_order`, `jam_order`, `jam_diproses`, `jam_selesai`, `durasi`, `no_loket`, `jenis_pelayanan`, `status_antrian`, `id_customer`, `NIK`) VALUES
(3, 'CL23-Con212', '2018-10-23', '22:34:27', NULL, '', NULL, 3, 'ganti_kartu', 'menunggu', 'Con212', NULL);

--
-- Trigger `antrian`
--
DELIMITER $$
CREATE TRIGGER `riwayat_antrian` AFTER DELETE ON `antrian` FOR EACH ROW BEGIN
  INSERT INTO riwayat_antrian
        (       nomor_antrian,
         		nomor_register,
                tanggal_order,
                jam_order,
                jam_selesai,
                no_loket,
                status_antrian,
                id_customer,
				NIK      
        )
  VALUES
        (       OLD.nomor_antrian,
				OLD.nomor_register,
         		OLD.tanggal_order,
                OLD.jam_order,
                OLD.jam_selesai,
                OLD.no_loket,
                OLD.status_antrian,
                OLD.id_customer,
				OLD.NIK
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
('Cah111', 'Sarah', '08121212111'),
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
('Can711', 'irwan', '0812177711'),
('Can712', 'irwan', '0897878712'),
('Can811', 'irwan', '089889811'),
('Can989', 'farhan', '9889898989'),
('Canah878', 'Irwan Syah', '0897978787878'),
('Cap211', 'Mantap', '1212121211'),
('Car111', 'Fajar', '08178121111'),
('Car212', 'anwar', '0817212121212'),
('Car343', 'Anwar', '087374343'),
('Car821', 'mawar', '9898991821'),
('Cas112', 'zmnas', '081277612112'),
('Cas212', 'asasas', '12121212'),
('Cba444', 'coba', '021234444'),
('Cbuja212', 'Ibu Eja', '07342121212'),
('Cbulo121', 'Abu Marlo', '0812422121'),
('Cby111', 'Deby', '0812121111'),
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
('Cir111', 'Amir', '0891211111'),
('Cir211', 'Basir', '08712121211'),
('Cira121', 'safira', '0878712121'),
('Cisa496', 'annisa', '08112068496'),
('Cja889', 'kajdjja', '989989889'),
('Cjo332', 'ojo', '08276372332'),
('Cka455', 'janualika', '0812334455'),
('Cka676', 'Friska', '0886767676'),
('Cki122', 'Iki', '012121312122'),
('Cli878', 'rafli', '089987878'),
('Cmm121', 'oomm', '09912812121'),
('Cng111', 'aceng', '02178121111'),
('Cng211', 'Mamang', '08912121211'),
('Cng212', 'abang', '0898121212'),
('Cng911', 'Abang', '0817999911'),
('Cngni121', 'Bang Joni', '0812612121'),
('Con212', 'Imron', '08912121212'),
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
('Cud111', 'Jamrud', '0812121111'),
('Cul111', 'Mantul', '08912121111'),
('Cul121', 'Fahrul', '089172812121'),
('Cum111', 'Antum', '089121111'),
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
(NULL, 1, '2018-10-20 11:10', 0),
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
('012911112111', 'Irwan'),
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
  `nomor_register` varchar(20) DEFAULT NULL,
  `tanggal_order` date NOT NULL,
  `jam_order` varchar(8) NOT NULL,
  `jam_selesai` varchar(8) NOT NULL,
  `no_loket` int(11) NOT NULL,
  `jenis_pelayanan` varchar(30) NOT NULL,
  `status_antrian` varchar(15) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `NIK` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Dumping data untuk tabel `supervisor`
--

INSERT INTO `supervisor` (`NIK`, `nama`) VALUES
('089898988', 'Marwan'),
('12381828912112', 'Melia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`nomor_antrian`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `no_loket` (`no_loket`),
  ADD KEY `NIK` (`NIK`);

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
  MODIFY `nomor_antrian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `loket`
--
ALTER TABLE `loket`
  MODIFY `no_loket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_antrian`
--
ALTER TABLE `riwayat_antrian`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_id_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nik_petugas` FOREIGN KEY (`NIK`) REFERENCES `petugas` (`NIK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
