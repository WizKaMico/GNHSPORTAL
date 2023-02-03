-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 02:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gnvhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `employee_no` int(50) NOT NULL,
  `department` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `initial` varchar(10) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `employee_no`, `department`, `email`, `fname`, `lname`, `password`, `initial`, `code`, `status`) VALUES
(2, 101213, 'INFORMATION TECHNOLOGY', 'tricore012@gmail.com', 'Gerald Mico Salavador', 'Facistol', '21232f297a57a5a743894a0e4a801fc3', 'S', 93838, 'VALID'),
(3, 101215, 'INFORMATION TECHNOLOGY', 'hellodevcore@gmail.com', 'Gerald Mico', 'Facistol', 'ad93ee3499b7b6534228b5896a246281', 'S', 92216, 'INVALID');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_subject`
--

CREATE TABLE `assigned_subject` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_security`
--

CREATE TABLE `email_security` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date_attemp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_security`
--

INSERT INTO `email_security` (`id`, `user_id`, `code`, `status`, `date_attemp`) VALUES
(1, 2, 677713, 'USED', '2022-09-28'),
(2, 2, 961995, 'USED', '2022-09-28'),
(3, 2, 774749, 'USED', '2022-09-28'),
(4, 4, 920450, 'UNUSED', '2022-09-28'),
(5, 4, 894927, 'UNUSED', '2022-09-28'),
(6, 4, 683888, 'USED', '2022-09-28'),
(7, 4, 893412, 'USED', '2022-09-28'),
(8, 2, 867553, 'USED', '2022-09-28'),
(9, 1, 852243, 'USED', '2022-09-28'),
(10, 2, 808339, 'USED', '2022-09-28'),
(11, 1, 684376, 'USED', '2022-09-28'),
(12, 4, 673990, 'USED', '2022-09-28'),
(13, 4, 908172, 'USED', '2022-09-28'),
(14, 2, 918111, 'USED', '2022-09-28'),
(15, 4, 978129, 'USED', '2022-09-28'),
(16, 2, 840586, 'USED', '2022-09-28'),
(17, 4, 741739, 'USED', '2022-10-01'),
(18, 2, 905171, 'USED', '2022-10-02'),
(19, 4, 770954, 'USED', '2022-10-02'),
(20, 4, 941609, 'USED', '2022-10-02'),
(21, 2, 948425, 'USED', '2022-10-03'),
(22, 4, 951771, 'USED', '2022-10-03'),
(23, 2, 893676, 'USED', '2022-10-03'),
(24, 2, 758920, 'USED', '2022-10-06'),
(25, 4, 949127, 'USED', '2022-10-06'),
(26, 2, 973958, 'USED', '2022-10-06'),
(27, 4, 756621, 'USED', '2022-10-06'),
(28, 2, 895863, 'USED', '2022-10-06'),
(29, 4, 723937, 'USED', '2022-10-06'),
(30, 2, 851979, 'USED', '2022-10-06'),
(31, 4, 695535, 'USED', '2022-10-19'),
(32, 2, 980366, 'USED', '2022-10-19'),
(33, 2, 944040, 'VALID', '2022-10-19'),
(34, 2, 691080, 'USED', '2022-10-19'),
(35, 2, 696756, 'USED', '2022-10-19'),
(36, 2, 761138, 'USED', '2022-10-21'),
(37, 2, 906026, 'USED', '2022-10-21'),
(38, 2, 886576, 'USED', '2022-10-23'),
(39, 2, 790659, 'USED', '2022-10-23'),
(40, 2, 880299, 'UNUSED', '2022-10-24'),
(41, 2, 745370, 'USED', '2022-10-24'),
(42, 2, 974721, 'USED', '2022-10-24'),
(43, 2, 997182, 'UNUSED', '2022-10-24'),
(44, 2, 829365, 'USED', '2022-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `code` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`, `subject_id`, `code`, `date`) VALUES
(1, 'admin', 'files/admin.sql', 1, 7663, '2022-09-28'),
(2, 'Capture', 'files/Capture.PNG', 3, 7015, '2022-09-28'),
(3, 'Capture', 'files/Capture.PNG', 3, 8027, '2022-09-28'),
(4, '7', 'files/7.svg', 3, 7491, '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `year`) VALUES
(1, 'GRADE 1'),
(2, 'GRADE 2'),
(3, 'GRADE 3'),
(4, 'GRADE 4'),
(5, 'GRADE 5'),
(6, 'GRADE 6'),
(7, 'KINDER'),
(9, 'GRADE 8'),
(10, 'GRADE 9 ');

-- --------------------------------------------------------

--
-- Table structure for table `module_details`
--

CREATE TABLE `module_details` (
  `id` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `module_name` varchar(250) NOT NULL,
  `week_no` int(50) NOT NULL,
  `quarter` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_details`
--

INSERT INTO `module_details` (`id`, `code`, `module_name`, `week_no`, `quarter`, `subject_id`, `date`) VALUES
(1, 9963, 'THIS IS MODULE', 1, 1, 1, '2022-10-23'),
(2, 8919, 'COMPUTER 1 ', 1, 1, 5, '2022-10-23'),
(3, 9988, 'THIS IS MODULE', 1, 1, 6, '2022-10-23'),
(4, 7692, 'THIS IS MODULE', 1, 1, 3, '2022-10-23'),
(5, 7081, 'THIS IS MODULE', 1, 1, 5, '2022-10-24'),
(6, 8121, 'COMPUTER 1 ', 1, 1, 1, '2022-10-24'),
(7, 8977, 'THIS IS A TEST', 1, 1, 7, '2022-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(250) NOT NULL,
  `year` int(10) NOT NULL,
  `code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `year`, `code`) VALUES
(1, 'Makabayan', 1, 0),
(2, 'Makagago', 2, 0),
(3, 'Maginhawa', 3, 0),
(4, 'Makapro', 4, 0),
(5, 'Makamundo', 5, 0),
(6, 'Makautos', 6, 0),
(7, 'Makabata', 7, 0),
(8, 'Mapagpangap', 1, 0),
(9, 'MAPAGPANGAP (REV)', 1, 0),
(10, 'KANBAN', 1, 9726),
(11, 'ADRAKE', 1, 7094),
(12, 'curiosity', 9, 9333),
(13, 'kanban 1', 10, 7346);

-- --------------------------------------------------------

--
-- Table structure for table `security_check`
--

CREATE TABLE `security_check` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_login` date NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `user_id` int(11) NOT NULL,
  `employee_no` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `initial` varchar(10) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user_id`, `employee_no`, `year`, `email`, `fname`, `lname`, `password`, `initial`, `code`, `status`) VALUES
