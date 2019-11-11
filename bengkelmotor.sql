-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2017 pada 09.52
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bengkelmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelanggan`
--

CREATE TABLE IF NOT EXISTS `datapelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(50) NOT NULL,
  `nohp_pelanggan` varchar(13) NOT NULL,
  `nopolisi` varchar(10) NOT NULL,
  `tipe` enum('Bebek Kurang dari 150cc','Matic Kurang dari 150cc','Bebek Lebih dari 150cc','Moge Lebih dari 250cc') NOT NULL,
  `merk` varchar(50) NOT NULL,
  `nomesin` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `datapelanggan`
--

INSERT INTO `datapelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `nohp_pelanggan`, `nopolisi`, `tipe`, `merk`, `nomesin`) VALUES
(2, 'Sasuke', 'Konohakagure', '0852333566890', 'P 9090 RD', 'Bebek Kurang dari 150cc', 'Revo', '47624726'),
(13, 'Itachi', 'Tak jelas', '9987987', 'p 9090 5', 'Bebek Kurang dari 150cc', 'megapro', '98394379'),
(16, 'Andika Satria Wibawa', 'Ambulu', '8954879489', '13', 'Matic Kurang dari 150cc', 'Honda New Vario 125 2015', 'HND01VR21324'),
(17, 'ika lastri', 'kapongan', '0893237', 'p 2323 ep', 'Bebek Kurang dari 150cc', 'Honda Beat 2013', '423423'),
(18, 'Hendri', 'Panji Kidul RT1 RW2', '0890090098', 'P 0909 EP', 'Matic Kurang dari 150cc', 'Yamaha Mio J 2013', 'YMH 456332'),
(19, 'irfan', 'Malang', 'hzcgd', 'P 4738 EP', 'Bebek Kurang dari 150cc', 'Honda VArio', 'HND 32428');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataservice`
--

