-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2019 at 11:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `medlist`
--

DROP TABLE IF EXISTS `medlist`;
CREATE TABLE IF NOT EXISTS `medlist` (
  `Name` varchar(40) NOT NULL,
  `RegNo.` int(16) NOT NULL,
  `Disease` varchar(20) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  PRIMARY KEY (`RegNo.`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medlist`
--

INSERT INTO `medlist` (`Name`, `RegNo.`, `Disease`, `Remark`) VALUES
('Crocine', 1231, 'Fever', 'Take twice a day after eating something!!'),
('Paracetamol', 12341, 'Fever', 'Twice a day!!'),
('Loperamide', 15564, 'Loose Motions', 'Have light food along with medicine.'),
('Unison', 25789, 'Vomiting', 'Take Rest.'),
('Saridon', 75468, 'Headache', 'Drink water and take rest.'),
('Cipcal', 456789, 'Body Pain', 'Take message.'),
('Voveran', 453215, 'Back Pain', 'Use Body Gel.'),
('Aspirin', 445566, 'Joint Pain', 'Minimize Work. Test '),
('Mucinex', 789564, 'Heavy Cough', 'Stay Hyderated.'),
('Robitussin', 745128, 'Cough', 'Stay away from crowd.'),
('Metformin', 11223344, 'Diabetes', 'Consume less fast food.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
