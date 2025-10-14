-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 06:51 AM
-- Server version: 8.0.33
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contactno` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `contactno`, `password`) VALUES
(1, 'admin1@gmail.com', '9876543210', '123'),
(2, 'admin2@gmail.com', '8765432109', '456'),
(3, 'admin3@gmail.com', '7654321098', '789');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int NOT NULL,
  `DbName` varchar(150) DEFAULT NULL,
  `DbAddress` varchar(150) DEFAULT NULL,
  `DbPhone` varchar(150) DEFAULT NULL,
  `DbGender` varchar(10) DEFAULT NULL,
  `DBDate` date DEFAULT NULL,
  `DbBlood` varchar(5) DEFAULT NULL,
  `DbUid` varchar(12) DEFAULT NULL,
  `DbSpec` varchar(100) DEFAULT NULL,
  `DbJoin` date DEFAULT NULL,
  `DbEmail` varchar(50) DEFAULT NULL,
  `DbPassword` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `DbName`, `DbAddress`, `DbPhone`, `DbGender`, `DBDate`, `DbBlood`, `DbUid`, `DbSpec`, `DbJoin`, `DbEmail`, `DbPassword`) VALUES
(1, 'Doctor1', 'Ranchi', '9135241605', 'Male', '2023-05-15', 'O+', '834164278781', 'Dermalogist', '2023-06-07', 'doctor1@gmail.com', '123'),
(2, 'Doctor2', 'Sakchi', '6024529034', 'Male', '2002-02-27', 'O+', '834164272546', 'Surgeon', '2021-02-27', 'doctor2@gmail.com', '456'),
(3, 'Doctor3', 'Jamshedpur', '6204445421', 'Female', '2002-01-27', 'O-', '834164278781', 'Orthopedics', '2021-01-27', 'doctor3@gmail.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int NOT NULL,
  `DbName` varchar(150) DEFAULT NULL,
  `DbAddress` varchar(150) DEFAULT NULL,
  `DbPhone` varchar(150) DEFAULT NULL,
  `DbGender` varchar(10) DEFAULT NULL,
  `DBDate` date DEFAULT NULL,
  `DbBlood` varchar(5) DEFAULT NULL,
  `DbUid` varchar(12) DEFAULT NULL,
  `DbEmail` varchar(50) DEFAULT NULL,
  `DbPassword` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `DbName`, `DbAddress`, `DbPhone`, `DbGender`, `DBDate`, `DbBlood`, `DbUid`, `DbEmail`, `DbPassword`) VALUES
(1, 'Patient1', 'Govindpur', '9876543210', 'Male', '2003-01-03', 'O+', '834164278781', 'patient1@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
