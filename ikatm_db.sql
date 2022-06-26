-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 05:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikatm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_lengkap` varchar(80) NOT NULL,
  `sts_data` int(11) NOT NULL,
  `user_input` varchar(60) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_group_menu`
--

CREATE TABLE `t_group_menu` (
  `id_group_menu` int(11) NOT NULL,
  `group_menu` varchar(50) NOT NULL,
  `nama_group_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_group_menu`
--

INSERT INTO `t_group_menu` (`id_group_menu`, `group_menu`, `nama_group_menu`) VALUES
(1, 'srt', 'SURAT'),
(2, 'peg', 'KEPEGAWAIAN'),
(3, 'kin', 'KINERJA'),
(4, 'keu', 'KEUANGAN'),
(5, 'usr', 'USER'),
(6, 'skp', 'SKP'),
(7, 'brg', 'BARANG'),
(8, 'was', 'PENGAWASAN'),
(9, 'dtn', 'DATA DAN INFORMASI');

-- --------------------------------------------------------

--
-- Table structure for table `t_kode_program`
--

CREATE TABLE `t_kode_program` (
  `id_kode_program` int(11) NOT NULL,
  `group_menu` varchar(50) NOT NULL,
  `kode_program` varchar(50) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kode_program`
--

INSERT INTO `t_kode_program` (`id_kode_program`, `group_menu`, `kode_program`, `nama_program`) VALUES
(65, 'peg', 'page/absensi', 'Absensi'),
(66, 'peg', 'page/tabel_finger_print', 'Import Finger Print'),
(67, 'peg', 'page/tabel_finger_print_personal', 'Finger Print Personal'),
(68, 'peg', 'page/chart_absensi', 'Chart Absensi'),
(69, 'peg', 'page/tabel_pegawai', 'Input Pegawai'),
(70, 'peg', 'page/tabel_pegawai_personal', 'Data Pegawai Personal'),
(71, 'peg', 'page/laporan_duk', 'Laporan DUK'),
(72, 'peg', 'page/tabel_pekerjaan', 'Riwayat Pekerjaan'),
(73, 'peg', 'page/tabel_pendidikan', 'Riwayat Pendidikan'),
(74, 'peg', 'page/tabel_pelatihan', 'Riwayat Pelatihan'),
(75, 'peg', 'page/tabel_keluarga', 'Data Keluarga'),
(76, 'peg', 'page/data_review_pegawai', 'Data Review Pegawai'),
(77, 'keu', 'page/tabel_perjadin', 'Realisasi Perjadin'),
(78, 'keu', 'page/laporan_perjadin', 'Lap. Perjadin'),
(79, 'kin', 'page/tabel_lkh_personal', 'Input LKH'),
(80, 'kin', 'page/tabel_lkh_diterima', 'LKH Diterima'),
(81, 'kin', 'page/tabel_lkh', 'LKH Belum Diperiksa'),
(82, 'kin', 'page/tabel_lkh_ditolak', 'LKH Ditolak'),
(83, 'kin', 'page/tabel_lkh_kirim', 'LKH Kirim'),
(84, 'kin', 'page/tabel_rekap_lkh_personal', 'Rekap LKH'),
(85, 'kin', 'page/tabel_rekap_lkh_all', 'Rekap LKH (ALL)'),
(86, 'kin', 'page/laporan_rekap_lkh', 'Laporan Rekap LKH'),
(87, 'kin', 'page/laporan_detail_lkh_personal', 'Laporan Detail LKH'),
(88, 'kin', 'page/laporan_lkh_provinsi', 'Laporan LKH Provinsi'),
(89, 'usr', 'page/tabel_user', 'Tabel User'),
(90, 'usr', 'page/ganti_password', 'Ganti Password'),
(91, 'usr', 'login/logout', 'Sign Out'),
(92, 'usr', 'page/tabel_program', 'Program'),
(93, 'usr', 'page/pejabat', 'Pejabat'),
(94, 'skp', 'page/tabel_skp_personal', 'Input SKP'),
(95, 'srt', 'page/tabel_surat', 'Input Surat Masuk'),
(96, 'srt', 'page/tabel_surat_keluar', 'Input Surat Keluar'),
(97, 'srt', 'page/tabel_surat_selesai', 'Disposisi Surat Selesai'),
(98, 'srt', 'page/tabel_tracking_surat', 'Tracking Disposisi Surat'),
(99, 'srt', 'page/tabel_flag_surat', 'Flag Aktivitas Surat'),
(100, 'brg', 'page/tabel_barang', 'Tabel Barang'),
(101, 'brg', 'page/transaksi_barang', 'Transaksi barang'),
(102, 'brg', 'page/generate_laporan_barang', 'Generate Laporan Barang'),
(103, 'brg', 'page/laporan_rekap_barang', 'Laporan Rekap Barang'),
(104, 'brg', 'page/laporan_transaksi_barang', 'Laporan Transaksi Barang'),
(105, 'brg', 'page/pembatalan_transaksi_masuk', 'Pembatalan Transaksi Masuk'),
(106, 'brg', 'page/pembatalan_transaksi_keluar', 'Pembatalan Transaksi Keluar'),
(107, 'was', 'page/tabel_form_a_lhp', 'Form A LHP'),
(109, 'srt', 'page/tabel_st', 'Tabel ST'),
(110, 'srt', 'page/dasar_st', 'Dasar ST'),
(111, 'srt', 'page/tabel_st_selesai', 'Data ST Selesai'),
(112, 'skp', 'page/cetak_form_skp', 'Cetak Form SKP'),
(113, 'skp', 'page/tabel_realisasi_skp', 'Data Realisasi SKP'),
(114, 'skp', 'page/cetak_nilai_skp', 'Cetak Nilai SKP'),
(115, 'srt', 'page/laporan_st', 'Laporan ST'),
(116, 'dtn', 'page/tabel_datin', 'Tabel Datin');

-- --------------------------------------------------------

--
-- Table structure for table `t_program`
--

CREATE TABLE `t_program` (
  `id_program` int(11) NOT NULL,
  `user_program` varchar(80) NOT NULL,
  `group_program` varchar(20) NOT NULL,
  `kode_program` varchar(200) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_program`
--

INSERT INTO `t_program` (`id_program`, `user_program`, `group_program`, `kode_program`, `nama_program`) VALUES
(7, 'admin', 'peg', 'page/tabel_anggota', '\" ?> Tabel Anggota </a>'),
(12, 'admin', 'usr', 'page/tabel_user', '\" ?> Tabel User </a>'),
(13, 'admin', 'usr', 'page/ganti_password', '\" ?> Ganti Password </a>'),
(14, 'admin', 'usr', 'page/tabel_program', '\" ?> Program </a>'),
(15, 'admin', 'srt', 'page/tabel_rapat', '\" ?> Tabel Rapat </a>'),
(26, 'admin', 'usr', 'login/logout', '\" ?> Sign Out </a>');

-- --------------------------------------------------------

--
-- Table structure for table `t_rapat`
--

CREATE TABLE `t_rapat` (
  `id_rapat` int(11) NOT NULL,
  `kode_rand` int(11) DEFAULT NULL,
  `tgl_rapat` date NOT NULL,
  `judul_rapat` text NOT NULL,
  `id_pegawai` int(80) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `user_input` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(80) NOT NULL,
  `tgl_create` date NOT NULL,
  `user_create` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `sts_login` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `posisi` int(5) NOT NULL,
  `aksi_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `nama_lengkap`, `tgl_create`, `user_create`, `status`, `sts_login`, `role`, `posisi`, `aksi_pegawai`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '2018-11-10', 'admin', 1, 1, 'admin', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `t_group_menu`
--
ALTER TABLE `t_group_menu`
  ADD PRIMARY KEY (`id_group_menu`);

--
-- Indexes for table `t_kode_program`
--
ALTER TABLE `t_kode_program`
  ADD PRIMARY KEY (`id_kode_program`);

--
-- Indexes for table `t_program`
--
ALTER TABLE `t_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `t_rapat`
--
ALTER TABLE `t_rapat`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `t_rapat`
--
ALTER TABLE `t_rapat`
  MODIFY `id_rapat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
