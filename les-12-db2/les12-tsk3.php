<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 11. DB. 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-1
 * 
 * @task 3. UPDATE statement.
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
    
    $sql = "UPDATE user SET surname = \"Smith\" ". 
           "WHERE id IN ".
           "(SELECT * FROM (".
            "SELECT id AS num FROM user ORDER BY id DESC LIMIT 3) ".
           "AS id);";
    
    $result = mysqli_query($con, $sql);

    if($result) {
        echo "<pre>";
        var_dump($result);
        echo "</pre>";
        echo "<hr>";  
    }
    else {
        echo "Не получается обновить данные".mysqli_error($con);
    }    
}
?>