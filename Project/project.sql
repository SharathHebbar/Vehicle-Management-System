-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 09:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `B_id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Amt_paid` float NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `B_veh_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`B_id`, `Date`, `Time`, `Amt_paid`, `Status`, `B_veh_id`) VALUES
(10, '2017-09-02', '14:35:35', 5000000, 'Sucess', '1HGBH41JXMN109186'),
(11, '2016-08-08', '13:23:55', 7012000, 'Sucess', '1G1YZ23J9P5803427'),
(12, '2018-01-11', '14:57:44', 485000, 'Sucess', '5UXXW3C53J0T80683'),
(13, '2017-05-30', '15:50:37', 802000, 'Sucess', '1Y2AZ34P4G6504385'),
(14, '2017-03-15', '19:33:22', 63950, 'Sucess', '4S3BMHB68B3286050'),
(15, '2016-07-23', '16:02:17', 72470, 'Sucess', '1MEBP67D5BF617327'),
(16, '2011-02-12', '20:09:09', 127000, 'Sucess', '5UXFA13544LU21045'),
(17, '2010-12-05', '09:41:48', 1009000, 'Sucess', '1N4AA5AP9CC835565'),
(18, '2018-10-18', '11:29:07', 2464000, 'Sucess', '1GNEK13R4XJ312026'),
(19, '2016-11-20', '12:40:00', 1146000, 'Sucess', '1HGCB7566LA114808'),
(21, '2020-12-01', '12:11:12', 4900000, 'Sucess', '1JGBH41123N109186'),
(22, '2020-12-03', '12:11:12', 6200000, 'Sucess', '1JyBH41123N109186'),
(23, '2020-12-01', '12:11:12', 2000000, 'Sucess', '1QWEDF1234098FG12');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `D_id` int(10) NOT NULL,
  `D_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `d_img` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `D_license` varchar(20) NOT NULL,
  `D_l_valid` varchar(20) DEFAULT NULL,
  `House_no` int(5) DEFAULT NULL,
  `Street` varchar(100) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Pincode` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`D_id`, `D_name`, `gender`, `d_img`, `Phone_no`, `D_license`, `D_l_valid`, `House_no`, `Street`, `City`, `Pincode`) VALUES
(1, 'Ritvik', 'male', 'avatar1.jpg', 9845984638, 'KA1220050000188', '2025-04-17', 263, 'Commercial street', 'Bengaluru', 560001),
(2, 'Gokul', 'male', 'avatar3.jpg', 9090232201, 'KA2020070000709', '2027-08-03', 1321, 'Sungara Street', 'Shimoga', 577202),
(3, 'Tejas', 'male', 'avatar2.jpg', 8088217690, 'KA1520030001003', '2023-12-23', 1764, 'BM Road', 'Hassan', 573201),
(4, 'Ramesh', 'male', 'avatar3.jpg', 7984763102, 'KA0720100004912', '2030-07-02', 453, 'Bhavanthi Stree', 'Mangaluru', 575001),
(5, 'Suresh', 'male', 'avatar3.jpg', 9763108540, 'KA1220080000222', '2028-01-11', 873, 'Residency Road', 'Bengaluru', 560025),
(6, 'nischinth', 'male', 'avatar2.jpg', 7259144941, 'KA1230080000223', '2020:12:03', 271, 'Door no 271 war', 'Devanahalli Bangalor', 562110),
(7, 'Sharath S Hebbar', 'male', 'avatar1.jpg', 8152921198, 'KA1240070002000', '2020-12-06', 22, 'New road', 'bengaluru', 96),
(8, 'Roopa', 'Female', 'female.jpg', 2323144213, 'KA1240070006000', '2020-12-03', 22, 'gandinagar', 'bengaluru', 1),
(9, 'Ashwin', 'Male', 'avatar1.jpg', 8152991198, 'KA1940070002000', '2020-12-03', 12, 'sanjaynagar', 'bengaluru', 80),
(10, 'Ramesh', 'Male', 'avatar2.jpg', 2323144213, 'KA1240080906000', '2020-12-03', 22, 'sanjaynagar', 'bengaluru', 96),
(11, 'Ashwin', 'Male', 'avatar3.jpg', 2132343456, 'KA1040070002000', '2020-12-03', 22, 'gandinagar', 'bengaluru', 80),
(12, 'Ashwin', 'Male', 'avatar3.jpg', 2132343456, 'KA1278070002000', '2020-12-03', 77, 'gandinagar', 'bengaluru', 96),
(14, 'AshwinS', 'Male', 'avatar3.jpg', 2323144213, 'KA1460070002000', '2021-12-03', 77, 'New road', 'bengaluru', 1),
(17, 'Ramesh', 'Male', 'avatar3.jpg', 8152925198, 'KA0000070002000', '2021-12-03', 22, 'sanjaynagar', 'bengaluru', 80),
(18, 'Suresh', 'Male', 'avatar3.jpg', 7895857357, 'KA0927635412786', '2021-12-30', 1098, '8th cross mg road', 'mysuru', 89);

-- --------------------------------------------------------

--
-- Table structure for table `drives`
--

CREATE TABLE `drives` (
  `V_id` varchar(20) NOT NULL,
  `D_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drives`
--

INSERT INTO `drives` (`V_id`, `D_id`) VALUES
('1G1YZ23J9P5803427', 2),
('1GNEK13R4XJ312026', 4),
('1HGBH41123N109188', 11),
('1HGBH41123N109188', 17),
('1HGBH41JXMN109186', 1),
('1HGBH41JXMN109186', 6),
('1HGCB7566LA114808', 2),
('1JGBH41123N109186', 9),
('1JyBH41123N109186', 10),
('1MEBP67D5BF617327', 3),
('1N4AA5AP9CC835565', 3),
('1QWEDF1234098FG12', 18),
('1Y2AZ34P4G6504385', 5),
('4S3BMHB68B3286050', 1),
('5UXFA13544LU21045', 5),
('5UXXW3C53J0T80683', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `F_id` int(5) NOT NULL,
  `F_type` varchar(10) NOT NULL,
  `Expenses` float NOT NULL,
  `Litres` float NOT NULL,
  `F_Date` date NOT NULL,
  `v_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`F_id`, `F_type`, `Expenses`, `Litres`, `F_Date`, `v_id`) VALUES
