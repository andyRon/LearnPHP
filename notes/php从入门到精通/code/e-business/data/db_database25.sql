-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2023-06-27 13:27:46
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
-- 数据库： `db_database25`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '管理员账号',
  `pwd` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `pwd`) VALUES
(1, 'tm', '96e79218965eb72c92a549dd5a330112'),
(3, 'mr', 'fdb390e945559e74475ed8c8bbb48ca5');

-- --------------------------------------------------------

--
-- 表的结构 `tb_class`
--

DROP TABLE IF EXISTS `tb_class`;
CREATE TABLE IF NOT EXISTS `tb_class` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '类型名称',
  `supid` int NOT NULL COMMENT '父类ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_class`
--

INSERT INTO `tb_class` (`id`, `name`, `supid`) VALUES
(1, '电子类', 0),
(2, '家具类', 0),
(23, '语言类', 0),
(18, '书籍类', 0),
(21, '电器类', 0),
(22, '电脑类', 0),
(25, '笔记本', 0),
(34, '厨具类', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_commo`
--

DROP TABLE IF EXISTS `tb_commo`;
CREATE TABLE IF NOT EXISTS `tb_commo` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品名称',
  `pics` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'pics/null.jpg' COMMENT '商品图片',
  `info` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品介绍',
  `addtime` date NOT NULL COMMENT '添加时间',
  `area` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品产地',
  `model` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品型号',
  `class` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品类型',
  `brand` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '品牌',
  `stocks` int NOT NULL DEFAULT '1' COMMENT '商品库存',
  `sell` int NOT NULL DEFAULT '0' COMMENT '销售量',
  `m_price` float NOT NULL COMMENT '市场价格',
  `v_price` float NOT NULL COMMENT '会员价格',
  `fold` float NOT NULL DEFAULT '9' COMMENT '打折率',
  `isnew` int NOT NULL DEFAULT '1' COMMENT '是否新品',
  `isnom` int NOT NULL DEFAULT '0' COMMENT '是否推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_commo`
--

INSERT INTO `tb_commo` (`id`, `name`, `pics`, `info`, `addtime`, `area`, `model`, `class`, `brand`, `stocks`, `sell`, `m_price`, `v_price`, `fold`, `isnew`, `isnom`) VALUES
(26, 'PHP从入门到精通', 'pics/1686710571.png', '暂无介绍', '2023-06-14', '中国', '2022', '18', '明日科技', 10, 1, 99.8, 89.82, 9, 1, 1),
(27, '调料盒', 'pics/1686807150.jpg', '暂无介绍', '2023-06-14', '中国', '2022', '34', '小当家', 20, 0, 16.6, 9.96, 6, 1, 0),
(28, '网络机顶盒', 'pics/1686710812.jpg', '暂无介绍', '2023-06-14', '中国', '2022', '21', '小米', 20, 1, 356, 320.4, 9, 1, 1),
(29, '星星抱枕', 'pics/1686807172.jpg', '暂无介绍', '2023-06-14', '中国', '2022', '2', '小熊', 10, 0, 20, 18, 9, 0, 0),
(30, '吸油烟机', 'pics/1686710925.jpg', '暂无介绍', '2023-06-14', '中国', '2022', '21', '老板', 10, 1, 2990, 2691, 9, 0, 1),
(31, '小米13手机', 'pics/1686711038.jpg', '暂无介绍', '2023-06-14', '中国', '2022', '1', '小米', 15, 1, 4280, 4066, 9.5, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_form`
--

DROP TABLE IF EXISTS `tb_form`;
CREATE TABLE IF NOT EXISTS `tb_form` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `formid` varchar(125) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '订单号',
  `commo_id` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品id',
  `commo_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品名称',
  `commo_num` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品数量',
  `agoprice` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '商品单价',
  `fold` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '打折率',
  `total` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '消费总额',
  `vendee` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '消费者',
  `taker` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '收货人姓名',
  `address` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '送货地址',
  `tel` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '联系电话',
  `code` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '邮编',
  `pay_method` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '付款方式',
  `del_method` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '送货方式',
  `formtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单日期',
  `state` int NOT NULL COMMENT '订单状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_form`
--

INSERT INTO `tb_form` (`id`, `formid`, `commo_id`, `commo_name`, `commo_num`, `agoprice`, `fold`, `total`, `vendee`, `taker`, `address`, `tel`, `code`, `pay_method`, `del_method`, `formtime`, `state`) VALUES
(43, '1686793921', '30,26', '吸油烟机,PHP从入门到精通', '1,1', '2691,89.82', '9,9', '2780.82', 'Tony', 'Rose', '吉林省长春市', '130********', '130000', '邮局汇款', '送货上门', '2023-06-14 17:52:01', 0),
(42, '1686793882', '31,28', '小米13手机,网络机顶盒', '1,1', '4066,320.4', '9.5,9', '4386.4', 'Tony', 'Jack', '吉林省长春市', '152********', '130000', '支付宝', '快递', '2023-06-14 17:51:22', 2),
(41, '1686793821', '28,30,31', '网络机顶盒,吸油烟机,小米13手机', '1,1,2', '320.4,2691,4066', '9,9,9.5', '11143.4', 'Tony', 'Jerry', '吉林省长春市', '133********', '130000', '银行转账', '平邮', '2023-06-14 17:50:21', 0),
(40, '1686793775', '30,28', '吸油烟机,网络机顶盒', '1,1', '2691,320.4', '9,9', '3011.4', 'Tony', 'Tom', '吉林省长春市', '158********', '130000', '银行转账', '平邮', '2023-06-14 17:49:35', 1),
(39, '1686735548', '31,26', '小米13手机,PHP从入门到精通', '1,2', '4066,89.82', '9.5,9', '4245.64', 'Tony', 'Kelly', '吉林省长春市', '156********', '130000', '银行转账', '平邮', '2023-06-14 01:39:08', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_links`
--

DROP TABLE IF EXISTS `tb_links`;
CREATE TABLE IF NOT EXISTS `tb_links` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '链接名称',
  `url` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '链接网址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_links`
--

INSERT INTO `tb_links` (`id`, `name`, `url`) VALUES
(5, '编 程 词 典 网', 'http://www.mrbccd.com'),
(6, '编 程 体 验 网', 'http://www.bcty365.com');

-- --------------------------------------------------------

--
-- 表的结构 `tb_opinion`
--

DROP TABLE IF EXISTS `tb_opinion`;
CREATE TABLE IF NOT EXISTS `tb_opinion` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `content` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '评论内容',
  `userid` int NOT NULL COMMENT '用户id',
  `commoid` int NOT NULL COMMENT '商品id',
  `otime` datetime NOT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tb_public`
--

DROP TABLE IF EXISTS `tb_public`;
CREATE TABLE IF NOT EXISTS `tb_public` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '公告标题',
  `content` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '公告内容',
  `addtime` date NOT NULL COMMENT '公告时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_public`
--

INSERT INTO `tb_public` (`id`, `title`, `content`, `addtime`) VALUES
(12, '五一大酬宾', '五一即将来临，为此，本网站所有商品让利销售，从1折打起，欢迎订购', '2023-06-23'),
(11, '欢迎新老朋友光临', '热烈欢迎新老朋友光临。本公司从今日起开始了网上购物业务，希望您能满意', '2023-06-23'),
(14, '买100送100', '买100送100，只要您购买的商品够100累计达到100元，将有机会赢取价值100元的精美礼物，满1000则赢取1000.机会难得', '2023-06-22'),
(15, '新增项目', '本公司新增加了一些商品类别', '2023-06-22');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `name` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '用户名称',
  `password` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '用户密码',
  `question` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '密码保护',
  `answer` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '问题答案',
  `realname` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '真实姓名',
  `card` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '身份证号',
  `tel` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '手机',
  `phone` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '座机',
  `Email` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'Email',
  `QQ` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'QQ',
  `code` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '邮编',
  `address` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT '地址',
  `addtime` datetime NOT NULL COMMENT '注册日期',
  `isfreeze` int NOT NULL DEFAULT '0' COMMENT '是否冻结',
  `shopping` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT '购物车信息',
  `consume` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `password`, `question`, `answer`, `realname`, `card`, `tel`, `phone`, `Email`, `QQ`, `code`, `address`, `addtime`, `isfreeze`, `shopping`, `consume`) VALUES
(1, 'mrsoft', 'e10adc3949ba59abbe56e057f20f883e', '123456', '123456', '长春市', '220322821103653', '13604338784', '0431-12345678', 'pp@sina.com', '334', '130025', '长春市', '2023-06-16 11:36:53', 0, '', 4399.2),
(2, 'mr', '96e79218965eb72c92a549dd5a330112', '123456', '123456', '潘攀', '220322821103653', '13604338784', '0431-84972266', 'pp@sina.com', '346827366', '130025', '北京市', '2023-06-06 15:16:17', 0, '', 15897.6),
(3, 'Tony', '96e79218965eb72c92a549dd5a330112', '我喜欢的零食', '威化', '李晓晓', '2201031999********', '12345678912', '12345678', 'mingrisoft@mingrisoft.com', '123456', '130000', '吉林省长春市', '2023-06-14 05:59:08', 0, '', 7077.4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
