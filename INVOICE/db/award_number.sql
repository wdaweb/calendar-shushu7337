-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-07 16:03:31
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- 資料表結構 `award_number`
--

CREATE TABLE `award_number` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `year` year(4) NOT NULL COMMENT '年',
  `period` tinyint(1) UNSIGNED NOT NULL COMMENT '期',
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '號碼',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '獎別'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_number`
--

INSERT INTO `award_number` (`id`, `year`, `period`, `number`, `type`) VALUES
(40, 2020, 3, '21750606', 1),
(41, 2020, 3, '38798734', 2),
(42, 2020, 3, '98743833', 3),
(43, 2020, 3, '28354266', 3),
(44, 2020, 3, '23789749', 3),
(45, 2020, 3, '129', 4),
(46, 2020, 3, '606', 4),
(47, 2020, 3, '739', 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_number`
--
ALTER TABLE `award_number`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_number`
--
ALTER TABLE `award_number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
