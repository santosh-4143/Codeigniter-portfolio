-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2017 at 11:56 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0-> active, 1->deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `date`, `is_deleted`) VALUES
(1, 'Atanu Samanta', 'atanu@gmail.com', 'this is atanu samanta', '2017-05-22 15:49:50', '1'),
(2, 'sagar', 'sagar@gmail.com', 'vjsj shdsdhs skdhskdhskjdhskj', '2017-05-22 15:48:47', '0'),
(3, 'rahul', 'rahul@gmail.com', 'bhshbjbsd hsbdsgdhsdsdhs', '2017-05-22 15:49:40', '0'),
(4, 'rahul', 'rahul@gmail.com', 'bhshbjbsd hsbdsgdhsdsdhs', '2017-05-22 16:08:53', '0'),
(5, 'karan', 'karan@gmaiil.com', 'hxgs skdhshs sjkdhsihs sjdkshduisi', '2017-05-24 05:40:23', '0');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(5) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_title`, `img_category`, `description`, `photo`, `created_at`, `is_deleted`) VALUES
(1, 'First Image', 'sketch', 'This is first Image', 'http://portfolio.local/uploads/p12.jpg', '2017-05-24 05:03:10', '0'),
(2, 'Second Image', 'sketch', 'This is Second Image', 'http://portfolio.local/uploads/p21.jpg', '2017-05-24 05:03:33', '0'),
(3, 'Third Image', 'Oil Painting', 'This is Third Image', 'http://portfolio.local/uploads/p33.jpg', '2017-05-24 05:03:51', '0'),
(4, 'Fourth Image', 'Oil Painting', 'This is Fourth Image', 'http://portfolio.local/uploads/p45.jpg', '2017-05-24 05:04:12', '0'),
(5, 'Fifth Image', 'Glass Painting', 'This is Fifth Image', 'http://portfolio.local/uploads/p515.jpg', '2017-05-24 05:04:33', '0'),
(6, 'Sixth Image', 'Glass Painting', 'This is Sixth Image', 'http://portfolio.local/uploads/p65.jpg', '2017-05-24 05:04:53', '0'),
(7, 'Seventh Image', 'Others', 'This is Seventh Image', 'http://portfolio.local/uploads/p75.jpg', '2017-05-24 05:05:13', '0'),
(8, 'Eight Image', 'Others', 'This is Eight Image', 'http://portfolio.local/uploads/p81.jpg', '2017-05-24 05:05:39', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_mobile` bigint(10) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `admin_username`, `admin_email`, `admin_mobile`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 1234567890, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
