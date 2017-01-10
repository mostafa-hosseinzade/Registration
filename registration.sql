-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 11:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblacademic_status`
--

CREATE TABLE IF NOT EXISTS `tblacademic_status` (
`fldid` int(11) NOT NULL,
  `fldlevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldfield` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldtendency` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flduniversity` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldgpa` float DEFAULT NULL,
  `flddate_start` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_end` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fldtbluser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblchoosecourse`
--

CREATE TABLE IF NOT EXISTS `tblchoosecourse` (
`fldid` int(11) NOT NULL,
  `fldtblcourse_id` int(11) DEFAULT NULL,
  `fldtbluser_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
`fldid` int(11) NOT NULL,
  `fldname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldtbldeparment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE IF NOT EXISTS `tbldepartment` (
`fldid` int(11) NOT NULL,
  `fldgroup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldlevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployement_record`
--

CREATE TABLE IF NOT EXISTS `tblemployement_record` (
`fldid` int(11) NOT NULL,
  `fldname_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldside` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_start` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_end` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblresearch_activies`
--

CREATE TABLE IF NOT EXISTS `tblresearch_activies` (
`fldid` int(11) NOT NULL,
  `fldtitle` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldplace_publication` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_publication` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblteaching_experience`
--

CREATE TABLE IF NOT EXISTS `tblteaching_experience` (
`fldid` int(11) NOT NULL,
  `flduniversity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldname_course` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldyear` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
`fldid` int(11) NOT NULL,
  `fldfname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldlname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldname_father` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldid_sh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldnational_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldbirth_day` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldbirth_place` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldreligion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldmarital_status` tinyint(4) DEFAULT NULL,
  `fldsex` tinyint(4) DEFAULT NULL,
  `fldmalitary` tinyint(4) DEFAULT NULL,
  `flddate_time_work` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldaddress_location` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldaddress_workplace` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldaddress_location_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldaddress_workplace_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldemail` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldmobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tblacademic_status`
--
ALTER TABLE `tblacademic_status`
 ADD PRIMARY KEY (`fldid`), ADD KEY `fldtbluser_id` (`fldtbluser_id`);

--
-- Indexes for table `tblchoosecourse`
--
ALTER TABLE `tblchoosecourse`
 ADD PRIMARY KEY (`fldid`), ADD KEY `fldtblcourse_id` (`fldtblcourse_id`), ADD KEY `fldtbluser_id` (`fldtbluser_id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
 ADD PRIMARY KEY (`fldid`), ADD KEY `fldtbldeparment_id` (`fldtbldeparment_id`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
 ADD PRIMARY KEY (`fldid`);

--
-- Indexes for table `tblemployement_record`
--
ALTER TABLE `tblemployement_record`
 ADD PRIMARY KEY (`fldid`);

--
-- Indexes for table `tblresearch_activies`
--
ALTER TABLE `tblresearch_activies`
 ADD PRIMARY KEY (`fldid`);

--
-- Indexes for table `tblteaching_experience`
--
ALTER TABLE `tblteaching_experience`
 ADD PRIMARY KEY (`fldid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
 ADD PRIMARY KEY (`fldid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblacademic_status`
--
ALTER TABLE `tblacademic_status`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblchoosecourse`
--
ALTER TABLE `tblchoosecourse`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblemployement_record`
--
ALTER TABLE `tblemployement_record`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblresearch_activies`
--
ALTER TABLE `tblresearch_activies`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblteaching_experience`
--
ALTER TABLE `tblteaching_experience`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblacademic_status`
--
ALTER TABLE `tblacademic_status`
ADD CONSTRAINT `tblacademic_status_ibfk_1` FOREIGN KEY (`fldtbluser_id`) REFERENCES `tbluser` (`fldid`);

--
-- Constraints for table `tblchoosecourse`
--
ALTER TABLE `tblchoosecourse`
ADD CONSTRAINT `tblchoosecourse_ibfk_1` FOREIGN KEY (`fldtblcourse_id`) REFERENCES `tblcourse` (`fldid`),
ADD CONSTRAINT `tblchoosecourse_ibfk_2` FOREIGN KEY (`fldtbluser_id`) REFERENCES `tbluser` (`fldid`);

--
-- Constraints for table `tblcourse`
--
ALTER TABLE `tblcourse`
ADD CONSTRAINT `tblcourse_ibfk_1` FOREIGN KEY (`fldtbldeparment_id`) REFERENCES `tbldepartment` (`fldid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
