-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 06:51 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwood`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(6) UNSIGNED NOT NULL,
  `assetNo` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `associatedTo` varchar(30) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `patTestDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `assetNo`, `type`, `make`, `model`, `added`, `associatedTo`, `Location`, `patTestDate`) VALUES
(10, '00932', 'Desktop', 'Samsung', 'ZXB81', '2015-08-23 00:58:32', 'nklocko', 'Room2', '2016-08-09 02:11:23'),
(11, '00722', 'Desktop', 'Toshiba', 'JWT78', '2016-02-18 09:57:51', 'elabadie', 'Room2', '2017-03-04 10:19:13'),
(12, '00971', 'Harddrive', 'Dell', 'ZCT20', '2008-06-16 06:48:13', 'ohammes', 'Room3', '2015-09-03 11:21:06'),
(13, '00787', 'Laptop', 'Samsung', 'GPU9', '2015-02-24 07:27:54', 'ihickle', 'Room2', '2016-02-17 05:50:12'),
(14, '00438', 'Desktop', 'Toshiba', 'BCW39', '2012-11-22 11:17:39', 'zking', 'Room1', '2015-05-17 09:35:45'),
(15, '00245', 'Harddrive', 'Toshiba', 'LFK93', '2008-08-06 01:03:19', 'flang', 'Room4', '2015-11-01 02:35:37'),
(16, '00639', 'Desktop', 'HP', 'UVT8', '2007-08-23 00:42:42', 'uweimann', 'Room2', '2015-12-14 05:41:52'),
(17, '00525', 'Laptop', 'HP', 'LYB95', '2011-09-08 00:35:24', 'kjohns', 'Room2', '2016-06-28 12:51:22'),
(18, '00102', 'Laptop', 'Samsung', 'HDR40', '2010-12-01 05:52:39', 'vrunolfsson', 'Room2', '2016-11-06 08:25:13'),
(19, '00639', 'Harddrive', 'HP', 'YGZ11', '2016-10-16 09:07:36', 'hterry', 'Room3', '2016-07-06 04:46:48'),
(20, '00701', 'Desktop', 'Samsung', 'IVV87', '2017-04-16 03:39:26', 'fdibbert', 'Room1', '2015-06-17 03:29:53'),
(21, '00262', 'Harddrive', 'HP', 'ALK4', '2008-03-25 09:13:51', 'dspinka', 'Room1', '2016-04-09 05:30:23'),
(22, '00406', 'Laptop', 'Toshiba', 'VBG87', '2010-05-27 09:32:34', 'vkassulke', 'Room3', '2016-11-23 09:04:52'),
(23, '00444', 'Laptop', 'HP', 'LEL8', '2011-01-08 02:50:06', 'bkub', 'Room1', '2015-11-16 12:10:46'),
(24, '00642', 'Harddrive', 'HP', 'WVK8', '2015-04-11 10:27:10', 'mbahringer', 'Room1', '2017-03-08 04:33:58'),
(25, '00612', 'Desktop', 'Dell', 'HJC41', '2010-09-18 01:07:44', 'zfunk', 'Room2', '2016-09-05 10:41:02'),
(26, '00180', 'Laptop', 'Toshiba', 'ZZX26', '2011-03-16 12:40:50', 'fgleichner', 'Room2', '2016-06-04 09:15:46'),
(27, '00792', 'Desktop', 'Dell', 'KVR34', '2008-05-22 09:21:02', 'vreinger', 'Room4', '2015-08-19 01:51:08'),
(28, '00218', 'Laptop', 'Dell', 'LHI5', '2007-08-11 07:12:40', 'jbrakus', 'Room3', '2016-03-21 09:07:05'),
(29, '00654', 'Desktop', 'Dell', 'HWK46', '2011-10-27 05:47:00', 'hlockman', 'Room4', '2016-06-03 12:17:28'),
(30, '00612', 'Desktop', 'Dell', 'WUR2', '2012-10-29 03:17:27', 'bkoch', 'Room1', '2015-05-01 06:39:23'),
(31, '00887', 'Laptop', 'Toshiba', 'LGJ4', '2013-12-08 03:58:52', 'rcremin', 'Room4', '2016-12-20 04:18:41'),
(32, '00802', 'Laptop', 'Dell', 'LHT52', '2009-04-19 11:09:36', 'ykling', 'Room2', '2016-06-10 08:25:55'),
(33, '00791', 'Laptop', 'Toshiba', 'OHQ58', '2011-10-27 04:40:01', 'rmiller', 'Room4', '2015-09-03 07:36:24'),
(34, '00608', 'Harddrive', 'Samsung', 'JKK30', '2012-12-29 04:30:54', 'mgerlach', 'Room4', '2015-06-15 12:19:52'),
(35, '00798', 'Harddrive', 'Dell', 'EWF73', '2015-08-06 05:27:41', 'bdaugherty', 'Room3', '2015-10-18 09:57:44'),
(36, '00566', 'Laptop', 'Samsung', 'LKU90', '2009-02-07 08:51:31', 'ntowne', 'Room3', '2015-09-22 05:41:54'),
(37, '00247', 'Desktop', 'Samsung', 'VUQ91', '2014-12-22 10:48:03', 'rpfannerstill', 'Room4', '2016-11-16 12:28:50'),
(38, '00801', 'Desktop', 'Dell', 'CSR59', '2012-09-05 08:00:29', 'vfeest', 'Room3', '2016-08-06 07:43:12'),
(39, '00477', 'Laptop', 'Samsung', 'QWN10', '2017-03-03 03:44:06', 'lziemann', 'Room1', '2016-10-02 11:17:15'),
(40, '00565', 'Laptop', 'Dell', 'KZB31', '2011-10-22 10:36:56', 'owatsica', 'Room4', '2016-02-26 02:54:44'),
(41, '00722', 'Harddrive', 'Samsung', 'HAQ92', '2007-05-05 03:11:54', 'lkuhic', 'Room4', '2016-09-11 09:04:00'),
(42, '00866', 'Laptop', 'Dell', 'DFO44', '2016-03-11 09:33:16', 'ihettinger', 'Room1', '2015-06-10 10:09:39'),
(43, '00662', 'Desktop', 'Toshiba', 'XCW72', '2012-08-14 03:44:59', 'xfeeney', 'Room3', '2016-10-21 03:27:48'),
(44, '00734', 'Laptop', 'Toshiba', 'NOV53', '2009-10-12 00:05:59', 'aullrich', 'Room3', '2016-03-03 06:01:34'),
(45, '00427', 'Laptop', 'Toshiba', 'RMZ17', '2008-09-12 02:09:49', 'maufderhar', 'Room3', '2015-11-05 11:12:57'),
(46, '00946', 'Harddrive', 'Samsung', 'KMR35', '2008-05-28 01:19:12', 'olebsack', 'Room2', '2015-07-25 06:54:02'),
(47, '00281', 'Desktop', 'Toshiba', 'OZM39', '2008-04-29 11:43:52', 'rledner', 'Room2', '2016-07-30 07:55:19'),
(48, '00563', 'Laptop', 'Samsung', 'FIS33', '2016-09-12 02:08:40', 'qyundt', 'Room1', '2017-03-04 04:20:30'),
(49, '00232', 'Harddrive', 'Samsung', 'XLK73', '2007-06-12 06:02:25', 'ukub', 'Room3', '2016-08-28 07:13:02'),
(50, '00480', 'Desktop', 'Toshiba', 'FZF18', '2009-12-31 04:07:57', 'yjerde', 'Room1', '2015-06-29 01:38:02'),
(51, '00451', 'Laptop', 'Samsung', 'ADK29', '2008-04-14 11:07:35', 'ekris', 'Room1', '2016-04-15 12:43:30'),
(52, '00864', 'Desktop', 'HP', 'OMY46', '2011-01-30 01:37:25', 'bhane', 'Room1', '2016-09-17 08:34:47'),
(53, '00815', 'Desktop', 'HP', 'ELN16', '2010-08-31 04:19:30', 'rkris', 'Room4', '2015-09-07 10:12:32'),
(54, '00845', 'Laptop', 'Dell', 'IPF5', '2007-10-18 10:46:17', 'promaguera', 'Room3', '2015-09-25 03:35:27'),
(55, '00219', 'Harddrive', 'Samsung', 'ALF38', '2014-08-21 02:42:19', 'ugulgowski', 'Room2', '2015-08-30 07:41:57'),
(56, '00575', 'Desktop', 'Dell', 'MMQ39', '2016-07-16 06:19:01', 'hwindler', 'Room3', '2016-02-15 07:07:52'),
(57, '00112', 'Harddrive', 'Toshiba', 'FME46', '2012-08-26 06:38:16', 'febert', 'Room4', '2015-09-28 10:55:37'),
(58, '00287', 'Desktop', 'Samsung', 'FMW66', '2009-10-27 11:21:01', 'hcorkery', 'Room3', '2015-11-16 11:15:06'),
(59, '00708', 'Harddrive', 'Samsung', 'JVM81', '2008-01-19 08:21:01', 'lwill', 'Room4', '2016-12-21 02:21:15'),
(60, '00753', 'Laptop', 'Samsung', 'LGM98', '2012-04-13 11:38:46', 'tgreen', 'Room3', '2015-07-09 07:35:29'),
(61, '00270', 'Harddrive', 'HP', 'UXT21', '2015-04-21 04:56:03', 'gzboncak', 'Room4', '2015-05-28 12:14:48'),
(62, '00585', 'Laptop', 'HP', 'UYT87', '2012-07-13 10:06:01', 'ukirlin', 'Room1', '2016-08-02 03:20:01'),
(63, '00793', 'Desktop', 'HP', 'VLZ34', '2011-02-07 07:28:47', 'ugrady', 'Room3', '2015-07-03 12:10:32'),
(64, '00600', 'Desktop', 'Toshiba', 'HAF56', '2008-12-01 12:59:09', 'wbrekke', 'Room1', '2016-12-15 04:06:38'),
(65, '00915', 'Desktop', 'Toshiba', 'EAM85', '2015-05-14 06:23:31', 'gschulist', 'Room4', '2017-03-29 06:07:00'),
(66, '00911', 'Desktop', 'HP', 'TBN19', '2014-11-26 01:44:14', 'xkuvalis', 'Room4', '2016-07-25 02:57:37'),
(67, '00165', 'Harddrive', 'Samsung', 'UAL24', '2010-01-20 07:02:09', 'mkuvalis', 'Room3', '2016-10-10 03:56:55'),
(68, '00275', 'Desktop', 'Dell', 'WJS70', '2012-12-24 10:28:49', 'bjakubowski', 'Room3', '2015-09-02 01:55:45'),
(69, '00737', 'Laptop', 'Toshiba', 'BJX23', '2007-08-19 02:45:26', 'ylynch', 'Room3', '2016-09-17 12:03:53'),
(70, '00808', 'Harddrive', 'Toshiba', 'MEM94', '2012-12-26 04:46:51', 'wquigley', 'Room2', '2016-12-10 07:26:34'),
(71, '00525', 'Harddrive', 'HP', 'LOK72', '2010-10-27 02:22:26', 'qmohr', 'Room4', '2016-04-03 04:01:57'),
(72, '00123', 'Harddrive', 'Toshiba', 'QRX81', '2012-01-22 10:46:22', 'flarkin', 'Room4', '2016-05-07 05:20:20'),
(73, '00573', 'Harddrive', 'Dell', 'BII5', '2010-11-16 07:39:38', 'fwillms', 'Room1', '2016-12-19 08:24:29'),
(74, '00854', 'Laptop', 'HP', 'SDY4', '2011-01-07 02:01:33', 'zabernathy', 'Room2', '2015-09-28 10:04:22'),
(75, '00294', 'Laptop', 'Toshiba', 'CJZ21', '2017-04-06 05:37:59', 'tcollins', 'Room2', '2016-02-26 01:33:08'),
(76, '00707', 'Laptop', 'Samsung', 'GIF68', '2012-02-09 11:52:25', 'sschinner', 'Room3', '2017-04-01 08:44:38'),
(77, '00957', 'Harddrive', 'Samsung', 'QYQ70', '2015-12-14 06:29:28', 'vweimann', 'Room4', '2017-02-26 02:08:58'),
(78, '00631', 'Desktop', 'Dell', 'NLD44', '2007-06-02 08:52:59', 'fmurazik', 'Room3', '2016-06-04 01:25:36'),
(79, '00171', 'Desktop', 'Dell', 'DAQ68', '2015-04-04 08:05:53', 'vhills', 'Room4', '2016-05-16 11:46:26'),
(80, '00501', 'Harddrive', 'Dell', 'BNH21', '2009-02-18 09:23:49', 'esipes', 'Room1', '2016-03-07 03:50:24'),
(81, '00481', 'Harddrive', 'HP', 'YTR69', '2016-02-18 08:32:15', 'gkulas', 'Room4', '2016-10-15 03:11:01'),
(82, '00894', 'Harddrive', 'HP', 'ANU78', '2013-05-23 11:03:52', 'ucollins', 'Room1', '2016-03-22 07:47:21'),
(83, '00874', 'Laptop', 'Samsung', 'ZUT51', '2008-09-22 06:46:37', 'ofriesen', 'Room4', '2015-09-17 11:26:01'),
(84, '00292', 'Laptop', 'Dell', 'EYP82', '2010-04-14 03:04:31', 'hquitzon', 'Room4', '2015-10-19 01:27:01'),
(85, '00793', 'Desktop', 'Toshiba', 'BQB30', '2013-03-12 06:34:35', 'mfeeney', 'Room3', '2015-12-22 07:54:21'),
(86, '00871', 'Laptop', 'Toshiba', 'RDF33', '2007-09-03 07:00:00', 'dswaniawski', 'Room3', '2015-10-15 06:03:42'),
(87, '00962', 'Harddrive', 'Samsung', 'EVT48', '2009-10-16 08:59:06', 'bprosacco', 'Room3', '2015-04-22 05:13:01'),
(88, '00400', 'Harddrive', 'HP', 'PVF23', '2009-07-08 08:03:42', 'fkemmer', 'Room2', '2016-04-10 05:15:54'),
(89, '00628', 'Harddrive', 'Dell', 'FSA71', '2013-10-23 10:56:51', 'hmurray', 'Room1', '2016-06-26 01:37:56'),
(90, '00493', 'Desktop', 'Samsung', 'PGA23', '2011-09-10 09:26:12', 'gkreiger', 'Room3', '2016-04-15 06:22:28'),
(91, '00413', 'Harddrive', 'Toshiba', 'ZVB51', '2013-03-20 03:50:09', 'ewatsica', 'Room4', '2016-02-09 12:53:57'),
(92, '00418', 'Desktop', 'Toshiba', 'DUD8', '2010-10-22 01:36:41', 'qwitting', 'Room1', '2016-08-10 03:14:14'),
(93, '00218', 'Laptop', 'HP', 'YXI51', '2007-07-24 10:04:40', 'lauer', 'Room3', '2016-10-24 05:02:36'),
(94, '00606', 'Laptop', 'HP', 'RBL81', '2008-08-01 01:36:54', 'xjakubowski', 'Room4', '2016-12-14 05:23:46'),
(95, '00635', 'Laptop', 'HP', 'NYS11', '2010-03-19 01:09:42', 'sbergnaum', 'Room3', '2015-08-02 05:29:20'),
(96, '00771', 'Laptop', 'Toshiba', 'ODZ60', '2008-04-19 09:52:42', 'ycrona', 'Room1', '2015-12-22 06:12:39'),
(97, '00118', 'Desktop', 'Dell', 'XBG15', '2016-01-08 06:20:37', 'dkirlin', 'Room4', '2017-03-08 11:22:47'),
(98, '00646', 'Desktop', 'Dell', 'CUV9', '2014-07-09 04:58:50', 'zschinner', 'Room1', '2016-03-10 01:51:00'),
(99, '00946', 'Harddrive', 'Samsung', 'ZGR38', '2011-05-12 08:19:01', 'bwehner', 'Room3', '2015-11-12 08:54:45'),
(100, '00602', 'Laptop', 'Dell', 'HQC70', '2013-08-01 01:01:21', 'ylittle', 'Room3', '2017-01-31 06:51:07'),
(101, '00854', 'Desktop', 'Dell', 'FNL93', '2010-03-25 12:05:29', 'dspencer', 'Room2', '2015-06-24 05:20:21'),
(102, '00376', 'Desktop', 'Samsung', 'OLF98', '2012-11-23 11:10:17', 'imante', 'Room3', '2015-07-09 08:46:39'),
(103, '00826', 'Desktop', 'HP', 'DMY83', '2013-06-07 02:02:41', 'jkunze', 'Room1', '2017-02-28 02:44:56'),
(104, '00695', 'Laptop', 'Dell', 'OBW92', '2014-09-05 05:20:47', 'jrempel', 'Room1', '2016-06-14 04:49:29'),
(105, '00701', 'Desktop', 'Toshiba', 'YSR80', '2013-06-07 08:20:40', 'hyundt', 'Room2', '2016-06-19 06:06:18'),
(106, '00459', 'Laptop', 'Toshiba', 'YIQ74', '2016-05-18 06:43:44', 'nwiegand', 'Room1', '2015-12-19 02:10:37'),
(107, '00813', 'Desktop', 'Samsung', 'YNE35', '2013-12-07 05:50:30', 'pcrona', 'Room3', '2016-09-16 09:59:42'),
(108, '00454', 'Harddrive', 'HP', 'BVP85', '2015-06-05 10:08:03', 'ereilly', 'Room1', '2017-01-04 03:31:24'),
(109, '00445', 'Desktop', 'Dell', 'ANG70', '2011-02-17 04:08:27', 'amarks', 'Room3', '2016-07-12 02:17:27'),
(110, '00931', 'Laptop', 'Samsung', 'SCB44', '2014-09-12 09:18:12', 'fhaley', 'Room3', '2016-04-05 03:03:04'),
(111, '00658', 'Desktop', 'Dell', 'QWG42', '2017-04-12 11:21:03', 'kmayer', 'Room4', '2016-08-23 05:43:24'),
(112, '00972', 'Desktop', 'HP', 'FZA12', '2009-03-28 07:03:46', 'aspinka', 'Room4', '2017-01-17 06:22:11'),
(113, '00223', 'Harddrive', 'Toshiba', 'ZEZ37', '2007-05-12 11:22:37', 'jmueller', 'Room2', '2015-12-08 12:34:12'),
(114, '00381', 'Harddrive', 'Samsung', 'QCW33', '2012-04-18 04:41:44', 'vprice', 'Room2', '2016-03-28 03:24:05'),
(115, '00214', 'Desktop', 'Dell', 'TNC53', '2012-03-31 06:31:59', 'wmurphy', 'Room2', '2017-02-11 09:40:55'),
(116, '00259', 'Desktop', 'Toshiba', 'KAP46', '2013-10-25 05:14:51', 'wnitzsche', 'Room2', '2015-11-10 07:22:56'),
(117, '00960', 'Desktop', 'Dell', 'CMS26', '2009-04-04 11:11:15', 'wabbott', 'Room4', '2016-12-20 08:57:48'),
(118, '00368', 'Laptop', 'Toshiba', 'FCP1', '2008-11-05 11:22:36', 'wwiza', 'Room1', '2016-07-25 06:25:19'),
(119, '00527', 'Desktop', 'HP', 'AUY12', '2013-09-30 01:51:16', 'sschiller', 'Room3', '2016-08-22 12:24:43'),
(120, '00669', 'Desktop', 'HP', 'MNY69', '2008-02-26 07:30:26', 'gcole', 'Room4', '2016-09-15 05:38:42'),
(121, '00807', 'Laptop', 'Samsung', 'TPH38', '2009-05-25 06:41:07', 'bstamm', 'Room3', '2016-03-13 11:05:44'),
(122, '00425', 'Desktop', 'Samsung', 'JXP64', '2009-07-27 06:23:43', 'gpfannerstill', 'Room3', '2015-05-21 05:32:18'),
(123, '00865', 'Desktop', 'HP', 'DSB85', '2016-09-14 03:37:28', 'wquigley', 'Room4', '2016-06-28 04:22:11'),
(124, '00194', 'Harddrive', 'Toshiba', 'NDQ13', '2015-10-07 03:33:41', 'vberge', 'Room4', '2016-02-12 07:31:56'),
(125, '00146', 'Laptop', 'HP', 'BAZ75', '2011-04-16 09:51:19', 'lhills', 'Room4', '2016-11-22 07:00:52'),
(126, '00346', 'Harddrive', 'Toshiba', 'JWF74', '2012-06-25 07:21:04', 'ytromp', 'Room3', '2016-07-01 11:28:38'),
(127, '00315', 'Harddrive', 'Samsung', 'POL12', '2013-02-14 10:38:48', 'gvon', 'Room3', '2015-06-08 03:02:28'),
(128, '00964', 'Harddrive', 'HP', 'CSC17', '2012-12-25 04:41:12', 'smueller', 'Room2', '2016-08-31 02:52:36'),
(129, '00250', 'Harddrive', 'Dell', 'ILE39', '2011-01-28 08:47:37', 'ymohr', 'Room2', '2015-12-29 03:34:56'),
(130, '00722', 'Desktop', 'HP', 'QJE26', '2015-10-30 05:18:35', 'rvandervort', 'Room2', '2015-12-08 01:23:35'),
(131, '00256', 'Laptop', 'Dell', 'DPT4', '2008-11-27 03:32:59', 'ybrekke', 'Room2', '2017-02-17 05:29:27'),
(132, '00723', 'Harddrive', 'Samsung', 'RTR99', '2008-06-17 08:54:56', 'bmclaughlin', 'Room3', '2015-06-06 02:33:16'),
(133, '00445', 'Laptop', 'Toshiba', 'HWD41', '2015-07-30 07:45:04', 'kmoore', 'Room1', '2015-12-19 09:56:01'),
(134, '00228', 'Laptop', 'Dell', 'OAC34', '2009-05-25 05:54:09', 'rcollier', 'Room3', '2016-07-25 05:12:21'),
(135, '00993', 'Laptop', 'Dell', 'GYJ23', '2016-10-16 11:41:15', 'sstroman', 'Room4', '2016-10-28 03:01:18'),
(136, '00565', 'Laptop', 'Samsung', 'VWV57', '2013-07-14 10:36:05', 'ihuel', 'Room1', '2016-10-10 07:02:10'),
(137, '00857', 'Harddrive', 'Toshiba', 'MKR94', '2016-09-07 00:02:23', 'mkemmer', 'Room2', '2017-02-27 12:29:02'),
(138, '00449', 'Desktop', 'HP', 'NVH53', '2008-05-25 04:21:54', 'jkozey', 'Room3', '2015-10-24 05:26:19'),
(139, '00487', 'Laptop', 'Samsung', 'RTA67', '2007-10-25 11:56:16', 'agrant', 'Room3', '2016-01-18 02:24:26'),
(140, '00181', 'Desktop', 'Dell', 'REF46', '2010-06-15 09:41:27', 'vgreenholt', 'Room3', '2015-07-09 07:52:18'),
(141, '00748', 'Laptop', 'Toshiba', 'ROO40', '2012-04-18 04:56:42', 'pcollier', 'Room4', '2015-06-23 11:02:03'),
(142, '00734', 'Laptop', 'Toshiba', 'AKN33', '2009-12-19 09:40:40', 'khegmann', 'Room1', '2015-09-26 06:38:25'),
(143, '00384', 'Laptop', 'HP', 'DBN72', '2008-05-16 02:34:49', 'cmarks', 'Room1', '2016-10-06 05:27:42'),
(144, '00725', 'Desktop', 'Dell', 'IQI49', '2013-09-29 11:02:21', 'cconsidine', 'Room1', '2015-05-03 12:55:26'),
(145, '00640', 'Harddrive', 'HP', 'OOL59', '2016-09-05 07:11:38', 'wschmitt', 'Room1', '2015-11-17 08:43:30'),
(146, '00478', 'Harddrive', 'HP', 'DBX4', '2009-02-13 09:28:13', 'tveum', 'Room1', '2016-12-31 10:16:46'),
(147, '00318', 'Harddrive', 'Dell', 'ZMI99', '2017-04-16 09:07:54', 'nklocko', 'Room2', '2016-07-21 06:30:14'),
(148, '00987', 'Desktop', 'Toshiba', 'XYR54', '2007-10-05 09:53:27', 'wboyle', 'Room3', '2016-08-27 07:09:35'),
(149, '00920', 'Desktop', 'Toshiba', 'LZB18', '2016-01-30 10:52:35', 'rmayert', 'Room3', '2016-06-21 05:05:19'),
(150, '00396', 'Desktop', 'Dell', 'FWL51', '2016-12-13 05:06:22', 'rlang', 'Room4', '2015-06-14 07:54:49'),
(151, '00949', 'Harddrive', 'Dell', 'AXP69', '2013-12-01 05:12:03', 'jdare', 'Room2', '2016-08-17 05:04:33'),
(152, '00287', 'Laptop', 'Samsung', 'QKP71', '2008-09-23 07:36:16', 'dmurray', 'Room1', '2015-06-24 08:24:13'),
(153, '00816', 'Desktop', 'Samsung', 'VYH54', '2008-08-17 03:56:37', 'ckub', 'Room2', '2016-08-08 06:42:50'),
(154, '00428', 'Desktop', 'Dell', 'NVW59', '2013-09-18 03:39:16', 'hgoyette', 'Room4', '2016-06-05 10:25:09'),
(155, '00394', 'Harddrive', 'Dell', 'FHA73', '2011-06-14 01:56:07', 'ipfeffer', 'Room3', '2015-08-07 10:32:13'),
(156, '00179', 'Desktop', 'Samsung', 'SCF73', '2017-01-10 05:26:47', 'ypowlowski', 'Room2', '2016-12-12 07:47:22'),
(157, '00130', 'Laptop', 'HP', 'NAM94', '2009-08-28 11:06:50', 'bbayer', 'Room1', '2015-11-18 08:16:00'),
(158, '00852', 'Desktop', 'HP', 'PGK37', '2009-02-03 03:38:04', 'vgleason', 'Room3', '2015-09-22 05:28:38'),
(159, '00170', 'Desktop', 'Toshiba', 'GCG80', '2015-11-22 10:30:57', 'gklocko', 'Room2', '2016-10-03 12:30:25'),
(160, '00732', 'Harddrive', 'Dell', 'ZPO57', '2015-03-11 03:28:25', 'eswift', 'Room1', '2015-12-14 09:47:53'),
(161, '00528', 'Laptop', 'Toshiba', 'DCA34', '2011-07-17 02:13:40', 'xkerluke', 'Room4', '2015-11-29 12:38:49'),
(162, '00438', 'Desktop', 'Toshiba', 'TOS98', '2007-06-09 05:25:42', 'fmraz', 'Room4', '2016-01-25 08:37:35'),
(163, '00483', 'Harddrive', 'Toshiba', 'WXG82', '2012-03-20 12:12:42', 'truecker', 'Room4', '2016-02-08 08:40:20'),
(164, '00171', 'Desktop', 'Toshiba', 'DBD99', '2014-03-01 12:09:14', 'qwisozk', 'Room2', '2016-07-17 05:58:37'),
(165, '00197', 'Laptop', 'Samsung', 'PPB66', '2016-04-03 08:03:09', 'fdare', 'Room2', '2016-11-02 08:34:45'),
(166, '00147', 'Laptop', 'HP', 'DWO93', '2014-11-09 10:47:54', 'ahuel', 'Room4', '2016-10-14 11:14:43'),
(167, '00495', 'Laptop', 'HP', 'USG89', '2012-11-16 07:23:01', 'nframi', 'Room2', '2015-08-29 10:55:28'),
(168, '00498', 'Desktop', 'Toshiba', 'SZC91', '2011-10-29 10:00:05', 'vklocko', 'Room1', '2016-12-04 11:27:09'),
(169, '00835', 'Desktop', 'Toshiba', 'CUL94', '2009-08-23 02:43:45', 'uschneider', 'Room1', '2016-11-25 10:34:33'),
(170, '00581', 'Harddrive', 'Toshiba', 'SLM1', '2010-03-05 10:00:23', 'odeckow', 'Room3', '2015-10-31 09:03:40'),
(171, '00247', 'Desktop', 'HP', 'TJQ0', '2010-01-09 12:43:39', 'ahuels', 'Room4', '2016-11-30 03:06:58'),
(172, '00221', 'Harddrive', 'HP', 'KDU84', '2007-10-26 06:38:55', 'wrowe', 'Room4', '2015-07-20 03:12:18'),
(173, '00200', 'Harddrive', 'Toshiba', 'UWZ63', '2011-02-06 01:21:19', 'shartmann', 'Room2', '2016-03-26 09:58:21'),
(174, '00325', 'Laptop', 'HP', 'ILT11', '2011-10-31 07:46:34', 'awest', 'Room2', '2016-09-02 11:14:27'),
(175, '00630', 'Desktop', 'Toshiba', 'DAN61', '2017-01-25 07:05:18', 'hjohnson', 'Room2', '2016-12-02 04:17:14'),
(176, '00143', 'Desktop', 'Samsung', 'QHQ42', '2007-11-08 02:49:16', 'rkilback', 'Room3', '2016-08-09 10:39:30'),
(177, '00101', 'Harddrive', 'Dell', 'PSR12', '2012-07-07 06:30:38', 'xsanford', 'Room2', '2016-07-04 04:09:24'),
(178, '00884', 'Harddrive', 'HP', 'GCV4', '2012-01-20 06:07:59', 'xhagenes', 'Room1', '2015-10-24 11:41:56'),
(179, '00125', 'Harddrive', 'Toshiba', 'AJE65', '2012-03-03 05:23:49', 'qcollier', 'Room4', '2016-02-10 11:45:13'),
(180, '00590', 'Laptop', 'HP', 'OJE44', '2010-04-18 10:01:29', 'gcassin', 'Room1', '2015-10-27 02:02:54'),
(181, '00775', 'Laptop', 'Toshiba', 'GXI93', '2010-07-21 04:38:46', 'hhudson', 'Room3', '2017-02-02 06:12:58'),
(182, '00588', 'Harddrive', 'Dell', 'XTU37', '2009-01-10 05:28:34', 'wdibbert', 'Room3', '2016-03-01 01:22:49'),
(183, '00798', 'Laptop', 'Samsung', 'LQD52', '2017-03-22 02:45:56', 'hframi', 'Room1', '2017-04-15 06:23:20'),
(184, '00433', 'Laptop', 'Dell', 'FZL7', '2012-03-25 06:09:45', 'lhintz', 'Room1', '2015-10-12 09:02:56'),
(185, '00656', 'Harddrive', 'Toshiba', 'PUL40', '2015-02-26 09:43:04', 'ljacobs', 'Room3', '2016-10-18 09:18:16'),
(186, '00731', 'Harddrive', 'Toshiba', 'NZA85', '2008-07-18 10:32:07', 'tparisian', 'Room4', '2016-12-19 08:08:18'),
(187, '00408', 'Desktop', 'HP', 'IBG98', '2012-06-27 10:57:21', 'njenkins', 'Room3', '2015-12-16 07:27:01'),
(188, '00367', 'Harddrive', 'Dell', 'RFB96', '2014-07-16 10:33:43', 'pgutmann', 'Room4', '2015-12-20 08:58:47'),
(189, '00839', 'Desktop', 'HP', 'XEI7', '2014-08-07 00:11:25', 'pzulauf', 'Room1', '2016-11-04 08:11:24'),
(190, '00266', 'Laptop', 'Dell', 'LXB45', '2013-06-27 05:32:05', 'ntowne', 'Room2', '2016-03-20 06:23:18'),
(191, '00670', 'Desktop', 'Toshiba', 'SAR42', '2008-02-22 09:53:37', 'olowe', 'Room4', '2015-11-23 09:00:33'),
(192, '00899', 'Desktop', 'HP', 'TUO46', '2011-04-17 10:56:19', 'zwintheiser', 'Room2', '2016-03-23 05:26:51'),
(193, '00747', 'Laptop', 'HP', 'XXC25', '2008-05-10 04:47:23', 'hlarson', 'Room2', '2017-03-22 10:18:53'),
(194, '00338', 'Laptop', 'Toshiba', 'VAR63', '2011-11-11 07:34:30', 'yskiles', 'Room4', '2016-06-27 10:03:16'),
(195, '00483', 'Desktop', 'HP', 'EQY80', '2013-05-22 10:53:04', 'sromaguera', 'Room4', '2016-05-09 07:39:48'),
(196, '00385', 'Desktop', 'Dell', 'FGH79', '2015-01-24 05:57:18', 'whalvorson', 'Room2', '2016-06-03 03:55:46'),
(197, '00220', 'Harddrive', 'HP', 'LCO69', '2012-09-02 04:42:29', 'sschaefer', 'Room2', '2015-07-09 04:57:54'),
(198, '00419', 'Harddrive', 'Toshiba', 'KQK98', '2013-06-02 08:00:07', 'ibogisich', 'Room2', '2016-05-18 11:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(3) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Containing the user info';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Admin`) VALUES
(1, 'Matthew', 'Wood', 'Matthew@me.com', '64730ca35ed9274ff6aa8a719407fe53', 1),
(4, 'matthew', 'wood', 'matthew1670@gmail.com', 'ce86d7d02a229acfaca4b63f01a1171b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