CREATE TABLE IF NOT EXISTS `dataservice` (
`id_service` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_user` varchar(22) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  `jenis_service` varchar(25) NOT NULL,
  `sparepart_satu` varchar(25) NOT NULL,
  `sparepart_dua` varchar(25) NOT NULL,
  `sparepart_tiga` varchar(25) NOT NULL,
  `harga_total` int(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `dataservice`
--

INSERT INTO `dataservice` (`id_service`, `tanggal`, `nama_user`, `nama_pelanggan`, `keluhan`, `jenis_service`, `sparepart_satu`, `sparepart_dua`, `sparepart_tiga`, `harga_total`) VALUES
(2, '2017-12-05', '1', '13', 'anjay', '9', '5', '3', '7', 900000),
(3, '2017-12-05', '1', '13', 'anjay', '9', '5', '3', '7', 900000),
(4, '2017-12-12', 'febykasir', 'Sasuke', 'jk', 'Bongkar Mesin', '', '', '', 10),
(5, '2017-12-20', 'febykasir', 'Sasuke', 'jk', 'Bongkar Mesin', 'Spion', 'Spion', 'Spion', 10),
(6, '2017-12-13', 'febykasir', 'Sasuke', 'kl', 'Bongkar Mesin', 'Spion', 'Spion', 'Spion', 0),
(7, '2017-12-20', 'febykasir', 'Sasuke', 'jk', 'Bongkar Mesin', 'Spion', 'Spion', 'Spion', 0),
(8, '2017-12-20', 'febykasir', 'Sasuke', 'jk', 'Bongkar Mesin', 'Spion', 'Spion', 'Spion', 0),
(9, '2017-12-20', 'febykasir', 'Sasuke', 'gh', 'Bongkar Mesin', 'Spion', 'Spion', 'Spion', 150000),
(10, '2017-12-20', 'febykasir', 'Sasuke', 'jk', 'Bongkar Mesin', 'Ban Racing ukuran cacing', 'Spion', 'Spion', 200000),
(11, '2017-12-20', 'febykasir', 'Sasuke', 'jkj', 'Bongkar Mesin', 'Ban Racing ukuran cacing', 'Velg TDR Racing 140/160', 'Ban Racing ukuran cacing', 500000),
(12, '2017-12-20', 'febykasir', 'Sasuke', 'hj', 'Bongkar Mesin', 'Ban Racing ukuran cacing', 'Velg TDR Racing 140/160', 'Ban Racing ukuran cacing', 550000),
(13, '2017-12-20', 'febykasir', 'Sasuke', 'hj', 'Bongkar Mesin', 'Spion', 'Spion', 'Spion', 216000),
(14, '2017-12-20', 'febykasir', 'Sasuke', '', 'Bongkar Mesin', 'Velg TDR Racing 140/160', 'Sein Megapro Lawas', 'Spion', 777000),
(15, '2017-12-20', 'febykasir', 'Sasuke', 'hj', 'Bongkar Mesin', 'Velg TDR Racing 140/160', 'Sein Megapro Lawas', 'Tromel Trusty Matic', 777000),
(16, '2017-12-20', 'febykasir', 'Sasuke', 'hj', 'Bongkar Mesin', 'Sein Megapro Lawas', 'Sein Megapro Lawas', 'Sein Megapro Lawas', 231000),
(17, '2017-12-20', 'anjaykasir', 'Andika Satria Wibawa', 'ew', 'Bongkar Mesin', 'Lampu Tembak 500watt', 'Lampu Tembak 500watt', 'Lampu Tembak 500watt', 240000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasparepart`
--

CREATE TABLE IF NOT EXISTS `datasparepart` (
`id_sparepart` int(11) NOT NULL,
  `nama_sparepart` varchar(50) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `harga_satuan` int(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `datasparepart`
--

INSERT INTO `datasparepart` (`id_sparepart`, `nama_sparepart`, `stok`, `harga_satuan`) VALUES
(1, 'Spion', '2', 22000),
(3, 'Ban Racing ukuran cacing', '3', 50000),
(5, 'Velg TDR Racing 140/160', '2', 300000),
(6, 'Sein Megapro Lawas', '2', 27000),
(7, 'Tromel Trusty Matic', '2', 350000),
(8, 'Lampu Tembak 500watt', '2', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisservice`
--

CREATE TABLE IF NOT EXISTS `jenisservice` (
`id_jenis` int(10) NOT NULL,
  `jenis_service` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` int(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `jenisservice`
--

INSERT INTO `jenisservice` (`id_jenis`, `jenis_service`, `keterangan`, `harga`) VALUES
(1, 'Bongkar Mesin', 'Bongkar Mesin Total', 150000),
(5, 'Setel Rantai', 'Perbaikan dan pembersihan rantai', 20000),
(9, 'Service Biasa', 'Stel karburator, seker, mesin', 30000),
(17, 'Stel Klep', 'Hanya penyetelan klep saja tidak pembersihan mesin', 12000),
(18, 'Stel Pelek', 'Stel pelek dan pemasangan jari jari atau roji', 20000),
(19, 'Ganti Ban', 'Bongkar pasang ban baru', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(22) NOT NULL,
  `hak_akses` varchar(22) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `hak_akses`, `level`, `password`) VALUES
(1, 'febykasir', 'kasir', 2, 'febykasir'),
(2, 'pemilik', 'pemilik', 1, 'pemilik'),
(3, 'ikakasir', 'kasir', 2, 'ikakasir'),
(5, 'anjaykasir', 'kasir', 2, 'anjaykasir'),
(7, 'jenkasir', 'kasir', 2, 'jenkasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapelanggan`
--
ALTER TABLE `datapelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `dataservice`
--
ALTER TABLE `dataservice`
 ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `datasparepart`
--
ALTER TABLE `datasparepart`
 ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `jenisservice`
--
ALTER TABLE `jenisservice`
 ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapelanggan`
--
ALTER TABLE `datapelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `dataservice`
--
ALTER TABLE `dataservice`
MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `datasparepart`
--
ALTER TABLE `datasparepart`
MODIFY `id_sparepart` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jenisservice`
--
ALTER TABLE `jenisservice`
MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
