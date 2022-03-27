-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 02:48 PM
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
(1, '2022-03-21', '22', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(2, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'png', 0, 0, 0, 'images/project.png', 8, 1),
(3, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(4, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(5, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(6, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(7, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(8, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(9, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(10, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(11, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(12, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(13, '2022-03-21', 'eeee', 'rrr', 0, 0, 0, 'images/blue-fractal-blue-and-black-flowers-print-poster-wallpaper-preview.jpg', 8, 1),
(14, '2022-03-21', 'eeee', 'rrr', 0, 0, 0, 'images/blue-fractal-blue-and-black-flowers-print-poster-wallpaper-preview.jpg', 8, 1),
(15, '2022-03-21', 'eeee', 'rrr', 0, 0, 0, 'images/blue-fractal-blue-and-black-flowers-print-poster-wallpaper-preview.jpg', 8, 1),
(16, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(17, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1),
(18, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(19, '2022-03-21', 'qqqqqqqqqqqqqqqq', 'w', 0, 0, 0, 'images/project.png', 8, 1),
(20, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/119566795_1200478063656580_5701235673310031621_o.jpg', 8, 1),
(21, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/abstract-dark-wallpaper.jpg', 8, 1),
(22, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(23, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(24, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(25, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/project.png', 8, 1),
(26, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'lasanthiwathsala473@gmail.com', 0, 0, 0, 'images/project.png', 8, 1),
(27, '2022-03-25', 'qqqqqqqqqqqqqqqq', 'erere', 0, 0, 0, 'images/dark-wallpapers.jpg', 8, 1);

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
  `value` int(11) NOT NULL,
  `Admin_ID` int(11) DEFAULT NULL,
  `Badge_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_ID`, `Name`, `value`, `Admin_ID`, `Badge_ID`) VALUES
(2, '', 2000, NULL, NULL),
(3, 'Software development', 2000, NULL, NULL),
(4, 'UI designer', 1000, NULL, NULL);

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
(5, 1, 'eeee', 'eeeeeeeeeeee', '2022-03-25 14:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `question_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`question_id`, `question`, `answer`) VALUES
(1, 'how to register?', 'answer for the question'),
(6, 'how to register as service provider?', 'answer1'),
(12, 'how to make a job post?', ' first you have to register and click on jobpost. then fill the form and submit'),
(13, 'how to make a payment?', ' payhere');

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
  `Jobpost_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire_person`
--

INSERT INTO `hire_person` (`HP_ID`, `Fname`, `Lname`, `Gender`, `Email`, `Mobile`, `Home`, `DOB`, `Jobpost_ID`) VALUES
(1, 'Harry', 'Potter', 'Male', 'harry@gmail.com', 711245784, 114578451, '1999-04-01', NULL),
(2, 'Hermoine', 'Granger', 'Female', 'hermine@gmail.com', 711258774, 114418451, '1998-04-12', NULL),
(3, 'Ron', 'Weeslay', 'Male', 'ron@gmail.com', 711258417, 115008451, '1998-07-22', NULL);

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
(1, '2022-03-08', 'our website currently unavailable due to the maintenance', NULL),
(52, '2022-03-07', 'welcome to our new website', NULL),
(53, '2022-03-22', 'our newly launched website is intended to be faster and easy to use', NULL),
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
('Kusal Mendis', 'kusal123', '1998-10-14', 'colombo', 'kusal@gmail.com', '071123456', '123456', 'user1', 7);

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
  `UserName` varchar(25) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`SP_ID`, `UserName`, `Fname`, `Lname`, `Gender`, `Email`, `address`, `contact`, `DOB`, `description`) VALUES
(3, 'david123', 'david', 'Watson', 'Male', 'david@gmail.com', 'colombo', 1245789451, '2000-05-11', 'Designer'),
(5, 'hansika34', 'Hansika', 'Diddugoda', 'felame', 'hansika@gmail.com', 'colombo', 714542421, '1998-05-13', 'software engineer'),
(6, 'david456', 'david', 'potter', 'male', 'david@gmail.com', 'Kandy', 714542521, '1999-05-20', 'Ui designer');

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `id` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `raterId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `rate` float NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `star_rating`
--

INSERT INTO `star_rating` (`id`, `jobId`, `raterId`, `name`, `rate`, `comment`) VALUES
(1, 0, 0, 'hansika', 0, 'good'),
(2, 0, 0, 'hansika', 0, 'good'),
(3, 0, 0, 'hansika', 1.5, 'good'),
(4, 0, 0, 'shawn', 5, 'mendes'),
(5, 0, 0, 'potter', 3.5, 'harry'),
(6, 0, 0, 'ron', 2.7, 'weaslay'),
(7, 0, 0, 'User', 3, 'nice job'),
(8, 0, 0, 'User2', 4.5, 'good service, nice job!'),
(9, 0, 0, 'ron', 3.4, 'good'),
(10, 0, 0, 'ron', 2.6, 'good');

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
-- Indexes for table `co-admin`
--
ALTER TABLE `co-admin`
  ADD PRIMARY KEY (`Co-Admin_ID`),
  ADD KEY `manage` (`Admin_ID`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`question_id`);

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
  ADD PRIMARY KEY (`SP_ID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

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
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `Ad_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `Badge_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `co-admin`
--
ALTER TABLE `co-admin`
  MODIFY `Co-Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hire_person`
--
ALTER TABLE `hire_person`
  MODIFY `HP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `star_rating`
--
ALTER TABLE `star_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
