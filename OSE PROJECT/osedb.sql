-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 06:45 AM
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
-- Database: `osedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(8) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` char(40) NOT NULL,
  `user_firstName` varchar(30) NOT NULL,
  `user_lastName` varchar(30) NOT NULL,
  `user_birthDate` date NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contactNumber` varchar(12) NOT NULL,
  `type_scholarship` varchar(40) NOT NULL,
  `scholar_percentage` varchar(12) NOT NULL,
  `user_registrationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `user_email`, `user_password`, `user_firstName`, `user_lastName`, `user_birthDate`, `user_address`, `user_contactNumber`, `type_scholarship`, `scholar_percentage`, `user_registrationDate`) VALUES
(1002, 'paganahinutak@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Ace', 'Wolfgang', '2002-06-05', 'Jakarta, Indonesia', '09123456789', 'Athlete Scholarship', '100', '2023-02-25 11:36:21'),
(1003, 'arcelle.penaflor@benilde.edu.ph', 'cc03e747a6afbbcbf8be7668acfebee5', 'Arcelle', 'Penaflor', '2000-12-30', 'San Pedro, Laguna', '09123456789', 'Athletic Scholarship', '100', '2023-03-07 08:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
