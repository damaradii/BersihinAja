-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 08:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bersihinaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `Id_Detail_Pemesanan` int(11) NOT NULL,
  `Id_Jenis_Layanan` int(11) NOT NULL,
  `Id_Pemesanan` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status_Pembayaran` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Tanggal_Order` datetime NOT NULL,
  `Ulasan` varchar(255) NOT NULL,
  `Jumlah_Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_layanan`
--

CREATE TABLE `jenis_layanan` (
  `Id_Services` int(11) NOT NULL,
  `Nama_Layanan` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Foto_Layanan` varchar(255) NOT NULL,
  `Ukuran_Ruangan` varchar(20) NOT NULL,
  `Maksimal_Jam` int(11) NOT NULL,
  `Estimasi` varchar(100) NOT NULL,
  `Jumlah_Cleaner` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_layanan`
--

INSERT INTO `jenis_layanan` (`Id_Services`, `Nama_Layanan`, `Harga`, `Foto_Layanan`, `Ukuran_Ruangan`, `Maksimal_Jam`, `Estimasi`, `Jumlah_Cleaner`) VALUES
(1, 'Small', 100000, '', '5 x 5', 2, '50menit - 120menit', 1),
(2, 'Medium', 160000, '', '10 x 10', 3, '120menit - 190menit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Id_Pemesanan` int(11) NOT NULL,
  `Id_Customer` int(11) NOT NULL,
  `Id_Pekerja` int(11) NOT NULL,
  `Id_Jenis_Layanan` int(11) NOT NULL,
  `Notifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Nama_User` varchar(255) NOT NULL,
  `Email_User` varchar(255) NOT NULL,
  `Alamat_User` varchar(255) NOT NULL,
  `No_Hp` int(15) NOT NULL,
  `Foto_User` varchar(255) NOT NULL,
  `KTP` int(16) NOT NULL,
  `Role_Id` enum('pekerja','customer') NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Nama_User`, `Email_User`, `Alamat_User`, `No_Hp`, `Foto_User`, `KTP`, `Role_Id`, `Password`) VALUES
(3, 'pekerjaahamd', 'coba@gmail.com', 'kadipaten', 2147483647, 'user_3_1733205365.jpeg', 2147483647, 'pekerja', '34f70892f40cd3b2a340769c070c4f1a02335d87'),
(4, 'coba aku ini', 'coba2@gmail.com', 'kadipaten', 128312312, 'user_4_1733154065.jpeg', 123123123, 'customer', '34f70892f40cd3b2a340769c070c4f1a02335d87'),
(6, 'damarabaikjuga', 'damar@gmail.com', 'kadipaten', 2147483647, 'user_6_1733227137.jpg', 2147483647, 'customer', 'afea99797bed0158663f5ef18a45e40eb615adfa'),
(7, 'pekerja baru', 'pekerja@gmail.com', 'barcelona', 2147483647, 'user_7_1733222011.jpeg', 2147483647, 'pekerja', 'beaec00c0d04c2903f9def1af6910fa24245ed41'),
(8, 'pekerja damar', 'pekerjadamar@gmail.com', 'barcelona', 2147483647, '', 2147483647, 'pekerja', 'beaec00c0d04c2903f9def1af6910fa24245ed41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`Id_Detail_Pemesanan`),
  ADD KEY `Id_Jenis_Layanan` (`Id_Jenis_Layanan`),
  ADD KEY `Id_Pemesanan` (`Id_Pemesanan`);

--
-- Indexes for table `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD PRIMARY KEY (`Id_Services`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`Id_Pemesanan`),
  ADD KEY `Id_Customer` (`Id_Customer`),
  ADD KEY `Id_Jenis_Layanan` (`Id_Jenis_Layanan`),
  ADD KEY `Id_Pekerja` (`Id_Pekerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`Id_Pemesanan`) REFERENCES `pemesanan` (`Id_Pemesanan`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`Id_Jenis_Layanan`) REFERENCES `jenis_layanan` (`Id_Services`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`Id_Pekerja`) REFERENCES `pekerja` (`Id_Pekerja`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`Id_Jenis_Layanan`) REFERENCES `jenis_layanan` (`Id_Services`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`Id_Customer`) REFERENCES `customer` (`Id_Customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
