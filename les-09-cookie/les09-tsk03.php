<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 9. Cookie. 
 * @link: https://php-start.com/lesson/php-start-theory/cookie
 * 
 * @task 2. Date and time of the last visit.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 24.02.2022
 * 
 * @link: https://www.php.net/manual/ru/function.setcookie.php
 * 
 * -----------------------------------------------------
 */

const CN_LAST_VIS = "LAST_VIS";

if(isset($_COOKIE[CN_LAST_VIS])){
    $info = $_COOKIE[CN_LAST_VIS];
}
else {
    $info = " ... Oh, it's your first time!";
    setcookie(CN_LAST_VIS, date("d.m.Y H:i:s"));
}


?>

<!doctype html>
<html>
    <head>
        <title>l9-t2 cookie</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header><h2>Hello!</h2></header>
        <main><p>Date and time of the last visit: <?php 
            echo "{$info}";
        ?></p><br></main>
        <footer><h3>Good bay!</h3></footer>
    </body>
</html>
