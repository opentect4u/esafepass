-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2020 at 05:06 PM
-- Server version: 5.7.32-cll-lve
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
-- Database: `esafepas_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_bank_dtls`
--

CREATE TABLE `md_bank_dtls` (
  `sl_no` int(10) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_adr` text,
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
('admin@esafepass.com', 'admin@esafepass.com', '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', '$2y$10$U1try.bpUgOkwi9NkZkx1un', 'A', 'Tanmoy', 'Mondal', '9831887194', 'A', 'A', NULL, 'sss', '2019-01-16 02:01:01', 'admin@esafepass.com', '2020-01-22 09:01:01', 'assets/images/users/happy-new-year.jpg'),
('ashwin@plc-group.com', 'ashwin@plc-group.com', '$2y$10$kxTwm.apTf.UTgBriimMe.0HCxdqUBAeBolwULRQQf0cEjG/N6RI6', '$2y$10$U1try.bpUgOkwi9NkZkx1un', 'O', 'Ashwin', 'Fernandes', '0123469750', 'A', 'A', 'Bbqed', 'ashwin@plc-group.com', '2019-09-23 08:09:09', 'ashwin@plc-group.com', '2020-02-09 09:02:02', 'assets/images/users/profile.jpg'),
('meettan@gmail.com', 'meettan@gmail.com', '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', '$2y$10$4PKX.uzxLoH5xXUmL3660eGPRHMXeX7J/Vj0ACReivTyUBZSf48ou', 'O', 'Tanmoy', 'Mondal', '8240385217', 'A', 'A', 'aF8dH', 'meettan@gmail.com', '2019-09-20 11:09:09', 'meettan@gmail.com', '2020-01-21 12:01:01', 'assets/images/users/happy-new-year.jpg'),
('opentech4u@gmail.com', 'opentech4u@gmail.com', '$2y$10$595HPbLA30EzRDlLquAiGuG6hbAx8V7CUHQgnmgf1sWGDlf8Iqz2u', '$2y$10$YxZOPTTaYIHyTe6AWucq4OhkAU8Rtl9T75M97hEKd4B.SFuMb3fZa', 'O', 'Pink', 'Shh', '8240574120', 'A', 'A', 'UkEB1', 'opentech4u@gmail.com', '2020-01-22 09:01:01', NULL, NULL, '/assets/images/users/profile.png'),
('plcgroup.ashwin@gmail.com', 'plcgroup.ashwin@gmail.com', '$2y$10$yKmR0DV.x3S.6jFlENGNZuuyRTtGwiDtvFpMhFZdtP9it2/q0Kgri', '$2y$10$GnEwBqZdChkujkPJHo0CWew', 'O', 'Ashwin', 'Fernandes', '123469750', 'A', 'A', 'fiZRI', 'plcgroup.ashwin@gmail.com', '2019-09-29 03:09:09', NULL, NULL, '/assets/images/users/profile.png'),
('raja.saha@synergicsoftek.com', 'raja.saha@synergicsoftek.com', '$2y$10$Z9hwGAgIJ4G3EimMLuWX5eI0s4yvMkDsQ0S/uazylefGZ25PV1.bm', '$2y$10$9DPChfDkjTTfssGsVhwcjOZLSHMdxYJ5O/Q4PH3hjyAEhD2JsaG5K', 'O', 'Raja', 'Saha', '9902512806', 'A', 'A', 'DgBmR', 'raja.saha@synergicsoftek.com', '2019-10-11 06:10:10', NULL, NULL, '/assets/images/users/profile.png'),
('rajasaha.ocp+12@gmail.com', 'rajasaha.ocp+12@gmail.com', '$2y$10$GWaNDBiyqXK6GhmkyCUJyuTQBvHRCNLaW75j3G7OrhygkBbPPmEkK', '$2y$10$YacdFdn3p4vvyIdwmKJEi.fCkA7ESyLRbqtIpxG2HmF62CeExUBmS', 'O', 'test', 'test1', '+919007883473', 'A', 'A', 'npHjk', 'rajasaha.ocp+12@gmail.com', '2020-10-28 09:10:10', NULL, NULL, '/assets/images/users/profile.png'),
('rajasaha.ocp@gmail.com', 'rajasaha.ocp@gmail.com', '$2y$10$SjVpQHjS3SfY3CSgIn0eiOX1XZmrqY9jXZF4X2TuLlY8FMCqNx5uO', '$2y$10$tQpdcpLwBV94biKertzNAOlWR5pxsRllMERBA9/Pxl.9JuciJCCe.', 'O', 'test', 'tes1', '+919007883473', 'A', 'A', 'uS8oU', 'rajasaha.ocp@gmail.com', '2020-10-28 09:10:10', NULL, NULL, '/assets/images/users/profile.png'),
('safepassdemo@gmail.com', 'safepassdemo@gmail.com', '$2y$10$9FQJ.sqzZqLQUDqu5o/DlesqQoeyw25NgbqSj1fX2tW1JIobqGjvy', '$2y$10$WKCe4/TJuMbV5RTzLBRnpeZcn1/cls/5OX39ii0r6xiGbC2cMY.lS', 'O', 'Vestigo', 'Demo', '0123469750', 'A', 'A', '57JdV', 'safepassdemo@gmail.com', '2020-11-04 11:11:11', NULL, NULL, '/assets/images/users/profile.png'),
('sappysukh@gmail.com', 'sappysukh@gmail.com', '$2y$10$gBqTvxujy5Bj1/0pNd3jRuyEi7cOB5tKjPeEAgGAqHmby8.cP7Coy', '$2y$10$.mbXyh2lPre4xqN9NzagCeAfl8FcIPDK/Xlgamtf4v0qsJdbEMm6m', 'O', 'Sanjana ', 'Kaur ', '0162986524', 'A', 'A', '2U5S8', 'sappysukh@gmail.com', '2019-10-23 07:10:10', NULL, NULL, '/assets/images/users/profile.png'),
('sauravmanna@ymail.com', 'sauravmanna@ymail.com', '$2y$10$IQ4/WLmRjzEslXgmoKfh6OSh7MoPcx5TlpnnEJgTPPN4V7AqnCv/O', '$2y$10$q1Ocke5iIfPjT2CJZuRlLeyXpeqzg6LYcmOoFSltdoUwlT42qQYgG', 'O', 'Saurav', 'Manna', '9007811539', 'A', 'A', 'RA73p', 'sauravmanna@ymail.com', '2019-10-11 06:10:10', NULL, NULL, '/assets/images/users/profile.png'),
('sukhpreet@myuniconnect.com', 'sukhpreet@myuniconnect.com', '$2y$10$yNf8ap7UHxRBmsA3I6DJ1.PIFu5GlfoCMB112e9LG0popfSL.ncRy', '$2y$10$I9Piu5gy0dlBvDFDus4nROMJ4FoUJVhpQbU9RomgLA.N67.Q7vFRe', 'O', 'Sukhpreet', 'Kaur ', '011-1122334', 'A', 'A', 'AOV7a', 'sukhpreet@myuniconnect.com', '2019-11-28 03:11:11', NULL, NULL, '/assets/images/users/profile.png'),
('sukhpreet_k@hotmail.com', 'sukhpreet_k@hotmail.com', '$2y$10$P.t70hF8DHfNTf.p0nKF5.p0moSFzfK4FE78Zty3m3OVieIivNvTO', '$2y$10$/pkuaVuwuwYVwt7Sz/VAou5md6/7jTUqu44BVK78Bf6XKxJN7lcdi', 'O', 'Sanjana ', 'Kaur ', '0162976525', 'A', 'A', 'aQUws', 'sukhpreet_k@hotmail.com', '2019-11-11 01:11:11', NULL, NULL, '/assets/images/users/profile.png'),
('super@esafepass.com', 'super@esafepass.com', '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', 'S', 'Super', 'Admin', '', 'A', 'A', NULL, NULL, NULL, 'super@esafepass.com', '2020-01-23 05:01:01', 'assets/images/users/PLC GROUP-Final.png'),
('suvrajit@synergicsoftek.com', 'suvrajit@synergicsoftek.com', '$2y$10$s9uL2xHd00.A8RjsZqPTCO5ZdFeij0lLn3qWwnMCggOLYIt6k.gPS', '$2y$10$z1zBbk.KOOljxlqJ9ioHOu7GouVJPXutPE.TUueFhJW3w/Zj0dRv2', 'O', 'Suvrajit', 'Banerjee', '', 'A', 'A', 'qbR5N', 'suvrajit@synergicsoftek.com', '2020-06-01 10:06:06', NULL, NULL, '/assets/images/users/profile.png'),
('testsafepass1@outlook.com', 'testsafepass1@outlook.com', '$2y$10$yAgebxba52FOR2yghAk6YOxhZwO7qqnK8jBhJvGchvpATsco8JJ1G', '$2y$10$nAxgT0/QmuLxFwdL9BjPQelw.x29sLIJGLQsqpYEKniFjj/nnhnn6', 'O', 'A', 'AF', '1111', 'A', 'A', 'wJ0Np', 'testsafepass1@outlook.com', '2019-10-11 06:10:10', 'testsafepass1@outlook.com', '2020-01-23 05:01:01', 'assets/images/users/person-holding-magnifying-glass-712786.jpg');

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
  `appl_photo_path` text,
  `position_title` varchar(100) DEFAULT NULL,
  `nric_no` varchar(50) DEFAULT NULL,
  `nric_path` text,
  `applcnt_dob` date DEFAULT NULL,
  `applcnt_pasprt_no` varchar(30) DEFAULT NULL,
  `appl_pp_path` text,
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
  `kin_nric_path` text,
  `kin_add` varchar(500) DEFAULT NULL,
  `kin_dob` date DEFAULT NULL,
  `kin_ph` varchar(30) DEFAULT NULL,
  `kin_mob` varchar(50) DEFAULT NULL,
  `kin_email` varchar(50) DEFAULT NULL,
  `kin_gender` varchar(30) DEFAULT NULL,
  `kin_nation` varchar(100) DEFAULT NULL,
  `kin_psprt_no` varchar(50) DEFAULT NULL,
  `kin_pp_path` text,
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
  `huit_cert_path` text,
  `med_exp_dt` date DEFAULT NULL,
  `med_cert_path` text,
  `inst_name` varchar(100) DEFAULT NULL,
  `inst_adr` text,
  `course_title` varchar(100) DEFAULT NULL,
  `tr_cert_no` varchar(50) DEFAULT NULL,
  `attend_dt_from` date DEFAULT NULL,
  `attend_dt_to` date DEFAULT NULL,
  `h2s_inst_name` varchar(100) DEFAULT NULL,
  `h2s_inst_adr` text,
  `h2s_course` varchar(100) DEFAULT NULL,
  `h2s_cert_no` varchar(50) DEFAULT NULL,
  `h2s_frm_dt` date DEFAULT NULL,
  `h2s_to_dt` date DEFAULT NULL,
  `h2s_exp_dt` date DEFAULT NULL,
  `h2s_cert_path` text,
  `h2s_trn_flg` varchar(5) DEFAULT NULL,
  `h2s_vrf_path` text,
  `oth_exp_dt` date DEFAULT NULL,
  `trn_vrf_flg` varchar(5) DEFAULT NULL,
  `trn_vrf_cert_path` text,
  `remarks` text,
  `admin_remarks` text,
  `status` varchar(5) NOT NULL DEFAULT 'U',
  `archive` varchar(5) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_application`
--

INSERT INTO `td_application` (`user_id`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `sl_no`, `appl_no`, `appl_dt`, `org_type`, `org_name`, `org_address`, `org_email`, `org_web_add`, `org_ph_no`, `appl_for`, `your_f_name`, `your_m_name`, `your_l_name`, `your_position`, `your_email`, `your_cnct`, `sponsor_name`, `sponsor_dept`, `appl_name`, `appl_mid_name`, `appl_last_name`, `appl_photo_path`, `position_title`, `nric_no`, `nric_path`, `applcnt_dob`, `applcnt_pasprt_no`, `appl_pp_path`, `gender`, `appl_nation`, `applcnt_add`, `applcnt_email`, `job_pos_tit`, `apl_cnt_fxd`, `apl_cnt_mob`, `kin_name`, `kin_mid_name`, `kin_last_name`, `kin_nric_no`, `kin_nric_path`, `kin_add`, `kin_dob`, `kin_ph`, `kin_mob`, `kin_email`, `kin_gender`, `kin_nation`, `kin_psprt_no`, `kin_pp_path`, `applcnt_kin_reltion`, `med_center`, `med_cert_no`, `ame_name`, `ame_no`, `exam_dt`, `blood_grp`, `alergies`, `alergy_dtls`, `huit_exp_dt`, `huit_cert_path`, `med_exp_dt`, `med_cert_path`, `inst_name`, `inst_adr`, `course_title`, `tr_cert_no`, `attend_dt_from`, `attend_dt_to`, `h2s_inst_name`, `h2s_inst_adr`, `h2s_course`, `h2s_cert_no`, `h2s_frm_dt`, `h2s_to_dt`, `h2s_exp_dt`, `h2s_cert_path`, `h2s_trn_flg`, `h2s_vrf_path`, `oth_exp_dt`, `trn_vrf_flg`, `trn_vrf_cert_path`, `remarks`, `admin_remarks`, `status`, `archive`) VALUES
('meettan@gmail.com', 'meettan@gmail.com', '2019-10-03 12:27:22', 'admin@esafepass.com', '2020-01-22 09:31:56', 1, '00001', '2019-10-03', 'P', 'Synergic Softek Solutions Pvt.ltd', '7/18 Acropolis,\r\nRajdanga Main Road, Kolkata - 700', NULL, 'www.synergicsoftek.in 0000', '460067170000', 'S', 'Shubhankar zsxaccc', 'Kumarcwcdcdcdec', 'Bhowmick wcwewevwevewfv', 'Staff ccwdcvwdcve', 'shubhankar123333@gmail.com', '98314475294758', 'Nilkantha Dasfvsfvsfvb', 'Sales & Marketingrgvrwgwrgwrg', 'Arfigrgrgrg', 'Billadfbdfbdfb', 'Mondalbbdfbdfbdfb', 'assets/userDocs/appl_photo/passport_pic.jpg', 'Business Developement Executivegbngngn', 'NRIC-0076/2598/Lkjungngngng', 'assets/userDocs/appl_photo/medical_certificate.jpg', '1980-02-25', 'THYU/00589-pol/mn78nfhnfhnhfn', 'assets/userDocs/appl_photo/medical_certificate.jpg', 'P', 'Honduras', '55D Deshapran Sasmal Road,\r\nKolkata - 700033hnhnhn', 'meettan@gmail.com', 'Programernfhnfhnfn', '25664805r2r414r134', '9885241106441414', 'Sujitgbdbwfqf', 'Kumargwrgwrgwrg', 'Paulwgvwegeg', 'SSS-225/098ik', 'assets/userDocs/appl_photo/medical_certificate.jpg', '82 LN Road,\r\nKolkata - 700028tgegherghergh', '1990-02-21', '25661039', '9885260014', 'xyzasdgrgwr@gmail.com', 'P', 'Honduras', 'PIOK-8&6/DFFGG', 'assets/userDocs/appl_photo/medical_certificate.jpg', 'ABCDEFFGgegergrewgwrg', 'Surakshagrgergrwg', '8594850014596P', 'ASDFGTYUUregergergerg', 'LKIO/856412', '2019-09-05', 'AB+', 'Y', 'xscccedfcefef', '2021-02-02', 'http://localhost/safepass/app/http://localhost/safepass/app/assets/userDocs/trainning_cert', '2022-07-22', 'assets/userDocs/appl_photo/medical_certificate.jpg', 'JDK Trainning Institute', '88/12 FGBNJJ Road', 'Carpentry', '45820002596K', '2019-01-03', '2019-10-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Form Submitted as testing formnhnrfnmrfmnryfmrymjryj', 'dDADADad', 'A', 'Y'),
('testsafepass1@outlook.com', 'testsafepass1@outlook.com', '2019-10-11 06:34:31', 'admin@esafepass.com', '2019-10-21 03:37:29', 2, '00002', '2019-10-11', 'P', 'PLC International Sdn Bhd', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Sec', NULL, '', '012345', 'S', 'Ashwin', 'Ashwin Fernandes', 'Fernandes', 'Staff', 'ashwin@plc-group.com', '+60123469750', 'ABC', 'HSE', 'Ashwin', '', 'Fernandes', 'assets/userDocs/appl_photo/blank.pdf', 'Staff', '', '', '1997-02-14', 'xy123456', 'assets/userDocs/appl_photo/blank.pdf', 'M', 'Bahamas', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', 'ashwin@plc-group.com', 'manager', '1111', '0123469750', 'xyz', '', 'abc', '', '', 'none', '1993-01-01', '11111', '99999', 'abc@123.com', 'M', 'Bahamas', 'abcd1234', 'assets/userDocs/appl_photo/blank.pdf', 'none', 'ABC Clinic', '123456', 'AB12as', '1209019210', '2019-10-09', 'A+', 'N', '', '2020-10-11', 'assets/userDocs/appl_photo/blank.pdf', '2020-02-03', 'assets/userDocs/appl_photo/blank.pdf', 'none', 'none', 'none', '', '2019-10-10', '2019-10-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test', 'ok', 'A', 'Y'),
('testsafepass1@outlook.com', 'testsafepass1@outlook.com', '2019-10-24 03:59:23', 'admin@esafepass.com', '2019-10-24 04:11:24', 5, '00005', '2019-10-24', 'O', 'MyUniconnect', 'Kuala Lumpur Malaysia', NULL, 'www.myuniconnect.com', '41490570', 'S', '', '', '', '', '', '', 'Taram Satiraksa', 'HSE', 'Ashwin ', 'Anson', 'Fernandes', 'assets/userDocs/appl_photo/Photo.png', 'General Manager', '', '', '1980-05-11', 'A1234567', '', 'M', 'India', 'Kuala Lumpur', 'ashwin@myuniconnect.com', 'General Manager', '41490570', '0123469750', 'Donald ', '', 'Duck', '1234567890', '', 'none', '1980-01-01', '12345678', '012345678', 'spouse@hotmail.com', 'M', 'India', '', '', 'spouse', 'XYZ medical Centre', '10987', 'Null and void', '5767483', '2019-10-01', 'A+', 'N', '', '2022-10-02', '', '2021-09-30', '', 'Sequ', 'Kuala Lumpur', 'Bosiet / Huet', '55667788', '2019-10-02', '2019-10-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'none', 'ok', 'A', 'Y'),
('meettan@gmail.com', 'meettan@gmail.com', '2019-11-25 12:45:54', 'admin@esafepass.com', '2019-11-25 16:27:21', 10, '00010', '2019-11-25', 'P', 'Petronas Ltd', '55D DS Road\r\nKolkata - 700033', NULL, 'www.petronas.com', '9852001740', 'O', 'Arati', 'Mondal', 'Naskar', 'Teacher', 'arati@gmail.com', '9884105860', 'Procter & Gamble', 'Sales', 'Avijit', 'Kumar', 'Sharma', 'assets/userDocs/appl_photo/SRK.jpg', '', 'ASDFG/7458952', 'assets/userDocs/appl_photo/IMG-20170211-WA0020.jpg', '2003-10-25', '', '', 'M', 'Malaysia', '82 L.Road,kol - 6 5', 'ssss@dddd.com', 'nff', '25664105', '8542159', 'vsvsv', '', 'wdwdwd', '', '', 'dwdqwdwqdwqdwqd', '2019-11-25', '3334124', '3453453453', 'weefhfh@nvnv.com', 'F', 'Korea Sout', 'dwdwd', 'assets/userDocs/appl_photo/IMG-20170211-WA0017.jpg', 'dwdwqdqwd', 'fesas', '7458120256', 'dwdwdd', 'w3e3e3r3', '2019-11-25', 'B-', 'Y', 'qddwqqfqwf', '2019-11-25', 'assets/userDocs/appl_photo/FB_IMG_1471616876925.jpg', '2019-11-25', 'assets/userDocs/appl_photo/20140822-0005.jpeg', 'efwgwg', 'dwdwdwd', 'grgrwg', 'grgrwg', '2019-11-25', '2019-11-25', 'gbdgdb', 'cv cv vc ', 'dgbdg', 'bggb', '0000-00-00', '0000-00-00', '0000-00-00', '', 'N', '', NULL, 'Y', 'assets/userDocs/appl_photo/FB_IMG_1470536125214.jpg', 'wsdqdqwqw', ' ngngngn', 'A', 'N'),
('ashwin@plc-group.com', 'ashwin@plc-group.com', '2020-02-26 01:04:26', 'admin@esafepass.com', '2020-02-26 01:28:47', 11, '00011', '2020-02-26', 'C', 'PLC International Sdn Bhd', 'D-6-2, Megan Avenue 1\r\nHampshire Park\r\nJalan Mayan', NULL, 'www.plc-group.com', '+60321640570 ', 'S', 'Ashwin', 'Anson', 'Fernandes', '', 'ashwin@plc-group.com', '+60123469750', 'Taram Satiraksa', 'HSE Department', 'Ashwin', 'Anson', 'Fernandes', 'assets/userDocs/appl_photo/Sample Applicant Id.jpg', 'Project Manager', '', '', '1980-05-11', 'ABC123456', 'assets/userDocs/appl_photo/Sample Applicant Passport.jpg', 'M', 'India', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', 'ashwin@plc-group.com', 'General Manager', '+60321640570 ', '0123469750', 'H', '', 'Fernandes', '899898989898', 'assets/userDocs/appl_photo/Sample IC NoK.jpg', 'D-6-2, Megan Avenue 1\r\nHampshire Park\r\nJalan Mayang Sari', '1989-09-09', '0312345678', '0123456789', 'ashwin@plc-group.com', 'M', 'Malaysia', '', '', 'Spouse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ok\r\n', 'A', 'N'),
('ashwin@plc-group.com', 'ashwin@plc-group.com', '2020-10-24 12:52:50', 'ashwin@plc-group.com', '2020-10-24 14:04:09', 12, '00012', '2020-10-24', 'C', 'PLC Group', 'D-6-2, Megan Avenue 1, Jalan Mayang Sari,\r\nKuala L', NULL, 'www.plc-group.com', '0321640570', 'S', '', '', '', '', '', '', 'Taram Satiraksa', 'HSE', 'A', 'Anson', 'Fernandes', 'assets/userDocs/appl_photo/Dummy Picture 1 jpeg.jpeg', 'General Manager', '', '', '1980-05-11', 'J0123456', 'assets/userDocs/appl_photo/Dummy Id 1 jpeg.jpg', 'M', 'India', 'ABC Street, Kuala Lumpur', 'ashwin@plc-group.com', 'General Manager', '0321640570', '0123469750', 'Mrs Ashwin', '', 'Fernandes', '990090909977', 'assets/userDocs/appl_photo/Dummy Id 1 jpeg.jpg', 'ABC Street, Kuala Lumpur', '1990-05-11', '0312345678', '0123469750', 'ashwin@plc-group.com', 'M', 'India', '', '', 'spouse', 'ABC Clinic', '12345678', 'Petronas AME', '112233', '2020-01-01', 'A+', 'N', 'none', '2024-01-03', 'assets/userDocs/appl_photo/medical cert jpeg.jpg', '2021-12-31', 'assets/userDocs/appl_photo/medical cert jpeg.jpg', 'CQ', 'PJ Kuala Lumpur', 'BOSIET', '001122', '2020-01-02', '2020-01-04', 'CQ', 'PJ Kuala Lumpur', 'HS Refresher', '', '2020-01-05', '2020-01-06', '2022-01-05', '', 'Y', 'assets/userDocs/appl_photo/medical cert jpeg.jpg', NULL, 'Y', 'assets/userDocs/appl_photo/medical cert jpeg.jpg', 'none', 'approved', 'A', 'N'),
('rajasaha.ocp@gmail.com', 'rajasaha.ocp@gmail.com', '2020-10-28 09:17:59', 'abc@gmail.com', NULL, 13, '00013', '2020-10-28', 'P', 'test for qr', 'test_sss', NULL, '', '033789966221', 'O', 'Raja ', 'gghhh', 'Saha', 'sjkkkkkkk', 'rajasaha.ocp@gmail.com', '866222144444', 'vvvvvvv', 'jjjjklll', 'test qr code', 'test', 'qr code', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', 'N'),
('ashwin@plc-group.com', 'ashwin@plc-group.com', '2020-11-02 12:44:33', 'admin@esafepass.com', '2020-11-02 12:53:29', 14, '00014', '2020-11-02', 'C', 'PLC International Sdn Bhd', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Sec', NULL, 'www.plc-group.com', '+60321640570 ', 'S', 'Ashwin', '', 'Fernandes', '', 'ashwin@plc-group.com', '+60123469750', 'Taram Satiraksa', 'HSE Department', 'Ashwin', '', 'Fernandes', 'assets/userDocs/appl_photo/dummy picture.jpg', 'Project Manager', '', '', '1980-05-11', 'ABC123456', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', 'M', 'India', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', 'ashwin@plc-group.com', 'General Manager', '0322224444', '+60123469750', 'Ms Ashwin', '', 'Fernandes', '899898989898', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', '1981-05-11', '0312345678', '+60123469750', 'ashwin@plc-group.com', 'F', 'Malaysia', '', '', 'Spouse', 'ABC Clinic', '123456', 'Test AME', '1209019210', '2020-10-02', 'A+', 'N', '', '2023-10-05', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', '2022-10-02', 'assets/userDocs/appl_photo/Dummy medical Report.jpg', 'SEQU', 'Kuala Lumpur', 'BOSIET', '0000', '2020-10-03', '2020-10-05', 'MSTS', 'Kuala Lumpur', 'H2S Refresher Training', '11229900', '2020-10-06', '2020-10-06', '2023-10-06', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', NULL, 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', 'ok', 'approved', 'A', 'N'),
('ashwin@plc-group.com', 'ashwin@plc-group.com', '2020-11-03 03:41:22', 'admin@esafepass.com', '2020-11-03 03:51:43', 15, '00015', '2020-11-03', 'C', 'PLC GROUP', 'D-6-2, Megan Avenue 1, Jalan Mayang Sari\r\nHampshir', NULL, 'www.plc-group.com', '+60321640570 ', 'S', 'Ashwin', '', 'Fernandes', '', '', '+60123469750', 'Taram Satiraksa', 'HSE Department', 'Ashwin', '', 'Fernandes', 'assets/userDocs/appl_photo/dummy picture.jpg', 'Project Manager', '', '', '1980-05-11', 'ABC123456', 'assets/userDocs/appl_photo/Dummy Passport.jpg', 'M', 'India', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', 'ashwin@plc-group.com', 'General Manager', '+60321640570 ', '+60123469750', 'Mrs Ashwin', '', 'Fernandes', '899898989898', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', 'Kuala Lumpur', '1980-04-11', '0312345678', '+60123469750', 'ashwin@plc-group.com', 'F', 'Malaysia', '', '', 'Spouse', 'ABC Clinic', '123456', 'Test AME', '1209019210', '2020-10-01', 'A+', 'N', '', '2023-10-05', 'assets/userDocs/appl_photo/Dummy Passport.jpg', '2022-10-01', 'assets/userDocs/appl_photo/Dummy medical Report.jpg', 'SEQU', 'Kuala Lumpur', 'BOSIET', '0000', '2020-10-04', '2020-10-06', 'MSTS', 'Miri', 'H2S Refresher Training', '11229900', '2020-10-10', '2020-10-10', '2023-10-09', 'assets/userDocs/appl_photo/Dummy Passport.jpg', 'Y', 'assets/userDocs/appl_photo/Dummy Passport.jpg', NULL, 'Y', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', 'All Documents uploaded', 'All OK', 'A', 'N'),
('safepassdemo@gmail.com', 'safepassdemo@gmail.com', '2020-11-05 05:39:00', 'admin@esafepass.com', '2020-11-05 08:12:14', 16, '00016', '2020-11-05', 'V', 'Vestigo Petroleum Sdn Bhd', 'Level 13, Menara Binjai, No. 2 Jalan Binjai, Off J', NULL, '', '03-2776 9999', 'O', 'Nik Nur', 'Izzatul Ikmal', 'Muhd Nor', 'HSE Engineer', 'izzatul.ikmal@vestigopetroleum', '0132662650', 'Taram Satiraksa Wan Abdullah', 'HSE', 'Nik Nur Izzatul Ikmal', 'binti', 'Muhd Nor', 'assets/userDocs/appl_photo/profile.jpg', 'HSE Engineer', '930105145144', 'assets/userDocs/appl_photo/Dummy Id.jpg', '1993-01-05', '', '', 'F', 'Malaysia', '10, lorong jaya 4 bandar tun razak cheras, 56000, kl', '', 'HSE Engineer', '03-27769999', '', 'Nik Azizah', 'binti', 'Nik Yaacob', '550112715278', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', '10, lorong jaya 4 bandar tun razak cheras, 56000, kl', '1955-01-12', '', '', '', 'F', 'Malaysia', '', '', 'mother', 'TTMC', 'c0543', 'Dr Rachel', '032', '2020-01-04', 'O-', 'N', '', '2024-01-07', 'assets/userDocs/appl_photo/Dummy BOSIET Cert.jpg', '2022-01-04', 'assets/userDocs/appl_photo/Dummy medical Report.jpg', 'Sequ', '', 'T-Bosiet', '', '2020-01-06', '2020-01-08', 'MSTS', 'Kuala Lumpur', 'H2S Refresher Training', '11229900', '2018-12-04', '2018-12-04', '2020-12-03', 'assets/userDocs/appl_photo/Dummy H2S.jpg', 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', NULL, 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', 'ok', 'ok', 'A', 'N'),
('safepassdemo@gmail.com', 'safepassdemo@gmail.com', '2020-11-06 06:38:30', 'admin@esafepass.com', '2020-11-06 06:43:34', 17, '00017', '2020-11-06', 'C', 'PLC GROUP', 'D-6-2, Megan Avenue 1, Jalan Mayang Sari\r\nHampshir', NULL, 'www.plc-group.com', '03 1234 5678', 'S', 'Ashwin', '', 'Fernandes', '', '', '+60123469750', 'Taram Satiraksa', 'HSE Department', 'Ashwin', '', 'Fernandes', 'assets/userDocs/appl_photo/profile.jpg', 'Project Manager', '', '', '1980-05-11', 'ABC123456', 'assets/userDocs/appl_photo/Dummy Id.jpg', 'M', 'India', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', 'ashwin@plc-group.com', 'Project Manager', '+60321640570 ', '+60123469750', 'Mrs Ashwin', '', 'Fernandes', '899898989898', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', '1980-05-11', '0312345678', '+60123469750', 'ashwin@plc-group.com', 'F', 'Malaysia', '', '', 'Spouse', 'ABC Clinic', '123456', 'Test AME', '1209019210', '2020-01-02', 'AB+', 'N', '', '2024-01-03', 'assets/userDocs/appl_photo/Dummy BOSIET Cert.jpg', '2022-01-01', 'assets/userDocs/appl_photo/Dummy medical Report.jpg', 'SEQU', 'Kuala Lumpur', 'BOSIET', '0000', '2020-01-03', '2020-01-05', 'MSTS', 'Miri', 'H2S Refresher Training', '11229900', '2020-01-06', '2020-01-06', '2022-01-05', 'assets/userDocs/appl_photo/Dummy H2S.jpg', 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', NULL, 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', 'ok', 'ok', 'A', 'N'),
('safepassdemo@gmail.com', 'safepassdemo@gmail.com', '2020-11-06 07:14:31', 'admin@esafepass.com', '2020-11-06 07:44:10', 18, '00018', '2020-11-06', 'C', 'PLC GROUP', 'D-6-2, Megan Avenue 1, Jalan Mayang Sari\r\nHampshir', NULL, 'www.plc-group.com', '+60321640570 ', 'S', 'Ashwin', '', 'Fernandes', '', '', '+60123469750', 'Taram Satiraksa', 'HSE Department', 'Ashwin', 'Anson', 'Fernandes', 'assets/userDocs/appl_photo/profile.jpg', 'Project Manager', '', '', '1980-05-11', 'ABC123456', 'assets/userDocs/appl_photo/Dummy Id.jpg', 'M', 'India', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', 'ashwin@plc-group.com', 'Project Manager', '+60321640570 ', '+60123469750', 'Mrs Ashwin', '', 'Fernandes', '899898989898', 'assets/userDocs/appl_photo/Dummy NoK Id.jpg', 'PLCGROUP of Companies\r\nNo. 45-1, Jalan 2A/27A, Section 1 Wangsa Maju, 53300 Kuala Lumpur, MALAYSIA.', '1980-05-11', '0312345678', '+60123469750', 'ashwin@plc-group.com', 'F', 'Malaysia', '', '', 'Spouse', 'My Test Medical Centre', '123456', 'Test AME', '1209019210', '2020-01-02', 'AB+', 'Y', 'dummy', '2024-01-03', 'assets/userDocs/appl_photo/Dummy BOSIET Cert.jpg', '2022-01-01', 'assets/userDocs/appl_photo/Dummy medical Report.jpg', 'SEQU', 'KL', 'BOSIET', '0000', '2020-01-03', '2020-01-05', 'MSTS', 'Malaysia', 'H2S Refresher Training', '11229900', '2020-01-08', '2020-01-08', '2023-01-07', 'assets/userDocs/appl_photo/Dummy H2S.jpg', 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', NULL, 'Y', 'assets/userDocs/appl_photo/Dummy Training Cert verification.jpg', 'All docs uploaded', 'application approved', 'A', 'N'),
('meettan@gmail.com', 'meettan@gmail.com', '2020-11-19 12:43:28', NULL, NULL, 19, '00019', '2020-11-19', 'V', 'sss', '45\r\ndwd', NULL, 'jjk.com', '9841475569', 'S', 'Tan', '', 'Mon', '', 'opentech4u@gmail.com', '09850224189', 'hgvgj', 'jhbk', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'U', 'N');

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
  `remarks` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_application_oth`
--

INSERT INTO `td_application_oth` (`appl_no`, `oth_item1`, `oth_item1_path`, `oth_item2`, `oth_item2_path`, `oth_item3`, `oth_item3_path`, `oth_item4`, `oth_item4_path`, `oth_item5`, `oth_item5_path`, `oth_item6`, `oth_item6_path`, `oth_item7`, `oth_item7_path`, `oth_item8`, `oth_item8_path`, `remarks`) VALUES
('2019-2', 'no 1', 'assets/userDocs/oth_photo/16.jpg', 'no 2', 'assets/userDocs/oth_photo/catcat.jpeg', '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `td_application_training`
--

CREATE TABLE `td_application_training` (
  `appl_no` varchar(50) NOT NULL,
  `inst_name1` varchar(150) DEFAULT NULL,
  `adr1` tinytext,
  `course1` varchar(100) DEFAULT NULL,
  `cert_no1` varchar(100) DEFAULT NULL,
  `from_dt1` date DEFAULT NULL,
  `to_dt1` date DEFAULT NULL,
  `validity1` date DEFAULT NULL,
  `certificate1_path` varchar(150) DEFAULT NULL,
  `inst_name2` varchar(150) DEFAULT NULL,
  `adr2` tinytext,
  `course2` varchar(100) DEFAULT NULL,
  `cert_no2` varchar(100) DEFAULT NULL,
  `from_dt2` date DEFAULT NULL,
  `to_dt2` date DEFAULT NULL,
  `validity2` date DEFAULT NULL,
  `certificate2_path` varchar(150) DEFAULT NULL,
  `inst_name3` varchar(150) DEFAULT NULL,
  `adr3` tinytext,
  `course3` varchar(100) DEFAULT NULL,
  `cert_no3` varchar(100) DEFAULT NULL,
  `from_dt3` date DEFAULT NULL,
  `to_dt3` date DEFAULT NULL,
  `validity3` date DEFAULT NULL,
  `certificate3_path` varchar(150) DEFAULT NULL,
  `inst_name4` varchar(150) DEFAULT NULL,
  `adr4` tinytext,
  `course4` varchar(100) DEFAULT NULL,
  `cert_no4` varchar(100) DEFAULT NULL,
  `from_dt4` date DEFAULT NULL,
  `to_dt4` date DEFAULT NULL,
  `validity4` date DEFAULT NULL,
  `certificate4_path` varchar(100) DEFAULT NULL,
  `inst_name5` varchar(150) DEFAULT NULL,
  `adr5` tinytext,
  `course5` varchar(100) DEFAULT NULL,
  `cert_no5` varchar(100) DEFAULT NULL,
  `from_dt5` date DEFAULT NULL,
  `to_dt5` date DEFAULT NULL,
  `validity5` date DEFAULT NULL,
  `certificate5_path` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_application_training`
--

INSERT INTO `td_application_training` (`appl_no`, `inst_name1`, `adr1`, `course1`, `cert_no1`, `from_dt1`, `to_dt1`, `validity1`, `certificate1_path`, `inst_name2`, `adr2`, `course2`, `cert_no2`, `from_dt2`, `to_dt2`, `validity2`, `certificate2_path`, `inst_name3`, `adr3`, `course3`, `cert_no3`, `from_dt3`, `to_dt3`, `validity3`, `certificate3_path`, `inst_name4`, `adr4`, `course4`, `cert_no4`, `from_dt4`, `to_dt4`, `validity4`, `certificate4_path`, `inst_name5`, `adr5`, `course5`, `cert_no5`, `from_dt5`, `to_dt5`, `validity5`, `certificate5_path`) VALUES
('00002', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL),
('00005', 'None', 'KL', 'H2S Safety', 'none', '2019-10-10', '2019-10-11', '2020-10-10', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', ''),
('00012', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', ''),
('00014', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', ''),
('00015', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', ''),
('00016', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', ''),
('00017', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', ''),
('00018', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '');

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

--
-- Dumping data for table `td_csp_account`
--

INSERT INTO `td_csp_account` (`pacs_id`, `acc_no`, `name`, `amount`, `trans_dt`, `trans_type`, `utr_no`, `sender_acc_no`, `sender_ifsc_code`, `sender_name`) VALUES
(1, '120001153742', 'YOJNA GURUNG', 1000.00, '2019-01-10', 'NEFT/RTGS', 'U000000566253072    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(1, '120000862476', 'SHAKUNTALA GURUNG', 334.48, '2019-01-10', 'UIH', '639920202093', ' ', ' ', '9090181843607/IOC Ref No3000075884                '),
(1, '120000863173', 'BIJAY  RAJAK', 334.48, '2019-01-10', 'UIH', '914496051376', ' ', ' ', '9090183619404/IOC Ref No3000105961                '),
(1, '120000864916', 'SUMITRA  SARKI', 334.48, '2019-01-10', 'UIH', '448101200781', ' ', ' ', '9090183620584/IOC Ref No3000075611                '),
(1, '120000900343', 'GAUTAM TAMANG', 334.48, '2019-01-10', 'UIH', '361035352601', ' ', ' ', '9090182353871/IOC Ref No3000106121                '),
(1, '120000919752', 'RAKESH   RAI', 334.48, '2019-01-10', 'UIH', '805971979513', ' ', ' ', '9090183619405/IOC Ref No3000105928                '),
(1, '120001049606', 'RUPA CHETTRI', 334.48, '2019-01-10', 'UIH', '755833257753', ' ', ' ', '9090182390949/IOC Ref No3000075883                '),
(1, '120001141341', 'CHANDAN GURUNG **** C-A.11339.', 334.48, '2019-01-10', 'UIH', '947389233201', ' ', ' ', '9090183619544/IOC Ref No3000105915                '),
(1, '120000838884', 'GIDON  RAI', 334.48, '2019-01-11', 'UIH', '246788834207', ' ', ' ', '9100184305623/IOC Ref No3000013361                '),
(1, '120000919672', 'RAM  BDR  MUKHIA', 334.48, '2019-01-11', 'UIH', '361291224143', ' ', ' ', '9100184289697/IOC Ref No3000013383                '),
(1, '120001069509', 'BINA   RASAILY', 234.01, '2019-01-14', 'ACH', ' ', ' ', ' ', '9110186927743?IOC Ref No3000080806                          '),
(1, '120000735107', 'KUNTI  AGHATA  BHUJEL ***CBS ACC.NO.120000735107', 234.01, '2019-01-14', 'UIH', '692138867238', ' ', ' ', '9120189819361/IOC Ref No3000078677                '),
(1, '120000735606', 'GENMIT LEPCHA  ***CBS ACC.NO:120000735606', 234.01, '2019-01-14', 'UIH', '763635381943', ' ', ' ', '9120189537458/IOC Ref No3000079453                '),
(1, '120000742284', 'TULSI PARIYAR  CBS ACC.NO.120000742284', 334.48, '2019-01-14', 'UIH', '448914407537', ' ', ' ', '9110188877912/IOC Ref No3000105708                '),
(1, '120000767901', 'TILAK BAHADUR BISWAKARMA', 338.29, '2019-01-14', 'UIH', '544654438413', ' ', ' ', '9120190072954/IOC Ref No3000121377                '),
(1, '120000768177', 'MALATI CHETTRI', 334.48, '2019-01-14', 'UIH', '779695501420', ' ', ' ', '9120190815016/IOC Ref No3000013722                '),
(1, '120000774011', 'JOHN   RAI **CBS .ACC. NO  120000774011', 334.48, '2019-01-14', 'UIH', '337117886385', ' ', ' ', '9120190436264/IOC Ref No3000076684                '),
(1, '120000792268', 'SANTA BAHADUR BISWAKARMA', 338.29, '2019-01-14', 'UIH', '972043879709', ' ', ' ', '9120189974505/IOC Ref No3000121373                '),
(1, '120000802948', 'BIKASH   GURUNG**CBS  NO 120000802948', 334.48, '2019-01-14', 'UIH', '967721320976', ' ', ' ', '9120190075940/IOC Ref No3000107435                '),
(1, '120000840441', 'SUBASH   RAI', 334.48, '2019-01-14', 'UIH', '935601384656', ' ', ' ', '9120190608733/IOC Ref No3000013703                '),
(1, '120000842596', 'JHARNA SHARKIE', 234.01, '2019-01-14', 'UIH', '626231500404', ' ', ' ', '9110186927895/IOC Ref No3000080827                '),
(1, '120000862737', 'CHANDRA MANI PRADHAN', 334.48, '2019-01-14', 'UIH', '661144046386', ' ', ' ', '9110188877583/IOC Ref No3000106535                '),
(1, '120000863195', 'KAUSHILA  BHUJEL', 234.01, '2019-01-14', 'UIH', '233335010969', ' ', ' ', '9120189692924/IOC Ref No3000081153                '),
(1, '120000872643', 'BINOD   CHHETRI', 334.48, '2019-01-14', 'UIH', '233707660141', ' ', ' ', '9110188879141/IOC Ref No3000076351                '),
(1, '120000920122', 'TARA PRADHAN', 338.29, '2019-01-14', 'UIH', '977399890317', ' ', ' ', '9120189974722/IOC Ref No3000121375                '),
(1, '120001069543', 'BASANTI   BASUR', 234.01, '2019-01-14', 'UIH', '868827259542', ' ', ' ', '9110186927769/IOC Ref No3000080807                '),
(1, '120001103122', 'MEENA   DARJI', 234.01, '2019-01-14', 'UIH', '439759429311', ' ', ' ', '9120189750254/IOC Ref No3000079159                '),
(1, '120001103133', 'BINU   DARJI', 234.01, '2019-01-14', 'UIH', '325197346046', ' ', ' ', '9120189750242/IOC Ref No3000079155                '),
(1, '120001141330', 'ARJUN KARKIDOLI', 334.48, '2019-01-14', 'UIH', '219811175075', ' ', ' ', '9130184409981/IOC Ref No3000107498                '),
(1, '120000714722', 'MAN  BDR  PRADHAN/SACHIN  PRADHAN', 334.48, '2019-01-15', 'UIH', '769375145698', ' ', ' ', '9140186605232/IOC Ref No3000076763                '),
(1, '120000714926', 'PREM BISWAKARMA', 334.48, '2019-01-15', 'UIH', '712513856011', ' ', ' ', '9050184116866/IOC Ref No3000105140                '),
(1, '120000855968', 'KHUSBOO  SUBBA', 234.01, '2019-01-15', 'UIH', '229529067179', ' ', ' ', '9140185615522/IOC Ref No3000082940                '),
(1, '120000855979', 'SANJIT  AGARWAL', 334.48, '2019-01-15', 'UIH', '906826730469', ' ', ' ', '9050182054246/IOC Ref No3000074773                '),
(1, '120000856008', 'KAILASH  SINGH', 334.48, '2019-01-15', 'UIH', '815312496620', ' ', ' ', '9140185341703/IOC Ref No3000076737                '),
(1, '120000856020', 'SHARAN   THAPA', 334.48, '2019-01-15', 'UIH', '522790116851', ' ', ' ', '9140186606248/IOC Ref No3000077082                '),
(1, '120000862578', 'PAPPU  PRADHAN', 334.48, '2019-01-15', 'UIH', '288116320087', ' ', ' ', '9050183642096/IOC Ref No3000103918                '),
(1, '120000863366', 'JENIFER  RAI', 334.48, '2019-01-15', 'UIH', '808071385660', ' ', ' ', '9050184096721/IOC Ref No3000104530                '),
(1, '120000863923', 'RITA  DEVI PRASAD **120000863923.', 334.48, '2019-01-15', 'UIH', '340278148475', ' ', ' ', '9050182109391/IOC Ref No3000103816                '),
(1, '120000864393', 'RAJENDRA   PSD   VERMA', 334.48, '2019-01-15', 'UIH', '398647142391', ' ', ' ', '9140186606116/IOC Ref No3000077051                '),
(1, '120000867554', 'UMA   BISWAKARMA', 334.48, '2019-01-15', 'UIH', '685490864071', ' ', ' ', '9140186606218/IOC Ref No3000077058                '),
(1, '120000877142', 'LAXMI SHARMA', 334.48, '2019-01-15', 'UIH', '874468435440', ' ', ' ', '9140185536582/IOC Ref No3000076594                '),
(1, '120000897919', 'DAWA   NARBU  SHERPA /BENJO   SHERPA', 334.48, '2019-01-15', 'UIH', '889989770533', ' ', ' ', '9050183993263/IOC Ref No3000105090                '),
(1, '120000905579', 'SUSHMA  PRADHAN', 234.01, '2019-01-15', 'UIH', '517363443780', ' ', ' ', '9050182409265/IOC Ref No3000078701                '),
(1, '120000916558', 'PRITI   GOYAL', 334.48, '2019-01-15', 'UIH', '868131368341', ' ', ' ', '9050182028049/IOC Ref No3000074760                '),
(1, '120000919526', 'MINGMA  LEPCHA', 334.48, '2019-01-15', 'UIH', '697450427250', ' ', ' ', '9140186606279/IOC Ref No3000076730                '),
(1, '120000919537', 'KRISHNA   BAHADUR  GURUNG/SUSHILA  GURUNG', 234.01, '2019-01-15', 'UIH', '200868342712', ' ', ' ', '9050182265769/IOC Ref No3000078752                '),
(1, '120000919605', 'BINDIYA   MANGER', 334.48, '2019-01-15', 'UIH', '318934227799', ' ', ' ', '9050184167271/IOC Ref No3000074794                '),
(1, '120000920177', 'SAJRA KHATUN ANSARI', 338.29, '2019-01-15', 'UIH', '740820477203', ' ', ' ', '9050182064961/IOC Ref No3000117910                '),
(1, '120000929806', 'JIT BAHADUR RAI', 334.48, '2019-01-15', 'UIH', '381141990655', ' ', ' ', '9050183642206/IOC Ref No3000104107                '),
(1, '120000932321', 'KAMALA    TAMANG', 234.01, '2019-01-15', 'UIH', '399406759913', ' ', ' ', '9050182395005/IOC Ref No3000078791                '),
(1, '120001132132', 'CHOWRASTA SANGAM CLUB', 334.48, '2019-01-15', 'UIH', '910055533339', ' ', ' ', '9050182068785/IOC Ref No3000104111                '),
(1, '120000716195', 'PADMA  BHUJEL (BISWAKARMA)', 234.01, '2019-01-15', 'UIH', '523202278025', ' ', ' ', '9050182225955/IOC Ref No3000078760                '),
(1, '120000716220', 'SITA   GHATRAJ', 234.01, '2019-01-15', 'UIH', '977563693833', ' ', ' ', '9050182409275/IOC Ref No3000078692                '),
(1, '120000724559', 'TOPDEN  TSHERING   SHERPA  ***CBS ACC.NO.120000724559', 334.48, '2019-01-15', 'UIH', '418639779840', ' ', ' ', '9050183947636/IOC Ref No3000075078                '),
(1, '120000731941', 'RAM   BHAGWAN  SINGH.', 334.48, '2019-01-15', 'UIH', '479711765046', ' ', ' ', '9050182382179/IOC Ref No3000074761                '),
(1, '120000739906', 'BINDU THAPA  ***CBS ACC.NO:120000739906', 334.48, '2019-01-15', 'UIH', '303302523482', ' ', ' ', '9050183642104/IOC Ref No3000103850                '),
(1, '120000761342', 'MEENA THAKURI  (LOAN ID-823)', 334.48, '2019-01-15', 'UIH', '527395275313', ' ', ' ', '9050182251235/IOC Ref No3000104177                '),
(1, '120000797391', 'GANGARAM SUBBA', 338.29, '2019-01-15', 'UIH', '518267129255', ' ', ' ', '9050181757629/IOC Ref No3000117981                '),
(1, '120000809591', 'PRADIP  SHILAL', 334.48, '2019-01-15', 'UIH', '876191279978', ' ', ' ', '9140186606156/IOC Ref No3000077057                '),
(1, '120000809669', 'RITA   TAMANG', 334.48, '2019-01-15', 'UIH', '300485955849', ' ', ' ', '9050183643620/IOC Ref No3000074784                '),
(1, '120000809681', 'SHIVLAL   CHHETRI', 334.48, '2019-01-15', 'UIH', '476037006370', ' ', ' ', '9050183643571/IOC Ref No3000074778                '),
(1, '120000825819', 'SUCHITA   LOHAR **CBS  A/C  NO .120000825819', 234.01, '2019-01-15', 'UIH', '595842176590', ' ', ' ', '9050182409244/IOC Ref No3000078710                '),
(1, '120000831550', 'SANJAY  BISWAKARMA **BOOK II***C/O-RADHIKA RANA.', 334.48, '2019-01-15', 'UIH', '611481655270', ' ', ' ', '9140186606138/IOC Ref No3000076524                '),
(1, '120000838771', 'RAJEEP    RAI', 234.01, '2019-01-15', 'UIH', '642517745012', ' ', ' ', '9050182225953/IOC Ref No3000078758                '),
(1, '120000838793', 'RAMA  ADHIKARI', 234.01, '2019-01-15', 'UIH', '244200383314', ' ', ' ', '9050182409245/IOC Ref No3000078721                '),
(1, '120000840893', 'SANGITA  DANGAL', 334.48, '2019-01-15', 'UIH', '982626258688', ' ', ' ', '9050184516084/IOC Ref No3000074820                '),
(1, '120000848349', 'RITA   SUBBA', 334.48, '2019-01-15', 'UIH', '660154916197', ' ', ' ', '9050182007779/IOC Ref No3000074785                '),
(1, '120000855946', 'BISHAL  SINGH', 334.48, '2019-01-15', 'UIH', '377779811890', ' ', ' ', '9050181954604/IOC Ref No3000074783                '),
(1, '120000714982', 'HARI  SHANKAR  SINGH', 334.48, '2019-01-16', 'UIH', '690733409954', ' ', ' ', '9150187942556/IOC Ref No3000077165                '),
(1, '120000716139', 'NIKITA TRIKHATRI', 234.01, '2019-01-16', 'UIH', '750926267639', ' ', ' ', '9150188622160/IOC Ref No3000082966                '),
(1, '120000721069', 'PRAMILA   SUBBA ***CBS AC.NO.120000721069', 234.01, '2019-01-16', 'UIH', '995463817040', ' ', ' ', '9150188622170/IOC Ref No3000082964                '),
(1, '120000741654', 'LAXMI BISWAKARMA  ***CBS ACC.NO:120000741654', 334.48, '2019-01-16', 'UIH', '814322447390', ' ', ' ', '9150189401439/IOC Ref No3000108438                '),
(1, '120000761353', 'RUDRA LIMBU', 334.48, '2019-01-16', 'UIH', '522520478240', ' ', ' ', '9150189401526/IOC Ref No3000108827                '),
(1, '120000795316', 'PHUL MAYA BISWAKARMA', 334.48, '2019-01-16', 'UIH', '912282535944', ' ', ' ', '9150188626372/IOC Ref No3000013719                '),
(1, '120000795452', 'HEM KUMARI BHUJEL', 334.48, '2019-01-16', 'UIH', '326878479848', ' ', ' ', '9150188604510/IOC Ref No3000013721                '),
(1, '120000803055', 'MEERA   PRADHAN', 334.48, '2019-01-16', 'UIH', '811642161427', ' ', ' ', '9150187987176/IOC Ref No3000077163                '),
(1, '120000856086', 'TEK   BAHADUR   DARNAL', 334.48, '2019-01-16', 'UIH', '736192484425', ' ', ' ', '9120191904465/IOC Ref No3000076437                '),
(1, '120000856825', 'PUNYA  KUMARI KHAWAS', 334.48, '2019-01-16', 'UIH', '255265829793', ' ', ' ', '9120191902853/IOC Ref No3000107828                '),
(1, '120000861245', 'BINOD SHAHU & SEEMA SHAHU', 234.48, '2019-01-16', 'UIH', '859499572641', ' ', ' ', '9150188099307/IOC Ref No3000108652                '),
(1, '120000863242', 'SUSHILA  TAMANG ( MOKTAN)', 334.48, '2019-01-16', 'UIH', '891029696476', ' ', ' ', '9120191904426/IOC Ref No3000076388                '),
(1, '120000872643', 'BINOD   CHHETRI', 334.48, '2019-01-16', 'UIH', '233707660141', ' ', ' ', '9120191904389/IOC Ref No3000076441                '),
(1, '120000879434', 'RAJUNA   CHHETRI', 346.86, '2019-01-16', 'UIH', '907102302611', ' ', ' ', '9150188914025/IOC Ref No3000044928                '),
(1, '120000881976', 'PHURBA   SHERPA', 234.01, '2019-01-16', 'UIH', '728959798489', ' ', ' ', '9080199965994/IOC Ref No3000080429                '),
(1, '120000916503', 'ASHA GUPTA', 334.48, '2019-01-16', 'UIH', '713934598305', ' ', ' ', '9150188039375/IOC Ref No3000077172                '),
(1, '120000946640', 'SARMILA  TRIKHATRI', 334.48, '2019-01-16', 'UIH', '321190656820', ' ', ' ', '9120191904468/IOC Ref No3000076424                '),
(1, '120000946822', 'BHAGIRATH    SAHU', 234.48, '2019-01-16', 'UIH', '475861782458', ' ', ' ', '9080180277286/IOC Ref No3000223402                '),
(1, '120000950339', 'BHUPENDRA KUMAR SUBBA (LIMBU)', 334.48, '2019-01-16', 'UIH', '430891136564', ' ', ' ', '9120191904320/IOC Ref No3000075754                '),
(1, '120001075411', 'DAWA  LAMU  BHUTIA ', 334.48, '2019-01-16', 'UIH', '709812384597', ' ', ' ', '9120191903009/IOC Ref No3000107129                '),
(1, '120000863059', 'TSHERING BHUTIA***AC- NO- 148002031736***', 334.48, '2019-01-17', 'UIH', '338578739588', ' ', ' ', '9160190730559/IOC Ref No3000108876                '),
(1, '120000950395', 'LHAMU  ANJU BHUTIA', 334.48, '2019-01-17', 'UIH', '461900485291', ' ', ' ', '9160191931090/IOC Ref No3000108872                '),
(1, '120000838056', 'NIRMALA TAMANG', 334.48, '2019-01-17', 'UIH', '481187011377', ' ', ' ', '9160191171994/IOC Ref No3000109306                '),
(1, '120000913320', 'CHEN CHIEN YUAN', 334.48, '2019-01-17', 'UIH', '417929745114', ' ', ' ', '9160191931171/IOC Ref No3000108990                '),
(1, '120000864417', 'SUKLAL   DARJEE', 334.48, '2019-01-17', 'UIH', '268102832702', ' ', ' ', '9160191932244/IOC Ref No3000078124                '),
(1, '120000863286', 'SHOVA NIROULA', 2000.00, '2019-01-17', 'UIH', '698076841883', ' ', ' ', 'C011912850118/CPSMSAX                             '),
(1, '120000864803', 'LOSANG DOMA LAMA', 334.48, '2019-01-17', 'UIH', '211235756240', ' ', ' ', '9160190266195/IOC Ref No3000077750                '),
(1, '120000724468', 'RAJU  MUKHIA ***CBS ACC.NO.120000724468', 334.48, '2019-01-17', 'UIH', '618477427282', ' ', ' ', '9160191932311/IOC Ref No3000078131                '),
(1, '120000761400', 'SANCHA PRADHAN', 334.48, '2019-01-17', 'UIH', '781151925069', ' ', ' ', '9160191194818/IOC Ref No3000013917                '),
(1, '120000809603', 'ARPAN    MUKHIA**CBS  A/C  NO. 120000809603', 346.86, '2019-01-17', 'UIH', '965573172194', ' ', ' ', '9160189580380/IOC Ref No3000044229                '),
(1, '120000856100', 'ANITA   BISWAKARMA', 334.48, '2019-01-17', 'UIH', '544302526806', ' ', ' ', '9160191932281/IOC Ref No3000078133                '),
(1, '120000946753', 'MANOJ   SHAHU', 234.48, '2019-01-17', 'UIH', '374727607052', ' ', ' ', '9160190839873/IOC Ref No3000232526                '),
(2, '120000790237', 'KARUNA TAMANG ', 346.86, '2019-01-10', 'UIH', '201069862476', ' ', ' ', '9090182116000/IOC Ref No3000107996                '),
(2, '120000945002', 'KALPANA LIMBU ', 346.86, '2019-01-10', 'UIH', '317806581030', ' ', ' ', '9090183597848/IOC Ref No3000108029                '),
(2, '120000733325', 'KAYSINGH SHERPA ', 346.86, '2019-01-10', 'UIH', '318921116730', ' ', ' ', '9090183597723/IOC Ref No3000108000                '),
(2, '120001065436', 'MIKMA LEPCHA ', 4500.00, '2019-01-11', 'NEFT/RTGS', '58858739', '635405000803', 'ICIC0006354', 'SHANTIPATH FOUNDATION           '),
(2, '120001065469', 'DURGA CHHETRI ', 6500.00, '2019-01-11', 'NEFT/RTGS', '58929716', '635405000803', 'ICIC0006354', 'SHANTIPATH FOUNDATION           '),
(2, '120001065447', 'CHAYADUR LEPCHA ', 5000.00, '2019-01-11', 'NEFT/RTGS', '58857963', '635405000803', 'ICIC0006354', 'SHANTIPATH FOUNDATION           '),
(2, '120000788671', 'DEV KUMARI GURUNG ', 346.86, '2019-01-14', 'UIH', '709613930654', ' ', ' ', '9110186303026/IOC Ref No3000108246                '),
(2, '120000803941', 'SANTA KUMAR TAMANG ', 346.86, '2019-01-14', 'UIH', '888304155730', ' ', ' ', '9110188837933/IOC Ref No3000108250                '),
(2, '120000810369', 'RATNASWARI RAI ', 234.01, '2019-01-14', 'UIH', '363655880124', ' ', ' ', '9120189868037/IOC Ref No3000078388                '),
(2, '120000810438', 'PHULMAYA BHUTIA ', 234.01, '2019-01-14', 'UIH', '441200113022', ' ', ' ', '9120189868921/IOC Ref No3000078391                '),
(2, '120000815255', 'SICHAL KHAWAS ', 346.86, '2019-01-14', 'UIH', '389455355272', ' ', ' ', '9120190495938/IOC Ref No3000050189                '),
(2, '120000826981', 'HEM KUMARI RAI ', 346.86, '2019-01-14', 'UIH', '710640468256', ' ', ' ', '9120189909186/IOC Ref No3000049313                '),
(2, '120000909379', 'SHARMILA BISHWAKARMA ', 346.86, '2019-01-14', 'UIH', '227902834733', ' ', ' ', '9120189889023/IOC Ref No3000106634                '),
(2, '120000945035', 'SUREKHA RAI ', 234.01, '2019-01-14', 'UIH', '652713185630', ' ', ' ', '9120189867947/IOC Ref No3000078399                '),
(2, '120000945411', 'KEDAR SARKI ', 346.86, '2019-01-14', 'UIH', '732472998029', ' ', ' ', '9110188837714/IOC Ref No3000108738                '),
(2, '120000945422', 'HARKA BAHADUR KHAWAS ', 346.86, '2019-01-14', 'UIH', '506436289052', ' ', ' ', '9110186126753/IOC Ref No3000106463                '),
(2, '120000950769', 'SANTOKI SHERPA ', 346.86, '2019-01-14', 'UIH', '667954626855', ' ', ' ', '9120189883669/IOC Ref No3000049598                '),
(2, '120000788138', 'KAPIL GURUNG ', 346.86, '2019-01-14', 'UIH', '806908998395', ' ', ' ', '9110188837774/IOC Ref No3000108247                '),
(2, '120000786731', 'JANUKI CHHETRI ', 346.86, '2019-01-14', 'UIH', '725442930212', ' ', ' ', '9120189750053/IOC Ref No3000106597                '),
(2, '120000727505', 'PUSPA RAI PRADHAN ', 346.86, '2019-01-14', 'UIH', '407631391844', ' ', ' ', '9120190551746/IOC Ref No3000109059                '),
(2, '120000733518', 'SARIMAYA TAMANG ', 234.01, '2019-01-14', 'ACH', ' ', ' ', ' ', '9120189869304?IOC Ref No3000078916                          '),
(2, '120001153038', 'MEENA YELMO ', 346.86, '2019-01-14', 'UIH', '647643181365', ' ', ' ', '9120189888749/IOC Ref No3000106621                '),
(2, '120000788536', 'SHEKHAR GURUNG ', 346.86, '2019-01-14', 'UIH', '499964181940', ' ', ' ', '9110188837773/IOC Ref No3000108248                '),
(2, '120000727550', 'MD. ABDUL HUSSAIN ', 334.48, '2019-01-15', 'UIH', '896973681375', ' ', ' ', '9050183643467/IOC Ref No3000074740                '),
(2, '120001168942', 'RANJITA CHHETRI (GURUNG) ', 346.86, '2019-01-15', 'UIH', '525725937308', ' ', ' ', '9050184498247/IOC Ref No3000048992                '),
(2, '120001119144', 'SANTOSH BALMIKI ', 346.86, '2019-01-15', 'UIH', '920397144838', ' ', ' ', '9050184085942/IOC Ref No3000106610                '),
(2, '120000948503', 'MANI PRASAD RAI ', 346.86, '2019-01-15', 'UIH', '330798295844', ' ', ' ', '9050184260267/IOC Ref No3000106625                '),
(2, '120000948445', 'SAKUN PRADHAN ', 346.86, '2019-01-15', 'UIH', '321620550415', ' ', ' ', '9140186589153/IOC Ref No3000044652                '),
(2, '120000945466', 'MANIKA RAI ', 346.86, '2019-01-15', 'UIH', '269273925336', ' ', ' ', '9050183620747/IOC Ref No3000048682                '),
(2, '120000817558', 'PRINGLE RAI ', 234.48, '2019-01-15', 'UIH', '787906329641', ' ', ' ', '9050184680638/IOC Ref No3000087642                '),
(2, '120000817558', 'PRINGLE RAI ', 234.48, '2019-01-15', 'UIH', '787906329641', ' ', ' ', '9050184680639/IOC Ref No3000086204                '),
(2, '120000815404', 'RASHMI RAI ', 334.48, '2019-01-15', 'UIH', '735071359312', ' ', ' ', '9140186606180/IOC Ref No3000077069                '),
(2, '120000810278', 'DURGA CHETTRII ', 234.01, '2019-01-15', 'UIH', '950742772349', ' ', ' ', '9140185727403/IOC Ref No3000082237                '),
(2, '120000793476', 'AMRITA TAMANG ', 346.86, '2019-01-15', 'UIH', '812205417635', ' ', ' ', '9050182307571/IOC Ref No3000048693                '),
(2, '120000763791', 'BABIN LEPCHA ', 234.01, '2019-01-15', 'UIH', '990383399108', ' ', ' ', '9050182401221/IOC Ref No3000078236                '),
(2, '120000733187', 'MANJU LEPCHA ', 234.01, '2019-01-15', 'UIH', '643633291316', ' ', ' ', '9050182454021/IOC Ref No3000078394                '),
(2, '120000733041', 'LATA TAMANG ', 234.01, '2019-01-15', 'UIH', '674763922744', ' ', ' ', '9050182454033/IOC Ref No3000078395                '),
(2, '120000950781', 'CHEJONG BHUTIA ', 346.86, '2019-01-16', 'UIH', '917660000297', ' ', ' ', '947551424/BLPGCM42364DT1501                       '),
(2, '120000826981', 'HEM KUMARI RAI ', 346.86, '2019-01-16', 'UIH', '710640468256', ' ', ' ', '9150188664639/IOC Ref No3000050011                '),
(2, '120000810290', 'PREMIKA RAI ', 346.86, '2019-01-16', 'UIH', '286788009575', ' ', ' ', '9150189390230/IOC Ref No3000110374                '),
(2, '120000766282', 'ABIRAJ BHANDARI ', 346.86, '2019-01-16', 'UIH', '751752080174', ' ', ' ', '947887246/BLPGCM42359DT1501                       '),
(2, '120000734001', 'MANIKA MOKTAN LIMBU ', 346.86, '2019-01-16', 'UIH', '486836838380', ' ', ' ', '9150188937651/IOC Ref No3000045001                '),
(2, '120000733245', 'NUNUKI DEWAN ', 234.01, '2019-01-16', 'UIH', '856032402353', ' ', ' ', '9150188673264/IOC Ref No3000082618                '),
(2, '120000680600', 'DURGA KUMAR CHHETRI ', 45000.00, '2019-01-16', 'ACH', ' ', ' ', ' ', 'C011912643798?PMAYG BTNE8                                   '),
(2, '120000877914', 'DIWASH MUKHIA ', 45000.00, '2019-01-16', 'ACH', ' ', ' ', ' ', 'C011912643797?PMAYG BTNE8                                   '),
(2, '120000409377', 'URGEN SHERPA ', 45000.00, '2019-01-16', 'ACH', ' ', ' ', ' ', 'C011912701702?PMAYG BTNE8                                   '),
(2, '120000741224', 'SARITA PRADHAN ', 234.48, '2019-01-17', 'UIH', '444075687029', ' ', ' ', '9160190287032/IOC Ref No3000048799                '),
(2, '120001036630', 'PRAMILA TAMANG ', 346.86, '2019-01-17', 'UIH', '438745348337', ' ', ' ', '9160191914872/IOC Ref No3000110589                '),
(2, '120000739666', 'ARJUN KUMAR RAI ', 346.86, '2019-01-17', 'UIH', '469888180913', ' ', ' ', '9160190991153/IOC Ref No3000044814                '),
(2, '120000793307', 'PRAMILA MUKHIA LEPCHA ', 346.86, '2019-01-17', 'UIH', '646449468537', ' ', ' ', '9160190718909/IOC Ref No3000110594                '),
(3, '120001094604', 'PREETAM RAI', 346.86, '2019-01-14', 'UIH', '321136934237', ' ', ' ', '9110186596815/IOC Ref No3000029048                '),
(4, '120000337366', 'DAWA BHUTIA', 1000.00, '2019-01-10', 'NEFT/RTGS', 'U000000566251540    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000337366', 'DAWA BHUTIA', 950.00, '2019-01-10', 'NEFT/RTGS', 'U000000566251296    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000601730', 'MAN RATI BHUTIA', 1000.00, '2019-01-10', 'NEFT/RTGS', 'U000000566251544    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000537626', 'TSHERING DOMA BHUTIA', 1000.00, '2019-01-10', 'NEFT/RTGS', 'U000000566252052    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000813597', 'LALITA RAI', 338.29, '2019-01-14', 'UIH', '212550402104', ' ', ' ', '9110185889639/IOC Ref No3000120168                '),
(5, '120001194280', 'DOLMA TAMANG-II', 234.01, '2019-01-14', 'UIH', '614733351155', ' ', ' ', '9120189933619/IOC Ref No3000081759                '),
(5, '120001336328', 'MUNNA POUDYAL', 234.01, '2019-01-14', 'UIH', '376703774895', ' ', ' ', '9120189933691/IOC Ref No3000081739                '),
(5, '120000745922', 'CHANDRA PRASAD BAJAGAI', 334.48, '2019-01-15', 'UIH', '948926168011', ' ', ' ', '9140186878650/IOC Ref No3000108073                '),
(5, '120000846249', 'SANGBIR TAMANG', 334.48, '2019-01-15', 'UIH', '493371357150', ' ', ' ', '9050183642040/IOC Ref No3000104666                '),
(5, '120000921921', 'BANU PRADHAN', 334.48, '2019-01-16', 'UIH', '359976215251', ' ', ' ', '9120191902868/IOC Ref No3000107761                ');

-- --------------------------------------------------------

--
-- Table structure for table `td_inward`
--

CREATE TABLE `td_inward` (
  `sl_no` int(10) NOT NULL,
  `trans_dt` date NOT NULL,
  `file_name` text,
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
-- Dumping data for table `tt_csp_account`
--

INSERT INTO `tt_csp_account` (`pacs_id`, `acc_no`, `name`, `amount`, `trans_dt`, `trans_type`, `utr_no`, `sender_acc_no`, `sender_ifsc_code`, `sender_name`) VALUES
('1\0', '\01\02\00\00\00\01\01\05\03\07\04\02\0', '\0Y\0O\0J\0N\0A\0 \0G\0U\0R\0U\0N\0G\0', '\01\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\0U\00\00\00\00\00\00\05\06\06\02\05\03\00\07\02\0 \0 \0 \0 \0', '\01\05\01\06\07\00\01\01\07\00\0', '\0R\0B\0I\0S\00\0K\0L\0P\0A\00\01\0', '\0K\0A\0L\0I\0M\0P\0O\0N\0G\0 \0T\0R\0E\0A\0S\0U\0R\0Y\0 \0e\0P\0R\0A\0D\0A\0N\0 \0W\0E\0S\0T\0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\02\04\07\06\0', '\0S\0H\0A\0K\0U\0N\0T\0A\0L\0A\0 \0G\0U\0R\0U\0N\0G\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\06\03\09\09\02\00\02\00\02\00\09\03\0', '\00\0', '\00\0', '\09\00\09\00\01\08\01\08\04\03\06\00\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\05\08\08\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\01\07\03\0', '\0B\0I\0J\0A\0Y\0 \0 \0R\0A\0J\0A\0K\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\09\01\04\04\09\06\00\05\01\03\07\06\0', '\00\0', '\00\0', '\09\00\09\00\01\08\03\06\01\09\04\00\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\05\09\06\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\04\09\01\06\0', '\0S\0U\0M\0I\0T\0R\0A\0 \0 \0S\0A\0R\0K\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\04\04\08\01\00\01\02\00\00\07\08\01\0', '\00\0', '\00\0', '\09\00\09\00\01\08\03\06\02\00\05\08\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\05\06\01\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\00\00\03\04\03\0', '\0G\0A\0U\0T\0A\0M\0 \0T\0A\0M\0A\0N\0G\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\03\06\01\00\03\05\03\05\02\06\00\01\0', '\00\0', '\00\0', '\09\00\09\00\01\08\02\03\05\03\08\07\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\01\02\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\09\07\05\02\0', '\0R\0A\0K\0E\0S\0H\0 \0 \0 \0R\0A\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\08\00\05\09\07\01\09\07\09\05\01\03\0', '\00\0', '\00\0', '\09\00\09\00\01\08\03\06\01\09\04\00\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\05\09\02\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\00\04\09\06\00\06\0', '\0R\0U\0P\0A\0 \0C\0H\0E\0T\0T\0R\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\07\05\05\08\03\03\02\05\07\07\05\03\0', '\00\0', '\00\0', '\09\00\09\00\01\08\02\03\09\00\09\04\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\05\08\08\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\01\04\01\03\04\01\0', '\0C\0H\0A\0N\0D\0A\0N\0 \0G\0U\0R\0U\0N\0G\0 \0*\0*\0*\0*\0 \0C\0-\0A\0.\01\01\03\03\09\0.\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\09\04\07\03\08\09\02\03\03\02\00\01\0', '\00\0', '\00\0', '\09\00\09\00\01\08\03\06\01\09\05\04\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\05\09\01\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\03\08\08\08\04\0', '\0G\0I\0D\0O\0N\0 \0 \0R\0A\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\01\0', '\0U\0I\0H\0', '\02\04\06\07\08\08\08\03\04\02\00\07\0', '\00\0', '\00\0', '\09\01\00\00\01\08\04\03\00\05\06\02\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\03\06\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\09\06\07\02\0', '\0R\0A\0M\0 \0 \0B\0D\0R\0 \0 \0M\0U\0K\0H\0I\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\01\0', '\0U\0I\0H\0', '\03\06\01\02\09\01\02\02\04\01\04\03\0', '\00\0', '\00\0', '\09\01\00\00\01\08\04\02\08\09\06\09\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\03\08\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\00\06\09\05\00\09\0', '\0B\0I\0N\0A\0 \0 \0 \0R\0A\0S\0A\0I\0L\0Y\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0A\0C\0H\0', '\0 \0', '\00\0', '\00\0', '\09\01\01\00\01\08\06\09\02\07\07\04\03\0?\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\00\08\00\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\03\05\01\00\07\0', '\0K\0U\0N\0T\0I\0 \0 \0A\0G\0H\0A\0T\0A\0 \0 \0B\0H\0U\0J\0E\0L\0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0.\01\02\00\00\00\00\07\03\05\01\00\07\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\09\02\01\03\08\08\06\07\02\03\08\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\08\01\09\03\06\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\06\07\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\03\05\06\00\06\0', '\0G\0E\0N\0M\0I\0T\0 \0L\0E\0P\0C\0H\0A\0 \0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0:\01\02\00\00\00\00\07\03\05\06\00\06\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\07\06\03\06\03\05\03\08\01\09\04\03\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\05\03\07\04\05\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\09\04\05\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\04\02\02\08\04\0', '\0T\0U\0L\0S\0I\0 \0P\0A\0R\0I\0Y\0A\0R\0 \0 \0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0.\01\02\00\00\00\00\07\04\02\02\08\04\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\04\04\08\09\01\04\04\00\07\05\03\07\0', '\00\0', '\00\0', '\09\01\01\00\01\08\08\08\07\07\09\01\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\05\07\00\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\06\07\09\00\01\0', '\0T\0I\0L\0A\0K\0 \0B\0A\0H\0A\0D\0U\0R\0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0', '\03\03\08\0.\02\09\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\05\04\04\06\05\04\04\03\08\04\01\03\0', '\00\0', '\00\0', '\09\01\02\00\01\09\00\00\07\02\09\05\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\02\01\03\07\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\06\08\01\07\07\0', '\0M\0A\0L\0A\0T\0I\0 \0C\0H\0E\0T\0T\0R\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\07\07\09\06\09\05\05\00\01\04\02\00\0', '\00\0', '\00\0', '\09\01\02\00\01\09\00\08\01\05\00\01\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\07\02\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\07\04\00\01\01\0', '\0J\0O\0H\0N\0 \0 \0 \0R\0A\0I\0 \0*\0*\0C\0B\0S\0 \0.\0A\0C\0C\0.\0 \0N\0O\0 \0 \01\02\00\00\00\00\07\07\04\00\01\01\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\03\03\07\01\01\07\08\08\06\03\08\05\0', '\00\0', '\00\0', '\09\01\02\00\01\09\00\04\03\06\02\06\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\06\08\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\09\02\02\06\08\0', '\0S\0A\0N\0T\0A\0 \0B\0A\0H\0A\0D\0U\0R\0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0', '\03\03\08\0.\02\09\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\09\07\02\00\04\03\08\07\09\07\00\09\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\09\07\04\05\00\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\02\01\03\07\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\00\02\09\04\08\0', '\0B\0I\0K\0A\0S\0H\0 \0 \0 \0G\0U\0R\0U\0N\0G\0*\0*\0C\0B\0S\0 \0 \0N\0O\0 \01\02\00\00\00\00\08\00\02\09\04\08\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\09\06\07\07\02\01\03\02\00\09\07\06\0', '\00\0', '\00\0', '\09\01\02\00\01\09\00\00\07\05\09\04\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\07\04\03\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\04\00\04\04\01\0', '\0S\0U\0B\0A\0S\0H\0 \0 \0 \0R\0A\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\09\03\05\06\00\01\03\08\04\06\05\06\0', '\00\0', '\00\0', '\09\01\02\00\01\09\00\06\00\08\07\03\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\07\00\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\04\02\05\09\06\0', '\0J\0H\0A\0R\0N\0A\0 \0S\0H\0A\0R\0K\0I\0E\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\02\06\02\03\01\05\00\00\04\00\04\0', '\00\0', '\00\0', '\09\01\01\00\01\08\06\09\02\07\08\09\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\00\08\02\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\02\07\03\07\0', '\0C\0H\0A\0N\0D\0R\0A\0 \0M\0A\0N\0I\0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\06\01\01\04\04\00\04\06\03\08\06\0', '\00\0', '\00\0', '\09\01\01\00\01\08\08\08\07\07\05\08\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\05\03\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\01\09\05\0', '\0K\0A\0U\0S\0H\0I\0L\0A\0 \0 \0B\0H\0U\0J\0E\0L\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\02\03\03\03\03\05\00\01\00\09\06\09\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\06\09\02\09\02\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\01\01\05\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\07\02\06\04\03\0', '\0B\0I\0N\0O\0D\0 \0 \0 \0C\0H\0H\0E\0T\0R\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\02\03\03\07\00\07\06\06\00\01\04\01\0', '\00\0', '\00\0', '\09\01\01\00\01\08\08\08\07\09\01\04\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\03\05\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\02\00\01\02\02\0', '\0T\0A\0R\0A\0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\08\0.\02\09\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\09\07\07\03\09\09\08\09\00\03\01\07\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\09\07\04\07\02\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\02\01\03\07\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\00\06\09\05\04\03\0', '\0B\0A\0S\0A\0N\0T\0I\0 \0 \0 \0B\0A\0S\0U\0R\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\08\06\08\08\02\07\02\05\09\05\04\02\0', '\00\0', '\00\0', '\09\01\01\00\01\08\06\09\02\07\07\06\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\00\08\00\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\01\00\03\01\02\02\0', '\0M\0E\0E\0N\0A\0 \0 \0 \0D\0A\0R\0J\0I\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\04\03\09\07\05\09\04\02\09\03\01\01\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\07\05\00\02\05\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\09\01\05\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\01\00\03\01\03\03\0', '\0B\0I\0N\0U\0 \0 \0 \0D\0A\0R\0J\0I\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\03\02\05\01\09\07\03\04\06\00\04\06\0', '\00\0', '\00\0', '\09\01\02\00\01\08\09\07\05\00\02\04\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\09\01\05\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\01\04\01\03\03\00\0', '\0A\0R\0J\0U\0N\0 \0K\0A\0R\0K\0I\0D\0O\0L\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\02\01\09\08\01\01\01\07\05\00\07\05\0', '\00\0', '\00\0', '\09\01\03\00\01\08\04\04\00\09\09\08\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\07\04\09\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\01\04\07\02\02\0', '\0M\0A\0N\0 \0 \0B\0D\0R\0 \0 \0P\0R\0A\0D\0H\0A\0N\0/\0S\0A\0C\0H\0I\0N\0 \0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\07\06\09\03\07\05\01\04\05\06\09\08\0', '\00\0', '\00\0', '\09\01\04\00\01\08\06\06\00\05\02\03\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\07\06\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\01\04\09\02\06\0', '\0P\0R\0E\0M\0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\07\01\02\05\01\03\08\05\06\00\01\01\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\01\01\06\08\06\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\05\01\04\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\05\09\06\08\0', '\0K\0H\0U\0S\0B\0O\0O\0 \0 \0S\0U\0B\0B\0A\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\02\02\09\05\02\09\00\06\07\01\07\09\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\05\06\01\05\05\02\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\02\09\04\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\05\09\07\09\0', '\0S\0A\0N\0J\0I\0T\0 \0 \0A\0G\0A\0R\0W\0A\0L\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\00\06\08\02\06\07\03\00\04\06\09\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\00\05\04\02\04\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\07\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\06\00\00\08\0', '\0K\0A\0I\0L\0A\0S\0H\0 \0 \0S\0I\0N\0G\0H\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\01\05\03\01\02\04\09\06\06\02\00\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\05\03\04\01\07\00\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\07\03\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\06\00\02\00\0', '\0S\0H\0A\0R\0A\0N\0 \0 \0 \0T\0H\0A\0P\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\02\02\07\09\00\01\01\06\08\05\01\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\02\04\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\00\08\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\02\05\07\08\0', '\0P\0A\0P\0P\0U\0 \0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\02\08\08\01\01\06\03\02\00\00\08\07\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\02\00\09\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\03\09\01\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\03\06\06\0', '\0J\0E\0N\0I\0F\0E\0R\0 \0 \0R\0A\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\00\08\00\07\01\03\08\05\06\06\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\00\09\06\07\02\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\04\05\03\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\09\02\03\0', '\0R\0I\0T\0A\0 \0 \0D\0E\0V\0I\0 \0P\0R\0A\0S\0A\0D\0 \0*\0*\01\02\00\00\00\00\08\06\03\09\02\03\0.\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\04\00\02\07\08\01\04\08\04\07\05\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\01\00\09\03\09\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\03\08\01\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\04\03\09\03\0', '\0R\0A\0J\0E\0N\0D\0R\0A\0 \0 \0 \0P\0S\0D\0 \0 \0 \0V\0E\0R\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\09\08\06\04\07\01\04\02\03\09\01\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\01\01\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\00\05\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\07\05\05\04\0', '\0U\0M\0A\0 \0 \0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\08\05\04\09\00\08\06\04\00\07\01\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\02\01\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\00\05\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\07\07\01\04\02\0', '\0L\0A\0X\0M\0I\0 \0S\0H\0A\0R\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\07\04\04\06\08\04\03\05\04\04\00\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\05\05\03\06\05\08\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\05\09\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\09\07\09\01\09\0', '\0D\0A\0W\0A\0 \0 \0 \0N\0A\0R\0B\0U\0 \0 \0S\0H\0E\0R\0P\0A\0 \0/\0B\0E\0N\0J\0O\0 \0 \0 \0S\0H\0E\0R\0P\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\08\09\09\08\09\07\07\00\05\03\03\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\09\09\03\02\06\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\05\00\09\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\00\05\05\07\09\0', '\0S\0U\0S\0H\0M\0A\0 \0 \0P\0R\0A\0D\0H\0A\0N\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\01\07\03\06\03\04\04\03\07\08\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\00\09\02\06\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\00\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\06\05\05\08\0', '\0P\0R\0I\0T\0I\0 \0 \0 \0G\0O\0Y\0A\0L\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\06\08\01\03\01\03\06\08\03\04\01\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\00\02\08\00\04\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\06\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\09\05\02\06\0', '\0M\0I\0N\0G\0M\0A\0 \0 \0L\0E\0P\0C\0H\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\09\07\04\05\00\04\02\07\02\05\00\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\02\07\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\07\03\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\09\05\03\07\0', '\0K\0R\0I\0S\0H\0N\0A\0 \0 \0 \0B\0A\0H\0A\0D\0U\0R\0 \0 \0G\0U\0R\0U\0N\0G\0/\0S\0U\0S\0H\0I\0L\0A\0 \0 \0G\0U\0R\0U\0N\0G\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\02\00\00\08\06\08\03\04\02\07\01\02\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\02\06\05\07\06\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\05\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\09\06\00\05\0', '\0B\0I\0N\0D\0I\0Y\0A\0 \0 \0 \0M\0A\0N\0G\0E\0R\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\01\08\09\03\04\02\02\07\07\09\09\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\01\06\07\02\07\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\09\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\02\00\01\07\07\0', '\0S\0A\0J\0R\0A\0 \0K\0H\0A\0T\0U\0N\0 \0A\0N\0S\0A\0R\0I\0', '\03\03\08\0.\02\09\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\07\04\00\08\02\00\04\07\07\02\00\03\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\00\06\04\09\06\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\01\07\09\01\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\02\09\08\00\06\0', '\0J\0I\0T\0 \0B\0A\0H\0A\0D\0U\0R\0 \0R\0A\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\08\01\01\04\01\09\09\00\06\05\05\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\02\02\00\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\04\01\00\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\03\02\03\02\01\0', '\0K\0A\0M\0A\0L\0A\0 \0 \0 \0 \0T\0A\0M\0A\0N\0G\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\09\09\04\00\06\07\05\09\09\01\03\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\03\09\05\00\00\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\09\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\01\03\02\01\03\02\0', '\0C\0H\0O\0W\0R\0A\0S\0T\0A\0 \0S\0A\0N\0G\0A\0M\0 \0C\0L\0U\0B\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\01\00\00\05\05\05\03\03\03\03\09\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\00\06\08\07\08\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\04\01\01\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\01\06\01\09\05\0', '\0P\0A\0D\0M\0A\0 \0 \0B\0H\0U\0J\0E\0L\0 \0(\0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0)\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\02\03\02\00\02\02\07\08\00\02\05\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\02\02\05\09\05\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\06\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\01\06\02\02\00\0', '\0S\0I\0T\0A\0 \0 \0 \0G\0H\0A\0T\0R\0A\0J\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\07\07\05\06\03\06\09\03\08\03\03\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\00\09\02\07\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\06\09\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\02\04\05\05\09\0', '\0T\0O\0P\0D\0E\0N\0 \0 \0T\0S\0H\0E\0R\0I\0N\0G\0 \0 \0 \0S\0H\0E\0R\0P\0A\0 \0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0.\01\02\00\00\00\00\07\02\04\05\05\09\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\04\01\08\06\03\09\07\07\09\08\04\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\09\04\07\06\03\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\05\00\07\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\03\01\09\04\01\0', '\0R\0A\0M\0 \0 \0 \0B\0H\0A\0G\0W\0A\0N\0 \0 \0S\0I\0N\0G\0H\0.\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\04\07\09\07\01\01\07\06\05\00\04\06\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\03\08\02\01\07\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\06\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\03\09\09\00\06\0', '\0B\0I\0N\0D\0U\0 \0T\0H\0A\0P\0A\0 \0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0:\01\02\00\00\00\00\07\03\09\09\00\06\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\00\03\03\00\02\05\02\03\04\08\02\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\02\01\00\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\03\08\05\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\06\01\03\04\02\0', '\0M\0E\0E\0N\0A\0 \0T\0H\0A\0K\0U\0R\0I\0 \0 \0(\0L\0O\0A\0N\0 \0I\0D\0-\08\02\03\0)\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\02\07\03\09\05\02\07\05\03\01\03\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\02\05\01\02\03\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\04\01\07\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\09\07\03\09\01\0', '\0G\0A\0N\0G\0A\0R\0A\0M\0 \0S\0U\0B\0B\0A\0', '\03\03\08\0.\02\09\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\01\08\02\06\07\01\02\09\02\05\05\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\01\07\05\07\06\02\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\01\07\09\08\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\00\09\05\09\01\0', '\0P\0R\0A\0D\0I\0P\0 \0 \0S\0H\0I\0L\0A\0L\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\07\06\01\09\01\02\07\09\09\07\08\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\01\05\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\00\05\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\00\09\06\06\09\0', '\0R\0I\0T\0A\0 \0 \0 \0T\0A\0M\0A\0N\0G\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\00\00\04\08\05\09\05\05\08\04\09\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\03\06\02\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\08\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\00\09\06\08\01\0', '\0S\0H\0I\0V\0L\0A\0L\0 \0 \0 \0C\0H\0H\0E\0T\0R\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\04\07\06\00\03\07\00\00\06\03\07\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\03\05\07\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\07\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\02\05\08\01\09\0', '\0S\0U\0C\0H\0I\0T\0A\0 \0 \0 \0L\0O\0H\0A\0R\0 \0*\0*\0C\0B\0S\0 \0 \0A\0/\0C\0 \0 \0N\0O\0 \0.\01\02\00\00\00\00\08\02\05\08\01\09\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\09\05\08\04\02\01\07\06\05\09\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\00\09\02\04\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\01\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\03\01\05\05\00\0', '\0S\0A\0N\0J\0A\0Y\0 \0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0 \0*\0*\0B\0O\0O\0K\0 \0I\0I\0*\0*\0*\0C\0/\0O\0-\0R\0A\0D\0H\0I\0K\0A\0 \0R\0A\0N\0A\0.\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\01\01\04\08\01\06\05\05\02\07\00\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\01\03\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\05\02\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\03\08\07\07\01\0', '\0R\0A\0J\0E\0E\0P\0 \0 \0 \0 \0R\0A\0I\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\04\02\05\01\07\07\04\05\00\01\02\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\02\02\05\09\05\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\05\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\03\08\07\09\03\0', '\0R\0A\0M\0A\0 \0 \0A\0D\0H\0I\0K\0A\0R\0I\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\02\04\04\02\00\00\03\08\03\03\01\04\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\00\09\02\04\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\07\02\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\04\00\08\09\03\0', '\0S\0A\0N\0G\0I\0T\0A\0 \0 \0D\0A\0N\0G\0A\0L\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\08\02\06\02\06\02\05\08\06\08\08\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\05\01\06\00\08\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\08\02\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\04\08\03\04\09\0', '\0R\0I\0T\0A\0 \0 \0 \0S\0U\0B\0B\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\06\00\01\05\04\09\01\06\01\09\07\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\00\00\07\07\07\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\08\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\05\09\04\06\0', '\0B\0I\0S\0H\0A\0L\0 \0 \0S\0I\0N\0G\0H\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\07\07\07\07\09\08\01\01\08\09\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\01\09\05\04\06\00\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\08\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\01\04\09\08\02\0', '\0H\0A\0R\0I\0 \0 \0S\0H\0A\0N\0K\0A\0R\0 \0 \0S\0I\0N\0G\0H\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\06\09\00\07\03\03\04\00\09\09\05\04\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\07\09\04\02\05\05\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\01\06\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\01\06\01\03\09\0', '\0N\0I\0K\0I\0T\0A\0 \0T\0R\0I\0K\0H\0A\0T\0R\0I\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\05\00\09\02\06\02\06\07\06\03\09\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\06\02\02\01\06\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\02\09\06\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\02\01\00\06\09\0', '\0P\0R\0A\0M\0I\0L\0A\0 \0 \0 \0S\0U\0B\0B\0A\0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0.\0N\0O\0.\01\02\00\00\00\00\07\02\01\00\06\09\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\09\09\05\04\06\03\08\01\07\00\04\00\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\06\02\02\01\07\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\02\09\06\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\04\01\06\05\04\0', '\0L\0A\0X\0M\0I\0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0 \0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0:\01\02\00\00\00\00\07\04\01\06\05\04\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\08\01\04\03\02\02\04\04\07\03\09\00\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\09\04\00\01\04\03\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\04\03\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\06\01\03\05\03\0', '\0R\0U\0D\0R\0A\0 \0L\0I\0M\0B\0U\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\05\02\02\05\02\00\04\07\08\02\04\00\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\09\04\00\01\05\02\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\08\02\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\09\05\03\01\06\0', '\0P\0H\0U\0L\0 \0M\0A\0Y\0A\0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\09\01\02\02\08\02\05\03\05\09\04\04\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\06\02\06\03\07\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\07\01\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\09\05\04\05\02\0', '\0H\0E\0M\0 \0K\0U\0M\0A\0R\0I\0 \0B\0H\0U\0J\0E\0L\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\03\02\06\08\07\08\04\07\09\08\04\08\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\06\00\04\05\01\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\07\02\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\00\03\00\05\05\0', '\0M\0E\0E\0R\0A\0 \0 \0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\08\01\01\06\04\02\01\06\01\04\02\07\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\07\09\08\07\01\07\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\01\06\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\06\00\08\06\0', '\0T\0E\0K\0 \0 \0 \0B\0A\0H\0A\0D\0U\0R\0 \0 \0 \0D\0A\0R\0N\0A\0L\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\03\06\01\09\02\04\08\04\04\02\05\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\04\04\06\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\04\03\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\06\08\02\05\0', '\0P\0U\0N\0Y\0A\0 \0 \0K\0U\0M\0A\0R\0I\0 \0K\0H\0A\0W\0A\0S\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\02\05\05\02\06\05\08\02\09\07\09\03\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\02\08\05\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\07\08\02\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\01\02\04\05\0', '\0B\0I\0N\0O\0D\0 \0S\0H\0A\0H\0U\0 \0&\0 \0S\0E\0E\0M\0A\0 \0S\0H\0A\0H\0U\0', '\02\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\08\05\09\04\09\09\05\07\02\06\04\01\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\00\09\09\03\00\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\06\05\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\02\04\02\0', '\0S\0U\0S\0H\0I\0L\0A\0 \0 \0T\0A\0M\0A\0N\0G\0 \0(\0 \0M\0O\0K\0T\0A\0N\0)\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\08\09\01\00\02\09\06\09\06\04\07\06\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\04\04\02\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\03\08\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\07\02\06\04\03\0', '\0B\0I\0N\0O\0D\0 \0 \0 \0C\0H\0H\0E\0T\0R\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\02\03\03\07\00\07\06\06\00\01\04\01\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\04\03\08\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\04\04\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\07\09\04\03\04\0', '\0R\0A\0J\0U\0N\0A\0 \0 \0 \0C\0H\0H\0E\0T\0R\0I\0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\09\00\07\01\00\02\03\00\02\06\01\01\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\09\01\04\00\02\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\04\09\02\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\08\01\09\07\06\0', '\0P\0H\0U\0R\0B\0A\0 \0 \0 \0S\0H\0E\0R\0P\0A\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\02\08\09\05\09\07\09\08\04\08\09\0', '\0 \0', '\0 \0', '\09\00\08\00\01\09\09\09\06\05\09\09\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\00\04\02\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\06\05\00\03\0', '\0A\0S\0H\0A\0 \0G\0U\0P\0T\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\01\03\09\03\04\05\09\08\03\00\05\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\00\03\09\03\07\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\01\07\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\04\06\06\04\00\0', '\0S\0A\0R\0M\0I\0L\0A\0 \0 \0T\0R\0I\0K\0H\0A\0T\0R\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\03\02\01\01\09\00\06\05\06\08\02\00\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\04\04\06\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\06\04\02\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\04\06\08\02\02\0', '\0B\0H\0A\0G\0I\0R\0A\0T\0H\0 \0 \0 \0 \0S\0A\0H\0U\0', '\02\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\04\07\05\08\06\01\07\08\02\04\05\08\0', '\0 \0', '\0 \0', '\09\00\08\00\01\08\00\02\07\07\02\08\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\02\02\03\04\00\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\05\00\03\03\09\0', '\0B\0H\0U\0P\0E\0N\0D\0R\0A\0 \0K\0U\0M\0A\0R\0 \0S\0U\0B\0B\0A\0 \0(\0L\0I\0M\0B\0U\0)\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\04\03\00\08\09\01\01\03\06\05\06\04\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\04\03\02\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\05\07\05\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\01\00\07\05\04\01\01\0', '\0D\0A\0W\0A\0 \0 \0L\0A\0M\0U\0 \0 \0B\0H\0U\0T\0I\0A\0 \0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\00\09\08\01\02\03\08\04\05\09\07\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\03\00\00\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\07\01\02\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\00\05\09\0', '\0T\0S\0H\0E\0R\0I\0N\0G\0 \0B\0H\0U\0T\0I\0A\0*\0*\0*\0A\0C\0-\0 \0N\0O\0-\0 \01\04\08\00\00\02\00\03\01\07\03\06\0*\0*\0*\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\03\03\08\05\07\08\07\03\09\05\08\08\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\00\07\03\00\05\05\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\08\07\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\05\00\03\09\05\0', '\0L\0H\0A\0M\0U\0 \0 \0A\0N\0J\0U\0 \0B\0H\0U\0T\0I\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\04\06\01\09\00\00\04\08\05\02\09\01\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\09\03\01\00\09\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\08\07\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\03\08\00\05\06\0', '\0N\0I\0R\0M\0A\0L\0A\0 \0T\0A\0M\0A\0N\0G\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\04\08\01\01\08\07\00\01\01\03\07\07\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\01\07\01\09\09\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\09\03\00\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\01\03\03\02\00\0', '\0C\0H\0E\0N\0 \0C\0H\0I\0E\0N\0 \0Y\0U\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\04\01\07\09\02\09\07\04\05\01\01\04\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\09\03\01\01\07\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\09\09\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\04\04\01\07\0', '\0S\0U\0K\0L\0A\0L\0 \0 \0 \0D\0A\0R\0J\0E\0E\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\02\06\08\01\00\02\08\03\02\07\00\02\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\09\03\02\02\04\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\01\02\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\03\02\08\06\0', '\0S\0H\0O\0V\0A\0 \0N\0I\0R\0O\0U\0L\0A\0', '\02\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\06\09\08\00\07\06\08\04\01\08\08\03\0', '\0 \0', '\0 \0', '\0C\00\01\01\09\01\02\08\05\00\01\01\08\0/\0C\0P\0S\0M\0S\0A\0X\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\06\04\08\00\03\0', '\0L\0O\0S\0A\0N\0G\0 \0D\0O\0M\0A\0 \0L\0A\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\02\01\01\02\03\05\07\05\06\02\04\00\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\00\02\06\06\01\09\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\07\05\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\02\04\04\06\08\0', '\0R\0A\0J\0U\0 \0 \0M\0U\0K\0H\0I\0A\0 \0*\0*\0*\0C\0B\0S\0 \0A\0C\0C\0.\0N\0O\0.\01\02\00\00\00\00\07\02\04\04\06\08\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\06\01\08\04\07\07\04\02\07\02\08\02\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\09\03\02\03\01\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\01\03\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\07\06\01\04\00\00\0', '\0S\0A\0N\0C\0H\0A\0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\07\08\01\01\05\01\09\02\05\00\06\09\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\01\09\04\08\01\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\01\03\09\01\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\00\09\06\00\03\0', '\0A\0R\0P\0A\0N\0 \0 \0 \0 \0M\0U\0K\0H\0I\0A\0*\0*\0C\0B\0S\0 \0 \0A\0/\0C\0 \0 \0N\0O\0.\0 \01\02\00\00\00\00\08\00\09\06\00\03\0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\09\06\05\05\07\03\01\07\02\01\09\04\0', '\0 \0', '\0 \0', '\09\01\06\00\01\08\09\05\08\00\03\08\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\04\02\02\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\08\05\06\01\00\00\0', '\0A\0N\0I\0T\0A\0 \0 \0 \0B\0I\0S\0W\0A\0K\0A\0R\0M\0A\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\05\04\04\03\00\02\05\02\06\08\00\06\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\09\03\02\02\08\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\01\03\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\01\0', '\01\02\00\00\00\00\09\04\06\07\05\03\0', '\0M\0A\0N\0O\0J\0 \0 \0 \0S\0H\0A\0H\0U\0', '\02\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\03\07\04\07\02\07\06\00\07\00\05\02\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\00\08\03\09\08\07\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\02\03\02\05\02\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\09\00\02\03\07\0', '\0K\0A\0R\0U\0N\0A\0 \0T\0A\0M\0A\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\02\00\01\00\06\09\08\06\02\04\07\06\0', '\0 \0', '\0 \0', '\09\00\09\00\01\08\02\01\01\06\00\00\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\07\09\09\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\05\00\00\02\0', '\0K\0A\0L\0P\0A\0N\0A\0 \0L\0I\0M\0B\0U\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\03\01\07\08\00\06\05\08\01\00\03\00\0', '\0 \0', '\0 \0', '\09\00\09\00\01\08\03\05\09\07\08\04\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\00\02\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\03\03\02\05\0', '\0K\0A\0Y\0S\0I\0N\0G\0H\0 \0S\0H\0E\0R\0P\0A\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0U\0I\0H\0', '\03\01\08\09\02\01\01\01\06\07\03\00\0', '\0 \0', '\0 \0', '\09\00\09\00\01\08\03\05\09\07\07\02\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\00\00\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\00\06\05\04\03\06\0', '\0M\0I\0K\0M\0A\0 \0L\0E\0P\0C\0H\0A\0 \0', '\04\05\00\00\0', '\02\00\01\09\0-\00\01\0-\01\01\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\05\08\08\05\08\07\03\09\0', '\06\03\05\04\00\05\00\00\00\08\00\03\0', '\0I\0C\0I\0C\00\00\00\06\03\05\04\0', '\0S\0H\0A\0N\0T\0I\0P\0A\0T\0H\0 \0F\0O\0U\0N\0D\0A\0T\0I\0O\0N\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\00\06\05\04\06\09\0', '\0D\0U\0R\0G\0A\0 \0C\0H\0H\0E\0T\0R\0I\0 \0', '\06\05\00\00\0', '\02\00\01\09\0-\00\01\0-\01\01\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\05\08\09\02\09\07\01\06\0', '\06\03\05\04\00\05\00\00\00\08\00\03\0', '\0I\0C\0I\0C\00\00\00\06\03\05\04\0', '\0S\0H\0A\0N\0T\0I\0P\0A\0T\0H\0 \0F\0O\0U\0N\0D\0A\0T\0I\0O\0N\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\00\06\05\04\04\07\0', '\0C\0H\0A\0Y\0A\0D\0U\0R\0 \0L\0E\0P\0C\0H\0A\0 \0', '\05\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\01\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\05\08\08\05\07\09\06\03\0', '\06\03\05\04\00\05\00\00\00\08\00\03\0', '\0I\0C\0I\0C\00\00\00\06\03\05\04\0', '\0S\0H\0A\0N\0T\0I\0P\0A\0T\0H\0 \0F\0O\0U\0N\0D\0A\0T\0I\0O\0N\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\08\08\06\07\01\0', '\0D\0E\0V\0 \0K\0U\0M\0A\0R\0I\0 \0G\0U\0R\0U\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\07\00\09\06\01\03\09\03\00\06\05\04\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\06\03\00\03\00\02\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\02\04\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\00\03\09\04\01\0', '\0S\0A\0N\0T\0A\0 \0K\0U\0M\0A\0R\0 \0T\0A\0M\0A\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\08\08\08\03\00\04\01\05\05\07\03\00\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\08\08\03\07\09\03\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\02\05\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\00\03\06\09\0', '\0R\0A\0T\0N\0A\0S\0W\0A\0R\0I\0 \0R\0A\0I\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\03\06\03\06\05\05\08\08\00\01\02\04\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\06\08\00\03\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\03\08\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\00\04\03\08\0', '\0P\0H\0U\0L\0M\0A\0Y\0A\0 \0B\0H\0U\0T\0I\0A\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\04\04\01\02\00\00\01\01\03\00\02\02\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\06\08\09\02\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\03\09\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\05\02\05\05\0', '\0S\0I\0C\0H\0A\0L\0 \0K\0H\0A\0W\0A\0S\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\03\08\09\04\05\05\03\05\05\02\07\02\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\00\04\09\05\09\03\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\05\00\01\08\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\02\06\09\08\01\0', '\0H\0E\0M\0 \0K\0U\0M\0A\0R\0I\0 \0R\0A\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\07\01\00\06\04\00\04\06\08\02\05\06\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\09\00\09\01\08\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\09\03\01\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\00\09\03\07\09\0', '\0S\0H\0A\0R\0M\0I\0L\0A\0 \0B\0I\0S\0H\0W\0A\0K\0A\0R\0M\0A\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\02\02\07\09\00\02\08\03\04\07\03\03\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\08\09\00\02\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\06\03\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\05\00\03\05\0', '\0S\0U\0R\0E\0K\0H\0A\0 \0R\0A\0I\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\05\02\07\01\03\01\08\05\06\03\00\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\06\07\09\04\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\03\09\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\05\04\01\01\0', '\0K\0E\0D\0A\0R\0 \0S\0A\0R\0K\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\07\03\02\04\07\02\09\09\08\00\02\09\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\08\08\03\07\07\01\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\07\03\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\05\04\02\02\0', '\0H\0A\0R\0K\0A\0 \0B\0A\0H\0A\0D\0U\0R\0 \0K\0H\0A\0W\0A\0S\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\05\00\06\04\03\06\02\08\09\00\05\02\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\06\01\02\06\07\05\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\04\06\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\05\00\07\06\09\0', '\0S\0A\0N\0T\0O\0K\0I\0 \0S\0H\0E\0R\0P\0A\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\06\07\09\05\04\06\02\06\08\05\05\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\08\03\06\06\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\09\05\09\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\08\08\01\03\08\0', '\0K\0A\0P\0I\0L\0 \0G\0U\0R\0U\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\08\00\06\09\00\08\09\09\08\03\09\05\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\08\08\03\07\07\07\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\02\04\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\08\06\07\03\01\0', '\0J\0A\0N\0U\0K\0I\0 \0C\0H\0H\0E\0T\0R\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\07\02\05\04\04\02\09\03\00\02\01\02\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\07\05\00\00\05\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\05\09\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\02\07\05\00\05\0', '\0P\0U\0S\0P\0A\0 \0R\0A\0I\0 \0P\0R\0A\0D\0H\0A\0N\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\04\00\07\06\03\01\03\09\01\08\04\04\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\00\05\05\01\07\04\06\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\09\00\05\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\03\05\01\08\0', '\0S\0A\0R\0I\0M\0A\0Y\0A\0 \0T\0A\0M\0A\0N\0G\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0A\0C\0H\0', '\0 \0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\06\09\03\00\04\0?\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\09\01\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\01\05\03\00\03\08\0', '\0M\0E\0E\0N\0A\0 \0Y\0E\0L\0M\0O\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\04\07\06\04\03\01\08\01\03\06\05\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\08\08\08\07\04\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\06\02\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0');
INSERT INTO `tt_csp_account` (`pacs_id`, `acc_no`, `name`, `amount`, `trans_dt`, `trans_type`, `utr_no`, `sender_acc_no`, `sender_ifsc_code`, `sender_name`) VALUES
('\02\0', '\01\02\00\00\00\00\07\08\08\05\03\06\0', '\0S\0H\0E\0K\0H\0A\0R\0 \0G\0U\0R\0U\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\04\09\09\09\06\04\01\08\01\09\04\00\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\08\08\03\07\07\07\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\02\04\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\02\07\05\05\00\0', '\0M\0D\0.\0 \0A\0B\0D\0U\0L\0 \0H\0U\0S\0S\0A\0I\0N\0 \0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\09\06\09\07\03\06\08\01\03\07\05\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\03\04\06\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\04\07\04\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\01\06\08\09\04\02\0', '\0R\0A\0N\0J\0I\0T\0A\0 \0C\0H\0H\0E\0T\0R\0I\0 \0(\0G\0U\0R\0U\0N\0G\0)\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\05\02\05\07\02\05\09\03\07\03\00\08\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\04\09\08\02\04\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\08\09\09\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\01\01\09\01\04\04\0', '\0S\0A\0N\0T\0O\0S\0H\0 \0B\0A\0L\0M\0I\0K\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\02\00\03\09\07\01\04\04\08\03\08\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\00\08\05\09\04\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\06\01\00\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\08\05\00\03\0', '\0M\0A\0N\0I\0 \0P\0R\0A\0S\0A\0D\0 \0R\0A\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\03\00\07\09\08\02\09\05\08\04\04\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\02\06\00\02\06\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\06\06\02\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\08\04\04\05\0', '\0S\0A\0K\0U\0N\0 \0P\0R\0A\0D\0H\0A\0N\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\03\02\01\06\02\00\05\05\00\04\01\05\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\05\08\09\01\05\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\04\06\05\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\04\05\04\06\06\0', '\0M\0A\0N\0I\0K\0A\0 \0R\0A\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\02\06\09\02\07\03\09\02\05\03\03\06\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\02\00\07\04\07\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\08\06\08\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\07\05\05\08\0', '\0P\0R\0I\0N\0G\0L\0E\0 \0R\0A\0I\0 \0', '\02\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\07\08\07\09\00\06\03\02\09\06\04\01\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\06\08\00\06\03\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\07\06\04\02\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\07\05\05\08\0', '\0P\0R\0I\0N\0G\0L\0E\0 \0R\0A\0I\0 \0', '\02\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\07\08\07\09\00\06\03\02\09\06\04\01\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\04\06\08\00\06\03\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\06\02\00\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\05\04\00\04\0', '\0R\0A\0S\0H\0M\0I\0 \0R\0A\0I\0 \0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\07\03\05\00\07\01\03\05\09\03\01\02\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\06\00\06\01\08\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\07\00\06\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\00\02\07\08\0', '\0D\0U\0R\0G\0A\0 \0C\0H\0E\0T\0T\0R\0I\0I\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\05\00\07\04\02\07\07\02\03\04\09\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\05\07\02\07\04\00\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\02\02\03\07\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\09\03\04\07\06\0', '\0A\0M\0R\0I\0T\0A\0 \0T\0A\0M\0A\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\08\01\02\02\00\05\04\01\07\06\03\05\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\03\00\07\05\07\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\08\06\09\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\06\03\07\09\01\0', '\0B\0A\0B\0I\0N\0 \0L\0E\0P\0C\0H\0A\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\09\00\03\08\03\03\09\09\01\00\08\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\00\01\02\02\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\02\03\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\03\01\08\07\0', '\0M\0A\0N\0J\0U\0 \0L\0E\0P\0C\0H\0A\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\04\03\06\03\03\02\09\01\03\01\06\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\05\04\00\02\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\03\09\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\03\00\04\01\0', '\0L\0A\0T\0A\0 \0T\0A\0M\0A\0N\0G\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\06\07\04\07\06\03\09\02\02\07\04\04\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\02\04\05\04\00\03\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\07\08\03\09\05\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\09\05\00\07\08\01\0', '\0C\0H\0E\0J\0O\0N\0G\0 \0B\0H\0U\0T\0I\0A\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\09\01\07\06\06\00\00\00\00\02\09\07\0', '\0 \0', '\0 \0', '\09\04\07\05\05\01\04\02\04\0/\0B\0L\0P\0G\0C\0M\04\02\03\06\04\0D\0T\01\05\00\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\02\06\09\08\01\0', '\0H\0E\0M\0 \0K\0U\0M\0A\0R\0I\0 \0R\0A\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\01\00\06\04\00\04\06\08\02\05\06\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\06\06\04\06\03\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\05\00\00\01\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\01\00\02\09\00\0', '\0P\0R\0E\0M\0I\0K\0A\0 \0R\0A\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\02\08\06\07\08\08\00\00\09\05\07\05\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\09\03\09\00\02\03\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\01\00\03\07\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\06\06\02\08\02\0', '\0A\0B\0I\0R\0A\0J\0 \0B\0H\0A\0N\0D\0A\0R\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\07\05\01\07\05\02\00\08\00\01\07\04\0', '\0 \0', '\0 \0', '\09\04\07\08\08\07\02\04\06\0/\0B\0L\0P\0G\0C\0M\04\02\03\05\09\0D\0T\01\05\00\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\04\00\00\01\0', '\0M\0A\0N\0I\0K\0A\0 \0M\0O\0K\0T\0A\0N\0 \0L\0I\0M\0B\0U\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\04\08\06\08\03\06\08\03\08\03\08\00\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\09\03\07\06\05\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\05\00\00\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\03\02\04\05\0', '\0N\0U\0N\0U\0K\0I\0 \0D\0E\0W\0A\0N\0 \0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\08\05\06\00\03\02\04\00\02\03\05\03\0', '\0 \0', '\0 \0', '\09\01\05\00\01\08\08\06\07\03\02\06\04\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\02\06\01\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\06\08\00\06\00\00\0', '\0D\0U\0R\0G\0A\0 \0K\0U\0M\0A\0R\0 \0C\0H\0H\0E\0T\0R\0I\0 \0', '\04\05\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0A\0C\0H\0', '\0 \0', '\0 \0', '\0 \0', '\0C\00\01\01\09\01\02\06\04\03\07\09\08\0?\0P\0M\0A\0Y\0G\0 \0B\0T\0N\0E\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\08\07\07\09\01\04\0', '\0D\0I\0W\0A\0S\0H\0 \0M\0U\0K\0H\0I\0A\0 \0', '\04\05\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0A\0C\0H\0', '\0 \0', '\0 \0', '\0 \0', '\0C\00\01\01\09\01\02\06\04\03\07\09\07\0?\0P\0M\0A\0Y\0G\0 \0B\0T\0N\0E\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\04\00\09\03\07\07\0', '\0U\0R\0G\0E\0N\0 \0S\0H\0E\0R\0P\0A\0 \0', '\04\05\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0A\0C\0H\0', '\0 \0', '\0 \0', '\0 \0', '\0C\00\01\01\09\01\02\07\00\01\07\00\02\0?\0P\0M\0A\0Y\0G\0 \0B\0T\0N\0E\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\04\01\02\02\04\0', '\0S\0A\0R\0I\0T\0A\0 \0P\0R\0A\0D\0H\0A\0N\0 \0', '\02\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\04\04\04\00\07\05\06\08\07\00\02\09\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\00\02\08\07\00\03\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\08\07\09\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\01\00\03\06\06\03\00\0', '\0P\0R\0A\0M\0I\0L\0A\0 \0T\0A\0M\0A\0N\0G\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\04\03\08\07\04\05\03\04\08\03\03\07\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\01\09\01\04\08\07\02\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\01\00\05\08\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\03\09\06\06\06\0', '\0A\0R\0J\0U\0N\0 \0K\0U\0M\0A\0R\0 \0R\0A\0I\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\04\06\09\08\08\08\01\08\00\09\01\03\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\00\09\09\01\01\05\03\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\04\04\08\01\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\02\0', '\01\02\00\00\00\00\07\09\03\03\00\07\0', '\0P\0R\0A\0M\0I\0L\0A\0 \0M\0U\0K\0H\0I\0A\0 \0L\0E\0P\0C\0H\0A\0 \0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\07\0', '\0U\0I\0H\0', '\06\04\06\04\04\09\04\06\08\05\03\07\0', '\0 \0', '\0 \0', '\09\01\06\00\01\09\00\07\01\08\09\00\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\01\00\05\09\04\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\03\0', '\01\02\00\00\00\01\00\09\04\06\00\04\0', '\0P\0R\0E\0E\0T\0A\0M\0 \0R\0A\0I\0', '\03\04\06\0.\08\06\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\03\02\01\01\03\06\09\03\04\02\03\07\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\06\05\09\06\08\01\05\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\02\09\00\04\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\04\0', '\01\02\00\00\00\00\03\03\07\03\06\06\0', '\0D\0A\0W\0A\0 \0B\0H\0U\0T\0I\0A\0', '\01\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\0U\00\00\00\00\00\00\05\06\06\02\05\01\05\04\00\0 \0 \0 \0 \0', '\01\05\01\06\07\00\01\01\07\00\0', '\0R\0B\0I\0S\00\0K\0L\0P\0A\00\01\0', '\0K\0A\0L\0I\0M\0P\0O\0N\0G\0 \0T\0R\0E\0A\0S\0U\0R\0Y\0 \0e\0P\0R\0A\0D\0A\0N\0 \0W\0E\0S\0T\0 \0'),
('\04\0', '\01\02\00\00\00\00\03\03\07\03\06\06\0', '\0D\0A\0W\0A\0 \0B\0H\0U\0T\0I\0A\0', '\09\05\00\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\0U\00\00\00\00\00\00\05\06\06\02\05\01\02\09\06\0 \0 \0 \0 \0', '\01\05\01\06\07\00\01\01\07\00\0', '\0R\0B\0I\0S\00\0K\0L\0P\0A\00\01\0', '\0K\0A\0L\0I\0M\0P\0O\0N\0G\0 \0T\0R\0E\0A\0S\0U\0R\0Y\0 \0e\0P\0R\0A\0D\0A\0N\0 \0W\0E\0S\0T\0 \0'),
('\04\0', '\01\02\00\00\00\00\06\00\01\07\03\00\0', '\0M\0A\0N\0 \0R\0A\0T\0I\0 \0B\0H\0U\0T\0I\0A\0', '\01\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\0U\00\00\00\00\00\00\05\06\06\02\05\01\05\04\04\0 \0 \0 \0 \0', '\01\05\01\06\07\00\01\01\07\00\0', '\0R\0B\0I\0S\00\0K\0L\0P\0A\00\01\0', '\0K\0A\0L\0I\0M\0P\0O\0N\0G\0 \0T\0R\0E\0A\0S\0U\0R\0Y\0 \0e\0P\0R\0A\0D\0A\0N\0 \0W\0E\0S\0T\0 \0'),
('\04\0', '\01\02\00\00\00\00\05\03\07\06\02\06\0', '\0T\0S\0H\0E\0R\0I\0N\0G\0 \0D\0O\0M\0A\0 \0B\0H\0U\0T\0I\0A\0', '\01\00\00\00\0', '\02\00\01\09\0-\00\01\0-\01\00\0', '\0N\0E\0F\0T\0/\0R\0T\0G\0S\0', '\0U\00\00\00\00\00\00\05\06\06\02\05\02\00\05\02\0 \0 \0 \0 \0', '\01\05\01\06\07\00\01\01\07\00\0', '\0R\0B\0I\0S\00\0K\0L\0P\0A\00\01\0', '\0K\0A\0L\0I\0M\0P\0O\0N\0G\0 \0T\0R\0E\0A\0S\0U\0R\0Y\0 \0e\0P\0R\0A\0D\0A\0N\0 \0W\0E\0S\0T\0 \0'),
('\04\0', '\01\02\00\00\00\00\08\01\03\05\09\07\0', '\0L\0A\0L\0I\0T\0A\0 \0R\0A\0I\0', '\03\03\08\0.\02\09\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\02\01\02\05\05\00\04\00\02\01\00\04\0', '\0 \0', '\0 \0', '\09\01\01\00\01\08\05\08\08\09\06\03\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\02\00\01\06\08\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\05\0', '\01\02\00\00\00\01\01\09\04\02\08\00\0', '\0D\0O\0L\0M\0A\0 \0T\0A\0M\0A\0N\0G\0-\0I\0I\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\06\01\04\07\03\03\03\05\01\01\05\05\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\09\03\03\06\01\09\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\01\07\05\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\05\0', '\01\02\00\00\00\01\03\03\06\03\02\08\0', '\0M\0U\0N\0N\0A\0 \0P\0O\0U\0D\0Y\0A\0L\0', '\02\03\04\0.\00\01\0', '\02\00\01\09\0-\00\01\0-\01\04\0', '\0U\0I\0H\0', '\03\07\06\07\00\03\07\07\04\08\09\05\0', '\0 \0', '\0 \0', '\09\01\02\00\01\08\09\09\03\03\06\09\01\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\00\08\01\07\03\09\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\05\0', '\01\02\00\00\00\00\07\04\05\09\02\02\0', '\0C\0H\0A\0N\0D\0R\0A\0 \0P\0R\0A\0S\0A\0D\0 \0B\0A\0J\0A\0G\0A\0I\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\09\04\08\09\02\06\01\06\08\00\01\01\0', '\0 \0', '\0 \0', '\09\01\04\00\01\08\06\08\07\08\06\05\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\08\00\07\03\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\05\0', '\01\02\00\00\00\00\08\04\06\02\04\09\0', '\0S\0A\0N\0G\0B\0I\0R\0 \0T\0A\0M\0A\0N\0G\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\05\0', '\0U\0I\0H\0', '\04\09\03\03\07\01\03\05\07\01\05\00\0', '\0 \0', '\0 \0', '\09\00\05\00\01\08\03\06\04\02\00\04\00\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\04\06\06\06\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0'),
('\05\0', '\01\02\00\00\00\00\09\02\01\09\02\01\0', '\0B\0A\0N\0U\0 \0P\0R\0A\0D\0H\0A\0N\0', '\03\03\04\0.\04\08\0', '\02\00\01\09\0-\00\01\0-\01\06\0', '\0U\0I\0H\0', '\03\05\09\09\07\06\02\01\05\02\05\01\0', '\0 \0', '\0 \0', '\09\01\02\00\01\09\01\09\00\02\08\06\08\0/\0I\0O\0C\0 \0R\0e\0f\0 \0N\0o\03\00\00\00\01\00\07\07\06\01\0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0 \0');

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
