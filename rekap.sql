-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2024 at 03:16 PM
-- Server version: 8.4.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekap`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `assessment_id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `assessment_name` varchar(255) NOT NULL,
  `weight` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`assessment_id`, `course_id`, `assessment_name`, `weight`) VALUES
(77, 45, 'Tugas 1', '11.00'),
(78, 44, 'Ulangan Tengah Semesate', '100.00'),
(81, 40, 'Absensi', '89.00'),
(82, 40, 'Tugas', '11.00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int NOT NULL,
  `code_name` varchar(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `time` time NOT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT '0',
  `course_name` varchar(255) NOT NULL,
  `instructor_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `code_name`, `day`, `time`, `is_online`, `course_name`, `instructor_id`) VALUES
(40, 'PWPB-D301', 'Rabu', '09:22:00', 1, 'Bahasa Indonesia', 2),
(44, '21321', 'Selasa', '02:13:00', 0, 'Pemrograman We', 2),
(45, 'JAW-D301', 'Selasa', '02:12:00', 0, 'Bahasa Jawa', 13),
(46, 'JAV-001', 'Senin', '10:01:00', 0, 'Bahasa Jawir', 13);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `user_id`, `course_id`) VALUES
(14, 3, 40),
(15, 3, 44),
(16, 3, 45),
(24, 11, 40);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int NOT NULL,
  `enrollment_id` int DEFAULT NULL,
  `assessment_id` int DEFAULT NULL,
  `grade` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `enrollment_id`, `assessment_id`, `grade`) VALUES
(49, 14, NULL, '0.00'),
(50, 14, 81, '90.00'),
(51, 24, 81, '89.00'),
(52, 24, 82, '22.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `identity` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','mahasiswa','dosen') NOT NULL DEFAULT 'mahasiswa',
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `identity`, `password`, `role`, `status`, `name`, `email`) VALUES
(1, 'admin', '$2y$10$fEgpIzSYMpW4O0PIDPuUy.ybaW10Y8FN2tbXhZc7L1OhxKTaxB4C6', 'admin', 'active', 'admin', 'admin@gmail.com'),
(2, '0082913829', '$2y$10$fEgpIzSYMpW4O0PIDPuUy.ybaW10Y8FN2tbXhZc7L1OhxKTaxB4C6', 'dosen', 'active', 'Murfid', ''),
(3, '23.01.4968', '$2y$10$fEgpIzSYMpW4O0PIDPuUy.ybaW10Y8FN2tbXhZc7L1OhxKTaxB4C6', 'mahasiswa', 'active', 'Rahmat S', ''),
(8, '23.21.4211', '$2y$10$fEgpIzSYMpW4O0PIDPuUy.ybaW10Y8FN2tbXhZc7L1OhxKTaxB4C6', 'mahasiswa', 'active', 'Rinjani', ''),
(10, '23.21.4432', '$2y$10$fEgpIzSYMpW4O0PIDPuUy.ybaW10Y8FN2tbXhZc7L1OhxKTaxB4C6', 'mahasiswa', 'active', 'Rinjani', ''),
(11, '23.06.3534', '$2y$10$fEgpIzSYMpW4O0PIDPuUy.ybaW10Y8FN2tbXhZc7L1OhxKTaxB4C6', 'mahasiswa', 'active', 'Ringgo', ''),
(13, '0021126631', '$2y$10$RqH8uBfxUmfTScwL7sf09OsWPwf9oplAD3bpUb8c0DkqKBI8xdPOK', 'dosen', 'active', 'Damar Nur Cahyadi', 'damar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`assessment_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `assessment_id` (`assessment_id`),
  ADD KEY `enrollment_id` (`enrollment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`assessment_id`) REFERENCES `assessments` (`assessment_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`enrollment_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
