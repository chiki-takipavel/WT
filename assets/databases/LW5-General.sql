-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 27 2020 г., 17:09
-- Версия сервера: 5.7.29-0ubuntu0.18.04.1
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `LW5-General`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Articles`
--

CREATE TABLE `Articles` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_text` text NOT NULL,
  `article_date_publication` date NOT NULL,
  `article_is_hide` tinyint(1) NOT NULL DEFAULT '0',
  `article_shows` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Articles`
--

INSERT INTO `Articles` (`article_id`, `author_id`, `article_title`, `article_text`, `article_date_publication`, `article_is_hide`, `article_shows`) VALUES
(1, 3, 'Это уже 5 лабораторная работа!', 'Здесь я знакомлюсь с phpmyadmin и делаю общее задание.', '2020-04-24', 0, 0),
(2, 3, 'Это ещё одна запись', 'А это текст к этой записи', '2020-04-25', 0, 0),
(3, 2, 'А это запись от другого автора', 'Lorem ipsum', '2020-04-25', 0, 0),
(4, 4, 'Новая запись', 'Здесь', '2020-04-25', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Authors`
--

CREATE TABLE `Authors` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `author_username` varchar(32) NOT NULL,
  `author_date_birth` date NOT NULL,
  `author_date_registration` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Authors`
--

INSERT INTO `Authors` (`author_id`, `author_username`, `author_date_birth`, `author_date_registration`) VALUES
(1, 'bykov19', '1924-06-19', '2020-04-08'),
(2, 'userxxx', '2000-03-01', '2020-04-02'),
(3, 'PashaMiskevich', '2001-08-08', '2020-04-22'),
(4, 'VladPetrovec', '2001-06-08', '2020-04-22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Индексы таблицы `Authors`
--
ALTER TABLE `Authors`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `USERNAME` (`author_username`),
  ADD KEY `AUTHOR_ID` (`author_id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Articles`
--
ALTER TABLE `Articles`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Authors`
--
ALTER TABLE `Authors`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
