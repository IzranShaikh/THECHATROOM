-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 04:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `thechatroom`
--

CREATE TABLE `thechatroom` (
  `chat_id` int(11) NOT NULL,
  `chat_sender_name` varchar(200) NOT NULL,
  `chat_time` int(11) NOT NULL,
  `chat_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thechatroom`
--

INSERT INTO `thechatroom` (`chat_id`, `chat_sender_name`, `chat_time`, `chat_content`) VALUES
(1, 'Junaid Khan', 1, 'vrvrevre'),
(2, 'Junaid Khan', 1, 'ewvevw'),
(3, 'Junaid Khan', 1, 'w'),
(4, 'Junaid Khan', 1, 'f'),
(5, 'Junaid Khan', 1, 'l'),
(6, 'Junaid Khan', 1, '<b>vrvreer</b>'),
(7, 'Junaid Khan', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_role` varchar(50) NOT NULL DEFAULT 'user',
  `user_img` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_password`, `user_role`, `user_img`, `status`) VALUES
(1, 'Izran Shaikh', 'izran.s032@gmail.com', 'database', 'admin', 'L.JPG', 1),
(2, 'Junaid Khan', 'junaidfkhan786@gmail.com', 'chor', 'user', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thechatroom`
--
ALTER TABLE `thechatroom`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thechatroom`
--
ALTER TABLE `thechatroom`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
