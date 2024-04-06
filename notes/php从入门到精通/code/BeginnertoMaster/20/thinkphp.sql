-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-27 13:22:33
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
-- 数据库： `thinkphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `publish_time` date NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`id`, `name`, `price`, `publish_time`, `status`) VALUES
(1, 'PHP从入门到精通', '49.80', '2022-03-01', 1),
(2, 'Python从入门到精通', '46.80', '2021-07-01', 1),
(3, 'Java从入门到精通', '49.80', '2021-07-01', 0),
(4, 'C语言从入门到精通', '39.80', '2021-08-01', 0),
(5, 'C++从入门到精通', '47.80', '2021-11-01', 1),
(6, '从零开始学JavaScript', '46.80', '2022-06-01', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
