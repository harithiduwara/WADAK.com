-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 02:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

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
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `Ad_no` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL,
  `is_pending` tinyint(1) NOT NULL,
  `is_advanced_paid` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Co_Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Ad_no`, `date`, `description`, `type`, `is_accepted`, `is_pending`, `is_advanced_paid`, `image`, `user_id`, `Co_Admin_ID`) VALUES
(1, '2022-03-21', '22', 'erere', 0, 0, 1, 'images/project.png', 8, 1),
(2, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'png', 0, 0, 0, 'images/project.png', 8, 1),
(3, '2022-03-21', 'Creative logo designer', 'erere', 0, 0, 1, 'images/project.png', 8, 3),
(4, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(5, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(6, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(7, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 1, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(8, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(9, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 1, 0, 'images/dark-wallpapers.jpg', 8, 1),
(10, '2022-03-21', 'Social media manager', 'w', 0, 0, 1, 'images/dark-wallpapers.jpg', 8, 2),
(11, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(12, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(13, '2022-03-21', 'eeee', 'rrr', 0, 0, 0, 'images/blue-fractal-blue-and-black-flowers-print-poster-wallpaper-preview.jpg', 8, 1),
(14, '2022-03-21', 'eeee', 'rrr', 0, 0, 0, 'images/blue-fractal-blue-and-black-flowers-print-poster-wallpaper-preview.jpg', 8, 1),
(15, '2022-03-21', 'eeee', 'rrr', 0, 0, 0, 'images/blue-fractal-blue-and-black-flowers-print-poster-wallpaper-preview.jpg', 8, 1),
(16, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(17, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(18, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(19, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/project.png', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `Badge_ID` int(11) NOT NULL,
  `Logo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `C_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Admin_ID` int(11) DEFAULT NULL,
  `Badge_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_ID`, `Name`, `image`, `Admin_ID`, `Badge_ID`) VALUES
(1, 'UI/UX Design', '', NULL, NULL),
(2, 'Mobile Design', '', NULL, NULL),
(3, 'Mobile App Development', '', NULL, NULL),
(4, 'Front-End Development', '', NULL, NULL),
(5, 'Back-End Development', '', NULL, NULL),
(6, 'Full Stack Development', '', NULL, NULL),
(7, 'Mobile Game Development', '', NULL, NULL),
(8, 'Coding Tutoring', '', NULL, NULL),
(9, 'Video Game Development', '', NULL, NULL),
(10, 'Web Design', '', NULL, NULL),
(11, 'Editing', '', NULL, NULL),
(12, 'Database Development', '', NULL, NULL),
(13, 'Solution Architecture', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `from` varchar(50) NOT NULL,
  `title` varchar(225) NOT NULL,
  `complain` varchar(50) NOT NULL,
  `sol` varchar(100) NOT NULL,
  `any` varchar(250) NOT NULL,
  `c_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`from`, `title`, `complain`, `sol`, `any`, `c_ID`) VALUES
('lasanthi@gmail.com', 'Report service provider\r\nusername - kevin', 'Did not complete job', '', '', 2),
('malsha@gmail.com', 'Report Service provider\r\nusername - akeera', 'User is unprofessional', '', '', 3),
('harith@gmail.com', 'Report username-dora123', 'Did not complete job', '', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `Invitation_ID` int(11) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `is_reject` tinyint(1) NOT NULL,
  `is_accept` tinyint(1) NOT NULL,
  `HP_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `Co-Admin_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_ID`, `date`, `description`, `Co-Admin_ID`) VALUES
(1, '2022-03-01', 'maintain ongoing', NULL),
(52, '2022-03-15', 'welcome to our new website', NULL),
(53, '2022-03-22', 'our newly launched website is intended to be faster and easy to use', NULL),
(54, '2022-03-20', 'Introducing new features for you', NULL),
(55, '2022-04-01', 'Kindly note that we will be experiencing technical problem due to scheduled maintenance today from 8.00pm to 10.00pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `jobid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `budget` int(11) NOT NULL,
  `jobtype` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT '/WADAK.com/App/uploads/noimage.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`jobid`, `title`, `description`, `budget`, `jobtype`, `uid`, `filename`) VALUES
(1, 'Need a web developer ', 'I need to build a website for my business', 200, 'webdev', 4, NULL),
(9, 'I need a logo designer', 'Need a good quality logo for business!', 29, 'webdev', 7, NULL),
(10, 'I want to bulid a web', 'Any professional web devs?', 200, 'webdev', 4, NULL),
(11, 'I need a social media manager', 'I need more reach to my business', 500, 'graphic', 4, NULL),
(12, 'I Need to design a presentation', 'Any professional designers', 40, 'uidev', 4, NULL),
(13, 'I need to find a web dev', 'Any professional web devs for business!', 200, 'webdev', 9, NULL),
(14, 'Creative Logo Designer', 'Need a good logo for my family business', 500, 'logo', 9, NULL),
(15, 'I need find a logo disigner', 'Good quality logo design for business', 2000, 'logo', 12, NULL),
(16, 'I need a web developer', 'Any professional web devs?', 5, 'webdev', 4, NULL),
(22, 'fewf23', 'f32f32', 100, 'webdev', 4, '/WADAK.com/App/uploads/1641127944-455outer space.jpg'),
(23, 'fewf23', 'f32f32', 100, 'webdev', 4, '/WADAK.com/App/uploads/1641127964-167outer space.jpg');

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
  `instagram` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `birthday`, `address`, `email`, `contactno`, `password`, `userrole`, `uid`, `profileDescription`, `profilePic`, `telegram`, `twitter`, `instagram`, `status`) VALUES
