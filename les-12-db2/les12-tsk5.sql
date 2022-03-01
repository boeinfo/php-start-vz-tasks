/**
 * Author:  Oleg Baranchikov
 * Created: 1 мар. 2022 г.
 */

USE news_site;

SELECT n.h1, n.short_content, n.id FROM news AS n WHERE n.status = '1';
