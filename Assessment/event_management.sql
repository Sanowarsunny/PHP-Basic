-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 04:56 AM
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
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `addresses` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `location_name`, `addresses`, `event_date`, `event_time`, `status`) VALUES
(8, 'Music Fest 2023', 'Join us for a day of live music performances from various artists.', 'music_fest.jpg', 'Central Park, New York', '123 Main Street, New York, NY 10001', '2023-07-07', '12:43:00', 'inactive'),
(9, 'Tech Conference 2023', 'Explore the latest tech trends and innovations in this annual conference.', 'tec_conference.jpg', 'Convention Center, San Francisco', '456 Tech Street, San Francisco, CA 94105', '2023-07-20', '12:23:00', 'active'),
(10, 'Art Exhibition', 'Admire the works of talented artists from around the world.', 'art_exhibition.jpg', 'Metropolitan Museum of Art, Paris', '789 Art Avenue, Paris, France', '2023-07-20', '16:04:00', 'active'),
(11, 'Charity Gala Dinner', 'Raise funds for a noble cause and enjoy a luxurious dinner.', 'Charity_Gala_Dinner.jpg', 'Grand Hotel Ballroom, London', '10 Charity Road, London, UK', '2023-07-12', '17:04:00', 'active'),
(12, 'Sports Tournament', 'Witness fierce competition between top athletes in various sports.', 'Sports_Tournament.jpg', 'Sports Arena, Los Angeles', '789 Sports Street, Los Angeles, CA 90001', '2023-07-10', '09:12:00', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'sanowarhossain3843@gmail.com', 'sunny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
