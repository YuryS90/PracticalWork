-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2020 г., 15:51
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sviridenko`
--
CREATE DATABASE IF NOT EXISTS `sviridenko` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sviridenko`;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `Name`, `price`) VALUES
(1, 'milk', 100),
(2, 'sausage', 100),
(3, 'beer', 100),
(4, 'nuts', 12),
(5, 'vodka', NULL),
(6, 'vodka', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `one`
--

CREATE TABLE `one` (
  `number` int(11) NOT NULL,
  `FIO` varchar(50) NOT NULL,
  `ZP` float NOT NULL,
  `Dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `one`
--

INSERT INTO `one` (`number`, `FIO`, `ZP`, `Dep`) VALUES
(1, 'Ivanov', 700, 'buhgalter'),
(2, 'Sidorov', 600, 'Developer'),
(3, 'Ferguson', 1000, 'Кассир'),
(4, 'Ходор', 500, 'Менеджер'),
(5, 'Михалыч', 33000, 'Developer'),
(6, 'Сомов', 80000, 'Директор'),
(7, 'Ахмут ибн Азиз', 4000, 'Врач'),
(8, 'Камыч', 6000, 'администратор'),
(9, 'Терен', 4000, 'Кассир'),
(10, 'Сидоренко', 6000, 'врач');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Dep` varchar(50) NOT NULL,
  `Salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `Name`, `Dep`, `Salary`) VALUES
(1, 'Грыша', 'БОМЖ', 2),
(2, 'Игаръ', 'президент', 100000000),
(3, 'Джамшут', 'строитель', 7777),
(4, 'Равшан', 'строитель', 7777),
(5, 'Михалыч', 'бизнесмен', 800000000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
