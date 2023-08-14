-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2022 г., 21:47
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
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` varchar(500) NOT NULL,
  `person` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `name`, `info`, `person`) VALUES
(1, 'Абстракционизм', 'Название данного направления произошло от латинского слова «abstractio» — «отвлечение». Художники, которые работали в данной технике, отказались от реалистичных средств живописи, пытаясь показать гармонию и закономерности мира с помощью геометрических форм и цветовых сочетаний.', 'В. Кандинский, К. Малевич, Пабло Пикассо.'),
(2, 'Анималистика', '«Animal» с латинского переводится как «животное». Направление живописи, которое посвящено изображению зверей и птиц. Анималисты в своих работах пытаются воспроизвести точность изображения животного, а также добавить образу художественной выразительности. Часто художники в своих работах наделяют зверя человеческими эмоциями.', ''),
(3, 'Барокко', 'Барокко в переводе с итальянского означает причудливый. Признаки барокко: контрастность, напряжённость, величие и пышность. В барокко сочетаются иллюзия и реальность, духовное и материальное', 'Рубенс, Караваджо, Эль Греко.'),
(4, 'Бытовой жанр', 'Бытовой жанр — это жанр изобразительного искусства, который посвящён повседневной жизни людей. В качестве тем для работ художники выбирают только современные им события.', ''),
(5, 'Возрождение/Ренессанс', 'От французского «Renaissance» переводится как возрождаться. Художники пишут картины, учитывая законы анатомии и линейной перспективы. У картин появляется объём, а на заднем плане изображаются пейзажи', 'Сандро Боттичелли, Леонардо да Винчи, Рафаэль Санти, Микеланджело Буонаротти'),
(6, 'Гиперреализм', 'Реализм — это стиль живописи, при котором художники пытаются передать на картине мир таким каков он есть. Приставка «Гипер» означает больше, т.е. больше, чем реализм. Художники решили проверить получится ли написать картину по фотографи так, чтобы она выглядела как фото. Картины в стиле гиперреализама поражают своей правдоподобностью. То, что изображалось на картине могло происходить и в жизни, этим гиперреализм отличается от сюрреализма', 'Герхард Рихтер, Делкол, Клафек');

-- --------------------------------------------------------

--
-- Структура таблицы `image_table`
--

CREATE TABLE `image_table` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `id_author` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `avtor` varchar(255) NOT NULL,
  `direct` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `techn` varchar(255) NOT NULL,
  `date` varchar(4) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image_table`
--

