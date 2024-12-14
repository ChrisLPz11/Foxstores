-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 09:47 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpshoppingcartphpshoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_contact_title`
--

CREATE TABLE `about_contact_title` (
  `id` int(5) NOT NULL,
  `project_title` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_contact_title`
--

INSERT INTO `about_contact_title` (`id`, `project_title`, `about`, `contact`) VALUES
(1, 'computer shop', '<p>this is for about page...</p>\r\n<p>we are web development company in india.</p>', '<p>this is for contact us page..</p>\r\n<p>our contact details etc.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(11, 'Mouse'),
(12, 'Key Board'),
(13, 'Monitor'),
(14, 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` varchar(5) NOT NULL,
  `product_id` varchar(5) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_images` varchar(500) NOT NULL,
  `product_qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_images`, `product_qty`) VALUES
(1, '1', '3', 'test1 this is for testing', '1', 'images/871703260bb6a34caa8d36aa066f15edprod-1.jpg', '1'),
(2, '2', '5', 'Logitech 12', '5', 'images/953f4a3e6f16633ff5a0d6fe8eeeba89mouse1.jpg', '2'),
(3, '3', '12', 'canon printer', '5', 'images/0b0e7c5b6a08db7b20f6e9d4a1071205canon.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `orderno` varchar(10) NOT NULL,
  `purchase_date` varchar(20) NOT NULL,
  `purchase_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`id`, `user_email`, `orderno`, `purchase_date`, `purchase_time`) VALUES
(1, 'zala@gmail.com', '453818', '21/08/19', '07:08:55'),
(2, 'amit.andipara@gmail.com', '896357', '24/08/19', '03:08:57'),
(3, 'amit.andipara@gmail.com', '234146', '24/08/19', '08:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(5) NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `image_path`) VALUES
(6, 'images/6bc9dd0a2c689dd100614f78b9fda780slider1.jpg'),
(7, 'images/81527c450b54067cdd53de01a2f70f20slider2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `product_descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `product_name`, `product_price`, `product_qty`, `product_img`, `product_descriptions`) VALUES
(5, 'Mouse', 'Logitech 12', '5', '0', 'images/953f4a3e6f16633ff5a0d6fe8eeeba89mouse1.jpg', '<p>This is very fast product for logitech.its vireless mouse.</p>'),
(6, 'Mouse', 'Ultra Mouse', '15', '10', 'images/cf3d512d58ae7133a17ea6aa503a5a82mouse2.jpg', '<p>This ultra mouse is very fast then others.</p>'),
(7, 'Key Board', 'Game Keyboard', '24', '25', 'images/b17cb3be6576e09da08cb88eca424df4keyboard1.jpg', '<p>This keyboard is specially for gamers its very fast.</p>'),
(8, 'Key Board', 'Dell Keyboard', '12', '15', 'images/241a4f3b340770d08cf3d8983ba4765fkeyboard2.jpg', '<p>This key board is vire less keyboard of dell.</p>'),
(9, 'Monitor', 'Dell Monitor', '190', '25', 'images/3274f960a602f45fc727773e5031671cmonitor2.jpg', '<p>This is ultra base Monitor for gaming perpose .</p>'),
(10, 'Monitor', 'Dell Ultra', '150', '14', 'images/43b161185d73fec502722f1f7a3529f6monitor1.jpg', '<p>This is simple dell Monitor for normal use.</p>'),
(12, 'Printer', 'canon printer', '5', '4', 'images/0b0e7c5b6a08db7b20f6e9d4a1071205canon.jpg', '<p>this is very nice printer.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `address`) VALUES
(1, 'amit', 'andipara', 'testing@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
(2, 'amit', 'andipara', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
(3, 'amit', 'andipara', 'testing@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
(4, 'amit', 'andipara', 'testing@gmail.com', '82d5984c2a2ad4c62caf1dd073b1c91c', '9925010051', 'rajkot'),
(5, 'amit', 'andipara', 'testing@gmail.com', 'cc0bd5832b4e1465a6987d953bb767af', '9925010051', 'rajkot'),
(6, 'amit', 'andipara', 'test@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', '9925010051', 'rajkot'),
(7, 'amit', 'andipara', 'zala@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9925010051', 'rajkot'),
(8, 'amit', 'andipara', 'amit.andipara@gmail.com', '0cb1eb413b8f7cee17701a37a1d74dc3', '9925010051', 'rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_contact_title`
--
ALTER TABLE `about_contact_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_contact_title`
--
ALTER TABLE `about_contact_title`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
