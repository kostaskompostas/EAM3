-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 03:07 PM
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
  `formType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`start`, `end`, `id`, `username`, `formType`) VALUES
('2021-01-12', '2021-01-13', 19, 'peos', 'Άδεια ειδικού Σκοπού'),
('2021-01-12', '2021-01-13', 20, 'peos', 'Άδεια ειδικού Σκοπού'),
('2021-01-01', '2021-01-16', 21, 'peos', 'Αναστολή Σύμβασης'),
('2021-01-14', '2021-01-16', 22, 'peos', 'Αναστολή Σύμβασης'),
('2021-02-03', '2021-02-06', 23, 'peos', 'Τηλεργασία'),
('1969-12-28', '1970-01-01', 24, 'peos', 'Άδεια ειδικού Σκοπού'),
('2021-01-21', '2021-02-02', 25, 'peos', 'Αναστολή Σύμβασης'),
('2021-02-06', '2021-02-02', 26, 'peos', 'Τηλεργασία'),
('2021-01-30', '2021-01-30', 27, 'peos', 'Αναστολή Σύμβασης'),
('2021-01-30', '2021-01-28', 28, 'peos', 'Άδεια ειδικού Σκοπού'),
('2021-01-30', '2021-01-30', 29, 'peos', 'Άδεια ειδικού Σκοπού'),
('2021-01-22', '2021-02-04', 30, 'peos', 'Άδεια ειδικού Σκοπού'),
('2021-04-11', '2021-05-11', 32, 'peos', 'Τηλεργασία');

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
  `isParent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `surname`, `password`, `email`, `phone`, `afm`, `typeOfUser`, `companyName`, `address`, `isParent`) VALUES
(18, 'peos', '3333', 'dddasd', '123', 'eeee@peos.com', 42342, 2147483647, 0, 'ddddd', 'adsddadasd', 0),
(20, 'timos', 'asdfasfd', 'sadfsadf', '123', 'timos@timos.com', 2323, 23, 1, 'hkaluterh', '23', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
