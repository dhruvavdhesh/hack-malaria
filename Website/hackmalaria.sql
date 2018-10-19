-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2018 at 05:24 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackmalaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `data2013`
--

CREATE TABLE `data2013` (
  `location` varchar(32) NOT NULL,
  `blood_slide_examination` int(10) NOT NULL,
  `malaria_cases` int(10) NOT NULL,
  `plasmodium_falciparum_cases` int(10) NOT NULL,
  `deaths` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2013`
--

INSERT INTO `data2013` (`location`, `blood_slide_examination`, `malaria_cases`, `plasmodium_falciparum_cases`, `deaths`) VALUES
('Andaman & Nicobar Islands', 77943, 1005, 334, 0),
('Andhra Pradesh', 9033712, 19787, 13385, 0),
('Arunachal Pradesh', 112455, 6398, 2181, 21),
('Assam', 3895330, 19542, 14969, 7),
('Bihar', 196872, 2693, 715, 1),
('Chandigarh', 43901, 150, 2, 0),
('Chhatisgarh', 3776658, 110145, 89418, 43),
('Dadar & Nagar Haveli', 63540, 1778, 513, 0),
('Daman & Diu', 35423, 91, 5, 0),
('Delhi', 324760, 353, 8, 0),
('Goa', 3895330, 19542, 14969, 7),
('Gujrat', 12687686, 58513, 9122, 38),
('Haryana', 2640224, 14471, 247, 3),
('Himachal Pradesh', 14471, 141, 0, 0),
('Jammu & Kashmir', 483091, 698, 24, 0),
('Jharkhand', 3562174, 97786, 38263, 8),
('Karnataka', 8907752, 13302, 967, 0),
('Kerala', 2607143, 1634, 243, 0),
('Lakshwadeep', 178, 8, 0, 0),
('Madhya Pradesh', 9757285, 78260, 28775, 49),
('Maharashtra', 16739447, 43677, 9198, 80),
('Manipur', 92762, 120, 42, 0),
('Meghalaya', 360044, 24727, 22885, 62),
('Mizoram', 229818, 11747, 10340, 21),
('Nagaland', 224571, 2285, 519, 1),
('Orisha', 5078132, 228858, 208488, 67),
('Puducherry', 230814, 127, 2, 0),
('Punjab', 2971013, 1760, 31, 0),
('Rajasthan', 8909848, 33139, 1086, 15),
('Sikkim', 11136, 39, 13, 0),
('Tamil Nadu', 8618514, 1508, 539, 0),
('Tripura', 257760, 7396, 6998, 7),
('Uttar Pradesh', 4278776, 48346, 590, 0),
('Uttarakhand', 322057, 1426, 108, 0),
('West Bengal', 5679133, 34717, 3705, 17);

-- --------------------------------------------------------

--
-- Table structure for table `data2014`
--

CREATE TABLE `data2014` (
  `location` varchar(32) NOT NULL,
  `blood_slide_examination` int(10) NOT NULL,
  `malaria_cases` int(10) NOT NULL,
  `plasmodium_falciparum_cases` int(10) NOT NULL,
  `deaths` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2014`
--

INSERT INTO `data2014` (`location`, `blood_slide_examination`, `malaria_cases`, `plasmodium_falciparum_cases`, `deaths`) VALUES
('Andaman & Nicobar Islands', 74905, 557, 109, 0),
('Andhra Pradesh', 9853526, 21077, 15511, 0),
('Arunachal Pradesh', 123571, 6082, 2338, 9),
('Assam', 3684068, 14540, 11210, 11),
('Bihar', 183918, 2043, 699, 0),
('Chandigarh', 45019, 114, 0, 0),
('Chhatisgarh', 3942498, 128993, 108874, 53),
('Dadar & Nagar Haveli', 71755, 669, 90, 1),
('Daman & Diu', 34288, 56, 4, 0),
('Delhi', 179819, 98, 0, 0),
('Goa', 431754, 824, 42, 0),
('Gujrat', 13440364, 41608, 6253, 16),
('Haryana', 2524246, 4485, 45, 1),
('Himachal Pradesh', 492263, 102, 1, 0),
('Jammu & Kashmir', 452223, 291, 21, 0),
('Jharkhand', 3394634, 103735, 46448, 8),
('Karnataka', 9805708, 14794, 1329, 2),
('Kerala', 2675482, 1751, 305, 6),
('Lakshwadeep', 132, 0, 0, 0),
('Madhya Pradesh', 10285880, 96879, 41638, 26),
('Maharashtra', 17606275, 53385, 25770, 68),
('Manipur', 66236, 145, 72, 0),
('Meghalaya', 437741, 39168, 37149, 73),
('Mizoram', 330882, 23145, 21083, 31),
('Nagaland', 234653, 1936, 647, 2),
('Orisha', 6352249, 395035, 342280, 89),
('Puducherry', 180922, 79, 3, 0),
('Punjab', 3092693, 1036, 14, 0),
('Rajasthan', 8810139, 15118, 603, 4),
('Sikkim', 7970, 35, 18, 0),
('Tamil Nadu', 9002019, 8729, 339, 0),
('Telangana', 3600200, 5189, 4602, 0),
('Tripura', 606791, 51240, 49653, 96),
('Uttar Pradesh', 4834946, 41612, 326, 0),
('Uttarakhand', 388028, 1171, 89, 0),
('West Bengal', 6818534, 26484, 4981, 66);

-- --------------------------------------------------------

--
-- Table structure for table `data2015`
--

CREATE TABLE `data2015` (
  `location` varchar(32) NOT NULL,
  `blood_slide_examination` int(10) NOT NULL,
  `malaria_cases` int(10) NOT NULL,
  `plasmodium_falciparum_cases` int(10) NOT NULL,
  `deaths` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2015`
--

INSERT INTO `data2015` (`location`, `blood_slide_examination`, `malaria_cases`, `plasmodium_falciparum_cases`, `deaths`) VALUES
('Andaman & Nicobar Islands', 56012, 409, 77, 0),
('Andhra Pradesh', 6817446, 25042, 18709, 0),
('Arunachal Pradesh', 146229, 5088, 1714, 7),
('Assam', 3684068, 14540, 11210, 11),
('Bihar', 3485405, 15557, 11675, 4),
('Chandigarh', 68862, 152, 1, 1),
('Chhatisgarh', 217632, 4006, 1286, 1),
('Dadar & Nagar Haveli', 58969, 418, 46, 0),
('Daman & Diu', 34190, 84, 18, 0),
('Delhi', 186659, 54, 0, 0),
('Goa', 3886092, 144886, 123839, 21),
('Gujrat', 13725825, 41566, 7232, 7),
('Haryana', 2720396, 9308, 726, 3),
('Himachal Pradesh', 470357, 61, 1, 0),
('Jammu & Kashmir', 460705, 216, 8, 0),
('Jharkhand', 2102135, 104800, 54993, 6),
('Karnataka', 9564478, 12445, 1598, 0),
('Kerala', 2656072, 1549, 400, 4),
('Lakshwadeep', 326, 4, 0, 0),
('Madhya Pradesh', 9937602, 100597, 39125, 24),
('Maharashtra', 18102384, 56603, 31139, 59),
('Manipur', 80232, 216, 119, 0),
('Meghalaya', 599144, 48603, 43828, 79),
('Mizoram', 310526, 28593, 24602, 21),
('Nagaland', 235651, 1527, 532, 3),
('Orisha', 6608453, 436850, 369533, 80),
('Puducherry', 158851, 54, 5, 1),
('Punjab', 3033940, 596, 13, 0),
('Rajasthan', 9062099, 11792, 662, 3),
('Sikkim', 8826, 27, 11, 0),
('Tamil Nadu', 8975782, 5587, 355, 0),
('Telangana', 3469414, 10951, 10206, 4),
('Tripura', 453298, 32525, 30074, 21),
('Uttar Pradesh', 4952483, 42767, 371, 0),
('Uttarakhand', 365396, 1466, 73, 0),
('West Bengal', 7702614, 24208, 5775, 34);

-- --------------------------------------------------------

--
-- Table structure for table `data2016`
--

CREATE TABLE `data2016` (
  `location` varchar(32) NOT NULL,
  `blood_slide_examination` int(10) NOT NULL,
  `malaria_cases` int(10) NOT NULL,
  `plasmodium_falciparum_cases` int(10) NOT NULL,
  `deaths` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2016`
--

INSERT INTO `data2016` (`location`, `blood_slide_examination`, `malaria_cases`, `plasmodium_falciparum_cases`, `deaths`) VALUES
('Andaman & Nicobar Islands', 57452, 485, 140, 0),
('Andhra Pradesh', 6720251, 23613, 17443, 0),
('Arunachal Pradesh', 151590, 3144, 911, 2),
('Assam', 3032997, 7826, 5686, 6),
('Bihar', 186129, 5205, 895, 0),
('Chandigarh', 106173, 157, 0, 0),
('Chhatisgarh', 4830145, 148220, 121503, 61),
('Dadar & Nagar Haveli', 62294, 375, 30, 0),
('Daman & Diu', 35873, 48, 7, 0),
('Delhi', 133312, 31, 0, 0),
('Goa', 440341, 742, 130, 0),
('Gujrat', 14785016, 44783, 6298, 6),
('Haryana', 2895273, 7866, 552, 0),
('Himachal Pradesh', 449911, 121, 19, 0),
('Jammu & Kashmir', 499988, 242, 11, 0),
('Jharkhand', 2959427, 141414, 83232, 15),
('Karnataka', 9875331, 11078, 1746, 0),
('Kerala', 2728755, 1547, 419, 2),
('Lakshwadeep', 404, 2, 0, 0),
('Madhya Pradesh', 9635854, 69106, 22304, 3),
('Maharashtra', 17812209, 23983, 7815, 26),
('Manipur', 94115, 122, 58, 0),
('Meghalaya', 468254, 35147, 31867, 45),
('Mizoram', 267747, 7583, 5907, 9),
('Nagaland', 252232, 828, 316, 0),
('Orisha', 7188885, 449697, 389332, 77),
('Puducherry', 142059, 76, 11, 0),
('Punjab', 2691331, 693, 8, 0),
('Rajasthan', 9756048, 12741, 1031, 5),
('Sikkim', 8099, 15, 5, 0),
('Tamil Nadu', 8458647, 4341, 242, 0),
('Telangana', 3460192, 3512, 2617, 1),
('Tripura', 351392, 10546, 9545, 14),
('Uttar Pradesh', 4816652, 39238, 158, 0),
('Uttarakhand', 375835, 967, 47, 0),
('West Bengal', 9215299, 35236, 5928, 59);

-- --------------------------------------------------------

--
-- Table structure for table `data2017`
--

CREATE TABLE `data2017` (
  `location` varchar(32) NOT NULL,
  `blood_slide_examination` int(10) NOT NULL,
  `malaria_cases` int(10) NOT NULL,
  `plasmodium_falciparum_cases` int(10) NOT NULL,
  `deaths` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2017`
--

INSERT INTO `data2017` (`location`, `blood_slide_examination`, `malaria_cases`, `plasmodium_falciparum_cases`, `deaths`) VALUES
('Andaman & Nicobar Islands', 55188, 404, 67, 0),
('Andhra Pradesh', 6482654, 16913, 11944, 0),
('Arunachal Pradesh', 152426, 3144, 911, 2),
('Assam', 2719452, 5743, 4131, 0),
('Bihar', 184955, 3175, 356, 2),
('Chandigarh', 87972, 114, 1, 0),
('Chhatisgarh', 5116606, 141310, 115153, 0),
('Dadar & Nagar Haveli', 64184, 297, 16, 0),
('Daman & Diu', 36239, 37, 4, 0),
('Delhi', 98833, 577, 2, 0),
('Goa', 5116606, 653, 75, 2),
('Gujrat', 15591964, 37801, 3502, 2),
('Haryana', 2599650, 6887, 904, 0),
('Himachal Pradesh', 440095, 95, 9, 0),
('Jammu & Kashmir', 480490, 226, 0, 0),
('Jharkhand', 3339535, 92770, 42047, 1),
('Karnataka', 10163735, 6529, 1118, 0),
('Kerala', 2645332, 1194, 317, 2),
('Lakshwadeep', 430, 1, 0, 0),
('Madhya Pradesh', 9896156, 46176, 15554, 3),
('Maharashtra', 16935392, 18133, 5929, 19),
('Manipur', 115615, 80, 22, 0),
('Meghalaya', 421145, 16433, 14974, 11),
('Mizoram', 213175, 5710, 4978, 0),
('Nagaland', 253753, 394, 188, 1),
('Orisha', 6659013, 352140, 297554, 25),
('Puducherry', 141894, 59, 13, 0),
('Punjab', 2429949, 808, 12, 0),
('Rajasthan', 6603580, 6837, 377, 0),
('Sikkim', 11586, 12, 3, 0),
('Tamil Nadu', 8451790, 5449, 197, 0),
('Telangana', 3139093, 2688, 2170, 0),
('Tripura', 375626, 7040, 6572, 6),
('Uttar Pradesh', 4722321, 32345, 159, 0),
('Uttarakhand', 359954, 532, 14, 0),
('West Bengal', 9980887, 30008, 4632, 29);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `first_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `access_level` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_number`, `access_level`) VALUES
(1, 'dhruvavdhesh', '2e1eb46ff0b4ecb53c3a9106297d0648bff28fd6', 'Dhruv', 'Avdhesh', 'me@dhruvavdhesh.in', 9873410683, 'Admin'),
(2, 'avdheshkumar', '19655f13cb19b0512579b8ee73d788dd8b99f5fd', 'Avdhesh', 'Kumar', 'kuavdhesh@gmail.com', 9873948128, 'Analyst'),
(3, 'ushagoel', '4aba0e7264be1b97525d0a62e9840a8e1b20d65b', 'Usha', 'Goel', 'usha.goel.dr@gmail.com', 9899636282, 'Analyst'),
(4, 'demo', '6ea7ccdcf642953a24672d10b0d32cef576e0329', 'Demo', 'User', 'demo@hackmalaria.ml', 9999999999, 'Analyst'),
(9, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Super', 'Admin', 'admin@hackmalaria.ml', 9999999999, 'Admin'),
(11, 'asd', '00ea1da4192a2030f9ae023de3b3143ed647bbab', 'asd', 'asd', 'asd@asd.com', 9999999999, 'Analyst');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data2013`
--
ALTER TABLE `data2013`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `data2014`
--
ALTER TABLE `data2014`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `data2015`
--
ALTER TABLE `data2015`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `data2016`
--
ALTER TABLE `data2016`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `data2017`
--
ALTER TABLE `data2017`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
