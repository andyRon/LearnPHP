-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-13 04:00:06
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
-- 数据库： `db_database21`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_book`
--

DROP TABLE IF EXISTS `tb_book`;
CREATE TABLE IF NOT EXISTS `tb_book` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `name` varchar(50) NOT NULL COMMENT '商品名称',
  `pics` varchar(200) NOT NULL DEFAULT 'pics/null.jpg' COMMENT '商品图片',
  `brand` varchar(50) NOT NULL COMMENT '品牌',
  `stocks` int NOT NULL DEFAULT '1' COMMENT '商品库存',
  `m_price` float NOT NULL COMMENT '市场价格',
  `v_price` float NOT NULL COMMENT '会员价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `tb_book`
--

INSERT INTO `tb_book` (`id`, `name`, `pics`, `brand`, `stocks`, `m_price`, `v_price`) VALUES
(3, 'JavaScript从入门到精通', 'pics/1241341777.png', '明日科技', 30, 79.8, 68.8),
(1, 'PHP从入门到精通', 'pics/1208919911.png', '明日科技', 50, 99.8, 88.8),
(32, 'Java从入门到精通', 'pics/1241341677.png', '明日科技', 36, 79.8, 68.8),
(2, 'Python从入门到精通', 'pics/1241341632.png', '明日科技', 56, 79.8, 68.8),
(20, 'C语言从入门到精通', 'pics/1241341592.png', '明日科技', 76, 79.8, 68.8);

-- --------------------------------------------------------

--
-- 表的结构 `tb_guestbook`
--

DROP TABLE IF EXISTS `tb_guestbook`;
CREATE TABLE IF NOT EXISTS `tb_guestbook` (
  `id` int NOT NULL AUTO_INCREMENT,
  `createtime` datetime NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `integral` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `tb_guestbook`
--

INSERT INTO `tb_guestbook` (`id`, `createtime`, `title`, `content`, `integral`) VALUES
(19, '2009-11-16 09:40:40', '致明日科技', '对于您的服务我非常满意', ''),
(15, '2009-09-04 10:42:53', 'PHP编程词典问世', '各位读者：     \r\n    您好，首先感谢您一直以来对我公司图书产品的支持与厚爱！在五一劳动节来临之季，我公司特推出编程词典赠送给广大读者！\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" bordercolor=\"#FF0000\">\r\n  <tr><td>明日科技编程词典即将面市，敬请关注！</td></tr></table>', '99');

-- --------------------------------------------------------

--
-- 表的结构 `tb_public`
--

DROP TABLE IF EXISTS `tb_public`;
CREATE TABLE IF NOT EXISTS `tb_public` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `title` varchar(50) NOT NULL COMMENT '公告标题',
  `content` mediumtext NOT NULL COMMENT '公告内容',
  `addtime` date NOT NULL COMMENT '公告时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `tb_public`
--

INSERT INTO `tb_public` (`id`, `title`, `content`, `addtime`) VALUES
(12, '元旦大酬宾', '元旦即将来临，为此，本网站所有图书让利销售，从1折打起，欢迎订购', '2009-05-27'),
(11, '欢迎新老朋友光临', '热烈欢迎新老朋友光临。本公司从今日起开始网上购物业务，希望您能满意', '2009-05-27'),
(13, '节日送好礼', '本网站所有电子商品一律5折', '2009-05-27'),
(14, '买100送50', '买100送50，只要您购买的图书金额累计达到100元，将有机会赢取价值50元的精美礼物，满1000则赢取1000.机会难得', '2009-05-27'),
(15, '新增图书', '本公司新增加了一些图书，欢迎选购', '2009-05-27'),
(16, 'MySQl双机热备份', '主机配置\r\n（1）在my.ini文件的mysqld一节中加入\r\n（2）创建数据库dbname\r\n（3）mysql命令行输入如下命令为从机分配权限\r\n     grant replication slave on *.* to \'root\'@\'192.168.1.2\' identified by \'pwd\' ;\r\n（4）重启mysql  并在mysql 命令行下输入如下命令\r\n     show master status \\G\r\n\r\n\r\n从机配置\r\n（1）建立dbname数据库\r\n（2）在my.ini的mysqld一节加入\r\n     server-id=2\r\n          master-host=192.168.1.1\r\n          master-port=3306\r\n          master-user=root\r\n          master-password=root\r\n          master-connect-retry=60\r\n（3）重启mysql并在mysql命令行输入\r\n     slave start ; \r\n         启动进程\r\n ', '2009-05-31'),
(17, 'PHP从入门到精通', 'PHP从入门到精通', '2009-05-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
