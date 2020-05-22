-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-22 10:32:45
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `expend` int(10) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoice`
--

INSERT INTO `invoice` (`id`, `code`, `number`, `period`, `expend`, `year`) VALUES
(1, 'NO', '23784897', 3, 26, '2021'),
(2, 'KX', '66007944', 2, 11, '2021'),
(3, 'SP', '10365697', 5, 97, '2020'),
(4, 'ZT', '52908545', 3, 29, '2020'),
(5, 'CQ', '70970088', 3, 99, '2021'),
(6, 'UX', '63329322', 4, 77, '2021'),
(7, 'JB', '66662290', 4, 70, '2020'),
(8, 'EK', '10588259', 3, 17, '2020'),
(9, 'FH', '69000328', 6, 71, '2021'),
(10, 'LY', '26511015', 5, 61, '2020'),
(11, 'OG', '37799864', 6, 37, '2021'),
(12, 'MS', '42500670', 5, 78, '2021'),
(13, 'GI', '18158807', 2, 11, '2021'),
(14, 'CY', '72440250', 1, 35, '2020'),
(15, 'YD', '41275669', 3, 54, '2021'),
(16, 'UW', '74139753', 1, 23, '2020'),
(17, 'SO', '33379897', 6, 93, '2020'),
(18, 'CM', '20810941', 4, 33, '2021'),
(19, 'PR', '74199059', 5, 78, '2020'),
(20, 'LY', '46927006', 1, 60, '2021'),
(21, 'RA', '76909295', 4, 97, '2020'),
(22, 'DS', '23569533', 4, 54, '2021'),
(23, 'GP', '48802641', 4, 36, '2020'),
(24, 'ZL', '35070543', 6, 24, '2021'),
(25, 'SY', '16903919', 3, 88, '2020'),
(26, 'JH', '47333014', 2, 15, '2021'),
(27, 'WA', '24646197', 4, 98, '2021'),
(28, 'AJ', '48333076', 2, 42, '2020'),
(29, 'NT', '14532722', 5, 47, '2020'),
(30, 'AI', '68964926', 2, 89, '2021'),
(31, 'KT', '33565398', 4, 65, '2020'),
(32, 'ZS', '14766313', 2, 22, '2020'),
(33, 'QV', '40002167', 5, 56, '2021'),
(34, 'CU', '12452313', 1, 79, '2021'),
(35, 'TX', '51610932', 1, 87, '2021'),
(36, 'II', '15047496', 6, 43, '2021'),
(37, 'QU', '58761204', 2, 84, '2021'),
(38, 'OL', '60385943', 5, 73, '2021'),
(39, 'QQ', '22178241', 4, 98, '2020'),
(40, 'KP', '24622632', 5, 42, '2021'),
(41, 'JA', '19372603', 2, 84, '2021'),
(42, 'HU', '71375034', 2, 83, '2020'),
(43, 'BF', '29639291', 1, 14, '2021'),
(44, 'PU', '76237614', 5, 79, '2021'),
(45, 'TW', '39847668', 5, 71, '2020'),
(46, 'WR', '42831782', 4, 64, '2020'),
(47, 'MY', '43738128', 3, 30, '2020'),
(48, 'VR', '61343160', 4, 23, '2020'),
(49, 'JF', '12713326', 3, 25, '2021'),
(50, 'SD', '70197679', 1, 85, '2021');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
