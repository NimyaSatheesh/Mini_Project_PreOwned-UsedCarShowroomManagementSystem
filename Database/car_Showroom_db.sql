-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2022 at 07:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_showroom_db`
--
CREATE DATABASE IF NOT EXISTS `car_showroom_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `car_showroom_db`;

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` int(15) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(35) NOT NULL,
  `education` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `login_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `first_name`, `last_name`, `address`, `phone`, `email`, `password`, `dob`, `gender`, `district`, `state`, `education`, `user_type`, `status`, `image`, `date`, `login_id`) VALUES
(6, 'dealer', 'in', 'abcdefh', '9045823454', 'dealer@gmail.com', '9984b338a2c088f541ef7278e29ed446', '2001-07-20', 'male', 'Kottayam', 'Kerala', 'Graduation', 'dealer', '1', 'user2.jpeg', '2022-10-16 20:41:10', 3),
(29, 'Ronika', 'Paul', 'edrftgyhujikol', '8043467558', 'ronika@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2001-03-31', 'female', 'Thrissur', 'Kerala', 'Graduation', 'dealer', '0', 'avatar-2.png', '2022-10-20 14:05:12', 0),
(33, 'Susan', 'Sebastian', '123, susan', '9045823454', 'susan@gmail.com', 'eeb50840eb970f391ed41303229772be', '1997-06-04', 'female', 'Iduki', 'Kerala', 'BTech.', 'dealer', '1', 'avatar-2.png', '2022-11-04 14:28:34', 97),
(34, 'Nath', 'Ram', '123,46ffsytfdy,fdfwudyi', '9874563210', 'nathram@gmail.com', '49db83c258a31e31fe9a812fdebbbdec', '1997-06-04', 'male', 'Trivandrum', 'Kerala', 'BTech.', 'dealer', '0', 'user2.jpeg', '2022-11-04 23:37:29', 98),
(35, 'Reshma', 'K', '1246, afsgfsyu', '8043467558', 'reshma1@gmail.com', 'fbe02c658daa4a4e055c82801bdad1b5', '2000-06-15', 'female', 'Palakad', 'Kerala', 'BTech.', 'dealer', '1', 'user.jpeg', '2022-11-05 10:01:11', 99);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `price` double NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingId` int(15) NOT NULL,
  `cid` int(15) NOT NULL,
  `c_id` int(30) NOT NULL,
  `bookingDate` date DEFAULT current_timestamp(),
  `bookingTime` time DEFAULT current_timestamp(),
  `price` float NOT NULL,
  `title` text NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `bid` int(15) NOT NULL,
  `bname` text NOT NULL,
  `bimage_path` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`bid`, `bname`, `bimage_path`, `status`, `date_created`) VALUES
(3, 'Ford', 'brand-6.png', 1, '2022-10-17 10:57:36'),
(6, 'Maruti Suzuki', 'brand-7.png', 1, '2022-10-19 10:37:19'),
(8, 'Toyota', 'brand-1.png', 1, '2022-10-19 11:18:04'),
(9, 'Honda', 'brand-8.png', 1, '2022-10-19 11:18:21'),
(10, 'Hyundai', 'Hyundai.jpg', 1, '2022-10-27 22:12:02'),
(11, 'Chevrolet', 'Chevrolet.jpg', 1, '2022-10-27 22:12:37'),
(12, 'Tesla', 'Tesla.jpg', 1, '2022-10-27 22:14:29'),
(13, 'Bmw', 'bmw.jpg', 0, '2022-10-28 11:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE `tbl_car` (
  `c_id` int(30) NOT NULL,
  `bid` int(30) NOT NULL,
  `mid` int(30) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `model` varchar(250) NOT NULL,
  `kilometer` float NOT NULL DEFAULT 0,
  `year` year(4) NOT NULL,
  `fuel` varchar(250) NOT NULL,
  `engine` varchar(250) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `color` varchar(250) NOT NULL,
  `specifications` text CHARACTER SET utf8 NOT NULL,
  `features` text NOT NULL,
  `Owners` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`c_id`, `bid`, `mid`, `bname`, `price`, `title`, `description`, `model`, `kilometer`, `year`, `fuel`, `engine`, `transmission`, `color`, `specifications`, `features`, `Owners`, `image`, `status`, `date_created`, `date_updated`) VALUES
(4, 19, 9, 'Honda', 1085000, '2019 Honda City VX', ' Very Good Condition, Original Paint, Non Accidental, Certified Car, Finance Available, Warranty Available, Service History Available, Test Drive Available & Roadside Assistance Available', 'City', 60679, 2019, 'Petrol', '1497 cc, 4 Cylinders Inline, 4 Valves/Cylinder, SOHC', 'Manual', 'Brown', 'Max Power (bhp@rpm) - 117 bhp @ 6600 rpm\r\nMax Torque (Nm@rpm) - 145 Nm @ 4600 rpm\r\nMileage (ARAI) - 17.8 kmpl\r\nLength - 4440 mm\r\nWidth - 1695 mm\r\nHeight - 1495 mm\r\nWheelbase - 2600 mm\r\nGround Clearance - 165 mm\r\nKerb Weight - 1065 kg\r\nDoors - 4 Doors\r\nSeating Capacity - 5 Person\r\nNo of Seating Rows - 2 Rows\r\nBootspace - 510 litres\r\nFuel Tank Capacity - 40 litres', 'Seat Belt Warning | Anti-Lock Braking System (ABS) | Electronic Brake-force Distribution (EBD) | Engine immobilizer | Central Locking | \r\nSpeed Sensing Door Lock | Child Safety Lock', 'First', 'hondacity.jpg', 1, '2022-11-14 21:57:02', '2022-11-23 20:41:05'),
(5, 7, 6, 'Maruti Suzuki', 575000, '2016 Maruti Suzuki Baleno Delta 1.2', ' ', '', 26499, 2016, 'Petrol', '1197 cc, 4 Cylinders Inline, 4 Valves/Cylinder, DOHC', 'Manual', 'Blue', 'Max Power (bhp@rpm) - 83 bhp @ 6000 rpm\r\nMax Torque (Nm@rpm) - 115 Nm @ 4000 rpm\r\nMileage (ARAI) - 21.4 kmpl\r\nDrivetrain - FWD\r\nLength - 3995 mm\r\nWidth - 1745 mm\r\nHeight - 1500 mm\r\nWheelbase - 2520 mm\r\nGround Clearance - 170 mm\r\nKerb Weight - 870 kg\r\nDoors - 5 Doors\r\nSeating Capacity - 5 Person\r\nNo of Seating Rows - 2 Rows\r\nBootspace - 339 litres\r\nFuel Tank Capacity - 37 litres', 'Child Seat Anchor Points | Seat Belt Warning | Anti-Lock Braking System (ABS) | Electronic Brake-force Distribution (EBD) | Engine immobilizer | Central Locking | \r\nSpeed Sensing Door Lock | Child Safety Lock | Vanity Mirrors on Sun Visors | Air Conditioner | Heater | Anti-glare Mirrors', 'First', 'baleno.webp', 1, '2022-11-14 22:16:43', '2022-11-23 20:41:10'),
(7, 14, 3, 'Ford', 699000, '2017 Ford Ecosport Titanium 1.5L Ti-VCT AT', '2017 Ford Ecosports Titanium Plus , Automatic, Petrol, 54000 kms, 1st owner, white clr.', 'EcoSport ', 54000, 2017, 'Petrol', '1499 cc, 4 Cylinders Inline, 4 Valves/Cylinder, DOHC', 'Automatic', 'White', 'Max Power (bhp@rpm) - 110 bhp @ 6300 rpm\r\nMax Torque (Nm@rpm) - 140 Nm @ 4400 rpm\r\nMileage (ARAI) - 15.6 kmpl\r\nDrivetrain - FWD\r\nLength - 3999 mm\r\nWidth - 1765 mm\r\nHeight - 1708 mm\r\nWheelbase - 2520 mm\r\nGround Clearance - 200 mm\r\nKerb Weight - 1268 kg\r\nDoors - 5 Doors\r\nSeating Capacity - 5 Person\r\nNo of Seating Rows - 2 Rows\r\nBootspace - 346 litres\r\nFuel Tank Capacity - 52 litres', 'Child Seat Anchor Points | Seat Belt Warning |Anti-Lock Braking System (ABS) | Electronic Brake-force Distribution (EBD) | Brake Assist (BA) | Electronic Stability Program (ESP) | Engine immobilizer | Central Locking | Speed Sensing Door Lock | Child Safety Lock', 'First', 'ford.jpg', 1, '2022-11-14 22:42:01', '2022-11-23 20:41:13'),
(8, 3, 10, 'Hyundai', 575000, '2016 Hyundai i20 Active1.2 SX', 'Car is in immaculate condition. Serviced at authorised service center. It is registered in 2016.', 'i20', 22700, 2016, 'Petrol', '1197 cc, 4 Cylinders Inline, 4 Valves/Cylinder, DOHC', 'Manual', 'Red', 'Max Power (bhp@rpm) - 82 bhp @ 6000 rpm\r\nMax Torque (Nm@rpm) - 115 Nm @ 4000 rpm\r\nMileage (ARAI) - 17.19 kmpl\r\nDrivetrain - FWD\r\nLength - 3995 mm\r\nWidth - 1760 mm\r\nHeight - 1555 mm\r\nWheelbase - 2570 mm\r\nGround Clearance - 190 mm\r\nDoors 5 - Doors\r\nSeating Capacity - 5 Person\r\nNo of Seating Rows - 2 Rows\r\nFuel Tank Capacity - 45 litres\r\nFront Suspension - McPherson strut with coil spring\r\nRear Suspension - Coupled torsion beam axle with coil spring\r\nFront Brake Type - Disc\r\nRear Brake Type - Drum\r\nSteering Type - Power assisted (Electric)\r\nWheels - Alloy Wheels\r\nSpare Wheel - Steel\r\nFront Tyres - 195 / 55 R16\r\nRear Tyres - 195 / 55 R16', 'Seat Belt Warning | Anti-Lock Braking System (ABS) | Engine immobilizer | Central Locking | LockChild Safety Lock | Seat Upholstery | Leather-wrapped Steering Wheel | Leather-wrapped Gear Knob | Driver Armrest | Rear Passenger Seats Type', 'First', 'hyundai.jpeg', 1, '2022-11-16 21:45:01', '2022-11-22 22:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cid` int(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(15) NOT NULL DEFAULT 1,
  `user_type` varchar(20) NOT NULL DEFAULT 'customer',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `login_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cid`, `username`, `email`, `phone`, `password`, `status`, `user_type`, `date`, `login_id`) VALUES
