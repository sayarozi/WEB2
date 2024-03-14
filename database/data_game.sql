-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2024 at 03:44 PM
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
-- Database: `gamepc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_game`
--

CREATE TABLE `data_game` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `genre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tanggal rilis` date NOT NULL,
  `pengembang` varchar(50) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `data_game`
--

INSERT INTO `data_game` (`id`, `judul`, `genre`, `tanggal rilis`, `pengembang`, `gambar`) VALUES
(1, 'God of War Ragnarök\r\n', 'Action-adventure, hack and slash', '2022-09-09', 'Santa Monica Studio', 'gow.jpg'),
(2, 'Monster Hunter: World', 'Action role-playing', '2018-01-26', 'Capcom', 'mhw.jpg'),
(3, 'Resident Evil 7: Biohazard', 'Survival horror', '2017-01-05', 'Capcom', 're7.jpg'),
(4, 'Devil May Cry 5', 'Action-adventure, hack and slash', '2019-03-08', 'Capcom', 'dmc5.jpg'),
(5, 'Wolfenstein II: The New Colossus', 'Action-adventure, first-person shooter', '2017-10-27', 'MachineGames', 'wolfenstein.jpg'),
(6, 'Bloodborne', 'Action role-playing', '2015-03-12', 'FromSoftware', 'Bloodborne.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_game`
--
ALTER TABLE `data_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_game`
--
ALTER TABLE `data_game`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
