-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2021 at 11:53 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

-- CREATE DATABASE IF NOT EXISTS food_factory;

USE food_factory;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loginid` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `aphoto` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `mobile`, `email`, `loginid`, `password`, `aphoto`) VALUES
(1, 'Krishna Patel', '8780682347', 'krishnaamrutiya18@gmail.com', 'krishna', 'patel', 'krishna.jpg'),
(2, 'Jelanshi Shah', '8160568982', 'Jelanshishah9999@gmail.com', 'jelanshi', 'shah', 'krisha.jpg'),
(3, 'Mahek Mehta', '6356379786', 'mehtamahek17@gmail.com', 'mahek', 'mehta', 'mahek.jpg');

SELECT * FROM admin;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `F_ID` int(30) NOT NULL AUTO_INCREMENT,
  `f_c_name` varchar(30) NOT NULL,
  `type` varchar(5) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  PRIMARY KEY (`F_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `f_c_name`, `type`, `price`, `description`, `images_path`) VALUES
(58, 'Juicy Masala Paneer Kathi Roll', 'Full', 40, 'Juicy Masala Paneer Kathi Roll loaded with Masala Paneer chunks, onion & Mayo.', 'Masala_Paneer_Kathi_Roll.jpg'),
(60, 'Chocolate Hazelnut Truffle', 'Full', 99, 'Lose all senses over this very delicious chocolate hazelnut truffle.', 'Chocolate_Hazelnut_Truffle.jpg'),
(61, 'Happy Happy Choco Chip Shake', 'Half', 80, 'Happy Happy Choco Chip Shake - a perfect party sweet treat.', 'Happy_Happy_Choco_Chip_Shake.jpg'),
(62, 'Spring Rolls', 'Full', 65, 'Delicious Spring Rolls by Dragon Hut, Delhi. Order now!!!', 'Spring_Rolls.jpg'),
(63, 'Baahubali Thali', 'Full', 75, 'Baahubali Thali is accompanied by Kattapa Biriyani, Devasena Paratha, Bhalladeva Patiala Lassi', 'Baahubali_Thali.jpg'),
(65, 'Coffee', 'Full', 25, 'concentrated coffee made by forcing pressurized water through finely ground coffee beans.', 'coffee.jpg'),
(66, 'Tea', 'Full', 20, 'The simple elixir of tea is of our natural world.', 'tea.jpg'),
(68, 'Paneer', 'Full', 85, 'it', 'paneer pakora.jpg'),
(69, 'Coffee', 'Half', 25, 'concentrated coffee made by forcing pressurized water through finely ground coffee beans.', 'coffee.jpg'),
(70, 'Tea', 'Full', 20, 'The simple elixir of tea is of our natural world.', 'tea.jpg'),
(71, 'Samosa', 'Full', 40, 'Cocktail Crispy Samosa..', 'samosa.jpg'),
(72, 'Paneer Pakora', 'Half', 45, 'it gives whole new dimension even to the most boring or dull vegetable', 'paneer pakora.jpg'),
(73, 'Puff', 'Full', 35, 'Vegetable Puff, a snack with crisp-n-flaky outer layer and mixed vegetables stuffing', 'puff.jpg'),
(74, 'Pizza', 'Full', 200, 'Good and Tasty ', 'Pizza.jpg'),
(75, 'French Fries', 'Full', 60, 'Pure Veg and Tasty.', 'frenchfries.jpg'),
(76, 'Pakora', 'Full', 35, 'Pure Vegetable and Tasty.', 'Pakora.jpg'),
(77, 'Pizza', 'Full', 200, 'Pure Vegetable and Tasty.', 'Pizza.jpg'),
(78, 'French Fries', 'Half', 75, 'Pure Veg and Tasty.', 'frenchfries.jpg'),
(79, 'Pakora', 'Full', 45, 'TASTY', 'Pakora.jpg'),
(82, 'Puff', 'Full', 20, 'Chinees Puff', '1.JPG'),
(83, 'South Indian', 'Full', 120, 'Masala Dosa', 'dosa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory_management`
--

CREATE TABLE IF NOT EXISTS `foodcategory_management` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_c_name` varchar(40) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `foodcategory_management`
--

INSERT INTO `foodcategory_management` (`f_id`, `f_c_name`) VALUES
(10, 'Punjabi'),
(11, 'South Indian'),
(13, 'Chinese'),
(17, 'French Fries'),
(18, 'Pizza'),
(19, 'Puff'),
(20, 'Paneer Pakora'),
(21, 'Samosa'),
(22, 'Tea'),
(23, 'Coffee'),
(24, 'Baahubali Thali'),
(25, 'Happy Happy Choco Chip Shake	'),
(26, 'Chocolate Hazelnut Truffle'),
(29, 'temp');

-- --------------------------------------------------------

--
-- Table structure for table `food_orders`
--

CREATE TABLE IF NOT EXISTS `food_orders` (
  `frid` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  PRIMARY KEY (`frid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `food_orders`
--

INSERT INTO `food_orders` (`frid`, `fid`, `rid`, `price`, `qty`, `total`) VALUES
(1, 63, 2, '75', '1', '75'),
(2, 78, 2, '75', '2', '150'),
(3, 61, 2, '80', '1', '80'),
(4, 82, 3, '20', '4', '80'),
(5, 74, 3, '200', '1', '200'),
(6, 66, 4, '20', '3', '60'),
(7, 71, 4, '40', '2', '80'),
(8, 78, 4, '75', '2', '150'),
(9, 73, 2, '35', '3', '105');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(20) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`i_id`, `i_name`, `mobile`, `email`, `message`) VALUES
(1, 'Trisha Sharma', '7800254522', 'trisha1990@gmail.com', 'Is any room facilities are available for booking in this website?'),
(2, 'Pankaj Joshi', '7800005855', 'pankajjoshi1@yahoo.com', 'I want to give online order of food, Zometo or Swigy facilities are allowed or not?');

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE IF NOT EXISTS `registration_table` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_number` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration_table`
--

INSERT INTO `registration_table` (`rid`, `first_name`, `last_name`, `contact_number`, `email`, `password`) VALUES
(1, 'Lakhani', 'Priya', '8700547856', 'lakhani_priya19@gmail.com', 'priya'),
(2, 'rajeshree', 'rathod', '7789658855', 'rathod_r_10@yahoo.com', 'rathod'),
(3, 'Rahil', 'Makwana', '7878550022', 'rahilmakwana1@gmail.com', 'rahil'),
(4, 'Meeta', 'Cholera', '7455788554', 'meetacholera1980@yahoo.com', 'meeta111'),
(5, 'kushi', 'Patel', '9902558785', 'khushi2001@gmail.com', 'khyati'),
(6, 'Ram', 'Sharma', '8888888888', 'ram@gmail.com', 'ram123');

-- ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';

