-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 01:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esafepas_application_old`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_users`
--

CREATE TABLE `md_users` (
  `user_id` varchar(50) NOT NULL,
  `confirm_email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_psw` varchar(100) DEFAULT NULL,
  `user_type` char(1) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) DEFAULT NULL,
  `mob_no` varchar(20) DEFAULT NULL,
  `user_status` char(1) NOT NULL DEFAULT 'A',
  `verify_stat` varchar(5) DEFAULT 'U',
  `email_verification_code` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL,
  `img_path` varchar(150) DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_users`
--

INSERT INTO `md_users` (`user_id`, `confirm_email`, `password`, `confirm_psw`, `user_type`, `user_name`, `user_last_name`, `mob_no`, `user_status`, `verify_stat`, `email_verification_code`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `img_path`) VALUES
('amit.ndk2@gmail.com', 'amit.ndk2@gmail.com', '$2y$10$P.f.HgUWZ9k5kDzXIRUiVeVIXWwAFhqsGdnrYa9481vqNTlyOUPxG', '$2y$10$fvJldI9to6izybNN.LJ5rOxaFgVVMteSW8OjhyFsHkmFingkgkW5K', 'O', 'Amit', 'Mondal', '123456789', 'S', 'A', 'V2ltj', 'amit.ndk2@gmail.com', '2023-02-02 08:02:02', NULL, NULL, '/assets/images/users/profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `md_users`
--
ALTER TABLE `md_users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
