-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 27, 2022 at 01:35 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Home` varchar(50) NOT NULL,
  `DOB` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `Ad_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL,
  `is_pending` tinyint(1) NOT NULL,
  `is_advanced_paid` tinyint(1) NOT NULL,
  `Co-Admin_ID` int(11) NOT NULL,
  `HP_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Admin_ID` int(11) NOT NULL,
  `Badge_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `receiverId` int(11) NOT NULL,
  `chatDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `senderId`, `receiverId`, `chatDate`, `message`, `status`) VALUES
(1, 4, 8, '2022-03-25 09:23:28', 'Hi', 0),
(2, 8, 4, '2022-03-25 09:23:32', 'How are you?', 0),
(3, 8, 4, '2022-03-25 09:23:59', 'Hello', 0),
(4, 4, 8, '2022-03-25 09:24:25', 'Are you busy these days?', 0),
(5, 8, 4, '2022-03-25 09:24:44', 'A bit, what about you', 0),
(6, 4, 4, '2022-03-27 05:06:48', 'Hello Shantha', 0),
(7, 4, 8, '2022-03-27 05:07:20', 'Hello Hansi', 0),
(16, 4, 14, '2022-03-27 10:01:42', 'Hi', 0),
(17, 4, 14, '2022-03-27 10:50:57', 'Hi', 0),
(18, 4, 3, '2022-03-27 11:09:30', 'Hi', 0),
(19, 4, 5, '2022-03-27 11:09:36', 'Hi', 0),
(20, 4, 6, '2022-03-27 11:09:41', 'Hi', 0),
(21, 4, 11, '2022-03-27 11:09:49', 'Hi', 0),
(22, 4, 7, '2022-03-27 11:10:09', 'Hi', 0),
(23, 4, 16, '2022-03-27 11:10:24', 'Hi Dalana', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat1`
--

CREATE TABLE `chat1` (
  `Time` time NOT NULL,
  `Message` text NOT NULL,
  `Date` date NOT NULL,
  `HP_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat2`
--

CREATE TABLE `chat2` (
  `Time` time NOT NULL,
  `Message` text NOT NULL,
  `Date` date NOT NULL,
  `SP_ID` int(11) NOT NULL,
  `HP_ID` int(11) NOT NULL,
  `Co-Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chatInterface`
--

CREATE TABLE `chatInterface` (
  `id` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `chatPerson` int(11) NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chatInterface`
--

INSERT INTO `chatInterface` (`id`, `ownerId`, `chatPerson`, `lastUpdate`, `status`) VALUES
(1, 3, 7, '2022-03-21 20:18:21', 1),
(2, 3, 11, '2022-03-21 20:19:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `co-admin`
--

CREATE TABLE `co-admin` (
  `Co-Admin_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Home` varchar(50) NOT NULL,
  `DOB` datetime NOT NULL,
  `Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hire_person`
--

CREATE TABLE `hire_person` (
  `HP_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Home` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `Jobpost_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `jobCategories`
--

CREATE TABLE `jobCategories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `categoryImage` varchar(200) NOT NULL DEFAULT '/WADAK.com/App/Testing/Reduced/AppDev5.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobCategories`
--

INSERT INTO `jobCategories` (`categoryId`, `categoryName`, `status`, `categoryImage`) VALUES
(1, 'Blockchain Development', 0, '/WADAK.com/App/Testing/Reduced/Blockchain.jpg'),
(2, 'Web3 Application Developments', 0, '/WADAK.com/App/Testing/Reduced/web3.jpg'),
(3, 'Web Development', 0, '/WADAK.com/App/Testing/Reduced/WebDev.jpg'),
(4, 'UI Designing', 0, '/WADAK.com/App/Testing/Reduced/uiDesign2.jpg'),
(5, 'Graphic Designing', 0, '/WADAK.com/App/Testing/Reduced/GraphicDesign.jpg'),
(6, 'Logo Designing', 0, '/WADAK.com/App/Testing/Reduced/LogoDesign3.jpg'),
(7, 'App Development', 0, '/WADAK.com/App/Testing/Reduced/AppDev5.jpg');

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
(1, '2021-10-12', 'news1', NULL),
(2, '2021-10-05', 'news3', NULL),
(5, '2021-10-06', 'news2', NULL),
(10, '2021-10-04', 'news 10', NULL),
(11, '0000-00-00', '', NULL),
(12, '2021-10-04', 'news 12', NULL),
(13, '2021-09-26', 'news 13', NULL),
(14, '2021-10-10', 'news 14', NULL),
(20, '2021-10-31', 'news12', NULL),
(23, '2021-10-05', 'news 23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `postApplication`
--

CREATE TABLE `postApplication` (
  `id` int(11) NOT NULL,
  `applicantId` int(11) NOT NULL,
  `postOwnerId` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `newBudget` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `postType` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postApplication`
--

INSERT INTO `postApplication` (`id`, `applicantId`, `postOwnerId`, `jobid`, `status`, `newBudget`, `description`, `postType`, `created_at`) VALUES
(1, 4, 9, 13, 3, 30000, 'I can build any website!', 'job', '2022-03-26 13:51:09'),
(2, 4, 9, 13, 2, 30000, 'I can build any website!', 'job', '2022-03-26 13:51:09'),
(3, 20, 4, 31, 4, 7500, 'I need a website for my NFT collection', 'service', '2022-03-27 04:36:12');

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
  `filename` varchar(255) DEFAULT '/WADAK.com/App/uploads/noimage.jpg',
  `views` int(11) DEFAULT '0',
  `postType` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`jobid`, `title`, `description`, `budget`, `jobtype`, `uid`, `filename`, `views`, `postType`, `status`) VALUES
(1, 'Need a web developer ', 'I need to build a website for my business', 20000, '3', 4, '/WADAK.com/App/Testing/Reduced/WebDev.jpg', 37, 'job', 1),
(9, 'I need a logo designer', 'Need a good quality logo for business!', 29500, '3', 7, '/WADAK.com/App/Testing/Reduced/LogoDesign3.jpg', 13, 'job', 0),
(10, 'I want to bulid a web', 'Any professional web devs?', 20000, '3', 4, '/WADAK.com/App/Testing/Reduced/WebDev2.jpg', 12, 'job', 1),
(11, 'I need a social media manager', 'I need more reach to my business', 50000, '5', 4, '/WADAK.com/App/Testing/Reduced/AppDev4.jpg', 4, 'job', 0),
(12, 'I Need to design a presentation', 'Any professional designers', 4000, '4', 4, '/WADAK.com/App/Testing/Reduced/GraphicDesign.jpg', 0, 'job', 2),
(13, 'I need to find a web dev', 'Any professional web devs for business!', 20000, '3', 9, '/WADAK.com/App/Testing/Reduced/AppDev3.jpg', 11, 'job', 0),
(14, 'Creative Logo Designer', 'Need a good logo for my family business', 50000, '6', 9, '/WADAK.com/App/Testing/Reduced/LogoDesign2.jpg', 6, 'job', 0),
(15, 'I need find a logo disigner', 'Good quality logo design for business', 20000, '6', 12, '/WADAK.com/App/Testing/Reduced/LogoDesign2.jpg', 0, 'job', 0),
(16, 'I need a web developer', 'Any professional web devs?', 5000, '3', 4, '/WADAK.com/App/Testing/Reduced/uidesign.jpg', 1, 'job', 0),
(24, 'Need a graphic designer', 'A creative one', 5000, '6', 4, '/WADAK.com/App/uploads/1641185258-876Screenshot 2021-12-13 at 08.39.49.png', 75, 'job', 0),
(25, 'I need a NFT creator', 'A talented graphic artist', 5000, '5', 7, '/WADAK.com/App/Testing/Reduced/NFT.jpg', 69, 'job', 0),
(27, 'I need a photographer', 'Good talented one', 500, '7', 7, '/WADAK.com/App/uploads/1641642617-933be67d488bf3b20d068694b0578d4d74e-sticker.png', 0, 'job', 0),
(29, 'Logo design', 'Creative logo', 5000, '6', 4, '/WADAK.com/App/Testing/Reduced/LogoDesign.jpg', 0, 'job', 0),
(30, 'Website', 'Clean website', 10000, '7', 4, '/WADAK.com/App/Testing/Reduced/AppDev4.jpg', 33, 'service', 0),
(31, 'I can build websites', 'I have more than 5 years of experience in this field', 10000, '3', 4, '/WADAK.com/App/Testing/Reduced/appDev2.jpg', 62, 'service', 1),
(32, 'I can build websites', 'I have more than 5 years of experience', 7500, '3', 4, '/WADAK.com/App/Testing/Reduced/appDev.jpg', 27, 'service', 0),
(33, 'I can design logos for your brand', 'Currently working for many bands in Sri Lanka', 15000, '6', 4, '/WADAK.com/App/uploads/1648105660-28LogoDesign2.jpg', 0, 'service', 0),
(34, 'I can generate NFT collections', 'I have a unique rarity tool', 50000, '1', 20, '/WADAK.com/App/uploads/1648355662-762NFT.jpg', 56, 'service', 0);

-- --------------------------------------------------------

--
-- Table structure for table `postReview`
--

CREATE TABLE `postReview` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `birthday`, `address`, `email`, `contactno`, `password`, `userrole`, `uid`, `profileDescription`, `profilePic`, `telegram`, `twitter`, `instagram`, `status`) VALUES
('Admin', 'admin', '1998-05-25', 'Colombo', '2019cs060@stu.ucsc.cmb.ac.lk', '0777852456', 'Harith123@', 'admin', 1, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/male.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Harith Iduwara', 'coadmin1', '2021-10-02', 'Negambo', 'harith@gmail.com', '0711234565', '123456', 'coadmin', 3, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/male6.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Shanthaa', 'Shantha123', '2021-10-15', 'Galle', 'SHan@gmail.com', '0712345644', '123456', 'user1', 4, 'Hello There! Im Shantha, I have more than 5 years of experience', '/WADAK.com/App/Testing/Reduced/male3.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', 'https://www.instagram.com/Shantha', 0),
('Harith Iduwara', 'test2', '2021-10-08', 'Avissawella', 'harithiduw2araucsc@gmail.com', '0772584563', '12345678', 'user1', 5, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/male2.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('user user', 'user1012', '2021-10-15', 'Galle', 'user123@gmail.com', '0702583694', '123456', 'user1', 6, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/male7.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Kusal Mendis', 'kusal123', '1998-10-14', 'Kottawa', 'kusal@gmail.com', '0754561238', '123456', 'user1', 7, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/male10.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Hansi', 'Hansi', '1998-01-01', 'Colombo', 'hansi@wadak.com', '0112845789', '123456', 'coadmin', 8, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/girl5.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Chamika', 'Karuna', '1985-05-25', 'Nuwara Eliya', 'chamika@gmail.com', '0784561238', 'Chamika123', 'user1', 9, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Dhanusha', 'Danu123', '1998-09-03', 'Maharagama', 'danu@gmail.com', '0765132456', 'Danu123', 'coadmin', 10, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Sharuk Khan', 'Khan123', '1976-02-05', 'Galle', 'khan123@gmail.com', '0754741963', 'khan123', 'coadmin', 11, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Mahela', 'Mahela123', '1978-05-28', 'Homagama', 'Mahela@gmail.com', '0721321456', 'mahela123@', 'user1', 12, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Wanidu Hasaranga', 'Waniya123', '1999-01-01', 'Nugegoda', 'Wanidu@gmail.com', '0745123456', 'Wanidu123@', 'user1', 14, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Harith Iduwara', 'harithiduwara', '1998-05-25', 'Galle', 'harith.idu98@gmail.com', '0741258963', 'Harith123@', 'user1', 15, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Dalana Pasindu', 'Dalana', '1999-08-01', 'Kandy', 'dalana@gmail.com', '0764561237', 'Dalana123@', 'user1', 16, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/Testing/Reduced/male13.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Visal Rios', 'VisalRios', '1999-11-28', 'Galle', 'visal@gmail.com', '0748521456', 'Visal123@', 'user1', 17, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Visal Thisuri', 'VisalThisu', '1999-11-28', 'Jaffna', 'visalthisu@gmail.com', '0777456123', 'Visal123@', 'user1', 18, 'Hello There! I\'m using Wadak!!!', '/WADAK.com/App/uploads/defaultProfilePic.jpg', 'https://t.me/Shantha', 'https://twitter.com/shantha', '', 0),
('Visal Jayathilake', 'Visal12345', '1999-11-28', 'Thalawathugoda', 'visal.123@gmail.com', '0745612345', 'Visal123@', 'user1', 20, 'Hey there, I\'m using Wadak', '/WADAK.com/App/Testing/Reduced/male15.jpg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `HP_ID` int(11) NOT NULL,
  `SP_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servicePost`
--

CREATE TABLE `servicePost` (
  `serviceId` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `budget` int(11) NOT NULL,
  `serviceType` varchar(100) NOT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `SP_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Home` int(10) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `id` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `raterId` int(11) NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userLinks`
--

CREATE TABLE `userLinks` (
  `uid` int(11) NOT NULL,
  `telegram` int(11) NOT NULL,
  `twitter` int(11) NOT NULL,
  `insta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`Ad_no`),
  ADD KEY `Co-Admin_ID` (`Co-Admin_ID`),
  ADD KEY `HP_ID` (`HP_ID`),
  ADD KEY `SP_ID` (`SP_ID`);

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
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat1`
--
ALTER TABLE `chat1`
  ADD PRIMARY KEY (`Time`),
  ADD KEY `HP_ID` (`HP_ID`),
  ADD KEY `SP_ID` (`SP_ID`);

--
-- Indexes for table `chat2`
--
ALTER TABLE `chat2`
  ADD PRIMARY KEY (`Time`),
  ADD KEY `SP_ID` (`SP_ID`,`HP_ID`,`Co-Admin_ID`);

--
-- Indexes for table `chatInterface`
--
ALTER TABLE `chatInterface`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co-admin`
--
ALTER TABLE `co-admin`
  ADD PRIMARY KEY (`Co-Admin_ID`),
  ADD KEY `manage` (`Admin_ID`);

--
-- Indexes for table `hire_person`
--
ALTER TABLE `hire_person`
  ADD PRIMARY KEY (`HP_ID`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`Invitation_ID`),
  ADD KEY `HP_ID` (`HP_ID`),
  ADD KEY `SP_ID` (`SP_ID`);

--
-- Indexes for table `jobCategories`
--
ALTER TABLE `jobCategories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `postApplication`
--
ALTER TABLE `postApplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `postReview`
--
ALTER TABLE `postReview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`HP_ID`,`SP_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `servicePost`
--
ALTER TABLE `servicePost`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`SP_ID`);

--
-- Indexes for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `Badge_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chatInterface`
--
ALTER TABLE `chatInterface`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `co-admin`
--
ALTER TABLE `co-admin`
  MODIFY `Co-Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hire_person`
--
ALTER TABLE `hire_person`
  MODIFY `HP_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobCategories`
--
ALTER TABLE `jobCategories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `postApplication`
--
ALTER TABLE `postApplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `postReview`
--
ALTER TABLE `postReview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `servicePost`
--
ALTER TABLE `servicePost`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `star_rating`
--
ALTER TABLE `star_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`HP_ID`) REFERENCES `hire_person` (`HP_ID`),
  ADD CONSTRAINT `advertisement_ibfk_2` FOREIGN KEY (`SP_ID`) REFERENCES `service_provider` (`SP_ID`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `adminmanage` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`),
  ADD CONSTRAINT `badge` FOREIGN KEY (`Badge_ID`) REFERENCES `badges` (`Badge_ID`);

--
-- Constraints for table `co-admin`
--
ALTER TABLE `co-admin`
  ADD CONSTRAINT `manage` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

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
