-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 06:42 AM
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
-- Database: `db_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `judul` varchar(223) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `tanggal`, `isi`) VALUES
(9, '648556b1084ab.jpg', 'penyelenggaraan seminar desa konoha', '2023-06-14', '    Lorembfdb ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit magna eu nunc iaculis, eu ullamcorper mi tincidunt. Proin a tellus massa. Nullam aliquam turpis et leo fringilla convallis. Duis eu justo a tortor viverra tincidunt vitae in odio. Etiam ut dictum leo. Suspendisse fringilla diam vel pulvinar malesuada. Morbi rutrum, massa vitae faucibus lacinia, quam enim placerat mauris, eu vestibulum odio metus nec lectus. Sed id lacus in urna convallis sollicitudin. Ut posuere semper augue, ac aliquet quam. Nullam vitae augue elit. '),
(10, '6484c1280bd9a.jpeg', 'pemerintah mengadakan suatu pertemuan', '2023-06-16', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit magna eu nunc iaculis, eu ullamcorper mi tincidunt. Proin a tellus massa. Nullam aliquam turpis et leo fringilla convallis. Duis eu justo a tortor viverra tincidunt vitae in odio. Etiam ut dictum leo. Suspendisse fringilla diam vel pulvinar malesuada. Morbi rutrum, massa vitae faucibus lacinia, quam enim placerat mauris, eu vestibulum odio metus nec lectus. Sed id lacus in urna convallis sollicitudin. Ut posuere semper augue, ac aliquet quam. Nullam vitae augue elit.'),
(12, '6484c14276c82.jpg', 'pertemuan bandung', '2023-06-13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit magna eu nunc iaculis, eu ullamcorper mi tincidunt. Proin a tellus massa. Nullam aliquam turpis et leo fringilla convallis. Duis eu justo a tortor viverra tincidunt vitae in odio. Etiam ut dictum leo. Suspendisse fringilla diam vel pulvinar malesuada. Morbi rutrum, massa vitae faucibus lacinia, quam enim placerat mauris, eu vestibulum odio metus nec lectus. Sed id lacus in urna convallis sollicitudin. Ut posuere semper augue, ac aliquet quam. Nullam vitae augue elit.'),
(13, '6484c15fbc689.jpg', 'pertemuan di bogor', '2023-06-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit magna eu nunc iaculis, eu ullamcorper mi tincidunt. Proin a tellus massa. Nullam aliquam turpis et leo fringilla convallis. Duis eu justo a tortor viverra tincidunt vitae in odio. Etiam ut dictum leo. Suspendisse fringilla diam vel pulvinar malesuada. Morbi rutrum, massa vitae faucibus lacinia, quam enim placerat mauris, eu vestibulum odio metus nec lectus. Sed id lacus in urna convallis sollicitudin. Ut posuere semper augue, ac aliquet quam. Nullam vitae augue elit.');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `laporan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `gambar`, `email`, `tanggal`, `laporan`) VALUES
(32, '64853a1cb7c31.jpeg', 'azharutama837@gmail.com', '2023-06-14', 'nama saya muhammad azhar utama'),
(33, '64853aa101c01.jpg', 'sasuke@gmail.com', '2023-06-20', 'loremdhsuiwdfewgdfewbfukicdy'),
(34, '64853b09936fd.jpeg', 'azharutama837@gmail.com', '2023-06-08', 'bshqujdcfvewufcvewukfewudfcv uekwdfcvu');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int NOT NULL,
  `role_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(23, 'admin', 'azharutama837@gmail.com', '$2y$10$30eqP1b7o5mhrvQrR8CCh.3vexWSOlfcFBHMtnd/rnndkrf.GNeXa', 1),
(24, 'aliya', 'aliya@gmail.com', '$2y$10$QnMN93I/jsgL55LC2pH5pe5QJ.kDEq9w6TjG5LUgyMsRPVaA3g8Ry', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
