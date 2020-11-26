-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2019 at 06:14 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malaysia`
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
-- Table structure for table `md_users`
--

CREATE TABLE `md_users` (
  `user_id` varchar(50) NOT NULL,
  `confirm_email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_psw` varchar(30) DEFAULT NULL,
  `user_type` char(1) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `user_status` char(1) NOT NULL DEFAULT 'A',
  `verify_stat` varchar(10) DEFAULT NULL,
  `email_verification_code` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_users`
--

INSERT INTO `md_users` (`user_id`, `confirm_email`, `password`, `confirm_psw`, `user_type`, `user_name`, `address`, `user_status`, `verify_stat`, `email_verification_code`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
('aaa', NULL, '$2y$10$xO3B6zdvpSM8qQbz6zFOveCI32Z7W5TqSHLDMh5f2RmO6uBm5wJF2', NULL, 'C', 'aaa', NULL, 'A', NULL, NULL, 'aaa', '2019-09-11 05:09:09', NULL, NULL),
('jjj', NULL, '$2y$10$S4ioidtB2D7U0YuBD6aTMOu2oHm3zH1WYmSTni1/2pxZjAafMPGva', NULL, 'C', 'jjj', NULL, 'A', NULL, NULL, 'jjj', '2019-09-11 04:09:09', NULL, NULL),
('meettan@gmail.com', NULL, '$2y$10$uuxsF26WtczkDJk6GdmKju55a7bpzD3BZU/lsxV169RwfvPw3VjXm', '$2y$10$2WT4C7Q3.ERzrA4QYqzNc.Y', 'O', '', NULL, 'A', NULL, NULL, 'meettan@gmail.com', '2019-09-17 12:09:09', NULL, NULL),
('raja.saha@synergicsoftek.com', NULL, '$2y$10$5tjb7FnaYXtB5vFGQklub.vgT1bAdwAbOD8LTM1Q4zQJlF.hJLCEK', '$2y$10$o4HIggK6nx8IIsYAENCstO4', 'O', '', NULL, 'A', NULL, 'aWOZu', 'raja.saha@synergicsoftek.com', '2019-09-17 05:09:09', NULL, NULL),
('rajasaha.ocp@gmail.com', NULL, '$2y$10$MeRc8NACCvaDPvMSgelUT.K5uI3HM/qWNBfcrv4tS/p6BYpSeXK96', '$2y$10$u0Lk9DNG9Xy9L8sia/gCsuT', 'O', '', NULL, 'A', NULL, NULL, 'rajasaha.ocp@gmail.com', '2019-09-17 02:09:09', NULL, NULL),
('sss', NULL, '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', NULL, 'C', 'VCCB', NULL, 'A', NULL, NULL, 'tan', '2019-01-16 02:01:01', NULL, NULL),
('sss1', NULL, '$2y$10$0Cq1bZw.SZo7Llqijo81bu2hb/niL5B/jzJ7dtIcWxjkzxYM45iVe', NULL, 'C', 'synergic ', NULL, 'A', NULL, NULL, 'sss1', '2019-09-12 12:09:09', NULL, NULL),
('sss2', NULL, '$2y$10$tU88NLrOdswqZL7aMPnxnOM6ZMW.QOyGum6LGUz9fABtYZSrpXjW6', NULL, 'O', '1133', NULL, 'A', NULL, NULL, 'sss', '2019-09-18 02:09:09', NULL, NULL),
('tan', NULL, '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', NULL, 'A', 'Tanmoy Mondal', NULL, 'A', NULL, NULL, 'sss', '2019-01-16 02:01:01', 'tan', '2019-01-16 03:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `td_application`
--

CREATE TABLE `td_application` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` char(1) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_status` char(1) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL,
  `Appl_no` varchar(50) NOT NULL,
  `org_type` varchar(100) DEFAULT NULL,
  `org_name` varchar(200) DEFAULT NULL,
  `org_address` varchar(50) DEFAULT NULL,
  `org_email` varchar(50) DEFAULT NULL,
  `org_web_add` varchar(50) DEFAULT NULL,
  `org_ph_no` varchar(20) DEFAULT NULL,
  `applcnt_dob` date DEFAULT NULL,
  `applcnt_pasprt_no` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `applcnt_ph_no` varchar(30) DEFAULT NULL,
  `applcnt_add` varchar(500) DEFAULT NULL,
  `applcnt_email` varchar(50) DEFAULT NULL,
  `kin_name` varchar(100) DEFAULT NULL,
  `kin_add` varchar(500) DEFAULT NULL,
  `kin_dob` date DEFAULT NULL,
  `kin_ph` varchar(30) DEFAULT NULL,
  `kin_email` varchar(50) DEFAULT NULL,
  `kin_gender` varchar(30) DEFAULT NULL,
  `kin_psprt_no` varchar(50) DEFAULT NULL,
  `applcnt_kin_reltion` varchar(50) DEFAULT NULL,
  `huit_exp_dt` date DEFAULT NULL,
  `med_exp_dt` date DEFAULT NULL,
  `h2s_exp_dt` date DEFAULT NULL,
  `oth_exp_dt` date DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_application`
--

INSERT INTO `td_application` (`user_id`, `password`, `user_type`, `user_name`, `user_status`, `created_by`, `created_dt`, `modified_by`, `modified_dt`, `Appl_no`, `org_type`, `org_name`, `org_address`, `org_email`, `org_web_add`, `org_ph_no`, `applcnt_dob`, `applcnt_pasprt_no`, `gender`, `applcnt_ph_no`, `applcnt_add`, `applcnt_email`, `kin_name`, `kin_add`, `kin_dob`, `kin_ph`, `kin_email`, `kin_gender`, `kin_psprt_no`, `applcnt_kin_reltion`, `huit_exp_dt`, `med_exp_dt`, `h2s_exp_dt`, `oth_exp_dt`, `remarks`) VALUES
('aaa', '$2y$10$xO3B6zdvpSM8qQbz6zFOveCI32Z7W5TqSHLDMh5f2RmO6uBm5wJF2', 'C', 'aaa', 'A', 'aaa', '2019-09-11 05:09:09', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('jjj', '$2y$10$S4ioidtB2D7U0YuBD6aTMOu2oHm3zH1WYmSTni1/2pxZjAafMPGva', 'C', 'jjj', 'A', 'jjj', '2019-09-11 04:09:09', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('sss', '$2y$10$eGKuX/L2FlA1P35HWFRexeOuvbXfyv0Nhq60pNZOq1xeDT0jeoMHm', 'C', 'VCCB', 'A', 'tan', '2019-01-16 02:01:01', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('tan', '$2y$10$iumxF5civQAQyQpnEnm8peg1lkm0iNgAw7Xw4HlteHRw2vMS8wy4y', 'A', 'Tanmoy Mondal', 'A', 'sss', '2019-01-16 02:01:01', 'tan', '2019-01-16 03:01:01', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('raja', '$2y$10$8ArDYgQJ.4RDSuz4Z0D80OkZY6Afvzpd8Eakt.t/q/E8x.E73XvLi', 'O', 'raja saha', 'A', 'raja', '2019-09-12 12:09:09', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('sss1', '$2y$10$0Cq1bZw.SZo7Llqijo81bu2hb/niL5B/jzJ7dtIcWxjkzxYM45iVe', 'C', 'synergic ', 'A', 'sss1', '2019-09-12 12:09:09', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'A', 'dfgfdg', 'rgdfgdfg', 'dffdg', 'dfgdfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 'A', 'ter', 'rgrgre', 'rgger', 'retert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', 'A', 'dffd', 'dfdf', 'dfdf', 'dfds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', 'C', 'r', 'dfrf', 'ffrf', 'erfr', 'rrr3333', '2019-09-01', 'rtret', 'M', 'r', 'rret', NULL, 'erter', 'reter', NULL, 'reter', 'reter', 'F', 'rtert', 'retert', '2019-10-01', '2019-09-08', NULL, '2019-09-23', 'rtertertr'),
('sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', 'A', 'vsdvdsv', 'dvsdvsdv', 'dvsdvsdv', 'sdvdsv', 'dvsdvsdv', '2019-09-19', 'vsdvsdvsdv', 'M', 'vvsdvdsvdsv', 'v svsdv', NULL, 'vsdvdsv', '', NULL, '', '', '', '', '', '0000-00-00', '0000-00-00', NULL, '0000-00-00', 'vsdvsdvsdv');

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
(1, '120001153742', 'YOJNA GURUNG', '1000.00', '2019-01-10', 'NEFT/RTGS', 'U000000566253072    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(1, '120000862476', 'SHAKUNTALA GURUNG', '334.48', '2019-01-10', 'UIH', '639920202093', ' ', ' ', '9090181843607/IOC Ref No3000075884                '),
(1, '120000863173', 'BIJAY  RAJAK', '334.48', '2019-01-10', 'UIH', '914496051376', ' ', ' ', '9090183619404/IOC Ref No3000105961                '),
(1, '120000864916', 'SUMITRA  SARKI', '334.48', '2019-01-10', 'UIH', '448101200781', ' ', ' ', '9090183620584/IOC Ref No3000075611                '),
(1, '120000900343', 'GAUTAM TAMANG', '334.48', '2019-01-10', 'UIH', '361035352601', ' ', ' ', '9090182353871/IOC Ref No3000106121                '),
(1, '120000919752', 'RAKESH   RAI', '334.48', '2019-01-10', 'UIH', '805971979513', ' ', ' ', '9090183619405/IOC Ref No3000105928                '),
(1, '120001049606', 'RUPA CHETTRI', '334.48', '2019-01-10', 'UIH', '755833257753', ' ', ' ', '9090182390949/IOC Ref No3000075883                '),
(1, '120001141341', 'CHANDAN GURUNG **** C-A.11339.', '334.48', '2019-01-10', 'UIH', '947389233201', ' ', ' ', '9090183619544/IOC Ref No3000105915                '),
(1, '120000838884', 'GIDON  RAI', '334.48', '2019-01-11', 'UIH', '246788834207', ' ', ' ', '9100184305623/IOC Ref No3000013361                '),
(1, '120000919672', 'RAM  BDR  MUKHIA', '334.48', '2019-01-11', 'UIH', '361291224143', ' ', ' ', '9100184289697/IOC Ref No3000013383                '),
(1, '120001069509', 'BINA   RASAILY', '234.01', '2019-01-14', 'ACH', ' ', ' ', ' ', '9110186927743?IOC Ref No3000080806                          '),
(1, '120000735107', 'KUNTI  AGHATA  BHUJEL ***CBS ACC.NO.120000735107', '234.01', '2019-01-14', 'UIH', '692138867238', ' ', ' ', '9120189819361/IOC Ref No3000078677                '),
(1, '120000735606', 'GENMIT LEPCHA  ***CBS ACC.NO:120000735606', '234.01', '2019-01-14', 'UIH', '763635381943', ' ', ' ', '9120189537458/IOC Ref No3000079453                '),
(1, '120000742284', 'TULSI PARIYAR  CBS ACC.NO.120000742284', '334.48', '2019-01-14', 'UIH', '448914407537', ' ', ' ', '9110188877912/IOC Ref No3000105708                '),
(1, '120000767901', 'TILAK BAHADUR BISWAKARMA', '338.29', '2019-01-14', 'UIH', '544654438413', ' ', ' ', '9120190072954/IOC Ref No3000121377                '),
(1, '120000768177', 'MALATI CHETTRI', '334.48', '2019-01-14', 'UIH', '779695501420', ' ', ' ', '9120190815016/IOC Ref No3000013722                '),
(1, '120000774011', 'JOHN   RAI **CBS .ACC. NO  120000774011', '334.48', '2019-01-14', 'UIH', '337117886385', ' ', ' ', '9120190436264/IOC Ref No3000076684                '),
(1, '120000792268', 'SANTA BAHADUR BISWAKARMA', '338.29', '2019-01-14', 'UIH', '972043879709', ' ', ' ', '9120189974505/IOC Ref No3000121373                '),
(1, '120000802948', 'BIKASH   GURUNG**CBS  NO 120000802948', '334.48', '2019-01-14', 'UIH', '967721320976', ' ', ' ', '9120190075940/IOC Ref No3000107435                '),
(1, '120000840441', 'SUBASH   RAI', '334.48', '2019-01-14', 'UIH', '935601384656', ' ', ' ', '9120190608733/IOC Ref No3000013703                '),
(1, '120000842596', 'JHARNA SHARKIE', '234.01', '2019-01-14', 'UIH', '626231500404', ' ', ' ', '9110186927895/IOC Ref No3000080827                '),
(1, '120000862737', 'CHANDRA MANI PRADHAN', '334.48', '2019-01-14', 'UIH', '661144046386', ' ', ' ', '9110188877583/IOC Ref No3000106535                '),
(1, '120000863195', 'KAUSHILA  BHUJEL', '234.01', '2019-01-14', 'UIH', '233335010969', ' ', ' ', '9120189692924/IOC Ref No3000081153                '),
(1, '120000872643', 'BINOD   CHHETRI', '334.48', '2019-01-14', 'UIH', '233707660141', ' ', ' ', '9110188879141/IOC Ref No3000076351                '),
(1, '120000920122', 'TARA PRADHAN', '338.29', '2019-01-14', 'UIH', '977399890317', ' ', ' ', '9120189974722/IOC Ref No3000121375                '),
(1, '120001069543', 'BASANTI   BASUR', '234.01', '2019-01-14', 'UIH', '868827259542', ' ', ' ', '9110186927769/IOC Ref No3000080807                '),
(1, '120001103122', 'MEENA   DARJI', '234.01', '2019-01-14', 'UIH', '439759429311', ' ', ' ', '9120189750254/IOC Ref No3000079159                '),
(1, '120001103133', 'BINU   DARJI', '234.01', '2019-01-14', 'UIH', '325197346046', ' ', ' ', '9120189750242/IOC Ref No3000079155                '),
(1, '120001141330', 'ARJUN KARKIDOLI', '334.48', '2019-01-14', 'UIH', '219811175075', ' ', ' ', '9130184409981/IOC Ref No3000107498                '),
(1, '120000714722', 'MAN  BDR  PRADHAN/SACHIN  PRADHAN', '334.48', '2019-01-15', 'UIH', '769375145698', ' ', ' ', '9140186605232/IOC Ref No3000076763                '),
(1, '120000714926', 'PREM BISWAKARMA', '334.48', '2019-01-15', 'UIH', '712513856011', ' ', ' ', '9050184116866/IOC Ref No3000105140                '),
(1, '120000855968', 'KHUSBOO  SUBBA', '234.01', '2019-01-15', 'UIH', '229529067179', ' ', ' ', '9140185615522/IOC Ref No3000082940                '),
(1, '120000855979', 'SANJIT  AGARWAL', '334.48', '2019-01-15', 'UIH', '906826730469', ' ', ' ', '9050182054246/IOC Ref No3000074773                '),
(1, '120000856008', 'KAILASH  SINGH', '334.48', '2019-01-15', 'UIH', '815312496620', ' ', ' ', '9140185341703/IOC Ref No3000076737                '),
(1, '120000856020', 'SHARAN   THAPA', '334.48', '2019-01-15', 'UIH', '522790116851', ' ', ' ', '9140186606248/IOC Ref No3000077082                '),
(1, '120000862578', 'PAPPU  PRADHAN', '334.48', '2019-01-15', 'UIH', '288116320087', ' ', ' ', '9050183642096/IOC Ref No3000103918                '),
(1, '120000863366', 'JENIFER  RAI', '334.48', '2019-01-15', 'UIH', '808071385660', ' ', ' ', '9050184096721/IOC Ref No3000104530                '),
(1, '120000863923', 'RITA  DEVI PRASAD **120000863923.', '334.48', '2019-01-15', 'UIH', '340278148475', ' ', ' ', '9050182109391/IOC Ref No3000103816                '),
(1, '120000864393', 'RAJENDRA   PSD   VERMA', '334.48', '2019-01-15', 'UIH', '398647142391', ' ', ' ', '9140186606116/IOC Ref No3000077051                '),
(1, '120000867554', 'UMA   BISWAKARMA', '334.48', '2019-01-15', 'UIH', '685490864071', ' ', ' ', '9140186606218/IOC Ref No3000077058                '),
(1, '120000877142', 'LAXMI SHARMA', '334.48', '2019-01-15', 'UIH', '874468435440', ' ', ' ', '9140185536582/IOC Ref No3000076594                '),
(1, '120000897919', 'DAWA   NARBU  SHERPA /BENJO   SHERPA', '334.48', '2019-01-15', 'UIH', '889989770533', ' ', ' ', '9050183993263/IOC Ref No3000105090                '),
(1, '120000905579', 'SUSHMA  PRADHAN', '234.01', '2019-01-15', 'UIH', '517363443780', ' ', ' ', '9050182409265/IOC Ref No3000078701                '),
(1, '120000916558', 'PRITI   GOYAL', '334.48', '2019-01-15', 'UIH', '868131368341', ' ', ' ', '9050182028049/IOC Ref No3000074760                '),
(1, '120000919526', 'MINGMA  LEPCHA', '334.48', '2019-01-15', 'UIH', '697450427250', ' ', ' ', '9140186606279/IOC Ref No3000076730                '),
(1, '120000919537', 'KRISHNA   BAHADUR  GURUNG/SUSHILA  GURUNG', '234.01', '2019-01-15', 'UIH', '200868342712', ' ', ' ', '9050182265769/IOC Ref No3000078752                '),
(1, '120000919605', 'BINDIYA   MANGER', '334.48', '2019-01-15', 'UIH', '318934227799', ' ', ' ', '9050184167271/IOC Ref No3000074794                '),
(1, '120000920177', 'SAJRA KHATUN ANSARI', '338.29', '2019-01-15', 'UIH', '740820477203', ' ', ' ', '9050182064961/IOC Ref No3000117910                '),
(1, '120000929806', 'JIT BAHADUR RAI', '334.48', '2019-01-15', 'UIH', '381141990655', ' ', ' ', '9050183642206/IOC Ref No3000104107                '),
(1, '120000932321', 'KAMALA    TAMANG', '234.01', '2019-01-15', 'UIH', '399406759913', ' ', ' ', '9050182395005/IOC Ref No3000078791                '),
(1, '120001132132', 'CHOWRASTA SANGAM CLUB', '334.48', '2019-01-15', 'UIH', '910055533339', ' ', ' ', '9050182068785/IOC Ref No3000104111                '),
(1, '120000716195', 'PADMA  BHUJEL (BISWAKARMA)', '234.01', '2019-01-15', 'UIH', '523202278025', ' ', ' ', '9050182225955/IOC Ref No3000078760                '),
(1, '120000716220', 'SITA   GHATRAJ', '234.01', '2019-01-15', 'UIH', '977563693833', ' ', ' ', '9050182409275/IOC Ref No3000078692                '),
(1, '120000724559', 'TOPDEN  TSHERING   SHERPA  ***CBS ACC.NO.120000724559', '334.48', '2019-01-15', 'UIH', '418639779840', ' ', ' ', '9050183947636/IOC Ref No3000075078                '),
(1, '120000731941', 'RAM   BHAGWAN  SINGH.', '334.48', '2019-01-15', 'UIH', '479711765046', ' ', ' ', '9050182382179/IOC Ref No3000074761                '),
(1, '120000739906', 'BINDU THAPA  ***CBS ACC.NO:120000739906', '334.48', '2019-01-15', 'UIH', '303302523482', ' ', ' ', '9050183642104/IOC Ref No3000103850                '),
(1, '120000761342', 'MEENA THAKURI  (LOAN ID-823)', '334.48', '2019-01-15', 'UIH', '527395275313', ' ', ' ', '9050182251235/IOC Ref No3000104177                '),
(1, '120000797391', 'GANGARAM SUBBA', '338.29', '2019-01-15', 'UIH', '518267129255', ' ', ' ', '9050181757629/IOC Ref No3000117981                '),
(1, '120000809591', 'PRADIP  SHILAL', '334.48', '2019-01-15', 'UIH', '876191279978', ' ', ' ', '9140186606156/IOC Ref No3000077057                '),
(1, '120000809669', 'RITA   TAMANG', '334.48', '2019-01-15', 'UIH', '300485955849', ' ', ' ', '9050183643620/IOC Ref No3000074784                '),
(1, '120000809681', 'SHIVLAL   CHHETRI', '334.48', '2019-01-15', 'UIH', '476037006370', ' ', ' ', '9050183643571/IOC Ref No3000074778                '),
(1, '120000825819', 'SUCHITA   LOHAR **CBS  A/C  NO .120000825819', '234.01', '2019-01-15', 'UIH', '595842176590', ' ', ' ', '9050182409244/IOC Ref No3000078710                '),
(1, '120000831550', 'SANJAY  BISWAKARMA **BOOK II***C/O-RADHIKA RANA.', '334.48', '2019-01-15', 'UIH', '611481655270', ' ', ' ', '9140186606138/IOC Ref No3000076524                '),
(1, '120000838771', 'RAJEEP    RAI', '234.01', '2019-01-15', 'UIH', '642517745012', ' ', ' ', '9050182225953/IOC Ref No3000078758                '),
(1, '120000838793', 'RAMA  ADHIKARI', '234.01', '2019-01-15', 'UIH', '244200383314', ' ', ' ', '9050182409245/IOC Ref No3000078721                '),
(1, '120000840893', 'SANGITA  DANGAL', '334.48', '2019-01-15', 'UIH', '982626258688', ' ', ' ', '9050184516084/IOC Ref No3000074820                '),
(1, '120000848349', 'RITA   SUBBA', '334.48', '2019-01-15', 'UIH', '660154916197', ' ', ' ', '9050182007779/IOC Ref No3000074785                '),
(1, '120000855946', 'BISHAL  SINGH', '334.48', '2019-01-15', 'UIH', '377779811890', ' ', ' ', '9050181954604/IOC Ref No3000074783                '),
(1, '120000714982', 'HARI  SHANKAR  SINGH', '334.48', '2019-01-16', 'UIH', '690733409954', ' ', ' ', '9150187942556/IOC Ref No3000077165                '),
(1, '120000716139', 'NIKITA TRIKHATRI', '234.01', '2019-01-16', 'UIH', '750926267639', ' ', ' ', '9150188622160/IOC Ref No3000082966                '),
(1, '120000721069', 'PRAMILA   SUBBA ***CBS AC.NO.120000721069', '234.01', '2019-01-16', 'UIH', '995463817040', ' ', ' ', '9150188622170/IOC Ref No3000082964                '),
(1, '120000741654', 'LAXMI BISWAKARMA  ***CBS ACC.NO:120000741654', '334.48', '2019-01-16', 'UIH', '814322447390', ' ', ' ', '9150189401439/IOC Ref No3000108438                '),
(1, '120000761353', 'RUDRA LIMBU', '334.48', '2019-01-16', 'UIH', '522520478240', ' ', ' ', '9150189401526/IOC Ref No3000108827                '),
(1, '120000795316', 'PHUL MAYA BISWAKARMA', '334.48', '2019-01-16', 'UIH', '912282535944', ' ', ' ', '9150188626372/IOC Ref No3000013719                '),
(1, '120000795452', 'HEM KUMARI BHUJEL', '334.48', '2019-01-16', 'UIH', '326878479848', ' ', ' ', '9150188604510/IOC Ref No3000013721                '),
(1, '120000803055', 'MEERA   PRADHAN', '334.48', '2019-01-16', 'UIH', '811642161427', ' ', ' ', '9150187987176/IOC Ref No3000077163                '),
(1, '120000856086', 'TEK   BAHADUR   DARNAL', '334.48', '2019-01-16', 'UIH', '736192484425', ' ', ' ', '9120191904465/IOC Ref No3000076437                '),
(1, '120000856825', 'PUNYA  KUMARI KHAWAS', '334.48', '2019-01-16', 'UIH', '255265829793', ' ', ' ', '9120191902853/IOC Ref No3000107828                '),
(1, '120000861245', 'BINOD SHAHU & SEEMA SHAHU', '234.48', '2019-01-16', 'UIH', '859499572641', ' ', ' ', '9150188099307/IOC Ref No3000108652                '),
(1, '120000863242', 'SUSHILA  TAMANG ( MOKTAN)', '334.48', '2019-01-16', 'UIH', '891029696476', ' ', ' ', '9120191904426/IOC Ref No3000076388                '),
(1, '120000872643', 'BINOD   CHHETRI', '334.48', '2019-01-16', 'UIH', '233707660141', ' ', ' ', '9120191904389/IOC Ref No3000076441                '),
(1, '120000879434', 'RAJUNA   CHHETRI', '346.86', '2019-01-16', 'UIH', '907102302611', ' ', ' ', '9150188914025/IOC Ref No3000044928                '),
(1, '120000881976', 'PHURBA   SHERPA', '234.01', '2019-01-16', 'UIH', '728959798489', ' ', ' ', '9080199965994/IOC Ref No3000080429                '),
(1, '120000916503', 'ASHA GUPTA', '334.48', '2019-01-16', 'UIH', '713934598305', ' ', ' ', '9150188039375/IOC Ref No3000077172                '),
(1, '120000946640', 'SARMILA  TRIKHATRI', '334.48', '2019-01-16', 'UIH', '321190656820', ' ', ' ', '9120191904468/IOC Ref No3000076424                '),
(1, '120000946822', 'BHAGIRATH    SAHU', '234.48', '2019-01-16', 'UIH', '475861782458', ' ', ' ', '9080180277286/IOC Ref No3000223402                '),
(1, '120000950339', 'BHUPENDRA KUMAR SUBBA (LIMBU)', '334.48', '2019-01-16', 'UIH', '430891136564', ' ', ' ', '9120191904320/IOC Ref No3000075754                '),
(1, '120001075411', 'DAWA  LAMU  BHUTIA ', '334.48', '2019-01-16', 'UIH', '709812384597', ' ', ' ', '9120191903009/IOC Ref No3000107129                '),
(1, '120000863059', 'TSHERING BHUTIA***AC- NO- 148002031736***', '334.48', '2019-01-17', 'UIH', '338578739588', ' ', ' ', '9160190730559/IOC Ref No3000108876                '),
(1, '120000950395', 'LHAMU  ANJU BHUTIA', '334.48', '2019-01-17', 'UIH', '461900485291', ' ', ' ', '9160191931090/IOC Ref No3000108872                '),
(1, '120000838056', 'NIRMALA TAMANG', '334.48', '2019-01-17', 'UIH', '481187011377', ' ', ' ', '9160191171994/IOC Ref No3000109306                '),
(1, '120000913320', 'CHEN CHIEN YUAN', '334.48', '2019-01-17', 'UIH', '417929745114', ' ', ' ', '9160191931171/IOC Ref No3000108990                '),
(1, '120000864417', 'SUKLAL   DARJEE', '334.48', '2019-01-17', 'UIH', '268102832702', ' ', ' ', '9160191932244/IOC Ref No3000078124                '),
(1, '120000863286', 'SHOVA NIROULA', '2000.00', '2019-01-17', 'UIH', '698076841883', ' ', ' ', 'C011912850118/CPSMSAX                             '),
(1, '120000864803', 'LOSANG DOMA LAMA', '334.48', '2019-01-17', 'UIH', '211235756240', ' ', ' ', '9160190266195/IOC Ref No3000077750                '),
(1, '120000724468', 'RAJU  MUKHIA ***CBS ACC.NO.120000724468', '334.48', '2019-01-17', 'UIH', '618477427282', ' ', ' ', '9160191932311/IOC Ref No3000078131                '),
(1, '120000761400', 'SANCHA PRADHAN', '334.48', '2019-01-17', 'UIH', '781151925069', ' ', ' ', '9160191194818/IOC Ref No3000013917                '),
(1, '120000809603', 'ARPAN    MUKHIA**CBS  A/C  NO. 120000809603', '346.86', '2019-01-17', 'UIH', '965573172194', ' ', ' ', '9160189580380/IOC Ref No3000044229                '),
(1, '120000856100', 'ANITA   BISWAKARMA', '334.48', '2019-01-17', 'UIH', '544302526806', ' ', ' ', '9160191932281/IOC Ref No3000078133                '),
(1, '120000946753', 'MANOJ   SHAHU', '234.48', '2019-01-17', 'UIH', '374727607052', ' ', ' ', '9160190839873/IOC Ref No3000232526                '),
(2, '120000790237', 'KARUNA TAMANG ', '346.86', '2019-01-10', 'UIH', '201069862476', ' ', ' ', '9090182116000/IOC Ref No3000107996                '),
(2, '120000945002', 'KALPANA LIMBU ', '346.86', '2019-01-10', 'UIH', '317806581030', ' ', ' ', '9090183597848/IOC Ref No3000108029                '),
(2, '120000733325', 'KAYSINGH SHERPA ', '346.86', '2019-01-10', 'UIH', '318921116730', ' ', ' ', '9090183597723/IOC Ref No3000108000                '),
(2, '120001065436', 'MIKMA LEPCHA ', '4500.00', '2019-01-11', 'NEFT/RTGS', '58858739', '635405000803', 'ICIC0006354', 'SHANTIPATH FOUNDATION           '),
(2, '120001065469', 'DURGA CHHETRI ', '6500.00', '2019-01-11', 'NEFT/RTGS', '58929716', '635405000803', 'ICIC0006354', 'SHANTIPATH FOUNDATION           '),
(2, '120001065447', 'CHAYADUR LEPCHA ', '5000.00', '2019-01-11', 'NEFT/RTGS', '58857963', '635405000803', 'ICIC0006354', 'SHANTIPATH FOUNDATION           '),
(2, '120000788671', 'DEV KUMARI GURUNG ', '346.86', '2019-01-14', 'UIH', '709613930654', ' ', ' ', '9110186303026/IOC Ref No3000108246                '),
(2, '120000803941', 'SANTA KUMAR TAMANG ', '346.86', '2019-01-14', 'UIH', '888304155730', ' ', ' ', '9110188837933/IOC Ref No3000108250                '),
(2, '120000810369', 'RATNASWARI RAI ', '234.01', '2019-01-14', 'UIH', '363655880124', ' ', ' ', '9120189868037/IOC Ref No3000078388                '),
(2, '120000810438', 'PHULMAYA BHUTIA ', '234.01', '2019-01-14', 'UIH', '441200113022', ' ', ' ', '9120189868921/IOC Ref No3000078391                '),
(2, '120000815255', 'SICHAL KHAWAS ', '346.86', '2019-01-14', 'UIH', '389455355272', ' ', ' ', '9120190495938/IOC Ref No3000050189                '),
(2, '120000826981', 'HEM KUMARI RAI ', '346.86', '2019-01-14', 'UIH', '710640468256', ' ', ' ', '9120189909186/IOC Ref No3000049313                '),
(2, '120000909379', 'SHARMILA BISHWAKARMA ', '346.86', '2019-01-14', 'UIH', '227902834733', ' ', ' ', '9120189889023/IOC Ref No3000106634                '),
(2, '120000945035', 'SUREKHA RAI ', '234.01', '2019-01-14', 'UIH', '652713185630', ' ', ' ', '9120189867947/IOC Ref No3000078399                '),
(2, '120000945411', 'KEDAR SARKI ', '346.86', '2019-01-14', 'UIH', '732472998029', ' ', ' ', '9110188837714/IOC Ref No3000108738                '),
(2, '120000945422', 'HARKA BAHADUR KHAWAS ', '346.86', '2019-01-14', 'UIH', '506436289052', ' ', ' ', '9110186126753/IOC Ref No3000106463                '),
(2, '120000950769', 'SANTOKI SHERPA ', '346.86', '2019-01-14', 'UIH', '667954626855', ' ', ' ', '9120189883669/IOC Ref No3000049598                '),
(2, '120000788138', 'KAPIL GURUNG ', '346.86', '2019-01-14', 'UIH', '806908998395', ' ', ' ', '9110188837774/IOC Ref No3000108247                '),
(2, '120000786731', 'JANUKI CHHETRI ', '346.86', '2019-01-14', 'UIH', '725442930212', ' ', ' ', '9120189750053/IOC Ref No3000106597                '),
(2, '120000727505', 'PUSPA RAI PRADHAN ', '346.86', '2019-01-14', 'UIH', '407631391844', ' ', ' ', '9120190551746/IOC Ref No3000109059                '),
(2, '120000733518', 'SARIMAYA TAMANG ', '234.01', '2019-01-14', 'ACH', ' ', ' ', ' ', '9120189869304?IOC Ref No3000078916                          '),
(2, '120001153038', 'MEENA YELMO ', '346.86', '2019-01-14', 'UIH', '647643181365', ' ', ' ', '9120189888749/IOC Ref No3000106621                '),
(2, '120000788536', 'SHEKHAR GURUNG ', '346.86', '2019-01-14', 'UIH', '499964181940', ' ', ' ', '9110188837773/IOC Ref No3000108248                '),
(2, '120000727550', 'MD. ABDUL HUSSAIN ', '334.48', '2019-01-15', 'UIH', '896973681375', ' ', ' ', '9050183643467/IOC Ref No3000074740                '),
(2, '120001168942', 'RANJITA CHHETRI (GURUNG) ', '346.86', '2019-01-15', 'UIH', '525725937308', ' ', ' ', '9050184498247/IOC Ref No3000048992                '),
(2, '120001119144', 'SANTOSH BALMIKI ', '346.86', '2019-01-15', 'UIH', '920397144838', ' ', ' ', '9050184085942/IOC Ref No3000106610                '),
(2, '120000948503', 'MANI PRASAD RAI ', '346.86', '2019-01-15', 'UIH', '330798295844', ' ', ' ', '9050184260267/IOC Ref No3000106625                '),
(2, '120000948445', 'SAKUN PRADHAN ', '346.86', '2019-01-15', 'UIH', '321620550415', ' ', ' ', '9140186589153/IOC Ref No3000044652                '),
(2, '120000945466', 'MANIKA RAI ', '346.86', '2019-01-15', 'UIH', '269273925336', ' ', ' ', '9050183620747/IOC Ref No3000048682                '),
(2, '120000817558', 'PRINGLE RAI ', '234.48', '2019-01-15', 'UIH', '787906329641', ' ', ' ', '9050184680638/IOC Ref No3000087642                '),
(2, '120000817558', 'PRINGLE RAI ', '234.48', '2019-01-15', 'UIH', '787906329641', ' ', ' ', '9050184680639/IOC Ref No3000086204                '),
(2, '120000815404', 'RASHMI RAI ', '334.48', '2019-01-15', 'UIH', '735071359312', ' ', ' ', '9140186606180/IOC Ref No3000077069                '),
(2, '120000810278', 'DURGA CHETTRII ', '234.01', '2019-01-15', 'UIH', '950742772349', ' ', ' ', '9140185727403/IOC Ref No3000082237                '),
(2, '120000793476', 'AMRITA TAMANG ', '346.86', '2019-01-15', 'UIH', '812205417635', ' ', ' ', '9050182307571/IOC Ref No3000048693                '),
(2, '120000763791', 'BABIN LEPCHA ', '234.01', '2019-01-15', 'UIH', '990383399108', ' ', ' ', '9050182401221/IOC Ref No3000078236                '),
(2, '120000733187', 'MANJU LEPCHA ', '234.01', '2019-01-15', 'UIH', '643633291316', ' ', ' ', '9050182454021/IOC Ref No3000078394                '),
(2, '120000733041', 'LATA TAMANG ', '234.01', '2019-01-15', 'UIH', '674763922744', ' ', ' ', '9050182454033/IOC Ref No3000078395                '),
(2, '120000950781', 'CHEJONG BHUTIA ', '346.86', '2019-01-16', 'UIH', '917660000297', ' ', ' ', '947551424/BLPGCM42364DT1501                       '),
(2, '120000826981', 'HEM KUMARI RAI ', '346.86', '2019-01-16', 'UIH', '710640468256', ' ', ' ', '9150188664639/IOC Ref No3000050011                '),
(2, '120000810290', 'PREMIKA RAI ', '346.86', '2019-01-16', 'UIH', '286788009575', ' ', ' ', '9150189390230/IOC Ref No3000110374                '),
(2, '120000766282', 'ABIRAJ BHANDARI ', '346.86', '2019-01-16', 'UIH', '751752080174', ' ', ' ', '947887246/BLPGCM42359DT1501                       '),
(2, '120000734001', 'MANIKA MOKTAN LIMBU ', '346.86', '2019-01-16', 'UIH', '486836838380', ' ', ' ', '9150188937651/IOC Ref No3000045001                '),
(2, '120000733245', 'NUNUKI DEWAN ', '234.01', '2019-01-16', 'UIH', '856032402353', ' ', ' ', '9150188673264/IOC Ref No3000082618                '),
(2, '120000680600', 'DURGA KUMAR CHHETRI ', '45000.00', '2019-01-16', 'ACH', ' ', ' ', ' ', 'C011912643798?PMAYG BTNE8                                   '),
(2, '120000877914', 'DIWASH MUKHIA ', '45000.00', '2019-01-16', 'ACH', ' ', ' ', ' ', 'C011912643797?PMAYG BTNE8                                   '),
(2, '120000409377', 'URGEN SHERPA ', '45000.00', '2019-01-16', 'ACH', ' ', ' ', ' ', 'C011912701702?PMAYG BTNE8                                   '),
(2, '120000741224', 'SARITA PRADHAN ', '234.48', '2019-01-17', 'UIH', '444075687029', ' ', ' ', '9160190287032/IOC Ref No3000048799                '),
(2, '120001036630', 'PRAMILA TAMANG ', '346.86', '2019-01-17', 'UIH', '438745348337', ' ', ' ', '9160191914872/IOC Ref No3000110589                '),
(2, '120000739666', 'ARJUN KUMAR RAI ', '346.86', '2019-01-17', 'UIH', '469888180913', ' ', ' ', '9160190991153/IOC Ref No3000044814                '),
(2, '120000793307', 'PRAMILA MUKHIA LEPCHA ', '346.86', '2019-01-17', 'UIH', '646449468537', ' ', ' ', '9160190718909/IOC Ref No3000110594                '),
(3, '120001094604', 'PREETAM RAI', '346.86', '2019-01-14', 'UIH', '321136934237', ' ', ' ', '9110186596815/IOC Ref No3000029048                '),
(4, '120000337366', 'DAWA BHUTIA', '1000.00', '2019-01-10', 'NEFT/RTGS', 'U000000566251540    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000337366', 'DAWA BHUTIA', '950.00', '2019-01-10', 'NEFT/RTGS', 'U000000566251296    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000601730', 'MAN RATI BHUTIA', '1000.00', '2019-01-10', 'NEFT/RTGS', 'U000000566251544    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000537626', 'TSHERING DOMA BHUTIA', '1000.00', '2019-01-10', 'NEFT/RTGS', 'U000000566252052    ', '1516701170', 'RBIS0KLPA01', 'KALIMPONG TREASURY ePRADAN WEST '),
(4, '120000813597', 'LALITA RAI', '338.29', '2019-01-14', 'UIH', '212550402104', ' ', ' ', '9110185889639/IOC Ref No3000120168                '),
(5, '120001194280', 'DOLMA TAMANG-II', '234.01', '2019-01-14', 'UIH', '614733351155', ' ', ' ', '9120189933619/IOC Ref No3000081759                '),
(5, '120001336328', 'MUNNA POUDYAL', '234.01', '2019-01-14', 'UIH', '376703774895', ' ', ' ', '9120189933691/IOC Ref No3000081739                '),
(5, '120000745922', 'CHANDRA PRASAD BAJAGAI', '334.48', '2019-01-15', 'UIH', '948926168011', ' ', ' ', '9140186878650/IOC Ref No3000108073                '),
(5, '120000846249', 'SANGBIR TAMANG', '334.48', '2019-01-15', 'UIH', '493371357150', ' ', ' ', '9050183642040/IOC Ref No3000104666                '),
(5, '120000921921', 'BANU PRADHAN', '334.48', '2019-01-16', 'UIH', '359976215251', ' ', ' ', '9120191902868/IOC Ref No3000107761                ');

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
-- Indexes for table `md_users`
--
ALTER TABLE `md_users`
  ADD PRIMARY KEY (`user_id`);

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
