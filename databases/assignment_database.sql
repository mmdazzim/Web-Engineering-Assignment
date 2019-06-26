-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2019 at 08:07 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

DROP TABLE IF EXISTS `student_list`;
CREATE TABLE IF NOT EXISTS `student_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `biography` text,
  `img_name` varchar(255) DEFAULT NULL,
  `sponsor_duration` varchar(50) DEFAULT NULL,
  `sponsor_requirement` int(6) DEFAULT NULL,
  `sponsor_status` varchar(55) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `first_name`, `last_name`, `age`, `gender`, `school_name`, `university_name`, `biography`, `img_name`, `sponsor_duration`, `sponsor_requirement`, `sponsor_status`, `created_at`) VALUES
(1, 'test', 'test2', 21, 'male', 'school name', 'uni name', 'This student requires some amount of sponsorship in order to complete the semester', 'img1.jpg', 'One Semester', 10000, NULL, '2019-06-27 02:47:44'),
(2, 'name2', 'lastname2', 12, 'Female', 'schoolname2', 'uni name 2', 'bio 2', NULL, NULL, NULL, NULL, '2019-06-27 02:47:44'),
(3, 'asdasd', 'asdasd', 23, 'Female', 'Dakjshdk', 'asdajsd', 'asldjaskd', NULL, NULL, NULL, NULL, '2019-06-27 02:47:44'),
(4, 'ASas', 'ASas', 23, 'Male', 'dsdsd', 'asdasd', 'asdasd', NULL, NULL, NULL, NULL, '2019-06-27 02:47:44'),
(5, 'dfdfdf', 'cxcxc', 212, 'M', 'erwer', 'dfdf', 'dfdf', NULL, NULL, NULL, NULL, '2019-06-27 02:47:44'),
(6, 'ererr', 'wewewe', 11, 'f', 'sdsd', '2323', 'sdasd', NULL, NULL, NULL, NULL, '2019-06-27 02:47:44'),
(7, '123123', 'asdasd', 22, 'd', 'asdasd', 'asdasd', 'asd', NULL, NULL, NULL, NULL, '2019-06-27 02:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone_number_UNIQUE` (`phone_number`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`, `phone_number`, `created_at`) VALUES
(1, 'azzim', '$2y$10$VnkWCnSQXG2VXyMcj.N53ul.hykA1amV/yn5mqifmPq34EOj1zhIy', NULL, NULL, NULL, '2019-06-17 21:24:08'),
(2, 'newname', '$2y$10$XLSPLeiYghfls4sE6YyNM.5yKBdqbd5mGF5obiMKrtzK8uc0H91Mu', NULL, NULL, NULL, '2019-06-19 00:30:40'),
(3, 'hahah', '$2y$10$aAlQEmldM74ov3koq6FPuurXp/V7RjAke/xyvmZGuYfpBtbHQuDee', NULL, NULL, NULL, '2019-06-19 00:33:05'),
(4, 'kong', '$2y$10$Uda.NqpODa114wD8qfm7nuDyqhO2zqLHrfvVwc8R0PJLHRLlelz46', NULL, NULL, NULL, '2019-06-19 00:34:26'),
(5, 'virtue', '$2y$10$P5l/qLicryzmKH3un0KyPeRL92a.FTvP2pxJ0HWVVnf1CxIo7rQEG', 'my full name here', 'email@gmail.com', 123445689, '2019-06-19 00:40:35'),
(6, 'donkeyKong', '$2y$10$ISgOtrrE.exRz4d6uaNTuOgYJHSrq1L7VDge4k8lHVovWNv5ZE6Qi', 'asdasd', 'asdhasd@gmail.com', 122323, '2019-06-26 15:11:21'),
(7, 'asdasdasd', '$2y$10$CQNSNMeeb4Ksy7pv9qStmOyJZ1cQxOsETmzk8qq6IGPtZ0DXczUiC', 'Muhammad Azzim Nor Fazilan', 'mmd.azzim@gmail.com', 434343434, '2019-06-26 16:12:18'),
(8, 'ererere', '$2y$10$yIKYAzoMgh1uR7dWPpX99OU5zgaFD1rJC0H8vAfqL6zmMY8zCVvY6', 'Muhammad Azzim Nor Fazilan', 'mmd.azzim@gmail.com', 454534343, '2019-06-26 16:36:59'),
(9, 'hellothere', '$2y$10$DoBpQugCdVV69dFO9I9aq.TDAb.E/NAiWNk8nQz5D.EYj2.r1yiRu', 'hellothere general kenobi', 'genaral@kenobi.com', 123123123, '2019-06-27 03:49:51'),
(10, 'huehueheuhe', '$2y$10$iPtVUSoFeqBCG2JABAqkSOFSjTRQK.BH0OnqN7ojxFAszTFL0AhdC', 'hellothere general kenobi', 'genaral@kenobi.com', 323232323, '2019-06-27 03:54:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