INSERT INTO `image_table` (`id`, `imagePath`, `id_author`, `picture`, `avtor`, `direct`, `genre`, `techn`, `date`, `message`) VALUES
(91, '../uploades/1 1.jpg', 3, 'Утро в сосновом лесу', 'И. И. Шишкин', 'Абстракционизм', 'Пейзаж', 'Масляная', '1889', 'Картина русских художников И. И. Шишкина и К. А. Савицкого. Савицкий написал медведей[1], но коллекционер П. М. Третьяков стёр его подпись, поэтому а'),
(93, '../uploades/1 3.jpg', 3, 'Лесные дали', 'И. И. Шишкин', 'Абстракционизм', 'Пейзаж', 'Масляная', '1884', 'Данное произведение изобразительного искусства само по себе находится в общественном достоянии'),
(94, '../uploades/1 4.jpg', 3, 'Вечер', 'И. И. Шишкин', 'Гиперреализм', 'Пейзаж', 'Масляная', '1871', 'Русский: Вечер'),
(95, '../uploades/1 5.jpg', 3, 'Дорога во ржи', 'И. И. Шишкин', 'Гиперреализм', 'Пейзаж', 'Масляная', '1866', 'Данное произведение изобразительного искусства само по себе находится в общественном достоянии'),
(96, '../uploades/1 6.jpg', 3, 'Дубки', 'И. И. Шишкин', 'Гиперреализм', 'Пейзаж', 'Масляная', '1886', 'Данное произведение изобразительного искусства само по себе находится в общественном достоянии'),
(97, '../uploades/1 7.jpg', 3, 'Дубы. Вечер', 'И. И. Шишкин', 'Гиперреализм', 'Пейзаж', 'Масляная', '1887', 'Данное произведение изобразительного искусства само по себе находится в общественном достоянии'),
(98, '../uploades/1 8.jpg', 3, 'Дебри', 'И. И. Шишкин', 'Гиперреализм', 'Пейзаж', 'Масляная', '1881', 'Данное произведение изобразительного искусства само по себе находится в общественном достоянии'),
(99, '../uploades/2 1.jpg', 13, 'Портрет Г. Тукая', 'Аминов Ф.А', '', 'Портрет', 'Акварель', '1984', 'Портрет Г. Тукая'),
(100, '../uploades/2 2.jpg', 13, 'Сания', 'Аршинов В.П.', 'Абстракционизм', 'Портрет', 'Гуашь', '1976', 'Сания. Из цикла «К стихам Тукая». 1976'),
(101, '../uploades/2 3.jpg', 13, ' Мужской портрет', 'Тимофеев В. К.', 'Бытовой жанр', 'Портрет', 'Тушь', '1968', 'Бумага, итальянский карандаш.'),
(102, '../uploades/2 4.jpg', 13, 'Каспий', 'Урманче Б.И.', 'Анималистика', 'Пейзаж', 'Акварель', '1956', 'Урманче Баки Идрисович. 1897 – 1990'),
(103, '../uploades/2 5.jpg', 13, 'Илл', 'Урманче Б.И.', 'Возрождение/Ренессанс', 'Архитектурный', 'Тушь', '1966', 'Иллюстрация к сказке Г.Тукая «Шурале». 1966'),
(104, '../uploades/2 6.jpg', 13, 'Ель.', 'Туманов А.Р.', 'Гиперреализм', 'Пейзаж', 'Смешанная', '1986', 'Туманов Александр Рамазанович. 1936 – 1994'),
(105, '../uploades/2 7.jpg', 13, 'Венеция', 'Якупов Х. А.', 'Анималистика', 'Архитектурный', 'Темпера', '1961', 'Венеция. Причалы. 1961.'),
(106, '../uploades/2 8.jpg', 13, 'Куреш', 'Гусманов Р.А.', 'Бытовой жанр', 'Бытовой', 'Акварель', '1976', 'Куреш. Из серии «Спортивные игры»'),
(107, '../uploades/1 9.jpg', 3, 'Рожь', 'И. И. Шишкин', 'Анималистика', 'Пейзаж', 'Масляная', '1878', 'Картина русского художника-передвижника И. И. Шишкина, написанная им в 1878 году.'),
(108, '../uploades/3 1.jpg', 14, 'Заморские гости', 'Рерих Н.К.', 'Анималистика', 'Портрет', 'Масляная', '1902', 'Живопись второй половины XIX века - начала XXI века'),
(109, '../uploades/3 2.jpg', 14, 'Портрет Николая Ге.', 'Ярошенко Н.А.', 'Бытовой жанр', 'Портрет', 'Масляная', '1890', 'Живопись второй половины XIX века - начала XXI века'),
(110, '../uploades/3 3.jpg', 14, 'Небесный бой.', 'Рерих Н.К.', 'Возрождение/Ренессанс', 'Пейзаж', 'Масляная', '1912', 'Живопись второй половины XIX века - начала XXI века'),
(111, '../uploades/3 4.jpg', 14, 'Автопортрет', 'Ряжский Г.Г.', 'Бытовой жанр', 'Портрет', 'Масляная', '1928', 'Живопись второй половины XIX века - начала XXI века'),
(112, '../uploades/3 5.jpg', 14, 'Боярышня', 'Рябушкин А.П.', 'Бытовой жанр', 'Бытовой', 'Темпера', '1903', 'Живопись второй половины XIX века - начала XXI века'),
(113, '../uploades/3 6.jpg', 14, 'Крестьяне', 'Серебрякова З.Е.', 'Бытовой жанр', 'Портрет', 'Масляная', '1914', 'Живопись второй половины XIX века - начала XXI века'),
(114, '../uploades/3 7.jpg', 14, 'Автопортрет', 'Николаев Я.С.', 'Анималистика', 'Портрет', 'Масляная', '1942', 'Живопись второй половины XIX века - начала XXI века'),
(115, '../uploades/3 8.jpg', 14, 'Запорожцы', 'Репин И.Е.', 'Бытовой жанр', 'Исторический', 'Масляная', '1891', 'Живопись второй половины XIX века - начала XXI века'),
(116, '../uploades/4 1.jpg', 15, 'Беспредметная композиция', 'Розанова О. В.', 'Барокко', 'Архитектурный', 'Масляная', '1555', 'Русский художественный авангард'),
(117, '../uploades/4 2.jpg', 15, 'Натюрморт', 'Левин А. С.', 'Барокко', 'Натюрморт', 'Масляная', '1919', 'Русский художественный авангард'),
(118, '../uploades/4 3.jpg', 15, 'Молочница', 'Лентулов А. В.', 'Анималистика', 'Портрет', 'Масляная', '1918', 'Русский художественный авангард'),
(119, '../uploades/4 4.jpg', 15, '1А «Мост»', 'Лисицкий Л. М.', 'Абстракционизм', 'Архитектурный', 'Смешанная', '1921', 'Русский художественный авангард'),
(120, '../uploades/4 5.jpg', 15, 'Супрематизм', 'Малевич К. С.', 'Бытовой жанр', 'Бытовой', 'Масляная', '1915', 'Русский художественный авангард'),
(121, '../uploades/4 6.jpg', 15, 'Улица в провинции', 'Ларионов М. Ф.', 'Анималистика', 'Пейзаж', 'Масляная', '1910', 'Русский художественный авангард'),
(122, '../uploades/4 7.jpg', 15, 'Портрет сына', 'Малютин С. В.', 'Анималистика', 'Портрет', 'Масляная', '1912', 'Русский художественный авангард'),
(123, '../uploades/4 8.jpg', 15, 'Гурзуф', 'Коровин К. А.', 'Анималистика', 'Пейзаж', 'Масляная', '1915', 'Русский художественный авангард'),
(124, '../uploades/5 1.jpg', 16, 'В казино был', 'Прянишников И. М.', 'Анималистика', 'Бытовой', 'Масляная', '1890', 'Декоративно-прикладное искусство'),
(125, '../uploades/5 2.jpg', 16, 'Дни нашей жизни', 'Никонов М. Ф.', 'Барокко', 'Анималистика', 'Масляная', '1990', 'Декоративно-прикладное искусство'),
(126, '../uploades/5 3.jpg', 16, 'Скалы в море', 'Насипова Т. Н.', 'Анималистика', 'Пейзаж', 'Масляная', '1991', 'Декоративно-прикладное искусство'),
(127, '../uploades/5 4.jpg', 16, 'Покос', 'Эйгес О. В.', 'Бытовой жанр', 'Бытовой', 'Акварель', '1997', ' Декоративно-прикладное искусство'),
(128, '../uploades/5 5.jpg', 16, 'Телеги', 'Шишкин И. И.', 'Анималистика', 'Батальный', 'Акварель', '1946', 'Декоративно-прикладное искусство'),
(129, '../uploades/5 6.jpg', 16, 'Пионерки', 'Чернышев Н. М.', 'Анималистика', 'Портрет', 'Масляная', '1995', 'Декоративно-прикладное искусство '),
(130, '../uploades/5 7.jpg', 16, 'Цветы мая', 'Табакова Е. И.', 'Бытовой жанр', 'Бытовой', 'Масляная', '1969', 'Декоративно-прикладное искусство'),
(131, '../uploades/5 8.jpg', 16, 'Жатва', 'Староносов П. И.', 'Гиперреализм', 'Пейзаж', 'Масляная', '1947', 'Декоративно-прикладное искусство ');

