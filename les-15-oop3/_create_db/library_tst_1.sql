/**
 * Author:  Oleg Baranchikov
 * Created: 5 мар. 2022 г.
 */

SET FOREIGN_KEY_CHECKS=0;
START TRANSACTION;
SET time_zone = "+03:00";

--
-- База данных: `library_tst`
--
CREATE DATABASE IF NOT EXISTS `library_tst` 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE library_tst;

--
-- Структура таблицы `book_type`
--

DROP TABLE IF EXISTS `book_type`;
CREATE TABLE IF NOT EXISTS `book_type` (
  `book_type_id` int NOT NULL AUTO_INCREMENT,
  `book_type_name` varchar(120) CHARACTER SET utf8mb4 
    COLLATE utf8mb4_general_ci NOT NULL COMMENT 'type/format name',
  `file_ext` varchar(10) 
    COLLATE utf8mb4_general_ci NOT NULL COMMENT 'file extension',
  PRIMARY KEY (`book_type_id`),
  UNIQUE KEY `book_type_name_idx` (`book_type_name`)
) ENGINE=InnoDB 
    AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `book_type`
--

INSERT INTO `book_type` (`book_type_id`, `book_type_name`, `file_ext`) VALUES
(1, 'plain text', 'txt'),
(2, 'portable document format', 'pdf'),
(3, 'fiction book', 'fb2'),
(4, 'electronic publication', 'epub'),
(5, 'DJVU', 'djvu'),
(6, 'rich text format', 'rtf'),
(7, 'microsoft doc format', 'doc'),
(8, 'office open xml', 'docx');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

