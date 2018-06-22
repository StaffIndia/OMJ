-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 06:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_omj`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `ADMINID` bigint(20) NOT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`ADMINID`, `email`, `username`, `password`) VALUES
(1, 'webmaster@freelancerscript.com', 'Admin', '123'),
(2, 'malcolm@staff-india.com', 'malcolm', 'malcolm');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `AID` bigint(30) NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT '',
  `code` text NOT NULL,
  `active` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`AID`, `description`, `code`, `active`) VALUES
(1, '468 x 60 pixels', '<div style=\"width:468px; height:60px; border:1px solid #DFDFDF;\" align=\"center\"><br/>Insert Your<br/>Advertisement Here</div>', '1'),
(2, '120 x 728 pixels', '<div style=\"width:120px; height:728px; border:1px solid #DFDFDF;\" align=\"center\"><br/><br/>Insert Your Advertisement Here</div>', '1'),
(3, '600 x 30 pixels', '<div style=\"width:600px; height:30px; border:1px solid #DFDFDF;\" align=\"center\"><div style=\"padding-top: 5px\">Insert Your Advertisement Here</div></div>', '1'),
(4, '300 x 300 pixels', '<div style=\"width:350px; height:300px; border: 1px solid #20B251; background-color: #20B251; color: #fff;\" align=\"center\"><br /><br /><br /><br /><br />Insert Your Advertisement Here</div>', '1'),
(5, '218 x 881 pixels', '<div style=\"width:218px; height:881px; border: 1px solid #222222; background-color: #111111; color: #fff;\" align=\"center\"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Insert Your<br />Advertisement Here</div>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `AID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bans_ips`
--

CREATE TABLE `bans_ips` (
  `ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bans_words`
--

CREATE TABLE `bans_words` (
  `word` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CATID` bigint(20) NOT NULL,
  `name` varchar(120) NOT NULL DEFAULT '',
  `seo` varchar(200) NOT NULL,
  `parent` bigint(20) NOT NULL DEFAULT '0',
  `scriptolution_catimage` varchar(40) NOT NULL DEFAULT 'scriptolution_default_category.jpg',
  `scriptolution_featuredcat` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CATID`, `name`, `seo`, `parent`, `scriptolution_catimage`, `scriptolution_featuredcat`) VALUES
(1, 'Website Development', 'Website-Development', 0, 'websitedev.jpg', 1),
(2, 'Design', 'Design', 0, 'design.jpg', 1),
(3, 'Marketing', 'Marketing', 0, 'marketing.jpg', 1),
(4, 'Business', 'Business', 0, 'business.jpg', 1),
(5, 'Writing', 'Writing', 0, 'writing.jpg', 1),
(6, 'Engineering', 'Engineering', 0, 'engineering.jpg', 1),
(7, 'Accounting', 'Accounting', 0, 'accounting.jpg', 1),
(8, 'Local Jobs', 'Local Jobs', 0, 'localjobs.jpg', 0),
(9, 'Other', 'Other', 0, 'scriptolution_default_category.jpg', 1),
(10, 'new ', 'jfjk', 0, 'Lighthouse3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `setting` varchar(60) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`setting`, `value`) VALUES
('site_email', 'webmaster@yourdomain.com'),
('site_name', 'Freelancer Script'),
('max_syndicate_results', '25'),
('maximum_results', '1000000'),
('emailsender', 'Admin'),
('max_suggest', '14'),
('items_per_page', '18'),
('site_slogan', 'Online Jobs and Freelance Employment'),
('approve_stories', '0'),
('metadescription', 'Freelancer Script is the freelancer clone script and freelancer script.'),
('metakeywords', 'freelancer script, freelancer clone, freelancer clone script'),
('price', '5'),
('ver', '1.2.6'),
('price_mode', '1'),
('approve_suggests', '0'),
('view_rel_max', '7'),
('view_more_max', '7'),
('paypal_email', 'payments@yourdomain.com'),
('notify_email', 'notify@yourdomain.com'),
('currency', 'USD'),
('days_before_withdraw', '14'),
('commission', '1'),
('FACEBOOK_APP_ID', ''),
('FACEBOOK_SECRET', ''),
('enable_fc', '0'),
('commission_percent', '10'),
('short_urls', '1'),
('twitter', 'Scriptolution'),
('vonly', '0'),
('enable_alertpay', '1'),
('enable_paypal', '1'),
('alertpay_email', 'payments@yourdomain.com'),
('alertpay_currency', 'USD'),
('ap_code', ''),
('fprice', '100'),
('fdays', '300'),
('scriptolution_toprated_rating', '99'),
('scriptolution_toprated_count', '10'),
('verify_pm', '1'),
('def_country', 'US'),
('enable_levels', '0'),
('level1job', '1'),
('level2job', '3'),
('level3job', ''),
('level2num', '10'),
('level2rate', '90'),
('level3num', '20'),
('level3rate', '90'),
('scriptolution_proxy_block', '0'),
('enable_ref', '0'),
('ref_price', '1'),
('scriptolution_paypal_confirm', '0'),
('items_per_page_new', '28'),
('hide_catnav', '0'),
('enable_captcha', '1'),
('fiverrscript_dotcom_home_featcats', '1'),
('scriptolution_notify_gigval', '0'),
('scriptolution_notify_gigval_email', 'webmaster@yourdomain.com'),
('scriptolution_solve_c', ''),
('scriptolution_solve_v', ''),
('scriptolution_solve_h', ''),
('recaptcha_pubkey', ''),
('recaptcha_privkey', ''),
('scriptolution_cur_pos', '0'),
('scriptolution_launch_mode', '0'),
('scriptolution_mail_from_name', 'FreelancerScript'),
('scriptolutionstripeenable', '1'),
('scriptolutionstripesecret', ''),
('scriptolutionstripepublishable', ''),
('scriptolutionstripecurrency', 'USD'),
('enablescriptolutionlocations', '0'),
('scriptolution_map_key', ''),
('scriptolutionplan1bids', '10'),
('scriptolutionplan2bids', '50'),
('scriptolutionplan3bids', '100'),
('scriptolutionplan4bids', '500'),
('scriptolutionplan5bids', '1000'),
('scriptolutionplan1price', '0.00'),
('scriptolutionplan2price', '4.99'),
('scriptolutionplan3price', '9.99'),
('scriptolutionplan4price', '49.99'),
('scriptolutionplan5price', '79.99'),
('scriptolutionprojectexpdays', '7');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`, `country_name`) VALUES
(1, 'AL', 'Albania'),
(2, 'DZ', 'Algeria'),
(3, 'AT', 'Austria'),
(4, 'AZ', 'Azerbaijan'),
(5, 'BS', 'Bahamas'),
(6, 'BH', 'Bahrain'),
(7, 'BD', 'Bangladesh'),
(8, 'BB', 'Barbados'),
(9, 'BY', 'Belarus'),
(10, 'BE', 'Belgium'),
(11, 'BZ', 'Belize'),
(12, 'BJ', 'Benin'),
(13, 'BM', 'Bermuda'),
(14, 'BT', 'Bhutan'),
(15, 'BO', 'Bolivia'),
(16, 'BA', 'Bosnia and Herzegovina'),
(17, 'BW', 'Botswana'),
(18, 'BV', 'Bouvet Island'),
(19, 'BR', 'Brazil'),
(20, 'IO', 'British Indian Ocean Territory'),
(21, 'BN', 'Brunei Darussalam'),
(22, 'BG', 'Bulgaria'),
(23, 'BF', 'Burkina Faso'),
(24, 'BI', 'Burundi'),
(25, 'KH', 'Cambodia'),
(26, 'CM', 'Cameroon'),
(27, 'CA', 'Canada'),
(28, 'CV', 'Cape Verde'),
(29, 'KY', 'Cayman Islands'),
(30, 'CF', 'Central African Republic'),
(31, 'TD', 'Chad'),
(32, 'CL', 'Chile'),
(33, 'CN', 'China'),
(34, 'CX', 'Christmas Island'),
(35, 'CC', 'Cocos (Keeling) Islands'),
(36, 'CO', 'Colombia'),
(37, 'KM', 'Comoros'),
(38, 'CG', 'Congo'),
(40, 'CD', 'Congo, The Democratic Republic of The'),
(41, 'CK', 'Cook Islands'),
(42, 'CR', 'Costa Rica'),
(43, 'CI', 'Cote D\'ivoire'),
(44, 'HR', 'Croatia'),
(45, 'CU', 'Cuba'),
(46, 'CY', 'Cyprus'),
(47, 'CZ', 'Czech Republic'),
(48, 'DK', 'Denmark'),
(49, 'DJ', 'Djibouti'),
(50, 'DM', 'Dominica'),
(51, 'DO', 'Dominican Republic'),
(52, 'EC', 'Ecuador'),
(53, 'EG', 'Egypt'),
(54, 'SV', 'El Salvador'),
(55, 'GQ', 'Equatorial Guinea'),
(56, 'ER', 'Eritrea'),
(57, 'EE', 'Estonia'),
(58, 'ET', 'Ethiopia'),
(59, 'FK', 'Falkland Islands (Malvinas)'),
(60, 'FO', 'Faroe Islands'),
(61, 'FJ', 'Fiji'),
(62, 'FI', 'Finland'),
(63, 'FR', 'France'),
(64, 'GF', 'French Guiana'),
(65, 'PF', 'French Polynesia'),
(66, 'TF', 'French Southern Territories'),
(67, 'GA', 'Gabon'),
(68, 'GM', 'Gambia'),
(69, 'GE', 'Georgia'),
(70, 'DE', 'Germany'),
(71, 'GH', 'Ghana'),
(72, 'GI', 'Gibraltar'),
(73, 'GR', 'Greece'),
(74, 'GL', 'Greenland'),
(75, 'GD', 'Grenada'),
(76, 'GP', 'Guadeloupe'),
(77, 'GU', 'Guam'),
(78, 'GT', 'Guatemala'),
(79, 'GG', 'Guernsey'),
(80, 'GN', 'Guinea'),
(81, 'GW', 'Guinea-bissau'),
(82, 'GY', 'Guyana'),
(83, 'HT', 'Haiti'),
(84, 'HM', 'Heard Island and Mcdonald Islands'),
(85, 'VA', 'Holy See (Vatican City State)'),
(86, 'HN', 'Honduras'),
(87, 'HK', 'Hong Kong'),
(88, 'HU', 'Hungary'),
(89, 'IS', 'Iceland'),
(90, 'IN', 'India'),
(91, 'ID', 'Indonesia'),
(92, 'IR', 'Iran, Islamic Republic of'),
(93, 'IQ', 'Iraq'),
(94, 'IE', 'Ireland'),
(95, 'IM', 'Isle of Man'),
(96, 'IL', 'Israel'),
(97, 'IT', 'Italy'),
(98, 'JM', 'Jamaica'),
(99, 'JP', 'Japan'),
(100, 'JE', 'Jersey'),
(101, 'JO', 'Jordan'),
(102, 'KZ', 'Kazakhstan'),
(103, 'KE', 'Kenya'),
(104, 'KI', 'Kiribati'),
(105, 'KP', 'Korea, Democratic People\'s Republic of'),
(106, 'KR', 'Korea, Republic of'),
(107, 'KW', 'Kuwait'),
(108, 'KG', 'Kyrgyzstan'),
(109, 'LA', 'Lao People\'s Democratic Republic'),
(110, 'LV', 'Latvia'),
(111, 'LB', 'Lebanon'),
(112, 'LS', 'Lesotho'),
(113, 'LR', 'Liberia'),
(114, 'LY', 'Libyan Arab Jamahiriya'),
(115, 'LI', 'Liechtenstein'),
(116, 'LT', 'Lithuania'),
(117, 'LU', 'Luxembourg'),
(118, 'MO', 'Macao'),
(119, 'MK', 'Macedonia, The Former Yugoslav Republic of'),
(120, 'MG', 'Madagascar'),
(121, 'MW', 'Malawi'),
(122, 'MY', 'Malaysia'),
(123, 'MV', 'Maldives'),
(124, 'ML', 'Mali'),
(125, 'MT', 'Malta'),
(126, 'MH', 'Marshall Islands'),
(127, 'MQ', 'Martinique'),
(128, 'MR', 'Mauritania'),
(129, 'MU', 'Mauritius'),
(130, 'YT', 'Mayotte'),
(131, 'MX', 'Mexico'),
(132, 'FM', 'Micronesia, Federated States of'),
(133, 'MD', 'Moldova, Republic of'),
(134, 'MC', 'Monaco'),
(135, 'MN', 'Mongolia'),
(136, 'ME', 'Montenegro'),
(137, 'MS', 'Montserrat'),
(138, 'MA', 'Morocco'),
(139, 'MZ', 'Mozambique'),
(140, 'MM', 'Myanmar'),
(141, 'NA', 'Namibia'),
(142, 'NR', 'Nauru'),
(143, 'NP', 'Nepal'),
(144, 'NL', 'Netherlands'),
(145, 'AN', 'Netherlands Antilles'),
(146, 'NC', 'New Caledonia'),
(147, 'NZ', 'New Zealand'),
(148, 'NI', 'Nicaragua'),
(149, 'NE', 'Niger'),
(150, 'NG', 'Nigeria'),
(151, 'NU', 'Niue'),
(152, 'NF', 'Norfolk Island'),
(153, 'MP', 'Northern Mariana Islands'),
(154, 'NO', 'Norway'),
(155, 'OM', 'Oman'),
(156, 'PK', 'Pakistan'),
(157, 'PW', 'Palau'),
(158, 'PS', 'Palestinian Territory, Occupied'),
(159, 'PA', 'Panama'),
(160, 'PG', 'Papua New Guinea'),
(161, 'PY', 'Paraguay'),
(162, 'PE', 'Peruq'),
(163, 'PH', 'Philippines'),
(164, 'PN', 'Pitcairn'),
(165, 'PL', 'Poland'),
(166, 'PT', 'Portugal'),
(167, 'PR', 'Puerto Rico'),
(168, 'QA', 'Qatar'),
(169, 'RE', 'Reunion'),
(170, 'RO', 'Romania'),
(171, 'RU', 'Russian Federation'),
(172, 'RW', 'Rwanda'),
(173, 'SH', 'Saint Helena'),
(174, 'KN', 'Saint Kitts and Nevis'),
(175, 'LC', 'Saint Lucia'),
(176, 'PM', 'Saint Pierre and Miquelon'),
(177, 'VC', 'Saint Vincent and The Grenadines'),
(178, 'WS', 'Samoa'),
(179, 'SM', 'San Marino'),
(180, 'ST', 'Sao Tome and Principe'),
(181, 'SA', 'Saudi Arabia'),
(182, 'SN', 'Senegal'),
(183, 'RS', 'Serbia'),
(184, 'SC', 'Seychelles'),
(185, 'SL', 'Sierra Leone'),
(186, 'SG', 'Singapore'),
(187, 'SK', 'Slovakia'),
(188, 'SI', 'Slovenia'),
(189, 'SB', 'Solomon Islands'),
(190, 'SO', 'Somalia'),
(191, 'ZA', 'South Africa'),
(192, 'GS', 'South Georgia and The South Sandwich Islands'),
(193, 'ES', 'Spain'),
(194, 'LK', 'Sri Lanka'),
(195, 'SD', 'Sudan'),
(196, 'SR', 'Suriname'),
(197, 'SJ', 'Svalbard and Jan Mayen'),
(198, 'SZ', 'Swaziland'),
(199, 'SE', 'Sweden'),
(200, 'CH', 'Switzerland'),
(201, 'SY', 'Syrian Arab Republic'),
(202, 'TW', 'Taiwan, Province of China'),
(203, 'TJ', 'Tajikistan'),
(204, 'TZ', 'Tanzania, United Republic of'),
(205, 'TH', 'Thailand'),
(206, 'TL', 'Timor-leste'),
(207, 'TG', 'Togo'),
(208, 'TK', 'Tokelau'),
(209, 'TO', 'Tonga'),
(210, 'TT', 'Trinidad and Tobago'),
(211, 'TN', 'Tunisia'),
(212, 'TR', 'Turkey'),
(213, 'TM', 'Turkmenistan'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TV', 'Tuvalu'),
(216, 'UG', 'Uganda'),
(217, 'UA', 'Ukraine'),
(218, 'AE', 'United Arab Emirates'),
(219, 'GB', 'United Kingdom'),
(220, 'US', 'United States'),
(221, 'UM', 'United States Minor Outlying Islands'),
(222, 'UY', 'Uruguay'),
(223, 'UZ', 'Uzbekistan'),
(224, 'VU', 'Vanuatu'),
(225, 'VE', 'Venezuela'),
(226, 'VN', 'Viet Nam'),
(227, 'VG', 'Virgin Islands, British'),
(228, 'VI', 'Virgin Islands, U.S.'),
(229, 'WF', 'Wallis and Futuna'),
(230, 'EH', 'Western Sahara'),
(231, 'YE', 'Yemen'),
(232, 'ZM', 'Zambia'),
(233, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `FID` bigint(20) NOT NULL,
  `fname` varchar(400) NOT NULL DEFAULT '',
  `time` varchar(20) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL,
  `s` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `freelancerscript_dotcom_notity`
--

CREATE TABLE `freelancerscript_dotcom_notity` (
  `NID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `scriptolution_type` varchar(100) NOT NULL DEFAULT '',
  `scriptolution_OID` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `scriptolution_unread` bigint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `MID` bigint(20) NOT NULL,
  `MSGTO` bigint(20) NOT NULL DEFAULT '0',
  `MSGFROM` bigint(20) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `FID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) NOT NULL DEFAULT '',
  `unread` char(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`MID`, `MSGTO`, `MSGFROM`, `message`, `PID`, `FID`, `time`, `unread`) VALUES
(1, 0, 0, 'a', 0, 0, '', 'a'),
(2, 0, 0, 'a', 0, 0, '', 'a'),
(3, 0, 0, 'aaa', 0, 0, '', 'a'),
(4, 0, 0, 'aaa', 0, 0, '', 'a'),
(5, 0, 0, 'QQQQQ', 0, 0, '', 'Q'),
(6, 0, 0, 'QQQQQ', 0, 0, '', 'Q'),
(7, 0, 0, 'q11', 0, 0, '', '1'),
(8, 0, 0, 'aa', 0, 0, '', 'a'),
(9, 0, 0, '22', 0, 0, '', '2'),
(10, 0, 0, 'sss', 0, 0, '', 's'),
(11, 0, 0, 'aa', 0, 0, '', 'a'),
(12, 0, 0, 'ss', 0, 0, '', 's'),
(13, 0, 0, '123', 0, 0, '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `inbox2`
--

CREATE TABLE `inbox2` (
  `MID` bigint(20) NOT NULL,
  `MSGTO` bigint(20) NOT NULL DEFAULT '0',
  `MSGFROM` bigint(20) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `FID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) NOT NULL DEFAULT '',
  `start` bigint(1) NOT NULL DEFAULT '0',
  `action` varchar(100) NOT NULL,
  `cancel` bigint(1) NOT NULL DEFAULT '0',
  `ctime` varchar(20) NOT NULL,
  `CID` bigint(20) NOT NULL DEFAULT '0',
  `reject` bigint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inbox_reports`
--

CREATE TABLE `inbox_reports` (
  `RID` bigint(20) NOT NULL,
  `MID` bigint(20) NOT NULL DEFAULT '0',
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invites_code`
--

CREATE TABLE `invites_code` (
  `code` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `USERID` bigint(20) NOT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `pin_code` varchar(100) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL,
  `scriptolutionmemplan` int(1) NOT NULL DEFAULT '0',
  `scriptolutionmemplanstart` varchar(20) NOT NULL DEFAULT '',
  `scriptolutionperhour` bigint(20) NOT NULL DEFAULT '0',
  `bidscriptolutionused` bigint(20) NOT NULL DEFAULT '0',
  `funds` decimal(9,2) NOT NULL,
  `afunds` decimal(9,2) NOT NULL,
  `withdrawn` decimal(9,2) NOT NULL,
  `used` decimal(9,2) NOT NULL,
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `scriptolutionuserslogan` varchar(100) NOT NULL DEFAULT '',
  `rating` float NOT NULL DEFAULT '0',
  `ratingcount` bigint(10) NOT NULL DEFAULT '0',
  `profileviews` int(20) NOT NULL DEFAULT '0',
  `addtime` varchar(20) NOT NULL DEFAULT '',
  `lastlogin` varchar(20) NOT NULL DEFAULT '',
  `verified` char(1) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `profilepicture` varchar(100) NOT NULL DEFAULT 'default.png',
  `remember_me_key` varchar(32) DEFAULT NULL,
  `remember_me_time` datetime DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `lip` varchar(20) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `country` varchar(2) NOT NULL DEFAULT 'US',
  `toprated` int(1) NOT NULL DEFAULT '0',
  `level` bigint(1) NOT NULL DEFAULT '1',
  `scriptolution1` bigint(1) NOT NULL DEFAULT '0',
  `scriptolutionsk1` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk2` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk3` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk4` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk5` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk6` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk7` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk8` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk9` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk10` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk11` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk12` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk13` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk14` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk15` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk16` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk17` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk18` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk19` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk20` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk21` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk22` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk23` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk24` int(5) NOT NULL DEFAULT '0',
  `scriptolutionsk25` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`USERID`, `email`, `pin_code`, `pemail`, `username`, `password`, `pwd`, `scriptolutionmemplan`, `scriptolutionmemplanstart`, `scriptolutionperhour`, `bidscriptolutionused`, `funds`, `afunds`, `withdrawn`, `used`, `fullname`, `description`, `scriptolutionuserslogan`, `rating`, `ratingcount`, `profileviews`, `addtime`, `lastlogin`, `verified`, `status`, `profilepicture`, `remember_me_key`, `remember_me_time`, `ip`, `lip`, `aemail`, `country`, `toprated`, `level`, `scriptolution1`, `scriptolutionsk1`, `scriptolutionsk2`, `scriptolutionsk3`, `scriptolutionsk4`, `scriptolutionsk5`, `scriptolutionsk6`, `scriptolutionsk7`, `scriptolutionsk8`, `scriptolutionsk9`, `scriptolutionsk10`, `scriptolutionsk11`, `scriptolutionsk12`, `scriptolutionsk13`, `scriptolutionsk14`, `scriptolutionsk15`, `scriptolutionsk16`, `scriptolutionsk17`, `scriptolutionsk18`, `scriptolutionsk19`, `scriptolutionsk20`, `scriptolutionsk21`, `scriptolutionsk22`, `scriptolutionsk23`, `scriptolutionsk24`, `scriptolutionsk25`) VALUES
(8, 'ian@staff-india.com', '302545', '', 'ian', 'ian', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'ian si', '', '', 0, 0, 0, '1527784752', 'Mon, 04 Jun 18 18:44', '1', '1', 'default.png', NULL, NULL, '0', '::1', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'oscar@staff-india.com', '988042', '', 'oscar', 'oscar', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'oscar si', '', '', 0, 0, 0, '1527784992', '1527784992', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'nigel@staff-india.com', '987979', '', 'nigel', 'nigel', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'nigel si', '', '', 0, 0, 0, '1527784707', '1527784707', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'malcolm@staff-india.com', '145738', '', 'malcolm', 'malcolm', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'malcolm si', 'aa', 'aa', 0, 0, 0, '1527784899', 'Wed, 13 Jun 18 15:28', '1', '1', 'default.png', NULL, NULL, '0', '::1', '', 'FK', 0, 1, 2, 19, 18, 7, 13, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'derek@staff-india.com', '758013', '', 'derek', 'derek', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'derek si', '', '', 0, 0, 0, '1527784921', '1527784921', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'max@staff-india.com', '500008', '', 'max', 'max', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'max si', '', '', 0, 0, 0, '1527784945', '1527784945', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'shane@staff-india.com', '472608', '', 'shane', 'shane', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'shane si', '', '', 0, 0, 0, '1527784970', '1527784970', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'ralph@staff-indai.com', '670756', '', 'ralph', 'ralph', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'ralph si', '', '', 0, 0, 0, '1527785016', '1527785016', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'shawn@staff-india.com', '805367', '', 'shawn', 'shawn', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'shawn si', '', '', 0, 0, 0, '1527785055', '1527785055', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'matthew@staff-india.com', '378347', '', 'matthew', 'matthew', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'matthew si', '', '', 0, 0, 0, '1527785105', '1527785105', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'naim@staff-india.com', '837690', '', 'naim', 'naim', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'naim is ', '', '', 0, 0, 0, '1527785129', '1527785129', '0', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'kavin@staff-india.com', '523499', '', 'kavin', 'kavin', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'kavin si', '', '', 0, 0, 0, '1527785168', '1527785168', '0', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'ross@staff-india.com', '134943', '', 'ross', 'ross', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'ross si', 'I am the owner of xyz shop located in uk', 'busy', 0, 0, 0, '1527785277', 'Wed, 20 Jun 18 14:07', '1', '1', 'ross.png', NULL, NULL, '0', '::1', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'tina@staff-india.com', '964321', '', 'tina', 'tina', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'tina si', 'I am the founder of abc shop', 'busy', 0, 0, 0, '1527785305', 'Fri, 01 Jun 18 11:23', '1', '1', 'tina.jpg', NULL, NULL, '0', '::1', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'martin@staff-india.com', '511080', '', 'martin', 'martin', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'martin si', '', '', 0, 0, 0, '1527785334', 'Fri, 01 Jun 18 11:34', '1', '1', 'default.png', NULL, NULL, '0', '::1', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'rob@staff-india.com', '151145', '', 'rob', 'rob', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'rob si', '', '', 0, 0, 0, '1527785409', '1527785409', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'alex@staff-india.com', '592567', '', 'alex', 'ALEX', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'alex si', 'wonderfulwonderful wonderful wonderful', 'wonderful', 0, 0, 0, '1527844111', 'Fri, 01 Jun 18 11:37', '1', '1', 'default.png', NULL, NULL, '0', '::1', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'saymon@staff-india.com', '274938', '', 'saymon', 'saymon', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'saymon si', '', '', 0, 0, 0, '1527844155', '1527844155', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'tl@staff-india.com', '207256', '', 'tl', 'tl', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'tl si', '', '', 0, 0, 0, '1527844206', '1527844206', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'tll@staff-india.com', '627364', '', 'tl1', 'tl1', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'tl1 si', '', '', 0, 0, 0, '1527844252', '1527844252', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'tl2@staff-india.com', '848071', '', 'tl2', 'tl2', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'tl2 si', '', '', 0, 0, 0, '1527844277', '1527844277', '1', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'tl3@staff-india.com', '985804', '', 'tl3', 'tl3', '', 0, '', 0, 0, '0.00', '0.00', '0.00', '0.00', 'tl3 si', '', '', 0, 0, 0, '1527844316', '1527844316', '0', '1', 'default.png', NULL, NULL, '0', '0', '', 'US', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members_passcode`
--

CREATE TABLE `members_passcode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members_verifycode`
--

CREATE TABLE `members_verifycode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_verifycode`
--

INSERT INTO `members_verifycode` (`USERID`, `code`) VALUES
(1, 'wwiQe1460490384');

-- --------------------------------------------------------

--
-- Table structure for table `memordersscriptolution`
--

CREATE TABLE `memordersscriptolution` (
  `ID` bigint(20) NOT NULL,
  `MOID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) DEFAULT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `PAYPAL` bigint(20) NOT NULL,
  `scriptolutionafunds` int(1) NOT NULL DEFAULT '0',
  `scriptolutionfunds` int(1) NOT NULL DEFAULT '0',
  `exp` int(1) NOT NULL DEFAULT '0',
  `fiverrscriptdotcom_fstripe` bigint(20) NOT NULL DEFAULT '0',
  `fiverrscriptdotcom_fstripe_user` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `SCRIPTOLUTIONLANCER` bigint(20) NOT NULL DEFAULT '0',
  `SCRIPTOLUTIONOFID` bigint(20) NOT NULL DEFAULT '0',
  `beforeprice` decimal(9,2) NOT NULL DEFAULT '0.00',
  `totalprice` decimal(9,2) NOT NULL DEFAULT '0.00',
  `ctp` decimal(9,2) NOT NULL DEFAULT '0.00',
  `time_added` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `stime` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `cltime` varchar(20) NOT NULL,
  `IID` bigint(20) NOT NULL,
  `late` bigint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `IID` bigint(20) NOT NULL,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `SCRIPTOLUTIONLANCER` bigint(20) NOT NULL DEFAULT '0',
  `SCRIPTOLUTIONOFID` bigint(20) NOT NULL DEFAULT '0',
  `multi` bigint(5) NOT NULL DEFAULT '0',
  `EID` bigint(20) NOT NULL DEFAULT '0',
  `EID2` bigint(20) NOT NULL DEFAULT '0',
  `EID3` bigint(20) NOT NULL DEFAULT '0',
  `beforeprice` decimal(9,2) NOT NULL DEFAULT '0.00',
  `totalprice` decimal(9,2) NOT NULL DEFAULT '0.00',
  `ctp` decimal(9,2) NOT NULL,
  `scriptolutionbuy` bigint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `ID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) DEFAULT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `t` bigint(1) NOT NULL DEFAULT '0',
  `PAYPAL` bigint(20) NOT NULL,
  `cancel` bigint(1) NOT NULL DEFAULT '0',
  `wd` bigint(20) NOT NULL DEFAULT '0',
  `IID` bigint(20) NOT NULL DEFAULT '0',
  `fiverrscriptdotcom_balance` bigint(20) NOT NULL DEFAULT '0',
  `fiverrscriptdotcom_available` bigint(20) NOT NULL DEFAULT '0',
  `fiverrscriptdotcom_stripe` bigint(20) NOT NULL DEFAULT '0',
  `fiverrscriptdotcom_stripe_user` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_table`
--

CREATE TABLE `paypal_table` (
  `id` int(11) NOT NULL,
  `payer_id` varchar(60) DEFAULT NULL,
  `payment_date` varchar(50) DEFAULT NULL,
  `txn_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `payer_email` varchar(75) DEFAULT NULL,
  `payer_status` varchar(50) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `memo` tinytext,
  `item_name` varchar(127) DEFAULT NULL,
  `item_number` varchar(127) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `mc_gross` decimal(9,2) DEFAULT NULL,
  `mc_currency` char(3) DEFAULT NULL,
  `address_name` varchar(255) NOT NULL DEFAULT '',
  `address_street` varchar(255) NOT NULL DEFAULT '',
  `address_city` varchar(255) NOT NULL DEFAULT '',
  `address_state` varchar(255) NOT NULL DEFAULT '',
  `address_zip` varchar(255) NOT NULL DEFAULT '',
  `address_country` varchar(255) NOT NULL DEFAULT '',
  `address_status` varchar(255) NOT NULL DEFAULT '',
  `payer_business_name` varchar(255) NOT NULL DEFAULT '',
  `payment_status` varchar(255) NOT NULL DEFAULT '',
  `pending_reason` varchar(255) NOT NULL DEFAULT '',
  `reason_code` varchar(255) NOT NULL DEFAULT '',
  `txn_type` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_table2`
--

CREATE TABLE `paypal_table2` (
  `id` int(11) NOT NULL,
  `payer_id` varchar(60) DEFAULT NULL,
  `payment_date` varchar(50) DEFAULT NULL,
  `txn_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `payer_email` varchar(75) DEFAULT NULL,
  `payer_status` varchar(50) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `memo` tinytext,
  `item_name` varchar(127) DEFAULT NULL,
  `item_number` varchar(127) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `mc_gross` decimal(9,2) DEFAULT NULL,
  `mc_currency` char(3) DEFAULT NULL,
  `address_name` varchar(255) NOT NULL DEFAULT '',
  `address_street` varchar(255) NOT NULL DEFAULT '',
  `address_city` varchar(255) NOT NULL DEFAULT '',
  `address_state` varchar(255) NOT NULL DEFAULT '',
  `address_zip` varchar(255) NOT NULL DEFAULT '',
  `address_country` varchar(255) NOT NULL DEFAULT '',
  `address_status` varchar(255) NOT NULL DEFAULT '',
  `payer_business_name` varchar(255) NOT NULL DEFAULT '',
  `payment_status` varchar(255) NOT NULL DEFAULT '',
  `pending_reason` varchar(255) NOT NULL DEFAULT '',
  `reason_code` varchar(255) NOT NULL DEFAULT '',
  `txn_type` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `RID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `RATER` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `good` bigint(1) NOT NULL DEFAULT '0',
  `bad` bigint(1) NOT NULL DEFAULT '0',
  `comment` varchar(500) NOT NULL,
  `scriptolutionftitle` varchar(500) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scriptolutionorders`
--

CREATE TABLE `scriptolutionorders` (
  `MOID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `MEMBERSHIPSCRIPTOLUTION` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `scriptolutionpaid` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scriptolutionprojectbids`
--

CREATE TABLE `scriptolutionprojectbids` (
  `SCRIPTOLUTIONOFID` bigint(20) NOT NULL,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `scriptolutionbidproposal` varchar(500) DEFAULT NULL,
  `scriptolutionday` bigint(5) NOT NULL DEFAULT '0',
  `scriptolutionbidprice` decimal(9,2) NOT NULL DEFAULT '0.00',
  `scriptolutiong1` decimal(9,2) NOT NULL DEFAULT '0.00',
  `scriptolutiong2` decimal(9,2) NOT NULL DEFAULT '0.00',
  `scriptolutiontime` varchar(20) NOT NULL DEFAULT '',
  `proposal_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scriptolutionprojectbids`
--

INSERT INTO `scriptolutionprojectbids` (`SCRIPTOLUTIONOFID`, `PID`, `USERID`, `scriptolutionbidproposal`, `scriptolutionday`, `scriptolutionbidprice`, `scriptolutiong1`, `scriptolutiong2`, `scriptolutiontime`, `proposal_title`) VALUES
(1, 13, 8, 'sdssdsddssd', 0, '0.00', '0.00', '0.00', '1527264392', 'Hello'),
(2, 13, 9, 'sdsddssddsds', 0, '0.00', '0.00', '0.00', '1527264436', 'Hello'),
(3, 13, 10, 'bnjnmmn m  m mnbk nbknbb nb n', 0, '0.00', '0.00', '0.00', '1527267605', 'Hello'),
(15, 13, 11, 'sdsdsdsddsdsdsdds', 0, '0.00', '0.00', '0.00', '1527610610', 'Hello'),
(11, 19, 9, 'sdsdsddsd', 0, '0.00', '0.00', '0.00', '1527610884', 'Hello'),
(16, 18, 9, 'jklfjkgjkj1', 0, '0.00', '0.00', '0.00', '1528104385', 'fkjj'),
(17, 19, 10, 'ssssssssss', 0, '0.00', '0.00', '0.00', '1528104401', 'sass'),
(18, 13, 9, 'hdhh', 0, '0.00', '0.00', '0.00', '1528377548', 'hdhh'),
(19, 13, 9, 'a', 0, '0.00', '0.00', '0.00', '1528377554', 'a'),
(20, 13, 9, 'a', 0, '0.00', '0.00', '0.00', '1528377585', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `scriptolutionprojects`
--

CREATE TABLE `scriptolutionprojects` (
  `PID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `scriptolutionfreelancertitle` text NOT NULL,
  `scriptolutionfreelancerskills` text NOT NULL,
  `scriptolutionfreelancerdesc` text NOT NULL,
  `category` bigint(20) NOT NULL DEFAULT '0',
  `experience` varchar(255) NOT NULL,
  `scriptolutionfreelancerdays` bigint(10) NOT NULL DEFAULT '0',
  `feat` bigint(1) NOT NULL DEFAULT '0',
  `time_scriptolution` varchar(20) NOT NULL DEFAULT '',
  `time_added` varchar(20) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT '0000-00-00',
  `active` char(1) NOT NULL DEFAULT '',
  `last_viewed` varchar(20) NOT NULL DEFAULT '',
  `rating` float NOT NULL DEFAULT '0',
  `rcount` bigint(20) NOT NULL DEFAULT '0',
  `viewcount` bigint(20) NOT NULL DEFAULT '0',
  `pip` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `scriptolutionfreemin` bigint(10) NOT NULL DEFAULT '0',
  `scriptolutionfreemax` int(10) NOT NULL DEFAULT '0',
  `rev` bigint(20) NOT NULL DEFAULT '0',
  `short` varchar(200) NOT NULL,
  `scriptolutionjoblocation` varchar(200) NOT NULL DEFAULT '',
  `scriptolutioncity` varchar(100) NOT NULL DEFAULT '',
  `scriptolutionstate` varchar(100) NOT NULL DEFAULT '',
  `scriptolutioncountry` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scriptolutionprojects`
--

INSERT INTO `scriptolutionprojects` (`PID`, `USERID`, `scriptolutionfreelancertitle`, `scriptolutionfreelancerskills`, `scriptolutionfreelancerdesc`, `category`, `experience`, `scriptolutionfreelancerdays`, `feat`, `time_scriptolution`, `time_added`, `date_added`, `active`, `last_viewed`, `rating`, `rcount`, `viewcount`, `pip`, `p1`, `scriptolutionfreemin`, `scriptolutionfreemax`, `rev`, `short`, `scriptolutionjoblocation`, `scriptolutioncity`, `scriptolutionstate`, `scriptolutioncountry`) VALUES
(1, 0, 'Web Design', 'HTML,Java,Website Design', 'I need a Website Deign for a Institution Site', 2, 'Intermediate', 15, 0, '', '1526897753', '2018-05-21', '', '', 0, 0, 0, '', '', 200, 300, 0, '', '', '', '', ''),
(2, 2, 'Need Freesh Website Design', 'CSS,HTML,Website Design', 'Hi I need a project', 7, 'Beginner', 7, 0, '', '1527006481', '2018-05-22', '', '', 0, 0, 0, '', '', 50, 100, 0, '', '', '', '', ''),
(13, 19, 'need some formal letters', '', 'need some expert to write some important my company proposal and marketing.', 2, '', 17, 0, '', '1527845158', '2018-06-01', '1', '', 0, 0, 0, '', 'writting.jpg', 100, 100, 0, '', '', '', '', ''),
(16, 21, 'design new shop', 'Human Resources,Project Management', 'design new shop design new shopdesign new shop design new shop design new shop', 8, 'Expert', 3, 0, '', '1527845808', '2018-06-01', '3', '', 0, 0, 0, '', 'businness-card1.jpg', 1000, 1200, 0, '', '', '', '', ''),
(17, 23, 'need to fix some mechanical problem', 'Home Design,Human Resources,Landsaping,Leads,Logo Design,Painting,Python,SEO,Training', 'need to fix some mechanical problem need to fix some mechanical problem need to fix some mechanical problem need to fix some mechanical problemneed to fix some mechanical problem', 9, 'Expert', 12, 0, '', '1527845963', '2018-06-01', '3', '', 0, 0, 0, '', 'cat831030_1.jpg', 111, 200, 0, '', '', '', '', ''),
(18, 19, 'need to fix some mechanical problem', '', 'need to fix some mechanical problem need to fix some mechanical problem need to fix some mechanical problem need to fix some mechanical problemneed to fix some mechanical problem', 2, '', 12, 0, '', '1527845974', '2018-06-01', '3', '', 0, 0, 0, '', 'cat831030_11.jpg', 111, 200, 0, '', '', '', '', ''),
(30, 19, 'office assistant', 'Advertising,Articles,Bookkeeping', 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem', 7, 'Intermediate', 30, 0, '', '1529488682', '2018-06-20', '3', '', 0, 0, 0, '192.168.5.108', 'Desert2.jpg', 200, 500, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `skillscriptolution`
--

CREATE TABLE `skillscriptolution` (
  `SCRIPTOLUTIONSKID` bigint(20) NOT NULL,
  `scriptolutionskill` varchar(200) NOT NULL DEFAULT '',
  `scriptolutionseo` varchar(200) NOT NULL,
  `scriptolutionparent` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skillscriptolution`
--

INSERT INTO `skillscriptolution` (`SCRIPTOLUTIONSKID`, `scriptolutionskill`, `scriptolutionseo`, `scriptolutionparent`) VALUES
(1, 'Bookkeeping', 'Bookkeeping', 7),
(2, 'Data Entry', 'Dataentry', 7),
(3, 'Quickbooks', 'Quickbooks', 7),
(4, 'Quicken', 'Quicken', 7),
(5, 'Business Plans', 'BusinessPlans', 4),
(6, 'Project Management', 'ProjectManagement', 4),
(7, 'Human Resources', 'HumanResources', 4),
(8, 'Banner Design', 'BannerDesign', 2),
(9, 'Logo Design', 'LogoDesign', 2),
(10, 'Website Design', 'WebsiteDesign', 2),
(11, 'Photoshop Design', 'PhotoshopDesign', 2),
(12, 'Graphic Design', 'GraphicDesign', 2),
(13, '3D Design', '3DDesign', 2),
(14, 'Illustrator', 'Illustrator', 2),
(15, 'Business Cards', 'BusinessCards', 2),
(16, 'AutoCAD', 'AutoCAD', 6),
(17, 'CAD', 'CAD', 6),
(18, 'Home Design', 'HomeDesign', 6),
(19, 'Painting', 'Painting', 8),
(20, 'Cleaning', 'Cleaning', 8),
(21, 'Landsaping', 'Landsaping', 8),
(22, 'Shopping', 'Shopping', 8),
(23, 'Sales', 'Sales', 3),
(24, 'Social Media', 'SocialMedia', 3),
(25, 'Advertising', 'Advertising', 3),
(26, 'Leads', 'Leads', 3),
(27, 'Anything', 'Anything', 9),
(28, 'Tutoring', 'Tutoring', 9),
(29, 'Training', 'Training', 9),
(30, 'Dating', 'Dating', 9),
(31, 'Automotive', 'Automotive', 9),
(32, 'Angular', 'Angular', 1),
(33, 'Database Administration', 'DatabaseAdministration', 1),
(34, 'eCommerce', 'eCommerce', 1),
(35, 'HTML', 'HTML', 1),
(36, 'HTML5', 'HTML5', 1),
(37, 'Java', 'Java', 1),
(38, 'Javascript', 'Javascript', 1),
(39, 'Mac', 'Mac', 1),
(40, 'Node.js', 'Node', 1),
(41, 'MySQL', 'MySQL', 1),
(42, 'PHP', 'PHP', 1),
(43, 'Paypal', 'Paypal', 1),
(44, 'iOS', 'iOS', 1),
(45, 'Android', 'Android', 1),
(46, 'Python', 'Python', 1),
(47, 'Ruby on Rails', 'RubyonRails', 1),
(48, 'SEO', 'SEO', 1),
(49, 'Wordpress', 'Wordpress', 1),
(50, 'Windows', 'Windows', 1),
(51, 'User Interface', 'UserInterface', 1),
(52, 'Stripe', 'Stripe', 1),
(53, 'Visual Basic', 'VisualBasic', 1),
(54, 'Perl', 'Perl', 1),
(55, 'AJAX', 'AJAX', 1),
(56, 'jQuery', 'jQuery', 1),
(57, 'eBooks', 'eBooks', 5),
(58, 'Translation', 'Translation', 5),
(59, 'Articles', 'Articles', 5),
(60, 'Editing', 'Editing', 5),
(61, 'CSS', 'CSS', 2),
(67, 'qq', 'qq', 4),
(66, 'www', 'www', 7),
(68, 'bb', 'bb', 8);

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `ID` bigint(30) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`ID`, `title`, `value`) VALUES
(1, 'Terms Of Use', 'Insert your terms of use information here.<br><br>\r\n\r\nHTML is accepted.'),
(2, 'Privacy Policy', 'Insert your privacy policy information here.<br><br>\r\n\r\nHTML is accepted.'),
(3, 'About Us', 'Insert your about us information here.<br><br>\r\n\r\nHTML is accepted.'),
(4, 'Advertising', 'Insert your advertising information here.<br><br>\r\n\r\nHTML is accepted.'),
(5, 'Contact Us', 'Insert your contact us information here.<br><br>\r\n\r\nHTML is accepted.');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `WID` bigint(20) NOT NULL,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `time_added` varchar(20) DEFAULT NULL,
  `ap` bigint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`ADMINID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERID` (`USERID`,`AID`);

--
-- Indexes for table `bans_ips`
--
ALTER TABLE `bans_ips`
  ADD UNIQUE KEY `ip` (`ip`);

--
-- Indexes for table `bans_words`
--
ALTER TABLE `bans_words`
  ADD UNIQUE KEY `word` (`word`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CATID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `freelancerscript_dotcom_notity`
--
ALTER TABLE `freelancerscript_dotcom_notity`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `inbox2`
--
ALTER TABLE `inbox2`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `inbox_reports`
--
ALTER TABLE `inbox_reports`
  ADD PRIMARY KEY (`RID`),
  ADD UNIQUE KEY `MID` (`MID`,`USERID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`USERID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `members_passcode`
--
ALTER TABLE `members_passcode`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `members_verifycode`
--
ALTER TABLE `members_verifycode`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `memordersscriptolution`
--
ALTER TABLE `memordersscriptolution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paypal_table`
--
ALTER TABLE `paypal_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `txn_id` (`txn_id`),
  ADD KEY `txn_id_2` (`txn_id`);

--
-- Indexes for table `paypal_table2`
--
ALTER TABLE `paypal_table2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `txn_id` (`txn_id`),
  ADD KEY `txn_id_2` (`txn_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `scriptolutionorders`
--
ALTER TABLE `scriptolutionorders`
  ADD PRIMARY KEY (`MOID`);

--
-- Indexes for table `scriptolutionprojectbids`
--
ALTER TABLE `scriptolutionprojectbids`
  ADD PRIMARY KEY (`SCRIPTOLUTIONOFID`),
  ADD KEY `PID_2` (`PID`),
  ADD KEY `PID_3` (`PID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `scriptolutionprojects`
--
ALTER TABLE `scriptolutionprojects`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `skillscriptolution`
--
ALTER TABLE `skillscriptolution`
  ADD PRIMARY KEY (`SCRIPTOLUTIONSKID`),
  ADD UNIQUE KEY `name` (`scriptolutionskill`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`WID`),
  ADD UNIQUE KEY `USERID` (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `ADMINID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `AID` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CATID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `FID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelancerscript_dotcom_notity`
--
ALTER TABLE `freelancerscript_dotcom_notity`
  MODIFY `NID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `MID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inbox2`
--
ALTER TABLE `inbox2`
  MODIFY `MID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox_reports`
--
ALTER TABLE `inbox_reports`
  MODIFY `RID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `USERID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `memordersscriptolution`
--
ALTER TABLE `memordersscriptolution`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `IID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypal_table`
--
ALTER TABLE `paypal_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypal_table2`
--
ALTER TABLE `paypal_table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `RID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scriptolutionorders`
--
ALTER TABLE `scriptolutionorders`
  MODIFY `MOID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scriptolutionprojectbids`
--
ALTER TABLE `scriptolutionprojectbids`
  MODIFY `SCRIPTOLUTIONOFID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `scriptolutionprojects`
--
ALTER TABLE `scriptolutionprojects`
  MODIFY `PID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `skillscriptolution`
--
ALTER TABLE `skillscriptolution`
  MODIFY `SCRIPTOLUTIONSKID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `ID` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `WID` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
