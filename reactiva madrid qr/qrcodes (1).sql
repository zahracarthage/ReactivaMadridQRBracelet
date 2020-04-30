-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 09:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `DNI_NIE` varchar(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `city` varchar(250) NOT NULL,
  `Current_address` varchar(250) NOT NULL,
  `Localization` varchar(250) NOT NULL,
  `qrImg` varchar(250) NOT NULL,
  `qrlink` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`DNI_NIE`, `name`, `last_name`, `phone_number`, `city`, `Current_address`, `Localization`, `qrImg`, `qrlink`) VALUES
('31561321', 'zahra', 'chouchane', 123, 'madrid', 'avd de los toreros', 'llskdoskkeaef', 'meravi447241745.png', 'localhost/qrcodemeravi447241745.png'),
('1254755', 'zahra', 'chouchane', 645141631, 'Madrid', 'Avenida de los toreros', '123.34521', 'meravi2142249625.png', 'localhost/qrcodemeravi2142249625.png'),
('456123v', 'ba', 'chouchane', 645141631, 'madrid', 'AVD de los toreros 4', '21231d', 'meravi1418927814.png', 'localhost/qrcodemeravi1418927814.png'),
('15213', 'sljd', 'kldjf', 15231, 'sjd', 'idjf', 'difj', 'meravi157996962.png', 'localhost/qrcode.png'),
('2152', 'zahra', 'chouchane', 2152, 'fkdsljf', 'fldksjf', 'pdskfs', 'meravi757769124.png', 'localhost/qrcode.png'),
('123451218', 'zahra chouchane', '', 23239924, 'sousse', 'rue sadok bou achour', 'fkjd', 'meravi274908705.png', 'localhost/qrcode.png'),
('', '', '', 0, '', '', '', 'meravi68010782.png', 'localhost/qrcode.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`DNI_NIE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
