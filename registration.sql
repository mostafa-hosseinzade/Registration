-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 04:22 PM
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
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
`fldid` int(11) NOT NULL,
  `fldname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldtbldeparment_id` int(11) DEFAULT NULL,
  `flddeleted` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`fldid`, `fldname`, `fldtbldeparment_id`, `flddeleted`, `updated_at`, `created_at`) VALUES
(1, 'test 1', 6, 1, '2017-01-12 14:05:34', NULL),
(2, 'test 2', 4, 0, '2017-01-12 14:03:10', NULL),
(3, 'test 1', 2, 0, NULL, NULL),
(4, 'test 2', 3, 0, NULL, NULL),
(5, 'تست', 7, 0, '2017-01-12 13:58:02', '2017-01-12 13:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE IF NOT EXISTS `tbldepartment` (
`fldid` int(11) NOT NULL,
  `fldgroup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldlevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flddeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`fldid`, `fldgroup`, `fldlevel`, `created_at`, `updated_at`, `flddeleted`) VALUES
(1, '234 asddas as d', 'testasd as das d', '2017-01-12 12:12:01', '2017-01-12 12:44:36', 1),
(2, '234', 'test', '2017-01-12 12:12:04', '2017-01-12 12:45:37', 1),
(3, '234', 'test', '2017-01-12 12:12:17', '2017-01-12 12:12:17', 0),
(4, '234 345345345', 'test', '2017-01-12 12:12:26', '2017-01-12 12:41:56', 0),
(5, '234', 'test dfgf', '2017-01-12 12:15:32', '2017-01-12 12:15:32', 0),
(6, '123123', 'asdadasd', '2017-01-12 12:16:14', '2017-01-12 12:16:14', 0),
(7, 'sdfsdf', '5454354', '2017-01-12 12:16:47', '2017-01-12 12:16:47', 0);

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
-- Table structure for table `tblmigrations`
--

CREATE TABLE IF NOT EXISTS `tblmigrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblmigrations`
--

INSERT INTO `tblmigrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpassword_resets`
--

CREATE TABLE IF NOT EXISTS `tblpassword_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `tblteaching_user`
--

CREATE TABLE IF NOT EXISTS `tblteaching_user` (
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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flddeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblteaching_user`
--

INSERT INTO `tblteaching_user` (`fldid`, `fldfname`, `fldlname`, `fldname_father`, `fldid_sh`, `fldnational_code`, `fldbirth_day`, `fldbirth_place`, `fldreligion`, `fldmarital_status`, `fldsex`, `fldmalitary`, `flddate_time_work`, `fldaddress_location`, `fldaddress_workplace`, `fldaddress_location_phone`, `fldaddress_workplace_phone`, `fldemail`, `fldmobile`, `created_at`, `updated_at`, `flddeleted`) VALUES
(1, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:25', 0),
(2, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:28', 0),
(3, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:25', 0),
(4, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_course`
--

CREATE TABLE IF NOT EXISTS `tbluser_course` (
`fldid` int(11) NOT NULL,
  `fldtblcourse_id` int(11) DEFAULT NULL,
  `fldtbluser_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flddeleted` int(11) NOT NULL DEFAULT '0'
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'mostafa', 'hosseinzade2731@gmail.com', '$2y$10$re2TgMoJt13N9yOE4pr9tu7ymvdgRB5iWolVbRtdaPb46cdCEjb2u', NULL, '2017-01-10 07:00:01', '2017-01-10 07:00:01', 'admin'),
(6, 'mostafa', 'hosseinzade2731@gmail.com2', '$2y$10$AKK.IcZRq9NDTBYKfJiuc.YovsAHmJex15TM8Ta4s5jpOjYXo9/FK', NULL, NULL, NULL, 'user'),
(9, 'mostafa', 'hosseinzade2731@gmail.com3', '$2y$10$JZeTxf4L13zYqnhKri5Y/efvSoy/LW5f7Q76CToxaPB16UGJoxBYe', NULL, NULL, NULL, NULL);

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
-- Indexes for table `tblpassword_resets`
--
ALTER TABLE `tblpassword_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

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
-- Indexes for table `tblteaching_user`
--
ALTER TABLE `tblteaching_user`
 ADD PRIMARY KEY (`fldid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `tbluser_course`
--
ALTER TABLE `tbluser_course`
 ADD PRIMARY KEY (`fldid`), ADD KEY `fldtblcourse_id` (`fldtblcourse_id`), ADD KEY `fldtbluser_id` (`fldtbluser_id`);

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
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `tblteaching_user`
--
ALTER TABLE `tblteaching_user`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbluser_course`
--
ALTER TABLE `tbluser_course`
MODIFY `fldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblacademic_status`
--
ALTER TABLE `tblacademic_status`
ADD CONSTRAINT `tblacademic_status_ibfk_1` FOREIGN KEY (`fldtbluser_id`) REFERENCES `tblteaching_user` (`fldid`);

--
-- Constraints for table `tblcourse`
--
ALTER TABLE `tblcourse`
ADD CONSTRAINT `tblcourse_ibfk_1` FOREIGN KEY (`fldtbldeparment_id`) REFERENCES `tbldepartment` (`fldid`);

--
-- Constraints for table `tbluser_course`
--
ALTER TABLE `tbluser_course`
ADD CONSTRAINT `tbluser_course_ibfk_1` FOREIGN KEY (`fldtblcourse_id`) REFERENCES `tblcourse` (`fldid`),
ADD CONSTRAINT `tbluser_course_ibfk_2` FOREIGN KEY (`fldtbluser_id`) REFERENCES `tblteaching_user` (`fldid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
