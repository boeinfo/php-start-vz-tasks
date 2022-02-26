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

if(isset($_GET["quest2"])) {
    $answ2 = $_GET["quest2"];
} 
else {
    $answ2 = null;
}

session_start();    
$_SESSION["answ2"] = $answ2;
?>
<!doctype html>
<html>
    <head>
        <title>COVID test, page 3</title>
    </head>
    <body>
        <header>
            <h2>Тест на соответствие симптомов инфекции COVID-19</h2> 
        </header>
        <form>
            <label for="quest3">Вы чувствуете слабость?</label>
            <fieldset>
                <input type="radio" name="quest3" value="1"  
                       id="quest3" checked>Да<br>
                <input type="radio" name="quest3" value="0">Нет<br>
            </fieldset>
            <br>
            <input formaction="les10-page2.php" formmethod="get" 
                   type="submit" value="prev" />
            <input formaction="les10-page4.php" formmethod="get" 
                   type="submit" value="next" />
        </form>
    </body>
</html>
