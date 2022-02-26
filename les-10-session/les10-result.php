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

if(isset($_GET["quest4"])) {
    $answ4 = $_GET["quest4"];
} 
else {
    $answ4 = null;
}

session_start();    
$_SESSION["answ4"] = $answ4;
$answ1 = $_SESSION["answ1"];
$answ2 = $_SESSION["answ2"];
$answ3 = $_SESSION["answ3"];
$_SESSION = array();
session_destroy();

$user_answers = $answ1 + $answ2 + $answ3 + $answ4;
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
            <p>Результат Вашего опроса:</p>
            <p>
                <?php 
                    if($user_answers >= 3) {
                        echo "у Вас есть симптомы заболевания COVID.";
                    }
                    else {
                        echo "вероятнее всего у Вас обычное ОРВИ.";
                    }
                ?>
            </p>
            <input formaction="les10-page4.php" formmethod="get" 
                   type="submit" value="prev" />
            <input formaction="les10-result.php" formmethod="get" 
                   type="submit" value="next" disabled />
        </form>
    </body>
</html>
