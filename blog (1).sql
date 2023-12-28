-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 02:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `body` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `date`) VALUES
(28, 11, '10 Update From HTML', '10-update-from-html', '10-update-from-html.jpg', 'Lorem Ipsum is simply dummy text of the printing \r\n\r\n', '2023-12-25'),
(29, 12, 'update terbaru hari ini', 'update-terbaru-hari-ini', 'update-terbaru-hari-ini.jpg', 'yang penting adad', '2023-12-27'),
(30, 12, 'Website yang menyediakan Database', 'website-yang-menyediakan-database', 'website-yang-menyediakan-database.jpg', 'yang penting ada isinya', '2023-12-27'),
(31, 12, 'Website yang menyediakan Database', 'website-yang-menyediakan-database', 'website-yang-menyediakan-database.jpg', 'yang penting ada isinya', '2023-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `photo`) VALUES
(8, 'bukhori', 'asep@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'asep@gmail-com.jpg'),
(9, 'ahmad', 'hafidz@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'hafidz@gmail-com.jpg'),
(11, 'bukhori', 'bukhori@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'bukhori.jpg'),
(12, 'Muhammad Hafidz Choirul Rizal', 'hafirizal2007@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'muhammad-hafidz-choirul-rizal.jpg'),
(13, 'Muhammad Hafidz Choirul Rizal', 'bukhori@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
