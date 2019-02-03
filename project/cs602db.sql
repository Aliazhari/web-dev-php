-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2018 at 02:14 AM
-- Server version: 5.7.20
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs602db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `addressID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `line1` varchar(60) NOT NULL,
  `line2` varchar(60) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`addressID`, `customerID`, `line1`, `line2`, `city`, `state`, `zipCode`, `phone`, `disabled`) VALUES
(1, 1, '100 East Ridgewood Ave.', '', 'Paramus', 'NJ', '07652', '201-653-4472', 0),
(2, 1, '21 Rosewood Rd.', '', 'Woodcliff Lake', 'NJ', '07677', '201-653-4472', 0),
(3, 2, '16285 Wendell St.', '', 'Omaha', 'NE', '68135', '402-896-2576', 0),
(4, 2, '16285 Wendell St.', '', 'Omaha', 'NE', '68135', '402-896-2576', 0),
(5, 3, '19270 NW Cornell Rd.', '', 'Beaverton', 'OR', '97006', '503-654-1291', 0),
(6, 3, '19270 NW Cornell Rd.', '', 'Beaverton', 'OR', '97006', '503-654-1291', 0);

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `adminID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`adminID`, `emailAddress`, `password`, `firstName`, `lastName`) VALUES
(1, 'admin@cs602.com', 'sesame', 'Admin', 'User'),
(2, 'joel@murach.com', 'sesame', 'Joel', 'Murach'),
(3, 'mike@murach.com', 'sesame', 'Mike', 'Murach');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandID`, `brandName`) VALUES
(1, 'PHP'),
(2, 'MongoDB'),
(3, 'Nodejs'),
(4, 'Mysql'),
(5, 'Express'),
(6, 'Apache'),
(7, 'HTML'),
(8, 'CSS'),
(9, 'Javascript'),
(10, 'MVC');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Shoes'),
(2, 'Coat'),
(3, 'Shirt'),
(4, 'Pants'),
(5, 'dress'),
(6, 'romper');

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `clothingID` int(11) NOT NULL,
  `clothingName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`clothingID`, `clothingName`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `shipAddressID` int(11) DEFAULT NULL,
  `billingAddressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `emailAddress`, `password`, `firstName`, `lastName`, `shipAddressID`, `billingAddressID`) VALUES
(1, 'john@smith.com', 'johnsmith', 'John', 'Smith', 1, 2),
(2, 'Jane@doe.com', 'janedoe', 'Jane', 'Doe', 3, 4),
(3, 'azhari@bu.edu', '1234', 'Abdelali', 'Azhari', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `orderDate`) VALUES
(16, 3, '2018-03-01 19:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderID`, `ProductID`, `quantity`, `price`) VALUES
(16, 2, 1, '200.00'),
(16, 6, 12, '800.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productCategory` int(11) NOT NULL,
  `productBrand` int(11) NOT NULL,
  `productClothing` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productPicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDescription`, `productCategory`, `productBrand`, `productClothing`, `productQuantity`, `productPrice`, `productPicture`) VALUES
(3, 'Nodejs Coat', 'Designed to keep you warm and stylish at the same time, this hooded systems coat from Nodejs will be your go-to choice throughout the season and beyond.', 2, 3, 1, 100, '300.00', 'images/products/men/coat_2_3_1.jpeg'),
(4, 'Mysql Coat', 'Boasting four flap snap pockets plus an interior zip pocket to secure your essentials, this hooded field jacket from Mysql will be your go-to choice when both style and utility matter.', 2, 4, 1, 400, '1999.00', 'images/products/men/coat_2_4_1.jpeg'),
(5, 'Express Coat', 'Special details like a fleece-lined chin guard and pockets, and a wind-stopper front, make this colorblocked hooded jacket from Express. Outfitter the perfect choice when style and warmth are equally important.', 2, 5, 1, 2, '100.00', 'images/products/men/coat_2_5_1.jpeg'),
(6, 'Apache Coat', 'Enhanced by water and wind resistant properties, this open-bottom jacket from Apache features fleece lining for added warmth and a removable hood for extra versatility.', 2, 6, 1, 90, '80.00', 'images/products/men/coat_2_6_1.jpeg'),
(7, 'HTML Coat', 'Gatebreak Fill-Down Jacket. When the whether takes a cold turn, this Loden hooded parka from HTML will warrant a warm welcome.', 2, 7, 1, 3, '70.00', 'images/products/men/coat_2_7_1.jpeg'),
(8, 'CSS Coat', 'A sleek two-toned colorblocked design is the perfect complement to the quilting and attached hood, giving this CSS jacket the ideal blend of style and comfort.', 2, 8, 1, 2, '73.00', 'images/products/men/coat_2_8_1.jpeg'),
(9, 'Javascript Coat', 'Lined Hooded Jacket. Enhanced by water and wind resistant properties, this open-bottom jacket from Javascript features fleece lining for added warmth and a removable hood for extra versatility.', 2, 9, 1, 1, '300.00', 'images/products/men/coat_2_10_1.jpeg'),
(10, 'PHP Shoes', 'The stylish sneakers look of these loafers by  PHP will keep you weekend-ready seven days a week.', 1, 1, 1, 2, '80.00', 'images/products/men/shoes_1_1_1.jpeg'),
(11, 'MongoDB Shoes', 'Men Air Monarch IV Wide Training Sneakers From Finish Line', 1, 2, 1, 30, '50.00', 'images/products/men/shoes_1_2_1.jpeg'),
(12, 'Nodejs Shoes', 'Stylish and innovative, the adidas Men NMD R1 Casual sneaker brings running innovations to a casual silhouette. Step up your look with these upgraded, fashion-forward sneakers.\r\n', 1, 3, 1, 2, '130.00', 'images/products/men/shoes_1_3_1.jpeg'),
(13, 'PHP Coat', 'Styled in a modern, asymmetrical silhouette, PHP walker coat is a chic look that pairs perfectly with everything.\r\n', 2, 1, 2, 1, '179.00', 'images/products/women/coat1.jpeg'),
(14, 'MongoDB', 'Designed with a modern zipper front, MongoDB walker coat features a removable hood for customizable coziness.\r\n', 2, 2, 2, 2, '300.00', 'images/products/women/coat2.jpeg'),
(15, 'Nodejs Coat', 'The polished silhouette of Nodejs walker coat is created by a notched collar and belter button front.\r\n', 2, 3, 2, 1, '170.00', 'images/products/women/coat3.jpeg'),
(16, 'Mysql Coat', 'The flattering, asymmetrical design of MYSQL walker coat is emphasized by the single button closure. Zipper pockets add a metallic finish to this sophisticated piece.\r\n', 2, 4, 2, 6, '400.00', 'images/products/women/coat4.jpeg'),
(17, 'PHP Pants', 'Perfectly fitted to style with tailored button-downs and two-button blazers. Round out your dress wardrobe with classic black pants from PHP.\r\n', 4, 1, 1, 1, '70.00', 'images/products/men/pants_4_1_1.jpeg'),
(18, 'Apache pants', 'Designed for your active lifestyle, these Apache classic-fit covert twill pants feature Ultraflex technology for enhanced freedom of movement, shape retention and stretch performance.', 4, 6, 1, 5, '60.00', 'images/products/men/pants_4_6_1.jpeg'),
(19, 'PHP Romper', 'PHP  comfy cotton romper gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 6, 1, 3, 3, '44.99', 'images/products/kids/romper1.jpeg'),
(20, 'MongoDB Coat', 'MongoDB  comfy cotton romper gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 6, 2, 3, 4, '69.99', 'images/products/kids/coat3.jpeg'),
(21, 'HTML Coat', 'HTML  comfy cotton coat gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 2, 7, 3, 2, '79.99', 'images/products/kids/coat7.jpeg'),
(22, 'MVC Romper', 'MVC comfy cotton Romper gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 6, 10, 3, 4, '29.99', 'images/products/kids/romper8.jpeg'),
(23, 'MVC Romper', 'Express comfy cotton Shoesgets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 1, 5, 3, 2, '29.99', 'images/products/kids/shoes1.jpeg'),
(24, 'MVC Romper', 'Express comfy cotton Shoes gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 1, 5, 3, 1, '29.99', 'images/products/kids/shoes1.jpeg'),
(25, 'Apache Shoes', 'Carter comfy cotton shoes gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 1, 6, 3, 1, '39.99', 'images/products/kids/shoes2.jpeg'),
(26, 'Apache Shoes', 'Carter\'s comfy cotton shoes gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 1, 6, 3, 4, '39.99', 'images/products/kids/shoes2.jpeg'),
(27, 'CSS Romper', 'CSS  romper gets a style boost from an allover stripe print, contrast binding at the neckline and cuffs and an adorable dinosaur peaking out from the pocket detail at the chest.', 6, 8, 3, 3, '99.99', 'images/products/kids/romper6.jpeg'),
(28, 'Mysql Shirt', 'A performance Mysql with a classic design, the Deck shirt by Nautica combines a traditional relaxed fit with moisture-wicking and UV protection properties.', 3, 4, 1, 3, '77.99', 'images/products/men/shirt_3_3_1.jpeg'),
(30, 'Express Coat', 'Winter Coat make by Express. D', 2, 5, 2, 20, '299.99', 'images/products/women/coat6.jpeg'),
(31, 'HTML Coat', 'Best HTML Coat for winter and spring. At a discounted price you get beat it.', 2, 7, 1, 26, '29.99', 'images/products/men/coat_2_1_1.jpeg'),
(32, 'CSS Dress', 'Gorgeous Css Dress for less. ', 5, 8, 2, 100, '19.99', 'images/products/women/dress9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sk_courses`
--

CREATE TABLE `sk_courses` (
  `courseID` varchar(12) NOT NULL,
  `courseName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_courses`
--

INSERT INTO `sk_courses` (`courseID`, `courseName`) VALUES
('cs520', 'Information Structures'),
('cs601', 'Web Application Development'),
('cs602', 'Server-Side Web Development'),
('cs701', 'Rich Internet Application Development');

-- --------------------------------------------------------

--
-- Table structure for table `sk_students`
--

CREATE TABLE `sk_students` (
  `studentID` int(11) NOT NULL,
  `courseID` varchar(12) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_students`
--

INSERT INTO `sk_students` (`studentID`, `courseID`, `firstName`, `lastName`, `email`) VALUES
(1, 'cs601', 'John', 'Doe', 'john@doe.com'),
(2, 'cs601', 'Jane', 'Doe', 'jane@doe.com'),
(3, 'cs602', 'John', 'Smith', 'john@smith.com'),
(4, 'cs602', 'Jane', 'Smith', 'jane@smith.com'),
(6, 'cs701', 'Jane', 'Smith', 'jane@smith.com'),
(17, 'cs520', 'Suresh', 'Kalathur', 'kalathur@bu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`clothingID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `productName` (`productName`),
  ADD KEY `productName_2` (`productName`),
  ADD KEY `productName_3` (`productName`);

--
-- Indexes for table `sk_courses`
--
ALTER TABLE `sk_courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `sk_students`
--
ALTER TABLE `sk_students`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `clothingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `sk_students`
--
ALTER TABLE `sk_students`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
