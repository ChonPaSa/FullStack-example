-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 11:43 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `formfields`
--

CREATE TABLE `formfields` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formfields`
--

INSERT INTO `formfields` (`id`, `name`, `label`) VALUES
(1, 'name', 'first name'),
(2, 'surname', 'last name'),
(3, 'country', 'country'),
(4, 'email', 'email'),
(5, 'telephone', 'phone number');

-- --------------------------------------------------------

--
-- Table structure for table `formsubmit`
--

CREATE TABLE `formsubmit` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formsubmitdata`
--

CREATE TABLE `formsubmitdata` (
  `id` int(10) UNSIGNED NOT NULL,
  `formSubmit_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formfields`
--
ALTER TABLE `formfields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formsubmit`
--
ALTER TABLE `formsubmit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formsubmitdata`
--
ALTER TABLE `formsubmitdata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_table1_formSubmit_idx` (`formSubmit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formfields`
--
ALTER TABLE `formfields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `formsubmit`
--
ALTER TABLE `formsubmit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formsubmitdata`
--
ALTER TABLE `formsubmitdata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formsubmitdata`
--
ALTER TABLE `formsubmitdata`
  ADD CONSTRAINT `fk_table1_formSubmit` FOREIGN KEY (`formSubmit_id`) REFERENCES `formsubmit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
