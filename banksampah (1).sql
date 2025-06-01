-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2025 at 08:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nia` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` enum('Master-admin','Admin') COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nia`, `nama`, `telepon`, `email`, `password`, `level`) VALUES
('A12345678', 'Admin Master', '08123456789', 'adminmaster@example.com', '$2y$10$DZbQ4OcGj6gXB2HX2p66le5DDvHWb7NbyYux.a.H8pL3yO1dR5HEe', 'Master-admin'),
('A87654321', 'Admin Branch', '08987654321', 'adminbranch@example.com', '$2y$10$DZbQ4OcGj6gXB2HX2p66le5DDvHWb7NbyYux.a.H8pL3yO1dR5HEe', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-04-16-114519', 'App\\Database\\Migrations\\CreateInitialTables', 'default', 'App', 1744804012, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `nin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rt` int NOT NULL,
  `alamat` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `saldo` int DEFAULT NULL,
  `sampah` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`nin`, `nama`, `rt`, `alamat`, `telepon`, `email`, `password`, `saldo`, `sampah`, `created_at`, `updated_at`) VALUES
('N098765432', 'Nasabah Dua', 2, 'Jl. Contoh No.2', '0876543221', 'nasabah3@example.com', '$2y$10$WlzXKT9initAJOecNkavj.agnt6.P/pP33eXumUBtnfpKohDXK42u', 30000, 5, NULL, NULL),
('N123456789', 'Nasabah Satu', 1, 'Jl. Contoh No.1', '0876543210', 'nasabah1@example.com', '$2y$10$DZbQ4OcGj6gXB2HX2p66le5DDvHWb7NbyYux.a.H8pL3yO1dR5HEe', 50000, 10, NULL, NULL),
('N987654321', 'ahmad farid teja', 1, 'Jl.Beruang Raya no.1,RT.2,RW.1', '085161671965', 'ronibimo5@gmail.com', '$2y$10$XrdBYtH/btoUuf8Dn1EHK.xqjNkXATgsjeKRtOEfF0TYi0aRJ4Bjq', 0, 0, '2025-04-17 20:58:36', '2025-04-17 21:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id` int NOT NULL,
  `jenis_sampah` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `satuan` enum('KG','PC','LT') COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id`, `jenis_sampah`, `satuan`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'organik test', 'KG', 10000, 'uploads/sampah/1744909399_9db8698bf03ebb93d137.jpeg', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `setor`
--

CREATE TABLE `setor` (
  `id_setor` int UNSIGNED NOT NULL,
  `tanggal_setor` date NOT NULL,
  `nin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_sampah` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `berat` int NOT NULL,
  `harga` int NOT NULL,
  `total` int NOT NULL,
  `nia` varchar(9) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setor`
--

INSERT INTO `setor` (`id_setor`, `tanggal_setor`, `nin`, `jenis_sampah`, `berat`, `harga`, `total`, `nia`) VALUES
(1, '2025-04-17', 'N098765432', 'organik', 3, 10000, 30000, 'A12345678'),
(2, '2025-04-17', 'N987654321', 'organik test', 100, 10000, 1000000, 'A12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tarik`
--

CREATE TABLE `tarik` (
  `id_tarik` int UNSIGNED NOT NULL,
  `tanggal_tarik` date NOT NULL,
  `nin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `saldo` int NOT NULL,
  `jumlah_tarik` int NOT NULL,
  `nia` varchar(9) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tarik`
--

INSERT INTO `tarik` (`id_tarik`, `tanggal_tarik`, `nin`, `saldo`, `jumlah_tarik`, `nia`) VALUES
(1, '2025-04-17', 'N987654321', 1000000, 200000, 'A12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nia`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`nin`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`),
  ADD KEY `setor_nin_foreign` (`nin`),
  ADD KEY `setor_jenis_sampah_foreign` (`jenis_sampah`),
  ADD KEY `setor_nia_foreign` (`nia`);

--
-- Indexes for table `tarik`
--
ALTER TABLE `tarik`
  ADD PRIMARY KEY (`id_tarik`),
  ADD KEY `tarik_nin_foreign` (`nin`),
  ADD KEY `tarik_nia_foreign` (`nia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tarik`
--
ALTER TABLE `tarik`
  MODIFY `id_tarik` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `setor`
--
ALTER TABLE `setor`
  ADD CONSTRAINT `setor_nia_foreign` FOREIGN KEY (`nia`) REFERENCES `admin` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `setor_nin_foreign` FOREIGN KEY (`nin`) REFERENCES `nasabah` (`nin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarik`
--
ALTER TABLE `tarik`
  ADD CONSTRAINT `tarik_nia_foreign` FOREIGN KEY (`nia`) REFERENCES `admin` (`nia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tarik_nin_foreign` FOREIGN KEY (`nin`) REFERENCES `nasabah` (`nin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
