-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2019 г., 05:46
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sasha_pn_10`
--
CREATE DATABASE IF NOT EXISTS `sasha_pn_10` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sasha_pn_10`;

-- --------------------------------------------------------

--
-- Структура таблицы `lefttweet`
--

CREATE TABLE `lefttweet` (
  `tag` varchar(255) NOT NULL,
  `tweet` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lefttweet`
--

INSERT INTO `lefttweet` (`tag`, `tweet`, `id`) VALUES
('ДРСМД', 'Твитов: 1561', 1),
('Charlotte Prodger', 'Твитов: 1695', 2),
('PETA', 'Твитов: 1236', 3),
('MONKEY', 'Твитов: 29 тыс.', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `righttweet`
--

CREATE TABLE `righttweet` (
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `righttweet`
--

INSERT INTO `righttweet` (`img`, `title`, `tag`, `button`) VALUES
('obama.jpg', 'Michelle Obama', '@Obama', 'Читать'),
('kvn.jpg', 'КВН для всех', '@kvn', 'Читать');

-- --------------------------------------------------------

--
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`img`, `name`, `price`, `id`) VALUES
('images/test.jpg', 'TEST', 'none', 69),
('images/15.jpg', 'TEST1', 'none', 70);

-- --------------------------------------------------------

--
-- Структура таблицы `tweeet`
--

CREATE TABLE `tweeet` (
  `logo` varchar(355) NOT NULL,
  `title` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tweeet`
--

INSERT INTO `tweeet` (`logo`, `title`, `text`, `img`, `id`) VALUES
('images/post1.jpg', '@habr_com 32 мин.', 'PROVERKA SVYAZIiuhjnskdml', 'images/habr.jpg', 1),
('images/post3.jpg', 'TJ @tjournal 1 ч.', 'Если этот гавно телефон не гавно он не будет разбиваться как нокия 3310 ибо нокиа это боественный телефон потому что это не дорого', 'images/roscosmos.jpg', 3),
('images/avatar.jpg', '@kaka', '', 'images/roscosmos.jpg', 10),
('images/avatar.jpg', '@kaka', 'Privet', 'images/roscosmos.jpg', 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lefttweet`
--
ALTER TABLE `lefttweet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tweeet`
--
ALTER TABLE `tweeet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lefttweet`
--
ALTER TABLE `lefttweet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `tweeet`
--
ALTER TABLE `tweeet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
