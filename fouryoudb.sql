-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 02:40 PM
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
-- Database: `fouryoudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `image_url` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `discount`, `image_url`, `date`) VALUES
(1, 'iPhone 12', 'The major upgrades over the iPhone 11 include the addition of a Super Retina XDR OLED as opposed to the Liquid Retina LED-backlit LCD IPS panel on the iPhone 11 and XR, 5G support, the introduction of MagSafe, Apple A14 Bionic system on a chip (SoC) and high-dynamic-range video Dolby Vision 4K up to 30 fps.', 209000, 9000, 'IMG-65323537e60cb3.34424120.png', '2023-10-20 12:19:59'),
(2, 'iPhone 13', 'The iPhone 13 features a 6.1-inch (155 mm) display with Super Retina XDR OLED technology at a resolution of 2532×1170 pixels and a pixel density of about 460 PPI with a refresh rate of 60 Hz.', 359900, 9900, 'IMG-653235066ada61.56085924.png', '2023-10-19 11:06:27'),
(3, 'iPhone X', 'The iPhone X used a glass and stainless-steel form factor and \"bezel-less\" design, shrinking the bezels while not having a \"chin\", unlike many Android phones. It was the first iPhone to use an OLED screen, branded as a Super Retina HD display.', 84500, 4500, 'IMG-65323599a59e18.07821922.jpg', '2023-10-18 10:08:21'),
(4, 'JBL Tune 770NC Noise Cancelling Wireless Headphones', 'The JBL Tune 770NC Adaptive Noise Cancelling wireless headphones deliver on that promise all day—and longer, while sparing you the unwanted noises. With up to 70 hours of battery life, you\'ll easily get through a busy week of using them and still have enough JBL Pure Bass Sound to get you through the weekend.', 35000, 2000, 'IMG-65314e4cc0bc67.94822482.jpg', '2023-10-20 11:26:36'),
(5, 'Apple iMac 24 Inch 2021', 'iMac is so thin and compact, it fits in more places than ever. It\'s an extraordinary design only possible thanks to M1, the first system on a chip for Mac. M1 integrates the processor, graphics, memory and more onto a single chip. That let us put an entire computer into a space so small it practically disappears.', 600000, 0, 'IMG-653147c8080ed2.05256961.jpg', '2023-10-19 11:34:26'),
(6, 'Galaxy S23 Ultra', 'Description. The Samsung Galaxy S23 Ultra is the headliner of the S23 series. Specifications are top-notch including 6.8-inch Dynamic AMOLED display with 120Hz refresh rate, Snapdragon 8 Gen 2 processor, 5000mAh battery, up to 12gigs of RAM, and 1TB of storage.', 304990, 5000, 'IMG-653244942ffe23.39125860.jpg', '0000-00-00 00:00:00'),
(10, 'The Google Pixel 5', 'The Bottom Line. The Google Pixel 5 delivers 5G connectivity, excellent cameras, long battery life, and an outstanding Android software experience for a relatively affordable price. PCMag editors select and review products independently.', 150000, 5000, 'IMG-65324cf0cd7a84.92355553.jpg', '2023-10-20 10:15:20'),
(11, NULL, NULL, NULL, NULL, 'IMG-65324d152d7f96.68546706.jpg', '0000-00-00 00:00:00'),
(12, NULL, NULL, NULL, NULL, 'IMG-65324de57e1409.45914297.jpg', '0000-00-00 00:00:00'),
(13, NULL, NULL, NULL, NULL, 'IMG-65324fa71d01d9.52492294.jpg', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
