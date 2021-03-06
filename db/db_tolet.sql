-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 02:28 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tolet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `login_browser` varchar(255) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `user_id`, `login_ip`, `login_browser`, `login_time`, `logout_time`) VALUES
(26, 1, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', '2018-01-18 22:18:34', '2018-01-18 10:18:45'),
(27, 1, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', '2018-01-18 22:19:08', '2018-01-18 10:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `post_address` varchar(100) DEFAULT NULL,
  `post_phone` varchar(15) DEFAULT NULL,
  `post_city` varchar(100) DEFAULT NULL,
  `post_state` varchar(100) DEFAULT NULL,
  `post_division` varchar(100) DEFAULT NULL,
  `post_country` varchar(100) DEFAULT NULL,
  `post_zip` varchar(50) DEFAULT NULL,
  `post_date_from` date DEFAULT NULL,
  `post_price` varchar(20) DEFAULT NULL,
  `post_advance_price` varchar(20) DEFAULT NULL,
  `post_description` text CHARACTER SET utf8,
  `post_other_benefit_id` int(11) DEFAULT NULL,
  `post_image_id` int(11) DEFAULT NULL,
  `post_create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_status` tinyint(2) DEFAULT '0' COMMENT '0=Inactive ,1=Active',
  `post_category_id` int(11) DEFAULT NULL,
  `post_user_last_response` datetime DEFAULT NULL,
  `post_availability` tinyint(2) DEFAULT '0' COMMENT '0=no,1=yes',
  `post_rating_review_id` int(11) DEFAULT NULL,
  `post_specific_details_id` int(11) DEFAULT NULL,
  `post_boost_request_id` int(11) DEFAULT NULL,
  `post_code` varchar(30) DEFAULT NULL,
  `post_lat_long` decimal(10,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_address`, `post_phone`, `post_city`, `post_state`, `post_division`, `post_country`, `post_zip`, `post_date_from`, `post_price`, `post_advance_price`, `post_description`, `post_other_benefit_id`, `post_image_id`, `post_create_date`, `post_status`, `post_category_id`, `post_user_last_response`, `post_availability`, `post_rating_review_id`, `post_specific_details_id`, `post_boost_request_id`, `post_code`, `post_lat_long`) VALUES
(12, 'ksjdbfkjasn', '12', '1', 'Khilkhet', 'Nikunja 2', 'Dhaka', 'Bangladesh', '1229', '0000-00-00', '1', '1', 'xdkjvgsdkjl', 18, 6, '2018-02-19 01:24:52', 1, 1, NULL, 1, NULL, 18, NULL, NULL, '0.0000000000'),
(13, 'm sd nlkf', '12', '1', 'Khilkhet', 'Nikunja 2', 'Dhaka', 'Bangladesh', '1229', '0000-00-00', '11', '1', 'sdfjnslkdn', 19, 7, '2018-02-19 01:27:16', 1, 1, NULL, 1, NULL, 19, NULL, NULL, '0.0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_boost_request`
--

CREATE TABLE `tbl_post_boost_request` (
  `post_boost_request_id` int(11) NOT NULL,
  `post_boost_request_type` tinyint(2) DEFAULT '0' COMMENT '0=freeRequest;1=paid(pro user);2=paid(normal user)',
  `post_boost_request_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_boost_request_Start_date` datetime DEFAULT NULL,
  `post_boost_request_end_date` datetime DEFAULT NULL,
  `post_boost_request_Status` tinyint(2) DEFAULT '0' COMMENT '0=Inactive;1=Active',
  `post_boost_request_lastUpdatedBy` varchar(100) DEFAULT NULL,
  `post_boost_request_LastUpdateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_category`
--

CREATE TABLE `tbl_post_category` (
  `post_category_id` int(11) NOT NULL,
  `post_category_name` varchar(255) DEFAULT NULL,
  `post_category_status` tinyint(4) DEFAULT NULL COMMENT '1=Family, 2= SubLet , 3=Mass'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_category`
--

INSERT INTO `tbl_post_category` (`post_category_id`, `post_category_name`, `post_category_status`) VALUES
(1, 'Family', 1),
(2, 'Sublet', 2),
(3, 'Bachelor-Flat', 3),
(4, 'Bechelor-Seat', 4),
(5, 'Office', 5),
(6, 'Shop', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_image`
--

CREATE TABLE `tbl_post_image` (
  `post_image_id` int(11) NOT NULL,
  `post_image_name1` varchar(255) DEFAULT NULL,
  `post_image_name2` varchar(255) DEFAULT NULL,
  `post_image_name3` varchar(255) DEFAULT NULL,
  `post_image_name4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_image`
--

INSERT INTO `tbl_post_image` (`post_image_id`, `post_image_name1`, `post_image_name2`, `post_image_name3`, `post_image_name4`) VALUES
(5, 'chillbuzz.jpg', 'main logo3-01.jpg', 'main logo4.jpg', 'offer.jpg'),
(6, 'chillbuzz.jpg', NULL, NULL, NULL),
(7, 'chillbuzz.jpg', 'main logo3-01.jpg', 'main logo4.jpg', 'offer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_other_benefit`
--

CREATE TABLE `tbl_post_other_benefit` (
  `post_other_benefit_id` int(11) NOT NULL,
  `cc_camera` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `car_parking` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `lift` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `generator` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `play_ground` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `water_gas_eclectricity` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `security_guard` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `geyser` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `wifi` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `maid` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;',
  `fridge` tinyint(4) DEFAULT '0' COMMENT '0=no;1=yes;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_other_benefit`
--

INSERT INTO `tbl_post_other_benefit` (`post_other_benefit_id`, `cc_camera`, `car_parking`, `lift`, `generator`, `play_ground`, `water_gas_eclectricity`, `security_guard`, `geyser`, `wifi`, `maid`, `fridge`) VALUES
(17, 1, NULL, 1, 1, 1, 1, 1, 1, 0, 0, 0),
(18, 1, NULL, 1, 1, 1, 1, 1, 1, 0, 0, 0),
(19, 1, NULL, NULL, 1, NULL, NULL, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_rating_review`
--

CREATE TABLE `tbl_post_rating_review` (
  `post_rating_review_id` int(11) NOT NULL,
  `post_rating_review_comment` text,
  `post_rating_review_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_rating_review_point` decimal(10,2) DEFAULT NULL,
  `post_rating_review_Status` tinyint(2) DEFAULT '0' COMMENT '0=Inactive;1=Active',
  `post_rating_review_lastUpdatedBy` varchar(100) DEFAULT NULL,
  `post_rating_review_LastUpdateDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_specific_details`
--

CREATE TABLE `tbl_post_specific_details` (
  `post_specific_details_id` int(11) NOT NULL,
  `no_of_room` int(11) DEFAULT NULL,
  `no_of_bathroom` int(11) DEFAULT NULL,
  `no_of_balcony` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `negotiable_rent` int(11) DEFAULT NULL,
  `installment_rent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_specific_details`
--

INSERT INTO `tbl_post_specific_details` (`post_specific_details_id`, `no_of_room`, `no_of_bathroom`, `no_of_balcony`, `area`, `floor`, `negotiable_rent`, `installment_rent`) VALUES
(17, 1, 1, 1, 1, 1, NULL, NULL),
(18, 1, 1, 1, 1, 1, NULL, NULL),
(19, 1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_login`
--

CREATE TABLE `tbl_social_login` (
  `social_login_id` int(11) NOT NULL,
  `social_site_id` int(11) NOT NULL,
  `social_oauth_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_site`
--

CREATE TABLE `tbl_social_site` (
  `social_site_id` int(11) NOT NULL,
  `social_site_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_site`
--

INSERT INTO `tbl_social_site` (`social_site_id`, `social_site_name`) VALUES
(1, 'Facebook'),
(2, 'Google'),
(3, 'Twitter'),
(4, 'Linkedin'),
(5, 'Pinterest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0= normal user; 1=admin; 2=pro user',
  `user_phone` varchar(15) DEFAULT NULL,
  `user_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_last_modified_date` datetime DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_social_login_id` int(11) DEFAULT NULL,
  `user_status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=inactive; 1=active;',
  `user_address` text,
  `user_gender` tinyint(2) DEFAULT '0' COMMENT '0=nothing; 1=Male; 2 =female;',
  `user_nid` varchar(50) DEFAULT NULL,
  `user_post_limit` tinyint(2) DEFAULT NULL COMMENT '0=3ta,2=5ta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_email`, `user_name`, `user_password`, `user_type`, `user_phone`, `user_reg_date`, `user_last_modified_date`, `user_image`, `user_social_login_id`, `user_status`, `user_address`, `user_gender`, `user_nid`, `user_post_limit`) VALUES
(1, 'emon@a.com', 'emon_diza', '$2b$10$A.Oiq2RRmeo8SElU99AZzOEk66YsRbbD.csyIo/apoTjJlc9Uv6de', 0, '01683795242', '2018-01-18 17:44:09', NULL, NULL, NULL, 1, 'nikunjo 2', 1, '19950000000000000', NULL),
(2, 'emon@aa.com', 'emon hossain diza', '$2b$10$A.Oiq2RRmeo8SElU99AZzOEk66YsRbbD.csyIo/apoTjJlc9Uv6de', 0, '01918777695', '2018-01-18 17:45:40', NULL, NULL, NULL, 0, 'khilkhet, dhaka', 2, '1995111111111113', NULL),
(3, NULL, NULL, '$2y$10$svMIjNd7Dw0MjzlkPWXt7uwUpZKzR4/XPrddDN0xOsd6vI9oPmBVa', 0, NULL, '2018-01-28 21:30:38', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL),
(4, NULL, NULL, '$2y$10$r0.QlsOIWKeXF.DvmputTeIVznzoGKO.zu6eu.rrfwLyEYOQyPQGa', 0, NULL, '2018-01-28 21:31:01', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL),
(5, NULL, NULL, '$2y$10$fUSYcJbJKlP8G1wsr2o3neX5/DLlB3nZY9b.eFXMnPpwLo.PJpGxW', 0, NULL, '2018-01-28 21:31:17', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_post_other_benefit_id` (`post_other_benefit_id`),
  ADD KEY `fk_post_image_id` (`post_image_id`),
  ADD KEY `fk_post_category_id` (`post_category_id`),
  ADD KEY `fk_post_rating_review_id` (`post_rating_review_id`),
  ADD KEY `fk_post_specific_details_id` (`post_specific_details_id`),
  ADD KEY `fk_post_boost_request_id` (`post_boost_request_id`);

--
-- Indexes for table `tbl_post_boost_request`
--
ALTER TABLE `tbl_post_boost_request`
  ADD PRIMARY KEY (`post_boost_request_id`);

--
-- Indexes for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  ADD PRIMARY KEY (`post_category_id`);

--
-- Indexes for table `tbl_post_image`
--
ALTER TABLE `tbl_post_image`
  ADD PRIMARY KEY (`post_image_id`);

--
-- Indexes for table `tbl_post_other_benefit`
--
ALTER TABLE `tbl_post_other_benefit`
  ADD PRIMARY KEY (`post_other_benefit_id`);

--
-- Indexes for table `tbl_post_rating_review`
--
ALTER TABLE `tbl_post_rating_review`
  ADD PRIMARY KEY (`post_rating_review_id`);

--
-- Indexes for table `tbl_post_specific_details`
--
ALTER TABLE `tbl_post_specific_details`
  ADD PRIMARY KEY (`post_specific_details_id`);

--
-- Indexes for table `tbl_social_login`
--
ALTER TABLE `tbl_social_login`
  ADD PRIMARY KEY (`social_login_id`),
  ADD KEY `fk_social_site_id` (`social_site_id`);

--
-- Indexes for table `tbl_social_site`
--
ALTER TABLE `tbl_social_site`
  ADD PRIMARY KEY (`social_site_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_social_login_id` (`user_social_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_post_boost_request`
--
ALTER TABLE `tbl_post_boost_request`
  MODIFY `post_boost_request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_post_image`
--
ALTER TABLE `tbl_post_image`
  MODIFY `post_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_post_other_benefit`
--
ALTER TABLE `tbl_post_other_benefit`
  MODIFY `post_other_benefit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_post_rating_review`
--
ALTER TABLE `tbl_post_rating_review`
  MODIFY `post_rating_review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_post_specific_details`
--
ALTER TABLE `tbl_post_specific_details`
  MODIFY `post_specific_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_social_login`
--
ALTER TABLE `tbl_social_login`
  MODIFY `social_login_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_social_site`
--
ALTER TABLE `tbl_social_site`
  MODIFY `social_site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `fk_post_boost_request_id` FOREIGN KEY (`post_boost_request_id`) REFERENCES `tbl_post_boost_request` (`post_boost_request_id`),
  ADD CONSTRAINT `fk_post_category_id` FOREIGN KEY (`post_category_id`) REFERENCES `tbl_post_category` (`post_category_id`),
  ADD CONSTRAINT `fk_post_image_id` FOREIGN KEY (`post_image_id`) REFERENCES `tbl_post_image` (`post_image_id`),
  ADD CONSTRAINT `fk_post_other_benefit_id` FOREIGN KEY (`post_other_benefit_id`) REFERENCES `tbl_post_other_benefit` (`post_other_benefit_id`),
  ADD CONSTRAINT `fk_post_rating_review_id` FOREIGN KEY (`post_rating_review_id`) REFERENCES `tbl_post_rating_review` (`post_rating_review_id`),
  ADD CONSTRAINT `fk_post_specific_details_id` FOREIGN KEY (`post_specific_details_id`) REFERENCES `tbl_post_specific_details` (`post_specific_details_id`);

--
-- Constraints for table `tbl_social_login`
--
ALTER TABLE `tbl_social_login`
  ADD CONSTRAINT `fk_social_site_id` FOREIGN KEY (`social_site_id`) REFERENCES `tbl_social_site` (`social_site_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `fk_social_login_id` FOREIGN KEY (`user_social_login_id`) REFERENCES `tbl_social_login` (`social_login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
