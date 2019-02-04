-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2019 at 11:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cellar`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_config`
--

DROP TABLE IF EXISTS `app_config`;
CREATE TABLE IF NOT EXISTS `app_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app_config`
--

INSERT INTO `app_config` (`id`, `app_title`, `about`, `address`, `email`, `phone`) VALUES
(1, 'My App', 'App Description', 'Bla bla', 'app@server.com', '+53 5 123 4567');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(8, 'Baron Lescompte'),
(4, 'Chanceler'),
(6, 'Crowley\'s'),
(5, 'Cubay'),
(1, 'Havana Club'),
(2, 'Mulata'),
(3, 'Old Premiers'),
(7, 'Perla del Norte'),
(9, 'Yayabo');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Aguardiente'),
(8, 'Champaña'),
(4, 'Licor'),
(1, 'Ron'),
(10, 'Sake'),
(7, 'Sidra'),
(9, 'Tequila'),
(5, 'Vino'),
(6, 'Vodka'),
(3, 'Whisky');

-- --------------------------------------------------------

--
-- Table structure for table `category_type`
--

DROP TABLE IF EXISTS `category_type`;
CREATE TABLE IF NOT EXISTS `category_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_categorytype_nametype` (`name`,`type_id`),
  KEY `fk_categorytype_type` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_type`
--

INSERT INTO `category_type` (`id`, `name`, `type_id`) VALUES
(36, '100% agave', 9),
(35, '51% agave', 9),
(23, 'Achampañada', 7),
(6, 'Aguardiente de caña', 2),
(12, 'Aliñao', 4),
(5, 'Añejo', 1),
(46, 'Añejo Blanco', 1),
(10, 'Anís', 4),
(33, 'Blanc de blancs', 8),
(34, 'Blanc de nors', 8),
(17, 'Blanco', 5),
(26, 'Brut', 8),
(24, 'Brut nature', 8),
(2, 'Carta blanca', 1),
(4, 'Carta dorada', 1),
(11, 'Crema de vie', 4),
(32, 'Cremant', 8),
(13, 'Curacao', 4),
(21, 'De hielo', 7),
(29, 'Demi sec', 8),
(30, 'Doux', 8),
(15, 'Dulce', 5),
(20, 'Dulce', 7),
(14, 'Eros', 4),
(25, 'Extra brut', 8),
(27, 'Extra sec', 8),
(44, 'Futsushu', 10),
(45, 'Genshu', 10),
(42, 'Honjozo', 10),
(40, 'Hoshu', 10),
(38, 'Junmai', 10),
(8, 'Menta', 4),
(41, 'Namachozo', 10),
(37, 'Namazake', 10),
(9, 'Naranja', 4),
(22, 'Natural', 7),
(39, 'Nigori', 10),
(1, 'Refino', 1),
(18, 'Rosado', 5),
(31, 'Rose', 8),
(28, 'Sec', 8),
(3, 'Silver dry', 1),
(43, 'Taru', 10),
(16, 'Tinto', 5),
(19, 'Vodka', 6),
(7, 'Whisky', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cellar`
--

DROP TABLE IF EXISTS `cellar`;
CREATE TABLE IF NOT EXISTS `cellar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cellar`
--

