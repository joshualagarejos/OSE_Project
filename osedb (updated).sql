-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 06:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `admin_id` int(8) NOT NULL,
  `admin_username` varchar(15) NOT NULL,
  `admin_email` char(255) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `admin_firstName` varchar(30) NOT NULL,
  `admin_lastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `athleterequirementtable`
--

CREATE TABLE `athleterequirementtable` (
  `requirement_id` int(8) NOT NULL,
  `requirement_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dueDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clearancetable`
--

CREATE TABLE `clearancetable` (
  `clearance_id` int(8) NOT NULL,
  `clearance_name` varchar(50) NOT NULL,
  `clearance_dueDate` datetime NOT NULL,
  `clearance_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `granteerequirementtable`
--

CREATE TABLE `granteerequirementtable` (
  `requirement_id` int(8) NOT NULL,
  `requirement_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dueDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userclearancetable`
--

CREATE TABLE `userclearancetable` (
  `userClearance_id` int(8) NOT NULL,
  `clearance_id` int(8) NOT NULL,
  `FK_postedByAdmin_id` int(8) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `FK_approvedByAdmin_id` int(8) NOT NULL,
  `remaks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(8) NOT NULL,
  `user_userName` varchar(15) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` char(40) NOT NULL,
  `user_firstName` varchar(30) NOT NULL,
  `user_lastName` varchar(30) NOT NULL,
  `user_birthDate` date NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_registrationDate` datetime NOT NULL,
  `user_FK_userType_id` int(8) NOT NULL,
  `user_FK_submittedRequirement_id` int(8) NOT NULL,
  `user_FK_missingRequirement_id` int(8) NOT NULL,
  `user_FK_courseTaken_id` int(8) NOT NULL,
  `user_FK_enrollableCourse_id` int(8) NOT NULL,
  `user_FK_payment_id` int(8) NOT NULL,
  `user_FK_userClearance_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `user_userName`, `user_email`, `user_password`, `user_firstName`, `user_lastName`, `user_birthDate`, `user_address`, `user_registrationDate`, `user_FK_userType_id`, `user_FK_submittedRequirement_id`, `user_FK_missingRequirement_id`, `user_FK_courseTaken_id`, `user_FK_enrollableCourse_id`, `user_FK_payment_id`, `user_FK_userClearance_id`) VALUES
(1, '[testStudent]', '[testemail@email.com]', '[password]', '[test]', '[student]', '0000-00-00', '[testAddress]', '0000-00-00 00:00:00', 1, 1, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `athleterequirementtable`
--
ALTER TABLE `athleterequirementtable`
  ADD PRIMARY KEY (`requirement_id`);

--
-- Indexes for table `clearancetable`
--
ALTER TABLE `clearancetable`
  ADD PRIMARY KEY (`clearance_id`);

--
-- Indexes for table `granteerequirementtable`
--
ALTER TABLE `granteerequirementtable`
  ADD PRIMARY KEY (`requirement_id`);

--
-- Indexes for table `userclearancetable`
--
ALTER TABLE `userclearancetable`
  ADD PRIMARY KEY (`userClearance_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `admin_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `athleterequirementtable`
--
ALTER TABLE `athleterequirementtable`
  MODIFY `requirement_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clearancetable`
--
ALTER TABLE `clearancetable`
  MODIFY `clearance_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `granteerequirementtable`
--
ALTER TABLE `granteerequirementtable`
  MODIFY `requirement_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userclearancetable`
--
ALTER TABLE `userclearancetable`
  MODIFY `userClearance_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
