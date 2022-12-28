-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 04:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izrada_web_stranica_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `datum_rodenja` date NOT NULL,
  `drzava` varchar(100) NOT NULL,
  `grad` varchar(100) NOT NULL,
  `ulica` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `lozinka` varchar(100) NOT NULL,
  `uloga` enum('administrator','user','editor') NOT NULL DEFAULT 'user',
  `odobren` enum('da','ne') NOT NULL DEFAULT 'ne'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `datum_rodenja`, `drzava`, `grad`, `ulica`, `email`, `korisnicko_ime`, `lozinka`, `uloga`, `odobren`) VALUES
(1, 'Aldo', 'Grabić', '1999-11-21', 'HR', 'Velika Gorica', 'Nikole Tesle 33', 'aldo.grabic99@gmail.com', 'agrabic', '$2y$12$6n.CbbymjrmbDlyk1EX82uLa2Ih9aR4uJ1F7.1jNwxW5vP5F5XZVG', 'administrator', 'da'),
(2, 'user', 'user', '2022-12-26', 'AF', 'Zagreb', 'Ilica', 'user@gmail.com', 'user', '$2y$12$mD5sq8ZrXPklPGUbO8sbA.Yjp9dWVYGlx.syYLPDUpWj3ywsWnWhS', 'user', 'da'),
(3, 'Marko', 'Markic', '2022-12-26', 'HR', 'Velika Gorica', 'Nikole Tesle 33', 'markomark@gmail.com', 'markic', '$2y$12$JulludanpdTq/v0MpOnChuO1WS341t/37pWClhiS/wrKBjacAlzAG', 'editor', 'da'),
(4, 'admin', 'admin', '2022-12-27', 'HR', 'Velika Gorica', 'Nikole Tesle', 'admin@gmail.com', 'admin', '$2y$12$7xWNcazatgC9hT07GlLnYeuhht1TqE.YUYtIveMyq1gIlIujgwrJS', 'administrator', 'da'),
(5, 'editor', 'editor', '2022-12-27', 'HR', 'Velika Gorica', 'Nikole Tesle', 'editor@gmail.com', 'editor', '$2y$12$W1CsrTkTTVCqESzJctZrf.VDdR/Q3xbd4umyp5TBuIBPYSm62qgHS', 'editor', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `primjeri_web_stranica`
--

CREATE TABLE `primjeri_web_stranica` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(255) NOT NULL,
  `datum_unosa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `arhivirano` enum('DA','NE') NOT NULL,
  `vise_slika` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `primjeri_web_stranica`
--

INSERT INTO `primjeri_web_stranica` (`id`, `naslov`, `tekst`, `slika`, `datum_unosa`, `arhivirano`, `vise_slika`) VALUES
(1, 'Naslov stranice', 'Tekst stranice', '', '2022-12-13 23:00:00', 'DA', NULL),
(2, 'Naslov stranice2', 'test2', '', '2022-12-26 20:54:28', 'DA', NULL),
(3, 'BMW M4', 'Auto bez greške! Web stranica osmišljena i izrađena u svrhu predmeta Web aplikacije. Na stranici se nalaze: početna stranica, novosti, o nama, kontakt te galerija slika. Opisuju se specifikacije novog te starijeg modela BMW M4 te najnoviji članci o njima. Galerija slika pokazuje svaku varijantu M4 - od slika s utrka do cestovnih. Kontakt forma je također uključena kojom se šalje upit BMW-u te prikaz najbliže poslovnice na Google Karti.', 'bmwm4.png', '2022-12-27 19:57:52', 'NE', 1),
(4, 'Portfolio - Aldo Grabić', 'Sve na jednom mjestu! Web stranica osmišljena i izrađena u svrhu prikaza CV-a i dosadašnjih projekata na jednom mjestu. Na stranici se nalaze: početna stranica, o sebi, vještine, popis projekata te kontakt forma. Web stranica je rađena u jednom dokumentu te ima mnogo funkcija, primjerice dark mode. U \"About\" dijelu opisano je o meni, u \"Skills\" moje vještine, a u \"Portfoliu\" se nalaze projekti i CV. Mogućnost laganog kontaktiranja uz kontakt formu ili e-mail.', 'portfolio.png', '2022-12-27 18:27:43', 'NE', 2),
(5, 'Rezervacija apartmana u Makarskoj', 'Rezerviraj sada!\r\nWeb stranica osmišljena i izrađena u svrhu pisanja završnog rada. Na stranici se nalaze: početna stranica, galerija, ponuda te rezervacija. Početna stranica daje nam opis apartmana, specifikacije o smještaju te prikaz adrese na Google Karti. Ponuda nam daje prikaz puta do Korčule te opis ponude, uključene u cijenu apartmana. Rezervaciju radi pomoću forme, u kojoj popunjavamo svoje podatke te odabiremo dodatne opcije.', 'rezervacija_apartmana.png', '2022-12-27 19:58:33', 'NE', 3),
(6, 'To-Do Lista', 'Nema više pamćenja!\r\nTo-Do Lista rješava sve Vaše probleme. Uklanja potrebu pisanja popisa obaveza na papir. U unos polje se upiše obaveza i pritisne gumb &quot;Dodaj&quot; ili klikne enter na tipkovnici. Nakon unosa prikazuju se sve unesene obaveze. Pritiskom na gumb &quot;Pošalji na e-mail&quot; šalje se popis na Vaš e-mail.', 'to_do_lista.png', '2022-12-27 18:27:55', 'NE', 4);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` int(11) NOT NULL,
  `slika1` varchar(255) NOT NULL,
  `slika2` varchar(255) NOT NULL,
  `slika3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `slika1`, `slika2`, `slika3`) VALUES
(1, 'bmwm4.png', 'bmwm4-2.png', 'bmwm4-3.png'),
(2, 'portfolio.png', 'portfolio-2.png', 'portfolio-3.png'),
(3, 'rezervacija_apartmana.png', 'rezervacija_apartmana-2.png', 'rezervacija_apartmana-3.png'),
(4, 'to_do_lista.png', 'to_do_lista-2.png', 'to_do_lista-3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primjeri_web_stranica`
--
ALTER TABLE `primjeri_web_stranica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vise_slika` (`vise_slika`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `primjeri_web_stranica`
--
ALTER TABLE `primjeri_web_stranica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `primjeri_web_stranica`
--
ALTER TABLE `primjeri_web_stranica`
  ADD CONSTRAINT `FK_vise_slika` FOREIGN KEY (`vise_slika`) REFERENCES `slike` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
