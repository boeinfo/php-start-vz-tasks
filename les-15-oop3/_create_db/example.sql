/**
 * Author:  Oleg Baranchikov
 * Created: 7 мар. 2022 г.
 */

USE `library_tst`;

-- SELECT theme_id FROM theme WHERE short_name IN ('PHP');

-- SELECT t.theme_id FROM theme AS t;

-- SELECT bl.lng_code AS Book_Language, bt.book_type_name AS Book_Type,
-- bt.handler_name AS Book_Handler, t.short_name AS Book_Theme,
-- b.name AS Book_Name, b.author AS Book_Author, b.stars_num AS Book_Rating 
-- FROM book AS b, book_language AS bl, book_type AS bt , theme AS t
-- WHERE bl.book_language_id = b.book_language_id 
-- AND bt.book_type_id = b.book_type_id AND t.theme_id = b.theme_id
-- -- b.theme_id IN (SELECT t.theme_id FROM theme AS t)
-- ORDER BY b.theme_id, b.stars_num DESC;


SELECT bl.lng_code AS Book_Language, bt.book_type_name AS Book_Type,
bt.file_ext AS EXT,
bt.handler_name AS Book_Handler, t.short_name AS Book_Theme,
b.name AS Book_Name, b.author AS Book_Author, b.stars_num AS Book_Rating,
b.file_name AS Book_File
FROM book AS b, book_language AS bl, book_type AS bt , theme AS t
WHERE bl.book_language_id = b.book_language_id 
AND bt.book_type_id = b.book_type_id AND t.theme_id = b.theme_id
-- AND t.short_name IN ("PHP", "WEB")
ORDER BY b.theme_id, b.stars_num DESC;

-- SELECT short_name FROM theme;