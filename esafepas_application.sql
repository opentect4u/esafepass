-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 06:37 AM
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
-- Database: `esafepas_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_bank_dtls`
--

CREATE TABLE `md_bank_dtls` (
  `sl_no` int(10) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_adr` text DEFAULT NULL,
  `bank_dist` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_bank_dtls`
--

INSERT INTO `md_bank_dtls` (`sl_no`, `bank_name`, `bank_adr`, `bank_dist`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
(1, 'Malaysia ', '   ', '    ', 'sss', '2019-01-16 12:01:01', 'sss', '2019-01-16 12:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `md_country`
--

CREATE TABLE `md_country` (
  `sl_no` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_country`
--

INSERT INTO `md_country` (`sl_no`, `country_name`) VALUES
(1, 'Afganistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antigua &amp; Barbuda'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'Aruba'),
(12, 'Australia'),
(13, 'Austria'),
(14, 'Azerbaijan'),
(15, 'Bahamas'),
(16, 'Bahrain'),
(17, 'Bangladesh'),
(18, 'Barbados'),
(19, 'Belarus'),
(20, 'Belgium'),
(21, 'Belize'),
(22, 'Benin'),
(23, 'Bermuda'),
(24, 'Bhutan'),
(25, 'Bolivia'),
(26, 'Bonaire'),
(27, 'Bosnia &amp; Herzegovina'),
(28, 'Botswana'),
(29, 'Brazil'),
(30, 'British Indian Ocean Ter'),
(31, 'Brunei'),
(32, 'Bulgaria'),
(33, 'Burkina Faso'),
(34, 'Burundi'),
(35, 'Cambodia'),
(36, 'Cameroon'),
(37, 'Canada'),
(38, 'Canary Islands'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Channel Islands'),
(44, 'Chile'),
(45, 'China'),
(46, 'Christmas Island'),
(47, 'Cocos Island'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Congo'),
(51, 'Cook Islands'),
(52, 'Costa Rica'),
(53, 'Cote DIvoire'),
(54, 'Croatia'),
(55, 'Cuba'),
(56, 'Curaco'),
(57, 'Cyprus'),
(58, 'Czech Republic'),
(59, 'Denmark'),
(60, 'Djibouti'),
(61, 'Dominica'),
(62, 'Dominican Republic'),
(63, 'East Timor'),
(64, 'Ecuador'),
(65, 'Egypt'),
(66, 'El Salvador'),
(67, 'Equatorial Guinea'),
(68, 'Eritrea'),
(69, 'Estonia'),
(70, 'Ethiopia'),
(71, 'Falkland Islands'),
(72, 'Faroe Islands'),
(73, 'Fiji'),
(74, 'Finland'),
(75, 'France'),
(76, 'French Guiana'),
(77, 'French Polynesia'),
(78, 'French Southern Ter'),
(79, 'Gabon'),
(80, 'Gambia'),
(81, 'Georgia'),
(82, 'Germany'),
(83, 'Ghana'),
(84, 'Gibraltar'),
(85, 'Great Britain'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guinea'),
(93, 'Guyana'),
(94, 'Haiti'),
(95, 'Hawaii'),
(96, 'Honduras'),
(97, 'Hong Kong'),
(98, 'Hungary'),
(99, 'Iceland'),
(100, 'India'),
(101, 'Indonesia'),
(102, 'Iran'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Isle of Man'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Japan'),
(110, 'Jordan'),
(111, 'Kazakhstan'),
(112, 'Kenya'),
(113, 'Kiribati'),
(114, 'Korea North'),
(115, 'Korea Sout'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Laos'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macau'),
(128, 'Macedonia'),
(129, 'Madagascar'),
(130, 'Malaysia'),
(131, 'Malawi'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Midway Islands'),
(142, 'Moldova'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Nambia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Netherland Antilles'),
(153, 'Netherlands'),
(154, 'Nevis'),
(155, 'New Caledonia'),
(156, 'New Zealand'),
(157, 'Nicaragua'),
(158, 'Niger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Norfolk Island'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau Island'),
(166, 'Palestine'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Phillipines'),
(172, 'Pitcairn Island'),
(173, 'Poland'),
(174, 'Portugal'),
(175, 'Puerto Rico'),
(176, 'Qatar'),
(177, 'Republic of Montenegro'),
(178, 'Republic of Serbia'),
(179, 'Reunion'),
(180, 'Romania'),
(181, 'Russia'),
(182, 'Rwanda'),
(183, 'St Barthelemy'),
(184, 'St Eustatius'),
(185, 'St Helena'),
(186, 'St Kitts-Nevis'),
(187, 'St Lucia'),
(188, 'St Maarten'),
(189, 'St Pierre &amp; Miquelon'),
(190, 'St Vincent &amp; Grenadines'),
(191, 'Saipan'),
(192, 'Samoa'),
(193, 'Samoa American'),
(194, 'San Marino'),
(195, 'Sao Tome &amp; Principe'),
(196, 'Saudi Arabia'),
(197, 'Senegal'),
(198, 'Serbia'),
(199, 'Seychelles'),
(200, 'Sierra Leone'),
(201, 'Singapore'),
(202, 'Slovakia'),
(203, 'Slovenia'),
(204, 'Solomon Islands'),
(205, 'Somalia'),
(206, 'South Africa'),
(207, 'Spain'),
(208, 'Sri Lanka'),
(209, 'Sudan'),
(210, 'Suriname'),
(211, 'Swaziland'),
(212, 'Sweden'),
(213, 'Switzerland'),
(214, 'Syria'),
(215, 'Tahiti'),
(216, 'Taiwan'),
(217, 'Tajikistan'),
(218, 'Tanzania'),
(219, 'Thailand'),
(220, 'Togo'),
(221, 'Tokelau'),
(222, 'Tonga'),
(223, 'Trinidad &amp; Tobago'),
(224, 'Tunisia'),
(225, 'Turkey'),
(226, 'Turkmenistan'),
(227, 'Turks &amp; Caicos Is'),
(228, 'Tuvalu'),
(229, 'Uganda'),
(230, 'Ukraine'),
(231, 'United Arab Erimates'),
(232, 'United Kingdom'),
(233, 'United States of America'),
(234, 'Uraguay'),
(235, 'Uzbekistan'),
(236, 'Vanuatu'),
(237, 'Vatican City State'),
(238, 'Venezuela'),
(239, 'Vietnam'),
(240, 'Virgin Islands (Brit)'),
(241, 'Virgin Islands (USA)'),
(242, 'Wake Island'),
(243, 'Wallis &amp; Futana Is'),
(244, 'Yemen'),
(245, 'Zaire'),
(246, 'Zambia'),
(247, 'Zimbabwe');

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
('admin@esafepass.com', 'admin@esafepass.com', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', 'A', 'Admin', '', '9831887194', 'A', 'A', NULL, 'sss', '2019-01-16 02:01:01', 'admin@esafepass.com', '2020-01-22 09:01:01', ''),
('amit.ndk2@gmail.com', 'amit.ndk2@gmail.com', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', 'O', 'User', '', '123456789', 'S', 'A', 'V2ltj', 'amit.ndk2@gmail.com', '2023-02-02 08:02:02', NULL, NULL, ''),
('meettan@gmail.com', 'meettan@gmail.com', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', 'O', 'Tanmoy', 'Mondal', '8240385217', 'A', 'A', 'aF8dH', 'meettan@gmail.com', '2019-09-20 11:09:09', 'meettan@gmail.com', '2020-01-21 12:01:01', ''),
('opentech4u@gmail.com', 'opentech4u@gmail.com', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', 'O', 'Pink', 'Shh', '8240574120', 'A', 'A', 'UkEB1', 'opentech4u@gmail.com', '2020-01-22 09:01:01', NULL, NULL, ''),
('super@esafepass.com', 'super@esafepass.com', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', '$2y$10$JZ9FczvtEVkKz5s5BdwT8ee/58CWRbd66xU5Pl1bLwxFJRF6/puju', 'S', 'Super', 'Admin', '', 'A', 'A', NULL, NULL, NULL, 'super@esafepass.com', '2020-01-23 05:01:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `td_application`
--

CREATE TABLE `td_application` (
  `user_id` varchar(50) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL,
  `sl_no` int(10) DEFAULT NULL,
  `appl_no` varchar(50) NOT NULL,
  `appl_dt` date DEFAULT NULL,
  `org_type` varchar(100) DEFAULT NULL,
  `org_name` varchar(200) DEFAULT NULL,
  `org_address` varchar(50) DEFAULT NULL,
  `org_email` varchar(50) DEFAULT NULL,
  `org_web_add` varchar(50) DEFAULT NULL,
  `org_ph_no` varchar(20) DEFAULT NULL,
  `appl_for` varchar(5) DEFAULT NULL,
  `your_f_name` varchar(100) DEFAULT NULL,
  `your_m_name` varchar(100) DEFAULT NULL,
  `your_l_name` varchar(100) DEFAULT NULL,
  `your_position` varchar(100) DEFAULT NULL,
  `your_email` varchar(30) DEFAULT NULL,
  `your_cnct` varchar(30) DEFAULT NULL,
  `sponsor_name` varchar(100) DEFAULT NULL,
  `sponsor_dept` varchar(100) DEFAULT NULL,
  `appl_name` varchar(100) NOT NULL,
  `appl_mid_name` varchar(100) DEFAULT NULL,
  `appl_last_name` varchar(100) DEFAULT NULL,
  `appl_photo_path` text DEFAULT NULL,
  `position_title` varchar(100) DEFAULT NULL,
  `nric_no` varchar(50) DEFAULT NULL,
  `nric_path` text DEFAULT NULL,
  `applcnt_dob` date DEFAULT NULL,
  `applcnt_pasprt_no` varchar(30) DEFAULT NULL,
  `appl_pp_path` text DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `appl_nation` varchar(100) DEFAULT NULL,
  `applcnt_add` varchar(500) DEFAULT NULL,
  `applcnt_email` varchar(50) DEFAULT NULL,
  `job_pos_tit` varchar(100) DEFAULT NULL,
  `apl_cnt_fxd` varchar(50) DEFAULT NULL,
  `apl_cnt_mob` varchar(50) DEFAULT NULL,
  `kin_name` varchar(100) DEFAULT NULL,
  `kin_mid_name` varchar(100) DEFAULT NULL,
  `kin_last_name` varchar(100) DEFAULT NULL,
  `kin_nric_no` varchar(50) DEFAULT NULL,
  `kin_nric_path` text DEFAULT NULL,
  `kin_add` varchar(500) DEFAULT NULL,
  `kin_dob` date DEFAULT NULL,
  `kin_ph` varchar(30) DEFAULT NULL,
  `kin_mob` varchar(50) DEFAULT NULL,
  `kin_email` varchar(50) DEFAULT NULL,
  `kin_gender` varchar(30) DEFAULT NULL,
  `kin_nation` varchar(100) DEFAULT NULL,
  `kin_psprt_no` varchar(50) DEFAULT NULL,
  `kin_pp_path` text DEFAULT NULL,
  `applcnt_kin_reltion` varchar(50) DEFAULT NULL,
  `med_center` varchar(100) DEFAULT NULL,
  `med_cert_no` varchar(100) DEFAULT NULL,
  `ame_name` varchar(100) DEFAULT NULL,
  `ame_no` varchar(50) DEFAULT NULL,
  `exam_dt` date DEFAULT NULL,
  `blood_grp` varchar(20) DEFAULT NULL,
  `alergies` varchar(10) DEFAULT NULL,
  `alergy_dtls` varchar(100) DEFAULT NULL,
  `huit_exp_dt` date DEFAULT NULL,
  `huit_cert_path` text DEFAULT NULL,
  `med_exp_dt` date DEFAULT NULL,
  `med_cert_path` text DEFAULT NULL,
  `inst_name` varchar(100) DEFAULT NULL,
  `inst_adr` text DEFAULT NULL,
  `course_title` varchar(100) DEFAULT NULL,
  `tr_cert_no` varchar(50) DEFAULT NULL,
  `attend_dt_from` date DEFAULT NULL,
  `attend_dt_to` date DEFAULT NULL,
  `h2s_inst_name` varchar(100) DEFAULT NULL,
  `h2s_inst_adr` text DEFAULT NULL,
  `h2s_course` varchar(100) DEFAULT NULL,
  `h2s_cert_no` varchar(50) DEFAULT NULL,
  `h2s_frm_dt` date DEFAULT NULL,
  `h2s_to_dt` date DEFAULT NULL,
  `h2s_exp_dt` date DEFAULT NULL,
  `h2s_cert_path` text DEFAULT NULL,
  `h2s_trn_flg` varchar(5) DEFAULT NULL,
  `h2s_vrf_path` text DEFAULT NULL,
  `oth_exp_dt` date DEFAULT NULL,
  `trn_vrf_flg` varchar(5) DEFAULT NULL,
  `trn_vrf_cert_path` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `admin_remarks` text DEFAULT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'U',
  `declaration` enum('Y','N') NOT NULL,
  `archive` varchar(5) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_application_oth`
--

CREATE TABLE `td_application_oth` (
  `appl_no` varchar(50) NOT NULL,
  `oth_item1` varchar(50) DEFAULT NULL,
  `oth_item1_path` varchar(150) DEFAULT NULL,
  `oth_item2` varchar(50) DEFAULT NULL,
  `oth_item2_path` varchar(150) DEFAULT NULL,
  `oth_item3` varchar(50) DEFAULT NULL,
  `oth_item3_path` varchar(150) DEFAULT NULL,
  `oth_item4` varchar(50) DEFAULT NULL,
  `oth_item4_path` varchar(150) DEFAULT NULL,
  `oth_item5` varchar(50) DEFAULT NULL,
  `oth_item5_path` varchar(150) DEFAULT NULL,
  `oth_item6` varchar(50) DEFAULT NULL,
  `oth_item6_path` varchar(150) DEFAULT NULL,
  `oth_item7` varchar(50) DEFAULT NULL,
  `oth_item7_path` varchar(150) DEFAULT NULL,
  `oth_item8` varchar(50) DEFAULT NULL,
  `oth_item8_path` varchar(150) DEFAULT NULL,
  `remarks` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_application_training`
--

CREATE TABLE `td_application_training` (
  `appl_no` varchar(50) NOT NULL,
  `inst_name1` varchar(150) DEFAULT NULL,
  `adr1` tinytext DEFAULT NULL,
  `course1` varchar(100) DEFAULT NULL,
  `cert_no1` varchar(100) DEFAULT NULL,
  `from_dt1` date DEFAULT NULL,
  `to_dt1` date DEFAULT NULL,
  `validity1` date DEFAULT NULL,
  `certificate1_path` varchar(150) DEFAULT NULL,
  `inst_name2` varchar(150) DEFAULT NULL,
  `adr2` tinytext DEFAULT NULL,
  `course2` varchar(100) DEFAULT NULL,
  `cert_no2` varchar(100) DEFAULT NULL,
  `from_dt2` date DEFAULT NULL,
  `to_dt2` date DEFAULT NULL,
  `validity2` date DEFAULT NULL,
  `certificate2_path` varchar(150) DEFAULT NULL,
  `inst_name3` varchar(150) DEFAULT NULL,
  `adr3` tinytext DEFAULT NULL,
  `course3` varchar(100) DEFAULT NULL,
  `cert_no3` varchar(100) DEFAULT NULL,
  `from_dt3` date DEFAULT NULL,
  `to_dt3` date DEFAULT NULL,
  `validity3` date DEFAULT NULL,
  `certificate3_path` varchar(150) DEFAULT NULL,
  `inst_name4` varchar(150) DEFAULT NULL,
  `adr4` tinytext DEFAULT NULL,
  `course4` varchar(100) DEFAULT NULL,
  `cert_no4` varchar(100) DEFAULT NULL,
  `from_dt4` date DEFAULT NULL,
  `to_dt4` date DEFAULT NULL,
  `validity4` date DEFAULT NULL,
  `certificate4_path` varchar(100) DEFAULT NULL,
  `inst_name5` varchar(150) DEFAULT NULL,
  `adr5` tinytext DEFAULT NULL,
  `course5` varchar(100) DEFAULT NULL,
  `cert_no5` varchar(100) DEFAULT NULL,
  `from_dt5` date DEFAULT NULL,
  `to_dt5` date DEFAULT NULL,
  `validity5` date DEFAULT NULL,
  `certificate5_path` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_csp_account`
--

CREATE TABLE `td_csp_account` (
  `pacs_id` int(10) NOT NULL,
  `acc_no` varchar(100) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `trans_dt` date NOT NULL,
  `trans_type` varchar(50) DEFAULT NULL,
  `utr_no` varchar(200) NOT NULL,
  `sender_acc_no` varchar(200) DEFAULT NULL,
  `sender_ifsc_code` varchar(200) DEFAULT NULL,
  `sender_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_inward`
--

CREATE TABLE `td_inward` (
  `sl_no` int(10) NOT NULL,
  `trans_dt` date NOT NULL,
  `file_name` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_inward`
--

INSERT INTO `td_inward` (`sl_no`, `trans_dt`, `file_name`, `created_at`) VALUES
(2, '2019-01-11', 'NEFT201901033.TXT', '2019-01-11 04:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `td_outward_response`
--

CREATE TABLE `td_outward_response` (
  `sl_no` int(10) NOT NULL,
  `trans_dt` date NOT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `response_file` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_outward_response`
--

INSERT INTO `td_outward_response` (`sl_no`, `trans_dt`, `file_name`, `response_file`, `created_at`) VALUES
(1, '2019-01-11', 'OUTWARD_131060056033_17122018_7.txt', 'doc1.txt', '2019-01-11 01:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `tt_csp_account`
--

CREATE TABLE `tt_csp_account` (
  `pacs_id` varchar(20) DEFAULT NULL,
  `acc_no` varchar(50) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `trans_dt` varchar(50) DEFAULT NULL,
  `trans_type` varchar(100) DEFAULT NULL,
  `utr_no` varchar(100) DEFAULT NULL,
  `sender_acc_no` varchar(200) DEFAULT NULL,
  `sender_ifsc_code` varchar(200) DEFAULT NULL,
  `sender_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `md_bank_dtls`
--
ALTER TABLE `md_bank_dtls`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `md_country`
--
ALTER TABLE `md_country`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `md_users`
--
ALTER TABLE `md_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `td_application`
--
ALTER TABLE `td_application`
  ADD PRIMARY KEY (`appl_no`);

--
-- Indexes for table `td_application_oth`
--
ALTER TABLE `td_application_oth`
  ADD PRIMARY KEY (`appl_no`) USING BTREE;

--
-- Indexes for table `td_application_training`
--
ALTER TABLE `td_application_training`
  ADD PRIMARY KEY (`appl_no`);

--
-- Indexes for table `td_inward`
--
ALTER TABLE `td_inward`
  ADD PRIMARY KEY (`sl_no`,`trans_dt`);

--
-- Indexes for table `td_outward_response`
--
ALTER TABLE `td_outward_response`
  ADD PRIMARY KEY (`sl_no`,`trans_dt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `md_bank_dtls`
--
ALTER TABLE `md_bank_dtls`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_country`
--
ALTER TABLE `md_country`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
