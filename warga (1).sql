-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 04:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `theme` varchar(20) NOT NULL DEFAULT 'sb_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `status`, `gambar`, `theme`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', 1, 'default.png', 'sb_admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `id` int(11) NOT NULL,
  `id_kk` int(3) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `status_perkawinan` enum('KAWIN','BELUM KAWIN') NOT NULL,
  `status_hub_keluarga` enum('AYAH','IBU','ANAK') NOT NULL,
  `kewarganegaraan` varchar(200) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `kk_urutan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_keluarga`
--

INSERT INTO `anggota_keluarga` (`id`, `id_kk`, `nama_lengkap`, `nip`, `jenis_kelamin`, `tgl_lahir`, `tempat_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `status_hub_keluarga`, `kewarganegaraan`, `nama_ayah`, `nama_ibu`, `kk_urutan`) VALUES
(1, 9, 'mitha', '12121222122', 'p', '2019-05-30', 'jakarta', 'islam', 'sd', 'pelajar', '', '', 'wna', 'ahmad', 'ria', 0),
(2, 8, 'ayu', '1313313131', 'p', '2019-05-01', 'jakarta', 'islam', 'sd', 'pelajar', '', '', 'wna', 'hasan', 'putri', 0),
(3, 7, 'bayu', '14555', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 1),
(4, 7, 'neneng', '5', 'p', '2010-05-12', 'jawa', 'islam', 'sd', 'ibu rumah tangga', '', '', 'wna', 'diko', 'ika', 2),
(5, 7, 'dita', '145454545', 'p', '2019-05-21', 'jakarta', 'islam', 'sd', 'pelajar', '', '', 'wna', 'dede', 'neneng', 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_bulanan`
--

CREATE TABLE `detail_bulanan` (
  `id_detail` int(3) NOT NULL,
  `id_bulan` int(3) NOT NULL,
  `jenis_keuangan` varchar(50) NOT NULL,
  `detail_keuangan` varchar(100) NOT NULL,
  `nominal_keuangan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_bulanan`
--

INSERT INTO `detail_bulanan` (`id_detail`, `id_bulan`, `jenis_keuangan`, `detail_keuangan`, `nominal_keuangan`, `keterangan`) VALUES
(1, 2, 'Uang Kebersihan', 'Membersihkan Selokan', '40000000', '<p>\r\n	Seluruh Wilayah RT 01</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategori`
--

CREATE TABLE `detail_kategori` (
  `id_detail` int(5) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kategori`
--

INSERT INTO `detail_kategori` (`id_detail`, `id_kategori`, `gambar`) VALUES
(1, 2, '268a7-proses-pengumuman.jpg'),
(2, 2, '62f6b-input-username.jpg'),
(3, 1, 'efef4-sistem-yang-diusulkan.jpg'),
(4, 1, '6f611-data-keluarga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(3) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `kepala_keluarga` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_kk`, `no_kk`, `kepala_keluarga`, `alamat`, `rt_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(7, '3114648243216', 'DEDE SUNANDAR', '<p>\r\n	Jln. Kemuning 1 no.24&nbsp;</p>\r\n', '001/002', '16454', 'Pulogadung', 'Pulogadung', 'Jakarta Timur', 'DKI JAKARTA'),
(8, '164231549112', 'MOCH HASAN', '<p>\r\n	Jln. Kemuning 1 no.38A Pulo Gadung, Jakarta Timur</p>\r\n', '001/002', '16454', 'Pulogadung', 'Pulogadung', 'Jakarta timur', 'DKI Jakarta'),
(9, '13465795312513', 'Achmad', '<p>\r\n	Jln. Kemuning 1 No.44,Pulogadung,Jakarta timur</p>\r\n', '001/002', '16454', 'Pulogadung', 'Pulogadung', 'Jakarta timur', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `tanggal_galeri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori`, `kategori`, `tanggal_galeri`) VALUES
(1, 'Peringatan Kemerdekaan RI 2018', '2018-08-24'),
(2, 'Kerja Bakti', '2019-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_posting` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `no_surat`, `tgl_posting`, `isi`) VALUES
(1, 'kerja bakti', 'xii/001/007', '2019-07-08', '<p>\r\n	kerja bakti dilapangan<span style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">Pengumuman hasil Penerimaan Peserta Didik Baru (PPDB) tingkat SMA/SMK di Provinsi Banten ditunda dari jadwal seharusnya yaitu pada Sabtu (29/6/2019). Gubernur Banten Wahidin Halim mengatakan, penundaan dilakukan lantaran adanya perubahan Permendikbud No 15 tahun 2018 menjadi Permendikbud Nomor 20 tahun 2019 dimana kuota untuk jalur prestasi naik dari 5 persen menjadi 15 persen.&nbsp; &quot;Kan di Permendikbud ada peraturan bilang bahwa kuota&nbsp; 5 persen jadi 15 persen, akhirnya kan ada pendaftar yang tadinya ditolak jadi diterima,&quot; kata Wahidin kepada wartawan di Kantor Gubernur Banten, Senin (1/7/2019). Baca juga: Pengumuman PPDB SMA/SMK Banten Ditunda karena Belum Dilaporkan ke Gubernur Wahidin mengatakan, dia sempat meminta pengumuman dilakukan tepat waktu agar tidak menimbulkan persepsi negatif dari masyarakat. Namun ternyata, implementasi penambahan kuota tersebut tidak bisa selesai satu hari hingga menyebabkan pengunduran pengumuman.</span></p>\r\n<p>\r\n	<br style="box-sizing: border-box; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;" />\r\n	<span style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">Artikel ini telah tayang di&nbsp;</span><a href="http://kompas.com/" style="box-sizing: border-box; vertical-align: top; outline: 0px; -webkit-transition: all 0.2s ease; transition: all 0.2s ease; text-decoration: none; font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">Kompas.com</a><span style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">&nbsp;dengan judul &quot;Ini Alasan Sebenarnya Pengumuman Hasil PPDB SMA dan SMK Banten Ditunda&quot;,&nbsp;</span><a href="https://regional.kompas.com/read/2019/07/01/09224451/ini-alasan-sebenarnya-pengumuman-hasil-ppdb-sma-dan-smk-banten-ditunda" style="box-sizing: border-box; vertical-align: top; outline: 0px; -webkit-transition: all 0.2s ease; transition: all 0.2s ease; text-decoration: none; font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">https://regional.kompas.com/read/2019/07/01/09224451/ini-alasan-sebenarnya-pengumuman-hasil-ppdb-sma-dan-smk-banten-ditunda</a><span style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">.&nbsp;</span><br style="box-sizing: border-box; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;" />\r\n	<span style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">Penulis : Kontributor Banten, Acep Nazmudin</span><br style="box-sizing: border-box; color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;" />\r\n	<span style="color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px; line-height: 18px;">Editor : David Oliver Purba</span></p>\r\n'),
(2, 'imunisasi', 'xii/003/004', '2019-07-17', '<p>\r\n	imunisasi di rumah bidan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tjm_menu`
--

CREATE TABLE `tjm_menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT '1',
  `nama_menu` varchar(50) NOT NULL,
  `url_menu` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tjm_menu`
--

INSERT INTO `tjm_menu` (`id`, `parent_menu`, `nama_menu`, `url_menu`, `icon`, `urutan`, `status`, `type`) VALUES
(1, 1, 'root', '/', '', 0, 0, 'Admin'),
(2, 1, 'dashboard', 'admin/dashboard', 'fa fa-fw fa-dashboard', 1, 1, 'Admin'),
(3, 1, 'User Admin', 'admin/useradmin', 'fa fa-users', 99, 0, 'Admin'),
(4, 1, 'Menu', 'admin/menu', 'fa fa-gear', 100, 1, 'Admin'),
(25, 1, 'Master', 'admin/master', 'fa fa-ticket', 2, 0, 'Admin'),
(30, 1, 'DATA KK', 'admin/data_kk', 'glyphicon glyphicon-list-alt', 2, 1, 'Admin'),
(31, 1, 'DATA WARGA', 'admin/data_warga', 'glyphicon glyphicon-grain', 3, 1, 'Admin'),
(32, 1, 'DETAIL KEUANGAN', 'admin/detail_keuangan', 'glyphicon glyphicon-usd', 4, 1, 'Admin'),
(33, 1, 'UANG BULANAN', 'admin/uang_bulanan', 'glyphicon glyphicon-usd', 5, 1, 'Admin'),
(34, 1, 'Pengumuman', 'admin/pengumuman', 'glyphicon glyphicon-list-alt', 6, 1, 'Admin'),
(35, 1, 'Galeri', 'admin/galeri', 'glyphicon glyphicon-picture', 7, 1, 'Admin'),
(36, 1, 'KATEGORI GALERI', 'admin/kategori_galeri', 'glyphicon glyphicon-th-large', 8, 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `uang_bulanan`
--

CREATE TABLE `uang_bulanan` (
  `id_bulan` int(3) NOT NULL,
  `nama_bulan` varchar(25) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uang_bulanan`
--

INSERT INTO `uang_bulanan` (`id_bulan`, `nama_bulan`, `tahun`) VALUES
(1, 'januari', '2019'),
(2, 'februari', '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_bulanan`
--
ALTER TABLE `detail_bulanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uang_bulanan`
--
ALTER TABLE `uang_bulanan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detail_bulanan`
--
ALTER TABLE `detail_bulanan`
  MODIFY `id_detail` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_kategori`
--
ALTER TABLE `detail_kategori`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `uang_bulanan`
--
ALTER TABLE `uang_bulanan`
  MODIFY `id_bulan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
