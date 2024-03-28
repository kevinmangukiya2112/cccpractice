-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 02:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tables`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `image`) VALUES
(2, 'banner', 'p1mad1.jpg'),
(3, 'banner2', 'WhatsApp Image 2023-11-30 at 15.49.41_227a6e17.jpg'),
(5, '', 'formalshoes.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_category`
--

CREATE TABLE `catalog_category` (
  `category_name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_category`
--

INSERT INTO `catalog_category` (`category_name`, `status`, `category_id`) VALUES
('cname', 1, 1),
('category1', 0, 2),
('category2', 0, 3),
('category2', 0, 4),
('category4', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product`
--

CREATE TABLE `catalog_product` (
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_link` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `mfr_cost` decimal(12,2) DEFAULT NULL,
  `shipping_cost` decimal(12,2) DEFAULT NULL,
  `total_cost` decimal(12,2) DEFAULT NULL,
  `margin_percentage` int(11) DEFAULT NULL,
  `min_price` decimal(12,2) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `inventory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_product`
--

INSERT INTO `catalog_product` (`product_id`, `sku`, `name`, `color`, `size`, `description`, `image_link`, `link`, `category_id`, `price`, `mfr_cost`, `shipping_cost`, `total_cost`, `margin_percentage`, `min_price`, `status`, `inventory`) VALUES
(1, '1', 'bike', 'black', '50', 'black bike with top speed of 260kmph', 'bike.jpg', '', 1, 250000.00, 120000.00, 20000.00, 150000.00, 40, 225000.00, 1, 58),
(2, '13', 'car', 'black', '67', 'porsce car ', 'car.jpg', '', 1, 1.00, 50.00, 25.00, 65.00, 35, 98.00, 1, 199),
(3, '1', 'horse', 'brown', '90', 'horse from north gujarat', 'horse.jpg', '', 2, 150000.00, 100000.00, 10000.00, 110000.00, 33, 140000.00, 0, 84),
(4, '2', 'shoes', 'brown', '87', 'formal shoes with less', 'formalshoes.jpeg', '', 3, 2000.00, 800.00, 100.00, 1000.00, 50, 1800.00, 1, 999),
(5, '34', 'shoes', 'white', '87', 'party shoes with less of xyz brand ', 'shoes.jpeg', NULL, 4, 2500.00, 1000.00, 100.00, 1250.00, 50, 2000.00, 0, 1020),
(6, '1', 'anything', 'blue', '234', '', 'p1mad1.jpg', NULL, 1, 2345.00, 231.00, 234.00, 600.00, 70, 1200.00, 1, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `ccc_agent`
--

CREATE TABLE `ccc_agent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_agent`
--

INSERT INTO `ccc_agent` (`id`, `name`) VALUES
(1, 'alka patel'),
(6, 'nisha shah');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_client`
--

CREATE TABLE `ccc_client` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_client`
--

INSERT INTO `ccc_client` (`id`, `agent_id`, `name`) VALUES
(1, 1, 'sanjay'),
(2, 1, 'sanjana'),
(3, 1, 'raju'),
(4, 6, 'ramesh'),
(5, 6, 'ashok');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_license_request`
--

CREATE TABLE `ccc_license_request` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `licence_type` varchar(255) DEFAULT NULL,
  `total_rate` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_license_request`
--

INSERT INTO `ccc_license_request` (`id`, `session_id`, `user_name`, `state`, `licence_type`, `total_rate`, `created_at`) VALUES
(2, 'h7e4e53jmhqousq69r02v3btif', 'kevin', 'delhi', 'LL', 300, '2024-03-07'),
(3, 'h7e4e53jmhqousq69r02v3btif', 'kevin', 'gujarat', 'LL,DL', 450, '2024-03-07'),
(4, 'h7e4e53jmhqousq69r02v3btif', 'mangukiya', 'delhi', 'LL', 300, '2024-03-07'),
(5, 'h7e4e53jmhqousq69r02v3btif', 'kevin', 'gujarat', 'DL', 250, '2024-03-07'),
(6, 'h7e4e53jmhqousq69r02v3btif', 'kevin', 'gujarat', 'DL', 250, '2024-03-07'),
(7, 'h7e4e53jmhqousq69r02v3btif', 'kevin', 'gujarat', 'DL', 250, '2024-03-07'),
(8, 'jq34bojqqbltdsu158si0pc0t8', 'mangukiya', 'maharashtra', 'DL', 200, '2024-03-07'),
(9, NULL, 'mangukiya', 'delhi', 'LL,DL', 0, NULL),
(10, NULL, 'mangukiyahhhhhhhhhh', 'delhi', 'LL,DL', 0, NULL),
(11, NULL, 'mangukiyahhhhhhhhhh', 'delhi', 'll,dl', 650, NULL),
(12, NULL, 'mangukiyahhhhhhhhhh', 'delhi', 'll,dl', 650, '2024-03-07 11:51:07'),
(13, 'jq34bojqqbltdsu158si0pc0t8', 'mangukiyahhhhhhhhhh', 'delhi', 'll,dl', 650, '2024-03-07 11:53:18'),
(14, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'LL,DL,off,off', 0, '2024-03-10 06:35:33'),
(15, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'LL,,', 0, '2024-03-10 06:37:13'),
(16, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'LL,DL,,', 0, '2024-03-10 06:39:18'),
(17, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'LL,DL,,', 0, '2024-03-11 04:40:48'),
(18, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'DL,,DL', 350, '2024-03-11 04:42:12'),
(19, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'DL,,DL', 350, '2024-03-11 04:43:58'),
(20, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'DL,,DL', 350, '2024-03-11 04:46:17'),
(21, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'LL,', 300, '2024-03-11 04:49:49'),
(22, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'LL,DL', 650, '2024-03-11 04:49:58'),
(23, '399bboi0oc03ifdimqoebpfsc4', 'ksm', 'delhi', 'DL,', 350, '2024-03-11 04:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_statewise_license_rate`
--

CREATE TABLE `ccc_statewise_license_rate` (
  `id` int(11) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `licence_type` varchar(255) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_statewise_license_rate`
--

INSERT INTO `ccc_statewise_license_rate` (`id`, `state`, `licence_type`, `rate`) VALUES
(2, 'gujarat', 'DL', 250),
(3, 'maharashtra', 'LL', 100),
(4, 'maharashtra', 'DL', 200),
(5, 'rajasthan', 'LL', 150),
(6, 'rajasthan', 'DL', 200),
(7, 'delhi', 'LL', 300),
(8, 'delhi', 'DL', 350);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL,
  `default` tinyint(4) DEFAULT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `first_name`, `last_name`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `default`, `password`) VALUES
(2, 'kevin@gmail.com', 'kevin', 'mangukiya', 'bvn', 'bvn', 0, 0, '3456786778', 'bvn', 'bvn', 0, 0, '34567345667', 0, 123456),
(3, 'kevin@gmail.com', 'kevin', '', '', '', 0, 0, '', '', '', 0, 0, '', 0, 0),
(4, 'kevin@gmail.com', 'kevin', '', '', '', 0, 0, '', '', '', 0, 0, '', 0, 0),
(5, 'hello@gmail.com', 'hello', 'hello', 'ambd', 'mbd', 0, 0, '456784567', 'ambd', 'ambd', 0, 0, '4564564567', 0, 344152),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 123456),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12345),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12345),
(11, '', '', '', '', '', 0, 0, '', '', '', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`address_id`, `customer_id`, `address`, `city`, `region`, `phone_no`, `zip_code`, `country`) VALUES
(1, 5, 'ahmd ', 'ahmd', 'india', 2147483647, 12434, 'india'),
(2, 5, 'bhavnagar', 'bhavnagar', 'surashtra', 2147483647, 234001, 'india '),
(3, 5, 'bvn', 'bvn', 'gujrat', 1234567891, 1456, 'india'),
(4, 5, 'bvn', 'bhavnagar', 'india', 9870035309, 34500, 'india'),
(5, 2, 'bvn', 'bvn', 'india', 9870035309, 23456, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `tax_percent` int(11) DEFAULT NULL,
  `grand_total` decimal(12,2) DEFAULT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`order_id`, `order_number`, `tax_percent`, `grand_total`, `shipping_id`, `payment_id`, `status`, `customer_id`) VALUES
(1, 'order1710756095', 0, 750000.00, 0, 0, 'Packeging', 0),
(2, 'order1710756095', 0, 750000.00, 1, 1, 'Pending', 0),
(3, 'order1710805654', 0, 500000.00, 3, 3, 'Delivered', 0),
(4, 'order1710805654', 0, 500000.00, 2, 2, '', 0),
(5, 'order1710822497', 0, 4300000.00, 3, 3, '', 0),
(6, 'order1710824069', 0, 4300000.00, 4, 4, '', 0),
(7, 'order1710825683', 0, 500000.00, 5, 5, 'Pending', 0),
(8, 'order1710825999', 0, 500000.00, 6, 6, 'cancelled', 0),
(9, 'order1710846972', 0, 500000.00, 7, 7, '', 0),
(10, 'order1710847038', 0, 500000.00, 8, 8, '', 0),
(11, 'order1710847063', 0, 500000.00, 9, 9, '', 0),
(12, 'order1710847129', 0, 500000.00, 10, 10, '', 0),
(13, 'order1710847186', 0, 500000.00, 11, 11, '', 0),
(14, 'order1710847202', 0, 500000.00, 12, 12, '', 0),
(15, 'order1710847226', 0, 500000.00, 13, 13, '', 0),
(16, 'order1710847244', 0, 500000.00, 14, 14, '', 0),
(17, 'order1710847307', 0, 500000.00, 15, 15, '', 0),
(18, 'order1710847421', 0, 500000.00, 16, 16, '', 0),
(19, 'order1710847472', 0, 500000.00, 17, 17, '', 0),
(20, 'order1710847500', 0, 500000.00, 18, 18, '', 0),
(21, 'order1710847534', 0, 500000.00, 19, 19, '', 0),
(22, 'order1710847593', 0, 600000.00, 20, 20, '', 0),
(23, 'order1710854533', 0, 4300000.00, 21, 21, '', 0),
(24, 'order1710908309', 0, 250000.00, 22, 22, '', 0),
(25, 'order1710912691', 0, 500001.00, 23, 23, '', 0),
(26, 'order1710914455', 0, 250000.00, 24, 24, '', 0),
(27, 'order1710914512', 0, 500000.00, 25, 25, 'confirm', 0),
(28, 'order1710914930', 0, 2750000.00, 26, 26, 'confirm', 0),
(29, 'order1710915624', 0, 250000.00, 27, 27, 'confirm', 0),
(30, 'order1710915686', 0, 2000.00, 28, 28, 'cancelled', 0),
(31, 'order1711102085', 0, 500000.00, 29, 29, 'cancelled', 5),
(32, 'order1711621931', 0, 2500000.00, 30, 30, 'pending', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_customer`
--

CREATE TABLE `sales_order_customer` (
  `order_customer_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_customer`
--

INSERT INTO `sales_order_customer` (`order_customer_id`, `order_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 3, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, '2147483647', 'ahmd ', 'ahmd', 0, 0, '2147483647'),
(2, 7, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, '9870035309', 'bvn', 'bvn', 0, 0, '9870035309'),
(3, 8, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, '9870035309', 'bvn', 'bvn', 0, 0, '9870035309'),
(4, 30, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, '9870035309', 'bvn', 'bvn', 0, 0, '9870035309'),
(5, 31, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, '2147483647', 'ahmd ', 'ahmd', 0, 0, '2147483647'),
(6, 32, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, '9870035309', 'bvn', 'bvn', 0, 0, '9870035309');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_item`
--

CREATE TABLE `sales_order_item` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `row_total` decimal(12,2) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_item`
--

INSERT INTO `sales_order_item` (`item_id`, `order_id`, `product_id`, `price`, `qty`, `row_total`, `product_name`, `product_color`) VALUES
(1, 1, 1, 250000.00, 3, 750000.00, NULL, NULL),
(2, 3, 1, 250000.00, 2, 500000.00, NULL, NULL),
(3, 5, 1, 250000.00, 10, 2500000.00, NULL, NULL),
(4, 5, 3, 150000.00, 12, 1800000.00, NULL, NULL),
(5, 6, 1, 250000.00, 10, 2500000.00, NULL, NULL),
(6, 6, 3, 150000.00, 12, 1800000.00, NULL, NULL),
(7, 7, 1, 250000.00, 2, 500000.00, NULL, NULL),
(8, 8, 1, 250000.00, 2, 500000.00, NULL, NULL),
(9, 9, 1, 250000.00, 2, 500000.00, NULL, NULL),
(10, 10, 1, 250000.00, 2, 500000.00, NULL, NULL),
(11, 11, 1, 250000.00, 2, 500000.00, NULL, NULL),
(12, 12, 1, 250000.00, 2, 500000.00, NULL, NULL),
(13, 13, 1, 250000.00, 2, 500000.00, NULL, NULL),
(14, 14, 1, 250000.00, 2, 500000.00, NULL, NULL),
(15, 15, 1, 250000.00, 2, 500000.00, NULL, NULL),
(16, 16, 1, 250000.00, 2, 500000.00, NULL, NULL),
(17, 17, 1, 250000.00, 2, 500000.00, NULL, NULL),
(18, 18, 1, 250000.00, 2, 500000.00, NULL, NULL),
(19, 19, 1, 250000.00, 2, 500000.00, NULL, NULL),
(20, 20, 1, 250000.00, 2, 500000.00, NULL, NULL),
(21, 21, 1, 250000.00, 2, 500000.00, NULL, NULL),
(22, 22, 3, 150000.00, 4, 600000.00, NULL, NULL),
(23, 23, 1, 250000.00, 10, 2500000.00, NULL, NULL),
(24, 23, 3, 150000.00, 12, 1800000.00, NULL, NULL),
(25, 24, 1, 250000.00, 1, 250000.00, NULL, NULL),
(26, 25, 1, 250000.00, 2, 500000.00, NULL, NULL),
(27, 25, 2, 1.00, 1, 1.00, NULL, NULL),
(28, 26, 1, 250000.00, 1, 250000.00, NULL, NULL),
(29, 27, 1, 250000.00, 2, 500000.00, NULL, NULL),
(30, 28, 1, 250000.00, 11, 2750000.00, NULL, NULL),
(31, 29, 1, 250000.00, 1, 250000.00, NULL, NULL),
(32, 30, 4, 2000.00, 1, 2000.00, NULL, NULL),
(33, 31, 1, 250000.00, 2, 500000.00, NULL, NULL),
(34, 32, 1, 250000.00, 10, 2500000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_payment_method`
--

CREATE TABLE `sales_order_payment_method` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `card_number` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_payment_method`
--

INSERT INTO `sales_order_payment_method` (`payment_id`, `order_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'Upi', 0),
(2, 3, 'Upi', 0),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL),
(5, 7, NULL, NULL),
(6, 8, NULL, NULL),
(7, 9, NULL, NULL),
(8, 10, 'Upi', 0),
(9, 11, 'Upi', 0),
(10, 12, 'Upi', 0),
(11, 13, 'Upi', 0),
(12, 14, 'Upi', 0),
(13, 15, 'Upi', 0),
(14, 16, 'Upi', 0),
(15, 17, 'Upi', 0),
(16, 18, 'Upi', 0),
(17, 19, 'Upi', 0),
(18, 20, 'Upi', 0),
(19, 21, 'Upi', 0),
(20, 22, 'Upi', 0),
(21, 23, 'Upi', 0),
(22, 24, 'Upi', 0),
(23, 25, 'Upi', 0),
(24, 26, 'Upi', 0),
(25, 27, 'Upi', 0),
(26, 28, 'Upi', 0),
(27, 29, 'Upi', 0),
(28, 30, 'Upi', 0),
(29, 31, 'Upi', 0),
(30, 32, 'Upi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_shipping_method`
--

CREATE TABLE `sales_order_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_shipping_method`
--

INSERT INTO `sales_order_shipping_method` (`shipping_id`, `order_id`, `shipping_method`) VALUES
(1, 1, 'Express'),
(2, 3, 'Express'),
(3, 5, NULL),
(4, 6, 'Express'),
(5, 7, 'Express'),
(6, 8, 'Express'),
(7, 9, 'Express'),
(8, 10, 'Express'),
(9, 11, 'Express'),
(10, 12, 'Express'),
(11, 13, 'Express'),
(12, 14, 'Express'),
(13, 15, 'Express'),
(14, 16, 'Express'),
(15, 17, 'Express'),
(16, 18, 'Express'),
(17, 19, 'Express'),
(18, 20, 'Express'),
(19, 21, 'Express'),
(20, 22, 'Express'),
(21, 23, 'Express'),
(22, 24, 'Express'),
(23, 25, 'Express'),
(24, 26, 'Express'),
(25, 27, 'Express'),
(26, 28, 'Express'),
(27, 29, 'Express'),
(28, 30, 'Express'),
(29, 31, 'Express'),
(30, 32, 'Express');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote`
--

CREATE TABLE `sales_quote` (
  `quote_id` int(11) NOT NULL,
  `tax_percent` int(11) DEFAULT NULL,
  `grand_total` decimal(12,2) DEFAULT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote`
--

INSERT INTO `sales_quote` (`quote_id`, `tax_percent`, `grand_total`, `shipping_id`, `payment_id`, `order_id`, `customer_id`) VALUES
(9, 0, 4300000.00, 31, 25, 23, 5),
(10, 0, 500000.00, 15, 9, 7, 2),
(11, 0, 500000.00, 16, 10, 8, 2),
(12, 0, 500000.00, 29, 23, 21, 2),
(13, 0, 7500000.00, 0, 0, 0, 0),
(14, 0, 600000.00, 30, 24, 22, 2),
(15, 0, 2750000.00, 36, 30, 28, 2),
(16, 0, 250000.00, 32, 26, 24, 5),
(17, 0, 0.00, 0, 0, 0, 0),
(18, 0, 500001.00, 33, 27, 25, 5),
(19, 0, 250000.00, 34, 28, 26, 5),
(20, 0, 500000.00, 35, 29, 27, 5),
(21, 0, 250000.00, 37, 31, 29, 2),
(22, 0, 2000.00, 38, 32, 30, 2),
(23, 0, 500000.00, 39, 33, 31, 5),
(24, 0, 0.00, 0, 0, 0, 0),
(29, 0, 33250000.00, 0, 0, 0, 5),
(30, 0, 2500000.00, 40, 34, 32, 2),
(32, 0, 0.00, 0, 0, 0, 0),
(33, 0, 500000.00, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_customer`
--

CREATE TABLE `sales_quote_customer` (
  `quote_customer_id` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` bigint(11) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_customer`
--

INSERT INTO `sales_quote_customer` (`quote_customer_id`, `quote_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 2, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(2, 2, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(3, 2, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(4, 3, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(5, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(6, 0, 5, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 1234567891, 'bvn', 'bvn', 0, 0, 1234567891),
(7, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(8, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(9, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(10, 10, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(11, 11, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(12, 13, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(13, 13, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(14, 13, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(15, 13, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(16, 0, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(17, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(18, 17, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(19, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(20, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(21, 0, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(22, 0, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(23, 0, NULL, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(24, 22, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309),
(25, 23, 5, 'kevin@2002gmail.com', 'ahmd ', 'ahmd', 0, 0, 2147483647, 'ahmd ', 'ahmd', 0, 0, 2147483647),
(26, 30, 2, 'kevin@2002gmail.com', 'bvn', 'bvn', 0, 0, 9870035309, 'bvn', 'bvn', 0, 0, 9870035309);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_item`
--

CREATE TABLE `sales_quote_item` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `row_total` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_item`
--

INSERT INTO `sales_quote_item` (`item_id`, `quote_id`, `product_id`, `price`, `qty`, `row_total`) VALUES
(4, 4, 1, 250000.00, 52, 13000000.00),
(5, 5, 1, 250000.00, 10, 2500000.00),
(6, 8, 1, 250000.00, 2, 500000.00),
(7, 9, 1, 250000.00, 10, 2500000.00),
(8, 9, 3, 150000.00, 12, 1800000.00),
(9, 10, 1, 250000.00, 2, 500000.00),
(10, 11, 1, 250000.00, 2, 500000.00),
(11, 12, 1, 250000.00, 2, 500000.00),
(12, 13, 1, 250000.00, 30, 7500000.00),
(13, 14, 3, 150000.00, 4, 600000.00),
(14, 15, 1, 250000.00, 11, 2750000.00),
(15, 16, 1, 250000.00, 1, 250000.00),
(16, 18, 1, 250000.00, 2, 500000.00),
(17, 18, 2, 1.00, 1, 1.00),
(18, 19, 1, 250000.00, 1, 250000.00),
(19, 20, 1, 250000.00, 2, 500000.00),
(20, 21, 1, 250000.00, 1, 250000.00),
(21, 22, 4, 2000.00, 1, 2000.00),
(22, 23, 1, 250000.00, 2, 500000.00),
(23, 25, 1, 250000.00, 2, 500000.00),
(24, 26, 1, 250000.00, 1, 250000.00),
(25, 27, 3, 150000.00, 2, 300000.00),
(26, 28, 3, 150000.00, 2, 300000.00),
(34, 29, 1, 250000.00, 33, 33250000.00),
(36, 30, 1, 250000.00, 10, 2500000.00),
(37, 33, 1, 250000.00, 2, 500000.00);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_payment_method`
--

CREATE TABLE `sales_quote_payment_method` (
  `payment_id` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `card_number` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_payment_method`
--

INSERT INTO `sales_quote_payment_method` (`payment_id`, `quote_id`, `payment_method`, `card_number`) VALUES
(1, 2, 'Upi', 0),
(2, 2, 'Upi', 0),
(3, 2, 'Upi', 0),
(4, 3, 'Upi', 0),
(5, 0, 'Upi', 0),
(6, 0, 'Upi', 0),
(7, 9, 'Upi', 0),
(8, 9, 'Upi', 0),
(9, 10, 'Upi', 0),
(10, 11, 'Upi', 0),
(11, 12, 'Upi', 0),
(12, 12, 'Upi', 0),
(13, 12, 'Upi', 0),
(14, 12, 'Upi', 0),
(15, 12, 'Upi', 0),
(16, 12, 'Upi', 0),
(17, 12, 'Upi', 0),
(18, 12, 'Upi', 0),
(19, 12, 'Upi', 0),
(20, 12, 'Upi', 0),
(21, 12, 'Upi', 0),
(22, 12, 'Upi', 0),
(23, 12, 'Upi', 0),
(24, 14, 'Upi', 0),
(25, 9, 'Upi', 0),
(26, 16, 'Upi', 0),
(27, 18, 'Upi', 0),
(28, 19, 'Upi', 0),
(29, 20, 'Upi', 0),
(30, 15, 'Upi', 0),
(31, 21, 'Upi', 0),
(32, 22, 'Upi', 0),
(33, 23, 'Upi', 0),
(34, 30, 'Upi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_shipping_method`
--

CREATE TABLE `sales_quote_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_shipping_method`
--

INSERT INTO `sales_quote_shipping_method` (`shipping_id`, `quote_id`, `shipping_method`) VALUES
(1, 2, 'Express'),
(2, 2, 'Express'),
(3, 2, 'Express'),
(4, 3, 'Express'),
(5, 0, 'Express'),
(6, 0, 'Express'),
(7, 9, 'Express'),
(8, 9, 'Express'),
(9, 9, 'Express'),
(10, 9, 'Express'),
(11, 9, 'Express'),
(12, 9, 'Express'),
(13, 9, 'Express'),
(14, 9, 'Express'),
(15, 10, 'Express'),
(16, 11, 'Express'),
(17, 12, 'Express'),
(18, 12, 'Express'),
(19, 12, 'Express'),
(20, 12, 'Express'),
(21, 12, 'Express'),
(22, 12, 'Express'),
(23, 12, 'Express'),
(24, 12, 'Express'),
(25, 12, 'Express'),
(26, 12, 'Express'),
(27, 12, 'Express'),
(28, 12, 'Express'),
(29, 12, 'Express'),
(30, 14, 'Express'),
(31, 9, 'Express'),
(32, 16, 'Express'),
(33, 18, 'Express'),
(34, 19, 'Express'),
(35, 20, 'Express'),
(36, 15, 'Express'),
(37, 21, 'Express'),
(38, 22, 'Express'),
(39, 23, 'Express'),
(40, 30, 'Express');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `catalog_category`
--
ALTER TABLE `catalog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ccc_agent`
--
ALTER TABLE `ccc_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_client`
--
ALTER TABLE `ccc_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_license_request`
--
ALTER TABLE `ccc_license_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_statewise_license_rate`
--
ALTER TABLE `ccc_statewise_license_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  ADD PRIMARY KEY (`order_customer_id`);

--
-- Indexes for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sales_quote`
--
ALTER TABLE `sales_quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  ADD PRIMARY KEY (`quote_customer_id`);

--
-- Indexes for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catalog_category`
--
ALTER TABLE `catalog_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catalog_product`
--
ALTER TABLE `catalog_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ccc_agent`
--
ALTER TABLE `ccc_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ccc_client`
--
ALTER TABLE `ccc_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ccc_license_request`
--
ALTER TABLE `ccc_license_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ccc_statewise_license_rate`
--
ALTER TABLE `ccc_statewise_license_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  MODIFY `order_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sales_quote`
--
ALTER TABLE `sales_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  MODIFY `quote_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
