-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 05:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id_favorit` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_menu`, `jumlah`) VALUES
(1, 317, 7343, 1),
(2, 317, 67, 1),
(3, 317, 73, 1),
(4, 318, 7354, 1),
(5, 318, 7354, 1),
(6, 319, 73, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(100) NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `image`, `kategori`, `deskripsi`, `harga`, `stock`) VALUES
(73, 'COCA COLA', './img/menu/kfc-web_hot-tea-(english-breakfast)_t.png', 'minuman', 'awfawfawf', 900000, 10),
(99, 'Ayam Enak', './img/kfc-web_signature-box1_t.png', 'makanan', 'makanan enak', 80000, 10),
(7354, '9 PCS BUCKET', './img/kfc-web_sbspicysour-2_t.png', 'Makanan', '9 ptg Ayam', 45000, 10),
(7355, 'MOCHA FLOAT', './img/kfc-web_chococha-float_t_1.png', 'Minuman', '', 45000, 100),
(7356, 'KRISPY BURGER', './img/kfc-web_burger-deluxe_t.png', 'burger', 'KRISPY BURGER', 50000, 10),
(7357, 'Ayam Geprek', './img/kfc-web_k_wingerspicy_sour_t.png', 'Makanan', 'Ayam geprek sangat enak', 12000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(15) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_menu` varchar(255) NOT NULL,
  `alamat1` varchar(255) NOT NULL,
  `alamat2` varchar(255) NOT NULL,
  `alamat3` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `tota_harga` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `harga` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `id_menu`, `alamat1`, `alamat2`, `alamat3`, `kodepos`, `tota_harga`, `units`, `harga`, `date`, `email`) VALUES
(1, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 125000, 12, 24500, '2022-01-28 06:07:17', 'romijatmiko033@gmail.com'),
(3, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 125000, 12, 24500, '2022-01-28 06:07:17', 'romijatmiko033@gmail.com'),
(4, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 195000, 15, 24500, '2022-01-28 06:07:17', 'romijatmiko033@gmail.com'),
(5, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 214512, 12, 34000, '2022-02-18 06:07:17', 'romijatmiko033@gmail.com'),
(6, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 31251, 25, 21321, '2022-02-19 06:07:17', 'romijatmiko033@gmail.com'),
(7, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 125000, 12, 24500, '2022-02-21 06:07:17', 'romijatmiko033@gmail.com'),
(8, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 125000, 12, 24500, '2022-02-25 06:07:17', 'romijatmiko033@gmail.com'),
(9, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 125000, 12, 24500, '0000-00-00 00:00:00', 'romijatmiko033@gmail.com'),
(10, '2', '73', 'bandung', 'bandung', 'bandung', '4527', 125000, 12, 24500, '2022-03-01 06:07:17', 'romijatmiko033@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `u_admin`
--

CREATE TABLE `u_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pasword` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_admin`
--

INSERT INTO `u_admin` (`id_admin`, `username`, `pasword`, `email`) VALUES
(1, 'romi', '123', 'roms@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `u_user`
--

CREATE TABLE `u_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_user`
--

INSERT INTO `u_user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'romijatmiko', '123', 'roms@gmail.com'),
(19, '1207050146', 'd844d1517ce037eab99a09d015819817', '1207050146@gmail.com'),
(20, '1207050146qwr', '202cb962ac59075b964b07152d234b70', 'qt21qt21q@gmail.com'),
(31, 'qwww', '11', 'romsss@gmail.com'),
(34, 'user', '123a', 'user@gmail.com'),
(99, 'aweawawe', 'Perempuan', 'romijatmiko@gmail.com'),
(312, 'aaaaaaaa', 'wqewqewqeqw', 'romijatmiko@gmail.com'),
(313, ' roms12344', 'd10906c3dac1172d4f60bd41f224ae75', 'roms@gmail.com'),
(314, 'roms123', '555', 'roms123@gmail.com'),
(315, 'aa', '202cb962ac59075b964b07152d234b70', 'aa@gmail.com'),
(316, 'ab', '827ccb0eea8a706c4c34a16891f84e7b', 'ab@gmail.com'),
(317, 'ee', '08a4415e9d594ff960030b921d42b91e', 'ee@gmail.com'),
(318, 'abc', 'c20ad4d76fe97759aa27a0c99bff6710', 'abc@gmail.com'),
(319, 'romijatmiko03', '827ccb0eea8a706c4c34a16891f84e7b', 'romijatmiko03@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `u_admin`
--
ALTER TABLE `u_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `u_user`
--
ALTER TABLE `u_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7358;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `u_user`
--
ALTER TABLE `u_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
