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


$user_answers = ["answ1" => 1, "answ2" => 0, "answ3" => 0];
session_start();    
$_SESSION["USER_ANSWERS"] = $user_answers;
?>
<!doctype html>
<html>
    <head>
        <title>COVID test, page 1</title>
    </head>
    <body>
        <header>
            <h2>Тест на соответсвие симптомов инфекции COVID-19</h2> 
        </header>
        <form>
            <label for="quest1">Есть ли у Вас ощущение постоянной 
                головной боли?</label>
            <fieldset>
                <input type="radio" name="quest1" value="0"  
                       id="quest1" checked>Нет<br>
                <input type="radio" name="quest1" value="1">Да<br>
            </fieldset>
            <br>
            <input formaction="les10-index.php" formmethod="get" 
                   type="submit" value="prev" disabled />
            <input formaction="les10-page2.php" formmethod="get" 
                   type="submit" value="next" />
        </form>
    </body>
</html>


