-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `PresentAddress` varchar(256) NOT NULL,
  `PermanentAddress` varchar(256) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Gender`, `DOB`, `PresentAddress`, `PermanentAddress`, `Phone`, `Email`, `Department`, `Username`, `Password`, `Type`) VALUES
('Sadaf', 'Akhter', 'male', '2022-12-07', 'BCS Computer City, SR-113, 1st Floor, IDB Bhaban, Dhaka 1207', 'BCS Computer City, SR-113, 1st Floor, IDB Bhaban, Dhaka 1207', '01764603065', 'sadaf.akhter19@gmail.com', 'cse', 'ksaf1904', 'abcd', 'student'),
('shabab', 'akhter', 'male', '2022-11-29', 'BCS Computer City, SR-113, 1st Floor, IDB Bhaban, Dhaka 1207', 'DenmarkBCS Computer City, SR-113, 1st Floor, IDB Bhaban, Dhaka 1207', '01764603069', 'shabab.akhter19@gmail.com', 'cse', 'shabab07', '12345', 'teacher'),
('K', 'sadaf', 'male', '2022-12-22', 'BCS Computer City, SR-113, 1st Floor, IDB Bhaban, Dhaka 1207', 'oor, IDB Bhaban, Dhaka 120', '01764603066', 'sadaf.akhter19@gmil.com', 'cse', 'ksadaf', '123', 'student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
