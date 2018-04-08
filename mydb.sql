-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 10:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adloginfo`
--

CREATE TABLE `adloginfo` (
  `ip` varchar(30) NOT NULL,
  `browser` varchar(70) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adloginfo`
--

INSERT INTO `adloginfo` (`ip`, `browser`, `date`) VALUES
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; r', '2011-08-25 22:55:03'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; r', '2011-08-30 08:42:20'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; r', '2011-08-30 13:36:32'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-30 19:59:33'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-30 21:27:45'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 12:36:46'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 12:38:55'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 12:39:12'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 15:57:03'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 15:57:18'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 15:58:04'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-08-31 16:10:02'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-01 10:23:23'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-01 20:46:16'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-01 23:15:10'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-02 18:09:02'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-03 18:06:55'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-04 12:43:38'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-04 15:49:09'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-05 12:10:29'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-05 13:30:02'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-07 13:01:05'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-07 15:15:26'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-07 23:24:51'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-09 14:04:43'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-11 19:17:57'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-13 10:48:27'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-14 13:57:53'),
('127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.5) Gecko/2009', '2011-09-15 10:37:43'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-15 15:32:48'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-16 08:35:57'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-16 16:14:15'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-16 19:29:28'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-17 10:14:21'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-17 12:55:08'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:7.0) Gecko/20100101 Firefox/7.0', '2011-09-17 15:58:06'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.1 (KHTML, like Gecko) Chr', '2011-09-17 16:52:28'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-18 19:16:53'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-18 19:42:05'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-18 19:45:51'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-19 01:57:23'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-19 14:14:30'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-19 14:54:20'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-20 00:46:14'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-20 05:46:58'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-20 09:39:49'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-09-20 19:01:15'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-21 11:37:50'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-09-21 20:52:07'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-02 02:31:31'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-16 22:01:26'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-20 14:35:23'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-20 18:27:32'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-20 21:38:22'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-21 02:00:54'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:6.0) Gecko/20100101 Firefox/6.0', '2011-10-23 14:04:03'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2', '2011-12-02 08:54:19'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 08:53:48'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 10:07:19'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 10:09:00'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 10:10:10'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 11:34:02'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 13:13:28'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 19:53:10'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 19:53:55'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 19:54:13'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 19:57:04'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-07 23:11:17'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Fire', '2018-04-08 12:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `bidreport`
--

