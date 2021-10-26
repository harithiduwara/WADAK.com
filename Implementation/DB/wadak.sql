-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 24, 2021 at 03:06 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Fname`, `Lname`, `Gender`, `Email`, `Mobile`, `Home`, `DOB`) VALUES
(1, 'Malsha', 'Siriwardhane', 'Female', 'malsha@gmail.com', '0712351458', 'Kamburupitiya', '1998-09-10 23:27:35');

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
  `Badge_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`C_ID`, `Name`, `Admin_ID`, `Badge_ID`) VALUES
(3, 'test', 1, NULL),
(4, 'test 2', 1, NULL),
(5, 'test 3', 1, NULL);

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
  `Type` varchar(225) NOT NULL,
  `Co-Admin_ID` int(11) NOT NULL
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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `birthday`, `address`, `email`, `contactno`, `password`) VALUES
('Harith Iduwara', 'Harith', '1998-05-25', '161/1G, Athurugiriya Road, Kottawa', '2019cs060@stu.ucsc.cmb.ac.lk', '0716033886', 'Wadak123^');

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
  ADD PRIMARY KEY (`News_ID`),
  ADD KEY `newsmanage` (`Co-Admin_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `newsmanage` FOREIGN KEY (`Co-Admin_ID`) REFERENCES `co-admin` (`Co-Admin_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
