/**
 * Author:  Oleg Baranchikov
 * Created: 1 мар. 2022 г.
 */

USE `news_site`;

-- 1)
-- SELECT * from news WHERE news.category_id = 13 LIMIT 3;

-- 2)
-- SELECT name, count(*) AS COUNT 
--     FROM user 
--     WHERE name IN ('Siri', 'Tim')
--     GROUP BY name
--     ORDER BY COUNT DESC;

-- 3)
SELECT status AS STATUS, count(*) AS COUNT
    FROM news
    GROUP by status;

