-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 10:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id_action` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id_action`, `id_user`, `action`, `date`) VALUES
(91, 13, 'Registration', '2021-03-03 11:46:06.642826'),
(92, 13, 'Log in', '2021-03-03 11:46:06.653620'),
(93, 13, 'Comment Post', '2021-03-03 11:47:09.820242'),
(94, 13, 'Log out', '2021-03-03 11:48:17.385394'),
(95, 13, 'Log in', '2021-03-03 12:45:29.302167'),
(96, 14, 'Log in', '2021-03-08 16:47:13.631970'),
(97, 14, 'Log out', '2021-03-08 16:52:24.897496'),
(98, 13, 'Log in', '2021-03-08 17:06:32.198247'),
(99, 13, 'Comment Post', '2021-03-08 17:07:05.735144'),
(100, 13, 'Log out', '2021-03-08 17:07:26.093579'),
(101, 13, 'Log in', '2021-03-08 17:08:00.371907'),
(102, 13, 'Log out', '2021-03-08 17:08:34.282533'),
(103, 13, 'Log in', '2021-03-11 13:56:41.548776'),
(104, 13, 'Log out', '2021-03-11 13:58:26.733917'),
(105, 14, 'Log in', '2021-03-11 14:02:40.901953'),
(106, 14, 'Log out', '2021-03-11 14:03:26.170072'),
(107, 13, 'Log in', '2021-03-11 14:07:07.643432'),
(108, 13, 'Log out', '2021-03-11 15:58:20.595408'),
(114, 14, 'Log in', '2021-03-11 21:34:50.252348'),
(115, 14, 'Log in', '2021-03-12 19:06:31.455652'),
(116, 14, 'Log out', '2021-03-12 19:10:46.663552'),
(117, 14, 'Log in', '2021-03-12 19:13:41.050406'),
(118, 14, 'New Post', '2021-03-12 19:29:20.902185'),
(119, 14, 'Edit Post', '2021-03-12 19:39:05.316186'),
(120, 14, 'Edit Post', '2021-03-12 19:40:00.080157'),
(121, 14, 'Log in', '2021-03-12 19:59:32.780722'),
(122, 14, 'Log in', '2021-03-12 20:11:20.020534'),
(123, 14, 'Log in', '2021-03-12 20:29:03.210645'),
(124, 14, 'Delete Post', '2021-03-12 20:29:12.883029'),
(125, 14, 'Log in', '2021-03-12 20:29:43.517597'),
(126, 14, 'New Post', '2021-03-12 20:30:14.468641'),
(127, 14, 'Log in', '2021-03-12 20:37:43.589337'),
(128, 14, 'Delete Post', '2021-03-12 20:37:57.100244'),
(129, 14, 'New Post', '2021-03-12 20:38:30.148998'),
(130, 14, 'Log in', '2021-03-12 20:42:22.833450'),
(131, 14, 'Delete Post', '2021-03-12 20:43:05.681584'),
(132, 14, 'Delete Post', '2021-03-12 20:43:11.872960'),
(135, 14, 'Log in', '2021-03-13 08:52:13.087683'),
(136, 14, 'Log in', '2021-03-13 08:53:21.504162'),
(137, 14, 'Log in', '2021-03-13 09:34:13.659486'),
(138, 14, 'Log in', '2021-03-13 10:02:49.951640'),
(139, 14, 'Log in', '2021-03-13 10:04:34.260564'),
(140, 14, 'Edit Post', '2021-03-13 10:05:13.663612'),
(141, 14, 'Edit Post', '2021-03-13 10:05:26.463972'),
(142, 14, 'Delete Post', '2021-03-13 10:09:43.771758'),
(143, 14, 'Log in', '2021-03-13 10:28:19.152458'),
(144, 14, 'Comment Post', '2021-03-13 10:55:58.033605'),
(145, 14, 'Log in', '2021-03-13 11:30:41.706499'),
(146, 14, 'Log out', '2021-03-13 11:47:47.360186'),
(147, 14, 'Log in', '2021-03-13 11:49:58.802391'),
(148, 14, 'Log in', '2021-03-13 19:11:48.006502'),
(149, 14, 'Log out', '2021-03-13 20:43:34.046040'),
(150, 17, 'Registration', '2021-03-13 20:49:50.341850'),
(151, 17, 'Log in', '2021-03-13 20:49:50.350826'),
(152, 17, 'New Post', '2021-03-13 20:54:36.155780'),
(153, 13, 'Log in', '2021-03-14 08:18:01.148635'),
(154, 13, 'Edit Post', '2021-03-14 09:48:55.554370'),
(155, 13, 'Edit Post', '2021-03-14 09:49:12.776798'),
(156, 13, 'Log out', '2021-03-14 10:04:58.624798'),
(157, 14, 'Log in', '2021-03-14 10:07:32.975488'),
(158, 14, 'Edit Post', '2021-03-14 11:00:45.119245'),
(159, 14, 'Comment Post', '2021-03-14 11:06:38.183899'),
(160, 14, 'Edit Post', '2021-03-14 11:11:12.985808'),
(161, 14, 'Log out', '2021-03-14 11:14:36.630929'),
(162, 12, 'Log in', '2021-03-14 11:14:43.234755'),
(163, 12, 'Delete Post', '2021-03-14 11:15:05.664632'),
(164, 12, 'Edit Post', '2021-03-14 11:19:11.197518'),
(165, 12, 'Log out', '2021-03-14 11:21:15.467678'),
(166, 14, 'Log in', '2021-03-14 11:21:23.815534'),
(167, 14, 'Edit Post', '2021-03-14 11:21:50.978476'),
(168, 14, 'Log out', '2021-03-14 11:26:39.250169'),
(169, 15, 'Log in', '2021-03-14 11:26:47.737162'),
(170, 15, 'Edit Post', '2021-03-14 11:27:09.455200'),
(171, 15, 'Log out', '2021-03-14 11:27:35.941976'),
(172, 12, 'Log in', '2021-03-14 11:35:20.105386'),
(173, 12, 'New Post', '2021-03-14 11:44:42.179642'),
(174, 12, 'New Post', '2021-03-14 11:51:14.121768'),
(175, 12, 'Log out', '2021-03-14 11:51:45.423032'),
(176, 13, 'Log in', '2021-03-14 11:52:01.930289'),
(177, 13, 'Comment Post', '2021-03-14 11:52:13.717194'),
(178, 13, 'Log out', '2021-03-14 11:52:29.790303'),
(179, 14, 'Log in', '2021-03-14 11:52:38.260984'),
(180, 14, 'Log out', '2021-03-14 12:02:40.074289'),
(181, 17, 'Log in', '2021-03-14 12:12:22.319043'),
(182, 17, 'Comment Post', '2021-03-14 12:17:13.179076'),
(183, 17, 'Log out', '2021-03-14 12:20:36.006792'),
(184, 13, 'Log in', '2021-03-14 14:02:44.809892'),
(185, 13, 'Log out', '2021-03-14 14:19:15.289056'),
(186, 14, 'Log in', '2021-03-14 14:34:15.534943'),
(187, 14, 'Log out', '2021-03-14 17:16:18.761488'),
(188, 14, 'Log in', '2021-03-14 17:17:10.520206'),
(189, 14, 'Log in', '2021-03-14 23:38:37.553688'),
(190, 14, 'Log in', '2021-03-15 07:31:49.055724'),
(191, 14, 'Log in', '2021-03-16 14:41:25.920510'),
(192, 14, 'Log in', '2021-04-18 19:46:59.019963'),
(193, 14, 'Log out', '2021-04-18 19:47:14.673951'),
(194, 14, 'Log in', '2021-04-18 19:47:29.936804');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `full_name`, `short_desc`, `long_desc`) VALUES
(1, 'Sandra Mladenovic', 'Web Developer // Backend Developer', 'I\'m 23 years old web developer based in Belrade, currently on last year of studying at ICT College - Web development.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(100) NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Travel', 'fas fa-plane', '2021-03-12 15:55:47.941537', '2021-03-14 11:01:56.000000'),
(4, 'Technology', 'fas fa-code', '2021-03-12 15:55:47.941537', '2021-03-12 15:55:47.941537'),
(5, 'Science', 'fas fa-flask', '2021-03-11 15:55:47.941537', '2021-03-12 15:01:13.000000'),
(6, 'Business', 'fas fa-chart-pie', '2021-03-09 23:00:00.000000', '2021-03-09 23:00:00.000000'),
(7, 'Future', 'fas fa-atom', '2021-03-09 23:00:00.000000', '2021-03-09 23:00:00.000000'),
(8, 'Entertainment', 'fab fa-erlang', '2021-03-10 23:00:00.000000', '2021-03-10 23:00:00.000000'),
(9, 'Sport', 'fas fa-volleyball-ball', '2021-03-08 23:00:00.000000', '2021-03-08 23:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_post` int(255) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `id_post`, `comment`, `date`) VALUES
(33, 14, 26, 'Surprised!', '2021-03-14 11:06:38.179247'),
(34, 13, 24, 'Awsame!', '2021-03-14 11:52:13.712170'),
(35, 17, 36, 'This is a widely known phenomenon in different spheres, such as in organ donation, where laws have changed in many countries so that the people have to opt out if they don\'t want to donate after death.', '2021-03-14 12:17:13.175035');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `route` varchar(45) NOT NULL,
  `position` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idMenu`, `name`, `route`, `position`, `created_at`, `updated_at`, `permission`) VALUES
(1, 'Home', 'home', 0, NULL, NULL, 0),
(2, 'News', 'news', 1, NULL, NULL, 0),
(3, 'Login', 'login', 2, NULL, NULL, 0),
(4, 'Logout', 'logout', 3, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(255) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `mark_as_read` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `email`, `subject`, `message`, `date`, `mark_as_read`) VALUES
(14, 'mladenovicsandraa@gmail.com', 'Subject tema', 'fejfiwejgowgjoe', '2021-03-13 19:15:10.611939', 1),
(15, 'zeljkam69@gmail.com', 'About blog', 'Just wanted to say this blog is amazing', '2021-03-15 07:32:49.541797', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(255) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(255) NOT NULL DEFAULT 0,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `title`, `description`, `content`, `view`, `photo`, `created_at`, `updated_at`, `id_user`) VALUES
(21, 'EU seeks to supercharge computer chip production', '\r\n\r\nThe European Commission has set an ambitious target to boost production of cutting-edge computer chips by the end of the decade.', '<div><strong><em>EU seeks to supercharge computer chip production</em><strong></div>\r\n<div>\r\n<p>It wants 20% of such chips, in terms of value, to be manufactured within the EU by 2030. It was 10% in 2020.</p>\r\n<p>The pledge comes at a time when supply has failed to meet demand, causing problems for car-makers and others.</p>\r\n<p>Part of the challenge will be that the US and mainland China are also seeking to increase their own output.</p>\r\n<p>At present, Taiwan\'s TSMC and South Korea\'s Samsung dominate, with the two companies being the only ones capable \r\nof physically producing the very latest in chip tech.</p>\r\n<p>\"We are in a sort of paradoxical situation where Europe is using a lot of these different types of technology,\r\n but we\'re producing little,\" said European Commission executive vice-president Margrethe Vestager.Yet [chip]\r\n production is reliant on machinery produced in Europe. So... there is an interdependency here.Semiconductor chips\r\n are one of those overlooked but incredibly important strategic components on which masses of technology are built,\" said Emily Taylor from the Chatham House think tank.</p>\r\n<em>Five-year plan</em>\r\n<p>Being able to make the most advanced chips is taking on greater geo-political importance.\r\n\r\nThe US has already taken steps to restrict China\'s access to chips and other technologies involving American intellectual property on the grounds they could be used by the Chinese military and/or to carry out surveillance of its minority Uighur population.</p>\r\n<p>\"If a potential adversary bests the United States in semiconductors over the long term or suddenly cuts off US access to cutting-edge chips entirely, it could gain the upper hand in every domain of warfare,\" the National Security Commission on AI warned.\"</p>\r\n<p>Last week, Beijing announced fresh steps to help its domestic semiconductor industry make advances of its own that could reduce the country\'s reliance on imports.</p>\r\n<p>The country\'s latest five-year plan lists \"integrated circuits\" as one of seven frontier technologies that will benefit from a planned 7% annual boost in overall R&D investment between now and 2025.</p>\r\n</div>', 2, '_117503505_chip.jpg', '2021-03-09 19:53:01', '2021-03-09 19:53:01', 15),
(22, 'Zoom founder Eric Yuan transfers $6bn of his shares', 'Zoom founder Eric Yuan has transferred about 18 million of his shares worth more than $6bn (£4.4bn), according to a regulatory filing.', '<div><p>Mr Yuan, who is also chief executive of the video-conferencing platform, moved roughly 40% of his stake in the company last week.\r\n\r\nThe shares were shown as gifts to unspecified beneficiaries last week.</p>\r\n<p>Mr Yuan has seen his personal wealth rocket as Zoom became a household name during pandemic lockdowns. An increasing number of students and professionals connected online boosting the fortunes of Zoom and its founder.</p>\r\n<p>Mr Yuan started Zoom in 2011 and listed it on the US stock market in 2019, making him a billionaire. He is currently worth $13.7bn, according to Forbes.\r\n\r\nA Zoom spokesperson said the transfers were related to Mr Yuan\'s estate planning practices. \"The distributions were made in accordance with the terms of Eric Yuan and his wife\'s trusts.\"</p>\r\n<p>\"While a Zoom spokesperson noted that the transfer is consistent with the Yuans\' typical estate planning practices, investors will be nervous until we find out who is the recipient of the stock.\"</p></div>', 1, '_117499171_ericyuan.jpg', '2021-03-09 20:09:48', '2021-03-09 20:09:48', 15),
(23, 'Mark & Spencer launches online operations in 46 markets', 'Marks & Spencer is to launch 46 new websites in overseas markets from Iceland to Uzbekistan, as part of moves to grow its online business.', '<div><p>It expands the retailer\'s online reach to more than 100 countries, offering M&S clothing and homeware.\r\n\r\nThe firm said the expansion would enable it to capitalise on growth without considerable upfront costs.</p>\r\n<p>Last year, M&S posted its first loss in its 94 years as a publicly-listed company as coronavirus hit store sales</p>\r\n<p>\"Our international business has seen strong online growth since the start of the pandemic as increasing numbers of customers choose to shop through our range of flagship websites,\" said Paul Friston, international director at M&S.</p>\r\n<p>Online e-commerce sales were up 75% according to its latest interim results, as overall losses across the business reached £87.6m in the six months to 26 September.</p>\r\n<p>M&S is in the midst of a wide-reaching transformation programme which last year saw 7,000 job cuts across stores and management.</p>\r\n</div>', 2, '_105187293_mspa.jpg', '2021-03-09 20:09:48', '2021-03-09 20:09:48', 15),
(24, 'Microsoft-led team retracts quantum \'breakthrough\'', 'A Microsoft-led team has withdrawn a controversial research paper into quantum computing, published in 2018.', '<div><p>The research claimed to have found evidence of an elusive subatomic particle Microsoft suggested could help the development of more powerful computers.</p>\r\n<p>But it now says mistakes were made.\r\n\r\nThe journal Nature has published a retraction. And the paper\'s authors have apologised for \"insufficient scientific rigour\". But the company has said it remains confident of its wider efforts on quantum computing.</p>\r\n<em>Leap forward</em>\r\n<p>The paper had been hailed as a breakthrough.\r\n\r\nBut some scientists remained sceptical.\r\n\r\nQuantum computing has been seen as a potentially revolutionary leap forward, promising to complete some tasks much faster.\r\n\r\nIn classical computers, the unit of information, or \"bit\", can have a value of either one or nought.<p>\r\n<p>Its equivalent in a quantum system - the quantum bit (qubit) - can be both at the same time, opening the door for multiple calculations to be performed simultaneously.\r\n\r\nBut scientists have struggled to build working devices with enough qubits to make them competitive with conventional types of computer.</p>\r\n<em>Incredibly exciting</em>\r\n<p>Many large technology companies, including IBM and Google, as well as smaller rivals such as D-Wave and IonQ are also working on the problem.</p>\r\n<p>But Microsoft proposed a different route - trying to create qubits with the properties of Majorana particles, whose existence was first suggested in the 1930s by Italian physicist Ettore Majorana, which it said would make them less error prone.</p></div>', 6, '_117503499_quantum.jpg', '2021-03-09 20:24:48', '2021-03-14 08:49:12', 13),
(25, 'UK businesses caught buying five-star Google reviews', 'Google is failing to do enough to combat fake reviews within its business listings, and must be held to account by a UK watchdog, according to Which?', '<div><p>The consumer group set up a fake company and bought bogus five-star reviews as part of an investigation.</p>\r\n<p>In doing so, it was able to tie its sham \"customers\" to dozens of other highly-rated British firms, including a dentist and a stockbroker.\r\n\r\nGoogle says it has \"significantly\" invested in tech to tackle the issue.</p>\r\n<p>But it and other review sites are in the sightlines of the Competition and Markets Authority, which began examining the sector last year. It has threatened enforcement action against platforms which have fallen short of their responsibilities.<p>\r\n<em>How did they find them?</em>\r\n<p>Which? conducted its research by essentially setting up a \"sting\" operation to catch unscrupulous operators in the act.\r\n\r\nIt created a fake business listing which it called \"five-star reviews\", and searched online for companies advertising paid-for Google reviews. It then spent $150 (£108) on their services.</p>\r\n<p>Which? told each company it wanted five-star reviews only, and between three and five of them a day - and the consumer group\'s researchers wrote the reviews themselves, \"praising how good the made-up business and its fake owner Catherine are\".\r\n\r\nThe fake reviews appeared over the following week, a few at a time</p>\r\n<p>Which? said it linked some 45 businesses scattered across the country to three suspicious \"reviewers\". That suggested they had each paid the same review seller to post their reviews, it said</p></div>', 3, '_117497277_gettyimages-1174370345-1.jpg', '2021-03-09 20:24:48', '2021-03-09 20:24:48', 13),
(26, 'PSG - Neymar is ruled out of Barca tie', 'Paris St-Germain have ruled Neymar out of the second leg of their last-16 Champions League tie against Barcelona.', '<div><p>\"Neymar returned to partial training with the squad last week and will continue to work back to fitness individually,\" said a PSG statement.</p>\r\n<p>Barcelona will be without defenders Gerard Pique and Ronald Araujo for the match in Paris on Wednesday.</p>\r\n<p>Pique sustained a knee injury in the Copa del Rey semi-final win over Sevilla on 3 March, while Araujo has returned to training after an ankle problem but is not in the squad.</p><p>Ex-Liverpool midfielder Philippe Coutinho is still missing for the Spanish side because of a knee injury.</p><p>Barcelona, who lost 8-2 to eventual winners Bayern Munich in last season\'s one-legged quarter-final, have made it past the last 16 of the Champions League in each of the past 13 seasons.</p><p>PSG boss Mauricio Pochettino, who took Tottenham to the Champions League final in 2018-19, will also be without on-loan Everton striker Moise Kean as he is self-isolating because of coronavirus.</p><p>Neymar helped the French champions reach their first Champions League final last August and has scored 12 goals in 17 competitive fixtures this season.</p></div>', 4, '_117504171_hi065632429.jpg', '2021-03-09 20:40:48', '2021-03-14 10:21:50', 14),
(27, 'Qatar Open: Dan Evans to play Roger Federer after Jeremy Chardy win', 'Dan Evans will be the first opponent of Roger Federer\'s comeback after victory over Jeremy Chardy at the Qatar Open', '<div><p>Great Britain\'s Evans beat Chardy 6-4-1-6 6-2 in the first round in Doha and will face Federer in the last 16.</p>\r\n<p>Federer, 39, has missed more than a year of action after undergoing two knee surgeries but has been practising with Evans in recent weeks.</p>\r\n<p>\"I got to practise the last two weeks - I thought he was playing pretty well, we played plenty of sets,\" said Evans.</p><p>\"It was competitive, but it\'s all very different when you get on the match court.\"</p><p>He said it was \"a little\" strange to see the 20-time Grand Slam winner watching him during his win over Chardy.\r\n\r\n\"He\'s obviously seen a lot of my game the last few weeks so I would say it was more out of boredom,\" added Evans.</p><p>\"He was probably waiting for his practice, rather than scouting out what\'s happening on the court.</p><p>\"Some days we practised for three hours, other days we practised for an hour and a half. It\'s been good to get some good practice. It\'s unfortunate that I\'m in his part of the draw this week, but moving forward it\'s a good little block I put together.\"</p></div>', 0, '_117508893_danevans.jpg', '2021-03-09 20:40:48', '2021-03-09 20:40:48', 14),
(29, 'Roger Federer never considered retirement despite 14-month absence', 'Roger Federer says he never seriously considered retirement in his 14 months away from tennis, and is returning as he feels \"the story\'s not over yet\".', '<div>The 20-time Grand Slam champion is competing at this week\'s Qatar Open<br><br></div><div>It will be his first tour appearance since losing to Novak Djokovic in last year\'s Australian Open semi-finals.<br><br></div><div>\"I know it\'s on the rare side for almost a 40-year-old to come back after a year being out. What\'s important is I\'m injury and pain-free,\" he said.<br><br></div><div>The 39-year-old has a bye into the second round in Doha, where he will play either Britain\'s Dan Evans or Jeremy Chardy of France.<br><br></div><div>\"I know I need to go back to training after here again, so from this standpoint it\'s just about building up to being stronger, better, fitter, faster and all that stuff. I hope then by Wimbledon I\'m going to be 100%, and that\'s when the season starts for me.\"<br><br></div><div>Federer had initial arthroscopic surgery on his right knee last February. A second operation was required in June as his knee would often swell up after walks and bike rides with his family.<br><br></div><div>\"I wanted to go out on my terms, but for my life, I wanted to do this rehab anyhow. I want to go skiing with my children and my friends, and go and play basketball and football,\" he said when asked about his motivation to return at the age of 39.<br><br></div><div>\"Retirement was never really on the cards. I think it\'s really a conversation more, let\'s say, if the knee keeps bothering me for months and months to come.</div>', 8, '_117484294_gettyimages-1199257604.jpg', '2021-03-09 20:50:07', '2021-03-14 10:00:45', 15),
(30, 'Bafta Film Awards 2021: Hugely diverse nominations list unveiled', 'The Bafta Film Awards have unveiled a highly diverse nominations list, with 16 of the 24 acting nominees this year coming from ethnic minority groups.', '<div><p>Nomadland and Rocks lead the nominations for the 2021 ceremony, with seven nominations apiece.\r\n\r\nThe Father, Mank, Minari and Promising Young Woman all score six nods each.</p><p>Four women are nominated in the best director category, including Chloe Zhao for Nomadland. She won the same award at the Golden Globes last week.</p><p>But the biggest surprise is in the acting categories. Not one actor of colour was nominated last year, so the British Academy had faced pressure to diversify this year\'s nominees.</p><p>That has resulted in a significant swing, with Daniel Kaluuya, Riz Ahmed, Dominique Fishback, Tahar Rahim and Bukky Bakray among the 16 nominees from ethnic minority backgrounds in the acting categories.\r\n\r\nBut many of the predicted nominees missed out, including Viola Davis, Carey Mulligan, Amanda Seyfried, Sacha Baron Cohen, Olivia Colman, Glenn Close and Gary Oldman.</p><p>The winners will be announced at a ceremony without a live audience on 11 April.</p><p>Last year\'s nominations sparked criticism over the all-white acting nominees and lack of female directors.\r\n\r\nThis year, four of the six nominees in each of the acting categories are from ethnic minority backgrounds.\r\n\r\nMeanwhile, four of the nominated directors are women, while three are also nominated for best film not in the English language.</p></div>', 2, '_117505230_compositebafta.jpg', '2021-03-09 20:58:02', '2021-03-09 20:58:02', 13),
(31, 'Piers Morgan leaves ITV\'s Good Morning Britain', 'Piers Morgan has left ITV\'s Good Morning Britain following a row over comments he made about the Duchess of Sussex.', '<div><p>An ITV spokesperson said: \"Following discussions with ITV, Piers Morgan has decided now is the time to leave Good Morning Britain. ITV has accepted this decision and has nothing further to add.\"</p><p>Morgan\'s departure followed an on-air clash with weather presenter Alex Beresford, who criticised his colleague on Tuesday for \"continuing to trash\" the duchess, prompting Morgan to walk off set. He returned within 10 minutes.</p>\r\n<em>What did Piers Morgan say?</em>\r\n<p>On Monday\'s programme, Morgan picked up on the duchess\'s claim that her request to senior Buckingham Palace officials for help was rejected, after she told Winfrey she had had suicidal thoughts.</p><p>\"Who did you go to?\" he said. \"What did they say to you? I\'m sorry, I don\'t believe a word she said, Meghan Markle. I wouldn\'t believe it if she read me a weather report.</p><p>\"The fact that she\'s fired up this onslaught against our Royal Family I think is contemptible.\"</p><p>He also referred to the duchess as the \"Pinocchio Princess\" in a tweet later that morning.</p><p>Following an outcry, he said on Tuesday\'s episode that \"I still have serious concerns about the veracity of a lot of what\" Meghan said, but that it was \"not for me to question if she felt suicidal\".</p><p>He added: \"My real concern was a disbelief frankly... that she went to a senior member of the Royal household and told them she was suicidal and was told she could not have any help because it would be a bad look for the family.\"</p></div>', 1, '_117510274_gettyimages-521119202.jpg', '2021-03-09 21:03:19', '2021-03-14 10:27:09', 15),
(32, 'How Kenya is harnessing the immense heat from the Earth', 'In the volcanic region of East Africa\'s Great Rift Valley, tectonic shifts are tearing the continent apart – and releasing unimaginable quantities of clean energy.', '<div><p>rive along the dusty dirt road that winds through Kenya\'s Hell\'s Gate National park, past the zebra, gazelles and giraffes, and you\'ll see a plume of steam shooting skyward in the distance. Vehicles must sometimes swerve to avoid running over warthogs as they enter a vast valley dotted with dozens of steam vents – a factory of clouds.</p>\r\n<p>Blasts of steam billow loudly, releasing heat from deep within the Earth. But even more powerful is the steam you don\'t see: that which twists through miles of tubes to push past turbines, generating a type of clean energy that won\'t run out for millions of years.</p>\r\n<p>Atop this infernal labyrinth of tubes is Kenya\'s Olkaria Geothermal Project, where a new addition to the powerplant is about to go online. At 86 megawatts, the Olkaria VI expansion will push the project\'s total production to 791.5 megawatts. That\'s about 27% of all the energy in Kenya, according to KenGen, the parastatal company that operates Olkaria. Already, Kenya relies on geothermal steam for 38% of its power – a greater proportion than any other nation.</p>\r\n<p>\"When Olkaria VI is complete, it will be the largest single geothermal plant in the world,\" according to Cyrus Karingithi, who leads infrastructure and resource development for Olkaria.</p><p>\"This energy is coming from the Earth – and it\'s essentially limitless,\" says Juliet Newson, director of the Iceland School of Energy at Reykjavik University. \"Kenya has got a really good resource and that\'s the Rift Valley. You\'ve got this [incredible] heat that\'s so near the surface.\" In other parts of the world, you\'d have to drill several kilometers or more to find equivalent temperatures.</p></div>', 9, 'p08s71sc.jpg', '2021-03-09 21:18:40', '2021-03-09 21:18:40', 15),
(33, 'The city of sustainable skyscrapers in Hong Kong', 'Hong Kong, the world\'s capital of tall buildings, is turning up the dial on high-rise sustainable design, as the city aims for net-zero emissions by 2050.', '<div>Looking out over Hong Kong\'s iconic skyline from the viewing deck of its tallest skyscraper, the 118-storey International Commerce Centre (ICC), it\'s clear why Hong Kong is known as the world\'s most vertical city. In every direction you look, countless high-rise buildings are stacked side by side, clustered together, like a real-world version of the game Tetris<br><br></div><div>In fact, Hong Kong is home to more skyscrapers than anywhere else. While many are impressive feats of construction and have become iconic features of the skyline, the city\'s 42,000 buildings – including about 8,000 high-rises, of which more than 1,500 are skyscrapers exceeding 100m (328ft) in height – consume up to 90% of the city\'s electricity and contribute to 60% of the city\'s greenhouse gas emissions.<br><br></div><div>With limited land supply, building upwards is Hong Kong\'s only option. But in a world responding to the climate crisis, towering skyscrapers that use massive amounts of energy and materials to construct and operate may look increasingly out of place – particularly given that Hong Kong itself has set a target to be carbon neutral by 2050. The problem leaves many asking how sustainable skyscrapers can really be.<br><br></div><div>Making use of the latest smart technologies to be more energy efficient, the ICC is recognised in the top 3% of green buildings around the globe. Inside the 118-storey building, a network of sensors is installed, often wirelessly, across different facilities and equipment, including lighting, elevators, escalators and air-conditioning units. This network provides large quantities of data that enable real-time energy consumption monitoring. Informed by the data, the property management team is able to shut down certain facilities, including lights, lifts and escalators when they are not needed, in order to save energy.<br><br></div><div>\"We use Internet of Things (IoT) technology to analyse big data collected through a mobile digital system for energy efficiency optimisation in the building,\" says Edward Tsui, managing director of Intelligent Technologies, which oversees the ICC\'s IoT data system. \"We can see the energy performance across every zone in the building and optimise the system to perform better.\"<br><br></div>', 5, 'p080zykc.jpg', '2021-03-09 21:23:28', '2021-03-14 10:19:11', 12),
(34, 'Six Nations: Wales hammer Italy to set up Grand Slam finale against France', 'Wales set up a Grand Slam encounter against France in Paris next Saturday by clinically disposing of hapless Italy with a seven-try rout in Rome.', 'Hooker Ken Owens crossed for two tries, with further scores from Josh Adams, Taulupe Faletau, George North, Callum Sheedy and Louis Rees-Zammit.\r\n\r\nItaly only managed a try through wing Monty Ioane in response.\r\n\r\nWayne Pivac\'s side can complete the Six Nations clean sweep by winning at the Stade de France next weekend.\r\n\r\nFrance and Scotland will still have a match to play after their third-round game was postponed because of coronavirus cases in the French camp.\r\n\r\nBut Wales have the chance to create their own \'Super Saturday\' with victory in Paris, where they could secure a second Grand Slam in three tournaments.\r\n\r\nThe omens are good. Wales have already won their fifth Six Nations Triple Crown since 2000 and on each of the previous occasions they have done so, they have gone on to seal the Grand Slam.\r\n\r\nIt represents a remarkable turnaround from a side that finished fifth in Pivac\'s first tournament in charge and managed only three wins in 10 games in 2020, although we have grown used to the boom-and-bust nature of Welsh rugby.\r\n\r\nIt might also be a special day for captain Alun Wyn Jones, who could become the first Welshman to celebrate four Grand Slams.\r\n\r\nWales have now matched their record of 17 Six Nations tries in one tournament with a game remaining.\r\n\r\nThis was Wales\' 16th successive victory over Italy, with the last defeat coming in 2007, and also represents their longest winning run against one opponent, overtaking a run of 15 victories against France from 1908-1927.', 1, '1615668876_news.jpg', '2021-03-13 20:54:36', '2021-03-13 20:54:36', 17),
(35, 'Hundreds of sewage leaks detected thanks to AI', 'Hundreds of previously unreported releases of raw sewage into UK rivers have been detected thanks to artificial intelligence, researchers say.', '<div>\r\n <p>Scientists identified 926 \"spill events\" from two wastewater treatment plants over an 11-year period by employing machine learning.</p>\r\n\r\n<p>The UK Environment Agency said it was \"impressed by the accuracy\" of the approach.</p>\r\n\r\n<p>\"We welcome any tool that prevents pollution,\" the agency said.</p>\r\n\r\n<p>The researchers, who published their study in the journal Clean Water, trained a computer algorithm to recognise, through the pattern of flow through a treatment plant, when a spill was happening.</p>\r\n\r\n<p>Algorithms are software-based instructions for solving a problem</p>\r\n\r\n<em>What constitutes a \'spill\'?</em>\r\n<p>Wastewater treatment plants are permitted to release untreated sewage into rivers when there is exceptional rainfall. Storm tanks at a plant can become overwhelmed with rainwater and untreated wastewater overflows from the tanks into waterways.</p>\r\n\r\n<p>But there has been concern among environmental scientists and campaigners about the frequency of such raw sewage overflows.</p>\r\n<p>Christine Colvin, from the Rivers Trust charity, told BBC News: \"We put together the first national map of sewer overspills into English rivers last year, [and] I think we were all shocked at how much, and how widespread, raw sewage pollution is in our rivers.</p>\r\n</div>', 2, '1615722282_science.jpg', '2021-03-14 11:44:42', '2021-03-14 11:44:42', 12),
(36, 'Climate change: \'Default effect\' sees massive green energy switch', 'When Swiss energy companies made green electricity the default choice, huge numbers of consumers were happy to stick with it - even though it cost them more.', '<div>\r\n<p>Four years after the switch, researchers found that around 80% of customers were still on green tariffs.</p>\r\n\r\n<p>This \"default effect\" happened partly because people didn\'t want the hassle of switching back to fossil fuels.</p>\r\n\r\n<p>In the study, the researchers looked at what happened when two Swiss energy suppliers changed the default electricity offering for their customers from a mixture of fuels to renewables only.</p>\r\n\r\n<p>This change affected around 234,000 private households and 9,000 businesses.</p>\r\n\r\n<p>Before the switch, the numbers choosing to have green power were at around 3%. Afterwards, this rose to 80-90% of customers.</p>\r\n\r\n<p>Residential consumers had to pay at least 3-8% more for their energy on the green tariff, while businesses saw their costs increase by up to 14% for energy used at night.\r\nRemarkably, these extra costs weren\'t enough to push consumers to change their tariffs back to ones with fossil fuels in the mix.</p>\r\n\r\n<p>\"It is worth noting that even five years after the change, some 80% of the households are still sticking with green electricity,\" said co-author Dr Jennifer Gewinner, from ETH Zurich, a public research university in Switzerland\'s largest city.</p>\r\n\r\n<p>It was a similar story for small business customers. Several years after the switch, more than 70% were still on the more expensive green tariff.</p>\r\n\r\n<p>In the case of large companies, which had considerable choice in terms of which energy provider to go with, the vast majority stayed with green energy even though it was costing them around $2,300 extra per year.</p>\r\n\r\n<p>The researchers believe that what they are observing is the surprising power of the default effect.</p>', 5, '1615722674_science1.jpg', '2021-03-14 11:51:14', '2021-03-14 11:51:14', 12);

-- --------------------------------------------------------

--
-- Table structure for table `post_cat`
--

CREATE TABLE `post_cat` (
  `id_post_cat` int(255) NOT NULL,
  `id_post` int(255) NOT NULL,
  `id_category` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_cat`
--

INSERT INTO `post_cat` (`id_post_cat`, `id_post`, `id_category`) VALUES
(117, 21, 6),
(118, 21, 4),
(119, 22, 6),
(120, 23, 6),
(122, 25, 4),
(124, 27, 9),
(127, 30, 8),
(129, 32, 7),
(130, 34, 9),
(132, 24, 4),
(133, 29, 9),
(136, 33, 2),
(137, 26, 9),
(138, 31, 8),
(139, 35, 5),
(140, 36, 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(100) NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(100) NOT NULL DEFAULT 2,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `registrated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `email`, `password`, `id_role`, `active`, `registrated_at`) VALUES
(12, 'Bella Thorne', 'bella@gmail.com', 'd0aeeef9a9aeddbaa999b7b65101b3a1', 2, 0, '2021-03-03 12:54:28'),
(13, 'Sandra Mladenovic', 'mladenovicsandraa@gmail.com', 'bc5e09ce78458983e0278a32526bacfb', 2, 0, '2021-03-03 11:46:06'),
(14, 'Maja Brajovic', 'majabrajovic@gmail.com', 'bc5e09ce78458983e0278a32526bacfb', 1, 1, '2021-03-08 16:46:40'),
(15, 'Leo Kelion', 'leokelion@gmail.com', 'bc5e09ce78458983e0278a32526bacfb', 2, 0, '2021-03-09 19:47:36'),
(17, 'Milica Micic', 'milica@gmail.com', 'd0aeeef9a9aeddbaa999b7b65101b3a1', 2, 0, '2021-03-13 20:49:50'),
(21, 'milutin velisic', 'milutin@gmail.com', '8813af270a1d1a71c7cd25ca86186bcb', 1, 0, '2021-06-02 17:43:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id_action`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `post_cat`
--
ALTER TABLE `post_cat`
  ADD PRIMARY KEY (`id_post_cat`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id_action` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `post_cat`
--
ALTER TABLE `post_cat`
  MODIFY `id_post_cat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `post_cat`
--
ALTER TABLE `post_cat`
  ADD CONSTRAINT `post_cat_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_cat_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
