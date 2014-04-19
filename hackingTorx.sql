-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2012 at 03:10 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a4323332_temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `hackingtorx`
--

CREATE TABLE `hackingtorx` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `sex` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `firstname` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `level1` tinyint(1) NOT NULL DEFAULT '0',
  `level2` tinyint(1) NOT NULL DEFAULT '0',
  `level3` tinyint(1) NOT NULL DEFAULT '0',
  `level4` tinyint(1) NOT NULL DEFAULT '0',
  `level5` tinyint(1) NOT NULL DEFAULT '0',
  `level6` tinyint(1) NOT NULL DEFAULT '0',
  `level7` tinyint(1) NOT NULL DEFAULT '0',
  `level8` tinyint(1) NOT NULL DEFAULT '0',
  `level9` tinyint(1) NOT NULL DEFAULT '0',
  `level10` tinyint(1) NOT NULL DEFAULT '0',
  `points` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hackingtorx`
--

INSERT INTO `hackingtorx` VALUES(1, 'shubhamgarg1234', 'bws81011', 'shubhamgarg1234@gmail.com', 'male', 'shubham', 'garg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leftsidemenu`
--

CREATE TABLE `leftsidemenu` (
  `left_menu_name` varchar(10000) COLLATE latin1_general_ci NOT NULL,
  `left_menu_link` varchar(10000) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `leftsidemenu`
--

INSERT INTO `leftsidemenu` VALUES('level1', 'level1.php');
INSERT INTO `leftsidemenu` VALUES('level2', 'level2.php');
INSERT INTO `leftsidemenu` VALUES('level3', 'level3.php');
INSERT INTO `leftsidemenu` VALUES('level4', 'level4.php');
INSERT INTO `leftsidemenu` VALUES('level5', 'level5.php');
INSERT INTO `leftsidemenu` VALUES('level6', 'level6.php');
INSERT INTO `leftsidemenu` VALUES('level7', 'level7.php');
INSERT INTO `leftsidemenu` VALUES('level8', 'level8.php');
INSERT INTO `leftsidemenu` VALUES('level9', '#');
INSERT INTO `leftsidemenu` VALUES('level10', '#');