CREATE TABLE `bidreport` (
  `bidid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `bidder` varchar(60) NOT NULL,
  `biddatetime` varchar(60) NOT NULL,
  `bidamount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidreport`
--

INSERT INTO `bidreport` (`bidid`, `productid`, `bidder`, `biddatetime`, `bidamount`, `status`) VALUES
(43, 29, '23', '2018-04-07 09:13:14', 130, 0),
(44, 29, '23', '2018-04-07 09:13:30', 150, 0),
(45, 30, '26', '2018-04-07 11:53:19', 2000, 0),
(46, 30, '26', '2018-04-07 14:43:59', 3000, 0),
(47, 30, '26', '2018-04-07 14:47:31', 4000, 0),
(48, 30, '26', '2018-04-07 14:48:28', 5000, 0),
(49, 30, '26', '2018-04-07 14:48:57', 6000, 0),
(50, 30, '26', '2018-04-07 14:49:35', 7000, 0),
(51, 30, '26', '2018-04-07 14:50:00', 9000, 0),
(52, 30, '26', '2018-04-07 14:51:32', 9500, 0),
(53, 30, '26', '2018-04-07 14:52:22', 10000, 0),
(54, 30, '26', '2018-04-07 14:54:10', 11500, 0),
(55, 30, '26', '2018-04-07 15:04:53', 34000, 0),
(56, 30, '26', '2018-04-07 15:38:30', 3333333, 0),
(57, 30, '26', '2018-04-07 15:40:42', 9193193, 0),
(58, 29, '26', '2018-04-07 16:29:00', 200, 0),
(59, 29, '26', '2018-04-07 16:29:51', 200, 0),
(60, 29, '26', '2018-04-07 16:30:02', 300, 0),
(61, 29, '26', '2018-04-07 16:30:21', 300, 0),
(62, 29, '26', '2018-04-07 16:31:28', 400, 0),
(63, 29, '26', '2018-04-07 16:33:33', 300, 0),
(64, 29, '26', '2018-04-07 16:33:40', 500, 0),
(65, 29, '26', '2018-04-07 16:34:04', 600, 0),
(66, 29, '26', '2018-04-07 16:35:45', 600, 0),
(67, 29, '26', '2018-04-07 16:35:55', 700, 0),
(68, 29, '23', '2018-04-07 17:10:16', 900, 0),
(69, 29, '26', '2018-04-07 19:45:14', 1000, 0),
(70, 29, '26', '2018-04-07 19:45:28', 1000, 0),
(71, 29, '26', '2018-04-07 19:45:35', 1200, 0),
(72, 33, '26', '2018-04-07 20:16:56', 100, 0),
(73, 41, '36', '2018-04-08 13:10:05', 1000, 0),
(74, 41, '36', '2018-04-08 13:10:43', 1000, 0),
(75, 41, '36', '2018-04-08 13:11:47', 1000, 0),
(76, 40, '36', '2018-04-08 13:12:06', 2000, 0),
(77, 40, '36', '2018-04-08 13:12:15', 2000, 0),
(78, 40, '36', '2018-04-08 13:13:33', 2000, 0),
(79, 40, '36', '2018-04-08 13:15:08', 2000, 0),
(81, 38, '37', '2018-04-08 13:16:49', 200, 0),
(82, 37, '37', '2018-04-08 13:17:14', 700, 0),
(83, 39, '37', '2018-04-08 13:20:10', 900, 0),
(84, 34, '37', '2018-04-08 13:20:33', 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `memberid` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(60) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`memberid`, `ip`, `browser`, `date`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefo', '2011-09-20 19:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberid` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` int(11) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `verification` varchar(5) NOT NULL DEFAULT 'yes',
  `memberimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberid`, `lastname`, `firstname`, `gender`, `userid`, `password`, `email`, `contactno`, `birthdate`, `address`, `verification`, `memberimg`) VALUES
(36, 'Rahul', 'Jain', 'Male', 'member', 'password', 'rahul@gmail.com', 2147483647, '12 September 1996', 'Gwalior ABV-IIITM', 'yes', 'Curly-Wavy-Hair-Men-Hairstyles-Best-Style-Beard-White-Shirt-.jpg'),
(37, 'Sehgal', 'Simran', 'Female', 'member2', 'password', 'simran@gmail.com', 2147483647, '8 May 1996', 'Chandigarh ', 'yes', 'hair-styles.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `msgnotifs`
--

CREATE TABLE `msgnotifs` (
  `msgnotifsid` int(11) NOT NULL,
  `toid` varchar(11) NOT NULL,
  `fromid` varchar(11) NOT NULL,
  `msgnotif` varchar(300) NOT NULL,
  `datecreated` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgnotifs`
--

INSERT INTO `msgnotifs` (`msgnotifsid`, `toid`, `fromid`, `msgnotif`, `datecreated`, `status`) VALUES
(1, 'admin', '1', 'bwahahahahaha', 'ddfdfdfdfdf', 1),
(2, 'admin', '1', 'dsfsdfdsfdsfdsfds', '', 1),
(3, 'admin', '1', 'tinarso. . indi na ko kabalo sang hilimuon', '09-9977=098', 1);

-- --------------------------------------------------------

--
-- Table structure for table `needtopay`
--

CREATE TABLE `needtopay` (
  `needtopayid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `declined` int(11) NOT NULL,
  `dateadded` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needtopay`
--

INSERT INTO `needtopay` (`needtopayid`, `memberid`, `productid`, `status`, `payment`, `declined`, `dateadded`) VALUES
(267, 16, 2, 0, 1000, 0, '2011-10-20 20:21:52'),
(268, 2, 2, 0, 55555555, 0, '2011-10-20 20:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `pcategories`
--

CREATE TABLE `pcategories` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `catimage` varchar(100) NOT NULL,
  `categorydes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcategories`
--

INSERT INTO `pcategories` (`categoryid`, `categoryname`, `catimage`, `categorydes`) VALUES
(9, 'Laptop Computers', 'p2.gif', ''),
(10, 'Cellphones', 'phone4.jpg', ''),
(11, 'Computer Accessories', 'index1111.jpg', ''),
(12, 'Desktop Computers', 'index.jpg', ''),
(13, 'Jewelries', 'jewelries.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `prodname` varchar(30) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `prodescription` varchar(300) NOT NULL,
  `startingbid` int(11) NOT NULL,
  `prodimage` varchar(100) NOT NULL,
  `regularprice` int(11) NOT NULL,
  `dateposted` date NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `sellername` varchar(30) NOT NULL,
  `sellerpayaccount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `prodname`, `categoryid`, `prodescription`, `startingbid`, `prodimage`, `regularprice`, `dateposted`, `duedate`, `status`, `start_time`, `sellername`, `sellerpayaccount`) VALUES
(34, 'ACER PREDATOR LAPTOP', 0, 'Acer Predator Helios 300 Core i7 7th Gen - (8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/4 GB Graphics) G3-572 Gaming Laptop  (15.6 inch, Black, 2.7 kg)', 1000, 'acer-na-notebook-original-imaewhwtbtzwe7ct.jpeg', 1500, '2018-04-08', '2018-04-22', '0', '2018-04-08 00:00:00', '', ''),
(37, 'Billion 1100 W Iron', 0, 'Billion 1100 W Non-stick Extra-power XR126 Dry Iron  (White and Black)', 200, 'billion-1100-w-non-stick-extra-power-xr126-original-imaf4yqm8b6xzrjn.jpeg', 500, '2018-04-08', '2018-04-22', '0', '2018-04-08 00:00:00', '', ''),
(38, 'Flipkart SmartBuy Bedsheet ', 0, 'Flipkart SmartBuy 104 TC Microfiber Double 3D Printed Bedsheet  (1 Bedsheet, 2 Pillow Covers, Multicolor)', 30, 'premium-fsb3d06-flat-flipkart-smartbuy-original-imaew6gyjbhpefgh.jpeg', 100, '2018-04-08', '2018-04-22', '0', '2018-04-08 00:00:00', '', ''),
(39, 'Puma Carme Sneakers For Men', 0, 'Puma Carme Mid IDP Sneakers For Men  (Blue)', 400, 'electric-blue-lemonade-mazarine-blue-carme-mid-idp-puma-6-original-imaemphdat9gwhhp.jpeg', 1000, '2018-04-08', '2018-04-22', '0', '2018-04-08 00:00:00', '', ''),
(40, 'Introduction To Algorithms', 0, 'Introduction To Algorithms 3/e  (Cormen)', 600, 'introduction-to-algorithms-3-e-original-imaex8gz7ydkx4ms.jpeg', 2000, '2018-04-08', '2018-04-22', '0', '2018-04-08 00:00:00', '', ''),
(41, 'Mi Band - HRX Edition', 0, 'Mi Band - HRX Edition  (Black Strap Regular)', 700, 'band-lite-mi-original-imaexhfn3ybmkjc9.jpeg', 3200, '2018-04-08', '2018-04-22', '0', '2018-04-08 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `secretquestions`
--

CREATE TABLE `secretquestions` (
  `memberid` int(11) NOT NULL,
  `question` varchar(60) NOT NULL,
  `answer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretquestions`
--

INSERT INTO `secretquestions` (`memberid`, `question`, `answer`) VALUES
(2, 'Am I Gorgeous?', 'Am I Gorgeous?'),
(3, 'Am I Gorgeous?', ''),
(4, 'Am I Gorgeous?', 'Your Secret Answer:'),
(5, 'Pick a Security Question', 'Your Secret Answer:'),
(6, '', ''),
(7, 'Pick a Security Question', 'Your Secret Answer:'),
(8, 'Pick a Security Question', 'Your Secret Answer:'),
(9, 'Pick a Security Question', 'Your Secret Answer:'),
(10, 'Am I Gorgeous?', 'dfdghfghtht'),
(11, 'Pick a Security Question', 'Your Secret Answer:'),
(13, 'Am I Gorgeous?', 'te4'),
(14, 'Am I Gorgeous?', 'te4'),
(0, 'Am I Gorgeous?', 'vfv'),
(0, 'Pick a Security Question', 'Your Secret Answer:'),
(15, 'Am I Gorgeous?', 'yes'),
(16, 'Am I Gorgeous?', 'yezzz'),
(6, 'Pick a Security Question', 'Your Secret Answer:'),
(18, 'Am I Gorgeous?', 'yezzz'),
(17, 'Am I Gorgeous?', 'yezzz'),
(19, 'Am I Gorgeous?', '12121'),
(20, 'Am I Gorgeous?', '234234234'),
(21, 'Pick a Security Question', 'Your Secret Answer:'),
(21, 'Pick a Security Question', 'Your Secret Answer:'),
(23, 'Name of my Pet?', 'tommy'),
(24, 'Pick a Security Question', 'Your Secret Answer:'),
(24, 'Pick a Security Question', 'Your Secret Answer:'),
(26, 'Name of my Pet?', 'roy'),
(26, 'Name of my Pet?', 'roy'),
(28, 'Am I Gorgeous?', 'sasas'),
(30, 'Am I Gorgeous?', 'ss'),
(32, 'Am I Gorgeous?', '4343'),
(32, 'Am I Gorgeous?', '4343'),
(37, 'Am I Gorgeous?', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `memberid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`memberid`, `productid`) VALUES
(1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidreport`
--
ALTER TABLE `bidreport`
  ADD PRIMARY KEY (`bidid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `msgnotifs`
--
ALTER TABLE `msgnotifs`
  ADD PRIMARY KEY (`msgnotifsid`);

--
-- Indexes for table `needtopay`
--
ALTER TABLE `needtopay`
  ADD PRIMARY KEY (`needtopayid`);

--
-- Indexes for table `pcategories`
--
ALTER TABLE `pcategories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidreport`
--
ALTER TABLE `bidreport`
  MODIFY `bidid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `msgnotifs`
--
ALTER TABLE `msgnotifs`
  MODIFY `msgnotifsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `needtopay`
--
ALTER TABLE `needtopay`
  MODIFY `needtopayid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `pcategories`
--
ALTER TABLE `pcategories`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
