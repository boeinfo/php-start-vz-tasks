<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 12. DB. 
 * @link: https://php-start.com/lesson/php-start-theory/databases-part-1
 * 
 * @task 5. SELECT statement + PHP.
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
    $sql = "SELECT n.h1, n.short_content, n.id ".
                "FROM news AS n WHERE n.status = '1';";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        echo "Не получается получить данные".mysqli_error($con);
    }    
    /*
    foreach ($result as $val) {
        echo "<h4>".$val['h1']."</h4>";
        echo $val['short_content']."<br>";   
    }
    */
}
?>
<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <title>les12-t5</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
             foreach ($result as $val) {
                echo "<h1>".$val['h1']."</h1>";
                echo "<p>".$val['short_content']."</p>";
                echo "<a href=\"/news/view/{$val['id']}\">Читать далее...</a>";
            }
        ?>
    </body>
</html>
