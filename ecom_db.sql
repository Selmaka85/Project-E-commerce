-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 06:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'TV'),
(3, 'Smartphone'),
(4, 'Smartwatch'),
(5, 'Desktop'),
(6, 'Routers'),
(7, 'Accesory'),
(8, 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(136, 45354, '5343', 'Completed', 'UK'),
(137, 45354, '5343', 'Completed', 'UK'),
(138, 45354, '5343', 'Completed', 'UK'),
(140, 45354, '5343', 'Completed', 'UK'),
(141, 45354, '5343', 'Completed', 'UK'),
(143, 45354, '5343', 'Completed', 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `post_tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`, `post_tags`) VALUES
(1, 'Lenovo', 1, 24.99, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc ', 'https://laptoping.com/specs/wp-content/uploads/2017/08/Lenovo-IdeaPad-110-15ACL-80TJ00LRUS-15.6-Laptop-AMD-A6-Series-CPU-Radeon-R4-4GB-RAM-500GB-HDD-Black.jpg', '15\", 15 inch, 15 inches, under £200, under 200 pounds, £200, 200, blue, cheap'),
(2, 'Samsung ', 3, 299.99, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc Short_desc ', 'https://www.att.com/catalog/en/skus/Samsung/Samsung%20Galaxy%20S7%20edge/overview/304969-pdp-overview-samsung-gs7_edge-tile_06.jpg', ' s9, samsung, new offer, offer'),
(3, 'Asus', 1, 389.99, 12, 'Lorem isum dolor sit amet cosectetur adipiscing...', 'Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...', 'https://c.s-microsoft.com/en-us/CMSImages/EN-US_asus_ux370_hol18_382x258.jpg?version=d16b052c-9c73-49fd-71c4-1706da137a41', '15\", 15 inch, 15 inches, under £200, under 200 pounds, £200, 200, blue, cheap'),
(4, 'Sony', 1, 589.99, 7, 'Lorem isum dolor sit amet cosectetur adipiscing...', 'Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...Lorem isum dolor sit amet cosectetur adipiscing...', 'https://images-na.ssl-images-amazon.com/images/I/415PBld6wEL.jpg', '15\", 15 inch, 15 inches, under £200, under 200 pounds, £200, 200, blue, cheap, Sony, sony, vaio'),
(5, 'Intel Atom', 1, 289.99, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 'https://img2.banggood.com/thumb/view/oaupload/banggood/images/91/C2/0e36bc87-7fb6-48e5-9f87-a4a0218fd538.jpg', ''),
(6, 'Huawei', 3, 268.99, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 'http://www.eweek.com/imagesvr_ez/b2bezp/2017/10/1088HuaweiMate10Pro.jpg?alias=article_hero', ''),
(8, 'Tv LG', 2, 359.99, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', 'Lorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', 'http://www.lg.com/uk/images/tvs/md05600974/gallery/M_1_ww.jpg', 'tv, TV, 42\", 42 inch, 42 inches, under 300, under £300'),
(9, 'TV Samsung', 2, 535.99, 3, '	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', '	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', 'https://www.thegoodguys.com.au/wcsstore/TGGCAS/idcplg?IdcService=GET_FILE&RevisionSelectionMethod=LatestReleased&noSaveAs=1&dDocName=50047629_509150&Rendition=ZOOMIMAGE', ''),
(10, 'Sony Smart', 4, 235.99, 5, '	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', '	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', 'https://assets.pcmag.com/media/images/340552-sony-smartwatch-2.jpg?width=2000&height=2131', ''),
(11, 'LG', 4, 135.99, 18, '	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', '	\r\nLorem ipsum dolor sit amet, consectetur adipiscing...', 'https://images-na.ssl-images-amazon.com/images/I/51sXmqY9Q6L._SL500_AC_SS350_.jpg', ''),
(18, 'Router Dlink', 6, 123.96, 5, 'dasdasf', 'dasdasf', '445869-tp-link-archer-c7-ac1750-wireless-dual-band-gigabit-router-v2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `order_id`, `product_id`, `product_price`, `product_quantity`, `product_title`) VALUES
(45, 131, 11, 135.99, 2, 'LG'),
(46, 131, 9, 535.99, 3, 'TV Samsung'),
(47, 134, 2, 299.99, 2, 'Samsung '),
(48, 134, 1, 24.99, 2, 'Lenovo'),
(49, 134, 4, 589.99, 1, 'Sony'),
(50, 134, 8, 359.99, 1, 'Tv LG'),
(51, 141, 1, 24.99, 1, 'Lenovo'),
(52, 138, 4, 589.99, 5, 'Sony'),
(53, 139, 5, 289.99, 3, 'Intel Atom'),
(54, 140, 3, 389.99, 2, 'Asus'),
(55, 141, 11, 135.99, 2, 'LG'),
(56, 142, 8, 359.99, 1, 'Tv LG'),
(57, 143, 9, 535.99, 1, 'TV Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'selmaka', '123456', 'bitica_catalin85@yahoo.com'),
(2, 'alice', '321654', 'alice@yahoo.com'),
(3, 'Lord_Selmaka', '123456', 'selmaka85@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
