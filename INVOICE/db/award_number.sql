-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-19 02:14:25
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
(26, 0000, 0, '0', 2),
(27, 0000, 0, '0', 1),
(28, 0000, 0, '0', 2),
(29, 0000, 0, '0', 2),
(30, 0000, 0, '0', 2),
(31, 0000, 0, '0', 1),
(32, 0000, 0, '0', 2),
(33, 0000, 0, '0', 2),
(34, 0000, 0, '0', 2),
(35, 0000, 0, '0', 1),
(36, 0000, 0, '0', 2),
(37, 0000, 0, '0', 2),
(38, 0000, 0, '0', 2),
(39, 2020, 1, '222', 1),
(40, 2020, 1, '0', 2),
(41, 2020, 1, '0', 2),
(42, 2020, 1, '0', 2),
(43, 2020, 1, '222', 1),
(44, 2020, 1, '0', 2),
(45, 2020, 1, '222', 1),
(46, 2020, 1, '0', 2),
(47, 2020, 1, '222', 1),
(48, 2020, 1, '0', 2),
(49, 2020, 2, '222', 1),
(50, 2020, 2, '0', 2),
(51, 2020, 2, '42949672', 1),
(52, 2020, 2, '1321321', 2),
(53, 2020, 2, '123132', 3),
(54, 2020, 2, '132', 3),
(55, 2020, 2, '132', 3),
(56, 2020, 2, '123', 3),
(57, 2020, 2, '55', 4),
(58, 2020, 2, '556', 4),
(59, 0000, 0, '0', 1),
(60, 0000, 0, '0', 2),
(61, 0000, 0, '0', 1),
(62, 0000, 0, '0', 2),
(63, 2020, 3, '55555555', 1),
(64, 2020, 3, '45678987', 2),
(65, 2020, 3, '12354687', 3),
(66, 2020, 3, '23546857', 3),
(67, 2020, 3, '25896632', 3),
(68, 2020, 3, '25165454', 3),
(69, 2020, 3, '222', 4),
(70, 2020, 3, '333', 4),
(71, 2020, 3, '55555555', 1),
(72, 2020, 3, '45678987', 2),
(73, 2020, 3, '12354687', 3),
(74, 2020, 3, '23546857', 3),
(75, 2020, 3, '25896632', 3);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
