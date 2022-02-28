/**
 * Author:  Oleg Baranchikov
 * Created: 28 февр. 2022 г.
 */


USE `news_site`;

START TRANSACTION;

INSERT INTO `news_category` (`name`, `description`, `sort_order`) VALUES 
('КАРЬЕРА', 'Все о карьере в IT', '15'), 
('ФИНАНСЫ', 'Гид по финансовой грамотности', '14'),
('', '', '13'),
('', '', '12'),
('', '', '11'),
('', '', '10'),
('', '', '9'),
('', '', '8'),
('', '', '7'),
('', '', '6'),
('', '', '5'),
('', '', '4'),
('', '', '3');


COMMIT;

