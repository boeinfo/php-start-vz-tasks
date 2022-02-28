<?php

## Форма записи запроса

$sql = "INSERT INTO `news_category` "
        . "(`id`, `name`, `description`, `sort_order`, `status`) VALUES "
        . "(NULL, \'ф\', \'ффф\', \'15\', \'1\');";



$sql = "INSERT INTO `user` "
        . "(`name`, `surname`, `email`, `password`, `country`, `city`, "
        . "`gender`, `birthdate`, `register_date`, `last_visit`) "
        . "VALUES (\'Oleg\', \'Baranchikov\', \'boeinfo@ya.ru\', \'loop\', "
        . "\'Belarus\', \'Brest\', \'1\', \'1975-01-22 14:25:00.000000\', "
        . "CURRENT_TIMESTAMP, \'2022-02-01 17:36:52.000000\');";



?>

