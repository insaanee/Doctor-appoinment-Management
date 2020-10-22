-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 12:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AppointmentManaging`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'Hridoy', '1234', '20-11-2017 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `paitentId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `appointmentDay` varchar(10) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `paitentId`, `consultancyFees`, `appointmentDate`, `appointmentTime`,`appointmentDay`, `postingDate`, `updationDate`) VALUES
(1, 'Dentist', 1, 11, 300, '2017-12-01', '11:00 am', 'Friday', '2017-11-21 00:29:02', ''),
(2, 'Homeopath', 4, 22, 250, '2017-12-11', '3:00 pm', 'Monday', '2017-12-07 08:02:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`,  `creationDate`, `updationDate`) VALUES
(1, 'Dentist', 'Saiful', 'Mirpur', '300', 01688222211, 'saif@gmail.com',  '2017-11-19 06:25:37', '04-01-2017 01:27:51 PM'),
(2, 'Homeopath', 'Mintaha Rahman', 'Uttara', '600', 01863258961, 'tumpa@gmail.com', '2017-11-29 06:51:51', ''),
(3, 'General Physician', 'Faysal', 'Dhanmondi', '1200', 01852369999, 'faysal@gmail.com', '2017-11-07 07:43:35', ''),
(4, 'Homeopath', 'Juboraj', 'Gulsan', '250', 01625668888, 'juboraj@gmail.com', '2017-11-17 07:45:09', ''),
(5, 'Ayurveda', 'Ria', 'Banani', '500', 442166644646, 'ria@gmail.com',  '2017-11-27 07:47:07', ''),
(6, 'General Physician', 'Rumpa', 'Mirpur', '250', 01554549794, 'rumpa@test.com', '2017-11-25 07:52:50', '');

-- --------------------------------------------------------

--
-- Table structure for table `paitent`
--

CREATE TABLE IF NOT EXISTS `paitent` (
  `id` int(11) NOT NULL,
  `PaitentName` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paitent`
--

INSERT INTO `paitent` (`id`, `PaitentName`, `problem`, `address`, `contactno`, `Email`,  `creationDate`, `updationDate`) VALUES
(11, 'Laboni', 'Leg Pain', 'Mirpur', 01688222211, 'laboni@gmail.com',  '2017-12-01 06:25:37', '04-01-2017 01:27:51 PM'),
(22, 'Tumpa', 'Cancer', 'Uttara', 01863258961, 'tumpa00@gmail.com', '2017-11-29 06:51:51', ''),
(33, 'Hriody', 'Heart','Dhanmondi',  01852369999, 'hridzzzz@gmail.com', '2017-11-30 07:43:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE IF NOT EXISTS `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2017-11-28 06:37:25', ''),
(2, 'General Physician', '2017-11-28 06:38:12', ''),
(3, 'Dermatologist', '2017-11-28 06:38:48', ''),
(4, 'Homeopath', '2017-11-29 06:39:26', ''),
(5, 'Ayurveda', '2017-11-28 06:39:51', ''),
(6, 'Dentist', '2017-11-28 06:40:08', ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2017-11-28 06:41:18', '');

--
-- Table structure for table `doctorsabvailability`
--

CREATE TABLE IF NOT EXISTS `doctorsabvailability` (
  `id` int(11) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsabvailability`
--
INSERT INTO `doctorsabvailability` (`id`, `doctorName`, `Day`, `Date`, `Time`) VALUES
(1, 'Saiful', 'Monday', '04-12-2017', '9:00 am'),
(2, 'Mintaha Rahman', 'Friday', '02-12-2017', '11:30 am'),
(3, 'Faysal', 'Sunday', '03-12-2017', '8:30 pm'),
(4, 'Juboraj', 'Saturday', '01-12-2017', '12:00 pm'),
(5, 'Ria', 'Tuesday', '05-12-2017', '10:00 am'),
(6, 'Rumpa', 'Wednesday', '06-12-2017', '3:00 pm');

--
-- Table structure for table `SearchAppointment`
--

CREATE TABLE IF NOT EXISTS `SearchAppointment` (
   `id` int(11) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Speciality` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SearchAppointment`
--
INSERT INTO `SearchAppointment` (`id`,`Day`, `Date`, `Time`, `Speciality`) VALUES
(1,'Friday', '01-12-2017', '11:00 am', 'Dentist'),
(4,'Monday', '11-12-2017', '3:00 pm', 'Homeopath');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);
  
--
-- Indexes for table `paitent`
--
ALTER TABLE `paitent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorsabvailability`
--
ALTER TABLE `doctorsabvailability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SearchAppointment`
--
ALTER TABLE `SearchAppointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `paitent`
--
ALTER TABLE `paitent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `doctorsabvailability`
--
ALTER TABLE `doctorsabvailability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `SearchAppointment`
--
ALTER TABLE `SearchAppointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