(1, 7041995, 9726, 'tricore012@gmail.com', 'Gerald Mico', 'Facistol', '312bc256b7c1a7d77753db66a518664a', 'S', 83732, 'VALID'),
(2, 7041996, 9726, 'tricore012@gmail.com', 'Gerald Mico', 'Facistol', '312bc256b7c1a7d77753db66a518664a', 'S', 71325, 'ARCHIVE'),
(3, 7041997, 9726, 'HEROKU@GMAIL.COM', 'heroku', 'devcore', '7176135380091b2edad1beb206d135e2', 'S', 73367, 'INVALID'),
(4, 7041998, 9726, 'mico101213@gmail.com', 'heroku', 'devcore', '7b41e2a51389d03e291eb7c249a1007f', 'S', 74149, 'INVALID'),
(5, 101215995, 7094, 'tric@gmail.com', 'Student', 'Facistol', '31eb528e2ac28d68eeb9b813e89edf98', 'S', 99023, 'INVALID');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`id`, `user_id`, `subject_id`, `email`, `status`) VALUES
(1, 1, 7692, 'tricore012@gmail.com', 'RETURN'),
(2, 1, 8919, 'tricore012@gmail.com', 'RETURN'),
(3, 1, 8977, 'tricore012@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `subject_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `year`, `subject_name`) VALUES
(1, 7040, 1, 'INTRO TO COMPUTER PROGRAMMING'),
(2, 9542, 1, 'COMPUTER PROGRAMMING '),
(3, 8609, 1, 'COMPUTER PROGRAMMING 1'),
(4, 8661, 2, 'HALIMAW CODE'),
(5, 7233, 1, 'INTRO TO COMPUTER PROGRAMMING 2'),
(6, 8303, 1, 'MATH PROGRAMMING 1'),
(7, 7004, 1, 'TESTING NI MICO');

-- --------------------------------------------------------

--
-- Table structure for table `subject_status`
--

CREATE TABLE `subject_status` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `user_id` int(11) NOT NULL,
  `employee_no` int(50) NOT NULL,
  `department` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `initial` varchar(10) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_id`, `employee_no`, `department`, `email`, `fname`, `lname`, `password`, `initial`, `code`, `status`) VALUES
(4, 101214, 0, 'tricore012@gmail.com', 'Gerald Mico', 'Facistol', '312bc256b7c1a7d77753db66a518664a', 'S', 67047, 'VALID'),
(6, 101216, 7094, 'hellodevcore@gmail.com', 'Abegail ', 'Sevilla', 'ad93ee3499b7b6534228b5896a246281', 'S', 68218, 'INVALID'),
(7, 101217, 9333, 'mico101213@gmail.com', 'MICO', 'MICO', '7b41e2a51389d03e291eb7c249a1007f', 'M', 88023, 'INVALID'),
(8, 999287, 7346, 'tricore013@gmail.com', 'Gerald Mico Facistol', 'Ty', '153ab7dd64017efaae82560c5c99e5ce', 'S', 84927, 'INVALID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `employee_no` (`employee_no`);

--
-- Indexes for table `assigned_subject`
--
ALTER TABLE `assigned_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_security`
--
ALTER TABLE `email_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_details`
--
ALTER TABLE `module_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_check`
--
ALTER TABLE `security_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_status`
--
ALTER TABLE `subject_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assigned_subject`
--
ALTER TABLE `assigned_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_security`
--
ALTER TABLE `email_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `module_details`
--
ALTER TABLE `module_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `security_check`
--
ALTER TABLE `security_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject_status`
--
ALTER TABLE `subject_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
