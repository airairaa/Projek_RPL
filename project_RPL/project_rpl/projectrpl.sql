-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 04:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `email` varchar(20) NOT NULL,
  `First Name` char(10) NOT NULL,
  `Last Name` char(10) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Confirm Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rilisan`
--

CREATE TABLE `rilisan` (
  `Judul Lagu` char(30) NOT NULL,
  `Artis` varchar(30) NOT NULL,
  `Jumlah Lagu` int(155) NOT NULL,
  `Tanggal Rilis` date NOT NULL,
  `Status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `Title Of A Song` varchar(30) NOT NULL,
  `Name Of The Singer` varchar(20) NOT NULL,
  `Song Writer` varchar(100) NOT NULL,
  `Genre` multipoint NOT NULL,
  `Negara tujuan Rilis` varchar(30) NOT NULL,
  `Song's Language` varchar(1000) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Lyrics` longtext NOT NULL,
  `Platform Rilis` point NOT NULL,
  `Tanggal Rilis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `Password` (`Password`,`Confirm Password`);

--
-- Indexes for table `rilisan`
--
ALTER TABLE `rilisan`
  ADD PRIMARY KEY (`Artis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
