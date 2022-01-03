-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 03, 2022 at 04:28 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`jobid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
