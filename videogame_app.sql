-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 01:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videogame_app`
--
CREATE DATABASE IF NOT EXISTS `videogame_app` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `videogame_app`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Cust_ID` int(11) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Cust_fName` varchar(15) NOT NULL,
  `Cust_lName` varchar(15) NOT NULL,
  `Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Cust_ID`, `Username`, `Cust_fName`, `Cust_lName`, `Email`) VALUES
(7, 'WizardWheezes', 'Fred', 'Weasley', 'fweasley@wizardwheezes.co'),
(28, 'GryffGirl79', 'Hermione', 'Granger', 'grangerher@hogwarts.edu'),
(30, 'potterhead', 'Harry', 'Potter', 'potterhar@hogwarts.edu'),
(31, 'KeeperRoar', 'Ronald', 'Weasley', 'weasleyron@hogwarts.edu'),
(42, 'JAMMF', 'Jamie', 'Fraser', 'jammf@frasersridge.net');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Game_ID` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Console` varchar(15) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Game_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Game_ID`, `Title`, `Console`, `Price`, `Game_image`) VALUES
(1, 'Hogwarts Legacy', 'Xbox One', 60, 'hogwarts_legacy.jpg'),
(2, 'Oblivion', 'Xbox 360', 25, 'oblivion.jpg'),
(3, 'Diablo III', 'Xbox One', 40, 'diablo.jpg'),
(4, 'Mass Effect', 'Xbox 360', 20, 'mass_effect.jpg'),
(5, 'Super Mario', 'Nintendo 64', 36, 'super_mario.jpg'),
(6, 'Banjo Kazooie', 'Nintendo 64', 15, 'banjo_kazooie.jpg'),
(31, 'Barbie', 'PC', 20, '300px-Barbie_Dreamhouse_Party_cover.jpg'),
(32, 'Call of Duty: Black Ops', 'Xbox One', 60, '3526787-call-of-duty-black-ops-gold-edition-playstation-3-front-cover.jpg'),
(35, 'Amnesia', 'Xbox One', 70, 'amnesia-dark-descent.jpg'),
(36, 'LotR: Gollum', 'PS5', 40, 'full_635373AmericaFrontccc.jpg'),
(37, 'Halo Infinite', 'Xbox', 20, 'FZLri_z6.jfif'),
(38, 'Lords of the Fallen', 'Xbox One', 40, 'Lords_of_the_Fallen_for_Xbox_One.jpg'),
(39, 'Star Wars: Battlefront II', 'Xbox One', 26, 's-l1200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Game_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Cust_ID`, `Game_ID`, `Quantity`) VALUES
(7, 28, 2, 1),
(8, 28, 2, 1),
(9, 30, 4, 1),
(10, 31, 5, 1),
(11, 31, 5, 1),
(21, 42, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Cust_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`Game_ID`),
  ADD UNIQUE KEY `Title` (`Title`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `Game_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
