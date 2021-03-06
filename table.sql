-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2022 at 08:39 AM
-- Server version: 5.7.31
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `ss_content`
--

DROP TABLE IF EXISTS `ss_content`;
CREATE TABLE IF NOT EXISTS `ss_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_political` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `b_medicine` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `b_sport` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `b_economy` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ss_content`
--

INSERT INTO `ss_content` (`id`, `b_political`, `b_medicine`, `b_sport`, `b_economy`) VALUES
(1, 'جهان', 'تشنج', 'آفساید', 'احتکار'),
(2, 'عوام‌فریبی', 'تزریق', 'استراحت', 'ابرتورم'),
(3, 'عوام‌گرایی', 'لوسیون', 'فوتبال', 'ارز'),
(4, 'پارلمان', 'پیوند', 'بازی', 'سرمایه'),
(5, 'دمکرات', 'کیست', 'دوستانه', 'تجارت'),
(6, 'حکومت', 'سرطان', 'شهرآورد', 'مبلغ'),
(7, 'دولت', 'دمیدن', 'دروازه‌بان', 'عرضه'),
(8, 'راست', 'پانسمان', 'کارت', 'تقاضا'),
(9, 'رایش', 'مسموم‌', 'ورزشکار', 'هزینه'),
(10, 'لابی‌', 'بیمار', 'ورزش', 'بازده'),
(11, 'فاشیست', 'تومور', 'افساید', 'اوراق'),
(12, 'فراکسیون', 'بازماند', 'کاپیتان', 'تورم‌زدایی'),
(13, 'مجلس', 'اسپاسم', 'لالیگا', 'بازار'),
(14, 'نئولیبرالیسم', 'بینی', 'مدافع', 'بورس'),
(15, 'ایدئولوژی', 'خون‌ریزی', 'هافبک', 'بهره'),
(16, 'استعمار', 'مزمن', 'هتریک', 'حساب'),
(17, 'اپوزیسیون', 'معاینه', 'آوانتاژ', 'دلار'),
(18, 'آقازاده', 'کلیه', 'دریبل', 'یورو'),
(19, 'کمونیسم', 'معده', 'کرنر', 'ریال'),
(20, 'رژیم', 'دیابت', 'هافبک', 'کریپتو');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ss_content`
--
ALTER TABLE `ss_content` ADD FULLTEXT KEY `b_economy` (`b_economy`);
ALTER TABLE `ss_content` ADD FULLTEXT KEY `b_sport` (`b_sport`);
ALTER TABLE `ss_content` ADD FULLTEXT KEY `b_medicine` (`b_medicine`);
ALTER TABLE `ss_content` ADD FULLTEXT KEY `b_political` (`b_political`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
