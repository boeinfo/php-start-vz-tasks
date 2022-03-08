SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;
SET time_zone = "+03:00";

--
-- База данных: `library_tst`
--
CREATE DATABASE IF NOT EXISTS `library_tst` 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE `library_tst`;

--
-- Структура таблицы `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `book_language_id` int NOT NULL COMMENT 'language',
  `book_type_id` int NOT NULL COMMENT 'format',
  `theme_id` int NOT NULL COMMENT 'theme',
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'name',
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'author',
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'path name',
  `stars_num` tinyint UNSIGNED NOT NULL COMMENT 'stars number',
  PRIMARY KEY (`book_id`),
  KEY `book_language_id` (`book_language_id`),
  KEY `book_type_id` (`book_type_id`),
  KEY `theme_id` (`theme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`book_id`, `book_language_id`, `book_type_id`, `theme_id`, `name`, `author`, `file_name`, `stars_num`) VALUES
(1, 2, 6, 1, 'ASSEMBLER & WIN32', 'Александр Усов', 'ausov_asm_win32__0072.rtf', 3),
(2, 2, 4, 4, 'Firebird - Руководство разработчика баз данных', 'Хелен Борри', 'bhellen_firebird_man_db_dev__0052.epub', 3),
(3, 2, 2, 3, 'PHP и MySQL. Исчерпывающее руководство. 2-е изд.', 'Бретт Маклафлин', 'bmclaughlin_php_mysql_missing_manual__0022.pdf', 4),
(4, 2, 3, 5, 'Время — деньги. Создание команды разработчиков программного обеспечения', 'Эд Салливан', 'esaliwan_time_is_maney__0109.fb2', 2),
(5, 2, 8, 2, 'XSLT. Библиотека программиста.\r\n', 'Стивен Холзнер', 'hstiven_xslt__0069.docx', 1),
(6, 2, 2, 3, 'PHP и MySQL: от новичка к профессионалу', 'Кевин Янк', 'kyank_php_mysql_ot_novichka_k_profi__0017.pdf', 3),
(7, 2, 2, 3, 'Разработка web-приложений на PHP и MySQL', 'Лаура Томпсон и Люк Веллинг', 'lwelling_lthompson_razrabotka_web-prilozeniy__0012.pdf', 2),
(8, 2, 2, 3, 'PHP: объекты, шаблоны и методики программирования', 'Мэтт Зандстра', 'mzandstra_php_obekty_shablony_i_metodiki_program__0043.pdf', 5),
(9, 2, 7, 3, 'Язык программирования PHP', 'Нина Савельева', 'nsavelieva_php_language_curs__0056.doc', 3),
(10, 2, 2, 3, 'PHP: Правильный путь', 'Павел Савинов', 'psavinov_php_pravilnyj_put__0029.pdf', 5),
(11, 2, 2, 6, 'Создаем  динамические  веб-сайты  с  помощью  PHP,  MySQL,  JavaScript,  CSS \r\nи HTML5. 4-е изд.', 'Робин Никсон', 'rnixon_learnin_php_mysql_js_html_css__0034.pdf', 5),
(12, 2, 1, 3, 'Справочник по PHP', 'Неизвестный', 'unknown_php_manual__0049.txt', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `book_language`
--

DROP TABLE IF EXISTS `book_language`;
CREATE TABLE IF NOT EXISTS `book_language` (
  `book_language_id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `lng_code` varchar(3) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'language code',
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'language name',
  PRIMARY KEY (`book_language_id`),
  UNIQUE KEY `lng_code` (`lng_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `book_language`
--

INSERT INTO `book_language` (`book_language_id`, `lng_code`, `name`) VALUES
(1, 'ENG', 'английский '),
(2, 'RUS', 'русский');

-- --------------------------------------------------------

--
-- Структура таблицы `book_type`
--

DROP TABLE IF EXISTS `book_type`;
CREATE TABLE IF NOT EXISTS `book_type` (
  `book_type_id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `book_type_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'type/format name',
  `file_ext` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'file extension',
  `handler_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'class name',
  PRIMARY KEY (`book_type_id`),
  UNIQUE KEY `handler_name_idx` (`handler_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `book_type`
--

INSERT INTO `book_type` (`book_type_id`, `book_type_name`, `file_ext`, `handler_name`) VALUES
(1, 'plain text', 'txt', 'BookTxt'),
(2, 'portable document format', 'pdf', 'BookPdf'),
(3, 'fiction book', 'fb2', 'BookFb2'),
(4, 'electronic publication', 'epub', 'BookEpub'),
(5, 'DJVU', 'djvu', 'BookDjvu'),
(6, 'rich text format', 'rtf', 'BookRtf'),
(7, 'microsoft doc format', 'doc', 'BookDoc'),
(8, 'office open xml', 'docx', 'BookDocx');

-- --------------------------------------------------------

--
-- Структура таблицы `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `theme_id` int NOT NULL AUTO_INCREMENT COMMENT 'id',
  `short_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'short name',
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'full name',
  PRIMARY KEY (`theme_id`),
  UNIQUE KEY `short_name` (`short_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `theme`
--

INSERT INTO `theme` (`theme_id`, `short_name`, `name`) VALUES
(1, 'ASM', 'Assembler and low-level programming'),
(2, 'XML', 'XML technology'),
(3, 'PHP', 'PHP language and backend technologies'),
(4, 'DB', 'Databases'),
(5, 'TM', 'Time management'),
(6, 'WEB', 'Web programming');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`book_language_id`) REFERENCES `book_language` (`book_language_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`book_type_id`) REFERENCES `book_type` (`book_type_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`theme_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
SET FOREIGN_KEY_CHECKS=1;

COMMIT;

