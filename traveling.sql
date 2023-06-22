-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2023 at 04:28 AM
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
(6, 'Wisata Alam', 'w-alam.png', '2023-06-08 19:53:40', '2023-06-08 19:53:40'),
(7, 'Wisata Kuliner', 'w-makanan.png', '2023-06-08 19:53:53', '2023-06-08 19:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tour_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `email`, `tour_id`, `note`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Azil Khaq', 'azilkhaq10@gmail.com', 59, 'Sangat Bagus dan Menarik', 1, '2023-06-14 21:27:19', '2023-06-14 21:27:19'),
(2, 'Intan Mariyahsari', 'intannmariyahsari@gmail.com', 59, 'Sangat Bagus dan Menarik', 4, '2023-06-14 21:29:05', '2023-06-14 21:29:05'),
(3, 'Muhammad Hanan', 'hanan@gmail.com', 59, 'Sangat Bagus dan Menarik', 5, '2023-06-14 21:41:40', '2023-06-14 21:41:40'),
(4, 'Rudi Setyawan', 'rudi@gmail.com', 59, 'Sangat Bagus dan Menarik', 4, '2023-06-14 21:42:01', '2023-06-14 21:42:01'),
(5, 'Azil Khaq', 'azilkhaq10@gmail.com', 56, 'Sangat Bagus dan Menarik', 5, '2023-06-14 21:57:10', '2023-06-14 21:57:10'),
(6, 'Azil Khaq', 'azilkhaq10@gmail.com', 60, 'Sangat Bagus dan Tempat bersih nyaman', 5, '2023-06-14 22:30:34', '2023-06-14 22:30:34'),
(7, 'Bang Messi', 'messi@gmail.com', 62, 'Sangat Bagus dan Nyaman, menu yang di tawarkan relatif enak dan tidak terlalu mahal.', 4, '2023-06-15 19:59:20', '2023-06-15 19:59:20'),
(8, 'Azil Khaq', 'azilkhaq10@gmail.com', 61, 'Makanan yang di tawarkan sangat beragam, tapi sayangnya terlalu banyak pengamen.', 3, '2023-06-15 20:01:19', '2023-06-15 20:01:19'),
(9, 'Azil Khaq', 'azilkhaq10@gmail.com', 62, 'Bagus', 5, '2023-06-15 20:31:45', '2023-06-15 20:31:45'),
(10, 'Jamal', 'jamal@gmail.com', 62, 'Sangat Bagus', 3, '2023-06-21 19:16:53', '2023-06-21 19:16:53');

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
(5, 'Kamar Mandi', '56', '2023-06-08 16:06:31', '2023-06-08 16:06:31'),
(6, 'Skybike', '62', '2023-06-15 19:50:15', '2023-06-15 19:50:15'),
(7, 'Permadani Terbang', '62', '2023-06-15 19:50:24', '2023-06-15 19:50:24'),
(8, 'Spot Foto Keren Lainnya', '62', '2023-06-15 19:50:34', '2023-06-15 19:50:34'),
(9, 'Fasilitas B', '63', '2023-06-21 19:09:58', '2023-06-21 19:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `suggestion` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `email`, `suggestion`, `created_at`, `updated_at`) VALUES
(1, 'azilkhaq10@gmail.com', 'Saran Saran', '2023-06-14 00:00:00', '2023-06-14 00:00:00'),
(2, 'azilkhaq05@gmail.com', 'Saran Saran', '2023-06-15 19:07:33', '2023-06-15 19:07:33'),
(3, 'azilkhaq10@gmail.com', 'Mohon di perbaiki fitur wisata', '2023-06-21 19:17:19', '2023-06-21 19:17:19');

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
(59, 1, 'Candi Borobudur', 'Candi Borobudur terletak di Kabupaten Magelang, Jawa Tengah dengan corak Buddha. Diperkirakan Candi Borobudur didirikan pada masa pemerintahan Dinasti Syailendra antara 750-842 M. Tujuan pembangunan Candi Borobudur adalah untuk memuliakan ajaran Budha Mahayana.', 'Jl. Badrawati, Borobudur, Magelang, Jawa Tengah', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6974180370707!2d110.20117637532965!3d-7.607868475201857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cf009a7d697%3A0xdd34334744dc3cb!2sCandi%20Borobudur!5e0!3m2!1sid!2sid!4v1686830413661!5m2!1sid!2sid', '2023-06-12 19:59:23', '2023-06-12 19:59:23'),
(60, 3, 'Museum Gajah', 'Museum Nasional Indonesia, atau yang sering disebut dengan Museum Gajah, adalah sebuah museum arkeologi, sejarah, etnografi, dan geografi yang terletak di Jakarta Pusat dan persisnya di Jalan Merdeka Barat 12. Museum ini merupakan museum pertama dan terbesar di Asia Tenggara.', 'Jl. Medan Merdeka Barat No.12, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia Telepon: +62 21 3868172', 'https://www.google.com/maps?ll=-6.176402,106.82159&z=17&t=m&hl=id-ID&gl=US&mapclient=embed&cid=11823428236222683373', '2023-06-12 20:08:29', '2023-06-12 20:08:29'),
(61, 7, 'Pasar Lama Tanggerang', 'Pasar Lama Tanggerang dapat dikunjugi setiap hari, khusus wisatawan yang ingin mencoba kuliner malam hari di kawasan Pasar Lama Tanggerang dapat datang pukun 19:00 WIB. ', 'Pasar Lama, Jalan Kisamaun, RT.002/RW.004, Sukasari, Kota Tangerang, Banten', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6409341512544!2d106.62761457531147!3d-6.1787946605448845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8d4b8bb1f09%3A0x122fb3c547a07bfe!2sPasar%20Lama%2C%20Jl.%20Kisamaun%20No.32%2C%20RT.002%2FRW.004%2C%20Sukasari%2C%20Tangerang%2C%20Tangerang%20City%2C%20Banten%2015118!5e0!3m2!1sid!2sid!4v1686833059474!5m2!1sid!2sid', '2023-06-15 19:41:15', '2023-06-15 19:41:15'),
(62, 7, 'Kopi Daong - Puncak', 'Coffee Daong memiliki suasana yang pas untuk refreshing dan berlibur. Hawa sejuk yang berasal dari pohon-pohon rindang bisa kamu rasakan secara langsung di kedai ini. Menariknya lagi, lokasi cafe Kopi Daong berada di ketinggian, dimana kamu bisa melihat pemandangan alam terbuka dan pohon-pohon pinus.', 'Pancawati, Kec. Caringin, Kabupaten Bogor, Jawa Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3683936909683!2d106.8755887!3d-6.7248247999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cbed8dc4caeb%3A0x29e27eabe04db298!2sKopi%20Daong!5e0!3m2!1sen!2sid!4v1686833328527!5m2!1sen!2sid', '2023-06-15 19:50:00', '2023-06-15 19:50:00'),
(63, 7, 'Kya Kya - Surabaya', 'Kawasan pecinan yang terletak di Jalan Kembang Jepun, Kecamatan Pabean, Kota Surabaya, Jawa Timur merupakan tempat wisata dengan ornamen khas Tionghoa yang dilengkapi becak untuk pengunjung. Perpaduan cita rasa Surabaya dengan makanan khas Tionghoa tersaji di kawasan ini. Salah satu panganan unik dari tempat ini adalah pia di Toko Pia Kemenangan.', 'Jl. Kembang Jepun, Bongkaran, Kec. Pabean Cantikan, Surabaya, Jawa Timur 60161', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0223802949426!2d112.74209641477476!3d-7.23828609477484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9178e34764d%3A0x3aca6b0e54d9e5d4!2sKya%20Kya%20Surabaya!5e0!3m2!1sid!2sid!4v1686833734727!5m2!1sid!2sid', '2023-06-15 19:56:59', '2023-06-15 19:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `tour_favorites`
--

CREATE TABLE `tour_favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_favorites`
--

INSERT INTO `tour_favorites` (`id`, `user_id`, `tour_id`, `created_at`, `updated_at`) VALUES
(17, 3, 63, '2023-06-20 19:41:03', '2023-06-20 19:41:03'),
(22, 3, 59, '2023-06-20 19:48:42', '2023-06-20 19:48:42'),
(24, 4, 62, '2023-06-20 20:13:14', '2023-06-20 20:13:14'),
(25, 4, 63, '2023-06-20 20:13:59', '2023-06-20 20:13:59'),
(26, 3, 62, '2023-06-20 20:32:06', '2023-06-20 20:32:06'),
(27, 3, 61, '2023-06-20 20:32:07', '2023-06-20 20:32:07'),
(28, 5, 64, '2023-06-21 19:15:37', '2023-06-21 19:15:37'),
(29, 5, 63, '2023-06-21 19:15:39', '2023-06-21 19:15:39');

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
(92, 60, 'AuVSWcACNe8q6fC.jpg', '2023-06-12 20:08:29', '2023-06-12 20:08:29'),
(93, 56, 'H1KWMGzGd71sgnw.jpg', '2023-06-14 20:03:27', '2023-06-14 20:03:27'),
(94, 56, 'q6eQNdUD3fbkwmL.jpg', '2023-06-14 20:03:27', '2023-06-14 20:03:27'),
(95, 56, 'I9KpZRnkbp13D24.jpg', '2023-06-14 20:03:27', '2023-06-14 20:03:27'),
(96, 56, 'xnu0nuYyo40cHvT.jpeg', '2023-06-14 20:03:27', '2023-06-14 20:03:27'),
(97, 59, 'fbtgEPhiCiy6mEJ.jpg', '2023-06-15 19:00:34', '2023-06-15 19:00:34'),
(100, 61, '9tWiyraT1HUei8i.jpeg', '2023-06-15 19:44:59', '2023-06-15 19:44:59'),
(101, 62, 'AHOsXN2DpzpR9LR.jpeg', '2023-06-15 19:50:00', '2023-06-15 19:50:00'),
(102, 62, 'gHqOvCMzatEPKi2.jpg', '2023-06-15 19:50:00', '2023-06-15 19:50:00'),
(103, 63, 'OuE0UkYrQlr0mQs.jpeg', '2023-06-15 19:56:59', '2023-06-15 19:56:59'),
(104, 63, 'NIhxi2M5vDF1TaA.jpg', '2023-06-15 19:56:59', '2023-06-15 19:56:59'),
(108, 64, '1xiteZSlgVBh0mN.jpeg', '2023-06-21 19:07:54', '2023-06-21 19:07:54'),
(109, 64, 'WFWsozFF9v9ecmH.jpg', '2023-06-21 19:07:54', '2023-06-21 19:07:54'),
(110, 64, 'YKvi7KIKFFeKPdP.jpeg', '2023-06-21 19:07:54', '2023-06-21 19:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('USER','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`) VALUES
(2, 'Azil Khaq', 'azilkhaq10@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'ADMIN'),
(3, 'John Doe', 'johndoe@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'USER'),
(4, 'Malika', 'malika@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'USER'),
(5, 'Jamaludin', 'jamaludin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'USER'),
(7, 'Emil', 'emil@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'USER');

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
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tour_favorites`
--
ALTER TABLE `tour_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_images`
--
ALTER TABLE `tour_images`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tour_favorites`
--
ALTER TABLE `tour_favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tour_images`
--
ALTER TABLE `tour_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