(6, 'customer', 'customer@gmail.com', '908757364', 'f4ad231214cb99a985dff0f056a36242', 1, 'customer', '2022-09-26 11:51:08', 54),
(28, 'diljo', ' dil@gmail.com', '4567898789', 'c823f65e21cf5c35b227e43acef103f4', 1, 'customer', '2022-10-17 23:17:31', 76),
(30, 'admin@gmail.com', ' admin@gmail.com', '1234567891', '0192023a7bbd73250516f069df18b500', 0, 'customer', '2022-10-17 23:21:04', 0),
(33, 'rt', ' ronytom85@gmail.com', '2345678932', '910d36741cac7cf63732a29d74ecee7a', 1, 'customer', '2022-10-18 16:19:39', 81),
(35, 'justin', ' justin123456789@gmail.com', '9045823454', 'e67c10a4c8fbfc0c400e047bb9a056a1', 0, 'customer', '2022-10-19 16:42:06', 0),
(36, 'Hasan', ' hasan@gmail.com', '9045823454', 'f690d3b8d4b51c1f189d886b7bab26b7', 1, 'customer', '2022-10-31 11:07:29', 94),
(38, 'nim', ' nimi@gmail.com', '9876543245', 'edaa2dde87aff43371547681e28ccddd', 1, 'customer', '2022-11-03 23:47:47', 96),
(39, 'Nimya', ' nimya12@gmail.com', '9045823454', '99199c76809ad9a1140eb5c21f8d58b9', 1, 'customer', '2022-11-23 14:41:31', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `enquiry_id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enquiry_id`, `name`, `phone`, `email`, `subject`, `status`, `date`) VALUES
(1, 'customer ', 908757364, 'customer@gmail.com', 'it kh sfdwuo treswiib', 0, '2022-11-23 14:19:43'),
(4, 'customer ', 908757364, 'customer@gmail.com', 'Hyundai i20 Model Available..?', 1, '2022-11-23 20:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `mid` int(15) NOT NULL,
  `bid` int(15) NOT NULL,
  `model` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`mid`, `bid`, `model`, `status`, `date_created`) VALUES
