-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 10:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgoten_answer` varchar(100) NOT NULL,
  `log_in` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_profile`, `user_country`, `user_gender`, `forgoten_answer`, `log_in`) VALUES
(7, 'vasudevan', 'vasudevan142', 'jvasudevanit@gmail.com', 'img/a.jpg', 'India', 'Male', '', 'Offline'),
(8, 'gowtham', 'gowthammayandy', 'gow@gmail.com', 'img/b.png', 'India', 'Male', '', 'Offline'),
(9, 'Manickam', 'password', 'man@gmail.com', 'img/c.png', 'India', 'Male', '', 'online'),
(10, 'ajay', 'ajayajay142', 'ajay@gmail.com', 'img/b.png', 'India', 'Male', '', 'Offline'),
(11, 'praveenkumar', 'praveenkumar', 'praveen@gmail.com', 'img/d.png', 'India', 'Male', '', 'online'),
(12, 'jeeva', 'jeevanantham', 'jee@gmail.com', 'img/e.jpg', 'India', 'Male', '', 'online'),
(14, 'ananth', 'ananthananth', 'a@gmail.com', 'img/f.jpg', 'India', 'Male', '', 'Offline'),
(15, 'phpmyadmin', '1234567890', 'balaji@balaji.com', 'img/b.png', 'India', 'Male', '', 'Offline'),
(16, 'new', '1234567890', 'new@new.com', 'img/e.jpg', 'India', 'Male', '', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