(1, 'Petrol', 1238.85, 15, '2020-09-04', '1HGBH41JXMN109186'),
(2, 'Petrol', 2477.7, 30, '2020-08-15', '1G1YZ23J9P5803427'),
(3, 'Diesel', 768.6, 10, '2020-08-10', '5UXXW3C53J0T80683'),
(4, 'Diesel', 1537.2, 20, '2020-01-13', '1Y2AZ34P4G6504385'),
(5, 'Petrol', 247.77, 3, '2020-07-27', '4S3BMHB68B3286050'),
(6, 'Petrol', 412.95, 5, '2020-02-08', '1MEBP67D5BF617327'),
(7, 'Petrol', 165.18, 2, '2020-05-25', '5UXFA13544LU21045'),
(8, 'Diesel', 2305.8, 30, '2020-03-01', '1N4AA5AP9CC835565'),
(9, 'Diesel', 3458.7, 45, '2020-04-06', '1GNEK13R4XJ312026'),
(10, 'Diesel', 3843, 50, '2020-10-10', '1HGCB7566LA114808'),
(12, 'Diesel', 8000, 100, '2020-07-24', '1HGBH41123N102186'),
(21, 'Petrol', 9000, 100, '2020-12-12', '1JGBH41123N109186'),
(22, 'Petrol', 9000, 100, '2020-12-12', '1JyBH41123N109186'),
(23, 'Petrol', 500, 80, '2020-12-12', '1QWEDF1234098FG12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `u_img` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `House_no` int(5) DEFAULT NULL,
  `Street` varchar(100) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Pincode` int(6) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `gender`, `u_img`, `Phone_no`, `email`, `House_no`, `Street`, `City`, `Pincode`, `password`) VALUES
(1, 'Akshay', 'male', 'avatar2.jpg', 9835596855, 'akshay364@gmail.com', 271, 'Avenue Street', 'Bengaluru', 560002, 'Aks284'),
(2, 'Sanjay', 'male', 'avatar3.jpg', 9549652980, 'sanjay4168@gmail.com', 1441, 'GT Street', 'Bellary', 583102, 'Sanj93761'),
(3, 'Darshan', 'male', 'avatar1.jpg', 8076891029, '12dars123@yahoo.com', 173, 'RC Road', 'Hassan', 573201, 'Dars@9730'),
(4, 'Raghav', 'male', 'avatar2.jpg', 9764108239, 'ragh890@yahoo.com', 987, 'Horapet Main Ro', 'Tumkur', 572101, 'Ragh7358'),
(5, 'Rohan', 'male', 'avatar3.jpg', 9108961204, 'rohankal10@gmail.com', 541, 'Brigade Road', 'Bengaluru', 560001, 'Roha@91638'),
(6, 'Sharath S Hebbar', 'male', 'avatar1.jpg', 2323144213, 'sharath@gmail.com', 22, 'New road', 'bengaluru', 96, 'Sharath@7'),
(7, 'Roopa', 'Female', 'female.jpg', 2323144213, 'roopa@gmail.com', 22, 'gandinagar', 'bengaluru', 1, 'Roopa@1234'),
(8, 'Ashwinshetty', 'Male', 'avatar1.jpg', 8152991198, 'ashwin@gmail.com', 12, 'sanjaynagar', 'bengaluru', 80, 'Ash@1234'),
(10, 'Ramesh', 'Male', 'avatar2.jpg', 2323144213, 'ramesh@mail.com', 12, 'sanjaynagar', 'bengaluru', 96, 'Ramesh@123'),
(15, 'Suresh', 'Male', 'avatar2.jpg', 7895857357, 'suri123@gmail.com', 1098, '8th cross mg road', 'mysuru', 89, 'Suri@123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `V_id` varchar(20) NOT NULL,
  `v_img` varchar(100) NOT NULL,
  `V_model` varchar(20) NOT NULL,
  `V_type` varchar(10) NOT NULL,
  `V_reg_no` varchar(15) NOT NULL,
  `Mfg_year` int(4) NOT NULL,
  `Ins_no` varchar(15) NOT NULL,
  `Eng_no` varchar(20) NOT NULL,
  `V_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`V_id`, `v_img`, `V_model`, `V_type`, `V_reg_no`, `Mfg_year`, `Ins_no`, `Eng_no`, `V_user_id`) VALUES
