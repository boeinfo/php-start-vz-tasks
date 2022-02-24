<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 9. Cookie. 
 * @link: https://php-start.com/lesson/php-start-theory/cookie
 * 
 * @task 1. Cookie lifetime.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 24.02.2022
 * 
 * @link: https://www.php.net/manual/ru/function.setcookie.php
 * 
 * -----------------------------------------------------
 */

const NOVICE = "Добро пожаловать, новичек!";
const FRIEND = "С возвращением, дружище!"; 
const COOKIE_NAME = "IS_FRIEND";
const COOKIE_TIME = 60*60*10;

$greeting = "";

if(isset($_COOKIE[COOKIE_NAME])){
    //кука установлена
    $greeting = FRIEND;
}
else {
    //кука не установлена
    setcookie(COOKIE_NAME, true, time() + COOKIE_TIME);
    $greeting = NOVICE;
}
?>
<!doctype html>
<html>
    <head>
        <title>l8-t1 cookie</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container">
            <header><h1>Приветствуем!</h1></header>
            <main>
                <p><?php 
                    echo $greeting;
                ?></p>
            </main>
            <footer>
                <span>We are waiting for you at: </span><!--
                --><em>Brest, av. Masherova</em><br>
            </footer>
        </div>
    </body>
</html>
