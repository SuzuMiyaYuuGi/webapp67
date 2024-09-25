-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 02:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `Act_ID` varchar(5) NOT NULL,
  `Act_Name` varchar(20) NOT NULL,
  `Act_LastName` varchar(20) NOT NULL,
  `Act_Movie` int(20) NOT NULL,
  `Act_Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`Act_ID`, `Act_Name`, `Act_LastName`, `Act_Movie`, `Act_Age`) VALUES
('20000', 'Robert', 'Downey Jr.', 45, 59),
('20001', 'Chris', 'Hemsworth', 26, 41),
('20002', 'Chris', 'Evans', 34, 43),
('20003', 'Chris', 'Pratt', 40, 45),
('20004', 'Ryan', 'Reynolds', 60, 47),
('20006', 'asdas', 'asdasd', 36, 87);

-- --------------------------------------------------------

--
-- Table structure for table `actormovie`
--

CREATE TABLE `actormovie` (
  `Act_ID` varchar(5) NOT NULL,
  `Movie_ID` varchar(5) NOT NULL,
  `Act_Name` varchar(20) NOT NULL,
  `Act_LastName` varchar(20) NOT NULL,
  `Movie_Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This is the movie that the actor starred in.';

--
-- Dumping data for table `actormovie`
--

INSERT INTO `actormovie` (`Act_ID`, `Movie_ID`, `Act_Name`, `Act_LastName`, `Movie_Name`) VALUES
('20000', '30004', '', '', ''),
('20001', '30003', '', '', ''),
('20002', '30003', '', '', ''),
('20003', '30003', '', '', ''),
('20004', '30002', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_ID` varchar(5) NOT NULL,
  `Cus_Name` varchar(20) NOT NULL,
  `Cus_LastName` varchar(20) NOT NULL,
  `Cus_Address` varchar(100) NOT NULL,
  `Cus_PhoneCall` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This is customer information';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `Cus_Name`, `Cus_LastName`, `Cus_Address`, `Cus_PhoneCall`) VALUES
('10000', 'Wasuthorn', 'Krutsuwan', 'klong 11 thailand', '0973069443'),
('10001', 'Picharn', 'Lukbaen', 'klong 4 thailand', '0645986532'),
('10002', 'Pearn', 'Nakorn', 'Bangkok Ladprao', '0894236589'),
('10003', 'Boy', 'Pakorn', 'Bangkok Bangkuntean', '0689324568'),
('10004', 'Sasipuk', 'Lamunkorn', 'Thailang Klongplem', '0985632145');

-- --------------------------------------------------------

--
-- Table structure for table `customermovie`
--

CREATE TABLE `customermovie` (
  `Cus_ID` varchar(5) NOT NULL,
  `Movie_ID` varchar(5) NOT NULL,
  `Cus_Name` varchar(20) NOT NULL,
  `Cus_LastName` varchar(20) NOT NULL,
  `Movie_Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This is the movie that the customer bought.';

--
-- Dumping data for table `customermovie`
--

INSERT INTO `customermovie` (`Cus_ID`, `Movie_ID`, `Cus_Name`, `Cus_LastName`, `Movie_Name`) VALUES
('10000', '30000', '', '', ''),
('10001', '30001', '', '', ''),
('10002', '30002', '', '', ''),
('10003', '30003', '', '', ''),
('10004', '30004', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Movie_ID` varchar(5) NOT NULL,
  `Movie_Name` varchar(40) NOT NULL,
  `Movie_ReleaseDates` date NOT NULL,
  `Movie_Rating` float NOT NULL,
  `Movie_Director` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This si Movie Information';

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Movie_ID`, `Movie_Name`, `Movie_ReleaseDates`, `Movie_Rating`, `Movie_Director`) VALUES
('30000', 'Deadpool 1 ', '2016-02-16', 8.15, 'Simon Kinberg'),
('30001', 'Deadpool 2 ', '2018-05-18', 7.6, 'Simon Kinberg'),
('30002', 'Deadpool & Wolverine', '2024-07-26', 8.65, 'Shawn Levy'),
('30003', 'Avengers: Infinity War (2018)', '2018-04-27', 8.4, 'Anthony Russo'),
('30004', 'Avengers: Endgame (2019)', '2019-04-26', 8.4, 'Anthony Russo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`Act_ID`);

--
-- Indexes for table `actormovie`
--
ALTER TABLE `actormovie`
  ADD KEY `Act_ID` (`Act_ID`,`Movie_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_ID`);

--
-- Indexes for table `customermovie`
--
ALTER TABLE `customermovie`
  ADD KEY `Cus_ID` (`Cus_ID`,`Movie_ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Movie_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
