-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 02:53 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_armada`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_armada`
--

CREATE TABLE IF NOT EXISTS `tb_armada` (
  `kd_armada` varchar(5) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `tahun` int(4) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_armada`
--

INSERT INTO `tb_armada` (`kd_armada`, `nopol`, `merk`, `warna`, `tahun`, `tgl_beli`, `harga_beli`, `status`, `foto`) VALUES
('AR001', 'K1234SS', 'Hino', 'Hijau', 2016, '2016-04-01', 2000000, 'aktif', 'berangkat uang saku, uang kembali.PNG'),
('AR002', 'K3214KK', 'Marcedes', 'Hitam Silv', 2016, '2016-04-20', 1000000, 'aktif', ''),
('AR003', 'K1234SS', 'Toyota', 'Putih', 2015, '2016-04-07', 2000000, 'aktif', ''),
('AR004', 'K3214K1', 'Marcede1', 'Kunin1', 2011, '2016-01-21', 1000001, 'aktif', ''),
('AR005', 'K3214KK', 'Marcedes', 'Kuning', 2016, '2016-03-29', 2000000, 'aktif', ''),
('AR006', 'K3214KK1', 'Marcedes', 'Kuning', 2016, '2016-03-30', 50000001, 'aktif', ''),
('AR007', 'K1234DD', 'Marcedes', 'Putih', 2016, '2016-04-19', 10000000, 'aktif', ''),
('AR008', 'K1234SS', 'Marcedes', 'Hitam Silv', 2015, '2016-04-12', 1000000, 'aktif', ''),
('AR009', 'K1234SS', 'Hino', '', 0, '0000-00-00', 0, 'aktif', ''),
('AR010', 'K1234SS', '', '', 0, '0000-00-00', 0, 'aktif', ''),
('AR011', 'K1234SS', '', '', 0, '0000-00-00', 0, 'aktif', ''),
('AR012', 'K23s', 's', 's', 0, '2016-05-13', 0, 'aktif', '14.PNG'),
('AR013', 'K23', 's', 's', 0, '2016-05-03', 0, 'aktif', '13.PNG'),
('AR014', 'K1234SS', 'Marcedes', '', 0, '0000-00-00', 0, 'aktif', 'Bus_Hyundai.jpg'),
('AR015', 'K1234SS', 'Hino', '', 0, '0000-00-00', 0, 'aktif', 'Bus_Hyundai.jpg'),
('AR017', 'K1234SS', '', '', 0, '0000-00-00', 0, 'aktif', 'materi-penyuluhan-demam-berdarah-terhadap-virus-demam-berdarah.jpg'),
('AR018', 'K1234SS', 'Hino', '', 0, '0000-00-00', 0, 'aktif', 'pamflet-dbd.jpg'),
('AR019', 'K1234SS', 'Hino', 'Hitam', 2016, '2016-04-05', 5000000, 'aktif', 'kelola crew.PNG'),
('AR020', 's', 's', 's', 0, '2016-03-16', 2000000, 'aktif', '4.PNG'),
('AR021', 'K1234SS', 'Marcedes', 'Hitam Silv', 2015, '2016-04-22', 2000000, 'aktif', '5.PNG'),
('AR022', '2', '2', '2', 2, '2016-02-02', 2, 'aktif', 'lap All.PNG'),
('AR024', 'L 111 K', 'Scania', 'Hijau', 2016, '2016-05-01', 500000000, 'aktif', 'Tampak Depan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_codriver`
--

CREATE TABLE IF NOT EXISTS `tb_codriver` (
  `kd_codriver` varchar(6) NOT NULL,
  `nama_codriver` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_codriver`
--

INSERT INTO `tb_codriver` (`kd_codriver`, `nama_codriver`, `alamat`, `tgl_lahir`, `tgl_masuk`, `no_telepon`) VALUES
('CR001', 'Andi Agus', 'undaan', '2016-04-01', '2016-04-01', '2147483647'),
('DR002', 'a', 'a', '2016-04-06', '2016-04-15', '2'),
('DR003', '2', '2', '2016-04-08', '2016-04-01', '23'),
('DR004', '3', '3', '2016-04-02', '2016-04-02', '3'),
('DR005', '4', '4', '2016-04-02', '2016-04-09', '4'),
('DR006', '6', '6', '2016-04-06', '2016-03-06', '6'),
('DR007', 'Andi1', 'kj1', '2016-04-01', '2016-04-01', '1111111111112');

-- --------------------------------------------------------

--
-- Table structure for table `tb_driver`
--

CREATE TABLE IF NOT EXISTS `tb_driver` (
  `kd_driver` varchar(6) NOT NULL,
  `nama_driver` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_driver`
--

INSERT INTO `tb_driver` (`kd_driver`, `nama_driver`, `alamat`, `tgl_lahir`, `tgl_masuk`, `no_telepon`) VALUES
('DR001', 'Andi', 'undaan', '2016-04-01', '2016-04-01', '2147483647'),
('DR002', 'a', 'a', '2016-04-06', '2016-04-15', '2'),
('DR003', '2', '2', '2016-04-08', '2016-04-01', '23'),
('DR004', '3', '3', '2016-04-02', '2016-04-02', '3'),
('DR005', '4', '4', '2016-04-02', '2016-04-09', '4'),
('DR006', '6', '6', '2016-04-06', '2016-03-06', '6'),
('DR007', 'Andi', 'kj', '2016-04-02', '2016-04-09', '111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gajicodriver`
--

CREATE TABLE IF NOT EXISTS `tb_gajicodriver` (
  `kd_gajiCodriver` int(11) NOT NULL,
  `kd_codriver` varchar(6) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jml_bonus` int(11) NOT NULL,
  `lama_hari` int(11) NOT NULL,
  `gaji_perhari` int(11) NOT NULL,
  `diambil` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gajicodriver`
--

INSERT INTO `tb_gajicodriver` (`kd_gajiCodriver`, `kd_codriver`, `bulan`, `tahun`, `jml_bonus`, `lama_hari`, `gaji_perhari`, `diambil`) VALUES
(1, 'CR001', 5, 2016, 700000, 4, 100000, 'sudah'),
(2, 'DR002', 5, 2016, 0, 1, 100000, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gajidriver`
--

CREATE TABLE IF NOT EXISTS `tb_gajidriver` (
  `kd_gajiDriver` int(11) NOT NULL,
  `kd_driver` varchar(6) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jml_bonus` int(11) NOT NULL,
  `lama_hari` int(11) NOT NULL,
  `gaji_perhari` int(11) NOT NULL,
  `diambil` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gajidriver`
--

INSERT INTO `tb_gajidriver` (`kd_gajiDriver`, `kd_driver`, `bulan`, `tahun`, `jml_bonus`, `lama_hari`, `gaji_perhari`, `diambil`) VALUES
(1, 'DR001', 5, 2016, 300000, 3, 200000, 'sudah'),
(2, 'DR002', 5, 2016, 0, 1, 200000, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuanganumum`
--

CREATE TABLE IF NOT EXISTS `tb_keuanganumum` (
  `kd_keuUmum` varchar(6) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jml_uang` int(11) NOT NULL,
  `jns_keuangan` varchar(12) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keuanganumum`
--

INSERT INTO `tb_keuanganumum` (`kd_keuUmum`, `tgl_masuk`, `jml_uang`, `jns_keuangan`, `keterangan`) VALUES
('DR0001', '2016-05-29', 100000, 'pengeluaran', 'Bayar PAM'),
('DR0002', '2016-05-31', 200000, 'pemasukan', 'Penjualan 4 buah ban 26 / 50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `kd_bayar` int(11) NOT NULL,
  `kd_pesan` varchar(12) NOT NULL,
  `dp` int(11) NOT NULL,
  `lunas` int(11) NOT NULL,
  `tgl_lunas` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kd_bayar`, `kd_pesan`, `dp`, `lunas`, `tgl_lunas`) VALUES
(1, 'TR160503002', 0, 4, '2016-05-19'),
(2, 'TR160503003', 1000000, 0, '0000-00-00'),
(3, 'TR160504001', 0, 2998000, '2016-05-19'),
(4, 'TR160507001', 0, 2998000, '2016-05-19'),
(5, 'TR160507002', 1000000, 0, '2016-05-19'),
(15, 'TR160507003', 0, 2998000, '2016-05-19'),
(16, 'TR160509001', 0, 3000000, '2016-05-19'),
(17, 'TR160511001', 2147483647, 0, '2016-05-12'),
(18, 'TR160511002', 2, 1, '2016-05-12'),
(19, 'TR160511003', 2000, 1000, '2016-05-13'),
(20, 'TR160511004', 0, 2998000, '2016-05-19'),
(21, 'TR160511005', 2000, 2998000, '2016-05-19'),
(22, 'TR160511006', 0, 3000000, '2016-05-19'),
(23, 'TR160521001', 1000000, 3000000, '2016-05-27'),
(24, 'TR160521002', 0, 3000000, '2016-05-21'),
(25, 'TR160526001', 0, 3000000, '2016-05-26'),
(26, 'TR160603001', 1000000, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perjalanan`
--

CREATE TABLE IF NOT EXISTS `tb_perjalanan` (
  `kd_perjalanan` int(11) NOT NULL,
  `kd_pesan` varchar(12) NOT NULL,
  `kd_driver` varchar(6) NOT NULL,
  `kd_codriver` varchar(6) NOT NULL,
  `uang_perjalanan` int(11) NOT NULL,
  `uang_sisaPerjalanan` int(11) NOT NULL,
  `bonus` varchar(6) NOT NULL,
  `ket` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perjalanan`
--

INSERT INTO `tb_perjalanan` (`kd_perjalanan`, `kd_pesan`, `kd_driver`, `kd_codriver`, `uang_perjalanan`, `uang_sisaPerjalanan`, `bonus`, `ket`) VALUES
(4, 'TR160511005', 'DR001', 'CR001', 500000, 0, '', 'berangkat'),
(5, 'TR160511003', 'DR001', 'CR001', 500, 200, '', 'berangkat'),
(7, 'TR160511002', 'DR002', 'DR002', 12, 0, 'bonus', 'berangkat'),
(16, 'TR160521002', 'DR006', 'DR005', 300000, 0, '', 'berangkat'),
(18, 'TR160507003', '', '', 0, 0, '', 'batal'),
(19, 'TR160521001', 'DR007', 'CR001', 300000, 0, 'bonus', 'berangkat'),
(20, 'TR160511006', 'DR001', 'CR001', 300000, 0, 'bonus', 'berangkat'),
(21, 'TR160509001', 'DR001', 'CR001', 300000, 0, '', 'berangkat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE IF NOT EXISTS `tb_pesan` (
  `kd_pesan` varchar(12) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `nama_penyewa` varchar(25) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jam_berangkat` varchar(5) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tempat_jemput` varchar(30) NOT NULL,
  `jml_seat` int(11) NOT NULL,
  `kd_armada` varchar(12) NOT NULL,
  `jns_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`kd_pesan`, `tgl_pesan`, `nama_penyewa`, `no_telepon`, `harga_sewa`, `tgl_berangkat`, `tgl_kembali`, `jam_berangkat`, `tujuan`, `tempat_jemput`, `jml_seat`, `kd_armada`, `jns_bayar`) VALUES
('TR160503002', '0000-00-00', 'd', '3', 4, '2016-05-28', '2016-05-26', '06.00', 'd', 'a', 0, 'AR002', ''),
('TR160503003', '2016-05-03', 'a', '123', 30000002, '2016-05-06', '2016-05-08', '06.00', 'a', 'a', 44, 'AR002', ''),
('TR160504001', '2016-05-04', 'Salimna', '08978684980', 4000000, '2016-05-01', '2016-05-03', '06.00', 'Jakarta', 'Kudus', 48, 'AR015', ''),
('TR160507001', '2016-05-07', 'a', '123', 3000000, '2016-05-05', '2016-05-06', '06.00', 'kudus', 'a', 44, 'AR001', ''),
('TR160507002', '2016-05-07', 'Kamdi', '078', 3000000, '2016-05-07', '2016-05-08', '06.30', 'TEmanggung', 'sd', 44, 'AR001', ''),
('TR160507003', '2016-05-07', 'Sugi', '123', 9, '2016-05-01', '2016-05-02', '06.00', 'Kudus', 'Pati', 44, 'AR008', ''),
('TR160509001', '2016-05-09', 'Sugi', '123', 3000000, '2016-05-06', '2016-05-07', '06.00', 'd', 'a', 44, 'AR001', ''),
('TR160511001', '2016-05-11', 'Aji Sutejo', '085290', 5000000, '2016-05-12', '2016-05-13', '06.00', 'Surabaya', 'alun-alun simpang 7', 48, 'AR024', ''),
('TR160511002', '2016-05-11', 's', '3', 3, '2016-05-12', '2016-05-13', '06.00', 'w', 'w', 44, 'AR002', ''),
('TR160511003', '2016-05-11', 'Anleane', '00', 3000, '2016-05-13', '2016-05-14', '06.00', 'Para', 'Pati', 44, 'AR024', ''),
('TR160511004', '2016-05-11', 'asdas', '123', 3000000, '2016-05-12', '2016-05-13', '06.00', 'asd', 'asd', 44, 'AR007', ''),
('TR160511005', '2016-05-11', 'Sugi', '123', 3000000, '2016-05-19', '2016-05-20', '06.00', 'a', 'Pati', 44, 'AR007', ''),
('TR160511006', '2016-05-11', 'Sugi', '123', 3000000, '2016-05-14', '2016-05-15', '06.00', 'Kudus', 'Pati', 44, 'AR008', ''),
('TR160521001', '2016-05-21', 'Sutiyoso', '08999', 4000000, '2016-05-27', '2016-05-28', '07.00', 'Kudus', 'Semarang', 48, 'AR024', 'DP'),
('TR160521002', '2016-05-21', 'Askan', '00', 3000000, '2016-05-21', '2016-05-22', '06.00', 'KK', 'Pati', 44, 'AR002', 'Lunas'),
('TR160526001', '2016-05-26', 'Sa', '2', 3000000, '2016-05-27', '2016-05-28', '06.00', 'sa', 'Pati', 44, 'AR002', 'Lunas'),
('TR160603001', '2016-06-03', 'Kampas', '23', 3000000, '2016-06-04', '2016-06-05', '06.00', 'Surabaya', 'Terminal Kudus', 44, 'AR003', 'DP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `username`, `password`, `level`) VALUES
(1, 'andi', 'andi', 'pemesanan'),
(2, 'admin', 'admin', 'pemilik'),
(3, 'a', 'a', 'pemesanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_armada`
--
ALTER TABLE `tb_armada`
  ADD PRIMARY KEY (`kd_armada`);

--
-- Indexes for table `tb_codriver`
--
ALTER TABLE `tb_codriver`
  ADD PRIMARY KEY (`kd_codriver`);

--
-- Indexes for table `tb_driver`
--
ALTER TABLE `tb_driver`
  ADD PRIMARY KEY (`kd_driver`);

--
-- Indexes for table `tb_gajicodriver`
--
ALTER TABLE `tb_gajicodriver`
  ADD PRIMARY KEY (`kd_gajiCodriver`);

--
-- Indexes for table `tb_gajidriver`
--
ALTER TABLE `tb_gajidriver`
  ADD PRIMARY KEY (`kd_gajiDriver`);

--
-- Indexes for table `tb_keuanganumum`
--
ALTER TABLE `tb_keuanganumum`
  ADD PRIMARY KEY (`kd_keuUmum`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indexes for table `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  ADD PRIMARY KEY (`kd_perjalanan`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gajicodriver`
--
ALTER TABLE `tb_gajicodriver`
  MODIFY `kd_gajiCodriver` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_gajidriver`
--
ALTER TABLE `tb_gajidriver`
  MODIFY `kd_gajiDriver` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `kd_bayar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  MODIFY `kd_perjalanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
