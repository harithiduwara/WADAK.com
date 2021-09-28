-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 02:27 PM
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
-- Database: `wadak.com`
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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(11) NOT NULL,
  `Type` varchar(225) NOT NULL,
  `Co-Admin_ID` int(11) NOT NULL
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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`),
  ADD KEY `newsmanage` (`Co-Admin_ID`);

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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `newsmanage` FOREIGN KEY (`Co-Admin_ID`) REFERENCES `co-admin` (`Co-Admin_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;