INSERT INTO `cellar` (`id`, `name`, `description`, `avatar`) VALUES
(1, 'Isabella 15', 'Colección de bebidas para la fiesta por los 15 años de Isabella.', NULL),
(2, 'Daniela 15', 'Colección de bebidas para la fiesta por los 15 años de Daniela.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bermuda'),
(21, 'Bhutan'),
(22, 'Bolivia, Plurinational State of'),
(23, 'Bosnia and Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei Darussalam'),
(27, 'Bulgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Cabo Verde'),
(31, 'Cambodia'),
(32, 'Cameroon'),
(33, 'Canada'),
(34, 'Cape Verde'),
(35, 'Cayman Islands'),
(36, 'Central African Republic'),
(37, 'Chad'),
(38, 'Chile'),
(39, 'China'),
(40, 'Colombia'),
(41, 'Comoros'),
(42, 'Congo, the Democratic Republic of the'),
(43, 'Costa Rica'),
(44, 'Côte d\'Ivoire'),
(45, 'Croatia'),
(46, 'Cuba'),
(47, 'Cyprus'),
(48, 'Czech Republic'),
(49, 'Denmark'),
(50, 'Djibouti'),
(51, 'Dominica'),
(52, 'Dominican Republic'),
(53, 'Ecuador'),
(54, 'Egypt'),
(55, 'El Salvador'),
(56, 'Equatorial Guinea'),
(57, 'Eritrea'),
(58, 'Estonia'),
(59, 'Eswatini'),
(60, 'Ethiopia'),
(61, 'Faroe Islands'),
(62, 'Federated States of Micronesia'),
(63, 'Fiji'),
(64, 'Finland'),
(65, 'France'),
(66, 'French Guiana'),
(67, 'French Polynesia'),
(68, 'Gabon'),
(69, 'Gambia'),
(70, 'Georgia'),
(71, 'Germany'),
(72, 'Ghana'),
(73, 'Greece'),
(74, 'Greenland'),
(75, 'Grenada'),
(76, 'Guadeloupe'),
(77, 'Guam'),
(78, 'Guatemala'),
(79, 'Guinea'),
(80, 'Guinea-Bissau'),
(81, 'Guyana'),
(82, 'Haiti'),
(83, 'Holy See (Vatican City State)'),
(84, 'Honduras'),
(85, 'Hong Kong'),
(86, 'Hungary'),
(87, 'Iceland'),
(88, 'India'),
(89, 'Indonesia'),
(90, 'Iran, Islamic Republic of'),
(91, 'Iraq'),
(92, 'Ireland'),
(93, 'Israel'),
(94, 'Italy'),
(95, 'Jamaica'),
(96, 'Japan'),
(97, 'Jordan'),
(98, 'Kazakhstan'),
(99, 'Kenya'),
(100, 'Kiribati'),
(101, 'Korea, Democratic People\'s Republic of'),
(102, 'Korea, Republic of'),
(103, 'Kosovo'),
(104, 'Kuwait'),
(105, 'Kyrgyzstan'),
(106, 'Lao People\'s Democratic Republic'),
(107, 'Latvia'),
(108, 'Lebanon'),
(109, 'Lesotho'),
(110, 'Liberia'),
(111, 'Libya'),
(112, 'Liechtenstein'),
(113, 'Lithuania'),
(114, 'Luxembourg'),
(115, 'Macao'),
(116, 'Macedonia, the Former Yugoslav Republic of'),
(117, 'Madagascar'),
(118, 'Malawi'),
(119, 'Malaysia'),
(120, 'Maldives'),
(121, 'Mali'),
(122, 'Malta'),
(123, 'Marshall Islands'),
(124, 'Martinique'),
(125, 'Mauritania'),
(126, 'Mauritius'),
(127, 'Mexico'),
(128, 'Moldova, Republic of'),
(129, 'Monaco'),
(130, 'Mongolia'),
(131, 'Montenegro'),
(132, 'Montserrat'),
(133, 'Morocco'),
(134, 'Mozambique'),
(135, 'Myanmar'),
(136, 'Namibia'),
(137, 'Nauru'),
(138, 'Nepal'),
(139, 'Netherlands'),
(140, 'New Caledonia'),
(141, 'New Zealand'),
(142, 'Nicaragua'),
(143, 'Niger'),
(144, 'Nigeria'),
(145, 'Niue'),
(146, 'Norway'),
(147, 'Oman'),
(148, 'Pakistan'),
(149, 'Palau'),
(150, 'Palestine, State of'),
(151, 'Panama'),
(152, 'Papua New Guinea'),
(153, 'Paraguay'),
(154, 'Peru'),
(155, 'Philippines'),
(156, 'Poland'),
(157, 'Portugal'),
(158, 'Puerto Rico'),
(159, 'Qatar'),
(160, 'Réunion'),
(161, 'Romania'),
(162, 'Russian Federation'),
(163, 'Rwanda'),
(164, 'Saint Kitts and Nevis'),
(165, 'Saint Lucia'),
(166, 'Saint Vincent and the Grenadines'),
(167, 'Samoa'),
(168, 'San Marino'),
(169, 'São Tomé and Príncipe'),
(170, 'Saudi Arabia'),
(171, 'Senegal'),
(172, 'Serbia'),
(173, 'Seychelles'),
(174, 'Sierra Leone'),
(175, 'Singapore'),
(176, 'Slovakia'),
(177, 'Slovenia'),
(178, 'Solomon Islands'),
(179, 'Somalia'),
(180, 'South Africa'),
(181, 'South Sudan'),
(182, 'Spain'),
(183, 'Sri Lanka'),
(184, 'Sudan'),
(185, 'Suriname'),
(186, 'Swaziland'),
(187, 'Sweden'),
(188, 'Switzerland'),
(189, 'Syrian Arab Republic'),
(190, 'Taiwan, Province of China'),
(191, 'Tajikistan'),
(192, 'Tanzania, United Republic of'),
(193, 'Thailand'),
(194, 'Timor-Leste'),
(195, 'Togo'),
(196, 'Tonga'),
(197, 'Trinidad and Tobago'),
(198, 'Tunisia'),
(199, 'Turkey'),
(200, 'Turkmenistan'),
(201, 'Turks and Caicos Islands'),
(202, 'Tuvalu'),
(203, 'Uganda'),
(204, 'Ukraine'),
(205, 'United Arab Emirates'),
(206, 'United Kingdom'),
(207, 'United States of America'),
(208, 'Uruguay'),
(209, 'Uzbekistan'),
(210, 'Vanuatu'),
(211, 'Venezuela, Bolivarian Republic of'),
(212, 'Viet Nam'),
(213, 'Virgin Islands, British'),
(214, 'Yemen'),
(215, 'Zambia'),
(216, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1549232493),
('m130524_201442_init', 1549232496),
('m180829_165801_create_role_table', 1549232496),
('m180829_165802_create_user_role_table', 1549232497),
('m180829_165803_create_app_config_table', 1549232497),
('m180829_165804_create_cellar_table', 1549232498),
('m180829_200427_create_brand_table', 1549232498),
('m180829_200437_create_category_table', 1549232499),
('m180829_200444_create_category_type_table', 1549232501),
('m180829_201104_create_country_table', 1549232506),
('m180829_201108_create_product_table', 1549232509),
('m180829_201125_insert_users_roles_config', 1549232510);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `capacity` float NOT NULL,
  `alcoholic_proof` float NOT NULL,
  `aging` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `price` float NOT NULL,
  `category_type_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `cellar_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category` (`category_type_id`),
  KEY `fk_product_brand` (`brand_id`),
  KEY `fk_product_country` (`country_id`),
  KEY `fk_product_cellar` (`cellar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `number`, `date`, `capacity`, `alcoholic_proof`, `aging`, `status`, `price`, `category_type_id`, `brand_id`, `country_id`, `cellar_id`) VALUES
