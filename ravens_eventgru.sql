-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2018 at 11:26 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravens_eventgru`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
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
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UserName`, `Password`, `FirstName`, `LastName`, `Gender`, `Email`, `IsAdmin`) VALUES
('ayesha', 'root', 'Ayesha', 'Tahir', 'Female', 'ayesha@gmail.com', 1),
('qadir', 'root', 'Abdul', 'Qadir', 'Male', 'qadir@gmail.com', 1),
('usama', 'root', 'Usama', 'Baig', 'Male', 'usama@gmail.com', 1),
('uzair', 'root', 'Uzair', 'Zia', 'Male', 'uzair@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `EventId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `Googleform` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`EventId`),
  UNIQUE KEY `EventId_3` (`EventId`),
  KEY `EventId` (`EventId`),
  KEY `EventId_2` (`EventId`),
  KEY `Event_fk_1` (`SocietyId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventId`, `EventTitle`, `Description`, `Category`, `PosterPath`, `EventTime`, `EventDate`, `VenueAddress`, `VenuLat`, `VenuLng`, `ContactPhone`, `TicketPrice`, `VideoLink`, `ContactEmail`, `SocietyId`, `Googleform`) VALUES
(1, 'Science Bee', 'Greate Event', 'Hackathon', 'images/event1.png', '11:00:00', '2018-01-31', 'Address of Event', 30.1234, 70.1235, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 1, 'https://goo.gl/RZq6r4'),
(2, 'Sports Gala', 'Greate Event', 'Sports', 'images/event2.png', '11:00:00', '2018-01-31', 'Address of Event', 31.1234, 71.1235, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 2, 'https://goo.gl/RZq6r4'),
(3, 'Engineer 3.0', 'Greate Event', 'Seminar', 'images/event3.png', '11:00:00', '2018-01-31', 'Address of Event', 32.1235, 72.1235, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 3, 'https://goo.gl/RZq6r4'),
(4, 'Dota2 Frenzies', 'Greate Event', 'EGaming', 'images/event4.png', '11:00:00', '2018-01-31', 'Address of Event', 33.1235, 73.1235, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 4, 'https://goo.gl/RZq6r4'),
(5, 'Buzz Night', 'Greate Event', 'Concert', 'images/event5.png', '11:00:00', '2018-01-31', 'Address of Event', 30.5679, 70.5679, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 5, 'https://goo.gl/RZq6r4'),
(6, 'Buzme Adab', 'Greate Event', 'Debate', 'images/event6.png', '11:00:00', '2018-01-31', 'Address of Event', 31.5679, 71.5679, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 6, 'https://goo.gl/RZq6r4'),
(7, 'My Event 7', 'Its just an event', 'National Day', 'images/event7.png', '11:00:00', '2018-01-31', 'Address of Event', 32.5679, 72.5679, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 7, 'https://goo.gl/RZq6r4'),
(8, 'My Event 8', 'Its just an event', 'Olympiad', 'images/event8.png', '11:00:00', '2018-01-31', 'Address of Event', 33.5679, 73.5679, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 8, 'https://goo.gl/RZq6r4'),
(9, 'My Event 9', 'Its just an event', 'Community Service', 'images/event9.png', '11:00:00', '2018-01-31', 'Address of Event', 30.6333, 70.6333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 9, 'https://goo.gl/RZq6r4'),
(10, 'My Event 10', 'Its just an event', 'Hackathon', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 30.3333, 70.3333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 10, 'https://goo.gl/RZq6r4'),
(11, 'My Event 12', 'Its just an event', 'Sports', 'images/event11.png', '11:00:00', '2018-01-31', 'Address of Event', 31.3333, 71.3333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 1, 'https://goo.gl/RZq6r4'),
(12, 'My Event 12', 'Its just an event', 'Seminar', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 32.3333, 72.3333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 2, 'https://goo.gl/RZq6r4'),
(13, 'My Event 13', 'Its just an event', 'EGaming', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 33.3333, 73.3333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 3, 'https://goo.gl/RZq6r4'),
(14, 'My Event 14', 'Its just an event', 'Concert', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 30.4333, 70.4333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 4, 'https://goo.gl/RZq6r4'),
(15, 'My Event 15', 'Its just an event', 'Debate', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 31.4333, 71.4333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 5, 'https://goo.gl/RZq6r4'),
(16, 'My Event 16', 'Its just an event', 'National Day', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 32.4333, 72.4333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 6, 'https://goo.gl/RZq6r4'),
(17, 'My Event 17', 'Its just an event', 'Olympiad', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 33.4333, 73.4333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 7, 'https://goo.gl/RZq6r4'),
(18, 'My Event 18', 'Its just an event', 'Community Service', 'images/event10.png', '11:00:00', '2018-01-31', 'Address of Event', 34.4333, 74.4333, '03435656123', 300, 'https://www.youtube.com/embed/XGSy3_Czz8k', 'society@gmail.com', 8, 'https://goo.gl/RZq6r4');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Eventid` int(10) UNSIGNED NOT NULL,
  `Comments` varchar(1300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `UserName` (`Username`),
  KEY `EventID` (`Eventid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `SocietyId` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `RatingId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`RatingId`),
  KEY `ratsoc` (`SocietyId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`SocietyId`, `Rating`, `RatingId`) VALUES
