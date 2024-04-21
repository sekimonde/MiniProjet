-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 12:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realstate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `prenom`, `email`, `password`, `image`) VALUES
(1, 'seki', 'lemonde', 'seki.lemonde@gmail.com', '$2y$10$aqyawG7W7tFMPCcZ1OPXkeaCh67tCpsYFZq6CMqQJHS41mVCBSWPu', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `picture`, `name`, `description`, `price`, `idUser`) VALUES
(54, 'app71930016668102381.jpg', 'Big Appartement S+6', ' The apartment has a floor space of 60 square meters and it&rsquo;s located on the first floor, and in it you will find a spacious living room with a stylish sitting area with smart TV with Netflix included, fully equipped kitchen and a dining. The sofa extends as a bed suitable for two people.', 1500, 40),
(55, 'app678566845538867729.jpg', 'Nice Appartement S+1', ' This romantic apartment is perfectly suited for business trip, couple or couple with children. Located in the strong central area includes a cozy studio equiped with nice sofa and queen bed, also there is fully equiped kitchen. Excellent WIFI network.', 750, 40),
(56, 'app3671094695874213.jpeg', 'Amazing house', ' Floor-to-ceiling windows flood the interiors with natural light, illuminating the spacious open-plan living area. The sleek kitchen features state-of-the-art appliances and a minimalist aesthetic, perfect for culinary enthusiasts. Step outside to a tranquil oasis, where a sun-drenched patio and pristine swimming pool invite relaxation and entertaining. With panoramic views of the surrounding landscape and luxurious amenities throughout, this remarkable home offers a perfect balance of comfort and elegance.', 2000, 40),
(57, 'app636765127771145460.jpg', 'Free Appartement S+5', 'The apartment consists of a large bright bedroom with a comfy king-sized bed, a modern fully-equipped kitchen and a sunlit living room with Apple TV and free Netflix account. It is the perfect place to stay for couples looking for a romantic location in the historic centre, within walking distance of some of the most beautiful sceneries you can find in the city and all famous landmarks', 990, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `canPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `image`, `phoneNumber`, `canPost`) VALUES
(7, 'salah', 'salhi', 'salah.salhi@gmail.com', '$2y$10$EJWJnyufCYvwtj6/1kuO/eXLmbe0zs03Tsr.BJ6V8wM0qaLd0RrBq', 'image5878386395169420597.jpg', 90909090, 0),
(40, 'mouine', 'lemonde', 'mouine.lemonde@gmail.com', '$2y$10$.YEiLUCpmcSUkUi0rgYM6.L8BemCpqpShUWv7bTZTxrorxbZsMYri', 'image29525285677288213240.jpg', 55701607, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