-- --------------------------------------------------------

--
-- Структура таблицы `reg_info`
--

CREATE TABLE `reg_info` (
  `id` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `namemus` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `infomus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg_info`
--

INSERT INTO `reg_info` (`id`, `id_author`, `namemus`, `adres`, `number`, `infomus`) VALUES
(853, 13, 'Государственный музей изобразительных искусств Республики Татарстан', 'г. Казань, ул. Карла Маркса, д. 64', 2147483647, 'Музей был создан по приказу Министерства культуры России в 1958 году на базе картинной галереи Государственного музея ТАССР.'),
(857, 15, 'Екатеринбургский музей изобразительных искусств', 'Екатеринбург, ул. Воеводина, 5', 3710626, 'Крупнейший художественный музей Урала, имеет четыре здания — главное расположено на берегу реки Исети в Екатеринбурге'),
(859, 16, 'Нижнетагильский музей изобразительных искусств', 'Нижний Тагил, ул. Уральская, 7, 4, 4/1 и 5', 89700237456, 'Музей живописи, один из двух самых больших музеев города Нижнего Тагила'),
(872, 3, 'Государственная Третьяковская галерея', 'Москва, Лаврушинский переулок, 10', 83298328938, ' Московский художественный музей, основанный в 1856 году купцом Павлом Третьяковым.'),
(874, 14, 'Государственный Русский музей', 'Санкт-Петербург, Инженерная ул., 4', 2147483647, 'Крупнейшее собрание российского искусства в мире. Находится в центральной части Санкт-Петербурга.'),
(875, 0, '0', '0', 0, '0'),
(876, 0, '0', '0', 0, '0'),
(877, 0, '20', '0', 0, '0'),
(878, 21, '0', '0', 0, '0'),
(880, 23, '0', '0', 0, '0'),
(881, 22, 'hbhjbhj', '0', 0, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `number` bigint(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `number`, `password`) VALUES
(1, 'Admin', 'Admin', 12345, '12345'),
(3, 'Иван', 'Иванов', 89385724919, 'password234'),
(13, 'Александр', 'Александров', 89274613819, 'password123'),
(14, 'Максим', 'Максимов', 89273502717, 'password345'),
(15, 'Данил', 'Данилов', 89273762435, 'password456'),
(16, 'Мария', 'Воробьева', 89276473319, 'password567'),
(17, 'Алекс', 'Алекс', 1111111, '1111111'),
(18, 'Саня', 'Саня', 11111111111, '11111111111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`);

--
-- Индексы таблицы `reg_info`
--
ALTER TABLE `reg_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `image_table`
--
ALTER TABLE `image_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT для таблицы `reg_info`
--
ALTER TABLE `reg_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=882;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;