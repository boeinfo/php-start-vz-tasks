/**
 * Author:  Oleg Baranchikov
 * Created: 1 мар. 2022 г.
 */

USE news_site;

-- 1)
-- UPDATE `user` SET `name` = 'Тимофей', `surname` = 'Опель' WHERE `user`.`id` = 3;
-- UPDATE user SET name = 'Тимофей', surname = 'Опель' WHERE user.id = 3;

-- 2)
/*
 * Почему могут быть ошибки в подзапросе:
 * UPDATE users SET urname = "Smith" ORDER BY id DESC LIMIT 3;
 * можно прочитать в доке по ссылке:
 * https://dev.mysql.com/doc/refman/8.0/en/subquery-restrictions.html
 * SELECT * FROM (SELECT id AS num FROM user ORDER BY id DESC LIMIT 3) AS id;
*/
UPDATE user SET surname = "Smith" WHERE id IN 
(SELECT * FROM (SELECT id AS num FROM user ORDER BY id DESC LIMIT 3) AS id);

