-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 05:14 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getHighsalary` ()   SELECT EM_ID,FIRST_NAME,DEPARTMENT, MAX(SALARY) FROM employee GROUP BY DEPARTMENT$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CNM` int(11) DEFAULT NULL,
  `CNAME` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL,
  `RATING` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CNM`, `CNAME`, `CITY`, `RATING`, `SNO`) VALUES
(201, 'HOFFMAN', 'LONDON', 100, 1001),
(202, 'GIOVANNE', 'ROME', 200, 1003),
(203, 'LIU', 'SAN JOSE', 300, 1002),
(204, 'GRASS', 'BARCELONA', 100, 1002),
(206, 'CLEMENS', 'LONDON', 300, 1007),
(207, 'PEREIRA', 'ROME', 100, 1004),
(208, 'GRASS', '', 200, 1005),
(209, 'LIU', '', 100, 1003);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EM_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(100) DEFAULT NULL,
  `LAST_NAME` varchar(100) DEFAULT NULL,
  `SALARY` int(11) DEFAULT NULL,
  `JOINING_DATE` varchar(100) DEFAULT NULL,
  `DEPARTMENT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EM_ID`, `FIRST_NAME`, `LAST_NAME`, `SALARY`, `JOINING_DATE`, `DEPARTMENT`) VALUES
(1, 'JOHN', 'ABRAHAM', 1000000, '2022-10-06', 'BANKING'),
(2, 'MICHAEL', 'CLEARK', 800000, '2022-10-06', 'INSURANCE'),
(3, 'ROY', 'THOMAS', 700000, '2022-10-06', 'BANKING'),
(4, 'TOM', 'JOSE', 600000, '2022-10-06', 'INSURANCE'),
(5, 'JERRY', 'PINTO', 650000, '2022-10-06', 'INSURANCE'),
(6, 'PHILIP', 'MATHEW', 750000, '2022-10-06', 'SERVICES'),
(7, 'TESTNAME1', '123', 650000, '2022-10-06', 'SERVICES'),
(8, 'TESTNAME2', 'LNAME%', 600000, '2022-10-06', 'INSURANCE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_view`
-- (See below for the actual view)
--
CREATE TABLE `employee_view` (
`FIRST_NAME` varchar(100)
,`LAST_NAME` varchar(100)
,`SALARY` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `incentives`
--

CREATE TABLE `incentives` (
  `insentive_id` int(11) NOT NULL,
  `EMPLOYEE_REF_ID` int(11) DEFAULT NULL,
  `INCENTIVE_DATE` varchar(100) DEFAULT NULL,
  `INCENTIVE_AMT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incentives`
--

INSERT INTO `incentives` (`insentive_id`, `EMPLOYEE_REF_ID`, `INCENTIVE_DATE`, `INCENTIVE_AMT`) VALUES
(1, 1, '2022-10-06', 5000),
(2, 2, '2022-10-06', 3000),
(3, 3, '2022-10-06', 4000),
(4, 1, '2022-10-06', 4500),
(5, 2, '2022-10-06', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ONM` int(11) DEFAULT NULL,
  `AMT` float DEFAULT NULL,
  `ODE` varchar(100) DEFAULT NULL,
  `CNM` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ONM`, `AMT`, `ODE`, `CNM`, `SNO`) VALUES
(3001, 18.69, '2022-12-08', 201, 1007),
(3002, 1900.1, '2022-12-08', 201, 1004),
(3003, 767.19, '2022-12-08', 201, 1001),
(3005, 3005, '2022-12-08', 201, 1002),
(3006, 3006, '2022-12-08', 201, 1007),
(3007, 3007, '2022-12-08', 201, 1002),
(3008, 3008, '2022-12-08', 201, 1001),
(3009, 3009, '2022-12-08', 201, 1003),
(3010, 3010, '2022-12-08', 201, 1002),
(3011, 3011, '2022-12-08', 201, 1001),
(3012, 0, '2022-12-15', 205, 1005);

-- --------------------------------------------------------

--
-- Table structure for table `sale_person`
--

CREATE TABLE `sale_person` (
  `SNO` int(11) DEFAULT NULL,
  `SNAME` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL,
  `COMM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_person`
--

INSERT INTO `sale_person` (`SNO`, `SNAME`, `CITY`, `COMM`) VALUES
(1001, 'PEEL', 'LONDON', 0.12),
(1002, 'SERRES', 'SAN JOSE', 0.13),
(1003, 'AXELROD', 'NEW YORK', 0.1),
(1004, 'MOTIKA', 'LONDON', 0.11),
(1007, 'RAFKIN', 'BARCELONA', 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(133, 'ravi', 'patel', 'ravi@gmail.com', '1234567890', 'ahmedabad', '2022-12-24 05:20:30');

-- --------------------------------------------------------

--
-- Structure for view `employee_view`
--
DROP TABLE IF EXISTS `employee_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_view`  AS SELECT `employee`.`FIRST_NAME` AS `FIRST_NAME`, `employee`.`LAST_NAME` AS `LAST_NAME`, `employee`.`SALARY` AS `SALARY` FROM `employee``employee`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EM_ID`);

--
-- Indexes for table `incentives`
--
ALTER TABLE `incentives`
  ADD PRIMARY KEY (`insentive_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `incentives`
--
ALTER TABLE `incentives`
  MODIFY `insentive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
