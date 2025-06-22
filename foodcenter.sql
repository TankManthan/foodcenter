-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 09:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(10) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `pass1` varchar(100) NOT NULL,
  `pass2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_id`, `pass1`, `pass2`) VALUES
(2, 'rcb', '18', '18'),
(3, 'admin', 'admin', 'admin'),
(7, 'manthan18', 'manthan123', '321nahtnam');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `details`) VALUES
(1, 'GUJARATI SPECIAL', 'gujarati food (3).jpg', '1'),
(2, 'BURGER', 'burger (4).jpg', '2'),
(3, 'PIZZA', 'pizza (1).jpg', '3'),
(4, 'FRIES', 'fries (4).jpg', '4'),
(5, 'DRINKS', 'drinks (1).jpg', '5'),
(6, 'SANDWICH', 'sandwich (4).jpg', '6');

-- --------------------------------------------------------

--
-- Table structure for table `chefs_deatils`
--

CREATE TABLE `chefs_deatils` (
  `id` bigint(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desc1` varchar(200) NOT NULL,
  `desc2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chefs_deatils`
--

INSERT INTO `chefs_deatils` (`id`, `image`, `name`, `desc1`, `desc2`) VALUES
(1, 'chef (4).jpeg', 'Hinata Hyuga', 'Emily Watkins is a British chef at The Kingham Plough gastropub restaurant in Gloucestershire,', 'Emily Watkins was interested in cooking from an early age, because of a love of eating food.'),
(2, 'chef (2).jpeg', 'Emily Watkins', 'Emily Watkins was interested in cooking from an early age, because of a love of eating food.', 'Emily Watkins was interested in cooking from an early age, because of a love of eating food.'),
(5, 'chef (3).jpeg', 'Manthan', 'Emily Watkins was interested in cooking frterested in cooking from an early age, because of a love of eating food.', 'Emily Watkins was interested in cooking frterested in cooking from an early age, because of a love of eating food.'),
(7, 'chef (1).jpeg', 'Kushina Uzumaki', 'Emily Watkins was interested in cooking frterested in cooking from an early age, because of a love of eating food.', 'Emily Watkins was interested in cooking frterested in cooking from an early age, because of a love of eating food.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `full_name`, `email_address`, `subject`, `message`) VALUES
(1, 'tank manthan k', 'tankhit@gmail.com', 'no subject', 'fdf,hd,'),
(2, 'bhalala ankit m', 'virat@gmail.com', 'no subject', 'kakashi'),
(6, 'bhalala ankit m', 'tankhit@gmail.com', 'no subject', 'manthan'),
(7, 'tank manthan k', 'tankhit@gmail.com', 'cricket', 'down the ground'),
(8, 'virat kohli', 'virat@gmail.com', 'cricket', '50');

-- --------------------------------------------------------

--
-- Table structure for table `create_user`
--

CREATE TABLE `create_user` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_user`
--

INSERT INTO `create_user` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'tank manthan k', 7862001186, 'tank.manthan@gmail.com', '1234'),
(2, 'bhalala ankit m', 9510754744, 'bhalalaankitm@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `famous_dishes`
--

CREATE TABLE `famous_dishes` (
  `id` bigint(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `famous_dishes`
--

INSERT INTO `famous_dishes` (`id`, `image`, `name`, `details`, `price`) VALUES
(1, 'burger (4).jpg', 'Hamn Burger', 't Duck. She was one of the winners of 2014season of the Great British Menu.', 499),
(2, 'gujarati food (1).jpg', 'Gujarati Thali', 't Duck. She was one of the winners of 2014 season of the Great British Menu.', 199),
(4, 'gujarati food (5).jpg', 'Gujarati', 'diamond dew baby new york city', 199);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` bigint(10) NOT NULL,
  `que` varchar(300) NOT NULL,
  `ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `que`, `ans`) VALUES
(1, 'How do I place an order?', 'To place an order, browse our catalog, select the items you wish to purchase, and add them to your cart. Once you\'re ready, proceed to checkout where you\'ll enter your shipping and payment details.'),
(2, 'How do I place an order?', 'To place an order, browse our catalog, select the items you wish to purchase, and add them to your cart. Once you\'re ready, proceed to checkout where you\'ll enter your shipping and payment details.'),
(3, 'How do I place an order?', 'To place an order, browse our catalog, select the items you wish to purchase, and add them to your cart. Once you\'re ready, proceed to checkout where you\'ll enter your shipping and payment details.'),
(4, 'how are you doing ?', 'fine'),
(7, 'how are you doing ?', 'not good ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` bigint(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `details`, `price`, `category`) VALUES
(1, 'gujarati food (1).jpg', 'Gujarati Kadhi', 'Gujarati Kadhi  - Spice Up The Curry', 500, 'GUJARATI SPECIAL'),
(2, 'gujarati food (2).jpg', 'Gujarati Ragda', 'Gujarati ragda patties - Gujarati style ragda pattice _ stuffed potato patties in dry peas curry', 600, 'GUJARATI SPECIAL'),
(3, 'burger (1).jpg', 'Burger', 'Big Sandwich Hamburger with beef red onion tomato fried bacon', 249, 'BURGER'),
(4, 'burger (2).jpg', 'Burger', 'Burger served with the french fries', 345, 'BURGER'),
(5, 'drinks (1).jpg', 'Drink', 'Custard Apple Sikhand', 500, 'DRINKS'),
(7, 'pizza (1).jpg', 'Pizza', 'front-view-delicious-cheese-pizza-consists-olives-pepper-tomatoes-dark-surface', 700, 'PIZZA'),
(10, 'sandwich (1).jpg', 'Hamn Sandwich', 'front-view-tasty-ham-sandwiches-with-french-fries-dark-surface', 499, 'SANDWICH'),
(11, 'burger (3).jpg', 'Huge Burger', 'huge-burger-with-fried-meat-vegetables', 599, 'BURGER'),
(12, 'burger (4).jpg', 'Juicy Burger', 'juicy-cheeseburger-rustic-wooden-board', 199, 'BURGER'),
(13, 'gujarati food (3).jpg', 'Ghari', 'PISTI BADAM SURTI GHARI (gujarati sweet)', 299, 'GUJARATI SPECIAL'),
(14, 'pizza (2).jpg', 'Perry Perry', 'pizza-with-extra-cheese-dried-herbs', 186, 'PIZZA'),
(15, 'fries (1).jpg', 'Fries', 'portion-french-fries-with-ketchup', 99, 'FRIES'),
(16, 'sandwich (2).jpg', 'Club sandwich', 'side-view-club-sandwich-with-salted-cucumbers-lemon-olives-round-white-plate', 259, 'SANDWICH'),
(17, 'drinks (2).jpg', 'Lassi', 'Strawberry Saffron Lassi', 99, 'DRINKS'),
(18, 'drinks (3).jpg', 'Cold Drink', 'vegetarianindianrecipes_com', 199, 'DRINKS'),
(19, 'gujarati food (4).jpg', 'abc', 'xczxcx czxczxcxz c zc zxczx czcc cz czx cxc zxc \r\nczc xzczzxc zx zc zzx ', 100, 'GUJARATI SPECIAL'),
(20, 'gujarati food (5).jpg', 'obito', 'vx vcxvxcvxcvx vv cv v xvx vxc vxcvxc vxc vcx', 220, 'GUJARATI SPECIAL'),
(21, 'gujarati food (6).jpeg', 'pain', 'pain uzumaki', 199, 'GUJARATI SPECIAL'),
(22, 'burger (5).jpg', 'kakashi', 'kakashi hatake the copy ninja', 599, 'BURGER'),
(23, 'burger (6).jpg', 'rin', 'the 3 tail jinchuriki', 599, 'BURGER'),
(24, 'pizza (3).jpg', 'Perry Perry', 'classy', 111, 'PIZZA'),
(25, 'pizza (4).jpg', 'Perry Perry', 'ffdsf sfs fd fsfs sfs d f', 222, 'PIZZA'),
(26, 'pizza (5).jpg', 'Perry Perry', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n   ', 299, 'PIZZA'),
(27, 'pizza (6).jpg', 'Perry Perry', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }', 399, 'PIZZA'),
(28, 'pizza (7).jpg', 'Perry Perry', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n    ', 69, 'PIZZA'),
(29, 'fries (2).jpg', 'FRIES', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 29, 'FRIES'),
(30, 'fries (3).jpg', 'FRIES', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 89, 'FRIES'),
(31, 'fries (4).jpg', 'FRIES', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 99, 'FRIES'),
(32, 'fries (5).jpg', 'Fries', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 299, 'FRIES'),
(33, 'fries (6).jpg', 'Fries', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 350, 'FRIES'),
(34, 'fries (7).jpg', 'french fries', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 199, 'FRIES'),
(35, 'drinks (4).jpg', 'Cold Drink', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 49, 'DRINKS'),
(36, 'drinks (5).jpg', 'Cold Drink', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 89, 'DRINKS'),
(37, 'drinks (6).jpg', 'Cold Drink', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 100, 'DRINKS'),
(38, 'sandwich (3).jpg', 'Club sandwich', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 135, 'SANDWICH'),
(39, 'sandwich (4).jpg', 'SANDWICH', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 345, 'SANDWICH'),
(40, 'sandwich (5).jpg', 'Club sandwich', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 190, 'SANDWICH'),
(41, 'sandwich (6).jpg', 'SANDWICH', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 120, 'SANDWICH'),
(42, 'sandwich (7).jpg', 'Club sandwich', '  .minato {\r\n            padding-left: 15px;\r\n            height: 25px;\r\n            width: 230px;\r\n            background-color: #717171;\r\n            text-align: center;\r\n            border-radius: 0px 10px 10px 0px;\r\n        }\r\n\r\n       ', 199, 'SANDWICH');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `star` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `message`, `star`) VALUES
(1, 'tank manthan k', 'it is too good', 1),
(2, 'tank manthan k', 'it is too good', 1),
(4, 'virat kohli', 'hi sdfdsf sdf sdfs f ff sdfs ', 5),
(6, 'Obito', 'i am no one', 5);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `slogan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `slogan`) VALUES
(1, 'slide1.jpg', 'Every food delivered is a success'),
(2, 'background.jpg', 'Eat without worries'),
(3, 'slide4.jpg', 'Dish Will Be For You What You Want It To Be.'),
(4, 'slide3.jpg', 'Special Rescue, Free Deliver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs_deatils`
--
ALTER TABLE `chefs_deatils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_user`
--
ALTER TABLE `create_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `famous_dishes`
--
ALTER TABLE `famous_dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chefs_deatils`
--
ALTER TABLE `chefs_deatils`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `create_user`
--
ALTER TABLE `create_user`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `famous_dishes`
--
ALTER TABLE `famous_dishes`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
