-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 04:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `About_Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `About_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `About_Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `About_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `About_Mobile` int(10) NOT NULL,
  `About_Facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `About_Youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `About_Google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`About_Title`, `About_Description`, `About_Address`, `About_Email`, `About_Mobile`, `About_Facebook`, `About_Youtube`, `About_Google`) VALUES
('SkyCompany - Công ty hàng đầu về đồ gốm sứ', 'Đồ gốm sứ Bát Tràng, lục bình, đồ dùng gia đình chất lượng cao.', '53 Võ Văn Ngân, Thủ Đức, TP.HCM', 'skycompany@gmail.com', 986197250, 'https://www.facebook.com/DucHamHD', 'https://www.youtube.com', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Banner_ID` int(10) UNSIGNED NOT NULL,
  `Banner_Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Banner_Link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Banner_Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_ID` int(10) NOT NULL,
  `Cart_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cart_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cart_Mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cart_Address` text COLLATE utf8_unicode_ci NOT NULL,
  `Cart_User` int(10) NOT NULL,
  `Cart_Message` text COLLATE utf8_unicode_ci NOT NULL,
  `Cart_Status` int(3) NOT NULL,
  `Cart_Note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_ID`, `Cart_Name`, `Cart_Email`, `Cart_Mobile`, `Cart_Address`, `Cart_User`, `Cart_Message`, `Cart_Status`, `Cart_Note`) VALUES
