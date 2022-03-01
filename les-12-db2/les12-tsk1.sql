/**
 * Author:  Oleg Baranchikov
 * Created: 1 мар. 2022 г.
 */

USE `news_site`;

--ALTER TABLE `user` CHANGE `last_visit` `last_visit` DATETIME NULL;

INSERT INTO `user` (`name`, `surname`, `email`, `password`, `country`, `city`, 
                    `gender`, `birthdate`, `register_date`) 
VALUES ('Alex', 'Prost', 'prost@gmail.com', 'plumBum', 'USA', 'Hollywood', 
'1', '1982-11-02 23:47:00.000000', CURRENT_TIMESTAMP),
       ('Elen', 'Wice', 'e.wice@protonmail.blr', 'moonlight', 'Belarus', 'Yan', 
'0', '1992-10-30 04:22:00.000000', CURRENT_TIMESTAMP),
       ('Siri', 'Goolee', 'siri@pisem.net', 'parol', 'India', 'New Diles', 
'0', '2001-03-05 08:51:00.000000', CURRENT_TIMESTAMP);

