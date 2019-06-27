-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2019 at 05:30 PM
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
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `amount`, `date`) VALUES
(1, '', 3434, '2019-06-28 00:01:15'),
(2, 'Anonymous', 5655656, '2019-06-28 00:06:43'),
(3, 'Anonymous', 1232, '2019-06-28 00:07:01'),
(4, '', 9999, '2019-06-28 00:07:14'),
(5, 'Sorus', 9999, '2019-06-28 00:08:05'),
(6, 'donkey', 343434, '2019-06-28 00:08:22'),
(7, 'Anonymous', 2323, '2019-06-28 00:08:39'),
(8, 'Anonymous', 15, '2019-06-28 01:18:37'),
(9, 'Anonymous', 100, '2019-06-28 01:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `sposor_application`
--

DROP TABLE IF EXISTS `sposor_application`;
CREATE TABLE IF NOT EXISTS `sposor_application` (
  `idsposor_application` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT 'Pending',
  `student_id` int(11) DEFAULT NULL,
  `date_and_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idsposor_application`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

DROP TABLE IF EXISTS `student_list`;
CREATE TABLE IF NOT EXISTS `student_list` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `biography` text,
  `img_name` varchar(255) DEFAULT NULL,
  `sponsor_duration` int(2) DEFAULT NULL,
  `sponsor_requirement` int(6) DEFAULT NULL,
  `sponsor_status` enum('Waiting','Donated') DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `first_name`, `last_name`, `age`, `gender`, `school_name`, `university_name`, `biography`, `img_name`, `sponsor_duration`, `sponsor_requirement`, `sponsor_status`, `created_at`) VALUES
(1, 'Muhammad Azzim', 'Nor Fazilan', 21, 'Male', 'School Of IT', 'Sunway University', 'This student requires some amount of sponsorship in order to complete the semester', 'img1.jpg', 8, 10000, NULL, '2019-06-27 02:47:44'),
(2, 'Shanthi a/l', 'Suriaprakash Malayalam', 18, 'Female', 'School of Hospitality', 'Universiti Tunku Abdul Rahman', '-', 'img2.jpg', 12, 22500, 'Waiting', '2019-06-28 00:00:10'),
(3, 'Mohamed Hj Nik Wazzirul Hamjah bin', 'Tarudin', 20, 'Male', 'School of Nursing', 'Cosmopoint International College Of Technology', '-', 'img3.jpg', 36, 24180, 'Waiting', '2019-06-28 00:08:45'),
(4, 'Che Nur\'irfaan Suami', 'bin Nik Shazwan Suhaimi', 19, 'Male', 'School of Business', 'Universiti Teknologi MARA System', '-', 'img4.jpg', 24, 14840, 'Donated', '2019-06-28 00:15:24'),
(5, 'Muhamad Wan Lukman Samsuri', 'bin Jumat', 20, 'Male', 'School of IT', 'Nilai University', '-', 'img5.jpg', 12, 15000, 'Donated', '2019-06-28 00:21:49'),
(6, 'Kam Bae', 'Jiang', 17, 'Female', 'School of Arts', 'University Teknologi Mara', '-', 'img6.jpg', 24, 20000, 'Donated', '2019-06-28 00:32:56'),
(7, 'Koay Jiong', 'Zhang', 25, 'Male', 'School of IT', 'Kolej UNITI', '-', 'img7.jpg', 12, 25000, 'Waiting', '2019-06-28 00:39:31');

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
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone_number_UNIQUE` (`phone_number`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`, `phone_number`, `created_at`, `is_admin`) VALUES
(1, 'azzim', '$2y$10$VnkWCnSQXG2VXyMcj.N53ul.hykA1amV/yn5mqifmPq34EOj1zhIy', NULL, NULL, NULL, '2019-06-17 21:24:08', 0),
(2, 'newname', '$2y$10$XLSPLeiYghfls4sE6YyNM.5yKBdqbd5mGF5obiMKrtzK8uc0H91Mu', NULL, NULL, NULL, '2019-06-19 00:30:40', 1),
(3, 'hahah', '$2y$10$aAlQEmldM74ov3koq6FPuurXp/V7RjAke/xyvmZGuYfpBtbHQuDee', NULL, NULL, NULL, '2019-06-19 00:33:05', 0),
(4, 'kong', '$2y$10$Uda.NqpODa114wD8qfm7nuDyqhO2zqLHrfvVwc8R0PJLHRLlelz46', NULL, NULL, NULL, '2019-06-19 00:34:26', 0),
(5, 'virtue', '$2y$10$P5l/qLicryzmKH3un0KyPeRL92a.FTvP2pxJ0HWVVnf1CxIo7rQEG', 'my full name here', 'email@gmail.com', 123445689, '2019-06-19 00:40:35', 0),
(6, 'donkeyKong', '$2y$10$ISgOtrrE.exRz4d6uaNTuOgYJHSrq1L7VDge4k8lHVovWNv5ZE6Qi', 'asdasd', 'asdhasd@gmail.com', 122323, '2019-06-26 15:11:21', 0),
(7, 'asdasdasd', '$2y$10$CQNSNMeeb4Ksy7pv9qStmOyJZ1cQxOsETmzk8qq6IGPtZ0DXczUiC', 'Muhammad Azzim Nor Fazilan', 'mmd.azzim@gmail.com', 434343434, '2019-06-26 16:12:18', 0),
(8, 'ererere', '$2y$10$yIKYAzoMgh1uR7dWPpX99OU5zgaFD1rJC0H8vAfqL6zmMY8zCVvY6', 'Muhammad Azzim Nor Fazilan', 'mmd.azzim@gmail.com', 454534343, '2019-06-26 16:36:59', 0),
(9, 'hellothere', '$2y$10$DoBpQugCdVV69dFO9I9aq.TDAb.E/NAiWNk8nQz5D.EYj2.r1yiRu', 'hellothere general kenobi', 'genaral@kenobi.com', 123123123, '2019-06-27 03:49:51', 0),
(10, 'huehueheuhe', '$2y$10$iPtVUSoFeqBCG2JABAqkSOFSjTRQK.BH0OnqN7ojxFAszTFL0AhdC', 'hellothere general kenobi', 'genaral@kenobi.com', 323232323, '2019-06-27 03:54:42', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