(1, '2018/05/23', 1, 1, 700, 40, NULL, 1, 100, 7, 6, 65, 1),
(2, '2018/08/23', 1, 1, 700, 40, NULL, 1, 35, 5, 7, 46, 2),
(3, '2018/12/03 - Regalo de Raffaele', 2, 1, 750, 12.5, NULL, 1, 0, 16, 8, 182, 1),
(4, '2018/12/03 - Regalo de Richard', 2, 1, 500, 38, NULL, 1, 0, 46, 2, 46, 2),
(5, '2018/12/25', 3, 1, 700, 38, NULL, 1, 60, 5, 2, 46, 2),
(6, '2018/12/25', 3, 1, 700, 38, NULL, 1, 60, 5, 2, 46, 1),
(7, '2018/12/27', 4, 1, 350, 40, NULL, 1, 24, 46, 1, 46, 2),
(8, '2018/12/27', 4, 1, 350, 40, NULL, 1, 24, 46, 1, 46, 1),
(9, '2018/01/07', 5, 1, 700, 38, NULL, 1, 50, 46, 2, 46, 1),
(10, '2019/01 - Regalo Feria avileña', 5, 1, 700, 34, NULL, 1, 0, 1, 9, 46, 2),
(11, '2019/01 - Comercial MININT', 6, 1, 700, 40, NULL, 1, 42, 2, 7, 46, 2),
(12, '2019/01 - Comercial MININT', 6, 1, 700, 40, NULL, 1, 42, 2, 7, 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '3PVM8F7TzG6sF6d7ki2jtfN8QJFoUnIB', '$2y$13$MV0gv133ZrJcTu4EmrhhSu5pkNblity5W276mmOTTHEMpPODyigYq', NULL, 'admin@server.com', 10, 1549232509, 1549232509);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_userrole_userrole` (`user_id`,`role_id`),
  KEY `fk_userrole_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_type`
--
ALTER TABLE `category_type`
  ADD CONSTRAINT `fk_categorytype_type` FOREIGN KEY (`type_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_type_id`) REFERENCES `category_type` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_cellar` FOREIGN KEY (`cellar_id`) REFERENCES `cellar` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_userrole_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userrole_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
