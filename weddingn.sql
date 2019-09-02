-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 10:28 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingn`
--
CREATE DATABASE IF NOT EXISTS `weddingn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `weddingn`;

-- --------------------------------------------------------

--
-- Table structure for table `clientcombo`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `clientcombo`;
CREATE TABLE `clientcombo` (
  `name` text NOT NULL,
  `venue` text NOT NULL,
  `band` text NOT NULL,
  `photographer` text NOT NULL,
  `decorator` text NOT NULL,
  `caterer` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `wdate` text NOT NULL,
  `plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `clientcombo`:
--

--
-- Truncate table before insert `clientcombo`
--

TRUNCATE TABLE `clientcombo`;
--
-- Dumping data for table `clientcombo`
--

INSERT DELAYED IGNORE INTO `clientcombo` (`name`, `venue`, `band`, `photographer`, `decorator`, `caterer`, `email`, `phone`, `wdate`, `plan`) VALUES
('suhas', 'Aurangabad', 'Mohan Bandwala', 'Kale Photography', 'Sakshi and Company', 'Mohite Brothers', 'suhasdehade55@gmail.com', '25/02/2019', '7083504193', 'simple');

-- --------------------------------------------------------

--
-- Table structure for table `clientdelux`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `clientdelux`;
CREATE TABLE `clientdelux` (
  `name` text NOT NULL,
  `venue` text NOT NULL,
  `band` text NOT NULL,
  `photographer` text NOT NULL,
  `decorator` text NOT NULL,
  `caterer` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `wdate` text NOT NULL,
  `plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `clientdelux`:
--

--
-- Truncate table before insert `clientdelux`
--

TRUNCATE TABLE `clientdelux`;
--
-- Dumping data for table `clientdelux`
--

INSERT DELAYED IGNORE INTO `clientdelux` (`name`, `venue`, `band`, `photographer`, `decorator`, `caterer`, `email`, `phone`, `wdate`, `plan`) VALUES
('suhas', 'Aurangabad', 'Mattu Bros', 'Sutar Photography', 'Patil Flowerist', 'Karale Caterers', 'suhasdehade55@gmail.com', '25/02/2019', '7083504193', 'simple');

-- --------------------------------------------------------

--
-- Table structure for table `clientluxury`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `clientluxury`;
CREATE TABLE `clientluxury` (
  `name` text NOT NULL,
  `venue` text NOT NULL,
  `band` text NOT NULL,
  `photographer` text NOT NULL,
  `decorator` text NOT NULL,
  `caterer` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `wdate` text NOT NULL,
  `plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `clientluxury`:
--

--
-- Truncate table before insert `clientluxury`
--

TRUNCATE TABLE `clientluxury`;
--
-- Dumping data for table `clientluxury`
--

INSERT DELAYED IGNORE INTO `clientluxury` (`name`, `venue`, `band`, `photographer`, `decorator`, `caterer`, `email`, `phone`, `wdate`, `plan`) VALUES
('suha', 'Aurangabad', 'Raghu DJ', 'Madhu Photography', 'Dalal Decorater', 'Chirag Caterers', 'uhh@as.ni', '24/02/2019', '7083504193', 'simple');

-- --------------------------------------------------------

--
-- Table structure for table `clientsimple`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `clientsimple`;
CREATE TABLE `clientsimple` (
  `name` varchar(100) NOT NULL,
  `venue` text NOT NULL,
  `band` text NOT NULL,
  `photographer` text NOT NULL,
  `decorator` text NOT NULL,
  `caterer` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `wdate` text NOT NULL,
  `plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `clientsimple`:
--

--
-- Truncate table before insert `clientsimple`
--

TRUNCATE TABLE `clientsimple`;
--
-- Dumping data for table `clientsimple`
--

INSERT DELAYED IGNORE INTO `clientsimple` (`name`, `venue`, `band`, `photographer`, `decorator`, `caterer`, `email`, `phone`, `wdate`, `plan`) VALUES
('', '', '', '', '', '', '', '', '', ''),
('rfrf', 'Aurangabad', 'Bhimrao Bands', 'Rajesh Photography', 'Shambhu Decorater', 'Annapurna Caterers', 'suhasdehade55@gmail.com', '25/02/2019', '7083504193', 'simple');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `login`:
--

--
-- Truncate table before insert `login`
--

TRUNCATE TABLE `login`;
--
-- Dumping data for table `login`
--

INSERT DELAYED IGNORE INTO `login` (`username`, `password`) VALUES
('', ''),
('amol', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `regform`;
CREATE TABLE `regform` (
  `name` text NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `bdate` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `regform`:
--

--
-- Truncate table before insert `regform`
--

TRUNCATE TABLE `regform`;
--
-- Dumping data for table `regform`
--

INSERT DELAYED IGNORE INTO `regform` (`name`, `username`, `password`, `bdate`, `gender`, `email`, `phone`) VALUES
('suhas', '', '', '', '', 'prathameshgdk123@gmail.com', 2147483647),
('Amol', 'amol', '123456', '24/02/2019', 'Male', 'amolthorat2444@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `manager` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `vendor`:
--

--
-- Truncate table before insert `vendor`
--

TRUNCATE TABLE `vendor`;
--
-- Dumping data for table `vendor`
--

INSERT DELAYED IGNORE INTO `vendor` (`name`, `email`, `manager`, `address`) VALUES
('\0', 'amolxsj', 'qwertqwerty', 'qwertyhj');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--
-- Creation: Mar 18, 2019 at 11:44 AM
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE `venue` (
  `name` text NOT NULL,
  `organizer` text NOT NULL,
  `wdate` text NOT NULL,
  `email` text NOT NULL,
  `manager` text NOT NULL,
  `location` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `venue`:
--

--
-- Truncate table before insert `venue`
--

TRUNCATE TABLE `venue`;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table clientcombo
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table clientdelux
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table clientluxury
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table clientsimple
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table login
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table regform
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table vendor
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table venue
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for database weddingn
--

--
-- Truncate table before insert `pma__bookmark`
--

TRUNCATE TABLE `pma__bookmark`;
--
-- Truncate table before insert `pma__relation`
--

TRUNCATE TABLE `pma__relation`;
--
-- Truncate table before insert `pma__savedsearches`
--

TRUNCATE TABLE `pma__savedsearches`;
--
-- Truncate table before insert `pma__central_columns`
--

TRUNCATE TABLE `pma__central_columns`;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
