-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 06:56 PM
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
-- Database: `carlux`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`id`, `name`, `admin_email`, `contact`, `username`, `password`, `code`, `status`) VALUES
(2, 'Admin', 'admin123@gmail.com', '9876543210', 'admin@123', 'admin@123', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `carname` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `fueltype` varchar(50) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_name`, `email`, `contact`, `city`, `state`, `zipcode`, `country`, `carname`, `brand`, `fueltype`, `price`, `booking_date`, `status`) VALUES
(7, 'akshit sonani', 'sonaniakshit777@gmail.com', '7778813428', 'botad', 'gujrat', '360055', 'india', 'Rolls-Royce Ghost', 'Rolls Royce', 'Petrol', 'Rs.6.95 - 7.95 Cr*', '2024-04-27 03:07:13', 'approved'),
(8, 'user', 'user@gmail.com', '9876543210', 'fdgdfg', 'dfg', 'gfdgd', 'fgdf', 'Rolls-Royce Ghost', 'Rolls Royce', 'Petrol', 'Rs.6.95 - 7.95 Cr*', '2024-04-27 03:59:17', 'approved'),
(9, 'akshit sonani', '240160510049.cs@gujaratvidyapith.org', '1234567890', 'ahmedabad', 'gujarat', '364710', 'india', 'Volvo XC60', 'Volvo', 'Petrol', 'Rs.68.90 Lakh*', '2025-03-13 16:41:15', 'approved'),
(10, 'akshit sonani', '240160510049.cs@gujaratvidyapith.org', '1234567890', 'ahmedabad', 'gujarat', '364710', 'india', '                  BMW XM', 'Bmw', '               Petro', '               Rs.2.60 Cr*', '2025-03-13 16:41:31', 'approved'),
(11, 'akshit sonani', '240160510049.cs@gujaratvidyapith.org', '1234567890', 'ahmedabad', 'gujarat', '364710', 'india', 'BMW iX', 'Bmw', 'electric', 'Rs.1.21 - 1.40 Cr*', '2025-03-13 16:41:55', 'approved'),
(12, 'akshit sonani', '240160510049.cs@gujaratvidyapith.org', '1234567890', 'jsdj', 'hkjfdhkjs`', '783823', 'India', 'Volvo XC90', 'Volvo', 'Petrol', 'Rs.1.01 Cr*', '2025-03-13 16:42:18', 'approved'),
(13, 'suny thakor', 'sunnythakor721@gmail.com', '9876543212', 'jsdj', 'hkjfdhkjs`', '783823', 'India', 'Volvo XC60', 'Volvo', 'Petrol', 'Rs.68.90 Lakh*', '2025-03-13 16:44:48', 'approved'),
(14, 'suny thakor', 'sunnythakor721@gmail.com', '9876543212', 'jsdj', 'hkjfdhkjs`', '783823', 'India', 'Volvo XC90', 'Volvo', 'Petrol', 'Rs.1.01 Cr*', '2025-03-13 16:45:02', 'approved'),
(15, 'suny thakor', 'sunnythakor721@gmail.com', '9876543212', 'jsdj', 'hkjfdhkjs`', '783823', 'India', '                  BMW XM', 'Bmw', '               Petro', '               Rs.2.60 Cr*', '2025-03-13 16:45:19', 'approved'),
(16, 'akshit sonani', 'sonaniakshit684@gmail.com', '1234567890', 'jsdj', 'hkjfdhkjs`', '783823', 'India', 'Rolls-Royce Ghost', 'Rolls Royce', 'Petrol', 'Rs.6.95 - 7.95 Cr*', '2025-03-21 17:46:14', 'pending'),
(17, 'akshit sonani', 'sonaniakshit684@gmail.com', '1234567890', 'jsdj', 'hkjfdhkjs`', '783823', 'India', 'BMW iX', 'Bmw', 'electric', 'Rs.1.21 - 1.40 Cr*', '2025-03-21 17:46:36', 'approved'),
(18, 'akshit sonani', 'sonaniakshit684@gmail.com', '1234567890', 'jsdj', 'hkjfdhkjs`', '783823', 'India', 'Volvo XC60', 'Volvo', 'Petrol', 'Rs.68.90 Lakh*', '2025-03-21 17:53:45', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `carbrands`
--

CREATE TABLE `carbrands` (
  `id` int(11) NOT NULL,
  `brandname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbrands`
--

INSERT INTO `carbrands` (`id`, `brandname`) VALUES
(1, 'Rolls Royce'),
(2, 'Audi'),
(3, 'Volvo'),
(9, 'Bmw');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('dssf', 'dsfs@gmail.com', 'dsfsd', 'dsf');

-- --------------------------------------------------------

--
-- Table structure for table `electric_car`
--

CREATE TABLE `electric_car` (
  `id` int(11) NOT NULL,
  `carname` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `fueltype` varchar(50) DEFAULT NULL,
  `range_km` varchar(50) DEFAULT NULL,
  `battery_capacity` varchar(255) DEFAULT NULL,
  `charging_time_ac` varchar(255) DEFAULT NULL,
  `charging_time_dc` varchar(255) DEFAULT NULL,
  `power` varchar(50) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `placed_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electric_car`
--

INSERT INTO `electric_car` (`id`, `carname`, `brand`, `price`, `fueltype`, `range_km`, `battery_capacity`, `charging_time_ac`, `charging_time_dc`, `power`, `seating_capacity`, `image1`, `image2`, `image3`, `image4`, `image5`, `placed_date`) VALUES
(1, 'Rolls-Royce Spectre', 'Rolls Royce', 'Rs.7.50 Cr*', 'electric', '530 km', '102 kWh', 'none', '95 minutes', '576.63 bhp', 5, 'Rolls-Royce Spectre (2).webp', 'Rolls-Royce Spectre (1).webp', 'Rolls-Royce Spectre (3).webp', 'Rolls-Royce Spectre (4).webp', 'Rolls-Royce Spectre (5).webp', '2024-03-27'),
(27, 'BMW iX', 'Bmw', 'Rs.1.21 - 1.40 Cr*', 'electric', '425 - 575 km', '71 - 111.5 kWh', '5.5H- 22kW(100%)', '35 min-195kW(10%-80%)', '321.84 - 516.29 bhp', 5, 'bmw ix (5).webp', 'bmw ix (1).webp', 'bmw ix (2).webp', 'bmw ix (3).webp', 'bmw ix (4).webp', '2024-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_car`
--

CREATE TABLE `fuel_car` (
  `id` int(11) NOT NULL,
  `carname` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `engine` varchar(50) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `power` varchar(255) DEFAULT NULL,
  `fueltype` varchar(20) DEFAULT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `seating_capacity` int(50) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `placed_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_car`
--

INSERT INTO `fuel_car` (`id`, `carname`, `brand`, `price`, `engine`, `transmission`, `power`, `fueltype`, `mileage`, `seating_capacity`, `image1`, `image2`, `image3`, `image4`, `image5`, `placed_date`) VALUES
(101, 'Rolls-Royce Ghost', 'Rolls Royce', 'Rs.6.95 - 7.95 Cr*', '6750 cc', 'Automatic', '563 bhp', 'Petrol', '250 kmph', 5, 'Rolls-Royce Ghost (3).webp', 'Rolls-Royce Ghost (4).webp', 'Rolls-Royce Ghost (1).webp', 'Rolls-Royce Ghost (2).webp', 'Rolls-Royce Ghost (5).webp', '2024-03-27'),
(102, 'Rolls-Royce Phantom', 'Rolls Royce', 'Rs.8.99 - 10.48 Cr*', '6749 cc', 'Automatic', '563 bhp', 'Petrol', '250 kmph', 5, 'Rolls-Royce Phantom (4).webp', 'Rolls-Royce Phantom (1).webp', 'Rolls-Royce Phantom (2).webp', 'Rolls-Royce Phantom (3).webp', 'Rolls-Royce Phantom (5).webp', '2024-03-27'),
(103, 'Rolls-Royce Cullinan', 'Rolls Royce', 'Rs.6.95 Cr*', '6750 cc', 'Automatic', '563 bhp', 'Petrol', '250 kmph', 5, 'Rolls-Royce Cullinan (3).webp', 'Rolls-Royce Cullinan (1).webp', 'Rolls-Royce Cullinan (2).webp', 'Rolls-Royce Cullinan (4).webp', 'Rolls-Royce Cullinan (5).webp', '2024-03-27'),
(104, 'Audi Q8', 'Audi', 'Rs.1.07 - 1.43 Cr*', '2995 cc', 'Automatic', '335.25 - 340 bhp', 'Petrol', '250 kmph', 5, 'Audi Q8 (5).webp', 'Audi Q8 (1).webp', 'Audi Q8 (2).webp', 'Audi Q8 (3).webp', 'Audi Q8 (4).webp', '2024-03-27'),
(105, 'Audi RS5', 'Audi', 'Rs.1.13 Cr*', '2894 cc', 'Automatic', '443.87 bhp', 'Petrol', '250 kmph', 5, 'Audi RS5 (5).webp', 'Audi RS5 (4).webp', 'Audi RS5 (3).webp', 'Audi RS5 (2).webp', 'Audi RS5 (1).webp', '2024-03-27'),
(106, 'Audi RS Q8', 'Audi', 'Rs.2.22 Cr*', '3998 cc', 'Automatic', '591.39 bhp', 'Petrol', '8.26 kmpl', 5, 'Audi RS Q8 (5).webp', 'Audi RS Q8 (4).webp', 'Audi RS Q8 (3).webp', 'Audi RS Q8 (2).webp', 'Audi RS Q8 (1).webp', '2024-03-27'),
(107, 'Volvo XC90', 'Volvo', 'Rs.1.01 Cr*', '1969 cc', 'Automatic', '300 bhp', 'Petrol', '180 kmph', 5, 'Volvo XC90 (5).webp', 'Volvo XC90 (4).webp', 'Volvo XC90 (3).webp', 'Volvo XC90 (2).webp', 'Volvo XC90 (1).webp', '2024-03-27'),
(108, 'Volvo XC60', 'Volvo', 'Rs.68.90 Lakh*', '1969 cc', '1969 cc', '250 bhp', 'Petrol', '180 kmph', 5, 'Volvo XC60 (5).webp', 'Volvo XC60 (4).webp', 'Volvo XC60 (3).webp', 'Volvo XC60 (2).webp', 'Volvo XC60 (1).webp', '2024-03-27'),
(109, 'Volvo S90', 'Volvo', 'Rs.68.25 Lakh*', '1969 cc', 'Automatic', '246.58 bhp', 'Petrol', '180 kmph', 5, 'Volvo S90 (2).webp', 'Volvo S90 (1).webp', 'Volvo S90 (3).webp', 'Volvo S90 (4).webp', 'Volvo S90 (5).webp', '2024-03-27'),
(113, 'BMW X7', 'Bmw', 'Rs.1.27 - 1.30 Cr*', '2993 cc - 2998 cc', 'Automatic', '335.25 - 375.48 bhp', 'Diesel', '11.29 - 14.31 kmpl', 6, 'BMW X7 (5).webp', 'BMW X7 (4).webp', 'BMW X7 (3).webp', 'BMW X7 (2).webp', 'BMW X7 (1).webp', '2024-03-27'),
(114, 'BMW X1', 'Bmw', 'Rs.49.50 - 52.50 Lakh*', '1499 cc - 1995 cc', 'Automatic', '134.1 - 147.51 bhp', 'Petrol/Diesel', '20.37 kmpl', 5, 'front-view-118.webp', 'exterior-image-164.webp', 'front-left-side-47.webp', 'rear-left-view-121.webp', 'wheel-42.webp', '2024-03-27'),
(115, '                  BMW XM', 'Bmw', '               Rs.2.60 Cr*', '               4395 cc', '               Automatic', '               643.69 bhp', '               Petro', '               270 kmphgdgdgdsgsgsdd', 5, 'BMW XM (1).webp', 'BMW XM (2).webp', 'BMW XM (3).webp', 'BMW XM (4).webp', 'BMW XM (5).webp', '2024-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `home_slide`
--

CREATE TABLE `home_slide` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_slide`
--

INSERT INTO `home_slide` (`id`, `subject`, `image`, `description`) VALUES
(1, 'Explore Products', 'electric.png', 'Thinking of buying a car? At Carlux.com, buy new cars, search by filter and preferences, compare cars, read latest news and updates.'),
(2, 'contact us', 'lx.jpg', 'Most trusted place to buy cars. Simple and transparent process. Powered by carlux, carlux Star Rating and carlux Star Pricing.'),
(3, 'about us', 'Rolls-Royce Ghost.webp', 'We\'re here to make the car buying process as easy and stress-free as possible, whether you\'re looking for a new car.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_picture` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `rating` varchar(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `username`, `user_picture`, `user_email`, `carname`, `rating`, `title`, `description`, `date`) VALUES
(25, 'akshit sonani', 'WhatsApp Image 2024-03-31 at 21.16.07_2a0fec14.jpg', 'sonaniakshit777@gmail.com', 'Rolls-Royce Ghost', '4', '\"Exquisite Elegance Personified: The Rolls-Royce G', '\"Rolls-Royce Ghost: Exquisite craftsmanship, unparalleled luxury, whisper-quiet ride—truly an icon o', '2024-04-09'),
(26, 'user', 'profile.png', 'user@gmail.com', 'Volvo XC60', '5', 'Volvo XC60', 'The Volvo XC60 is a sleek and sophisticated ride that effortlessly combines style.', '2024-04-15'),
(27, 'akshit sonani', 'WhatsApp Image 2024-03-31 at 21.16.07_2a0fec14.jpg', 'sonaniakshit777@gmail.com', 'Rolls-Royce Spectre', '5', 'fgdg', 'fdgdg', '2024-04-27'),
(28, 'suny thakor', 'profile.png', 'sunnythakor721@gmail.com', 'Volvo XC60', '5', 'very nice', 'verry goodd car !!!', '2025-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `gender` varchar(10) DEFAULT 'none',
  `user_photo` varchar(255) DEFAULT 'profile.png',
  `username` varchar(100) DEFAULT 'none',
  `city` varchar(100) DEFAULT 'none',
  `state` varchar(100) DEFAULT 'none',
  `country` varchar(100) DEFAULT 'none',
  `pincode` varchar(10) DEFAULT 'none',
  `activation` varchar(200) NOT NULL DEFAULT 'inactive',
  `last_login` time NOT NULL,
  `last_logout` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `contact`, `password`, `code`, `status`, `gender`, `user_photo`, `username`, `city`, `state`, `country`, `pincode`, `activation`, `last_login`, `last_logout`) VALUES
(87, 'akshit sonani', '240160510049.cs@gujaratvidyapith.org', '1234567890', 'akshit@123', 0, 'verified', 'none', 'profile.png', 'none', 'none', 'none', 'none', 'none', 'active', '22:10:41', '00:00:00'),
(88, 'suny thakor', 'sunnythakor721@gmail.com', '9876543212', 'akshit@123', 0, 'verified', 'none', 'profile.png', 'none', 'none', 'none', 'none', 'none', 'inactive', '22:14:23', '23:58:22'),
(92, 'akshit sonani', 'sonaniakshit684@gmail.com', '1234567890', 'akshit@123', 776261, 'notverified', 'none', 'profile.png', 'none', 'none', 'none', 'none', 'none', 'active', '23:15:57', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carbrands`
--
ALTER TABLE `carbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electric_car`
--
ALTER TABLE `electric_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_car`
--
ALTER TABLE `fuel_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slide`
--
ALTER TABLE `home_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `user_detail` ADD FULLTEXT KEY `password` (`password`);
ALTER TABLE `user_detail` ADD FULLTEXT KEY `password_2` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_detail`
--
ALTER TABLE `admin_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carbrands`
--
ALTER TABLE `carbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `electric_car`
--
ALTER TABLE `electric_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `fuel_car`
--
ALTER TABLE `fuel_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `home_slide`
--
ALTER TABLE `home_slide`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
