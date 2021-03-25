-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 3 月 25 日 14:42
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `b＿db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `b_table`
--

CREATE TABLE `b_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `score` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `b_table`
--

INSERT INTO `b_table` (`id`, `name`, `score`, `naiyou`, `indate`) VALUES
(1, 'A君', '90', '大変よくできました', '2021-03-20 16:31:03'),
(2, 'B君', '80', 'よくできました', '2021-03-20 16:32:39'),
(3, 'C君', '７５', 'よくできました', '2021-03-20 16:33:18'),
(4, 'D君', '９５', '大変よくできました', '2021-03-20 16:33:52'),
(5, 'E君', '85', 'よくできました', '2021-03-20 16:34:09'),
(6, 'F君', '90', '大変よくできました', '2021-03-20 16:34:34'),
(7, 'G君', '２５', 'もっとがんばりましょう', '2021-03-20 16:35:11'),
(8, 'H君', '８５', 'よくできました', '2021-03-20 16:35:30'),
(9, 'I君', '24', 'もっとがんばりましょう', '2021-03-20 16:35:59'),
(10, 'J君', '５０', 'がんばりましょう', '2021-03-20 16:36:18'),
(11, 'K君', '８０', 'よくできました', '2021-03-20 16:36:39'),
(12, 'L君', '５５', 'できました', '2021-03-20 16:37:04'),
(13, 'M君', '４５', 'できました', '2021-03-20 16:37:32'),
(14, 'N君', '１００', '大変よくできました', '2021-03-20 16:37:53');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `b_table`
--
ALTER TABLE `b_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `b_table`
--
ALTER TABLE `b_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
