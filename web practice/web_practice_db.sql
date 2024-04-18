-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 08:07 PM
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
-- Database: `web_practice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(155) NOT NULL,
  `room_desc` varchar(255) NOT NULL,
  `room_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type`, `room_desc`, `room_price`) VALUES
(1, 'Single', 'A cozy room with a single bed', 50),
(2, 'Double', 'A spacious room with a double bed', 80),
(3, 'Suite', 'A luxurious suite with a king-sized bed', 150),
(4, 'Family', 'A family room with multiple beds', 120),
(5, 'Single', 'A cozy room with a single bed', 50),
(6, 'Double', 'A spacious room with a double bed', 80),
(7, 'Suite', 'A luxurious suite with a king-sized bed', 150),
(8, 'Family', 'A family room with multiple beds', 120),
(9, 'Single', 'A cozy room with a single bed', 50),
(10, 'Double', 'A spacious room with a double bed', 80),
(11, 'Suite', 'A luxurious suite with a king-sized bed', 150),
(12, 'Family', 'A family room with multiple beds', 120),
(13, 'Single', 'A cozy room with a single bed', 50),
(14, 'Double', 'A spacious room with a double bed', 80),
(15, 'Suite', 'A luxurious suite with a king-sized bed', 150),
(16, 'Family', 'A family room with multiple beds', 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Abdullah', 'abdullah@gmail.com', '$2y$10$pKd3UHnyLD/t5CVBpj42JOTBmd8FPv8HhUAz9vpZsv1MWDdxrW8Sm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
