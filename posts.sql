-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2018 г., 18:15
-- Версия сервера: 5.6.37
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
-- База данных: `phpblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `date`) VALUES
(2, 'Intel признала, что её передовые 10-нм нормы уступают техпроцессам конкурентов', 'Корпорация Intel в прошлом году потратила значительные усилия, пытаясь доказать инвесторам, что занимает лидирующую позицию в технологии производства чипов. ', 'Корпорация Intel в прошлом году потратила значительные усилия, пытаясь доказать инвесторам, что занимает лидирующую позицию в технологии производства чипов. Компания заявляла в частности, что её будущий 10-нанометровый техпроцесс может обеспечить вдвое большую плотность транзисторов по сравнению с конкурирующими 10-нм нормами.\r\nИ хотя это утверждение Intel, вероятно, соответствует действительности, реальность такова, что конкуренты начали производство 10-нм кристаллов ещё в конце 2016 или в начале 2017 года, а собственный 10-нм техпроцесс Intel всё ещё не используется для выпуска массовой продукции. Огромная задержка Intel в освоении 10-нм норм означает, что сравнения Intel были бессмысленны, ведь её 10-нм технологии придётся соперничать уже с 7-нм нормами конкурентов.\r\nНа недавней международной конференции по полупроводниковым схемам (International Solid-State Circuits Conference, ISSCC) инженер Intel, по-видимому, признал проблемы, которые отдел маркетинга его корпорации не замечает: 10-нм технология Intel уступает 7-нм нормам конкурентов в одном из критических показателей.', '2018-02-20 14:52:46'),
(3, 'Процессор Ryzen 5 2600 прописался в базе Geekbench', 'В апреле компания AMD произведёт обновление модельного ряда CPU Ryzen для настольной платформы AM4: преемниками 14-нм чипов Summit Ridge станут 12-нанометровые Pinnacle Ridge.', 'В апреле компания AMD произведёт обновление модельного ряда CPU Ryzen для настольной платформы AM4: преемниками 14-нм чипов Summit Ridge станут 12-нанометровые Pinnacle Ridge. Несмотря на «косметический» характер обновления, за счёт которого вырастут только рабочие частоты процессоров, Advanced Micro Devices может наделать немало шуму новыми Ryzen 3/5/7 2000 за счёт снижения их рекомендованных цен относительно соответствующих CPU семейства Ryzen 3/5/7 1000.', '2018-02-20 14:55:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
