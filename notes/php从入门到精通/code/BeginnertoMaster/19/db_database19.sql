-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-13 03:59:25
-- 服务器版本： 8.0.31
-- PHP 版本： 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_database19`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_fb`
--

DROP TABLE IF EXISTS `tb_fb`;
CREATE TABLE IF NOT EXISTS `tb_fb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_fb`
--

INSERT INTO `tb_fb` (`id`, `title`, `content`, `date`) VALUES
(11, '自学手册', '自学手册非常好', '2010-11-25'),
(12, '范例宝典', '范例宝典非常适合大家学习', '2010-11-25');

-- --------------------------------------------------------

--
-- 表的结构 `tb_movie`
--

DROP TABLE IF EXISTS `tb_movie`;
CREATE TABLE IF NOT EXISTS `tb_movie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `tb_movie`
--

INSERT INTO `tb_movie` (`id`, `name`, `actor`, `type`, `length`) VALUES
(1, '头号玩家', '泰伊·谢里丹', '动作片', 140),
(2, '星际穿越', '马修·麦康纳', '科幻片', 169),
(3, '美丽心灵', '罗素·克劳', '文艺片', 135),
(4, '超人总动员', '格雷格·T·尼尔森', '动漫', 115),
(5, '阿凡达', '萨姆·沃辛顿', '动作片', 162),
(6, '美女与野兽', '艾玛·沃森', '爱情片', 129);

-- --------------------------------------------------------

--
-- 表的结构 `tb_pdo`
--

DROP TABLE IF EXISTS `tb_pdo`;
CREATE TABLE IF NOT EXISTS `tb_pdo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `userpwd` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_pdo`
--

INSERT INTO `tb_pdo` (`id`, `username`, `userpwd`, `date`) VALUES
(8, 'test', '333', '2023-06-05');

-- --------------------------------------------------------

--
-- 表的结构 `tb_pdo_mysql`
--

DROP TABLE IF EXISTS `tb_pdo_mysql`;
CREATE TABLE IF NOT EXISTS `tb_pdo_mysql` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pdo_type` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `database_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dates` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_pdo_mysql`
--

INSERT INTO `tb_pdo_mysql` (`id`, `pdo_type`, `database_name`, `dates`) VALUES
(1, 'pdo', 'MySQL', '2023-05-18 10:19:17'),
(2, 'pdo', 'Oracle', '2023-05-18 15:16:17'),
(3, 'pdo', 'Access', '2023-05-20 10:10:00'),
(4, 'pdo', 'SQL Server', '2023-06-09 10:59:30'),
(5, 'pdo', 'db2', '2023-06-16 10:59:41'),
(6, 'pdo', 'MySQL', '2023-06-21 12:00:00'),
(7, 'pdo', 'MySQL', '2023-06-10 10:10:10'),
(8, 'pdo', 'MySQL', '2023-06-17 13:14:16'),
(27, 'pdo', 'MySQL', '2023-06-23 15:16:17'),
(28, 'pdo', 'MySQL', '2023-06-23 15:16:17'),
(29, 'pdo', 'MySQL', '2023-06-23 15:16:17');

-- --------------------------------------------------------

--
-- 表的结构 `tb_reg`
--

DROP TABLE IF EXISTS `tb_reg`;
CREATE TABLE IF NOT EXISTS `tb_reg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pwd` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_reg`
--

INSERT INTO `tb_reg` (`id`, `name`, `pwd`, `email`, `address`) VALUES
(1, 'Terry', 'f379eaf3c831b04de153469d1bec345e', 'mingrisoft@mingrisoft.com', '长春市'),
(2, 'Terry', 'f379eaf3c831b04de153469d1bec345e', 'mingrisoft@mingrisoft.com', '长春市'),
(3, 'Terry', 'f379eaf3c831b04de153469d1bec345e', 'mingrisoft@mingrisoft.com', '长春市');

-- --------------------------------------------------------

--
-- 表的结构 `tb_zc`
--

DROP TABLE IF EXISTS `tb_zc`;
CREATE TABLE IF NOT EXISTS `tb_zc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `userpwd` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qq` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_zc`
--

INSERT INTO `tb_zc` (`id`, `username`, `userpwd`, `qq`, `email`, `date`) VALUES
(1, 'mrsoft', 'mr', '5315xxxxx', 'phpr_xx@xxx.xxx', '2010-11-24'),
(2, 'mr', 'mrsoft', '5315xxxxx', 'phper_ym@xxx.xxx', '2010-11-24'),
(3, 'asdasda', 'asdasd', 'asdasd', 'asdasd', '2010-11-25'),
(4, 'adadsasd', 'asdasd', 'adad', 'asdasd', '2010-11-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
