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
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_content` varchar(250) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(87, 'vasudevan', 'gowtham', '8„eÐóç»z-ŽòÎÌèi*', 'unread', '2020-12-25 08:37:38'),
(88, 'vasudevan', 'Manickam', '8„eÐóç»z-ŽòÎÌèi*', 'unread', '2020-12-25 08:37:44'),
(89, 'phpmyadmin', 'gowtham', '8„eÐóç»z-ŽòÎÌèi*', 'unread', '2020-12-25 08:47:49'),
(90, 'new', 'Manickam', '8„eÐóç»z-ŽòÎÌèi*', 'unread', '2020-12-25 09:06:55'),
(91, 'new', 'Manickam', 'jÝx/œ\0oäÒ¦“ì–†j', 'unread', '2020-12-25 09:07:03'),
(92, 'new', 'vasudevan', '8„eÐóç»z-ŽòÎÌèi*', 'read', '2020-12-25 09:09:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
