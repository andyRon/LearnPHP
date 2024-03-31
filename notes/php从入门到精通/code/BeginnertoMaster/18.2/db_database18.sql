-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-13 03:58:49
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
-- 数据库： `db_database18`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_affiche`
--

DROP TABLE IF EXISTS `tb_affiche`;
CREATE TABLE IF NOT EXISTS `tb_affiche` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NOT NULL,
  `content` mediumtext CHARACTER SET gb2312 COLLATE gb2312_chinese_ci NOT NULL,
  `createtime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tb_affiche`
--

INSERT INTO `tb_affiche` (`id`, `title`, `content`, `createtime`) VALUES
(8, '为提高编程者的编程水平,特推出视频讲解!', '互动媒体学习社区网为提高编程者的编程水平，特推出50个项目的视频讲解！对源码程序进行剖析！', '2023-04-01 14:14:38'),
(25, '《PHP从入门到精通（第7版）》即将出版啦！', '广大的读者朋友您好，《PHP从入门到精通（第7版）》23年7月即将出版发行！敬请关注！', '2023-04-02 09:37:43'),
(2, 'Happy Every Day!', 'Every day ! in Every Day! I am getting better and better!', '2023-04-02 15:41:45');

-- --------------------------------------------------------

--
-- 表的结构 `tb_demo01`
--

DROP TABLE IF EXISTS `tb_demo01`;
CREATE TABLE IF NOT EXISTS `tb_demo01` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `tb_demo01`
--

INSERT INTO `tb_demo01` (`id`, `name`, `price`, `date`, `type`) VALUES
(1, 'PHP从入门到精通', '56元', '2022-03-01', 'PHP'),
(2, '从零开始学JavaScript', '46元', '2022-06-01', 'JavaScript'),
(3, '从零开始学Vue.js', '69元', '2022-06-01', 'Vue.js'),
(4, '从零开始学C语言', '59元', '2022-07-01', 'C语言');

-- --------------------------------------------------------

--
-- 表的结构 `tb_demo02`
--

DROP TABLE IF EXISTS `tb_demo02`;
CREATE TABLE IF NOT EXISTS `tb_demo02` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bookname` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `f_time` date DEFAULT NULL,
  `type` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `tb_demo02`
--

INSERT INTO `tb_demo02` (`id`, `bookname`, `price`, `f_time`, `type`) VALUES
(1, 'PHP从入门到精通', '56', '2022-03-01', 'PHP'),
(2, '从零开始学JavaScript', '46', '2022-06-01', 'JavaScript'),
(5, '从零开始学Java', '79', '2022-06-01', 'Java');

-- --------------------------------------------------------

--
-- 表的结构 `tb_dingdan`
--

DROP TABLE IF EXISTS `tb_dingdan`;
CREATE TABLE IF NOT EXISTS `tb_dingdan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dingdanhao` varchar(125) DEFAULT NULL,
  `spc` varchar(125) DEFAULT NULL,
  `slc` varchar(125) DEFAULT NULL,
  `shouhuoren` varchar(25) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `dizhi` varchar(125) DEFAULT NULL,
  `youbian` varchar(10) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `shff` varchar(25) DEFAULT NULL,
  `zfff` varchar(25) DEFAULT NULL,
  `leaveword` mediumtext,
  `time` varchar(25) DEFAULT NULL,
  `xiadanren` varchar(25) DEFAULT NULL,
  `zt` varchar(50) DEFAULT NULL,
  `total` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `tb_dingdan`
--

