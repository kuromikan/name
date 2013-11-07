-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Nov 07, 2013, 03:31 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `shop`
-- 
CREATE DATABASE `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shop`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `color`
-- 

CREATE TABLE `color` (
  `id` int(20) NOT NULL auto_increment,
  `styleid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- 
-- 列出以下資料庫的數據： `color`
-- 

INSERT INTO `color` VALUES (1, 1, 'S01C01', 'S_01_C01', 150, '01樣式01顏色');
INSERT INTO `color` VALUES (2, 1, 'S01C02', 'S_01_C02', 150, '01樣式02顏色');
INSERT INTO `color` VALUES (3, 1, 'S01C03', 'S_01_C03', 150, '01樣式03顏色');
INSERT INTO `color` VALUES (4, 1, 'S01C04', 'S_01_C04', 150, '01樣式04顏色');
INSERT INTO `color` VALUES (5, 1, 'S01C05', 'S_01_C05', 150, '01樣式05顏色');
INSERT INTO `color` VALUES (6, 1, 'S01C06', 'S_01_C06', 150, '01樣式06顏色');
INSERT INTO `color` VALUES (7, 2, 'S02C01', 'S_02_C01', 199, '02樣式01顏色');
INSERT INTO `color` VALUES (8, 2, 'S02C02', 'S_02_C02', 199, '02樣式02顏色');
INSERT INTO `color` VALUES (9, 2, 'S02C03', 'S_02_C03', 199, '02樣式03顏色');
INSERT INTO `color` VALUES (10, 2, 'S02C04', 'S_02_C04', 199, '02樣式04顏色');
INSERT INTO `color` VALUES (11, 2, 'S02C05', 'S_02_C05', 199, '02樣式05顏色');
INSERT INTO `color` VALUES (12, 2, 'S02C06', 'S_02_C06', 199, '02樣式06顏色');
INSERT INTO `color` VALUES (13, 3, 'S03C01', 'S_03_C01', 299, '03樣式01顏色');
INSERT INTO `color` VALUES (14, 3, 'S03C02', 'S_03_C02', 299, '03樣式02顏色');
INSERT INTO `color` VALUES (15, 3, 'S03C03', 'S_03_C03', 299, '03樣式03顏色');
INSERT INTO `color` VALUES (16, 3, 'S03C04', 'S_03_C04', 299, '03樣式04顏色');
INSERT INTO `color` VALUES (17, 3, 'S03C05', 'S_03_C05', 299, '03樣式05顏色');
INSERT INTO `color` VALUES (18, 3, 'S03C06', 'S_03_C06', 299, '03樣式06顏色');
INSERT INTO `color` VALUES (19, 4, 'S04C01', 'S_04_C01', 259, '04樣式01顏色');
INSERT INTO `color` VALUES (20, 4, 'S04C02', 'S_04_C02', 259, '04樣式02顏色');
INSERT INTO `color` VALUES (21, 4, 'S04C03', 'S_04_C03', 259, '04樣式03顏色');
INSERT INTO `color` VALUES (22, 4, 'S04C04', 'S_04_C04', 259, '04樣式04顏色');
INSERT INTO `color` VALUES (23, 4, 'S04C05', 'S_04_C05', 259, '04樣式05顏色');
INSERT INTO `color` VALUES (24, 4, 'S04C06', 'S_04_C06', 259, '04樣式06顏色');
INSERT INTO `color` VALUES (25, 5, 'S05C01', 'S_05_C01', 269, '05樣式01顏色');
INSERT INTO `color` VALUES (26, 5, 'S05C02', 'S_05_C02', 269, '05樣式02顏色');
INSERT INTO `color` VALUES (27, 5, 'S05C03', 'S_05_C03', 269, '05樣式03顏色');
INSERT INTO `color` VALUES (28, 5, 'S05C04', 'S_05_C04', 269, '05樣式04顏色');
INSERT INTO `color` VALUES (29, 5, 'S05C05', 'S_05_C05', 269, '05樣式05顏色');
INSERT INTO `color` VALUES (30, 5, 'S05C06', 'S_05_C06', 269, '05樣式06顏色');
INSERT INTO `color` VALUES (31, 6, 'S06C01', 'S_06_C01', 279, '06樣式01顏色');
INSERT INTO `color` VALUES (32, 6, 'S06C02', 'S_06_C02', 279, '06樣式02顏色');
INSERT INTO `color` VALUES (33, 6, 'S06C03', 'S_06_C03', 279, '06樣式03顏色');
INSERT INTO `color` VALUES (34, 6, 'S06C04', 'S_06_C04', 279, '06樣式04顏色');
INSERT INTO `color` VALUES (35, 6, 'S06C05', 'S_06_C05', 279, '06樣式05顏色');
INSERT INTO `color` VALUES (36, 6, 'S06C06', 'S_06_C06', 279, '06樣式06顏色');

-- --------------------------------------------------------

-- 
-- 資料表格式： `shoplist`
-- 

CREATE TABLE `shoplist` (
  `id` int(20) NOT NULL auto_increment,
  `ip` varchar(15) NOT NULL,
  `stylecolor` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- 列出以下資料庫的數據： `shoplist`
-- 

INSERT INTO `shoplist` VALUES (13, '127.0.0.1', '$S01C01', '2013-11-07 02:41:46');
INSERT INTO `shoplist` VALUES (14, '127.0.0.1', '$S02C02', '2013-11-07 02:41:46');

-- --------------------------------------------------------

-- 
-- 資料表格式： `style_list`
-- 

CREATE TABLE `style_list` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- 列出以下資料庫的數據： `style_list`
-- 

INSERT INTO `style_list` VALUES (1, 'Style01', 'S_01');
INSERT INTO `style_list` VALUES (2, 'Style02', 'S_02');
INSERT INTO `style_list` VALUES (3, 'Style03', 'S_03');
INSERT INTO `style_list` VALUES (4, 'Style04', 'S_04');
INSERT INTO `style_list` VALUES (5, 'Style05', 'S_05');
INSERT INTO `style_list` VALUES (6, 'Style06', 'S_06');

-- --------------------------------------------------------

-- 
-- 資料表格式： `tmpshoplist`
-- 

CREATE TABLE `tmpshoplist` (
  `id` int(20) NOT NULL auto_increment,
  `ip` varchar(15) NOT NULL,
  `stylecolor` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 列出以下資料庫的數據： `tmpshoplist`
-- 

INSERT INTO `tmpshoplist` VALUES (1, '218.173.236.219', 'S04C04');
INSERT INTO `tmpshoplist` VALUES (2, '218.173.236.219', 'S05C01');
INSERT INTO `tmpshoplist` VALUES (3, '218.173.236.219', 'S01C04');
