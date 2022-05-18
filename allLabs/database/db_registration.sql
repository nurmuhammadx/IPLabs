-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2022 г., 12:02
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_registration`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` int NOT NULL DEFAULT '1',
  `avatar` varchar(40) NOT NULL DEFAULT '',
  `avatar_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `login`, `password`, `user_type`, `avatar`, `avatar_name`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '', '/allLabs/uploads/63f9c09254e5233ed7f3c6e556d2551c.jpg'),
(28, 'a_x_e21', 'kill', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', '/allLabs/uploads/aab4bfe087589e2eecba0a467601d609.jpg'),
(29, 'Alex', 'alex1', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', '/allLabs/uploads/9d4e8d2cc713792861b14e7cd19e0e0b.jpg'),
(30, 'Maks', 'lux21', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '/allLabs/uploads/00692cfaebb6a0924280df4480a0796e.jpg'),
(32, 'user', 'wpwpewp', '827ccb0eea8a706c4c34a16891f84e7b', 1, '', ''),
(33, 'wdqe', 'kil', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
