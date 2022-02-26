<?php
/* -----------------------------------------------------
 * 
 * @course: PHP Start | Theory (by Victor Zinchenko)
 * 
 * @lesson 10. Sessions. 
 * @link: https://php-start.com/lesson/php-start-theory/sessions
 * 
 * @task 1. Example of sessions work.
 * 
 * @author: Oleg Baranchikov (boeinfo@ya.ru)
 * @date: 25.02.2022
 * 
 * @link: https://www.php.net/manual/ru/function.session-start
 * @link: https://www.php.net/manual/ru/reserved.variables.session
 * -----------------------------------------------------
 */

if(isset($_GET["quest3"])) {
    $answ3 = $_GET["quest3"];
} 
else {
    $answ3 = null;
}

session_start();    
$_SESSION["answ3"] = $answ3;
?>
<!doctype html>
<html>
    <head>
        <title>COVID test, page 1</title>
    </head>
    <body>
        <header>
            <h2>Тест на соответствие симптомов инфекции COVID-19</h2> 
        </header>
        <form>
            <label for="quest4">У Вас есть головокружение?</label>
            <fieldset>
                <input type="radio" name="quest4" value="1"  
                       id="quest4" checked>Да, и заметное<br>
                <input type="radio" name="quest4" value="0">Нет, не ощущаю<br>
            </fieldset>
            <br>
            <input formaction="les10-page3.php" formmethod="get" 
                   type="submit" value="prev" />
            <input formaction="les10-result.php" formmethod="get" 
                   type="submit" value="next" />
        </form>
    </body>
</html>
