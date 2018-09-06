-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 05, 2018 at 06:05 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `311 project`
--

-- --------------------------------------------------------

--
-- Table structure for table `batting_performance`
--

DROP TABLE IF EXISTS `batting_performance`;
CREATE TABLE IF NOT EXISTS `batting_performance` (
  `playerID` int(11) NOT NULL,
  `matchID` int(11) NOT NULL,
  `batting_aggregate` int(11) NOT NULL,
  `percentage_run` int(11) NOT NULL,
  `boundary_strike_rate` int(11) NOT NULL,
  `activity_rate` int(11) NOT NULL,
  `batting_strike_rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `best_performance`
--

DROP TABLE IF EXISTS `best_performance`;
CREATE TABLE IF NOT EXISTS `best_performance` (
  `playerID` int(10) NOT NULL,
  `club_name` varchar(30) NOT NULL,
  `opponent` varchar(30) NOT NULL,
  `runs` int(7) NOT NULL,
  `wickets` int(5) NOT NULL,
  `matchID` int(15) DEFAULT NULL,
  `eventID` int(10) DEFAULT NULL,
  KEY `playerID` (`playerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bowling_performance`
--

DROP TABLE IF EXISTS `bowling_performance`;
CREATE TABLE IF NOT EXISTS `bowling_performance` (
  `playerID` int(11) NOT NULL,
  `matchID` int(11) NOT NULL,
  `economy_rate` int(11) NOT NULL,
  `indexed_economy_rate` int(11) NOT NULL,
  `bowling_aggregate` int(11) NOT NULL,
  `wickets_percentage` int(11) NOT NULL,
  `sixes` int(11) NOT NULL,
  `dots` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
CREATE TABLE IF NOT EXISTS `clubs` (
  `clubID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `club_name` varchar(30) NOT NULL,
  `president` varchar(30) DEFAULT NULL,
  `date_established` date DEFAULT NULL,
  `club_locationID` int(10) NOT NULL,
  PRIMARY KEY (`clubID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
  `contract_id` int(11) NOT NULL AUTO_INCREMENT,
  `playerID` int(10) NOT NULL,
  `clubID` int(10) NOT NULL,
  `contract_start_date` date NOT NULL,
  `contract_end_date` date NOT NULL,
  `witness1` varchar(50) NOT NULL,
  `witness2` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `authorized_person` varchar(100) NOT NULL,
  `contract_amount` decimal(12,2) NOT NULL,
  PRIMARY KEY (`contract_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `playerID` int(10) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `university` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `result` varchar(10) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  KEY `playerID` (`playerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_organised`
--

DROP TABLE IF EXISTS `events_organised`;
CREATE TABLE IF NOT EXISTS `events_organised` (
  `eventID` int(10) NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `eventName` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fielding_performance`
--

DROP TABLE IF EXISTS `fielding_performance`;
CREATE TABLE IF NOT EXISTS `fielding_performance` (
  `playerID` int(11) NOT NULL,
  `matchID` int(11) NOT NULL,
  `dismissals` int(11) NOT NULL,
  `byes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `locationID` int(10) NOT NULL,
  `house` varchar(5) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `postCode` varchar(10) DEFAULT NULL,
  `thana` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  PRIMARY KEY (`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `matchID` int(15) NOT NULL,
  `date_of_match` date DEFAULT NULL,
  `team_batting_first` varchar(30) DEFAULT NULL,
  `team_bowling_first` varchar(30) DEFAULT NULL,
  `man_of_the_match` varchar(30) DEFAULT NULL,
  `umpire` varchar(30) DEFAULT NULL,
  `venueID` int(5) DEFAULT NULL,
  PRIMARY KEY (`matchID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_schedule`
--

DROP TABLE IF EXISTS `payment_schedule`;
CREATE TABLE IF NOT EXISTS `payment_schedule` (
  `paymentID` int(20) NOT NULL AUTO_INCREMENT,
  `contract_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `payment_date` date NOT NULL,
  `amount_paid` decimal(12,2) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `playerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `present_locationID` int(10) NOT NULL,
  `permanent_locationID` int(10) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `membership` varchar(5) NOT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`playerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player_history`
--

DROP TABLE IF EXISTS `player_history`;
CREATE TABLE IF NOT EXISTS `player_history` (
  `playerID` int(10) NOT NULL,
  `club_name` varchar(30) NOT NULL,
  `to` varchar(30) DEFAULT NULL,
  `from` varchar(30) DEFAULT NULL,
  `total_runs` int(7) NOT NULL,
  `total_wickets` int(5) NOT NULL,
  `team_leader` char(1) NOT NULL,
  KEY `playerID` (`playerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `teamID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clubID` int(10) NOT NULL,
  `formation_date` date DEFAULT NULL,
  `eventID` int(10) NOT NULL,
  `team_leaderID` int(10) NOT NULL,
  PRIMARY KEY (`teamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_playerlist`
--

DROP TABLE IF EXISTS `team_playerlist`;
CREATE TABLE IF NOT EXISTS `team_playerlist` (
  `teamID` int(10) NOT NULL,
  `playerID` int(10) NOT NULL,
  KEY `teamID` (`teamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venueID` int(11) NOT NULL AUTO_INCREMENT,
  `venueName` varchar(20) NOT NULL,
  PRIMARY KEY (`venueID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
