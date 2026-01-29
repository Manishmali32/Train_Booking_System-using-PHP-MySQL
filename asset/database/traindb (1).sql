-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 02:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Deepak ', 'deepak123'),
('malimanish7a@gmail.c', 'lordvishnu7a'),
('manish_mali321', 'lordvishnu'),
('payal', 'payal23'),
('tejasvi', 'tejasvi123');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(20) NOT NULL,
  `ticket_no` int(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Akshay', 'akshay12@gmail.com', 'Booking tickets by using this site is very good'),
(2, 'Manish mali', 'malimanish7a@gmail.com', 'this web site is to slw so work on that \r\n'),
(3, 'ganesh mali', 'maliganesh7a@gmail.com', 'your web site is good but the bugging is too .. so i wish you will work on that'),
(4, 'Tejasvi', 'manishaborse317@gmail.com', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `booked_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `status`, `check_in`, `check_out`, `full_name`, `phone_no`, `booked_by`) VALUES
(6, 'cancelled', '2025-03-13', '2025-03-27', 'Shubham Tiwari', '9834005411', 'shubh123@gmail.com'),
(13, 'cancelled', '2025-03-29', '2025-03-30', 'Manish ', '6577332981', 'malimanish7a@gmail.c'),
(14, 'cancelled', '2025-03-31', '2025-03-31', 'Manish ', '9834005411', 'malimanish7a@gmail.c'),
(15, 'cancelled', '2025-03-31', '2025-03-31', 'shubham', '7654879324', 'shubh123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'mamun', '1234', 'Abdullah Al Mamun', 'mamunwitchbug@gmail.com'),
(3, 'jinat', 'jinat', 'Jinat Afroj', 'afrojjinat@gmail.com'),
(6, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `passanger`
--

CREATE TABLE `passanger` (
  `pno` int(20) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_age` int(3) NOT NULL,
  `p_gender` varchar(3) NOT NULL,
  `seat_no` int(10) DEFAULT NULL,
  `ticket_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `passanger`
--

INSERT INTO `passanger` (`pno`, `p_name`, `p_age`, `p_gender`, `seat_no`, `ticket_no`) VALUES
(0, 'SHUBHAM', 23, 'm', 0, 25),
(1, 'Ajay Rathod', 21, 'm', 0, 1),
(2, 'Sujil Ahire', 23, 'm', 0, 2),
(3, 'Prax Nande', 7, 'm', 0, 2),
(4, 'Sujil Ahire', 23, 'm', 0, 3),
(5, 'Prax Nande', 9, 'm', 0, 3),
(6, 'Sujil Ahire', 22, 'm', 0, 4),
(7, 'Prax Nande', 9, 'm', 0, 4),
(8, 'manish mali', 19, 'm', 0, 5),
(9, 'ganesh mali', 23, 'm', 0, 5),
(10, 'manish mali', 19, 'm', 0, 6),
(11, 'Ganesh Mali', 23, 'm', 0, 7),
(12, 'DipikaMali', 21, 'm', 0, 7),
(13, 'Suresh Mali', 46, 'm', 0, 7),
(14, 'Surekha Mali', 39, 'm', 0, 7),
(15, 'Indubai Mali', 68, 'm', 0, 7),
(16, 'Ganesh Mali', 24, 'm', 0, 8),
(17, 'DipikaMali', 21, 'f', 0, 8),
(18, 'Suresh Mali', 45, 'm', 0, 8),
(19, 'Surekha Mali', 39, 'f', 0, 8),
(20, 'Indubai Mali', 68, 'f', 0, 8),
(21, 'deepak', 19, 'm', 0, 9),
(22, 'shubham', 19, 'm', 0, 9),
(23, 'manish mali', 19, 'm', 0, 10),
(24, 'Ganesh Mali', 19, 'm', 0, 11),
(25, 'Tejasvi', 20, 'f', 0, 12),
(26, 'payal', 21, 'f', 0, 12),
(27, 'manish mali', 19, 'm', 0, 13),
(28, 'manish mali', 54, 'm', 0, 14),
(29, 'AKRUTI', 26, 'm', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(23, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(24, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(25, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(26, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(27, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(28, 'Super Comfort', '2017-05-19', '2017-05-22', 'Jinat Afroj', 1524587558, 'true'),
(29, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(30, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(31, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(32, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(33, 'Duplex', '2025-03-12', '2025-03-26', 'Manish Mali', 2147483647, 'true'),
(34, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(35, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(36, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(37, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Duplex', 5, 5, 0, 2, 'single', 'AC, TV, Wifi', 1500),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC.', 3500),
('Super Comfort', 5, 5, 0, 1, 'double', 'AC, TV, WIFI', 2200);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_no` int(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `fare` int(10) NOT NULL,
  `arrival_time` varchar(20) NOT NULL,
  `depart_time` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `train_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_no`, `source`, `destination`, `fare`, `arrival_time`, `depart_time`, `duration`, `train_no`) VALUES
(11, 'Mumbai', 'Ahmedabad', 800, '05:55', '23:25', '17.5', 12267),
(12, 'Aurangabad', 'Secunderabad', 350, '06:35', '20:15', '13.7', 22204),
(13, 'Madurai', 'Chennai', 700, '07:20', '22:40', '15.3', 22206),
(14, 'Jammu', 'Delhi', 1200, '05:05', '19:40', '14.6', 12426),
(15, 'NewDelhi', 'Lucknow', 900, '06:40', '20:50', '14.2', 12430),
(16, 'Ludhiana', 'Delhi', 600, '22:10', '16:40', '5.5', 12038),
(17, 'Aurangabad', 'Mumbai', 500, '08:30', '23:30', '15', 12307),
(18, 'Aurangabad', 'Mumbai', 500, '10:00', '1:00', '9', 22206),
(19, 'SURAT', 'AMRAVATI', 195, '3:30', '10:45', '7.3', 24341),
(20, 'Surat', 'BHUSAVAL', 1, '8:30', '7:30', '1', 12345),
(21, 'SURAT', 'BHUSAVAL', 1, '8:30', '7:30', '1', 12345),
(23, 'Gorakhpur', 'Nandurbar', 250, '9:30', '6:30', '3', 7777),
(24, 'SURAT', 'GORAKHPUR', 250, '4:00', '10:00', '6', 65655),
(25, 'SURAT', 'PUNEJUNCTION', 400, '3:00', '8:30', '5.5', 65735),
(26, 'SURAT', 'AHEMDABAD', 250, '21:30', '8:30', '13', 32454),
(27, 'SURAT', 'BHUSAVAL', 400, '3:00', '10:00', '7', 77777),
(28, 'SURAT', 'BHUSAVAL', 165, '9:00', '11:27', '2.5', 87895),
(29, 'SURAT', 'BHUSAVAL', 120, '8:00', '12:45', '4.8', 89786),
(30, 'SURAT', 'BHUSAVAL', 132, '16:00', '6:30', '9.5', 42321),
(31, 'PUNEJUNCTION', 'SURAT', 132, '21:30', '10:00', '11.5', 32421);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_no` int(20) NOT NULL COMMENT '1000',
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `train_no` int(6) NOT NULL,
  `station_no` int(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_no`, `status`, `date`, `phno`, `email`, `train_no`, `station_no`, `username`) VALUES
(1, 'cancelled', '2018-05-26', 9922123833, 'aks123@gmail.com', 12307, 17, 'ak143'),
(2, 'cancelled', '2019-09-22', 9922032033, 'aks143@gmail.com', 22206, 18, 'ak143'),
(3, 'booked', '2019-09-22', 9922032033, 'aks143@gmail.com', 22206, 18, 'ak143'),
(4, 'booked', '2019-09-22', 9922032033, 'aks143@gmail.com', 22206, 18, 'ak143'),
(5, 'booked', '2025-01-24', 6359845528, 'malimanish7a@gmail.com', 24341, 19, 'Manish Mali '),
(6, 'booked', '2025-01-26', 6359845528, 'malimanish7a@gmail.com', 12345, 21, 'Manish Mali'),
(7, 'cancelled', '2025-01-26', 6359845528, 'malimanish7a@gmail.com', 12345, 21, 'Manish Mali'),
(8, 'booked', '2025-01-26', 6359845528, 'malimanish7a@gmail.com', 12345, 21, 'Manish Mali'),
(9, 'booked', '2025-01-28', 6359845528, 'malimanish7a@gmail.com', 24341, 19, 'Manish Mali'),
(10, 'booked', '2025-01-29', 6359845528, 'malimanish7a@gmail.com', 12345, 21, 'Manish Mali'),
(11, 'booked', '2025-03-21', 6359845528, 'malimanish7a@gmail.com', 12426, 14, 'Manish Mali '),
(12, 'booked', '2025-03-21', 9624977671, 'manishaborse317@gmail.com', 65655, 24, 'Tejasvi'),
(13, 'booked', '2025-03-26', 6359845528, 'malimanish7a@gmail.com', 12345, 20, 'Manish Mali'),
(14, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 87895, 28, 'Manish Mali'),
(15, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(16, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(17, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(18, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(19, 'booked', '2025-03-28', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(20, 'booked', '2025-03-28', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(21, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(22, 'booked', '2025-04-04', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(23, 'booked', '2025-03-27', 6359845528, 'malimanish7a@gmail.com', 22206, 13, 'Manish Mali'),
(24, 'booked', '2025-03-28', 6359845528, 'malimanish7a@gmail.com', 77777, 27, 'Manish Mali'),
(25, 'booked', '2025-04-04', 9624977671, 'shubh123@gmail.com', 32421, 31, 'shubham'),
(26, 'booked', '0000-00-00', 9624977671, 'shubh123@gmail.com', 0, 0, 'shubham'),
(27, 'booked', '0000-00-00', 9624977671, 'shubh123@gmail.com', 0, 0, 'shubham'),
(28, 'booked', '2025-03-27', 9624977671, 'shubh123@gmail.com', 77777, 27, 'shubham'),
(29, 'booked', '2025-03-27', 9624977671, 'shubh123@gmail.com', 12345, 21, 'shubham');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_no` int(6) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `seat_avail` int(3) NOT NULL,
  `class` varchar(10) DEFAULT NULL,
  `source` text NOT NULL,
  `destination` varchar(200) NOT NULL,
  `avl_trains` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `train_name`, `seat_avail`, `class`, `source`, `destination`, `avl_trains`) VALUES
(7777, 'Tejasvi', 25, 'AC', '', '', ''),
(12038, 'Shatabdi Express', 80, 'ALL', '', '', ''),
(12267, 'MUMBAI CENTRAL - AHMEDABAD AC Duronto Exp', 45, 'ALL', '', '', ''),
(12307, 'JODHPUR SF Express', 1, 'ALL', '', '', ''),
(12345, 'SURAT-BHUSAVAL ', 3, 'AC', '', '', ''),
(12426, 'DELHI Rajdhani Express', 39, 'ALL', '', '', ''),
(12430, ' LUCKNOW SF Express', 45, 'ALL', '', '', ''),
(22204, ' VISAKHAPATNAM Express', 40, 'ALL', '', '', ''),
(22206, ' CHENNAI Express', 36, 'ALL', '', '', ''),
(24341, 'Amravati Express', 26, 'ALL', '', '', ''),
(32421, 'PUNE-SURAT -SUPERFAST', 29, 'ALL', 'PUNEJUNCTION', 'SURAT', 'Monday, Tuesday'),
(32454, 'SURAT-BHUSAVAL ', 30, 'ALL', '', '', ''),
(42321, 'SURAT SUPERFAST', 100, 'ALL', 'SURAT', 'BHUSAVAL', ''),
(65655, 'GANGATAPTI', 289, 'ALL', '', '', ''),
(65735, 'PUNERI', 30, 'ALL', '', '', ''),
(77777, 'SURAT-BHUSAVAL ', 28, 'ALL', 'SURAT', 'BHUSAVAL', ''),
(87895, 'SURAT MEMO', 290, 'ALL', 'SURAT', 'BHUSAVAL', ''),
(89786, 'SURAT-LOCAL', 100, 'ALL', 'SURAT', 'BHUSAVAL', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pincode` int(5) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `otp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `email`, `mobile_number`, `area`, `pincode`, `city`, `state`, `otp`) VALUES
('Deepak', 'deepak123', 'deepak', 'x', 'badatya', 'M', '2025-06-10', 'deepak@gmail.com', 7676763832, '233, cvsd', 394210, 'Surat', 'Gujarat', 0),
('Dipika Mali', 'dipika@7a', 'Dipika', 'Sagar', 'Mali', 'M', '2003-08-15', 'malidipika@7agmail.com', 8780133858, '221 , shiv residency , surat , ', 394601, 'bardoli', 'Gujarat', 0),
('Ganesh Mali', 'ganesh@7a', 'Ganesh', 'Suresh', 'Mali', 'M', '2001-08-07', 'maliganesh7a@gmail.com', 6355638694, '221, shiv residency , dindoli, surat', 394210, 'Surat', 'Gujarat', 0),
('Manish Mali ', 'manish@7a', 'Manish', 'suresh', 'Mali', 'M', '2018-02-12', 'malimanish7a@gmail.com', 6359845528, 'Surat', 394210, '', '', 21103),
('Sahil Patil', 'sahil@7a', 'Sahil ', 'rakesh', 'patil', 'M', '2005-06-13', 'malimanish7a@gmail.com', 8460524341, '222, radheshyam nagar , navagam idndoli', 394210, 'Surat', 'Gujarat', 0),
('Tejasvi', 'tejasvi123', 'Tejasvi', 'mahendra', 'borse', 'F', '2005-03-02', 'manishaborse317@gmail.com', 9624977671, 'E, 501 rushikesh residency', 394210, 'Surat', 'Gujarat', 0),
('aks143', '1234', 'Akshay', '', 'Rathod', 'M', '2018-06-26', 'aks143@gmail.com', 9922032033, 'akjsdasbd ', 431001, '', '', 0),
('shubham', '123', 'shubham', 's', 'tiwari', 'M', '2025-03-26', 'shubh123@gmail.com', 9624977671, '121, xvp', 394210, 'Surat', 'Gujarat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `email`, `otp`) VALUES
('1', 'malimanish7a@gmail.com', '2004'),
('2', 'malidipika7a@gmail.com', '5188'),
('3', 'dipikamali228@gmail.com', '9439');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cancel_ibfk_2` (`username`),
  ADD KEY `cancel_ibfk_1` (`ticket_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`pno`),
  ADD KEY `ticket_fk` (`ticket_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_no`),
  ADD KEY `FOREIGN KEY` (`train_no`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_no`),
  ADD KEY `ticket_ibfk_1` (`train_no`),
  ADD KEY `ticket_ibfk_2` (`username`),
  ADD KEY `station_fk` (`station_no`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_no` int(20) NOT NULL AUTO_INCREMENT COMMENT '1000', AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cancel`
--
ALTER TABLE `cancel`
  ADD CONSTRAINT `cancel_ibfk_1` FOREIGN KEY (`ticket_no`) REFERENCES `ticket` (`ticket_no`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cancel_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `passanger`
--
ALTER TABLE `passanger`
  ADD CONSTRAINT `ticket_fk` FOREIGN KEY (`ticket_no`) REFERENCES `ticket` (`ticket_no`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`train_no`) REFERENCES `train` (`train_no`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
