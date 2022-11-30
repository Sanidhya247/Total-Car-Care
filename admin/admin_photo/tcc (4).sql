-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 03:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`) VALUES
(3, 'About', 'Total Car Care is a network of technology-enabled car service centres, offering a seamless service experience at the convenience of a tap. With our highly skilled technicians, manufacturer recommended');

-- --------------------------------------------------------

--
-- Table structure for table `acccart`
--

CREATE TABLE `acccart` (
  `acccartid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cadid` int(11) NOT NULL,
  `atdate` date NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `acc_history`
--

CREATE TABLE `acc_history` (
  `ahid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `pimg` varchar(500) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `atdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_history`
--

INSERT INTO `acc_history` (`ahid`, `uid`, `pname`, `pimg`, `qty`, `rate`, `total`, `atdate`) VALUES
(41, 110, 'Car wiper', 'Wiper.png', 1, 360, 360, '2022-04-09'),
(42, 110, 'Car wiper', 'Wiper.png', 1, 360, 360, '2022-04-09'),
(43, 110, 'Car wiper', 'Wiper.png', 1, 360, 360, '2022-04-09'),
(44, 110, 'Car wiper', 'Wiper.png', 1, 360, 360, '2022-04-09'),
(45, 110, 'Car perfume', 'Perfume.jpeg', 1, 350, 350, '2022-04-09'),
(46, 110, 'Car horn', 'Horn.jpeg', 1, 499, 499, '2022-04-09'),
(47, 110, 'Car perfume', 'Perfume.jpeg', 1, 350, 350, '2022-04-12'),
(48, 110, 'Touch screen display', 'Car screeen.jpg', 1, 12000, 12000, '2022-04-12'),
(49, 104, 'Car wiper', 'Wiper.png', 1, 360, 360, '2022-04-14'),
(50, 104, 'Car amplifier', 'car ampli 2.png', 1, 28500, 28500, '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `cbname` varchar(100) NOT NULL,
  `cmname` varchar(100) NOT NULL,
  `cnumber` varchar(50) NOT NULL,
  `cmyear` varchar(50) NOT NULL,
  `ftype` varchar(50) NOT NULL,
  `service` mediumtext NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `zipcode` varchar(500) NOT NULL,
  `service_date` text NOT NULL,
  `service_time` time NOT NULL,
  `address` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_confirm`
--

CREATE TABLE `booking_confirm` (
  `bcid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `btime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand_master`
--

CREATE TABLE `brand_master` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_logo` varchar(50) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_master`
--

INSERT INTO `brand_master` (`brand_id`, `brand_name`, `brand_logo`, `vid`) VALUES
(26, 'BMW', 'bmw.jpg', 4),
(27, 'Mercedes-Benz', 'merce.jpg', 4),
(28, 'Toyota', 'toyota.jpg', 4),
(29, 'Honda', 'honda (1).jpg', 4),
(30, 'Maruti Suzuki', 'suzuki.jpg', 4),
(31, 'Hyundai', 'hundai.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cart_master`
--

CREATE TABLE `cart_master` (
  `cmid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `total3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_accessories_details`
--

CREATE TABLE `car_accessories_details` (
  `cadid` int(11) NOT NULL,
  `camid` int(11) NOT NULL,
  `cadname` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_accessories_details`
--

INSERT INTO `car_accessories_details` (`cadid`, `camid`, `cadname`, `description`, `price`, `qty`, `photo`) VALUES
(5, 8, 'Touch screen display', 'Full HD display with capacitive touch screen  • Built-in GPS & amplifier  • Bluetooth/Wifi connectivity  • Rear camera support  • Supports SD card & USB flash drives  NOW  • Hi-Fi Sound output', '12000', '6', 'Car screeen.jpg'),
(6, 8, 'Car amplifier', 'Bass Boost Remote  • Amplifier Class  • Variable LPF  • Flexible Installation & Connectivity  • Dedicated Output for Subwoofer', '28500', '7', 'car ampli 2.png'),
(9, 8, 'Car speaker', 'Mica matrix cane woofer for deep, powerful bass. Enclosure Material: Polypropylene •High power handling with 420 W max out and 50W. ', '4600', '10', 'Car speaker.png'),
(13, 7, 'Car perfume', '• It A Gel-based Car Perfume  The Fragrance Of Freshly Cut Flowers Mix With Citrus, Herbal, And Woody Os  • Long-lasting Car Freshener - Stays Up To 60 Days ', '350', '30', 'Perfume.jpeg'),
(14, 7, 'Comforter', 'High-grade Temperature Sensitive Viscoelastic Memory foam Premium Memory Foam Ensures  .  your comfortable journey', '649', '40', 'Comforter.jpeg'),
(15, 7, 'Car matts', '• High-quality car mats  • Waterproof and spillproof  Cushioned surface for comfort  Flame resistant  • 2 layered and durable .  • PVC grass technology  • Easy to clean  • Easy to install & remove', '1300', '10', 'Car mats.jpg'),
(16, 5, 'Car detailing', 'Complete bike care kit  • Delivers lustre & glossy shine • Reduces dust accumulation  .  • Protects from UV rays  • Prevents fading  • Prevents paint film oxidation', '898', '48', 'Car detailing.jpeg'),
(17, 5, 'Shampoos & cleaners', 'Non-grey formula  • Prevent fading, drying, and cracking  .  • Protects against UV rays  • Restores shiny look', '350', '40', 'Shompoos & Cleaners.jpeg'),
(18, 5, 'Dusters & Microfibers', '• Premium quality 400 GSM fabric.  • Lint & streak free.  Highly durable.  • Soft and lightweight material.  • Convenient to store. Super absorbent. oporbent', '399', '35', 'Dusters & Microfibers.jpeg'),
(19, 6, 'Car wiper', ' Flexible Woer Blades Perfect Msiblry Fit for all seation  El than ever', '360', '14', 'Wiper.png'),
(20, 6, 'Car horn', 'Universal Fit  Low Power Consumption  Water Resistant  • Compact Design  Enhanced Durability', '499', '13', 'Horn.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `car_accessories_master`
--

CREATE TABLE `car_accessories_master` (
  `camid` int(11) NOT NULL,
  `caname` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_accessories_master`
--

INSERT INTO `car_accessories_master` (`camid`, `caname`, `photo`) VALUES
(5, 'Car care', 'wash.png'),
(6, 'Car exterior', 'carex.jpg'),
(7, 'Car interior', 'download (1).png'),
(8, 'Car infotainment', 'Fab.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_details_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `car_model_id` int(11) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `engine_cc` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `seat` varchar(50) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_details_id`, `brand_id`, `car_id`, `car_model_id`, `fuel_type`, `engine_cc`, `colour`, `seat`, `price`, `vid`) VALUES
(8, 26, 21, 28, 'DIESEL', '1995', 'WHITE', '5', '2600000', 6),
(10, 31, 22, 30, 'DIESEL', '1197', 'WHITE', '5', '328000', 6),
(11, 31, 23, 31, 'DIESEL', '1396', 'RED', '5', '491000', 6),
(13, 28, 25, 33, 'DIESEL', '2494', 'GRAY', '7', '799000', 6),
(14, 26, 27, 17, 'DIESEL', '1995', 'BLACK', '5', '5100000', 5),
(16, 29, 29, 19, 'PETROL + CNG', '1199', 'GRAY', '5', '651000', 5),
(17, 30, 30, 20, 'PETROL', '1462', 'LIGHT GOLD', '7', '851000', 5),
(18, 30, 32, 21, 'PETROL', '1950', 'WHITE', '5', '5100000', 5),
(19, 28, 31, 22, 'PETROL', '1794', 'LIGHT BLACK WITH GRAY SHINNING', '5', '791000', 5),
(20, 29, 28, 18, 'PETROL+CNG', '1498', 'WHITE', '5', '951000', 5),
(21, 30, 24, 32, 'PETROL', '1197', 'RED', '5', '651000', 6),
(22, 26, 8, 23, 'PETROL', '1998', 'WHITE', '5', '2651000', 4),
(23, 31, 12, 24, 'DIESEL', '1993', 'WHITE', '5', '1051000', 4),
(24, 30, 13, 25, 'DIESEL', '1462', 'BLUE', '5', '710000', 4),
(25, 27, 14, 26, 'PETROL', '1991', 'LIGHT SILVER', '5', '1851000', 4),
(26, 28, 20, 27, 'DIESEL', '2750', 'DARK GRAY WITH SHINNING BLACK', '7', '1751000', 4),
(27, 29, 26, 29, 'PETROL+CNG', '1199', 'GRAY', '5', '351000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `car_master`
--

CREATE TABLE `car_master` (
  `car_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_photo` varchar(50) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_master`
--

INSERT INTO `car_master` (`car_id`, `brand_id`, `car_name`, `car_photo`, `vid`) VALUES
(8, 26, 'X3', 'bmw1.jpg', 4),
(12, 31, 'Creta', 'creta.jpg', 4),
(13, 30, 'CIAZ', 'ciaz.jpg', 4),
(14, 27, 'C CLASS CLA 200', 'c class.jpg', 4),
(20, 28, 'FORTUNER', 'fortuner.jpg', 4),
(21, 26, '320 D', '320d.jpg', 6),
(22, 31, 'I 20', 'I20.jpg', 6),
(23, 31, 'VERNA', 'verna.jpg', 6),
(24, 30, 'SWIFT', 'swift main.jpg', 6),
(25, 28, 'INNOVA', 'innova.jpg', 6),
(26, 29, 'WRV', 'download (9).png', 6),
(27, 26, '520 D', 'main.jpg', 5),
(28, 29, 'Honda City', 'city.jpg', 5),
(29, 29, 'JAZZ', 'Honda-Jazz-2020.png', 5),
(30, 30, 'ERTIGA', 'MARUTI-SUZUKI-ERTIGA-MPV-SEGMENT-1.jpg', 5),
(31, 28, 'COROLLA ALTIS', 'corolaaa.jfif', 5),
(32, 27, 'E CLASS E 220', '13-e550-hero.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `car_model_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `car_model_name` varchar(50) NOT NULL,
  `car_model_year` varchar(50) NOT NULL,
  `car_model_front_photo` varchar(50) NOT NULL,
  `car_model_rear_photo` varchar(50) NOT NULL,
  `car_model_interior_photo` varchar(50) NOT NULL,
  `car_model_side_photo` varchar(100) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_model`
--

INSERT INTO `car_model` (`car_model_id`, `car_id`, `car_model_name`, `car_model_year`, `car_model_front_photo`, `car_model_rear_photo`, `car_model_interior_photo`, `car_model_side_photo`, `vid`) VALUES
(17, 27, '520 D', '2020', '10.2.jpg', '10.jpg', '520 interior.jpg', '520 d side.png', 5),
(18, 28, 'V', '2019', 'city front.jpg', 'city rear.jpg', 'city interior.jpg', 'city side.jpeg', 5),
(19, 29, 'VX MANUAL', '2018', '14.jpg', '14.1.jpg', 'jazz inerior.jfif', '38 (1).jpeg', 5),
(20, 30, 'ZXI', '2021', '5.1.jpg', '5.jpg', 'ertiga interior.JPG', 'ertiga side.jpeg', 5),
(21, 32, 'E 220', '2019', 'eclass.jpg', 'eclass2.jpg', 'e interior.jpg', 'e side.jpeg', 5),
(22, 31, 'VL', '2015', '8.jpg', '8.1.jpg', 'corola interior.jpg', 'corolla side3.jpeg', 5),
(23, 8, 'X3', '2018', '1 (13).jpg', '12.1.jpg', 'x3 int.jpg', 'side x3.png', 4),
(24, 12, 'TOP AUTO', '2017', '2.1.jpg', 'creta rear.jpg', 'cr int.jpg', 'side creta.jpeg', 4),
(25, 13, 'ZDI+', '2018', '1 .jpg', '1.1.jpg', 'ciaz interior.jfif', 'ciaz side.jpeg', 4),
(26, 14, 'CLA 200', '2016', '9.jpg', 'benz.jpg', 'm interior.jpg', 'm side.jpeg', 4),
(27, 20, 'SIGMA 4', '2015', '3.jpg', '3.1.jpg', 'for int.jpg', 'for side.jpeg', 4),
(28, 21, '320 D', '2016', '1 (11).jpg', 'rear.jpg', '320 d int.jpg', 'side 320d.png', 6),
(29, 26, 'VX', '2014', '13.jpg', 'wrvi.jpg', 'wrv interior.jpg', 'wrv side.jpeg', 6),
(30, 22, 'ASTHA', '2017', '16.jpg', '16.2.jpg', 'i 20 interior.jpg', 'i 20 side.jpeg', 6),
(31, 23, '1.6 MANUAL', '2017', '1 (8).jpg', '7.1.jpg', 'verna interior.jpg', 'verna side.jpeg', 6),
(32, 24, 'VXI+ AUTO', '2021', '6.jpg', '6.1.jpg', 'swift interior.jpg', 'swift side.jpeg', 6),
(33, 25, '2.5 Z', '2015', '4.jpg', '4.1.jpg', 'innova int.jpg', 'innova side.jpeg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `car_parts_details`
--

CREATE TABLE `car_parts_details` (
  `cpdid` int(11) NOT NULL,
  `cpmid` int(11) NOT NULL,
  `cpdname` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_parts_details`
--

INSERT INTO `car_parts_details` (`cpdid`, `cpmid`, `cpdname`, `description`, `qty`, `price`, `photo`) VALUES
(12, 16, 'Headlight', 'Headlights facilitate the driving by throwing light on the roadway', 0, 19999, 'front headlight.png'),
(13, 16, 'Headlight bulb', 'Headlight Lamp is 100% genuine.Car Headlight Lamp is compatible with your car and is sold at the nation-wide best price of ₹4999', 4, 4999, 'headlight bulb.png'),
(14, 16, 'Taillight', 'Taillight is a safety essential which increases the road presence of the car in the day or at night.', 8, 3999, 'taillight.png'),
(15, 16, 'Tail light bulb', 'The Tail Light Bulb is 100% genuine. Tail Light Bulb  is compatible with your car and is sold at the nation-wide best price of ₹89', 7, 89, 'tail light bulb.png'),
(16, 16, 'Fog lamp', 'Fog Lamps are used to provide vision on a foggy road.', 8, 1999, 'fog lamp.png'),
(17, 6, 'bonet heat shield', 'BEESCLOVER Hot Auto Roof Heat Shield Insulation Car Sound Noise Deadener Sheet for Bonnet(Hood) Fender Pillar Firewall 100x 100CM ', 4, 1350, 'bonet heat shield.png'),
(18, 6, 'Bonet', 'BONET ALLIANCE ', 20, 5400, 'bonet.png'),
(19, 6, 'Door Latch', 'Latch assy, front door, r ', 3, 1446, 'door latch.png'),
(20, 6, 'Door Lock Cylinder', 'Cylinder set, back door lock ', 6, 580, 'door lock cylinder.png'),
(21, 6, 'Door Trim', 'Trim set rear door, lh (zen minor except', 4, 1500, 'door trim.png'),
(22, 6, 'Door', 'mobis  panel assy-front door', 9, 4900, 'door.png'),
(23, 6, 'Front Bumper', 'Front Bumper at only 4900 rupees', 11, 4900, 'front bumper.png'),
(24, 6, 'Front Windshield', 'the technician will Tell you about the 30-45 minute drive-away-time adhesive, which allows you to drive away quickly and safely.', 14, 2499, 'front windshield.png'),
(25, 6, 'Grill', 'mobis grille assy-radiator', 30, 2845, 'grill.png'),
(26, 6, 'Inner rear view Mirror', 'Mirror assy', 6, 940, 'inner rear view mirror.png'),
(27, 6, 'Mirror Trim', 'mobis garnish assy-delta lh', 8, 99, 'mirror trim.png'),
(28, 6, 'Rear Bumper', 'face.rr bumper', 10, 3555, 'rear bumper.png'),
(29, 6, 'Rear Windshield', 'tailgate glass tinted with hole and demi', 7, 3785, 'rear wind shield.png'),
(30, 6, 'Roof Panel', 'Mobis (hyundai, kia) cap 1-roof rack ctr,lh', 6, 2500, 'roof panel.png'),
(31, 6, 'Side View Mirror', 'Mobis (hyundai, kia) mirror assy - outsider r view,r', 4, 1517, 'side view mirror.png'),
(32, 6, 'Window Glass', ' Regulating glass rear door ', 11, 1299, 'window glass.png'),
(33, 6, 'Side View Mirror', 'Mobis (hyundai, kia) mirror assy - outsider r view,r', 4, 1517, 'side view mirror.png'),
(34, 7, 'Tyre', 'A Tyre is the one which ultimately supports and runs the car.', 3, 4800, 'tyre.png'),
(35, 7, 'Wheel Balancing Weight', 'Weight - balance, 60 g (with 20 x 8.5 aluminium wheel, 8 x 18 sports alloy wheel, 8.0 x 17 alloy wheel or style 2 alloy 18 wheel)', 9, 140, 'wheel balancing weight.png'),
(36, 7, 'Wheel Bearing', 'The wheel bearing allows friction-free movement and rotation of the hub assembly.', 50, 980, 'wheel bearing.png'),
(37, 7, 'Wheel Cap', 'Mobis  cap assy-wheel hub', 22, 1119, 'wheel cap.png'),
(38, 7, 'Wheel Cover', 'Wheel cvr slvr swift', 30, 680, 'wheel cover.png'),
(39, 7, 'Wheel Hubs', 'vag (volkswagen, skoda, audi) wheel hous', 31, 759, 'wheel hubs.png'),
(40, 7, 'Wheel Nut & Bolt', 'Main toyota nut, hub', 4, 187, 'wheel nut & bolt.png'),
(41, 7, 'Wheel Rim', 'Mgp wheel(15x5 1/2j)', 5, 773, 'wheel rim.png'),
(42, 8, 'Battery', 'Vag (volkswagen, skoda, audi) battery', 10, 7500, 'battery.jpeg'),
(43, 8, 'Tray Assy Battery', 'Mobis (hyundai, kia) tray assy-battery', 10, 239, 'tray assy battery.jpeg'),
(47, 9, 'Washer Fluid Pipe ', 'Mgp hose water inlet', 6, 134, 'washer fluid pipe.png'),
(48, 9, 'Windshield Washer Bracket', 'Mgp bracket, wiper unit side no.2.', 1, 101, 'windshield washer bracket.png'),
(49, 9, 'Windshield Washer Fluid', 'Mobis (hyundai, kia) bio shampoo', 18, 208, 'windshield washer fluid.png'),
(50, 9, 'Windshield Washer Jet', 'Mobis (hyundai, kia) nozzle assy-washer (no.1)', 19, 308, 'windshield washer jet.png'),
(51, 9, 'Windshield Washer Pump', 'ford pump windsh', 21, 2320, 'windshield washer pump.png'),
(52, 9, 'Windshield Washer Reservoir Cap', 'Honda mouth cap unit', 30, 55, 'windshield washer reservoir cap.png'),
(53, 9, 'Windshield Washer Reservoir', 'Gmc (chevrolet, opel) tank asm rad surge', 17, 722, 'windshield washer reservoir.png'),
(54, 9, 'Wiper Arm Cap', 'Mobis (hyundai, kia) cap-rr wiper arm', 3, 70, 'wiper arm cap.png'),
(55, 9, 'Wiper Arm', 'Mgp arm assy, wiper, asst', 23, 250, 'wiper arm.png'),
(56, 9, 'Wiper Blade', 'Total car care vision plus wiper blade 12\"/300mm', 5, 86, 'wiper blade.png'),
(57, 9, 'Wiper Components', 'Mgp wiper assy,windshield', 9, 3025, 'wiper components.png'),
(58, 9, 'Wiper Linkage', 'Rnm alliance (renault, nissan, mitsubishi)link assy-wiper', 4, 2625, 'wiper linkage.png'),
(59, 9, 'Wiper Motor', 'Mgp Motor assy wiper', 23, 888, 'wiper motor.png'),
(60, 10, 'Air Filter', 'purolator air filter', 30, 293, 'air filter.png'),
(61, 10, 'Automatic Transmission Filter', 'Febi bilstein hydraulic filter, automatic transmission', 12, 1292, 'automatic transmission filter.png'),
(62, 10, 'Cabin Filter', 'Vag (volkswagen, skoda, audi) pollenfilt', 19, 387, 'cabin filter.png'),
(63, 10, 'Filter Set', 'Petrol filter service kit -freq 45k kms', 17, 664, 'filter set.png'),
(64, 10, 'Fuel Filter', 'A fuel filter filters out the debris and other contaminents from the fuel', 8, 256, 'fuel filter.png'),
(65, 10, 'Fuel Pump Filter', 'Rnm alliance (renault, nissan, mitsubishi) fuel strainer', 21, 313, 'fuel pump filter.png'),
(66, 10, 'Oil Filter', 'purolator oil filter', 40, 200, 'oil filter.png'),
(67, 11, 'Accessory Kit Brake Pad', 'anti rattle clip (sp', 6, 709, 'accessory kit brake pad.png'),
(69, 11, 'Brake Adjuster', 'brake Adjuster is a vital component of the drum brakes which slows down the car.', 19, 560, 'brake adjuster.png'),
(70, 11, 'Brake Booster', 'brake booster facilitates the braking by reducing the applies force on the brakes', 10, 3160, 'brake booster.png'),
(71, 11, 'Brake Cable', 'Mobis (hyundai, kia) cable assy-park brake.', 9, 2745, 'brake cabel.png'),
(72, 11, 'Brake Disc', 'Tvs girling kit disc', 13, 5041, 'brake disc.png'),
(73, 11, 'Brake Drum', 'Drum rear brake', 7, 1371, 'brake drum.png'),
(74, 11, 'Brake Fluid Reservoir', 'Brake master cylinder stores and pushes the brake fluid into the slave cylinder.', 21, 396, 'brake fluid reservoir.png'),
(75, 11, 'Brake Master Cylinder Repair Kit', 'Brake master cylinder stores and pushes the brake fluid into the slave cylinder.', 20, 1173, 'brake master cylinde repair kit.png'),
(76, 11, 'Brake Master Cylinder', 'Mobis cylinder assy-brake master', 18, 2720, 'brake master cylinder.png'),
(77, 11, 'Brake Pad', 'Tvs girling kit pad assy', 23, 1692, 'brake pad.png'),
(78, 11, 'Brake Pedal', 'Pedal assy brake(abs)', 7, 941, 'brake pedal.png'),
(79, 11, 'Brake Shoe Lining', 'Mobis  shoe & lining kit-rr brake', 23, 3197, 'brake shoe lining.png'),
(80, 11, 'Brake Shoe', 'Tvs girling kit lined shoe assy', 5, 1301, 'brake shoe.png'),
(81, 11, 'Handbrake Switch', 'Switch assy , parking bk,alto exp gcc', 19, 399, 'hanbrake switch.png'),
(83, 11, 'Hand Brake', 'Handbrakes controls a pulling mechanism that will lock your two rear wheels', 20, 540, 'hand brake.png'),
(84, 11, 'Master Cylinder Seal', 'Mobis cylinder assy-brake master', 9, 670, 'master cylinder seal.png'),
(85, 11, 'Pedal Pad', 'Pad, Brake Pedal', 32, 55, 'pedal pad.png'),
(86, 11, 'Vacuum Pump', 'Mgp vacuum pump', 4, 2410, 'vacuum pump.png'),
(87, 11, 'Wheel Brake Cylinder', 'Wheel Brake Cylinder at just 999 rupees', 4, 999, 'wheel brake cylinder.png'),
(88, 12, 'Ac Repair Kit', 'mount cond up', 22, 1900, 'ac repair kit.png'),
(89, 12, 'Air Vent Duck', 'Louver centre vent (black)', 10, 344, 'air vent  duck.png'),
(90, 12, 'Blower', 'This blower assy from mgp is compatible with your car.', 33, 2800, 'blower.png'),
(91, 12, 'Compressor Clutch Coil', 'This magnet cluch is compatible with your car', 12, 4277, 'compressor clutch  coil.png'),
(92, 12, 'Compressor Repair Kit', 'molibdenum plated compression ring compressor repair kit', 4, 546, 'compressor repair kit.png'),
(93, 12, 'Compressor Seal', 'Mobis seal-a/c compressor shaft', 19, 746, 'compressor seal.png'),
(94, 12, 'Compressor Valve', 'valve, relief', 19, 390, 'compressor valve.png'),
(95, 12, 'Compressor', 'The compressor offered by valeo is of industrial-grade quality and is compatible with all major cars. ', 8, 9500, 'compressor.png'),
(96, 12, 'Condensor Fan', 'Mobis motor-condensor cooling fan', 20, 4596, 'condenser fan.png'),
(97, 12, 'Evaporator', 'rnm alliance evaporator assy', 25, 4978, 'Evaporator.png'),
(98, 12, 'HVAC Pipes & Hoses', 'mobis hose-water outlet', 12, 171, 'hvac pipes & hoses.png'),
(99, 12, 'Receiver Drier Bracket ', 'Drier bracket assy', 30, 85, 'receiver drier bracket.png'),
(100, 12, 'Receiever Drier', 'assy drier cartridge sde', 25, 589, 'reciever drier.png'),
(101, 13, 'Ball Joint', 'Control Arms Are The Links That Connect Your Front Wheels To Your Car.', 10, 1999, 'ball joint.png'),
(102, 13, 'Coil Spring', 'Spring.rear', 30, 730, 'coil spring.png'),
(103, 13, 'Compressed Air System ', 'Car Compressor, Compressed Air System', 13, 66845, 'compressed air system.png'),
(104, 13, 'Control Arm', 'Rane Lower Control Arm   ', 29, 1809, 'control arm.png'),
(105, 13, 'Leaf Spring', 'Leaf Spring Assy. Front', 11, 2036, 'leaf spring.png'),
(106, 13, 'Panhard Rod', 'Mobis (Hyundai, Kia) Rod Assy-lateral', 15, 516, 'panhard rod.png'),
(107, 13, ' Rubber Bush', 'Mobis (Hyundai, Kia) Bush-shock Absorber,upr', 29, 72, 'rubber bush.png'),
(108, 13, 'Shackle Plate', 'Support Rear Shackle', 19, 552, 'shackle plate.png'),
(109, 13, 'Shock Absorber Bearing', 'Mobis (Hyundai, Kia) Bearing-strut', 21, 854, 'shock absorber bearing.png'),
(110, 13, ' Shock Absorber Boot', 'Bumper, Fr Spring', 20, 299, 'shock absorber boot.png'),
(111, 13, 'Shock Absorber Mountings', 'Toyota Support,sub Assy,fr', 25, 404, 'shock absorber mountings.png'),
(112, 13, 'Shock Absorber', 'Damper Assy.r Fr', 9, 3900, 'shock absorber.png'),
(113, 13, 'Stabilizer Link', 'Mobis (Hyundai, Kia) Link Assy-front Stabilizer,rh', 10, 855, 'stabilizer link.png'),
(114, 13, 'Stabilizer', 'Stabilizers Are Used To Prevent The Vehicle From Rolling Over.', 7, 838, 'stabilizer.png'),
(115, 13, 'Suspension Control Link', 'Rod Assy Lateral', 20, 455, 'suspension control link.png'),
(116, 13, 'U Bolt', 'Ford U Bolt', 19, 96, 'U bolt.png'),
(118, 14, 'Alternator Assembly', 'An Alternator Extracts Power From Engine Which In-turn Powers The Battery Ultimately Giving Power To The Car.', 9, 1198, 'alternator assembly.png'),
(119, 14, 'Alternator Bearing', 'Rnm Alliance (Renault, Nissan, Mitsubishi) Brg-altntr, Fr', 22, 672, 'alternator bearing.png'),
(120, 14, ' Alternator Carbon Brush', 'Rnm Alliance (Renault, Nissan, Mitsubishi) Carbon Brush, Starter', 4, 2216, 'alternator carbon brush.png'),
(121, 14, 'Alternator Regulator', 'Regulator S/assy,fr Wdo,l, Vxi / Zxi', 2, 538, 'alternator regulator.png'),
(122, 14, 'Alternator Rotor', 'Rotor Assy', 8, 2930, 'alternator rotor.png'),
(123, 14, 'Alternator', 'An Alternator Extracts Power From Engine Which In-turn Powers The Battery Ultimately Giving Power To The Car.', 19, 8056, 'alternator.png'),
(124, 14, 'Fog Lamp Switch', 'Switch Assy,fr Fog', 13, 226, 'fog lamp switch.png'),
(125, 14, 'Hazard Light Switch', 'Mobis (Hyundai, Kia) Switch Assy-hazard', 6, 256, 'hazard light switch.png'),
(126, 14, 'Headlight Leveling Switch', ' Mobis (Hyundai, Kia) Switch Assy-headlamp Level', 11, 2491, 'headlight leveling switch.png'),
(127, 14, 'Horn', 'A Horn Is A Device That Produces Sound Upon Pressing To Warn Others About An Approacing Vehicle Or Other Potential Hazard.', 31, 330, 'Horn.png'),
(128, 14, 'Ignition Switch', 'Kit Ignition Switch Without Immo', 20, 2022, 'ignition switch.png'),
(129, 14, 'Mirror Adjustment Switch', 'Mobis (Hyundai, Kia) Switch Assy-mirror Rem Cont', 8, 419, 'mirror adjustment switch.png'),
(130, 14, 'Parking Sensor', 'Sensor Assy,park', 14, 1013, 'parking sensor.png'),
(131, 14, 'Power Window Motor', 'Window Motor Assy.l Fr W', 10, 1600, 'power window motor.png'),
(132, 14, 'Starter Motor Clutch', 'Motor Clutch Set.start', 10, 21300, 'starter motor clutch.png'),
(133, 14, 'Starter Motor Solenoid Switch', 'Switch Assy, starting Motor', 23, 874, 'starter motor solenoid switch.png'),
(134, 14, 'Starter Motor', 'Gmc (Chevrolet, Opel) Starter Asm', 21, 5911, 'starter motor.png'),
(135, 14, 'Steering Wheel Switch', 'Mobis (Hyundai, Kia) Switch Assy-lighting & T/sig', 10, 545, 'steering wheel switch.png'),
(136, 14, 'Tyre Pressure Sensor', 'Ford Wheel Sensor, Tyre Pressure Control System', 9, 9137, 'tyre pressure sensor.png'),
(137, 14, 'Window Switch', 'Mobis (Hyundai, Kia) Switch Assy-p/wdo Sub', 8, 245, 'window switch.png'),
(138, 15, 'Air Filter hose', 'Filter Tube.air Flow', 11, 373, 'air filter hose.png'),
(139, 15, 'Camshaft Gear', 'Mobis (Hyundai, Kia) Blade-crankshaft', 23, 399, 'camshaft gear.png'),
(140, 15, 'Carburetor Repair Kit', 'Service Set, carburettor', 14, 533, 'carburetor repair kit.png'),
(141, 15, 'Complete Engine', 'Engine Bracket, Engine Mounting, Rear(For Transverse Engine)', 2, 2712, 'complete engine.png'),
(142, 15, 'Connecting Rod', 'Rnm Alliance (Renault, Nissan, Mitsubishi) rod Assy-conn', 11, 644, 'connecting rod.png'),
(143, 15, 'Engine Bracket', 'Bracket,engine Fr Rh', 17, 192, 'engine bracket.png'),
(144, 15, 'Engine Cover', 'Cover,engine', 20, 341, 'engine cover.png'),
(145, 15, 'Injection Pump', 'Injection Pump Pumps The Fuel Into The Diesel Engine Cylinders.', 7, 44500, 'injection pump.png'),
(146, 15, 'Oil Pump Chain', 'Chain Oil Pump', 12, 2070, 'oil pump chain.png'),
(147, 15, 'Oil Pump Rotor', 'Mobis (Hyundai, Kia)rod Assy-oil Level Gauge', 2, 243, 'oil pump rotor.png'),
(148, 15, 'Oil Pump', 'Oil Pump Circulates Engine Oil Under Pressure To Bearings, Piston And Camshaft.', 6, 1296, 'oil pump.png'),
(149, 15, 'Pcv Breather Hose', 'Honda Tube .brthr', 6, 97, 'pcv breather hose.png'),
(150, 15, 'Pistin Ring', 'Ring Set, Piston', 8, 254, 'piston ring.png'),
(151, 15, 'Piston', 'Rnm Alliance (Renault, Nissan, Mitsubishi)kit-piston.', 13, 8844, 'Piston.png'),
(152, 15, 'Super Charger', 'Super Charger Chamber', 17, 1070, 'super charger.png'),
(153, 15, 'Timing Belt & Chain', 'Timing Belt/chain Connect Engine Crankshaft And Camshaft And Also Controls Engine Piston And Valve.', 8, 1999, 'timing belt & chain.png'),
(154, 15, 'Timing Belt Kit', 'Contitech Tb Kit Belt', 23, 6620, 'timing belt kit.png'),
(155, 15, 'Timing Chain Guide', 'Guide Tmg Chain', 8, 516, 'timing chain guide.png'),
(156, 15, 'Timing Chain Kit', 'Febi Bilstein Timing Chain Kit', 8, 28410, 'timing chain kit.png'),
(157, 15, 'Turbo Charger Hose', 'Hose, Inter Cooler Outlet', 9, 409, 'turbo charger hose.png'),
(158, 15, 'Turbo Charger', 'Charger Assy,turbo', 14, 13180, 'turbocharger.png'),
(159, 15, 'Vacuum Hose', 'Pipe A Vacuum', 23, 130, 'vacuum hose.png'),
(160, 15, 'Vacuum Modulator', 'Mobis (Hyundai, Kia)pump Assy-vacuum', 9, 2670, 'vacuum modulator.png'),
(161, 19, 'Idler Arm', 'This Arm is compatible with your car. The Arm Assy,Strg Intermediate comes at a competitive price of ₹619 ', 20, 619, 'idler arm.png'),
(162, 19, 'Knuckle', 'This Knuckle,Steering,R from Mgp is compatible with your car. This Knuckle comes at a price of ₹1399', 18, 1399, 'knuckle.png'),
(163, 19, 'Pitman Arm', 'Pitman Arm converts the angular motion of the sector shaft into linear motion of the wheels.', 30, 1199, 'pitman arm.png'),
(164, 19, 'Power Steering Motor', 'This Motor  P S Asst is compatible with your car. The Motor comes at a competitive price of ₹10,999', 8, 10999, 'power steering motor.png'),
(165, 19, 'Power Steering Pump Repair Kit', 'The steering pump repair kit is 100% genuine. power steering repair kit is compatible with your car and is sold at the nation-wide best price of ₹2259 ', 12, 2259, 'power steering pump repair kit.png'),
(166, 19, 'Power Steering Resevoir', 'This Reservoir Assy-Power Steering is compatible with your car.the Reservoir Assy-Power Steering at the best price of ₹1875', 16, 1875, 'power steering reservoir.png'),
(167, 19, 'Power Steering Resevoir Cap', 'power steering resevoir cap is one-stop solution for all the spare parts requirements for your car. it is 100% genuine.it  is compatible with your car and is sold at the nation-wide best price of ₹6875.', 19, 6875, 'power steering resevoir cap.png'),
(168, 19, 'Steering Arm', 'This Steering Arm  is compatible with your car. The Steering Arm comes at a competitive price of ₹16529', 2, 16529, 'steering arm.png'),
(169, 19, 'Steering Column Coupler', 'This Coupling Strg Colum from Ford is compatible with your car. This Coupling Strg Column comes at a price of ₹8505.', 12, 8505, 'steering column coupler.png'),
(170, 19, 'Steering Dumper', 'This Damper Assy .Steering is compatible with your car. This Damper Assy. Steering comes at a price of ₹499', 19, 499, 'steering dumper.png'),
(171, 19, 'Steering Rake Boot', 'This steering rake boot is compatible with your car, you get a hassle-free experience and the best quality at the best price of ₹199', 16, 199, 'steering rake boot.png'),
(172, 19, 'Steering Wheel', 'This steering Wheel is compatible with your car. This Wheel Steering comes at a price of ₹1159', 12, 1159, 'steering wheel.png'),
(173, 19, 'Tie Rod End', 'This End Comp,Steering Tie-Rod is compatible with your car.Steering comes at a price of ₹299', 8, 299, 'tie rod end.png'),
(174, 17, 'V-Belt', 'A V-belt runs off a crank and pulley and typically travels between one or two engine accessories.', 18, 749, 'V-belt.png'),
(175, 17, 'Tensioner', 'This Tensioner Assy is compatible with your car. With pan-India free shipping*, you get a hassle-free experience and the best quality at the best price of ₹1299', 13, 1299, 'tensioner.png'),
(176, 17, 'Deflection Guide Pulley', 'This deflection guide Pulley Comp,Belt Idler is compatible with your car. offer the Pulley Comp,Belt Idler at the best price of ₹1199', 30, 1199, 'deflection guide pulley.png'),
(177, 17, 'CrankShaft Pulley', 'This Pulley,Crankshaft is compatible with your car. you get a hassle-free experience and the best quality at the best price of ₹544.', 17, 544, 'Crankshaft pulley.png'),
(178, 17, 'Belt Pulley', 'This Pulley-Drive Belt is compatible with your car. you get a hassle-free experience and the best quality at the best price of ₹519. ', 17, 519, 'belt pulley.png'),
(179, 17, 'Alternator Pulley', 'This alternator pulley is available at a competitive price of ₹491 and is sold by our trusted seller.', 40, 419, 'alternator pulley.png'),
(180, 18, 'Bolt', 'Bolt is used to keep a flank at its place.', 15, 99, 'bolt.png'),
(181, 18, 'Clamp', 'A Clamp holds an object tightly together to prevent any separation while movement.', 20, 49, 'clamp.png'),
(182, 18, 'Clip', 'Clip is usually used to hold two or more plastic panel.', 19, 67, 'clip.png'),
(183, 18, 'Nut', 'A Nut is used for fastening conjunction.', 30, 49, 'nut.png'),
(184, 18, 'Plug', 'A Plug helps to screw a part through a porous or brittle material.', 25, 60, 'plug.png'),
(185, 18, 'Rivet', 'A Rivet is used for supporting shear and tensile loads.', 27, 219, 'rivet.png'),
(186, 18, 'Screw', 'A Screw is used to hold a part in a particular position.', 30, 19, 'screw.png'),
(187, 18, 'Spacer', 'A Spacer generally increases the distance between parts and allows bolts to pass through it.', 48, 59, 'spacer.png'),
(188, 18, 'Spring', '100% genuine spring a part of fasteners.', 23, 109, 'spring.png'),
(189, 18, 'Stud', 'Studs are used for fastening flanges.', 18, 67, 'stud.png'),
(190, 18, 'Tightning Strap', 'Tighting Strap at only 149 rupees', 20, 149, 'tightning strap.png'),
(191, 18, 'Washer', 'A Washer is a thin plate with a hole that is used to distribute the load of a threaded fastener.', 24, 25, 'washer.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_parts_master`
--

CREATE TABLE `car_parts_master` (
  `cpmid` int(11) NOT NULL,
  `cpname` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_parts_master`
--

INSERT INTO `car_parts_master` (`cpmid`, `cpname`, `photo`) VALUES
(6, 'Body Parts', 'j.webp'),
(7, 'Wheels & Tyer', 'tyer (1).jpg'),
(8, 'Battery', 'battery2.png'),
(9, 'Wipers', 'car-wiper-2.png'),
(10, 'Filters', 'filter2.png'),
(11, 'Brake System', 'b2.png'),
(12, 'Air Conditioning', 'a2.png'),
(13, 'Suspension Parts', 's2.png'),
(14, 'Electrical Parts', 'm3.jpg'),
(15, 'Engine Parts', 'fe2.png'),
(16, 'Lights', 'l2.png'),
(17, 'Belt & Chain Drive', 'c2.png'),
(18, 'Fasteners', 'p2.png'),
(19, 'Steering', 'audi2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cuid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `mobileno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cuid`, `name`, `email`, `address`, `mobileno`) VALUES
(5, 'Total car Care', 'totalcarcare5@gmail.com', 'G/10-20, Safal squre ,Near Prime Shoppers, Vesu/Dumas Main road, Vesu ,Surat', '7203000719');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(3, 'what is total car care?', 'Total car care is a network of technology-enabled car service centres, offering a seamless service experience at the convenience of a tap. With our highly skilled technicians, manufacturer recommended'),
(4, 'Why should i choose Total Car Care?', 'Total car care offers the best car services and solutions at fair and flexible prices. You end up saving up to 40% compared to what is charged at Authorised Service Centres and Multi-brand workshops'),
(6, 'TCC stands for ?', 'Total Car Care');

-- --------------------------------------------------------

--
-- Table structure for table `meet_our_team`
--

CREATE TABLE `meet_our_team` (
  `mid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meet_our_team`
--

INSERT INTO `meet_our_team` (`mid`, `name`, `place`, `photo`) VALUES
(1, 'Prince Bambhroliya', ' CEO & COFOUNDER', 'prince.jpg'),
(2, 'sanidhya', ' Manager', 'sanidh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `acc_total` int(11) NOT NULL,
  `pa_total` int(11) NOT NULL,
  `total5` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`oid`, `uid`, `uname`, `address`, `zipcode`, `phone`, `email`, `acc_total`, `pa_total`, `total5`, `status`) VALUES
(43, 104, 'kenil', 'Mota varachaa', '395006', '7203000719', 'kenilbhayani4042@gmail.com', 12000, 140, 140, 0),
(44, 110, 'brijesh', 'mota varchhaa', '395006', '7048520441', 'anghanbrijesh1234@gmail.com', 499, 44500, 44999, 0),
(45, 110, 'brijesh', 'mota varchhaa', '395006', '7048520441', 'anghanbrijesh1234@gmail.com', 12350, 3504, 15854, 0),
(46, 104, 'Prince', 'sarthana jakatnka ', '395006', '7203000719', 'prince.bambhroliya@gmail.com', 360, 560, 920, 0),
(47, 104, 'Prince', 'sarthana jakatnka ', '395004', '7203000719', 'prince.bambhroliya@gmail.com', 28500, 4999, 33499, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pacart`
--

CREATE TABLE `pacart` (
  `cartid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cpdid` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parts_history`
--

CREATE TABLE `parts_history` (
  `phid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts_history`
--

INSERT INTO `parts_history` (`phid`, `uid`, `pname`, `pimg`, `qty`, `rate`, `total`, `date`) VALUES
(75, 104, 'Wheel Balancing Weight', 'wheel balancing weight.png', 1, 140, 140, '2022-04-09'),
(76, 110, 'Injection Pump', 'injection pump.png', 1, 44500, 44500, '2022-04-09'),
(77, 110, 'Brake Booster', 'brake booster.png', 1, 3160, 3160, '2022-04-12'),
(78, 110, 'Air Vent Duck', 'air vent  duck.png', 1, 344, 344, '2022-04-12'),
(79, 104, 'Brake Adjuster', 'brake adjuster.png', 1, 560, 560, '2022-04-14'),
(80, 104, 'Headlight bulb', 'headlight bulb.png', 1, 4999, 4999, '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(19, 'Prince', 85000, 'complete', 'pay_JDhePA0HWHKoJ6', '2022-03-31 02:51:59'),
(20, 'sanidhya', 50, 'complete', 'pay_JDhfsq83ax5Rbg', '2022-03-31 02:54:02'),
(21, 'Prince', 100, 'complete', 'pay_JDhl90F31ydoAn', '2022-03-31 02:58:44'),
(22, 'Prince', 50, 'pending', '', '2022-03-31 03:00:11'),
(23, 'nidhi', 5000, 'complete', 'pay_JDidOGY2L7znqO', '2022-03-31 03:50:11'),
(24, 'Prince', 85000, 'complete', 'pay_JE1sT2X958bKGQ', '2022-04-01 10:39:50'),
(25, 'Prince', 686, 'pending', '', '2022-04-01 11:05:26'),
(26, 'Prince', 686, 'complete', 'pay_JE2K0gpbvRNWdM', '2022-04-01 11:05:35'),
(27, 'kenil Bhayani', 20996, 'complete', 'pay_JECbi5DrDdeNyH', '2022-04-01 09:08:29'),
(28, 'sanidhya Kanani', 33600, 'complete', 'pay_JElN3uWSMrMSAe', '2022-04-03 07:09:01'),
(29, 'brijesh', 29060, 'complete', 'pay_JFN9C77tRBXPL5', '2022-04-04 08:07:07'),
(30, 'Prince bambhroliya', 1350, 'complete', 'pay_JFNsWnypBbgE8L', '2022-04-04 08:50:02'),
(31, 'Prince bambhroliya', 15160, 'complete', 'pay_JFZoxm9I7ZsDC1', '2022-04-05 08:31:11'),
(32, 'sanidhya', 38100, 'complete', 'pay_JFaDsbXU43eVWl', '2022-04-05 08:54:42'),
(33, 'brijesh', 15854, 'complete', 'pay_JIKOdjpJ5lNUdY', '2022-04-12 07:21:52'),
(34, 'Prince', 920, 'complete', 'pay_JJ6khOUrjQmgtC', '2022-04-14 06:41:11'),
(35, 'Prince', 33499, 'pending', '', '2022-04-14 06:43:43'),
(36, 'Prince', 33499, 'complete', 'pay_JJ6nVbkkZ95HfZ', '2022-04-14 06:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`aid`, `aname`, `phone`, `email`, `password`, `photo`) VALUES
(1, 'prince', '7203000719', 'prince.bambhroliya@gmail.com', '123456', 'prince_photo.jpg'),
(2, 'sanidhya', '7990611256', 'sanidhyakanani222@gmail.com', '123', 'sanidhya_photo.jpg'),
(16, 'prince', '7203000719', '10prince.bambhroliya@gmail.com', '123', 'prince.jpg'),
(22, 'prince', '7203000719', 'prince.bambhroliya@gmail.com', '111', 'new.php'),
(23, 'prince', '7203000719', 'prince.bambhroliya@gmail.com', '111', 'hidden.php');

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `sdid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sdname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`sdid`, `sid`, `sdname`, `price`, `description`, `photo`) VALUES
(17, 17, 'Basic Service', 3299, 'Basic Service    0-1000 Kms or 1 Month Warranty - Every 5000 Kms or 3 Months (Recommended)  Engine Oil Replacement  AT YOU YOU SURVICE  Oil Filter Replacement  Air Filter Cleaning  Coolant Top up  Wiper Fluid Replacement  Battery Water Top up  Heater/Spark Plugs Checking  Car Wash  e Interior Vacuuming (Carpet & Seats)', 'basic service.jpg'),
(18, 17, 'Standard Service', 5299, '1000 Kms or 1 Month Warranty Every 10,000 Kms or 6 Months (Recommended!  & His Taken  Engine Oil Replacement  Oil Filter Replacement  Air Filter Replacement  Fuel Filter Checking  Cabin Filter / AC Filter Cleaning  Coolant Top up (200 ml)  Wiper Fluid Replacement  Brake Fluid Top up (50 ml)  Battery Water Top up  Heater/Spark Plugs Checking  Car Wash  Interior Vacuuming (Carpet & Seats)  Scanning  Rear Brake Shoes Serviced  Front Brake Pads Serviced', 'standerd.jpg'),
(19, 18, 'Regular Ac Service', 1299, '500 kms or 1 Month Warranty -Every 5,000 kms or 3 Months (Recommended)  AC Gas Topup (upto 400gms)  AC Filter Cleaning  Condenser Cleaning  AC Inspection  AC Vent Cleaning', 'regularacservice.jpg'),
(20, 18, 'High Performance ac service', 2899, '1,000 kms or 1 Month Warranty -Every 10,000 Kms or 1 Year (Recommended)  AC Gas Replacement (Up to 600gms) Compressor Oil Top up (Up to 200ml)  Dashboard Removing Refitting  Cooling Coil Cleaning (Front+ Rear)  Condenser Cleaning AC Vent Cleaning  AC Filter Cleaning  AC Leak Test  Dashboard Cleaning', 'Highperformanceac.jpeg'),
(21, 19, 'Bumper', 999, '2 Years Warranty on Paint  Grade A Primer  4 Layers of Painting  Premium DuPont Paint  Panel Rubbing Polishing', 'bumper dent.jpg'),
(22, 19, 'Bonet', 999, '2 Years Warranty on Paint Grade A Primer  Premium DuPont Paint  & Layers of Painting  Panel Rubbing Polishing', 'bonet denting.jpg'),
(23, 19, 'Door', 999, '2 Years Warranty on Daint  Grade A Primer  Premium DuPont Paint  4 Layers of Painting  Panel Rubbing Polishing', 'door denting.jpg'),
(25, 19, 'Boot', 999, '  Grade A Primer  Premium DuPont Dent  4 Layers of Denting  Panel Rubbing Polishing', 'boot denting.jpg'),
(26, 20, 'Full Body Painting', 1999, '2 Years Warranty on Paint  Grade A Primer  Premium DuPont Paint   4 Layers of Painting  Panel Rubbing Polishing', 'fullbodypainting.jpeg'),
(27, 20, 'Customize Painting', 2499, '1 Year Warranty -Every 1 Year(Recommended)  Grade A Primer  High Temperature Paint Alloy Preservation', 'cutomizepainting.jpeg'),
(28, 21, 'Total Wheel Care', 1499, 'Every 6 Months or 5,000 Kms (Recommended)  Automated Wheel Balancing  Weight Correction  Alloy Weights Additional  Laser Assisted Wheel Alignment  Steering Adjustment and Correction  Camber and Castor Adjustment  All Four Tyre Rotation as per Tread Wear', 'total wheel care.png'),
(29, 22, 'Full Cleaning', 999, 'Every 6 Months (Recommended)  Interior Vacuum Cleaning  Dashboard Polishing  Interior Wet Shampooing and Detailing  Pressure Washing  Rubbing with Compound  Wax Polishing  Machine Rubbing  Tyre Dressing and Alloy Polishing', 'full cleaning.jpg'),
(30, 22, 'Car Interior Cleaning', 599, 'Every 3 Months (Recommended)  Car Wash  Anti Viral & Bacterial Treatment  Interior Vacuum Cleaning  Dashboard Polishing  Interior Wet Shampooing and Detailing', 'car interioer service.jfif'),
(31, 22, 'Body Cleaning', 499, '1 Month Warranty - No Toxic Pesticides  Used  Rat Repellent Treatment  Sprayed on Underbody and Engine Bay  Protects Car Wiring from Pests  Prevents Post Breeding inside Car  Free Pickup & Drop', 'body cleaning.jpg'),
(32, 23, 'Service', 299, '3 Months Warranty Recommended: In Case of frequently Discharging Battery  Alternator Repair  Opening & Fitting of Alternator  Alternator Belt Additional  Free Pickup & Drop', 'batterice service.jpg'),
(33, 23, 'Battery Charge', 499, '1 Month Warranty -Recommended: In Case of frequently Discharging Battery  Alternator Replacement  Opening & Fitting of Alternator Free Pickup & Drop', 'bztterie charge.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`sid`, `sname`, `photo`) VALUES
(17, 'Periodic Service', 'perodic service.jpg'),
(18, 'Ac Service & Repair', 'ac repair (1).jpg'),
(19, 'Denting', 'denting image.jpeg'),
(20, 'Painting', 'painting image.jpg'),
(21, 'Wheel Care', 'wheel care 5.jpg'),
(22, 'Car Spa & Cleaning', 'body cleaning.jpg'),
(23, 'Battery Service', 'battery services.jpg'),
(27, 'denting 2', 'car interioer service.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `tsid` int(11) NOT NULL,
  `radio` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `testdrive_date` text NOT NULL,
  `testdrive_time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`tsid`, `radio`, `name`, `email`, `phone`, `zipcode`, `brand_name`, `car_name`, `testdrive_date`, `testdrive_time`, `status`) VALUES
(30, '', '', '', '', '', 'Hyundai', 'VERNA', '04/27/2022', '00:00:00', 0),
(31, '', '', '', '', '', 'Hyundai', 'VERNA', '04/28/2022', '00:00:00', 0),
(32, 'ms', 'Nidhi', 'pnidhic36@gmail.com', '6351705488', '395004', 'Toyota', 'FORTUNER', '04/20/2022', '16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testdrive_confirm`
--

CREATE TABLE `testdrive_confirm` (
  `tscid` int(11) NOT NULL,
  `tsid` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `ttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `tid` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `occupation` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`tid`, `name`, `email`, `occupation`, `photo`, `comment`) VALUES
(4, 'Prince', 'prince.bambhroliya@gmail.com', 'CEO & COFOUNDER', 'prince.jpg', 'Good work'),
(7, 'sanidhya', 'sanidhyakanani222@gmail.com', 'Manager', 'sanidh.jpg', 'Total car care'),
(8, 'Kenil ', 'kenilbhayani4042@gmail.com', 'Bussines', 'WhatsApp Image 2022-03-28 at 12.04.11 PM.jpeg', 'Total car is a very interesting website '),
(9, 'sanidhya', 'sanidhyakanani222@gmail.com', 'Free', 'bm.png', 'Amazing');

-- --------------------------------------------------------

--
-- Table structure for table `user_contactus`
--

CREATE TABLE `user_contactus` (
  `ucid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contactus`
--

INSERT INTO `user_contactus` (`ucid`, `name`, `email`, `subject`, `message`) VALUES
(8, 'tcc', 'totalcarcare5@gmail.com', 'Car Parts', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `uname`, `email`, `password`, `phone`, `otp`, `status`) VALUES
(104, 'Prince', 'prince.bambhroliya@gmail.com', '999', '7203000719', 6424, 1),
(105, 'kenil', 'kenilbhayani4042@gmail.com', '888', '7048211325', 9506, 1),
(110, 'brijesh', 'anghanbrijesh1234@gmail.com', '1234', '7048520441', 1719, 1),
(111, 'sanidhya', 'sanidhyakanani222@gmail.com', '123', '7990611256', 1032, 0),
(114, '895', 'p@gmail.com', '123', '7203000719', 9012, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_master`
--

CREATE TABLE `vendor_master` (
  `vid` int(11) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conpassword2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_master`
--

INSERT INTO `vendor_master` (`vid`, `vname`, `phone`, `email`, `password`, `conpassword2`, `city`, `photo`, `status`) VALUES
(4, 'prince', '7203000719', 'prince.bambhroliya@gmail.com', '123', '123', 'surat', 'prince.jpg', 1),
(5, 'sanidhya', '7990611256', 's@gmail.com', '123', '123', 'surat', 'full cleaning.jpg', 1),
(6, 'kenil', '6351705488', 'kenilbhayani4042@gmail.com', '123', '123', 'surat', 'ac service.png', 1),
(7, 'dhruv', '7203000719', 'dhruvgoti4@gmail.com', '123', '123', 'surat', 'ab.jpg', 1),
(8, 'dhruv', '7203000719', 'gotidhruv4@gmail.com', '123', '123', 'surat', '2.png', 1),
(9, 'prince bambhroliya', '7203000719', 'prince.bambhroliya@gmail.com', '222', '222', 'surat', 'prince.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acccart`
--
ALTER TABLE `acccart`
  ADD PRIMARY KEY (`acccartid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `cadid` (`cadid`);

--
-- Indexes for table `acc_history`
--
ALTER TABLE `acc_history`
  ADD PRIMARY KEY (`ahid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `booking_confirm`
--
ALTER TABLE `booking_confirm`
  ADD PRIMARY KEY (`bcid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `brand_master`
--
ALTER TABLE `brand_master`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `cart_master`
--
ALTER TABLE `cart_master`
  ADD PRIMARY KEY (`cmid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `car_accessories_details`
--
ALTER TABLE `car_accessories_details`
  ADD PRIMARY KEY (`cadid`),
  ADD KEY `camid` (`camid`);

--
-- Indexes for table `car_accessories_master`
--
ALTER TABLE `car_accessories_master`
  ADD PRIMARY KEY (`camid`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`car_details_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `car_model_id` (`car_model_id`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `car_master`
--
ALTER TABLE `car_master`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`car_model_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `car_parts_details`
--
ALTER TABLE `car_parts_details`
  ADD PRIMARY KEY (`cpdid`),
  ADD KEY `cpmid` (`cpmid`),
  ADD KEY `cpmid_2` (`cpmid`),
  ADD KEY `cpmid_3` (`cpmid`);

--
-- Indexes for table `car_parts_master`
--
ALTER TABLE `car_parts_master`
  ADD PRIMARY KEY (`cpmid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meet_our_team`
--
ALTER TABLE `meet_our_team`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `pacart`
--
ALTER TABLE `pacart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `cpdid` (`cpdid`);

--
-- Indexes for table `parts_history`
--
ALTER TABLE `parts_history`
  ADD PRIMARY KEY (`phid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`sdid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`tsid`);

--
-- Indexes for table `testdrive_confirm`
--
ALTER TABLE `testdrive_confirm`
  ADD PRIMARY KEY (`tscid`),
  ADD KEY `tsid` (`tsid`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user_contactus`
--
ALTER TABLE `user_contactus`
  ADD PRIMARY KEY (`ucid`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vendor_master`
--
ALTER TABLE `vendor_master`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `acccart`
--
ALTER TABLE `acccart`
  MODIFY `acccartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `acc_history`
--
ALTER TABLE `acc_history`
  MODIFY `ahid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `booking_confirm`
--
ALTER TABLE `booking_confirm`
  MODIFY `bcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `brand_master`
--
ALTER TABLE `brand_master`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cart_master`
--
ALTER TABLE `cart_master`
  MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `car_accessories_details`
--
ALTER TABLE `car_accessories_details`
  MODIFY `cadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `car_accessories_master`
--
ALTER TABLE `car_accessories_master`
  MODIFY `camid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `car_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `car_master`
--
ALTER TABLE `car_master`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `car_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `car_parts_details`
--
ALTER TABLE `car_parts_details`
  MODIFY `cpdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `car_parts_master`
--
ALTER TABLE `car_parts_master`
  MODIFY `cpmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meet_our_team`
--
ALTER TABLE `meet_our_team`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pacart`
--
ALTER TABLE `pacart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `parts_history`
--
ALTER TABLE `parts_history`
  MODIFY `phid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `sdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `tsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `testdrive_confirm`
--
ALTER TABLE `testdrive_confirm`
  MODIFY `tscid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_contactus`
--
ALTER TABLE `user_contactus`
  MODIFY `ucid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `vendor_master`
--
ALTER TABLE `vendor_master`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acccart`
--
ALTER TABLE `acccart`
  ADD CONSTRAINT `acccart_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acccart_ibfk_2` FOREIGN KEY (`cadid`) REFERENCES `car_accessories_details` (`cadid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_confirm`
--
ALTER TABLE `booking_confirm`
  ADD CONSTRAINT `booking_confirm_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `booking` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `brand_master`
--
ALTER TABLE `brand_master`
  ADD CONSTRAINT `brand_master_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vendor_master` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_master`
--
ALTER TABLE `cart_master`
  ADD CONSTRAINT `cart_master_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_accessories_details`
--
ALTER TABLE `car_accessories_details`
  ADD CONSTRAINT `car_accessories_details_ibfk_1` FOREIGN KEY (`camid`) REFERENCES `car_accessories_master` (`camid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `car_details_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand_master` (`brand_id`),
  ADD CONSTRAINT `car_details_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car_master` (`car_id`),
  ADD CONSTRAINT `car_details_ibfk_3` FOREIGN KEY (`car_model_id`) REFERENCES `car_model` (`car_model_id`),
  ADD CONSTRAINT `car_details_ibfk_4` FOREIGN KEY (`vid`) REFERENCES `vendor_master` (`vid`);

--
-- Constraints for table `car_master`
--
ALTER TABLE `car_master`
  ADD CONSTRAINT `car_master_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand_master` (`brand_id`),
  ADD CONSTRAINT `car_master_ibfk_2` FOREIGN KEY (`vid`) REFERENCES `vendor_master` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_model`
--
ALTER TABLE `car_model`
  ADD CONSTRAINT `car_model_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car_master` (`car_id`),
  ADD CONSTRAINT `car_model_ibfk_2` FOREIGN KEY (`vid`) REFERENCES `vendor_master` (`vid`);

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `order_master_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pacart`
--
ALTER TABLE `pacart`
  ADD CONSTRAINT `pacart_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pacart_ibfk_2` FOREIGN KEY (`cpdid`) REFERENCES `car_parts_details` (`cpdid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parts_history`
--
ALTER TABLE `parts_history`
  ADD CONSTRAINT `parts_history_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD CONSTRAINT `service_detail_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `service_master` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testdrive_confirm`
--
ALTER TABLE `testdrive_confirm`
  ADD CONSTRAINT `testdrive_confirm_ibfk_1` FOREIGN KEY (`tsid`) REFERENCES `testdrive` (`tsid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
