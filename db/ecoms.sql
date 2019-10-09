-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 06:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(2, '64138.png', 'Banner Images', 'Product/T-shirts', 1, '2018-10-08 03:09:53', '2018-10-08 03:09:53'),
(3, '17862.png', 'Banner Images', 'Product/T-shirts', 1, '2018-10-08 03:10:16', '2018-10-08 03:10:16'),
(4, '66943.png', 'Test Banner', 'casual-shirts', 1, '2018-10-08 18:50:19', '2018-10-08 18:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `product_color`, `size`, `price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(5, 21, 'Green Formal T-shirt', 'GFTS-001-S', 'Green', 'Small', '700', 2, '', 'KvAxrDY3ekDIYnbAbsNawJimKHOeVKNJxKWjRYTA', NULL, NULL),
(6, 21, 'Green Formal T-shirt', 'GFTS-001-S', 'Green', 'Small', '5000', 1, '', 'KvAxrDY3ekDIYnbAbsNawJimKHOeVKNJxKWjRYTA', NULL, NULL),
(7, 14, 'T-shirt yellow', 'TS002-S', 'yellow', 'Small', '8000', 1, '', 'Kb1qXUf4HLmOpQF6Layf6P4cKtxhQLqGrNdCSPiC', NULL, NULL),
(8, 14, 'T-shirt yellow', 'TS002-M', 'yellow', 'Medium', '7000', 1, '', 'Kb1qXUf4HLmOpQF6Layf6P4cKtxhQLqGrNdCSPiC', NULL, NULL),
(13, 21, 'Green Formal T-shirt', 'GFTS-001-S', 'Green', 'Small', '700', 2, '', 'lfoiYqPPA6XVt85YpNS4kwBLm1UUykfZZJ0Z9lfp', NULL, NULL),
(14, 14, 'T-shirt yellow', 'TS002-S', 'yellow', 'Small', '8000', 1, '', 'oj1P2npLnUE1mrBTPfvLH0548hP7nBJuFmYbytlN', NULL, NULL),
(15, 14, 'T-shirt yellow', 'TS002-S', 'yellow', 'Small', '8000', 1, '', 'zxSieO8ynOopUIZvQcR8jMP1EBRqS1weqfCb80eS', NULL, NULL),
(16, 14, 'T-shirt yellow', 'TS002-S', 'yellow', 'Small', '8000', 1, '', 'tkYBX6Ssc2vWGbP3S1FtFuz4O7XTC16YWK93v4Y2', NULL, NULL),
(17, 14, 'T-shirt yellow', 'TS002-S', 'yellow', 'Small', '8000', 1, '', '8hLOzihcqbgGGqWTspptvyHXum5mG391qBjTXoYG', NULL, NULL),
(18, 13, 'Black  formal T-shirt', 'BFT-011-S', 'Black', 'Small', '600', 1, '', '8hLOzihcqbgGGqWTspptvyHXum5mG391qBjTXoYG', NULL, NULL),
(19, 15, 'casual t-shirt', 'CTS-002-L', 'B', 'Large', '7000', 1, '', 'hHkpP40TGfTayqnq2sanxsAaWkFktPshhXdgiJUT', NULL, NULL),
(20, 14, 'T-shirt yellow', 'TS002-S', 'yellow', 'Small', '8000', 2, '', 'hHkpP40TGfTayqnq2sanxsAaWkFktPshhXdgiJUT', NULL, NULL),
(21, 14, 'T-shirt yellow', 'TS002-L', 'yellow', 'Large', '6000', 2, '', 'nlga6Yzeq2p794GJRbxjDpSbPt4GwcKijUQl22E5', NULL, NULL),
(22, 22, 'lather shoes', 'pc-001-S', 'Black', 'Small', '1000', 2, '', 'nlga6Yzeq2p794GJRbxjDpSbPt4GwcKijUQl22E5', NULL, NULL),
(23, 14, 'T-shirt yellow', 'TS002-L', 'yellow', 'Large', '6000', 3, '', 'pKwZVLlLxbn3Zprz0WT5oJHzFaCwksbsWFgCN5go', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 10, 'T-Shirts', 'casual T-Shirts', 't-shirts', 1, NULL, '2018-09-09 01:03:33', '2018-09-16 20:27:49'),
(14, 11, 'Shoes', 'SPORT-Shoes', 'sport-shoe', 1, NULL, '2018-09-09 01:05:18', '2018-09-16 20:28:15'),
(15, 11, 'SPORT-SHOE', 'test', 'sport-shoe', 1, NULL, '2018-09-12 07:18:51', '2018-09-12 07:18:51'),
(16, 0, 'Casual Shoes', 'test', 'casual-shoes', 1, NULL, '2018-09-13 15:17:50', '2018-09-13 15:17:50'),
(17, 0, 'Casual T-Shirts', 'test', 'casual t-shirts', 1, NULL, '2018-09-13 15:28:44', '2018-09-13 15:28:44'),
(18, 16, 'Casual T-Shirts', 'Casual T-Shirts', 'casual t-shirts', 1, NULL, '2018-09-15 14:15:08', '2018-09-15 14:15:08'),
(19, 17, 'Formal T-Shirt', 'Formal T-Shirt is good', 'formal t-shirt', 1, NULL, '2018-09-15 14:19:54', '2018-09-19 07:53:50'),
(20, 16, 'Tesh Shoes', 'test shoes', 'test-shoes', 1, NULL, '2018-09-18 10:18:24', '2018-09-19 07:53:56'),
(21, 16, 'test4', 'testshoes', 'test4', 1, NULL, '2018-09-18 12:34:05', '2018-09-19 07:55:10'),
(22, 16, 'testcat5', 'testcat3', 'testcat5', 1, NULL, '2018-09-18 12:34:53', '2018-09-19 07:54:08'),
(23, 17, 'T-Shirt', 'T-Shirt', 'T-Shirt', 1, NULL, '2018-09-18 12:36:23', '2018-09-19 07:57:37'),
(24, 16, 'lather shoes', 'lather shoes', 'url-lather shoes', 1, NULL, '2018-10-15 04:20:33', '2018-10-15 04:20:33');

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
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '1000044', 10, 'Percentage', '2018-10-15', 1, '2018-10-02 18:24:19', '2018-10-05 11:25:56'),
(2, '124356', 500, 'Fixed', '2018-05-05', 1, '2018-10-02 19:08:19', '2018-10-05 10:57:46'),
(7, 'test15', 15, 'Percentage', '2018-10-05', 0, '2018-10-04 18:33:04', '2018-10-05 11:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_05_223107_create_category_table', 2),
(4, '2018_09_09_075536_create_products_table', 3),
(5, '2018_09_12_152740_create_products_attributes_table', 4),
(6, '2018_09_30_234308_create_cart_table', 5),
(7, '2018_10_02_223743_create_coupons_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `care` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `product_color`, `description`, `care`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 17, 'Black Sports Shoes', 'BSS001', 'Black', 'This is black shoes', 'ree', 7000.00, '61961.jpg', 1, '2018-09-13 15:29:58', '2018-10-15 05:04:22'),
(10, 18, 'Casual T-Shirts', 'CTS-001', 'Blue', 'This is casual T-Shirts', '', 1000.00, '41716.jpg', 1, '2018-09-15 14:18:06', '2018-09-15 14:18:06'),
(11, 19, 'Formal T-Shirt', 'FTS-001', 'white', 'Formal T-Shirt is good', '', 500.00, '83851.jpg', 1, '2018-09-15 14:21:23', '2018-09-15 14:21:23'),
(12, 17, 'Sports-shoe Adidas', 'SSA-001-40', 'Blue', 'Sports-shoe Adidas product', '', 5000.00, '47940.jpg', 1, '2018-09-16 18:06:13', '2018-09-16 18:06:13'),
(13, 19, 'Black  formal T-shirt', 'BFT-011', 'Black', ' ', '', 600.00, '51599.jpg', 1, '2018-09-17 06:49:21', '2018-09-18 21:31:24'),
(14, 23, 'T-shirt yellow', 'TS002', 'yellow', ' ', ' ', 8000.00, '59416.jpeg', 1, '2018-09-19 08:00:11', '2018-09-28 19:31:10'),
(15, 18, 'casual t-shirt', 'CTS-002', 'B', 'Charcoal grey, maroon and black striped T-shirt, has a polo collar, long sleeves', '75% cotton, 25% polyester\r\nMachine-wash', 4000.00, '58661.jpg', 1, '2018-09-20 11:58:23', '2018-09-21 22:38:33'),
(16, 18, 'T-shirt', 'TS003', 'white', 'white', '100% coton', 5000.00, '27670.jpg', 1, '2018-09-22 11:20:20', '2018-09-22 11:20:20'),
(17, 19, 'Formal T-Shirt', 'FTS-002', 'Blue', 'Blue t-shirt', '80%conton', 600.00, '64564.jpg', 1, '2018-09-22 11:33:24', '2018-09-22 11:45:34'),
(18, 19, 'Formal T-Shirt', 'FTS-002', 'Blue', 'Blue t-shirt', '80%conton', 600.00, '89687.jpg', 1, '2018-09-22 11:35:57', '2018-09-23 07:15:55'),
(19, 19, 'Formal T-Shirt', 'FTS-002', 'Blue', 'Blue t-shirt', '80%conton', 600.00, '24415.jpg', 1, '2018-09-22 11:44:58', '2018-09-22 11:44:58'),
(20, 19, 'Red Farmal T-shirt', 'RFTS-001', 'Red', ' ', ' ', 5000.00, '77462.jpg', 1, '2018-09-29 19:52:05', '2018-09-29 19:52:05'),
(21, 19, 'Green Formal T-shirt', 'GFTS-001', 'Green', ' ', ' ', 5000.00, '42692.jpeg', 1, '2018-09-29 20:01:52', '2018-09-29 20:19:53'),
(22, 24, 'lather shoes', 'pc-001', 'Black', 'lather shoes', '100% lether', 1000.00, '54186.jpg', 1, '2018-10-15 04:28:02', '2018-10-15 04:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `sku`, `size`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(2, 9, 'BT-01-M', 'Medium', 600.00, 10, '2018-09-15 01:09:49', '2018-09-15 01:09:49'),
(3, 9, 'BT-01-L', 'Large', 800.00, 10, '2018-09-15 01:09:49', '2018-09-15 01:09:49'),
(4, 9, 'BT-01-XXL', 'XXL-Large', 600.00, 10, '2018-09-15 01:57:03', '2018-09-15 01:57:03'),
(5, 12, 'SSA-001-40', 'Large', 5000.00, 10, '2018-09-16 18:07:22', '2018-09-16 18:07:22'),
(6, 9, 'BSS001', 'Small', 800.00, 10, '2018-09-16 19:06:49', '2018-09-16 19:06:49'),
(7, 14, 'TS002-S', 'Small', 8000.00, 10, '2018-09-19 08:01:54', '2018-09-30 20:48:16'),
(8, 14, 'TS002-M', 'Medium', 7000.00, 10, '2018-09-19 08:01:54', '2018-09-30 20:48:16'),
(9, 14, 'TS002-L', 'Large', 6000.00, 10, '2018-09-19 08:01:55', '2018-09-30 20:48:16'),
(10, 15, 'CTS-002-s', 'Small', 5000.00, 1, '2018-09-20 16:31:05', '2018-10-02 15:36:01'),
(11, 15, 'CTS-002-M', 'Medium', 6000.00, 1, '2018-09-20 16:49:33', '2018-10-02 15:36:01'),
(12, 15, 'CTS-002-L', 'Large', 7000.00, 1, '2018-09-20 16:51:45', '2018-10-02 15:36:01'),
(13, 18, 'FTS-002-S', 'Small', 600.00, 10, '2018-10-01 01:07:15', '2018-10-01 01:07:15'),
(14, 18, 'FTS-002-M', 'Medium', 700.00, 10, '2018-10-01 01:07:15', '2018-10-01 01:07:15'),
(15, 18, 'FTS-002-L', 'Large', 800.00, 10, '2018-10-01 01:07:15', '2018-10-01 01:07:15'),
(16, 21, 'GFTS-001-S', 'Small', 700.00, 2, '2018-10-02 12:23:32', '2018-10-02 15:37:01'),
(17, 21, 'GFTS-001-M', 'Medium', 6000.00, 2, '2018-10-02 12:25:04', '2018-10-02 15:37:01'),
(18, 21, 'GFTS-001-L', 'Large', 500.00, 2, '2018-10-02 12:25:04', '2018-10-02 15:37:02'),
(19, 13, 'BFT-011-S', 'Small', 600.00, 10, '2018-10-06 18:24:45', '2018-10-06 18:24:45'),
(20, 13, 'BFT-011-M', 'Medium', 700.00, 10, '2018-10-06 18:24:45', '2018-10-06 18:24:45'),
(21, 13, 'BFT-011-L', 'Large', 800.00, 10, '2018-10-06 18:24:45', '2018-10-06 18:24:45'),
(22, 22, 'pc-001-S', 'Small', 1000.00, 2, '2018-10-15 04:29:41', '2018-10-15 04:29:41'),
(23, 22, 'pc-001-M', 'Medium', 1000.00, 2, '2018-10-15 04:29:41', '2018-10-15 04:29:41'),
(24, 22, 'pc-001-L', 'Large', 1200.00, 2, '2018-10-15 04:29:41', '2018-10-15 04:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 18, '60827.jpg', '2018-09-23 05:44:30', '2018-09-22 23:44:30'),
(4, 14, '84502.jpg', '2018-09-25 17:40:57', '2018-09-25 11:40:57'),
(5, 14, '43277.jpg', '2018-09-25 17:43:31', '2018-09-25 11:43:31'),
(6, 14, '38359.jpg', '2018-09-25 17:44:21', '2018-09-25 11:44:21'),
(7, 15, '44880.jpg', '2018-09-29 23:50:13', '2018-09-29 17:50:13'),
(8, 15, '71807.jpg', '2018-09-29 23:50:30', '2018-09-29 17:50:30'),
(9, 18, '19245.jpg', '2018-10-01 07:07:41', '2018-10-01 01:07:41'),
(10, 21, '17727.jpg', '2018-10-02 18:25:47', '2018-10-02 12:25:47'),
(11, 21, '1358.jpg', '2018-10-02 18:26:04', '2018-10-02 12:26:04'),
(12, 11, '70357.jpg', '2018-10-10 18:19:23', '2018-10-10 12:19:23'),
(13, 12, '61148.jpg', '2018-10-15 10:13:01', '2018-10-15 04:13:01'),
(14, 22, '62455.jpg', '2018-10-15 10:31:10', '2018-10-15 04:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `city`, `state`, `country`, `pincode`, `mobile`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sujon', '', '', '', '', '', '', 'sujon45@gmail.com', '$2y$10$Q1sQGOfmbCHFT0bIZ0IJZeA6ewN3bUlELxdI3z0CT.LRP3Nl5M5zC', 1, 'GvC0d7XxDM85gIAkHd3uwJvU4NGLN8NL8LiEiSMJzDUV5QnaCgtAKYJSaSoZ', '2018-09-04 13:38:20', '2018-09-05 16:21:52'),
(2, 'Admin', '', '', '', '', '', '', 'admin@gmail.com', '$2y$10$TKisQWHd.8LgIlaTuwrQVuVek1zBv.gNpF6/plfkNp5cp4BHcjiWW', NULL, 'uOM2r0YdS9tFiu4SoLn0Y4vkGehtJPFymEGooa1PFtldYNiWFWXs4fplWhOL', '2018-09-04 15:08:30', '2018-09-04 15:08:30'),
(3, 'Rony', '', '', '', '', '', '', 'rony@gmail.com', '$2y$10$nfQ1C2DGAclEiwdBNH4SyeC7x7VlZION6MUllXag3Lqk6GXjJmCyq', 0, 'yJtst4SZBKdcBEfpiINAbHr2XWiVIediU2BkUx82QN2M58HKbk3cIvAhZx8m', '2018-10-13 08:05:02', '2018-10-13 08:05:02'),
(4, 'rana', '', '', '', '', '', '', 'rana@gmail.com', '$2y$10$s3zNUdMzy2Wt3GojF9xOWepmRSEywX2XoqczgQVEDLbTHGc808elu', 0, 'zhe7UiS6OOOTHbKBsYHxALe9HzGxuerALEj7kqaTV4VTKRrXCVaISDWW8Eaw', '2018-10-13 20:29:07', '2018-11-01 11:44:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
