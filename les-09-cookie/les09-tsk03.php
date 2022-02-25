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

const CN_COUNTER = "count_vis";

if(isset($_COOKIE[CN_COUNTER])){
    $cnt = intval($_COOKIE[CN_COUNTER]);
    $cnt++;
    setcookie(CN_COUNTER, $cnt);
    $info = strval($cnt);
}
else {
    setcookie(CN_COUNTER, 1);
    $info = "1";
}

?>

<!doctype html>
<html>
    <head>
        <title>l9-t2 cookie</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header><h2>Hi!</h2></header>
        <main><p>Have you visited this site: <?php 
            echo "{$info}";
        ?> time.</p><br></main>
        <footer><h3>bay...</h3></footer>
    </body>
</html>
