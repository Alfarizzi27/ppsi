-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik_royyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` char(3) NOT NULL,
  `id_pengadaan` char(3) NOT NULL,
  `id_produksi` char(3) NOT NULL,
  `id_lp_gudang` char(3) NOT NULL,
  `nama_bahan_baku` varchar(100) NOT NULL,
  `stock_bahan_baku` int(11) NOT NULL,
  `harga_bahan_baku` int(11) NOT NULL,
  `Deskripsi_bahan_baku` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` char(3) NOT NULL,
  `laba` int(11) NOT NULL,
  `periode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_gudang`
--

CREATE TABLE `laporan_gudang` (
  `id_lp_gudang` char(3) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` tinyint(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `proses_barang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penjualan`
--

CREATE TABLE `laporan_penjualan` (
  `id_penjualan` char(3) NOT NULL,
  `id_keungan` char(3) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `harga_jual_produk` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan` char(3) NOT NULL,
  `id_penjualan` char(3) NOT NULL,
  `nama_pesanan` varchar(100) NOT NULL,
  `pemesanan_jenis_barang` tinyint(1) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `keterangan_pemesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id_pengadaan` char(3) NOT NULL,
  `id_lp_gudang` char(3) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `jumlah_pengadaan` int(11) NOT NULL,
  `harga_pengadaan` int(11) NOT NULL,
  `supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` char(3) NOT NULL,
  `id_produksi` char(3) NOT NULL,
  `id_lb_gudang` char(3) NOT NULL,
  `id_pemesanan` char(3) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stock_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `Deskripsi_produk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` char(3) NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `jumlah_produksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`),
  ADD KEY `fk_id_produksi` (`id_produksi`),
  ADD KEY `fk_id_pengadaan` (`id_pengadaan`),
  ADD KEY `fk_id_lp_gudang` (`id_lp_gudang`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `laporan_gudang`
--
ALTER TABLE `laporan_gudang`
  ADD PRIMARY KEY (`id_lp_gudang`);

--
-- Indexes for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_id_keuangan` (`id_keungan`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk_id_penjualan` (`id_penjualan`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`),
  ADD KEY `fk_id_lp_gudang2` (`id_lp_gudang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_id_lp_gudang3` (`id_lb_gudang`),
  ADD KEY `fk_id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD CONSTRAINT `fk_id_lp_gudang` FOREIGN KEY (`id_lp_gudang`) REFERENCES `laporan_gudang` (`id_lp_gudang`),
  ADD CONSTRAINT `fk_id_pengadaan` FOREIGN KEY (`id_pengadaan`) REFERENCES `pengadaan` (`id_pengadaan`),
  ADD CONSTRAINT `fk_id_produksi` FOREIGN KEY (`id_produksi`) REFERENCES `produksi` (`id_produksi`);

--
-- Constraints for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD CONSTRAINT `fk_id_keuangan` FOREIGN KEY (`id_keungan`) REFERENCES `keuangan` (`id_keuangan`);

--
-- Constraints for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD CONSTRAINT `fk_id_penjualan` FOREIGN KEY (`id_penjualan`) REFERENCES `laporan_penjualan` (`id_penjualan`);

--
-- Constraints for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD CONSTRAINT `fk_id_lp_gudang2` FOREIGN KEY (`id_lp_gudang`) REFERENCES `laporan_gudang` (`id_lp_gudang`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_id_lp_gudang3` FOREIGN KEY (`id_lb_gudang`) REFERENCES `laporan_gudang` (`id_lp_gudang`),
  ADD CONSTRAINT `fk_id_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan_produk` (`id_pemesanan`),
  ADD CONSTRAINT `fk_id_produksi2` FOREIGN KEY (`id_produk`) REFERENCES `produksi` (`id_produksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
