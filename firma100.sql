-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 25 2023 г., 20:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `firma100`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `idProduct` int NOT NULL,
  `nameProduct` text COLLATE utf8mb4_unicode_ci,
  `productWeight` decimal(4,3) DEFAULT NULL,
  `priceProduct` decimal(10,3) DEFAULT NULL,
  `idManufacturer` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`idProduct`, `nameProduct`, `productWeight`, `priceProduct`, `idManufacturer`) VALUES
(10101, 'цукерки Казка', '1.000', '155.300', 1),
(10102, 'цукерки Ластівка', '1.000', '178.500', 1),
(10103, 'цукерки Радість', '1.000', '205.600', 2),
(10104, 'цукерки Пташка', '1.000', '175.450', 1),
(10105, 'цукерки Сяйво', '1.000', '160.450', 1),
(20101, 'печиво Дует', '0.200', '18.400', 2),
(20102, 'печиво Фірмове', '0.500', '46.800', 3),
(20103, 'печиво Зірочка', '0.250', '34.500', 2),
(20104, 'печиво Концерт', '0.400', '56.750', 3),
(20105, 'печиво Лісова казка', '0.250', '28.340', 2),
(20106, 'печиво Каскад', '0.500', '68.240', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `vyrobnyk`
--

CREATE TABLE `vyrobnyk` (
  `idManufacturer` int NOT NULL,
  `nameManufacturer` text COLLATE utf8mb4_unicode_ci,
  `adressManufacturer` tinytext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vyrobnyk`
--

INSERT INTO `vyrobnyk` (`idManufacturer`, `nameManufacturer`, `adressManufacturer`) VALUES
(1, 'Рошен', 'Вінниця'),
(2, 'Кондфіл', 'Хмельницький'),
(3, 'Тростинка', 'Тростянець'),
(4, '4', '4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`idProduct`);

--
-- Индексы таблицы `vyrobnyk`
--
ALTER TABLE `vyrobnyk`
  ADD PRIMARY KEY (`idManufacturer`),
  ADD UNIQUE KEY `idVyrobnyk` (`idManufacturer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
