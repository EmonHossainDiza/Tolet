-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 09:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

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
  `login_ip` varchar(255) CHARACTER SET latin1 NOT NULL,
  `login_browser` varchar(255) CHARACTER SET latin1 NOT NULL,
  `login_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_login`
--

CREATE TABLE `tbl_social_login` (
  `social_login_id` int(11) NOT NULL,
  `social_site_id` int(11) NOT NULL,
  `social_oauth_id` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_site`
--

CREATE TABLE `tbl_social_site` (
  `social_site_id` int(11) NOT NULL,
  `social_site_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `user_email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `user_phone` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `user_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_last_modified_date` datetime DEFAULT NULL,
  `user_image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `user_social_login_id` int(11) DEFAULT NULL,
  `user_status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=inactive; 1=active;',
  `user_access_level` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=normal; 1=pro_user',
  `user_address` text CHARACTER SET latin1,
  `user_gender` tinyint(2) DEFAULT '0' COMMENT '0=nothing; 1=Male; 2 =female;',
  `user_nid` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_social_login`
--
ALTER TABLE `tbl_social_login`
  ADD PRIMARY KEY (`social_login_id`);

--
-- Indexes for table `tbl_social_site`
--
ALTER TABLE `tbl_social_site`
  ADD PRIMARY KEY (`social_site_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
