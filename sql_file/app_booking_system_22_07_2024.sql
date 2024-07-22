-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2024 at 09:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoitments`
--

CREATE TABLE `appoitments` (
  `appoitment_id` int(11) NOT NULL,
  `fk_patient_id` int(11) NOT NULL,
  `fk_doctor_id` int(11) NOT NULL,
  `fk_clinic_id` int(11) DEFAULT NULL,
  `appoitment_time` datetime NOT NULL,
  `appoitment_status` enum('Scheduled','completed','Cancelled','Accepted') NOT NULL DEFAULT 'Scheduled',
  `message` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoitments`
--

INSERT INTO `appoitments` (`appoitment_id`, `fk_patient_id`, `fk_doctor_id`, `fk_clinic_id`, `appoitment_time`, `appoitment_status`, `message`, `created_at`, `updated_at`) VALUES
(5, 9, 7, NULL, '2024-07-22 20:37:00', 'Cancelled', 'gfgf', '2024-07-21 15:07:51', '2024-07-21 15:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `clinic_id` int(11) NOT NULL,
  `fk_doctor_id` int(11) DEFAULT NULL,
  `clinic_name` varchar(200) NOT NULL,
  `clinic_phone` varchar(13) NOT NULL,
  `clinic_address` varchar(200) NOT NULL,
  `clinic_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`clinic_id`, `fk_doctor_id`, `clinic_name`, `clinic_phone`, `clinic_address`, `clinic_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Vision Care', '9113061708', 'Belgaum', 1, '2024-07-21 10:25:17', '2024-07-21 10:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `mr_id` int(11) NOT NULL,
  `fk_appoitment_id` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `mr_status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescription_id` int(11) NOT NULL,
  `fk_appoitment_id` int(11) NOT NULL,
  `prescription_text` varchar(300) NOT NULL,
  `prescription_status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `pass_change_status` tinyint(1) NOT NULL DEFAULT 0,
  `user_type` enum('Doctor','Patient','Admin','') NOT NULL,
  `user_name` varchar(300) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `pass_change_status`, `user_type`, `user_name`, `phone`, `address`, `photo`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '12345', 0, 'Admin', NULL, NULL, NULL, NULL, 1, '2024-07-21 10:11:54', '2024-07-21 10:11:54'),
(7, 'dr_komal@gmail.com', '12345', 0, 'Doctor', 'Komal Budruk', '8073383574', 'bgm2', NULL, 1, '2024-07-21 11:57:59', '2024-07-21 11:57:59'),
(9, 'om@gmail.com', 'Guest@123', 0, 'Patient', 'omlkar', '9898989898', NULL, NULL, 1, '2024-07-21 15:07:51', '2024-07-21 15:07:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoitments`
--
ALTER TABLE `appoitments`
  ADD PRIMARY KEY (`appoitment_id`),
  ADD KEY `fk_clinic_id` (`fk_clinic_id`),
  ADD KEY `fk_patient_id` (`fk_patient_id`),
  ADD KEY `fk_doctor_id` (`fk_doctor_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinic_id`),
  ADD KEY `fk_doctor_id` (`fk_doctor_id`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`mr_id`),
  ADD KEY `fk_appoitment_id` (`fk_appoitment_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoitments`
--
ALTER TABLE `appoitments`
  MODIFY `appoitment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `mr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoitments`
--
ALTER TABLE `appoitments`
  ADD CONSTRAINT `appoitments_ibfk_1` FOREIGN KEY (`fk_clinic_id`) REFERENCES `clinic` (`clinic_id`),
  ADD CONSTRAINT `appoitments_ibfk_2` FOREIGN KEY (`fk_patient_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `appoitments_ibfk_3` FOREIGN KEY (`fk_doctor_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `clinic`
--
ALTER TABLE `clinic`
  ADD CONSTRAINT `clinic_ibfk_1` FOREIGN KEY (`fk_doctor_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD CONSTRAINT `medical_records_ibfk_1` FOREIGN KEY (`fk_appoitment_id`) REFERENCES `appoitments` (`appoitment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