(1, 5, 1),
(1, 4, 2),
(9, 4, 3),
(9, 2, 4),
(8, 5, 5),
(8, 3, 6),
(6, 2, 7),
(6, 3, 8),
(2, 3, 9),
(2, 4, 10),
(10, 5, 11),
(10, 4, 12),
(4, 4, 13),
(4, 5, 14),
(3, 4, 15),
(3, 3, 16),
(5, 4, 17),
(5, 3, 18),
(7, 4, 19),
(7, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

DROP TABLE IF EXISTS `society`;
CREATE TABLE IF NOT EXISTS `society` (
  `SocietyId` int(11) NOT NULL,
  `UniversityId` int(11) NOT NULL,
  `SocietyName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`SocietyId`),
  KEY `Society_fk_1` (`UniversityId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`SocietyId`, `UniversityId`, `SocietyName`, `S_Rating`) VALUES
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
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `UniversityId` int(11) NOT NULL,
  `UniversityName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`UniversityId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`UniversityId`, `UniversityName`) VALUES
(1, 'National University of Science and Tech'),
(2, 'Lahore University of Management Sciences'),
(3, 'FAST Nuces'),
(4, 'Comsats Institute of Science and Tech'),
(5, 'Bahria University, Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `websitecomments`
--

DROP TABLE IF EXISTS `websitecomments`;
CREATE TABLE IF NOT EXISTS `websitecomments` (
  `CommentID` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comments` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websitecomments`
--

INSERT INTO `websitecomments` (`CommentID`, `Name`, `Comments`) VALUES
(1, 'Danial Ahmed', 'EventGuru has packed everything at one place. A recommendation to all.'),
(2, 'Haseeb Awan', 'Nice website.'),
(3, 'Ayesha Anjum', 'I enjoy the functionalities provided by Event Guru.'),
(4, 'Bushra Hassan', 'Kudos Event Guru for such a pervasive platform.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `Event_fk_1` FOREIGN KEY (`SocietyId`) REFERENCES `society` (`SocietyId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Feedback_fk_1` FOREIGN KEY (`Username`) REFERENCES `accounts` (`UserName`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Feedback_fk_2` FOREIGN KEY (`Eventid`) REFERENCES `event` (`EventId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `ratsoc` FOREIGN KEY (`SocietyId`) REFERENCES `society` (`SocietyId`);

--
-- Constraints for table `society`
--
ALTER TABLE `society`
  ADD CONSTRAINT `Society_fk_1` FOREIGN KEY (`UniversityId`) REFERENCES `university` (`UniversityId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
