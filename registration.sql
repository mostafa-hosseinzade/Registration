-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2017 at 09:34 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblacademic_status`
--

CREATE TABLE IF NOT EXISTS `tblacademic_status` (
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `fldlevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldfield` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldtendency` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flduniversity` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldgpa` float DEFAULT NULL,
  `flddate_start` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_end` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `fldtbluser_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fldid`),
  KEY `fldtbluser_id` (`fldtbluser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblacademic_status`
--

INSERT INTO `tblacademic_status` (`fldid`, `fldlevel`, `fldfield`, `fldtendency`, `flduniversity`, `fldgpa`, `flddate_start`, `flddate_end`, `created_at`, `updated_at`, `fldtbluser_id`) VALUES
(1, 'test 1', 'test 1', 'gra', 'test k', 23, '23234', '23434', '2017-01-14 12:47:46', '2017-01-14 12:47:46', NULL),
(2, 'test 1', 'test 1', 'gra', 'test k', 23, '23234', '23434', '2017-01-14 12:47:46', '2017-01-14 12:47:46', NULL),
(3, 'test 1', 'test 1', 'gra', 'test k', 23, '23234', '23434', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(4, 'test 1', 'test 1', 'gra', 'test k', 23, '23234', '23434', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(5, 'test 1', 'test', 'gra', 'test k', 23, '23234', '23434', '2017-01-14 13:53:24', '2017-01-14 13:53:24', 13),
(6, 'test 1', 'test 1', 'gra', 'test k', 34, '1395/10/07', '1395/10/21', '2017-01-14 15:37:25', '2017-01-14 15:37:25', 14),
(7, '', '', '', '', 0, '', '', '2017-01-14 16:10:53', '2017-01-14 16:10:53', 15),
(8, '', '', '', '', 0, '', '', '2017-01-14 16:11:31', '2017-01-14 16:11:31', 16),
(9, '', '', '', '', 0, '', '', '2017-01-14 16:11:36', '2017-01-14 16:11:36', 17),
(10, 'test 1', 'test 1', 'gra', '', 0, '', '', '2017-01-14 16:33:43', '2017-01-14 16:33:43', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `fldname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldtbldeparment_id` int(11) DEFAULT NULL,
  `flddeleted` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`fldid`),
  KEY `fldtbldeparment_id` (`fldtbldeparment_id`)
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
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `fldgroup` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldlevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `flddeleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fldid`)
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
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `fldname_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldside` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_start` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_end` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tblteaching_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fldid`),
  KEY `tblteaching_id` (`tblteaching_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tblemployement_record`
--

INSERT INTO `tblemployement_record` (`fldid`, `fldname_company`, `fldside`, `flddate_start`, `flddate_end`, `created_at`, `updated_at`, `tblteaching_id`) VALUES
(1, 'test 1 2', 'test semat', '1395', '1396', '2017-01-14 12:46:21', '2017-01-14 12:46:21', NULL),
(2, 'test 1 23', 'test semat 1', '1395 ', '1396', '2017-01-14 12:46:21', '2017-01-14 12:46:21', NULL),
(3, 'test 1 2', 'test semat', '1395', '1396', '2017-01-14 12:47:19', '2017-01-14 12:47:19', NULL),
(4, 'test 1 23', 'test semat 1', '1395 ', '1396', '2017-01-14 12:47:19', '2017-01-14 12:47:19', NULL),
(5, 'test 1 2', 'test semat', '1395', '1396', '2017-01-14 12:47:45', '2017-01-14 12:47:45', NULL),
(6, 'test 1 23', 'test semat 1', '1395 ', '1396', '2017-01-14 12:47:46', '2017-01-14 12:47:46', NULL),
(7, 'test 1 2', 'test semat', '1395', '1396', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(8, 'test 1 23', 'test semat 1', '1395 ', '1396', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(9, '', '', '', '', '2017-01-14 13:53:24', '2017-01-14 13:53:24', 13),
(10, 'test 1', 'test semat', '1395/10/15', '1395/10/04', '2017-01-14 15:37:25', '2017-01-14 15:37:25', 14),
(11, '', '', '', '', '2017-01-14 16:10:53', '2017-01-14 16:10:53', 15),
(12, '', '', '', '', '2017-01-14 16:11:31', '2017-01-14 16:11:31', 16),
(13, '', '', '', '', '2017-01-14 16:11:36', '2017-01-14 16:11:36', 17),
(14, '', '', '', '', '2017-01-14 16:33:43', '2017-01-14 16:33:43', 18);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblresearch_activities`
--

CREATE TABLE IF NOT EXISTS `tblresearch_activities` (
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `fldtitle` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldplace_publication` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flddate_publication` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tblteaching_id` int(11) DEFAULT NULL,
  `fldtype` int(11) DEFAULT NULL,
  PRIMARY KEY (`fldid`),
  KEY `tblteaching_id` (`tblteaching_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblresearch_activities`
--

INSERT INTO `tblresearch_activities` (`fldid`, `fldtitle`, `fldplace_publication`, `flddate_publication`, `created_at`, `updated_at`, `tblteaching_id`, `fldtype`) VALUES
(1, 'test 1 23', 'test 1', '234', '2017-01-14 12:47:19', '2017-01-14 12:47:19', NULL, 2),
(2, 'test 1', 'test 1', '234', '2017-01-14 12:47:20', '2017-01-14 12:47:20', NULL, 2),
(3, 'test 1 23', 'test 1', '234', '2017-01-14 12:47:46', '2017-01-14 12:47:46', NULL, 2),
(4, 'test 1', 'test 1', '234', '2017-01-14 12:47:46', '2017-01-14 12:47:46', NULL, 2),
(5, 'test 1 23', 'test 1', '234', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12, 2),
(6, 'test 1', 'test 1', '234', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12, 2),
(7, 'test 1 23', 'test 1', '234', '2017-01-14 13:53:24', '2017-01-14 13:53:24', 13, 2),
(8, 'test 1 23', 'test 1', '1395/10/08', '2017-01-14 15:37:25', '2017-01-14 15:37:25', 14, 2),
(9, '', '', '', '2017-01-14 16:10:53', '2017-01-14 16:10:53', 15, 1),
(10, '', '', '', '2017-01-14 16:11:31', '2017-01-14 16:11:31', 16, 1),
(11, '', '', '', '2017-01-14 16:11:36', '2017-01-14 16:11:36', 17, 1),
(12, 'test', 'test', '1395/10/15', '2017-01-14 16:33:43', '2017-01-14 16:33:43', 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblteaching_experience`
--

CREATE TABLE IF NOT EXISTS `tblteaching_experience` (
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `flduniversity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldname_course` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fldyear` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `fldtblteaching_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fldid`),
  KEY `fldtblteaching_id` (`fldtblteaching_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tblteaching_experience`
--

INSERT INTO `tblteaching_experience` (`fldid`, `flduniversity`, `fldname_course`, `fldyear`, `created_at`, `updated_at`, `fldtblteaching_id`) VALUES
(1, 'test university 1', 'test course 2', '1395 1', '2017-01-14 12:46:21', '2017-01-14 12:46:21', NULL),
(2, 'test university 2', 'test course 2', '1395 1 2', '2017-01-14 12:46:21', '2017-01-14 12:46:21', NULL),
(3, 'test university 3', 'test course 2 3', '1395 1 2', '2017-01-14 12:46:21', '2017-01-14 12:46:21', NULL),
(4, 'test university 1', 'test course 2', '1395 1', '2017-01-14 12:47:19', '2017-01-14 12:47:19', NULL),
(5, 'test university 2', 'test course 2', '1395 1 2', '2017-01-14 12:47:19', '2017-01-14 12:47:19', NULL),
(6, 'test university 3', 'test course 2 3', '1395 1 2', '2017-01-14 12:47:19', '2017-01-14 12:47:19', NULL),
(7, 'test university 1', 'test course 2', '1395 1', '2017-01-14 12:47:45', '2017-01-14 12:47:45', NULL),
(8, 'test university 2', 'test course 2', '1395 1 2', '2017-01-14 12:47:45', '2017-01-14 12:47:45', NULL),
(9, 'test university 3', 'test course 2 3', '1395 1 2', '2017-01-14 12:47:45', '2017-01-14 12:47:45', NULL),
(10, 'test university 1', 'test course 2', '1395 1', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(11, 'test university 2', 'test course 2', '1395 1 2', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(12, 'test university 3', 'test course 2 3', '1395 1 2', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 12),
(13, 'test university 1', 'test course 2', '1395 1', '2017-01-14 13:53:24', '2017-01-14 13:53:24', 13),
(14, 'test university 1', 'test course 2', '13954', '2017-01-14 15:37:25', '2017-01-14 15:37:25', 14),
(15, 'test university 1', 'test course 2', '1395 1', '2017-01-14 15:37:25', '2017-01-14 15:37:25', 14),
(16, '', '', '', '2017-01-14 16:10:53', '2017-01-14 16:10:53', 15),
(17, '', '', '', '2017-01-14 16:11:30', '2017-01-14 16:11:30', 16),
(18, '', '', '', '2017-01-14 16:11:36', '2017-01-14 16:11:36', 17),
(19, 'test', 'test', '', '2017-01-14 16:33:43', '2017-01-14 16:33:43', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tblteaching_user`
--

CREATE TABLE IF NOT EXISTS `tblteaching_user` (
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime DEFAULT NULL,
  `flddeleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fldid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tblteaching_user`
--

INSERT INTO `tblteaching_user` (`fldid`, `fldfname`, `fldlname`, `fldname_father`, `fldid_sh`, `fldnational_code`, `fldbirth_day`, `fldbirth_place`, `fldreligion`, `fldmarital_status`, `fldsex`, `fldmalitary`, `flddate_time_work`, `fldaddress_location`, `fldaddress_workplace`, `fldaddress_location_phone`, `fldaddress_workplace_phone`, `fldemail`, `fldmobile`, `created_at`, `updated_at`, `flddeleted`) VALUES
(1, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-14 18:02:02', 1),
(2, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:28', 0),
(3, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:25', 0),
(4, 'dfg', 'dfg', 'dfg', '345', '34', '546', 'dfg', 'fdg', 45, 45, 45, 'fdg', 'gfd', 'dfg', 'dfg', 'fg', 'fg', NULL, NULL, '2017-01-10 13:49:28', 0),
(5, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:46:21', '2017-01-14 12:46:21', 0),
(6, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:47:19', '2017-01-14 12:47:19', 0),
(7, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:47:45', '2017-01-14 12:47:45', 0),
(8, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:48:49', '2017-01-14 12:48:49', 0),
(9, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:49:06', '2017-01-14 12:49:06', 0),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-14 12:49:22', '2017-01-14 12:49:22', 0),
(11, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:54:36', '2017-01-14 12:54:36', 0),
(12, 'test add', 'tet add', 'test', '23324345', '34234', '546', 'test add', 'fdg', 1, 1, 45, '{24},{test}', 'gfd', 'dfg', 'dfg', 'fg', 'test@te.tes', '09123569585', '2017-01-14 12:55:40', '2017-01-14 12:55:40', 0),
(13, 'test', 'test ', '345', '234', '34324234', '54623443', 'test', '', 0, 1, 0, '{},{}', 'yrdy', 'yrdy', '345', '345', 'test@te.tes', '345', '2017-01-14 13:53:24', '2017-01-14 13:53:24', 0),
(14, 'test', 'test', 'test', '234234', '34324234', '1395/10/01', 'test', 'test', 0, 0, 0, '{test},{test}', 'test', 'test', '02154548878', '02136548785', 'test@te.tes', '06952122154', '2017-01-14 15:37:25', '2017-01-14 15:37:25', 0),
(15, '', '', '', '', '', '', '', '', 1, 1, 0, '{},{}', '', '', '', '', '', '', '2017-01-14 16:10:53', '2017-01-14 16:10:53', 0),
(16, '', '', '', '', '', '', '', '', 1, 1, 0, '{},{}', '', '', '', '', '', '', '2017-01-14 16:11:30', '2017-01-14 16:11:30', 0),
(17, '', '', '', '', '', '', '', '', 1, 1, 0, '{},{}', '', '', '', '', '', '', '2017-01-14 16:11:36', '2017-01-14 16:11:36', 0),
(18, 'test', 'test', 'ggh', '34345', '34324234', '1395/10/14', 'فثسف', 'test', 1, 1, 1, '{test},{test}', 'فثسف', 'فثسف', '021354856', 'فثسف', 'test@te.tes', '345', '2017-01-14 16:33:42', '2017-01-14 16:33:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_course`
--

CREATE TABLE IF NOT EXISTS `tbluser_course` (
  `fldid` int(11) NOT NULL AUTO_INCREMENT,
  `fldtblcourse_id` int(11) DEFAULT NULL,
  `fldtbluser_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `flddeleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fldid`),
  KEY `fldtblcourse_id` (`fldtblcourse_id`),
  KEY `fldtbluser_id` (`fldtbluser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbluser_course`
--

INSERT INTO `tbluser_course` (`fldid`, `fldtblcourse_id`, `fldtbluser_id`, `created_at`, `updated_at`, `flddeleted`) VALUES
(1, 5, NULL, '2017-01-14 12:47:46', '2017-01-14 12:47:46', 0),
(2, 4, NULL, '2017-01-14 12:47:46', '2017-01-14 12:47:46', 0),
(3, 5, 12, '2017-01-14 12:55:40', '2017-01-14 12:55:40', 0),
(4, 4, 12, '2017-01-14 12:55:40', '2017-01-14 12:55:40', 0),
(5, 5, 13, '2017-01-14 13:53:24', '2017-01-14 13:53:24', 0),
(6, 2, 13, '2017-01-14 13:53:24', '2017-01-14 13:53:24', 0),
(7, 5, 14, '2017-01-14 15:37:25', '2017-01-14 15:37:25', 0),
(8, 2, 14, '2017-01-14 15:37:25', '2017-01-14 15:37:25', 0),
(12, 5, 18, '2017-01-14 16:33:43', '2017-01-14 16:33:43', 0),
(13, 2, 18, '2017-01-14 16:33:43', '2017-01-14 16:33:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'mostafa', 'hosseinzade2731@gmail.com', '$2y$10$re2TgMoJt13N9yOE4pr9tu7ymvdgRB5iWolVbRtdaPb46cdCEjb2u', NULL, '2017-01-10 07:00:01', '2017-01-10 07:00:01', 'admin'),
(6, 'mostafa', 'hosseinzade2731@gmail.com2', '$2y$10$AKK.IcZRq9NDTBYKfJiuc.YovsAHmJex15TM8Ta4s5jpOjYXo9/FK', NULL, NULL, NULL, 'user'),
(9, 'mostafa', 'hosseinzade2731@gmail.com3', '$2y$10$JZeTxf4L13zYqnhKri5Y/efvSoy/LW5f7Q76CToxaPB16UGJoxBYe', NULL, NULL, NULL, NULL);

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
-- Constraints for table `tblemployement_record`
--
ALTER TABLE `tblemployement_record`
  ADD CONSTRAINT `tblemployement_record_ibfk_1` FOREIGN KEY (`tblteaching_id`) REFERENCES `tblteaching_user` (`fldid`);

--
-- Constraints for table `tblresearch_activities`
--
ALTER TABLE `tblresearch_activities`
  ADD CONSTRAINT `tblresearch_activities_ibfk_1` FOREIGN KEY (`tblteaching_id`) REFERENCES `tblteaching_user` (`fldid`);

--
-- Constraints for table `tblteaching_experience`
--
ALTER TABLE `tblteaching_experience`
  ADD CONSTRAINT `tblteaching_experience_ibfk_1` FOREIGN KEY (`fldtblteaching_id`) REFERENCES `tblteaching_user` (`fldid`);

--
-- Constraints for table `tbluser_course`
--
ALTER TABLE `tbluser_course`
  ADD CONSTRAINT `tbluser_course_ibfk_1` FOREIGN KEY (`fldtblcourse_id`) REFERENCES `tblcourse` (`fldid`),
  ADD CONSTRAINT `tbluser_course_ibfk_2` FOREIGN KEY (`fldtbluser_id`) REFERENCES `tblteaching_user` (`fldid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
