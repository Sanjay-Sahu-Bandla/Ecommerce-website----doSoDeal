-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 06:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `city`, `state`, `pincode`) VALUES
('5e314e788b5a3', 'Sanjay Sahu', 'Bandla', 'sanjaysahubandla@gmail.com', 'ndex.php', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001),
('5e31588c4a83b', 'Koushik', 'putti', 'ks@gmail.com', '1234', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001),
('5e315f074d890', 'sanjusamsung@gmail.com', 'samsung', 'sanjusamsung@gmail.com', '11112', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001),
('5e3162a9dfb8b', 'ssb', 'ssb2', 'ssb2@gmail.com', 'ssb2', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001),
('5e318aea80612', 'Nehith', 'Jannepally', 'nehithjannepally@gmail.com', '11112222', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001),
('5e318d1d7ab57', 'Sanjay', 'samsung', 'sanjusamsung@gmail.com', '1111', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001),
('5e318de96b312', 'Sanjay', 'samsung', 'sanjusamsung@gmail.com', '1111', 'Sai nagar Rd no 2, Varni Rd', 'Nizamabad', 'Telangana', 503001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