('1G1YZ23J9P5803427', 'car1.jpg', 'BMW 7 Series', 'Car', 'KA-02-A-9876', 2015, '97016872-5', '24AGK20471', 4),
('1GNEK13R4XJ312026', 'truck.jpg', 'Eicher Pro 3015', 'Truck', 'KA-01-B-2660', 2015, '10294635-5', '79HIR54981', 2),
('1HGBH41123N102186', 'truck.jpg', 'Truck123', 'Truck', 'KA-01-BU-1953', 2020, '12321315', '52W2C17838', 5),
('1HGBH41123N109186', 'car1.jpg', 'BMW X4', 'Car', 'KA-24-Ju-2000', 2020, '12321324', '52K2C1088', 6),
('1HGBH41123N109187', 'car1.jpg', 'BMW X2', 'Car', 'KA-16-MY-2002', 2020, '12321313', '52W2C10878', 6),
('1HGBH41123N109188', 'car1.jpg', 'BMW X23', 'Car', 'KA-17-MY-2002', 2020, '12321314', '52W2C1088', 6),
('1HGBH41123N129186', 'car1.jpg', 'toyata', 'Car', 'KA-20-HK-2013', 2020, '12321353', '52Z2C10a78', 6),
('1HGBH41JXMN109186', 'car1.jpg', 'Volvo XC90', 'Car', 'KA-01-A-4151', 2016, '99889589-1', '52WVC10338', 1),
('1HGCB7566LA114808', 'truck.jpg', 'Tata 407 Gold SFC', 'Truck', 'KA-05-D-7778', 2015, '91028576-2', '98RUA80911', 4),
('1JGBH41123N109186', 'car1.jpg', 'BMW X1', 'Car', 'KA-01-JL-2000', 2020, '23423423', '58W2C10878', 8),
('1JkBH41123N109186', 'bike.jpg', 'honda Shine', 'Bike', 'KA-11-MY-2002', 2020, '12345678', '65W2C17838', 6),
('1JyBH41123N109186', 'car1.jpg', 'BMW z1', 'Car', 'KA-28-JL-2700', 2020, '12331312', '5yZ2C10a78', 10),
('1MEBP67D5BF617327', 'bike.jpg', 'Honda Activa 125', 'Bike', 'KA-03-G-6798', 2015, '17624778-2', '41CYX23716', 3),
('1N4AA5AP9CC835565', 'truck.jpg', 'Eicher Pro 2049', 'Truck', 'KA-01-A-3177', 2007, '39174652-6', '12XPC43900', 3),
('1QWEDF1234098FG12', 'car1.jpg', 'toyata', 'Car', 'KA-12-SU-1234', 2019, '123AGH67', '8TYU8YU789', 15),
('1Y2AZ34P4G6504385', 'car1.jpg', 'Hyundai Verna', 'Car', 'KA-04-G-9104', 2014, '65019870-3', '36RAZ97615', 5),
('4S3BMHB68B3286050', 'bike.jpg', 'Hero Splendor iSmart', 'Bike', 'KA-04-F-1234', 2017, '89459623-1', '55RSU81000', 1),
('5UXFA13544LU21045', 'bike.jpg', 'TVS Apache RTR 200 4', 'Bike', 'KA-02-B-4123', 2008, '27530198-3', '20EMO70918', 5),
('5UXXW3C53J0T80683', 'car1.jpg', 'Hyundai Aura', 'Car', 'KA-02-F-4534', 2016, '70124698-4', '42BDF23980', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_history`
--

CREATE TABLE `vehicle_history` (
  `Veh_his_id` int(5) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Mileage` float NOT NULL,
  `Distance` int(5) DEFAULT NULL,
  `Accident` varchar(20) DEFAULT NULL,
  `v_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_history`
--

INSERT INTO `vehicle_history` (`Veh_his_id`, `Status`, `Mileage`, `Distance`, `Accident`, `v_id`) VALUES
(10, 'Working', 49.5, 2100, 'No', '1HGBH41JXMN109186'),
(11, 'Working', 39.2, 3714, 'No', '1G1YZ23J9P5803427'),
(12, 'Working', 25.4, 1405, 'Yes', '5UXXW3C53J0T80683'),
(13, 'Working', 25.8, 1789, 'No', '1Y2AZ34P4G6504385'),
(14, 'Working', 61.5, 5005, 'No', '4S3BMHB68B3286050'),
(15, 'Working', 60.2, 7070, 'No', '1MEBP67D5BF617327'),
(16, 'Not working', 50.7, 1564, 'Yes', '5UXFA13544LU21045'),
(17, 'Not working', 4.7, 1439, 'No', '1N4AA5AP9CC835565'),
(18, 'Working', 3.6, 4902, 'No', '1GNEK13R4XJ312026'),
(19, 'Working', 3.8, 6510, 'No', '1HGCB7566LA114808'),
(24, 'Working', 20, 100, 'no', '1HGBH41123N102186'),
(25, 'Working', 16, 100, 'No', '1JGBH41123N109186'),
(26, 'Working', 16, 100, 'No', '1JyBH41123N109186'),
(27, 'Working', 16, 100, 'No', '1QWEDF1234098FG12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`B_id`),
  ADD KEY `fka` (`B_veh_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`D_id`),
  ADD UNIQUE KEY `D_license` (`D_license`);

--
-- Indexes for table `drives`
--
ALTER TABLE `drives`
  ADD PRIMARY KEY (`V_id`,`D_id`),
  ADD KEY `fkd` (`D_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `fky` (`v_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`V_id`),
  ADD UNIQUE KEY `V_reg_no` (`V_reg_no`),
  ADD UNIQUE KEY `Ins_no` (`Ins_no`),
  ADD KEY `fky` (`V_user_id`);

--
-- Indexes for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  ADD PRIMARY KEY (`Veh_his_id`),
  ADD KEY `fkx` (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `B_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `D_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `F_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  MODIFY `Veh_his_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked`
--
ALTER TABLE `booked`
  ADD CONSTRAINT `fka` FOREIGN KEY (`B_veh_id`) REFERENCES `vehicle` (`V_id`) ON DELETE CASCADE;

--
-- Constraints for table `drives`
--
ALTER TABLE `drives`
  ADD CONSTRAINT `fkd` FOREIGN KEY (`D_id`) REFERENCES `driver` (`D_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fkv` FOREIGN KEY (`V_id`) REFERENCES `vehicle` (`V_id`) ON DELETE CASCADE;

--
-- Constraints for table `fuel`
--
ALTER TABLE `fuel`
  ADD CONSTRAINT `fky` FOREIGN KEY (`v_id`) REFERENCES `vehicle` (`V_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk` FOREIGN KEY (`V_user_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `vehicle_history`
--
ALTER TABLE `vehicle_history`
  ADD CONSTRAINT `fkx` FOREIGN KEY (`v_id`) REFERENCES `vehicle` (`V_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
