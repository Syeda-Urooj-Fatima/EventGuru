-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2018 at 10:22 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ravens_eventgru`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE IF NOT EXISTS `Accounts` (
  `UserName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`UserName`, `Password`, `FirstName`, `LastName`, `Gender`, `Email`, `IsAdmin`) VALUES
('ali', 'root', 'Ali', 'Azhar', 'Male', 'ali@gmail.com', 1),
('ayesha', 'root', 'Ayesha', 'Tahir', 'Female', 'ayesha@gmail.com', 1),
('danial', 'root', 'Danial', 'Ahmed', 'Male', 'danial@gmail.com', 1),
('haseeb', 'root', 'Haseeb', 'Awan', 'Male', 'haseeb@gmail.com', 1),
('khalid', 'root', 'Khalid', 'Dot', 'Male', 'khalid@gmail.com', 1),
('qadir', 'root', 'Abdul', 'Qadir', 'Male', 'qadir@gmail.com', 1),
('rafay', 'root', 'Rafay', 'Mehfooz', 'Male', 'rafay@gmail.com', 1),
('urooj', 'root', 'Urooj', 'Fatima', 'Female', 'urooj@gmail.com', 1),
('usama', 'root', 'Usama', 'Baig', 'Male', 'usama@gmail.com', 1),
('uzair', 'root', 'Uzair', 'Zia', 'Male', 'uzair@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SocietyId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`),
  KEY `bfk` (`SocietyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`username`, `SocietyId`) VALUES
('haseeb', '1'),
('usama', '10'),
('danial', '2'),
('urooj', '3'),
('qadir', '4'),
('ayesha', '5'),
('ali', '6'),
('uzair', '7'),
('rafay', '8'),
('khalid', '9');

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE IF NOT EXISTS `Event` (
  `EventId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `EventTitle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PosterPath` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EventTime` time NOT NULL,
  `EventDate` date NOT NULL,
  `VenueAddress` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VenuLat` float NOT NULL,
  `VenuLng` float NOT NULL,
  `ContactPhone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TicketPrice` int(11) DEFAULT NULL,
  `VideoLink` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactEmail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SocietyId` int(11) NOT NULL,
  `Googleform` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`EventId`),
  UNIQUE KEY `EventId_3` (`EventId`),
  UNIQUE KEY `EventTitle` (`EventTitle`),
  KEY `EventId` (`EventId`),
  KEY `EventId_2` (`EventId`),
  KEY `Event_fk_1` (`SocietyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`EventId`, `EventTitle`, `Description`, `Category`, `PosterPath`, `EventTime`, `EventDate`, `VenueAddress`, `VenuLat`, `VenuLng`, `ContactPhone`, `TicketPrice`, `VideoLink`, `ContactEmail`, `SocietyId`, `Googleform`) VALUES
(1, 'Throwathon', 'Greate Event', 'Hackathon', 'images/event1.png', '11:00:00', '2018-01-31', 'Address of Event', 30.1234, 70.1235, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 1, ''),
(2, 'SEECE Futsal  League', 'Greate Event', 'Sports', 'images/event2.png', '11:00:00', '2018-01-31', 'Address of Event', 31.1234, 71.1235, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 2, ''),
(3, 'Advanced Workshop On Internet Of Things', 'Greate Event', 'Seminar', 'images/event3.png', '11:00:00', '2018-01-31', 'Address of Event', 32.1235, 72.1235, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 3, ''),
(4, 'SMME Gaming Fest', 'Greate Event', 'EGaming', 'images/event4.png', '11:00:00', '2018-01-31', 'Address of Event', 33.1235, 73.1235, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 4, ''),
(5, 'Buzz Night 17', 'Greate Event', 'Concert', 'images/event5.png', '11:00:00', '2018-01-31', 'Address of Event', 30.5679, 70.5679, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 5, ''),
(6, 'Intra NUST Declamation Championship', 'Greate Event', 'Debate', 'images/event6.png', '11:00:00', '2018-01-31', 'Address of Event', 31.5679, 71.5679, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 6, ''),
(7, 'Salute to Quaid', 'Its just an event', 'National Day', 'images/event7.png', '11:00:00', '2018-01-31', 'Address of Event', 32.5679, 72.5679, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 7, ''),
(8, 'Music Olympiad', 'Its just an event', 'Olympiad', 'images/event8.png', '11:00:00', '2018-01-31', 'Address of Event', 33.5679, 73.5679, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 8, ''),
(9, 'A Day For Orphans', 'Its just an event', 'Community Service', 'images/event9.png', '11:00:00', '2018-01-31', 'Address of Event', 30.6333, 70.6333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 9, ''),
(10, 'TAD Hack', 'Its just an event', 'Hackathon', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 30.3333, 70.3333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 10, ''),
(11, 'SEECS Sports Gala 2017', 'Its just an event', 'Sports', 'images/event11.png', '11:00:00', '2018-01-31', 'Address of Event', 31.3333, 71.3333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 1, ''),
(12, 'TABA Tech Talk', 'Its just an event', 'Seminar', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 32.3333, 72.3333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 2, ''),
(13, 'NUS E-Gaming Tournament', 'Its just an event', 'EGaming', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 33.3333, 73.3333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 3, ''),
(14, 'SEECS Got Talent', 'Its just an event', 'Concert', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 30.4333, 70.4333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 4, ''),
(15, 'NDS Fortnight Debates XII', 'Its just an event', 'Debate', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 31.4333, 71.4333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 5, ''),
(16, 'Millat Ka Pasbaan', 'Its just an event', 'National Day', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 32.4333, 72.4333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 6, ''),
(17, 'NUST Olympiad 17', 'Its just an event', 'Olympiad', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 33.4333, 73.4333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 7, ''),
(18, 'TYC Chadar Street Store', 'Its just an event', 'Community Service', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 34.4333, 74.4333, '03435656123', 300, 'https://youtu.be/9B7UIYZrpZg', 'society@gmail.com', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE IF NOT EXISTS `Feedback` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Eventid` int(10) unsigned NOT NULL,
  `Comments` varchar(1300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `UserName` (`Username`),
  KEY `EventID` (`Eventid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Rate`
--

CREATE TABLE IF NOT EXISTS `Rate` (
  `SocietyId` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `RatingId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`RatingId`),
  KEY `ratsoc` (`SocietyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Society`
--

CREATE TABLE IF NOT EXISTS `Society` (
  `SocietyId` int(11) NOT NULL,
  `UniversityId` int(11) NOT NULL,
  `SocietyName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`SocietyId`),
  KEY `Society_fk_1` (`UniversityId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Society`
--

INSERT INTO `Society` (`SocietyId`, `UniversityId`, `SocietyName`, `S_Rating`) VALUES
(1, 1, 'ACM', 3),
(2, 1, 'IEEE', 4),
(3, 2, 'SGA', 5),
(4, 2, 'TABA', 3),
(5, 3, 'SADA', 1),
(6, 3, 'FSS', 2),
(7, 4, 'CBS', 3),
(8, 4, 'CBM', 4),
(9, 5, 'BMC', 3),
(10, 5, 'SDP', 4);

-- --------------------------------------------------------

--
-- Table structure for table `University`
--

CREATE TABLE IF NOT EXISTS `University` (
  `UniversityId` int(11) NOT NULL,
  `UniversityName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`UniversityId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `University`
--

INSERT INTO `University` (`UniversityId`, `UniversityName`) VALUES
(1, 'National University of Science and Tech'),
(2, 'Lahore University of Management Sciences'),
(3, 'FAST Nuces'),
(4, 'Comsats Institute of Science and Tech'),
(5, 'Bahria University, Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `WebsiteComments`
--

CREATE TABLE IF NOT EXISTS `WebsiteComments` (
  `CommentID` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comments` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `WebsiteComments`
--

INSERT INTO `WebsiteComments` (`CommentID`, `Name`, `Comments`) VALUES
(1, 'Danial Ahmed', 'EventGuru has packed everything at one place. A recommendation to all.'),
(2, 'Haseeb Awan', 'Nice website.'),
(3, 'Ayesha Anjum', 'I enjoy the functionalities provided by Event Guru.'),
(4, 'Bushra Hassan', 'Kudos Event Guru for such a pervasive platform.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `Event_fk_1` FOREIGN KEY (`SocietyId`) REFERENCES `Society` (`SocietyId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `Feedback_fk_1` FOREIGN KEY (`Username`) REFERENCES `Accounts` (`UserName`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Feedback_fk_2` FOREIGN KEY (`Eventid`) REFERENCES `Event` (`EventId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Rate`
--
ALTER TABLE `Rate`
  ADD CONSTRAINT `ratsoc` FOREIGN KEY (`SocietyId`) REFERENCES `Society` (`SocietyId`);

--
-- Constraints for table `Society`
--
ALTER TABLE `Society`
  ADD CONSTRAINT `Society_fk_1` FOREIGN KEY (`UniversityId`) REFERENCES `University` (`UniversityId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
