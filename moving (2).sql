-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-06 13:55:41
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moving`
--

-- --------------------------------------------------------

--
-- 表的结构 `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) NOT NULL COMMENT '后台用户名',
  `apass` int(11) NOT NULL COMMENT '密码',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台用户名密码' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `adminuser`
--

INSERT INTO `adminuser` (`aid`, `aname`, `apass`) VALUES
(1, '111111', 111111);

-- --------------------------------------------------------

--
-- 表的结构 `kechengbiao`
--

CREATE TABLE IF NOT EXISTS `kechengbiao` (
  `kcid` int(11) NOT NULL AUTO_INCREMENT COMMENT '课程表id',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `scid` int(11) NOT NULL COMMENT '选择课程的类型',
  `ssid` int(11) NOT NULL COMMENT '学习的课程详情',
  PRIMARY KEY (`kcid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户课程表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `kechengbiao`
--

INSERT INTO `kechengbiao` (`kcid`, `uid`, `scid`, `ssid`) VALUES
(1, 111, 11, 11);

-- --------------------------------------------------------

--
-- 表的结构 `shejiaoguanzhu`
--

CREATE TABLE IF NOT EXISTS `shejiaoguanzhu` (
  `sgid` int(11) NOT NULL AUTO_INCREMENT COMMENT '社交关注的id',
  `uid1` int(11) NOT NULL COMMENT '关注者',
  `uid2` int(11) NOT NULL COMMENT '被关注者',
  PRIMARY KEY (`sgid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='社交圈关注与被关注表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shejiaopinglun`
--

CREATE TABLE IF NOT EXISTS `shejiaopinglun` (
  `sjplid` int(11) NOT NULL AUTO_INCREMENT COMMENT '社交评论id',
  `sjid` int(11) NOT NULL COMMENT '文章id',
  `uid1` int(11) NOT NULL COMMENT '关注者',
  `uid2` int(11) NOT NULL COMMENT '被关注者',
  `upid` int(11) NOT NULL COMMENT '评论上级的pid',
  `sjtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '评论时间',
  `sjcon` varchar(255) NOT NULL COMMENT '评论内容',
  `sjplgood` int(11) NOT NULL COMMENT '评论点赞数',
  PRIMARY KEY (`sjplid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='社交评论' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shejiaoshow`
--

CREATE TABLE IF NOT EXISTS `shejiaoshow` (
  `sjid` int(11) NOT NULL COMMENT '社交圈发布的文章id',
  `sjtitle` varchar(255) NOT NULL COMMENT '文章标题',
  `sjtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '文章时间',
  `sjcon` int(11) NOT NULL COMMENT '文章内容',
  `uid` int(11) NOT NULL COMMENT '发布的用户id',
  `sjhits` int(11) NOT NULL COMMENT '浏览文章的人数',
  `sjgood` int(11) NOT NULL COMMENT '点赞数量',
  `sjtuijian` int(11) NOT NULL COMMENT '社交圈的推荐位'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='社交圈文章详情';

--
-- 转存表中的数据 `shejiaoshow`
--

INSERT INTO `shejiaoshow` (`sjid`, `sjtitle`, `sjtime`, `sjcon`, `uid`, `sjhits`, `sjgood`, `sjtuijian`) VALUES
(0, '郑多燕第一集', '2017-04-11 15:52:40', 0, 2, 10, 12, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shicategory`
--

CREATE TABLE IF NOT EXISTS `shicategory` (
  `scid` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频分类的id',
  `scname` varchar(255) NOT NULL COMMENT '视频分类的名字',
  `sjiaolian` varchar(255) NOT NULL COMMENT '视频教练的名字',
  `spid` int(11) NOT NULL COMMENT '分类表的父id(为二级准备)',
  `simg` varchar(255) NOT NULL COMMENT '标题栏的图片',
  `sjiaolianimg` varchar(255) NOT NULL COMMENT '教练的头像图片',
  `sxing` int(11) NOT NULL COMMENT '视频推荐的指数0-4五颗星',
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='视频分类表' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `shicategory`
--

INSERT INTO `shicategory` (`scid`, `scname`, `sjiaolian`, `spid`, `simg`, `sjiaolianimg`, `sxing`) VALUES
(1, '减脂', '', 0, '', '', 0),
(2, '体态改善', '', 0, '', '', 0),
(3, '力量增肌', '', 0, '', '', 0),
(4, '男生热门', '', 0, '', '', 0),
(5, '女生热门', '', 0, '', '', 0),
(6, '活力燃脂', '', 0, '', '', 0),
(7, '郑多燕', '郑多燕', 1, '', '', 0),
(8, 'MARK-HIT唤醒', 'MARK', 1, '', '', 0),
(9, '壁花小姐体态改善课程', '壁花小姐', 2, '', '', 0),
(10, '梵丽瑜伽', '梵丽', 2, '', '', 0),
(11, '林硕增肌特训', '', 3, '', '', 0),
(12, '林硕腹肌撕裂者', '', 4, '', '', 0),
(14, '壁花小姐马甲线养成', '', 5, '', '', 0),
(15, '壁花小姐背部塑形', '', 5, '', '', 0),
(16, '程昱HIIT全身燃动', '', 6, '', '', 0),
(17, '麦大师地狱地狱Burpees挑战', '', 6, '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shigoodbad`
--

CREATE TABLE IF NOT EXISTS `shigoodbad` (
  `sgid` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频关注的id',
  `ssid` int(11) NOT NULL COMMENT '视频详情的id',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `sgleixing` int(11) NOT NULL COMMENT '0点赞1点坏',
  PRIMARY KEY (`sgid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='视频点赞和点坏' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shipinglun`
--

CREATE TABLE IF NOT EXISTS `shipinglun` (
  `spid` int(11) NOT NULL AUTO_INCREMENT,
  `ssid` int(11) NOT NULL COMMENT '视频详情id',
  `uid1` int(11) NOT NULL COMMENT '评论用户，关注者',
  `uid2` int(11) NOT NULL COMMENT '被关注者',
  `sspid` int(11) NOT NULL COMMENT '上级留言的id',
  `sptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言的时间',
  `spcon` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT '留言的内容',
  PRIMARY KEY (`spid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='视频评论' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shishows`
--

CREATE TABLE IF NOT EXISTS `shishows` (
  `ssid` int(11) NOT NULL AUTO_INCREMENT,
  `ssname` varchar(255) NOT NULL COMMENT '名字',
  `scid` int(11) NOT NULL COMMENT '所属上级分类',
  `ssrc` varchar(255) NOT NULL COMMENT '视频的地址',
  `sscon` varchar(255) NOT NULL COMMENT '视频上传的备注内容',
  `ssimg` varchar(255) NOT NULL COMMENT '视频显示图片地址',
  `sstime` int(11) NOT NULL COMMENT '视频的总时间长',
  `ssdengji` int(11) NOT NULL COMMENT '视频的等级',
  `sshits` int(11) NOT NULL COMMENT '视频的点击量',
  `sstuijianwei` int(11) NOT NULL COMMENT '推荐位，到时根据数字索引',
  `ssstime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`ssid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='视频详情页表' AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `shishows`
--

INSERT INTO `shishows` (`ssid`, `ssname`, `scid`, `ssrc`, `sscon`, `ssimg`, `sstime`, `ssdengji`, `sshits`, `sstuijianwei`, `ssstime`) VALUES
(1, '第一节', 1, '0', '', '', 20, 5, 10, 0, '2017-04-13 22:05:35'),
(39, 'aa', 1, 'http://localhost/moving/static/video/17-04-13/1492093345movie.mp4', 'aaaaaaaaaa啊啊啊啊啊', '', 0, 0, 0, 0, '2017-04-13 22:22:26'),
(41, '11', 8, 'http://127.0.0.1/moving/static/video/17-04-13/14920968512.jpg', '111', '', 0, 0, 0, 0, '2017-04-13 23:20:55');

-- --------------------------------------------------------

--
-- 表的结构 `shishowsold`
--

CREATE TABLE IF NOT EXISTS `shishowsold` (
  `ssid` int(11) NOT NULL AUTO_INCREMENT,
  `ssname` varchar(255) NOT NULL COMMENT '名字',
  `scid` int(11) NOT NULL COMMENT '所属上级分类',
  `sscon` varchar(255) NOT NULL COMMENT '视频的文章部分',
  `ssrc` int(11) NOT NULL COMMENT '视频的地址',
  `ssimg` varchar(255) NOT NULL COMMENT '视频显示图片地址',
  `sstime` int(11) NOT NULL COMMENT '视频的总时间长',
  `ssdengji` int(11) NOT NULL COMMENT '视频的等级',
  `sshits` int(11) NOT NULL COMMENT '视频的点击量',
  `sstuijianwei` int(11) NOT NULL COMMENT '推荐位，到时根据数字索引',
  PRIMARY KEY (`ssid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='视频详情页表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(255) NOT NULL COMMENT '用户名，不可改动',
  `unicheng` varchar(255) NOT NULL COMMENT '昵称',
  `upass` varchar(255) NOT NULL COMMENT '用户密码',
  `usex` varchar(20) NOT NULL COMMENT '性别',
  `uage` varchar(255) NOT NULL COMMENT '年龄',
  `uheight` int(11) NOT NULL COMMENT '身高',
  `uweight` int(11) NOT NULL COMMENT '体重',
  `utarget` varchar(255) NOT NULL COMMENT '目标：减脂，塑形，增肌',
  `ujichu` varchar(255) NOT NULL COMMENT '运动基础：零基础，有基础，经验丰富',
  `ushenti` varchar(255) NOT NULL COMMENT '身体状况：正常，偏瘦，偏胖',
  `uintegral` int(11) NOT NULL COMMENT '积分',
  `utouxiang` varchar(255) NOT NULL COMMENT '头像图像地址',
  `utuijian` int(11) NOT NULL COMMENT '达人推荐位',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户信息' AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `unicheng`, `upass`, `usex`, `uage`, `uheight`, `uweight`, `utarget`, `ujichu`, `ushenti`, `uintegral`, `utouxiang`, `utuijian`) VALUES
(2, 'huangyuexia', '', '0833a2bd4cd52be312d02b7e631011b0', '', '0', 0, 0, '', '', '', 0, '', 1),
(3, 'zhangruili', '', '1aade1218148225723ec48288bddd2b9', '', '0', 0, 0, '', '', '', 0, '', 1),
(4, 'tengfei', '', '1410c5b7272d6cba8ead5a804f3d96bf', '', '0', 0, 0, '', '', '', 0, '', 1),
(5, 'xioahu', '', '06c8b822b7f5eeb395a0057b05fd2152', '', '0', 0, 0, '', '', '', 0, '', 1),
(41, 'zhenzhen', '', '1938679518afafceaf4127998d3dbb3f', '', '', 0, 0, '', '', '', 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
