-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2017 at 12:52 AM
-- Server version: 5.5.27
-- PHP Version: 5.3.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Достоевский'),
(2, 'Толстой'),
(3, 'Пушкин'),
(4, 'Жюль Верн'),
(5, 'Майн Рид'),
(6, 'Илья Ильф'),
(7, 'Евгений Петров'),
(8, 'Луиза Хей'),
(9, 'Линн Лаубер'),
(10, 'Шерил Ричардсон'),
(11, 'Незнайка');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `downloads_qty` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `downloads_qty`) VALUES
(1, 'Идиот', 2244),
(2, 'Преступление и наказание', 34490),
(3, 'Война и Мир', 65716),
(4, 'Руслан и Людмила', 25111),
(5, 'Евгений Онегин', 28405),
(6, 'Дети капитана Гранта', 66695),
(7, 'Таинственный остров', 48259),
(8, 'Двадцать тысяч лье под водой', 41209),
(9, 'Всадник без головы', 61267),
(10, 'Белый вождь', 82707),
(11, 'Квартеронка', 29736),
(12, '12 стульев', 561),
(13, 'Золотой теленок', 13593),
(14, 'Исцели себя сам', 66285),
(15, 'Сотвори свое будущее. Как силой мысли изменить судьбу', 90644),
(16, 'Люби себя. Доверяй своей жизни', 54365),
(17, 'Библия', 99895),
(18, 'Таблица умножения', 36377);

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

DROP TABLE IF EXISTS `book_author`;
CREATE TABLE IF NOT EXISTS `book_author` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) unsigned DEFAULT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `author_book` (`author_id`,`book_id`),
  KEY `author_id` (`author_id`),
  KEY `book_id` (`book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`id`, `author_id`, `book_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4),
(5, 3, 5),
(6, 4, 6),
(7, 4, 7),
(8, 4, 8),
(9, 5, 9),
(10, 5, 10),
(11, 5, 11),
(12, 6, 12),
(13, 7, 12),
(14, 6, 13),
(15, 7, 13),
(16, 8, 14),
(17, 8, 15),
(18, 9, 15),
(19, 8, 16),
(20, 10, 16);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
