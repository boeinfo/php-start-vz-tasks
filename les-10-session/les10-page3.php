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

session_start();    
if(isset($_SESSION["USER_ANSWERS"])){
    $user_answers = $_SESSION["USER_ANSWERS"];
} else {
    $user_answers = [];    
}

if(isset($_GET["next"]) OR isset($_GET["prev"])) {
    $user_answers["ans1"] = $_GET["quest1"];
}

echo $user_answers["ans1"];
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
            <label for="quest2">У Вас температура до 37,6 С или выше?</label>
            <fieldset>
                <input type="radio" name="quest1" value="0"  
                       id="quest1" checked>До 37,6 С<br>
                <input type="radio" name="quest1" value="1">Выше 37,6 С<br>
            </fieldset>
            <br>
            <input formaction="les10-page2.php" formmethod="get" 
                   type="submit" value="prev" />
            <input formaction="les10-page4.php" formmethod="get" 
                   type="submit" value="next" />
        </form>
    </body>
</html>
