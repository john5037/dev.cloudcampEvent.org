-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2013 at 02:55 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campsite_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `event_url` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `event_date` datetime NOT NULL,
  `address` longtext NOT NULL,
  `event_format` varchar(255) DEFAULT NULL,
  `event_expected_attend` varchar(255) DEFAULT NULL,
  `event_hp_attend` varchar(255) DEFAULT NULL,
  `event_hp_support` varchar(255) DEFAULT NULL,
  `event_sponcership` text,
  `event_other_details` text,
  `event_sponcership_deadline` datetime DEFAULT NULL,
  `is_active` smallint(6) DEFAULT '1',
  `createdat` datetime NOT NULL,
  `updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `event_url`, `description`, `event_date`, `address`, `event_format`, `event_expected_attend`, `event_hp_attend`, `event_hp_support`, `event_sponcership`, `event_other_details`, `event_sponcership_deadline`, `is_active`, `createdat`, `updatedat`) VALUES
(1, 'Marketingcamp chicago', 'http://www.event.com', 'HP CLOUD Technology for store Backed data in Cloud', '2013-07-22 11:07:09', '200 S. Wacker Drive, 15th Floor', 'Unconference', 'Developers', 'Yourself', 'Speakers', 'Speaking opportunities', 'Other Arrangements', '2013-07-22 11:07:09', 1, '2013-07-22 11:07:09', '2013-07-22 11:07:09'),
(5, 'Test Event', 'http://www.testEvent.com', 'sds ', '2013-07-16 12:00:00', 'ahmedabad,Chandkheda,India', 'ffff', 'j', 'j', 'jkkj', 'k ', 'jkjk ', '2013-07-17 08:00:00', 1, '0000-00-00 00:00:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
