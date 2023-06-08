-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2023 at 02:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveling`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Sejarah', 'w-sejarah.png', '2023-06-05 18:46:39', '2023-06-05 18:46:39'),
(2, 'Wisata Budaya', 'w-budaya.png', '2023-06-05 18:46:39', '2023-06-05 18:46:39'),
(3, 'Wisata Edukasi', 'w-edukasi.png', '2023-06-05 18:46:49', '2023-06-05 18:46:49'),
(6, 'Wisata Belanja', 'w-belanja.png', '2023-06-08 19:53:40', '2023-06-08 19:53:40'),
(7, 'Wisata Kuliner', 'w-makanan.png', '2023-06-08 19:53:53', '2023-06-08 19:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `facility_name` varchar(255) NOT NULL,
  `tour_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility_name`, `tour_id`, `created_at`, `updated_at`) VALUES
(3, 'Smooking Area', '56', '2023-06-07 23:27:33', '2023-06-07 23:27:33'),
(5, 'Kamar Mandi', '56', '2023-06-08 16:06:31', '2023-06-08 16:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `url_map` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `category_id`, `name`, `description`, `address`, `url_map`, `created_at`, `updated_at`) VALUES
(56, 1, 'Masjid Menara Kudus', 'Masjid Menara Kudus dibangun sekitar tahun 1549. Dari penampakannya yang unik saja dapat terlihat jika bangunan tempat ibadah masyarakat Islam tersebut merupakan perpaduan kebudayaan Hindu-Buddha dengan Islam. Wajar saja, karena kala itu kepercayaan Hindu-Buddha masih kental. Berkat peranan aktif Sunan Kudus sebagai salah satu anggota dalam menyebarkan ajaran Islam di pulau Jawalah masjid ini bisa berdiri.\r\n\r\nObjek wisata sejarah di Indonesia ini memiliki ciri khas sebuah menara setinggi 18 meter dan telah masuk ke dalam daftar masjid tertua di Indonesia. Mengunjungi destinasi wisata sejarah di Indonesia, kamu bisa sekaligus mendatangi makam Sunan Kudus yang terletak di sisi barat masjid ini. Kamu juga bisa menjadi bagian dari Festival Dhandhangan yang diadakan warga setempat untuk menyambut hadirnya bulan Ramadan saat mengunjungi tempat wisata bersejarah ini.', 'Jl. Menara, Pejaten, Kauman, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59315', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7175478882427!2d110.8302571753192!3d-6.804174266549145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4b21821c99d%3A0x2bd4906cbd6c9adf!2sMasjid%20Al-Aqsha%20Menara%20Kudus!5e0!3m2!1sid!2sid!4v1686154967009!5m2!1sid!2sid', '2023-06-07 23:26:09', '2023-06-07 23:26:09'),
(58, 1, 'Hello', 'Hello', 'Hello', 'Hello', '2023-06-08 19:33:29', '2023-06-08 19:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `tour_images`
--

CREATE TABLE `tour_images` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_images`
--

INSERT INTO `tour_images` (`id`, `tour_id`, `image`, `created_at`, `updated_at`) VALUES
(76, 56, 'H1KWMGzGd71sgnw.jpg', '2023-06-08 15:56:49', '2023-06-08 15:56:49'),
(77, 56, 'q6eQNdUD3fbkwmL.jpg', '2023-06-08 15:56:49', '2023-06-08 15:56:49'),
(78, 56, 'I9KpZRnkbp13D24.jpg', '2023-06-08 15:56:49', '2023-06-08 15:56:49'),
(79, 57, 'VaYKUlpatMvysow.png', '2023-06-08 15:58:56', '2023-06-08 15:58:56'),
(80, 58, '88ykjTkwH8hd0cS.png', '2023-06-08 19:33:29', '2023-06-08 19:33:29'),
(81, 58, 'Egkaxualo5o4lop.jpg', '2023-06-08 19:33:29', '2023-06-08 19:33:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tour_images`
--
ALTER TABLE `tour_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tour_images`
--
ALTER TABLE `tour_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
