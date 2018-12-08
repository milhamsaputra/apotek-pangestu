-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 08:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pangestu`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_obat`
--
CREATE TABLE IF NOT EXISTS `qw_obat` (
`kode_obat` int(5)
,`nama_produk` varchar(50)
,`indikasi` varchar(500)
,`id_dosis` int(2)
,`id_kategori` int(2)
,`id_satuan` int(2)
,`jumlah_stok` int(5)
,`harga` int(7)
,`kadaluarsa` date
,`photo_url` varchar(150)
,`id_supplier` int(3)
,`nama_kategori` varchar(25)
,`nama_satuan` varchar(20)
,`dosis` varchar(30)
,`nama_supplier` varchar(30)
,`sisa_kadaluarsa` int(7)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qw_penukaran_stok`
--
CREATE TABLE IF NOT EXISTS `qw_penukaran_stok` (
`id_penukaran` int(7)
,`kode_obat` varchar(5)
,`stok_awal` int(5)
,`stok_baru` int(5)
,`kadaluarsa_awal` date
,`kadaluarsa_baru` date
,`id_supplier` varchar(3)
,`tanggal` date
,`nama_produk` varchar(50)
,`nama_supplier` varchar(30)
);
-- --------------------------------------------------------

--
-- Table structure for table `tb_cart_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_cart_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `kode_obat` int(7) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah_produk` int(5) NOT NULL,
  `harga_produk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cart_transaksi`
--

INSERT INTO `tb_cart_transaksi` (`id_transaksi`, `kode_obat`, `nama_produk`, `jumlah_produk`, `harga_produk`) VALUES
(515101807, 6, 'Paracetamol syr 125mg/5ml', 8, 5000),
(515102525, 7, 'Vitamin B Complex', 9, 4000),
(515102525, 6, 'Paracetamol syr 125mg/5ml', 3, 5000),
(515102726, 5, 'Oralit', 292, 2000),
(515140917, 6, 'Paracetamol syr 125mg/5ml', 9, 5000),
(515141029, 8, 'Antalgin tab 500mg', 12, 4300),
(515163601, 6, 'Paracetamol syr 125mg/5ml', 3, 5000),
(518082854, 13, 'Vitamin B12 tab', 4, 50),
(518082854, 0, 'Vitamin B Complex', 4, 4000);

--
-- Triggers `tb_cart_transaksi`
--
DROP TRIGGER IF EXISTS `pengurang_stok`;
DELIMITER //
CREATE TRIGGER `pengurang_stok` AFTER INSERT ON `tb_cart_transaksi`
 FOR EACH ROW BEGIN
UPDATE tb_obat SET jumlah_stok = jumlah_stok - NEW.jumlah_produk
WHERE kode_obat = NEW.kode_obat;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosis`
--

CREATE TABLE IF NOT EXISTS `tb_dosis` (
  `id_dosis` int(2) NOT NULL AUTO_INCREMENT,
  `dosis` varchar(30) NOT NULL,
  PRIMARY KEY (`id_dosis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_dosis`
--

INSERT INTO `tb_dosis` (`id_dosis`, `dosis`) VALUES
(0, '-'),
(1, 'Dewasa'),
(2, 'Anak - anak'),
(3, 'Semua Umur'),
(4, 'Balita');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_obat`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_obat` (
  `id_kategori` int(2) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(25) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_kategori_obat`
--

INSERT INTO `tb_kategori_obat` (`id_kategori`, `nama_kategori`) VALUES
(0, '-'),
(3, 'Generik'),
(5, 'Non Generik'),
(6, 'Jamkesda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE IF NOT EXISTS `tb_obat` (
  `kode_obat` int(5) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `indikasi` varchar(500) NOT NULL,
  `id_dosis` int(2) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `id_satuan` int(2) NOT NULL,
  `jumlah_stok` int(5) NOT NULL,
  `harga` int(7) NOT NULL,
  `kadaluarsa` date NOT NULL,
  `photo_url` varchar(150) NOT NULL,
  `id_supplier` int(3) NOT NULL,
  PRIMARY KEY (`kode_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kode_obat`, `nama_produk`, `indikasi`, `id_dosis`, `id_kategori`, `id_satuan`, `jumlah_stok`, `harga`, `kadaluarsa`, `photo_url`, `id_supplier`) VALUES
(4, 'Woods', 'Untuk Sakit Tenggorokan', 2, 6, 4, 0, 3000, '2015-04-28', 'Hydrangeas.jpg', 7),
(5, 'Oralit', '--', 1, 3, 5, 8, 2000, '2015-06-26', 'default.jpg', 6),
(6, 'Paracetamol syr 125mg/5ml', 'Untuk Demam', 2, 3, 6, 365, 5000, '2015-06-28', 'Jellyfish.jpg', 9),
(7, 'Vitamin B Complex', 'Antibody', 2, 3, 5, 475, 4000, '2015-05-31', 'Tulips.jpg', 7),
(8, 'Antalgin tab 500mg', '--', 0, 3, 6, 365, 4300, '2015-05-23', 'default.jpg', 9),
(9, 'Glukosa 40% E Kat', '--', 0, 3, 6, 480, 3300, '2015-05-15', 'Desert.jpg', 3),
(10, ' 	Kalium Diclofenac tab 50mg E Kat', '--', 0, 3, 5, 290, 425, '2015-05-31', 'default.jpg', 7),
(11, 'Magnesium Sulfat inj 40%', '--', 0, 3, 0, 788, 2700, '2015-05-16', 'default.jpg', 9),
(12, 'NaCl 0,9% Infus', '--', 0, 3, 13, 789, 5000, '2015-05-16', 'vector_tree.png', 8),
(13, 'Vitamin B12 tab', '--', 0, 3, 5, 11996, 50, '2015-05-24', 'Penguins.jpg', 7),
(14, 'OBH Syrup ', 'Batuk', 1, 5, 6, 320, 2500, '2015-05-24', 'ssss.jpg', 7),
(15, 'Betadine', 'mengatasi Luka', 3, 5, 6, 540, 5300, '2015-05-17', 'default.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE IF NOT EXISTS `tb_pesan` (
  `id_pesan` int(7) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `email`, `pesan`, `tanggal`, `waktu`, `pengirim`) VALUES
(1, 'Nurul Ramdan', 'ramdannurul77@gmail.com', 'Tes Pesan Pertama', '2015-04-30', '11:57:52', 'Pengunjung'),
(2, 'John Titor', 'johntitor8989@glurb.com', 'I Found You', '2015-04-30', '12:35:23', 'Pengunjung'),
(3, 'Amane Furusawa ', 'furusawamane8732@gmail.com', 'Nice,', '2015-05-01', '07:38:22', 'Pengunjung'),
(5, 'Omedeto Omedeto', 'Omedeto', 'Omedeto', '2015-05-01', '08:38:22', 'Pengunjung'),
(7, 'Admin', 'Admin', 'Stok Obat Parasetamol habis', '2015-05-01', '09:38:22', 'User'),
(8, 'Gudang', 'Gudang', '250 Stok Woods sudah di Masukan..', '2015-05-01', '10:38:22', 'User'),
(9, 'Gudang', 'Gudang', 'Supplier baru ditambahkan..', '2015-05-01', '11:38:22', 'User'),
(10, 'Gudang', 'Gudang', 'Transaksi Lancar..', '2015-05-01', '12:38:22', 'User'),
(11, 'Owner', 'Pemilik', 'Selamat Datang!', '2015-05-01', '17:35:38', 'User'),
(12, 'Owner', 'Ramdan', 'Good Job...', '2015-05-01', '17:40:22', 'User'),
(13, 'Owner', 'Pemilik', 'Tes Lagi..', '2015-05-01', '17:43:52', 'User'),
(14, 'Gudang', 'Gudang', 'hari ini beres >>\r\n-filter switch login\r\n-edit user pemilik\r\n', '2015-05-01', '22:00:49', 'User'),
(15, 'Ramdan Nurul', 'ramdannurul77@gmail.com', 'Arigatou Gozaimashh.. ', '2015-05-01', '22:01:31', 'Pengunjung'),
(16, 'Admin', 'Admin', 'saat ini beres >> ubah password..', '2015-05-02', '13:46:31', 'User'),
(17, 'Takanashi  Hide', 'hide.hide99@gmail.com', 'edit username berhasil..', '2015-05-02', '14:43:23', 'Pengunjung'),
(21, 'Owner', 'Gudang', 'transaksi penjualan dan change picture produk selesai..', '2015-05-13', '12:49:51', 'User'),
(22, 'Syukron Muttaqin', 'syukronmpc99@gmail.com', 'sangat menginspirasi..', '2015-05-13', '12:54:16', 'Pengunjung'),
(23, 'Wahyu Sahaja', 'wahyu2929@gmail.com', 'Keep Spirit..', '2015-05-13', '12:56:25', 'Pengunjung'),
(24, 'Asep Syahrul', 'asep.syahrul98@gmail.com', 'Bagus..', '2015-05-13', '12:57:16', 'Pengunjung'),
(25, 'Harada Kozuki', 'Hako7792@yahoo.com', 'I''ts very nice..', '2015-05-13', '12:58:48', 'Pengunjung'),
(26, 'Tokiyoshi Kyousuke', 'Toki.Kyou.88@gmail.com', 'amazing..', '2015-05-13', '13:00:21', 'Pengunjung'),
(27, 'Admin', 'Admin', 'sjs', '2015-05-13', '17:44:41', 'User'),
(28, 'Admin', 'prabuadam57@gmail.com', 'master', '2015-05-13', '17:49:01', 'User'),
(29, 'Rifqi  Irianto', 'irianto8989@gmail.com', 'tes,,', '2015-05-13', '17:50:02', 'Pengunjung'),
(30, 'Admin', 'Admin', 'sekarang, tahap pengerjaan Pagination..', '2015-05-14', '05:54:17', 'User'),
(31, 'Kasir', 'Kasir', 'Faktur Penjualan dan Akses Kasir selesai dibuat..', '2015-05-14', '14:54:00', 'User'),
(32, 'Gudang', 'Gudang', 'Keren COY\r\n', '2015-05-15', '14:43:21', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan_obat`
--

CREATE TABLE IF NOT EXISTS `tb_satuan_obat` (
  `id_satuan` int(2) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tb_satuan_obat`
--

INSERT INTO `tb_satuan_obat` (`id_satuan`, `nama_satuan`) VALUES
(0, '-'),
(2, 'Pcs'),
(3, 'Lusin'),
(4, 'Sachet'),
(5, 'Tablet'),
(6, 'Botol'),
(7, 'Vial'),
(8, 'Ampul'),
(9, 'Tube'),
(10, 'Suppositoria'),
(11, 'Btl/150'),
(12, 'Kapsul'),
(13, 'Kolf'),
(15, 'Zack'),
(16, 'Soft Bag'),
(17, 'Rectal'),
(18, 'Box/10'),
(19, 'mililiter'),
(20, 'Flexpen'),
(21, 'Btl/100'),
(22, 'Kilogram'),
(23, 'Box/5'),
(24, 'Roll'),
(25, 'Box/36'),
(26, 'Box/24'),
(27, 'Box/12'),
(28, 'Box'),
(29, 'Pasang'),
(30, 'Box/100'),
(31, 'Lusin'),
(32, 'Mini Dose'),
(33, 'Eye drop'),
(34, 'Tabung'),
(35, 'Fls'),
(36, 'Buah'),
(37, 'KIt'),
(38, 'Jerigen/20L'),
(39, 'Set'),
(40, 'Box/25'),
(41, 'Box/10L'),
(42, 'Pack/1000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `id_supplier` int(3) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(150) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat`, `telepon`) VALUES
(1, 'PT Kimia Farma', 'Jl.Raya tajur no.2', '0251-85858289'),
(3, 'PT Global Farma', 'Jl. Patimura no.11', '085811984912'),
(4, 'PT JPM', 'Jl.Raya Tajur no.89 Ciawi Bogor', '0251-89288122'),
(6, 'PT ACM Farmasi', 'Jl.bung hatta no.7 jakarta timur', '0852-178721847'),
(7, 'PT Farmasi Bersama', 'Jl. Puncak no.21 Bogor Selatan', '0251-38383853'),
(8, 'PT Mirah Jaya', 'Jl.raya Puncak Ciawi', '0251-9821984378'),
(9, 'PT. Sehat Raga sejahtera', 'Jl. Ancol no.3 jakarta Selatan', '0251-721831222');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_jual`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi_jual` (
  `id_transaksi` varchar(10) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `total_harga` int(9) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi_jual`
--

INSERT INTO `tb_transaksi_jual` (`id_transaksi`, `nama_pembeli`, `kontak`, `total_harga`, `tanggal`, `jam`) VALUES
('0515101807', 'Bpk. Purnomo', '086627817271', 40000, '2015-05-15', '10:18:24'),
('0515102525', 'Ramdan Nurul', 'ramdannurul77@gmail.', 51000, '2015-05-15', '10:26:03'),
('0515102726', 'Umar', 'umar.sahab82@gmail.c', 584000, '2015-05-15', '10:28:27'),
('0515140917', 'Raka Priyo', '085198239823', 45000, '2015-05-15', '14:10:10'),
('0515141029', 'Lina', '085638438934', 51600, '2015-05-15', '14:11:10'),
('0515163601', 'ilham', '0856123909', 15000, '2015-05-15', '16:38:29'),
('0518082854', 'M. Ilham S.', '085638893241', 16200, '2015-05-18', '08:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tukar_stok`
--

CREATE TABLE IF NOT EXISTS `tb_tukar_stok` (
  `id_penukaran` int(7) NOT NULL AUTO_INCREMENT,
  `kode_obat` varchar(5) NOT NULL,
  `stok_awal` int(5) NOT NULL,
  `stok_baru` int(5) NOT NULL,
  `kadaluarsa_awal` date NOT NULL,
  `kadaluarsa_baru` date NOT NULL,
  `id_supplier` varchar(3) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_penukaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_tukar_stok`
--

INSERT INTO `tb_tukar_stok` (`id_penukaran`, `kode_obat`, `stok_awal`, `stok_baru`, `kadaluarsa_awal`, `kadaluarsa_baru`, `id_supplier`, `tanggal`) VALUES
(2, '5', 430, 300, '2015-05-30', '2015-06-26', '6', '2015-05-14'),
(3, '6', 300, 380, '2015-05-31', '2015-06-28', '9', '2015-05-14'),
(4, '7', 1, 475, '2015-05-22', '2015-05-31', '7', '2015-05-15'),
(5, '8', 288, 365, '2015-05-31', '2015-05-23', '9', '2015-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `akses`, `status`) VALUES
(1, 'Admin', 'Admin', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4', 'Admin', 'Aktif'),
(2, 'Ryan Prawiro', 'gudang', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Gudang', 'Aktif'),
(4, 'Nurul Ramdan', 'Ramdan', '6dd7d73d22c5c947be3da14b0b412bda0b500300', 'Admin', 'Aktif'),
(6, 'Ramdan Nurul', 'pemilik', '1f86485ac9c8b00fb355bd1eb1c86d937f6d457c', 'Pemilik', 'Aktif'),
(7, 'kasir', 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 'Kasir', 'Aktif'),
(8, 'Nobuharu Arakida', 'Arakida', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Admin', 'Aktif'),
(9, 'Karlina Putri', 'Karlina', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Kasir', 'Aktif');

-- --------------------------------------------------------

--
-- Structure for view `qw_obat`
--
DROP TABLE IF EXISTS `qw_obat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_obat` AS select `tb_obat`.`kode_obat` AS `kode_obat`,`tb_obat`.`nama_produk` AS `nama_produk`,`tb_obat`.`indikasi` AS `indikasi`,`tb_obat`.`id_dosis` AS `id_dosis`,`tb_obat`.`id_kategori` AS `id_kategori`,`tb_obat`.`id_satuan` AS `id_satuan`,`tb_obat`.`jumlah_stok` AS `jumlah_stok`,`tb_obat`.`harga` AS `harga`,`tb_obat`.`kadaluarsa` AS `kadaluarsa`,`tb_obat`.`photo_url` AS `photo_url`,`tb_obat`.`id_supplier` AS `id_supplier`,`tb_kategori_obat`.`nama_kategori` AS `nama_kategori`,`tb_satuan_obat`.`nama_satuan` AS `nama_satuan`,`tb_dosis`.`dosis` AS `dosis`,`tb_supplier`.`nama_supplier` AS `nama_supplier`,(to_days(`tb_obat`.`kadaluarsa`) - to_days(curdate())) AS `sisa_kadaluarsa` from ((((`tb_obat` join `tb_kategori_obat` on((`tb_kategori_obat`.`id_kategori` = `tb_obat`.`id_kategori`))) join `tb_satuan_obat` on((`tb_satuan_obat`.`id_satuan` = `tb_obat`.`id_satuan`))) join `tb_dosis` on((`tb_dosis`.`id_dosis` = `tb_obat`.`id_dosis`))) join `tb_supplier` on((`tb_supplier`.`id_supplier` = `tb_obat`.`id_supplier`)));

-- --------------------------------------------------------

--
-- Structure for view `qw_penukaran_stok`
--
DROP TABLE IF EXISTS `qw_penukaran_stok`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qw_penukaran_stok` AS select `tb_tukar_stok`.`id_penukaran` AS `id_penukaran`,`tb_tukar_stok`.`kode_obat` AS `kode_obat`,`tb_tukar_stok`.`stok_awal` AS `stok_awal`,`tb_tukar_stok`.`stok_baru` AS `stok_baru`,`tb_tukar_stok`.`kadaluarsa_awal` AS `kadaluarsa_awal`,`tb_tukar_stok`.`kadaluarsa_baru` AS `kadaluarsa_baru`,`tb_tukar_stok`.`id_supplier` AS `id_supplier`,`tb_tukar_stok`.`tanggal` AS `tanggal`,`tb_obat`.`nama_produk` AS `nama_produk`,`tb_supplier`.`nama_supplier` AS `nama_supplier` from ((`tb_tukar_stok` join `tb_obat` on((`tb_obat`.`kode_obat` = `tb_tukar_stok`.`kode_obat`))) join `tb_supplier` on((`tb_supplier`.`id_supplier` = `tb_tukar_stok`.`id_supplier`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
