-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 01:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ypakp`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `start` date NOT NULL,
  `end` date NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `formType` varchar(200) NOT NULL,
  `creator_username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`start`, `end`, `id`, `username`, `formType`, `creator_username`) VALUES
('2021-01-06', '2021-01-09', 149, 'rina', 'Άδεια ειδικού Σκοπού', 'rina'),
('2021-02-06', '2021-02-06', 150, 'rina', 'Άδεια ειδικού Σκοπού', 'rina'),
('2021-01-01', '2021-01-12', 151, 'celeste', 'Άδεια ειδικού Σκοπού', 'celeste'),
('2021-02-06', '2021-02-06', 153, 'makis', 'Αναστολή Σύμβασης', 'owner'),
('2021-01-30', '2021-02-06', 155, 'celeste', 'Άδεια ειδικού Σκοπού', 'peos'),
('2021-01-30', '2021-02-06', 157, 'kostas', 'Άδεια ειδικού Σκοπού', 'kostas'),
('2021-02-06', '2021-03-12', 158, 'kostas', 'Άδεια ειδικού Σκοπού', 'kostas'),
('2021-01-05', '2021-01-09', 159, 'kostas', 'Άδεια ειδικού Σκοπού', 'kostas'),
('2021-01-30', '2021-02-04', 160, 'celeste', 'Τηλεργασία', 'owner'),
('2021-02-06', '2021-03-30', 161, 'robin', 'Αναστολή Σύμβασης', 'owner'),
('2021-02-06', '2021-03-06', 162, 'zucc', 'Αναστολή Σύμβασης', 'owner'),
('2021-02-06', '2021-04-22', 164, 'rina', 'Αναστολή Σύμβασης', 'owner'),
('2020-12-01', '2021-01-08', 167, 'tesla', 'Αναστολή Σύμβασης', 'owner'),
('2021-01-14', '2021-01-29', 168, 'tesla', 'Τηλεργασία', 'owner'),
('2021-01-13', '2021-02-06', 169, 'rina', 'Τηλεργασία', 'owner'),
('2021-02-06', '2021-04-08', 170, 'celeste', 'Τηλεργασία', 'owner'),
('2021-02-06', '2021-04-02', 173, 'zucc', 'Άδεια ειδικού Σκοπού', 'zucc'),
('2021-01-13', '2021-01-13', 180, 'celeste', 'Τηλεργασία', 'owner'),
('2021-01-13', '2021-01-13', 181, 'celeste', 'Τηλεργασία', 'owner'),
('2021-01-13', '2021-01-13', 182, 'rina', 'Αναστολή Σύμβασης', 'owner'),
('2021-01-13', '2021-01-13', 183, 'rina', 'Αναστολή Σύμβασης', 'owner'),
('2021-01-04', '2021-01-12', 187, 'zucc', 'Άδεια ειδικού Σκοπού', 'zucc'),
('2021-01-11', '2021-01-13', 188, 'tesla', 'Αναστολή Σύμβασης', 'owner'),
('2021-01-13', '2021-01-13', 189, 'tesla', 'Τηλεργασία', 'owner'),
('2021-01-30', '2021-02-06', 218, 'tesla', 'Τηλεργασία', 'owner'),
('2020-11-03', '2020-12-31', 220, 'tesla', 'Άδεια ειδικού Σκοπού', 'tesla'),
('2021-02-06', '2021-05-07', 224, 'tesla', 'Άδεια ειδικού Σκοπού', 'tesla'),
('2021-02-06', '2021-03-06', 225, 'tesla', 'Άδεια ειδικού Σκοπού', 'tesla'),
('2021-02-05', '2021-02-06', 229, 'tesla', 'Άδεια ειδικού Σκοπού', 'tesla'),
('2021-02-06', '2021-02-06', 232, 'tesla', 'Άδεια ειδικού Σκοπού', 'tesla'),
('2021-01-30', '2021-02-06', 236, 'kati', 'Άδεια ειδικού Σκοπού', 'kati'),
('2021-01-16', '2021-01-30', 239, 'kati', 'Άδεια ειδικού Σκοπού', 'kati'),
('2021-01-16', '2021-01-30', 240, 'kati', 'Άδεια ειδικού Σκοπού', 'kati'),
('2021-01-14', '2021-04-10', 246, 'zucc', 'Αναστολή Σύμβασης', 'owner'),
('2021-01-14', '2021-01-23', 247, 'zucc', 'Άδεια ειδικού Σκοπού', 'zucc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `name` varchar(65) NOT NULL,
  `surname` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` int(11) NOT NULL,
  `afm` int(11) NOT NULL,
  `typeOfUser` tinyint(1) NOT NULL,
  `companyName` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `isParent` tinyint(1) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `surname`, `password`, `email`, `phone`, `afm`, `typeOfUser`, `companyName`, `address`, `isParent`, `gender`) VALUES
(18, 'tesla', 'Ηλίας', 'Μουσκής', '123', 'elon@must.com', 2108922348, 214748364, 0, 'bethesda', 'Βουλιαγμένης 223', 1, 'male'),
(20, 'owner', 'todd', 'howard', '123', 'todd@bethesda.com', 2108989637, 924234249, 1, 'Bethesda', 'Skyrim 24', 0, 'male'),
(21, 'zucc', 'Μάρκος', 'Ζουκερβέργης', '123', 'always@listening.com', 2108924235, 134234123, 0, 'bethesda', 'Καλύμνου 5', 1, 'male'),
(22, 'rina', 'Sawa', 'Yama', '123', 'good@music.com', 2102102102, 214748364, 0, 'Bethesda', 'Panormou 42', 1, 'female'),
(23, 'celeste', 'Lena', 'Reine', '123', 'good@soundtrack.com', 2108934637, 232423424, 0, 'Bethesda', 'Πωσειδώνος 323', 0, 'other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
