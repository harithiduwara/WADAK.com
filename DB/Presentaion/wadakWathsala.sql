-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 02:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `A_ID` int(100) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Place` varchar(500) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Level` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Admin_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`A_ID`, `Name`, `Place`, `Date`, `Level`, `image`, `Admin_Id`) VALUES
(29, 'Diploma in science', 'ESOFt', '2019.08.08-2020.08.08', 'first class', 'images/project.png', 1);

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
(33, '2022-03-27', 'This is a advertisement about online workshop', 'lasanthiwathsala473@gmail.com', 0, 0, 0, 'images/project.png', 8, 1),
(34, '2022-03-27', 'i want to publish it', 'lasanthiwathsala473@gmail.com', 0, 0, 0, 'images/project.png', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(225) NOT NULL,
  `title` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `edu` varchar(250) NOT NULL,
  `expereience` varchar(250) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`h_id`, `h_name`, `title`, `category`, `price`, `edu`, `expereience`, `time`, `date`) VALUES
(1, 'harith', 'java', 'webdev', '12000', 'Bsc', 'High', '', '2022-03-21');

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
  `Badge_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `from` varchar(100) NOT NULL,
  `title` varchar(225) NOT NULL,
  `complain` varchar(100) NOT NULL,
  `sol` varchar(100) NOT NULL,
  `any` varchar(250) NOT NULL,
  `c_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`from`, `title`, `complain`, `sol`, `any`, `c_ID`) VALUES
('lasanthi@gmail.com', 'title', 'com', 'sol', 'ui', 1),
('lasanthiwathsala473@gmail.com', 'q', 'q', 'q', 'images/project.png', 2),
('lasanthiwathsala473@gmail.com', 'q', 'q', 'q', 'images/project.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `post` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(1, 0, 'lkm', 'sgsgdgsd', '2022-03-25 14:16:15'),
(2, 0, 'sdfsdf', 'sdfsdf', '2022-03-25 14:16:24'),
(3, 2, 'aaa', 'akalmn', '2022-03-25 14:18:40'),
(4, 2, 'qqqq', 'qqqqqqqqqqqqqq', '2022-03-25 14:18:56'),
(5, 1, 'eeee', 'eeeeeeeeeeee', '2022-03-25 14:19:06'),
(6, 0, 'rrrr', 'm', '2022-03-25 22:40:35'),
(7, 6, 'u', 'uuuuuuuuuu', '2022-03-25 22:40:52'),
(8, 0, 'lasanthi wathsala', 'can i know best service provider to make website with java?', '2022-03-27 10:58:34'),
(9, 8, 'harith', 'you can view the home page', '2022-03-27 10:59:06');

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
(23, '2021-10-05', 'news 23', NULL),
(56, '2021-10-13', 'qqqqqqqqqqqqqqqq', NULL);

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
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`jobid`, `title`, `description`, `budget`, `jobtype`, `uid`) VALUES
(1, 'Need a web developer ', 'I need to build a website for my business', 200, 'webdev', 0),
(6, 'asdfghjkl', 'asdfghjkl', 1234567890, 'webdev', 0),
(7, 'asdfghjkl', 'asdfghjkl', 1234567890, 'webdev', 0),
(8, 'asdfghjkldfghjk', 'asdfghjklkjhgfdsa', 2000, 'webdev', 4),
(9, 'I need a logo designer', 'Need a good quality logo for business!', 29, 'webdev', 7);

-- --------------------------------------------------------

--
-- Table structure for table `postservice`
--

CREATE TABLE `postservice` (
  `title` varchar(123) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postservice`
--

INSERT INTO `postservice` (`title`, `description`, `category`, `image`, `experience`, `id`) VALUES
('e', 'e', 'app', 'images/project.png', 'high', 3),
('w', 'a', 'webdev', 'images/project.png', 'w', 4);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` varchar(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `Address` varchar(250) NOT NULL,
  `education` varchar(50) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `areas` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `username` varchar(12) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `birthday`, `address`, `email`, `contactno`, `password`, `userrole`, `uid`) VALUES
('Admin', 'admin', '1998-05-25', '161/1G, Athurugiriya Road, Kottawa', '2019cs060@stu.ucsc.cmb.ac.lk', '0716033886', '123456', 'admin', 1),
('CoAdmin', 'coadmin', '1999-07-07', 'kottawa', 'harith@gmail.com', '0716033886', '123456', 'coadmin', 2),
('Harith Iduwara', 'coadmin1', '2021-10-02', 'Kottawa', 'harith@gmail.com', '0716033886', '123456', 'coadmin', 3),
('Shanthaa', 'Shantha123', '2021-10-15', 'Colombo', 'SHan@gmail.com', '0775678211', '123456', 'user1', 4),
('Harith Iduwara', 'test2', '2021-10-08', '161/1G', 'harithiduw2araucsc@gmail.com', '0771254567', '12345678', 'user1', 5),
('user user', 'user1012', '2021-10-15', 'colombo', 'user123@gmail.com', '0716033886', '123456', 'user1', 6),
('Kusal Mendis', 'kusal123', '1998-10-14', 'colombo', 'kusal@gmail.com', '071123456', '123456', 'user1', 7),
('Vithanage Dona Lasanthi Wathsala Vithanage', 'wathsala', '1999-10-06', '473/H,Biyagama', 'lasanthiwathsala473@gmail.com', '0754249340', 'lasan', 'user1', 8);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

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
-- Indexes for table `co-admin`
--
ALTER TABLE `co-admin`
  ADD PRIMARY KEY (`Co-Admin_ID`),
  ADD KEY `manage` (`Admin_ID`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `postservice`
--
ALTER TABLE `postservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`HP_ID`,`SP_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`SP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `A_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `Ad_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `Badge_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `co-admin`
--
ALTER TABLE `co-admin`
  MODIFY `Co-Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `c_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hire_person`
--
ALTER TABLE `hire_person`
  MODIFY `HP_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `postservice`
--
ALTER TABLE `postservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT;

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
