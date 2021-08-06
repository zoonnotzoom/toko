-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'buku 1', 'buku', 'buku', 100000, 7, '1.png'),
(2, 'buku 2', 'a', 'buku', 10000, 121, 'buku.jpg'),
(3, 'buku 4', 'a', 'buku', 1000, 10, '2.jpg'),
(8, 'Buku test promo', '123', 'Promo', 5000, 1, '125983033_210230973949778_3852055307709638623_n.jpg'),
(9, 'ATK', 'ATK BOS', 'Alat Tulis Kantor', 1231313, 2, 'indomi_polos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_bayar`, `batas_bayar`) VALUES
(5, 'trtsedrtfsdf', 'alad', '2020-12-31 11:58:54', '2021-01-01 11:58:54'),
(6, 'asfasf', 'test', '2020-12-31 12:29:18', '2021-01-01 12:29:18'),
(7, '', '', '2021-01-04 13:43:22', '2021-01-05 13:43:22'),
(8, '', '', '2021-01-04 13:48:20', '2021-01-05 13:48:20'),
(9, '', '', '2021-01-04 18:50:05', '2021-01-05 18:50:05'),
(10, 'Garox', 'garox', '2021-01-13 16:18:12', '2021-01-14 16:18:12'),
(11, 'asd', 'asd', '2021-01-14 00:44:33', '2021-01-15 00:44:33'),
(12, 'asd', 'asd', '2021-01-14 00:44:59', '2021-01-15 00:44:59'),
(13, 'asd', 'asd', '2021-01-14 00:45:47', '2021-01-15 00:45:47'),
(14, 'asd', 'asd', '2021-01-14 00:48:11', '2021-01-15 00:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(3, 5, 1, 'buku 1', 1, 100000, ''),
(4, 6, 1, 'buku 1', 2, 100000, ''),
(5, 7, 1, 'buku 1', 1, 100000, ''),
(6, 8, 1, 'buku 1', 1, 100000, ''),
(7, 9, 1, 'buku 1', 1, 100000, ''),
(8, 10, 2, 'buku 2', 1, 10000, ''),
(9, 11, 2, 'buku 2', 1, 10000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `terjual` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(6, 'admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(7, 'test', 'test', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(8, 'Mamang Garox', 'garox', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(11, 'qwerty', 'qwerty', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
