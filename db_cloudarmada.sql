-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 12:14 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cloudarmada`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_masapakai`
--

CREATE TABLE IF NOT EXISTS `log_masapakai` (
  `kd_pakai` int(11) NOT NULL,
  `kd_pendaftaran` varchar(12) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jml_uang` int(11) NOT NULL,
  `jns_pakai` varchar(2) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `an_rek` varchar(30) NOT NULL,
  `respon` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_masapakai`
--

INSERT INTO `log_masapakai` (`kd_pakai`, `kd_pendaftaran`, `tgl_masuk`, `jml_uang`, `jns_pakai`, `no_rek`, `an_rek`, `respon`) VALUES
(3, 'CA004', '2016-06-14', 300004, '3', '234567', 'Anton', 'aktif'),
(9, 'CA006', '2016-06-16', 200006, '2', '4', '4', 'aktif'),
(10, 'CA001', '2016-06-19', 200001, '2', '234567', 'andi', 'aktif'),
(11, 'CA009', '2016-06-22', 200009, '2', '1234', 'habib', 'aktif'),
(12, 'CA004', '2016-06-29', 200004, '2', '234567', 'a', 'perpanjang'),
(15, 'CA010', '2016-07-08', 200010, '2', '3', 'a', 'aktif'),
(16, 'CA010', '2016-07-08', 200010, '2', '6', '6', 'aktif'),
(19, 'CA001', '2016-07-17', 200001, '2', '1234', 'andi', 'aktif'),
(23, 'CA001', '2016-07-18', 200001, '2', '12', 'a', 'aktif'),
(24, 'CA001', '2016-07-18', 200001, '2', '12', 'a', 'aktif'),
(25, 'CA011', '2016-07-20', 200011, '2', '123', 'baru', 'aktif'),
(26, 'CA012', '2016-07-20', 200012, '2', '12', 'baru2', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tb_pendaftaran` (
  `kd_pendaftaran` varchar(6) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nama_pendaftar` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `no_telepon_perusahaan` varchar(13) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jns_pakai` varchar(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama_db` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`kd_pendaftaran`, `tgl_pendaftaran`, `nama_pendaftar`, `nama_perusahaan`, `alamat_perusahaan`, `no_telepon_perusahaan`, `tgl_mulai`, `tgl_akhir`, `jns_pakai`, `email`, `password`, `nama_db`, `status`) VALUES
('CA001', '2016-06-01', 'Andi Setiawan', 'PO. Maju Terus', 'Tendas Tayu Pati', '010101010', '2020-07-16', '2022-07-16', '2', 'andi@gmail.com', 'andioke', 'db_armada', 'aktif'),
('CA002', '0000-00-00', 'Kolek', 'PO. Kolek', 'Jalanan', '089', '0000-00-00', '0000-00-00', '', 'azka.nb@gmail.com', 'azka', 'armadaCA002', ''),
('CA003', '2016-05-12', 'Hajing', 'PO Hajing', 'Jalan Hajing ', '00', '0000-00-00', '0000-00-00', '', 'hajing@gmail.com', 'hajing', 'armadaCA003', ''),
('CA004', '2016-06-02', 'anton', 'wijaya anton', 'jln kenari 1', '321', '2016-07-13', '2016-07-16', '0', 'anton@wijaya', 'anton', 'armadaCA004', 'aktif'),
('CA005', '2016-06-02', '2', '2', '2', '2', '2016-06-02', '2018-06-02', '2', '2@2', '2', 'armadaCA005', 'aktif'),
('CA006', '2016-06-12', '4', '4', '4', '4', '2016-07-15', '2016-07-17', '0', '4@4', '4', 'db_armadaCA006', 'aktif'),
('CA008', '2016-06-13', '5', '5', '5', '55', '2016-06-13', '2016-06-16', '0', '5@5', '5', 'db_armadaCA008', 'aktif'),
('CA009', '2016-06-22', 'Habib', 'PO. Master Trans Baru', 'Klaten ', '085640003171', '2016-06-22', '2018-06-22', '2', 'jonrinto@gmail.com', 'jonrinto', 'db_armadaCA009', 'aktif'),
('CA010', '2016-07-03', '6', '6', '6', '6', '2016-07-06', '2018-07-06', '2', '6@6', '6', 'db_armadaCA010', 'aktif'),
('CA011', '2016-07-20', 'baru', 'PO Baru', 'Jln Baru', '0', '2016-07-23', '2018-07-23', '2', 'baru@baru.com', 'baru', 'db_armadaCA011', 'aktif'),
('CA012', '2016-07-20', 'baru 2', 'PO baru 2', 'Jln Baru 2', '2', '2016-07-20', '2018-07-20', '2', 'baru2@baru2.com', 'baru2', 'db_armadaCA012', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL,
  `user_admin` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user_admin`, `password`) VALUES
(1, 'admin_cloud', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_masapakai`
--
ALTER TABLE `log_masapakai`
  ADD PRIMARY KEY (`kd_pakai`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`kd_pendaftaran`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_masapakai`
--
ALTER TABLE `log_masapakai`
  MODIFY `kd_pakai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
