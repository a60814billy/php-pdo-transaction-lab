-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2014 年 09 月 01 日 22:02
-- 伺服器版本: 5.5.38-0ubuntu0.14.04.1
-- PHP 版本： 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `transaction_test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order` int(5) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(4) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;