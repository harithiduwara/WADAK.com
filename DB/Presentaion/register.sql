-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 26, 2022 at 05:58 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadak`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `username` varchar(69) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` text NOT NULL,
  `uid` int(11) NOT NULL,
  `profileDescription` varchar(1000) NOT NULL DEFAULT 'Hey there, I''m using Wadak',
  `profilePic` varchar(255) NOT NULL DEFAULT '/WADAK.com/App/uploads/defaultProfilePic.jpg',
  `telegram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `birthday`, `address`, `email`, `contactno`, `password`, `userrole`, `uid`, `profileDescription`, `profilePic`, `telegram`, `twitter`, `instagram`) VALUES
('Admin', 'admin', '1998-05-25', 'Galle', '2019cs060@stu.ucsc.cmb.ac.lk', '', '123456', 'admin', 1, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Harith Iduwara', 'coadmin1', '2021-10-02', 'Galle', 'harith@gmail.com', '', '123456', 'coadmin', 3, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Shanthaa', 'Shantha123', '2021-10-15', 'Galle', 'SHan@gmail.com', '0712345644', '123456', 'user1', 4, '', '', '', '', ''),
('Harith Iduwara', 'test2', '2021-10-08', 'Galle', 'harithiduw2araucsc@gmail.com', '', '12345678', 'user1', 5, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('user user', 'user1012', '2021-10-15', 'Galle', 'user123@gmail.com', '', '123456', 'user1', 6, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Kusal Mendis', 'kusal123', '1998-10-14', 'Galle', 'kusal@gmail.com', '', '123456', 'user1', 7, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('hansi', 'hansi', '1998-01-01', 'Galle', 'hansi@wadak.com', '', '123456', 'coadmin', 8, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Chamika', 'Karuna', '1985-05-25', 'Galle', 'chamika@gmail.com', '', 'Chamika123', 'user1', 9, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Dhanusha', 'Danu123', '1998-09-03', 'Galle', 'danu@gmail.com', '', 'Danu123', 'coadmin', 10, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Sharuk Khan', 'Khan123', '1976-02-05', 'Galle', 'khan123@gmail.com', '', 'khan123', 'coadmin', 11, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Mahela', 'Mahela123', '1978-05-28', 'Galle', 'Mahela@gmail.com', '', 'mahela123@', 'user1', 12, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Wanidu Hasaranga', 'Waniya123', '1999-01-01', 'Galle', 'Wanidu@gmail.com', '', 'Wanidu123@', 'user1', 14, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Harith Iduwara', 'harithiduwara', '1998-05-25', 'Galle', 'harith.idu98@gmail.com', '', 'Harith123@', 'user1', 15, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Dalana Pasindu', 'Dalana', '1999-08-01', 'Galle', 'dalana@gmail.com', '', 'Dalana123@', 'user1', 16, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Visal Rios', 'VisalRios', '1999-11-28', 'Galle', 'visal@gmail.com', '', 'Visal123@', 'user1', 17, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Visal Thisuri', 'VisalThisu', '1999-11-28', 'Galle', 'visalthisu@gmail.com', '', 'Visal123@', 'user1', 18, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', ''),
('Dalana Udani', 'Dalanaudani', '1999-08-01', 'Galle', 'dalanaudani@gmail.com', '', 'Dalana123@', 'user1', 19, '', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