(8, 'Nguyen Duc', 'duchd94mufc@Gmail.com', '0986197250', 'thu duc', 13, '', 0, ''),
(9, 'Tên', 'duchd94mufc@gmail.com', '0986197250', 'thu duc', 13, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE `cartdetail` (
  `CartDetail_Cart` int(10) NOT NULL,
  `CartDetail_Product` int(10) UNSIGNED NOT NULL,
  `CartDetail_Quantity` int(10) NOT NULL,
  `CartDetail_Price` int(10) NOT NULL,
  `CartDetail_Promo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cartdetail`
--

INSERT INTO `cartdetail` (`CartDetail_Cart`, `CartDetail_Product`, `CartDetail_Quantity`, `CartDetail_Price`, `CartDetail_Promo`) VALUES
(8, 4, 1, 1000000, NULL),
(8, 6, 1, 1000000, NULL),
(9, 4, 1, 1000000, NULL),
(9, 1, 1, 450000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `Cat_ID` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `Cat_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên chuyên mục',
  `Cat_Thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Hình đại diện',
  `Cat_Keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa',
  `Cat_Parent` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thuộc chuyên mục',
  `Cat_Order` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thứ tự',
  `Cat_Hot` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Hot'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`Cat_ID`, `Cat_Name`, `Cat_Thumbnail`, `Cat_Keywords`, `Cat_Parent`, `Cat_Order`, `Cat_Hot`) VALUES
(1, 'Ấm chén Bát Tràng', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', 21, 0, 0),
(2, 'Tranh sứ Bát Tràng', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', 21, 0, 0),
(3, 'Bao ấm ủ - Điếu Bát', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', 0, 0, 0),
(4, 'Bộ đồ ăn Bát Tràng', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', 21, 0, 0),
(5, 'Đèn sứ thấu quang', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', 3, 0, 0),
(6, 'Lọ Lộc Bình', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây, lộc bình, lọ gốm', 3, 0, 0),
(7, 'Tranh gốm Bát Tràng', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây, tranh gốm, giá rẻ', 21, 0, 0),
(8, 'Tượng gốm sứ Bát Tràng', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây, tượng gốm, gốm sứ', 21, 0, 0),
(21, 'Bát Tràng', '', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây, tượng gốm, gốm sứ', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(10) UNSIGNED NOT NULL,
  `Contact_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Họ tên',
  `Contact_Mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Điện thoại',
  `Contact_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email',
  `Contact_Message` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Lời nhắn',
  `Contact_Datetime` datetime NOT NULL COMMENT 'Ngày gửi',
  `Contact_Note` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ghi chú'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Contact_Name`, `Contact_Mobile`, `Contact_Email`, `Contact_Message`, `Contact_Datetime`, `Contact_Note`) VALUES
(1, 'erewrwerewr', '2131313', 'werwer', '12321313', '2017-04-03 13:48:09', ''),
(2, 'gg', '33', 'gg', 'ff', '2017-04-03 16:06:09', ''),
(3, 'aaa', '111', 'aaa', '111', '2017-04-03 16:07:04', ''),
(4, 'sada', '22', 'asdasdsa', '2', '2017-04-03 16:09:14', ''),
(5, 'ds', '-2', 'sd', 'sd', '2017-04-03 16:12:12', ''),
(6, 'ds', '-2', 'sd', 'sd', '2017-04-03 16:12:39', ''),
(7, 'ds', '-2', 'sd', 'sd', '2017-04-03 16:13:31', ''),
(8, 'sad', '2', 'sda', 'sd', '2017-04-03 16:14:24', ''),
(9, 'as', '2', 'as', '22', '2017-04-03 16:15:43', ''),
(10, 'ee', '3', 'e@gmail.com', 'd', '2017-04-03 16:18:45', ''),
(11, 'ee', '3', 'e@gmail.com', 'd', '2017-04-03 16:20:53', ''),
(12, 'ee', '3', 'e@gmail.com', 'd', '2017-04-03 16:21:34', ''),
(13, 'fd', '123123', 'dd@gmail.com', '23', '2017-04-03 16:23:13', ''),
(14, 'jjhj', '5645645654', 'ab@gmail.com', '456546546546', '2017-04-04 07:23:57', ''),
(15, 'fdfsf', '12342432', '222@gmail.com', '324234', '2017-04-04 07:51:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_ID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `Country_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Country_Phone` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_ID`, `Country_Name`, `Country_Phone`) VALUES
('AC', 'Ascension Island', 247),
('AD', 'Andorra', 376),
('AE', 'United Arab Emirates (الإمارات العربية المتحدة‎)', 971),
('AF', 'Afghanistan (افغانستان‎)', 93),
('AG', 'Antigua &amp; Barbuda', 1268),
('AI', 'Anguilla', 1264),
('AL', 'Albania (Shqipëri)', 355),
('AM', 'Armenia (Հայաստան)', 374),
('AO', 'Angola', 244),
('AQ', 'Antarctica', 672),
('AR', 'Argentina', 54),
('AS', 'American Samoa', 1684),
('AT', 'Austria (Österreich)', 43),
('AU', 'Australia', 61),
('AW', 'Aruba', 297),
('AX', 'Åland Islands (Åland)', 0),
('AZ', 'Azerbaijan (Azərbaycan)', 994),
('BA', 'Bosnia &amp; Herzegovina (Босна и Херцеговина)', 387),
('BB', 'Barbados', 1246),
('BD', 'Bangladesh (বাংলাদেশ)', 880),
('BE', 'Belgium', 32),
('BF', 'Burkina Faso', 226),
('BG', 'Bulgaria (България)', 359),
('BH', 'Bahrain (البحرين‎)', 973),
('BI', 'Burundi (Uburundi)', 257),
('BJ', 'Benin (Bénin)', 229),
('BL', 'St. Barthélemy (Saint-Barthélemy)', 590),
('BM', 'Bermuda', 1441),
('BN', 'Brunei', 673),
('BO', 'Bolivia', 591),
('BQ', 'Caribbean Netherlands', 599),
('BR', 'Brazil (Brasil)', 55),
('BS', 'Bahamas', 1242),
('BT', 'Bhutan (འབྲུག)', 975),
('BV', 'Bouvet Island', 0),
('BW', 'Botswana', 267),
('BY', 'Belarus (Беларусь)', 375),
('BZ', 'Belize', 501),
('CA', 'Canada', 1),
('CC', 'Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))', 0),
('CD', 'Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)', 243),
('CF', 'Central African Republic (République centrafricaine)', 236),
('CG', 'Congo (Republic) (Congo-Brazzaville)', 242),
('CH', 'Switzerland (Schweiz)', 41),
('CI', 'Côte d’Ivoire', 225),
('CK', 'Cook Islands', 682),
('CL', 'Chile', 56),
('CM', 'Cameroon (Cameroun)', 237),
('CN', 'China (中国)', 86),
('CO', 'Colombia', 57),
('CP', 'Clipperton Island', 0),
('CR', 'Costa Rica', 506),
('CU', 'Cuba', 53),
('CV', 'Cape Verde (Kabu Verdi)', 238),
('CW', 'Curaçao', 599),
('CX', 'Christmas Island', 0),
('CY', 'Cyprus (Κύπρος)', 357),
('CZ', 'Czech Republic (Česká republika)', 420),
('DE', 'Germany (Deutschland)', 49),
('DG', 'Diego Garcia', 0),
('DJ', 'Djibouti', 253),
('DK', 'Denmark (Danmark)', 45),
('DM', 'Dominica', 1767),
('DO', 'Dominican Republic (República Dominicana)', 1809),
('DZ', 'Algeria', 213),
('EA', 'Ceuta &amp; Melilla (Ceuta y Melilla)', 0),
('EC', 'Ecuador', 593),
('EE', 'Estonia (Eesti)', 372),
('EG', 'Egypt (مصر‎)', 20),
('EH', 'Western Sahara (الصحراء الغربية‎)', 0),
('ER', 'Eritrea', 291),
('ES', 'Spain (España)', 34),
('ET', 'Ethiopia', 251),
('FI', 'Finland (Suomi)', 358),
('FJ', 'Fiji', 679),
('FK', 'Falkland Islands (Islas Malvinas)', 500),
('FM', 'Micronesia', 691),
('FO', 'Faroe Islands (Føroyar)', 298),
('FR', 'France', 33),
('GA', 'Gabon', 241),
('GB', 'United Kingdom', 44),
('GD', 'Grenada', 1473),
('GE', 'Georgia (საქართველო)', 995),
('GF', 'French Guiana (Guyane française)', 594),
('GG', 'Guernsey', 0),
('GH', 'Ghana (Gaana)', 233),
('GI', 'Gibraltar', 350),
('GL', 'Greenland (Kalaallit Nunaat)', 299),
('GM', 'Gambia', 220),
('GN', 'Guinea (Guinée)', 224),
('GP', 'Guadeloupe', 590),
('GQ', 'Equatorial Guinea (Guinea Ecuatorial)', 240),
('GR', 'Greece (Ελλάδα)', 30),
('GS', 'South Georgia &amp; South Sandwich Islands', 0),
('GT', 'Guatemala', 502),
('GU', 'Guam', 1671),
('GW', 'Guinea-Bissau (Guiné-Bissau)', 245),
('GY', 'Guyana', 592),
('HK', 'Hong Kong (香港)', 852),
('HM', 'Heard &amp; McDonald Islands', 0),
('HN', 'Honduras', 504),
('HR', 'Croatia (Hrvatska)', 385),
('HT', 'Haiti', 509),
('HU', 'Hungary (Magyarország)', 36),
('IC', 'Canary Islands (islas Canarias)', 0),
('ID', 'Indonesia', 62),
('IE', 'Ireland', 353),
('IL', 'Israel (ישראל‎)', 972),
('IM', 'Isle of Man', 0),
('IN', 'India (भारत)', 91),
('IO', 'British Indian Ocean Territory', 246),
('IQ', 'Iraq (العراق‎)', 964),
('IR', 'Iran (ایران‎)', 98),
('IS', 'Iceland (Ísland)', 354),
('IT', 'Italy (Italia)', 39),
('JE', 'Jersey', 0),
('JM', 'Jamaica', 1876),
('JO', 'Jordan (الأردن‎)', 962),
('JP', 'Japan (日本)', 81),
('KE', 'Kenya', 254),
('KG', 'Kyrgyzstan (Кыргызстан)', 996),
('KH', 'Cambodia (កម្ពុជា)', 855),
('KI', 'Kiribati', 686),
('KM', 'Comoros (جزر القمر‎)', 269),
('KN', 'St. Kitts &amp; Nevis', 1869),
('KP', 'North Korea (조선민주주의인민공화국)', 850),
('KR', 'South Korea (대한민국)', 82),
('KW', 'Kuwait (الكويت‎)', 965),
('KY', 'Cayman Islands', 1345),
('KZ', 'Kazakhstan (Казахстан)', 7),
('LA', 'Laos (ລາວ)', 856),
('LB', 'Lebanon (لبنان‎)', 961),
('LC', 'St. Lucia', 1758),
('LI', 'Liechtenstein', 423),
('LK', 'Sri Lanka (ශ්‍රී ලංකාව)', 94),
('LR', 'Liberia', 231),
('LS', 'Lesotho', 266),
('LT', 'Lithuania (Lietuva)', 370),
('LU', 'Luxembourg', 352),
('LV', 'Latvia (Latvija)', 371),
('LY', 'Libya (ليبيا‎)', 218),
('MA', 'Morocco', 212),
('MC', 'Monaco', 377),
('MD', 'Moldova (Republica Moldova)', 373),
('ME', 'Montenegro (Crna Gora)', 382),
('MF', 'St. Martin (Saint-Martin)', 590),
('MG', 'Madagascar (Madagasikara)', 261),
('MH', 'Marshall Islands', 692),
('MK', 'Macedonia (FYROM) (Македонија)', 389),
('ML', 'Mali', 223),
('MM', 'Myanmar (Burma) (မြန်မာ)', 95),
('MN', 'Mongolia (Монгол)', 976),
('MO', 'Macau (澳門)', 853),
('MP', 'Northern Mariana Islands', 1),
('MQ', 'Martinique', 596),
('MR', 'Mauritania (موريتانيا‎)', 222),
('MS', 'Montserrat', 1664),
('MT', 'Malta', 356),
('MU', 'Mauritius (Moris)', 230),
('MV', 'Maldives', 960),
('MW', 'Malawi', 265),
('MX', 'Mexico (México)', 52),
('MY', 'Malaysia', 60),
('MZ', 'Mozambique (Moçambique)', 258),
('NA', 'Namibia (Namibië)', 264),
('NC', 'New Caledonia (Nouvelle-Calédonie)', 687),
('NE', 'Niger (Nijar)', 227),
('NF', 'Norfolk Island', 6723),
('NG', 'Nigeria', 234),
('NI', 'Nicaragua', 505),
('NL', 'Netherlands (Nederland)', 31),
('NO', 'Norway (Norge)', 47),
('NP', 'Nepal (नेपाल)', 977),
('NR', 'Nauru', 674),
('NU', 'Niue', 683),
('NZ', 'New Zealand', 64),
('OM', 'Oman (عُمان‎)', 968),
('PA', 'Panama (Panamá)', 507),
('PE', 'Peru (Perú)', 51),
('PF', 'French Polynesia (Polynésie française)', 689),
('PG', 'Papua New Guinea', 675),
('PH', 'Philippines', 63),
('PK', 'Pakistan (پاکستان‎)', 92),
('PL', 'Poland (Polska)', 48),
('PM', 'St. Pierre &amp; Miquelon (Saint-Pierre-et-Miquelon)', 508),
('PN', 'Pitcairn Islands', 0),
('PR', 'Puerto Rico', 1787),
('PS', 'Palestine (فلسطين‎)', 970),
('PT', 'Portugal', 351),
('PW', 'Palau', 680),
('PY', 'Paraguay', 595),
('QA', 'Qatar (قطر‎)', 974),
('RE', 'Réunion (La Réunion)', 262),
('RO', 'Romania (România)', 40),
('RS', 'Serbia (Србија)', 381),
('RU', 'Russia (Россия)', 7),
('RW', 'Rwanda', 250),
('SA', 'Saudi Arabia (المملكة العربية السعودية‎)', 966),
('SB', 'Solomon Islands', 677),
('SC', 'Seychelles', 248),
('SD', 'Sudan (السودان‎)', 249),
('SE', 'Sweden (Sverige)', 46),
('SG', 'Singapore', 65),
('SH', 'St. Helena', 290),
('SI', 'Slovenia (Slovenija)', 386),
('SJ', 'Svalbard &amp; Jan Mayen (Svalbard og Jan Mayen)', 0),
('SK', 'Slovakia (Slovensko)', 421),
('SL', 'Sierra Leone', 232),
('SM', 'San Marino', 378),
('SN', 'Senegal', 221),
('SO', 'Somalia (Soomaaliya)', 252),
('SR', 'Suriname', 597),
('SS', 'South Sudan (جنوب السودان‎)', 211),
('ST', 'São Tomé &amp; Príncipe (São Tomé e Príncipe)', 239),
('SV', 'El Salvador', 503),
('SX', 'Sint Maarten', 1721),
('SY', 'Syria (سوريا‎)', 963),
('SZ', 'Swaziland', 268),
('TA', 'Tristan da Cunha', 0),
('TC', 'Turks &amp; Caicos Islands', 1649),
('TD', 'Chad (Tchad)', 235),
('TF', 'French Southern Territories (Terres australes françaises)', 0),
('TG', 'Togo', 228),
('TH', 'Thailand (ไทย)', 66),
('TJ', 'Tajikistan', 992),
('TK', 'Tokelau', 690),
('TL', 'Timor-Leste', 670),
('TM', 'Turkmenistan', 993),
('TN', 'Tunisia', 216),
('TO', 'Tonga', 676),
('TR', 'Turkey (Türkiye)', 90),
('TT', 'Trinidad &amp; Tobago', 1868),
('TV', 'Tuvalu', 688),
('TW', 'Taiwan (台灣)', 886),
('TZ', 'Tanzania', 255),
('UA', 'Ukraine (Україна)', 380),
('UG', 'Uganda', 256),
('UM', 'U.S. Outlying Islands', 0),
('US', 'United States', 1),
('UY', 'Uruguay', 598),
('UZ', 'Uzbekistan (Oʻzbekiston)', 998),
('VA', 'Vatican City (Città del Vaticano)', 379),
('VC', 'St. Vincent &amp; Grenadines', 1784),
('VE', 'Venezuela', 58),
('VG', 'British Virgin Islands', 1284),
('VI', 'U.S. Virgin Islands', 1340),
('VN', 'Vietnam (Việt Nam)', 84),
('VU', 'Vanuatu', 678),
('WF', 'Wallis &amp; Futuna', 681),
('WS', 'Samoa', 685),
('XK', 'Kosovo (Kosovë)', 0),
('YE', 'Yemen (اليمن‎)', 967),
('YT', 'Mayotte', 0),
('ZA', 'South Africa', 27),
('ZM', 'Zambia', 260),
('ZW', 'Zimbabwe', 263),
('ZZ', '» Unknown «', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `District_ID` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã quận/huyện',
  `District_Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Loại hình (Quận/Huyện)',
  `District_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên',
  `District_Province` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Thuộc tỉnh/thành phố',
  `District_Order` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thứ tự'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`District_ID`, `District_Type`, `District_Name`, `District_Province`, `District_Order`) VALUES
('001', 'Quận', 'Ba Đình', '01', 1),
('002', 'Quận', 'Hoàn Kiếm', '01', 6),
('003', 'Quận', 'Tây Hồ', '01', 9),
('004', 'Quận', 'Long Biên', '01', 8),
('005', 'Quận', 'Cầu Giấy', '01', 2),
('006', 'Quận', 'Đống Đa', '01', 3),
('007', 'Quận', 'Hai Bà Trưng', '01', 5),
('008', 'Quận', 'Hoàng Mai', '01', 7),
('009', 'Quận', 'Thanh Xuân', '01', 10),
('016', 'Huyện', 'Sóc Sơn', '01', 23),
('017', 'Huyện', 'Đông Anh', '01', 15),
('018', 'Huyện', 'Gia Lâm', '01', 16),
('019', 'Huyện', 'Từ Liêm', '01', 28),
('020', 'Huyện', 'Thanh Trì', '01', 26),
('250', 'Huyện', 'Mê Linh', '01', 18),
('268', 'Quận', 'Hà Đông', '01', 4),
('269', 'Thị Xã', 'Sơn Tây', '01', 11),
('271', 'Huyện', 'Ba Vì', '01', 12),
('272', 'Huyện', 'Phúc Thọ', '01', 21),
('273', 'Huyện', 'Đan Phượng', '01', 14),
('274', 'Huyện', 'Hoài Đức', '01', 17),
('275', 'Huyện', 'Quốc Oai', '01', 22),
('276', 'Huyện', 'Thạch Thất', '01', 24),
('277', 'Huyện', 'Chương Mỹ', '01', 13),
('278', 'Huyện', 'Thanh Oai', '01', 25),
('279', 'Huyện', 'Thường Tín', '01', 27),
('280', 'Huyện', 'Phú Xuyên', '01', 20),
('281', 'Huyện', 'Ứng Hòa', '01', 29),
('282', 'Huyện', 'Mỹ Đức', '01', 19),
('760', 'Quận', '1', '79', 1),
('761', 'Quận', '12', '79', 12),
('762', 'Quận', 'Thủ Đức', '79', 19),
('763', 'Quận', '9', '79', 9),
('764', 'Quận', 'Gò Vấp', '79', 15),
('765', 'Quận', 'Bình Thạnh', '79', 14),
('766', 'Quận', 'Tân Bình', '79', 17),
('767', 'Quận', 'Tân Phú', '79', 18),
('768', 'Quận', 'Phú Nhuận', '79', 16),
('769', 'Quận', '2', '79', 2),
('770', 'Quận', '3', '79', 3),
('771', 'Quận', '10', '79', 10),
('772', 'Quận', '11', '79', 11),
('773', 'Quận', '4', '79', 4),
('774', 'Quận', '5', '79', 5),
('775', 'Quận', '6', '79', 6),
('776', 'Quận', '8', '79', 8),
('777', 'Quận', 'Bình Tân', '79', 13),
('778', 'Quận', '7', '79', 7),
('783', 'Huyện', 'Củ Chi', '79', 22),
('784', 'Huyện', 'Hóc Môn', '79', 23),
('785', 'Huyện', 'Bình Chánh', '79', 20),
('786', 'Huyện', 'Nhà Bè', '79', 24),
('787', 'Huyện', 'Cần Giờ', '79', 21),
('916', 'Quận', 'Ninh Kiều', '92', 3),
('917', 'Quận', 'Ô Môn', '92', 5),
('918', 'Quận', 'Bình Thuỷ', '92', 1),
('919', 'Quận', 'Cái Răng', '92', 2),
('923', 'Quận', 'Thốt Nốt', '92', 4),
('924', 'Huyện', 'Vĩnh Thạnh', '92', 9),
('925', 'Huyện', 'Cờ Đỏ', '92', 6),
('926', 'Huyện', 'Phong Điền', '92', 7),
('927', 'Huyện', 'Thới Lai', '92', 8);

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `Manu_ID` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `Manu_Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề',
  `Manu_Thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh đại diện',
  `Manu_Description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả',
  `Manu_Keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa',
  `Manu_Content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung',
  `Manu_Priority` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Ưu tiên',
  `Manu_Datetime` datetime NOT NULL COMMENT 'Ngày giờ',
  `Manu_Show` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Hiển thị (0: Ẩn; 1: Hiện)',
  `Manu_Hot` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'HOT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bài viết';

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `News_Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề',
  `News_Cat` int(10) UNSIGNED NOT NULL COMMENT 'Chuyên mục',
  `News_Thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh đại diện',
  `News_Description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả',
  `News_Keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa',
  `News_Content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung',
  `News_Priority` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Ưu tiên',
  `News_Datetime` datetime NOT NULL COMMENT 'Ngày giờ',
  `News_CountView` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Lượt xem',
  `News_Show` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Hiển thị (0: Ẩn; 1: Hiện)',
  `News_Hot` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'HOT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bài viết';

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(10) UNSIGNED NOT NULL,
  `Product_MID` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã sản phẩm',
  `Product_Thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh đại diện',
  `Product_Image` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Các ảnh sản phẩm',
  `Product_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên sản phẩm',
  `Product_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả',
  `Product_Keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khoá',
  `Product_Content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung chi tiết',
  `Product_Manu` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Hãng sản xuất',
  `Product_PriceMarket` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Giá thị trường',
  `Product_Price` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Giá bán',
  `Product_Size` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Size',
  `Product_Color` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Màu',
  `Product_InStock` tinyint(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT '0: Hết hàng; 1: Còn hàng',
  `Product_Show` tinyint(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT '0: Ẩn; 1: Hiện',
  `Product_Priority` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Ưu tiên',
  `Product_Hot` tinyint(1) NOT NULL DEFAULT '0',
  `Product_Datetime` datetime NOT NULL COMMENT 'Ngày đăng',
  `Product_CountView` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Lượt xem',
  `Product_Cat` int(10) UNSIGNED NOT NULL COMMENT 'Thuộc chuyên mục',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Sản phẩm';

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_MID`, `Product_Thumbnail`, `Product_Image`, `Product_Name`, `Product_Description`, `Product_Keywords`, `Product_Content`, `Product_Manu`, `Product_PriceMarket`, `Product_Price`, `Product_Size`, `Product_Color`, `Product_InStock`, `Product_Show`, `Product_Priority`, `Product_Hot`, `Product_Datetime`, `Product_CountView`, `Product_Cat`, `slug`) VALUES
(1, 'D001', 'dogom4.jpg', 'dogom1.jpg,dogom2.jpg,dogom3.jpg', 'Bát hương Rồng nổi - men rạn cổ', 'Trong quan niệm người Việt , rồng luôn là con vật linh thiêng , biểu tượng cho quyền uy , sức mạnh. Và trong tâm thức người dân Việt Nam , rồng có vị trí đặc biệt về văn hoá, tín ngưỡng , nó biểu tượng cho quyền uy tuyệt đối của các đấng Thiên Tử. Rồng cũ', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', ' Màu men: rạn cổ\n\n Đường kính 20 cm\n\n Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…Thực sự là một thú chơi tao nhã, nó khiến người ta thanh tao thoát tục, mà cũng rất trần thế\n\nSản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.\n\nĐiếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 0, 500000, 450000, 'L,XL,M,S', '', 1, 1, 0, 1, '2017-03-16 00:00:00', 6, 3, ''),
(2, 'D002', 'dogom1.jpg', 'dogom1.jpg', 'Lọ lộc bình rồng nổi ', 'Trong quan niệm người Việt , rồng luôn là con vật linh thiêng , biểu tượng cho quyền uy , sức mạnh. Và trong tâm thức người dân Việt Nam , rồng có vị trí đặc biệt về văn hoá, tín ngưỡng , nó biểu tượng cho quyền uy tuyệt đối của các đấng Thiên Tử. Rồng cũ', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', ' Màu men: rạn cổ\n\n Đường kính 20 cm\n\n Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…Thực sự là một thú chơi tao nhã, nó khiến người ta thanh tao thoát tục, mà cũng rất trần thế\n\nSản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.\n\nĐiếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 0, 1000000, 950000, 'L,XL,M', '', 1, 1, 0, 0, '2017-03-27 00:00:01', 28, 21, ''),
(4, 'A001', 'dogom3.jpg', 'dogom3.jpg', 'Điếu bát bọc đồng vẽ hoa đào hóa phượng', 'Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', ' Màu men: rạn cổ\n\n Đường kính 20 cm\n\n Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…Thực sự là một thú chơi tao nhã, nó khiến người ta thanh tao thoát tục, mà cũng rất trần thế\n\nSản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.\n\nĐiếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 0, 1500000, 1000000, 'M,S', '', 1, 1, 0, 1, '2017-03-26 00:00:00', 8, 3, ''),
(5, 'SI001', 'dogom5.jpg', 'dogom5.jpg', 'Tranh Tứ Quý - vẽ cảnh Tùng-Cúc-Trúc-Mai ', 'Sản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', ' Màu men: rạn cổ\n\n Đường kính 20 cm\n\n Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…Thực sự là một thú chơi tao nhã, nó khiến người ta thanh tao thoát tục, mà cũng rất trần thế\n\nSản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.\n\nĐiếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 0, 420000, 400000, 'L,XL,M,S', '', 1, 1, 0, 0, '2017-03-12 00:00:00', 3, 21, ''),
(6, 'IS01', 'dogom6.jpg', 'dogom6.jpg', 'Bộ ấm tử sa đen - Đắp nổi hoa phù dung đỏ', 'Sản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', ' Màu men: rạn cổ\n\n Đường kính 20 cm\n\n Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…Thực sự là một thú chơi tao nhã, nó khiến người ta thanh tao thoát tục, mà cũng rất trần thế\n\nSản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.\n\nĐiếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 0, 1200000, 1000000, 'L,XL,M,S,B', '', 1, 1, 0, 1, '2017-03-03 00:00:00', 1, 3, ''),
(7, 'VA53', 'dogom7.png', 'dogom7.png', 'Bộ ấm chén vai vuông hoa mai trắng', 'Điếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 'ấm chén, bát tràng, hội an, việt nam, hà nội, hà tây', ' Màu men: rạn cổ\n\n Đường kính 20 cm\n\n Khách đến nhà, mời nhau điếu thuốc, trong làn khói mờ ảo, nhấp ngụm trà ướp hương hoa, khách và chủ vừa đàm đạo vừa ngắm nhìn, bình phẩm những hoạ tiết cầu kỳ, đặc sắc hay những tích tuồng trên chiếc điếu bát bằng gốm sứ…Thực sự là một thú chơi tao nhã, nó khiến người ta thanh tao thoát tục, mà cũng rất trần thế\n\nSản phẩm điếu bát Bát Tràng được bọc đồng với chất liệu men lam đặc trưng của làng gốm tạo cho sản phẩm nét gì đó cổ xưa, tao nhã.\n\nĐiếu bát bọc đồng có thể sử dụng như sản phẩm thông dụng, hoặc cũng có thể dùng làm vật trang trí, trưng bày rất đẹp.', 0, 640000, 500000, 'XL,M,S,I', '', 1, 1, 0, 0, '2017-03-04 00:00:00', 3, 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `Province_ID` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã tỉnh/thành phố',
  `Province_Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Loại hình (Tỉnh/Thành phố)',
  `Province_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên',
  `Province_Priority` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Ưu tiên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`Province_ID`, `Province_Type`, `Province_Name`, `Province_Priority`) VALUES
('01', 'Thành phố', 'Hà Nội', 997),
('02', 'Tỉnh', 'Hà Giang', 0),
('04', 'Tỉnh', 'Cao Bằng', 0),
('06', 'Tỉnh', 'Bắc Kạn', 0),
('08', 'Tỉnh', 'Tuyên Quang', 0),
('10', 'Tỉnh', 'Lào Cai', 0),
('11', 'Tỉnh', 'Điện Biên', 0),
('12', 'Tỉnh', 'Lai Châu', 0),
('14', 'Tỉnh', 'Sơn La', 0),
('15', 'Tỉnh', 'Yên Bái', 0),
('17', 'Tỉnh', 'Hoà Bình', 0),
('19', 'Tỉnh', 'Thái Nguyên', 0),
('20', 'Tỉnh', 'Lạng Sơn', 0),
('22', 'Tỉnh', 'Quảng Ninh', 0),
('24', 'Tỉnh', 'Bắc Giang', 0),
('25', 'Tỉnh', 'Phú Thọ', 0),
('26', 'Tỉnh', 'Vĩnh Phúc', 0),
('27', 'Tỉnh', 'Bắc Ninh', 0),
('30', 'Tỉnh', 'Hải Dương', 0),
('31', 'Thành phố', 'Hải Phòng', 0),
('33', 'Tỉnh', 'Hưng Yên', 0),
('34', 'Tỉnh', 'Thái Bình', 0),
('35', 'Tỉnh', 'Hà Nam', 0),
('36', 'Tỉnh', 'Nam Định', 0),
('37', 'Tỉnh', 'Ninh Bình', 0),
('38', 'Tỉnh', 'Thanh Hoá', 0),
('40', 'Tỉnh', 'Nghệ An', 0),
('42', 'Tỉnh', 'Hà Tĩnh', 0),
('44', 'Tỉnh', 'Quảng Bình', 0),
('45', 'Tỉnh', 'Quảng Trị', 0),
('46', 'Tỉnh', 'Thừa Thiên Huế', 0),
('48', 'Thành phố', 'Đà Nẵng', 0),
('49', 'Tỉnh', 'Quảng Nam', 0),
('51', 'Tỉnh', 'Quảng Ngãi', 0),
('52', 'Tỉnh', 'Bình Định', 0),
('54', 'Tỉnh', 'Phú Yên', 0),
('56', 'Tỉnh', 'Khánh Hoà', 0),
('58', 'Tỉnh', 'Ninh Thuận', 0),
('60', 'Tỉnh', 'Bình Thuận', 0),
('62', 'Tỉnh', 'Kon Tum', 0),
('64', 'Tỉnh', 'Gia Lai', 0),
('66', 'Tỉnh', 'Đắk Lắk', 0),
('67', 'Tỉnh', 'Đắk Nông', 0),
('68', 'Tỉnh', 'Lâm Đồng', 0),
('70', 'Tỉnh', 'Bình Phước', 0),
('72', 'Tỉnh', 'Tây Ninh', 0),
('74', 'Tỉnh', 'Bình Dương', 0),
('75', 'Tỉnh', 'Đồng Nai', 0),
('77', 'Tỉnh', 'Bà Rịa - Vũng Tàu', 0),
('79', 'Thành phố', 'Hồ Chí Minh', 998),
('80', 'Tỉnh', 'Long An', 0),
('82', 'Tỉnh', 'Tiền Giang', 0),
('83', 'Tỉnh', 'Bến Tre', 0),
('84', 'Tỉnh', 'Trà Vinh', 0),
('86', 'Tỉnh', 'Vĩnh Long', 0),
('87', 'Tỉnh', 'Đồng Tháp', 0),
('89', 'Tỉnh', 'An Giang', 0),
('91', 'Tỉnh', 'Kiên Giang', 0),
('92', 'Thành phố', 'Cần Thơ', 999),
('93', 'Tỉnh', 'Hậu Giang', 0),
('94', 'Tỉnh', 'Sóc Trăng', 0),
('95', 'Tỉnh', 'Bạc Liêu', 0),
('96', 'Tỉnh', 'Cà Mau', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `Slide_ID` int(10) UNSIGNED NOT NULL,
  `Slide_Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề',
  `Slide_Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả',
  `Slide_Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh',
  `Slide_Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Liên kết',
  `Slide_Target` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self' COMMENT 'Mở trong.. (self: cửa sổ hiện tại; _blank: cửa sổ mới)',
  `Slide_Order` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thứ tự',
  `Slide_Cat` int(10) UNSIGNED NOT NULL COMMENT 'Thuộc chuyên mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`Slide_ID`, `Slide_Title`, `Slide_Description`, `Slide_Image`, `Slide_Link`, `Slide_Target`, `Slide_Order`, `Slide_Cat`) VALUES
(1, 'Slide 1', 'Đồ gốm mỹ nghệ', 'gom1.jpg', '', '', 0, 0),
(2, 'Slide 2', 'Đồ gốm thủ công', 'gom2.jpg', '', '', 0, 0),
(3, 'Slide 3', 'Chén sứ cao cấp', 'gom3.jpg', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `Supplies_ID` int(10) UNSIGNED NOT NULL,
  `Supplies_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Supplies_Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Supplies_Quantity` int(10) DEFAULT NULL,
  `Supplies_Note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Supplies_User` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(10) UNSIGNED NOT NULL,
  `User_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_FirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_LastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `User_Birthday` date NOT NULL,
  `User_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_EmailActive` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `User_Mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `User_MobileActive` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `User_Country` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `User_Zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Password` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_SID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_RootAdmin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `User_RegisteredDatetime` datetime NOT NULL,
  `User_LoggedDatetime` datetime NOT NULL,
  `User_LoggedIP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_LoggedCount` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `User_FBID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_FBData` text COLLATE utf8_unicode_ci NOT NULL,
  `User_FBUpdatedDatetime` datetime NOT NULL,
  `User_GID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_GData` text COLLATE utf8_unicode_ci NOT NULL,
  `User_Provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_ProviderID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Token` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `User_FirstName`, `User_LastName`, `User_Gender`, `User_Birthday`, `User_Email`, `User_EmailActive`, `User_Mobile`, `User_MobileActive`, `User_Country`, `User_Zipcode`, `User_Address`, `User_Password`, `User_SID`, `User_RootAdmin`, `User_RegisteredDatetime`, `User_LoggedDatetime`, `User_LoggedIP`, `User_LoggedCount`, `User_FBID`, `User_FBData`, `User_FBUpdatedDatetime`, `User_GID`, `User_GData`, `User_Provider`, `User_ProviderID`, `User_Token`) VALUES
(13, 'Administrator', '', '', '', '0000-00-00', 'admin@admin.com', 0, '', 0, '', '', '', '$2y$10$4ypdvmZl9skWePX/0G7bPekLL0/zMiusn5D/sRna.utWu07f8HDh2', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', 'PcUjqFUoX66fvAALX5ZGLsmhaatPLjRfH0iag85ZZfNgrmEW3vGci15PRd0F'),
(24, 'Hoàng Sang', '', '', '', '0000-00-00', 'hoangsang10@yahoo.com', 0, '', 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00 00:00:00', '', '', 'facebook', '1398830030161000', 'UjPNC2Mw4AJDgl0SPAa6f2V9iFY60XHebE8xttX1nRTzbfjF3y8GDFs83DMh'),
(25, 'BuHeo FanBoy', '', '', '', '0000-00-00', 'buheo1231995@gmail.com', 0, '', 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00 00:00:00', '', '', 'google', '102198200327268691286', ''),
(26, 'sang sang', '', '', '', '0000-00-00', 'sang@sang.com', 0, '', 0, '', '', '', '$2y$10$ROj2FAs/7ifxEoGcurCXze9Jf7jnC6CgvkQvBwdMSI2mh00HgiDc6', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', 'iJE2uCDWuvzxB0k62vdygUMRCkoPQXSbdAW0FYtMp1SUCvJFhZGLqNabzz9B'),
(27, 'sang', '', '', '', '0000-00-00', 'sang@sang.com', 0, '', 0, '', '', '', '$2y$10$d5GYrJ6pVntU28O0zsNT0eHrMjbaL4lHfmmrNK2LU/INKP2LYtsfS', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `Warehouse_Product` int(10) UNSIGNED NOT NULL,
  `Warehouse_Count` int(10) NOT NULL,
  `Warehouse_User` int(10) UNSIGNED NOT NULL,
  `Warehouse_Datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`Warehouse_Product`, `Warehouse_Count`, `Warehouse_User`, `Warehouse_Datetime`) VALUES
(2, 5, 13, '2017-04-25 02:37:44'),
(2, -10, 13, '2017-04-25 02:37:59'),
(6, 1, 13, '2017-04-25 03:02:19'),
(5, 1, 13, '2017-04-25 03:02:19'),
(6, 1, 13, '2017-04-25 09:45:15'),
(1, 2, 13, '2017-04-25 09:45:15'),
(5, 3, 13, '2017-04-25 09:45:15'),
(7, 4, 13, '2017-04-25 09:45:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`About_Title`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Banner_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD KEY `FK_CARTDETAIL_CART` (`CartDetail_Cart`),
  ADD KEY `FK_CARTDETAIL_PRODUCT` (`CartDetail_Product`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Country_ID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`District_ID`),
  ADD KEY `FK_district_province` (`District_Province`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`Manu_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`),
  ADD KEY `FK_news_cat` (`News_Cat`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `FK_product_cat` (`Product_Cat`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`Province_ID`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`Slide_ID`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`Supplies_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD KEY `FK_WAREHOUSE_PRODUCT` (`Warehouse_Product`),
  ADD KEY `FK_WAREHOUSE_USER` (`Warehouse_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `Cat_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `Manu_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `Slide_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD CONSTRAINT `FK_CARTDETAIL_CART` FOREIGN KEY (`CartDetail_Cart`) REFERENCES `cart` (`Cart_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CARTDETAIL_PRODUCT` FOREIGN KEY (`CartDetail_Product`) REFERENCES `product` (`Product_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `FK_district_province` FOREIGN KEY (`District_Province`) REFERENCES `province` (`Province_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_cat` FOREIGN KEY (`News_Cat`) REFERENCES `cat` (`Cat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_cat` FOREIGN KEY (`Product_Cat`) REFERENCES `cat` (`Cat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `FK_WAREHOUSE_PRODUCT` FOREIGN KEY (`Warehouse_Product`) REFERENCES `product` (`Product_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_WAREHOUSE_USER` FOREIGN KEY (`Warehouse_User`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
