-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2014 at 10:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vaibhav`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `md5_id` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_name` tinytext COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_level` tinyint(4) NOT NULL DEFAULT '1',
  `pwd` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tel` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ckey` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`),
  FULLTEXT KEY `idx_search` (`full_name`,`user_email`,`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=60 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `md5_id`, `full_name`, `user_name`, `user_email`, `user_level`, `pwd`, `tel`, `ctime`, `ckey`) VALUES
(55, 'b53b3a3d6ab90ce0268229151c9bde11', 'SFDA', 'gvaibhavraj2', 'gvaibhavraj2@gmail.com', 1, '213a9751ceb8fb25cac58df9f228e9e20d6e8895f8b52a67e', 'dagvfwe', '0000-00-00 00:00:00', 0),
(56, '', 'ADVSNAH', 'safc2', 'mailme_vaibhav57@rediff.com', 1, 'be088fe8a5cdb4555d46f302971112656b6063696f858323d', '919756574602', '0000-00-00 00:00:00', 0),
(57, '', '', 'abcd', '0', 1, '', '', '2014-07-03 10:26:29', NULL),
(58, '', 'vaibhav', 'abcdef', 'rajeevkumar666@rediff.com', 1, '9df8197edc9b05f62bcb8ed9d3c8b757c37ed2ceb1e948e2c', '3247834778', '2014-07-03 10:39:36', NULL),
(59, '', 'Vaibhav Raj', 'vrg12', 'sdnfjsn@gmail.com', 1, '637918c9d4e6aa670f075a45509c2063973389403c6ff5ce4', '3253454', '2014-07-03 10:50:09', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
