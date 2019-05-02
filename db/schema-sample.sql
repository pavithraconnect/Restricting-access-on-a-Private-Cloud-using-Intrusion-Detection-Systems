-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 11:31 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `role_based_access_control`
--
CREATE DATABASE IF NOT EXISTS `role_based_access_control` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `role_based_access_control`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` char(128) NOT NULL,
  `email` varchar(120) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(8),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY (`username`),
  UNIQUE KEY (`email`)
) ENGINE=InnoDB;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `created_on`, `avatar`) VALUES
(1, 'Arya', 'arya123', 'arya@ids.com', '2019-4-25 18:07:47', '1.png'),
(2, 'Chandler', 'chandler123', 'chandler@ids.com', '2019-4-25 18:07:47', '2.png'),
(3, 'Jim', 'jim123', 'jim@ids.com', '2019-4-25 18:07:47', '3.png'),
(4, 'Dwight', 'dwight123', 'dwight@ids.com', '2019-4-25 18:07:47', '5.png');