('Admin', 'admin', '1998-05-25', 'Colombo', '2019cs060@stu.ucsc.cmb.ac.lk', '0777852456', 'Harith123@', 'admin', 1, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/1648270780-37male14.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Harith Iduwara', 'coadmin1', '2021-10-02', 'Negambo', 'harith@gmail.com', '0711234565', '123456', 'coadmin', 3, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Shanthaa', 'Shantha123', '2021-10-15', 'Galle', 'SHan@gmail.com', '0712345644', '123456', 'user1', 4, '', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', 'https://www.instagram.com/Shantha', 0),
('Harith Iduwara', 'test2', '2021-10-08', 'Avissawella', 'harithiduw2araucsc@gmail.com', '0772584563', '12345678', 'user1', 5, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('user user', 'user1012', '2021-10-15', 'Galle', 'user123@gmail.com', '0702583694', '123456', 'user1', 6, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Kusal Mendis', 'kusal123', '1998-10-14', 'Kottawa', 'kusal@gmail.com', '0754561238', '123456', 'user1', 7, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('hansi', 'hansi', '1998-01-01', 'Colombo', 'hansi@wadak.com', '0112845789', '123456', 'coadmin', 8, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Chamika', 'Karuna', '1985-05-25', 'Nuwara Eliya', 'chamika@gmail.com', '0784561238', 'Chamika123', 'user1', 9, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Dhanusha', 'Danu123', '1998-09-03', 'Maharagama', 'danu@gmail.com', '0765132456', 'Danu123', 'coadmin', 10, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Sharuk Khan', 'Khan123', '1976-02-05', 'Galle', 'khan123@gmail.com', '0754741963', 'khan123', 'coadmin', 11, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Mahela', 'Mahela123', '1978-05-28', 'Homagama', 'Mahela@gmail.com', '0721321456', 'mahela123@', 'user1', 12, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Wanidu Hasaranga', 'Waniya123', '1999-01-01', 'Nugegoda', 'Wanidu@gmail.com', '0745123456', 'Wanidu123@', 'user1', 14, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Harith Iduwara', 'harithiduwara', '1998-05-25', 'Galle', 'harith.idu98@gmail.com', '0741258963', 'Harith123@', 'user1', 15, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Dalana Pasindu', 'Dalana', '1999-08-01', 'Kandy', 'dalana@gmail.com', '0764561237', 'Dalana123@', 'user1', 16, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Visal Rios', 'VisalRios', '1999-11-28', 'Galle', 'visal@gmail.com', '0748521456', 'Visal123@', 'user1', 17, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Visal Thisuri', 'VisalThisu', '1999-11-28', 'Jaffna', 'visalthisu@gmail.com', '0777456123', 'Visal123@', 'user1', 18, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Dalana Udani', 'Dalanaudani', '1999-08-01', 'Galle', 'dalanaudani@gmail.com', '0784561234', 'Dalana123@', 'user1', 19, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Visal Jayathilake', 'Visal12345', '1999-11-28', 'Thalawathugoda', 'visal.123@gmail.com', '0745612345', 'Visal123@', 'user1', 20, 'Hey there, I\'m using Wadak', '/WADAK.com/App/uploads/defaultProfilePic.jpg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` float NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `star_rating`
--

INSERT INTO `star_rating` (`id`, `name`, `rate`, `comment`) VALUES
(1, 'Hansika', 1.7, 'good'),
(2, 'Malsha', 1.5, 'good'),
(3, 'Harith', 2.2, 'good'),
(4, 'Wathsala', 1.4, 'good'),
(5, 'Devid', 3.4, 'good'),
(6, 'Malsha', 0, 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`Ad_no`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`Badge_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `adminmanage` (`Admin_ID`),
  ADD KEY `badge` (`Badge_ID`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`Invitation_ID`),
  ADD KEY `HP_ID` (`HP_ID`),
  ADD KEY `SP_ID` (`SP_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `Ad_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `Badge_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `c_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `star_rating`
--
ALTER TABLE `star_rating`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `adminmanage` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`),
  ADD CONSTRAINT `badge` FOREIGN KEY (`Badge_ID`) REFERENCES `badges` (`Badge_ID`);

--
-- Constraints for table `invitation`
--
ALTER TABLE `invitation`
  ADD CONSTRAINT `invitation_ibfk_1` FOREIGN KEY (`HP_ID`) REFERENCES `hire_person` (`HP_ID`),
  ADD CONSTRAINT `invitation_ibfk_2` FOREIGN KEY (`SP_ID`) REFERENCES `service_provider` (`SP_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
