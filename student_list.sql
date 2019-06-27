-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 06:51 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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

CREATE TABLE `student_list` (
  `id` int(6) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `biography` text DEFAULT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `sponsor_duration` int(2) DEFAULT NULL,
  `sponsor_requirement` int(6) DEFAULT NULL,
  `sponsor_status` enum('Waiting','Donated') DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `first_name`, `last_name`, `age`, `gender`, `school_name`, `university_name`, `biography`, `img_name`, `sponsor_duration`, `sponsor_requirement`, `sponsor_status`, `created_at`) VALUES
(1, 'test', 'test2', 21, 'Male', 'school name', 'uni name', 'This student requires some amount of sponsorship in order to complete the semester', 'img1.jpg', 0, 10000, NULL, '2019-06-27 02:47:44'),
(2, 'Shanthi a/l', 'Suriaprakash Malayalam', 18, 'Female', 'SMK Sungai Lembing', 'Universiti Tunku Abdul Rahman', '-', 'img2.jpg', 12, 22500, 'Waiting', '2019-06-28 00:00:10'),
(3, 'Mohamed Hj Nik Wazzirul Hamjah bin', 'Tarudin', 20, 'Male', 'SMK Ketereh', 'Cosmopoint International College Of Technology', '-', 'img3.jpg', 36, 24180, 'Waiting', '2019-06-28 00:08:45'),
(4, 'Che Nur\'irfaan Suami', 'bin Nik Shazwan Suhaimi', 19, 'Male', 'SMK Lunas', 'Universiti Teknologi MARA System', '-', 'img4.jpg', 24, 14840, 'Donated', '2019-06-28 00:15:24'),
(5, 'Muhamad Wan Lukman Samsuri', 'bin Jumat', 20, 'Male', 'SMK Dengkil', 'Nilai University', '-', 'img5.jpg', 12, 15000, 'Donated', '2019-06-28 00:21:49'),
(6, 'Kam Bae', 'Jiang', 17, 'Female', 'Sekolah Menengah Keat Hwa', 'University Teknologi Mara', '-', 'img6.jpg', 24, 20000, 'Donated', '2019-06-28 00:32:56'),
(7, 'Koay Jiong', 'Zhang', 25, 'Male', 'Sekolah Jenis Kebangsaan (C) Yik Hwa', 'Kolej UNITI', '-', 'img7.jpg', 12, 25000, 'Waiting', '2019-06-28 00:39:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
