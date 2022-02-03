-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 11:15 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kycform`
--

-- --------------------------------------------------------

--
-- Table structure for table `kyctable`
--

CREATE TABLE `kyctable` (
  `ID` int NOT NULL,
  `Surname` varchar(300) NOT NULL,
  `MiddleName` varchar(300) NOT NULL,
  `FirstName` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `PhoneNumber` varchar(300) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(300) NOT NULL,
  `Identification` varchar(300) NOT NULL,
  `IdentityNumber` varchar(300) NOT NULL,
  `IssueDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `EmployerName` varchar(300) NOT NULL,
  `EmployerAddress` varchar(300) NOT NULL,
  `OracleNumber` varchar(300) NOT NULL,
  `IPPISNumber` varchar(300) NOT NULL,
  `NMANumber` varchar(300) NOT NULL,
  `GovtID` varchar(300) NOT NULL,
  `Passport` varchar(300) NOT NULL,
  `Status` int NOT NULL DEFAULT '1',
  `DateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kyctable`
--

INSERT INTO `kyctable` (`ID`, `Surname`, `MiddleName`, `FirstName`, `Email`, `PhoneNumber`, `Address`, `DOB`, `Gender`, `Identification`, `IdentityNumber`, `IssueDate`, `ExpireDate`, `EmployerName`, `EmployerAddress`, `OracleNumber`, `IPPISNumber`, `NMANumber`, `GovtID`, `Passport`, `Status`, `DateCreated`) VALUES
(1, 'Ngozichukwuka', 'Ifunanaya', 'Ikeaba', 'kebidegozi@gmail.com', '08141131223', '57 Palm Avenue,Mushin', '2022-02-09', 'male', 'nin', '23456789876', '0000-00-00', '0000-00-00', 'Page Financials', '23, Norman William Street', '23456789876', '23456789876', '23456789876', 'Bernice B 20151018_203711.jpg', '20211005_073912.jpg', 1, '2022-02-03 10:34:50'),
(2, 'Ngozichukwuka', 'Ifunanaya', 'Ikeaba', 'kebidegozi@gmail.com', '08141131223', '57 Palm Avenue,Mushin', '2022-02-24', 'male', 'nin', '23456789876', '0000-00-00', '0000-00-00', 'Page Financials', '23, Norman William Street', '23456789876', '23456789876', '23456789876', 'Bernice B 20151018_203711.jpg', '20211005_073912.jpg', 1, '2022-02-03 10:43:44'),
(3, 'Ngozichukwuka', 'Ifunanaya', 'Ikeaba', 'kebidegozi@gmail.com', '08141131223', '57 Palm Avenue,Mushin', '2022-02-11', 'male', 'npassport', '23456789876', '2022-02-17', '2022-02-24', 'Page Financials', '23, Norman William Street', '66', '23456789876', '23456789876', 'Photo.jpeg', 'WhatsApp Image 2020-08-08 at 11.58.12 AM.jpeg', 1, '2022-02-03 10:57:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kyctable`
--
ALTER TABLE `kyctable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kyctable`
--
ALTER TABLE `kyctable`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
