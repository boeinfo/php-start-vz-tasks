<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 11. DB. 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-1
 * 
 * @task 1. INSERT statement.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 01.03.2022
 * 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-2
 * -----------------------------------------------------
 */

$con = mysqli_connect("localhost", "root", "", "news_site");
mysqli_set_charset($con, "utf8");

if(mysqli_connect_errno()) {
    echo "Ошибка подключения к БД: ".mysqli_connect_error();
} 
else {
    $sql = "INSERT INTO `user` (`name`, `surname`, `email`, `password`, 
        `country`, `city`, `gender`, `birthdate`, `register_date`) 
        VALUES ('Alex', 'Prost', 'prost@gmail.com', 'plumBum', 'USA', 
        'Hollywood', '1', '1982-11-02 23:47:00.000000', CURRENT_TIMESTAMP),
       ('Elen', 'Wice', 'e.wice@protonmail.blr', 'moonlight', 'Belarus', 'Yan', 
        '0', '1992-10-30 04:22:00.000000', CURRENT_TIMESTAMP),
       ('Siri', 'Goolee', 'siri@pisem.net', 'parol', 'India', 'New Diles', 
        '0', '2001-03-05 08:51:00.000000', CURRENT_TIMESTAMP);";
    
    $result = mysqli_query($con, $sql);

//    if(isset($result)) {
//        echo "<pre>";
//        var_dump($result);
//        echo "</pre>";
//        echo "<hr>";
//    }    
}
?>