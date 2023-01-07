-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 11:22 AM
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
-- Database: `carcatalogue`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Country_ID` int(10) NOT NULL,
  `cars_id` int(5) NOT NULL,
  `Brand_name` text NOT NULL,
  `Engine_power` varchar(10) NOT NULL,
  `Speed` varchar(10) NOT NULL,
  `0-60mph` varchar(10) NOT NULL,
  `Fuel_Range` varchar(11) NOT NULL,
  `Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Country_ID`, `cars_id`, `Brand_name`, `Engine_power`, `Speed`, `0-60mph`, `Fuel_Range`, `Price`) VALUES
(111, 1, 'Tesla', '670hp', '163mph', '3.8s', '329mi', '$139,000'),
(111, 2, 'Dodge', '797hp', '203mph', '3.5s', '352mi', '$113,500'),
(111, 3, 'Chevrolet', '420hp', '114mph', '5.4s', '384mi', '$70,950'),
(111, 4, 'Ford', '450hp', '112mph', '5.9s', '540mi', '$60,450'),
(111, 5, 'Chrysler', '485hp', '155mph', '4.0s', '475mi', '$74,500'),
(112, 6, 'Audi', '520hp', '155mph', '3.7s', '767mi', '$115,670'),
(112, 7, 'BMW', '585hp', '189mph', '3.9s', '936mi', '$103,440'),
(112, 8, 'Mercedes-Benz', '415hp', '155mph', '4.8s', '1500mi', '$93,200'),
(112, 9, 'Porsche', '541hp', '186mph', '3.8s', '980mi', '$114,500'),
(112, 10, 'Volkswagen', '300hp', '155mph', '4.6s', '643mi', '$49,000'),
(113, 11, 'Lexus', '383hp', '220mph', '5.3s', '444mi', '$93,275'),
(113, 12, 'Mitsubishi', '300hp', '140mph', '4.9s', '350mi', '$67,500'),
(113, 13, 'Mazda', '200hp', '120mph', '4.9s', '370mi', '$62,810'),
(113, 14, 'Toyota', '360hp', '180mph', '4.2s', '463mi', '$92,600'),
(113, 15, 'Honda', '240hp', '140mph', '3.9s', '415mi', '$76,000'),
(114, 16, 'Alpha Romeo', '220hp', '140mph', '3.9s', '388mi', '$282,500'),
(114, 17, 'Bugatti', '585hp', '300mph', '2.5s', '220mi', '$2000,000'),
(114, 18, 'Ferrari', '380hp', '223mph', '2.8s', '215mi', '$823,500'),
(114, 19, 'Lamborghini', '570hp', '303mph', '2.5s', '202mi', '$1,212,500'),
(114, 20, 'Maserati', '407hp', '220mph', '3.5s', '270mi', '$613,500');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_ID` int(10) NOT NULL,
  `Country_name` text NOT NULL,
  `Country_code` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_ID`, `Country_name`, `Country_code`) VALUES
(111, 'USA', 1),
(112, 'Germany', 49),
(113, 'Japan', 81),
(114, 'Italy', 39);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Qazi', 'qazi@gmail.com', '123'),
(2, 'Junaid', 'jj@gmail.com', '123'),
(3, 'Reza', 'reza@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cars_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cars_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
