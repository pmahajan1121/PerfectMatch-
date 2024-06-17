-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 06, 2023 at 05:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `regtable`
--

CREATE TABLE `regtable` (
  `reg_id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `profile_for` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` int(11) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `mother_tongue` varchar(30) NOT NULL,
  `caste` varchar(35) NOT NULL,
  `country` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mob_no` bigint(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `img1` text NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(15) NOT NULL,
  `age` float NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `skin_tone` varchar(20) NOT NULL,
  `handicap` varchar(3) NOT NULL,
  `food` varchar(15) NOT NULL,
  `smooking` varchar(3) NOT NULL,
  `drinking` varchar(3) NOT NULL,
  `family_status` varchar(20) NOT NULL,
  `family_type` varchar(20) NOT NULL,
  `family_values` varchar(20) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `organisation_name` varchar(50) NOT NULL,
  `job_rol` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `annual_income` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regtable`
--

INSERT INTO `regtable` (`reg_id`, `uname`, `profile_for`, `gender`, `dob`, `religion`, `mother_tongue`, `caste`, `country`, `address`, `mob_no`, `email_id`, `password`, `img1`, `marital_status`, `city`, `state`, `age`, `height`, `weight`, `skin_tone`, `handicap`, `food`, `smooking`, `drinking`, `family_status`, `family_type`, `family_values`, `degree`, `college`, `organisation_name`, `job_rol`, `company_name`, `annual_income`) VALUES
(55, 'Trisha', 'Sister', 'female', 1995, 'Christianity', 'en-IN', 'Agrawal', 'India', 'Hydrabad,Kerala', 1234523456, 'trisha123@gamil.com', 'Trisha@123', 'uploads/Aish2.jpeg', 'divorced', 'Ambala', 'KL', 26, 5, 50, 'very fair', 'No', 'Eggterian', 'No', 'No', 'Rich', 'Nuclear', 'Moderate', 'BCA', 'D.Y.Patil', 'SPPU', 'software developer', 'TCS', 600000),
(64, 'Shradhha', 'Sister', 'female', 1996, 'Christianity', 'mr', 'Agrawal', 'India', 'Bhopal,Madhya Pradesh', 8796575434, 'shrdhha333@gmail.com', 'Shradhha@567', 'uploads/shraddha2.webp', 'single', 'Ahmedabad', 'GJ', 27, 5, 50, 'fair', 'No', 'Nonvegetarian', 'No', 'No', 'Rich', 'Join', 'Moderate', 'BCA', 'K.K.Wagh', 'SPPU', 'software developer', 'Wipro', 600000),
(65, 'Virat', 'Brother', 'male', 1991, 'Hinduism', 'pa', 'Rathod', 'Australia', 'Chandigarh,Punjab', 1234523458, 'virat123@gmail.com', 'Virat@456', 'uploads/kohli3.jpg', 'single', 'Amritsar', 'PB', 34, 5, 70, 'very fair', 'No', 'Eggterian', 'No', 'No', 'Rich', 'Join', 'Moderate', 'B.E(IT)', 'D.Y.Patil', 'SPPU', 'software developer', 'Wipro', 900000),
(66, 'Varun', 'Brother', 'male', 1995, 'Hinduism', 'pa', 'Rathod', 'Australia', 'Mumbai', 9876543210, 'varun123@gmail.com', 'Varun@123', 'uploads/varun2.jpg', 'single', 'Ahmedabad', 'PB', 34, 5, 67, 'fair', 'No', 'Vegetarian', 'No', 'No', 'Middle Class', 'Nuclear', 'Traditional', 'B.E(IT)', 'D.Y.Patil', 'Bombay University', 'software developer', 'Wipro', 900000),
(67, 'Deepika', 'Friend', 'female', 1994, 'Hinduism', 'sd', 'Mali', 'Andorra', 'Nashik,Maharashtra', 1234565676, 'deep@gmail.com', 'Deep@12345', 'uploads/deepika2.jpg', 'single', 'Ramgarh', 'MH', 24, 5, 57, 'Wheatish Brown', 'No', 'Nonvegetarian', 'No', 'No', 'Rich', 'Nuclear', 'Moderate', 'BSC', 'D.Y.Patil', 'Bombay University', 'software tester', 'Alphansol', 1000000),
(68, 'Kartik', 'Brother', 'male', 1991, 'Jainism', 'sd', 'Gurjar', 'Azerbaijan', 'Nagpur,Maharashtra', 9988776655, 'kartik123@gmail.com', 'Kaertik@123', 'uploads/sid2.jpg', 'Married', 'Ahmedabad', 'MH', 36, 5, 75, 'very fair', 'No', 'Nonvegetarian', 'No', 'No', 'Middle Class', 'Nuclear', 'Traditional', 'MCA', 'VIT', 'SPPU', 'software developer', 'Wipro', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `shortlisttable`
--

CREATE TABLE `shortlisttable` (
  `sid` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shortlisttable`
--

INSERT INTO `shortlisttable` (`sid`, `reg_id`) VALUES
(55, 66),
(64, 66),
(65, 55),
(66, 55);

-- --------------------------------------------------------

--
-- Table structure for table `tblchat`
--

CREATE TABLE `tblchat` (
  `cid` int(11) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblchat`
--

INSERT INTO `tblchat` (`cid`, `msg`, `reg_id`, `sid`) VALUES
(31, 'Hii', 66, 55),
(32, 'Hii', 55, 65),
(33, 'Hello', 66, 55),
(34, 'Hii\r\n', 64, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regtable`
--
ALTER TABLE `regtable`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `shortlisttable`
--
ALTER TABLE `shortlisttable`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tblchat`
--
ALTER TABLE `tblchat`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regtable`
--
ALTER TABLE `regtable`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `shortlisttable`
--
ALTER TABLE `shortlisttable`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tblchat`
--
ALTER TABLE `tblchat`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
