-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2020 г., 16:30
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oqy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addtime`
--

CREATE TABLE `addtime` (
  `id` int(11) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `name`, `phone`) VALUES
(1, 'Ivan', 87456123458),
(2, 'Ivan', 87456123458),
(3, 'Ivan', 87456123458),
(4, 'Ronaldo', 8746153489),
(5, 'Ronaldo', 8746153489),
(6, 'Ronaldo', 8746153489),
(7, 'ivan', 87478975847);

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `price`, `content`, `image`) VALUES
(1, 'Java', 35000, ' одним из распространенных и популярных языков', '6fa31b5d68c0b8fdae823b83d36d9b0b.png'),
(2, 'Python', 30000, 'высокоуровневый язык программирования', 'a5935ceb4b752ff0ae85c0bd3e2dfced.png'),
(3, 'PHP', 30000, ' это распространенный язык программирования', 'dfc1c8cec380b7134b44a6519448e51f.png'),
(4, 'C#', 35000, 'объектно-ориентированный язык программирования.', '93884f3e33755475329f1334c73de256.png'),
(5, 'JS, HTML , CSS', 25000, 'Начни писать первые веб-приложения используя JavaScript', '629fb905fd25dbbf79776ccfe6018f4b.png'),
(6, 'C++', 40000, 'курс алгоритмизации и основ программирования на языке', '519b7b42c6bafdcafca3b51332da593b.png'),
(7, 'React', 30000, 'новая эра Front-End разработки. Освой эту мощную библиотеку', 'b6dc63e3d1c1fe7e35d735381b9f450c.png');

-- --------------------------------------------------------

--
-- Структура таблицы `packs`
--

CREATE TABLE `packs` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty_st` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `packs`
--

INSERT INTO `packs` (`id`, `title`, `price`, `qty_st`, `week`) VALUES
(1, 'МИНИ-ГРУППА', 50000, '2', '3'),
(2, 'ГРУППА', 35000, '3-10', '3'),
(3, 'ИНДИВИДУАЛЬНО', 75000, '1', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `content`, `date`, `image`, `email`) VALUES
(1, 'Billy Richards', 'No matter what issue or questions pops up, you are always there to assist me. Thank you so much for your excellent assistance and great customer support through years.', '0000-00-00 00:00:00', 'no-image.png', 'Billy@mail.ru'),
(11, 'Kairat', 'No matter what issue or questions pops up, you are always there to assist me. Thank you so much for your excellent assistance and great customer support through years.', '0000-00-00 00:00:00', '2a5a2c9980c2d54929930cae9e119fcf.png', 'kair@mail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `website`
--

CREATE TABLE `website` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `text2` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `website`
--

INSERT INTO `website` (`id`, `title`, `price`, `old_price`, `text`, `text2`, `content`, `image`) VALUES
(1, 'Сайт-Визитка', 23000, 27000, '1-3 дня', '1 страница', '', ''),
(2, 'Лендинг пейдж', 32000, 37000, '3-5 дней', '1 страница', '', ''),
(3, 'Сайт-Бизнес', 45000, 50000, 'от 5 дней', 'многостраничный сайт', '', ''),
(4, 'Интернет-магазин', 65000, 86000, 'от 7 дней', 'корзина, оплата, доставка', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addtime`
--
ALTER TABLE `addtime`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addtime`
--
ALTER TABLE `addtime`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `packs`
--
ALTER TABLE `packs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
