-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `difgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaBarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beratBarang` int(11) NOT NULL,
  `ukuranBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `namaBarang`, `beratBarang`, `ukuranBarang`) VALUES
(1, 'Sepatu', 1, 120),
(2, 'Baju', 3, 100),
(3, 'Barbel', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `namaCustomer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatCustomer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `id_transaksi`, `namaCustomer`, `alamatCustomer`, `noTelp`) VALUES
(1, 0, 'Jack Pott', 'Jl. Karadenan No.100', '082482121382'),
(2, 0, 'Orson Carte', 'Jl. Mangga Udang', '08123182912'),
(3, 0, 'Daffin', 'Jl. Ahmad Yani No. 200', '08213478291');

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `id_pengiriman` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `jenisKomplain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalKomplain` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komplain`
--

INSERT INTO `komplain` (`id`, `id_customer`, `id_pengiriman`, `id_barang`, `id_pegawai`, `id_transaksi`, `jenisKomplain`, `tanggalKomplain`) VALUES
(1, 0, 0, 0, 0, 0, 'Produk', '2021-05-27'),
(2, 0, 0, 0, 0, 0, 'Pelayanan yang kurang baik,', '2021-06-05'),
(3, 0, 0, 0, 0, 0, 'Fasilitas', '2021-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2021_05_23_124655_create_transaksi_table', 1),
(8, '2021_05_23_124709_create_customer_table', 1),
(9, '2021_05_23_124720_create_komplain_table', 1),
(10, '2021_05_23_124730_create_pegawai_table', 1),
(11, '2021_05_23_124900_create_barang_table', 1),
(12, '2021_05_23_124941_create_pengiriman_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaPegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatPegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `namaPegawai`, `alamatPegawai`, `noTelp`, `divisi`, `gaji`) VALUES
(1, 'Sudomo Purnama Gunardi', 'Jl. Rawa Gelam IV 13260', '021 4602666', 'IT', 5000000),
(2, 'Eko Widya Chandra', 'Duta Permai Blok C IV No. 09 – 12JL KH Noor Alie, Jakasampurna', '+62 21 8896 3777', 'Warehouse', 20000000),
(3, 'Iman Handoko Budiaman', 'Jl Pelajar Pejuang 45 80,Turangga', '022 70726517', 'HRD', 9000000);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaKurir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `tanggalPengiriman` date NOT NULL,
  `namaEkspedisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `namaKurir`, `id_transaksi`, `tanggalPengiriman`, `namaEkspedisi`) VALUES
(1, 'Udin', 0, '2021-05-03', 'JNE'),
(2, 'Adi', 0, '2021-05-28', 'JNT'),
(3, 'Edan', 0, '2021-05-25', 'Si Cepat');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `id_pengiriman` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `jenisPembelian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_customer`, `id_pengiriman`, `id_barang`, `tanggalTransaksi`, `jenisPembelian`) VALUES
(1, 1, 1, 1, '2021-05-25', 'Online'),
(2, 3, 2, 2, '2021-05-14', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
