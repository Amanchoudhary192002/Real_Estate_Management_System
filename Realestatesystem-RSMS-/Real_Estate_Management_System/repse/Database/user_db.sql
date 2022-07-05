-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 09:00 AM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `pho_no` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message_1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquire`
--

CREATE TABLE `inquire` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `realesateid` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(100) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  `realesateid` text NOT NULL,
  `tittle` text NOT NULL,
  `area` text NOT NULL,
  `location` varchar(2083) NOT NULL,
  `purpose` text NOT NULL,
  `sale_price` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `descr` text NOT NULL,
  `shot_descr` text NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `Profile`, `realesateid`, `tittle`, `area`, `location`, `purpose`, `sale_price`, `status`, `descr`, `shot_descr`, `Address`) VALUES
(1, 'Uploaded/1245.jpeg', '1012', '11000 Sq.Ft. Plot in Pashan Pune', '11000 Sq.Ft. (Plot Area)', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60526.49430785004!2d73.75261842462184!3d18.533154274712786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bee38b79e46d%3A0x83a5bf1a3d77d97e!2sPashan%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1651678536846!5m2!1sen!2sin', 'Residential', '₹ 66 Lac', 'Available', 'A 11000 square feet plot is available at a great price of Rs 66,00,000 in a safe & secure locality of hyderabad.  The location is within a gated layout, and is located in the highly sought after area of hitech city. The plot is located in a safe & secure neighborhood, and is close to public transportation. The area is also close to major landmarks and has excellent future growth prospects. The plot has the number 3 within a gated layout and faces towards the east.', 'A 11000 square feet plot is available at a great price of Rs 66,00,000 in a safe & secure locality of hyderabad.  The location is within a gated layout, and is located in the highly sought after area ', 'Pashan Pune');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `gender` varchar(255) NOT NULL,
  `panid` varchar(10) NOT NULL,
  `moblieno` bigint(10) NOT NULL,
  `addss` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `gender`, `panid`, `moblieno`, `addss`) VALUES
(7, 'Demo', 'demo@gmail.com', 'bb90dcb0ceabfc8bf10c550f1ee95ee7', 'user', 'male', 'ADGCHHDHHD', 910000000000, '  demo null Welcome to Real Estate management system  ');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_admin`
--

CREATE TABLE `user_form_admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `panid` varchar(10) NOT NULL,
  `moblieno` bigint(10) NOT NULL,
  `addss` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form_admin`
--

INSERT INTO `user_form_admin` (`id`, `name`, `email`, `password`, `user_type`, `gender`, `panid`, `moblieno`, `addss`) VALUES
(1, 'administrator', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', '', 'DREAMISBIG', 8200158795, 'Real Estate Management  System Admin Address\r\nEmail:- @decentaman09@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquire`
--
ALTER TABLE `inquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_admin`
--
ALTER TABLE `user_form_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquire`
--
ALTER TABLE `inquire`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_form_admin`
--
ALTER TABLE `user_form_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
