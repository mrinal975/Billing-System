-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 03:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'aaaaa'),
(2, 'qwe'),
(3, 'biscuit');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(225) NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `customer_mobile` varchar(17) NOT NULL,
  `customer_address` varchar(225) NOT NULL,
  `customer_gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `customer_email`, `customer_mobile`, `customer_address`, `customer_gender`) VALUES
(3, 'Mrinal', 'sda@gmail.com', '01515298780', 'asdad', 'Male'),
(4, 'asd', 'sa@gmail.com', '01515298780', 'sd', ''),
(5, 'as', 'sda@gmail.com', '01515298780', 'sas', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_details` varchar(225) NOT NULL,
  `product_quantity` int(11) DEFAULT '0',
  `product_name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_details`, `product_quantity`, `product_name`) VALUES
(9, 3, ' as', 0, 'as'),
(10, 1, 'se ', 0, 'ami'),
(11, 1, 'aaaaa', 0, 'ami'),
(12, 1, 'qw', 0, 'ami'),
(13, 1, ' this is mind blowing', 0, 'kl'),
(14, 2, ' qw', 0, 'qw'),
(15, 2, ' sa', 0, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `purchase_totalprice` double NOT NULL,
  `purchase_instantpay` double NOT NULL,
  `purchase_paymentdue` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `purchase_totalprice`, `purchase_instantpay`, `purchase_paymentdue`) VALUES
(1, 684, 547, 4);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `purchase_details_tax` double NOT NULL,
  `purchase_details_discount` double NOT NULL,
  `purchase_details_price` double NOT NULL,
  `purchase_details_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `purchase_details_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `purchase_details`
--
DELIMITER $$
CREATE TRIGGER `addition` BEFORE INSERT ON `purchase_details` FOR EACH ROW BEGIN
UPDATE product SET product.product_quantity = product.product_quantity +  new.purchase_details_quantity WHERE id=new.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `sell_totalprice` double NOT NULL,
  `sell_instantpay` double NOT NULL,
  `sell_paymentdue` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `sell_totalprice`, `sell_instantpay`, `sell_paymentdue`) VALUES
(1, 123, 5646, 3213);

-- --------------------------------------------------------

--
-- Table structure for table `sell_details`
--

CREATE TABLE `sell_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `sell_id` int(11) NOT NULL,
  `sell_details_tax` double NOT NULL,
  `sell_details_discount` double NOT NULL,
  `sell_details_price` double NOT NULL,
  `sell_details_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sell_details_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `sell_details`
--
DELIMITER $$
CREATE TRIGGER `subtraction` BEFORE INSERT ON `sell_details` FOR EACH ROW BEGIN
UPDATE product SET product.product_quantity = product.product_quantity - new.sell_details_quantity WHERE id=new.product_id;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`,`category_id`),
  ADD KEY `fk_category_category1_idx` (`category_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`,`product_id`,`product_category_id`,`purchase_id`),
  ADD KEY `fk_product_product1_idx` (`product_id`,`product_category_id`),
  ADD KEY `fk_purchase_purchase1_idx` (`purchase_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_details`
--
ALTER TABLE `sell_details`
  ADD PRIMARY KEY (`id`,`product_id`,`product_category_id`,`customer_id`,`sell_id`),
  ADD KEY `fk_product_product2_idx` (`product_id`,`product_category_id`),
  ADD KEY `fk_sell_sell1_idx` (`sell_id`),
  ADD KEY `fk_customer_customer1_idx` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sell_details`
--
ALTER TABLE `sell_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `fk_product_product1` FOREIGN KEY (`product_id`,`product_category_id`) REFERENCES `product` (`id`, `category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_purchase_purchase1` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sell_details`
--
ALTER TABLE `sell_details`
  ADD CONSTRAINT `fk_customer_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_product2` FOREIGN KEY (`product_id`,`product_category_id`) REFERENCES `product` (`id`, `category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sell_sell1` FOREIGN KEY (`sell_id`) REFERENCES `sell` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