INSERT INTO `tb_dingdan` (`id`, `dingdanhao`, `spc`, `slc`, `shouhuoren`, `sex`, `dizhi`, `youbian`, `tel`, `email`, `shff`, `zfff`, `leaveword`, `time`, `xiadanren`, `zt`, `total`) VALUES
(79, '2007111415234939', '211@', '1@', 'dd', '男', 'dd', '130031', '0431-84978***', 'aa@sina.com', '送货上门', '建设银行汇款', 'ddd', '2007-11-14 15:23:49', '纯净水', '已发货&nbsp;', '2599'),
(99, '2007112911451739', '213@', '1@', '纯净水', '女', '黑龙江', '130021', '136********', '130021', '普通平邮', '建设银行汇款', '无', '2007-11-29 11:45:17', '纯净水', '未作任何处理', '9599'),
(98, '2007112911423439', '215@', '1@', '纯净水', '女', '长春市', '130021', '136********', 'tiansi***@sina.com', '普通平邮', '建设银行汇款', '无', '2007-11-29 11:42:34', '纯净水', '未作任何处理', '1399'),
(80, '2007111415332239', '202@', '6@', 'ss', '男', 'ss', '130000', '0431-8497226*', '454@ekek.com', '特快专递', '建设银行汇款', 'ddd', '2007-11-14 15:33:22', '纯净水', '已发货&nbsp;', '588'),
(78, '2007111415170839', '211@202@', '2@1@', '深奥', '男', '长春', '130000', '1365698***', 'chunjingshui**@si*.com', '特快专递', '建设银行汇款', '正在测试中', '2007-11-14 15:17:08', '纯净水', '已发货&nbsp;', '5296'),
(81, '2007111415360839', '202@', '4@', 'll', '男', 'dd', '130000', '0431-8497226*', '454@ekek.com', '普通平邮', '建设银行汇款', 'ddd', '2007-11-14 15:36:08', '纯净水', '已发货&nbsp;', '392'),
(84, '2007111508514439', '202@', '2@', 'ldsf', '男', 'laksf', 'lksf', 'lk21', 'fjlkd@sina.com', '普通平邮', '建设银行汇款', 'sdf', '2007-11-15 08:51:44', '纯净水', '已收款&nbsp;已发货&nbsp;已收货&nbsp;', '196'),
(85, '2007111915194439', '211@', '2@', 'sss', '男', 'sss', 'ss', 'ssss', '454@ekek.com', '普通平邮', '建设银行汇款', 'dfdf', '2007-11-19 15:19:44', '纯净水', '未作任何处理', '5198'),
(87, '2007112118305339', '211@', '2@', 'sdfdf', '男', 'fsdff', 'sdfsdf', 'sfsfsdfs', '454@ekek.com', '普通平邮', '建设银行汇款', 'dfsdf', '2007-11-21 18:30:53', '纯净水', '已收款&nbsp;已发货&nbsp;已收货&nbsp;', '5198'),
(88, '2007112214363739', '211@', '1@', '紫璇', '女', '吉林省长春市河东路1**号', '130000', '0431-84978***', 'zixuan**@si*.com', '送货上门', '网上支付', '保证质量，轻拿轻放！货到前10分钟打电话通知！', '2007-11-22 14:36:37', '纯净水', '未作任何处理', '2599'),
(97, '2007112911284639', '216@@', '10@@', '纯净水', '女', '长春市', '130021', '136********', 'tiansi***@sina.com', '普通平邮', '建设银行汇款', '急', '2007-11-29 11:28:46', '纯净水', '已收款&nbsp;已发货&nbsp;已收货&nbsp;', '8000'),
(90, '2007112215175939', '211@', '1@', 'ddddd', '女', 'dddd', 'ddd', 'ddd', 'dd@aa.com', '普通平邮', '建设银行汇款', 'ddfsdf', '2007-11-22 15:17:59', '纯净水', '未作任何处理', '2599'),
(91, '2007112215263939', '211@', '1@', '33', '男', '4435', '332', '22', '454@ekek.com', '普通平邮', '建设银行汇款', 'asdf', '2007-11-22 15:26:39', '纯净水', '未作任何处理', '2599'),
(100, '2007112913155042', '213@', '1@', 'lx', '男', '1', '1300211', '10', '12.@lkfj.com', '普通平邮', '建设银行汇款', '1', '2007-11-29 13:15:50', 'lx', '已收款&nbsp;已发货&nbsp;已收货&nbsp;', '9599'),
(95, '2007112813551939', '213@', '1@', 'dfer', '男', 'dfer', 'ererwer', 'rrwerwer', 'rwer**@dins.com', '送货上门', '建设银行汇款', 'ewrwer', '2007-11-28 13:55:19', '纯净水', '未作任何处理', '9599'),
(96, '2007112814155139', '213@', '1@', 'retret', '男', 'dfder', 'erwr', '435', '454***@ekek.com', '送货上门', '建设银行汇款', 'dfr34', '2007-11-28 14:15:51', '纯净水', '未作任何处理', '9599'),
(101, '2007113010324643', '213@', '1@', '张丽', '女', '长春市', '130021', '136********', 'tiansi***@sina.com', '普通平邮', '建设银行汇款', '无', '2007-11-30 10:32:46', 'lx', '未作任何处理', '9599');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
