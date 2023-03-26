-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2021 at 11:45 AM
-- Server version: 8.0.21
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puhelinkauppa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tuotteet`
--

CREATE TABLE `tuotteet` (
  `id` int NOT NULL,
  `nimi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinta` decimal(10,2) NOT NULL,
  `malli` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `kuva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kuvaus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `koodi` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuotteet`
--

INSERT INTO `tuotteet` (`id`, `nimi`, `hinta`, `malli`, `kuva`, `kuvaus`, `koodi`) VALUES
(1, 'Samsung Galaxy S21', '999.00', 'Samsung', 'kuvat/Samsung_Galaxy_S21.jpg', 'SM-G996BZKDEUB\r\n5G\r\nPhantom Black\r\n128Gt ROM / 8Gt RAM', 'PT101'),
(2, 'Samsung Galaxy A72', '450.00', 'Samsung', 'kuvat/Samsung_Galaxy_A72.jpg', 'Oktaydin 2,3 GHz, 1,8GHz\r\nSuper AMOLED 6.7\"\r\nAwesome Blue\r\n6Gt RAM \r\n128Gt\r\n165 x 77,4 x 8,4', 'PT102'),
(3, 'Apple iPhone 11', '569.00', 'Apple', 'kuvat/Apple_iPhone_11.jpg', 'MWLT2QN/A\r\niOS 13\r\nApple A13 Bionic CPU\r\nLCD 6,10\"\r\n64Gt ROM\r\n', 'PT103'),
(4, 'OnePlus 9 Pro', '999.00', 'OnePlus', 'kuvat/OnePlus_9_Pro.jpg', 'Android 11\r\n5G\r\nQualcomm Snapdragon 888 CPU\r\n12Gt RAM / 256Gt ROM\r\n4,500mAh Akku Langaton lataus\r\nPine Green', 'PT104'),
(5, 'OnePlus Nord', '299.00', 'OnePlus', 'kuvat/OnePlus_Nord.jpg', 'Android 10\r\n6,44\" Näyttö\r\nQualcomm® Snapdragon™ 765G CPU\r\n8Gt RAM / 128Gt ROM\r\n4115mAh Akku\r\nGray Onyx', 'PT105'),
(6, 'HTC Desire 21 Pro', '420.00', 'HTC', 'kuvat/HTC_Desire_21_pro_5G.jpg', '5G\r\nAndroid 10\r\n6.7\" FHD+ 90Hz Näyttö\r\nSnapdragon 690 CPU\r\n5,000 mAh Akku\r\n8GB RAM 128GB ROM', 'PT106'),
(10, 'Honor 20 Lite', '299.00', 'Honor', 'kuvat/Honor_20_Lite.jpg', 'Tämä tuote on lisätty uudelleen ADMIN sivulta, tuotteen poistamisen jälkeen.', 'PTH20L'),
(11, 'Honor 20 Lite 2', '299.99', 'Honor', 'kuvat/Honor_20_Lite.jpg', 'Tämä tuote on lisätty suoraan ADMIN sivulta', 'HL202');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `Etunimi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Sukunimi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tunnus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `salasana` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `muokkaaja` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Etunimi`, `Sukunimi`, `tunnus`, `salasana`, `muokkaaja`) VALUES
(1, '', '', 'testi', 'testi123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuotteet`
--
ALTER TABLE `tuotteet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `koodi` (`koodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tuotteet`
--
ALTER TABLE `tuotteet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
