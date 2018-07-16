-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 04:55 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `us_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gen_id` int(11) NOT NULL,
  `gen_name` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gen_id`, `gen_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `u_con`
--

CREATE TABLE `u_con` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` text,
  `messege` varchar(200) DEFAULT NULL,
  `gen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_con`
--

INSERT INTO `u_con` (`id`, `name`, `email`, `subject`, `messege`, `gen_id`) VALUES
(1, 'Sajal', 'sajal@gmail.com', 'web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta minima ipsa labore cumque, omnis facere itaque suscipit rem odit autem?																															', 1),
(2, 'ABS', 'abs@gmail.com', 'sms', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta minima ipsa labore cumque, omnis facere itaque suscipit rem odit autem?', 1),
(6, 'sajal2', 'sajal@gmail.com', 'sss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta minima ipsa labore cumque, omnis facere itaque suscipit rem odit autem?							', 1),
(7, 'sakeba', 'sakeba@gamil.com', 'ssss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta minima ipsa labore cumque, omnis facere itaque suscipit rem odit autem?																																																', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indexes for table `u_con`
--
ALTER TABLE `u_con`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gen_id` (`gen_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `u_con`
--
ALTER TABLE `u_con`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `u_con`
--
ALTER TABLE `u_con`
  ADD CONSTRAINT `u_con_ibfk_1` FOREIGN KEY (`gen_id`) REFERENCES `gender` (`gen_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
