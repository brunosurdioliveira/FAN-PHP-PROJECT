-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2020 at 04:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bruno_project`
--
CREATE DATABASE IF NOT EXISTS `bruno_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bruno_project`;

-- --------------------------------------------------------

--
-- Table structure for table `Artists`
--

CREATE TABLE `Artists` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `artist_talent` varchar(30) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Artists`
--

INSERT INTO `Artists` (`artist_id`, `artist_name`, `artist_talent`, `datetime`) VALUES
(1, 'Anitta', 'Singer', '2020-01-15'),
(136, 'Bruno Surdi Oliveira', 'Blogger', '2020-08-05'),
(137, 'Maria da Gra&ccedil;a', 'actor', '2020-08-05'),
(138, 'Larissa Silva', 'Singer', '2020-08-05'),
(139, 'Mia Colucci ', 'Other', '2020-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artists`
--
ALTER TABLE `Artists`
  ADD PRIMARY KEY (`artist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artists`
--
ALTER TABLE `Artists`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