(1, 10, 'Creta', 1, '2022-11-06 21:02:04'),
(2, 10, 'Venue', 1, '2022-11-06 21:02:04'),
(3, 10, 'i20', 1, '2022-11-06 21:03:48'),
(4, 10, 'Verna', 1, '2022-11-06 21:03:48'),
(5, 10, 'Aura', 1, '2022-11-06 21:03:48'),
(6, 6, 'Brezza', 1, '2022-11-06 21:06:51'),
(7, 6, 'Baleno', 1, '2022-11-06 21:06:51'),
(8, 6, 'Swift', 1, '2022-11-06 21:06:51'),
(9, 6, 'Dzire', 1, '2022-11-06 21:06:51'),
(10, 6, 'Alto ', 1, '2022-11-06 21:06:51'),
(11, 6, 'Celerio', 1, '2022-11-06 21:06:51'),
(12, 3, 'Fiesta Classic', 1, '2022-11-06 21:09:09'),
(13, 3, 'Aspire', 1, '2022-11-06 21:09:09'),
(14, 3, 'EcoSport ', 1, '2022-11-06 21:09:09'),
(15, 3, 'Endeavour', 1, '2022-11-06 21:09:09'),
(16, 8, 'Innova Crysta', 1, '2022-11-06 21:10:46'),
(17, 8, 'Fortuner', 1, '2022-11-06 21:10:46'),
(18, 8, 'Glanza', 1, '2022-11-06 21:10:46'),
(19, 9, 'City', 1, '2022-11-06 21:13:06'),
(20, 9, 'Amaze', 1, '2022-11-06 21:13:06'),
(21, 9, 'Jazz', 1, '2022-11-06 21:13:06'),
(22, 13, ' X1', 1, '2022-11-06 21:16:48'),
(23, 13, 'X7', 1, '2022-11-06 21:16:48'),
(24, 13, 'M5', 0, '2022-11-06 21:16:48'),
(25, 31, 'Nexon', 1, '2022-11-06 21:20:59'),
(26, 31, 'Altroz', 1, '2022-11-06 21:20:59'),
(27, 31, 'Tiago', 1, '2022-11-06 21:20:59'),
(28, 31, ' Harrier', 1, '2022-11-06 21:20:59'),
(29, 32, ' Bolero', 1, '2022-11-06 21:25:53'),
(30, 32, 'XUV300', 1, '2022-11-06 21:25:53'),
(31, 32, 'Scorpio-N', 1, '2022-11-06 21:25:53'),
(32, 32, 'XUV700', 1, '2022-11-06 21:25:53'),
(33, 32, 'Thar', 1, '2022-11-06 21:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `login_id` int(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`login_id`, `username`, `password`, `user_type`, `date`, `status`) VALUES
(1, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', '2022-09-20 21:39:12', 1),
(3, 'dealer@gmail.com', '9984b338a2c088f541ef7278e29ed446', 'dealer', '2022-09-21 23:23:44', 1),
(54, 'customer@gmail.com', 'f4ad231214cb99a985dff0f056a36242', 'customer', '2022-09-26 11:51:08', 1),
(56, 'nimya@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'customer', '2022-09-26 12:09:49', 1),
(70, 'abc@gmail.com', '0192023a7bbd73250516f069df18b500', 'customer', '2022-10-17 18:50:07', 1),
(76, 'dil@gmail.com', 'c823f65e21cf5c35b227e43acef103f4', 'customer', '2022-10-17 23:17:31', 1),
(81, 'ronytom85@gmail.com', '910d36741cac7cf63732a29d74ecee7a', 'customer', '2022-10-18 16:19:39', 1),
(90, 'ronika@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'dealer', '2022-10-20 14:05:13', 1),
(93, 'nath@gmail.com', ' e20d12269dfcf8a4b21328a1325eebb6', 'dealer', '2022-10-30 19:02:49', 1),
(94, 'hasan@gmail.com', 'f690d3b8d4b51c1f189d886b7bab26b7', 'customer', '2022-10-31 11:07:29', 1),
(96, 'nimi@gmail.com', 'edaa2dde87aff43371547681e28ccddd', 'customer', '2022-11-03 23:47:47', 1),
(97, 'susan@gmail.com', ' eeb50840eb970f391ed41303229772be', 'dealer', '2022-11-04 14:28:34', 1),
(98, 'nathram@gmail.com', ' 49db83c258a31e31fe9a812fdebbbdec', 'dealer', '2022-11-04 23:37:28', 0),
(99, 'reshma1@gmail.com', '5bb849b6df3ef547b4a18f4b855b47d7', 'dealer', '2022-11-05 10:01:11', 1),
(100, 'nimya12@gmail.com', '99199c76809ad9a1140eb5c21f8d58b9', 'customer', '2022-11-23 14:41:31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `bid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `enquiry_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `mid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `login_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
