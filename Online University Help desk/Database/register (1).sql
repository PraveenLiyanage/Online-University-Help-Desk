-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 11:05 PM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `IncidentCenter` varchar(50) NOT NULL,
  `IncidentLocation` varchar(50) NOT NULL,
  `IncidentDate` date NOT NULL DEFAULT current_timestamp(),
  `FeedbackDetails` varchar(100) NOT NULL,
  `DesiredOutcomes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `IncidentCenter`, `IncidentLocation`, `IncidentDate`, `FeedbackDetails`, `DesiredOutcomes`) VALUES
(10, 'New Building', 'Mathara Campus', '2022-05-22', 'Lecture hall 2 projector not working', 'Fix Projector'),
(11, 'Main Building', 'Colombo', '2022-05-22', 'Student ID reader not working', 'Fix ID reader'),
(12, 'New Building Lab 23', 'Colomco', '2022-05-22', 'Some computers does not working', 'Check the problem of computers'),
(13, 'Main Building', 'Kandy Campus', '2022-05-22', 'Lecture hall 3 projector not working', 'Fix Projector'),
(14, 'Faculty of Computing', 'Colomco', '2022-05-22', 'Student ID reader not working', 'Fix ID reader'),
(15, 'Main Building', 'Kandy Campus', '2022-05-22', 'Lecture hall 6A projector not working', 'Fix Projector'),
(16, 'New building 13', 'Matara', '2022-05-24', 'Student ID reader broken', 'Fix ID reader');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `image`) VALUES
(1, 'Admin', 'Admin - 2022.05.23 - 11.03.46pm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TicketNumber` int(11) NOT NULL,
  `RegisterNumber` varchar(6) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `MobileNumber` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `TicketType` varchar(15) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'PENDING',
  `ResolvedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TicketNumber`, `RegisterNumber`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Date`, `TicketType`, `Subject`, `Description`, `status`, `ResolvedDate`) VALUES
(1, 'st0001', 'Ruwan', 'Sampath', 117896578, 'st0001@uni.lk', '2022-05-22', 'URGENT', 'GPA calculation error', 'Year 1 Semester 2 GPA calculation error', 'PENDING', NULL),
(2, 'st0003', 'Sonal', 'Jayaweera', 114589685, 'st0003@uni.lk', '2022-05-23', 'URGENT', 'GPA calculation error', 'Year 1 Semester 2 GPA calculation error', 'PENDING', NULL),
(3, 'st0003', 'Sonal', 'Jayaweera', 114589685, 'st0003@uni.lk', '2022-05-23', 'URGENT', 'GPA calculation error', 'Year 1 Semester 2 GPA calculation error', 'PENDING', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `register` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `register`, `email`, `password`) VALUES
('Sonal Jayaweera', 'st0003', 'st0003@uni.lk', '90a060f53d7aa49968315b51be24e16e'),
('Ruwan Sampath', 'st0002', 'st0002@uni.lk', 'd747d30fc161f7120a0221b3b0f5b39e'),
('Dasun Madushanka', 'st0001', 'st0001@uni.lk', '0c51416532182f7e9649004ee3973654'),
('Sagara Jayawickrama', 'st0004', 'st0004@uni.lk', '5be3aafb000c8317db84b7547460a4fd'),
('Sarath Fonseka', 'st0005', 'st0005@uni.lk', '5900f5a12dcd7874fa44888a5b16c291'),
('Sanath Nishantha', 'st0006', 'st0006@uni.lk', '15f42ddb04833d96a1248ff133e7c4e4'),
('Dananjaya Perera', 'st0007', 'st0007@uni.lk', '8ff686bc91e062e8cd9f450c7a7554c4'),
('Akila Silva', 'st0008', 'st0008@uni.lk', '43e81d80df406221d4c9ac7bbbb56ec3'),
('Bhanuka Perera', 'st0009', 'st0009@uni.lk', 'f2f1b4c02937f4fbf64f1a504e65c199'),
('Suranga Perera', 'st0010', 'st0010@uni.lk', 'a3c5da462378256c743c5dbc8227a89f'),
('Ranuja Perera', 'st0011', 'st0011@uni.lk', '4a2e415de132ce6fe1a8c8fa87bc7fac'),
('Gayan Perera', 'st0012', 'st0012@uni.lk', '0e63f4f29a4479ffaca8242bd0869b71'),
('Saman Silva', 'st0013', 'st0013@uni.lk', '2885b7815e5dcf8e9f6e53ac7afc86d1'),
('Jagath Perera', 'st0014', 'st0014@uni.lk', '063f632b48d6031225fabd38d1090524');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TicketNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TicketNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
