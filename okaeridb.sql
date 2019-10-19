-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 04:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okaeridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountdetailstbl`
--

CREATE TABLE `accountdetailstbl` (
  `userID` int(11) NOT NULL,
  `userFname` varchar(1080) NOT NULL,
  `userMname` varchar(1080) NOT NULL,
  `userLname` varchar(1080) NOT NULL,
  `userAddress` varchar(1080) NOT NULL,
  `userContact` int(15) NOT NULL,
  `userAge` int(2) NOT NULL,
  `userCreditCardNo` int(255) DEFAULT NULL,
  `userDebitCardNo` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountdetailstbl`
--

INSERT INTO `accountdetailstbl` (`userID`, `userFname`, `userMname`, `userLname`, `userAddress`, `userContact`, `userAge`, `userCreditCardNo`, `userDebitCardNo`) VALUES
(2, 'ethan', 'acopio', 'arevalo', 'regina ville ', 2147483647, 23, NULL, NULL),
(3, 'ma angelica', 'acopio', 'arevalo', 'regina ville 2000', 2147483647, 23, NULL, NULL),
(3, 'ma angelica', 'acopio', 'arevalo', 'regina ville 2000', 2147483647, 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountstbl`
--

CREATE TABLE `accountstbl` (
  `userID` int(11) NOT NULL,
  `userName` varchar(767) NOT NULL,
  `userPassword` varchar(1080) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountstbl`
--

INSERT INTO `accountstbl` (`userID`, `userName`, `userPassword`) VALUES
(1, 'carlo', 'abc123'),
(2, 'ethanlec', '123'),
(3, 'maangelica', 'hanirokyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountstbl`
--
ALTER TABLE `accountstbl`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userID` (`userID`,`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountstbl`
--
ALTER TABLE `accountstbl`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
